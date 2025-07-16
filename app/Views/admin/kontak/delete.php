<!-- app/Views/admin/kontak/delete.php -->

<h2>Konfirmasi Hapus Pesan</h2>

<p><strong>Nama:</strong> <?= esc($kontak['nama']) ?></p>
<p><strong>Isi Pesan:</strong> <?= esc($kontak['komen']) ?></p>
<p>Yakin ingin menghapus pesan ini?</p>

<form action="<?= base_url('admin/kontak/delete/' . $kontak['id_contact']) ?>" method="post">
    <?= csrf_field() ?>
    <button type="submit">Ya, Hapus</button>
    <a href="<?= base_url('admin/kontak') ?>">Batal</a>
</form>