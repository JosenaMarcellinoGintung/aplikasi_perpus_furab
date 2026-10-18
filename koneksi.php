<?php
$koneksi = mysqli_connect("localhost", "root", "", "aplikasi_perpus_furab");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
