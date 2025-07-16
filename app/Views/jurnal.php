<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Koleksi Jurnal Digital Politeknik Negeri Bandung">
    <title>Jurnal Akademik | Perpustakaan Digital POLBAN</title>
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
        
        .jurnal-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .jurnal-card:hover {
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
            color: #8BC34A;
        }
    </style>
</head>
<body class="bg-gray-50">
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
                                <a href="/jurnal" class="block px-4 py-2 text-gray-800 hover:bg-polban-light bg-polban-light">Jurnal</a>
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

    <!-- Breadcrumb -->
  
    <!-- Main Content -->
    <main class="py-8">
        <div class="container mx-auto px-4">
            <!-- Page Header -->
            <div class="mb-8" data-aos="fade-up">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Koleksi Jurnal Akademik</h1>
                <p class="text-gray-600">Akses jurnal ilmiah dari berbagai disiplin ilmu yang diterbitkan oleh Politeknik Negeri Bandung</p>
            </div>
            
            <!-- Filter Section -->
            <div class="bg-white rounded-xl shadow-md p-6 mb-8" data-aos="fade-up">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="mb-4 md:mb-0">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Filter Jurnal</h3>
                        <p class="text-sm text-gray-600">Temukan jurnal berdasarkan kriteria tertentu</p>
                    </div>
                    
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="filter-card bg-gray-50 p-3 rounded-lg">
                            <label class="block text-xs font-medium text-gray-700 mb-1">Bidang Ilmu</label>
                            <select class="w-full bg-white border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-polban-green">
                                <option>Semua Bidang</option>
                                <option>Teknik</option>
                                <option>Sains</option>
                                <option>Ekonomi</option>
                                <option>Komputer</option>
                                <option>Lingkungan</option>
                            </select>
                        </div>
                        
                        <div class="filter-card bg-gray-50 p-3 rounded-lg">
                            <label class="block text-xs font-medium text-gray-700 mb-1">Tahun</label>
                            <select class="w-full bg-white border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-polban-green">
                                <option>Semua Tahun</option>
                                <option>2025</option>
                                <option>2024</option>
                                <option>2023</option>
                                <option>2022</option>
                                <option>2021</option>
                            </select>
                        </div>
                        
                        <div class="filter-card bg-gray-50 p-3 rounded-lg">
                            <label class="block text-xs font-medium text-gray-700 mb-1">Kata Kunci</label>
                            <input type="text" placeholder="Cari jurnal..." class="w-full bg-white border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-polban-green">
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
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium active">Semua Jurnal</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Teknik</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Sains</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Ekonomi</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Komputer</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Lingkungan</button>
                    </div>
                </div>
                
                <!-- Sort and Stats -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                    <div class="mb-4 md:mb-0">
                        <p class="text-sm text-gray-600">Menampilkan <span class="font-semibold">1-10</span> dari <span class="font-semibold">2,345</span> jurnal</p>
                    </div>
                    
                    <div class="flex items-center">
                        <label class="text-sm text-gray-600 mr-2">Urutkan:</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-polban-green">
                            <option>Terbaru</option>
                            <option>Terlama</option>
                            <option>Judul (A-Z)</option>
                            <option>Judul (Z-A)</option>
                            <option>Paling Banyak Diunduh</option>
                            <option>Paling Banyak Dikutip</option>
                        </select>
                    </div>
                </div>
                
                <!-- Jurnal List -->
                <div class="grid grid-cols-1 gap-6 mb-8">
                    <!-- Jurnal Item 1 -->
                    <div class="jurnal-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-3/4 md:pr-6">
                                <div class="flex items-center mb-2">
                                    <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mr-2">
                                        <i class="fas fa-star mr-1"></i> Sinta 2
                                    </span>
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">
                                        <i class="fas fa-check-circle mr-1"></i> Terakreditasi
                                    </span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                                    Analisis Kinerja Fotovoltaik dengan Variasi Sudut Kemiringan di Wilayah Bandung
                                </h3>
                                <div class="flex flex-wrap items-center text-sm text-gray-600 mb-4">
                                    <span class="mr-3"><i class="far fa-user mr-1"></i> Dr. Ir. Budi Santoso, M.Eng.</span>
                                    <span class="mr-3"><i class="fas fa-book-open mr-1"></i> Jurnal Teknik Elektro POLBAN</span>
                                    <span class="mr-3"><i class="far fa-calendar-alt mr-1"></i> Vol. 12, No. 2, 2025</span>
                                    <span><i class="far fa-eye mr-1"></i> 1.856x dilihat</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Penelitian ini menganalisis pengaruh variasi sudut kemiringan panel surya terhadap kinerja sistem fotovoltaik di wilayah Bandung dengan karakteristik iklim tropis. Hasil menunjukkan sudut optimal 15° menghasilkan efisiensi 18% lebih tinggi dibandingkan pemasangan horizontal.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Energi Terbarukan</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Fotovoltaik</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Efisiensi Energi</span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 flex flex-col items-center justify-center border-l md:border-l-0 md:border-t pt-4 md:pt-0 md:pl-6">
                                <div class="text-center mb-4">
                                    <div class="text-3xl font-bold text-polban-green">289</div>
                                    <div class="text-sm text-gray-600">Diunduh</div>
                                </div>
                                <div class="text-center mb-4">
                                    <div class="text-xl font-bold text-blue-600">24</div>
                                    <div class="text-sm text-gray-600">Kutipan</div>
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
                    
                    <!-- Jurnal Item 2 -->
                    <div class="jurnal-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-3/4 md:pr-6">
                                <div class="flex items-center mb-2">
                                    <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-full mr-2">
                                        <i class="fas fa-globe mr-1"></i> Internasional
                                    </span>
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">
                                        <i class="fas fa-check-circle mr-1"></i> Scopus Q2
                                    </span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                                    Pemanfaatan Limbah Plastik LDPE sebagai Bahan Campuran Aspal untuk Meningkatkan Durabilitas Jalan
                                </h3>
                                <div class="flex flex-wrap items-center text-sm text-gray-600 mb-4">
                                    <span class="mr-3"><i class="far fa-user mr-1"></i> Prof. Dr. Ir. Ahmad Fauzi, M.T.</span>
                                    <span class="mr-3"><i class="fas fa-book-open mr-1"></i> International Journal of Sustainable Construction</span>
                                    <span class="mr-3"><i class="far fa-calendar-alt mr-1"></i> Vol. 8, No. 3, 2024</span>
                                    <span><i class="far fa-eye mr-1"></i> 2.543x dilihat</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Penelitian ini mengevaluasi penggunaan limbah plastik LDPE sebagai bahan tambahan dalam campuran aspal. Hasil menunjukkan peningkatan ketahanan terhadap deformasi hingga 35% dan umur layan jalan yang lebih panjang dibandingkan aspal konvensional.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Material Konstruksi</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Limbah Plastik</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Teknologi Ramah Lingkungan</span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 flex flex-col items-center justify-center border-l md:border-l-0 md:border-t pt-4 md:pt-0 md:pl-6">
                                <div class="text-center mb-4">
                                    <div class="text-3xl font-bold text-polban-green">512</div>
                                    <div class="text-sm text-gray-600">Diunduh</div>
                                </div>
                                <div class="text-center mb-4">
                                    <div class="text-xl font-bold text-blue-600">47</div>
                                    <div class="text-sm text-gray-600">Kutipan</div>
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
                    
                    <!-- Jurnal Item 3 -->
                    <div class="jurnal-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-3/4 md:pr-6">
                                <div class="flex items-center mb-2">
                                    <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full mr-2">
                                        <i class="fas fa-star mr-1"></i> Sinta 3
                                    </span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                                    Sistem Deteksi Dini Kebakaran Hutan Berbasis IoT dengan Algoritma Machine Learning
                                </h3>
                                <div class="flex flex-wrap items-center text-sm text-gray-600 mb-4">
                                    <span class="mr-3"><i class="far fa-user mr-1"></i> Rina Wijaya, S.Kom., M.T.</span>
                                    <span class="mr-3"><i class="fas fa-book-open mr-1"></i> Jurnal Teknologi Informasi POLBAN</span>
                                    <span class="mr-3"><i class="far fa-calendar-alt mr-1"></i> Vol. 10, No. 1, 2025</span>
                                    <span><i class="far fa-eye mr-1"></i> 1.432x dilihat</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Sistem ini menggunakan sensor IoT dan algoritma Random Forest untuk prediksi titik api dengan akurasi mencapai 92%. Implementasi di Taman Nasional Gunung Gede Pangrango menunjukkan efektivitas deteksi dini dengan false alarm rate hanya 3.2%.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Internet of Things</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Machine Learning</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Sistem Embedded</span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 flex flex-col items-center justify-center border-l md:border-l-0 md:border-t pt-4 md:pt-0 md:pl-6">
                                <div class="text-center mb-4">
                                    <div class="text-3xl font-bold text-polban-green">187</div>
                                    <div class="text-sm text-gray-600">Diunduh</div>
                                </div>
                                <div class="text-center mb-4">
                                    <div class="text-xl font-bold text-blue-600">12</div>
                                    <div class="text-sm text-gray-600">Kutipan</div>
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
                    Statistik Jurnal
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="bg-polban-light rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold text-polban-dark-green mb-2">2,345</div>
                        <div class="text-gray-700">Total Jurnal</div>
                    </div>
                    
                    <div class="bg-blue-50 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">856</div>
                        <div class="text-gray-700">Jurnal Teknik</div>
                    </div>
                    
                    <div class="bg-purple-50 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold text-purple-600 mb-2">432</div>
                        <div class="text-gray-700">Jurnal Sains</div>
                    </div>
                    
                    <div class="bg-yellow-50 rounded-lg p-4 text-center">
                        <div class="text-3xl font-bold text-yellow-600 mb-2">289</div>
                        <div class="text-gray-700">Jurnal Internasional</div>
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
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Jurnal</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Skripsi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Buku Digital</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Prosiding</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Kategori</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Teknik</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Sains</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Ekonomi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Komputer</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Lingkungan</a></li>
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