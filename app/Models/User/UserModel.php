<?php

namespace App\Models\User;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';

    protected $allowedFields = [
        'id_mahasiswa',
        'id_dosen',
        'id_jurusan',
        'id_prodi',
        'nama',
        'nim',
        'nidk',
        'email',
        'password',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'role',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;

    // (Optional) Kalo mau validasi bisa ditambahin rules di controller
}
