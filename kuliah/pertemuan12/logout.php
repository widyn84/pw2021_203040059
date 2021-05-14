<?php
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 12 - 14 Mei 2021
Mempelajari tentang LOGIN DAN REGISTRASI
*/
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>