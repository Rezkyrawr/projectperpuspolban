<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\JurusanModel;

class JurusanController extends BaseController
{
    protected $jurusanModel;

    public function __construct()
    {
        $this->jurusanModel = new JurusanModel();
    }

    public function index()
    {
        $data['jurusan'] = $this->jurusanModel->findAll();
        return view('admin/jurusan/index', $data);
    }

    public function create()
    {
        return view('admin/jurusan/create');
    }

    public function store()
    {
        $this->jurusanModel->insert([
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
        ]);
        return redirect()->to('/admin/jurusan');
    }

    public function edit($id)
    {
        $data['jurusan'] = $this->jurusanModel->find($id);
        return view('admin/jurusan/edit', $data);
    }

    public function update($id)
    {
        $this->jurusanModel->update($id, [
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
        ]);
        return redirect()->to('/admin/jurusan');
    }

    public function delete($id)
    {
        $this->jurusanModel->delete($id);
        return redirect()->to('/admin/jurusan');
    }
}
