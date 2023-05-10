<?php
namespace App\Repository;

class RepositoryFaq extends Repository{
    public function getAll()
    {
        return $this->apiGet('faq');
    }

    public function getById($id)
    {
        return $this->apiGet("faq/$id");
    }
}