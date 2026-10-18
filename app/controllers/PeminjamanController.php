<?php

class PeminjamanController
{
    public function index()
    {
        $title = "Peminjaman - PerpusFurab";

        ob_start();
        require __DIR__ . '/../../views/pages/peminjaman.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layouts/main.php';
    }
}