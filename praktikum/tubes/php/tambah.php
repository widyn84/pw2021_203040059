<?php
// Widy Nugraha
// 203040059
// SHIFT JUM'AT JAM 10.00
?>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal Ditambahkan!');
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
<section id="tambah">
<div class="container border border-warning">
    <div class="form">
        <h3>Form Tambah Data</h3>
            <form action="" method="post">
            <ul>
                <li>
                    <label for="gambar">GAMBAR :</label><br>
                    <input type="text" name="gambar" id="gambar" autocomplete="off" required><br><br>
                </li>
                <li>
                    <label for="deskripsi">DESKRIPSI :</label><br>
                    <input type="text" name="deskripsi" id="deskripsi" autocomplete="off" required><br><br>
                </li>
                <li>
                    <label for="harga">HARGA :</label><br>
                    <input type="text" name="harga" id="harga" autocomplete="off" required><br><br>
                </li>
                <li>
                    <label for="kategori">KATEGORI :</label><br>
                    <select name="kategori" id="kategori" required>
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
                    <select name="jenkel" id="jenkel" required>
                        <option value="PRIA">PRIA</option>
                        <option value="WANITA">WANITA</option>
                    </select>
                </li>
                <br>
                <button type="submit" name="tambah" class="btn btn-outline-warning">Tambah Data</button>
                <button type="submit" class="btn btn-outline-warning">
                    <a href="admin.php">Kembali</a>
                </button>
            </ul>
    </div>
</div>
</section>
</body>
</html>

