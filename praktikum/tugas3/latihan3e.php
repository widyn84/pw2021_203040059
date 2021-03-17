<?php
// Widy Nugraha
// 203040059
// Shift Jum'at Jam 10.00
?>

<?php
$fashion =[
    [
        "gambar" => "hoodie1.jpg",
        "deskripsi" => "PULLOVER SWEAT HOODIE",
        "harga" => "Rp.399.000",
        "kategori" => "OUTWEAR",
        "jenkel" => "PRIA"
    ],
    [
        "gambar" => "tshirts1.jpg",
        "deskripsi" => "T-SHIRT CREW NECK LENGAN PENDEK",
        "harga" => "Rp.149.000",
        "kategori" => "T-SHIRTS",
        "jenkel" => "PRIA"
    ],
    [
        "gambar" => "kemeja1.jpg",
        "deskripsi" => "KEMEJA FLANNEL LENGAN PANJANG",
        "harga" => "Rp.299.000",
        "kategori" => "KEMEJA",
        "jenkel" => "PRIA"
    ],
    [
        "gambar" => "jeans1.jpg",
        "deskripsi" => "JEANS SKINNY FIT ULTRA STRETCH WARNA",
        "harga" => "Rp.199.000",
        "kategori" => "JEANS",
        "jenkel" => "PRIA"
    ],
    [
        "gambar" => "bawahan1.jpg",
        "deskripsi" => "CELANA PENDEK NYLON GEARED",
        "harga" => "Rp.299.000",
        "kategori" => "CELANA PENDEK",
        "jenkel" => "PRIA"
    ],
    [
        "gambar" => "hoodie2.jpg",
        "deskripsi" => "WOMEN JAKET SWEAT HOODIE RETSLETING LENGAN PANJANG",
        "harga" => "Rp.299.000",
        "kategori" => "OUTWEAR",
        "jenkel" => "WANITA"
    ],
    [
        "gambar" => "kemeja2.jpg",
        "deskripsi" => "WOMEN KEMEJA FLANNEL KOTAK LENGAN PANJANG",
        "harga" => "Rp.299.000",
        "kategori" => "KEMEJA",
        "jenkel" => "WANITA"
    ],
    [
        "gambar" => "tshirts2.jpg",
        "deskripsi" => "WOMEN T-SHIRT CREW NECK LENGAN PENDEK",
        "harga" => "Rp.149.000",
        "kategori" => "TSHIRTS",
        "jenkel" => "WANITA"
    ],
    [
        "gambar" => "jeans2.jpg",
        "deskripsi" => "WOMEN JEANS HIGH RISE SKINNY ANKLE",
        "harga" => "Rp.449.000",
        "kategori" => "JEANS",
        "jenkel" => "WANITA"
    ],
    [
        "gambar" => "bawahan2.jpg",
        "deskripsi" => "WOMEN CELANA PENDEK TUCK",
        "harga" => "Rp.299.000",
        "kategori" => "CELANA PENDEK",
        "jenkel" => "WANITA"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered border-warning">
    <tr>
        <th>NO</th>
        <th>GAMBAR</th>
        <th>DESKRIPSI</th>
        <th>HARGA</th>
        <th>KATEGORI</th>
        <th>JENIS KELAMIN</th>
    </tr>
    
    <?php $i = 1; ?>
  
    <?php foreach ($fashion as $fash) : ?>
    
        <tr>
            <td><?= $i ?></td>
            <td>
            <img src= "img/<?= $fash["gambar"];?>">
            </td>
            <td><?= $fash["deskripsi"]?></td>
            <td><?= $fash["harga"]?></td>
            <td><?= $fash["kategori"]?></td>
            <td><?= $fash["jenkel"]?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
    
</body>
</html>