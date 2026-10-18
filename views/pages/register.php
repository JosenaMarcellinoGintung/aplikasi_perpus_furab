<?php
include("../koneksi.php"); // sesuaikan path koneksi

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash password dengan BCRYPT
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    if (mysqli_query($koneksi, $query)) {
        echo "<p style='color:green'>Registrasi berhasil!</p>";
    } else {
        echo "<p style='color:red'>Error: " . mysqli_error($koneksi) . "</p>";
    }
}
?>

<h2>Form Registrasi</h2>
<form method="POST">
    Username: <input type="text" name="username" required>
    Password: <input type="password" name="password" required>
    <button type="submit" name="register">Daftar</button>
</form>
