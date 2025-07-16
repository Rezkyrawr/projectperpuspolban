<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\KontakModel;

class KontakController extends BaseController
{
    public function index()
    {
        $kontakModel = new KontakModel();
        $data['kontak'] = $kontakModel
            ->select('tb_kontak.*, tb_user.nama')
            ->join('tb_user', 'tb_user.id_user = tb_kontak.id_user')
            ->findAll();

        return view('admin/kontak/index', $data);
    }

    public function balas($id)
    {
        $kontakModel = new KontakModel();
        $data['pesan'] = $kontakModel->find($id);
        return view('admin/kontak/balas', $data);
    }

    public function update($id)
    {
        $kontakModel = new KontakModel();
        $kontakModel->update($id, [
            'balasan' => $this->request->getPost('balasan')
        ]);

        return redirect()->to('/admin/kontak')->with('success', 'Balasan terkirim.');
    }
}
