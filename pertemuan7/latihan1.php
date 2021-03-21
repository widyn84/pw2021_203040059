<?php
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 7 - 21 Maret 2021
Mempelajari tentang GET & POST
*/
?>

<?php
// Variable Scope / lingkup variabel
// $x = 10;

// function tampilx() {
//     global $x;
//     echo $x;
// }
// tampilx();
// 

// SUPERGLOBALS
// variable global milik PHP
// Merupakan array Associative

// $_GET
$mahasiswa = [ 
    [
        "nama" => "Widy Nugraha", 
        "nrp" => "203040059",
        "jurusan" => "Teknik Informatika",
        "email" => "203040059@mail.unpas.ac.id",
        "gambar" => "gambar1.jpg"
    ],
    [
        "nama" =>  "Randy", 
        "nrp" => "203040999", 
        "jurusan" => "Teknik Informatika", 
        "email" => "203040999@mail.unpas.ac.id",
        "gambar" => "gambar2.png"

    ] 
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa </h1>
<ul>
<?php foreach($mahasiswa as $mhs) : ?>
    <li>
    <a href="latihan2.php?nama=<?= $mhs["nama"];?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach;?>
<ul>    
</body>
</html>