<?php
// Widy Nugraha
// 203040059
// Praktikum PW SHIFT JUM'AT 10
?>

<?php
session_start();
session_destroy();
header("Location: ../index.php");
die;
?>