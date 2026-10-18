<?php

class BukuController
{
    public function index()
    {
        $title = "Daftar Buku - PerpusFurab";

        ob_start();
        require __DIR__ . '/../../views/pages/buku.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layouts/main.php';
    }
}