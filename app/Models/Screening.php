<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'q1_age',
        'q2_severe_allergic',
        'q3_food_allergy',
        'q4_if_food_allergy_vaccinator_able_to_monitor_patient',
        'q5_bleeding_disorder',
        'q6_if_bleeding_disorder_is_syringe_available',
        'q6_manifest_symptoms',
        'q7_if_manifest_symptoms_mention',
        'q8_exposure_history_to_covid',
        'q9_not_previously_treated_for_covid',
        'q10_not_receive_antibodies_for_covid',
        'q11_not_receive_any_vaccine' ,
        'q12_not_pregnant',
        'q13_if_pregnant_trimester',
        'q14_not_have_illness',
        'q15_if_has_illness_select',
        'q16_deferral',
        'q17_if_deferral_specify',
        'dose'
    ];
}
