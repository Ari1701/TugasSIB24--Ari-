<html>
<head>
<title>Login</title>
</head>
<body>
    <h2 align="center">Halaman Login</h2>
    <br/>
    <?php
    if (isset($_GET['pesan'])) {
        if($_GET['pesan']=="gagal"){
            echo "<p align='center'> Login gagal username atau password salah !</p>";
        } else if($_GET['pesan']=="logout") {
            echo "<p align='center'> Anda telah berhasil logout</p>";
        }else if ($_GET['pesan']=="belum login"){
            echo "<p align='center'>Anda harus login untuk mengakses halaman admin</p>";
        }
    }
    ?>
    <br/>
    <br/>
    <form method="post" action="cek_login.php">
    <table align="center">
    <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" placeholder="Masukkan username"></td>
    </tr>
    <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" placeholder="Masukkan password"></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="LOGIN"></td>
    </tr>
</table>
</form>
</body>
</html>