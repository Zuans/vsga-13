-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2023 at 06:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_perpus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id_admin` int(5) NOT NULL,
  `nm_admin` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin@mail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbanggota`
--

CREATE TABLE `tbanggota` (
  `idanggota` int(5) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `jeniskelamin` varchar(64) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `foto` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbanggota`
--

INSERT INTO `tbanggota` (`idanggota`, `nama`, `jeniskelamin`, `alamat`, `status`, `foto`) VALUES
(1, 'Juan ', 'Pria', 'ini yang pertama      ', 'Tidak Meminjam', 'Juan first02:47:45pm.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbanggota2`
--

CREATE TABLE `tbanggota2` (
  `idanggota` int(5) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `jeniskelamin` varchar(64) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `foto` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbanggota2`
--

INSERT INTO `tbanggota2` (`idanggota`, `nama`, `jeniskelamin`, `alamat`, `status`, `foto`) VALUES
(34, 'oajwt4powjt4', 'Pria', 'awgjopw4jt', 'Tidak Meminjam', '-'),
(35, 'oajwt4powjt4', 'Pria', 'awgjopw4jt', 'Tidak Meminjam', '-'),
(36, 'Juan', 'Pria', 'awgjopw4jt', 'Tidak Meminjam', '-'),
(37, 'Juan', 'Pria', 'awgjopw4jt', 'Tidak Meminjam', '-'),
(38, 'Juan', 'Pria', 'awgjopw4jt', 'Tidak Meminjam', '-'),
(39, 'eklwjfioawjeof', 'Pria', 'akwjgopwj4', 'Tidak Meminjam', '-'),
(40, 'eklwjfioawjeof', 'Pria', 'akwjgopwj4', 'Tidak Meminjam', '-'),
(41, 'eklwjfioawjeof', 'Pria', 'akwjgopwj4', 'Tidak Meminjam', '-'),
(42, 'awjo4ptw3', 'Pria', 'gnrdsgeo', 'Tidak Meminjam', '-'),
(43, 'aegjiw', '', '', 'Tidak Meminjam', '-'),
(44, '', '', '', 'Tidak Meminjam', '-'),
(45, '', '', '', 'Tidak Meminjam', '.png'),
(46, '', '', '', 'Tidak Meminjam', '12:41:58pm.png'),
(47, 'zuans', '', '', 'Tidak Meminjam', 'zuans12:43:14pm.png'),
(48, 'zuans', '', '', 'Tidak Meminjam', 'zuans12:44:25pm.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbpeminjaman`
--

CREATE TABLE `tbpeminjaman` (
  `id_transaksi` int(20) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `id_buku` int(20) NOT NULL,
  `tanggal_peminjaman` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbpeminjaman`
--

INSERT INTO `tbpeminjaman` (`id_transaksi`, `id_anggota`, `id_buku`, `tanggal_peminjaman`) VALUES
(15, 1, 9, '2023-07-23 11:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbpengembalian`
--

CREATE TABLE `tbpengembalian` (
  `id_transaksi` int(20) NOT NULL,
  `id_anggota` int(20) NOT NULL,
  `id_buku` int(20) NOT NULL,
  `tanggal_pengembalian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbpengembalian`
--

INSERT INTO `tbpengembalian` (`id_transaksi`, `id_anggota`, `id_buku`, `tanggal_pengembalian`) VALUES
(2, 1, 7, '2023-07-23 12:49:48'),
(3, 1, 9, '2023-07-23 14:11:16'),
(4, 1, 9, '2023-07-23 14:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(5) NOT NULL,
  `judul_buku` varchar(64) DEFAULT NULL,
  `kategori` varchar(64) DEFAULT NULL,
  `pengarang` varchar(64) DEFAULT NULL,
  `penerbit` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `kategori`, `pengarang`, `penerbit`) VALUES
(7, 'Kimi no nawa', 'Romance', 'Makoto Shinkai', '-'),
(10, 'Boku no pico', 'family', 'Oranoraaaa', 'Yaaadaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbanggota`
--
ALTER TABLE `tbanggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `tbanggota2`
--
ALTER TABLE `tbanggota2`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `tbpeminjaman`
--
ALTER TABLE `tbpeminjaman`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tbpengembalian`
--
ALTER TABLE `tbpengembalian`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbanggota`
--
ALTER TABLE `tbanggota`
  MODIFY `idanggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbanggota2`
--
ALTER TABLE `tbanggota2`
  MODIFY `idanggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbpeminjaman`
--
ALTER TABLE `tbpeminjaman`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbpengembalian`
--
ALTER TABLE `tbpengembalian`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
