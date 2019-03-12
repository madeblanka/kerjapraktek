-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 07:28 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(25) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `TMPT_LAHIR` varchar(20) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `UMUR` int(11) NOT NULL,
  `ESELON` varchar(5) NOT NULL,
  `JABATAN` varchar(50) NOT NULL,
  `JENJANG_PENDIDIKAN` varchar(50) NOT NULL,
  `TAHUN_PENDIDIKAN` int(11) NOT NULL,
  `MSKRJA_GOLONGAN` varchar(20) NOT NULL,
  `MSKRJA_KESELURUHAN` varchar(20) NOT NULL,
  `JENIS_KELAMIN` varchar(10) NOT NULL,
  `CUTI` int(11) NOT NULL,
  `CUTI_DIPAKAI` int(11) NOT NULL,
  `CUTI_SISA` int(11) NOT NULL,
  `IMG` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `NAMA`, `TMPT_LAHIR`, `TGL_LAHIR`, `UMUR`, `ESELON`, `JABATAN`, `JENJANG_PENDIDIKAN`, `TAHUN_PENDIDIKAN`, `MSKRJA_GOLONGAN`, `MSKRJA_KESELURUHAN`, `JENIS_KELAMIN`, `CUTI`, `CUTI_DIPAKAI`, `CUTI_SISA`, `IMG`) VALUES
('1966052521993031010', 'I DEWA MADE AGUNG, SE,M.SI', 'DENPASAR', '1986-11-22', 42, 'II.B', 'KEPALA DINAS KOMINFO & STATISTIK', 'S2 MAGISTER ADMINISTRASI PUBLIK', 2003, '26 TAHUN 3 BULAN', '30 TAHUN 10 BULAN', 'Laki-Laki', 12, 3, 9, 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
