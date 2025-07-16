<!DOCTYPE html>
<html>
<head>
    <title>Kategori Artikel Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Kategori Artikel Mahasiswa</h2>

    <!-- Form Tambah Kategori -->
    <form action="<?= base_url('kategory/save') ?>" method="post" class="row g-3 mt-4">
        <div class="col-auto">
            <input type="text" name="kategory" class="form-control" placeholder="Nama Kategori Baru" required>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>

    <!-- List Kategori -->
    <ul class="list-group mt-4">
        <?php foreach ($kategories as $kat): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><?= esc($kat['kategory']) ?></span>
                <div>
                    <a href="<?= base_url('kategory/edit/'.$kat['id_kategory']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= base_url('kategory/delete/'.$kat['id_kategory']) ?>" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus kategori ini?')">Hapus</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
