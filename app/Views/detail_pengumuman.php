<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Detail Pengumuman Perpustakaan Digital POLBAN">
    <title>Detail Pengumuman | Perpustakaan Digital POLBAN</title>
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
        
        .content-wrapper img {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem;
            margin: 1rem 0;
        }
        
        .content-wrapper ul, 
        .content-wrapper ol {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .content-wrapper ul {
            list-style-type: disc;
        }
        
        .content-wrapper ol {
            list-style-type: decimal;
        }
        
        .content-wrapper table {
            width: 100%;
            border-collapse: collapse;
            margin: 1rem 0;
        }
        
        .content-wrapper th, 
        .content-wrapper td {
            border: 1px solid #e2e8f0;
            padding: 0.75rem;
            text-align: left;
        }
        
        .content-wrapper th {
            background-color: #f7fafc;
        }
        
        .content-wrapper a {
            color: #8BC34A;
            text-decoration: underline;
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

    <!-- Main Content -->
    <main class="py-8">
        <div class="container mx-auto px-4">
          
            
            <!-- Announcement Detail -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8" data-aos="fade-up">
                <!-- Announcement Header -->
                <div class="p-6 border-b border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-4 md:mb-0">
                            <div class="flex items-center mb-2">
                                <span class="badge badge-important mr-3">
                                    <i class="fas fa-exclamation-circle mr-1"></i> Penting
                                </span>
                                <span class="text-sm text-gray-500">
                                    <i class="far fa-calendar-alt mr-1"></i> Dipublikasikan: 15 Juli 2025
                                </span>
                            </div>
                            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">
                                Perubahan Jam Operasional Perpustakaan Digital Selama Masa Ujian Akhir Semester
                            </h1>
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-user-edit mr-2"></i>
                                <span>Oleh: Admin Perpustakaan Digital</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="text-gray-600 text-sm">
                                <i class="far fa-eye mr-1"></i> 1.245 Dilihat
                            </span>
                            <div class="flex space-x-2">
                                <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                                <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                    <i class="far fa-bookmark"></i>
                                </button>
                                <button class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                    <i class="fas fa-print"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Announcement Content -->
                <div class="p-6">
                    <div class="flex flex-col lg:flex-row gap-8">
                        <!-- Main Content -->
                        <div class="lg:w-3/4">
                            <div class="content-wrapper">
                                <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Perpustakaan Digital POLBAN" class="w-full h-auto rounded-lg">
                                
                                <p class="text-gray-700 mb-4">
                                    Kepada seluruh civitas akademika Politeknik Negeri Bandung,
                                </p>
                                
                                <p class="text-gray-700 mb-6">
                                    Berhubung akan dilaksanakan Ujian Akhir Semester (UAS) Genap 2024/2025, dengan ini diberitahukan bahwa jam operasional Perpustakaan Digital POLBAN akan diperpanjang mulai tanggal 17 Juli hingga 31 Juli 2025.
                                </p>
                                
                                <h2 class="text-xl font-semibold text-gray-800 mb-3">Detail Perubahan Jam Operasional</h2>
                                
                                <div class="overflow-x-auto mb-6">
                                    <table class="min-w-full bg-white">
                                        <thead>
                                            <tr>
                                                <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-semibold text-gray-700">Hari</th>
                                                <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-semibold text-gray-700">Jam Operasional</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-2 px-4 border-b border-gray-200">Senin - Jumat</td>
                                                <td class="py-2 px-4 border-b border-gray-200">07.30 - 20.00 WIB</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4 border-b border-gray-200">Sabtu - Minggu</td>
                                                <td class="py-2 px-4 border-b border-gray-200">08.00 - 17.00 WIB</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4 border-b border-gray-200">Hari Libur Nasional</td>
                                                <td class="py-2 px-4 border-b border-gray-200">09.00 - 15.00 WIB</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <h2 class="text-xl font-semibold text-gray-800 mb-3">Layanan yang Tersedia</h2>
                                
                                <ul class="list-disc pl-5 mb-6 text-gray-700">
                                    <li class="mb-2">Akses ke seluruh koleksi digital (e-books, e-journals, skripsi digital)</li>
                                    <li class="mb-2">Layanan peminjaman buku fisik dengan sistem drive-thru</li>
                                    <li class="mb-2">Konsultasi dengan pustakawan via live chat (08.00-16.00 WIB)</li>
                                    <li class="mb-2">Workshop online "Strategi Mencari Referensi untuk Tugas Akhir" setiap Rabu pukul 13.00 WIB</li>
                                </ul>
                                
                                <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mb-6">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-info-circle text-blue-400 text-xl"></i>
                                        </div>
                                        <div class="ml-3">
                                            <h3 class="text-sm font-medium text-blue-800">Informasi Penting</h3>
                                            <div class="mt-2 text-sm text-blue-700">
                                                <p>
                                                    Untuk akses di luar jam kampus, pastikan Anda sudah terdaftar sebagai anggota perpustakaan dan memiliki akses VPN POLBAN. 
                                                    <a href="#" class="font-medium underline text-blue-600 hover:text-blue-500">Pelajari cara akses VPN disini</a>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <h2 class="text-xl font-semibold text-gray-800 mb-3">Tata Tertib Selama Masa UAS</h2>
                                
                                <ol class="list-decimal pl-5 mb-6 text-gray-700">
                                    <li class="mb-2">Dilarang membuat kebisingan di area perpustakaan</li>
                                    <li class="mb-2">Penggunaan ruang diskusi maksimal 5 orang per kelompok</li>
                                    <li class="mb-2">Wajib menunjukkan kartu anggota untuk peminjaman</li>
                                    <li class="mb-2">Tidak diperkenankan memindahkan furniture perpustakaan</li>
                                </ol>
                                
                                <p class="text-gray-700 mb-6">
                                    Demikian pengumuman ini kami sampaikan. Atas perhatian dan kerjasamanya, kami ucapkan terima kasih.
                                </p>
                                
                                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center border-t border-b border-gray-200 py-4 mb-6">
                                    <div class="mb-4 sm:mb-0">
                                        <h3 class="text-sm font-medium text-gray-500">Lampiran</h3>
                                        <div class="flex items-center mt-2">
                                            <i class="fas fa-file-pdf text-red-500 text-xl mr-2"></i>
                                            <a href="#" class="text-sm text-polban-green hover:underline">Surat Resmi Perubahan Jam Operasional.pdf</a>
                                            <span class="text-xs text-gray-500 ml-2">(250 KB)</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-500">Tag</h3>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Jam Operasional</span>
                                            <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Ujian Akhir Semester</span>
                                            <span class="bg-polban-light text-polban-dark-green text-xs px-3 py-1 rounded-full">Perpustakaan Digital</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="text-sm text-gray-500">Terakhir diperbarui: 14 Juli 2025</span>
                                    </div>
                                    <div class="flex space-x-3">
                                        <button class="px-4 py-2 bg-polban-green hover:bg-polban-dark-green text-white rounded-lg transition-colors">
                                            <i class="fas fa-download mr-2"></i> Unduh PDF
                                        </button>
                                        <button class="px-4 py-2 bg-white border border-polban-green text-polban-green hover:bg-gray-50 rounded-lg transition-colors">
                                            <i class="fas fa-print mr-2"></i> Cetak
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Sidebar -->
                        <div class="lg:w-1/4">
                            <div class="bg-gray-50 rounded-lg p-5 mb-6">
                                <h3 class="text-lg font-semibold text-gray-800 mb-4">Pengumuman Lainnya</h3>
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#" class="group">
                                            <h4 class="text-sm font-medium text-gray-800 group-hover:text-polban-green mb-1">Workshop Pemanfaatan Tools Reference Manager</h4>
                                            <p class="text-xs text-gray-500">10 Juli 2025 • 876 dilihat</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group">
                                            <h4 class="text-sm font-medium text-gray-800 group-hover:text-polban-green mb-1">Pemeliharaan Sistem Perpustakaan Digital</h4>
                                            <p class="text-xs text-gray-500">5 Juli 2025 • 543 dilihat</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group">
                                            <h4 class="text-sm font-medium text-gray-800 group-hover:text-polban-green mb-1">Penambahan Koleksi Jurnal Internasional</h4>
                                            <p class="text-xs text-gray-500">1 Juli 2025 • 432 dilihat</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="group">
                                            <h4 class="text-sm font-medium text-gray-800 group-hover:text-polban-green mb-1">Open House Perpustakaan Digital 2025</h4>
                                            <p class="text-xs text-gray-500">28 Juni 2025 • 321 dilihat</p>
                                        </a>
                                    </li>
                                </ul>
                                <a href="/pengumuman" class="mt-4 inline-flex items-center text-sm text-polban-green hover:text-polban-dark-green">
                                    Lihat semua pengumuman <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                            
                            <div class="bg-polban-light rounded-lg p-5">
                                <h3 class="text-lg font-semibold text-gray-800 mb-4">Butuh Bantuan?</h3>
                                <p class="text-sm text-gray-700 mb-4">
                                    Jika Anda memiliki pertanyaan terkait pengumuman ini, silakan hubungi layanan pelanggan kami.
                                </p>
                                <div class="space-y-3">
                                    <a href="#" class="flex items-center text-sm text-gray-700 hover:text-polban-green">
                                        <i class="fas fa-phone-alt text-polban-green mr-2"></i> (022) 2013789
                                    </a>
                                    <a href="#" class="flex items-center text-sm text-gray-700 hover:text-polban-green">
                                        <i class="fas fa-envelope text-polban-green mr-2"></i> helpdesk@perpusdigital.polban.ac.id
                                    </a>
                                    <a href="#" class="flex items-center text-sm text-gray-700 hover:text-polban-green">
                                        <i class="fas fa-comment-dots text-polban-green mr-2"></i> Live Chat
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Related Announcements -->
            <div class="bg-white rounded-xl shadow-md p-6 mb-8" data-aos="fade-up">
                <h3 class="text-xl font-semibold text-gray-800 mb-6">Pengumuman Terkait</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="border border-gray-200 rounded-lg p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-center mb-2">
                            <span class="badge badge-primary mr-2">
                                <i class="fas fa-chalkboard-teacher mr-1"></i> Pelatihan
                            </span>
                            <span class="text-xs text-gray-500">
                                <i class="far fa-calendar-alt mr-1"></i> 10 Juli 2025
                            </span>
                        </div>
                        <h4 class="text-lg font-medium text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                            Workshop Pemanfaatan Tools Reference Manager untuk Penulisan Karya Ilmiah
                        </h4>
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">
                            Perpustakaan Digital POLBAN akan menyelenggarakan workshop "Pemanfaatan Mendeley dan Zotero untuk Penulisan Karya Ilmiah" pada hari Rabu, 19 Juli 2025.
                        </p>
                        <a href="#" class="text-sm text-polban-green hover:text-polban-dark-green flex items-center">
                            Baca selengkapnya <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-center mb-2">
                            <span class="badge badge-info mr-2">
                                <i class="fas fa-tools mr-1"></i> Pemeliharaan
                            </span>
                            <span class="text-xs text-gray-500">
                                <i class="far fa-calendar-alt mr-1"></i> 5 Juli 2025
                            </span>
                        </div>
                        <h4 class="text-lg font-medium text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                            Pemeliharaan Sistem Perpustakaan Digital Tanggal 8 Juli 2025
                        </h4>
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">
                            Dalam rangka peningkatan layanan, akan dilakukan pemeliharaan sistem Perpustakaan Digital POLBAN pada hari Selasa, 8 Juli 2025 pukul 22.00 - 24.00 WIB.
                        </p>
                        <a href="#" class="text-sm text-polban-green hover:text-polban-dark-green flex items-center">
                            Baca selengkapnya <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-center mb-2">
                            <span class="badge badge-primary mr-2">
                                <i class="fas fa-book-open mr-1"></i> Koleksi Baru
                            </span>
                            <span class="text-xs text-gray-500">
                                <i class="far fa-calendar-alt mr-1"></i> 1 Juli 2025
                            </span>
                        </div>
                        <h4 class="text-lg font-medium text-gray-800 mb-2 hover:text-polban-green cursor-pointer">
                            Penambahan Koleksi Jurnal Internasional Terbaru Periode Juli 2025
                        </h4>
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">
                            Perpustakaan Digital POLBAN dengan bangga mengumumkan penambahan 125 judul jurnal internasional terbaru dari berbagai disiplin ilmu.
                        </p>
                        <a href="#" class="text-sm text-polban-green hover:text-polban-dark-green flex items-center">
                            Baca selengkapnya <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Comments Section -->
            <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-up">
                <h3 class="text-xl font-semibold text-gray-800 mb-6">Komentar (3)</h3>
                
                <div class="space-y-6 mb-8">
                    <!-- Comment 1 -->
                    <div class="flex">
                        <div class="flex-shrink-0 mr-4">
                            <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/32.jpg" alt="User avatar">
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="text-sm font-semibold text-gray-800">Dewi Sartika</h4>
                                <span class="text-xs text-gray-500">2 hari yang lalu</span>
                            </div>
                            <p class="text-sm text-gray-700 mb-2">
                                Terima kasih atas informasinya. Apakah selama masa ujian ini juga ada tambahan kuota akses untuk jurnal internasional?
                            </p>
                            <div class="flex space-x-3">
                                <button class="text-xs text-gray-500 hover:text-polban-green">Balas</button>
                                <button class="text-xs text-gray-500 hover:text-polban-green">Laporkan</button>
                            </div>
                            
                            <!-- Reply -->
                            <div class="mt-4 pl-4 border-l-2 border-gray-200">
                                <div class="flex">
                                    <div class="flex-shrink-0 mr-3">
                                        <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/men/42.jpg" alt="Admin avatar">
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-1">
                                            <h4 class="text-sm font-semibold text-gray-800">Admin Perpus</h4>
                                            <span class="text-xs text-gray-500">1 hari yang lalu</span>
                                        </div>
                                        <p class="text-sm text-gray-700 mb-2">
                                            Halo Dewi, untuk akses jurnal internasional kuota tetap sama namun kami akan memprioritaskan akses untuk kebutuhan UAS. Jika ada kendala bisa hubungi helpdesk.
                                        </p>
                                        <div class="flex space-x-3">
                                            <button class="text-xs text-gray-500 hover:text-polban-green">Balas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Comment 2 -->
                    <div class="flex">
                        <div class="flex-shrink-0 mr-4">
                            <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/75.jpg" alt="User avatar">
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="text-sm font-semibold text-gray-800">Rizky Pratama</h4>
                                <span class="text-xs text-gray-500">3 hari yang lalu</span>
                            </div>
                            <p class="text-sm text-gray-700 mb-2">
                                Apakah ruang diskusi kelompok juga buka lebih lama selama masa ujian? Kami butuh tempat untuk belajar kelompok.
                            </p>
                            <div class="flex space-x-3">
                                <button class="text-xs text-gray-500 hover:text-polban-green">Balas</button>
                                <button class="text-xs text-gray-500 hover:text-polban-green">Laporkan</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Comment Form -->
                <div>
                    <h4 class="text-lg font-medium text-gray-800 mb-4">Tinggalkan Komentar</h4>
                    <form>
                        <div class="mb-4">
                            <textarea rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent" placeholder="Tulis komentar Anda..."></textarea>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                            <div class="mb-4 sm:mb-0">
                                <input type="text" class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent" placeholder="Nama Anda">
                            </div>
                            <button type="submit" class="px-6 py-2 bg-polban-green hover:bg-polban-dark-green text-white rounded-md transition-colors">
                                Kirim Komentar
                            </button>
                        </div>
                    </form>
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
    </script>
</body>
</html>