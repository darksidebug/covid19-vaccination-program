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
            $table->string("firstname");
            $table->string('middlename');
            $table->string('lastname');
            $table->string('suffix');
            $table->string('province');
            $table->string('municipality');
            $table->string('barangay');
            $table->string('street');
            $table->string('contact');
            $table->date('birth_date');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('category');
            $table->string('category_id');
            $table->string('civil_id_number');
            $table->string('employment_status');
            $table->string('philhealth_id');
            $table->string('pwd_id_number');
            $table->string('direct_contact');
            $table->string('profession');
            $table->string('name_employer');
            $table->string('province_employer');
            $table->string('municipality_employer');
            $table->string('barangay_employer');
            $table->string('contact_employer');
            $table->string('pregnant_status');
            $table->string('');
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
