<html>
    <head>
    <title></title>
</head>
<body>
    <center><label><b>PRODUK</b></label></center>
    <center><a href="form_tambah.php">+ Tambah Produk</a></center><br>
    <table border="1" align="center">
    <tr> 
    <th>ID</th>
    <th>NAMA</th>
    <th>HARGA</th>
    <th>JUMLAH</th>
    </tr>
    <?php
    include 'koneksi.php';
    $data=mysqli_query($koneksi,"SELECT*FROM tbl_daftar_produk");
    while ($d = mysqli_fetch_array($data))
    {
        ?>
        <tr>
            <td><?php echo $d['id'];?></td>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['jumlah'];?></td>
            <td><?php echo $d['harga'];?></td>
        </tr>
        <?php
    }

    ?>
</table>
</body>
</html>