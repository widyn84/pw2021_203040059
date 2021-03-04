<?php
/* 
Widy Nugraha
203040059
Jum'at 10
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1b</title>
</head>
<body>
<table border = "1" cellspacing = "0" cellpadding = "0">
    <tr>
        <th></th>
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <th>Kolom  <?= $i  ?> </th>
        <?php endfor; ?>
    </tr>
<tbody>
<?php
for ($j = 1; $j <= 5; $j++){
    echo "<tr>";
    echo "<th>Baris $j </th>";
    for ($k = 1; $k <= 5; $k++){
        echo "<td>Baris $j, Kolom $k</td>";
    }
}

    ?>
    </table>
</body>
</html>