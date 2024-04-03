<?php
session_start();
include 'koneksi.php';
$username=$_POST['username'];
$password=MD5($_POST['password']);
$data=mysqli_query($koneksi, "SELECT * FROM tb_login where username='$username' AND password='$password'");
$cek=mysqli_num_rows($data);
if ($cek>0) {
    $_SESSION['username']=$username;
    $_SESSION['status']="login";
    header("location:form_tambah.php");
    }else{
    header("location:login_layout.php?pesan-gagal");
    }
?>