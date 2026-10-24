<?php

require_once __DIR__ . '/../../koneksi.php';

class UserController
{
    public function index()
    {
        global $conn;

        $title = "Data User - PerpusFurab";
        $pesan = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $aksi = $_POST['aksi'] ?? '';

            if ($aksi === 'tambah') {
                $nama = trim($_POST['nama'] ?? '');
                $username = trim($_POST['username'] ?? '');
                $password = $_POST['password'] ?? '';
                $role = $_POST['role'] ?? 'mahasiswa';

                if (
                    $nama !== '' &&
                    $username !== '' &&
                    $password !== '' &&
                    in_array($role, ['admin', 'mahasiswa'], true)
                ) {
                    $passwordHash = password_hash(
                        $password,
                        PASSWORD_DEFAULT
                    );

                    $stmt = mysqli_prepare(
                        $conn,
                        "INSERT INTO users (nama, username, password, role)
                         VALUES (?, ?, ?, ?)"
                    );

                    mysqli_stmt_bind_param(
                        $stmt,
                        "ssss",
                        $nama,
                        $username,
                        $passwordHash,
                        $role
                    );

                    if (mysqli_stmt_execute($stmt)) {
                        mysqli_stmt_close($stmt);
                        header("Location: /?page=user");
                        exit;
                    }

                    $pesan = "Gagal menambahkan user. Pastikan username belum digunakan.";
                    mysqli_stmt_close($stmt);
                } else {
                    $pesan = "Semua data wajib diisi dengan benar.";
                }
            }

            if ($aksi === 'hapus') {
                $id = (int) ($_POST['id_user'] ?? 0);

                $stmt = mysqli_prepare(
                    $conn,
                    "DELETE FROM users WHERE id_user = ?"
                );

                mysqli_stmt_bind_param($stmt, "i", $id);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);

                header("Location: /?page=user");
                exit;
            }
        }

        $hasil = mysqli_query(
            $conn,
            "SELECT id_user, nama, username, role
             FROM users
             ORDER BY id_user DESC"
        );

        $users = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

        ob_start();
        require __DIR__ . '/../../views/pages/user.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layouts/main.php';
    }
}