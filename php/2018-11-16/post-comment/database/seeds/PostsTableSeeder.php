<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$faker = Faker\Factory::create();
        foreach(range(1,10) as $index){
            App\Post::create([
                'title'=> $faker->name,
                'description'=> $faker->name,
                'content'=> $faker->name
            ]);
        }*/

        Post::create([
            'title'->title,
            'description'->description,
            'content'->content
        ]);
    }
}
