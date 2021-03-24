<?php
// Widy Nugraha
// 203040059
// Shift Jum'at Jam 10.00
?>

<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan query
$fashion = query("SELECT * FROM fashion")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4b</title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
</head>
<body>
<table class="table table-border cell-border">
    <tr class = "info">
        <th>NO</th>
        <th>GAMBAR</th>
        <th>DESKRIPSI</th>
        <th>HARGA</th>
        <th>KATEGORI</th>
        <th>JENIS KELAMIN</th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach ($fashion as $fsh) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
            <img src= "assets/img/<?= $fsh["gambar"];?>">
            </td>
            <td><?= $fsh["deskripsi"]?></td>
            <td><?= $fsh["harga"]?></td>
            <td><?= $fsh["kategori"]?></td>
            <td><?= $fsh["jenis_kelamin"]?></td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</body>
</html>