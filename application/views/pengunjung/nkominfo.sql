-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 05:10 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nkominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(25) NOT NULL,
  `NAMA` varchar(70) NOT NULL,
  `TAMATANPANGKAT` varchar(15) NOT NULL,
  `PANGKATBERIKUTNYA` varchar(15) NOT NULL,
  `KENAIKANTERAHIR` varchar(15) NOT NULL,
  `KENAIKANBERIKUTNYA` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `NAMA`, `TAMATANPANGKAT`, `PANGKATBERIKUTNYA`, `KENAIKANTERAHIR`, `KENAIKANBERIKUTNYA`) VALUES
('195804231983032007', 'Made Suryaningsih, B.Sc,SH', '01/04/05', 'TOP', '01/03/14', '01/03/16'),
('195805151994031002', 'Anak Agung Ngurah Suyadnya', '01/04/14', 'TOP', '01/03/15', '01/03/17'),
('195810041986031014', 'I Gusti Putu KMP. Widagda, SE', '01/04/01', 'TOP', '01/03/14', '01/03/16'),
('196004071990031009', 'Jayendra Arsa Putra, AM, SE', '01/04/14', 'TOP', '01/03/14', '01/03/16'),
('196010071998032003', 'Dra. Lala Tendriwati', '01/04/10', 'TOP', '01/03/14', '01/03/16'),
('196012311989031182', 'Ketut Sumerta, SE', '01/04/11', 'TOP', '01/03/15', '01/03/17'),
('196104241981031007', 'Anom Prasetya, SE', '01/10/09', 'TOP', '01/03/14', '01/03/16'),
('196211111982081001', 'I Nyoman Dharmayasa, S.Sos, M.Si', '01/10/13', 'TOP', '01/08/13', '01/08/15'),
('196307312006041001', 'I Made Suantara', '01/04/14', '01/04/18', '01/02/14', '01/02/16'),
('196308141986032027', 'Putu Aju Wiwiek Sutari, S.Sos', '01/04/13', 'TOP', '01/03/15', '01/03/17'),
('196403171995032003', 'Ida Ayu Komang Marini,SH, M.Si', '01/10/09', 'TOP', '01/03/15', '01/03/17'),
('196409221992012001', 'NI Alit Sucitawati, SE', '01/04/09', 'TOP', '01/01/14', '01/01/16'),
('196410152006041013', 'I Made Wijaya', '01/04/14', '01/04/18', '01/02/14', '01/02/16'),
('196605251993031010', 'I Dewa Made Agung, SE,M.Si', '01/04/15', 'TOP', '01/03/15', '01/03/17'),
('196805072000031004', 'I Nyoman Sudarma, SH', '01/10/13', '01/04/17', '01/04/14', '01/04/16'),
('196903101989032014', 'Ni Wayan Martini, SE', '01/04/01', 'TOP', '01/03/14', '01/03/16'),
('196910121989031004', 'I Gusti Agung Putu Maniknaya, S.Sos', '01/04/12', 'TOP', '01/03/14', '01/03/16'),
('197004291995031003', 'Ida Bagus Gde Agung Sutha Wijaya,SE,MM', '01/10/09', 'TOP', '01/03/15', '01/03/17'),
('197107071992012002', 'Ni Nyoman Ranih Artini, S.IP', '01/10/14', 'TOP', '01/01/15', '01/01/17'),
('197403251998032006', 'Sri Ayu Sutrisna, S.Kom,MT', '01/10/12', 'TOP', '01/03/14', '01/03/16'),
('197405172000031003', 'Ida Bagus Dwi Putra Arnayasa, ST', '01/04/12', 'TOP', '01/03/14', '01/03/16'),
('197407011998032008', 'Anak Agung Sagung Yuli Suryawathi, SE,M.Si', '01/04/14', 'TOP', '01/03/14', '01/03/16'),
('197407112000032005', 'Anak Agung Sagung Ratih Juliani, ST', '01/04/12', 'TOP', '01/03/14', '01/03/16'),
('197503251994032001', 'Ni Made Anggreni Widhiyani, S.Sos', '01/04/12', '01/04/16', '01/03/15', '01/03/17'),
('197601012000032003', 'I Dewa Ayu Sri Ratnaningsih, SH', '01/04/12', 'TOP', '01/03/14', '01/03/16'),
('197601172010012006', 'Anak Agung Sagung Mas Widiastuti, SH', '01/04/14', '01/04/18', '01/01/14', '01/01/16'),
('197705262010011015', 'I Wayan Darsana ', '01/04/14', '01/04/18', '01/01/14', '01/01/16'),
('198003122009032010', 'Marsalina Lusia Omalor, SH', '01/04/13', '01/04/17', '01/11/13', '01/11/15'),
('198007202010011018', 'Anak Agung Raka Udayana   ', '01/04/14', '01/04/18', '01/01/14', '01/01/16'),
('198108252010012034', 'Pande Made Wirayati', '01/04/14', '01/04/18', '01/07/15', '01/07/17'),
('198112262010011018', 'Nyoman Sudiarthana, ST', '01/04/14', '01/02/18', '01/01/14', '01/01/16'),
('198308082009031006', 'Ida Bagus Wirama Puja Manuaba,S.Kom, M.M.Kom', '01/04/13', '01/04/17', '01/03/15', '01/03/17'),
('198311172009031005', 'Made Andyka Surya Kencana, S.Kom', '01/04/13', '01/04/17', '01/03/15', '01/03/17'),
('198311232012121004', 'I Nyoman Suardana', '01/12/12', '01/04/16', '01/01/14', '01/01/16'),
('198401072009031005', 'I Ketut Agus Indra Diatmika, S.Kom.', '01/04/14', '01/04/17', '01/03/15', '01/03/17'),
('198404062009031006', 'Dewa Ngakan Ketut Rama Sanjaya, S.Kom', '01/04/13', '01/04/17', '01/03/15', '01/03/17'),
('198404162009031007', 'I Made Arta Wibawa, S.Kom', '01/04/14', '01/04/17', '01/03/15', '01/03/17'),
('198405142009032015', 'Ayu Nyoman Waisantini Winaya, S.Kom', '01/04/13', '01/04/17', '01/03/15', '01/03/17'),
('198607222010012041', 'Tjokorda Istri Ratih Kumbara Dewi, ST ', '01/04/14', '01/04/18', '01/01/14', '01/01/16'),
('198703132010012033', 'Ida Ayu Ary Dwijayanti, SE', '01/04/14', '01/04/18', '01/01/14', '01/01/16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
