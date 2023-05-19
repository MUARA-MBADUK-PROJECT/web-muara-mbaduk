<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    private $title;
    private $category;
    private $normal_day;
    private $weekend_day;

    public function __construct($title , $category, $normal_day, $weekend_day) {
        $this->title = $title;
        $this->category = $category;
        $this->normal_day = $normal_day;
        $this->weekend_day = $weekend_day;
    }
}
