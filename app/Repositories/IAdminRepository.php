<?php 

namespace App\Repositories;

interface IAdminRepository
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

    public function search($name = null, $limit = null);
}