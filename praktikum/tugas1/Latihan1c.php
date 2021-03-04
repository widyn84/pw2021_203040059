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
    <title>Document</title>
    <style>
    .lingkaran {
        height: 75px;
        width: 75px;
        background-color: red;
        border-radius: 50%;
        display: inline-block;
        text-align: center;
}
    </style>
</head>
<body>
<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <=$i; $j++){
         echo "<span class = lingkaran>$i</span>";
    }
    echo "<br>";
}
?>
</body>
</html>