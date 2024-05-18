<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('education_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('institution')->nullable();
            $table->string('degree')->nullable();
            $table->string('field_of_study')->nullable();
            $table->integer('graduation_year')->nullable();
            $table->string('gpa')->nullable();
            $table->string('honors_awards')->nullable();
            $table->string('activities_clubs')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('education_details');
    }
}
