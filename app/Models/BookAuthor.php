<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    //
    public function book(){
        return $this->belongsTo('App\Models\Book');
    }

    public function author(){
        return $this->belongsTo('App\Models\Author');
    }
}
