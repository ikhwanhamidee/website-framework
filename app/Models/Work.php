<?php

namespace App\Models;

use CodeIgniter\Model;

class Work extends Model
{
    protected $table = 'listofworks';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'song_name',
        'member_name',
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

}

