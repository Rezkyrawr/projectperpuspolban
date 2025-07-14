<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ProdiModel;
use App\Models\Admin\JurusanModel;

class ProdiController extends BaseController
{
    protected $prodiModel;
    protected $jurusanModel;

    public function __construct()
    {
        $this->prodiModel = new ProdiModel();
        $this->jurusanModel = new JurusanModel();
    }

    public function index()
    {
        $data['prodi'] = $this->prodiModel
            ->select('tb_prodi.*, tb_jurusan.nama_jurusan')
            ->join('tb_jurusan', 'tb_prodi.id_jurusan = tb_jurusan.id_jurusan')
            ->findAll();
        return view('admin/prodi/index', $data);
    }

    public function create()
    {
        $data['jurusan'] = $this->jurusanModel->findAll();
        return view('admin/prodi/create', $data);
    }

    public function store()
    {
        $this->prodiModel->insert([
            'nama_prodi' => $this->request->getPost('nama_prodi'),
            'id_jurusan' => $this->request->getPost('id_jurusan'),
        ]);
        return redirect()->to('/admin/prodi');
    }

    public function edit($id)
    {
        $data['prodi'] = $this->prodiModel->find($id);
        $data['jurusan'] = $this->jurusanModel->findAll();
        return view('admin/prodi/edit', $data);
    }

    public function update($id)
    {
        $this->prodiModel->update($id, [
            'nama_prodi' => $this->request->getPost('nama_prodi'),
            'id_jurusan' => $this->request->getPost('id_jurusan'),
        ]);
        return redirect()->to('/admin/prodi');
    }

    public function delete($id)
    {
        $this->prodiModel->delete($id);
        return redirect()->to('/admin/prodi');
    }
}
