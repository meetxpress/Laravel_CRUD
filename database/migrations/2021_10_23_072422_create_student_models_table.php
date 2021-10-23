<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentModelsTable extends Migration {    
    public function up() {
        Schema::create('student_models', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('address');
            $table->string('phNo');
            $table->timestamps();
        });
    }
   
    public function down() {
        Schema::dropIfExists('student_models');
    }
}