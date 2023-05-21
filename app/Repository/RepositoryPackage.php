<?php
namespace App\Repository;

class RepositoryPackage extends Repository{
    public function getAll()
    {
        return $this->apiGet('packages');
    }

    public function getOne($slug)
    {
        return $this->apiGet("/packages/$slug");
    }

    public function getByCategory($category)
    {
        return $this->apiGet("/packages/category/$category");
    }

    public function getByPackage($id)
    {
        return $this->apiGet('/reviews/package/'.$id);
    }
}