<?php

namespace App\Repository;

class RepositoryReviews extends Repository
{
    public function getAll()
    {
        return $this->apiGet('/reviews');
    }

    public function getById($id)
    {
        return $this->apiGet("/reviews/$id");
    }

    public function post($idPackage, $idUser, $star, $review,$idPayment)
    {
        $body = [
            "id_package" => $idPackage,
            "id_payment"=>$idPayment,
            "id_user" => $idUser,
            "star" => $star,
            "description" => $review
        ];
        // dd(json_encode($body));
        return $this->apiPost('reviews',$body);
    }

    public function getByPayment($idPayment)
    {
        return $this->apiGet("/reviews/payment/$idPayment");
    }
}
