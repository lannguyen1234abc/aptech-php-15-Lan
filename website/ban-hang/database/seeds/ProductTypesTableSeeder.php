<?php

use Illuminate\Database\Seeder;
use App\ProductType;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductType::create([
            'name'->name,
            'description'->description,
            'image'->image
        ]);
    }
}
