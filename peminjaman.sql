-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2017 at 09:05 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `ALAT`
--

CREATE TABLE `ALAT` (
  `ID_ALAT` int(11) NOT NULL,
  `NAMA_ALAT` varchar(30) DEFAULT NULL,
  `JENIS_ALAT` varchar(30) DEFAULT NULL,
  `JUMLAH_ALAT` int(11) DEFAULT NULL,
  `KETERANGAN_ALAT` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ALAT`
--

INSERT INTO `ALAT` (`ID_ALAT`, `NAMA_ALAT`, `JENIS_ALAT`, `JUMLAH_ALAT`, `KETERANGAN_ALAT`) VALUES
(10000, 'PLC', 'Mesin otomasi', 30, 'baik');

-- --------------------------------------------------------

--
-- Table structure for table `MAHASISWA`
--

CREATE TABLE `MAHASISWA` (
  `NIM` char(11) NOT NULL,
  `NAMA_MAHASISWA` varchar(40) DEFAULT NULL,
  `PRODI` varchar(40) DEFAULT NULL,
  `JURUSAN` varchar(40) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `AKSES_LEVEL` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MAHASISWA`
--

INSERT INTO `MAHASISWA` (`NIM`, `NAMA_MAHASISWA`, `PRODI`, `JURUSAN`, `PASSWORD`, `AKSES_LEVEL`) VALUES
('1', 'David', 'Teknik komputer', 'teknologi informasi', 'aa743a0aaec8f7d7a1f0', 'Admin'),
('E3212345', 'saya', 'Teknik informatika', 'teknologi informasi', 'f7c3bc1d808e04732adf', 'Admin'),
('E41150081', 'a', 'a', 'a', '7b21848ac9af35be0ddb', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `PEMINJAMAN`
--

CREATE TABLE `PEMINJAMAN` (
  `ID_PEMINJAMAN` int(11) NOT NULL,
  `ID_ALAT` int(11) DEFAULT NULL,
  `NIM` char(11) DEFAULT NULL,
  `TANGGAL_PEMINJAMAN` datetime DEFAULT NULL,
  `TANGGAL_PENGEMBALIAN` datetime DEFAULT NULL,
  `KETERANGAN_DENDA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TUGAS_AKHIR`
--

CREATE TABLE `TUGAS_AKHIR` (
  `ID_TUGAS_AKHIR` int(11) NOT NULL,
  `JUDUL_TUGAS_AKHIR` varchar(100) DEFAULT NULL,
  `PENERBIT` varchar(30) DEFAULT NULL,
  `PRODI` varchar(40) DEFAULT NULL,
  `JURUSAN` varchar(40) DEFAULT NULL,
  `TAHUN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TUGAS_AKHIR`
--

INSERT INTO `TUGAS_AKHIR` (`ID_TUGAS_AKHIR`, `JUDUL_TUGAS_AKHIR`, `PENERBIT`, `PRODI`, `JURUSAN`, `TAHUN`) VALUES
(1, 'oooo', 'saya', 'Teknik informatika', 'teknologi informasi', 2015),
(2, 'aaa', 'david', 'Teknik komputer', 'teknologi informasi', 2010);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ALAT`
--
ALTER TABLE `ALAT`
  ADD PRIMARY KEY (`ID_ALAT`);

--
-- Indexes for table `MAHASISWA`
--
ALTER TABLE `MAHASISWA`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `PEMINJAMAN`
--
ALTER TABLE `PEMINJAMAN`
  ADD PRIMARY KEY (`ID_PEMINJAMAN`),
  ADD KEY `FK_REFERENCE_2` (`ID_ALAT`),
  ADD KEY `FK_REFERENCE_3` (`NIM`);

--
-- Indexes for table `TUGAS_AKHIR`
--
ALTER TABLE `TUGAS_AKHIR`
  ADD PRIMARY KEY (`ID_TUGAS_AKHIR`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ALAT`
--
ALTER TABLE `ALAT`
  MODIFY `ID_ALAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;
--
-- AUTO_INCREMENT for table `PEMINJAMAN`
--
ALTER TABLE `PEMINJAMAN`
  MODIFY `ID_PEMINJAMAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `TUGAS_AKHIR`
--
ALTER TABLE `TUGAS_AKHIR`
  MODIFY `ID_TUGAS_AKHIR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `PEMINJAMAN`
--
ALTER TABLE `PEMINJAMAN`
  ADD CONSTRAINT `FK_REFERENCE_2` FOREIGN KEY (`ID_ALAT`) REFERENCES `ALAT` (`ID_ALAT`),
  ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`NIM`) REFERENCES `MAHASISWA` (`NIM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
