<?php

namespace App\Contracts;

interface BaseRepositoryContract
{
    public function all();

    public function create(array $data);

    public function update(array $data, int $id);

    public function delete($id);

    public function show(int $id);
}
