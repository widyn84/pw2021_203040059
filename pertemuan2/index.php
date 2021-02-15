<?php 
/*
Widy Nugraha
203040059
https://github.com/widyn84/pw2021_203040059
Pertemuan 2 - 15 Februari 2021
Mempelajari tentang sintaks dasar PHP 
*/
?>

<?php
// Pertemuan 2 - PHP dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP didalam HTMl
// 2. HTML didalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Widy Nugraha";
// echo "Halo, nama saya $nama";

// Operator
// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabung string/ concatenation/ concat
// .
// $nama_depan = "Widy";
// $nama_belakang = "Nugraha";
// echo $nama_depan." ".$nama_belakang;

// Assigment
// =, +=, -=, *=, /= %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Widy";
// $nama .= " ";
// $nama .= "Nugraha";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// identitas
// var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>