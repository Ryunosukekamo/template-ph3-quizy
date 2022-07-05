<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(bigQuestionsTableseeder::class);
        $this->call(smallQuestionsTableSeeder::class);
        $this->call(choicesTableSeeder::class);
    }
}
