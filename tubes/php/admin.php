<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <style>
    /* table,th,td {
        border : 1px solid black;
        text-align: center;
        padding : 20px;
    } */
    </style>
</head>
<body>
<section id="admin">
<div class="add">
    <a href="tambah.php">Tambah Data</a>
</div>
<div class="logout">
    <a href="logout.php">Logout</a>
</div>
<form action="" method="post">
    <div class="input-group mb-3 mt-2 w-25">
        <input type="text" name="keyword" class="form-control" placeholder="Silahkan Masukkan Keyword" aria-label="Recipient's username" aria-describedby="button-addon2" autofocus autocomplete="off">
        <button class="btn btn-outline-warning" name="cari" type="submit" id="button-addon2">Cari</button>
    </div>    
</form>
<table class="table table-bordered border-warning">
    <tr class = "table-warning">
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
                <a href="ubah.php?id=<?= $fsh["id"];?>"><button class="btn btn-outline-warning">Ubah</button></a>
                <a href="hapus.php?id=<?= $fsh["id"];?>" onclick="return confirm('Hapus Data?')"><button class="btn btn-outline-warning">Hapus</button></a>
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
</section>
</body>
</html>