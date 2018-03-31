<?php

namespace App\Http\Controllers;

use App\Prediction;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PredictionController extends Controller
{
    /**
     * @return mixed
     */
    public function find_att()
    {

        $student = Auth::user()->id;
        $student_id = Student::find($student);

        switch ($student_id->current_sem) {
            case 1:
                $attendence[0] = $student_id->sem_1_attendance;
                break;
            case 2:
                $attendence[1] = $student_id->sem_1_attendance;
                $attendence[0] = $student_id->sem_2_attendance;
                break;
            case 3:
                $attendence[0] = $student_id->sem_3_attendance;
                $attendence[1] = $student_id->sem_2_attendance;
                break;
            case 4:
                $attendence[0] = $student_id->sem_4_attendance;
                $attendence[1] = $student_id->sem_3_attendance;
                break;
            case 5:
                $attendence[0] = $student_id->sem_5_attendance;
                $attendence[1] = $student_id->sem_4_attendance;
                break;
            case 6:
                $attendence[0] = $student_id->sem_6_attendance;
                $attendence[1] = $student_id->sem_5_attendance;
                break;
            case 7:
                $attendence[0] = $student_id->sem_7_attendance;
                $attendence[1] = $student_id->sem_6_attendance;
                break;
            case 8:
                $attendence[0] = $student_id->sem_8_attendance;
                $attendence[1] = $student_id->sem_7_attendance;
                break;
        }
        return $attendence;
    }

    public function find_max()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);
        $max = DB::table('students')
            ->where('year', $student_id->year)
            ->where('section', $student_id->section)
            ->orderBy('B_tech', 'desc')
            ->take(1)
            ->get();
        return $max;
    }

    public function find_Avg()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);
        for ($i = 1; $i <= $student_id->current_sem; $i++)
        {
            $avg[$i] = DB::table('students')
                ->where('year', $student_id->year)
                ->where('section', $student_id->section)
                ->avg('sem_' . $i . '_marks');
            $avg2[$i] = round($avg[$i], 2);
        }
        return $avg2;
    }
    public function find_pre_avg()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);
        $i = ($student_id->cureent_sem)-1;
        $last_semester = DB::table('students')
               ->where('student_no',$student_id->student_no)
               ->select('sem_'.$i.'_marks')
               ->get();
    }

    public function find_Avg_att()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);
        for ($i = 1; $i <= $student_id->current_sem; $i++) {
            $avg[$i] = DB::table('students')
                ->where('year', $student_id->year)
                ->where('section', $student_id->section)
                ->avg('sem_' . $i . '_attendance');
            $avg2[$i] = round($avg[$i], 2);
        }
        return $avg2;
    }

    public function find_pred()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);
        $prediction = DB::table('predictions')
            ->where('student_no',$student_id->student_no)
            ->first();
        return $prediction;
    }
    public function find_grade()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);
        $prediction = DB::table('predictions')
            ->where('student_no',$student_id->student_no)
            ->first();

        if ($student_id->B_tech > 80) {
            $grade[0] = 'A+';
        } elseif ($student_id->B_tech > 70) {
            $grade[0] = 'A';
        } elseif ($student_id->B_tech > 60) {
            $grade[0] = 'B';
        } else {
            $grade[0] = 'C';
        }
        /*----------------*/
        if ($prediction->predicted_marks > 80) {
            $grade[1] = 'A+';
        } elseif ($prediction->predicted_marks> 70) {
            $grade[1] = 'A';
        } elseif ($prediction->predicted_marks > 60) {
            $grade[1] = 'B';
        } else {
            $grade[1] = 'C';
        }
        return $grade;
    }
    public function find_rank()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);
        $prediction = DB::table('predictions')
            ->where('student_no',$student_id->student_no)
            ->first();

        $rank[0] = Student::where('year', $student_id->year)
            ->where('branch', $student_id->branch)
            ->where('B_tech', '>=', $student_id->B_tech)
            ->count();
        $rank[1] = Prediction::where('branch',$student_id->branch)
            ->where('predicted_marks','>=',$prediction->predicted_marks)
            ->count();
        return $rank;
    }
    public function percentile()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);
        $prediction = DB::table('predictions')
            ->where('student_no',$student_id->student_no)
            ->first();

        $rank[0] = Student::where('year', $student_id->year)
            ->where('branch', $student_id->branch)
            ->where('B_tech', '<=', $student_id->B_tech)
            ->count();
        $total = Student::where('year', $student_id->year)
            ->where('branch', $student_id->branch)
            ->count();
        $percentile[0]=round(($rank[0]*100)/$total,1);

        $rank[1] = Prediction::where('branch',$student_id->branch)
            ->where('predicted_marks','<=',$prediction->predicted_marks)
            ->count();
        $percentile[1] = round(($rank[1]*100)/$total,1);

        return $percentile;

    }
    public function find_grade_graph()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);

        $grade[0] = DB::table('students')
               ->where('branch',$student_id->branch)
               ->where('year',$student_id->year)
               ->whereBetween('B_tech',[80,100])
               ->count();
        $grade[1] = DB::table('students')
            ->where('branch',$student_id->branch)
            ->where('year',$student_id->year)
            ->whereBetween('B_tech',[70,80])
            ->count();
        $grade[2] = DB::table('students')
            ->where('branch',$student_id->branch)
            ->where('year',$student_id->year)
            ->whereBetween('B_tech',[60,70])
            ->count();
        $grade[3] = DB::table('students')
            ->where('branch',$student_id->branch)
            ->where('year',$student_id->year)
            ->whereBetween('B_tech',[0,60])
            ->count();

        return $grade;

    }

    public function find_avg_marks()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);
        $avg = DB::table('students')
            ->where('branch', $student_id->branch)
            ->where('year', $student_id->year)
            ->avg('B_tech');

        $avg2 = round($avg, 2);
        return $avg2;
    }
    /**
     * @return mixed
     */
    public function index()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);
        $sem = $student_id->current_sem;

        $i=($student_id->current_sem)-1;
        $avg_marks[0] = round(DB::table('students')
                ->where('year', $student_id->year)
                ->where('branch', $student_id->branch)
                ->avg('sem_'.$i.'_marks'),2);
        $avg_marks[1] =round(DB::table('predictions')
                ->where('branch',$student_id->branch)
                ->avg('predicted_marks'),2);

        $strength = DB::table('students')
            ->where('year', $student_id->year)
            ->where('branch', $student_id->branch)
            ->count();

        $attendance = $this->find_att();
        $avg2 = $this->find_avg_marks();
        $max = $this->find_max();
        $avg = $this->find_Avg();
        $avg_att = $this->find_Avg_att();
        $prediction = $this->find_pred();
        $grade = $this->find_grade();
        $grade2 = $this->find_grade_graph();
        $diff = round( ($student_id->B_tech)-($prediction->predicted_marks),2);
        $rank = $this->find_rank();
        $percentile = $this->percentile();

        return view('student.dashboard')
            ->with('student_id', $student_id)
            ->with('grade', $grade)
            ->with('grade2',$grade2)
            ->with('avg2', $avg2)
            ->with('rank', $rank)
            ->with('max', $max)
            ->with('avg_marks',$avg_marks)
            ->with('diff',$diff)
            ->with('prediction',$prediction)
            ->with('avg', $avg)
            ->with('avg_att', $avg_att)
            ->with('percentile',$percentile)
            ->with('attendance', $attendance)
            ->with('strength', $strength);
    }

    public function find_courses()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);

        $prediction = DB::table('predictions')
            ->where('student_no',$student_id->student_no)
            ->first();

        $alumini = DB::table('alumini_contact')
                ->where('student_no',$student_id->student_no)
                ->get();

        return view('student.best-after')
            ->with('prediction',$prediction)
            ->with('alumini',$alumini);
    }
    public function find_discover()
    {
        $student = Auth::user()->id;
        $student_id = Student::find($student);

        $prediction = DB::table('predictions')
            ->where('student_no',$student_id->student_no)
            ->first();

        return view('student.discover')
            ->with('prediction',$prediction);

    }

}
