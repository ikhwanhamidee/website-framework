<?php

namespace App\Models;

use CodeIgniter\Model;

class PageEditorEng extends Model
{
    protected $table = 'page_data_en';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'home_welcome_text',
        'motto_text',
        'home_subtitle_text',
        'intro_text',
        'vision_text',
        'mission_text',
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

}