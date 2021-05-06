<?php
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 10 - 27 April 2021
Mempelajari tentang INSERT DATA
*/
?>

<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahsiswa</title>
</head>
<body>
    <h3>Daftar Mahsiswa</h3>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; 
        foreach($mahasiswa as $m) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
            <td><?= $m['nama']; ?></td>
            <td>
                <a href="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>