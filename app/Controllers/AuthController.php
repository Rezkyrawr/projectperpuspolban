<?php

namespace App\Controllers;

use App\Models\User\UserModel;
use App\Models\User\MahasiswaModel;
use App\Models\User\DosenModel;

class AuthController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function register()
    {
        $jurusanModel = new \App\Models\Admin\JurusanModel();
        $prodiModel   = new \App\Models\Admin\ProdiModel();

        $data = [
            'jurusan' => $jurusanModel->findAll(),
            'prodi'   => $prodiModel->findAll(),
        ];

        return view('auth/register', $data);
    }

    public function saveRegister()
    {
        $validation = \Config\Services::validation();

       $rules = [
    'nama'           => 'required',
    'email'          => 'required|valid_email|is_unique[tb_user.email]',
    'password'       => 'required|min_length[6]',
    'role'           => 'required|in_list[mahasiswa,dosen]',
    'tanggal_lahir'  => 'required',
    'jenis_kelamin'  => 'required|in_list[Laki-laki,Perempuan]',
    'alamat'         => 'required',
];

if ($this->request->getPost('role') === 'mahasiswa') {
    $rules['tahun_masuk'] = 'required|numeric';
}

if (!$this->validate($rules)) {
    return redirect()->back()->withInput()->with('errors', $validation->getErrors());
}

// DATA UMUM
$common = [
    'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
    'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
    'alamat'        => $this->request->getPost('alamat'),
];

$jenisKelaminInput = $this->request->getPost('jenis_kelamin');
$jenisKelamin = $jenisKelaminInput === 'Laki-laki' ? 'L' : 'P';

$data = [
    'nama'       => $this->request->getPost('nama'),
    'email'      => $this->request->getPost('email'),
    'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
    'role'       => $this->request->getPost('role'),
    'nim'        => $this->request->getPost('nim'),
    'nidk'       => $this->request->getPost('nidk'),
    'id_jurusan' => $this->request->getPost('id_jurusan'),
    'id_prodi'   => $this->request->getPost('id_prodi'),
];

if ($data['role'] == 'mahasiswa') {
    $common['tahun_masuk'] = $this->request->getPost('tahun_masuk');

    $mhsModel = new MahasiswaModel();
    $mhsId = $mhsModel->insert([
        'nama_mahasiswa' => $data['nama'],
        'nim'            => $data['nim'],
        'email'          => $data['email'],
        'password'       => $data['password'],
        'id_jurusan'     => $data['id_jurusan'],
        'id_prodi'       => $data['id_prodi'],
        'tanggal_lahir'  => $common['tanggal_lahir'],
        'jenis_kelamin'  => $jenisKelamin,
        'alamat'         => $common['alamat'],
        'tahun_masuk'    => $common['tahun_masuk'],
        'created_at'     => date('Y-m-d H:i:s')
    ]);

    $data['id_mahasiswa'] = $mhsId;
}

if ($data['role'] == 'dosen') {
    $dsnModel = new DosenModel();
    $dsnId = $dsnModel->insert([
        'nama_dosen'    => $data['nama'],
        'nidk'          => $data['nidk'],
        'email'         => $data['email'],
        'password'      => $data['password'],
        'id_jurusan'    => $data['id_jurusan'],
        'id_prodi'      => $data['id_prodi'],
        'tanggal_lahir' => $common['tanggal_lahir'],
        'jenis_kelamin' => $jenisKelamin,
        'alamat'        => $common['alamat'],
        'created_at'    => date('Y-m-d H:i:s')
    ]);

    $data['id_dosen'] = $dsnId;
}

$this->userModel->insert($data);


        return redirect()->to('/login')->with('success', 'Register berhasil, silakan login.');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'id_user'   => $user['id_user'],
                'nama'      => $user['nama'],
                'email'     => $user['email'],
                'role'      => $user['role'],
                'logged_in' => true
            ]);

            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Email atau Password salah!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Berhasil logout!');
    }
}
