<h1>Tambah Category</h1>

<form action="<?= base_url('admin/category/store') ?>" method="post">
    <label>Nama Category</label><br>
    <input type="text" name="nama_category" required><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="<?= base_url('admin/category') ?>">Kembali ke Daftar Category</a>
