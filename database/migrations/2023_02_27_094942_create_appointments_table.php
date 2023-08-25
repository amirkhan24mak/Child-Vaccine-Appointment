<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('Id');
            $table->integer('Appointment_no');

            $table->unsignedBigInteger('Hid');
            $table->foreign('Hid')->references('Hid')->on('hospitals');

            $table->unsignedBigInteger('Pid');
            $table->foreign('Pid')->references('Pid')->on('patients');

            $table->unsignedBigInteger('Sid');
            $table->foreign('Sid')->references('Sid')->on('schedule_times');

            $table->boolean('Report');
            $table->boolean('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
