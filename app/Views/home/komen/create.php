<!-- app/Views/user/komen/create.php -->

<h2>Tulis Komentar</h2>

<?php if (session()->getFlashdata('success')): ?>
    <div style="color: green;"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<form action="<?= base_url('user/komen/store') ?>" method="post">
    <?= csrf_field() ?>

    <label for="nama">Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label for="komen">Komentar:</label><br>
    <textarea name="komen" rows="4" required></textarea><br><br>

    <input type="hidden" name="id_user" value="<?= session()->get('id_user') ?>">

    <button type="submit">Kirim</button>
</form>