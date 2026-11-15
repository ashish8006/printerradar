<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'name', 'review','status', 'created_at'];

    // Optional: if you want to return the results as an associative array
    protected $returnType = 'array';
}
