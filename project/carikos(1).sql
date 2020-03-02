-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2020 pada 16.53
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

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
-- Struktur dari tabel `chat`
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
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id_chat`, `kdkos`, `id_penyewa`, `noread_pemilik`, `noread_penyewa`, `create_at`) VALUES
('2WOFURRU', '<br /', '2', 1, 0, '2019-12-31 12:44:58'),
('3O8WIWGE', '<br /', 'k10', 1, 0, '2019-12-31 05:36:24'),
('57HVO0B4', 'ks1', 'p1', 0, 0, '2019-12-13 06:25:03'),
('6P6S6ZSV', '<br /', 'k10', 1, 0, '2019-12-31 04:46:12'),
('6Z3H4OQ3', '11', '10', 0, 0, '2019-12-31 05:41:12'),
('FKZRM36E', 'ks2', 'p3', 0, 0, '2019-12-23 01:39:29'),
('GLKS94JN', 'ks1', 'p2', 0, 0, '2019-12-21 15:33:37'),
('MYEK8GLG', 'ks1', 'k2', 0, 0, '2019-12-30 16:09:58'),
('QO4J9EM8', 'ks2', 'p2', 0, 0, '2019-12-24 03:00:35'),
('U5PS8EJS', 'ks6', 'k2', 0, 0, '2019-12-28 02:18:47'),
('WBLNO1LZ', '1', '2', 0, 0, '2019-12-31 13:10:28'),
('YTKV6219', '1', '1', 1, 0, '2019-12-31 08:48:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isi_chat`
--

