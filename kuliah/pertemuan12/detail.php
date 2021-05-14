<?php
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 12 - 14 Mei 2021
Mempelajari tentang LOGIN DAN REGISTRASI
*/
?>

<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE  id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $m['gambar']; ?>" width="60"></li>
        <li>NRP: <?= $m['nrp']; ?></li>
        <li>NAMA: <?= $m['nama']; ?></li>
        <li>Email: <?= $m['email']; ?></li>
        <li>Jurusan: <?= $m['jurusan']; ?></li>
        <li><a href="ubah.php?id=<?= $m['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a></li>
        <li><a href="index.php">Kembali ke Daftar Mahasiswa</a></li>

    </ul>
</body>
</html>