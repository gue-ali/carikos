-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 05:30 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carikos`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` varchar(8) NOT NULL,
  `kdkos` varchar(5) NOT NULL,
  `id_penyewa` varchar(5) NOT NULL,
  `noread_pemilik` int(2) NOT NULL,
  `noread_penyewa` int(2) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `kdkos`, `id_penyewa`, `noread_pemilik`, `noread_penyewa`, `create_at`) VALUES
('57HVO0B4', 'ks1', 'p1', 0, 0, '2019-12-13 06:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `isi_chat`
--

CREATE TABLE `isi_chat` (
  `id_isi` int(6) NOT NULL,
  `id_chat` varchar(8) NOT NULL,
  `tipe` int(1) NOT NULL COMMENT '1 = penyewa 2 = pemilik',
  `isinya` text NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_chat`
--

INSERT INTO `isi_chat` (`id_isi`, `id_chat`, `tipe`, `isinya`, `create_at`) VALUES
(1, '57HVO0B4', 1, 'hallo', '2019-12-13 06:25:10'),
(2, '57HVO0B4', 2, 'iya?', '2019-12-13 06:25:23'),
(3, '57HVO0B4', 1, 'sip', '2019-12-13 06:25:30'),
(4, '57HVO0B4', 2, 'ok', '2019-12-13 06:25:35'),
(5, '57HVO0B4', 1, 'p', '2019-12-16 10:57:17'),
(6, '57HVO0B4', 2, 'apa', '2019-12-16 10:57:43'),
(7, '57HVO0B4', 2, 'se', '2019-12-16 11:01:11'),
(8, '57HVO0B4', 2, 'res', '2019-12-16 11:10:23'),
(9, '57HVO0B4', 2, 'rrr', '2019-12-16 11:10:33'),
(10, '57HVO0B4', 2, 'ddd', '2019-12-16 11:14:33'),
(11, '57HVO0B4', 2, 'fe', '2019-12-16 11:14:52'),
(12, '57HVO0B4', 1, 'eer', '2019-12-16 11:27:25'),
(13, '57HVO0B4', 1, 'dsd', '2019-12-16 11:27:58'),
(14, '57HVO0B4', 2, 'sdsd', '2019-12-16 11:28:06');

--
-- Triggers `isi_chat`
--
DELIMITER $$
CREATE TRIGGER `set_unread` AFTER INSERT ON `isi_chat` FOR EACH ROW BEGIN
	IF NEW.tipe = 1 THEN
    	UPDATE chat set noread_pemilik = noread_pemilik + 1 where id_chat=NEW.id_chat;
    ELSEIF NEW.tipe = 2 THEN
    	UPDATE chat set noread_penyewa = noread_penyewa + 1 where id_chat=NEW.id_chat;
        
    END IF;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `kode_sewa` varchar(8) NOT NULL,
  `kdkamar` varchar(5) NOT NULL,
  `nopenyewa` varchar(5) NOT NULL,
  `data_penyewa` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status_sewa` int(1) NOT NULL DEFAULT '1' COMMENT '0= cancel 1= wait acc 2 = acc 3= reject 4 = done',
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`kode_sewa`, `kdkamar`, `nopenyewa`, `data_penyewa`, `tgl_mulai`, `tgl_selesai`, `status_sewa`, `create_at`) VALUES
('1VSKIC01', 'km1', 'p1', '{\"nama\":\"Andrean Three Saputra\",\"nohp\":\"089696491481\",\"email\":\"akunhack2211@gmail.com\",\"alamat\":\"as\"}', '2019-12-14', '2019-12-13', 4, '2019-12-13 02:06:35'),
('77YI2YBG', 'km4', 'p1', '{\"nama\":\"andre\",\"nohp\":\"0238274384738\",\"email\":\"admin@admin.com\",\"alamat\":\"bws\"}', '2019-12-16', '2019-12-13', 4, '2019-12-13 06:24:27'),
('7VAPUP5D', 'km1', 'p1', '{\"nama\":\"udin\",\"nohp\":\"0238274384738\",\"email\":\"udin@gmail.com\",\"alamat\":\"probolinggo\"}', '2019-12-15', '0000-00-00', 3, '2019-12-13 01:53:21'),
('HO2RE2FN', 'km1', 'p1', '{\"nama\":\"as\",\"nohp\":\"0238274384738\",\"email\":\"dsds@mil.ko\",\"alamat\":\"as\"}', '2019-12-14', '0000-00-00', 3, '2019-12-13 05:01:26'),
('RTVUH8YE', 'km1', 'p1', '{\"nama\":\"as\",\"nohp\":\"0238274384738\",\"email\":\"as@mail.com\",\"alamat\":\"as\"}', '2019-12-14', '0000-00-00', 0, '2019-12-13 01:21:55'),
('TR75TSBS', 'km1', 'p1', '{\"nama\":\"nafis\",\"nohp\":\"0238274384738\",\"email\":\"nafis@gmail.com\",\"alamat\":\"jember\"}', '2019-12-14', '0000-00-00', 3, '2019-12-13 06:23:16'),
('Y1FY28UQ', 'km1', 'p1', '{\"nama\":\"abiyu\",\"nohp\":\"0238274384738\",\"email\":\"abiyu@gmail.com\",\"alamat\":\"jember\"}', '2019-12-16', '0000-00-00', 2, '2019-12-16 10:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `kdadmin` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis` enum('laki-laki','perempuan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`kdadmin`, `nama`, `username`, `password`, `email`, `jenis`) VALUES
('a001', 'Adi nugraha', 'adinug', '123', '', 'laki-laki'),
('a002', 'M Al Ghazali Si', 'alipelepel', 'qwert', '', 'laki-laki'),
('a003', 'Muhammad Nijarudin', 'nizaar', 'asdf', '', 'laki-laki'),
('a004', 'meilinia', 'mei', 'asdf', '', 'laki-laki'),
('a005', 'Deni Eko', 'deni', 'asdf', '', 'laki-laki'),
('a006', 'Nafis Lesta', 'nafis', 'zxcv', '', 'laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `tbkamar`
--

CREATE TABLE `tbkamar` (
  `kdkamar` varchar(5) NOT NULL,
  `lemari` int(2) DEFAULT NULL,
  `kasur` int(2) DEFAULT NULL,
  `mejabelajar` int(2) DEFAULT NULL,
  `kursi` int(2) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `luaskamar` varchar(10) NOT NULL,
  `cermin` int(2) DEFAULT NULL,
  `kdkos` varchar(5) NOT NULL,
  `fotokamar` varchar(191) NOT NULL,
  `fotokamar1` varchar(191) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1 = kosong 0 = disewa 2 = di pesan	'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkamar`
--

INSERT INTO `tbkamar` (`kdkamar`, `lemari`, `kasur`, `mejabelajar`, `kursi`, `harga`, `luaskamar`, `cermin`, `kdkos`, `fotokamar`, `fotokamar1`, `status`) VALUES
('km1', 1, 1, 1, 0, '500000', '4x4', 1, 'ks1', 'kamar1.jpg', 'kamar.jpg', 0),
('km2', 1, 1, 0, 0, '350000', '3x4', 0, 'ks1', 'kamar3.jpg', 'kamar4.jpg', 1),
('km3', 1, 1, 0, 0, '470000', '3x4', 0, 'ks1', 'kamar3.jpg', 'kamar4.jpg', 1),
('km4', 1, 1, 0, 0, '470000', '3x4', 0, 'ks2', 'kamar3.jpg', 'kamar4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbkos`
--

CREATE TABLE `tbkos` (
  `kdkos` varchar(5) NOT NULL,
  `namakos` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jemuran` int(2) DEFAULT NULL,
  `jeniskos` varchar(2) NOT NULL,
  `kamarmandi` int(2) DEFAULT NULL,
  `Parkiran` int(2) DEFAULT NULL,
  `kampus` varchar(5) DEFAULT NULL,
  `dapur` int(2) DEFAULT NULL,
  `televisi` int(2) DEFAULT NULL,
  `wifi` int(2) DEFAULT NULL,
  `warungmakan` int(2) DEFAULT NULL,
  `masjid` int(2) DEFAULT NULL,
  `atm` int(2) DEFAULT NULL,
  `minimarket` int(2) DEFAULT NULL,
  `kdpemilik` varchar(5) NOT NULL,
  `fotokos` varchar(191) NOT NULL,
  `fotokos1` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkos`
--

INSERT INTO `tbkos` (`kdkos`, `namakos`, `alamat`, `jemuran`, `jeniskos`, `kamarmandi`, `Parkiran`, `kampus`, `dapur`, `televisi`, `wifi`, `warungmakan`, `masjid`, `atm`, `minimarket`, `kdpemilik`, `fotokos`, `fotokos1`) VALUES
('ks1', 'bangka 7', 'bangka', 1, 'lk', 1, 1, '10km', 0, 0, 0, 1, 0, 0, 1, 'k2', '912722.jpg', '912722.jpg'),
('ks2', 'semeru', 'semeru1', 0, 'pr', 1, 1, '5km', 1, 0, 1, 0, 1, 0, 1, 'k2', 'kos.jpg', 'kos1.jpg'),
('ks3', 'semeru', 'semeru1', 0, 'pr', 1, 1, '6km', 1, 0, 1, 0, 1, 0, 1, 'k2', 'kos.jpg', 'kos1.jpg'),
('ks4', 'patrang', 'patrang', 0, 'lk', 1, 0, '1', 0, 1, 0, 0, 0, 0, 1, 'k2', '912722.jpg', '912722.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbpemilik`
--

CREATE TABLE `tbpemilik` (
  `kdpemilik` varchar(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `fotoprofil` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpemilik`
--

INSERT INTO `tbpemilik` (`kdpemilik`, `nama`, `nohp`, `username`, `password`, `email`, `alamat`, `fotoprofil`) VALUES
('k1', 'ali', '089765', 'erty', '123', '123', '123', 'index.jpg'),
('k2', 'm al ghazali si', '0895358129878', 'ali', '123', 'ali@gmail.com', 'situbondo', 'index.jpg'),
('k3', 'm al ghazali', '089726', 'ali', '123', 'as@gmail.com', 'situbondo', 'index.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbpenyewa`
--

CREATE TABLE `tbpenyewa` (
  `nopenyewa` varchar(5) NOT NULL,
  `noktp` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fotoktp` varchar(191) NOT NULL,
  `fotoprofil` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpenyewa`
--

INSERT INTO `tbpenyewa` (`nopenyewa`, `noktp`, `nama`, `alamat`, `nohp`, `username`, `password`, `email`, `fotoktp`, `fotoprofil`) VALUES
('p1', 'asu', 'as', 'jember', '0238274384738', 'nafis', '123', 'as@gmail.com', '912722.jpg', 'index.jpg'),
('p2', 'as', 'as', 'as', 'as', 'as', 'A', 'A', '912722.jpg', 'index.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `kdtransaksi` varchar(5) NOT NULL,
  `kdkamar` varchar(5) NOT NULL,
  `nopenyewa` varchar(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbtransaksi`
--

INSERT INTO `tbtransaksi` (`kdtransaksi`, `kdkamar`, `nopenyewa`, `tanggal`) VALUES
('tr1', 'km1', 'p1', '2019-12-02'),
('tr2', 'km2', 'p2', '2019-12-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `isi_chat`
--
ALTER TABLE `isi_chat`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`kode_sewa`);

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`kdadmin`);

--
-- Indexes for table `tbkamar`
--
ALTER TABLE `tbkamar`
  ADD PRIMARY KEY (`kdkamar`),
  ADD KEY `kdkos` (`kdkos`);

--
-- Indexes for table `tbkos`
--
ALTER TABLE `tbkos`
  ADD PRIMARY KEY (`kdkos`),
  ADD KEY `kdpemilik` (`kdpemilik`);

--
-- Indexes for table `tbpemilik`
--
ALTER TABLE `tbpemilik`
  ADD PRIMARY KEY (`kdpemilik`);

--
-- Indexes for table `tbpenyewa`
--
ALTER TABLE `tbpenyewa`
  ADD PRIMARY KEY (`nopenyewa`) USING BTREE;

--
-- Indexes for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`kdtransaksi`),
  ADD KEY `kdkos` (`kdkamar`),
  ADD KEY `nopenyewa` (`nopenyewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isi_chat`
--
ALTER TABLE `isi_chat`
  MODIFY `id_isi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
