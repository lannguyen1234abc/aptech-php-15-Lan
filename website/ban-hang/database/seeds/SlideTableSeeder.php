<?php

use Illuminate\Database\Seeder;
use App\Slide;

class SlideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slide::create([
            'link'->link,
            'image'->image
        ]);
    }
}
