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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stu_id');
            $table->string('stu_firstname');
            $table->string('stu_lastname');
            $table->string('stu_phone');
            $table->string('stu_email');
            $table->string('ac_year');
            $table->string('ac_level');
            $table->string('mat_number');
            $table->string('field');
            $table->string('speciality');
            $table->string('exam_type');
            $table->string('complaint_type');
            $table->string('ecue');
            $table->string('ecue_sub');
            $table->integer('complaint_status');
            $table->text('payment_proof')->nullable();
            $table->text('registration_form'); // Change to text type
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
