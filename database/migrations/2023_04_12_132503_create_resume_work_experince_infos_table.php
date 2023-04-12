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
        Schema::create('resume_work_experince_infos', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('company');
            $table->string('location');
            $table->date('start_date');
            $table->date('end_date');
            $table->longText('functions_and_achivements');
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
        Schema::dropIfExists('resume_work_experince_infos');
    }
};
