-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 12:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbkape`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `foto` text NOT NULL,
  `isi_berita` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `foto`, `isi_berita`, `penulis`, `tanggal`) VALUES
(7, 'Silaturrahmi Hijab dengan RGB Fotografi', '3.jpg', '<p>Untuk menjalin silaturrahmi antara Hijab Community dengan RGB Pekalongan, kami mengadakan sebuah acara bersama, yaitu hunting foto atau mencari foto.</p>', 'admin', '2016-07-17'),
(9, 'Berbagi Kasih untuk Sesama', '111111.JPG', '<p>Indahnya berbagi kasih dengan sesama makhluk Tuhan. Rezeki yang kita dapat bukanlah semata-mata milik kita. Namun hanya titipan dari sang Kuasa. Maka dari itu, diadakan acara amal dengan nama Berbagi Kasih.</p>', 'admin', '2016-07-17'),
(10, 'Open Recruitment', '222222.JPG', '<p>Hai para hijabers Pekalongan. Kali ini Hijab Community Pekalongan akan membuka open recruitment untuk kalian yang ingin menjadi anggota Hijab Community.</p>', 'admin', '2016-07-17');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama`, `email`, `pesan`) VALUES
(3, 'Alifah Aulia', 'alifahaulia@gmail.com', 'Assalamu''alaikum ukhti, bagaimana caranya jika ingin menjadi anggota dari komunitas ini ya?'),
(4, 'Rizki Triyani', 'rizkiki@gmail.com', 'Websitenya bagus mba. Tetap sukses ya buat HCP (y)');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `jns_gambar` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `jns_gambar`, `lokasi`, `tanggal`) VALUES
(21, '', '2.jpg', '2016-07-17'),
(22, '', '3.jpg', '2016-07-17'),
(23, '', '4.jpg', '2016-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`, `nama`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Alifah Aulia P', 'alf.prastiwi@gmail.com'),
(2, 'alifah', 'alifah', 'alifahlia', 'alifahlia@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
