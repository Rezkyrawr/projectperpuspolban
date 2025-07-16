<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table      = 'tb_kontak'; // GANTI INI!
    protected $primaryKey = 'id_kontak';

    protected $allowedFields = ['id_user', 'pesan', 'balasan', 'created_at'];
}
