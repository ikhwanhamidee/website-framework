<?php

namespace App\Models;

use CodeIgniter\Model;

class Gallery extends Model
{
    protected $table = 'gallerys';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'pic_name',
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

}

