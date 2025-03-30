<?php

namespace App\Contracts;

interface CrudServiceInterface
{
    public function getAll(): array;
    public function getById(int $id);
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id): bool;
}
