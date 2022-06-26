<?php

use Illuminate\Database\Seeder;

class bigQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [

            ['bigQuestionTitle'=>'東京の難読地名クイズ'],
            ['bigQuestionTitle'=>'広島の難読地名クイズ'],
        ];
        DB::table('bigQuestions')->insert($param);
    }
}
