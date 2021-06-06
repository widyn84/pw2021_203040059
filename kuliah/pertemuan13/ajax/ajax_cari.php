<?php
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 13 - 06 Juni 2021
Mempelajari tentang Ajax dan Upload Gambar
*/
?>

<?php
require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>
<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php if(empty($mahasiswa)) : ?>
        <tr>
            <td colspan="4"><p style="color: red; font-style: italic;">Data Mahasiswa tidak ditemukan</p></td>
        </tr>
        <?php endif; ?>

        <?php $i = 1; 
        foreach($mahasiswa as $m) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
            <td><?= $m['nama']; ?></td>
            <td>
                <a href="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>