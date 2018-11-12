<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    
    //khai báo fillable - các trường được thêm dữ liệu vào
    protected $fillable = ['name', 'email', 'password'];
    
    protected $primaryKey = 'id';
}
