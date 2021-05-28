<?php
// Mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if( !isset($_GET["id"])) {
    header("location: ../index.php");
    exit;
}

require "functions.php";

// Mengambil id dari url
$id = $_GET["id"];

// melakukan query dengan parameter id yang diambil dari url
$fashion = query("SELECT * FROM fashion WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="gambar">
            <img src="../assets/img/<?= $fashion["gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $fashion["deskripsi"]; ?></p>
            <p><?= $fashion["harga"]; ?></p>
            <p><?= $fashion["kategori"]; ?></p>
            <p><?= $fashion["jenis_kelamin"]; ?></p>

        <button class="btn btn-outline-warning"><a href="../index.php">Kembali</a></button>
</body>
</html>