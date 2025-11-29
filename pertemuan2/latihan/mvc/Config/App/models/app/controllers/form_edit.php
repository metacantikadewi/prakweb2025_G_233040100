<?php include 'header.php'; ?>
<h2>Edit Pengguna</h2>
<form action="index.php?action=update" method="POST">
    <input type="hidden" name="id" value="<?= $user['id']; ?>">
    Nama: <input type="text" name="name" value="<?= htmlspecialchars($user['name']); ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= htmlspecialchars($user['email']); ?>" required><br><br>
    <button type="submit">Update</button>
</form>
<a href="index.php">Kembali</a>