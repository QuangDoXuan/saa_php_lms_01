<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Author;
class BookAuthor extends Model
{
    //
    protected $table = 'book_authors';
    public $timestamps = false;

    protected $fillable = [
        'book_id', 'author_id'
    ];

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
