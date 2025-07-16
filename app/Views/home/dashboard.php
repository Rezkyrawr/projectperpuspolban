
    <?= $this->include('home/component/css.php') ?>
<body class="bg-gray-50">
    <!-- Header -->
    <?= $this->include('home/component/header.php') ?>

    <!-- Hero Section -->
    <section class="relative">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="<?= base_url('images/polban2.jpg') ?>" alt="Perpustakaan Digital POLBAN">
                    <div class="overlay">
                        <div data-aos="fade-right" data-aos-duration="800">
                            <span class="bg-polban-green text-white text-sm px-3 py-1 rounded-full inline-block mb-3">Artikel Terbaru</span>
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-shadow max-w-2xl">Jelajahi Koleksi Digital Politeknik Negeri Bandung</h2>
                            <p class="text-lg md:text-xl mb-6 text-shadow max-w-2xl">Akses ribuan jurnal, skripsi, modul pembelajaran, dan karya ilmiah lainnya secara digital.</p>
                            <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                                <a href="#" class="bg-polban-green hover:bg-polban-dark-green text-white font-semibold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg flex items-center justify-center">
                                    <i class="fas fa-search mr-2"></i> Cari Koleksi
                                </a>
                                <a href="#" class="bg-white hover:bg-gray-100 text-polban-dark-green font-semibold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg flex items-center justify-center">
                                    <i class="fas fa-book-reader mr-2"></i> Panduan Pengguna
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="<?= base_url('images/polban3.jpg') ?>" alt="Penelitian POLBAN">
                    <div class="overlay">
                        <div data-aos="fade-right" data-aos-duration="800">
                            <span class="bg-polban-blue text-white text-sm px-3 py-1 rounded-full inline-block mb-3">Penelitian</span>
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-shadow max-w-2xl">Hasil Penelitian Dosen & Mahasiswa POLBAN</h2>
                            <p class="text-lg md:text-xl mb-6 text-shadow max-w-2xl">Temukan berbagai penelitian inovatif dari civitas akademika Politeknik Negeri Bandung.</p>
                            <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                                <a href="#" class="bg-polban-green hover:bg-polban-dark-green text-white font-semibold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg flex items-center justify-center">
                                    <i class="fas fa-flask mr-2"></i> Telusuri Penelitian
                                </a>
                                <a href="#" class="bg-white hover:bg-gray-100 text-polban-dark-green font-semibold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg flex items-center justify-center">
                                    <i class="fas fa-upload mr-2"></i> Unggah Karya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="https://plus.unsplash.com/premium_photo-1677567996070-68fa4181775a?q=80&w=1172&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="E-Learning POLBAN">
                    <div class="overlay">
                        <div data-aos="fade-right" data-aos-duration="800">
                            <span class="bg-purple-600 text-white text-sm px-3 py-1 rounded-full inline-block mb-3">Pembelajaran</span>
                            <h2 class="text-3xl md:text-5xl font-bold mb-4 text-shadow max-w-2xl">Sumber Belajar Digital untuk Mahasiswa</h2>
                            <p class="text-lg md:text-xl mb-6 text-shadow max-w-2xl">Akses modul pembelajaran, bahan ajar, dan materi perkuliahan dari seluruh program studi.</p>
                            <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                                <a href="#" class="bg-polban-green hover:bg-polban-dark-green text-white font-semibold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg flex items-center justify-center">
                                    <i class="fas fa-graduation-cap mr-2"></i> Materi Kuliah
                                </a>
                                <a href="#" class="bg-white hover:bg-gray-100 text-polban-dark-green font-semibold py-3 px-6 rounded-full transition-colors duration-300 shadow-lg flex items-center justify-center">
                                    <i class="fas fa-chalkboard-teacher mr-2"></i> Panduan Dosen
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Main Content -->
   <?= $this->include('home/component/main.php') ?>

    <!-- Floating Action Button -->
    <a href="/faq"><div class="fixed bottom-8 right-8 z-40">
        <div class="floating-btn bg-polban-green hover:bg-polban-dark-green text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg cursor-pointer transition-colors duration-200">
            <i class="fas fa-question text-xl"></i>
        </div>
    </div></a>

    <!-- Footer -->
    <?= $this->include('home/component/footer.php') ?>

    <!-- Scripts -->
 <?= $this->include('home/component/js.php') ?>