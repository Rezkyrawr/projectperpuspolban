<!-- app/Views/article/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Artikel Tugas Akhir</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <h1>Daftar Artikel Tugas Akhir</h1>

    <a href="<?= base_url('/articles/create') ?>">+ Tambah Artikel Baru</a>

    <?php if (!empty($articles)) : ?>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Mahasiswa</th>
                    <th>Pembimbing</th>
                    <th>Kategori</th>
                    <th>Tahun Lulus</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $key => $article) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= esc($article['judul']) ?></td>
                        <td><?= esc($article['nama_mahasiswa'] ?? '-') ?></td>
                        <td>
                            <?php
                                $pembimbing = $article['nama_pembimbing_manual']
                                    ?? $article['nama_dosen']
                                    ?? '-';
                            ?>
                            <?= esc($pembimbing) ?>
                        </td>
                        <td><?= esc($article['kategory'] ?? '-') ?></td>
                        <td><?= esc($article['tahun_lulus']) ?></td>
                        <td>
                            <a href="<?= base_url('/articles/edit/' . $article['id_article']) ?>">Edit</a> |
                            <a href="<?= base_url('/articles/delete/' . $article['id_article']) ?>"
                               onclick="return confirm('Yakin hapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Belum ada data artikel.</p>
    <?php endif; ?>

</body>
</html>
