<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan query
$fashion = query("SELECT * FROM fashion");
if (isset($_POST['cari'])) {
    $fashion = cari($_POST["keyword"]);
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section id="index">
    <h1 class="text-center">SELAMAT DATANG DI WEBSITE KAMI</h1>
    <a href="php/admin.php"><button class="btn btn-outline-warning">ADMIN</button></a>
        <form action="" method="post">
        <div class="input-group mb-3 mt-2 w-25">
            <input type="text" name="keyword" class="form-control" placeholder="Silahkan Masukkan Keyword" aria-label="Recipient's username" aria-describedby="button-addon2" autofocus autocomplete="off">
            <button class="btn btn-outline-warning" name="cari" type="submit" id="button-addon2">Cari</button>
        </div>            
        </form>
        <?php if(empty($fashion)) :  ?>
        <tr>
            <td colspan="7">
                <h1>Data tidak ditemukan</h1>
            </td>
        </tr>
        <?php else : ?>
            <div class="container">
                <div class="row">
        <?php foreach ($fashion as $fsh) : ?>
    <div class="card m-3" style="width: 18rem;">
            <img src="assets/img/<?= $fsh["gambar"]; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $fsh["deskripsi"] ?></h5>
                     <a href="php/detail.php?id=<?= $fsh['id']?>" class="btn btn-warning">Detail</a>
        </div>
    </div>            
        <?php endforeach; ?>
        <?php endif; ?>
</section>
</body>
</html>