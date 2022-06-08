<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function __invoke($id='firstName',$pass='lastName')
    {
        $html = <<<EOF
        <html>
        <title>Hello</title>
        <head>
        <style>
            body {font-size:16pt; color:#999;}
            h1 {font-size:100pt; text-align:right; color:#eee;
            margin:-40px 0px -50px 0px;}
        </style>
        </head>
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
}
