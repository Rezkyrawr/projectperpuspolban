<?php

namespace App\Models;
use CodeIgniter\Model;

class KategoryModel extends Model
{
    protected $table      = 'kategory';
    protected $primaryKey = 'id_kategory';
    protected $allowedFields = ['kategory'];
}
