<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function bookCategory(){
        return $this->hasMany('App\Models\BookCategory');
    }
}
