<?php include 'header.php'; ?>
<h2>Tambah Pengguna Baru</h2>
<form action="index.php?action=add" method="POST">
    <label>Nama:</label><br>
    <input type="text" name="name" required><br><br>
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>
    <button type="submit">Simpan</button>
</form>
<a href="index.php">Kembali</a>