<?php
namespace App\Repository;

class RepositoryUser extends Repository{
    public function getProfil($jwt)
    {
        return $this->apiPost('users/account',['token'=>$jwt]);
    }
}