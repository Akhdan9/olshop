-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 12:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop_xir4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'akhdan', 'wibu123'),
(2, 'baihaqi', 'wibu123');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `gambar`, `harga`, `stok`, `id_kategori`) VALUES
(1, 'Asus', 'f402wa-ga019t.jpg', '7500000', 6, 1),
(4, 'Lenovo Ideapad', 'Lenovo-IdeaPad-320-15ABR-80XS0024US-15_6-Laptop-AMD-A12-Series-CPU-8GB-RAM-1TB-HDD-Platinum-Gray.jpg', '9000000', 6, 1),
(5, 'Windows 10', 'windows.jpg', '750000', 10, 4),
(6, 'Asus M2', 'resizer.jpg', '7500000', 8, 3),
(7, 'Flashdisk', 'fd.jpg', '500000', 8, 2),
(8, 'Samsung', 'samsung-notebook-9-lidfull-640x640_jph.jpg', '9000000', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Laptop'),
(2, 'Accesories'),
(3, 'SmartPhone'),
(4, 'Software'),
(5, 'Pulsa');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `bukti` varchar(50) NOT NULL,
  `grandtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `id_pembeli`, `tgl`, `bukti`, `grandtotal`) VALUES
(1, 6, '2019-01-31', '', 0),
(2, 6, '2019-01-31', '', 0),
(3, 6, '2019-01-31', '', 0),
(4, 6, '2019-01-31', '', 0),
(5, 6, '2019-01-31', '', 0),
(6, 6, '2019-01-31', '', 0),
(7, 6, '2019-01-31', '', 0),
(8, 6, '2019-01-31', '', 0),
(9, 6, '2019-01-31', '', 0),
(10, 6, '2019-01-31', '', 0),
(11, 6, '2019-01-31', '', 0),
(12, 6, '2019-01-31', '', 0),
(13, 6, '2019-01-31', '', 0),
(14, 6, '2019-01-31', '', 0),
(15, 6, '2019-02-01', '', 0),
(16, 6, '2019-02-01', '', 0),
(17, 6, '2019-02-01', '', 0),
(18, 6, '2019-02-01', '', 0),
(19, 6, '2019-02-01', '', 0),
(20, 6, '2019-02-01', '', 0),
(21, 6, '2019-02-01', '', 16500000),
(22, 6, '2019-02-01', '', 7500000),
(23, 6, '2019-02-01', '', 18000000),
(24, 6, '2019-02-01', '', 0),
(25, 6, '2019-02-01', '', 36000000),
(26, 6, '2019-02-01', '', 0),
(27, 6, '2019-02-01', '', 750000),
(28, 6, '2019-02-01', '', 0),
(29, 6, '2019-02-01', '', 0),
(30, 6, '2019-02-01', '', 0),
(31, 6, '2019-02-01', '', 9000000),
(32, 6, '2019-02-04', '', 9000000),
(33, 6, '2019-02-04', '', 9000000),
(34, 6, '2019-02-04', '', 750000),
(35, 6, '2019-02-04', '', 7500000),
(36, 6, '2019-02-04', '', 750000),
(37, 6, '2019-02-04', '', 750000),
(38, 6, '2019-02-04', '', 9000000),
(51, 6, '2019-02-07', '', 9000000),
(65, 6, '2019-02-08', '', 8000000),
(66, 6, '2019-02-08', '', 9000000),
(67, 6, '2019-02-09', '', 0),
(68, 6, '2019-02-09', '', 0),
(69, 6, '2019-02-09', '', 7500000),
(70, 6, '2019-04-27', '', 750000),
(71, 6, '2019-04-29', '', 0),
(72, 6, '2019-04-29', '', 0),
(73, 6, '2019-04-29', '', 0),
(74, 6, '2019-04-29', '', 0),
(75, 6, '2019-04-29', '', 0),
(76, 6, '2019-04-29', '', 0),
(77, 6, '2019-04-29', '', 0),
(78, 6, '2019-04-29', '', 0),
(79, 6, '2019-04-29', '', 0),
(80, 6, '2019-04-29', '', 0),
(81, 6, '2019-04-29', '', 0),
(82, 6, '2019-04-29', '', 0),
(83, 6, '2019-04-29', '', 0),
(84, 6, '2019-04-29', '', 0),
(85, 6, '2019-04-29', '', 0),
(86, 6, '2019-04-29', '', 0),
(87, 6, '2019-04-29', '', 0),
(88, 6, '2019-04-29', '', 0),
(89, 6, '2019-04-29', '', 0),
(90, 6, '2019-04-29', '', 7500000);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `alamat`, `no_telp`, `username`, `password`) VALUES
(1, 'Kucing', 'Jl.Sama Dia', '0817537781', 'kucing.kecil', 'kucing123'),
(5, 'Akhdan Baihaqi', 'Gadang', '0817537781', '__akhdan09', 'p4sw0rd'),
(6, 'Muhammad Akhdan Baihaqi', 'gadang', '0817537781', 'siswa', 'admin'),
(52, 'Arya', 'bulak', '0182839712937', 'majumapan', 'maju');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `id_nota`, `id_barang`, `qty`) VALUES
(1, 1, 1, 2),
(2, 2, 1, 2),
(3, 3, 1, 2),
(4, 4, 1, 2),
(5, 5, 1, 2),
(6, 6, 1, 2),
(7, 7, 1, 2),
(8, 8, 1, 2),
(9, 9, 1, 2),
(10, 10, 1, 2),
(11, 11, 1, 2),
(12, 12, 1, 2),
(13, 13, 1, 2),
(14, 14, 1, 2),
(15, 15, 1, 1),
(16, 15, 4, 1),
(17, 16, 1, 1),
(18, 16, 4, 1),
(19, 17, 1, 1),
(20, 17, 4, 1),
(21, 18, 1, 1),
(22, 18, 4, 1),
(23, 19, 1, 1),
(24, 19, 4, 1),
(25, 20, 1, 1),
(26, 20, 4, 1),
(27, 21, 1, 1),
(28, 21, 4, 1),
(29, 22, 1, 1),
(30, 23, 4, 2),
(31, 25, 4, 4),
(32, 27, 5, 1),
(33, 31, 8, 1),
(34, 32, 4, 1),
(35, 33, 4, 1),
(36, 34, 5, 1),
(37, 35, 1, 1),
(38, 36, 5, 1),
(39, 37, 5, 1),
(40, 38, 4, 1),
(41, 51, 4, 1),
(42, 65, 1, 1),
(43, 65, 1, 1),
(44, 66, 8, 1),
(45, 69, 1, 1),
(46, 70, 5, 1),
(99, 90, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`),
  ADD KEY `id_nota` (`id_nota`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
