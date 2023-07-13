<?php
require "function.php";
$id_buku = $_GET["id"];
if (buku_satu_jumlah($id_buku) < 1) {
    echo "
    <script>
    alert('ID Buku tidak tersedia!');
    location='../buku.php';
    </script>
    ";
}else {
    $hapus = q("DELETE FROM buku WHERE id = '$id_buku'");
    if ($hapus) {
        echo "<script>
        alert('Buku berhasil dihapus!');
        location='../buku.php';
        </script>";
    } else {
        echo "<script>
        alert('Buku gagal dihapus!');
        location='../buku.php';
        </script>";
    }
}
?>