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
        Schema::create('patient', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->Enum('sex',['Male', 'Female']);
            $table->string('address');
            // $table->Enum('Purpose', ['Pediatrician', 'Orthodontist', 'Dermatologists']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient');
    }
};
