<?php

class ProfilController
{
    public function index()
    {
        $title = "Profil - PerpusFurab";

        ob_start();
        require __DIR__ . '/../../views/pages/profil.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layouts/main.php';
    }
}