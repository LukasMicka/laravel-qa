<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    //
    public function index()
    {
        $all_questions = DB::table("questions")->orderBy("created_at", "desc")->get();

        dd($all_questions);
    }
    public function show()
    {
        $question = DB::table("questions")->where('id', 1)->first();
        
        $answers_to_q_1 = DB::table("answers")->where('question_id', 1)->oldest()->get();
    
        dd($answers_to_q_1);
    }
}
