<?php
/* 
Widy Nugraha
203040059
Jum'at 10
*/
?>

<?php
    function tumpukanBola($tumpukan) {
        for($i = 1; $i<=$tumpukan; $i++){
            for($j = 1; $j<=$i; $j++ )
            echo "<div class= 'bola'>$i</div>";
            echo "<br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
        .bola {
            height: 75px;
            width: 75px;
            line-height: 50px;
            background-color: salmon;
            border-radius: 50%;
            display: inline-block;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php tumpukanBola(5) ?>
</body>
</html>