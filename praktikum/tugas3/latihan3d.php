<?php
// Widy Nugraha
// 203040059
// Shift Jum'at 10.00
?>

<?php
$list = [
    [
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "jumlah" => "100",
        "gol" => "76",
        "assist" => "30"
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "jumlah" => "120",
        "gol" => "80",
        "assist" => "12"
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "jumlah" => "87",
        "gol" => "12",
        "assist" => "48"
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "jumlah" => "90",
        "gol" => "103",
        "assist" => "8"
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "jumlah" => "109",
        "gol" => "56",
        "assist" => "15"
    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "jumlah" => "63",
        "gol" => "30",
        "assist" => "70"
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "jumlah" => "100",
        "gol" => "10",
        "assist" => "12"
    ]
];
$jumlah_main = 0;
$jumlah_gol = 0;
$jumlah_assist = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3d</title>
    <style>
        table, th, td {
            border : 1px solid black;
            text-align: center;
            padding : 5px;
        }
    </style>
</head>
<body>
    <table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>CLUB</th>
        <th>MAIN</th>
        <th>GOL</th>
        <th>ASSIST</th>
    </tr>
    
    <?php $i = 1; ?>
    <?php foreach ($list as $daftar) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $daftar["nama"]?></td>
            <td><?= $daftar["club"]?></td>
            <td><?= $daftar["jumlah"]?></td>
            <td><?= $daftar["gol"]?></td>
            <td><?= $daftar["assist"]?></td>
        </tr>
        <?php $i++;
        $jumlah_main += $daftar["jumlah"];
        $jumlah_gol += $daftar["gol"];
        $jumlah_assist += $daftar["assist"];        
        ?>     
    <?php endforeach; ?>
    
    <tr>
        <td>#</td>
        <td colspan = "2">Jumlah</td>
        <td> <?= $jumlah_main ?>   </td>
        <td> <?= $jumlah_gol ?>   </td>
        <td> <?= $jumlah_assist ?>   </td>
    </tr>
    </table>
</body>
</html>
