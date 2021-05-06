<?php
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 11 - 06 Mei 2021
Mempelajari tentang DELETE,UPDATE, DAN SEARCHING
*/
?>

<?php
require 'functions.php';

// jika tidak ada id di url
if(!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// mengambil id dari URL
$id = $_GET['id'];

if  (hapus($id) > 0 ) {
    echo "<script>
          alert('data berhasil dihapus!');
          document.location.href = 'index.php';
          </script>";
} else {
     echo "<script>
     alert('data gagal dihapus!');
     document.location.href = 'index.php';
     </script>";
}
?>