<section class="halaman-buku">

    <div class="judul-section">
        <p>KELOLA KOLEKSI</p>
        <h2>Tambah Buku</h2>
        <span>Masukkan informasi buku yang akan ditambahkan ke perpustakaan.</span>
    </div>

    <div class="form-buku-container">

        <?php if (!empty($pesan)): ?>
            <div class="pesan-error">
                <?= htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8') ?>
            </div>
        <?php endif; ?>

        <form action="/?page=tambah_buku" method="POST" class="form-buku">

            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input
                    type="text"
                    id="judul"
                    name="judul"
                    maxlength="150"
                    placeholder="Masukkan judul buku"
                    required
                >
            </div>

            <div class="form-group">
                <label for="penulis">Nama Penulis</label>
                <input
                    type="text"
                    id="penulis"
                    name="penulis"
                    maxlength="100"
                    placeholder="Masukkan nama penulis"
                    required
                >
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input
                    type="text"
                    id="penerbit"
                    name="penerbit"
                    maxlength="100"
                    placeholder="Masukkan nama penerbit"
                >
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input
                    type="number"
                    id="tahun_terbit"
                    name="tahun_terbit"
                    min="1901"
                    max="2155"
                    placeholder="Contoh: 2024"
                    required
                >
            </div>

            <div class="form-group">
                <label for="stok">Jumlah Stok</label>
                <input
                    type="number"
                    id="stok"
                    name="stok"
                    min="0"
                    placeholder="Masukkan jumlah buku"
                    required
                >
            </div>

            <div class="form-aksi">
                <button type="submit" class="btn-tambah-buku">
                    Simpan Buku
                </button>

                <a href="/?page=buku" class="btn-batal">
                    Batal
                </a>
            </div>

        </form>

    </div>

</section>