<?php
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 9 - 27 April 2021
Mempelajari tentang INSERT & DELETE
*/
?>

<?php
require 'functions.php';

$id =$_GET["id"];

if( hapus($id) > 0 ) {
    echo "
    <script>
       alert('Data berhasil dihapus!');
       document.location.href = 'index.php';
    </script>
    ";    
} else {
    echo "
    <script>
       alert('Data gagal dihapus!');
       document.location.href = 'index.php';
    </script>
    ";    
}

?>