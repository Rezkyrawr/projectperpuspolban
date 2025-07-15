<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #764ba2 100%);
            min-height: 100vh;
            overflow: hidden;
            position: relative;
        }

        /* Animated background waves */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1698342389078-c95bb664a627?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center;
            background-size: cover;
            opacity: 0.8;
            z-index: -1;
            animation: flow 15s ease-in-out infinite;
        }

        /* Flowing ribbon effect like in the image */
        body::after {
            content: '';
            position: absolute;
            top: 20%;
            right: -10%;
            width: 80%;
            height: 60%;
            background: linear-gradient(45deg, 
                rgba(255, 107, 157, 0.4) 0%,
                rgba(196, 69, 105, 0.3) 25%,
                rgba(248, 181, 0, 0.2) 50%,
                rgba(255, 107, 157, 0.3) 75%,
                rgba(196, 69, 105, 0.4) 100%);
            border-radius: 50% 20% 80% 30%;
            filter: blur(40px);
            animation: ribbon 20s ease-in-out infinite;
            transform: rotate(-15deg);
        }

        @keyframes flow {
            0%, 100% {
                transform: translateX(0) scale(1);
            }
            50% {
                transform: translateX(-30px) scale(1.1);
            }
        }

        @keyframes ribbon {
            0%, 100% {
                transform: rotate(-15deg) translateY(0) scale(1);
                opacity: 0.6;
            }
            33% {
                transform: rotate(-10deg) translateY(-20px) scale(1.1);
                opacity: 0.8;
            }
            66% {
                transform: rotate(-20deg) translateY(10px) scale(0.9);
                opacity: 0.7;
            }
        }

        .registration-container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 40px;
        }

        .registration-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 0 10px 10px 0;
            padding: 40px 35px;
            width: 600px;
            height: 100vh;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            z-index: 10;
        }

        .registration-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        }

        .logo-display {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo-img {
            width: 150px;
            height: auto;
            border-radius: 8px;
            display: block;
        }

        .back {
            position: absolute;
            top: 20px;
            left: 20px;
            cursor: pointer;
        }

        .back img {
            width: 45px;
            height: auto;
        }

        .form-title {
            color: white;
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .form-note {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            text-align: center;
            margin-bottom: 30px;
            font-style: italic;
        }

        .form-section {
            margin-bottom: 30px;
            color: white;
        }

        .section-title {
            font-size: 1.2rem;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: white;
            font-size: 0.95rem;
        }

        .required::after {
            content: ' *';
            color: #ff4d4d;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 8px;
            color: white;
            padding: 12px 16px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            width: 100%;
        }

       .form-control:focus {
    background: rgba(255, 255, 255, 0.12);
    border-color: rgba(245, 245, 245, 0.83);
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.1);
    color: white;
    outline: none;
}

/* ✅ Tambahkan ini khusus untuk isi dropdown */
select.form-control option {
    background-color: white; /* Warna latar dropdown */
    color: black;            /* Warna teks di dropdown */
}

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .input-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }

        .form-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .form-table td {
            padding: 8px 0;
            vertical-align: middle;
        }

        .form-table .label-cell {
            width: 30%;
            color: white;
        }

        .form-table .input-cell {
            width: 70%;
        }

        .checkbox-option {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .checkbox-option input {
            margin-right: 10px;
        }

        .checkbox-option label {
            color: white;
            font-size: 0.9rem;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .form-btn {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.15) 100%);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            color: white;
            padding: 12px 24px;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
            min-width: 120px;
            text-align: center;
        }

        .form-btn:hover {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0.25) 100%);
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .form-btn.submit {
            background: linear-gradient(135deg, rgba(46, 204, 113, 0.7) 0%, rgba(39, 174, 96, 0.7) 100%);
        }

        .form-btn.reset {
            background: linear-gradient(135deg, rgba(231, 76, 60, 0.7) 0%, rgba(192, 57, 43, 0.7) 100%);
        }

        .error-message {
            color: #ff4d4d;
            font-size: 0.8rem;
            margin-top: 5px;
            display: none;
        }

        .error .form-control {
            border-color: #ff4d4d;
        }

        .error .input-icon {
            color: #ff4d4d;
        }

        @media (max-width: 768px) {
            .registration-container {
                padding: 20px;
                justify-content: center;
            }
            
            .registration-card {
                margin-left: 0;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
   <div class="registration-container">
    <div class="registration-card">
        <a href="<?= base_url('home') ?>" class="back">
            <img src="<?= base_url('images/back.png') ?>" alt="Back">
        </a>

        <!-- Logo Display -->
        <div class="logo-display">
            <img src="<?= base_url('images/logo-polban4.png') ?>" alt="POLBAN Logo" class="logo-img">
        </div>

        <h1 class="form-title">Registrasi</h1>
        <p class="form-note">Silahkan Lengkapi Form berikut ini<br>Catatan: * harus diisi. merah = salah / tidak lengkap</p>

        <form action="<?= base_url('register/save') ?>" method="post">

            <!-- USER ID Section -->
            <div class="form-section">
                <h2 class="section-title">User ID</h2>

                <div class="form-group">
                    <label for="email" class="form-label required">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan alamat email" required>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label required">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Buat password" required>
                </div>
            </div>

            <!-- GENERAL Section -->
            <div class="form-section">
                <h2 class="section-title">General</h2>

                <div class="form-group">
                    <label for="nama" class="form-label required">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama lengkap" required>
                </div>

                <div class="form-group">
                    <label for="role" class="form-label required">Role</label>
                    <select name="role" id="role" class="form-control" required>
                        <option value="">-- Pilih Role --</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="dosen">Dosen</option>
                    </select>
                </div>

                   <div class="form-group mahasiswa-only" style="display: none;">
    <label for="nim" class="form-label required">NIM (Mahasiswa)</label>
    <input type="text" name="nim" id="nim" class="form-control" placeholder="NIM Mahasiswa">
</div>
                <div class="form-group dosen-only" style="display: none;">
    <label for="nidk" class="form-label required">NIDN (Dosen)</label>
    <input type="text" name="nidk" id="nidk" class="form-control" placeholder="NIDK Dosen">
</div>

  

                <div class="form-group">
                    <label for="id_jurusan" class="form-label required">Jurusan</label>
                    <select name="id_jurusan" id="id_jurusan" class="form-control" required>
                        <option value="">-- Pilih Jurusan --</option>
                        <?php foreach ($jurusan as $j): ?>
                            <option value="<?= $j['id_jurusan'] ?>"><?= $j['nama_jurusan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="id_prodi" class="form-label required">Prodi</label>
                    <select name="id_prodi" id="id_prodi" class="form-control" required>
                        <option value="">-- Pilih Prodi --</option>
                        <?php foreach ($prodi as $p): ?>
                            <option value="<?= $p['id_prodi'] ?>"><?= $p['nama_prodi'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir" class="form-label required">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin" class="form-label required">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat" class="form-label required">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat lengkap" required></textarea>
                </div>

                <div class="form-group mahasiswa-only">
                    <label for="tahun_masuk" class="form-label required">Tahun Masuk</label>
                    <input type="number" name="tahun_masuk" id="tahun_masuk" class="form-control" placeholder="Contoh: 2023">
                </div>
            </div>

            <!-- BUTTONS -->
            <div class="form-section">
                <div class="button-group">
                    <button type="submit" class="form-btn submit">Submit</button>
                    <button type="reset" class="form-btn reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Form validation
        document.addEventListener('DOMContentLoaded', function() {
            const formControls = document.querySelectorAll('.form-control');
            
            formControls.forEach(control => {
                control.addEventListener('blur', function() {
                    if (this.value.trim() === '' && this.hasAttribute('required')) {
                        this.parentElement.classList.add('error');
                        this.nextElementSibling.style.display = 'block';
                    } else {
                        this.parentElement.classList.remove('error');
                        this.nextElementSibling.style.display = 'none';
                    }
                });
                
                // Special validation for email
                if (control.type === 'email') {
                    control.addEventListener('blur', function() {
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRegex.test(this.value)) {
                            this.parentElement.classList.add('error');
                            this.nextElementSibling.style.display = 'block';
                        }
                    });
                }
                
                // Special validation for password
                if (control.id === 'password') {
                    control.addEventListener('blur', function() {
                        if (this.value.length < 8) {
                            this.parentElement.classList.add('error');
                            this.nextElementSibling.style.display = 'block';
                        }
                    });
                }
                
                // Special validation for confirm password
                if (control.id === 'confirmPassword') {
                    control.addEventListener('blur', function() {
                        const password = document.getElementById('password').value;
                        if (this.value !== password) {
                            this.parentElement.classList.add('error');
                            this.nextElementSibling.style.display = 'block';
                        }
                    });
                }
            });
            
            // Submit button
            const submitBtn = document.querySelector('.form-btn.submit');
            submitBtn.addEventListener('click', function() {
                let isValid = true;
                
                formControls.forEach(control => {
                    if (control.hasAttribute('required')) {
                        if (control.value.trim() === '') {
                            control.parentElement.classList.add('error');
                            control.nextElementSibling.style.display = 'block';
                            isValid = false;
                        }
                    }
                    
                    // Additional validation for email
                    if (control.type === 'email' && control.value.trim() !== '') {
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!emailRegex.test(control.value)) {
                            control.parentElement.classList.add('error');
                            control.nextElementSibling.style.display = 'block';
                            isValid = false;
                        }
                    }
                    
                    // Additional validation for password
                    if (control.id === 'password' && control.value.trim() !== '') {
                        if (control.value.length < 8) {
                            control.parentElement.classList.add('error');
                            control.nextElementSibling.style.display = 'block';
                            isValid = false;
                        }
                    }
                    
                    // Additional validation for confirm password
                    if (control.id === 'confirmPassword' && control.value.trim() !== '') {
                        const password = document.getElementById('password').value;
                        if (control.value !== password) {
                            control.parentElement.classList.add('error');
                            control.nextElementSibling.style.display = 'block';
                            isValid = false;
                        }
                    }
                });
                
                if (isValid) {
                    alert('Form submitted successfully!');
                    // Here you would typically submit the form to the server
                }
            });
            
            // Reset button
            const resetBtn = document.querySelector('.form-btn.reset');
            resetBtn.addEventListener('click', function() {
                formControls.forEach(control => {
                    control.parentElement.classList.remove('error');
                    const errorMsg = control.nextElementSibling;
                    if (errorMsg && errorMsg.classList.contains('error-message')) {
                        errorMsg.style.display = 'none';
                    }
                });
            });
        });

         document.addEventListener('DOMContentLoaded', function () {
        const roleSelect = document.getElementById('role');
        const mahasiswaFields = document.querySelectorAll('.mahasiswa-only');
        const dosenFields = document.querySelectorAll('.dosen-only');

        function toggleFields() {
            const selectedRole = roleSelect.value;

            // Sembunyikan semua dulu
            mahasiswaFields.forEach(field => field.style.display = 'none');
            dosenFields.forEach(field => field.style.display = 'none');

            // Tampilkan berdasarkan role
            if (selectedRole === 'mahasiswa') {
                mahasiswaFields.forEach(field => field.style.display = 'block');
            } else if (selectedRole === 'dosen') {
                dosenFields.forEach(field => field.style.display = 'block');
            }
        }

        // Panggil saat halaman dimuat pertama kali
        toggleFields();

        // Event saat role berubah
        roleSelect.addEventListener('change', toggleFields);
    });
    </script>
</body>
</html>
