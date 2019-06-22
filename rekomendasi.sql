-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2018 at 03:15 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekomendasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admiin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admiin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `alamat_user`
--

CREATE TABLE `alamat_user` (
  `id_amalat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jalan` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kota` text NOT NULL,
  `provinsi` text NOT NULL,
  `kode_pos` text NOT NULL,
  `tanggal_pembuatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat_user`
--

INSERT INTO `alamat_user` (`id_amalat`, `id_user`, `jalan`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `kode_pos`, `tanggal_pembuatan`) VALUES
(1, 1, 'Kh. Abdul Rohman VII no 12', 'Muktiharjo Kidul', 'Pedurungan', 'Semarang', 'Jawa Tengah', '50197', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `data_training`
--

CREATE TABLE `data_training` (
  `id` int(11) NOT NULL,
  `merk` int(20) NOT NULL,
  `ram` int(11) NOT NULL,
  `vga` int(11) NOT NULL,
  `hdd` int(11) NOT NULL,
  `lcd` int(11) NOT NULL,
  `processor` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `rekomen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_training`
--

INSERT INTO `data_training` (`id`, `merk`, `ram`, `vga`, `hdd`, `lcd`, `processor`, `rate`, `rekomen`) VALUES
(1, 1, 2, 1, 750, 14, 1, 2, 'TIDAK'),
(2, 1, 2, 2, 500, 11, 1, 1, 'TIDAK'),
(3, 1, 2, 1, 320, 14, 2, 2, 'TIDAK'),
(4, 1, 4, 1, 500, 15, 2, 2, 'TIDAK'),
(5, 1, 8, 1, 1000, 15, 3, 2, 'TIDAK'),
(6, 1, 8, 1, 1000, 15, 4, 4, 'TIDAK'),
(7, 2, 2, 1, 500, 14, 2, 2, 'TIDAK'),
(8, 2, 4, 2, 500, 14, 2, 2, 'TIDAK'),
(9, 2, 16, 1, 1000, 15, 4, 4, 'TIDAK'),
(10, 2, 16, 1, 1000, 15, 4, 5, 'TIDAK'),
(11, 4, 2, 1, 320, 14, 1, 2, 'TIDAK'),
(12, 6, 4, 1, 320, 11, 2, 1, 'TIDAK'),
(13, 1, 2, 2, 160, 14, 1, 2, 'TIDAK'),
(14, 1, 4, 1, 500, 14, 2, 2, 'TIDAK'),
(15, 1, 2, 1, 500, 14, 2, 2, 'TIDAK'),
(16, 1, 4, 1, 512, 17, 2, 2, 'TIDAK'),
(17, 1, 4, 1, 1000, 15, 3, 2, 'TIDAK'),
(18, 1, 4, 1, 1000, 14, 3, 2, 'TIDAK'),
(19, 1, 64, 1, 2000, 15, 4, 2, 'TIDAK'),
(20, 1, 2, 2, 160, 14, 1, 1, 'TIDAK'),
(21, 1, 2, 2, 320, 14, 1, 1, 'TIDAK'),
(22, 1, 1, 2, 500, 14, 1, 1, 'TIDAK'),
(23, 1, 4, 1, 500, 14, 2, 1, 'TIDAK'),
(24, 1, 2, 2, 500, 14, 1, 2, 'TIDAK'),
(25, 1, 4, 1, 500, 14, 3, 2, 'TIDAK'),
(26, 1, 4, 1, 1000, 15, 4, 2, 'TIDAK'),
(27, 2, 8, 1, 1000, 15, 4, 2, 'TIDAK'),
(28, 2, 2, 1, 500, 24, 1, 2, 'TIDAK'),
(29, 2, 4, 2, 1000, 15, 1, 2, 'TIDAK'),
(30, 2, 4, 2, 320, 14, 1, 2, 'TIDAK'),
(31, 2, 2, 2, 500, 14, 1, 2, 'TIDAK'),
(32, 2, 4, 2, 320, 14, 1, 2, 'TIDAK'),
(33, 2, 4, 1, 500, 14, 2, 2, 'TIDAK'),
(34, 2, 6, 1, 1000, 8, 3, 2, 'TIDAK'),
(35, 2, 4, 1, 1000, 14, 3, 2, 'TIDAK'),
(36, 2, 4, 1, 500, 14, 3, 2, 'TIDAK'),
(37, 2, 4, 1, 800, 14, 3, 2, 'TIDAK'),
(38, 2, 64, 1, 1000, 15, 3, 2, 'TIDAK'),
(39, 2, 8, 1, 500, 15, 4, 2, 'TIDAK'),
(40, 2, 4, 1, 500, 14, 4, 2, 'TIDAK'),
(41, 2, 4, 1, 750, 14, 4, 2, 'TIDAK'),
(42, 2, 6, 1, 1000, 17, 4, 2, 'TIDAK'),
(43, 2, 8, 1, 1000, 15, 4, 2, 'TIDAK'),
(44, 2, 16, 1, 1000, 16, 4, 2, 'TIDAK'),
(45, 2, 16, 1, 1000, 15, 4, 2, 'TIDAK'),
(46, 2, 8, 1, 1000, 15, 4, 2, 'TIDAK'),
(47, 2, 8, 2, 2000, 15, 4, 2, 'TIDAK'),
(48, 2, 2, 1, 500, 4, 1, 1, 'TIDAK'),
(49, 2, 2, 2, 500, 15, 2, 1, 'TIDAK'),
(50, 2, 8, 1, 1000, 12, 4, 1, 'TIDAK'),
(51, 2, 8, 1, 2060, 10, 4, 2, 'TIDAK'),
(52, 2, 8, 1, 650, 15, 4, 2, 'TIDAK'),
(53, 2, 8, 1, 1000, 14, 4, 2, 'TIDAK'),
(54, 2, 64, 1, 1000, 15, 4, 1, 'TIDAK'),
(55, 3, 2, 1, 500, 12, 2, 2, 'TIDAK'),
(56, 3, 2, 1, 500, 14, 3, 2, 'TIDAK'),
(57, 3, 4, 1, 1000, 14, 3, 2, 'TIDAK'),
(58, 3, 6, 2, 1000, 15, 3, 2, 'TIDAK'),
(59, 3, 2, 2, 500, 10, 1, 1, 'TIDAK'),
(60, 4, 2, 1, 300, 10, 1, 2, 'TIDAK'),
(61, 4, 2, 1, 50, 14, 2, 2, 'TIDAK'),
(62, 4, 4, 1, 500, 15, 2, 2, 'TIDAK'),
(63, 4, 4, 2, 500, 16, 2, 2, 'TIDAK'),
(64, 4, 2, 2, 500, 14, 2, 2, 'TIDAK'),
(65, 4, 4, 1, 500, 14, 3, 2, 'TIDAK'),
(66, 4, 4, 2, 60, 14, 3, 2, 'TIDAK'),
(67, 4, 2, 1, 500, 14, 2, 1, 'TIDAK'),
(68, 4, 2, 1, 2000, 18, 2, 1, 'TIDAK'),
(69, 4, 2, 2, 320, 14, 2, 1, 'TIDAK'),
(70, 4, 4, 1, 1000, 14, 3, 2, 'TIDAK'),
(71, 4, 6, 2, 500, 16, 2, 2, 'TIDAK'),
(72, 5, 2, 1, 500, 14, 1, 2, 'TIDAK'),
(73, 5, 4, 1, 500, 15, 2, 2, 'TIDAK'),
(74, 5, 2, 1, 500, 14, 2, 2, 'TIDAK'),
(75, 5, 4, 1, 500, 14, 2, 2, 'TIDAK'),
(76, 5, 4, 2, 1080, 14, 2, 2, 'TIDAK'),
(77, 5, 4, 1, 1000, 14, 3, 2, 'TIDAK'),
(78, 5, 4, 1, 500, 14, 3, 2, 'TIDAK'),
(79, 5, 2, 2, 1000, 15, 3, 2, 'TIDAK'),
(80, 5, 4, 1, 500, 14, 4, 2, 'TIDAK'),
(81, 5, 4, 1, 1000, 14, 4, 2, 'TIDAK'),
(82, 5, 2, 1, 500, 11, 1, 1, 'TIDAK'),
(83, 5, 4, 1, 500, 11, 2, 1, 'TIDAK'),
(84, 5, 8, 1, 1000, 14, 3, 1, 'TIDAK'),
(85, 5, 4, 2, 128, 14, 3, 1, 'TIDAK'),
(86, 5, 4, 1, 500, 14, 1, 1, 'TIDAK'),
(87, 5, 2, 2, 80, 13, 1, 2, 'TIDAK'),
(88, 6, 1, 1, 60, 15, 3, 2, 'TIDAK'),
(89, 6, 2, 2, 500, 13, 2, 1, 'TIDAK'),
(90, 6, 2, 2, 300, 13, 2, 1, 'TIDAK'),
(91, 6, 4, 1, 320, 14, 3, 1, 'TIDAK'),
(92, 1, 6, 1, 750, 14, 3, 4, 'YA'),
(93, 1, 8, 1, 1000, 14, 3, 5, 'YA'),
(94, 1, 4, 1, 1000, 14, 4, 4, 'YA'),
(95, 1, 8, 1, 1000, 15, 4, 4, 'YA'),
(96, 1, 8, 1, 1000, 15, 4, 5, 'YA'),
(97, 1, 16, 1, 750, 14, 4, 4, 'YA'),
(98, 2, 4, 1, 1000, 11, 2, 5, 'YA'),
(99, 2, 4, 1, 500, 15, 2, 5, 'YA'),
(100, 2, 6, 1, 500, 14, 2, 4, 'YA'),
(101, 2, 2, 2, 500, 15, 2, 3, 'YA'),
(102, 2, 2, 2, 500, 14, 2, 4, 'YA'),
(103, 2, 2, 2, 500, 11, 2, 4, 'YA'),
(104, 2, 4, 2, 1000, 14, 2, 4, 'YA'),
(105, 2, 4, 2, 500, 14, 2, 5, 'YA'),
(106, 2, 8, 2, 1000, 15, 2, 5, 'YA'),
(107, 2, 2, 1, 1000, 14, 3, 5, 'YA'),
(108, 2, 4, 1, 750, 14, 3, 3, 'YA'),
(109, 2, 4, 1, 500, 15, 3, 3, 'YA'),
(110, 2, 4, 1, 1000, 14, 3, 4, 'YA'),
(111, 2, 4, 1, 500, 14, 3, 4, 'YA'),
(112, 2, 4, 1, 500, 11, 3, 4, 'YA'),
(113, 2, 4, 1, 500, 14, 3, 4, 'YA'),
(114, 2, 4, 1, 1000, 14, 3, 4, 'YA'),
(115, 2, 4, 1, 500, 14, 3, 4, 'YA'),
(116, 2, 4, 1, 500, 15, 3, 4, 'YA'),
(117, 2, 4, 1, 1000, 14, 3, 4, 'YA'),
(118, 2, 4, 1, 500, 14, 3, 4, 'YA'),
(119, 2, 4, 1, 1000, 15, 3, 4, 'YA'),
(120, 2, 4, 1, 1000, 14, 3, 5, 'YA'),
(121, 2, 4, 1, 500, 14, 3, 5, 'YA'),
(122, 2, 4, 1, 500, 11, 3, 5, 'YA'),
(123, 2, 4, 1, 1000, 14, 3, 5, 'YA'),
(124, 2, 4, 1, 750, 14, 3, 5, 'YA'),
(125, 2, 4, 1, 1000, 11, 3, 5, 'YA'),
(126, 2, 8, 1, 1000, 15, 3, 4, 'YA'),
(127, 2, 8, 1, 1000, 14, 3, 4, 'YA'),
(128, 2, 8, 1, 1000, 14, 3, 5, 'YA'),
(129, 2, 8, 1, 1000, 14, 4, 5, 'YA'),
(130, 2, 8, 1, 1000, 15, 4, 5, 'YA'),
(131, 2, 16, 1, 1000, 15, 4, 4, 'YA'),
(132, 2, 16, 1, 1000, 15, 4, 5, 'YA'),
(133, 2, 16, 1, 1000, 14, 4, 5, 'YA'),
(134, 2, 16, 1, 1000, 15, 4, 5, 'YA'),
(135, 2, 8, 2, 1000, 15, 4, 5, 'YA'),
(136, 2, 8, 2, 750, 15, 4, 5, 'YA'),
(137, 2, 16, 2, 1000, 15, 4, 5, 'YA'),
(138, 3, 4, 1, 500, 14, 3, 4, 'YA'),
(139, 3, 4, 1, 1000, 14, 3, 5, 'YA'),
(140, 3, 8, 1, 1000, 15, 3, 4, 'YA'),
(141, 3, 8, 1, 1000, 14, 4, 5, 'YA'),
(142, 3, 8, 2, 1000, 14, 4, 5, 'YA'),
(143, 4, 2, 1, 1000, 11, 2, 5, 'YA'),
(144, 4, 4, 1, 320, 15, 2, 3, 'YA'),
(145, 4, 4, 1, 1000, 14, 2, 4, 'YA'),
(146, 4, 4, 1, 500, 15, 2, 4, 'YA'),
(147, 4, 4, 1, 500, 14, 2, 4, 'YA'),
(148, 4, 4, 1, 750, 14, 3, 3, 'YA'),
(149, 4, 4, 1, 500, 14, 3, 4, 'YA'),
(150, 4, 4, 1, 500, 14, 3, 5, 'YA'),
(151, 4, 6, 1, 1000, 14, 3, 5, 'YA'),
(152, 4, 4, 1, 1000, 11, 4, 4, 'YA'),
(153, 5, 6, 1, 500, 14, 1, 4, 'YA'),
(154, 5, 4, 2, 1000, 14, 1, 4, 'YA'),
(155, 5, 4, 1, 750, 14, 2, 4, 'YA'),
(156, 5, 4, 1, 500, 14, 2, 4, 'YA'),
(157, 5, 4, 1, 500, 15, 2, 5, 'YA'),
(158, 5, 4, 1, 500, 14, 2, 5, 'YA'),
(159, 5, 4, 2, 1000, 15, 2, 3, 'YA'),
(160, 5, 2, 1, 500, 14, 3, 3, 'YA'),
(161, 5, 4, 1, 1000, 14, 3, 4, 'YA'),
(162, 5, 4, 1, 500, 14, 3, 4, 'YA'),
(163, 5, 4, 1, 500, 12, 3, 4, 'YA'),
(164, 5, 8, 2, 1000, 15, 4, 4, 'YA'),
(165, 6, 2, 1, 500, 14, 1, 3, 'YA'),
(166, 6, 2, 1, 320, 14, 1, 3, 'YA'),
(167, 6, 2, 1, 500, 14, 1, 4, 'YA');

-- --------------------------------------------------------

--
-- Table structure for table `data_uji`
--

CREATE TABLE `data_uji` (
  `id` int(11) NOT NULL,
  `merk` int(20) NOT NULL,
  `ram` int(11) NOT NULL,
  `vga` int(11) NOT NULL,
  `hdd` int(11) NOT NULL,
  `lcd` int(11) NOT NULL,
  `processor` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `rekomen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_uji`
--

INSERT INTO `data_uji` (`id`, `merk`, `ram`, `vga`, `hdd`, `lcd`, `processor`, `rate`, `rekomen`) VALUES
(1, 1, 2, 2, 500, 11, 1, 1, 'TIDAK'),
(2, 2, 2, 1, 500, 14, 2, 2, 'TIDAK'),
(3, 6, 4, 1, 320, 11, 2, 1, 'TIDAK'),
(4, 1, 4, 1, 512, 17, 2, 2, 'TIDAK'),
(5, 1, 4, 1, 500, 14, 2, 1, 'TIDAK'),
(6, 3, 2, 1, 500, 14, 3, 2, 'TIDAK'),
(7, 3, 6, 2, 1000, 15, 3, 2, 'TIDAK'),
(8, 4, 2, 2, 320, 14, 2, 1, 'TIDAK'),
(9, 5, 4, 2, 1080, 14, 2, 2, 'TIDAK'),
(10, 6, 2, 2, 300, 13, 2, 1, 'TIDAK'),
(11, 1, 8, 1, 1000, 15, 4, 5, 'YA'),
(12, 2, 4, 1, 750, 14, 3, 3, 'YA'),
(13, 2, 4, 1, 1000, 14, 3, 4, 'YA'),
(14, 2, 4, 1, 1000, 15, 3, 4, 'YA'),
(15, 2, 8, 1, 1000, 14, 3, 4, 'YA'),
(16, 3, 4, 1, 320, 14, 3, 3, 'YA'),
(17, 4, 4, 1, 500, 15, 2, 4, 'YA'),
(18, 5, 4, 1, 500, 14, 1, 3, 'YA'),
(19, 5, 8, 1, 1000, 14, 3, 4, 'YA'),
(20, 5, 2, 2, 320, 11, 3, 5, 'YA');

-- --------------------------------------------------------

--
-- Table structure for table `detail_beli`
--

CREATE TABLE `detail_beli` (
  `id_detail_beli` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_beli` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_beli`
--

INSERT INTO `detail_beli` (`id_detail_beli`, `id_produk`, `id_beli`, `id_user`, `jumlah`) VALUES
(1, 1, 1, 1, 0),
(2, 4, 2, 1, 0),
(3, 2, 3, 1, 0),
(4, 1, 4, 2, 0),
(5, 7, 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_beli` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `upload_bukti` text NOT NULL,
  `tanggal_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_beli`, `id_user`, `nama_user`, `total_harga`, `upload_bukti`, `tanggal_bayar`) VALUES
