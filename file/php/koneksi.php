<?php
$koneksi = mysqli_connect("localhost", "root", "", "stupen");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    $result = mysqli_query($koneksi, "SELECT 1");
    if ($result) {
        echo "Koneksi database berhasil!";
    } else {
        echo "Gagal mengeksekusi query: " . mysqli_error($koneksi);
    }
}
