 <header class="sticky top-0 z-50">
        <!-- Top Bar -->
        <div class="bg-gray-900 text-white text-xs md:text-sm">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center py-2 space-y-1 md:space-y-0">
                    <div class="flex items-center space-x-1 md:space-x-3">
                        <span><i class="fas fa-phone-alt mr-1"></i> (022) 1234567</span>
                        <span><i class="fas fa-envelope mr-1"></i> perpusdigital@polban.ac.id</span>
                    </div>
                   <!-- 1️⃣ Tambahkan Alpine.js di header -->
<script src="//unpkg.com/alpinejs" defer></script>

<!-- 2️⃣ Bagian User Icon -->
<div class="relative" x-data="{ open: false }">
  <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
    <!-- Circle dengan Inisial -->
    <div class="w-8 h-8 rounded-full bg-green-600 flex items-center justify-center text-white text-sm font-bold">
      <?= $inisial ?>
    </div>
    <i class="fas fa-chevron-down text-xs"></i>
  </button>
  <!-- Dropdown -->
  <div
    x-show="open"
    @click.away="open = false"
    class="absolute right-0 mt-2 w-40 bg-white rounded shadow-lg py-2 z-50"
  >
    <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil</a>
    <a href="/logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
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
                        <a href="<?= base_url('articles/create') ?>" class="px-4 py-2 text-gray-800 font-medium nav-link">Upload</a>
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <button class="lg:hidden text-gray-800 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </nav>
            </div>
        </div>
    </header>