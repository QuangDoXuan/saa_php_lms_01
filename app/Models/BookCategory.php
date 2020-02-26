<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Category;
class BookCategory extends Model
{
    //
    protected $table = 'book_category';
    public $timestamps = false;

    protected $fillable = [
        'book_id', 'category_id'
    ];

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
