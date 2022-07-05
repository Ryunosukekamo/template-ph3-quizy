<?php

use Illuminate\Database\Seeder;

class smallQuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            ['title'=>'1. この地名なんて読む？','picture'=>'https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png','big_question_id'=>'1'],
            ['title'=>'2. この地名なんて読む？','picture'=>'https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png','big_question_id'=>'1'],
            ['title'=>'3. この地名なんて読む？','picture'=>'https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png','big_question_id'=>'1'],
        ];
        DB::table('smallQuestions')->insert($param);
    }
}
