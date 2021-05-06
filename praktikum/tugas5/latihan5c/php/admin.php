<?php
// Widy Nugraha
// 203040059
// SHIFT JUM'AT JAM 10.00
?>

<?php
// Menghubungkan denga file lainnya
require 'functions.php';
// melakukan query
$fashion = query ("SELECT * FROM fashion");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIQLO</title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <style>
    table,th,td {
        border : 1px solid black;
        text-align: center;
        padding : 20px;
    }
    </style>
</head>
<body>
<div class="add">
    <a href="tambah.php">Tambah Data</a>
</div>
<table>
    <tr class = "info">
        <th>NO</th>
        <th>OPSI</th>
        <th>GAMBAR</th>
        <th>DESKRIPSI</th>
        <th>HARGA</th>
        <th>KATEGORI</th>
        <th>JENIS KELAMIN</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($fashion as $fsh) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href=""><button>Ubah</button></a>
                <a href="hapus.php?id=<?= $fsh["id"];?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
            </td>
            <td>
            <img src= "../assets/img/<?= $fsh["gambar"];?>">
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