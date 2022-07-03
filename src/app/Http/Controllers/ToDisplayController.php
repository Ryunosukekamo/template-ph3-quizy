<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToDisplayController extends Controller
{
    public function index($id)
    {
        $idForBigQuestionTitle = DB::table('BigQuestions')->where('id', $id)->first();
        $allElemForSmallQuestions = DB::table('smallQuestions')->get();
        $choices = DB::table('Choices')->get();
        $smallQuestionId = DB::table('Choices')->get('small_question_id');
        dd($smallQuestionId);
        return view('Todisplay.index', compact('idForBigQuestionTitle','allElemForSmallQuestions','choices'));
    }
}
