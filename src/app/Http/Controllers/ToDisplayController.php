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
        // $smallQuestionId = DB::table('Choices')->get('small_question_id');
        for ($i = 0; $i < count($allElemForSmallQuestions); $i++) {
            // $smallQuestion = DB::table('Choices')->where('id', 1)->where('small_question_id', 1)->get('choice');
            $smallQuestion = DB::table('Choices')->where('id', 2)->where('small_question_id', 1)->get('choice');
            // $smallQuestion = DB::table('Choices')->where('id', 3)->where('small_question_id', 1)->get('choice');
        }
        $arrayForChoices = array();
        // dd($smallQuestionId);
        // for ($i = 1; $i <= count($smallQuestionId); $i++) {
        //     if ($smallQuestionId[$i]->small_question_id == '1') {
        //         $new = DB::table('Choices')->where('small_question_id', '1')->where('id',$i)->get('choice');
        //         array_push($arrayForChoices, $new);
        //     } elseif ($smallQuestionId[$i]->small_question_id == '2') {
        //         $new = DB::table('Choices')->where('small_question_id', '2')->where('id',$i)->get('choice');
        //         array_push($arrayForChoices, $new);
        //         // array_push($arrayForChoices, 2);
        //     } elseif ($smallQuestionId[$i]->small_question_id == '3') {
        //         $new = DB::table('Choices')->where('small_question_id', '3')->where('id',$i)->get('choice');
        //         array_push($arrayForChoices, $new);
        //         // array_push($arrayForChoices, 3);
        //     }
        // }
        dd($smallQuestion);
        return view('Todisplay.index', compact('idForBigQuestionTitle', 'allElemForSmallQuestions'));
    }
}
