<?php

class LoginController
{
    public function index()
    {
        $title = "Login - PerpusFurab";

        ob_start();
        require __DIR__ . '/../../views/pages/login.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layouts/main.php';
    }
}