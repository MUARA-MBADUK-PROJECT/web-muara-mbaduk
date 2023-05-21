<?php
namespace App\Repository;

use function PHPUnit\Framework\isEmpty;

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

    public function CheckoutBank(string $userid,$date,bool $camping, string $bank, array $packages, array $tickets)
    {
        // dd();
        $request = [
            'user_id'=>$userid,
            'date'=>$date,
            'camping'=>$camping,
            'bank'=>$bank,
            'packages'=>$packages,
            'tickets'=>$tickets
        ];
        

        // echo json_encode($request);

        return $this->apiPost('/payments/bank',$request);
    }

    public function CheckOutCash(string $userid,$date,bool $camping,  array $packages, array $tickets)
    {
        $request = [
            'user_id'=>$userid,
            'date'=>$date,
            'camping'=>$camping,
            'packages'=>$packages,
            'tickets'=>$tickets
        ];

        // echo json_encode($request);
        

        return $this->apiPost('/payments/cash',$request);
    }
    
}