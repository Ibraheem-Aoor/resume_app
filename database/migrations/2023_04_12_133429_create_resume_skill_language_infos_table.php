<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_skill_language_infos', function (Blueprint $table) {
            $table->id();
            $table->string('skill');
            $table->string('language');
            $table->string('course');
            $table->unsignedBigInteger('resume_id');
            $table->foreign('resume_id')->references('id')->on('resumes')->onDelete('cascade');
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
        Schema::dropIfExists('resume_skill_language_infos');
    }
};
