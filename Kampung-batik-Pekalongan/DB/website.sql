-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2016 at 04:28 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita_terkini`
--

CREATE TABLE IF NOT EXISTS `berita_terkini` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `berita` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(30) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `berita_terkini`
--

INSERT INTO `berita_terkini` (`id_berita`, `judul`, `berita`, `penulis`, `tanggal`, `foto`) VALUES
(7, 'Perayaan Kampoeng Batik Kauman Pekalongan', 'Perayaan yang digelar kampoeng batik kauman pekalongan biasanya digelar setiap tahun sehingga menjadi acara tahunan.', 'Kikik', '2016-07-15', 'big3.jpg'),
(9, 'Ayo main kampung batik Pekalongan', '<p>Ayo bersama-sama datang ke Kampoeng Batik untuk kunjungan wisata batik sekalian berbelanja dan berwisata kuliner.</p>\r\n<p>&nbsp;</p>', 'Kikik', '2016-07-15', 'berita1.jpg'),
(10, 'Pameran Batik Tulis, Siap Menghibur ', '<p style="text-align: justify;">Batik tulis kini dapat dijadikan modern dan bukan hal yang hanya disenangi oleh orang lanjut usia.</p>', 'kik', '2016-07-19', 'batik1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_feedback`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama`, `email`, `pesan`) VALUES
(2, 'kik', 'rizkitriyanip@gmail.', 'berapa harga batik yang dijual di rumah kampoeng batik'),
(3, 'kik', 'rizkitriyanip@gmail.', 'Bagaimana cara pengiriman batik secara online melalui website ini?'),
(4, 'rizki triyani', 'rizkitriyanip@gmail.', 'Bagaimana pembayaran jika akan membeli online?');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `penyunting` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `caption` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `penyunting`, `lokasi`, `caption`, `tanggal`) VALUES
(3, 'Contoh Gambar Batik Kauman Pekalongan', 'Kiki', '2.jpg', 'Bangga pada kekayaan dalam negri. Bangga punya batik ', '2016-06-21'),
(4, 'Perayaan Kampoeng Batik Kauman Pekalongan', 'Kiki', '8.jpg', 'Perayaan seru setiap tahunnya hanya di Kampoeng Batik Kauman Pekalongan', '2016-06-21'),
(5, 'Museum Batik', 'Kiki', '9.jpg', 'Museum Batik Pekalongan, primadona kota Pekalongan', '2016-06-21'),
(6, 'Galeri Rumah Pak Rusdi', 'Kik', 'berita2.jpg', 'Rumah Rusdi dapat menjadi tujuan utama jika berkunjung', '2016-07-17'),
(7, 'Galeri Rumah Pak Rusdi', 'kik', 'galeri1.jpg', 'Rumah Rusdi dapat menjadi tujuan utama jika berkunjung', '2016-07-17');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`, `nama`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Rizki Triyani P', 'rizkitriyanip@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
