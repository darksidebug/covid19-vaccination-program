<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\VaccinatedInfo;
use App\Models\Vaccine;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VaccinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $persons = Person::all();
        $array_of_person = [];
        foreach($persons as $person)
        {

            if(!$person->vaccinatedinfo)
            {
                array_push($array_of_person, $person);
            }
        }
        // dd($array_of_person);
        return view('pages.vaccinator')->with(['person' => $array_of_person]);
    }

   public function withId($id)
   {
        $person =  Person::findOrFail($id);
        $vaccine = Vaccine::all();

        return view('pages.vaccinator_vaccine')->with(['person' => $person, 'vaccine' => $vaccine]);
   }


   public function store(Request $request)
   {
        $validator = Validator::make($request->all(),[
            'lot_number' => 'required',
            'batch_number' => 'required',
            'vaccine_manufacturer' => 'required'
        ]);

        if($validator->fails())
        {
            return back()->with(['errors' => $validator->errors()]);
        }


        VaccinatedInfo::create([
            'person_id' => $request->person_id,
            'lot_number' => $request->lot_number,
            'batch_number' => $request->batch_number,
            'vaccine_manufacturer' => $request->vaccine_manufacturer,
            'vaccinator_id' => Auth::user()->id,
        ]);

        return redirect(route('vaccinator_dashboard'))->with(['person' => Person::find($request->person_id)]);
   }

}
