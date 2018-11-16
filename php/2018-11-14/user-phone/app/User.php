<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    //khai báo fillable - các trường được thêm dữ liệu vào
    protected $fillable = ['name'];


    public function phone(){
        return $this->hasOne('App\Phone', 'user_id');
    }
}
