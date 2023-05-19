<?php
namespace App\Repository;

class RepositoryTestimonie extends Repository{
    public function getAll()
    {
        return $this->apiGet('/testimonies');
    }

    public function getById($id)
    {
        return $this->apiGet("/testimonies/$id");
    }
}