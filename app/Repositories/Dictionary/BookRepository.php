<?php // gkc_hash_code : 01DPWANC6E80S4P925SVA9ACPW ?>
<?php

namespace App\Repositories\Dictionary;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\BookAuthor;
use App\Models\BookCategory;

class BookRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Book();
    }

    public function all(){
        return $this->model::with('publisher')->paginate(5);
    }

    public function show($id){
        return $this->model->find($id);
    }

    public function create($request, $url)
    {
        DB::transaction(function () use($request,$url) {
            $book = new Book(array(
                'title'=>$request->title,
                'description'=>$request->description,
                'thumbnail'=>$url,
                'publisher_id'=>$request->publisher
            ));
            $book->save();

            foreach($request->authors as $author){
                $bookAuthor = new BookAuthor(array(
                    'book_id'=>$book->id,
                    'author_id'=>$author
                ));
                $bookAuthor->save();
            }

            foreach($request->categories as $category){
                $bookCategory = new BookCategory(array(
                    'book_id'=>$book->id,
                    'category_id'=>$category
                ));
                $bookCategory->save();
            }
        });
    }

    public function update($data, $id){
        $result = $this->model->find($id);
        if ($result) {
            $result->update($data);
            return $result;
        }

        return false;
    }

    public function delete($id){
        DB::transaction(function () use($id) {
            $result = $this->model->find($id);
            if($result){
                $result->delete();
                $result->bookAuthor()->delete();
                $result->bookCategory()->delete();
            }
        });
        return false;
    }

        /**
     * Get list user paginate
     *
     * @param int|null $paginate
     * @param string|null $name
     * @return array
     */
    public function search($title = null)
    {
        $keywork = "%{$title}%";
        $books = $this->model->where([
            ['title', 'like', $keywork]
            ]) ->paginate(5);
        return $books;
    }
}
