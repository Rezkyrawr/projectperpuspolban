<?php

namespace App\Models\Admin;
use CodeIgniter\Model;

class KategoryModel extends Model
{
    protected $table      = 'kategory';
    protected $primaryKey = 'id_kategory';
    protected $allowedFields = ['kategory'];
}
