<?php if (session()->getFlashdata('success')) : ?>
    <div style="color: green;">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif ?>

<?php if (session()->getFlashdata('error')) : ?>
    <div style="color: red;">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif ?>

<?php if (session()->getFlashdata('errors')) : ?>
    <ul style="color: red;">
        <?php foreach (session()->getFlashdata('errors') as $err) : ?>
            <li><?= esc($err) ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<h3>🗂️ Lengkapi Berkas Tugas Akhir</h3>
<p>Mohon lengkapi berkas minimal <strong>Bab 1</strong>. Bab 2-6 dan Lampiran opsional, tapi disarankan diunggah jika sudah tersedia.</p>

<form action="<?= base_url('articles/store') ?>" method="post" enctype="multipart/form-data">

    <label>Nama Mahasiswa atau Dosen</label><br>
    <input type="text" name="nama_user" placeholder="Nama Mahasiswa atau Dosen" required><br>

    <label>Nama Pembimbing Manual</label><br>
    <input type="text" name="nama_pembimbing_manual"><br>

    <label>Tahun Lulus</label><br>
    <input type="number" name="tahun_lulus" required><br>

    <!-- Jurusan -->
    <label>Jurusan</label><br>
    <select name="id_jurusan" required>
        <option value="">-- Pilih Jurusan --</option>
        <?php foreach ($jurusans as $j) : ?>
            <option value="<?= $j['id_jurusan'] ?>"><?= esc($j['nama_jurusan']) ?></option>
        <?php endforeach ?>
    </select><br>

    <!-- Prodi -->
    <label>Prodi</label><br>
    <select name="id_prodi" required>
        <option value="">-- Pilih Prodi --</option>
        <?php foreach ($prodis as $p) : ?>
            <option value="<?= $p['id_prodi'] ?>"><?= esc($p['nama_prodi']) ?></option>
        <?php endforeach ?>
    </select><br>

    <!-- Kategori -->
    <label>Kategori</label><br>
    <select name="id_kategory" required>
        <option value="">-- Pilih Kategori --</option>
        <?php foreach ($kategories as $k) : ?>
            <option value="<?= $k['id_kategory'] ?>"><?= esc($k['kategory']) ?></option>
        <?php endforeach ?>
    </select><br>

    <label>Judul</label><br>
    <input type="text" name="judul" required><br><br>

    <!-- Upload Bab 1-6 & Lampiran -->
    <label>Bab 1 (PDF)</label><br>
    <input type="file" name="bab1" accept="application/pdf" required><br>

    <label>Bab 2 (PDF)</label><br>
    <input type="file" name="bab2" accept="application/pdf"><br>

    <label>Bab 3 (PDF)</label><br>
    <input type="file" name="bab3" accept="application/pdf"><br>

    <label>Bab 4 (PDF)</label><br>
    <input type="file" name="bab4" accept="application/pdf"><br>

    <label>Bab 5 (PDF)</label><br>
    <input type="file" name="bab5" accept="application/pdf"><br>

    <label>Bab 6 (PDF)</label><br>
    <input type="file" name="bab6" accept="application/pdf"><br>

    <label>Lampiran (PDF)</label><br>
    <input type="file" name="lampiran" accept="application/pdf"><br><br>

    <button type="submit">💾 Simpan Tugas Akhir</button>
</form>
