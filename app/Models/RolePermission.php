<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Permission;
class RolePermission extends Model
{
    //
    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function permission(){
        return $this->belongsTo(Permission::class);
    }
}
