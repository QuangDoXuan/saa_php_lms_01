<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dictionary\AdminRepository;
use App\Repositories\Dictionary\RoleRepository;
use App\Http\Requests\AdminFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Exports\AdminsExport;
use App\Imports\AdminsImport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    protected $repository;
    protected $roleRepository;
    public function __construct(AdminRepository $repository, RoleRepository $roleRepository){
        $this->repository = $repository;
        $this->roleRepository = $roleRepository;
    }

    public function index(){
        // $user = Auth::user();
        // if($user->can('delete', Admin::class)){
            
        // }
        $users = $this->repository->all();
        // $roles = $this->roleRepository->index();
        return view('admin/user/index',compact('users'));
    }

    public function create(){
        return view('admin/user/create');
    }

    public function store(AdminFormRequest $request){
        $data = $request->all();
        // $data->password = Hash
        $this->repository->create($data);
        return redirect()->back()->with('status',trans('Successful'));
    }

    public function search(Request $request){
        $users = $this->repository->search($request->keyword,$request->role_id );
        return view('admin/user/index',compact('users'));
    }

    public function edit($id){
        $user = $this->repository->show($id);
        return view('admin/user/edit', compact('user'));
    }

    public function update(Request $request, $id){
        $result = $this->repository->update($request->all(), $id);
        if($result){
            return redirect()->route('admin\user\index');
        }
        return redirect()->route('admin\user\index');
    }

    public function delete($id){
        $user = Auth::user();
        if($user->can('delete', Admin::class)){
            $this->repository->delete($id);
            return redirect()->route('admin\user\index');
        }
        return redirect()->route('admin\user\index');
    }

    /**
    * @return \Illuminate\Support\Collection
    * export data to excel
    */
    public function export(Request $request) 
    {
        return Excel::download(new AdminsExport(), 'admins.xlsx');
    }
}
