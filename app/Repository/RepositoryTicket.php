<?php

namespace App\Repository;

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
}
