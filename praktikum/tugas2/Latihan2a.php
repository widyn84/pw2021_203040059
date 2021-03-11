<?php
/* 
Widy Nugraha
203040059
Jum'at 10.00
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2a</title>
    <style>
        .style1 {
            font-size: 28px;
            font-family: Arial, Helvetica, sans-serif;
            color: #8c782d;
            font-style: italic, bolder;

        }
        .style2 {
            border: 3px solid black;
            box-shadow: 4px 4px 4px 4px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php
        function gantiStyle($tulisan, $style1 , $style2 )
        {
        echo "<div class='$style1'>";
        echo "<h3 class='$style2'>$tulisan</h3>";
            
                

        }
    ?>

    <?php
    echo gantiStyle("Selamat datang di praktikum PW", "style1", "style2");
    ?>
</body>
</html>