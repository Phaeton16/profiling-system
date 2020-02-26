<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('mname');
            $table->unsignedBigInteger('gender_id');
            $table->date('birth_date');
            $table->unsignedBigInteger('student_id_number');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('level_id');
            $table->timestamps();

            $table->foreign('gender_id')
                ->references('id')
                ->on('genders');
            
            $table->foreign('course_id')
                ->references('id')
                ->on('courses');
            
            $table->foreign('level_id')
                ->references('id')
                ->on('levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schemma::table('students', function(Blueprint $table) {
        //     $table->dropForeign(['gender_id', 'course_id', 'level_id']);
        // });
        Schema::dropIfExists('students');
    }
}
