<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Pembelian</title>
</head>
<body>
    <h1>Menu Pembelian</h1>
    
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

    <form action="" method="POST">

    <table>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td>
                <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>
                <input type="number" name="harga">
            </td>
        </tr>
        <tr>
            <td>Qty</td>
            <td>:</td>
            <td>
                <input type="number" name="qty">
            </td>
        </tr>
        <tr>
            <td>Jumlah Pembayaran</td>
            <td>:</td>
            <td>
                <input type="number" name="jumlah pembayaran">
            </td>
        </tr>
        <tr>
            <td>
                <button>Bayar</button>
            </td>
            <td>
                <input type="sumbit" name="submit">
            </td>
        </tr>
            

    </table>
    </form>

    


    

</body>
</html>