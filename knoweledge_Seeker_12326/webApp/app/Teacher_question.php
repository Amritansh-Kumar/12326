<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Teacher_question extends Model
{
    use Notifiable;

    protected $fillable = [
        'student_id', 'sem', 'teacher_id', 'question_1', 'question_2', 'question_3', 'question_4', 'question_5', 'question_6', 'question_7', 'question_8',
    ];
    //
}
