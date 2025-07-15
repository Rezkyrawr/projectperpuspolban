<h1>Data Category</h1>
<a href="<?= base_url('admin/category/create') ?>">Tambah Category</a>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($category as $c) : ?>
            <tr>
                <td><?= $c['id_category'] ?></td>
                <td><?= $c['nama_category'] ?></td>
                <td>
                    <a href="<?= base_url('admin/category/edit/' . $c['id_category']) ?>">Edit</a> |
                    <a href="<?= base_url('admin/category/delete/' . $c['id_category']) ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
