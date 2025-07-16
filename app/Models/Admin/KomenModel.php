<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class KomenModel extends Model
{
    protected $table      = 'tb_komen';
    protected $primaryKey = 'id_comment';

    protected $allowedFields = ['nama', 'komen', 'id_user'];

    protected $useTimestamps = true;
}
