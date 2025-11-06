<?php include 'header.php'; ?>
<h2>Tambah Pengguna</h2>
<form action="index.php?action=add" method="POST">
    Nama: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <button type="submit">Simpan</button>
</form>
<a href="index.php">Kembali</a>