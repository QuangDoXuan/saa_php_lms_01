<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BookAuthor;
class Author extends Model
{
    protected $table = 'authors';
    public $timestamps = false;
    protected $fillable = [
        'name', 
        'dob', 
        'gender',
        'avatar',
    ];

    //
    public function bookAuthors(){
        return $this->hasMany(BookAuthor::class);
    }
}
