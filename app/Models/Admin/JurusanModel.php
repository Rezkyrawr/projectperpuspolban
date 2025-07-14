<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $table = 'tb_jurusan';
    protected $primaryKey = 'id_jurusan';
    protected $allowedFields = ['nama_jurusan'];
}
