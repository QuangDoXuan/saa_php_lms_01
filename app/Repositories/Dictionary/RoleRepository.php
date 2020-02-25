<?php // gkc_hash_code : 01DPWANC6E80S4P925SVA9ACPW ?>
<?php

namespace App\Repositories\Dictionary;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\RolePermission;
use App\Repositories\IRoleRepository;

class RoleRepository implements IRoleRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Role();
    }

    public function index(){
        return $this->model::all();
    }

    public function all(){
        return $this->model::with('rolePermission','rolePermission.permission')->paginate(5);
    }

    public function show($id){
        return $this->model->find($id);
    }

    public function createRole(){

    }

    public function create($data, array $permissions)
    {
        DB::transaction(function () use($data, $permissions) {
            // $role = $this->model->create($data);

            $role = new Role(array(
                'name'=>$data
            ));
            $role->save();
            foreach($permissions as $permission){
                // dd($role->id);
                $rolePermisson = new RolePermission(array(
                    'role_id'=>$role->id,
                    'permission_id'=>$permission
                ));
                $rolePermisson->save();
            }
        });
        return 0;
    }

    public function update(array $data, $id){
        $result = $this->model->find($id);
        if ($result) {
            $result->update($data);
            return $result;
        }

        return false;
    }

    public function delete($id){
        $result = $this->model->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }

    public function getByCondition($condition)
    {
        if (sizeof($condition)) {
            $query = $this->model
                ->where($condition);
        } else {
            $query = $this->model;
        }

        return $query->with(['role'])
            ->latest()
            ->paginate();
    }

    public function search($name = null){
        $users = $this->model->where([
            ['name', 'like', $name],
            ]) ->paginate(5);
        return $roles;
    }
}
