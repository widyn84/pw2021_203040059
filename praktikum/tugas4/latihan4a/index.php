<?php
// Widy Nugraha
// 203040059
// Shift Jum'at Jam 10.00
?>

<?php
// Untuk melakukan koneksi
$conn = mysqli_connect("localhost", "root", "");
// Untuk memilih database yang digunakan
mysqli_select_db($conn, "pw_tubes_203040059");
// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM fashion");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4a</title>
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
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
            <img src= "assets/img/<?= $row["gambar"];?>">
            </td>
            <td><?= $row["deskripsi"]?></td>
            <td><?= $row["harga"]?></td>
            <td><?= $row["kategori"]?></td>
            <td><?= $row["jenis_kelamin"]?></td>
        </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
</body>
</html>