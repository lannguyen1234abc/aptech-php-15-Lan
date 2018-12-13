<?php
use Illuminate\Database\Seeder;
use App\Customer;
class CustomersTableSeeder extends Seeder
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
            'address'->address,
            'phone_number'->phone_number
        ]);

    }
}