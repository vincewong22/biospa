<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Question;
use App\Answer;

class SurveyController extends Controller
{
    public function index($id){
        return view('survey.index', compact('id'));
    }

    public function create($priority,$id)
    {
        //$surveys = Survey::find($id);

        $questions = Question::where('priority',$priority)->get();

        return view('survey.create', compact('questions','priority','id'));
    }

    public function store($priority,$id)
    {

        $survey = Survey::firstOrCreate(['priority' => $priority, 'profile_id' => $id]);
        $questions = Question::where('priority', $priority)->get();

        foreach ($questions as $question) {
            //$profile->name = request('name');
            $raw_answer = (request($question->id) != 'on' ? 'off' : 'on');

            $answer = Answer::firstOrNew(['question_id' => $question->id, 'survey_id' => $survey->id]);
            $answer->answer = $raw_answer;
            $answer->save();

        }
        if ($priority == 'health' || $priority == 'slimming' || $priority == 'beauty') {
        return redirect(url('/advice/disclaimer/advice_' . $priority .'/' . $id));
        }
        else if ($priority == 'advice_health' || $priority == 'advice_slimming' || $priority == 'advice_beauty'){
             return redirect(url('/report/' . $priority .'/' . $id));
        }



    }
}
