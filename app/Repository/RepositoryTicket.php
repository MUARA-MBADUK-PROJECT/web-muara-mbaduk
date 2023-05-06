<?php

namespace App\Repository;

use App\Models\Ticket;
use GuzzleHttp\Psr7\Request;

class RepositoryTicket extends Repository
{
    public function getAll()
    {
        return $this->apiGet("tickets");
    }

    public function getByCategory(String $category = null)
    {
        return $this->apiGet("tickets/category/$category");
    }

    public function getById(String $id )
    {
        return $this->apiGet("tickets/$id");
    }

    public function store(Request $request)
    {
        # code...
    }
}
