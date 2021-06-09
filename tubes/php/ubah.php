<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$fsh = query("SELECT * FROM fashion WHERE id = $id");

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal Diubah!');
                        document.location.href = 'admin.php';
                </script>";
    }
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
</head>
<body>
<section id="ubah">
<div class="container">
        <div class="form">
        <div class="contaner border border-warning">
        <h3>Form Ubah Data</h3>
            <form action="" method="post">
                <input type="hidden" name="id" id ="id" value="<?= $fsh['id']; ?>">
                <ul>
                    <li>
                        <label for="gambar">GAMBAR :</label><br>
                        <input type="text" name="gambar" id="gambar" autocomplete="off" required value="<?= $fsh['gambar']; ?>"><br><br>
                    </li>
                    <li>
                        <label for="deskripsi">DESKRIPSI :</label><br>
                        <input type="text" name="deskripsi" id="deskripsi" autocomplete="off" required value="<?= $fsh['deskripsi']; ?>"><br><br>
                    </li>
                    <li>
                        <label for="harga">HARGA :</label><br>
                        <input type="text" name="harga" id="harga" autocomplete="off" required value="<?= $fsh['harga']; ?>"><br><br>
                    </li>
                    <li>
                        <label for="kategori">KATEGORI :</label><br>
                        <select name="kategori" id="kategori" required value="<?= $fsh['kategori']; ?>">
                            <option value="">================== Pilih Kategori ===================</option>
                            <option value="OUTWEAR">OUTWEAR</option>
                            <option value="T-SHIRTS">T-SHIRTS</option>
                            <option value="KEMEJA">KEMEJA</option>
                            <option value="JEANS">JEANS</option>
                            <option value="CELANA PENDEK">CELANA PENDEK</option>
                            <option value="LAINNYA">LAINNYA</option>
                        </select>
                    </li>
                    <li>
                        <label for="jenkel">JENKIS KELAMIN :</label><br>
                        <select name="jenkel" id="jenkel" required value="<?= $fsh['jenkel']; ?>">
                            <option value="PRIA">PRIA</option>
                            <option value="WANITA">WANITA</option>
                        </select>
                    </li>
                    <br>
                    <button type="submit" name="ubah" class="btn btn-outline-warning">Ubah Data!</button>
                    <button type="button" class="btn btn-outline-warning">
                        <a href="admin.php">Kembali</a>
                    </button>
                </ul>
        </div>
        </div>
</div>
</section>
</body>
</html>

