<?php

use Illuminate\Database\Seeder;
use App\Questions;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Questions::create(['question' => 'Apakah tahu itu bulat?']);
        Questions::create(['question' => 'Apakah tahu itu segitiga?']);
        Questions::create(['question' => 'Apakah tahu itu kotak?']);
    }
}
