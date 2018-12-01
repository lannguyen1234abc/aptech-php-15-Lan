<?php

use Illuminate\Database\Seeder;
use App\Product; 

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'producttype_id'->producttype_id,
            'name'->name,
            'description'->description,
            'price'->price,
            'promotion_price'->promotion_price,
            'image'->image
        ]);
    }
}
