<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToDisplayController extends Controller
{
    public function index($id)
    {
        $title = DB::select("select * from bigQuestions where bigQuestionid = $id");
        $imgs = DB::select("select * from ImgsForTokyo where bigQuestionId = $id");
        $arrayForChoices=[];

        for($i=1; $i<=count($imgs); $i++){
            $choice = DB::select("select * from choices where bigQuestionId = $id and questionId = $i");
            array_push($arrayForChoices,$choice);
        }
        
        // dd($arrayForChoices);

        return view('Todisplay.index', compact('id', 'title','imgs','arrayForChoices'));
    }
}
