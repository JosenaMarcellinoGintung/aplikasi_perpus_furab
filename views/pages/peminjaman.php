<?php
session_start();
$id_user = $_SESSION['id_user'] ?? 1; // sementara pakai 1
include("../../app/controllers/PeminjamanController.php");

$controller = new PeminjamanController();

// Proses pinjam
if (isset($_POST['pinjam'])) {
    $controller->pinjam($_POST['id_buku'], $id_user);
    echo "<p style='color:green'>Buku berhasil dipinjam!</p>";
}

// Proses pengembalian
if (isset($_POST['kembali'])) {
    $controller->kembalikan($_POST['id_peminjaman']);
    echo "<p style='color:blue'>Buku berhasil dikembalikan!</p>";
}

// Ambil daftar peminjaman user
$result = $controller->daftarPeminjaman($id_user);
?>

<h2>Peminjaman Buku</h2>
<form method="POST">
    ID Buku: <input type="number" name="id_buku" required>
    <button type="submit" name="pinjam">Pinjam</button>
</form>

<h2>Pengembalian Buku</h2>
<form method="POST">
    ID Peminjaman: <input type="number" name="id_peminjaman" required>
    <button type="submit" name="kembali">Kembalikan</button>
</form>

<h2>Daftar Peminjaman Saya</h2>
<table border="1" cellpadding="5">
    <tr style="background:#eee">
        <th>ID</th><th>Judul Buku</th><th>Tanggal Pinjam</th><th>Tanggal Kembali</th><th>Status</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['judul'] ?></td>
        <td><?= $row['tanggal_pinjam'] ?></td>
        <td><?= $row['tanggal_kembali'] ?? '-' ?></td>
        <td><?= $row['status'] ?></td>
    </tr>
    <?php } ?>
</table>

