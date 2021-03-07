<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RecordsController extends Controller
{
    //
    public function getrecords(Request $request){
        $validate = Validator::make($request->all(),[
            'table-name' => 'required',
            'table-municipality' => 'required'
        ]);

        if($validate->fails()){
            return response()->json(['status' => 'error', 'errors' => $validate->errors()]);
        }

        if($request->input('table-name') === 'User')
        {
            return response()->json(['data' => $this->usersRecords($request->input('table-municipality'))]);
        }else
        {
            return response()->json(['data'=> $this->vaccinatedRecords($request->input('table-municipality'))]);
        }
    }

    public function vaccinatedRecords($municipality){
        $users = DB::table('people')
                    ->select(DB::raw('people.qr_code, people.first_name, people.last_name,people.middle_name, people.suffix_name, people.province, people.municipality, people.barangay, people.purok, people.contact, people.birth_date, people.gender, people.civil_status, people.category, people.category_id, people.category_id_number, people.employment_status, people.philhealth_id_number, people.pwd_id_number, people.direct_contact, people.profession, people.name_employer, people.province_employer, people.municipality_employer, people.barangay_employer, people.contact_number_employer, people.pregnant_status, people.comorbidity, people.comorbidity_yes, people.allergy, people.allergy_yes, people.diagnose_covid, people.date_diagnose_covid_yes, people.covid_classification, people.electronic_informed_consent, users.username, users.user_type, vaccinateds.created_at'))
                    ->join('vaccinateds', 'people.id', '=', 'vaccinateds.people_id')
                    ->join('users', 'vaccinateds.vaccinator_id', '=', 'users.id')
                    ->where('people.municipality','=',$municipality)
                    ->get();

        return $users;
    }

    public function usersRecords($municipality){
        $vaccinator = DB::table('users')
                        ->select('firstname', 'lastname', 'username', 'user_type', 'municipality')
                        ->where('municipality', '=', $municipality)
                        ->get();

        return $vaccinator;
    }

}
