<?php

namespace App\Models\User;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'tb_dosen';
    protected $primaryKey = 'id_dosen';
   protected $allowedFields = [
    'nidk',
    'nama_dosen',
    'id_jurusan',
    'id_prodi',
    'email',
    'password',           // ✅ Tambahkan ini kalau DB dosen punya kolom password
    'alamat',
    'tanggal_lahir',
    'jenis_kelamin',
    'created_at',
    'updated_at'
];

    protected $useTimestamps = true;
}
