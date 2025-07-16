<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Upload Tugas Akhir - Perpustakaan Digital POLBAN">
    <title>Upload Tugas Akhir | Perpustakaan Digital POLBAN</title>
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
                        <a href="/home" class="px-4 py-2 text-gray-800 font-medium">Beranda</a>
                        <a href="/jurnal" class="px-4 py-2 text-gray-800 font-medium">Jurnal</a>
                        <a href="/skripsi" class="px-4 py-2 text-gray-800 font-medium">Skripsi</a>
                        <a href="/modul" class="px-4 py-2 text-gray-800 font-medium">Modul</a>
                        <a href="/upload" class="px-4 py-2 text-white font-medium bg-polban-green rounded-md">Upload</a>
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
            <!-- Flash Messages -->
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                    <span class="block sm:inline"><?= session()->getFlashdata('success') ?></span>
                </div>
            <?php endif ?>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                    <span class="block sm:inline"><?= session()->getFlashdata('error') ?></span>
                </div>
            <?php endif ?>

            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                    <ul class="list-disc list-inside">
                        <?php foreach (session()->getFlashdata('errors') as $err) : ?>
                            <li><?= esc($err) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>

            <!-- Page Header -->
            <div class="mb-8" data-aos="fade-up">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Lengkapi Berkas Tugas Akhir</h1>
                <p class="text-gray-600">Silakan lengkapi form berikut untuk mengunggah tugas akhir Anda ke sistem Perpustakaan Digital POLBAN</p>
            </div>
            
            <!-- Upload Form -->
            <div class="bg-white rounded-xl shadow-md p-6 mb-8" data-aos="fade-up">
                <form action="<?= base_url('articles/store') ?>" method="post" enctype="multipart/form-data">
                    <!-- Info Box -->
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-blue-800">Informasi Penting</h4>
                                <p class="text-sm text-blue-600 mt-1">Mohon lengkapi berkas minimal <strong>Bab 1</strong>. Bab 2-6 dan Lampiran opsional, tapi disarankan diunggah jika sudah tersedia.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Section 1: Basic Information -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200 flex items-center">
                            <i class="fas fa-user-graduate text-polban-green mr-2"></i>
                            Informasi Mahasiswa
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nama Mahasiswa -->
                            <div>
                                <label for="nama_user" class="block text-sm font-medium text-gray-700 mb-1">Nama Mahasiswa*</label>
                                <input type="text" id="nama_user" name="nama_user" required 
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent"
                                    placeholder="Nama lengkap mahasiswa">
                            </div>
                            
                            <!-- Nama Pembimbing Manual -->
                            <div>
                                <label for="nama_pembimbing_manual" class="block text-sm font-medium text-gray-700 mb-1">Nama Pembimbing</label>
                                <input type="text" id="nama_pembimbing_manual" name="nama_pembimbing_manual"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent"
                                    placeholder="Nama pembimbing (jika ada)">
                            </div>
                            
                            <!-- Tahun Lulus -->
                            <div>
                                <label for="tahun_lulus" class="block text-sm font-medium text-gray-700 mb-1">Tahun Lulus*</label>
                                <input type="number" id="tahun_lulus" name="tahun_lulus" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent"
                                    placeholder="Tahun lulus">
                            </div>
                            
                            <!-- Jurusan -->
                            <div>
                                <label for="id_jurusan" class="block text-sm font-medium text-gray-700 mb-1">Jurusan*</label>
                                <select id="id_jurusan" name="id_jurusan" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent">
                                    <option value="">-- Pilih Jurusan --</option>
                                    <?php foreach ($jurusans as $j) : ?>
                                        <option value="<?= $j['id_jurusan'] ?>"><?= esc($j['nama_jurusan']) ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            
                            <!-- Prodi -->
                            <div>
                                <label for="id_prodi" class="block text-sm font-medium text-gray-700 mb-1">Prodi*</label>
                                <select id="id_prodi" name="id_prodi" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent">
                                    <option value="">-- Pilih Prodi --</option>
                                    <?php foreach ($prodis as $p) : ?>
                                        <option value="<?= $p['id_prodi'] ?>"><?= esc($p['nama_prodi']) ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            
                            <!-- Kategori -->
                            <div>
                                <label for="id_kategory" class="block text-sm font-medium text-gray-700 mb-1">Kategori*</label>
                                <select id="id_kategory" name="id_kategory" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent">
                                    <option value="">-- Pilih Kategori --</option>
                                    <?php foreach ($kategories as $k) : ?>
                                        <option value="<?= $k['id_kategory'] ?>"><?= esc($k['kategory']) ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            
                            <!-- Judul -->
                            <div class="col-span-2">
                                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Tugas Akhir*</label>
                                <input type="text" id="judul" name="judul" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-polban-green focus:border-transparent"
                                    placeholder="Judul lengkap tugas akhir">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Section 2: File Upload -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200 flex items-center">
                            <i class="fas fa-file-upload text-polban-green mr-2"></i>
                            Upload Dokumen
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Bab 1 -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Bab 1 (PDF)*</label>
                                <div class="file-upload relative border-2 border-dashed rounded-lg p-6 text-center cursor-pointer hover:border-polban-green transition-colors"
                                    id="bab1UploadArea">
                                    <input type="file" id="bab1" name="bab1" accept=".pdf" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" required>
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-file-pdf text-3xl text-polban-green mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-1">
                                            <span class="font-medium text-polban-green">Klik untuk upload</span> Bab 1
                                        </p>
                                        <p class="text-xs text-gray-500">Format PDF (maks. 10MB)</p>
                                    </div>
                                </div>
                                <div id="bab1FileName" class="text-sm text-gray-600 mt-2 hidden">
                                    <i class="fas fa-file-pdf text-red-500 mr-1"></i>
                                    <span id="bab1DisplayName"></span>
                                    <button type="button" id="removeBab1" class="text-red-500 ml-2">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Bab 2 -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Bab 2 (PDF)</label>
                                <div class="file-upload relative border-2 border-dashed rounded-lg p-6 text-center cursor-pointer hover:border-polban-green transition-colors"
                                    id="bab2UploadArea">
                                    <input type="file" id="bab2" name="bab2" accept=".pdf" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-file-pdf text-3xl text-polban-green mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-1">
                                            <span class="font-medium text-polban-green">Klik untuk upload</span> Bab 2
                                        </p>
                                        <p class="text-xs text-gray-500">Format PDF (maks. 10MB)</p>
                                    </div>
                                </div>
                                <div id="bab2FileName" class="text-sm text-gray-600 mt-2 hidden">
                                    <i class="fas fa-file-pdf text-red-500 mr-1"></i>
                                    <span id="bab2DisplayName"></span>
                                    <button type="button" id="removeBab2" class="text-red-500 ml-2">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Bab 3 -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Bab 3 (PDF)</label>
                                <div class="file-upload relative border-2 border-dashed rounded-lg p-6 text-center cursor-pointer hover:border-polban-green transition-colors"
                                    id="bab3UploadArea">
                                    <input type="file" id="bab3" name="bab3" accept=".pdf" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-file-pdf text-3xl text-polban-green mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-1">
                                            <span class="font-medium text-polban-green">Klik untuk upload</span> Bab 3
                                        </p>
                                        <p class="text-xs text-gray-500">Format PDF (maks. 10MB)</p>
                                    </div>
                                </div>
                                <div id="bab3FileName" class="text-sm text-gray-600 mt-2 hidden">
                                    <i class="fas fa-file-pdf text-red-500 mr-1"></i>
                                    <span id="bab3DisplayName"></span>
                                    <button type="button" id="removeBab3" class="text-red-500 ml-2">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Bab 4 -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Bab 4 (PDF)</label>
                                <div class="file-upload relative border-2 border-dashed rounded-lg p-6 text-center cursor-pointer hover:border-polban-green transition-colors"
                                    id="bab4UploadArea">
                                    <input type="file" id="bab4" name="bab4" accept=".pdf" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-file-pdf text-3xl text-polban-green mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-1">
                                            <span class="font-medium text-polban-green">Klik untuk upload</span> Bab 4
                                        </p>
                                        <p class="text-xs text-gray-500">Format PDF (maks. 10MB)</p>
                                    </div>
                                </div>
                                <div id="bab4FileName" class="text-sm text-gray-600 mt-2 hidden">
                                    <i class="fas fa-file-pdf text-red-500 mr-1"></i>
                                    <span id="bab4DisplayName"></span>
                                    <button type="button" id="removeBab4" class="text-red-500 ml-2">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Bab 5 -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Bab 5 (PDF)</label>
                                <div class="file-upload relative border-2 border-dashed rounded-lg p-6 text-center cursor-pointer hover:border-polban-green transition-colors"
                                    id="bab5UploadArea">
                                    <input type="file" id="bab5" name="bab5" accept=".pdf" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-file-pdf text-3xl text-polban-green mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-1">
                                            <span class="font-medium text-polban-green">Klik untuk upload</span> Bab 5
                                        </p>
                                        <p class="text-xs text-gray-500">Format PDF (maks. 10MB)</p>
                                    </div>
                                </div>
                                <div id="bab5FileName" class="text-sm text-gray-600 mt-2 hidden">
                                    <i class="fas fa-file-pdf text-red-500 mr-1"></i>
                                    <span id="bab5DisplayName"></span>
                                    <button type="button" id="removeBab5" class="text-red-500 ml-2">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Bab 6 -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Bab 6 (PDF)</label>
                                <div class="file-upload relative border-2 border-dashed rounded-lg p-6 text-center cursor-pointer hover:border-polban-green transition-colors"
                                    id="bab6UploadArea">
                                    <input type="file" id="bab6" name="bab6" accept=".pdf" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-file-pdf text-3xl text-polban-green mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-1">
                                            <span class="font-medium text-polban-green">Klik untuk upload</span> Bab 6
                                        </p>
                                        <p class="text-xs text-gray-500">Format PDF (maks. 10MB)</p>
                                    </div>
                                </div>
                                <div id="bab6FileName" class="text-sm text-gray-600 mt-2 hidden">
                                    <i class="fas fa-file-pdf text-red-500 mr-1"></i>
                                    <span id="bab6DisplayName"></span>
                                    <button type="button" id="removeBab6" class="text-red-500 ml-2">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Lampiran -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Lampiran (PDF)</label>
                                <div class="file-upload relative border-2 border-dashed rounded-lg p-6 text-center cursor-pointer hover:border-polban-green transition-colors"
                                    id="lampiranUploadArea">
                                    <input type="file" id="lampiran" name="lampiran" accept=".pdf" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-file-pdf text-3xl text-polban-green mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-1">
                                            <span class="font-medium text-polban-green">Klik untuk upload</span> Lampiran
                                        </p>
                                        <p class="text-xs text-gray-500">Format PDF (maks. 10MB)</p>
                                    </div>
                                </div>
                                <div id="lampiranFileName" class="text-sm text-gray-600 mt-2 hidden">
                                    <i class="fas fa-file-pdf text-red-500 mr-1"></i>
                                    <span id="lampiranDisplayName"></span>
                                    <button type="button" id="removeLampiran" class="text-red-500 ml-2">
                                        <i class="fas fa-times"></i>
                                    </button>
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
                            <i class="fas fa-save mr-1"></i> Simpan Tugas Akhir
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Submission Guidelines -->
            <div class="bg-white rounded-xl shadow-md p-6" data-aos="fade-up">
                <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-info-circle text-polban-green mr-2"></i>
                    Panduan Upload Tugas Akhir
                </h3>
                
                <div class="prose prose-sm max-w-none text-gray-600">
                    <ol class="list-decimal pl-5 space-y-2">
                        <li>Pastikan dokumen yang diupload dalam format PDF dan tidak melebihi 10MB per file.</li>
                        <li>Bab 1 wajib diunggah, sedangkan bab lainnya dan lampiran bersifat opsional.</li>
                        <li>Judul tugas akhir harus sesuai dengan judul yang telah disetujui oleh pembimbing.</li>
                        <li>Format file harus sesuai dengan template yang telah ditentukan oleh POLBAN.</li>
                        <li>Pastikan semua informasi yang dimasukkan akurat dan valid.</li>
                        <li>Anda akan menerima notifikasi via email setelah tugas akhir berhasil diproses.</li>
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
            // Function to handle file upload display
            function setupFileUpload(inputId, uploadAreaId, fileNameId, displayNameId, removeBtnId) {
                const fileInput = document.getElementById(inputId);
                const uploadArea = document.getElementById(uploadAreaId);
                const fileNameDisplay = document.getElementById(fileNameId);
                const fileDisplayName = document.getElementById(displayNameId);
                const removeFileBtn = document.getElementById(removeBtnId);
                
                if (fileInput && uploadArea && fileNameDisplay && fileDisplayName && removeFileBtn) {
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
                            uploadArea.classList.add('active');
                        }
                    });
                    
                    removeFileBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        fileInput.value = '';
                        fileNameDisplay.classList.add('hidden');
                        uploadArea.classList.remove('active');
                    });
                    
                    // Drag and drop functionality
                    uploadArea.addEventListener('dragover', function(e) {
                        e.preventDefault();
                        this.classList.add('active');
                    });
                    
                    uploadArea.addEventListener('dragleave', function(e) {
                        e.preventDefault();
                        this.classList.remove('active');
                    });
                    
                    uploadArea.addEventListener('drop', function(e) {
                        e.preventDefault();
                        this.classList.remove('active');
                        
                        if (e.dataTransfer.files.length > 0) {
                            fileInput.files = e.dataTransfer.files;
                            const event = new Event('change');
                            fileInput.dispatchEvent(event);
                        }
                    });
                }
            }
            
            // Setup all file upload areas
            setupFileUpload('bab1', 'bab1UploadArea', 'bab1FileName', 'bab1DisplayName', 'removeBab1');
            setupFileUpload('bab2', 'bab2UploadArea', 'bab2FileName', 'bab2DisplayName', 'removeBab2');
            setupFileUpload('bab3', 'bab3UploadArea', 'bab3FileName', 'bab3DisplayName', 'removeBab3');
            setupFileUpload('bab4', 'bab4UploadArea', 'bab4FileName', 'bab4DisplayName', 'removeBab4');
            setupFileUpload('bab5', 'bab5UploadArea', 'bab5FileName', 'bab5DisplayName', 'removeBab5');
            setupFileUpload('bab6', 'bab6UploadArea', 'bab6FileName', 'bab6DisplayName', 'removeBab6');
            setupFileUpload('lampiran', 'lampiranUploadArea', 'lampiranFileName', 'lampiranDisplayName', 'removeLampiran');
        });
    </script>
</body>
</html>
