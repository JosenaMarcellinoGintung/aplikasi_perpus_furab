<section class="halaman-buku">

    <div class="judul-section">
        <p>KOLEKSI PERPUSTAKAAN</p>
        <h2>Daftar Buku</h2>
        <span>
            Temukan buku yang kamu butuhkan di PerpusFurab.
        </span>
    </div>

    <div class="aksi-buku">
        <a href="?page=tambah_buku" class="btn-tambah-buku">
            + Tambah Buku
        </a>
    </div>

    <div class="kotak-informasi">

        <?php if (!empty($buku)): ?>

            <?php foreach ($buku as $item): ?>

                <article class="card kartu-koleksi">

                    <div class="informasi-buku">

                        <h3>
                            <?= htmlspecialchars($item['judul'], ENT_QUOTES, 'UTF-8') ?>
                        </h3>

                        <p>
                            <strong>Penulis:</strong>
                            <?= htmlspecialchars($item['penulis'], ENT_QUOTES, 'UTF-8') ?>
                        </p>

                        <p>
                            <strong>Penerbit:</strong>
                            <?= htmlspecialchars($item['penerbit'] ?? '-', ENT_QUOTES, 'UTF-8') ?>
                        </p>

                        <p>
                            <strong>Tahun Terbit:</strong>
                            <?= htmlspecialchars((string) ($item['tahun_terbit'] ?? '-'), ENT_QUOTES, 'UTF-8') ?>
                        </p>

                        <p>
                            <strong>Stok:</strong>
                            <?= (int) $item['stok'] ?>
                        </p>

                        <p>
                            <strong>Status:</strong>

                            <?php if ((int) $item['stok'] > 0): ?>
                                <span class="status-tersedia">Tersedia</span>
                            <?php else: ?>
                                <span>Stok Habis</span>
                            <?php endif; ?>
                        </p>

                    </div>

                </article>

            <?php endforeach; ?>

        <?php else: ?>

            <p>Belum ada buku yang terdaftar di database.</p>

        <?php endif; ?>

    </div>

</section>