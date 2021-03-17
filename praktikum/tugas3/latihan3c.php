<?php
// Widy Nugraha
// 203040059
// Shift Jum'at 10.00
?>

<?php
$list = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
    <style>
        .table {
            border : 1px solid black;
        }
    </style>
</head>
<body>
<div class="table">
<h3>Daftar pemain bola terkenal dan clubnya</h3>
    <table>
        <?php foreach ($list as $nama => $club) : ?>
        <tr>
            <td><b><?= $nama;?></td><b>
            <td>:</td>
            <td><?= $club; ?></td>
        <?php endforeach ;?>
        </tr>
    </table>
</div>
</body>
</html>