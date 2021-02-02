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
            $table->firstname();
            $table->middlename();
            $table->lastname();
            $table->suffix();
            $table->province();
            $table->municipality();
            $table->barangay();
            $table->street();
            $table->contact();
            $table->bdate();
            $table->sex();
            $table->civil_status();
            $table->category();
            $table->category_id();
            $table->civil_id_number();
            $table->employment_status();
            $table->philhealth_id();
            $table->pwd_id_number();
            $table->direct_contact();
            $table->profession();
            $table->name_employer();
            $table->municipality_employer();
            $table->barangay_employer();
            $table->contact_employer();
            $table->pregnant_status();

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
