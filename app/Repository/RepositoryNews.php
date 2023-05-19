<?php
namespace App\Repository;

class RepositoryNews extends Repository{
    public function getAll()
    {
        return $this->apiGet('news');
    }

    public function getByOne($slug)
    {
        return $this->apiGet("news/$slug");
    }
}