<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title','meta_title', 'meta_description','slug', 'description', 'image', 'status', 'created_at'];
    protected $useTimestamps = false;
}
