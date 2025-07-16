    <!-- app/Views/admin/komen/index.php -->

    <h2>Daftar Komentar</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div style="color: green;"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Komentar</th>
                <th>ID User</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($komentar)): ?>
                <?php $no = 1;
                foreach ($komentar as $komen): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($komen['nama']) ?></td>
                        <td><?= esc($komen['komen']) ?></td>
                        <td><?= esc($komen['id_user']) ?></td>
                        <td>
                            <a href="<?= base_url('admin/komen/delete/' . $komen['id_comment']) ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Tidak ada komentar</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>