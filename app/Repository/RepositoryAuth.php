<?php

namespace App\Repository;

class RepositoryAuth extends Repository{
    public function googleLogin($token)
    {
        $body = [
            'token'=>$token
        ];
        // dd($body);
        return $this->apiPost('/users/login',$body);
    }

}