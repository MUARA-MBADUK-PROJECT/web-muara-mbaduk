<?php
namespace App\Repository;

class RepositoryUser extends Repository{
    public function getAccount()
    {
        return $this->apiGet('/users/account');
    }
}