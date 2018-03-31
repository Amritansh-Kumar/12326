<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('student')->user();

    return view('student.home');
})->name('home');

Route::get('/welcome',function (){

    return view('student.welcome');
});

Route::get('/index', [

    'uses' => 'PredictionController@index',
    'as' => 'index'
]);

Route::get('/questions1', function () {
    return view('student.ques');
})->name('question');

Route::get('/questions2', function () {
    return view('student.ques2');
})->name('question2');

Route::post('/questions/store1', [
    'uses' => 'Student_questionController@store',
    'as' => 'store',
]);
Route::post('/questions/store2', [

    'uses' => 'Student_questionController@store2',
    'as' => 'store2',

]);
Route::get('/portfolio', 'StudentController@student_display');

Route::get('/best-after',[
    'uses' => 'PredictionController@find_courses',
    'as' => 'best-after'
]);
Route::get('/discover',[
    'uses' => 'PredictionController@find_discover',
    'as' => 'discover'
]);

