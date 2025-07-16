<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Semua Artikel Perpustakaan Digital Politeknik Negeri Bandung">
    <title>Semua Artikel | Perpustakaan Digital POLBAN</title>
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
        
        .pagination-link {
            transition: all 0.3s ease;
        }
        
        .pagination-link:hover {
            background-color: #8BC34A;
            color: white;
        }
        
        .article-card {
            transition: all 0.3s ease;
        }
        
        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .aspect-w-1 {
    position: relative;
    padding-bottom: 100%; /* Membuat rasio 1:1 */
    height: 0;
    overflow: hidden;
}

.aspect-w-1 img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
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
                                <a href="/skripsi" class="block px-4 py-2 text-gray-800 hover:bg-polban-light">Skripsi</a>
                                <a href="/modul" class="block px-4 py-2 text-gray-800 hover:bg-polban-light">Modul</a>
                            </div>
                        </div>
                        
                        <a href="/kredit" class="px-4 py-2 text-gray-800 font-medium nav-link">Tentang</a>
                        <a href="/kontak" class="px-4 py-2 text-gray-800 font-medium nav-link">Kontak</a>
                        <a href="diskusi.html" class="px-4 py-2 text-gray-800 font-medium nav-link">Diskusi/Komentar</a>
                        <a href="bookmark.html" class="px-4 py-2 text-gray-800 font-medium nav-link">Bookmark</a>
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

    

    <!-- Main Content -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Main Content -->
                <div class="lg:w-3/4">
                    <!-- Page Header -->
                    <div class="mb-8" data-aos="fade-up">
                        <h1 class="text-3xl font-bold text-gray-800 mb-2">Semua Artikel</h1>
                        <p class="text-gray-600">Menampilkan 127 artikel tersedia di Perpustakaan Digital POLBAN</p>
                    </div>
                    
                    <!-- Filter and Sort -->
                    <div class="bg-white rounded-lg shadow-md p-6 mb-8" data-aos="fade-up">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                            <div class="w-full md:w-auto">
                                <label for="sort" class="block text-sm font-medium text-gray-700 mb-1">Urutkan</label>
                                <select id="sort" class="w-full md:w-48 border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-polban-green">
                                    <option>Terbaru</option>
                                    <option>Terlama</option>
                                    <option>Judul A-Z</option>
                                    <option>Judul Z-A</option>
                                    <option>Paling Banyak Dilihat</option>
                                </select>
                            </div>
                            
                            <div class="w-full md:w-auto">
                                <label for="filter" class="block text-sm font-medium text-gray-700 mb-1">Filter Kategori</label>
                                <select id="filter" class="w-full md:w-48 border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-polban-green">
                                    <option>Semua Kategori</option>
                                    <option>Skripsi & Tesis</option>
                                    <option>Jurnal Ilmiah</option>
                                    <option>Bahan Ajar</option>
                                    <option>Penelitian</option>
                                    <option>Laporan</option>
                                </select>
                            </div>
                            
                            <div class="w-full md:w-auto">
                                <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Cari Artikel</label>
                                <div class="relative">
                                    <input type="text" id="search" placeholder="Cari artikel..." class="w-full border border-gray-300 rounded-md py-2 px-3 pl-10 focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-polban-green">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-search text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Articles List -->
                    <div class="space-y-6">
                        <!-- Article 1 -->
                      <div class="bg-white rounded-xl shadow-md overflow-hidden article-card" data-aos="fade-up">
    <div class="p-6">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Gambar persegi -->
            <div class="md:w-1/4 flex-shrink-0">
                <div class="aspect-w-1 aspect-h-1">
                    <img src="<?= base_url('images/logo-polban4.png') ?>" alt="Article Cover" class="w-full h-full object-cover rounded-lg">
                </div>
            </div>
            
            <div class="md:w-3/4">
                <div class="flex justify-between items-start">
                    <div>
                        <span class="bg-polban-green text-white text-xs px-2 py-1 rounded-full inline-block mb-2">Skripsi</span>
                        <a href="/detail" class="hover:text-polban-green"><h2 class="text-xl font-bold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                            Telemetri Penakar Hujan di Waibao Kabupaten Flores Timur NTT
                        </h2></a>
                    </div>
                    <div class="flex items-center text-gray-500 text-sm">
                        <i class="far fa-eye mr-1"></i> 245
                    </div>
                </div>
                <p class="text-gray-600 mb-3">Sistem telemetri penakar hujan berbasis IoT untuk memantau curah hujan secara real-time di daerah Waibao, Flores Timur.</p>
                <div class="flex flex-wrap items-center text-sm text-gray-500 gap-2">
                    <span><i class="far fa-user mr-1"></i> Tian Swi Hong</span>
                    <span><i class="far fa-calendar-alt mr-1"></i> 2 Juli 2025</span>
                    <span><i class="far fa-file mr-1"></i> PDF, 2.4 MB</span>
                    <span><i class="fas fa-tags mr-1"></i> IoT, Telemetri, Curah Hujan</span>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <a href="#" class="bg-polban-light hover:bg-polban-green hover:text-white text-polban-dark-green text-xs font-medium px-3 py-1 rounded-full transition-colors">
                        <i class="fas fa-download mr-1"></i> Unduh
                    </a>
                    <a href="#" class="bg-polban-light hover:bg-polban-green hover:text-white text-polban-dark-green text-xs font-medium px-3 py-1 rounded-full transition-colors">
                        <i class="far fa-bookmark mr-1"></i> Simpan
                    </a>
                    <a href="#" class="bg-polban-light hover:bg-polban-green hover:text-white text-polban-dark-green text-xs font-medium px-3 py-1 rounded-full transition-colors">
                        <i class="far fa-share-square mr-1"></i> Bagikan
                    </a>
                    <a href="#" class="bg-polban-light hover:bg-polban-green hover:text-white text-polban-dark-green text-xs font-medium px-3 py-1 rounded-full transition-colors">
                        <i class="far fa-comment mr-1"></i> Diskusi
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
                        
           
                        
                        <!-- Article 5 -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden article-card" data-aos="fade-up" data-aos-delay="400">
                            <div class="p-6">
                                <div class="flex flex-col md:flex-row gap-6">
                                    <div class="md:w-1/4 flex-shrink-0">
                                        <img src="<?= base_url('images/logo-polban.png') ?>" alt="Article Cover" class="w-full h-40 object-cover rounded-lg">
                                    </div>
                                    <div class="md:w-3/4">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full inline-block mb-2">Laporan</span>
                                                <h2 class="text-xl font-bold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                                                    Analisis Kinerja Sistem Informasi Akademik Berbasis Web Menggunakan Metode Webqual 4.0
                                                </h2>
                                            </div>
                                            <div class="flex items-center text-gray-500 text-sm">
                                                <i class="far fa-eye mr-1"></i> 210
                                            </div>
                                        </div>
                                        <p class="text-gray-600 mb-3">Evaluasi kualitas sistem informasi akademik berbasis web menggunakan metode Webqual 4.0 di lingkungan Politeknik Negeri Bandung.</p>
                                        <div class="flex flex-wrap items-center text-sm text-gray-500 gap-2">
                                            <span><i class="far fa-user mr-1"></i> Dian Surya Wijaya</span>
                                            <span><i class="far fa-calendar-alt mr-1"></i> 18 Juni 2025</span>
                                            <span><i class="far fa-file mr-1"></i> PDF, 1.2 MB</span>
                                            <span><i class="fas fa-tags mr-1"></i> Sistem Informasi, Webqual, Evaluasi</span>
                                        </div>
                                        <div class="mt-4 flex flex-wrap gap-2">
                                            <a href="#" class="bg-polban-light hover:bg-polban-green hover:text-white text-polban-dark-green text-xs font-medium px-3 py-1 rounded-full transition-colors">
                                                <i class="fas fa-download mr-1"></i> Unduh
                                            </a>
                                            <a href="#" class="bg-polban-light hover:bg-polban-green hover:text-white text-polban-dark-green text-xs font-medium px-3 py-1 rounded-full transition-colors">
                                                <i class="far fa-bookmark mr-1"></i> Simpan
                                            </a>
                                            <a href="#" class="bg-polban-light hover:bg-polban-green hover:text-white text-polban-dark-green text-xs font-medium px-3 py-1 rounded-full transition-colors">
                                                <i class="far fa-share-square mr-1"></i> Bagikan
                                            </a>
                                            <a href="#" class="bg-polban-light hover:bg-polban-green hover:text-white text-polban-dark-green text-xs font-medium px-3 py-1 rounded-full transition-colors">
                                                <i class="far fa-comment mr-1"></i> Diskusi
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="mt-10 flex justify-center" data-aos="fade-up">
                        <nav class="inline-flex rounded-md shadow">
                            <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 pagination-link">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 font-medium hover:bg-gray-50 pagination-link">1</a>
                            <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 font-medium hover:bg-gray-50 pagination-link">2</a>
                            <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 font-medium hover:bg-gray-50 pagination-link">3</a>
                            <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 font-medium hover:bg-gray-50 pagination-link">4</a>
                            <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 font-medium hover:bg-gray-50 pagination-link">5</a>
                            <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 pagination-link">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </nav>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="lg:w-1/4 space-y-6">
                    <!-- Search Box -->
                    <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-left">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-search text-polban-green mr-2"></i>
                            Cari Artikel
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
                    
                    <!-- Categories -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden" data-aos="fade-left" data-aos-delay="100">
                        <div class="bg-polban-dark-green text-white px-6 py-4">
                            <h3 class="text-lg font-bold flex items-center">
                                <i class="fas fa-folder-open mr-2"></i>
                                Kategori
                            </h3>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-3">
                                <li>
                                    <a href="#" class="flex justify-between items-center text-gray-700 hover:text-polban-green transition-colors">
                                        <span class="flex items-center">
                                            <i class="fas fa-graduation-cap text-blue-500 mr-2"></i>
                                            Skripsi & Tesis
                                        </span>
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">5678</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex justify-between items-center text-gray-700 hover:text-polban-green transition-colors">
                                        <span class="flex items-center">
                                            <i class="fas fa-newspaper text-purple-500 mr-2"></i>
                                            Jurnal Ilmiah
                                        </span>
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">2345</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex justify-between items-center text-gray-700 hover:text-polban-green transition-colors">
                                        <span class="flex items-center">
                                            <i class="fas fa-chalkboard-teacher text-yellow-500 mr-2"></i>
                                            Bahan Ajar
                                        </span>
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">1234</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex justify-between items-center text-gray-700 hover:text-polban-green transition-colors">
                                        <span class="flex items-center">
                                            <i class="fas fa-flask text-red-500 mr-2"></i>
                                            Penelitian
                                        </span>
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">876</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex justify-between items-center text-gray-700 hover:text-polban-green transition-colors">
                                        <span class="flex items-center">
                                            <i class="fas fa-file-alt text-green-500 mr-2"></i>
                                            Laporan
                                        </span>
                                        <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">543</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Popular Tags -->
                    <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-left" data-aos-delay="200">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-tags text-polban-green mr-2"></i>
                            Tag Populer
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="bg-gray-100 hover:bg-polban-green hover:text-white text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">Teknologi</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-green hover:text-white text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">Rekayasa</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-green hover:text-white text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">Informatika</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-green hover:text-white text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">Sipil</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-green hover:text-white text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">Elektro</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-green hover:text-white text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">Mesin</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-green hover:text-white text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">Kimia</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-green hover:text-white text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">Arsitektur</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-green hover:text-white text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">Bisnis</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-green hover:text-white text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">Akuntansi</a>
                        </div>
                    </div>
                    
                   
    </section>

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
        });
    </script>
</body>
</html>