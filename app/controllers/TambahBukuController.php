<?php

require_once __DIR__ . '/../../koneksi.php';

class TambahBukuController
{
    public function index()
    {
        global $conn;

        $title = "Tambah Buku - PerpusFurab";
        $pesan = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $judul = trim($_POST['judul'] ?? '');
            $penulis = trim($_POST['penulis'] ?? '');
            $penerbit = trim($_POST['penerbit'] ?? '');
            $tahun_terbit = $_POST['tahun_terbit'] ?? '';
            $stok = $_POST['stok'] ?? '';

            if (
                $judul === '' ||
                $penulis === '' ||
                $tahun_terbit === '' ||
                $stok === '' ||
                !ctype_digit((string) $tahun_terbit) ||
                !ctype_digit((string) $stok) ||
                (int) $tahun_terbit < 1901 ||
                (int) $tahun_terbit > 2155
            ) {
                $pesan = "Periksa kembali data yang kamu masukkan.";
            } else {
                $stmt = mysqli_prepare(
                    $conn,
                    "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, stok)
                     VALUES (?, ?, ?, ?, ?)"
                );

                mysqli_stmt_bind_param(
                    $stmt,
                    "sssii",
                    $judul,
                    $penulis,
                    $penerbit,
                    $tahun_terbit,
                    $stok
                );

                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_close($stmt);
                    header("Location: /?page=buku");
                    exit;
                }

                $pesan = "Buku gagal disimpan. Silakan coba lagi.";
                mysqli_stmt_close($stmt);
            }
        }

        ob_start();
        require __DIR__ . '/../../views/pages/tambah_buku.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layouts/main.php';
    }
}