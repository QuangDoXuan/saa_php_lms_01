<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowBook extends Model
{
    //
    public function borrow(){
        return $this->belongsTo('App\Models\Borrow');
    }

    public function book(){
        return $this->belongsTo('App\Models\Book');
    }
}
