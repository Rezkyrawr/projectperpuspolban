<?php

namespace App\Models\User;

use CodeIgniter\Model;

class TaModel extends Model
{
    protected $table = 'tb_article'; // Pastikan ini sesuai
    protected $primaryKey = 'id_article'; // Sesuaikan dengan primary key kamu

    protected $allowedFields = [
        'id_mahasiswa',
        'id_dosen',
        'nama_pembimbing_manual',
        'tahun_lulus',
        'id_jurusan',
        'id_prodi',
        'id_kategory',
        'judul',
        'tgl_uploads',
        'bab1',
        'bab2',
        'bab3',
        'bab4',
        'bab5',
        'bab6',
        'lampiran',
    ];
}
