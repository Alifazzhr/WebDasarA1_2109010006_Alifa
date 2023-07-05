<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Halo Apa kabar CSS</h1>

    <form action="" method="POST">
    <input type="text" name="nama" placeholder="input nama">
    <button name="cari"> Cari </button>
</form>

<?php
if (@$_POST[" Cari "]) { ?>
<p> Nama saya adalah <?=@$_POST["nama"]?>
</p> 
<?php } ?>

</body>
</html>