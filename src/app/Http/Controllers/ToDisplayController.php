<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use smallQuestions;

class ToDisplayController extends Controller
{
    public function index($id)
    {
        $idForBigQuestionTitle = DB::table('BigQuestions')->where('id', $id)->first();
        $allElemForSmallQuestions = DB::table('smallQuestions')->get();
        for ($i = 0; $i < count($allElemForSmallQuestions); $i++) {
            // $smallQuestion = DB::table('Choices')->where('id', 1)->where('small_question_id', 1)->get('choice');
            // $smallQuestion = DB::table('Choices')->where('id', 2)->where('small_question_id', 1)->get('choice');
            // $smallQuestion = DB::table('Choices')->where('id', 3)->where('small_question_id', 1)->get('choice');
        }
        $arrayForChoices = array();
        return view('Todisplay.index', compact('idForBigQuestionTitle', 'allElemForSmallQuestions'));
    }
}
