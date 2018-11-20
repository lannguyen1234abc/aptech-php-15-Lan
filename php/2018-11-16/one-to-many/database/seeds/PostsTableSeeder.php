<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $cateId = App\Category::pluck('id')->toArray();
        foreach(range(1,5) as $index){
            App\Post::create([
                'title'=> $faker->name,
                'description'=> $faker->paragraph,
                'content'=> $faker->randomHtml(),
                'cate_id'=> $cateId[array_rand($cateId)],
            ]);
        }
    }
}
