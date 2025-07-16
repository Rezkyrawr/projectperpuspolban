<?php

namespace App\Controllers;

use App\Models\User\TaModel;
use CodeIgniter\Controller;

class TaController extends BaseController
{
    public function index()
    {
        $model = new TaModel();

        $data['articles'] = $model
            ->select('tb_article.*, 
                      tb_mahasiswa.nama_mahasiswa, 
                      tb_dosen.nama_dosen, 
                      kategory.kategory')
            ->join('tb_mahasiswa', 'tb_mahasiswa.id_mahasiswa = tb_article.id_mahasiswa', 'left')
            ->join('tb_dosen', 'tb_dosen.id_dosen = tb_article.id_dosen', 'left')
            ->join('kategory', 'kategory.id_kategory = tb_article.id_kategory', 'left')
            ->findAll();

        return view('home/article/index', $data);
    }

    public function create()
    {
        $session = session();

        $idMahasiswa = null;
        $idDosen = null;

        if ($session->get('role') === 'mahasiswa') {
            $idMahasiswa = $session->get('id_mahasiswa');
        } elseif ($session->get('role') === 'dosen') {
            $idDosen = $session->get('id_dosen');
        }

        $jurusanModel = new \App\Models\Admin\JurusanModel();
        $prodiModel   = new \App\Models\Admin\ProdiModel();
        $kategoryModel = new \App\Models\Admin\KategoryModel();

        $data = [
            'id_mahasiswa' => $idMahasiswa,
            'id_dosen'     => $idDosen,
            'jurusans'     => $jurusanModel->findAll(),
            'prodis'       => $prodiModel->findAll(),
            'kategories'   => $kategoryModel->findAll(),
        ];

        return view('home/article/create', $data);
    }

    public function store()
    {
        helper(['form']);

        $rules = [
            'nama_user'               => 'required|string',
            'nama_pembimbing_manual'  => 'permit_empty|string',
            'tahun_lulus'             => 'required|integer',
            'id_jurusan'              => 'required|integer',
            'id_prodi'                => 'required|integer',
            'id_kategory'             => 'required|integer',
            'judul'                   => 'required|string',
            'bab1'                    => 'uploaded[bab1]|ext_in[bab1,pdf]|max_size[bab1,5120]',
            'bab2'                    => 'permit_empty|ext_in[bab2,pdf]|max_size[bab2,5120]',
            'bab3'                    => 'permit_empty|ext_in[bab3,pdf]|max_size[bab3,5120]',
            'bab4'                    => 'permit_empty|ext_in[bab4,pdf]|max_size[bab4,5120]',
            'bab5'                    => 'permit_empty|ext_in[bab5,pdf]|max_size[bab5,5120]',
            'bab6'                    => 'permit_empty|ext_in[bab6,pdf]|max_size[bab6,5120]',
            'lampiran'                => 'permit_empty|ext_in[lampiran,pdf]|max_size[lampiran,5120]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $namaUser = $this->request->getPost('nama_user');

        $mahasiswaModel = new \App\Models\User\MahasiswaModel();
        $dosenModel     = new \App\Models\User\DosenModel();

        $mahasiswa = $mahasiswaModel->where('nama_mahasiswa', $namaUser)->first();
        $dosen     = $dosenModel->where('nama_dosen', $namaUser)->first();

        $idMahasiswa = null;
        $idDosen     = null;

        if ($mahasiswa) {
            $idMahasiswa = $mahasiswa['id_mahasiswa'];
        } elseif ($dosen) {
            $idDosen = $dosen['id_dosen'];
        } else {
            return redirect()->back()->withInput()->with('error', 'Nama tidak ditemukan di Mahasiswa maupun Dosen.');
        }

        // ✅ FIX: Ambil nama kategory DARI DB, BUKAN POST
        $kategoryModel = new \App\Models\Admin\KategoryModel();
        $kategory      = $kategoryModel->find($this->request->getPost('id_kategory'));

        if (!$kategory) {
            return redirect()->back()->withInput()->with('error', 'Kategori tidak ditemukan.');
        }

        // Format nama folder: ganti spasi jadi underscore
        $folderKategori = strtolower(str_replace(' ', '_', $kategory['kategory']));

        // Lokasi folder
        $pathUtama   = WRITEPATH . 'uploads/ta/';
        $pathKategori = WRITEPATH . 'kategori_artikel/' . $folderKategori . '/';

        if (!is_dir($pathUtama)) {
            mkdir($pathUtama, 0777, true);
        }

        if (!is_dir($pathKategori)) {
            mkdir($pathKategori, 0777, true);
        }

        // Model simpan
        $model = new \App\Models\User\TaModel();

        $saveData = [
            'id_mahasiswa'           => $idMahasiswa,
            'id_dosen'               => $idDosen,
            'nama_pembimbing_manual' => $this->request->getPost('nama_pembimbing_manual'),
            'tahun_lulus'            => $this->request->getPost('tahun_lulus'),
            'id_jurusan'             => $this->request->getPost('id_jurusan'),
            'id_prodi'               => $this->request->getPost('id_prodi'),
            'id_kategory'            => $this->request->getPost('id_kategory'),
            'judul'                  => $this->request->getPost('judul'),
            'tgl_uploads'            => date('Y-m-d'),
        ];

        foreach (['bab1', 'bab2', 'bab3', 'bab4', 'bab5', 'bab6', 'lampiran'] as $fileField) {
            $file = $this->request->getFile($fileField);

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $fileField . '_' . time() . '.' . $file->getExtension();

                // Simpan ke folder utama
                $file->move($pathUtama, $newName);

                // Copy ke folder kategori_artikel
                copy($pathUtama . $newName, $pathKategori . $newName);

                $saveData[$fileField] = $newName;
            } else {
                $saveData[$fileField] = null;
            }
        }

        if ($model->save($saveData)) {
            return redirect()->to('/articles')->with('success', 'Data Tugas Akhir berhasil disimpan!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data. Coba lagi!');
        }
    }
}
