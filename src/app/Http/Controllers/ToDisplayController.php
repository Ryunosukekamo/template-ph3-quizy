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
        $smallQuestionId = DB::table('Choices')->get('small_question_id');
        for($i = 0; $i<count($smallQuestionId)/3; $i++){
            $smallQuestionIds = DB::table('Choices')->where('small_question_id',$i)->get();
        }
        // dd($smallQuestionIds);
        return view('Todisplay.index', compact('idForBigQuestionTitle','allElemForSmallQuestions','smallQuestionIds'));
    }
}
