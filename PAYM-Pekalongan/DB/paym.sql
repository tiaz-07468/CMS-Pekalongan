-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2016 at 04:21 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paym`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita_paym`
--

CREATE TABLE IF NOT EXISTS `berita_paym` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `penyunting` varchar(20) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `berita` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `berita_paym`
--

INSERT INTO `berita_paym` (`id_berita`, `penyunting`, `judul`, `berita`, `tanggal`, `foto`) VALUES
(3, 'kik', 'Berdirinya Panti Asuhan Yatim ', 'Panti Asuhan Yatim Muhammadiyah berdiri sejak tahun 1925. PAYM ini merupakan lembaga sosial yang menyelenggarakan proses pendidikan dan pengasuhan anak yatim / yatim piatu/terlantar miskin agar kelak menjadi manusia muslim yang bertanggung jawab, mandiri, berkarya, dan berakhlak mulia. Panti Asuhan Yatim Muhammadiyah merupakan Lembaga Sosial yang menyelenggarakan prose pendidikan dan pengasuhan anak Yatim / Yatim Piatu agar kelak menjadi manusia muslim yang bertanggung jawab, mandiri, berkarya, dan berakhlaq mulia. PAYM MUHAMMADIYAH berdiri sejak Tahun 1925 yang daridulu sampai sekarang berazazkan agama islam sepenuhnya. Di PAYM MUHAMMADIYAH KOTA PEKALONGAN anak-anak tidak hanya diasuh saja, melainkan di besarkan dan didik dengan baik dan sekolahkan. Tidak hanya itu saja, di PAYM anak-anak juga mendapatkan ajaran Agama dengan baik seperti di pondok pesantren.dan di PAYM sendiri terdapat bermacam-macam kegiatan ekstrakurikuler ', '2016-07-26', 'home.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_feedback`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama`, `email`, `pesan`) VALUES
(1, 'lkkl', 'rizkitriyanip@gmail.com', 'kjlkjlkjklj');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `caption` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `caption`, `foto`) VALUES
(2, 'PAYM jadi', 'Anggota solid PAYM', 'anggota.jpg'),
(3, 'PAYM maju terus', 'Menuai prestasi selalu setiap saat', 'prestasi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(254) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `nama`, `email`) VALUES
(5, 'kik', 'e8c5e741752e97483a3cc987f95f910e', 'kik', 'rizkitriyanip@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
