<?php
/* 
Widy Nugraha
203040059
Jum'at 10.00
*/
?>

<?php
function hitungDeterminan($a, $b, $c, $d)
{
    echo "<table style='border-left:2px solid black; border-right:2px solid black;' cellspacing='5' cellpadding='5'>
    <tr>
        <td>$a</td>
        <td>$b</td>
    </tr>
    <tr>
        <td>$c</td>
        <td>$d</td>
    </tr>
    </table>";
    $determinan = (($a *$d) - ($b * $c));
    echo "<p><b>Determinan dari matriks tersebut adalah $determinan</b></p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d</title>
    <style>
    .matriks {
        border: 2px solid black;
    }
    </style>
</head>
<body>
    <div class = "matriks">
    <?php
    hitungDeterminan(1, 2, 3, 4)
    ?>
    </div>
</body>
</html>