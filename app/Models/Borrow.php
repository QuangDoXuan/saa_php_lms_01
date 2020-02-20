<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    //
    public function bookBorrow(){
        return $this->hasMany('App\Models\BorrowBook');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
