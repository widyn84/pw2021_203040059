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
    <style>
        .form {
            margin : auto;
            width : 50%;
            border : 3px solid skyblue;
            padding : 10px;
        }
    </style>
</head>
<body>
<div class="form">
<h3>Form Tambah Data</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="gambar">GAMBAR :</label><br>
                <input type="text" name="gambar" id="gambar" required><br><br>
            </li>
            <li>
                <label for="deskripsi">DESKRIPSI :</label><br>
                <input type="text" name="deskripsi" id="deskripsi" required><br><br>
            </li>
            <li>
                <label for="harga">HARGA :</label><br>
                <input type="text" name="harga" id="harga" required><br><br>
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
            <button type="submit" name="tambah">Tambah Data!</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
</div>
</body>
</html>

