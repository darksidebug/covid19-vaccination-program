<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'suffix_name',
        'province',
        'municipality',
        'barangay',
        'purok',
        'contact',
        'birth_date',
        'gender',
        'civil_status',
        'category',
        'category_id',
        'civil_id_number',
        'employment_status',
        'philhealth_id_number',
        'pwd_id_number',
        'direct_contact',
        'profession',
        'name_employer',
        'province_employer',
        'municipality_employer',
        'barangay_employer',
        'contact_number_employer',
        'pregnant_status',
        'comorbidity',
        'comorbidity_yes',
        'drug_allergy',
        'drug_allergy_yes',
        'diagnose_covid',
        'date_diagnose_covid_yes',
        'covid_classification',
        'electronic_informed_consent'
    ];
}
