<?php

namespace App;

use App\Notifications\StudentResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Name','Father','student_no', 'email', 'password','current_sem','ques_S_drop_1','ques_S_drop_2','ques_S_drop_3','ques_S_drop_4','ques_S_drop_5',
        'ques_S_drop_6','ques_S_drop_7','ques_S_drop_8','ques_S_drop_9','ques_S_drop_10',
        'ques_S_per1','ques_S_per2','ques_S_per3','ques_S_per4','ques_S_per5','ques_S_per6','ques_S_per7','ques_S_per8','ques_S_per9','ques_S_per10',
        'ques_T_feed_1','ques_T_feed_2','ques_T_feed_3','ques_T_feed_4','ques_T_feed_5','ques_T_feed_6','ques_T_feed_7','ques_T_feed_8',
    ];

    public function student_question()
    {
        return $this->hasMany('App\Student_Question');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new StudentResetPassword($token));
    }
}
