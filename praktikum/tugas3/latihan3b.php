<?php
// Widy Nugraha
// 203040059
// Shift Jum'at 10.00
?>

<?php
$nama_pemain=[
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
</head>
<body>
<h3>Daftar Pemain Bola Terkenal </h3>
    <ol>
        <?php foreach ($nama_pemain as $nama): ?>
            <?= "<li>$nama</li>"?>
        <?php endforeach; ?>
    </ol>
    
<?php
$nama_pemain[] = "Luca Modric";
$nama_pemain[] = "Sadio Mane";
sort($nama_pemain);
?>

<h3>Daftar Pemain Bola Terkenal Baru</h3>
    <ol>
        <?php foreach ($nama_pemain as $nama): ?>
            <?= "<li>$nama</li>"?>
        <?php endforeach; ?>
    </ol>

</body>
</html>