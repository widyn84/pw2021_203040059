<?php
// Widy Nugraha
// 203040059
// Praktikum PW SHIFT JUM'AT 10
?>

<?php
require 'functions.php';

if (isset($_POST["register"])) {
    
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
              </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIQLO</title>
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
<form action="" method="post">
    <table>
        <tr>
            <td><label for="username">USERNAME</label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="password">PASSWORD</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    <button type="submit" name="register">REGISTER</button>
</form>
</div>
</body>
</html>