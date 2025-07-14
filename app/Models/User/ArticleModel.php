<?php

namespace App\Models\User;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'tb_article';
    protected $primaryKey = 'id_article';

    protected $allowedFields = [
        'id_mahasiswa',
        'id_dosen',
        'id_category',
        'judul',
        'abstrak',
        'keyword',
        'tahun_lulus',
        'status',
        'daftar_pustaka',
        'kelengkapan_ta',
        'bab1',
        'bab2',
        'bab3',
        'bab4',
        'bab5',
        'bab6',
        'lampiran',
        'tgl_uploads',
        'created_at',
        'updated_at',
    ];

    protected $useTimestamps = true;
}
