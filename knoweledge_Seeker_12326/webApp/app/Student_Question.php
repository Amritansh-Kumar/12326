<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Student_Question extends Model
{

    use Notifiable;

    protected $fillable = [

        'student_id','sem','question_1','question_2','question_3','question_4','question_5','question_6','question_7','question_8','question_9','question_10'

    ];


    public function student()
    {
        return $this->belongsToMany('App\Student');
    }

}
