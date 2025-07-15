<h1>Tambah Prodi</h1>

<form action="<?= base_url('admin/prodi/store') ?>" method="post">
    <label>Nama Prodi</label><br>
    <input type="text" name="nama_prodi" required><br><br>

    <label>Pilih Jurusan</label><br>
    <select name="id_jurusan" required>
        <?php foreach ($jurusan as $j) : ?>
            <option value="<?= $j['id_jurusan'] ?>"><?= $j['nama_jurusan'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="<?= base_url('admin/prodi') ?>">Kembali ke Daftar Prodi</a>
