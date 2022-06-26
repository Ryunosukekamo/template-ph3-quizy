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
        $param=[
            'choice'=>'たかなわ',
        ];
        DB::table('choices')->insert($param);
        $param=[
            'choice'=>'こうわ',
        ];
        DB::table('choices')->insert($param);
        $param=[
            'choice'=>'たかわ',
        ];
        DB::table('choices')->insert($param);
    }
}
