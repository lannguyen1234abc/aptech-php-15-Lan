<?php

use Illuminate\Database\Seeder;
use App\Role_User;

class Role_UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role_User::create([
            'user_id'->user_id,
            'role_id'->role_id
        ]);
    }
}
