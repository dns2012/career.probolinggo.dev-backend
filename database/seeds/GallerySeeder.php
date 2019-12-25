<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'title' => 'Example Gallery',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe-auV1FyITY9PfH1cU9YmLd4sHeNe4k0QZ5lRBjP3u_JaHYHw&s',
            'slug' => 'example-gallery'
        ]);
    }
}
