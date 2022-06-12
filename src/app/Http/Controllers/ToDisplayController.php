<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDisplayController extends Controller
{
    public function index($id)
    {
        $data = ['id' => $id];
        return view('Todisplay.index', $data);
    }
}
