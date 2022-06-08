<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id='firstName',$pass='lastName'){
        $html = <<<EOF
        <html>
        <head>
        <title>Hello</title>
        <style>
            body {font-size:16pt; color:#999;}
            h1 {font-size:100pt; text-align:right; color:#eee;
            margin:-40px 0px -50px 0px;}
        </style>
        <body>
            <h1>Index</h1>
            <p>これは、Helloコントローラーのindexアクションです。</p>
            <ul>
                <li>ID:{$id}</li>
                <li>PASS:{$pass}</li>
            </ul>
        </body>
        </html>
        EOF;

        return $html;
    }
    
    public function other($id='firstName',$pass='lastName'){
        $html = <<<EOF
        <html>
        <head>
        <title>Hello</title>
        <style>
            body {font-size:16pt; color:#999;}
            h1 {font-size:100pt; text-align:right; color:#eee;
            margin:-40px 0px -50px 0px;}
        </style>
        <body>
            <h1>other</h1>
            <p>これは、Helloコントローラーのotherアクションです。</p>
            <ul>
                <li>ID:{$id}</li>
                <li>PASS:{$pass}</li>
            </ul>
        </body>
        </html>
        EOF;

        return $html;
    }
}


