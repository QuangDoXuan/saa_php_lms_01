<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    //
    public function follower(){
        return $this->belongsTo('App\Models\User','follower');
    }

    public function following(){
        return $this->belongsTo('App\Models\User','following');
    }
}
