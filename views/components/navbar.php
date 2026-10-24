<?php
$currentPage = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$menus = [
    '/' => 'Beranda',
    '/buku' => 'Daftar Buku',
    '/peminjaman' => 'Peminjaman',
    '/profil' => 'Profil',
];
?>

<nav class="menu">
<<<<<<< HEAD
    <a href="/" class="active">Beranda</a>
    <a href="/buku">Daftar Buku</a>
    <a href="/peminjaman">Peminjaman</a>
    <a href="/profil">Profil</a>
    <li><a href="pages/register.php">Register</a></li>
=======
    <?php foreach ($menus as $url => $label): ?>
        <a
            href="<?= htmlspecialchars($url) ?>"
            class="<?= $currentPage === $url ? 'active' : '' ?>"
            <?= $currentPage === $url ? 'aria-current="page"' : '' ?>
        >
            <?= htmlspecialchars($label) ?>
        </a>
    <?php endforeach; ?>
>>>>>>> b4b1b97098fad6eb6b230f8a075ed25abd571203
</nav>