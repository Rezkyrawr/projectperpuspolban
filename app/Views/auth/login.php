<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
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

        .login-container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 40px;
        }

        .login-card {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur( 10px);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 0 10px 10px 0; /* Hanya rounded kanan */
    padding: 40px 35px;
    width: 600px; /* Tetap ukuran lebar login box */
    height: 100vh; /* Full tinggi layar */
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
    position: fixed;
    top: 0;
    left: 0;
    overflow: hidden;
    z-index: 10; /* Supaya di atas */
}

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        }

        .time-display {
            text-align: center;
            margin-bottom: 35px;
            color: white;
        }

        .time {
            font-size: 2.8rem;
            font-weight: 300;
            margin-bottom: 5px;
            text-shadow: 0 2px 15px rgba(0, 0, 0, 0.3);
            letter-spacing: -1px;
        }

        .date {
            font-size: 0.95rem;
            opacity: 0.85;
            font-weight: 400;
            letter-spacing: 0.5px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            color: white;
            padding: 14px 45px 14px 16px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            width: 100%;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.1);
            color: white;
            outline: none;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(7, 7, 7, 0.6);
            font-size: 0.9rem;
        }

        .form-control.with-icon {
            padding-left: 45px;
        }

        .show-password {
            display: flex;
            align-items: center;
            margin: 15px 0 25px 0;
        }

        .show-password input[type="checkbox"] {
            margin-right: 8px;
            accent-color: rgba(255, 255, 255, 0.3);
        }

        .show-password label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            cursor: pointer;
        }

        .login-btn {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.15) 100%);
            border: 1px solid rgb(0, 0, 0);
            border-radius: 12px;
            color: white;
            padding: 14px 24px;
            font-weight: 500;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .login-btn2 {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.15) 100%);
            border: 1px solid rgb(0, 0, 0);
            border-radius: 12px;
            color: white;
            padding: 14px 24px;
            font-weight: 500;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .login-btn:hover {
                        background: linear-gradient(135deg, rgb(2, 255, 57) 0%, rgb(3, 243, 15) 100%);
            border: 1px solid rgb(255, 255, 255);
            transform: translateY(-1px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            color: white;
        }
        .login-btn2:hover {
                        background: linear-gradient(135deg, rgb(2, 255, 57) 0%, rgb(3, 243, 15) 100%);
            border: 1px solid rgb(255, 255, 255);
            transform: translateY(-1px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            color: white;
        }        

        .session-info {
            text-align: center;
            margin: 20px 0;
            color: rgba(121, 109, 109, 0.6);
            font-size: 0.85rem;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 25px;
        }

        .action-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.7);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .action-btn:hover {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            transform: translateY(-2px);
        }

        .auth-switch {
            text-align: center;
            margin-top: 25px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }

        .auth-switch a {
            color: rgb(255, 255, 255);
            
            font-weight: 500;
            transition: opacity 0.3s ease;
        }

        .auth-switch a:hover {
            opacity: 0.8;
        }

        .register-form {
            display: none;
        }

        .register-form.active {
            display: block;
        }

        .login-form.active {
            display: block;
        }

        @media (max-width: 768px) {
            .login-container {
                padding: 20px;
                justify-content: center;
            }
            
            .login-card {
                margin-left: 0;
                max-width: 100%;
            }
            
            .time {
                font-size: 2.5rem;
            }
        }
        .logo-display {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}

.logo-img {
    width: 150px; /* Ukuran logo diperkecil */
    height: auto;
    border-radius: 8px;
    
    display: block;
}
.login-card {
    /* ... CSS sebelumnya tetap */
    display: flex;
    flex-direction: column;
    justify-content: center; /* ⬅️ Tengah secara vertikal */
    align-items: center;     /* ⬅️ Tengah secara horizontal */
    height: 100vh;           /* Tinggi penuh layar */
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

        
    </style>
<body>
  <div class="login-container">
    <div class="login-card">
      <a href="<?= base_url('home') ?>" class="back">
        <img src="<?= base_url('images/back.png') ?>" alt="Back">
      </a>

      <div class="logo-display mb-3">
        <img src="<?= base_url('images/logo-polban4.png') ?>" alt="POLBAN Logo" class="logo-img">
      </div>

      <div class="login-form active" id="loginForm">
        <form action="<?= base_url('/login/check') ?>" method="post" autocomplete="off">
          
          <!-- Email Field -->
          <div class="form-group mb-3">
            <i class="fas fa-envelope input-icon"></i>
            <input type="email" class="form-control with-icon" name="email" id="emailInput" placeholder="Masukkan Email Anda" required autocomplete="off">
          </div>

          <!-- NIM Field -->
          <div class="form-group mb-3" id="nimField" style="display: none;">
            <i class="fas fa-id-badge input-icon"></i>
            <input type="text" class="form-control with-icon" name="nim" placeholder="Masukkan NIM Anda" autocomplete="off">
          </div>

          <!-- NIDK Field -->
          <div class="form-group mb-3" id="nidkField" style="display: none;">
            <i class="fas fa-id-badge input-icon"></i>
            <input type="text" class="form-control with-icon" name="nidk" placeholder="Masukkan NIDK Anda" autocomplete="off">
          </div>

          <!-- Password Field -->
          <div class="form-group mb-3">
            <i class="fas fa-lock input-icon"></i>
            <input type="password" class="form-control with-icon" id="loginPassword" name="password" placeholder="Password" required autocomplete="new-password">
          </div>

          <!-- Show Password -->
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="showLoginPassword" onchange="togglePassword('loginPassword')">
            <label class="form-check-label" for="showLoginPassword">Show Password</label>
          </div>

          <!-- Login Button -->
          <button type="submit" class="btn btn-primary w-100 mb-2">
            <i class="fas fa-sign-in-alt me-2"></i> Login
          </button>


        <div class="auth-switch mt-3 text-center">
          Belum punya akun? <a href="<?= base_url('/register') ?>">Register</a>
        </div>
      </div>

     

    </div>
  </div>

  <script>
    const emailInput = document.getElementById('emailInput');
    const nimField = document.getElementById('nimField');
    const nidkField = document.getElementById('nidkField');

    emailInput.addEventListener('blur', () => {
      const email = emailInput.value.trim();
      if (email.length > 5) {
        fetch(`<?= base_url('/login/check-email') ?>?email=${encodeURIComponent(email)}`)
          .then(res => res.json())
          .then(data => {
            nimField.style.display = 'none';
            nidkField.style.display = 'none';
            if (data.role === 'mahasiswa') {
              nimField.style.display = 'block';
            } else if (data.role === 'dosen') {
              nidkField.style.display = 'block';
            }
          })
          .catch(err => console.error(err));
      }
    });

    function togglePassword(id) {
      const input = document.getElementById(id);
      input.type = input.type === 'password' ? 'text' : 'password';
    }

    function toggleRegisterPasswords() {
      const pass = document.getElementById('registerPassword');
      const confirm = document.getElementById('confirmPassword');
      const show = document.getElementById('showRegisterPassword').checked;
      pass.type = show ? 'text' : 'password';
      confirm.type = show ? 'text' : 'password';
    }

    function showRegister() {
      document.getElementById('loginForm').style.display = 'none';
      document.getElementById('registerForm').style.display = 'block';
    }

    function showLogin() {
      document.getElementById('registerForm').style.display = 'none';
      document.getElementById('loginForm').style.display = 'block';
    }
  </script>
</body>
</html>
