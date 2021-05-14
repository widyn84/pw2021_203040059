<?php
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 11 - 06 Mei 2021
Mempelajari tentang DELETE,UPDATE, DAN SEARCHING
*/
?>

<?php
require 'functions.php';

// jika tidak ada id di url
if(!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if(isset($_POST['ubah'])) {
   if  (ubah($_POST) > 0 ) {
       echo "<script>
             alert('data berhasil diubah!');
             document.location.href = 'index.php';
             </script>";
   } else {
        echo "<script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
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
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h3>Form Ubah Data Mahasiswa</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $m['id']; ?>">
        <ul>
            <li>
             <label>
                Nama:
                <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
             </label>
            </li>
            <li>
            <label>
                NRP:
                <input type="text" name="nrp" required value="<?= $m['nrp']; ?>">
             </label>            
            </li>
            <li>
            <label>
                Email:
                <input type="text" name="email" required value="<?= $m['email']; ?>">
             </label>
            </li>
            <li>
            <label>
                Jurusan:
                <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
             </label>
            </li>
            <li>
            <label>
                Gambar:
                <input type="text" name="gambar" required value="<?= $m['gambar']; ?>">
             </label>
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>