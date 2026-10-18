<section class="informasi">
    <div class="judul-section">
        <p>PERPUSTAKAAN KAMPUS</p>
        <h2>Login PerpusFurab</h2>
        <span>Silakan masuk untuk mengakses akun Anda.</span>
    </div>

    <div class="card">
        <form action="/login" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <button type="submit" class="tombol">Masuk</button>
        </form>
    </div>
</section>