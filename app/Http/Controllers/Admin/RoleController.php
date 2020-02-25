<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dictionary\RoleRepository;
use App\Repositories\Dictionary\PermissionRepository;
use App\Http\Requests\RoleFormRequest;

class RoleController extends Controller
{
    //
    protected $repository;
    protected $permission;
    public function __construct(RoleRepository $repository, PermissionRepository $permission){
        $this->repository = $repository;
        $this->permission = $permission;
    }

    public function index(){
        $roles = $this->repository->all();
        return view('admin/role/index',compact('roles'));
    }

    public function create(){
        $permissions = $this->permission->all();
        return view('admin/role/create',compact('permissions'));
    }

    public function store(Request $request){
        // dd(gettype($request->permissions));
        $this->repository->create($request->name, $request->permissions);
        return redirect()->back()->with('status',trans('Successful'));
    }

    public function search(Request $request){
        $users = $this->repository->search($request->keyword);
        return view('admin/role/index',compact('roles'));
    }

    public function edit($id){
        $user = $this->repository->show($id);
        return view('admin/role/edit', compact('role'));
    }

    public function update(Request $request, $id){
        $result = $this->repository->update($request->all(), $id);
        if($result){
            return redirect()->route('admin\role\index');
        }
        return redirect()->route('admin\role\index');
    }

    public function delete($id){
        $this->repository->delete($id);
        return redirect()->route('admin\role\index');
    }
}
