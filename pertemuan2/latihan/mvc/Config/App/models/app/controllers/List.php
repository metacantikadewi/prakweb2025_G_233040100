<?php include 'header.php'; ?>
<h2>Daftar Pengguna</h2>
<a href="index.php?action=addForm">+ Tambah Pengguna</a>
<table border="1" cellpadding="8">
    <tr><th>ID</th><th>Nama</th><th>Email</th><th>Aksi</th></tr>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= htmlspecialchars($user['name']); ?></td>
            <td><?= htmlspecialchars($user['email']); ?></td>
            <td>
                <a href="index.php?action=detail&id=<?= $user['id']; ?>">Detail</a> |
                <a href="index.php?action=editForm&id=<?= $user['id']; ?>">Edit</a> |
                <a href="index.php?action=delete&id=<?= $user['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>