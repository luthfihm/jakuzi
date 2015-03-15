-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2013 at 04:38 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jakuzi`
--
CREATE DATABASE `jakuzi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jakuzi`;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `id` int(3) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_pendek` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama_lengkap`, `nama_pendek`) VALUES
(160, 'Fakultas Matematika dan Pengetahuan Alam', 'FMIPA'),
(161, 'Sekolah Ilmu dan Teknologi Hayati - Program Sains', 'SITH - S'),
(162, 'Sekolah Farmasi', 'SF'),
(163, 'Fakultas Ilmu dan Teknologi Kebumian', 'FITB'),
(164, 'Fakultas Teknik Pertambangan dan Perminyakan', 'FTTM'),
(165, 'Sekolah Teknik Elektro dan Informatika', 'STEI'),
(166, 'Fakultas Teknik Sipil dan Lingkungan', 'FTSL'),
(167, 'Fakultas Teknik Industri', 'FTI'),
(168, 'Fakultas Seni Rupa dan Desain', 'FSRD'),
(169, 'Fakultas Teknik Mesin dan Dirgantara', 'FTMD'),
(197, 'Sekolah Bisnis dan Manajemen', 'SBM'),
(198, 'Sekolah Ilmu dan Teknologi Hayati - Program Rekaya', 'SITH - R'),
(199, 'Sekolah Arsitektur dan Perencanaan Pengembangan Ko', 'SAPPK');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `kode` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `fakultas` int(3) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode`, `nama`, `fakultas`) VALUES
(101, 'Matematika', 160),
(102, 'Fisika', 160),
(103, 'Astronomi', 160),
(104, 'Mikrobiologi', 161),
(105, 'Kimia', 160),
(106, 'Biologi', 161),
(107, 'Sains dan Teknologi Farmasi', 162),
(112, 'Rekayasa Hayati', 198),
(114, 'Rekayasa Pertanian', 198),
(115, 'Rekayasa Kehutanan', 198),
(116, 'Farmasi Klinik dan Komunitas', 162),
(120, 'Teknik Gelogi', 163),
(121, 'Teknik Pertambangan', 164),
(122, 'Teknik Perminyakan', 164),
(123, 'Teknik Geofisika', 164),
(125, 'Teknik Metalurgi', 164),
(128, 'Meteorologi', 163),
(129, 'Oseanografi', 163),
(130, 'Teknik Kimia', 167),
(131, 'Teknik Mesin', 169),
(132, 'Teknik Elektro', 165),
(133, 'Teknik Fisika', 167),
(134, 'Teknik Industri', 167),
(135, 'Teknik Informatika', 165),
(136, 'Aeronotika dan Astronotika', 169),
(137, 'Teknik Material', 169),
(144, 'Manajemen Rekayasa Industri', 167),
(150, 'Teknik Sipil', 166),
(151, 'Teknik Geodesi dan Geomatika', 163),
(152, 'Arsitektur', 199),
(153, 'Teknik Lingkungan', 166),
(154, 'Planologi', 199),
(155, 'Teknik Kelautan', 166),
(160, 'TPB FMIPA', 160),
(161, 'TPB SITH-S', 161),
(162, 'TPB SF', 162),
(163, 'TPB FITB', 163),
(164, 'TPB FTTM', 164),
(165, 'TPB STEI', 165),
(166, 'TPB FTSL', 166),
(167, 'TPB FTI', 167),
(168, 'TPB FSRD', 168),
(169, 'TPB FTMD', 169),
(170, 'Seni Rupa', 168),
(171, 'Desain', 168),
(172, 'Kriya', 168),
(173, 'Desain Interior', 168),
(174, 'Desain Produk', 168),
(175, 'Desain Komunikasi Visual', 168),
(180, 'Teknik Tenaga Listrik', 165),
(181, 'Teknik Telekomunikasi', 165),
(182, 'Sistem dan Teknologi Informasi', 165),
(190, 'Manajemen', 197),
(197, 'TPB SBM', 197),
(198, 'SITH-R', 198),
(199, 'TPB SAPPK', 199);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nim` int(8) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `nama_lengkap`, `username`, `password`, `email`, `nim`, `jurusan`, `fakultas`) VALUES
(1, 'Luthfi Hamid Masykuri', 'luthfi', '959c83618ab373ced30edb1d59bff135', 'luthfi_hamid_m@yahoo.co.id', 13512100, '135', '165'),
(2, 'Asep', 'asep', 'ab56b4d92b40713acc5af89985d4b786', 'aku@mail.com', 16512119, '132', '165'),
(5, 'Hayyu'' Luthfi Hanifah', 'hayyuluthfi', 'db9ff70ecf390d29649995380e587bd8', 'heripottypot@gmail.com', 13512080, '135', '165'),
(6, 'Hilman Ramadhan', 'hilman', 'cf081b11e184de45ecce347f758936f9', 'hilmanrmdhn@gmail.com', 18212024, '182', '165'),
(7, 'j', 'j', '827ccb0eea8a706c4c34a16891f84e7b', 'rosanera9@gmail.com', 277, '135', '165'),
(8, 'bocah gaul bro', 'bocah', '81dc9bdb52d04dc20036dbd8313ed055', 'bocah_gaul@yahoo.co.id', 16513001, '165', '165'),
(9, 'Bambang', 'bams', '900150983cd24fb0d6963f7d28e17f72', 'aku@mail.com', 16512111, '135', '165');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(4) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `username` varchar(50) NOT NULL,
  `day1` varchar(1000) NOT NULL,
  `day2` varchar(1000) NOT NULL,
  `day3` varchar(1000) NOT NULL,
  `day4` varchar(1000) NOT NULL,
  `day5` varchar(1000) NOT NULL,
  `place1` varchar(1000) NOT NULL,
  `place2` varchar(1000) NOT NULL,
  `place3` varchar(1000) NOT NULL,
  `place4` varchar(1000) NOT NULL,
  `place5` varchar(1000) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`username`, `day1`, `day2`, `day3`, `day4`, `day5`, `place1`, `place2`, `place3`, `place4`, `place5`) VALUES
('0', '', '', '', '', '', '', '', '', '', ''),
('asep', '', '', '', '', '', '', '', '', '', ''),
('bams', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:2:"14";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:4:"7606";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}'),
('bocah', '', '', '', '', '', '', '', '', '', ''),
('hayyuluthfi', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:1:"7";i:7;s:1:"7";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:1:"7";i:8;s:1:"7";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:4:"7606";i:7;s:4:"7606";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:4:"7606";i:8;s:4:"7606";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}'),
('hilman', '', '', '', '', '', '', '', '', '', ''),
('j', 'a:11:{i:0;s:1:"9";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:4:"7606";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}'),
('luthfi', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:6:"IF2112";i:5;s:0:"";i:6;s:0:"";i:7;s:6:"IF2110";i:8;s:6:"IF2110";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:6:"IF2121";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:6:"IF2110";i:8;s:6:"IF2110";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:6:"IF2121";i:1;s:6:"IF2121";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:4:"7606";i:5;s:0:"";i:6;s:0:"";i:7;s:4:"7606";i:8;s:4:"7606";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:4:"7601";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:4:"7606";i:8;s:4:"7606";i:9;s:0:"";i:10;s:0:"";}', 'a:11:{i:0;s:4:"7606";i:1;s:4:"7606";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";}');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sks` int(2) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `username`, `kode`, `nama`, `sks`, `dosen`) VALUES
(7, 'hayyuluthfi', 'IF2110', 'alstrukdat', 4, 'Fazat Nur Aziazah'),
(8, 'hayyuluthfi', 'IF2112', 'profung', 1, 'Fazat Nur Aziazah'),
(9, 'j', 'IF2112', 'Pemograman Fungsional', 1, 'Fazat Nur Azizah'),
(13, 'bocah', 'IF2110', 'Algoritma dan Struktur Data', 3, 'Fazat Nur Azizah'),
(19, 'luthfi', 'IF2112', 'Pemograman Fungsional', 1, 'Fazat Nur Azizah'),
(20, 'luthfi', 'IF2110', 'Algoritma dan Struktur Data', 4, 'Fazat Nur Azizah'),
(22, 'luthfi', 'IF2121', 'Logika Informatika', 3, 'Rila Mandala');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
