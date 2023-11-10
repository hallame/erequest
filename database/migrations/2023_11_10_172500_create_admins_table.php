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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->nullable();
            $table->string('username',50)->unique();
            $table->string('email',100)->unique();
            $table->tinyInteger('status')->default('1')->comment('1=active, 0=deactivate');
            $table->string('password');
            $table->string('type');
            $table->string('image',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
