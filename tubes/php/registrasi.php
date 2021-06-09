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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<section id="registrasi">
<div class="container border border-warning">
<form action="" method="post">
    <table>
    <div class="input-group mb-3 w-50">
        <span class="input-group-text" id="basic-addon1">Username</span>
        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" autofocus autocomplete="off">
    </div>
    <div class="input-group mb-3 w-50">
        <span class="input-group-text" id="basic-addon1">Password</span>
        <input type="password" name="password1" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>   
    <div class="input-group mb-3 w-50">
        <span class="input-group-text" id="basic-addon1">Password</span>
        <input type="password" name="password2" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>   
    </table>
    <button type="submit" name="register" class="btn btn-outline-warning">Register</button>
    <button type="submit" name="kembali" class="btn btn-outline-warning"><a href="login.php">Kembali</a></button>
</form>
</div>
</section>
</body>
</html>