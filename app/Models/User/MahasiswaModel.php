<?php

namespace App\Models\User;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'tb_mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $allowedFields = [
        'nim',
        'nama_mahasiswa',
        'id_jurusan',
        'id_prodi',
        'email',
        'password',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'tahun_masuk',
        'created_at',
        'updated_at'
    ];
    protected $useTimestamps = true;
}
