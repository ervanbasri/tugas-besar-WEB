-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 07:25 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugasbesar`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE IF NOT EXISTS `arsip` (
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `noktp` varchar(20) NOT NULL,
  `cekin` varchar(10) NOT NULL,
  `cekout` varchar(10) NOT NULL,
  `bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`nama`, `alamat`, `nohp`, `noktp`, `cekin`, `cekout`, `bayar`) VALUES
('ervan', 'jlan suramadu surabaya', '081234764812', '123423786182', '06/24/2015', '06/25/2015', '250000'),
('ervan', 'jln merapi', '081234764812', '3498023247734', '06/01/2015', '06/03/2015', '600000'),
('ervan', 'jln jember.ac.id', '081234764812', '87582364672837', '06/02/2015', '06/03/2015', '250000');

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE IF NOT EXISTS `bayar` (
  `nomor` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`nomor`, `nama`) VALUES
(0, ''),
(11111111, 'sayoko'),
(12131231, 'qwerty'),
(12332112, 'eeeq'),
(72368178, 'saya'),
(1233123512, 'ervan basri'),
(2147483647, 'ervan');

-- --------------------------------------------------------

--
-- Table structure for table `harga_kamar`
--

CREATE TABLE IF NOT EXISTS `harga_kamar` (
  `A1` mediumtext NOT NULL,
  `A2` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga_kamar`
--

INSERT INTO `harga_kamar` (`A1`, `A2`) VALUES
('250000', '3000000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `noktp` bigint(20) NOT NULL,
  `cekin` varchar(12) NOT NULL,
  `cekout` varchar(12) NOT NULL,
  `bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`nama`, `alamat`, `nohp`, `noktp`, `cekin`, `cekout`, `bayar`) VALUES
('ervan', 'jlan suramadu surabaya', '081234764812', 123423786182, '06/24/2015', '06/25/2015', '250000'),
('ervann', 'jln jember.ac.id', '081234764812', 87582364672837, ' 06/02/2015', ' 06/03/2015', ' 250000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `username`, `password`, `level`) VALUES
(15, 'qwerty', 'qwerty', '  qwerty', '4af8b33710b18017a6635b629ad9e025', '  resepsionis'),
(16, 'qwerty', 'jln merapi', '1', 'c4ca4238a0b923820dcc509a6f75849b', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
 ADD PRIMARY KEY (`noktp`);

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
 ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`noktp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
