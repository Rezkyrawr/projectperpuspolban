<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tentang Perpustakaan Digital Politeknik Negeri Bandung">
    <title>Tentang Kami | Perpustakaan Digital POLBAN</title>
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
        
        .about-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .about-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border-left-color: #8BC34A;
        }
        
        .timeline-item:before {
            content: '';
            position: absolute;
            left: -38px;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #8BC34A;
            border: 4px solid #DCEDC8;
        }
        
        .timeline:before {
            content: '';
            position: absolute;
            left: -28px;
            top: 0;
            width: 2px;
            height: 100%;
            background: #DCEDC8;
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
            <!-- Hero Section -->
            <div class="bg-gradient-to-r from-polban-green to-polban-dark-green rounded-xl shadow-md p-8 mb-12 text-white" data-aos="fade-up">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-2/3 mb-6 md:mb-0">
                        <h1 class="text-3xl md:text-4xl font-bold mb-4">Perpustakaan Digital POLBAN</h1>
                        <p class="text-lg md:text-xl mb-6">Mewadahi, melestarikan, dan menyebarluaskan karya akademik komunitas Politeknik Negeri Bandung</p>
                        <div class="flex flex-wrap gap-4">
                            <div class="flex items-center">
                                <div class="bg-white bg-opacity-20 rounded-full p-3 mr-3">
                                    <i class="fas fa-book-open text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold">2,345+</div>
                                    <div class="text-sm">Jurnal Tersedia</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-white bg-opacity-20 rounded-full p-3 mr-3">
                                    <i class="fas fa-download text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold">15,678+</div>
                                    <div class="text-sm">Total Unduhan</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-white bg-opacity-20 rounded-full p-3 mr-3">
                                    <i class="fas fa-users text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold">1,234+</div>
                                    <div class="text-sm">Penulis Terdaftar</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/3 flex justify-center">
                    <img src="<?= base_url('images/logo-polban.png') ?>" alt="POLBAN Logo" class="h-15 w-20">
                    </div>
                </div>
            </div>
            
            <!-- Tentang Kami Section -->
            <div class="bg-white rounded-xl shadow-md p-8 mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-university text-polban-green mr-3"></i>
                    Tentang Perpustakaan Digital POLBAN
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <p class="text-gray-700 mb-4">
                            Perpustakaan Digital Politeknik Negeri Bandung merupakan platform repositori institusi yang bertujuan untuk mengumpulkan, melestarikan, dan mendistribusikan karya akademik yang dihasilkan oleh sivitas akademika POLBAN.
                        </p>
                        <p class="text-gray-700 mb-4">
                            Didirikan pada tahun 2015, kami berkomitmen untuk meningkatkan visibilitas penelitian yang dilakukan di lingkungan POLBAN serta memfasilitasi pertukaran pengetahuan secara terbuka dan berkelanjutan.
                        </p>
                        <p class="text-gray-700">
                            Sebagai bagian dari komitmen POLBAN terhadap pendidikan tinggi yang berkualitas, perpustakaan digital ini menjadi sarana penting dalam mendukung Tri Dharma Perguruan Tinggi.
                        </p>
                    </div>
                    <div>
                        <div class="bg-polban-light rounded-lg p-6 h-full">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Visi dan Misi</h3>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-medium text-polban-dark-green mb-2">Visi</h4>
                                    <p class="text-gray-700">"Menjadi pusat repositori digital terkemuka yang mendukung pengembangan ilmu pengetahuan dan teknologi melalui penyediaan akses terbuka terhadap karya akademik berkualitas."</p>
                                </div>
                                <div>
                                    <h4 class="font-medium text-polban-dark-green mb-2">Misi</h4>
                                    <ul class="list-disc pl-5 space-y-2 text-gray-700">
                                        <li>Menyediakan akses terbuka terhadap hasil penelitian dan karya akademik POLBAN</li>
                                        <li>Meningkatkan visibilitas dan dampak penelitian sivitas akademika POLBAN</li>
                                        <li>Melestarikan karya intelektual sebagai bagian dari warisan akademik institusi</li>
                                        <li>Mendorong kolaborasi penelitian melalui berbagi pengetahuan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Timeline Section -->
            <div class="bg-white rounded-xl shadow-md p-8 mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-8 flex items-center">
                    <i class="fas fa-history text-polban-green mr-3"></i>
                    Sejarah Perkembangan
                </h2>
                
                <div class="relative pl-10">
                    <div class="timeline space-y-8">
                        <!-- Item 1 -->
                        <div class="timeline-item relative pl-8">
                            <div class="about-card bg-white border border-gray-200 rounded-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center mb-3">
                                    <h3 class="text-xl font-semibold text-gray-800">Pendirian Awal</h3>
                                    <span class="md:ml-auto bg-polban-light text-polban-dark-green text-sm px-3 py-1 rounded-full">2015</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Perpustakaan Digital POLBAN resmi diluncurkan sebagai bagian dari inisiatif digitalisasi koleksi akademik. Awalnya berisi 150 karya tulis ilmiah.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Peluncuran</span>
                                    <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Digitalisasi</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 2 -->
                        <div class="timeline-item relative pl-8">
                            <div class="about-card bg-white border border-gray-200 rounded-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center mb-3">
                                    <h3 class="text-xl font-semibold text-gray-800">Integrasi Sistem</h3>
                                    <span class="md:ml-auto bg-polban-light text-polban-dark-green text-sm px-3 py-1 rounded-full">2017</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Sistem terintegrasi dengan perpustakaan fisik POLBAN dan mulai mengadopsi standar metadata internasional untuk koleksi digital.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Integrasi</span>
                                    <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Metadata</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 3 -->
                        <div class="timeline-item relative pl-8">
                            <div class="about-card bg-white border border-gray-200 rounded-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center mb-3">
                                    <h3 class="text-xl font-semibold text-gray-800">Open Access Initiative</h3>
                                    <span class="md:ml-auto bg-polban-light text-polban-dark-green text-sm px-3 py-1 rounded-full">2019</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Menerapkan kebijakan akses terbuka (open access) untuk semua karya akademik dan terindeks di Google Scholar. Koleksi mencapai 1.000 item.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Open Access</span>
                                    <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Google Scholar</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 4 -->
                        <div class="timeline-item relative pl-8">
                            <div class="about-card bg-white border border-gray-200 rounded-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center mb-3">
                                    <h3 class="text-xl font-semibold text-gray-800">Pengembangan Platform</h3>
                                    <span class="md:ml-auto bg-polban-light text-polban-dark-green text-sm px-3 py-1 rounded-full">2021</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Meluncurkan platform baru dengan fitur yang lebih lengkap termasuk DOI untuk karya akademik dan integrasi ORCID untuk penulis.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">DOI</span>
                                    <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">ORCID</span>
                                    <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Platform Baru</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 5 -->
                        <div class="timeline-item relative pl-8">
                            <div class="about-card bg-white border border-gray-200 rounded-lg p-6">
                                <div class="flex flex-col md:flex-row md:items-center mb-3">
                                    <h3 class="text-xl font-semibold text-gray-800">Sertifikasi SINTA</h3>
                                    <span class="md:ml-auto bg-polban-light text-polban-dark-green text-sm px-3 py-1 rounded-full">2023</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Mendapatkan sertifikasi sebagai repositori institusi terakreditasi SINTA dari Kementerian Pendidikan dan memiliki lebih dari 2.000 karya.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">SINTA</span>
                                    <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Akreditasi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Team Section -->
            <div class="bg-white rounded-xl shadow-md p-8 mb-12" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-8 flex items-center">
                    <i class="fas fa-users text-polban-green mr-3"></i>
                    Tim Kami
                </h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Team Member 1 -->
                    <div class="about-card bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Team Member" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">Dr. Ahmad Fauzi, M.T.</h3>
                            <p class="text-polban-dark-green mb-2">Kepala Perpustakaan</p>
                            <p class="text-sm text-gray-600 mb-3">Bertanggung jawab atas pengelolaan strategis perpustakaan digital dan kerja sama institusi.</p>
                            <div class="flex space-x-3">
                                <a href="#" class="text-gray-500 hover:text-polban-green"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-gray-500 hover:text-polban-green"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team Member 2 -->
                    <div class="about-card bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Team Member" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">Dian Sari, S.Kom.</h3>
                            <p class="text-polban-dark-green mb-2">Koordinator Digitalisasi</p>
                            <p class="text-sm text-gray-600 mb-3">Mengelola proses digitalisasi dokumen dan pengembangan platform.</p>
                            <div class="flex space-x-3">
                                <a href="#" class="text-gray-500 hover:text-polban-green"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-gray-500 hover:text-polban-green"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team Member 3 -->
                    <div class="about-card bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Team Member" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">Rudi Hermawan, S.Si.</h3>
                            <p class="text-polban-dark-green mb-2">Spesialis Metadata</p>
                            <p class="text-sm text-gray-600 mb-3">Bertanggung jawab atas katalogisasi dan pengindeksan koleksi digital.</p>
                            <div class="flex space-x-3">
                                <a href="#" class="text-gray-500 hover:text-polban-green"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-gray-500 hover:text-polban-green"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Team Member 4 -->
                    <div class="about-card bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Team Member" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-800">Siti Rahayu, M.Kom.</h3>
                            <p class="text-polban-dark-green mb-2">Pengembang Sistem</p>
                            <p class="text-sm text-gray-600 mb-3">Mengembangkan dan memelihara infrastruktur teknologi perpustakaan digital.</p>
                            <div class="flex space-x-3">
                                <a href="#" class="text-gray-500 hover:text-polban-green"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-gray-500 hover:text-polban-green"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Kerja Sama Section -->
            <div class="bg-white rounded-xl shadow-md p-8" data-aos="fade-up">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-8 flex items-center">
                    <i class="fas fa-handshake text-polban-green mr-3"></i>
                    Mitra Kerja Sama
                </h2>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <img src="https://akupintar.id/documents/20143/0/POLBAN.png/9522051a-ddb6-c313-d3c4-1a94f3b8637b?version=1.0&t=1519108656665&imageThumbnail=1" alt="POLBAN" class="h-12">
                    </div>
                    <div class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjYu8xCXCL9Pz62upEnmIUNWiB3OM0al95oj812CtVLwoTrq7no_dDe4_-lXvcYu1m19Db3zIIQnILPwBdqs8vIzEuxbn9Qxeg3xQasO0mmrLCGKM5ifkNQ7bG84E-QjsHEBP2Ee6jVbjXb_3-QXUfWUVZ9F2iO6cygr4itWinhQQYZU6iVlopz5w/s320/Logo%20Kementerian%20Pendidikan%20dan%20Kebudayaan%20(Kemendikbud)%20(PNG-480p)%20-%20koleksilogo.png" alt="Kemendikbud" class="h-12">
                    </div>
                    <div class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <img src="https://tse1.mm.bing.net/th/id/OIP._-yRf1G-QaZg-0YWuAZX_gHaDQ?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Google Scholar" class="h-12">
                    </div>
                    <div class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <img src="https://www.oikosjournal.org/sites/oikosjournal.org/files/styles/adaptive/public/orcid2.png?itok=2dZ46h4B" alt="ORCID" class="h-12">
                    </div>
                    <div class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <img src="https://seeklogo.com/images/C/crossref-logo-4129AAC64B-seeklogo.com.png" alt="Crossref" class="h-12">
                    </div>
                    <div class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <img src="https://logos-world.net/wp-content/uploads/2022/01/Creative-Commons-CC-Logo.png" alt="Creative Commons" class="h-12">
                    </div>
                    <div class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <img src="https://e-resources.perpusnas.go.id/assets/logo.png" alt="Perpusnas" class="h-12">
                    </div>
                    <div class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <img src="https://logowik.com/content/uploads/images/lipi8964.logowik.com.webp" alt="LIPI" class="h-12">
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
    </script>
</body>
</html>