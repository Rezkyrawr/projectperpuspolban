<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ProdiModel extends Model
{
    protected $table = 'tb_prodi';
    protected $primaryKey = 'id_prodi';
    protected $allowedFields = ['nama_prodi', 'id_jurusan'];
}
