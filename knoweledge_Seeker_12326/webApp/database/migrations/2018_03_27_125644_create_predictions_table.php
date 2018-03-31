<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predictions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('student_no');
            $table->string('branch');
            $table->float('predicted_marks','2');
            $table->string('predicted_drop');
            $table->string('personality');
            $table->string('recommended_course_1');
            $table->string('recommended_course_2');
            $table->string('recommended_course_3');
            $table->string('recommended_course_4');
            $table->string('recommended_course_5');
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
        Schema::dropIfExists('predictions');
    }
}
