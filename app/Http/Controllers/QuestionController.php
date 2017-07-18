<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;

class QuestionController extends Controller
{
    public function create(){
        return view('question.create');
    }

    public function question(){
        $this->hasMany('App\Answer');
    }
}
