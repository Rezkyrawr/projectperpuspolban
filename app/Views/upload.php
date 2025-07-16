<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Upload Jurnal Digital Politeknik Negeri Bandung">
    <title>Upload Jurnal | Perpustakaan Digital POLBAN</title>
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
        
        .file-upload {
            border: 2px dashed #cbd5e0;
            transition: all 0.3s ease;
        }
        
        .file-upload:hover {
            border-color: #8BC34A;
            background-color: #f8fafc;
        }
        
        .file-upload.active {
            border-color: #8BC34A;
            background-color: #f0fdf4;
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
        
        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
            padding-left: 28px;
            cursor: pointer;
        }
        
        .custom-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }
        
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: white;
            border: 2px solid #cbd5e0;
            border-radius: 4px;
        }
        
        .custom-checkbox:hover input ~ .checkmark {
            border-color: #8BC34A;
        }
        
        .custom-checkbox input:checked ~ .checkmark {
            background-color: #8BC34A;
            border-color: #8BC34A;
        }
        
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }
        
        .custom-checkbox input:checked ~ .checkmark:after {
            display: block;
        }
        
        .custom-checkbox .checkmark:after {
            left: 6px;
            top: 2px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
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
                        <a href="#" class="hover:text-polban-green transition-colors"><i class="fas fa-sign-in-alt mr-1"></i> Login</a>
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
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Upload Jurnal Baru</h1>
                <p class="text-gray-600">Lengkapi formulir berikut untuk mengupload jurnal Anda ke sistem Perpustakaan Digital POLBAN</p>
            </div>
            
            
            <!-- Upload Form -->
            <div class="bg-white rounded-xl shadow-md p-6 mb-8" data-aos="fade-up">
                <form id="uploadForm">
                    <!-- Section 1: Basic Information -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200 flex items-center">
                            <i class="fas fa-info-circle text-polban-green mr-2"></i>
                            Informasi Dasar Jurnal
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Judul Jurnal -->
                            <div class="col-span-2">
                                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Jurnal*</label>
                                <input type="text" id="judul" name="judul" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent"
                                    placeholder="Masukkan judul lengkap jurnal">
                            </div>
                            
                            <!-- Penulis -->
                            <div>
                                <label for="penulis" class="block text-sm font-medium text-gray-700 mb-1">Penulis Utama*</label>
                                <input type="text" id="penulis" name="penulis" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent"
                                    placeholder="Nama penulis utama">
                            </div>
                            
                            <!-- Email Penulis -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Penulis*</label>
                                <input type="email" id="email" name="email" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent"
                                    placeholder="email@polban.ac.id">
                            </div>
                            
                            <!-- Program Studi -->
                            <div>
                                <label for="prodi" class="block text-sm font-medium text-gray-700 mb-1">Program Studi*</label>
                                <select id="prodi" name="prodi" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent">
                                    <option value="">Pilih Program Studi</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik Sipil">Teknik Sipil</option>
                                    <option value="Teknik Kimia">Teknik Kimia</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Akuntansi">Akuntansi</option>
                                    <option value="Administrasi Niaga">Administrasi Niaga</option>
                                </select>
                            </div>
                            
                            <!-- Tahun Terbit -->
                            <div>
                                <label for="tahun" class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit*</label>
                                <select id="tahun" name="tahun" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent">
                                    <option value="">Pilih Tahun</option>
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                            
                            <!-- Bahasa -->
                            <div>
                                <label for="bahasa" class="block text-sm font-medium text-gray-700 mb-1">Bahasa*</label>
                                <select id="bahasa" name="bahasa" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent">
                                    <option value="">Pilih Bahasa</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Section 2: Metadata -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200 flex items-center">
                            <i class="fas fa-tags text-polban-green mr-2"></i>
                            Metadata Jurnal
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Abstrak -->
                            <div class="col-span-2">
                                <label for="abstrak" class="block text-sm font-medium text-gray-700 mb-1">Abstrak*</label>
                                <textarea id="abstrak" name="abstrak" rows="4" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent"
                                    placeholder="Tulis abstrak jurnal Anda (minimal 150 kata)"></textarea>
                            </div>
                            
                            <!-- Kata Kunci -->
                            <div class="col-span-2">
                                <label for="keywords" class="block text-sm font-medium text-gray-700 mb-1">Kata Kunci*</label>
                                <input type="text" id="keywords" name="keywords" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent"
                                    placeholder="Pisahkan dengan koma, contoh: fotovoltaik, energi terbarukan, efisiensi">
                                <p class="text-xs text-gray-500 mt-1">Gunakan kata kunci yang relevan untuk memudahkan pencarian</p>
                            </div>
                            
                            <!-- Bidang Ilmu -->
                            <div>
                                <label for="bidang" class="block text-sm font-medium text-gray-700 mb-1">Bidang Ilmu*</label>
                                <select id="bidang" name="bidang" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent">
                                    <option value="">Pilih Bidang Ilmu</option>
                                    <option value="Teknik">Teknik</option>
                                    <option value="Sains">Sains</option>
                                    <option value="Ekonomi">Ekonomi</option>
                                    <option value="Komputer">Komputer</option>
                                    <option value="Lingkungan">Lingkungan</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                </select>
                            </div>
                            
                            <!-- Kategori -->
                            <div>
                                <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori*</label>
                                <select id="kategori" name="kategori" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent">
                                    <option value="">Pilih Kategori</option>
                                    <option value="Penelitian">Hasil Penelitian</option>
                                    <option value="Review">Artikel Review</option>
                                    <option value="Studi Kasus">Studi Kasus</option>
                                    <option value="Teoritis">Artikel Teoritis</option>
                                </select>
                            </div>
                            
                            <!-- Referensi -->
                            <div class="col-span-2">
                                <label for="referensi" class="block text-sm font-medium text-gray-700 mb-1">Referensi</label>
                                <textarea id="referensi" name="referensi" rows="3"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent"
                                    placeholder="Daftar referensi utama (opsional)"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Section 3: File Upload -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200 flex items-center">
                            <i class="fas fa-file-upload text-polban-green mr-2"></i>
                            Upload Dokumen
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- File Upload -->
                            <div class="col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-2">File Jurnal (PDF)*</label>
                                <div class="file-upload relative border-2 border-dashed rounded-lg p-8 text-center cursor-pointer hover:border-polban-green transition-colors"
                                    id="fileUploadArea">
                                    <input type="file" id="file" name="file" accept=".pdf" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required>
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-cloud-upload-alt text-4xl text-polban-green mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-1">
                                            <span class="font-medium text-polban-green">Klik untuk upload</span> atau drag and drop
                                        </p>
                                        <p class="text-xs text-gray-500">Format PDF (maks. 10MB)</p>
                                    </div>
                                </div>
                                <div id="fileName" class="text-sm text-gray-600 mt-2 hidden">
                                    <i class="fas fa-file-pdf text-red-500 mr-1"></i>
                                    <span id="fileDisplayName"></span>
                                    <button type="button" id="removeFile" class="text-red-500 ml-2">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Cover Image -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Cover (Opsional)</label>
                                <div class="file-upload relative border-2 border-dashed rounded-lg p-8 text-center cursor-pointer hover:border-polban-green transition-colors"
                                    id="coverUploadArea">
                                    <input type="file" id="cover" name="cover" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-image text-4xl text-polban-green mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-1">
                                            <span class="font-medium text-polban-green">Klik untuk upload</span> gambar
                                        </p>
                                        <p class="text-xs text-gray-500">Format JPG/PNG (maks. 2MB)</p>
                                    </div>
                                </div>
                                <div id="coverName" class="text-sm text-gray-600 mt-2 hidden">
                                    <i class="fas fa-image text-blue-500 mr-1"></i>
                                    <span id="coverDisplayName"></span>
                                    <button type="button" id="removeCover" class="text-red-500 ml-2">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Additional Files -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">File Tambahan (Opsional)</label>
                                <div class="file-upload relative border-2 border-dashed rounded-lg p-8 text-center cursor-pointer hover:border-polban-green transition-colors"
                                    id="additionalUploadArea">
                                    <input type="file" id="additional" name="additional" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-paperclip text-4xl text-polban-green mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-1">
                                            <span class="font-medium text-polban-green">Klik untuk upload</span> file pendukung
                                        </p>
                                        <p class="text-xs text-gray-500">Format PDF/ZIP (maks. 5MB)</p>
                                    </div>
                                </div>
                                <div id="additionalName" class="text-sm text-gray-600 mt-2 hidden">
                                    <i class="fas fa-file text-gray-500 mr-1"></i>
                                    <span id="additionalDisplayName"></span>
                                    <button type="button" id="removeAdditional" class="text-red-500 ml-2">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Section 4: License and Agreement -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200 flex items-center">
                            <i class="fas fa-balance-scale text-polban-green mr-2"></i>
                            Lisensi dan Persetujuan
                        </h3>
                        
                        <div class="space-y-4">
                            <!-- License Selection -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Lisensi Publikasi*</label>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="license-cc-by" name="license" type="radio" value="cc-by" class="focus:ring-polban-green h-4 w-4 text-polban-green border-gray-300" checked>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="license-cc-by" class="font-medium text-gray-700">Creative Commons Attribution (CC BY)</label>
                                            <p class="text-gray-500">Mengizinkan penggunaan, distribusi, dan pembuatan turunan selama mencantumkan kredit penulis.</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="license-cc-by-nc" name="license" type="radio" value="cc-by-nc" class="focus:ring-polban-green h-4 w-4 text-polban-green border-gray-300">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="license-cc-by-nc" class="font-medium text-gray-700">Creative Commons Attribution-NonCommercial (CC BY-NC)</label>
                                            <p class="text-gray-500">Mengizinkan penggunaan dan distribusi non-komersial selama mencantumkan kredit penulis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Agreement -->
                            <div class="pt-2">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="agreement" name="agreement" required
                                        class="focus:ring-polban-green h-4 w-4 text-polban-green border-gray-300 rounded">
                                    <span class="checkmark"></span>
                                    <label for="agreement" class="text-sm font-medium text-gray-700 ml-2">
                                        Saya menyatakan bahwa karya ini adalah karya asli saya dan belum pernah dipublikasikan di tempat lain.*
                                    </label>
                                </div>
                                
                                <div class="custom-checkbox mt-2">
                                    <input type="checkbox" id="copyright" name="copyright" required
                                        class="focus:ring-polban-green h-4 w-4 text-polban-green border-gray-300 rounded">
                                    <span class="checkmark"></span>
                                    <label for="copyright" class="text-sm font-medium text-gray-700 ml-2">
                                        Saya memberikan hak kepada POLBAN untuk menyimpan dan mendistribusikan karya ini sesuai dengan lisensi yang dipilih.*
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Form Actions -->
                    <div class="flex flex-col md:flex-row justify-end space-y-3 md:space-y-0 md:space-x-3">
                        <button type="reset" class="px-6 py-2 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-polban-green">
                            Reset Form
                        </button>
                        <button type="submit" class="px-6 py-2 border border-transparent rounded-md shadow-sm text-white bg-polban-green hover:bg-polban-dark-green focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-polban-green">
                            Submit Jurnal
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Submission Guidelines -->
            <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-up">
                <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-info-circle text-polban-green mr-2"></i>
                    Panduan Upload Jurnal
                </h3>
                
                <div class="prose prose-sm max-w-none text-gray-600">
                    <ol class="list-decimal pl-5 space-y-2">
                        <li>Pastikan dokumen yang diupload dalam format PDF dan tidak melebihi 10MB.</li>
                        <li>Judul jurnal harus jelas dan mencerminkan isi penelitian.</li>
                        <li>Abstrak harus lengkap (minimal 150 kata) dan mencakup tujuan, metode, hasil, dan kesimpulan.</li>
                        <li>Gunakan kata kunci yang relevan (3-5 kata) untuk memudahkan pencarian.</li>
                        <li>Pastikan semua penulis telah menyetujui publikasi jurnal ini.</li>
                        <li>Jurnal akan melalui proses review sebelum dipublikasikan.</li>
                        <li>Anda akan menerima notifikasi via email setelah jurnal berhasil diproses.</li>
                    </ol>
                    
                    <div class="mt-4 p-4 bg-blue-50 rounded-lg">
                        <h4 class="font-medium text-blue-800 mb-2"><i class="fas fa-question-circle mr-2"></i>Butuh Bantuan?</h4>
                        <p class="text-sm">Hubungi tim Perpustakaan Digital POLBAN di <a href="mailto:perpusdigital@polban.ac.id" class="text-polban-green hover:underline">perpusdigital@polban.ac.id</a> atau datang langsung ke kantor perpustakaan.</p>
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
        
        // File upload handling
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('file');
            const fileUploadArea = document.getElementById('fileUploadArea');
            const fileNameDisplay = document.getElementById('fileName');
            const fileDisplayName = document.getElementById('fileDisplayName');
            const removeFileBtn = document.getElementById('removeFile');
            
            const coverInput = document.getElementById('cover');
            const coverUploadArea = document.getElementById('coverUploadArea');
            const coverNameDisplay = document.getElementById('coverName');
            const coverDisplayName = document.getElementById('coverDisplayName');
            const removeCoverBtn = document.getElementById('removeCover');
            
            const additionalInput = document.getElementById('additional');
            const additionalUploadArea = document.getElementById('additionalUploadArea');
            const additionalNameDisplay = document.getElementById('additionalName');
            const additionalDisplayName = document.getElementById('additionalDisplayName');
            const removeAdditionalBtn = document.getElementById('removeAdditional');
            
            // Main file handling
            fileInput.addEventListener('change', function(e) {
                if (this.files.length > 0) {
                    const file = this.files[0];
                    if (file.size > 10 * 1024 * 1024) { // 10MB
                        alert('Ukuran file terlalu besar. Maksimal 10MB.');
                        this.value = '';
                        return;
                    }
                    if (file.type !== 'application/pdf') {
                        alert('Hanya file PDF yang diperbolehkan.');
                        this.value = '';
                        return;
                    }
                    
                    fileDisplayName.textContent = file.name;
                    fileNameDisplay.classList.remove('hidden');
                    fileUploadArea.classList.add('active');
                }
            });
            
            removeFileBtn.addEventListener('click', function(e) {
                e.preventDefault();
                fileInput.value = '';
                fileNameDisplay.classList.add('hidden');
                fileUploadArea.classList.remove('active');
            });
            
            // Cover image handling
            coverInput.addEventListener('change', function(e) {
                if (this.files.length > 0) {
                    const file = this.files[0];
                    if (file.size > 2 * 1024 * 1024) { // 2MB
                        alert('Ukuran file terlalu besar. Maksimal 2MB.');
                        this.value = '';
                        return;
                    }
                    if (!file.type.match('image.*')) {
                        alert('Hanya file gambar yang diperbolehkan.');
                        this.value = '';
                        return;
                    }
                    
                    coverDisplayName.textContent = file.name;
                    coverNameDisplay.classList.remove('hidden');
                    coverUploadArea.classList.add('active');
                }
            });
            
            removeCoverBtn.addEventListener('click', function(e) {
                e.preventDefault();
                coverInput.value = '';
                coverNameDisplay.classList.add('hidden');
                coverUploadArea.classList.remove('active');
            });
            
            // Additional file handling
            additionalInput.addEventListener('change', function(e) {
                if (this.files.length > 0) {
                    const file = this.files[0];
                    if (file.size > 5 * 1024 * 1024) { // 5MB
                        alert('Ukuran file terlalu besar. Maksimal 5MB.');
                        this.value = '';
                        return;
                    }
                    if (!file.type.match('application/pdf') && !file.type.match('application/zip')) {
                        alert('Hanya file PDF atau ZIP yang diperbolehkan.');
                        this.value = '';
                        return;
                    }
                    
                    additionalDisplayName.textContent = file.name;
                    additionalNameDisplay.classList.remove('hidden');
                    additionalUploadArea.classList.add('active');
                }
            });
            
            removeAdditionalBtn.addEventListener('click', function(e) {
                e.preventDefault();
                additionalInput.value = '';
                additionalNameDisplay.classList.add('hidden');
                additionalUploadArea.classList.remove('active');
            });
            
            // Drag and drop functionality
            [fileUploadArea, coverUploadArea, additionalUploadArea].forEach(area => {
                area.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    this.classList.add('active');
                });
                
                area.addEventListener('dragleave', function(e) {
                    e.preventDefault();
                    this.classList.remove('active');
                });
                
                area.addEventListener('drop', function(e) {
                    e.preventDefault();
                    this.classList.remove('active');
                    
                    const input = this.querySelector('input[type="file"]');
                    if (e.dataTransfer.files.length > 0) {
                        input.files = e.dataTransfer.files;
                        const event = new Event('change');
                        input.dispatchEvent(event);
                    }
                });
            });
            
            // Form submission
            document.getElementById('uploadForm').addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you would typically handle the form submission via AJAX
                alert('Formulir berhasil dikirim! Jurnal Anda akan diproses oleh tim kami.');
                // Reset form after submission
                this.reset();
                fileNameDisplay.classList.add('hidden');
                coverNameDisplay.classList.add('hidden');
                additionalNameDisplay.classList.add('hidden');
                fileUploadArea.classList.remove('active');
                coverUploadArea.classList.remove('active');
                additionalUploadArea.classList.remove('active');
            });
        });
    </script>
</body>
</html>