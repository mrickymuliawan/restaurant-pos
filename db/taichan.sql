-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2017 at 06:14 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taichan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kode_kategori` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kode_kategori`, `kategori`) VALUES
(1, 'makanan'),
(2, 'minuman'),
(3, 'lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `kode_penjualan` varchar(50) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `total_item` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `kembali` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `profit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`kode_penjualan`, `tanggal`, `total_item`, `bayar`, `kembali`, `total_harga`, `profit`) VALUES
('0526387', '2017-02-18 11:49:32', 5, 60000, 1000, 0, 28000),
('0565791', '2017-02-18 11:52:54', 2, 22222, 722, 0, 8500),
('0869667', '2017-02-16 21:14:21', 5, 70, 4, 66, 34),
('1833349', '2017-02-17 12:38:39', 1, 30000, 10000, 20000, 19985),
('2468855', '2017-02-16 21:06:02', 3, 44, 1, 43, 17),
('3175871', '2017-02-17 20:55:01', 1, 22222, 4222, 18000, 17990),
('3216290', '2017-02-16 22:08:41', 1, 100000, 80000, 20000, 19985),
('3639826', '2017-02-18 11:54:42', 6, 70000, 8000, 62000, 30000),
('3873783', '2017-02-17 15:07:56', 8, 80000, 7000, 73000, 66958),
('4274904', '2017-02-17 19:26:56', 1, 20000, 2000, 18000, 17990),
('4677503', '2017-02-16 21:50:18', 3, 455, 395, 60, 30),
('5527632', '2017-02-17 12:40:40', 6, 200000, 86000, 114000, 113962),
('5648216', '2017-02-18 11:53:27', 2, 33333, 5333, 28000, 13000),
('6190017', '2017-02-16 21:03:42', 1, 22, 2, 20, 10),
('6521267', '2017-02-16 21:46:17', 2, 44, 21, 23, 12),
('7387799', '2017-02-16 22:08:04', 1, 44444, 14444, 30000, 29999),
('7518565', '2017-02-16 21:23:09', 1, 9, 6, 3, 2),
('7730593', '2017-02-17 14:32:30', 4, 70000, 7000, 63000, 62959),
('7920335', '2017-02-17 20:56:12', 1, 55555, 37555, 18000, 17990),
('8034730', '2017-02-18 11:50:58', 4, 50000, 11000, 0, 17000),
('8527007', '2017-02-16 21:33:42', 1, 3, 0, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualandetail`
--

CREATE TABLE `tbl_penjualandetail` (
  `kode_penjualan` varchar(50) DEFAULT NULL,
  `kode_produk` varchar(50) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `kuantitas` int(11) DEFAULT NULL,
  `harga_modal` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `diskon` float DEFAULT '0',
  `total` int(11) DEFAULT NULL,
  `profit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualandetail`
--

INSERT INTO `tbl_penjualandetail` (`kode_penjualan`, `kode_produk`, `nama_produk`, `kuantitas`, `harga_modal`, `harga_jual`, `diskon`, `total`, `profit`) VALUES
('6190017', '12', 'taichan kulitz', 1, 10, 20, NULL, 20, 10),
('2468855', '12', 'taichan kulitz', 1, 10, 20, NULL, 20, 10),
('2468855', '23', 'lontong', 1, 1, 3, NULL, 3, 2),
('2468855', '37582', 'sate taichan kompit', 1, 15, 20, NULL, 20, 5),
('0869667', '12', 'taichan kulitz', 3, 10, 20, NULL, 60, 30),
('0869667', '23', 'lontong', 2, 1, 3, NULL, 6, 4),
('7518565', '23', 'lontong', 1, 1, 3, NULL, 3, 2),
('8527007', '23', 'lontong', 1, 1, 3, NULL, 3, 2),
('6521267', '12', 'taichan kulitz', 1, 10, 20, NULL, 20, 10),
('6521267', '23', 'lontong', 1, 1, 3, NULL, 3, 2),
('4677503', '12', 'taichan kulitz', 3, 10, 20, NULL, 60, 30),
('7387799', '23', 'lontong', 1, 1, 30000, NULL, 30000, 29999),
('3216290', '37582', 'sate taichan kompit', 1, 15, 20000, NULL, 20000, 19985),
('1833349', '37582', 'sate taichan kompit', 1, 15, 20000, NULL, 20000, 19985),
('5527632', '23', 'lontong', 3, 1, 30000, NULL, 90000, 89997),
('5527632', '12', 'taichan kulitz', 2, 10, 2000, NULL, 4000, 3980),
('5527632', '37582', 'sate taichan kompit', 1, 15, 20000, NULL, 20000, 19985),
('7730593', '12', 'taichan kulitz', 1, 10, 20000, NULL, 20000, 19990),
('7730593', '23', 'lontong', 1, 1, 3000, NULL, 3000, 2999),
('7730593', '37582', 'sate taichan kompit', 2, 15, 20000, NULL, 40000, 39970),
('3873783', '12', 'taichan kulitz', 1, 10, 20000, NULL, 18000, 17990),
('3873783', '23', 'lontong', 2, 1, 3000, NULL, 6000, 5998),
('3873783', '37582', 'sate taichan kompit', 2, 15, 20000, NULL, 40000, 39970),
('3873783', '82263', 'teh botol', 3, 2000, 3000, NULL, 9000, 3000),
('4274904', '12', 'taichan kulitz', 1, 10, 20000, 0.1, 18000, 17990),
('3175871', '12', 'taichan kulitz', 1, 10, 0, 20000, 18000, 17990),
('7920335', '12', 'taichan kulitz', 1, 10, 20000, 0.1, 18000, 17990),
('0526387', '23', 'lontong', 1, 1000, 3000, 0, 3000, 2000),
('0526387', '40029', 'roti bakar', 2, 5000, 8000, 0, 16000, 6000),
('0526387', '37582', 'sate taichan kompit', 2, 10000, 20000, 0, 40000, 20000),
('8034730', '82263', 'teh botol', 1, 2000, 3000, 0, 3000, 1000),
('8034730', '40029', 'roti bakar', 2, 5000, 8000, 0, 16000, 6000),
('8034730', '37582', 'sate taichan kompit', 1, 10000, 20000, 0, 20000, 10000),
('0565791', '12', 'taichan kulitw', 1, 8000, 15000, 0.1, 13500, 5500),
('0565791', '40029', 'roti bakar', 1, 5000, 8000, 0, 8000, 3000),
('5648216', '37582', 'sate taichan kompit', 1, 10000, 20000, 0, 20000, 10000),
('5648216', '40029', 'roti bakar', 1, 5000, 8000, 0, 8000, 3000),
('3639826', '23', 'lontong', 2, 1000, 3000, 0, 6000, 4000),
('3639826', '40029', 'roti bakar', 2, 5000, 8000, 0, 16000, 6000),
('3639826', '37582', 'sate taichan kompit', 2, 10000, 20000, 0, 40000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `kode_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `harga_modal` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `diskon` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`kode_produk`, `nama_produk`, `kategori`, `harga_modal`, `harga_jual`, `diskon`) VALUES
('12', 'taichan kulitw', 'makanan', 8000, 15000, 0),
('23', 'lontong', 'makanan', 1000, 3000, 0),
('37582', 'sate taichan kompit', 'makanan', 10000, 20000, 0),
('40029', 'roti bakar', 'makanan', 5000, 8000, 0),
('45693', 'tai kucing', 'makanan', 3000, 6000, 0),
('54774', 'roti cane', 'makanan', 1000, 2000, 0),
('82263', 'teh botol', 'minuman', 2000, 3000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`kode_penjualan`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
