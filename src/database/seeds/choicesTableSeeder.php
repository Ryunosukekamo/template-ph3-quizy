<?php

use Illuminate\Database\Seeder;

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
            ['bigQuestionId' => 1, 'questionId' => 1, 'choiceName' => 'こうわ'],
            ['bigQuestionId' => 1, 'questionId' => 1, 'choiceName' => 'たかわ'],
            ['bigQuestionId' => 1, 'questionId' => 1, 'choiceName' => 'たかなわ'],
            ['bigQuestionId' => 1, 'questionId' => 2, 'choiceName' => 'かめど'],
            ['bigQuestionId' => 1, 'questionId' => 2, 'choiceName' => 'かめと'],
            ['bigQuestionId' => 1, 'questionId' => 2, 'choiceName' => 'かめいど'],
            ['bigQuestionId' => 1, 'questionId' => 3, 'choiceName' => 'おかとまち'],
            ['bigQuestionId' => 1, 'questionId' => 3, 'choiceName' => 'かゆまち'],
            ['bigQuestionId' => 1, 'questionId' => 3, 'choiceName' => 'こうじまち'],
            ['bigQuestionId' => 2, 'questionId' => 1, 'choiceName' => 'むきひら'],
            ['bigQuestionId' => 2, 'questionId' => 1, 'choiceName' => 'むこうひら'],
            ['bigQuestionId' => 2, 'questionId' => 1, 'choiceName' => 'むかいなだ'],
            ['bigQuestionId' => 2, 'questionId' => 2, 'choiceName' => 'みつぎ'],
            ['bigQuestionId' => 2, 'questionId' => 2, 'choiceName' => 'みよし'],
            ['bigQuestionId' => 2, 'questionId' => 2, 'choiceName' => 'おしらべ'],
            ['bigQuestionId' => 2, 'questionId' => 3, 'choiceName' => 'きやま'],
            ['bigQuestionId' => 2, 'questionId' => 3, 'choiceName' => 'かなやま'],
            ['bigQuestionId' => 2, 'questionId' => 3, 'choiceName' => 'ぎんざん'],

        ];
        DB::table('choices')->insert($param);
    }
}
