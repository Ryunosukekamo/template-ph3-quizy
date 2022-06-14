<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDisplayController extends Controller
{
    public function index($id)
    {
      
        $arraysForChoices = [
            1=>[
                1=>['https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png','たかなわ','こうわ','たかわ'],
                2=>['https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png','かめいど','かめと','たかわ'],
                3=>['https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png','かゆまち','おかとまち','こうじまち']
            ],

            2=>[
                1=>['https://d1khcm40x1j0f.cloudfront.net/quiz/d876208414d51791af9700a0389b988b.png','むこうひら','むかいなだ','むきひら'],
                2=>['https://d1khcm40x1j0f.cloudfront.net/quiz/51e91a5c0b3bc7d6bef3b4c02d6c553d.png','みつぎ','みよし','おしらべ'],
                3=>['https://d1khcm40x1j0f.cloudfront.net/quiz/93c494f3017e03085dae7e63a85baed9.png','ぎやま','ぎんざん','かなやま']
            ]
        ];

        return view('Todisplay.index',compact('id', 'arraysForChoices'));
    }
}
