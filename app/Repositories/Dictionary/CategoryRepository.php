<?php // gkc_hash_code : 01DPWANC6E80S4P925SVA9ACPW ?>
<?php

namespace App\Repositories\Dictionary;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;
use App\Models\BookCategory;
class CategoryRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Category();
    }

    public function all(){
        return $this->model::all();
    }
}
