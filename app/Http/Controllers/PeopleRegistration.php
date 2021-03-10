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
            'qr_code' => 'required|unique:people,qr_code',
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
            'category_id_number' => 'required',
            'employment_status' => 'required',
            'direct_contact' => 'required',
            'profession' => 'required',
            'pregnant_status' => 'required_if:gender,==,Female',
            'name_employer' => 'required',
            'province_employer' => 'required',
            'municipality_employer' => 'required',
            'barangay_employer' => 'required',
            'contact_number_employer' => 'required',
            'comorbidity' => 'required',
            'comorbidity_yes' => 'required_if:comorbidity, ==, Yes',
            'allergy' => 'required',
            'allergy_yes' => 'required_if:allergy, == , Yes',
            'diagnose_covid' => 'required',
            'date_diagnose_covid_yes' => 'required_if:diagnose_covid, == , Yes',
            'covid_classification' => 'required_if:diagnose_covid, == , Yes',
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
