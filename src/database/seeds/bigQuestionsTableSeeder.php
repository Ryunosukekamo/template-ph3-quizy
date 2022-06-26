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
            'title'=>'東京の難読地名クイズ',
        ];
        DB::table('bigQuestions')->insert($param);

        $param = [
            'title'=>'広島の難読地名クイズ',
        ];
        DB::table('bigQuestions')->insert($param);
    }
}
