<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    public function bookAuthors(){
        return $this->hasMany('App\Models\BookAuthor');
    }
}
