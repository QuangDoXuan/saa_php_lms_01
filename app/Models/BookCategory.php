<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    //
    public function book(){
        return $this->belongsTo('App\Models\Book');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