(1, 1, 1, 'Eri Eli Lavindi1', 0, 'file_1518880726.png', '2018-02-17'),
(2, 2, 1, 'Eri Eli Lavindi1', 0, 'file_1518881633.png', '2018-02-17'),
(3, 3, 1, 'Eri Eli Lavindi1', 3750000, 'file_1519488934.jpg', '2018-02-24'),
(4, 4, 2, 'Yunita Dwi Setiyaningrum', 0, 'file_1519643264.jpg', '2018-02-26'),
(5, 5, 1, 'Eri Eli Lavindi1', 3850000, 'file_1519873349.jpg', '2018-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `no_hp_user` text NOT NULL,
  `tanggal_beli` date NOT NULL,
  `status_pembelian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `id_user`, `nama_user`, `no_hp_user`, `tanggal_beli`, `status_pembelian`) VALUES
(1, 1, 'Eri Eli Lavindi1', '089667978096', '2018-02-17', 'selesai'),
(2, 1, 'Eri Eli Lavindi1', '089667978096', '2018-02-17', 'selesai'),
(3, 1, 'Eri Eli Lavindi1', '089667978096', '2018-02-24', 'dikirim'),
(4, 2, 'Yunita Dwi Setiyanin', '85641014964', '2018-02-26', 'selesai'),
(5, 1, 'Eri Eli Lavindi1', '089667978096', '2018-03-01', 'dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `prediksi_rekomendasi`
--

CREATE TABLE `prediksi_rekomendasi` (
  `id` int(11) NOT NULL,
  `merk` int(20) NOT NULL,
  `ram` int(11) NOT NULL,
  `vga` int(11) NOT NULL,
  `hdd` int(11) NOT NULL,
  `lcd` int(11) NOT NULL,
  `processor` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `rekomen` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_beli` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prediksi_rekomendasi`
--

INSERT INTO `prediksi_rekomendasi` (`id`, `merk`, `ram`, `vga`, `hdd`, `lcd`, `processor`, `rate`, `rekomen`, `id_user`, `id_beli`, `id_produk`) VALUES
(1, 1, 4, 1, 500, 15, 1, 3, 'YA', 1, 0, 1),
(2, 1, 8, 1, 1000, 15, 3, 1, 'TIDAK', 1, 0, 4),
(3, 1, 4, 1, 500, 15, 1, 5, 'YA', 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `merk_produk` varchar(50) NOT NULL,
  `type_produk` varchar(50) NOT NULL,
  `ram_produk` int(11) NOT NULL,
  `hdd_produk` int(11) NOT NULL,
  `vga_produk` varchar(20) NOT NULL,
  `lcd_produk` int(11) NOT NULL,
  `processor_produk` varchar(20) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `gambar_produk` text NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `kuantitas_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `merk_produk`, `type_produk`, `ram_produk`, `hdd_produk`, `vga_produk`, `lcd_produk`, `processor_produk`, `harga_produk`, `gambar_produk`, `deskripsi_produk`, `kuantitas_produk`) VALUES
