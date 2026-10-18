<?php
session_start();

require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/BukuController.php';
require_once __DIR__ . '/../app/controllers/PeminjamanController.php';
require_once __DIR__ . '/../app/controllers/ProfilController.php';
require_once __DIR__ . '/../app/controllers/LoginController.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        include __DIR__ . '/../views/pages/home.php';
        break;
    case 'buku':
        include __DIR__ . '/../views/pages/buku.php';
        break;
    case 'peminjaman':
        include __DIR__ . '/../views/pages/peminjaman.php';
        break;
    case 'profil':
        include __DIR__ . '/../views/pages/profil.php';
        break;
    case 'login':
        include __DIR__ . '/../views/pages/login.php';
        break;
    default:
        echo "404 - Halaman tidak ditemukan";
        break;
}
