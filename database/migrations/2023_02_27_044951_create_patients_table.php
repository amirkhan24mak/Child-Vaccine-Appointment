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
        Schema::create('patients', function (Blueprint $table) {
            $table->id('Pid');
            $table->string('Pname',30);
            $table->integer('Pphone');
            $table->string('Pimag');
            $table->string('Paddress',80);
            $table->string('Pgender',10);
            $table->string('Page',10);
            $table->string('Pemail',30);
            $table->string('Ppassword',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
