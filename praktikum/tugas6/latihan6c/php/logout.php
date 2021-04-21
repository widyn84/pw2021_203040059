<?php
// Widy Nugraha
// 203040059
// Praktikum PW SHIFT JUM'AT 10
?>

<?php
session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
?>