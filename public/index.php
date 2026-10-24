<?php
session_start();

require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/BukuController.php';
require_once __DIR__ . '/../app/controllers/PeminjamanController.php';
require_once __DIR__ . '/../app/controllers/ProfilController.php';
require_once __DIR__ . '/../app/controllers/LoginController.php';
require_once __DIR__ . '/../app/controllers/TambahBukuController.php';
require_once __DIR__ . '/../app/controllers/UserController.php';
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        (new HomeController())->index();
        break;

    case 'buku':
        (new BukuController())->index();
        break;

        case 'tambah_buku':
    (new TambahBukuController())->index();
    break;

    case 'peminjaman':
        echo 'Halaman peminjaman sedang diperbaiki.';
        break;

    case 'profil':
        (new ProfilController())->index();
        break;

    case 'login':
        (new LoginController())->index();
        break;

        case 'user':
    (new UserController())->index();
    break;

    default:
        http_response_code(404);
        echo '404 - Halaman tidak ditemukan';
        break;
}