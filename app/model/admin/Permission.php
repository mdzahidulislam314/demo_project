<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    public function roles()
    {
        return $this->belongsToMany(Role::class,'permission_roles');
    }

}
