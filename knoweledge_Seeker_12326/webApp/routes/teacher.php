<?php

//Route::get('/home', function () {
//    $users[] = Auth::user();
//    $users[] = Auth::guard()->user();
//    $users[] = Auth::guard('teacher')->user();
//
//    //dd($users);
//
//    return view('teacher.home');
//})->name('home');


use Illuminate\Support\Facades\Schema;

Route::get('/home',[
    'uses' => 'TeacherController@find_drop',
    'as' => 'home'
]);

    Route::get('/question', 'TeacherController@ques_display');
//Route::get('/index', function () {
//    $users[] = Auth::user();
//    $users[] = Auth::guard()->user();
//    $users[] = Auth::guard('teacher')->user();
//
//    //dd($users);
//
//    return view('teacher.index');
//})->name('index');

Route::post('find_student','TeacherController@find_stu');

Route::post('/questions/store',[

    'uses'=>'TeacherController@store',
    'as'  =>'store',
]);
Route::get('/feedback',function (){

    return view('teacher.feedback');

});
Route::get('question','TeacherController@ques_display');

Route::post('/feedback/send',[
    'uses' =>'MailController@send',
    'as' =>'send'

]);
