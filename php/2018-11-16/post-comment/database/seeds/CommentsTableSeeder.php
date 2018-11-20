<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$faker = Faker\Factory::create();
        foreach(range(1,5) as $index){
            App\Comment::create([
                'comment'=> $faker->paragraph,
                'post_id'=> rand(1,10)
            ]);
        }*/

        Comment::create([
            'comment'->comment,
            'post_id'->post_id
        ]);
    }
}
