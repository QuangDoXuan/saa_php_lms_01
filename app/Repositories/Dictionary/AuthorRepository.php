<?php // gkc_hash_code : 01DPWANC6E80S4P925SVA9ACPW ?>
<?php

namespace App\Repositories\Dictionary;
use Illuminate\Support\Facades\DB;
use App\Models\Author;

class AuthorRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Author();
    }

    public function all(){
        // return $this->model::with('publisher')->paginate(5);
        return $this->model::all();
    }

    public function show($id){
        return $this->model->find($id);
    }
}