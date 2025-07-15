<!-- app/Views/admin/jurusan/index.php -->

<h1>Data Jurusan</h1>
<a href="<?= base_url('admin/jurusan/create') ?>">Tambah Jurusan</a>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Jurusan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jurusan as $j) : ?>
            <tr>
                <td><?= $j['id_jurusan'] ?></td>
                <td><?= $j['nama_jurusan'] ?></td>
                <td>
                    <a href="<?= base_url('admin/jurusan/edit/' . $j['id_jurusan']) ?>">Edit</a> |
                    <a href="<?= base_url('admin/jurusan/delete/' . $j['id_jurusan']) ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
