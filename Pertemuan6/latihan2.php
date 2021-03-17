<?php
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 6 - 17 Maret 2021
Mempelajari tentang Associative Array
*/
?>

<?php
// $mahasiswa = [
//     ["Widy Nugraha", "203040059", "Teknik Informatika", "203040059@mail.unpas.ac.id"],
//     ["Randy", "203040999", "Teknik Informatika", "203040999@mail.unpas.ac.id"],
//     ["Galang", "203040998", "Teknik Informatika", "203040998@mail.unpas.ac.id"],
//     ["Ben", "203040998", "Teknik Informatika", "203040997@mail.unpas.ac.id"],
// ];

//Array Associative
// Sama seperti array numerik, kecuali
// keynya adalah string yang kita buat sendiri
$mahasiswa = [ 
    [
        "nama" => "Widy Nugraha", 
        "nrp" => "203040059",
        "jurusan" => "Teknik Informatika",
        "email" => "203040059@mail.unpas.aci.di",
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
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama: <?= $mhs["nama"]; ?></li>
        <li>NRP: <?= $mhs["nrp"]; ?></li>
        <li>Prodi: <?= $mhs["jurusan"]; ?></li>
        <li>Email: <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>