<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDisplayController extends Controller
{
    public function index($id)
    {
        $data = ['id' => $id];
        $arrays = [
            1=>[
                1=>['たかなわ','こうわ','たかわ'],
                2=>['かめいど','かめと','たかわ'],
                3=>['かゆまち','おかとまち','こうじまち']
            ],

            2=>[
                1=>['むこうひら','むかいなだ','むきひら'],
                2=>['みつぎ','みよし','おしらべ'],
                3=>['ぎやま','ぎんざん','かなやま']
            ]
        ];
        return view('Todisplay.index',compact('id', 'arrays'));
    }
}
