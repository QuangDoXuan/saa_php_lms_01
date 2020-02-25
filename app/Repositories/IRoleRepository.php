<?php 

namespace App\Repositories;

interface IRoleRepository
{
    public function all();

    public function create($data, array $permissions);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

    public function search($name = null);
}