<?php

use Illuminate\Database\Seeder;

class smallQuestionsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            ['title'=>'1. この地名なんて読む？','picture'=>'https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png','big_question_id'=>'1'],
            ['title'=>'2. この地名なんて読む？','picture'=>'https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png','big_question_id'=>'1'],
            ['title'=>'3. この地名なんて読む？','picture'=>'https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png','big_question_id'=>'1'],
        ];
        DB::table('smallQuestions')->insert($param);
    }
}
