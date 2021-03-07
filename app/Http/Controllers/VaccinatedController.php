<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Vaccinated;

class VaccinatedController extends Controller
{
    //
    public function store(Request $request){
        // if(!Auth::check()){
        //     return response()->json(['status' => 'error' , 'errors' => Auth::check()]);
        // }

        // Validation
        $validate = Validator::make($request->all(), [
            'qr_code' => 'required'
        ]);
        if($validate->fails()){
            return response()->json(['status' => 'error', 'errors' => $validate->errors()]);
        }
        // End of Validation


        $qrcode = DB::table('people')->where('qr_code' , $request->input('qr_code'))->get();
        if(count($qrcode) == 0){
            return response()->json(['status' => 'error', 'errors' => 'Qr Code is not registered']);
        }

        $qrcode_municipality = DB::table('people')->where('municipality', $request->input('municipality-vaccination'))->get();
        if(count($qrcode_municipality) == 0){
            return response()->json(['status' => 'error', 'errors' => 'Qr Code holder address (municipality) should be the same with the Municipality']);
        }

        // return response()->json(['message' => $qrcode[0]->id]);

        Vaccinated::create([
            'people_id' => $qrcode[0]->id,
            'vaccinator_id' => $request->input('users_id')
        ]);

        return response()->json(['status' => 'success']);
    }


}
