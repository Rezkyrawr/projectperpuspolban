<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'tb_category';
    protected $primaryKey = 'id_category';

    protected $allowedFields = [
        'id_category',
        'nama_category',
        
    ];

    protected $useTimestamps = true;

    // (Optional) Kalo mau validasi bisa ditambahin rules di controller
}
