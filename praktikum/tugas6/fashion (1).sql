-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 06:14 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040059`
--

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`id`, `gambar`, `deskripsi`, `harga`, `kategori`, `jenis_kelamin`) VALUES
(1, 'hoodie1.jpg', 'PULLOVER SWEAT HOODIE', 'Rp.399.000', 'OUTWEAR', 'PRIA'),
(2, 'tshirts1.jpg', 'T-SHIRT CREW NECK LENGAN PENDEK', 'Rp.149.000', 'T-SHIRTS', 'PRIA'),
(3, 'kemeja1.jpg', 'KEMEJA FLANNEL LENGAN PANJANG', 'Rp.299.000', 'KEMEJA', 'PRIA'),
(4, 'jeans1.jpg', 'JEANS SKINNY FIT ULTRA STRETCH WARNA', 'Rp.199.000', 'JEANS', 'PRIA'),
(5, 'bawahan1.jpg', 'CELANA PENDEK NYLON GEARED', 'Rp.299.000', 'CELANA PENDEK', 'PRIA'),
(6, 'hoodie2.jpg', 'WOMEN JAKET SWEAT HOODIE RETSLETING LENGAN PANJANG', 'Rp.299.000', 'OUTWEAR', 'WANITA'),
(7, 'kemeja2.jpg', 'WOMEN KEMEJA FLANNEL KOTAK LENGAN PANJANG', 'Rp.299.000', 'KEMEJA', 'WANITA'),
(8, 'tshirts2.jpg', 'WOMEN T-SHIRT CREW NECK LENGAN PENDEK', 'Rp.149.000', 'TSHIRTS', 'WANITA'),
(9, 'jeans2.jpg', 'WOMEN JEANS HIGH RISE SKINNY ANKLE', 'Rp.449.000', 'JEANS', 'WANITA'),
(10, 'bawahan2.jpg', 'WOMEN CELANA PENDEK TUCK', 'Rp.299.000', 'CELANA PENDEK', 'WANITA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
