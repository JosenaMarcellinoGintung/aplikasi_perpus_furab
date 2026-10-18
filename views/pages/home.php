<?php
$namaPerpustakaan = "PerpusFurab";
?>

<section class="beranda">
    <div class="teks">
        <p class="label">PERPUSTAKAAN KAMPUS</p>

        <h1>
            Selamat Datang di
            <span>Perpustakaan Kampus</span>
        </h1>

        <p class="deskripsi">
            Temukan buku yang kamu butuhkan dan lakukan
            peminjaman dengan mudah melalui
            <?= htmlspecialchars($namaPerpustakaan); ?>.
        </p>

        <a href="/buku" class="tombol">
            Lihat Daftar Buku →
        </a>
    </div>

    <div class="gambar">
        <div class="ikon-buku">📚</div>

        <h3>Perpustakaan Digital</h3>

        <p>
            Cari buku, periksa ketersediaan, dan temukan
            lokasi rak dengan lebih mudah.
        </p>
    </div>
</section>

<section class="informasi">
    <div class="judul-section">
        <p>LAYANAN KAMI</p>
        <h2>Informasi Perpustakaan</h2>
        <span>
            Kenali layanan yang tersedia di perpustakaan kampus.
        </span>
    </div>

    <div class="kotak-informasi">

        <div class="card">
            <div class="ikon">📚</div>
            <h3>Daftar Buku</h3>
            <p>
                Melihat berbagai buku yang tersedia
                di perpustakaan.
            </p>
        </div>

        <div class="card">
            <div class="ikon">📖</div>
            <h3>Stok Buku</h3>
            <p>
                Mengetahui jumlah buku yang masih
                tersedia untuk dipinjam.
            </p>
        </div>

        <div class="card">
            <div class="ikon">📍</div>
            <h3>Lokasi Rak</h3>
            <p>
                Mengetahui lokasi rak tempat buku disimpan.
            </p>
        </div>

    </div>
</section>