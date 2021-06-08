<?php
// Widy Nugraha
// 203040059
// Praktikum PW SHIFT JUM'AT 10
?>

<?php
session_start();
require 'functions.php';
// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];


// ambil username berdasarkan id
$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
$row = mysqli_fetch_assoc($result);

// cek cookie dan username
if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
 }
}

// melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
// login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            // jika remember me dicentang
            if(isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }
        
            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
            }
            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
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
<section id="login">
<div class="container border border-warning">
<form action ="" method="post">
    <?php if (isset($error)) : ?>
        <p style = "color: red; font-style: italic;">Username atau Password salah </P>
    <?php endif; ?>
    <table>
    <div class="input-group mb-3 w-50">
        <span class="input-group-text" id="basic-addon1">Username</span>
        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" autofocus autocomplete="off">
    </div>
    <div class="input-group mb-3 w-50">
        <span class="input-group-text" id="basic-addon1">Password</span>
        <input type="password" name="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>        
    </table>
    <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember me</label>
    </div>
    <button type="submit" name="submit" class="btn btn-outline-warning">Login</button>
    <button type="submit" name="kembali" class="btn btn-outline-warning"><a href="../index.php">Kembali</a></button>
</form>
<div class="registrasi">
        <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
</div>
</div>
</section>
</body>
</html>