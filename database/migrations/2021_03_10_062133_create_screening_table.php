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
            $table->boolean('q2_severe_allergic')->default(false);
            $table->boolean('q3_food_allergy')->default(false);
            $table->boolean('q4_if_food_allergy_vaccinator_able_to_monitor_patient')->default(false);
            $table->boolean('q5_bleeding_disorder')->default(false);
            $table->boolean('q6_if_bleeding_disorder_is_syringe_available')->default(false);
            $table->boolean('q6_manifest_symptoms')->default(false);
            $table->string('q7_if_manifest_symptoms_mention');
            $table->boolean('q8_exposure_history_to_covid')->default(false);
            $table->boolean('q9_not_previously_treated_for_covid')->default(false);
            $table->boolean('q10_not_receive_antibodies_for_covid')->default(false);
            $table->boolean('q11_not_receive_any_vaccine')->default(false);
            $table->boolean('q12_not_pregnant')->default(false);
            $table->string('q13_if_pregnant_trimester');
            $table->boolean('q14_not_have_illness')->default(false);
            $table->string('q15_if_has_illness_select');
            $table->boolean('q16_deferral')->default(false);
            $table->string('q17_if_deferral_specify');
            $table->tinyInteger('dose');
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
