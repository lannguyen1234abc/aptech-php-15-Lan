<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name'->name,
            'email'->email,
            'address'->address,
            'phone_number'->phone_number
        ]);
    }
}
