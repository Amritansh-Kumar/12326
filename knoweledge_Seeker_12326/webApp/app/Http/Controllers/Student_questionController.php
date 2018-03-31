<?php

namespace App\Http\Controllers;

use App\Student_Question;
use App\Student;
use Illuminate\Http\Request;
use Auth;

class Student_questionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       // dd($request->all());
        $this->validate($request,[
            'ques_S_drop_1'=>'required',
            'ques_S_drop_2'=>'required',
            'ques_S_drop_3'=>'required',
            'ques_S_drop_4'=>'required',
            'ques_S_drop_5'=>'required',
            'ques_S_drop_6'=>'required',
            'ques_S_drop_7'=>'required',
            'ques_S_drop_8'=>'required',
            'ques_S_drop_9'=>'required',
            'ques_S_drop_10'=>'required',
        ]);

        /*--------------*/
         $id= Auth::user()->id;
         $sem = Auth::user()->cuurent_sem;

        $student_ques = Student::find($id);
        // dd($student_ques);

        $student_ques->ques_S_drop_1 = $request->ques_S_drop_1;
        $student_ques->ques_S_drop_2 = $request->ques_S_drop_2;
        $student_ques->ques_S_drop_3 = $request->ques_S_drop_3;
        $student_ques->ques_S_drop_4 = $request->ques_S_drop_4;
        $student_ques->ques_S_drop_5 = $request->ques_S_drop_5;
        $student_ques->ques_S_drop_6 = $request->ques_S_drop_6;
        $student_ques->ques_S_drop_7 = $request->ques_S_drop_7;
        $student_ques->ques_S_drop_8 = $request->ques_S_drop_8;
        $student_ques->ques_S_drop_9 = $request->ques_S_drop_9;
        $student_ques->ques_S_drop_10 = $request->ques_S_drop_10;

        $student_ques->save();



//         $question = Student_Question::create([
//
////             'student_id' => $student->student_id,
////             'sem' => $student->sem,
//
//             'student_id'=>$student,
//             'sem' => $sem,
//             'question_1' => $request->input('question_1'),
//             'question_2' => $request->input('question_2'),
//             'question_3' => $request->input('question_3'),
//             'question_4' => $request->input('question_4'),
//             'question_5' => $request->input('question_5'),
//             'question_6' => $request->input('question_6'),
//             'question_7' => $request->input('question_7'),
//             'question_8' => $request->input('question_8'),
//             'question_9' => $request->input('question_9'),
//             'question_10' => $request->input('question_10'),
//
//         ]);

//         $question = new Student_Question();
//
//         $question->student_id= '1613007';
//         $question->sem ='4';


        return redirect(route('student.question2'));

        //
    }

    public function store2(Request $request)
    {
        $this->validate($request,[
            'ques_S_per1'=>'required',
            'ques_S_per2'=>'required',
            'ques_S_per3'=>'required',
            'ques_S_per4'=>'required',
            'ques_S_per5'=>'required',
            'ques_S_per6'=>'required',
            'ques_S_per7'=>'required',
            'ques_S_per8'=>'required',
            'ques_S_per9'=>'required',
            'ques_S_per10'=>'required',
        ]);

        $id = Auth::user()->id;
        $sem = Auth::user()->cuurent_sem;

        $student_ques = Student::find($id);
         //dd($student_ques);

        $student_ques->ques_S_per1 = $request->ques_S_per1;
        $student_ques->ques_S_per2 = $request->ques_S_per2;
        $student_ques->ques_S_per3 = $request->ques_S_per3;
        $student_ques->ques_S_per4 = $request->ques_S_per4;
        $student_ques->ques_S_per5 = $request->ques_S_per5;
        $student_ques->ques_S_per6 = $request->ques_S_per6;
        $student_ques->ques_S_per7 = $request->ques_S_per7;
        $student_ques->ques_S_per8 = $request->ques_S_per8;
        $student_ques->ques_S_per9 = $request->ques_S_per9;
        $student_ques->ques_S_per10 = $request->ques_S_per10;

        $student_ques->save();
        return redirect()->route('student.index');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
