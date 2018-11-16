<?php

use Illuminate\Database\Seeder;
use App\Phone;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$faker = Faker\Factory::create();

        $users = App\User::pluck('id');
        foreach($users as $key=>$value){
            Phone::create([
                'number'=> $faker->phoneNumber,
                'user_id'=> $value,
            ]);
        }*/

        Phone::create([
            'number'->number,
            'user_id'->user_id,
        ]);
    }
}
