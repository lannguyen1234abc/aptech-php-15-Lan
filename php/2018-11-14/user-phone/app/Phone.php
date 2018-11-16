<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    

    
    //khai báo fillable - các trường được thêm dữ liệu vào
    protected $fillable = ['number', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
