<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'address', 'phone_number'];
    public function bills(){
        return $this->hasMany('App\Bill');
    }
}
