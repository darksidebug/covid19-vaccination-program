<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('qr_code');
            $table->string("first_name");
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('suffix_name')->nullable();
            $table->string('province');
            $table->string('municipality');
            $table->string('barangay');
            $table->string('purok');
            $table->string('contact');
            $table->date('birth_date');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('category');
            $table->string('category_id');
            $table->string('category_id_number');
            $table->string('employment_status');
            $table->string('philhealth_id_number')->nullable();
            $table->string('pwd_id_number')->nullable();
            $table->string('direct_contact');
            $table->string('profession');
            $table->string('name_employer');
            $table->string('province_employer');
            $table->string('municipality_employer');
            $table->string('barangay_employer');
            $table->string('contact_number_employer');
            $table->string('pregnant_status')->nullable();
            $table->string('comorbidity');
            $table->string('comorbidity_yes')->nullable();
            $table->string('allergy');
            $table->string('allergy_yes')->nullable();
            $table->string('diagnose_covid');
            $table->date('date_diagnose_covid_yes')->nullable();
            $table->string('covid_classification')->nullable();
            $table->string('electronic_informed_consent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
