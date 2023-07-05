<?php
require "controllers/function.php";
$id_buku = $_GET["id"];
if (buku_satu_jumlah($id_buku) < 1) {
    echo "
    <script>
    alert('ID Buku tidak tersedia!');
    location='buku.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Saya</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Selamat datang di Halaman edit Buku</h1>
        <hr>
        <ul>
            <a href="index.php">
                <li>Home</li>
            </a>
            <a href="pinjam.php">
                <li>Peminjaman Buku</li>
            </a>
            <a href="buku.php">
                <li>Data Buku</li>
            </a>
        </ul>
        <hr>
        <form action="" method= "POST">
        <table>
            <tr>
                <th>Judul Buku</th>
                <td>:</td>
                <td>
                    <input name="judul_buku" type="text" placeholder="Input judul buku" value="<?= buku_satu($id_buku, "judul_buku"); ?>">
                </td>
            </tr>
            <tr>
                <th>Tahun Terbit</th>
                <td>:</td>
                <td>
                    <input name="tahun_terbit" type="number" placeholder="Input Tahun Terbit"
                    value="<?= buku_satu($id_buku, "tahun_terbit"); ?>">
                </td>
            </tr>
            <tr>
                <th>Penulis</th>
                <td>:</td>
                <td>
                    <input name="penulis" type="text" placeholder="Input Penulis" value="<?= buku_satu($id_buku, "penulis"); ?>">
                </td>
            </tr>
            <tr>
                <th>Penerbit</th>
                <td>:</td>
                <td>
                    <input name="penerbit" type="text" placeholder="Input Penerbit" value="<?= buku_satu($id_buku, "penerbit"); ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" name= "edit_buku" style="width: 22%";>Edit</button>
                </td>
            </tr>
        </table>
        </form>

    <?php 
    $tanggal = date("Y-m-d H:i:s");
    if (isset($_POST["edit_buku"])) {
        $judul_buku = $_POST["judul_buku"];
        $tahun_terbit = $_POST["tahun_terbit"];
        $penulis = $_POST["penulis"];
        $penerbit = $_POST["penerbit"];
        if ($judul_buku == "" || $tahun_terbit == "" || $penerbit == "" || $penulis == "") {
            echo "
            <script>
            alert('Data masih ada yang kosong');
            </script>
            ";
        }else {
            $edit = q("UPDATE buku SET
            judul_buku = '$judul_buku',
            tahun_terbit = '$tahun_terbit',
            penulis = '$penulis',
            penerbit = '$penerbit',
            edit = '$tanggal'
            WHERE
            id = '$id_buku'");
            if ($edit) {
                echo "<script>
                alert('Data berhasil diedit!');
                location='buku.php';
                </script>";
            }else{
                echo "<script>
                alert('Data gagal diedit!');
                </script>";
            }
        
        }
    }
    ?>
</body>
</html>