<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentAnswer;
use App\User;
class DetailController extends Controller
{
    public function details()
    {
       $students= User::where('permissions', '=', '2')->get();
    //    return $students;

       $allstudents = array();
       foreach($students as $s)
       {
        //    return $s->usr_id;
        $allstudents[] = StudentAnswer::where('student_id','=', $s->usr_id)->get();

       }
    //    return $allstudents;
        return view('quiz.detailResult',compact('students','allstudents'));
    }

    public function testDetails($id)
    {
        dd($id);
    }
}
