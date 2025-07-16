<!-- app/Views/admin/komen/delete.php -->

<h2>Hapus Komentar</h2>

<p><strong>Nama:</strong> <?= esc($komen['nama']) ?></p>
<p><strong>Komentar:</strong> <?= esc($komen['komen']) ?></p>

<p>Yakin ingin menghapus komentar ini?</p>

<form action="<?= base_url('admin/komen/delete/' . $komen['id_contact']) ?>" method="post">
    <?= csrf_field() ?>
    <button type="submit">Ya, Hapus</button>
    <a href="<?= base_url('admin/komen') ?>">Batal</a>
</form>
