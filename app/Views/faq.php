<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FAQ Perpustakaan Digital Politeknik Negeri Bandung - Pertanyaan umum dan bantuan">
    <title>FAQ Perpustakaan Digital POLBAN | Politeknik Negeri Bandung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'polban-green': '#8BC34A',
                        'polban-dark-green': '#689F38',
                        'polban-light': '#DCEDC8',
                        'polban-blue': '#2196F3',
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                    },
                    boxShadow: {
                        'polban': '0 4px 6px -1px rgba(139, 195, 74, 0.2), 0 2px 4px -1px rgba(139, 195, 74, 0.1)',
                        'polban-lg': '0 10px 15px -3px rgba(139, 195, 74, 0.2), 0 4px 6px -2px rgba(139, 195, 74, 0.1)',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #8BC34A;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }
        
        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .faq-item {
            transition: all 0.3s ease;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .faq-item:last-child {
            border-bottom: none;
        }
        
        .faq-question {
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .faq-question:hover {
            color: #689F38;
        }
        
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .faq-item.active .faq-answer {
            max-height: 500px;
        }
        
        .faq-item.active .faq-question {
            color: #689F38;
            font-weight: 600;
        }
        
        .floating-btn {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="sticky top-0 z-50">
        <!-- Top Bar -->
        <div class="bg-gray-900 text-white text-xs md:text-sm">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center py-2 space-y-1 md:space-y-0">
                    <div class="flex items-center space-x-1 md:space-x-3">
                        <span><i class="fas fa-phone-alt mr-1"></i> (022) 1234567</span>
                        <span><i class="fas fa-envelope mr-1"></i> perpusdigital@polban.ac.id</span>
                    </div>
                    <div class="flex items-center space-x-1 md:space-x-3">
                        <a href="index.php" class="hover:text-polban-green transition-colors"><i class="fas fa-sign-in-alt mr-1"></i> Login</a>
                        <a href="/register" class="hover:text-polban-green transition-colors"><i class="fas fa-user-plus mr-1"></i> Register</a>
                        <div class="flex items-center">
                            <i class="fas fa-globe mr-1"></i>
                            <select class="bg-gray-900 text-white text-xs border-0 focus:ring-0">
                                <option>Indonesia</option>
                                <option>English</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       <!-- Main Navigation -->
        <div class="bg-white shadow-md">
            <div class="container mx-auto px-4">
                <nav class="flex items-center justify-between py-4">
                    <!-- Logo -->
                    <div class="flex items-center space-x-4">
                        <a href="#" class="flex items-center">
                            <img src="<?= base_url('images/logo-polban.png') ?>" alt="POLBAN Logo" class="h-15 w-10">
                            <div class="ml-3">
                                <h1 class="text-lg font-bold text-gray-800">Perpustakaan Digital</h1>
                                <p class="text-xs text-gray-600">Politeknik Negeri Bandung</p>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex items-center space-x-1">
                        <a href="/home" class="px-4 py-2 text-gray-800 font-medium nav-link">Beranda</a>
                        
                        <div class="dropdown relative">
                            <button class="px-4 py-2 text-gray-800 font-medium flex items-center nav-link">
                                Koleksi <i class="fas fa-chevron-down ml-1 text-xs"></i>
                            </button>
                            <div class="dropdown-menu absolute top-full left-0 w-48 bg-white shadow-lg rounded-md mt-1 py-1 z-20">
                                <a href="/jurnal" class="block px-4 py-2 text-gray-800 hover:bg-polban-light">Jurnal</a>
                                <a href="/skripsi" class="block px-4 py-2 text-gray-800 hover:bg-polban-light">Tugas Akhir/Tesis</a>
                               
                                <a href="/modul" class="block px-4 py-2 text-gray-800 hover:bg-polban-light">Modul</a>
                            </div>
                        </div>
                        
                        
                        <a href="/kredit" class="px-4 py-2 text-gray-800 font-medium nav-link">Tentang</a>
                        <a href="/kontak" class="px-4 py-2 text-gray-800 font-medium nav-link">Kontak</a>
                        <a href="/kontak" class="px-4 py-2 text-gray-800 font-medium nav-link">Diskusi/Komentar</a>
                        <a href="/bookmark" class="px-4 py-2 text-gray-800 font-medium nav-link">Bookmark</a>
                        <a href="/upload" class="px-4 py-2 text-gray-800 font-medium nav-link">Upload</a>
                        
                        <div class="ml-4">
                           
                        </div>
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <button class="lg:hidden text-gray-800 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </nav>
            </div>
        </div>
    </header>

   
    <!-- FAQ Content -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Main Content -->
                <div class="lg:w-2/3">
                    <!-- Categories -->
                    <div class="mb-8" data-aos="fade-up">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <i class="fas fa-tags text-polban-green mr-2"></i>
                            Kategori Pertanyaan
                        </h2>
                        <div class="flex flex-wrap gap-3">
                            <button class="bg-white text-polban-green border border-polban-green px-4 py-2 rounded-full hover:bg-polban-green hover:text-white transition-colors">
                                Semua Kategori
                            </button>
                            <button class="bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-full hover:bg-polban-green hover:text-white hover:border-polban-green transition-colors">
                                Akun Pengguna
                            </button>
                            <button class="bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-full hover:bg-polban-green hover:text-white hover:border-polban-green transition-colors">
                                Peminjaman
                            </button>
                            <button class="bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-full hover:bg-polban-green hover:text-white hover:border-polban-green transition-colors">
                                Unggah Dokumen
                            </button>
                            <button class="bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-full hover:bg-polban-green hover:text-white hover:border-polban-green transition-colors">
                                Teknis
                            </button>
                            <button class="bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-full hover:bg-polban-green hover:text-white hover:border-polban-green transition-colors">
                                Lainnya
                            </button>
                        </div>
                    </div>
                    
                    <!-- FAQ List -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden" data-aos="fade-up">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                                <i class="fas fa-question-circle text-polban-green mr-2"></i>
                                Pertanyaan Umum
                            </h2>
                            
                            <div class="space-y-4">
                                <!-- FAQ Item 1 -->
                                <div class="faq-item p-4 rounded-lg bg-gray-50">
                                    <div class="faq-question flex justify-between items-center">
                                        <h3 class="text-lg font-medium">Bagaimana cara mendaftar akun di Perpustakaan Digital POLBAN?</h3>
                                        <i class="fas fa-chevron-down text-polban-green"></i>
                                    </div>
                                    <div class="faq-answer mt-3 text-gray-600">
                                        <p>Untuk mendaftar akun:</p>
                                        <ol class="list-decimal pl-5 space-y-2 mt-2">
                                            <li>Klik tombol "Register" di bagian atas halaman</li>
                                            <li>Isi formulir pendaftaran dengan data yang valid</li>
                                            <li>Mahasiswa/Pegawai POLBAN menggunakan email institusi (@polban.ac.id)</li>
                                            <li>Pengguna umum dapat menggunakan email pribadi</li>
                                            <li>Verifikasi email melalui link yang dikirim ke alamat email Anda</li>
                                            <li>Login menggunakan email dan password yang telah dibuat</li>
                                        </ol>
                                    </div>
                                </div>
                                
                                <!-- FAQ Item 2 -->
                                <div class="faq-item p-4 rounded-lg bg-gray-50">
                                    <div class="faq-question flex justify-between items-center">
                                        <h3 class="text-lg font-medium">Apa saja persyaratan untuk mengunggah dokumen ke Perpustakaan Digital?</h3>
                                        <i class="fas fa-chevron-down text-polban-green"></i>
                                    </div>
                                    <div class="faq-answer mt-3 text-gray-600">
                                        <p>Persyaratan mengunggah dokumen:</p>
                                        <ul class="list-disc pl-5 space-y-2 mt-2">
                                            <li>Dokumen harus merupakan karya asli atau memiliki izin publikasi</li>
                                            <li>Format file yang diterima: PDF, DOCX, PPTX</li>
                                            <li>Ukuran maksimal file: 20MB</li>
                                            <li>Untuk skripsi/tesis harus sudah disetujui oleh pembimbing</li>
                                            <li>Dokumen harus dilengkapi metadata yang lengkap (judul, abstrak, kata kunci)</li>
                                            <li>Dokumen tidak mengandung materi yang melanggar hak cipta</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- FAQ Item 3 -->
                                <div class="faq-item p-4 rounded-lg bg-gray-50">
                                    <div class="faq-question flex justify-between items-center">
                                        <h3 class="text-lg font-medium">Berapa lama durasi peminjaman dokumen digital?</h3>
                                        <i class="fas fa-chevron-down text-polban-green"></i>
                                    </div>
                                    <div class="faq-answer mt-3 text-gray-600">
                                        <p>Durasi peminjaman bervariasi berdasarkan jenis pengguna:</p>
                                        <ul class="list-disc pl-5 space-y-2 mt-2">
                                            <li><strong>Mahasiswa POLBAN:</strong> 7 hari (dapat diperpanjang 1 kali)</li>
                                            <li><strong>Dosen/Pegawai POLBAN:</strong> 14 hari (dapat diperpanjang 2 kali)</li>
                                            <li><strong>Pengguna umum:</strong> 3 hari (tidak dapat diperpanjang)</li>
                                        </ul>
                                        <p class="mt-2">Setelah masa pinjam berakhir, dokumen akan otomatis tidak dapat diakses dan harus dipinjam kembali jika diperlukan.</p>
                                    </div>
                                </div>
                                
                                <!-- FAQ Item 4 -->
                                <div class="faq-item p-4 rounded-lg bg-gray-50">
                                    <div class="faq-question flex justify-between items-center">
                                        <h3 class="text-lg font-medium">Bagaimana cara mengakses jurnal internasional melalui Perpustakaan Digital?</h3>
                                        <i class="fas fa-chevron-down text-polban-green"></i>
                                    </div>
                                    <div class="faq-answer mt-3 text-gray-600">
                                        <p>Untuk mengakses jurnal internasional:</p>
                                        <ol class="list-decimal pl-5 space-y-2 mt-2">
                                            <li>Login ke akun Perpustakaan Digital POLBAN</li>
                                            <li>Pilih menu "Koleksi" > "Jurnal"</li>
                                            <li>Gunakan fitur pencarian untuk menemukan jurnal yang diinginkan</li>
                                            <li>Jurnal berlangganan akan memiliki tombol "Akses Full Text"</li>
                                            <li>Untuk jurnal tertentu mungkin perlu menggunakan VPN kampus saat mengakses dari luar jaringan POLBAN</li>
                                        </ol>
                                        <p class="mt-2">Jika mengalami kesulitan, silakan hubungi layanan referensi perpustakaan.</p>
                                    </div>
                                </div>
                                
                                <!-- FAQ Item 5 -->
                                <div class="faq-item p-4 rounded-lg bg-gray-50">
                                    <div class="faq-question flex justify-between items-center">
                                        <h3 class="text-lg font-medium">Apa yang harus dilakukan jika lupa password?</h3>
                                        <i class="fas fa-chevron-down text-polban-green"></i>
                                    </div>
                                    <div class="faq-answer mt-3 text-gray-600">
                                        <p>Jika lupa password:</p>
                                        <ol class="list-decimal pl-5 space-y-2 mt-2">
                                            <li>Klik tombol "Lupa Password" di halaman login</li>
                                            <li>Masukkan alamat email yang terdaftar</li>
                                            <li>Anda akan menerima email dengan link reset password</li>
                                            <li>Klik link tersebut dan buat password baru</li>
                                            <li>Jika email tidak diterima, periksa folder spam atau hubungi admin perpustakaan</li>
                                        </ol>
                                        <p class="mt-2">Untuk keamanan, link reset password hanya berlaku selama 24 jam.</p>
                                    </div>
                                </div>
                                
                                <!-- FAQ Item 6 -->
                                <div class="faq-item p-4 rounded-lg bg-gray-50">
                                    <div class="faq-question flex justify-between items-center">
                                        <h3 class="text-lg font-medium">Bagaimana cara mengajukan permintaan dokumen yang tidak tersedia?</h3>
                                        <i class="fas fa-chevron-down text-polban-green"></i>
                                    </div>
                                    <div class="faq-answer mt-3 text-gray-600">
                                        <p>Anda dapat mengajukan permintaan dokumen melalui:</p>
                                        <ul class="list-disc pl-5 space-y-2 mt-2">
                                            <li>Formulir permintaan dokumen di halaman "Layanan"</li>
                                            <li>Email ke perpusdigital@polban.ac.id dengan subjek "Permintaan Dokumen"</li>
                                            <li>Langsung ke meja layanan referensi di perpustakaan fisik</li>
                                        </ul>
                                        <p class="mt-2">Sertakan informasi selengkap mungkin tentang dokumen yang Anda butuhkan (judul, pengarang, tahun, dll). Tim kami akan berusaha memenuhi permintaan dalam waktu 3-5 hari kerja.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="mt-8 flex justify-center" data-aos="fade-up">
                        <nav class="inline-flex rounded-md shadow">
                            <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-polban-green font-medium">1</a>
                            <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">2</a>
                            <a href="#" class="px-4 py-2 border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">3</a>
                            <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </nav>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="lg:w-1/3 space-y-6">
                    <!-- Ask Question -->
                    <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-left">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-question text-polban-green mr-2"></i>
                            Ajukan Pertanyaan
                        </h3>
                        <p class="text-gray-600 mb-4">Tidak menemukan jawaban yang Anda cari? Ajukan pertanyaan baru dan tim kami akan segera merespons.</p>
                        <form>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="name">Nama</label>
                                <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-polban-green">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="email">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-polban-green">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="question">Pertanyaan Anda</label>
                                <textarea id="question" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-polban-green"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-polban-green hover:bg-polban-dark-green text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-300 shadow-lg">
                                Kirim Pertanyaan
                            </button>
                        </form>
                    </div>
                   
    </section>

    <!-- Floating Action Button -->
    <div class="fixed bottom-8 right-8 z-40">
        <div class="floating-btn bg-polban-green hover:bg-polban-dark-green text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg cursor-pointer transition-colors duration-200">
            <i class="fas fa-question text-xl"></i>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h4 class="text-lg font-bold mb-4 flex items-center">
                       <img src="<?= base_url('images/logo-polban.png') ?>" alt="Politeknik Negeri Bandung" class="h-8 mr-2">
                        Perpustakaan Digital
                    </h4>
                    <p class="text-gray-400 mb-4">Menyediakan akses digital ke koleksi akademik dan penelitian Politeknik Negeri Bandung.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Layanan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Peminjaman Digital</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Referensi Online</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Penelusuran Koleksi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Bantuan Penelitian</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Panduan Pengguna</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Koleksi</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Buku Digital</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Jurnal Elektronik</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Skripsi & Tesis</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Bahan Ajar</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Karya Ilmiah</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-polban-green"></i>
                            <span>Jl. Gegerkalong Hilir, Ds. Ciwaruga, Bandung 40012, Jawa Barat</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-polban-green"></i>
                            <span>(022) 2013789</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-polban-green"></i>
                            <span>perpusdigital@polban.ac.id</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock mr-3 text-polban-green"></i>
                            <span>Senin-Jumat: 08.00-16.00 WIB</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2025 Perpustakaan Digital Politeknik Negeri Bandung. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Syarat & Ketentuan</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Peta Situs</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS animation
        AOS.init({
            duration: 800,
            once: true
        });
        
        // FAQ Accordion Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', () => {
                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                        }
                    });
                    
                    // Toggle current item
                    item.classList.toggle('active');
                    
                    // Rotate icon
                    const icon = question.querySelector('i');
                    if (item.classList.contains('active')) {
                        icon.classList.remove('fa-chevron-down');
                        icon.classList.add('fa-chevron-up');
                    } else {
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    }
                });
            });
            
            // Mobile menu toggle (placeholder - would need implementation)
            const mobileMenuButton = document.querySelector('.lg\\:hidden');
            // You would add click handler here for mobile menu
            
            // Floating button interaction
            const floatBtn = document.querySelector('.floating-btn');
            if (floatBtn) {
                floatBtn.addEventListener('click', function() {
                    // Would typically open a help modal or chat
                    alert('Bantuan: Silahkan hubungi perpusdigital@polban.ac.id');
                });
            }
        });
    </script>
</body>
</html>