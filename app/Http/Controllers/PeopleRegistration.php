<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\Validator;



class PeopleRegistration extends Controller
{
    //
    public function register(Request $request){
        $validation = Validator::make($request->all(),[
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'province' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            'contact' => 'required|numeric',
            'birth_date' => 'required|date',
            'gender' => 'required',
            'civil_status' => 'required',
            'category' => 'required',
            'category_id' => 'required',
            'civil_id_number' => 'required',
            'employment_status' => 'required',
            'philhealth_id_number' => 'required',
            'direct_contact' => 'required',
            'profession' => 'required',
            'name_employer' => 'required',
            'province_employer' => 'required',
            'municipality_employer' => 'required',
            'barangay_employer' => 'required',
            'contact_number_employer' => 'required',
            'pregnant_status' => 'required',
            'comorbidity' => 'required',
            'drug_allergy' => 'required',
            'diagnose_covid' => 'required',
            'electronic_informed_consent' => 'required'
        ]);

        if($validation->fails()){
            // return response()->json($validation->messages());
            return response()->json(['status'=> 'error','errors' => $validation->errors()]);
        }

        Person::create($request->all());

        return response()->json(['status' => 'success']);

    }
}
