<section class="halaman-buku">

    <div class="judul-section">
        <p>MANAJEMEN PENGGUNA</p>
        <h2>Data User</h2>
        <span>Kelola data pengguna aplikasi PerpusFurab.</span>
    </div>

    <?php if (!empty($pesan)): ?>
        <p class="pesan-error">
            <?= htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8') ?>
        </p>
    <?php endif; ?>

    <div class="form-buku-container">
        <h3>Tambah User</h3>

        <form method="POST" action="/?page=user" class="form-buku">

            <input type="hidden" name="aksi" value="tambah">

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    maxlength="100"
                    required
                >
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    maxlength="50"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" required>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit" class="btn-tambah-buku">
                Simpan User
            </button>

        </form>
    </div>

    <div class="kotak-informasi">
        <h3>Daftar Pengguna</h3>

        <?php if (!empty($users)): ?>

            <div style="overflow-x:auto;">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= (int) $user['id_user'] ?></td>

                                <td>
                                    <?= htmlspecialchars($user['nama'], ENT_QUOTES, 'UTF-8') ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($user['role'], ENT_QUOTES, 'UTF-8') ?>
                                </td>

                                <td>
                                    <form
                                        method="POST"
                                        action="/?page=user"
                                        onsubmit="return confirm('Yakin ingin menghapus user ini?');"
                                    >
                                        <input type="hidden" name="aksi" value="hapus">

                                        <input
                                            type="hidden"
                                            name="id_user"
                                            value="<?= (int) $user['id_user'] ?>"
                                        >

                                        <button type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        <?php else: ?>

            <p>Belum ada pengguna yang terdaftar.</p>

        <?php endif; ?>
    </div>

</section>