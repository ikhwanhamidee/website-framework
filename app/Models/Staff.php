<?php

namespace App\Models;

use CodeIgniter\Model;

class Staff extends Model
{
    protected $table = 'staffs';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'staff_name',
        'staff_position',
        'staff_contact',
        'staff_pic',
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

}

