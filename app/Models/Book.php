<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public function publisher(){
        return $this->belongsTo('App\Models\Publisher');
    }

    public function bookCategory(){
        return $this->hasMany('App\Models\BookCategory');
    }

    public function bookAuthor(){
        return $this->hasMany('App\Models\BookAuthor');
    }

    public function borrowBook(){
        return $this->hasMany('App\Models\BorrowBook');
    }

    public function reactions(){
        return $this->hasMany('App\Models\Reaction');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
