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
    <?php foreach ($menus as $url => $label): ?>
        <a
            href="<?= htmlspecialchars($url) ?>"
            class="<?= $currentPage === $url ? 'active' : '' ?>"
            <?= $currentPage === $url ? 'aria-current="page"' : '' ?>
        >
            <?= htmlspecialchars($label) ?>
        </a>
    <?php endforeach; ?>
</nav>