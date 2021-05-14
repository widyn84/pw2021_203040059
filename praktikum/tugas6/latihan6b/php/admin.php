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

// tombol cari ditekan
if (isset($_POST['cari'])) {
    $fashion = cari($_POST["keyword"]);
} else {
    query("SELECT * FROM fashion");
}
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
<div class="logout">
    <a href="logout.php">Logout</a>
</div>
<form action="" method="post">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari</button>
</form>
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
    <?php if(empty($fashion)) :  ?>
        <tr>
            <td colspan="7">
                <h1><p style="color: red; font-style: italic;">Data tidak ditemukan</p></h1>
            </td>
        </tr>
    <?php else : ?>
    <?php $i = 1; ?>
    <?php foreach ($fashion as $fsh) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $fsh["id"];?>"><button>Ubah</button></a>
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
<?php endif; ?>
</body>
</html>