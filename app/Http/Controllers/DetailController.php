<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentAnswer;
use App\User;
use App\Question;
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

    public function testDetails(Request $request)
    {
        // return $request->val;
        $studentQuiz = StudentAnswer::where('student_id','=', $request->val)->get();
        $No_answers = array();
        $yes_answers = array();
        foreach($studentQuiz as $q)
        {
            if($q->student_answer == 0)
            {
                $No_answers[] = $q;
            }
            else{
                $yes_answers[] = $q;
            }
        }
        // return $yes;
        $questions = array();
        $No_Questions = array();
        $yes_Questions = array();
        foreach($No_answers as $n)
        {  

                $No_Questions[] = Question::find( $n->question_id);
        }
        foreach($yes_answers as $y)
        {  
                $yes_Questions[] = Question::find( $y->question_id);
        }
        // foreach($studentQuiz as $quiz)
        // {  
        //         $questions[] = Question::find( $quiz->question_id);
        // }
       
        // return $yes_Questions;
        return view('quiz.resultCard',compact('questions', 'No_answers', 'yes_answers', 'No_Questions', 'yes_Questions'));

    }
}
