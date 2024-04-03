<html>
<head>
<title>tambah produk</title>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:login_layout.php?pesan=belum_login");
    }
    ?>
<table align="center">
<center><label><b>PRODUK</b></label> / <a href="logout.php">LOGOUT</a></center><br>
<h4 align="center">Selamat datang, <?php echo $_SESSION['username'];?> !...</h4>
<form method="POST" action="proses.php">
<tr>
<td>ID</td><td>:</td>
<td><input type="text" id="id" name="id"></td>
</tr>
<tr>
<td>NAMA</td><td>:</td>
<td><input type="text" id="nama" name="nama"></td>
</tr>
<tr>
<td>JUMLAH</td><td>:</td>
<td><input type="text" id="jumlah" name="jumlah"></td>
</tr>
<tr>
<td>HARGA</td><td>:</td>
<td><input type="text" id="harga" name="harga"></td>
</tr>
<td></td><td></td>
<td><input type="submit" name="submit" value="SIMPAN">
<input type="reset" name="reset" value="HAPUS"></td>
</form>
</table>
</body>
</html>