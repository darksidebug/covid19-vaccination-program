<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScreeningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screening', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('people');
            $table->boolean('q1_age');
            $table->boolean('q2_severe_allergic');
            $table->boolean('q3_food_allergy');
            $table->boolean('q4_if_food_allergy_vaccinator_able_to_monitor_patient');
            $table->boolean('q5_bleeding_disorder');
            $table->boolean('q6_if_bleeding_disorder_is_syringe_available');
            $table->boolean('q6_manifest_symptoms');
            $table->string('q7_if_manifest_symptoms_mention');
            $table->boolean('q8_exposure_history_to_covid');
            $table->boolean('q9_not_previously_treated_for_covid');
            $table->boolean('q10_not_receive_antibodies_for_covid');
            $table->boolean('q11_not_pregnant');
            $table->string('q12_if_pregnant_trimester');
            $table->boolean('q13_not_have_illness');
            $table->string('q14_if_has_illness_select');
            $table->boolean('q15_not_deferral');
            $table->string('q16_if_deferral_specify');
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
        Schema::dropIfExists('screening');
    }
}
