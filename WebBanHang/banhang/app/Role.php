<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function role_users(){
        return $this->belongsToMany('App\Role_User', 'role_id', 'id');
    }
}
