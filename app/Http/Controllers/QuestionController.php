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

        $view = view("questions/index");

        return $view;
    }

    public function show()
    {
        $question = \App\Question::where('id', 1)->first();
        
        $answers_to_q_1 = \App\Answer::where('question_id', 1)->oldest()->get();

        $answers_to_q_1 = $question->answers()->oldest()->get();

        $view = view("questions/show");

        return $view;
    }
}