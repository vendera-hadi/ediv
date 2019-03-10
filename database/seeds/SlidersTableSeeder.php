<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sliders')->insert([
        [
            'type' => 'home',
            'path' => 'images/sliders/slider-1.jpg',
            'title' => null,
            'desc' => null
        ],
        [
            'type' => 'home',
            'path' => 'images/sliders/slider-2.jpg',
            'title' => null,
            'desc' => null
        ],
        [
            'type' => 'company',
            'path' => 'images/sliders/slider-2.jpg',
            'title' => 'PT MEIJI INDONESIA',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ],
        [
            'type' => 'company',
            'path' => 'images/sliders/slider-1.jpg',
            'title' => null,
            'desc' => null
        ]
      ]);
    }
}
