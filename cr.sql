-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2016 at 06:30 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `ID` int(4) NOT NULL,
  `NRP` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamatasli` varchar(200) NOT NULL,
  `alamatsurabaya` varchar(200) NOT NULL,
  `passwd` varchar(100) DEFAULT NULL,
  `keahlian` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `statusbayar` varchar(15) NOT NULL DEFAULT 'Belum bayar',
  `keanggotaan` varchar(50) DEFAULT 'Anggota',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`ID`, `NRP`, `nama`, `jurusan`, `tanggal`, `telepon`, `email`, `jeniskelamin`, `alamatasli`, `alamatsurabaya`, `passwd`, `keahlian`, `status`, `statusbayar`, `keanggotaan`, `updated_at`, `created_at`, `deleted_at`) VALUES
(28, '5113100046', 'Burhanudin Rasyid', 'T. Informatika', '1994-09-17', '085664497933', 'hanumuslem@gmail.com', 'L', 'Blitar', 'Keputih', '01cfcd4f6b8770febfb40cb906715822', '', 'Aktif', 'Belum bayar', 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '5113100043', 'Ahmad Zaenal Mustofa', 'T. Informatika', '1994-06-29', '085664497937', 'mustofaahmad29@gmail.com', '', 'Kebumen', 'Keputih Gg. Makam', '827ccb0eea8a706c4c34a16891f84e7b', '', 'Aktif', 'Belum bayar', 'Anggota', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `anggota_kelompok`
--

CREATE TABLE `anggota_kelompok` (
  `kelompok` varchar(20) NOT NULL,
  `NRP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_kelompok`
--

INSERT INTO `anggota_kelompok` (`kelompok`, `NRP`) VALUES
('B', '5113100045'),
('B', '5113100070'),
('B', '2113100030'),
('B', '3213100026'),
('B', '4113100050');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `NRP` varchar(20) NOT NULL,
  `genre1` varchar(30) NOT NULL,
  `genre2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`NRP`, `genre1`, `genre2`) VALUES
('5113100043', '1', '3'),
('5113100043', '1', '3'),
('5113100043', '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `j_kelompok`
--

CREATE TABLE `j_kelompok` (
  `id` int(11) NOT NULL,
  `nama_kelompok` varchar(20) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `mentor` varchar(200) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `jadwal` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `j_kelompok`
--

INSERT INTO `j_kelompok` (`id`, `nama_kelompok`, `genre`, `mentor`, `hp`, `jadwal`) VALUES
(5, 'B', '1', 'Anang', '085664497937', 'Senin');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `ID` int(11) NOT NULL,
  `NRP` varchar(20) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `tahapan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `nilai` int(3) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`ID`, `NRP`, `genre`, `tahapan`, `tanggal`, `nilai`, `catatan`) VALUES
(8, '2147483647', '1', 'dasar', '2016-04-04', 70, 'tempo belum teratur'),
(9, '5113100043', '1', 'dasar', '2016-04-05', 70, 'tempo belum teratur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `j_kelompok`
--
ALTER TABLE `j_kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `j_kelompok`
--
ALTER TABLE `j_kelompok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
