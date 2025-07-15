<?php

namespace App\Controllers;

use App\Models\User\UserModel;
use App\Models\User\MahasiswaModel;
use App\Models\User\DosenModel;
use App\Models\Admin\AdminModel;
use App\Models\Admin\JurusanModel;
use App\Models\Admin\ProdiModel;

class AuthController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // === TAMPILKAN FORM REGISTER ===
    public function register()
    {
        $jurusanModel = new JurusanModel();
        $prodiModel   = new ProdiModel();

        $data = [
            'jurusan' => $jurusanModel->findAll(),
            'prodi'   => $prodiModel->findAll(),
        ];

        return view('auth/register', $data);
    }

    // === SIMPAN DATA REGISTER ===
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
            $rules['nim'] = 'required|is_unique[tb_mahasiswa.nim]';
        }

        if ($this->request->getPost('role') === 'dosen') {
            $rules['nidk'] = 'required|is_unique[tb_dosen.nidk]';
        }

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $jenisKelamin = $this->request->getPost('jenis_kelamin') === 'Laki-laki' ? 'L' : 'P';

        $dataUser = [
            'nama'       => $this->request->getPost('nama'),
            'email'      => $this->request->getPost('email'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'       => $this->request->getPost('role'),
            'id_jurusan' => $this->request->getPost('id_jurusan'),
            'id_prodi'   => $this->request->getPost('id_prodi'),
        ];

        if ($dataUser['role'] === 'mahasiswa') {
            $mhsModel = new MahasiswaModel();
            $mhsId = $mhsModel->insert([
                'nama_mahasiswa' => $dataUser['nama'],
                'nim'            => $this->request->getPost('nim'),
                'email'          => $dataUser['email'],
                'password'       => $dataUser['password'],
                'id_jurusan'     => $dataUser['id_jurusan'],
                'id_prodi'       => $dataUser['id_prodi'],
                'tanggal_lahir'  => $this->request->getPost('tanggal_lahir'),
                'jenis_kelamin'  => $jenisKelamin,
                'alamat'         => $this->request->getPost('alamat'),
                'tahun_masuk'    => $this->request->getPost('tahun_masuk'),
                'created_at'     => date('Y-m-d H:i:s'),
            ]);
            $dataUser['id_mahasiswa'] = $mhsId;
            $dataUser['nim'] = $this->request->getPost('nim');
        }

        if ($dataUser['role'] === 'dosen') {
            $dsnModel = new DosenModel();
            $dsnId = $dsnModel->insert([
                'nama_dosen'    => $dataUser['nama'],
                'nidk'          => $this->request->getPost('nidk'),
                'email'         => $dataUser['email'],
                'password'      => $dataUser['password'],
                'id_jurusan'    => $dataUser['id_jurusan'],
                'id_prodi'      => $dataUser['id_prodi'],
                'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                'jenis_kelamin' => $jenisKelamin,
                'alamat'        => $this->request->getPost('alamat'),
                'created_at'    => date('Y-m-d H:i:s'),
            ]);
            $dataUser['id_dosen'] = $dsnId;
            $dataUser['nidk'] = $this->request->getPost('nidk');
        }

        $this->userModel->insert($dataUser);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil, silakan login!');
    }

    // === TAMPILKAN FORM LOGIN ===
    public function login()
    {
        return view('auth/login');
    }

    // === PROSES LOGIN ===
    public function attemptLogin()
    {
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $nim      = $this->request->getPost('nim');
        $nidk     = $this->request->getPost('nidk');

        $adminModel = new AdminModel();
        $admin = $adminModel->where('email', $email)->first();

        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                session()->set([
                    'id_admin'  => $admin['id_admin'],
                    'nama'      => $admin['nama'],
                    'email'     => $admin['email'],
                    'role'      => 'admin',
                    'logged_in' => true,
                ]);
                return redirect()->to('/admin/dashboard');
            } else {
                return redirect()->back()->with('error', 'Password Admin salah!');
            }
        }

        $user = $this->userModel->where('email', $email)->first();

        if ($user) {
            if ($user['role'] === 'mahasiswa') {
                if (!$nim) {
                    return redirect()->back()->with('error', 'NIM wajib diisi!');
                }
                $mhs = (new MahasiswaModel())->where('email', $email)->first();
                if (!$mhs || $mhs['nim'] !== $nim) {
                    return redirect()->back()->with('error', 'NIM tidak cocok!');
                }
            }

            if ($user['role'] === 'dosen') {
                if (!$nidk) {
                    return redirect()->back()->with('error', 'NIDK wajib diisi!');
                }
                $dsn = (new DosenModel())->where('email', $email)->first();
                if (!$dsn || $dsn['nidk'] !== $nidk) {
                    return redirect()->back()->with('error', 'NIDK tidak cocok!');
                }
            }

            if (password_verify($password, $user['password'])) {
                session()->set([
                    'id_user'   => $user['id_user'],
                    'nama'      => $user['nama'],
                    'email'     => $user['email'],
                    'role'      => $user['role'],
                    'logged_in' => true,
                ]);
                return redirect()->to('/home/dashboard');
            } else {
                return redirect()->back()->with('error', 'Password salah!');
            }
        }

        return redirect()->back()->with('error', 'Email tidak terdaftar!');
    }

    // === LOGOUT ===
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Berhasil logout!');
    }

    // === REGISTER ADMIN ===
    public function registerAdmin()
    {
        return view('auth/registeradmin');
    }

    public function saveRegisterAdmin()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'nama'     => 'required',
            'email'    => 'required|valid_email|is_unique[tb_admin.email]',
            'password' => 'required|min_length[6]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $adminModel = new AdminModel();

        $adminModel->insert([
            'nama'       => $this->request->getPost('nama'),
            'email'      => $this->request->getPost('email'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/login')->with('success', 'Register Admin berhasil!');
    }

    // === API AJAX CEK EMAIL ===
    public function checkEmail()
    {
        $email = $this->request->getGet('email');

        $user = $this->userModel->where('email', $email)->first();
        if ($user) {
            return $this->response->setJSON(['role' => $user['role']]);
        }

        $admin = (new AdminModel())->where('email', $email)->first();
        if ($admin) {
            return $this->response->setJSON(['role' => 'admin']);
        }

        return $this->response->setJSON(['role' => 'unknown']);
    }
}
