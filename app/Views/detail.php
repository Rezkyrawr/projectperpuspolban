<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Detail Artikel - Perpustakaan Digital Politeknik Negeri Bandung">
    <title>Detail Artikel | Perpustakaan Digital POLBAN</title>
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
        
        .article-content p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }
        
        .article-content h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 2rem 0 1rem;
            color: #2d3748;
        }
        
        .article-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin: 1.5rem 0 1rem;
            color: #2d3748;
        }
        
        .article-content ul, .article-content ol {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }
        
        .article-content ul li {
            list-style-type: disc;
            margin-bottom: 0.5rem;
        }
        
        .article-content ol li {
            list-style-type: decimal;
            margin-bottom: 0.5rem;
        }
        
        .article-content a {
            color: #8BC34A;
            text-decoration: underline;
        }
        
        .article-content a:hover {
            color: #689F38;
        }
        
        .article-content blockquote {
            border-left: 4px solid #8BC34A;
            padding-left: 1rem;
            margin: 1.5rem 0;
            color: #4a5568;
            font-style: italic;
        }
        
        .article-content table {
            width: 100%;
            margin: 1.5rem 0;
            border-collapse: collapse;
        }
        
        .article-content table th, .article-content table td {
            padding: 0.75rem;
            border: 1px solid #e2e8f0;
            text-align: left;
        }
        
        .article-content table th {
            background-color: #f7fafc;
            font-weight: 600;
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
                        <a href="/" class="flex items-center">
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
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <button class="lg:hidden text-gray-800 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </nav>
            </div>
        </div>
    </header>

    

    <!-- Article Content -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Main Article -->
                <div class="w-full lg:w-2/3">
                    <article class="article-content">
                        <header class="mb-8">
                            <span class="bg-polban-green text-white text-sm px-3 py-1 rounded-full inline-block mb-3">Jurnal Teknologi</span>
                            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Telemetri Penakar Hujan di Waibao Kabupaten Flores Timur NTT</h1>
                            
                            <div class="flex flex-wrap items-center text-gray-600 text-sm mb-6">
                                <div class="flex items-center mr-4 mb-2">
                                    <i class="far fa-user mr-2"></i>
                                    <span>Tian Swi Hong</span>
                                </div>
                                <div class="flex items-center mr-4 mb-2">
                                    <i class="far fa-calendar-alt mr-2"></i>
                                    <span>Diterbitkan: 2 Juli 2025</span>
                                </div>
                                <div class="flex items-center mr-4 mb-2">
                                    <i class="far fa-eye mr-2"></i>
                                    <span>1.245 Dilihat</span>
                                </div>
                                <div class="flex items-center mr-4 mb-2">
                                    <i class="far fa-file mr-2"></i>
                                    <span>PDF, 1.2 MB</span>
                                </div>
                            </div>
                            
                            <div class="flex flex-wrap gap-3 mb-6">
                                <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Teknologi</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Meteorologi</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">IoT</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Flores</span>
                            </div>
                            
                            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-info-circle text-blue-500 mt-1"></i>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-sm font-medium text-blue-800">Abstrak</h3>
                                        <div class="mt-2 text-sm text-blue-700">
                                            <p>Penelitian ini mengembangkan sistem telemetri penakar hujan berbasis IoT untuk memantau curah hujan di daerah Waibao, Flores Timur, Nusa Tenggara Timur. Sistem ini dirancang untuk mengatasi keterbatasan data curah hujan di daerah terpencil dengan mengirimkan data secara real-time ke server pusat melalui jaringan GSM. Hasil pengujian menunjukkan akurasi pengukuran sebesar 98,7% dengan interval pengiriman data setiap 15 menit. Sistem ini dapat menjadi solusi untuk pemantauan cuaca di daerah dengan infrastruktur terbatas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        
                        <div class="prose max-w-none mb-8">
                            <h2>Pendahuluan</h2>
                            <p>Flores Timur sebagai salah satu wilayah di Nusa Tenggara Timur memiliki karakteristik iklim yang unik dengan musim kemarau yang panjang dan musim hujan yang singkat namun intens. Pemantauan curah hujan di daerah ini sangat penting untuk perencanaan pertanian, pengelolaan sumber daya air, dan mitigasi bencana. Namun, keterbatasan infrastruktur dan sumber daya manusia membuat pengumpulan data curah hujan di daerah terpencil seperti Waibao menjadi tantangan tersendiri.</p>
                            
                            <h2>Metodologi</h2>
                            <p>Penelitian ini menggunakan pendekatan eksperimental dengan merancang dan mengimplementasikan sistem telemetri penakar hujan yang terdiri dari beberapa komponen utama:</p>
                            
                            <ul>
                                <li><strong>Sensor Curah Hujan:</strong> Menggunakan sensor tipping bucket dengan akurasi ±2%</li>
                                <li><strong>Modul Mikrokontroler:</strong> ESP32 dengan fitur WiFi dan Bluetooth</li>
                                <li><strong>Modul GSM:</strong> SIM800L untuk transmisi data melalui jaringan seluler</li>
                                <li><strong>Power Supply:</strong> Panel surya 20W dengan baterai lithium 12V/7Ah</li>
                                <li><strong>Server:</strong> Aplikasi berbasis web untuk visualisasi data</li>
                            </ul>
                            
                            <figure class="my-6">
                                <img src="<?= base_url('images/rain-gauge.jpg') ?>" alt="Desain Sistem Telemetri Penakar Hujan" class="w-full rounded-lg shadow-md">
                                <figcaption class="text-center text-sm text-gray-500 mt-2">Gambar 1. Desain Sistem Telemetri Penakar Hujan</figcaption>
                            </figure>
                            
                            <h2>Hasil dan Pembahasan</h2>
                            <p>Sistem telah diuji selama 3 bulan (Maret-Mei 2025) di lokasi penelitian. Berikut adalah beberapa temuan utama:</p>
                            
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Nilai</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Akurasi Pengukuran</td>
                                        <td>98,7%</td>
                                        <td>Dibandingkan dengan alat standar BMKG</td>
                                    </tr>
                                    <tr>
                                        <td>Interval Pengiriman Data</td>
                                        <td>15 menit</td>
                                        <td>Dapat disesuaikan kebutuhan</td>
                                    </tr>
                                    <tr>
                                        <td>Konsumsi Daya</td>
                                        <td>0,8W</td>
                                        <td>Dalam kondisi normal</td>
                                    </tr>
                                    <tr>
                                        <td>Keandalan Transmisi</td>
                                        <td>96,2%</td>
                                        <td>Data berhasil terkirim</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <blockquote>
                                "Sistem telemetri ini menunjukkan potensi besar untuk pemantauan cuaca di daerah terpencil dengan biaya yang relatif terjangkau dibandingkan solusi komersial yang ada." - Tian Swi Hong
                            </blockquote>
                            
                            <h2>Kesimpulan</h2>
                            <p>Sistem telemetri penakar hujan berbasis IoT yang dikembangkan telah berhasil mengatasi tantangan pemantauan curah hujan di daerah Waibao, Flores Timur. Dengan akurasi tinggi dan keandalan transmisi yang baik, sistem ini dapat menjadi model untuk implementasi di daerah terpencil lainnya di Indonesia. Penelitian lanjutan diperlukan untuk meningkatkan ketahanan sistem terhadap kondisi lingkungan yang ekstrim dan memperluas cakupan parameter meteorologi yang dipantau.</p>
                        </div>
                        
                        <div class="border-t border-gray-200 pt-6 mt-8">
                            <h3 class="text-xl font-semibold mb-4">Referensi</h3>
                            <ol class="list-decimal pl-5 space-y-2">
                                <li>WMO. (2024). Guide to Meteorological Instruments and Methods of Observation. Geneva: World Meteorological Organization.</li>
                                <li>Santoso, H., &amp; Wijaya, A. (2023). IoT-Based Environmental Monitoring Systems: Design and Implementation. Jakarta: Penerbit ITB.</li>
                                <li>BMKG. (2025). Laporan Curah Hujan Wilayah NTT Tahun 2024. Kupang: Badan Meteorologi Klimatologi dan Geofisika.</li>
                                <li>Liu, X., et al. (2024). "Low-Cost Rainfall Monitoring in Remote Areas Using IoT Technology". Journal of Environmental Engineering, 15(3), 245-258.</li>
                            </ol>
                        </div>
                    </article>
                    
                    <!-- Download & Share -->
                    <div class="bg-gray-50 rounded-lg p-6 mt-8 flex flex-col sm:flex-row justify-between items-center">
                        <div class="mb-4 sm:mb-0">
                            <a href="#" class="bg-polban-green hover:bg-polban-dark-green text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-300 shadow flex items-center">
                                <i class="fas fa-download mr-2"></i> Unduh Dokumen Lengkap
                            </a>
                        </div>
                        <div>
                            <span class="text-gray-600 mr-3">Bagikan:</span>
                            <a href="#" class="text-gray-500 hover:text-blue-600 mx-1"><i class="fab fa-facebook-f text-xl"></i></a>
                            <a href="#" class="text-gray-500 hover:text-blue-400 mx-1"><i class="fab fa-twitter text-xl"></i></a>
                            <a href="#" class="text-gray-500 hover:text-red-600 mx-1"><i class="fab fa-whatsapp text-xl"></i></a>
                            <a href="#" class="text-gray-500 hover:text-blue-700 mx-1"><i class="fab fa-linkedin-in text-xl"></i></a>
                            <a href="#" class="text-gray-500 hover:text-gray-800 mx-1"><i class="fas fa-envelope text-xl"></i></a>
                        </div>
                    </div>

                    <!-- Informasi Publisher -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden mt-8" data-aos="fade-up">
                        <div class="bg-polban-green text-white px-6 py-4">
                            <h2 class="text-xl font-bold"><i class="fas fa-info-circle mr-2"></i> Informasi Publisher</h2>
                        </div>
                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Properti</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nilai Properti</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ID Publisher</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">JBPTPPOLBAN</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Organisasi</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Nama Kontak</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Erlin Arvelina</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Alamat</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">JL Trsn. Gegerkalong Hilir Ds. Ciwaruga</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Kota</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bandung</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Daerah</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jawa Barat</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Negara</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Indonesia</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Telepon</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">022 201 3789 ext. 168, 169, 239</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Fax</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">022 201 3889</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">E-mail Administrator</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">erlin.arvelina@polban.ac.id</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">E-mail CKO</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">erlin.arvelina@polban.ac.id</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="w-full lg:w-1/3 lg:sticky lg:top-4 lg:self-start space-y-6">
                    <!-- Author Profile -->
                    <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-left">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-user-edit text-polban-green mr-2"></i>
                            Tentang Penulis
                        </h3>
                        <div class="flex items-center mb-4">
                            <img src="<?= base_url('images/author.jpg') ?>" alt="Tian Swi Hong" class="w-16 h-16 rounded-full object-cover mr-4 border-2 border-polban-green">
                            <div>
                                <h4 class="font-bold text-gray-800">Tian Swi Hong</h4>
                                <p class="text-sm text-gray-600">Dosen Teknik Elektro</p>
                                <p class="text-sm text-gray-600">Politeknik Negeri Bandung</p>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm mb-4">Peneliti di bidang sistem telemetri dan IoT dengan fokus pada aplikasi meteorologi dan lingkungan. Memiliki pengalaman lebih dari 10 tahun dalam pengembangan sistem monitoring berbasis embedded system.</p>
                        <div class="flex space-x-3">
                            <a href="#" class="text-gray-500 hover:text-blue-700"><i class="fab fa-google-scholar text-xl"></i></a>
                            <a href="#" class="text-gray-500 hover:text-blue-600"><i class="fab fa-linkedin-in text-xl"></i></a>
                            <a href="#" class="text-gray-500 hover:text-gray-800"><i class="fas fa-envelope text-xl"></i></a>
                        </div>
                    </div>
                    
                    <!-- Discussion Section -->
                    <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-left" data-aos-delay="100">
                        <h3 class="text-xl font-semibold mb-6 flex items-center">
                            <i class="fas fa-comments text-polban-green mr-2"></i>
                            Diskusi (3 Komentar)
                        </h3>
                        
                        <div class="space-y-4 max-h-96 overflow-y-auto pr-2">
                            <!-- Comment 1 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-3">
                                    <img class="h-8 w-8 rounded-full" src="<?= base_url('images/user1.jpg') ?>" alt="User 1">
                                </div>
                                <div class="flex-1">
                                    <div class="bg-gray-50 p-3 rounded-lg">
                                        <div class="flex items-center justify-between mb-1">
                                            <h4 class="font-semibold text-sm">Dr. Andri Budiadi</h4>
                                            <span class="text-xs text-gray-500">2 hari lalu</span>
                                        </div>
                                        <p class="text-gray-700 text-sm">Penelitian yang sangat relevan dengan kebutuhan daerah terpencil...</p>
                                    </div>
                                    <div class="mt-1 flex items-center text-xs">
                                        <button class="text-gray-500 hover:text-polban-green mr-2">
                                            <i class="fas fa-reply mr-1"></i> Balas
                                        </button>
                                        <button class="text-gray-500 hover:text-polban-green">
                                            <i class="far fa-thumbs-up mr-1"></i> 2
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Comment 2 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-3">
                                    <img class="h-8 w-8 rounded-full" src="<?= base_url('images/user2.jpg') ?>" alt="User 2">
                                </div>
                                <div class="flex-1">
                                    <div class="bg-gray-50 p-3 rounded-lg">
                                        <div class="flex items-center justify-between mb-1">
                                            <h4 class="font-semibold text-sm">Prof. Siti Aisyah</h4>
                                            <span class="text-xs text-gray-500">5 hari lalu</span>
                                        </div>
                                        <p class="text-gray-700 text-sm">Sangat mengapresiasi inovasi ini. Saya tertarik untuk...</p>
                                    </div>
                                    <div class="mt-1 flex items-center text-xs">
                                        <button class="text-gray-500 hover:text-polban-green mr-2">
                                            <i class="fas fa-reply mr-1"></i> Balas
                                        </button>
                                        <button class="text-gray-500 hover:text-polban-green">
                                            <i class="far fa-thumbs-up mr-1"></i> 5
                                        </button>
                                    </div>
                                    
                                    <!-- Reply -->
                                    <div class="flex mt-2 ml-3">
                                        <div class="flex-shrink-0 mr-2">
                                            <img class="h-6 w-6 rounded-full" src="<?= base_url('images/author.jpg') ?>" alt="Author">
                                        </div>
                                        <div class="flex-1">
                                            <div class="bg-polban-light p-2 rounded-lg">
                                                <div class="flex items-center justify-between mb-1">
                                                    <h4 class="font-semibold text-xs">Tian Swi Hong</h4>
                                                    <span class="text-xs text-gray-500">4 hari lalu</span>
                                                </div>
                                                <p class="text-gray-700 text-xs">Terima kasih atas pertanyaannya, Prof...</p>
                                            </div>
                                            <div class="mt-1 flex items-center text-xs">
                                                <button class="text-gray-500 hover:text-polban-green">
                                                    <i class="far fa-thumbs-up mr-1"></i> 3
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Comment Form -->
                        <div class="mt-6">
                            <h4 class="font-semibold text-sm mb-3">Tinggalkan Komentar</h4>
                            <form>
                                <div class="mb-3">
                                    <textarea rows="3" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-polban-green focus:border-polban-green" placeholder="Tulis komentar Anda..."></textarea>
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" class="bg-polban-green hover:bg-polban-dark-green text-white text-sm font-semibold py-2 px-4 rounded-lg transition-colors duration-300">
                                        Kirim
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Statistics -->
                    <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-left" data-aos-delay="200">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-chart-bar text-polban-green mr-2"></i>
                            Statistik Artikel
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-700">Total Dilihat</span>
                                    <span class="font-medium">1,245</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-polban-green h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-700">Unduhan</span>
                                    <span class="font-medium">428</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-700">Kutipan</span>
                                    <span class="font-medium">12</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-500 h-2 rounded-full" style="width: 30%"></div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-700">Bagikan</span>
                                    <span class="font-medium">56</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Keywords -->
                    <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-left" data-aos-delay="300">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-tags text-polban-green mr-2"></i>
                            Kata Kunci
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="bg-gray-100 hover:bg-polban-light text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">telemetri</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-light text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">penakar hujan</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-light text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">IoT</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-light text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">Flores</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-light text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">sensor</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-light text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">GSM</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-light text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">monitoring</a>
                            <a href="#" class="bg-gray-100 hover:bg-polban-light text-gray-800 text-xs px-3 py-1 rounded-full transition-colors">curah hujan</a>
                        </div>
                    </div>
                </div>
            </div>
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
        
        // Floating button interaction
        document.addEventListener('DOMContentLoaded', function() {
            const floatBtn = document.querySelector('.floating-btn');
            if (floatBtn) {
                floatBtn.addEventListener('click', function() {
                    alert('Bantuan: Silahkan hubungi perpusdigital@polban.ac.id');
                });
            }
            
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
