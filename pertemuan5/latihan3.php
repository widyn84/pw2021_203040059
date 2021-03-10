<?php
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 5 - 10 Maret 2021
Mempelajari tentang Array
*/
?>

<?php
$mahasiswa = [
    ["Widy Nugraha", "203040059", "Teknik Informatik", "203040059@mail.unpas.ac.id"],
    ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@mail.unpas.ac.id"],
    ["Doddy Ferdiansyah", "033040001", "Teknik Informatika", "doddy@mail.unpas.ac.id"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) : ?>    
<ul>       
    <li>Nama: <?= $mhs[0]?></li>
    <li>NRP: <?= $mhs[1]?></li>
    <li>Prodi: <?= $mhs[2]?></li>
    <li>Email: <?= $mhs[3]?></li>
</ul>
<?php endforeach; ?>
</body>
</html>