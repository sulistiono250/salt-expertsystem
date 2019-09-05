-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 04:43 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_garam`
--

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE IF NOT EXISTS `klien` (
  `id_user` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id_user`, `nama`, `alamat`, `telp`, `pekerjaan`, `email`) VALUES
('admin', 'Gandes', 'jl. Soekarno hatta dalam no.20 Malang', '087759785404', 'mahasiswi', 'gandes.ns@gmail.com'),
('U0013', 'yakup', 'sedayulawas', '085237339342', '', ''),
('U0014', 'test', 'dsds', '232', '', ''),
('U0015', 'user', 'djahs', '12345', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE IF NOT EXISTS `konsultasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `ciri` varchar(200) NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `kandungan` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=202 ;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `id_user`, `tgl`, `jenis`, `ciri`, `hasil`, `kandungan`) VALUES
(66, 'U0001', '2017-02-13', 'Garam Industri', 'PutihBening Basah|Pahit|Tajam', 'KOSMETIK / FARMASI', 'NaCl (Natrium Clorida)	83.0 %\r\nKadar Air	1.0 %\r\nCa (Calsium)	1.04 %\r\nMg (Magnesium)	1 %\r\n'),
(71, 'U0001', '2017-02-21', 'Garam Konsumsi ', 'Putih Bening Basah|Asin Ringan|Segi Empat', 'KW2-Kurang Baik', 'NaCl (Natrium Clorida)	65.0 %,\r\nKadar Air	1%,\r\nCa (Calsium)	0.10 %,\r\nMg (Magnesium)	0.24 %\r\n'),
(73, 'U0001', '2017-02-22', 'Garam Konsumsi ', 'Putih Bening Basah|Asin Pahit|Segi Empat', 'KW2-Kurang Baik', 'NaCl (Natrium Clorida)	80 %,\r\nKadar Air	2.0 %,\r\nCa (Calsium)	0.17 %,\r\nMg (Magnesium)	1.06 %\r\n'),
(74, 'U0001', '2017-02-22', 'Garam Industri', 'Putih Bening Basah|Pahit|Tajam', 'KOSMETIK / FARMASI', 'NaCl (Natrium Clorida)	83.0 %\r\nKadar Air	1.0 %\r\nCa (Calsium)	1.04 %\r\nMg (Magnesium)	1 %\r\n'),
(75, 'U0001', '2017-02-22', 'Garam Konsumsi ', 'Putih Kapur Kering|Asin Garam|Segi Empat', 'KW2-Kurang Baik', 'NaCl (Natrium Clorida)	80.20 %,\r\nKadar Air	1 %,\r\nCa (Calsium)	0.24%,\r\nMg (Magnesium)	0.16%\r\n'),
(77, 'U0002', '2017-02-22', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Garam|Segi Empat', 'KW1-Baik', 'NaCl (Natrium Clorida)	97.0 %,\r\nKadar Air	1%,\r\nCa (Calsium)	0.10 %,\r\nMg (Magnesium)	0.20 %\r\n\r\n'),
(79, 'U0004', '2017-02-22', 'Garam Konsumsi ', 'Putih Kapur Kering|Asin Garam|Segi Empat', 'KW2-Kurang Baik', 'NaCl (Natrium Clorida)	80.20 %,\r\nKadar Air	1 %,\r\nCa (Calsium)	0.24%,\r\nMg (Magnesium)	0.16%\r\n'),
(80, 'U0004', '2017-02-22', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Garam|Segi Empat', 'KW1-Baik', 'NaCl (Natrium Clorida)	97.0 %,\r\nKadar Air	1%,\r\nCa (Calsium)	0.10 %,\r\nMg (Magnesium)	0.20 %\r\n\r\n'),
(82, 'U0003', '2017-02-22', 'Garam Konsumsi ', 'Putih Kapur Basah|Asin Ringan|Segi Empat', 'KW2-Kurang Baik', 'NaCl (Natrium Clorida)	70.67 %,\r\nKadar Air	1.05 %,\r\nCa (Calsium)	0.48 %,\r\nMg (Magnesium)	0.38 %\r\n'),
(86, 'U0006', '2017-02-23', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW3 - Buruk', '- NaCl (Natrium Clorida) = 80.01 %\r\n- Kadar Air = 2.15 %\r\n- Ca (Calsium) = 1.07 %\r\n- Mg (Magnesium) = 2.02 %\r\n'),
(87, 'U0006', '2017-02-23', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW3 - Buruk', '- NaCl (Natrium Clorida) = 80.01 %\r\n- Kadar Air = 2.15 %\r\n- Ca (Calsium) = 1.07 %\r\n- Mg (Magnesium) = 2.02 %\r\n'),
(93, 'U0006', '2017-02-23', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW3 - Buruk', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(94, 'U0006', '2017-02-23', 'Garam Konsumsi ', 'Putih Kapur Basah|Asin Ringan|Segi Empat', 'KW2 - Kurang Baik', 'NaCl (Natrium Clorida) = 70.67%  Kadar Air = 1.5%, Ca (Calsium) = 0.48%, Mg (Magnesium) = 0.38%\r\n'),
(95, 'U0006', '2017-02-23', 'Garam Konsumsi ', 'Putih Kapur Basah|Asin Ringan|Segi Empat', 'KW2 - Kurang Baik', 'NaCl (Natrium Clorida) = 70.67%  Kadar Air = 1.5%, Ca (Calsium) = 0.48%, Mg (Magnesium) = 0.38%\r\n'),
(96, 'U0006', '2017-02-23', 'Garam Konsumsi ', 'Putih Kapur Basah|Asin Ringan|Segi Empat', 'KW2 - Kurang Baik', 'NaCl (Natrium Clorida) = 70.67%,  Kadar Air = 1.5%, Ca (Calsium) = 0.48%, Mg (Magnesium) = 0.38%\r\n'),
(97, 'U0006', '2017-02-23', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Garam|Segi Empat', 'KW1 - Baik', 'NaCl (Natrium Clorida) = 97%, Kadar Air = 1%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.20%\r\n\r\n'),
(98, 'U0006', '2017-02-23', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Garam|Segi Empat', 'KW1 - Baik', 'NaCl (Natrium Clorida) = 97%, Kadar Air = 1%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.20%\r\n\r\n'),
(99, 'U0006', '2017-02-23', 'Data tidak ditemuakn', 'Putih Bening Kering|Asin Pahit|Tajam', 'Data tidak ditemukan', ''),
(100, 'U0006', '2017-02-23', 'Data tidak ditemuakn', '||', 'Data tidak ditemukan', ''),
(101, 'admin', '2017-02-24', 'Garam Konsumsi ', 'Putih Bening Basah|Asin Pahit|Segi Empat', 'KW2 - Kurang Baik', 'NaCl (Natrium Clorida) = 80%, Kadar Air = 2%, Ca (Calsium) = 0.17%, Mg (Magnesium) = 1.6%\r\n'),
(102, 'admin', '2017-02-24', 'Garam Konsumsi ', 'Putih Bening Basah|Asin Pahit|Segi Empat', 'KW2 - Kurang Baik', 'NaCl (Natrium Clorida) = 80%, Kadar Air = 2%, Ca (Calsium) = 0.17%, Mg (Magnesium) = 1.6%\r\n'),
(103, 'U0006', '2017-02-24', 'Data tidak ditemuakn', 'Putih Bening Basah|Asin Ringan|Tajam', 'Data tidak ditemukan', 'Data tidak ditemuakn'),
(104, 'U0002', '2017-02-24', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Ringan|Segi Empat', 'KW1 - Baik', 'NaCl (Natrium Clorida) = 63.68%, Kadar Air = 1%, Ca (Calsium) = 0.11%, Mg (Magnesium) = 0.25%\r\n\r\n'),
(105, 'U0002', '2017-02-24', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Ringan|Segi Empat', 'KW1 - Baik', 'NaCl (Natrium Clorida) = 63.68%, Kadar Air = 1%, Ca (Calsium) = 0.11%, Mg (Magnesium) = 0.25%\r\n\r\n'),
(106, 'U0002', '2017-02-24', 'Data tidak ditemuakn', 'Putih Kapur Kering|Asin Ringan|Tajam', 'Data tidak ditemukan', 'Data tidak ditemuakn'),
(107, 'U0002', '2017-02-24', 'Data tidak ditemuakn', 'Putih Kapur Kering|Asin Ringan|Tajam', 'Data tidak ditemukan', 'Data tidak ditemukan'),
(108, 'U0002', '2017-02-24', 'Data tidak ditemuakn', 'Putih Bening Kering|Asin Ringan|Tajam', 'Data tidak ditemukan', 'Data tidak ditemukan'),
(109, 'U0002', '2017-02-24', 'Data tidak ditemukan', 'Putih Bening Kering|Asin Ringan|Tajam', 'Data tidak ditemukan', 'Data tidak ditemukan'),
(110, 'U0002', '2017-02-24', 'Data tidak ditemukan', 'Putih Bening Kering|Asin Ringan|Tajam', 'Data tidak ditemukan', 'Data tidak ditemukan'),
(111, 'U0002', '2017-02-24', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 - Buruk', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(112, 'U0002', '2017-02-24', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 - Buruk', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(113, 'U0002', '2017-02-24', 'Data tidak ditemukan', 'Putih Kapur Kering|Asin Garam|Tajam', 'Data tidak ditemukan', 'Data tidak ditemukan'),
(114, 'U0002', '2017-02-24', 'Garam Konsumsi ', 'Putih Kapur Kering|Asin Garam|Segi Empat', 'KW2 - Kurang Baik', 'NaCl (Natrium Clorida) = 80.20%, Kadar Air = 1%, Ca (Calsium) = 0.24%, Mg (Magnesium) = 0.16%\r\n'),
(115, 'U0002', '2017-02-24', 'Garam Industri', 'Putih Bening Basah|Pahit|Tajam', 'KOSMETIK / FARMASI', 'NaCl (Natrium Clorida) = 83%, Kadar Air = 1%, Ca (Calsium) = 1.4%, Mg (Magnesium)	1%'),
(116, 'U0002', '2017-02-24', 'Kualitas Tidak Ada', 'Putih Bening Kering|Asin Ringan|Tajam', 'Kualitas Tidak Ada', 'Kualitas Tidak Ada'),
(117, 'U0002', '2017-02-24', 'Kualitas Tidak Ada', 'Putih Bening Basah|Asin Ringan|Tajam', 'Kualitas Tidak Ada', 'Kualitas Tidak Ada'),
(118, 'U0002', '2017-02-24', 'Jenis Tidak Ada', 'Putih Bening Basah|Asin Ringan|Tajam', 'Kualitas Tidak Ada', 'Kandungan Tidak Ada'),
(119, 'U0002', '2017-02-24', 'Jenis Tidak Ada', 'Putih Bening Basah|Asin Ringan|Tajam', 'Kualitas Tidak Ada', 'Kandungan Tidak Ada'),
(120, 'U0002', '2017-02-24', 'Garam Konsumsi ', 'Putih Kapur Kering|Asin Ringan|Segi Empat', 'KW2 - Kurang Baik', 'NaCl (Natrium Clorida) = 65.15%, Kadar Air = 1%, Ca (Calsium) = 0.15%, Mg (Magnesium) = 0.28%\r\n'),
(121, 'U0002', '2017-02-24', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Garam|Segi Empat', 'KW1 - Baik', 'NaCl (Natrium Clorida) = 97%, Kadar Air = 1%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.20%\r\n\r\n'),
(122, 'U0002', '2017-02-24', 'Jenis Tidak Ada', 'Putih Kapur Basah|Asin Ringan|Tajam', 'Kualitas Tidak Ada', 'Kandungan Tidak Ada'),
(123, 'U0002', '2017-02-24', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW3 - Buruk', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(124, 'U0002', '2017-02-24', 'Jenis Tidak Ada', 'Putih Bening Kering|Asin Garam|Tajam', 'Kualitas Tidak Ada', 'Kandungan Tidak Ada'),
(125, 'U0002', '2017-02-24', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Garam|Segi Empat', 'KW1 - Baik', 'NaCl (Natrium Clorida) = 97%, Kadar Air = 1%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.20%\r\n\r\n'),
(126, 'admin', '2017-02-28', 'Jenis Tidak Ada', 'Putih Bening Basah|Asin Ringan|Tajam', 'Kualitas Tidak Ada', 'Kandungan Tidak Ada'),
(127, 'admin', '2017-02-28', 'Jenis Tidak Ada', 'Kecoklatan Basah|Asin Ringan|Segi Empat', 'Kualitas Tidak Ada', 'Kandungan Tidak Ada'),
(128, 'admin', '2017-02-28', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW3 - Buruk', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(129, 'admin', '2017-03-01', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Ringan|Segi Empat', 'KW1 - Baik', 'NaCl (Natrium Clorida) = 63.68%, Kadar Air = 1%, Ca (Calsium) = 0.11%, Mg (Magnesium) = 0.25%\r\n\r\n'),
(130, 'U0007', '2017-03-01', 'Jenis Tidak Ada', 'Kemerahan Basah|Asin Garam|Segi Empat', 'Kualitas Tidak Ada', 'Kandungan Tidak Ada'),
(131, 'U0009', '2017-03-24', 'Jenis Tidak Ada', 'Putih Bening Kering|Asin Ringan|Tajam', 'Kualitas Tidak Ada', 'Kandungan Tidak Ada'),
(132, 'U0009', '2017-03-24', 'Garam Konsumsi ', 'Putih Kapur Basah|Asin Pahit|Segi Empat', 'KW2 - Kurang Baik', 'NaCl (Natrium Clorida) = 80.10%, Kadar Air = 2.01%, Ca (Calsium) = 0.49%, Mg (Magnesium) = 1.12%\r\n'),
(133, 'U0011', '2017-03-31', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Ringan|Segi Empat', 'KW1 - Baik', 'NaCl (Natrium Clorida) = 63.68%, Kadar Air = 1%, Ca (Calsium) = 0.11%, Mg (Magnesium) = 0.25%\r\n\r\n'),
(134, 'U0012', '2017-04-01', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW3 - Buruk', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(135, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 ( Buruk )', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(136, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 ( Buruk )', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(137, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 ( Buruk )', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(138, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 ( Buruk )', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(139, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 ( Buruk )', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(140, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 ( Buruk )', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(141, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 ( Buruk )', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(142, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Kehitaman Basah|Asin Pahit|Segi Empat', 'KW3 ( Buruk )', 'NaCl (Natrium Clorida) = 80.2%, Kadar Air = 2%, Ca (Calsium) = 1.9%, Mg (Magnesium) = 2.9%\r\n'),
(143, 'admin', '2017-04-01', 'Jenis Tidak Ada', 'Kehitaman Basah|Pahit|Tajam', 'Kualitas Tidak Ada', 'Kandungan Tidak Ada'),
(144, 'admin', '2017-04-01', 'Jenis Tidak Ada', 'Kehitaman Basah|Pahit|Tajam', 'Garam dengan ciri-ciri tersebut tidak ada', 'Kandungan Tidak Ada'),
(145, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Putih Bening Basah|Asin Garam|Segi Empat', 'KW2 ( Kurang Baik )', 'NaCl (Natrium Clorida) = 82.63%, Kadar Air = 1.9%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.24%\r\n\r\n'),
(146, 'admin', '2017-04-01', 'Jenis Tidak Ada', 'Putih Bening Kering|Asin Garam|Tajam', 'Garam dengan ciri-ciri tersebut tidak ada', 'Kandungan Tidak Ada'),
(147, 'admin', '2017-04-01', 'Jenis Tidak Ada', 'Putih Bening Basah|Asin Ringan|Tajam', 'Garam dengan ciri-ciri tersebut tidak ada', 'Kandungan Tidak Ada'),
(148, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Garam|Segi Empat', 'KW1 ( Baik )', 'NaCl (Natrium Clorida) = 97%, Kadar Air = 1%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.20%\r\n\r\n'),
(149, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Garam|Segi Empat', 'KW 1 (Baik)', 'NaCl (Natrium Clorida) = 97%, Kadar Air = 1%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.20%\r\n\r\n'),
(150, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Garam|Segi Empat', 'KW 1 (Baik)', 'NaCl (Natrium Clorida) = 97%, Kadar Air = 1%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.20%\r\n\r\n'),
(151, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Putih Bening Basah|Asin Garam|Segi Empat', 'KW 2 (Kurang Baik)', 'NaCl (Natrium Clorida) = 82.63%, Kadar Air = 1.9%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.24%\r\n\r\n'),
(152, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Garam|Segi Empat', 'KW 1 (Baik)', 'NaCl (Natrium Clorida) = 97%, Kadar Air = 1%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.20%\r\n\r\n'),
(153, 'admin', '2017-04-01', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Ringan|Segi Empat', 'KW 1 (Baik)', 'NaCl (Natrium Clorida) = 63.68%, Kadar Air = 1%, Ca (Calsium) = 0.11%, Mg (Magnesium) = 0.25%\r\n\r\n'),
(154, 'admin', '2017-04-01', 'Jenis Tidak Ada', 'Putih Bening Kering|Asin Pahit|Segi Empat', 'Garam dengan ciri-ciri tersebut tidak ada', 'Kandungan Tidak Ada'),
(155, 'admin', '2017-04-01', 'Jenis Tidak Ada', 'Putih Bening Kering|Asin Pahit|Segi Empat', 'Garam Dengan Ci-ciri Tersebut Tidak Ada', 'Kandungan Tidak Ada'),
(156, 'admin', '2017-04-01', 'Jenis Tidak Ada', 'Putih Bening Kering|Pahit|Segi Empat', 'Garam Dengan Ci-ciri Tersebut Tidak Ada', 'Kandungan Tidak Ada'),
(157, 'admin', '2017-04-01', 'Jenis Tidak Ada', 'Putih Bening Kering|Asin Garam|Tajam', 'Garam Dengan Ci-ciri Tersebut Tidak Ada', 'Kandungan Tidak Ada'),
(158, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(159, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(160, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(161, 'admin', '2017-04-02', 'Jenis Tidak Ada', 'Kehitaman Basah|Asin Garam|Segi Empat', 'Garam Dengan Ci-ciri Tersebut Tidak Ada', 'Kandungan Tidak Ada'),
(162, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kehitaman Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', 'NaCl (Natrium Clorida) = 80.2%, Kadar Air = 2%, Ca (Calsium) = 1.9%, Mg (Magnesium) = 2.9%\r\n'),
(163, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(164, 'admin', '2017-04-02', 'Jenis Tidak Ada', 'Kehitaman Basah|Pahit|Segi Empat', 'Garam Dengan Ci-ciri Tersebut Tidak Ada', 'Kandungan Tidak Ada'),
(165, 'admin', '2017-04-02', 'Jenis Tidak Ada', 'Kecoklatan Basah|Asin Pahit|Tajam', 'Garam Dengan Ci-ciri Tersebut Tidak Ada', 'Kandungan Tidak Ada'),
(166, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(167, 'U0013', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(168, 'U0013', '2017-04-02', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(169, 'U0013', '2017-04-02', 'Garam Konsumsi ', 'Kehitaman Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', 'NaCl (Natrium Clorida) = 80.2%, Kadar Air = 2%, Ca (Calsium) = 1.9%, Mg (Magnesium) = 2.9%\r\n'),
(170, 'U0013', '2017-04-02', 'Jenis Tidak Ada', 'Kemerahan Basah|Asin Garam|Segi Empat', 'Garam Dengan Ci-ciri Tersebut Tidak Ada', 'Kandungan Tidak Ada'),
(171, 'U0013', '2017-04-02', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(172, 'U0013', '2017-04-02', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(173, 'U0013', '2017-04-02', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(174, 'U0013', '2017-04-02', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(175, 'U0013', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(176, 'U0013', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(177, 'U0013', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(178, 'U0013', '2017-04-02', 'Jenis Tidak Ada', '||', 'Garam Dengan Ci-ciri Tersebut Tidak Ada', 'Kandungan Tidak Ada'),
(179, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(180, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(181, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(182, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(183, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(184, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(185, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(186, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(187, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(188, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(189, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW 3 (Buruk)', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(190, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(191, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kemerahan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n'),
(192, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(193, 'admin', '2017-04-02', 'Garam Konsumsi ', 'Kehitaman Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', 'NaCl (Natrium Clorida) = 80.2%, Kadar Air = 2%, Ca (Calsium) = 1.9%, Mg (Magnesium) = 2.9%\r\n'),
(194, 'admin', '2017-04-12', 'Jenis Tidak Ada', 'Putih Bening Kering|Pahit|Tajam', 'Garam Dengan Ci-ciri Tersebut Tidak Ada', 'Kandungan Tidak Ada'),
(195, 'admin', '2017-04-12', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(196, 'U0014', '2017-04-13', 'Garam Konsumsi ', 'Kecoklatan Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n'),
(197, 'admin', '2017-04-13', 'Garam Konsumsi ', 'Putih Bening Kering|Asin Garam|Segi Empat', 'KW1 (Baik)', 'NaCl (Natrium Clorida) = 97%, Kadar Air = 1%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.20%\r\n\r\n'),
(198, 'admin', '2017-04-13', 'Jenis Tidak Ada', 'Putih Bening Basah|Asin Garam|Tajam', 'Garam Dengan Ci-ciri Tersebut Tidak Ada', 'Kandungan Tidak Ada'),
(199, 'U0015', '2017-04-13', 'Garam Industri', 'Putih Bening Basah|Pahit|Tajam', 'KOSMETIK / FARMASI', 'NaCl (Natrium Clorida) = 83%, Kadar Air = 1%, Ca (Calsium) = 1.4%, Mg (Magnesium)	1%'),
(200, 'admin', '2017-04-17', 'Garam Konsumsi ', 'Kehitaman Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', 'NaCl (Natrium Clorida) = 80.2%, Kadar Air = 2%, Ca (Calsium) = 1.9%, Mg (Magnesium) = 2.9%\r\n'),
(201, 'admin', '2017-04-17', 'Garam Konsumsi ', 'Kehitaman Basah|Asin Pahit|Segi Empat', 'KW3 (Buruk)', 'NaCl (Natrium Clorida) = 80.2%, Kadar Air = 2%, Ca (Calsium) = 1.9%, Mg (Magnesium) = 2.9%\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `authKey` varchar(50) DEFAULT NULL,
  `accessToken` varchar(50) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `authKey`, `accessToken`, `role`) VALUES
(1, 'admin', 'admin', 'admin012', 'mumu2937412912zzzz', 'admin'),
(16, 'U0013', 'coba', NULL, NULL, 'user'),
(17, 'U0014', 'test', NULL, NULL, 'user'),
(18, 'U0015', 'user', NULL, NULL, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `rule1`
--

CREATE TABLE IF NOT EXISTS `rule1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rule` varchar(30) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `rasa` varchar(30) NOT NULL,
  `bentuk` varchar(30) NOT NULL,
  `hasil` varchar(30) NOT NULL,
  `kandungan` varchar(200) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `rule1`
--

INSERT INTO `rule1` (`id`, `rule`, `warna`, `rasa`, `bentuk`, `hasil`, `kandungan`, `jenis`) VALUES
(1, 'A1', 'Putih Bening Kering', 'Asin Garam', 'Segi Empat', 'KW1 (Baik)', 'NaCl (Natrium Clorida) = 97%, Kadar Air = 1%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.20%\r\n\r\n', 'Garam Konsumsi '),
(2, 'A2', 'Putih Bening Kering', 'Asin Ringan', 'Segi Empat', 'KW1 (Baik)', 'NaCl (Natrium Clorida) = 63.68%, Kadar Air = 1%, Ca (Calsium) = 0.11%, Mg (Magnesium) = 0.25%\r\n\r\n', 'Garam Konsumsi '),
(3, 'A3', 'Putih Bening Basah', 'Asin Garam', 'Segi Empat', 'KW2 (Kurang Baik)', 'NaCl (Natrium Clorida) = 82.63%, Kadar Air = 1.9%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.24%\r\n\r\n', 'Garam Konsumsi '),
(4, 'A4', 'Putih Bening Basah', 'Asin Ringan', 'Segi Empat', 'KW2 (Kurang Baik)', 'NaCl (Natrium Clorida) = 65%, Kadar Air = 1%, Ca (Calsium) = 0.10%, Mg (Magnesium) = 0.24%\r\n', 'Garam Konsumsi '),
(5, 'A5', 'Putih Bening Basah', 'Asin Pahit', 'Segi Empat', 'KW2 (Kurang Baik)', 'NaCl (Natrium Clorida) = 80%, Kadar Air = 2%, Ca (Calsium) = 0.17%, Mg (Magnesium) = 1.6%\r\n', 'Garam Konsumsi '),
(6, 'A6', 'Putih Kapur Kering', 'Asin Garam', 'Segi Empat', 'KW2 (Kurang Baik)', 'NaCl (Natrium Clorida) = 80.20%, Kadar Air = 1%, Ca (Calsium) = 0.24%, Mg (Magnesium) = 0.16%\r\n', 'Garam Konsumsi '),
(7, 'A7', 'Putih Kapur Kering', 'Asin Ringan', 'Segi Empat', 'KW2 (Kurang Baik)', 'NaCl (Natrium Clorida) = 65.15%, Kadar Air = 1%, Ca (Calsium) = 0.15%, Mg (Magnesium) = 0.28%\r\n', 'Garam Konsumsi '),
(8, 'A8', 'Putih Kapur Kering', 'Asin Pahit', 'Segi Empat', 'KW2 (Kurang Baik)', 'NaCl (Natrium Clorida) = 80.25%, Kadar Air = 1.2%, Ca (Calsium) = 0.27%, Mg (Magnesium) = 1%\r\n', 'Garam Konsumsi '),
(9, 'A9', 'Putih Kapur Basah', 'Asin Garam', 'Segi Empat', 'KW2 (Kurang Baik)', 'NaCl (Natrium Clorida) = 72.11%, Kadar Air = 1.77%, Ca (Calsium) = 0.32%, Mg (Magnesium) = 0.20%', 'Garam Konsumsi '),
(10, 'A10', 'Putih Kapur Basah', 'Asin Ringan', 'Segi Empat', 'KW2 (Kurang Baik)', 'NaCl (Natrium Clorida) = 70.67%,  Kadar Air = 1.5%, Ca (Calsium) = 0.48%, Mg (Magnesium) = 0.38%\r\n', 'Garam Konsumsi '),
(11, 'A11', 'Putih Kapur Basah', 'Asin Pahit', 'Segi Empat', 'KW2 (Kurang Baik)', 'NaCl (Natrium Clorida) = 80.10%, Kadar Air = 2.01%, Ca (Calsium) = 0.49%, Mg (Magnesium) = 1.12%\r\n', 'Garam Konsumsi '),
(12, 'A12', 'Kemerahan Basah', 'Asin Pahit', 'Segi Empat', 'KW3 (Buruk)', '- NaCl (Natrium Clorida) = 80.09 %,\r\n- Kadar Air = 2.10 %,\r\n- Ca (Calsium) = 1.01 %,\r\n- Mg (Magnesium) = 2%\r\n', 'Garam Konsumsi '),
(13, 'A13', 'Kecoklatan Basah', 'Asin Pahit', 'Segi Empat', 'KW3 (Buruk)', 'NaCl (Natrium Clorida) = 80.1%, Kadar Air = 2.15%, Ca (Calsium) = 1.7%, Mg (Magnesium) = 2.2%\r\n', 'Garam Konsumsi '),
(14, 'A14', 'Kehitaman Basah', 'Asin Pahit', 'Segi Empat', 'KW3 (Buruk)', 'NaCl (Natrium Clorida) = 80.2%, Kadar Air = 2%, Ca (Calsium) = 1.9%, Mg (Magnesium) = 2.9%\r\n', 'Garam Konsumsi '),
(15, 'A15', 'Putih Bening Basah', 'Pahit', 'Tajam', 'KOSMETIK / FARMASI', 'NaCl (Natrium Clorida) = 83%, Kadar Air = 1%, Ca (Calsium) = 1.4%, Mg (Magnesium)	1%', 'Garam Industri');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
