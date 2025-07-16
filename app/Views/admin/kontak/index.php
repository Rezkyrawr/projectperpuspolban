<!-- app/Views/admin/kontak/index.php -->

<h2>Keluhan User</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Nama</th>
        <th>Pesan</th>
        <th>Balasan</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($kontak as $k): ?>
        <tr>
            <td><?= esc($k['nama']) ?></td>
            <td><?= esc($k['pesan']) ?></td>
            <td><?= esc($k['balasan']) ?: '-' ?></td>
            <td><a href="<?= base_url('admin/kontak/balas/' . $k['id_kontak']) ?>">Balas</a></td>
        </tr>
    <?php endforeach ?>
</table>