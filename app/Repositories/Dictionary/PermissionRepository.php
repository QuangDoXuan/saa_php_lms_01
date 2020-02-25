<?php // gkc_hash_code : 01DPWANC6E80S4P925SVA9ACPW ?>
<?php

namespace App\Repositories\Dictionary;
use Illuminate\Support\Facades\DB;
use App\Models\Permission;

class PermissionRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Permission();
    }

    public function all(){
        return $this->model::all();
    }

    public function show($id){
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
}
