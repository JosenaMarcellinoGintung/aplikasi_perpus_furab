<?php

class HomeController
{
    public function index()
    {
        $title = "Beranda - PerpusFurab";

        ob_start();
        require __DIR__ . '/../../views/pages/home.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layouts/main.php';
    }
}