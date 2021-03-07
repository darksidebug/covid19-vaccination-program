<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinatedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccinateds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('people_id');
            $table->unsignedBigInteger('vaccinator_id');
            $table->timestamps();
            $table->foreign('people_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('vaccinator_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccinateds');
    }
}
