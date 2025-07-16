<?php

namespace App\Controllers\Admin;

use App\Models\Admin\KategoryModel;

class Kategory extends BaseController
{
    public function index()
    {
        $model = new KategoryModel();
        $data['kategories'] = $model->findAll();
        return view('kategory/index', $data);
    }

    public function save()
    {
        $model = new KategoryModel();
        $kategory = $this->request->getPost('kategory');

        // Buat folder jika belum ada
        $folderPath = WRITEPATH . 'kategori_artikel/' . $kategory;
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        $model->save(['kategory' => $kategory]);

        return redirect()->to('/kategory');
    }

    public function edit($id)
    {
        $model = new KategoryModel();
        $data['kategory'] = $model->find($id);
        return view('kategory/edit', $data);
    }

    public function update($id)
    {
        $model = new KategoryModel();
        $newKategory = $this->request->getPost('kategory');
        $oldKategory = $model->find($id)['kategory'];

        // Rename folder
        $oldPath = WRITEPATH . 'kategori_artikel/' . $oldKategory;
        $newPath = WRITEPATH . 'kategori_artikel/' . $newKategory;
        if (is_dir($oldPath)) {
            rename($oldPath, $newPath);
        }

        $model->update($id, ['kategory' => $newKategory]);

        return redirect()->to('/kategory');
    }

    public function delete($id)
    {
        $model = new KategoryModel();
        $kategory = $model->find($id)['kategory'];

        // Hapus folder
        $folderPath = WRITEPATH . 'kategori_artikel/' . $kategory;
        if (is_dir($folderPath)) {
            rmdir($folderPath); // hanya berhasil jika folder kosong
        }

        $model->delete($id);

        return redirect()->to('/kategory');
    }
}
