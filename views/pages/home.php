<?php
$namaPerpustakaan = "PerpusFurab";
?>

<!-- HERO SECTION -->
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
            <?= htmlspecialchars($namaPerpustakaan, ENT_QUOTES, 'UTF-8'); ?>.
        </p>

        <div class="hero-actions">
            <a href="/buku" class="tombol">
                Lihat Daftar Buku &rarr;
            </a>
        </div>
    </div>

    <!-- GAMBAR PERPUSTAKAAN -->
    <div class="gambar">
        <img
            src="/images/hero-perpustakaan.png"
            alt="Suasana perpustakaan dengan rak dan koleksi buku"
            class="gambar-hero"
        >

        <div class="kartu-digital">
            <div class="ikon-buku">📚</div>

            <div>
                <h3>Perpustakaan Digital</h3>

                <p>
                    Cari buku, periksa ketersediaan,
                    dan temukan lokasi rak dengan lebih mudah.
                </p>
            </div>
        </div>
    </div>

</section>

<!-- INFORMASI PERPUSTAKAAN -->
<section class="informasi">

    <div class="judul-section">
        <p class="label">LAYANAN KAMI</p>

        <h2>Informasi Perpustakaan</h2>

        <span>
            Kenali layanan yang tersedia di perpustakaan kampus.
        </span>
    </div>

    <div class="kotak-informasi">

        <!-- KARTU DAFTAR BUKU -->
        <a href="/buku" class="card">
            <div class="ikon">📚</div>

            <div class="card-content">
                <h3>Daftar Buku</h3>

                <p>
                    Melihat berbagai buku yang tersedia
                    di perpustakaan.
                </p>
            </div>
        </a>

        <!-- KARTU STOK BUKU -->
        <a href="/buku" class="card">
            <div class="ikon">📖</div>

            <div class="card-content">
                <h3>Stok Buku</h3>

                <p>
                    Mengetahui jumlah buku yang masih
                    tersedia untuk dipinjam.
                </p>
            </div>
        </a>

        <!-- KARTU LOKASI RAK -->
        <a href="/buku" class="card">
            <div class="ikon">📍</div>

            <div class="card-content">
                <h3>Lokasi Rak</h3>

                <p>
                    Mengetahui lokasi rak tempat buku disimpan.
                </p>
            </div>
        </a>

    </div>

</section>