(1, 'ACER', 'acer aspire e15', 4, 500, '1', 15, '1', 6099000, 'file_1518886898.jpeg', '<p>Intel Core i3-6006U, 4GB DDR4, 500GB HDD, DVDRW, VGA Intel HD Graphics, Wifi, Bluetooth, NIC, 15.6\" HD, Win 10,</p>', 10),
(2, 'ACER', 'V5', 2, 500, '1', 11, '1', 3750000, 'file_1518887216.jpg', '<p>Proc. Intel(R) Celeron(R) - CPU 1019Y @1.00GHz (2CPUs)~1.0GHz<br />RAM 2GB<br />HDD 500GB<br />Layar 11.6 inch<br />VGA Intel(R) HD Graphics<br />Wifi - Webcam<br />Baterai 2 Jam</p>', 10),
(3, 'ACER', 'Aspire 4740', 2, 320, '0', 14, '2', 2950000, 'file_1518887480.jpg', '<p>Acer Aspire 4740<br />Core i3 330M 2.13Ghz<br />RAM DDR3 2.0GB<br />Hard Drive 320 GB sata<br />Lan/Wifi/DVDRW<br />DHMI/CAMERA/USB<br />VGA Intel HD Grafik<br />LED 14 inch WIDE</p>', 10),
(4, 'ACER', 'E5-553G-114Q', 8, 1000, '1', 15, '3', 7288000, 'file_1518887685.jpg', '<div class=\"large-16 medium-16 small-16 columns product-usp\">\r\n<ul>\r\n<li>Prosesor : AMD Quad Core A12-9700P</li>\r\n<li>Layar : 15.6 inch</li>\r\n<li>Memori : 8 GB</li>\r\n<li>Kapasitas penyimpanan : 1 TB</li>\r\n<li>Grafis : AMD Radeon R8 M445DX 2GB</li>\r\n<li>OS : Linpus</li>\r\n</ul>\r\n</div>', 10),
(5, 'ACER', 'ACER ASPIRE E14', 4, 500, '1', 14, '2', 5350000, 'file_1518888076.jpg', '<ul style=\"padding: 0; list-style: inherit; margin-bottom: 20px;\">\r\n<li style=\"float: left; width: 46%; padding-right: 20px;\">Intel Core i3-6006U</li>\r\n<li style=\"float: left; width: 46%; padding-right: 20px;\">4GB RAM</li>\r\n<li style=\"float: left; width: 46%; padding-right: 20px;\">500GB HDD</li>\r\n<li style=\"float: left; width: 46%; padding-right: 20px;\">DVDRW</li>\r\n<li style=\"float: left; width: 46%; padding-right: 20px;\">VGA Intel HD Graphics</li>\r\n<li style=\"float: left; width: 46%; padding-right: 20px;\">Wifi</li>\r\n<li style=\"float: left; width: 46%; padding-right: 20px;\">Bluetooth</li>\r\n<li style=\"float: left; width: 46%; padding-right: 20px;\">14\" HD</li>\r\n<li style=\"float: left; width: 46%; padding-right: 20px;\">Non OS</li>\r\n</ul>', 10),
(6, 'ASUS', 'X550IU', 8, 1000, '2', 15, '4', 8999000, 'file_1519463325.jpg', '<p>AMD Quad Core FX 9830P 3.0GHz Turbo Core up to 3.7GHz (2MB Cache)<br />8GB RAM DDR4 (Max. 16GB DDR4)<br />1000GB HDD<br />Dual Graphics AMD Radeon R7 up to 2GB DDR3 &amp;<br />Dedicated AMD Radeon RX460M 4GB DDR5 128bit<br />DVD-RW SuperMulti DL Drive<br />DOS (NO OS/NO WINDOWS )<br />15.6 inch FHD LED Display (1920 x 1080)<br />Audio by Sonic Master Technology<br />HDMI, Gigabit LAN, VGA Webcam, Card Reader, WiFi b/g/n + BT4.0<br />VGA Port, USB 2.0 x 1, USB 3.0 x 2<br />Special Features : AMD Cool to the Touch Technology<br />Weight : 2.45kg included 4 cells battery</p>', 10),
(7, 'ASUS', 'A455L', 4, 500, '1', 14, '2', 3850000, 'file_1519463489.jpg', '<table>\r\n<tbody>\r\n<tr>\r\n<td>Prosesor</td>\r\n<td>Intel Core i3-4030U 1,9 GHz (A455LD), Intel Core i5-4210U 2,7 GHz (A455LN)</td>\r\n</tr>\r\n<tr>\r\n<td>RAM</td>\r\n<td>DDR3 2 GB (A455LD), DDR3 4 GB (A455LN)</td>\r\n</tr>\r\n<tr>\r\n<td>Ruang Penyimpanan</td>\r\n<td>500 GB (A455LD), 1 TB (A455LN)</td>\r\n</tr>\r\n<tr>\r\n<td>Ukuran Layar</td>\r\n<td>14 inch LED Slim Glossy HD</td>\r\n</tr>\r\n<tr>\r\n<td>Kamera</td>\r\n<td>HD WebCam</td>\r\n</tr>\r\n<tr>\r\n<td>Audio</td>\r\n<td>ASUS Sonic Master</td>\r\n</tr>\r\n<tr>\r\n<td>Port</td>\r\n<td>VGA, HDMI, 2x USB 2.0, 1x USB 3.0, RJ-45, SD card reader, 1x audio jack</td>\r\n</tr>\r\n<tr>\r\n<td>Konektivitas</td>\r\n<td>Bluetooth V4.0, WiFi, Ethernet</td>\r\n</tr>\r\n<tr>\r\n<td>Berat</td>\r\n<td>2,3 kg</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 10),
(8, 'ASUS', 'A455L', 4, 1000, '1', 14, '3', 6500000, 'file_1519464370.jpg', '<p>Tipe Grafis Intel HD Graphics 4400 + Nvidia GT 820M 2GB<br />Ukuran Layar 14 HD Color Shine<br />Resolusi Layar 1366 x 768<br />OS DOS<br />CPU Intel Core i5-4210U (up to 2.7 GHz)<br />Memori/RAM 4GB DDR3 1600 Mhz<br />Drive Optik DVDRW<br />Speaker ASUS Sonic Master<br />Kamera HD WebCam<br />Touch Screen Tidak<br />Harddisk 500GB 5400RPM<br />Koneksi Bluetooth 4.0, Wireless, Ethernet<br />Slot 1x USB 3.0, 2x USB 2.0, HDMI, LAN, SD Card Reader , 1x Combo Audio Jack<br />Baterai 4 Cells, Lithium-ion Battery 2600mAh<br />Berat 2.3Kg</p>', 10),
(11, 'DELL', 'Latitude E6430', 8, 320, '1', 15, '3', 5350000, 'file_1519465158.jpg', '', 10),
(12, 'DELL', 'Inspiron 14 3000', 2, 500, '1', 14, '2', 4000000, 'file_1519466373.JPG', '<p>Spesifikasi Dell Inspiron 14-3421 Core i3:<br />Ukuran (L x W x H cm) 34.6 x 25.4 x 2.5 cm<br />Tipe Grafis HD<br />Ukuran Layar 14 WXGA<br />Tipe Layar LED Backlit Display with Truelife and HD resolution<br />Resolusi Layar 1366 x 768<br />OS Ubuntu Linux<br />CPU Generasi ke-3 Intel Core i3-3217U (3M Cache, 1.8 GHz)<br />Memori/RAM 2 GB DDR3<br />Drive Optik Tray-loading DVD+/-RW<br />Touch Screen Tidak<br />Harddisk 500GB 5400 RPM SATA</p>', 10),
(13, 'DELL', 'Inspiron 7460', 8, 1000, '2', 14, '4', 14200000, 'file_1519466473.jpg', '<p>-Intel(R) Core (TM) i7-7500U Processor (3MB Cache, up to 3.1GHz)<br />-8GB DDR4 2400Mhz (8GB x 1)<br />-128GB + 1TB 5400RPM Hard Drive<br />-nVidia GeForce 940MX 2GB DDR5<br />-14.0\" FHD (1920 x 1080) IPS Truelife LED-Backlit Display LCD Back Cover for Non-Touch Screen<br />-Bluetooth 4.2, Wireless Driver, Stereo Speakers and subwoofer professionally tuned with Waves MaxxAudio(TM) Pro, 65W AC Adapter, HD Camera, 3-cell (42WHr) Battrey (integrated), McAfee Anti Virus- 12 Months Backlit Keyboard<br />-Win 10 Home SL (64bit)<br />-1Yr Premium Support: Onsite Service - Retail</p>', 10),
(14, 'DELL', 'Dell Inspiron', 2, 500, '1', 14, '2', 7540000, 'file_1519483895.jpg', '<div class=\"spec\">\r\n<ul>\r\n<li>Core i3, Core i5, Pentium...</li>\r\n<li>DDR3, 2GB, 4GB, HDD, 640G...</li>\r\n</ul>\r\n<ul>\r\n<li>14.0inches, Windows 7</li>\r\n</ul>\r\n</div>', 0),
(15, 'DELL', 'Inspiron 14 3443', 2, 500, '1', 14, '3', 6700000, 'file_1519484736.jpg', '<p>Processor : 5th Generation Intel(R) Quad Core(TM) i5-5200u processor 2.2 GHz<br />Memory : 2 GB SODIMM DDR3 1600Mhz<br />HDD 500 GB SSHD 6 GB/Second<br />Graphic Card : Nvidia Geforce GT 820 M 2 GB + Intel HD 5200 2 GB<br />Display/Monitor : 14.0\" HD WLED TrueLife<br />Memory Reader : 5 in 1 Card Reader<br />Bluetooth : Bluetooth v4.0<br />Wireless Card : Intel AC 3160 802.11a</p>', 10),
(16, 'HP', 'compaq 420Q', 2, 320, '1', 14, '1', 0, '', '<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" bgcolor=\"#cccccc\">\r\n<tbody>\r\n<tr class=\"theme\">\r\n<th class=\"small\" colspan=\"2\" scope=\"col\" width=\"550\"><span class=\"themebody\">System features</span></th>\r\n</tr>\r\n<tr bgcolor=\"#e7e7e7\">\r\n<td scope=\"row\" valign=\"top\" width=\"140\">Operating system </td>\r\n<td valign=\"top\" width=\"401\">Free DOS</td>\r\n</tr>\r\n<tr bgcolor=\"#ffffff\">\r\n<td scope=\"row\" valign=\"top\" width=\"140\">Processor</td>\r\n<td style=\"font-weight: bold;\" valign=\"top\" width=\"401\">Intel&reg; Core&trade;2 Duo Processor T6570 (2.10 GHz, 2 MB L2 cache, 800 MHz FSB)</td>\r\n</tr>\r\n<tr bgcolor=\"#e7e7e7\">\r\n<td scope=\"row\" valign=\"top\" width=\"140\">Chipset</td>\r\n<td valign=\"top\" width=\"401\">Mobile Intel&reg; GL40 Express Chipset with ICH9M-Enhanced<br /> Mobile Intel&reg; GM45 Express Chipset ICH9M-Enhanced</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" bgcolor=\"#cccccc\">\r\n<tbody>\r\n<tr class=\"theme\">\r\n<th class=\"small\" colspan=\"2\" scope=\"col\" width=\"550\"><span class=\"themebody\">Dimensions and Weight</span></th>\r\n</tr>\r\n<tr bgcolor=\"#e7e7e7\">\r\n<td scope=\"row\" valign=\"top\" width=\"140\">Product weight</td>\r\n<td valign=\"top\" width=\"401\">Starting at 2.26 kg<br />Weight varies by configuration and components</td>\r\n</tr>\r\n<tr bgcolor=\"#ffffff\">\r\n<td scope=\"row\" valign=\"top\" width=\"140\">Product dimensions (W x D x H)</td>\r\n<td valign=\"top\" width=\"401\">33.6 x 22.8 x 2.7 (at front) cm<br /> Height varies depending upon where on the notebook the measurement is made</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" bgcolor=\"#cccccc\">\r\n<tbody>\r\n<tr class=\"theme\">\r\n<th class=\"small\" colspan=\"2\" scope=\"col\" width=\"550\"><span class=\"themebody\">Memory</span></th>\r\n</tr>\r\n<tr bgcolor=\"#e7e7e7\">\r\n<td scope=\"row\" valign=\"top\" width=\"140\">Maximum memory</td>\r\n<td valign=\"top\" width=\"401\">Up to: 8 GB 1066 MHz DDR3 SDRAM<br />Maximized dual-channel performance requires SODIMMs of the same size and speed in both memory slots.</td>\r\n</tr>\r\n<tr bgcolor=\"#ffffff\">\r\n<td scope=\"row\" valign=\"top\" width=\"140\">Memory slots</td>\r\n<td valign=\"top\" width=\"401\">2 SODIMM</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" bgcolor=\"#cccccc\">\r\n<tbody>\r\n<tr class=\"theme\">\r\n<th class=\"small\" colspan=\"2\" scope=\"col\" width=\"550\"><span class=\"themebody\">Storage</span></th>\r\n</tr>\r\n<tr bgcolor=\"#e7e7e7\">\r\n<td scope=\"row\" valign=\"top\" width=\"140\">Internal drives</td>\r\n<td valign=\"top\" width=\"401\">320GB SATA II (7200 rpm)</td>\r\n</tr>\r\n<tr bgcolor=\"#ffffff\">\r\n<td scope=\"row\" valign=\"top\" width=\"140\">Optical drives</td>\r\n<td valign=\"top\" width=\"401\">DVD-ROM<br /> DVD+/-RW SuperMulti DL LightScribe</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table border=\"0\" cellspacing=\"1\" cellpadding=\"4\" bgcolor=\"#cccccc\">\r\n<tbody>\r\n<tr class=\"theme\">\r\n<th class=\"small\" colspan=\"2\" scope=\"col\" width=\"550\"><span class=\"themebody\">Graphics</span></th>\r\n</tr>\r\n<tr bgcolor=\"#e7e7e7\">\r\n<td scope=\"row\" valign=\"top\" width=\"140\">Display</td>\r\n<td valign=\"top\" width=\"401\">14.0\" diagonal LED-backlit HD 16:9 widescreen antiglare (1366 x 768)<br /> 14.0\" diagonal LED-backlit HD 16:9 widescreen BrightView (1366 x 768)</td>\r\n</tr>\r\n<tr bgcolor=\"#ffffff\">\r\n<td scope=\"row\" valign=\"top\" width=\"140\">Graphics</td>\r\n<td valign=\"top\" width=\"401\">Mobile Intel Graphics Media Accelerator 4500MHD<br />Microsoft DirectX 10 capable</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', 0),
(17, 'HP', 'HP1000', 2, 1000, '1', 11, '2', 0, '', '', 0),
(18, 'HP', 'Notebook', 2, 300, '1', 10, '1', 0, '', '', 0),
(19, 'HP', '15 Notebook laptop', 4, 500, '1', 15, '2', 0, '', '', 0),
(20, 'Hp', 'Hp pavillion', 2, 500, '1', 14, '2', 0, '', '', 0),
(21, 'LENOVO', 'B490', 2, 500, '1', 14, '2', 0, '', '', 0),
(22, 'LENOVO', 'G40', 4, 500, '1', 14, '4', 0, '', '', 0),
(23, 'LENOVO', 'Lenovo 310', 4, 1000, '1', 14, '3', 0, '', '', 0),
(24, 'LENOVO', 'G 405 S', 4, 500, '1', 14, '1', 0, '', '', 0),
(25, 'LENOVO', 'G400', 2, 500, '1', 14, '1', 0, '', '', 0),
(26, 'TOSHIBA', 'Toshiba Sattelite', 2, 500, '1', 14, '2', 0, '', '', 0),
(27, 'TOSHIBA', 'NB520', 2, 500, '1', 11, '3', 0, '', '', 0),
(28, 'TOSHIBA', 'Satellite l510', 2, 320, '1', 14, '2', 0, '', '', 0),
(29, 'TOSHIBA', 'Satelite', 2, 500, '2', 13, '2', 0, '', '', 0),
(30, 'TOSHIBA', 'L7000', 4, 320, '1', 11, '2', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_beli` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal_komentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `id_user`, `id_produk`, `id_beli`, `rate`, `komentar`, `tanggal_komentar`) VALUES
(1, 0, 1, 0, 3, '', '0000-00-00'),
(2, 0, 2, 0, 3, '', '0000-00-00'),
(3, 0, 3, 0, 4, '', '0000-00-00'),
(4, 0, 4, 0, 2, '', '0000-00-00'),
(5, 0, 5, 0, 5, '', '0000-00-00'),
(6, 0, 6, 0, 5, '', '0000-00-00'),
(7, 0, 7, 0, 3, '', '0000-00-00'),
(8, 0, 8, 0, 5, '', '0000-00-00'),
(9, 0, 9, 0, 4, '', '0000-00-00'),
(10, 0, 10, 0, 3, '', '0000-00-00'),
(11, 0, 11, 0, 4, '', '0000-00-00'),
(12, 0, 12, 0, 5, '', '0000-00-00'),
(13, 0, 13, 0, 5, '', '0000-00-00'),
(14, 0, 14, 0, 3, '', '0000-00-00'),
(15, 0, 15, 0, 2, '', '0000-00-00'),
(16, 0, 16, 0, 4, '', '0000-00-00'),
(17, 0, 17, 0, 5, '', '0000-00-00'),
(18, 0, 18, 0, 2, '', '0000-00-00'),
(19, 0, 19, 0, 2, '', '0000-00-00'),
(20, 0, 20, 0, 2, '', '0000-00-00'),
(21, 0, 21, 0, 4, '', '0000-00-00'),
(22, 0, 22, 0, 4, '', '0000-00-00'),
(23, 0, 23, 0, 4, '', '0000-00-00'),
(24, 0, 24, 0, 3, '', '0000-00-00'),
(25, 0, 25, 0, 3, '', '0000-00-00'),
(26, 0, 26, 0, 4, '', '0000-00-00'),
(27, 0, 27, 0, 5, '', '0000-00-00'),
(28, 0, 28, 0, 4, '', '0000-00-00'),
(29, 0, 29, 0, 1, '', '0000-00-00'),
(30, 0, 30, 0, 1, '', '0000-00-00'),
(31, 1, 1, 0, 3, '-', '2018-02-17'),
(32, 1, 4, 0, 1, '--', '2018-02-17'),
(33, 2, 1, 0, 5, 'baik', '2018-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE `sheet1` (
  `id_produk` int(2) DEFAULT NULL,
  `merk_produk` varchar(7) DEFAULT NULL,
  `tyoe_produk` varchar(18) DEFAULT NULL,
  `ram_produk` int(1) DEFAULT NULL,
  `vga_produk` int(1) DEFAULT NULL,
  `hdd_produk` int(4) DEFAULT NULL,
  `lcd_produk` int(2) DEFAULT NULL,
  `processor produk` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`id_produk`, `merk_produk`, `tyoe_produk`, `ram_produk`, `vga_produk`, `hdd_produk`, `lcd_produk`, `processor produk`) VALUES
(1, 'ACER', 'acer aspire e15', 4, 1, 500, 15, 1),
(2, 'ACER', 'V5', 2, 1, 500, 11, 1),
(3, 'ACER', 'Aspire 4740', 4, 1, 1000, 14, 2),
(4, 'ACER', 'E5-553G-114Q', 8, 1, 1000, 15, 3),
(5, 'ACER', 'ACER ASPIRE E14', 4, 1, 500, 14, 2),
(6, 'ASUS', 'X550IU', 8, 2, 1000, 15, 4),
(7, 'ASUS', 'A455L', 4, 1, 500, 14, 2),
(8, 'ASUS', 'A455L', 4, 1, 1000, 14, 3),
(9, 'ASUS', 'A455L', 4, 1, 500, 11, 3),
(10, 'ASUS', 'Asus X202E', 4, 1, 500, 15, 1),
(11, 'DELL', 'Latitude E6430', 8, 1, 1000, 15, 3),
(12, 'DELL', 'Inspiron 14 3000', 8, 1, 500, 14, 2),
(13, 'DELL', 'Inspiron 7460', 8, 2, 1000, 14, 4),
(14, 'DELL', 'Dell Inspiron', 2, 1, 500, 14, 2),
(15, 'DELL', 'Inspiron 14 3443', 2, 1, 500, 14, 3),
(16, 'HP', 'compaq 420Q', 2, 1, 320, 14, 1),
(17, 'HP', 'HP1000', 2, 1, 1000, 11, 2),
(18, 'HP', 'Notebook', 2, 1, 300, 10, 1),
(19, 'HP', '15 Notebook laptop', 4, 1, 500, 15, 2),
(20, 'Hp', 'Hp pavillion', 2, 1, 500, 14, 2),
(21, 'LENOVO', 'B490', 2, 1, 500, 14, 2),
(22, 'LENOVO', 'G40', 4, 1, 500, 14, 4),
(23, 'LENOVO', 'Lenovo 310', 4, 1, 1000, 14, 3),
(24, 'LENOVO', 'G 405 S', 4, 1, 500, 14, 1),
(25, 'LENOVO', 'G400', 2, 1, 500, 14, 1),
(26, 'TOSHIBA', 'Toshiba Sattelite', 2, 1, 500, 14, 2),
(27, 'TOSHIBA', 'NB520', 2, 1, 500, 11, 3),
(28, 'TOSHIBA', 'Satellite l510', 2, 1, 320, 14, 2),
(29, 'TOSHIBA', 'Satelite', 2, 2, 500, 13, 2),
(30, 'TOSHIBA', 'L7000', 4, 1, 320, 11, 2),
(1, 'ACER', 'acer aspire e15', 4, 1, 500, 15, 1),
(2, 'ACER', 'V5', 2, 1, 500, 11, 1),
(3, 'ACER', 'Aspire 4740', 4, 1, 1000, 14, 2),
(4, 'ACER', 'E5-553G-114Q', 8, 1, 1000, 15, 3),
(5, 'ACER', 'ACER ASPIRE E14', 4, 1, 500, 14, 2),
(6, 'ASUS', 'X550IU', 8, 2, 1000, 15, 4),
(7, 'ASUS', 'A455L', 4, 1, 500, 14, 2),
(8, 'ASUS', 'A455L', 4, 1, 1000, 14, 3),
(9, 'ASUS', 'A455L', 4, 1, 500, 11, 3),
(10, 'ASUS', 'Asus X202E', 4, 1, 500, 15, 1),
(11, 'DELL', 'Latitude E6430', 8, 1, 1000, 15, 3),
(12, 'DELL', 'Inspiron 14 3000', 8, 1, 500, 14, 2),
(13, 'DELL', 'Inspiron 7460', 8, 2, 1000, 14, 4),
(14, 'DELL', 'Dell Inspiron', 2, 1, 500, 14, 2),
(15, 'DELL', 'Inspiron 14 3443', 2, 1, 500, 14, 3),
(16, 'HP', 'compaq 420Q', 2, 1, 320, 14, 1),
(17, 'HP', 'HP1000', 2, 1, 1000, 11, 2),
(18, 'HP', 'Notebook', 2, 1, 300, 10, 1),
(19, 'HP', '15 Notebook laptop', 4, 1, 500, 15, 2),
(20, 'Hp', 'Hp pavillion', 2, 1, 500, 14, 2),
(21, 'LENOVO', 'B490', 2, 1, 500, 14, 2),
(22, 'LENOVO', 'G40', 4, 1, 500, 14, 4),
(23, 'LENOVO', 'Lenovo 310', 4, 1, 1000, 14, 3),
(24, 'LENOVO', 'G 405 S', 4, 1, 500, 14, 1),
(25, 'LENOVO', 'G400', 2, 1, 500, 14, 1),
(26, 'TOSHIBA', 'Toshiba Sattelite', 2, 1, 500, 14, 2),
(27, 'TOSHIBA', 'NB520', 2, 1, 500, 11, 3),
(28, 'TOSHIBA', 'Satellite l510', 2, 1, 320, 14, 2),
(29, 'TOSHIBA', 'Satelite', 2, 2, 500, 13, 2),
(30, 'TOSHIBA', 'L7000', 4, 1, 320, 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `prediksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `prediksi`) VALUES
(1, 'P'),
(2, 'TP'),
(3, 'YA'),
(4, 'TIDAK'),
(5, 'YA'),
(6, 'YA'),
(7, 'YA'),
(8, 'YA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `gender_user` varchar(10) NOT NULL,
  `no_hp_user` text NOT NULL,
  `gambar_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `tanggal_pembuatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `gender_user`, `no_hp_user`, `gambar_user`, `password_user`, `tanggal_pembuatan`) VALUES
(1, 'Eri Eli Lavindi1', 'erielilavindi@gmail.com', 'wanita', '089667978096', '', '2e3817293fc275dbee74bd71ce6eb056', '2018-02-01'),
(2, 'Yunita Dwi Setiyaningrum', 'yunitadwisetiyaningrum@gmail.com', 'wanita', '85641014964', '', '525650a65f97e3d7c95e6a0ffc01e685', '0000-00-00'),
(3, 'Khabib Prasetyo', 'khabib000@gmail.com', 'pria', '082137604651', '', '0f53ef90fcc7fc225b18852e7bade365', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admiin`);

--
-- Indexes for table `alamat_user`
--
ALTER TABLE `alamat_user`
  ADD PRIMARY KEY (`id_amalat`);

--
-- Indexes for table `data_training`
--
ALTER TABLE `data_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_uji`
--
ALTER TABLE `data_uji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_beli`
--
ALTER TABLE `detail_beli`
  ADD PRIMARY KEY (`id_detail_beli`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `prediksi_rekomendasi`
--
ALTER TABLE `prediksi_rekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admiin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alamat_user`
--
ALTER TABLE `alamat_user`
  MODIFY `id_amalat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_training`
--
ALTER TABLE `data_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT for table `data_uji`
--
ALTER TABLE `data_uji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `detail_beli`
--
ALTER TABLE `detail_beli`
  MODIFY `id_detail_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prediksi_rekomendasi`
--
ALTER TABLE `prediksi_rekomendasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
