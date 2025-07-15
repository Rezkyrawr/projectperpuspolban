<h1>Edit Jurusan</h1>

<form action="<?= base_url('admin/jurusan/update/' . $jurusan['id_jurusan']) ?>" method="post">
    <label>Nama Jurusan</label><br>
    <input type="text" name="nama_jurusan" value="<?= $jurusan['nama_jurusan'] ?>" required><br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="<?= base_url('admin/jurusan') ?>">Kembali ke Daftar Jurusan</a>
