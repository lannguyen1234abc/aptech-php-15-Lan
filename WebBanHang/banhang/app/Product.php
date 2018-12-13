<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'producttype_id', 'description', 'price', 'promotion_price', 'image', 'unit', 'new'];

    public function producttype(){
        return $this->belongsTo('App\ProductType', 'producttype_id', 'id');
    }
    public function billdetails(){
        return $this->belongsToMany('App\BillDetail', 'product_id');
    }
}
