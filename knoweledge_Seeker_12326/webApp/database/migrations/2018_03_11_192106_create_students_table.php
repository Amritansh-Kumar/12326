<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('Name');
            $table->string('Father')->default('1');
            $table->integer('roll_no')->default('1');
            $table->integer('student_no')->unique();
            $table->string('branch')->default('1');
            $table->string('year')->default('1');
            $table->string('section')->default('1');
            $table->integer('current_sem');
            $table->string('DOB')->default('1');
            $table->string('category')->default('1');
            $table->string('hostler')->default('1');
            $table->string('Addmission_mod')->default('1');
            $table->integer('contact')->default('1');
            $table->integer('parent_contact')->default('1');
            $table->string('address')->default('1');
            $table->string('email')->unique();
            $table->string('10th%')->default('1');
            $table->string('12th%')->default('1');
            $table->string('B_tech%')->default('1');
            $table->string('sem_1_marks')->default('1');;
            $table->string('sem_1_attendance')->default('1');
            $table->string('sem_2_marks')->default('1');
            $table->string('sem_2_attendance')->default('1');
            $table->string('sem_3_marks')->default('1');
            $table->string('sem_3_attendance')->default('1');
            $table->string('sem_4_marks')->default('1');
            $table->string('sem_4_attendance')->default('1');
            $table->string('sem_5_marks')->default('1');
            $table->string('sem_5_attendance')->default('1');
            $table->string('sem_6_marks')->default('1');;
            $table->string('sem_6_attendance')->default('1');
            $table->string('sem_7_marks')->default('1');
            $table->string('sem_7_attendance')->default('1');
            $table->string('sem_8_marks')->default('1');
            $table->string('sem_8_attendance')->default('1');
            $table->string('ques_s_drop_1')->default('1');
            $table->string('ques_s_drop_2')->default('1');
            $table->string('ques_s_drop_3')->default('1');
            $table->string('ques_s_drop_4')->default('1');
            $table->string('ques_s_drop_5')->default('1');
            $table->string('ques_s_drop_6')->default('1');
            $table->string('ques_s_drop_7')->default('1');
            $table->string('ques_s_drop_8')->default('1');
            $table->string('ques_s_drop_9')->default('1');
            $table->string('ques_s_drop_10')->default('1');
            $table->string('ques_S_per1')->default('1');
            $table->string('ques_S_per2')->default('1');
            $table->string('ques_S_per3')->default('1');
            $table->string('ques_S_per4')->default('1');
            $table->string('ques_S_per5')->default('1');
            $table->string('ques_S_per6')->default('1');
            $table->string('ques_S_per7')->default('1');
            $table->string('ques_S_per8')->default('1');
            $table->string('ques_S_per9')->default('1');
            $table->string('ques_S_per10')->default('1');
            $table->string('ques_T_feed_1')->default('1');
            $table->string('ques_T_feed_2')->default('1');
            $table->string('ques_T_feed_3')->default('1');
            $table->string('ques_T_feed_4')->default('1');
            $table->string('ques_T_feed_5')->default('1');
            $table->string('ques_T_feed_6')->default('1');
            $table->string('ques_T_feed_7')->default('1');
            $table->string('ques_T_feed_8')->default('1');
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('students');
    }
}
