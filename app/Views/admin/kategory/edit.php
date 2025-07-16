<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Edit Kategori</h2>

    <form action="<?= base_url('kategory/update/'.$kategory['id_kategory']) ?>" method="post">
        <div class="mb-3">
            <label for="kategory" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" name="kategory" value="<?= esc($kategory['kategory']) ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="<?= base_url('kategory') ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
