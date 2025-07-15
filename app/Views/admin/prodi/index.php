<h1>Data Prodi</h1>
<a href="<?= base_url('admin/prodi/create') ?>">Tambah Prodi</a>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Prodi</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($prodi as $p) : ?>
            <tr>
                <td><?= $p['id_prodi'] ?></td>
                <td><?= $p['nama_prodi'] ?></td>
                <td><?= $p['nama_jurusan'] ?></td>
                <td>
                    <a href="<?= base_url('admin/prodi/edit/' . $p['id_prodi']) ?>">Edit</a> |
                    <a href="<?= base_url('admin/prodi/delete/' . $p['id_prodi']) ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
