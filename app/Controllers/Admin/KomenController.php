<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\KomenModel;

class KomenController extends BaseController
{
    public function index()
    {
        $komenModel = new \App\Models\Admin\KomenModel();
        $data['komentar'] = $komenModel->findAll();

        return view('admin/komen/index', $data);
    }

    public function create()
    {
        return view('home/komen/create');
    }

    public function store()
    {
        $komenModel = new \App\Models\Admin\KomenModel();

        $komenModel->insert([
            'nama'       => $this->request->getPost('nama'),
            'komen'      => $this->request->getPost('komen'),
            'id_user'    => session()->get('id_user'),
            // 'id_article' => $this->request->getPost('id_article')
        ]);

        return redirect()->to('/home/komen/create')->with('success', 'Komentar berhasil dikirim.');
    }

    public function delete($id)
    {
        $komenModel = new \App\Models\Admin\KomenModel();

        $komen = $komenModel->find($id);
        if (!$komen) {
            return redirect()->to('/admin/komen')->with('error', 'Komentar tidak ditemukan.');
        }

        $komenModel->delete($id);
        return redirect()->to('/admin/komen')->with('success', 'Komentar berhasil dihapus.');
    }
}
