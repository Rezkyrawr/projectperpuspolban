<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bookmark Koleksi - Perpustakaan Digital Politeknik Negeri Bandung">
    <title>Bookmark Saya | Perpustakaan Digital POLBAN</title>
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
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .folder-item {
            transition: all 0.3s ease;
        }
        
        .folder-item:hover {
            transform: translateX(5px);
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
        
        .floating-btn {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .bookmark-item {
            transition: all 0.2s ease;
        }
        
        .bookmark-item:hover {
            background-color: #f0f7e4;
        }
        
        .empty-state {
            background-color: #f8fafc;
            border: 2px dashed #e2e8f0;
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


    <!-- Main Content -->
    <main class="py-8">
        <div class="container mx-auto px-4">
            <!-- Page Header -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8" data-aos="fade-up">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">
                        <i class="fas fa-bookmark text-polban-green mr-2"></i> Bookmark Saya
                    </h1>
                    <p class="text-gray-600">Koleksi dokumen yang telah Anda tandai untuk dibaca nanti</p>
                </div>
                <div class="mt-4 md:mt-0 flex space-x-3">
                    <button class="bg-polban-green hover:bg-polban-dark-green text-white px-4 py-2 rounded-lg flex items-center">
                        <i class="fas fa-download mr-2"></i> Ekspor Bookmark
                    </button>
                    <button class="bg-white hover:bg-gray-100 border border-gray-300 text-gray-700 px-4 py-2 rounded-lg flex items-center">
                        <i class="fas fa-sliders-h mr-2"></i> Filter
                    </button>
                </div>
            </div>
            
            <!-- Bookmark Content -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <!-- Tabs -->
                <div class="border-b border-gray-200">
                    <div class="flex overflow-x-auto">
                        <button class="px-6 py-4 font-medium text-polban-green border-b-2 border-polban-green">
                            Semua Bookmark (12)
                        </button>
                        <button class="px-6 py-4 font-medium text-gray-500 hover:text-polban-green">
                            Jurnal (5)
                        </button>
                        <button class="px-6 py-4 font-medium text-gray-500 hover:text-polban-green">
                            Tesis (4)
                        </button>
                        <button class="px-6 py-4 font-medium text-gray-500 hover:text-polban-green">
                            Modul (3)
                        </button>
                    </div>
                </div>
                
                <!-- Bookmark List -->
                <div class="divide-y divide-gray-200">
                    <!-- Bookmark Item 1 -->
                    <div class="p-6 bookmark-item">
                        <div class="flex flex-col md:flex-row md:items-center justify-between">
                            <div class="flex items-start space-x-4 mb-4 md:mb-0">
                                <div class="bg-polban-green text-white p-3 rounded-lg">
                                    <i class="fas fa-file-pdf text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 hover:text-polban-dark-green cursor-pointer">
                                        Telemetri Penakar Hujan di Waibao Kabupaten Flores Timur NTT
                                    </h3>
                                    <div class="flex flex-wrap items-center text-sm text-gray-600 mt-1">
                                        <span class="mr-3"><i class="far fa-calendar-alt mr-1"></i> 2025-07-02</span>
                                        <span class="mr-3"><i class="far fa-user mr-1"></i> Tian Swi Hong</span>
                                        <span><i class="fas fa-tag mr-1"></i> Jurnal</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-3">
                                <button class="text-gray-500 hover:text-red-500">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                <button class="bg-polban-green hover:bg-polban-dark-green text-white px-4 py-2 rounded-lg text-sm">
                                    <i class="fas fa-download mr-1"></i> Unduh
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bookmark Item 2 -->
                    <div class="p-6 bookmark-item">
                        <div class="flex flex-col md:flex-row md:items-center justify-between">
                            <div class="flex items-start space-x-4 mb-4 md:mb-0">
                                <div class="bg-blue-500 text-white p-3 rounded-lg">
                                    <i class="fas fa-file-word text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 hover:text-polban-dark-green cursor-pointer">
                                        Kontribusi Kekuatan Tulangan Diagonal dan Tulangan Vertikal Sengkang Dalam Menahan Gaya Gempa pada Coupling Beam
                                    </h3>
                                    <div class="flex flex-wrap items-center text-sm text-gray-600 mt-1">
                                        <span class="mr-3"><i class="far fa-calendar-alt mr-1"></i> 2025-06-26</span>
                                        <span class="mr-3"><i class="far fa-user mr-1"></i> Andri Budiadi</span>
                                        <span><i class="fas fa-tag mr-1"></i> Tesis</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-3">
                                <button class="text-gray-500 hover:text-red-500">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                <button class="bg-polban-green hover:bg-polban-dark-green text-white px-4 py-2 rounded-lg text-sm">
                                    <i class="fas fa-download mr-1"></i> Unduh
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bookmark Item 3 -->
                    <div class="p-6 bookmark-item">
                        <div class="flex flex-col md:flex-row md:items-center justify-between">
                            <div class="flex items-start space-x-4 mb-4 md:mb-0">
                                <div class="bg-purple-500 text-white p-3 rounded-lg">
                                    <i class="fas fa-file-pdf text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 hover:text-polban-dark-green cursor-pointer">
                                        Pemanfaatan Ekstrak Daun Pepaya Jepang (Cnidoscolus aconitifolius) Sebagai Inhibitor Korosi
                                    </h3>
                                    <div class="flex flex-wrap items-center text-sm text-gray-600 mt-1">
                                        <span class="mr-3"><i class="far fa-calendar-alt mr-1"></i> 2025-06-26</span>
                                        <span class="mr-3"><i class="far fa-user mr-1"></i> Rizal Mutakin & Surya Adi Ismail</span>
                                        <span><i class="fas fa-tag mr-1"></i> Jurnal</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-3">
                                <button class="text-gray-500 hover:text-red-500">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                <button class="bg-polban-green hover:bg-polban-dark-green text-white px-4 py-2 rounded-lg text-sm">
                                    <i class="fas fa-download mr-1"></i> Unduh
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bookmark Item 4 -->
                    <div class="p-6 bookmark-item">
                        <div class="flex flex-col md:flex-row md:items-center justify-between">
                            <div class="flex items-start space-x-4 mb-4 md:mb-0">
                                <div class="bg-yellow-500 text-white p-3 rounded-lg">
                                    <i class="fas fa-file-powerpoint text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800 hover:text-polban-dark-green cursor-pointer">
                                        Produksi Gula Reduksi dengan Hidrolisis Tandan Kosong Kelapa Sawit Hasil Organosolv
                                    </h3>
                                    <div class="flex flex-wrap items-center text-sm text-gray-600 mt-1">
                                        <span class="mr-3"><i class="far fa-calendar-alt mr-1"></i> 2025-06-26</span>
                                        <span class="mr-3"><i class="far fa-user mr-1"></i> Alvanissa Nurfadya & Vini Ivania Pardeny</span>
                                        <span><i class="fas fa-tag mr-1"></i> Modul</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-3">
                                <button class="text-gray-500 hover:text-red-500">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                <button class="bg-polban-green hover:bg-polban-dark-green text-white px-4 py-2 rounded-lg text-sm">
                                    <i class="fas fa-download mr-1"></i> Unduh
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Empty State (uncomment if needed) -->
                    <!--
                    <div class="p-12 text-center empty-state rounded-lg">
                        <i class="fas fa-bookmark text-4xl text-gray-400 mb-4"></i>
                        <h3 class="text-xl font-medium text-gray-700 mb-2">Belum ada bookmark</h3>
                        <p class="text-gray-500 mb-4">Anda belum menandai dokumen apapun. Mulailah menjelajahi koleksi kami!</p>
                        <button class="bg-polban-green hover:bg-polban-dark-green text-white px-6 py-2 rounded-lg">
                            <i class="fas fa-search mr-2"></i> Jelajahi Koleksi
                        </button>
                    </div>
                    -->
                </div>
                
                <!-- Pagination -->
                <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                    <div class="text-sm text-gray-600">
                        Menampilkan 1-4 dari 12 bookmark
                    </div>
                    <div class="flex space-x-1">
                        <button class="px-3 py-1 rounded border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-3 py-1 rounded border border-polban-green bg-polban-green text-white">
                            1
                        </button>
                        <button class="px-3 py-1 rounded border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                            2
                        </button>
                        <button class="px-3 py-1 rounded border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                            3
                        </button>
                        <button class="px-3 py-1 rounded border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            
    </main>

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
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Tugas Akhir/Tesis</a></li>
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
        
        // Mobile menu toggle (placeholder - would need implementation)
        document.addEventListener('DOMContentLoaded', function() {
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
            
            // Bookmark delete buttons
            const deleteButtons = document.querySelectorAll('.bookmark-item .fa-trash-alt');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    if (confirm('Apakah Anda yakin ingin menghapus bookmark ini?')) {
                        const item = this.closest('.bookmark-item');
                        item.style.opacity = '0';
                        setTimeout(() => {
                            item.remove();
                        }, 300);
                    }
                });
            });
        });
    </script>
</body>
</html>