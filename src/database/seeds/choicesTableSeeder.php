<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class choicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            ['choice'=>'たかなわ','valid'=>'1','small_question_id'=>'1'],
            ['choice'=>'こうわ','valid'=>'0','small_question_id'=>'1'],
            ['choice'=>'たかわ','valid'=>'0','small_question_id'=>'1'],
            ['choice'=>'かめいど','valid'=>'1','small_question_id'=>'2'],
            ['choice'=>'かめど','valid'=>'0','small_question_id'=>'2'],
            ['choice'=>'かめと','valid'=>'0','small_question_id'=>'2'],
            ['choice'=>'こうじまち','valid'=>'1','small_question_id'=>'3'],
            ['choice'=>'おかとまち','valid'=>'0','small_question_id'=>'3'],
            ['choice'=>'かゆまち','valid'=>'0','small_question_id'=>'3'],
        ];

        DB::table('choices')->insert($param);
    }
}
