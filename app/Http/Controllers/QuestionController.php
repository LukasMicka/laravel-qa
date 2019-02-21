<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class QuestionController extends Controller
{
    //
    public function index()
    {
        $all_questions = \App\Question::orderBy("created_at", "desc")->get();

        dd($all_questions);
    }
    public function show()
    {
        $question = \App\Question::where('id', 1)->first();
        
        $answers_to_q_1 = \App\Answer::where('question_id', 1)->oldest()->get();

        $answers_to_q_1 = $question->answers()->oldest()->get();
        
        dd($answers_to_q_1);
    }
}
