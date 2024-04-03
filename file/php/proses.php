<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$query = "INSERT INTO tbl_daftar_produk (id, nama, jumlah, harga) VALUES ('$id', '$nama', '$jumlah', '$harga')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("location:tampil.php");
} else {
    echo "Gagal menambahkan produk: " . mysqli_error($koneksi);
}
?>
