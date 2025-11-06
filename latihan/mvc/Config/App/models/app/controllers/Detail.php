<?php include 'header.php'; ?>
<h2>Detail Pengguna</h2>
<p><b>Nama:</b> <?= htmlspecialchars($user['name']); ?></p>
<p><b>Email:</b> <?= htmlspecialchars($user['email']); ?></p>
<a href="index.php">Kembali</a>