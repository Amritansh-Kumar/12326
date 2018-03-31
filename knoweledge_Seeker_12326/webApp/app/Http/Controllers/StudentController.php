<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function student_display(){
        $student= Auth::user()->student_no;

        $data = Student::where('student_no', $student)->first();

        return view('student.portfolio')
            ->with('data',$data);
    }
    //
}
