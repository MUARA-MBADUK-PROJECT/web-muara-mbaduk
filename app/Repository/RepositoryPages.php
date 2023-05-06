<?php
namespace App\Repository;

class RepositoryPages extends Repository{
    public function getAll()
    {
        return $this->apiGet('pages');
    }

    public function getByIdOrSlug($idOrSlug)
    {
        return $this->apiGet("pages/$idOrSlug");
    }
}