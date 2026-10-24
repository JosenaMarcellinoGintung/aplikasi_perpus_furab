<?php

require_once __DIR__ . '/../../koneksi.php';

class BukuController
{
    public function index()
    {
        global $conn;

        $title = "Daftar Buku - PerpusFurab";

        $query = mysqli_query($conn, "SELECT * FROM buku");
        $buku = mysqli_fetch_all($query, MYSQLI_ASSOC);

        ob_start();
        require __DIR__ . '/../../views/pages/buku.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layouts/main.php';
    }
}