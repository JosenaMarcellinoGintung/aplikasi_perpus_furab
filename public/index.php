<?php

session_start();

require_once __DIR__ . '/../app/controllers/Homecontroller.php';
require_once __DIR__ . '/../app/controllers/BukuController.php';
require_once __DIR__ . '/../app/controllers/PeminjamanController.php';
require_once __DIR__ . '/../app/controllers/ProfilController.php';
require_once __DIR__ . '/../app/controllers/LoginController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;

    case '/buku':
        $controller = new BukuController();
        $controller->index();
        break;

    case '/peminjaman':
        $controller = new PeminjamanController();
        $controller->index();
        break;

    case '/profil':
        $controller = new ProfilController();
        $controller->index();
        break;

    case '/login':
        $controller = new LoginController();
        $controller->index();
        break;

    default:
        http_response_code(404);
        echo "404 - Halaman tidak ditemukan";
        break;

        
require_once __DIR__ . '/../app/controllers/PeminjamanController.php';

$controller = new PeminjamanController();

// cek URL parameter
$page = $_GET['page'] ?? 'home';

if ($page === 'peminjaman') {
    include __DIR__ . '/../views/pages/peminjaman.php';
} elseif ($page === 'login') {
    include __DIR__ . '/../views/pages/login.php';
} else {
    include __DIR__ . '/../views/pages/home.php';
}

}