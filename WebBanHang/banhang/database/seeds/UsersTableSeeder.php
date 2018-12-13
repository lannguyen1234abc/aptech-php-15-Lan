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
        User::create([
            'name'->name,
            'email'->email,
            'phone_number'->phone_number,
            'password'->password,
            'remember_token'->remember_token
        ]);
    }
}