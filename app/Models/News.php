<?php

namespace App\Models;

use CodeIgniter\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'news_title',
        'news_content',
        'news_author',
        'news_date',
        'news_pic',
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

}

