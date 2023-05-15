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
      Schema::create('profiles', function (Blueprint $table) {
        $table->id();
        $table->string('fname');
        $table->string('lname');
        $table->enum('gender', ['male', 'female', 'other'])->nullable();
        $table->date('dob')->nullable();
        $table->longText('skill')->nullable();
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('profiles');
    }
};
  