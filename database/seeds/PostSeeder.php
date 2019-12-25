<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'category_id' => 1,
            'title' => 'Example Job Vacancy',
            'description' => 'Description Job Vacancy',
            'image' => 'https://blog.prosa.ai/media/images/Web_1280__3.original.png',
            'slug' => 'example-job-vacancy'
        ]);
    }
}
