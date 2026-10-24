<?php
require_once __DIR__ . '/../../koneksi.php';

class PeminjamanController {
    public function daftarPeminjaman($id_user) {
        global $koneksi;
        $query = "SELECT p.id, b.judul, p.tanggal_pinjam, p.tanggal_kembali
                  FROM peminjaman p
                  JOIN buku b ON p.id_buku = b.id
                  WHERE p.id_user='$id_user'";
        return mysqli_query($koneksi, $query);
    }
}