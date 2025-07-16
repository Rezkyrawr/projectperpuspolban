<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pengumuman Terkini Perpustakaan Digital POLBAN">
    <title>Pengumuman | Perpustakaan Digital POLBAN</title>
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
        
        .pengumuman-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .pengumuman-card:hover {
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

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        .badge-primary {
            background-color: #E3F2FD;
            color: #1976D2;
        }
        
        .badge-important {
            background-color: #FFEBEE;
            color: #D32F2F;
        }
        
        .badge-info {
            background-color: #E8F5E9;
            color: #388E3C;
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
                        <a href="#" class="hover:text-polban-green transition-colors"><i class="fas fa-user-plus mr-1"></i> Register</a>
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
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Pengumuman Terkini</h1>
                <p class="text-gray-600">Informasi terbaru seputar layanan dan kegiatan Perpustakaan Digital POLBAN</p>
            </div>
            
            <!-- Filter Section -->
            <div class="bg-white rounded-xl shadow-md p-6 mb-8" data-aos="fade-up">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="mb-4 md:mb-0">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Cari Pengumuman</h3>
                        <p class="text-sm text-gray-600">Temukan pengumuman berdasarkan kategori atau kata kunci</p>
                    </div>
                    
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="filter-card bg-gray-50 p-3 rounded-lg">
                            <label class="block text-xs font-medium text-gray-700 mb-1">Kategori</label>
                            <select class="w-full bg-white border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-polban-green">
                                <option>Semua Kategori</option>
                                <option>Layanan Perpustakaan</option>
                                <option>Kegiatan</option>
                                <option>Perubahan Jam Operasional</option>
                                <option>Pelatihan</option>
                                <option>Pemeliharaan Sistem</option>
                            </select>
                        </div>
                        
                        <div class="filter-card bg-gray-50 p-3 rounded-lg">
                            <label class="block text-xs font-medium text-gray-700 mb-1">Bulan</label>
                            <select class="w-full bg-white border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-polban-green">
                                <option>Semua Bulan</option>
                                <option>Juli 2025</option>
                                <option>Juni 2025</option>
                                <option>Mei 2025</option>
                                <option>April 2025</option>
                                <option>Maret 2025</option>
                            </select>
                        </div>
                        
                        <div class="filter-card bg-gray-50 p-3 rounded-lg">
                            <label class="block text-xs font-medium text-gray-700 mb-1">Kata Kunci</label>
                            <input type="text" placeholder="Cari pengumuman..." class="w-full bg-white border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-polban-green">
                        </div>
                        
                        <div class="filter-card bg-polban-green text-white p-3 rounded-lg flex items-center justify-center cursor-pointer hover:bg-polban-dark-green transition-colors">
                            <i class="fas fa-search mr-2"></i>
                            <span>Cari</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tabs and Content -->
            <div data-aos="fade-up">
                <!-- Tabs -->
                <div class="flex overflow-x-auto mb-6">
                    <div class="flex space-x-1 bg-gray-100 p-1 rounded-lg">
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium active">Semua</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Layanan</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Kegiatan</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Pelatihan</button>
                        <button class="tab-button px-4 py-2 rounded-md text-sm font-medium">Penting</button>
                    </div>
                </div>
                
                <!-- Sort and Stats -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                    <div class="mb-4 md:mb-0">
                        <p class="text-sm text-gray-600">Menampilkan <span class="font-semibold">1-5</span> dari <span class="font-semibold">24</span> pengumuman</p>
                    </div>
                    
                    <div class="flex items-center">
                        <label class="text-sm text-gray-600 mr-2">Urutkan:</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-polban-green">
                            <option>Terbaru</option>
                            <option>Terlama</option>
                            <option>Paling Penting</option>
                        </select>
                    </div>
                </div>
                
                <!-- Pengumuman List -->
                <div class="grid grid-cols-1 gap-6 mb-8">
                    <!-- Pengumuman Item 1 -->
                    <div class="pengumuman-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-3/4 md:pr-6">
                                <div class="flex items-center mb-2">
                                    <span class="badge badge-important mr-2">
                                        <i class="fas fa-exclamation-circle mr-1"></i> Penting
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <i class="far fa-calendar-alt mr-1"></i> 15 Juli 2025
                                    </span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                                    Perubahan Jam Operasional Perpustakaan Digital Selama Masa Ujian Akhir Semester
                                </h3>
                                <p class="text-gray-700 mb-4">
                                    Berhubung akan dilaksanakan Ujian Akhir Semester (UAS) Genap 2024/2025, dengan ini diberitahukan bahwa jam operasional Perpustakaan Digital POLBAN akan diperpanjang mulai tanggal 17 Juli hingga 31 Juli 2025 menjadi pukul 07.30 - 20.00 WIB (Senin-Minggu, termasuk hari libur nasional).
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Jam Operasional</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Ujian Akhir Semester</span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 flex flex-col items-center justify-center border-l md:border-l-0 md:border-t pt-4 md:pt-0 md:pl-6">
                                <div class="text-center mb-4">
                                    <div class="text-3xl font-bold text-polban-green">1.245</div>
                                    <div class="text-sm text-gray-600">Dilihat</div>
                                </div>
                                <a href="#" class="w-full bg-polban-green hover:bg-polban-dark-green text-white font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-info-circle mr-2"></i> Detail
                                </a>
                                <a href="#" class="w-full mt-2 bg-white hover:bg-gray-100 text-polban-green border border-polban-green font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-share-alt mr-2"></i> Bagikan
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pengumuman Item 2 -->
                    <div class="pengumuman-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-3/4 md:pr-6">
                                <div class="flex items-center mb-2">
                                    <span class="badge badge-primary mr-2">
                                        <i class="fas fa-chalkboard-teacher mr-1"></i> Pelatihan
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <i class="far fa-calendar-alt mr-1"></i> 10 Juli 2025
                                    </span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                                    Workshop Pemanfaatan Tools Reference Manager untuk Penulisan Karya Ilmiah
                                </h3>
                                <p class="text-gray-700 mb-4">
                                    Perpustakaan Digital POLBAN akan menyelenggarakan workshop "Pemanfaatan Mendeley dan Zotero untuk Penulisan Karya Ilmiah" pada hari Rabu, 19 Juli 2025 pukul 09.00 - 12.00 WIB di Ruang Training Center Lantai 3 Gedung Perpustakaan. Workshop ini gratis dan terbuka untuk seluruh mahasiswa dan dosen POLBAN. Pendaftaran dibuka hingga 17 Juli 2025 atau sampai kuota terpenuhi.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Workshop</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Reference Manager</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Karya Ilmiah</span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 flex flex-col items-center justify-center border-l md:border-l-0 md:border-t pt-4 md:pt-0 md:pl-6">
                                <div class="text-center mb-4">
                                    <div class="text-3xl font-bold text-polban-green">876</div>
                                    <div class="text-sm text-gray-600">Dilihat</div>
                                </div>
                                <a href="#" class="w-full bg-polban-green hover:bg-polban-dark-green text-white font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-info-circle mr-2"></i> Detail
                                </a>
                                <a href="#" class="w-full mt-2 bg-white hover:bg-gray-100 text-polban-green border border-polban-green font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-share-alt mr-2"></i> Bagikan
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pengumuman Item 3 -->
                    <div class="pengumuman-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-3/4 md:pr-6">
                                <div class="flex items-center mb-2">
                                    <span class="badge badge-info mr-2">
                                        <i class="fas fa-tools mr-1"></i> Pemeliharaan
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <i class="far fa-calendar-alt mr-1"></i> 5 Juli 2025
                                    </span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                                    Pemeliharaan Sistem Perpustakaan Digital Tanggal 8 Juli 2025
                                </h3>
                                <p class="text-gray-700 mb-4">
                                    Dalam rangka peningkatan layanan, akan dilakukan pemeliharaan sistem Perpustakaan Digital POLBAN pada hari Selasa, 8 Juli 2025 pukul 22.00 - 24.00 WIB. Selama proses pemeliharaan, layanan digital tidak dapat diakses. Kami mohon maaf atas ketidaknyamanan ini dan berharap untuk dapat melayani Anda dengan lebih baik setelah pemeliharaan selesai.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Pemeliharaan Sistem</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Downtime</span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 flex flex-col items-center justify-center border-l md:border-l-0 md:border-t pt-4 md:pt-0 md:pl-6">
                                <div class="text-center mb-4">
                                    <div class="text-3xl font-bold text-polban-green">543</div>
                                    <div class="text-sm text-gray-600">Dilihat</div>
                                </div>
                                <a href="#" class="w-full bg-polban-green hover:bg-polban-dark-green text-white font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-info-circle mr-2"></i> Detail
                                </a>
                                <a href="#" class="w-full mt-2 bg-white hover:bg-gray-100 text-polban-green border border-polban-green font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-share-alt mr-2"></i> Bagikan
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pengumuman Item 4 -->
                    <div class="pengumuman-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-3/4 md:pr-6">
                                <div class="flex items-center mb-2">
                                    <span class="badge badge-primary mr-2">
                                        <i class="fas fa-book-open mr-1"></i> Koleksi Baru
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <i class="far fa-calendar-alt mr-1"></i> 1 Juli 2025
                                    </span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                                    Penambahan Koleksi Jurnal Internasional Terbaru Periode Juli 2025
                                </h3>
                                <p class="text-gray-700 mb-4">
                                    Perpustakaan Digital POLBAN dengan bangga mengumumkan penambahan 125 judul jurnal internasional terbaru dari berbagai disiplin ilmu yang dapat diakses mulai tanggal 1 Juli 2025. Koleksi ini meliputi jurnal dari penerbit ternama seperti IEEE, Springer, dan Elsevier dengan subjek teknik, sains, dan ekonomi.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Koleksi Baru</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Jurnal Internasional</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Akses Terbuka</span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 flex flex-col items-center justify-center border-l md:border-l-0 md:border-t pt-4 md:pt-0 md:pl-6">
                                <div class="text-center mb-4">
                                    <div class="text-3xl font-bold text-polban-green">432</div>
                                    <div class="text-sm text-gray-600">Dilihat</div>
                                </div>
                                <a href="#" class="w-full bg-polban-green hover:bg-polban-dark-green text-white font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-info-circle mr-2"></i> Detail
                                </a>
                                <a href="#" class="w-full mt-2 bg-white hover:bg-gray-100 text-polban-green border border-polban-green font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-share-alt mr-2"></i> Bagikan
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pengumuman Item 5 -->
                    <div class="pengumuman-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-3/4 md:pr-6">
                                <div class="flex items-center mb-2">
                                    <span class="badge badge-primary mr-2">
                                        <i class="fas fa-users mr-1"></i> Kegiatan
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        <i class="far fa-calendar-alt mr-1"></i> 28 Juni 2025
                                    </span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                                    Open House Perpustakaan Digital 2025: Explore the Digital Learning Resources
                                </h3>
                                <p class="text-gray-700 mb-4">
                                    Dalam rangka menyambut mahasiswa baru tahun akademik 2025/2026, Perpustakaan Digital POLBAN akan menyelenggarakan Open House pada tanggal 5-7 Agustus 2025. Acara ini akan menampilkan berbagai workshop, demo produk, dan sesi konsultasi tentang pemanfaatan sumber belajar digital. Pendaftaran dibuka mulai 15 Juli 2025.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Open House</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Mahasiswa Baru</span>
                                    <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Sumber Belajar</span>
                                </div>
                            </div>
                            <div class="md:w-1/4 mt-4 md:mt-0 flex flex-col items-center justify-center border-l md:border-l-0 md:border-t pt-4 md:pt-0 md:pl-6">
                                <div class="text-center mb-4">
                                    <div class="text-3xl font-bold text-polban-green">321</div>
                                    <div class="text-sm text-gray-600">Dilihat</div>
                                </div>
                                <a href="#" class="w-full bg-polban-green hover:bg-polban-dark-green text-white font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-info-circle mr-2"></i> Detail
                                </a>
                                <a href="#" class="w-full mt-2 bg-white hover:bg-gray-100 text-polban-green border border-polban-green font-medium py-2 px-4 rounded-lg text-center transition-colors">
                                    <i class="fas fa-share-alt mr-2"></i> Bagikan
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
            
            <!-- Pengumuman Penting -->
            <div class="bg-white rounded-xl shadow-md p-6 mb-8" data-aos="fade-up">
                <h3 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-exclamation-triangle text-red-500 mr-2"></i>
                    Pengumuman Penting
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border-l-4 border-red-500 pl-4 py-2">
                        <h4 class="font-medium text-gray-800 hover:text-polban-green cursor-pointer mb-1">
                            <i class="fas fa-circle text-red-500 text-xs mr-2"></i>
                            Pemutakhiran Sistem Keamanan Perpustakaan Digital
                        </h4>
                        <p class="text-sm text-gray-600 mb-2">Mulai 20 Juli 2025, semua pengguna harus melakukan update password sesuai kebijakan keamanan baru.</p>
                        <span class="text-xs text-gray-500"><i class="far fa-calendar-alt mr-1"></i> 10 Juli 2025</span>
                    </div>
                    
                    <div class="border-l-4 border-red-500 pl-4 py-2">
                        <h4 class="font-medium text-gray-800 hover:text-polban-green cursor-pointer mb-1">
                            <i class="fas fa-circle text-red-500 text-xs mr-2"></i>
                            Penutupan Sementara Layanan Pinjam Buku Digital
                        </h4>
                        <p class="text-sm text-gray-600 mb-2">Layanan pinjam buku digital akan ditutup sementara pada 12 Juli 2025 pukul 08.00-12.00 WIB untuk maintenance.</p>
                        <span class="text-xs text-gray-500"><i class="far fa-calendar-alt mr-1"></i> 8 Juli 2025</span>
                    </div>
                </div>
            </div>
            
            <!-- Arsip Pengumuman -->
            <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-up">
                <h3 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-archive text-polban-green mr-2"></i>
                    Arsip Pengumuman
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                        <h4 class="font-medium text-gray-800 hover:text-polban-green cursor-pointer mb-2">Juni 2025</h4>
                        <p class="text-sm text-gray-600 mb-3">8 pengumuman</p>
                        <a href="#" class="text-sm text-polban-green hover:text-polban-dark-green flex items-center">
                            Lihat Arsip <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                        <h4 class="font-medium text-gray-800 hover:text-polban-green cursor-pointer mb-2">Mei 2025</h4>
                        <p class="text-sm text-gray-600 mb-3">12 pengumuman</p>
                        <a href="#" class="text-sm text-polban-green hover:text-polban-dark-green flex items-center">
                            Lihat Arsip <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                        <h4 class="font-medium text-gray-800 hover:text-polban-green cursor-pointer mb-2">April 2025</h4>
                        <p class="text-sm text-gray-600 mb-3">7 pengumuman</p>
                        <a href="#" class="text-sm text-polban-green hover:text-polban-dark-green flex items-center">
                            Lihat Arsip <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                        <h4 class="font-medium text-gray-800 hover:text-polban-green cursor-pointer mb-2">Maret 2025</h4>
                        <p class="text-sm text-gray-600 mb-3">9 pengumuman</p>
                        <a href="#" class="text-sm text-polban-green hover:text-polban-dark-green flex items-center">
                            Lihat Arsip <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
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
                    <h4 class="text-lg font-bold mb-4">Layanan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Peminjaman Digital</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Referensi Online</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Penelusuran Koleksi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Bantuan Penelitian</a></li>
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
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Jam Operasional</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <i class="fas fa-clock mr-3 text-polban-green"></i>
                            <span>Senin-Jumat: 08.00-16.00 WIB</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock mr-3 text-polban-green"></i>
                            <span>Sabtu: 08.00-12.00 WIB</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock mr-3 text-polban-green"></i>
                            <span>Minggu & Libur Nasional: Tutup</span>
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