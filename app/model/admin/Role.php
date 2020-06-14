<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{


    public function permission()
    {
        return $this->belongsToMany('Add\model\admin\Permission','permission_roles');
    }
}
