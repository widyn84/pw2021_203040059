<?php
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 7 - 21 Maret 2021
Mempelajari tentang GET & POST
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
</head>
<body>
<?php if(isset ($_POST["submit"])) : ?>
<h1>Halo Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>
<form action="" method="post">
    Masukkan Nama:
    <input type="text" name="nama">
    <br>
    <button type = "submit" name="submit">Kirim</button>
</form>   
</body>
</html>