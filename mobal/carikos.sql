-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2019 pada 00.49
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
-- Struktur dari tabel `tbadmin`
--

CREATE TABLE `tbadmin` (
  `kdadmin` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis` enum('laki-laki','perempuan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

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
  `fotokamar1` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data untuk tabel `tbkamar`
--

INSERT INTO `tbkamar` (`kdkamar`, `lemari`, `kasur`, `mejabelajar`, `kursi`, `harga`, `luaskamar`, `cermin`, `kdkos`, `fotokamar`, `fotokamar1`) VALUES
('km1', 1, 1, 1, 0, '500000', '4x4', 1, 'ks1', 'kamar1.jpg', 'kamar.jpg'),
('km2', 1, 1, 0, 0, '350000', '3x4', 0, 'ks1', 'kamar3.jpg', 'kamar4.jpg'),
('km3', 1, 1, 0, 0, '470000', '3x4', 0, 'ks1', 'kamar3.jpg', 'kamar4.jpg'),
('km4', 1, 1, 0, 0, '470000', '3x4', 0, 'ks2', 'kamar3.jpg', 'kamar4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkos`
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
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data untuk tabel `tbkos`
--

INSERT INTO `tbkos` (`kdkos`, `namakos`, `alamat`, `jemuran`, `jeniskos`, `kamarmandi`, `Parkiran`, `kampus`, `dapur`, `televisi`, `wifi`, `warungmakan`, `masjid`, `atm`, `minimarket`, `kdpemilik`, `fotokos`, `fotokos1`) VALUES
('ks1', 'bangka 7', 'bangka', 1, 'lk', 1, 1, '10km', 0, 0, 0, 1, 0, 0, 1, 'k2', '912722.jpg', '912722.jpg'),
('ks2', 'semeru', 'semeru1', 0, 'pr', 1, 1, '5km', 1, 0, 1, 0, 1, 0, 1, 'k2', 'kos.jpg', 'kos1.jpg'),
('ks3', 'semeru', 'semeru1', 0, 'pr', 1, 1, '6km', 1, 0, 1, 0, 1, 0, 1, 'k2', 'kos.jpg', 'kos1.jpg'),
('ks4', 'patrang', 'patrang', 0, 'lk', 1, 0, '1', 0, 1, 0, 0, 0, 0, 1, 'k2', '912722.jpg', '912722.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpemilik`
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
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data untuk tabel `tbpemilik`
--

INSERT INTO `tbpemilik` (`kdpemilik`, `nama`, `nohp`, `username`, `password`, `email`, `alamat`, `fotoprofil`) VALUES
('k1', 'ali', '089765', 'erty', '123', '123', '123', 'index.jpg'),
('k2', 'm al ghazali si', '0895358129878', 'ali', '123', 'ali@gmail.com', 'situbondo', 'index.jpg'),
('k3', 'm al ghazali', '089726', 'ali', '123', 'as@gmail.com', 'situbondo', 'index.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpenyewa`
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
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data untuk tabel `tbpenyewa`
--

INSERT INTO `tbpenyewa` (`nopenyewa`, `noktp`, `nama`, `alamat`, `nohp`, `username`, `password`, `email`, `fotoktp`, `fotoprofil`) VALUES
('p1', 'asu', 'as', 'as', 'as', 'nafis', '123', 'as@gmail.com', '912722.jpg', 'index.jpg'),
('p2', 'as', 'as', 'as', 'as', 'as', 'A', 'A', '912722.jpg', 'index.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `kdtransaksi` varchar(5) NOT NULL,
  `kdkamar` varchar(5) NOT NULL,
  `nopenyewa` varchar(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbkamar`
--
ALTER TABLE `tbkamar`
  ADD CONSTRAINT `tbkamar_ibfk_1` FOREIGN KEY (`kdkos`) REFERENCES `tbkos` (`kdkos`);

--
-- Ketidakleluasaan untuk tabel `tbkos`
--
ALTER TABLE `tbkos`
  ADD CONSTRAINT `tbkos_ibfk_1` FOREIGN KEY (`kdpemilik`) REFERENCES `tbpemilik` (`kdpemilik`);

--
-- Ketidakleluasaan untuk tabel `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD CONSTRAINT `tbtransaksi_ibfk_2` FOREIGN KEY (`nopenyewa`) REFERENCES `tbpenyewa` (`nopenyewa`),
  ADD CONSTRAINT `tbtransaksi_ibfk_3` FOREIGN KEY (`kdkamar`) REFERENCES `tbkamar` (`kdkamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
