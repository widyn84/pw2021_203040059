<?php
// Widy Nugraha
// 203040059
// Shift Jum'at Jam 10.00
?>

<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan query
$fashion = query("SELECT * FROM fashion")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4c</title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <style>
        .container {
            margin : auto;
            width : 50%;
            border : 3px solid skyblue;
            padding : 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php foreach ($fashion as $fsh) : ?>
            <p class = "deskripsi">
                <a href="php/detail.php?id=<?= $fsh['id']?>">
                <ul>
                  <li>  <?= $fsh["deskripsi"] ?> </li>
                </ul>
                </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>