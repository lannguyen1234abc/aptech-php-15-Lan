<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function customer(){
        return $this->belongsTo('App\Customer');
    }
    public function billdetails(){
        return $this->belongsToMany('App\BillDetail', 'bill_id', 'id');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
