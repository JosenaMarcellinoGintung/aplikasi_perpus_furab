<?php

$buku = [
    [
        'judul' => 'Buku Pemrograman PHP',
        'kategori' => 'Teknologi',
        'status' => 'Tersedia',
        'gambar' => '/images/pemrograman-php.jpg'
    ],
    [
        'judul' => 'Buku Akuntansi Dasar',
        'kategori' => 'Akuntansi',
        'status' => 'Tersedia',
        'gambar' => '/images/akuntansi-dasar.jpg'
    ],
    [
        'judul' => 'Buku Sistem Informasi',
        'kategori' => 'Sistem Informasi',
        'status' => 'Tersedia',
        'gambar' => '/images/sistem-informasi.jpg'
    ]
];

?>

<section class="halaman-buku">

    <div class="judul-section">
        <p>KOLEKSI PERPUSTAKAAN</p>
        <h2>Daftar Buku</h2>
        <span>
            Temukan buku yang kamu butuhkan di PerpusFurab.
        </span>
    </div>

    <div class="kotak-informasi">

        <?php foreach ($buku as $item): ?>

            <article class="card kartu-koleksi">

                <div class="gambar-buku">
                    <img
                        src="<?= htmlspecialchars($item['gambar'], ENT_QUOTES, 'UTF-8') ?>"
                        alt="<?= htmlspecialchars($item['judul'], ENT_QUOTES, 'UTF-8') ?>"
                        loading="lazy"
                    >
                </div>

                <div class="informasi-buku">

                    <h3>
                        <?= htmlspecialchars($item['judul'], ENT_QUOTES, 'UTF-8') ?>
                    </h3>

                    <p>
                        <strong>Kategori:</strong>
                        <?= htmlspecialchars($item['kategori'], ENT_QUOTES, 'UTF-8') ?>
                    </p>

                    <p>
                        <strong>Status:</strong>
                        <span class="status-tersedia">
                            <?= htmlspecialchars($item['status'], ENT_QUOTES, 'UTF-8') ?>
                        </span>
                    </p>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

</section>