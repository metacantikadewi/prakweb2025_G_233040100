<?php include 'header.php'; ?>
<h2>Daftar Pengguna</h2>
<a href="index.php?action=addForm">+ Tambah Pengguna</a>
<br><br>
<table>
    <tr><th>ID</th><th>Nama</th><th>Email</th><th>Aksi</th></tr>
    <?php foreach ($users as $u): ?>
    <tr>
        <td><?= $u['id'] ?></td>
        <td><?= htmlspecialchars($u['name']) ?></td>
        <td><?= htmlspecialchars($u['email']) ?></td>
        <td>
            <a href="index.php?action=detail&id=<?= $u['id'] ?>">Detail</a> |
            <a href="index.php?action=editForm&id=<?= $u['id'] ?>">Edit</a> |
            <a href="index.php?action=delete&id=<?= $u['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>