<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Survey;
use App\Answer;
use App\Question;
use App\Treatment;
use DB;

class ReportController extends Controller
{
    public function index($priority,$id){

        $profile = Profile::find($id);
//$questions = Question::where('priority', $priority)->get();
        $survey_qa = Survey::where('priority',$priority)->where('profile_id',$id)->first();
        $survey_advice_qa = Survey::where('priority',substr($priority,7))->where('profile_id',$id)->first();

        $answers = Answer::where('survey_id', $survey_qa->id)->get();
        $questions = Question::where('priority', $priority)->get();

//        $tables = DB::table('questions')
//            ->join('answers', 'questions.id', '=', 'answers.question_id')
//            ->select('questions.*', 'answers.*')
//            ->get();


         $advice_qa_count = DB::table('questions')

            ->join('answers', function($join) use ($priority,$survey_qa){

                $join->on('questions.id', '=', 'answers.question_id')
                    ->where('questions.priority' ,'=', $priority)
                    ->where('answers.survey_id' ,'=', $survey_qa->id)
                    ->where('answers.answer' ,'=', 'on');
            })

            ->count();

        $advice_qa = DB::table('questions')

            ->join('answers', function($join) use ($priority,$survey_qa){

                $join->on('questions.id', '=', 'answers.question_id')
                    ->where('questions.priority' ,'=', $priority)
                    ->where('answers.survey_id' ,'=', $survey_qa->id)
                    ->where('answers.answer' ,'=', 'on');
            })
            ->join('treatments', 'questions.problem_code', '=', 'treatments.consult_advice_code')
            ->orderBy('treatments.consult_advice_code')
            ->get()
            ;

          $qa_count = DB::table('questions')
            ->join('answers', function($join) use ($priority,$survey_advice_qa){
                $join->on('questions.id', '=', 'answers.question_id')
                    ->where('questions.priority' ,'=', substr($priority,7))
                    ->where('answers.survey_id' ,'=', $survey_advice_qa->id)
                    ->where('answers.answer' ,'=', 'on');
            })
            ->count();



        $qa = DB::table('questions')
            ->join('answers', function($join) use ($priority,$survey_advice_qa){
                $join->on('questions.id', '=', 'answers.question_id')
                    ->where('questions.priority' ,'=', substr($priority,7))
                    ->where('answers.survey_id' ,'=', $survey_advice_qa->id)
                    ->where('answers.answer' ,'=', 'on');
            })
            ->join('treatments', 'questions.problem_code', '=', 'treatments.problem_code')
            ->orderBy('treatments.problem_code')

            ->get();

        $questions_cat = $qa->unique('problem_code');

        return view('report.index',compact('profile','priority','id','qa','advice_qa','advice_qa_count','qa_count','qa_problem_codes','questions_cat'));
    }


}
