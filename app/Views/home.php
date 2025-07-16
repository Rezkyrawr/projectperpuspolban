<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Perpustakaan Digital Politeknik Negeri Bandung - Akses digital ke koleksi akademik dan penelitian">
    <title>Perpustakaan Digital POLBAN | Politeknik Negeri Bandung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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
        
        .swiper {
            width: 100%;
            height: 100%;
        }
        
        .swiper-slide {
            height: 400px;
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        
        .swiper-slide:hover img {
            transform: scale(1.1);
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0) 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-start;
            padding: 2rem;
            color: white;
            z-index: 10;
        }
        
        @media (min-width: 768px) {
            .swiper-slide {
                height: 500px;
            }
            
            .overlay {
                background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0) 100%);
                justify-content: center;
                padding: 4rem;
            }
        }
        
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
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
        
        .search-box {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .search-box:focus-within {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }
        
        .folder-item {
            transition: all 0.3s ease;
        }
        
        .folder-item:hover {
            transform: translateX(5px);
        }
        
        .stats-card {
            transition: all 0.3s ease;
        }
        
        .stats-card:hover {
            transform: scale(1.05);
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

        /* Dropdown Folder Styles */
        .dropdown-folder {
            position: relative;
        }

        .dropdown-content {
            max-height: 0;
            overflow: hidden;
            background-color: #f9f9f9;
            border-left: 2px solid #8BC34A;
            transition: max-height 0.3s ease-out;
        }

        .dropdown-folder.active .dropdown-content {
            max-height: 500px;
            transition: max-height 0.3s ease-in;
        }

        .dropdown-folder button {
            transition: all 0.3s ease;
            text-align: left;
            width: 100%;
        }

        .dropdown-folder button i {
            transition: transform 0.3s ease;
        }

        /* Sidebar sticky */
        .sticky-sidebar {
            position: -webkit-sticky;
            position: sticky;
            top: 1rem;
            align-self: flex-start;
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
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <button class="lg:hidden text-gray-800 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="<?= base_url('images/polban2.jpg') ?>" alt="Perpustakaan Digital POLBAN">
                    <div class="overlay">
                        <div data-aos="fade-right" data-aos-duration="800">
                            <span class="bg-polban-green text-white text-sm px-3 py-1 rounded-full inline-block mb-3">Artikel Terbaru</span>
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-shadow max-w-2xl">Jelajahi Koleksi Digital Politeknik Negeri Bandung</h2>
                            <p class="text-lg md:text-xl mb-6 text-shadow max-w-2xl">Akses ribuan jurnal, skripsi, modul pembelajaran, dan karya ilmiah lainnya secara digital.</p>
                            <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                                <a href="#" class="bg-polban-green hover:bg-polban-dark-green text-white font-semibold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg flex items-center justify-center">
                                    <i class="fas fa-search mr-2"></i> Cari Koleksi
                                </a>
                                <a href="#" class="bg-white hover:bg-gray-100 text-polban-dark-green font-semibold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg flex items-center justify-center">
                                    <i class="fas fa-book-reader mr-2"></i> Panduan Pengguna
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="<?= base_url('images/polban3.jpg') ?>" alt="Penelitian POLBAN">
                    <div class="overlay">
                        <div data-aos="fade-right" data-aos-duration="800">
                            <span class="bg-polban-blue text-white text-sm px-3 py-1 rounded-full inline-block mb-3">Penelitian</span>
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-shadow max-w-2xl">Hasil Penelitian Dosen & Mahasiswa POLBAN</h2>
                            <p class="text-lg md:text-xl mb-6 text-shadow max-w-2xl">Temukan berbagai penelitian inovatif dari civitas akademika Politeknik Negeri Bandung.</p>
                            <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                                <a href="#" class="bg-polban-green hover:bg-polban-dark-green text-white font-semibold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg flex items-center justify-center">
                                    <i class="fas fa-flask mr-2"></i> Telusuri Penelitian
                                </a>
                                <a href="#" class="bg-white hover:bg-gray-100 text-polban-dark-green font-semibold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg flex items-center justify-center">
                                    <i class="fas fa-upload mr-2"></i> Unggah Karya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="https://plus.unsplash.com/premium_photo-1677567996070-68fa4181775a?q=80&w=1172&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="E-Learning POLBAN">
                    <div class="overlay">
                        <div data-aos="fade-right" data-aos-duration="800">
                            <span class="bg-purple-600 text-white text-sm px-3 py-1 rounded-full inline-block mb-3">Pembelajaran</span>
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-shadow max-w-2xl">Sumber Belajar Digital untuk Mahasiswa</h2>
                            <p class="text-lg md:text-xl mb-6 text-shadow max-w-2xl">Akses modul pembelajaran, bahan ajar, dan materi perkuliahan dari seluruh program studi.</p>
                            <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                                <a href="#" class="bg-polban-green hover:bg-polban-dark-green text-white font-semibold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg flex items-center justify-center">
                                    <i class="fas fa-graduation-cap mr-2"></i> Materi Kuliah
                                </a>
                                <a href="#" class="bg-white hover:bg-gray-100 text-polban-dark-green font-semibold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg flex items-center justify-center">
                                    <i class="fas fa-chalkboard-teacher mr-2"></i> Panduan Dosen
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Main Content -->
                <div class="lg:w-2/3">
                    <!-- New Arrivals -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8" data-aos="fade-up">
                        <div class="bg-polban-green text-white px-6 py-4 flex justify-between items-center">
                            <h2 class="text-xl font-bold"><i class="fas fa-star mr-2"></i> Artikel Terbaru</h2>
                            <a href="/artikel" class="text-sm hover:text-polban-light">Lihat Semua <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <!-- Item 1 -->
                                <div class="flex items-start p-4 hover:bg-polban-light rounded-lg transition-colors duration-200 folder-item">
                                    <div class="bg-polban-green text-white p-3 rounded-lg mr-4">
                                        <i class="fas fa-file-pdf text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800 hover:text-polban-dark-green cursor-pointer">
                                            Telemetri Penakar Hujan di Waibao Kabupaten Flores Timur NTT
                                        </h3>
                                        <div class="flex flex-wrap items-center text-sm text-gray-600 mt-1">
                                            <span class="mr-3"><i class="far fa-calendar-alt mr-1"></i> 2025-07-02</span>
                                            <span class="mr-3"><i class="far fa-user mr-1"></i> Tian Swi Hong</span>
                                            <span><i class="far fa-file mr-1"></i> PDF</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Item 2 -->
                                <div class="flex items-start p-4 hover:bg-polban-light rounded-lg transition-colors duration-200 folder-item">
                                    <div class="bg-blue-500 text-white p-3 rounded-lg mr-4">
                                        <i class="fas fa-file-word text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800 hover:text-polban-dark-green cursor-pointer">
                                            Kontribusi Kekuatan Tulangan Diagonal dan Tulangan Vertikal Sengkang Dalam Menahan Gaya Gempa pada Coupling Beam
                                        </h3>
                                        <div class="flex flex-wrap items-center text-sm text-gray-600 mt-1">
                                            <span class="mr-3"><i class="far fa-calendar-alt mr-1"></i> 2025-06-26</span>
                                            <span class="mr-3"><i class="far fa-user mr-1"></i> Andri Budiadi</span>
                                            <span><i class="far fa-file mr-1"></i> DOCX</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Item 3 -->
                                <div class="flex items-start p-4 hover:bg-polban-light rounded-lg transition-colors duration-200 folder-item">
                                    <div class="bg-purple-500 text-white p-3 rounded-lg mr-4">
                                        <i class="fas fa-file-pdf text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800 hover:text-polban-dark-green cursor-pointer">
                                            Pemanfaatan Ekstrak Daun Pepaya Jepang (Cnidoscolus aconitifolius) Sebagai Inhibitor Korosi
                                        </h3>
                                        <div class="flex flex-wrap items-center text-sm text-gray-600 mt-1">
                                            <span class="mr-3"><i class="far fa-calendar-alt mr-1"></i> 2025-06-26</span>
                                            <span class="mr-3"><i class="far fa-user mr-1"></i> Rizal Mutakin & Surya Adi Ismail</span>
                                            <span><i class="far fa-file mr-1"></i> PDF</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Item 4 -->
                                <div class="flex items-start p-4 hover:bg-polban-light rounded-lg transition-colors duration-200 folder-item">
                                    <div class="bg-yellow-500 text-white p-3 rounded-lg mr-4">
                                        <i class="fas fa-file-powerpoint text-xl"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-800 hover:text-polban-dark-green cursor-pointer">
                                            Produksi Gula Reduksi dengan Hidrolisis Tandan Kosong Kelapa Sawit Hasil Organosolv
                                        </h3>
                                        <div class="flex flex-wrap items-center text-sm text-gray-600 mt-1">
                                            <span class="mr-3"><i class="far fa-calendar-alt mr-1"></i> 2025-06-26</span>
                                            <span class="mr-3"><i class="far fa-user mr-1"></i> Alvanissa Nurfadya & Vini Ivania Pardeny</span>
                                            <span><i class="far fa-file mr-1"></i> PPTX</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Categories Dropdown -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden" data-aos="fade-up">
                        <div class="bg-polban-dark-green text-white px-6 py-4">
                            <h2 class="text-xl font-bold"><i class="fas fa-folder-open mr-2"></i> Sub Folder</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-2">
                                <!-- Dropdown Item 1 -->
                                <div class="dropdown-folder group">
                                    <button class="w-full flex justify-between items-center p-3 bg-gray-50 hover:bg-polban-light rounded-lg transition-colors duration-200">
                                        <span class="font-medium text-left">
                                            <i class="fas fa-book text-blue-500 mr-2"></i> Article (5)
                                        </span>
                                        <i class="fas fa-chevron-down text-gray-500 group-[.active]:rotate-180 transition-transform"></i>
                                    </button>
                                    <div class="dropdown-content hidden pl-6 mt-1 space-y-1">
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Article 2024</a>
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Article 2023</a>
                                    </div>
                                </div>
                                
                                <!-- Dropdown Item 2 -->
                                <div class="dropdown-folder group">
                                    <button class="w-full flex justify-between items-center p-3 bg-gray-50 hover:bg-polban-light rounded-lg transition-colors duration-200">
                                        <span class="font-medium text-left">
                                            <i class="fas fa-book-open text-green-500 mr-2"></i> Bahan Ajar/Modul (131)
                                        </span>
                                        <i class="fas fa-chevron-down text-gray-500 group-[.active]:rotate-180 transition-transform"></i>
                                    </button>
                                    <div class="dropdown-content hidden pl-6 mt-1 space-y-1">
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Modul Teknik</a>
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Modul Bisnis</a>
                                    </div>
                                </div>
                                
                                <!-- Dropdown Item 3 -->
                                <div class="dropdown-folder group">
                                    <button class="w-full flex justify-between items-center p-3 bg-gray-50 hover:bg-polban-light rounded-lg transition-colors duration-200">
                                        <span class="font-medium text-left">
                                            <i class="fas fa-comments text-purple-500 mr-2"></i> Discussion (10)
                                        </span>
                                        <i class="fas fa-chevron-down text-gray-500 group-[.active]:rotate-180 transition-transform"></i>
                                    </button>
                                    <div class="dropdown-content hidden pl-6 mt-1 space-y-1">
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Diskusi Umum</a>
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Diskusi Akademik</a>
                                    </div>
                                </div>
                                
                                <!-- Dropdown Item 4 -->
                                <div class="dropdown-folder group">
                                    <button class="w-full flex justify-between items-center p-3 bg-gray-50 hover:bg-polban-light rounded-lg transition-colors duration-200">
                                        <span class="font-medium text-left">
                                            <i class="fas fa-graduation-cap text-red-500 mr-2"></i> Disertasi Tenaga Pendidikan Politeknik Negeri Bandung (1)
                                        </span>
                                        <i class="fas fa-chevron-down text-gray-500 group-[.active]:rotate-180 transition-transform"></i>
                                    </button>
                                    <div class="dropdown-content hidden pl-6 mt-1 space-y-1">
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Disertasi 2024</a>
                                    </div>
                                </div>
                                
                                <!-- Dropdown Item 5 -->
                                <div class="dropdown-folder group">
                                    <button class="w-full flex justify-between items-center p-3 bg-gray-50 hover:bg-polban-light rounded-lg transition-colors duration-200">
                                        <span class="font-medium text-left">
                                            <i class="fas fa-book text-yellow-500 mr-2"></i> E-book (25)
                                        </span>
                                        <i class="fas fa-chevron-down text-gray-500 group-[.active]:rotate-180 transition-transform"></i>
                                    </button>
                                    <div class="dropdown-content hidden pl-6 mt-1 space-y-1">
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">E-book Teknik</a>
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">E-book Bisnis</a>
                                    </div>
                                </div>
                                
                                <!-- Dropdown Item 6 -->
                                <div class="dropdown-folder group">
                                    <button class="w-full flex justify-between items-center p-3 bg-gray-50 hover:bg-polban-light rounded-lg transition-colors duration-200">
                                        <span class="font-medium text-left">
                                            <i class="fas fa-newspaper text-blue-500 mr-2"></i> Electronics Clipping (221)
                                        </span>
                                        <i class="fas fa-chevron-down text-gray-500 group-[.active]:rotate-180 transition-transform"></i>
                                    </button>
                                    <div class="dropdown-content hidden pl-6 mt-1 space-y-1">
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Clipping 2024</a>
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Clipping 2023</a>
                                    </div>
                                </div>
                                
                                <!-- Dropdown Item 7 -->
                                <div class="dropdown-folder group">
                                    <button class="w-full flex justify-between items-center p-3 bg-gray-50 hover:bg-polban-light rounded-lg transition-colors duration-200">
                                        <span class="font-medium text-left">
                                            <i class="fas fa-camera text-green-500 mr-2"></i> Foto-foto (1)
                                        </span>
                                        <i class="fas fa-chevron-down text-gray-500 group-[.active]:rotate-180 transition-transform"></i>
                                    </button>
                                    <div class="dropdown-content hidden pl-6 mt-1 space-y-1">
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Foto Kegiatan</a>
                                    </div>
                                </div>
                                
                                <!-- Dropdown Item 8 -->
                                <div class="dropdown-folder group">
                                    <button class="w-full flex justify-between items-center p-3 bg-gray-50 hover:bg-polban-light rounded-lg transition-colors duration-200">
                                        <span class="font-medium text-left">
                                            <i class="fas fa-globe text-purple-500 mr-2"></i> IndonesiaDLN (3)
                                        </span>
                                        <i class="fas fa-chevron-down text-gray-500 group-[.active]:rotate-180 transition-transform"></i>
                                    </button>
                                    <div class="dropdown-content hidden pl-6 mt-1 space-y-1">
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">DLN 2024</a>
                                    </div>
                                </div>
                                
                                <!-- Dropdown Item 9 -->
                                <div class="dropdown-folder group">
                                    <button class="w-full flex justify-between items-center p-3 bg-gray-50 hover:bg-polban-light rounded-lg transition-colors duration-200">
                                        <span class="font-medium text-left">
                                            <i class="fas fa-file-alt text-red-500 mr-2"></i> Journal Politeknik Negeri Bandung (612)
                                        </span>
                                        <i class="fas fa-chevron-down text-gray-500 group-[.active]:rotate-180 transition-transform"></i>
                                    </button>
                                    <div class="dropdown-content hidden pl-6 mt-1 space-y-1">
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Jurnal Teknik</a>
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Jurnal Bisnis</a>
                                    </div>
                                </div>
                                
                                <!-- Dropdown Item 10 -->
                                <div class="dropdown-folder group">
                                    <button class="w-full flex justify-between items-center p-3 bg-gray-50 hover:bg-polban-light rounded-lg transition-colors duration-200">
                                        <span class="font-medium text-left">
                                            <i class="fas fa-scroll text-yellow-500 mr-2"></i> Jurnal Ilmiah (194)
                                        </span>
                                        <i class="fas fa-chevron-down text-gray-500 group-[.active]:rotate-180 transition-transform"></i>
                                    </button>
                                    <div class="dropdown-content hidden pl-6 mt-1 space-y-1">
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Jurnal Nasional</a>
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Jurnal Internasional</a>
                                    </div>
                                </div>
                                
                                <!-- Dropdown Item 11 -->
                                <div class="dropdown-folder group">
                                    <button class="w-full flex justify-between items-center p-3 bg-gray-50 hover:bg-polban-light rounded-lg transition-colors duration-200">
                                        <span class="font-medium text-left">
                                            <i class="fas fa-file-signature text-blue-500 mr-2"></i> Karya Tulis Berdasarkan Subjek Ilmu (309)
                                        </span>
                                        <i class="fas fa-chevron-down text-gray-500 group-[.active]:rotate-180 transition-transform"></i>
                                    </button>
                                    <div class="dropdown-content hidden pl-6 mt-1 space-y-1">
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Teknik Sipil</a>
                                        <a href="#" class="block py-2 text-sm hover:text-polban-green">Teknik Elektro</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="lg:w-1/3 sticky-sidebar space-y-6">
                    <!-- Search Box -->
                    <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-left">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-search text-polban-green mr-2"></i>
                            Cari Koleksi
                        </h3>
                        <div class="search-box flex w-full overflow-hidden rounded-lg border border-gray-200 focus-within:border-polban-green focus-within:ring-2 focus-within:ring-polban-green">
                            <input type="text" placeholder="Masukkan kata kunci..." class="w-full px-4 py-3 text-sm focus:outline-none">
                            <button class="bg-polban-green hover:bg-polban-dark-green text-white px-4 py-3 transition-colors duration-200">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="text-sm text-polban-green hover:text-polban-dark-green flex items-center">
                                <i class="fas fa-filter mr-1"></i> Pencarian Lanjutan
                            </a>
                        </div>
                    </div>
                    
                    <!-- Announcements -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden" data-aos="fade-left" data-aos-delay="200">
                        <div class="bg-polban-blue text-white px-6 py-4">
                            <h3 class="text-lg font-bold flex items-center">
                                <i class="fas fa-bullhorn mr-2"></i>
                                Pengumuman
                            </h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="border-l-4 border-polban-blue pl-4 py-1">
                                    <h4 class="font-medium text-gray-800 hover:text-polban-blue cursor-pointer">
                                        Workshop Pemanfaatan Perpustakaan Digital untuk Penelitian
                                    </h4>
                                    <p class="text-xs text-gray-600 mt-1">15 Juli 2025</p>
                                </div>
                                
                                <div class="border-l-4 border-polban-blue pl-4 py-1">
                                    <h4 class="font-medium text-gray-800 hover:text-polban-blue cursor-pointer">
                                        Perpanjangan Masa Pinjam Buku Digital Selama Libur Semester
                                    </h4>
                                    <p class="text-xs text-gray-600 mt-1">10 Juli 2025</p>
                                </div>
                                
                                <div class="border-l-4 border-polban-blue pl-4 py-1">
                                    <h4 class="font-medium text-gray-800 hover:text-polban-blue cursor-pointer">
                                        Penambahan Koleksi Jurnal Internasional Terbaru
                                    </h4>
                                    <p class="text-xs text-gray-600 mt-1">5 Juli 2025</p>
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                <a href="/pengumuman" class="text-sm text-polban-blue hover:text-blue-700">Lihat Semua Pengumuman <i class="fas fa-arrow-right ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Links -->
                    <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-left" data-aos-delay="300">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-link text-polban-green mr-2"></i>
                            Tautan Cepat
                        </h3>
                        <ul class="space-y-2">
                            <li><a href="https://www.polban.ac.id/" class="text-polban-green hover:text-polban-dark-green flex items-center" target="_blank">
                                <i class="fas fa-external-link-alt mr-2 text-sm"></i> Website POLBAN
                            </a></li>
                            <li><a href="https://library.polban.ac.id/" class="text-polban-green hover:text-polban-dark-green flex items-center" target="_blank">
                                <i class="fas fa-external-link-alt mr-2 text-sm"></i> Perpustakaan POLBAN
                            </a></li>
                            <li><a href="https://elib.polban.ac.id/" class="text-polban-green hover:text-polban-dark-green flex items-center" target="_blank">
                                <i class="fas fa-external-link-alt mr-2 text-sm"></i> Elib POLBAN
                            </a></li>
                            <li><a href="https://e-learning.polban.ac.id/" class="text-polban-green hover:text-polban-dark-green flex items-center" target="_blank">
                                <i class="fas fa-external-link-alt mr-2 text-sm"></i> E-Learning POLBAN
                            </a></li>
                            <li><a href="https://www.indonesiadln.org/" class="text-polban-green hover:text-polban-dark-green flex items-center" target="_blank">
                                <i class="fas fa-external-link-alt mr-2 text-sm"></i> IndonesiaDLN
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating Action Button -->
    <a href="/faq"><div class="fixed bottom-8 right-8 z-40">
        <div class="floating-btn bg-polban-green hover:bg-polban-dark-green text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg cursor-pointer transition-colors duration-200">
            <i class="fas fa-question text-xl"></i>
        </div>
    </div></a>

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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS animation
        AOS.init({
            duration: 800,
            once: true
        });
        
        // Initialize Swiper
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });
        
        // Mobile menu toggle (placeholder - would need implementation)
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.lg\\:hidden');
            // You would add click handler here for mobile menu
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Floating button interaction
            const floatBtn = document.querySelector('.floating-btn');
            if (floatBtn) {
                floatBtn.addEventListener('click', function() {
                    // Would typically open a help modal or chat
                   
                });
            }

            // Dropdown folder functionality
            document.querySelectorAll('.dropdown-folder button').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const folder = this.parentElement;
                    const content = this.nextElementSibling;
                    
                    // Toggle active class
                    folder.classList.toggle('active');
                    
                    // Toggle content visibility with animation
                    if (content.classList.contains('hidden')) {
                        content.classList.remove('hidden');
                        content.style.maxHeight = '0';
                        setTimeout(() => {
                            content.style.maxHeight = content.scrollHeight + 'px';
                        }, 10);
                    } else {
                        content.style.maxHeight = '0';
                        setTimeout(() => {
                            content.classList.add('hidden');
                        }, 300);
                    }
                    
                    // Close other open dropdowns
                    document.querySelectorAll('.dropdown-folder').forEach(otherFolder => {
                        if (otherFolder !== folder && otherFolder.classList.contains('active')) {
                            otherFolder.classList.remove('active');
                            const otherContent = otherFolder.querySelector('.dropdown-content');
                            otherContent.style.maxHeight = '0';
                            setTimeout(() => {
                                otherContent.classList.add('hidden');
                            }, 300);
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>