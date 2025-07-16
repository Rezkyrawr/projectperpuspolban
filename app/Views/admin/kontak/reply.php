<!-- app/Views/admin/kontak/balas.php -->

<h2>Balas Pesan</h2>

<form action="<?= base_url('admin/kontak/update/' . $pesan['id_kontak']) ?>" method="post">
    <?= csrf_field() ?>
    <p><strong>Pesan:</strong> <?= esc($pesan['pesan']) ?></p>
    <label for="balasan">Balasan:</label><br>
    <textarea name="balasan" rows="4" required><?= esc($pesan['balasan']) ?></textarea><br><br>
    <button type="submit">Kirim Balasan</button>
</form>