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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('mat_number');
            $table->string('password');
            $table->string('image',100)->nullable();
            $table->tinyInteger('status')->default('1')->comment('1=active, 0=deactivate');
            $table->string('reset_code');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('secret-key');
            $table->string('identifier');
            $table->string('google_id');
            $table->unsignedBigInteger('stu_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
