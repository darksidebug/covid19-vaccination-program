<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screening;
use Validator;

class ScreeningController extends Controller
{
    public function index()
    {
        return view('pages.screening');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'manifest_any_symptoms'           => 'sometimes',
            'symptoms'                        => 'required_if:manifest_any_symptoms,on',
            'not_pregnant'                    => 'sometimes',
            'trimester'                       => 'required_if:not_pregnant,on',
            'have_following_illness'          => 'sometimes',
            'illnesses'                       => 'required_if:have_following_illness,on',
            'deferral'                        => 'sometimes',
            'specify_deferral_text'           => 'required_if:deferral,on'
        ]);

        if($validator->fails())
        {
            return redirect('/screening')->withErrors($validator);
        }

        Screening::create([
            'id'                                                    => '',
            'q1_age'                                                => ($request->age == 'on' ? true : false),
            'q2_severe_allergic'                                    => ($request->alergic_reaction == 'on' ? true : false),
            'q3_food_allergy'                                       => ($request->food_allergy == 'on' ? true : false),
            'q4_if_food_allergy_vaccinator_able_to_monitor_patient' => ($request->vaccinator_monitor_patient == 'on' ? true : false),
            'q5_bleeding_disorder'                                  => ($request->bleeding_history == 'on' ? true : false),
            'q6_if_bleeding_disorder_is_syringe_available'          => ($request->is_syringe_available == 'on' ? true : false),
            'q6_manifest_symptoms'                                  => ($request->manifest_any_symptoms == 'on' ? true : false),
            'q7_if_manifest_symptoms_mention'                       => (empty($request->symptoms) ? '' : implode(', ', $request->symptoms)),
            'q8_exposure_history_to_covid'                          => ($request->no_exposure_covid == 'on' ? true : false),
            'q9_not_previously_treated_for_covid'                   => ($request->not_previously_treated == 'on' ? true : false),
            'q10_not_receive_any_vaccine'                           => ($request->not_receive_vaccine == 'on' ? true : false),
            'q11_not_receive_antibodies_for_covid'                  => ($request->not_receive_convalescent_plasma == 'on' ? true : false),
            'q12_not_pregnant'                                      => ($request->not_pregnant == 'on' ? true : false),
            'q13_if_pregnant_trimester'                             => $request->trimester,
            'q14_not_have_illness'                                  => ($request->have_following_illness == 'on' ? true : false),
            'q15_if_has_illness_select'                             => (empty($request->illnesses) ? '' : implode(', ', $request->illnesses)),
            'q16_not_deferral'                                      => ($request->deferral == 'on' ? true : false),
            'q17_if_deferral_specify'                               => $request->specify_deferral_text,
            'dose'                                                  => ($request->deferral == 'on' ? 1 : 0)
        ]);

        return redirect('/screening')->withSuccess(['msg' => $request->qr.' has '.($request->deferral == 'on' ? 'failed and ' : 'pass and ').'done screening.']);
    }
}
