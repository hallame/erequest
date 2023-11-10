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
        Schema::create('transcripts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stu_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->string('ac_year');
            $table->string('ac_level');
            $table->string('mat_number');
            $table->string('exam_type');
            $table->string('field');
            $table->string('speciality');
            $table->string('fiche_inscription');
            $table->text('description');

            // Define foreign key constraints
            $table->foreign('stu_id')->references('id')->on('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transcripts');
    }
};
