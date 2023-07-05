<?php 
require "controllers/function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Saya</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
<h1>Selamat Datang di Halaman Buku Saya</h1>
    <hr>
    <ul>
        <a href="index.php">
            <li>Home</li>
        </a>
        <a href="pinjam.php">
            <li>Peminjaman Buku</li>
        </a>
    </ul>
    <hr>
    <a href="tambah_buku.php">Tambah Buku</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Tahun Terbit</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Update</th>
            <th>Opsi</th>
        </tr>
        <?php 
        $nomor = 1;
        foreach (buku() as $b) :?>
            <tr>
                <td><?= $nomor++; ?> </td>
                <td><?= $b["id"]; ?></td>
                <td><?= $b["judul_buku"]; ?></td>
                <td><?= $b["tahun_terbit"]; ?></td>
                <td><?= $b["penulis"]; ?></td>
                <td><?= $b["penerbit"]; ?></td>
                <td><?= date("d F Y, H:i", strtotime ($b["edit"]));?></td>
                <td>
                    <a href="edit.php?id=<?= $b["id"]; ?>">Edit</a>
                    <a href="hapus.php?id=<?= $b["id"] ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach;
        ?>
    </table>
</body>
</html>