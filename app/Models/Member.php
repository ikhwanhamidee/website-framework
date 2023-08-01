<?php

namespace App\Models;

use CodeIgniter\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'member_id',
        'member_name',
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

}

