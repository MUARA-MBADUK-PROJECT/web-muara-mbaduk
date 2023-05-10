<?php
namespace App\Repository;

class RepositoryProduct extends Repository{
    public function getAll()
    {
        return $this->apiGet('products');
    }

    public function getOne($slug)
    {
        return $this->apiGet("products/$slug");
    }
}