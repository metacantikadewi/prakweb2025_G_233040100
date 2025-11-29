<?php include 'header.php'; ?>
<h2>Detail Pengguna</h2>
<p><strong>Nama:</strong> <?= htmlspecialchars($user['name']); ?></p>
<p><strong>Email:</strong> <?= htmlspecialchars($user['email']); ?></p>
<a href="index.php">Kembali</a>