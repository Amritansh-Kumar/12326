<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AluminiContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumini_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_no');
            $table->string('al_name_1');
            $table->string('al_contact_1');
            $table->string('al_email_1');
            $table->string('al_name_2');
            $table->string('al_contact_2');
            $table->string('al_email_2');
            $table->string('al_name_3');
            $table->string('al_contact_3');
            $table->string('al_email_3');
            $table->string('al_name_4');
            $table->string('al_contact_4');
            $table->string('al_email_4');
            $table->string('al_name_5');
            $table->string('al_contact_5');
            $table->string('al_email_5');
            $table->timestamps();
        });

        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
