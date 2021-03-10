<?php

namespace App\Http\Controllers;

use App\Models\Consent;
use App\Models\CounselledLocation;
use App\Models\Person;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CounselingController extends Controller
{

    public function storeSheet(Request $request)
    {
        $consent=0;

        if($request->consent==="on")
        {
            $consent=1;
        }

        Consent::create([
            'person_id'=>$request->person_id,
            'consent'=>$consent,
            'reason'=>$request->reason,
            'dose'=>$request->dose
        ]);
        

        $person=Person::find($request->person_id);
        $person->status->status='2-'.$request->dose;
        $person->status->save();
     
        $loc=CounselledLocation::create([
            'person_id'=>$person->id,
            'municipality'=>Auth::user()->municipality,
            'facility'=>Auth::user()->name_of_facility
        ]);

        
        return view('pages.counseling-sheet-success');
    }

    public function sheet(Request $request)
    {
        if(!$request->id){
            abort(403,'Direct access not allowed');
        }

        $person=Person::find($request->id);
        $isFirstDose=$person->status->isFirstDose();
       
        $dose=$isFirstDose?1:2;

        return view('pages.counseling-sheet',[
            'person_id'=>$request->id,
            'dose'=>$dose
        ]);
    }
    public function index()
    {

        $statuses=Status::where('status','1-1')
                        ->orWhere('status','1-2')
                        ->get();
        
       $personsForCounseling=[];

       foreach($statuses as $status){  
           array_push( $personsForCounseling,$status->person);
       }

        return view('pages.counseling',[
            'for_counseling'=>$personsForCounseling
        ]);
    }
}
