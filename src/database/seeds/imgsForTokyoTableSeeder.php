<?php

use Illuminate\Database\Seeder;

class imgsForTokyoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            ['bigQuestionId' => 1, 'questionId' => '1', 'img' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png'],
            ['bigQuestionId' => 1, 'questionId' => '2', 'img' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png'],
            ['bigQuestionId' => 1, 'questionId' => '3', 'img' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png'],
            ['bigQuestionId' => 2, 'questionId' => '1', 'img' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/d876208414d51791af9700a0389b988b.png'],
            ['bigQuestionId' => 2, 'questionId' => '2', 'img' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/51e91a5c0b3bc7d6bef3b4c02d6c553d.png'],
            ['bigQuestionId' => 2, 'questionId' => '3', 'img' => 'https://d1khcm40x1j0f.cloudfront.net/quiz/93c494f3017e03085dae7e63a85baed9.png'],
        ];
        DB::table('ImgsForTokyo')->insert($param);
    }
}
