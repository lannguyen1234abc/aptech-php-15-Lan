<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $passports = App\Passport::pluck('id');

        foreach($passports as $key=>$value){
            User::create([
                'name'=> $faker->name,
                'p_id'=> $value,
            ]);
        }
    }
}
