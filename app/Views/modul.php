<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Koleksi Modul Politeknik Negeri Bandung">
    <title>Modul Pembelajaran | Perpustakaan Digital POLBAN</title>
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
        
        .modul-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .modul-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border-left-color: #8BC34A;
        }
        
        .tab-button {
            transition: all 0.3s ease;
        }
        
        .tab-button.active {
            background-color: #8BC34A;
            color: white;
        }
        
        .filter-card {
            transition: all 0.3s ease;
        }
        
        .filter-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        /* Dropdown Styles for Hover */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    width: 200px;
    background: white;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    border-radius: 0.375rem;
    z-index: 50;
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

/* Untuk animasi yang lebih smooth */
.nav-link {
    transition: all 0.3s ease;
}

.dropdown:hover .nav-link {
    color: #8BC34A; /* Warna saat hover */
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
                        <a href="/kontak" class="px-4 py-2 text-gray-800 font-medium nav-link">Diskusi/Komentar</a>
                        <a href="/kontak" class="px-4 py-2 text-gray-800 font-medium nav-link">Bookmark</a>
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
            <div class="mb-8" data-aos="fade-up">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Koleksi Modul Pembelajaran</h1>
                <p class="text-gray-600">Temukan modul pembelajaran dari berbagai program studi di Politeknik Negeri Bandung</p>
            </div>
            
            <!-- Filter Section -->
            <div class="bg-white rounded-xl shadow-md p-6 mb-8" data-aos="fade-up">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="mb-4 md:mb-0">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Filter Modul</h3>
                        <p class="text-sm text-gray-600">Temukan modul berdasarkan kriteria tertentu</p>
                    </div>
                    
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="filter-card bg-gray-50 p-3 rounded-lg">
                            <label class="block text-xs font-medium text-gray-700 mb-1">Program Studi</label>
                            <select class="w-full bg-white border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-polban-green">
                                <option>Semua Prodi</option>
                                <option>Teknik Sipil</option>
                                <option>Teknik Mesin</option>
                                <option>Teknik Elektro</option>
                                <option>Teknik Kimia</option>
                                <option>Teknik Informatika</option>
                                <option>Akuntansi</option>
                                <option>Administrasi Niaga</option>
                            </select>
                        </div>
                        
                        <div class="filter-card bg-gray-50 p-3 rounded-lg">
                            <label class="block text-xs font-medium text-gray-700 mb-1">Semester</label>
                            <select class="w-full bg-white border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-polban-green">
                                <option>Semua Semester</option>
                                <option>Semester 1</option>
                                <option>Semester 2</option>
                                <option>Semester 3</option>
                                <option>Semester 4</option>
                                <option>Semester 5</option>
                                <option>Semester 6</option>
                            </select>
                        </div>
                        
                        <div class="filter-card bg-gray-50 p-3 rounded-lg">
                            <label class="block text-xs font-medium text-gray-700 mb-1">Mata Kuliah</label>
                            <input type="text" placeholder="Cari mata kuliah..." class="w-full bg-white border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-polban-green">
                        </div>
                        
                        <div class="filter-card bg-polban-green text-white p-3 rounded-lg flex items-center justify-center cursor-pointer hover:bg-polban-dark-green transition-colors">
                            <i class="fas fa-filter mr-2"></i>
                            <span>Terapkan Filter</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tabs and Content -->
            <div data-aos="fade-up">
                <!-- Tabs -->
                <div class="flex overflow-x-auto mb-6">
                    <div class="flex space-x-1 bg-gray-100 p-1 rounded-lg">
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium active">Semua Modul</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Teknik Sipil</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Teknik Mesin</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Teknik Elektro</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Teknik Kimia</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Teknik Informatika</button>
                    </div>
                </div>
                
                <!-- Sort and Stats -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                    <div class="mb-4 md:mb-0">
                        <p class="text-sm text-gray-600">Menampilkan <span class="font-semibold">1-10</span> dari <span class="font-semibold">1,234</span> modul</p>
                    </div>
                    
                    <div class="flex items-center">
                        <label class="text-sm text-gray-600 mr-2">Urutkan:</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-polban-green">
                            <option>Terbaru</option>
                            <option>Terlama</option>
                            <option>Judul (A-Z)</option>
                            <option>Judul (Z-A)</option>
                            <option>Paling Banyak Diunduh</option>
                        </select>
                    </div>
                </div>
                
                <!-- Modul List -->
                <div class="grid grid-cols-1 gap-6 mb-8">
                    <!-- Modul Item 1 -->
                    <div class="modul-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-3/4 md:pr-6">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                                    Modul Praktikum Fisika Dasar - Semester 1
                                </h3>
                                <div class="flex flex-wrap items-center text-sm text-gray-600 mb-4">
                                    <span class="mr-3"><i class="fas fa-user-tie mr-1"></i> Dr. Eng. Budi Santoso, M.T.</span>
                                    <span class="mr-3"><i class="fas fa-graduation-cap mr-1"></i> Teknik Sipil</span>
                                    <span class="mr-3"><i class="fas fa-layer-group mr-1"></i> Semester 1</span>
                                    <span><i class="far fa-eye mr-1"></i> 2.345x dilihat</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Modul ini berisi panduan lengkap praktikum fisika dasar untuk mahasiswa semester 1. Mencakup 10 percobaan dasar meliputi mekanika, termodinamika, dan gelombang dengan penjelasan teori, prosedur praktikum, dan contoh analisis data.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Fisika Dasar</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Praktikum</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Semester 1</span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 flex flex-col items-center justify-center border-l md:border-l-0 md:border-t pt-4 md:pt-0 md:pl-6">
                                <div class="text-center mb-4">
                                    <div class="text-3xl font-bold text-polban-green">856</div>
                                    <div class="text-sm text-gray-600">Diunduh</div>
                                </div>
                                <a href="#" class="w-full bg-polban-green hover:bg-polban-dark-green text-white font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-download mr-2"></i> Unduh PDF
                                </a>
                                <a href="#" class="w-full mt-2 bg-white hover:bg-gray-100 text-polban-green border border-polban-green font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-info-circle mr-2"></i> Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modul Item 2 -->
                    <div class="modul-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-3/4 md:pr-6">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                                    Modul Pemrograman Dasar - Bahasa C (Teknik Informatika)
                                </h3>
                                <div class="flex flex-wrap items-center text-sm text-gray-600 mb-4">
                                    <span class="mr-3"><i class="fas fa-user-tie mr-1"></i> Prof. Dr. Ir. Ani Budiarti, M.Kom.</span>
                                    <span class="mr-3"><i class="fas fa-graduation-cap mr-1"></i> Teknik Informatika</span>
                                    <span class="mr-3"><i class="fas fa-layer-group mr-1"></i> Semester 2</span>
                                    <span><i class="far fa-eye mr-1"></i> 3.124x dilihat</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Modul pembelajaran bahasa pemrograman C untuk pemula. Berisi konsep dasar pemrograman, struktur kontrol, fungsi, pointer, dan struktur data dasar. Dilengkapi dengan contoh program dan latihan soal untuk setiap bab.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Pemrograman</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Bahasa C</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Semester 2</span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 flex flex-col items-center justify-center border-l md:border-l-0 md:border-t pt-4 md:pt-0 md:pl-6">
                                <div class="text-center mb-4">
                                    <div class="text-3xl font-bold text-polban-green">1,289</div>
                                    <div class="text-sm text-gray-600">Diunduh</div>
                                </div>
                                <a href="#" class="w-full bg-polban-green hover:bg-polban-dark-green text-white font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-download mr-2"></i> Unduh PDF
                                </a>
                                <a href="#" class="w-full mt-2 bg-white hover:bg-gray-100 text-polban-green border border-polban-green font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-info-circle mr-2"></i> Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modul Item 3 -->
                    <div class="modul-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-3/4 md:pr-6">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                                    Modul Elektronika Dasar - Teori dan Praktikum
                                </h3>
                                <div class="flex flex-wrap items-center text-sm text-gray-600 mb-4">
                                    <span class="mr-3"><i class="fas fa-user-tie mr-1"></i> Dr. Ir. H. Dadang Supriatna, M.T.</span>
                                    <span class="mr-3"><i class="fas fa-graduation-cap mr-1"></i> Teknik Elektro</span>
                                    <span class="mr-3"><i class="fas fa-layer-group mr-1"></i> Semester 3</span>
                                    <span><i class="far fa-eye mr-1"></i> 1,987x dilihat</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Modul lengkap elektronika dasar mencakup komponen pasif dan aktif, rangkaian DC dan AC, dioda, transistor, dan penguat operasional. Setiap bab dilengkapi dengan teori singkat, contoh soal, prosedur praktikum, dan tugas mandiri.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Elektronika</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Praktikum</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Semester 3</span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 flex flex-col items-center justify-center border-l md:border-l-0 md:border-t pt-4 md:pt-0 md:pl-6">
                                <div class="text-center mb-4">
                                    <div class="text-3xl font-bold text-polban-green">1,421</div>
                                    <div class="text-sm text-gray-600">Diunduh</div>
                                </div>
                                <a href="#" class="w-full bg-polban-green hover:bg-polban-dark-green text-white font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-download mr-2"></i> Unduh PDF
                                </a>
                                <a href="#" class="w-full mt-2 bg-white hover:bg-gray-100 text-polban-green border border-polban-green font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-info-circle mr-2"></i> Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Pagination -->
                <div class="flex justify-center">
                    <nav class="inline-flex rounded-md shadow">
                        <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-polban-green font-medium">1</a>
                        <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">2</a>
                        <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">3</a>
                        <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">4</a>
                        <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">5</a>
                        <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
            
            <!-- Stats Section -->
            <div class="bg-white rounded-xl shadow-md p-6 mb-8" data-aos="fade-up">
                <h3 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-chart-pie text-polban-green mr-2"></i>
                    Statistik Modul
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="bg-polban-light rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold text-polban-dark-green mb-2">1,234</div>
                        <div class="text-gray-700">Total Modul</div>
                    </div>
                    
                    <div class="bg-blue-50 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">345</div>
                        <div class="text-gray-700">Teknik Sipil</div>
                    </div>
                    
                    <div class="bg-purple-50 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold text-purple-600 mb-2">287</div>
                        <div class="text-gray-700">Teknik Elektro</div>
                    </div>
                    
                    <div class="bg-yellow-50 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold text-yellow-600 mb-2">232</div>
                        <div class="text-gray-700">Teknik Informatika</div>
                    </div>
                </div>
            </div>
            
          
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h4 class="text-lg font-bold mb-4 flex items-center">
                        <img src="https://www.polban.ac.id/wp-content/uploads/2020/02/logo-polban.png" alt="POLBAN Logo" class="h-8 mr-2">
                        Perpustakaan Digital
                    </h4>
                    <p class="text-gray-400 mb-4">Koleksi digital karya akademik Politeknik Negeri Bandung.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Koleksi</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Modul</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Skripsi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Jurnal</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Buku Digital</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Program Studi</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Teknik Sipil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Teknik Mesin</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Teknik Elektro</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Teknik Kimia</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Teknik Informatika</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-polban-green"></i>
                            <span>Jl. Gegerkalong Hilir, Bandung 40012</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-polban-green"></i>
                            <span>(022) 2013789</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-polban-green"></i>
                            <span>perpusdigital@polban.ac.id</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-6 text-center text-gray-400 text-sm">
                © 2025 Perpustakaan Digital Politeknik Negeri Bandung. All rights reserved.
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
        
        // Tab functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab-button');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    // Here you would typically load content for the selected tab
                });
            });
            
            // Mobile menu toggle (placeholder)
            const mobileMenuButton = document.querySelector('.lg\\:hidden');
            // You would add click handler here for mobile menu
        });
    </script>
</body>
</html>