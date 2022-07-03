<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bigQuestionsTableseeder extends Seeder
{

    public function run()
    {
        $param = [
            ['title' => '東京の難読地名クイズ'],
            ['title' => '広島の難読地名クイズ']
        ];
        DB::table('BigQuestions')->insert($param);
    }
}
