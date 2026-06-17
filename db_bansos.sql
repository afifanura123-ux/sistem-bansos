-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2026 at 04:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bansos`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `nama_bantuan` varchar(100) DEFAULT NULL,
  `jenis_bantuan` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bantuan`
--

INSERT INTO `bantuan` (`id_bantuan`, `nama_bantuan`, `jenis_bantuan`, `jumlah`) VALUES
(1, 'BLT', 'Tunai', 500000),
(2, 'PKH', 'Pendidikan', 300000),
(3, 'BLT', 'Tunai', 500000),
(5, 'Sembako', 'Barang', 200000),
(6, 'BLT UMKM', 'Tunai', 700000);

-- --------------------------------------------------------

--
-- Table structure for table `distribusi`
--

CREATE TABLE `distribusi` (
  `id_distribusi` int(11) NOT NULL,
  `nama_warga` varchar(100) DEFAULT NULL,
  `nama_bantuan` varchar(100) DEFAULT NULL,
  `tanggal_distribusi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `distribusi`
--

INSERT INTO `distribusi` (`id_distribusi`, `nama_warga`, `nama_bantuan`, `tanggal_distribusi`) VALUES
(1, 'Andi', 'BLT', '2025-05-24'),
(2, 'Siti', 'PKH', '2025-05-24'),
(3, 'Bagus', 'BLT', '2025-05-24'),
(5, 'Rina', 'Sembako', '2025-05-24'),
(6, 'Budi', 'BLT UMKM', '2025-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `pendataan`
--

CREATE TABLE `pendataan` (
  `id_pendataan` int(11) NOT NULL,
  `nama_warga` varchar(100) DEFAULT NULL,
  `tanggal_pendataan` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendataan`
--

INSERT INTO `pendataan` (`id_pendataan`, `nama_warga`, `tanggal_pendataan`, `keterangan`) VALUES
(1, 'Andi', '2025-05-24', 'Warga kurang mampu'),
(2, 'Siti', '2025-05-24', 'Penerima bantuan PKH'),
(3, 'Bagus', '2025-05-24', 'Warga kurang mampu'),
(5, 'Rina', '2025-05-24', 'Membutuhkan sembako'),
(6, 'Budi', '2025-05-24', 'Pendataan BLT');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `id_verifikasi` int(11) NOT NULL,
  `nama_warga` varchar(100) DEFAULT NULL,
  `status_verifikasi` varchar(50) DEFAULT NULL,
  `tanggal_verifikasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verifikasi`
--

INSERT INTO `verifikasi` (`id_verifikasi`, `nama_warga`, `status_verifikasi`, `tanggal_verifikasi`) VALUES
(1, 'Andi', 'Disetujui', '2025-05-24'),
(2, 'Siti', 'Disetujui', '2025-05-24'),
(3, 'Bagus', 'Disetujui', '2025-05-24'),
(5, 'Rina', 'Pending', '2025-05-24'),
(6, 'Budi', 'Disetujui', '2025-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `bantuan` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `id_bantuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nama`, `nik`, `alamat`, `bantuan`, `status`, `id_bantuan`) VALUES
(1, 'Andi', '3512345678901', 'Banyuwangi', 'BLT', 'Aktif', NULL),
(2, 'Siti', '3512345678902', 'Cluring', 'PKH', 'Aktif', NULL),
(4, 'Bagus', '3512345678908', 'Banyuwangi', 'BLT', 'Aktif', NULL),
(6, 'Rina', '3512345678903', 'Jajag', 'Sembako', 'Aktif', NULL),
(7, 'Budi', '3512345678904', 'Genteng', 'BLT UMKM', 'Aktif', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indexes for table `distribusi`
--
ALTER TABLE `distribusi`
  ADD PRIMARY KEY (`id_distribusi`);

--
-- Indexes for table `pendataan`
--
ALTER TABLE `pendataan`
  ADD PRIMARY KEY (`id_pendataan`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `distribusi`
--
ALTER TABLE `distribusi`
  MODIFY `id_distribusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pendataan`
--
ALTER TABLE `pendataan`
  MODIFY `id_pendataan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `verifikasi`
--
ALTER TABLE `verifikasi`
  MODIFY `id_verifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
