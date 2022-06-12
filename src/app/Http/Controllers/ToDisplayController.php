<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDisplayController extends Controller
{
    public function Tokyo(){
        return view('Todisplay.index');
    }

    // public function Hiroshima(){
    //     return view('Todisplay.index');
    // }

}
