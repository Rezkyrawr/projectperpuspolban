<!-- app/Views/user/kontak/create.php -->

<h2>Kirim Keluhan</h2>

<?php if (session()->getFlashdata('success')): ?>
    <div style="color: green;"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<form action="<?= base_url('user/kontak/store') ?>" method="post">
    <?= csrf_field() ?>
    <textarea name="pesan" rows="5" required></textarea><br><br>
    <button type="submit">Kirim</button>
</form>