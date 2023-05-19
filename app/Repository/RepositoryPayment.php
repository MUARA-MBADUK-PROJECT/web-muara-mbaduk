<?php
namespace App\Repository;

class RepositoryPayment extends Repository{
    public function getAll()
    {
        return $this->apiGet('/payments');
    }

    public function getById($id)
    {
        return $this->apiGet("/payments/$id");
    }

    public function getByUser($idUser)
    {
        return $this->apiGet("/payments/user/$idUser");
    }
}