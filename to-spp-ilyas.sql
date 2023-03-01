-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 10:09 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `to-spp-ilyas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(7, 'XII RPL', 'RPL'),
(8, 'XII DKV', 'DKV'),
(9, 'X BDP', 'BDP'),
(10, 'XI TKJ', 'TKJ');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(20) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_bayar` int(2) NOT NULL,
  `tahun_bayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_bayar`, `tahun_bayar`, `id_spp`, `id_kelas`, `jumlah_bayar`) VALUES
('1677572331', 9, '0052157733', '2023-02-28', 3, '2023', 7, 7, 400000),
('1677572336', 9, '0052157731', '2023-02-28', 3, '2023', 5, 7, 350000),
('1677572396', 11, '0052157736', '2023-02-28', 2, '2023', 6, 10, 400000),
('1677572402', 11, '0052157739', '2023-02-28', 11, '2018', 7, 10, 400000),
('1677573037', 9, '0052157736', '2023-02-28', 6, '2023', 6, 10, 400000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','petugas','kepsek') DEFAULT NULL,
  `is_active` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `nama_petugas`, `password`, `level`, `is_active`) VALUES
(3, 'ucokgeming', 'Ucok Gaming', '$2y$10$hMd5CXx/1H97Bt5ZAQrbmeC1VeesMKKYJVfH2Wnz2FgDuDx9M2nrO', 'admin', 'Y'),
(9, 'dafadafy', 'Dafa Pradua', '$2y$10$HEnxfz0mdAHav5xqKMtSWeyn.BSeqtrkotP3gdX0J5Tl.W9n1fzKu', 'petugas', 'Y'),
(10, 'zidan', 'Zidan Aliyen', '$2y$10$EY5i0TZXDi6cuhXv0pe66etFri5dYy3jTjre0XXHD6wnC9j/3a/ma', 'kepsek', 'Y'),
(11, 'farelkun', 'Farel Kudasi', '$2y$10$nwratbzUDV5UJhuM.l5uSeuTx/LDqjqLLLfVA2vPV8mV8KxCdEB.W', 'petugas', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('0052157731', '10983', 'Ilyas Maulana', 7, 'Jl. Handayani', '085260302756', 5),
('0052157733', '10984', 'Fajri Khotimah', 7, 'Jl. burung kaswari', '085367676799', 7),
('0052157736', '10983', 'Adita Sastra', 10, 'Jl. Rowobening', '085260302734', 6),
('0052157739', '10987', 'Genta Sihedda', 10, 'Jl. Bagus', '085260302734', 7);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(5, 2020, 350000),
(6, 2021, 400000),
(7, 2023, 400000),
(9, 2019, 250000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
