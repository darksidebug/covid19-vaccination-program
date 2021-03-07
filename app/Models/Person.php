<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vaccinated;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'qr_code',
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
        'category_id_number',
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
        'allergy',
        'allergy_yes',
        'diagnose_covid',
        'date_diagnose_covid_yes',
        'covid_classification',
        'electronic_informed_consent'
    ];

    public function vaccinated(){
        return $this->hasOne(Vaccinated::class);
    }
}
