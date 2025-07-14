<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\CategoryModel;

class CategoryController extends BaseController
{
    protected $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        $data['category'] = $this->categoryModel->findAll();
        return view('admin/category/index', $data);
    }

    public function create()
    {
        return view('admin/category/create');
    }

    public function store()
    {
        $this->categoryModel->insert([
            'nama_category' => $this->request->getPost('nama_category'),
        ]);
        return redirect()->to('/admin/category');
    }

    public function edit($id)
    {
        $data['category'] = $this->categoryModel->find($id);
        return view('admin/category/edit', $data);
    }

    public function update($id)
    {
        $this->categoryModel->update($id, [
            'nama_category' => $this->request->getPost('nama_category'),
        ]);
        return redirect()->to('/admin/category');
    }

    public function delete($id)
    {
        $this->categoryModel->delete($id);
        return redirect()->to('/admin/category');
    }
}
