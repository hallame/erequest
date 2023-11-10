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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stu_id');
            $table->string('ac_year');
            $table->string('ac_level');
            $table->string('mat_number');
            $table->string('exam_type');
            $table->string('field');
            $table->string('speciality');
            $table->string('firstname'); 
            $table->string('lastname');  
            $table->string('email');    
            $table->string('phone');   
            $table->text('description');
            $table->integer('certificate_status');
            $table->string('bulletin1')->nullable(); // Bulletin 1 path
            $table->string('bulletin2')->nullable(); // Bulletin 2 path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
