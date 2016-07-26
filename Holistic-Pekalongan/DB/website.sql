-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2016 at 02:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

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
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `berita` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `berita`, `tanggal`) VALUES
(1, 'contoh', '<p>blablabal </p>', '0000-00-00'),
(2, 'contohddd', '<p>blablabal </p>', '0000-00-00'),
(3, 'contohddd', '<p>blablabal </p>', '0000-00-00'),
(4, 'contohddd', '<p>blablabal </p>', '2016-06-22'),
(5, 'COba lagi', '<p>hahaha </p>', '2016-06-22'),
(6, 'Teguhs', '<p>haha</p>', '2016-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_dokter` varchar(20) NOT NULL,
  `jadwal` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `jadwal`) VALUES
(9, 'Alifah Lia', '15.00-18.00'),
(10, 'Tiaz Iskandar Muda', '10.00-15.00'),
(13, 'Rizki Triyani', '09.00-12.00');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama_foto`, `lokasi`) VALUES
(13, 'RS', 'gallery/IMG_9672.JPG'),
(14, 'rs', 'gallery/IMG_9680.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE IF NOT EXISTS `kritik` (
  `id_keritik` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_keritik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kritik`
--

INSERT INTO `kritik` (`id_keritik`, `nama`, `email`, `pesan`) VALUES
(4, 'Teguh', 'teguhsunnarto@yahoo.com', 'mencoba'),
(5, 'Rizki', 'kiki@gmail.com', 'bpjs woyyy'),
(6, 'cimeng', 'Cimeng@rocket.yahoo.com', 'oalahhh');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `foto_produk`, `keterangan`) VALUES
(3, 'garam holistic diamond', 'garam holistic diamond.jpg', 'Garam Holistic Diamond Crystal adalah merupakan Kidney Salt atau garam untuk penderita gangguan ginjal. Garam ini dapat digunakan untuk pengganti garam dapur khusus untuk penderita ginjal.'),
(4, 'Holistic Diamond Salt', 'Holistic Diamond Salt.jpg', 'Holistic Diamond Salt adalah garam holistic yang sangat baik untuk kesehatan, karena garam ini adalah garam rendah natrium yang membantu mengurangi resiko timbulnya penyakit hipertensi baik. Garam ini juga dapat digunakan sebagai pengganti garam dapur.'),
(5, 'Holistic Omega 3 Plus', 'Holistic Omega 3 Plus.jpg', 'Holistic Omega 3 Plus adalah kapsul omega 3 yang baik untuk membantu meningkatkan nutrisi otak, memelihara kesehatan fungsi jantung dan memelihara kesehatan tubuh.'),
(6, 'kecap', 'kecap.jpg', 'Kecap Holistic Organic terdiri dari 2 kemasan, yaitu kemasan 140 ml dam kemasan 300 ml. Kecap Holistic adalah kecap organic yang dapat digunakan sebagai pengganti kecap di rumah.'),
(7, 'omega3_orange', 'omega3_orange.jpg', 'Holistic Omega 3 Orange adalah syrup omega 3 dengan rasa jeruk yang baik untuk anak-anak dan dewasa dalam membantu meningkatkan nutrisi otak, fungsi syaraf pusat, daya tahan tubuh, nafsu makan, menurunkan kolesterol,  penumpukan plak artherosclerotic, meningkatkan fungsi jantung dan membantu mencegah kanker.'),
(8, 'purehoney250', 'purehoney250.jpg', 'Madu pure honey adalah madu murni Holistic yang merupakan madu organic, memiliki kandungan nutrisi alami yang tinggi seperti Vit A, B, C,D, B kompleks,E, serta enzim dan berbagai zat lainnya.                  Kegunaan : mampu memperkuat sistem kekebalan tubuh terhadap berbagai penyakit, dan meningkatkan vitalitas pria dan wanita,juga sebagai anti toksik atau racun.bagus untuk segala jenis usia. dapat digunakan sebagai pengganti gula, dan dapat digunakan sebagai masker.'),
(9, 'purehoney', 'purehoney650.jpg', ' 	Madu pure honey adalah madu murni Holistic yang merupakan madu organic, memiliki kandungan nutrisi alami yang tinggi seperti Vit A, B, C,D, B kompleks,E, serta enzim dan berbagai zat lainnya. Kegunaan : mampu memperkuat sistem kekebalan tubuh terhadap berbagai penyakit, dan meningkatkan vitalitas pria dan wanita,juga sebagai anti toksik atau racun.bagus untuk segala jenis usia. dapat digunakan sebagai pengganti gula, dan dapat digunakan sebagai masker. '),
(10, 'royaljelly650', 'royaljelly650.jpg', 'Royal Jelly adalah Madu yang sudah d campur dengan Royal Jelly yang dapat membantu menjaga stamina dan daya tahan tubuh.'),
(11, 'royaljellyginseng', 'royaljellyginseng.jpg', 'Royal Jelly Ginseng  adalah Madu yang sudah d campur dengan Royal Jelly dan Ginseng yang dapat membantu menjaga stamina dan daya tahan tubuh.');

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
(1, 'teguh', 'a937e760b758e2c4aeb45b5da4fe7883', 'teguhsunnarto', 'teguhsunnarto@yahoo.com'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
