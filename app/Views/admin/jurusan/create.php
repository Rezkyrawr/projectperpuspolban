<h1>Tambah Jurusan</h1>

<form action="<?= base_url('admin/jurusan/store') ?>" method="post">
    <label>Nama Jurusan</label><br>
    <input type="text" name="nama_jurusan" required><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="<?= base_url('admin/jurusan') ?>">Kembali ke Daftar Jurusan</a>
