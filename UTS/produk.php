<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Produk</title>
</head>
<body>
    <h1>Menu Produk</h1>

    <ul>
        <li>
            <a href="index.php">Welcome</a>
        </li>
        <li>
            <a href="produk.php">Menu Produk</a>
        </li>
        <li>
            <a href="pembelian.php">Menu Pembelian</a>
        </li>
    </ul>
    
<?php
$Menu_Produk = array(
    array("Maskara","Makeup","20000"),
    array("Blush On","Makeup","15000"),
    array("Liptint","Makeup","10000")
);
$jumlah_Produk = count($Menu_Produk);

?>
<table border = "1" style = "border-collapse: collapse">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Jenis</th>
        <th>Harga</th>
    </tr>
    <?php
    for ($i=0; $i < $jumlah_Produk; $i++) { 
    $jumlah_isi_Produk = count($Menu_Produk[$i]);
    ?>
    <tr>
        <td><?php echo $i+1 ?></td>
        <?php for($x=0; $x < $jumlah_isi_Produk; $x++) { ?>
        <td><?php echo $Menu_Produk[$i][$x]; ?></td>
        <?php } ?>
    </tr>
    <?php } ?>
    
    
</table>

</body>
</html>