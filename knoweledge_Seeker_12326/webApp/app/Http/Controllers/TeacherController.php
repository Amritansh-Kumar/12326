<?php

namespace App\Http\Controllers;

use App\Prediction;
use App\Student;
use App\Teacher;
use App\Teacher_question;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TeacherController extends Controller
{


    public function find_stu(Request $request)
    {

        $predicated = 2;
        $data = Student::where('student_no', $request->st_id)
            ->first();
        if ($data != null) {
            if (Schema::hasTable('predictions')) {
                $predicated = DB::table('predictions')
                    ->where('student_no', $request->st_id)
                    ->first();
            }
            return view('teacher.graph')
                ->with('data', $data)
                ->with('predicated', $predicated);
        } else {
            return view('errors.404');
        }
    }

    public function ques_display()
    {

        return view('teacher.question');
    }

    public function store(Request $request)
    {

        $this->validate($request, [

            'question_1' => 'required',
            'question_2' => 'required',
            'question_3' => 'required',
            'question_4' => 'required',
            'question_5' => 'required',
            'question_6' => 'required',
            'question_7' => 'required',
            'question_8' => 'required',
        ]);

        $student_id = $request->input('student_no');

        $teacher = Auth::user()->teacher_id;

        $student_ques = Student::where('student_no', $student_id)
            ->first();


        $student_ques->ques_T_feed_1 = $request->question_1;
        $student_ques->ques_T_feed_2 = $request->question_2;
        $student_ques->ques_T_feed_3 = $request->question_3;
        $student_ques->ques_T_feed_4 = $request->question_4;
        $student_ques->ques_T_feed_5 = $request->question_5;
        $student_ques->ques_T_feed_6 = $request->question_6;
        $student_ques->ques_T_feed_7 = $request->question_7;
        $student_ques->ques_T_feed_8 = $request->question_8;


        $student_ques->save();

        return redirect(route('teacher.home'));

    }

    public function find_drop()
    {
        $prediction_drop2 = "";
        $prediction_drop = "";
        $teacher = Auth::user()->id;
        $teacher_id = Teacher::find($teacher);

        $student = Student::where('branch', $teacher_id->branch)
            ->first();
        $i = ($student->current_sem) - 1;
        $j = $i - 2;

        if (Schema::hasTable('predictions')) {
            $prediction_drop = Prediction::where('predicted_drop', 1)
                ->get();
            $prediction_drop2 = Prediction::where('predicted_drop', 1)
                ->count();
        }
        $student_drop = Student::whereRaw('(sem_' . $i . '_marks-sem_' . $j . '_marks)<-25')
            ->orWhere('sem_' . $i . '_marks', '<', 40)
            ->get();
        $student_drop2 = Student::whereRaw('(sem_' . $i . '_marks-sem_' . $j . '_marks)<-25')
            ->orWhere('sem_' . $i . '_marks', '<', 40)
            ->count();
        $topper = DB::table('students')
            ->orderBy('B_tech', 'desc')
            ->take(5)
            ->get();

        return view('teacher.home')
            ->with('student_drop', $student_drop)
            ->with('student_drop2', $student_drop2)
            ->with('prediction_drop', $prediction_drop)
            ->with('prediction_drop2', $prediction_drop2)
            ->with('topper', $topper);

    }

}
