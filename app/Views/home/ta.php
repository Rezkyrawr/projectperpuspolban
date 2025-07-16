<div class="container mt-4">
    <h2>Tambah Tugas Akhir</h2>
    <form action="<?= base_url('/articles/store') ?>" method="post">

        <div class="mb-3">
            <label for="id_mahasiswa" class="form-label">ID Mahasiswa</label>
            <input type="number" class="form-control" name="id_mahasiswa" required>
        </div>

        <div class="mb-3">
            <label for="id_dosen" class="form-label">Pilih Pembimbing (Opsional)</label>
            <input type="number" class="form-control" name="id_dosen" placeholder="ID Dosen">
            <small class="text-muted">Kosongkan jika menggunakan nama pembimbing manual</small>
        </div>

        <div class="mb-3">
            <label for="nama_pembimbing_manual" class="form-label">Nama Pembimbing Manual (Opsional)</label>
            <input type="text" class="form-control" name="nama_pembimbing_manual" placeholder="Nama Pembimbing">
        </div>

        <div class="mb-3">
            <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
            <input type="number" class="form-control" name="tahun_lulus" required>
        </div>

        <div class="mb-3">
            <label for="id_jurusan" class="form-label">ID Jurusan</label>
            <input type="number" class="form-control" name="id_jurusan" required>
        </div>

        <div class="mb-3">
            <label for="id_prodi" class="form-label">ID Prodi</label>
            <input type="number" class="form-control" name="id_prodi" required>
        </div>

        <div class="mb-3">
            <label for="id_category" class="form-label">ID Kategori</label>
            <input type="number" class="form-control" name="id_category" required>
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" required>
        </div>

        <div class="mb-3">
            <label for="kelengkapan_ta" class="form-label">Kelengkapan TA</label>
            <textarea class="form-control" name="kelengkapan_ta" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">BAB 1</label>
            <input type="text" class="form-control" name="bab1" required>
        </div>

        <div class="mb-3">
            <label class="form-label">BAB 2</label>
            <input type="text" class="form-control" name="bab2" required>
        </div>

        <div class="mb-3">
            <label class="form-label">BAB 3</label>
            <input type="text" class="form-control" name="bab3" required>
        </div>

        <div class="mb-3">
            <label class="form-label">BAB 4</label>
            <input type="text" class="form-control" name="bab4" required>
        </div>

        <div class="mb-3">
            <label class="form-label">BAB 5</label>
            <input type="text" class="form-control" name="bab5" required>
        </div>

        <div class="mb-3">
            <label class="form-label">BAB 6</label>
            <input type="text" class="form-control" name="bab6" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Lampiran</label>
            <input type="text" class="form-control" name="lampiran" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Upload</label>
            <input type="date" class="form-control" name="tgl_uploads" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('/articles') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>