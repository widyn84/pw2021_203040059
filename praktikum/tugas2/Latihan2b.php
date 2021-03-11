<?php
/* 
Widy Nugraha
203040059
Jum'at 10.00
*/
?>

<?php
$jawabanIsset = "Isset adalah =isset() digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset maka variabel akan mengembalikan nilai true, sebaliknya akan bernilai false<br><br>";
$jawabanEmpty = "Empty adalah =empty(), digunakan untuk memerikasa apakah variabel form tidak dikirim atau tidak berisi data alias kosong. berbeda denagn isset(), yang mengembalikan nilai false pada variabel yang di-unset, empty() akan mengembalikan nilai true. ";

$GLOBALS["isset"] = $jawabanIsset;
$GLOBALS["empty"] = $jawabanEmpty;


function soal($style){
    echo "<div class = '$style'>
        <h1>" . $GLOBALS['isset'] . "</h1>
        <h1>" . $GLOBALS['empty'] . "</h1>
        </div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b</title>
    <style>
        .style {
            border: 2px solid black;
            font-size: 12px;
            color : orangered;
            font-family:'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    <?php
        echo soal("style");
    ?>
</body>
</html>