CREATE TABLE `isi_chat` (
  `id_isi` int(6) NOT NULL,
  `id_chat` varchar(8) NOT NULL,
  `tipe` int(1) NOT NULL COMMENT '1 = penyewa 2 = pemilik',
  `isinya` text NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `isi_chat`
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
(14, '57HVO0B4', 2, 'sdsd', '2019-12-16 11:28:06'),
(15, '57HVO0B4', 2, 'woy', '2019-12-22 15:29:00'),
(16, '57HVO0B4', 1, 'apa', '2019-12-22 20:45:15'),
(17, '', 1, 'aakah saya bisa memsan punya bapak', '2019-12-22 20:51:27'),
(18, 'GLKS94JN', 1, 'al', '2019-12-22 21:56:02'),
(19, 'GLKS94JN', 1, 'IJI', '2019-12-22 21:59:08'),
(20, 'R71WQCAV', 1, 'a', '2019-12-22 22:36:06'),
(21, 'R71WQCAV', 1, 'f', '2019-12-22 22:37:21'),
(22, 'FKZRM36E', 1, 'halo', '2019-12-23 01:39:40'),
(23, '57HVO0B4', 1, 'tf', '2019-12-26 00:20:26'),
(24, '57HVO0B4', 2, 'apa woi', '2019-12-26 00:21:53'),
(25, 'U5PS8EJS', 1, 'hallo', '2019-12-28 02:19:04'),
(26, 'GLKS94JN', 1, 'al', '2019-12-30 15:41:54'),
(27, 'GLKS94JN', 1, 'halo', '2019-12-30 15:55:59'),
(28, 'MYEK8GLG', 1, 'ass', '2019-12-30 16:11:13'),
(29, '6P6S6ZSV', 1, 'halo', '2019-12-31 04:46:19'),
(30, '3O8WIWGE', 1, 'halo', '2019-12-31 05:36:32'),
(31, '6Z3H4OQ3', 1, 'halo', '2019-12-31 05:41:21'),
(32, 'YTKV6219', 1, 'halloo', '2019-12-31 08:49:00'),
(33, '2WOFURRU', 1, 'permisi', '2019-12-31 12:45:08'),
(34, 'WBLNO1LZ', 1, 'hallo', '2019-12-31 13:10:40'),
(35, 'WBLNO1LZ', 2, 'iya ?', '2019-12-31 13:14:33'),
(36, 'WBLNO1LZ', 1, 'permisi saya mau tanya', '2019-12-31 13:15:56');

--
-- Trigger `isi_chat`
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
-- Struktur dari tabel `pwdreset`
--

CREATE TABLE `pwdreset` (
  `PwdResetId` int(11) NOT NULL,
  `PwdResetEmail` text NOT NULL,
  `PwdResetSelector` text NOT NULL,
  `PwdResetToken` longtext NOT NULL,
  `PwdResetExpire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pwdreset`
--

INSERT INTO `pwdreset` (`PwdResetId`, `PwdResetEmail`, `PwdResetSelector`, `PwdResetToken`, `PwdResetExpire`) VALUES
(3, 'dekos301199@gmail.com', 'e59682305b4e14ed', '$2y$10$AnegzvPC2fuDS3yjNi.Py..6R.jDr5iHul0wgWsvg8xUUvEBpB/5a', '1576947974'),
(33, 'adynugrahaputra@gmail.com', '90e2e1d57b083b63', '$2y$10$Is7UIvnAMZ8ixyFGoFwh2.z7mD.vmZ6uB3FBDb7OU.EoW2.8./SEi', '1577703913'),
(35, 'muhnizarudn@gmail.com', '07b12a8f50c1c2f8', '$2y$10$wz50TiqVQNXLYzZo1vFJH.ph0ixwJoSS559m154I7SlwvHC75jGLS', '1577771534');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
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
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`kode_sewa`, `kdkamar`, `nopenyewa`, `data_penyewa`, `tgl_mulai`, `tgl_selesai`, `status_sewa`, `create_at`) VALUES
('1VSKIC01', 'km1', 'p1', '{\"nama\":\"Andrean Three Saputra\",\"nohp\":\"089696491481\",\"email\":\"akunhack2211@gmail.com\",\"alamat\":\"as\"}', '2019-12-14', '2019-12-13', 4, '2019-12-13 02:06:35'),
('3K58AE76', 'km1', 'p2', '{\"nama\":\"ady\",\"nohp\":\"1234567891\",\"email\":\"adynugrahaputra@gmail.com\",\"alamat\":\"jl. merak\"}', '2019-12-30', '2019-12-30', 4, '2019-12-30 15:54:59'),
('5R2HZ59J', '10', 'k10', '{\"nama\":\"aku\",\"nohp\":\"9876\",\"email\":\"muhnizarudn@gmail.com\",\"alamat\":\"situbondo\"}', '2020-01-01', '2019-12-31', 4, '2019-12-31 05:36:18'),
('6EIL0ZWS', 'km4', 'p2', '{\"nama\":\"Ali\",\"nohp\":\"0891223221\",\"email\":\"muhnizarudn@gmail.com\",\"alamat\":\"puri\"}', '2019-12-23', '2019-12-22', 4, '2019-12-22 23:21:41'),
('77YI2YBG', 'km4', 'p1', '{\"nama\":\"andre\",\"nohp\":\"0238274384738\",\"email\":\"admin@admin.com\",\"alamat\":\"bws\"}', '2019-12-16', '2019-12-13', 4, '2019-12-13 06:24:27'),
('7VAPUP5D', 'km1', 'p1', '{\"nama\":\"udin\",\"nohp\":\"0238274384738\",\"email\":\"udin@gmail.com\",\"alamat\":\"probolinggo\"}', '2019-12-15', '0000-00-00', 3, '2019-12-13 01:53:21'),
('GRG1FFA1', 'km2', 'p2', '{\"nama\":\"as\",\"nohp\":\"018392748972\",\"email\":\"ruo@gmail.com\",\"alamat\":\"as\"}', '2019-12-23', '2019-12-22', 4, '2019-12-22 22:01:19'),
('H2BMTXDS', 'km001', 'k10', '{\"nama\":\"m al ghazali si\",\"nohp\":\"0895358129878\",\"email\":\"muhnizarudn@gmail.com\",\"alamat\":\"situbondo\"}', '2020-01-01', '0000-00-00', 0, '2019-12-31 04:43:22'),
('HO2RE2FN', 'km1', 'p1', '{\"nama\":\"as\",\"nohp\":\"0238274384738\",\"email\":\"dsds@mil.ko\",\"alamat\":\"as\"}', '2019-12-14', '0000-00-00', 3, '2019-12-13 05:01:26'),
('I8FY2C3M', '2', '2', '{\"nama\":\"Muhammad Nizarudin\",\"nohp\":\"085334789657\",\"email\":\"muhnizarudn@gmail.com\",\"alamat\":\"Kota Mojokerto\"}', '2019-12-31', '0000-00-00', 0, '2019-12-31 12:14:45'),
('JUTI18OP', 'km1', 'p2', '{\"nama\":\"as\",\"nohp\":\"125\",\"email\":\"muhnizarudn@gmail.com\",\"alamat\":\"as\"}', '2019-12-23', '0000-00-00', 3, '2019-12-22 23:55:25'),
('L30VPT7C', 'km2', 'p2', '{\"nama\":\"ady\",\"nohp\":\"1234567891\",\"email\":\"adynugrahaputra@gmail.com\",\"alamat\":\"jl. merak\"}', '2019-12-30', '0000-00-00', 0, '2019-12-30 15:51:19'),
('LAO64NOY', 'km1', 'k2', '{\"nama\":\"nafis\",\"nohp\":\"0893635\",\"email\":\"ali@gmail.com\",\"alamat\":\"situbondo\"}', '2019-12-30', '0000-00-00', 0, '2019-12-29 01:18:58'),
('O5K4DJPT', 'km2', 'p1', '{\"nama\":\"ali\",\"nohp\":\"0238274384738\",\"email\":\"muhnizarudn@gmail.com\",\"alamat\":\"jember\"}', '2019-12-25', '0000-00-00', 3, '2019-12-24 02:29:39'),
('REAZ76UJ', '2', '2', '{\"nama\":\"Suhar\",\"nohp\":\"085366765234\",\"email\":\"suhar@gmail.com\",\"alamat\":\"jember\"}', '2019-12-31', '0000-00-00', 2, '2019-12-31 12:44:33'),
('RTVUH8YE', 'km1', 'p1', '{\"nama\":\"as\",\"nohp\":\"0238274384738\",\"email\":\"as@mail.com\",\"alamat\":\"as\"}', '2019-12-14', '0000-00-00', 0, '2019-12-13 01:21:55'),
('TR75TSBS', 'km1', 'p1', '{\"nama\":\"nafis\",\"nohp\":\"0238274384738\",\"email\":\"nafis@gmail.com\",\"alamat\":\"jember\"}', '2019-12-14', '0000-00-00', 3, '2019-12-13 06:23:16'),
('Y1FY28UQ', 'km1', 'p1', '{\"nama\":\"abiyu\",\"nohp\":\"0238274384738\",\"email\":\"abiyu@gmail.com\",\"alamat\":\"jember\"}', '2019-12-16', '2019-12-22', 4, '2019-12-16 10:48:49'),
('YSJ4TMVX', 'km1', 'k2', '{\"nama\":\"ady\",\"nohp\":\"1234567891\",\"email\":\"adynugrahaputra@gmail.com\",\"alamat\":\"jl.merak\"}', '2019-12-30', '2019-12-30', 4, '2019-12-30 16:04:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbadmin`
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
-- Dumping data untuk tabel `tbadmin`
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
-- Struktur dari tabel `tbkamar`
--

CREATE TABLE `tbkamar` (
  `kdkamar` int(5) NOT NULL,
  `lemari` int(2) DEFAULT NULL,
  `kasur` int(2) DEFAULT NULL,
  `mejabelajar` int(2) DEFAULT NULL,
  `kursi` int(2) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `luaskamar` varchar(10) NOT NULL,
  `cermin` int(2) DEFAULT NULL,
  `kdkos` varchar(5) NOT NULL,
  `fotokamar` varchar(191) NOT NULL,
  `fotokamar1` varchar(191) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1 = kosong 0 = disewa 2 = di pesan	'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkamar`
--

INSERT INTO `tbkamar` (`kdkamar`, `lemari`, `kasur`, `mejabelajar`, `kursi`, `harga`, `luaskamar`, `cermin`, `kdkos`, `fotokamar`, `fotokamar1`, `status`) VALUES
(1, 1, 1, 1, 1, 450000, '4x4', 1, '1', 'kosbangka2.jpg', 'index1.jpg', 1),
(2, 1, 1, 0, 0, 350000, '3x4', 0, '2', 'kostidar2.jpeg', 'kostidar3.jpg', 0),
(3, 1, 1, 0, 0, 380000, '3x4', 0, '3', 'kosmastrip2.jpg', 'kosmastrip3.jpg', 0),
(4, 1, 1, 1, 1, 500000, '4x5', 1, '4', 'kosmastrip5-3.jpg', 'kosmastrip5-4.jpg', 0),
(5, 1, 1, 1, 0, 480000, '4x4', 1, '5', 'kosmastrip3-3.jpg', 'kosmastrip3-4.jpg', 1),
(6, 1, 1, 1, 1, 450000, '4x5', 1, '6', 'kosbaturaden3.jpg', 'kosbaturaden4.jpg', 1),
(7, 1, 1, 1, 1, 500000, '4x5', 1, '7', 'kosmastrip9-3.jpg', 'kosmastrip9-4.jpg', 0),
(8, 1, 1, 1, 1, 400000, '3x4', 1, '8', 'kosperumahanmastrip2.jpg\r\n', 'kosperumahanmastrip3.jpg', 0),
(9, 1, 1, 1, 1, 460000, '4x5', 1, '9', 'kosmastrip13.jpg', 'kosmastrip14.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkos`
--

CREATE TABLE `tbkos` (
  `kdkos` int(5) NOT NULL,
  `namakos` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jemuran` int(2) DEFAULT NULL,
  `jeniskos` varchar(2) NOT NULL,
  `kamarmandi` int(2) DEFAULT NULL,
  `Parkiran` int(2) DEFAULT NULL,
  `kampus` int(5) DEFAULT NULL,
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
-- Dumping data untuk tabel `tbkos`
--

INSERT INTO `tbkos` (`kdkos`, `namakos`, `alamat`, `jemuran`, `jeniskos`, `kamarmandi`, `Parkiran`, `kampus`, `dapur`, `televisi`, `wifi`, `warungmakan`, `masjid`, `atm`, `minimarket`, `kdpemilik`, `fotokos`, `fotokos1`) VALUES
(1, 'Kobar 7', 'Jalan Bangka Raya No 7', 1, 'lk', 1, 1, 100, 1, 0, 0, 1, 1, 1, 1, '1', 'kosbangka.jpeg', 'kosbangka1.jpeg'),
(2, 'TDR', 'Jalan Tidar no 5', 1, 'lk', 1, 1, 50, 1, 0, 1, 1, 1, 1, 1, '2', 'kostidar.jpg', 'kostidar1.jpg'),
(3, 'sejahtera', 'Jalan Mastrip 4', 1, 'lk', 1, 1, 40, 0, 0, 1, 1, 0, 0, 1, '3', 'kosmastrip.jpg', 'kosmastrip1.jpg'),
(4, 'Happy', 'Jalan Mastrip 5', 1, 'pr', 1, 1, 35, 1, 0, 1, 1, 1, 1, 1, '1', 'kosmastrip5-1.jpg', 'kosmastrip5-2.jpg'),
(5, 'kos ceria', 'Jalan Mastrip 3', 1, 'pr', 1, 1, 15, 1, 0, 1, 1, 1, 0, 0, '5', 'kosmastrip3-1.jpg', 'kosmastrip3-2.jpg'),
(6, 'baden', 'Jalan Batu Raden 3', 1, 'pr', 1, 1, 45, 1, 1, 1, 1, 1, 1, 1, '6', 'kosbaturaden1.jpg', 'kosbaturaden2.jpg'),
(7, 'Malan', 'Jalan Mastrip 9', 1, 'pr', 1, 1, 1, 1, 0, 1, 0, 1, 0, 0, '7', 'kosmastrip9-1.jpg', 'kosmastrip9-2.jpg'),
(8, 'Al-Jab', 'Perumahan Mastrip', 1, 'pr', 1, 0, 90, 1, 0, 1, 1, 1, 0, 0, '8', 'kosperumahanmastrip.jpg', 'kosperumahanmastrip1.jpg'),
(9, 'smile', 'Jalan Mastrip 5 no 4', 1, '1', 0, 1, 150, 1, 1, 1, 1, 1, 0, 0, '9', 'kosmastrip11.jpg', 'kosmastrip12.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpemilik`
--

CREATE TABLE `tbpemilik` (
  `kdpemilik` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `fotoprofil` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpemilik`
--

INSERT INTO `tbpemilik` (`kdpemilik`, `nama`, `nohp`, `username`, `password`, `email`, `alamat`, `fotoprofil`) VALUES
(1, 'Ismail', '089765554678', 'mail25', 'mail25', 'ismail@gmail.com', 'Jalan Bangka Raya No 7', 'index.jpg'),
(2, 'fatimah', '089535812987', 'fatma', '1234', 'fatimah@gmail.com', 'Jalan Tidar no 5', 'index.jpg'),
(3, 'Santi', '089456354234', 'snt55', 'abcd', 'santi55@gmail.com', 'Jalan Mastrip 4', 'index.jpg'),
(4, 'Sari', '087646543555', 'sari88', 'mantap', 'sari88@gmail.com', 'Jalan Mastrip 5', 'index.jpg'),
(5, 'Ida', '085334778567', 'ida11', '0000', 'ida11@gmail.com', 'Jalan Mastrip 3', 'index.jpg'),
(6, 'roro', '082667546543', 'RR77', '1234567', 'RR@gmail.com', 'Jalan Batu Raden 3', 'index.jpg'),
(7, 'faruq', '085332675890', 'frq00', 'qwerty', 'frq00@gmail.com', 'Jalan Mastrip 9', 'index.jpg'),
(8, 'zul', '085456788324', 'zul58', '123', 'zul58@gmail.com', 'Perumahan Mastrip', 'index.jpg'),
(9, 'Toha', '087543456788', 'th88', '567', 'toha88@gmail.com', 'Jalan Mastrip 5 no 4', 'index.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpenyewa`
--

CREATE TABLE `tbpenyewa` (
  `nopenyewa` int(5) NOT NULL,
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
-- Dumping data untuk tabel `tbpenyewa`
--

INSERT INTO `tbpenyewa` (`nopenyewa`, `noktp`, `nama`, `alamat`, `nohp`, `username`, `password`, `email`, `fotoktp`, `fotoprofil`) VALUES
(1, '3651123478954', 'Suhar', 'jember', '085366765234', 'shr', '12345', 'suhar@gmail.com', '', 'index.jpg'),
(2, '3634875689345', 'M Al Ghazali', 'kecamatan kapongan situbondo', '085245677545', 'ALI123', '12345', 'Unyingjr@gmail.com', '', 'index.jpg'),
(3, '3534568797658', 'Muhammad Nizarudin', 'Kota Mojokerto', '085334789657', 'Nizar99', '123', 'muhnizarudn@gmail.com', '', 'index.jpg'),
(4, '3645678956578', 'ady nugraha', 'Jalan Irian Jaya No 7', '086249677218', 'ady123', '123', 'adynugrahaputra@gmail.com', '', 'index.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `kdtransaksi` varchar(5) NOT NULL,
  `kdkamar` varchar(5) NOT NULL,
  `nopenyewa` varchar(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbtransaksi`
--

INSERT INTO `tbtransaksi` (`kdtransaksi`, `kdkamar`, `nopenyewa`, `tanggal`) VALUES
('tr1', 'km1', 'p1', '2019-12-02'),
('tr2', 'km2', 'p2', '2019-12-16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indeks untuk tabel `isi_chat`
--
ALTER TABLE `isi_chat`
  ADD PRIMARY KEY (`id_isi`);

--
-- Indeks untuk tabel `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`PwdResetId`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`kode_sewa`);

--
-- Indeks untuk tabel `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`kdadmin`);

--
-- Indeks untuk tabel `tbkamar`
--
ALTER TABLE `tbkamar`
  ADD PRIMARY KEY (`kdkamar`),
  ADD KEY `kdkos` (`kdkos`);

--
-- Indeks untuk tabel `tbkos`
--
ALTER TABLE `tbkos`
  ADD PRIMARY KEY (`kdkos`),
  ADD KEY `kdpemilik` (`kdpemilik`);

--
-- Indeks untuk tabel `tbpemilik`
--
ALTER TABLE `tbpemilik`
  ADD PRIMARY KEY (`kdpemilik`);

--
-- Indeks untuk tabel `tbpenyewa`
--
ALTER TABLE `tbpenyewa`
  ADD PRIMARY KEY (`nopenyewa`) USING BTREE;

--
-- Indeks untuk tabel `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`kdtransaksi`),
  ADD KEY `kdkos` (`kdkamar`),
  ADD KEY `nopenyewa` (`nopenyewa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `isi_chat`
--
ALTER TABLE `isi_chat`
  MODIFY `id_isi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `PwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tbkamar`
--
ALTER TABLE `tbkamar`
  MODIFY `kdkamar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbkos`
--
ALTER TABLE `tbkos`
  MODIFY `kdkos` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbpemilik`
--
ALTER TABLE `tbpemilik`
  MODIFY `kdpemilik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbpenyewa`
--
ALTER TABLE `tbpenyewa`
  MODIFY `nopenyewa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
