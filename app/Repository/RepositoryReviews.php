<?php
namespace App\Repository;

class RepositoryReviews extends Repository{
    public function getAll()
    {
        return $this->apiGet('/reviews');
    }

    public function getById($id)
    {
        return $this->apiGet("/reviews/$id");
    }
}