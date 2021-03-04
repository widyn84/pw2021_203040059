<?php
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 4 - 04 Maret 2021
Mempelajari tentang Function
*/
?>

<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
//    echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time ();
// echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime()
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 1, 17, 2001));

// strtotime
echo date("l", strtotime("17 Jan 2001"));
?>