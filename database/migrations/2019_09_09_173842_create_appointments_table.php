<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');

            //FK Specialty
            $table->unsignedBigInteger('specialty_id');
            $table->foreign('specialty_id')->references('id')->on('specialties');
            //FK Doctor
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('users');

            //FK Patient
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('users');

            $table->date('schedule_date');
            $table->time('schedule_time');

            $table->string('type');


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
        Schema::dropIfExists('appointments');
    }
}
