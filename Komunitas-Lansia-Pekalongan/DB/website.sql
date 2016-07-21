-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2016 at 02:21 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `berita` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `berita_terkini`
--

INSERT INTO `berita_terkini` (`id`, `judul`, `berita`, `penulis`, `lokasi`, `tanggal`) VALUES
(5, 'Rekor Muri Senam Masal', '<p>PEKALONGAN &ndash; Senam keluarga gembira yang diselenggarakan Dinas Pendidikan, Pemuda dan Olahraga (Disdikpora) Kota Pekalongan yang diikuti 18.000 lebih pasang ibu dan anak di Stadion Kraton, Minggu (28/4), memecahkan rekor Museum Rekor Indonesia (Muri). Senam itu mematahkan rekor sebelumnya dengan jumlah peserta 1.416 yang diselenggarakan di Jakarta, Oktober tahun lalu. Senam keluarga gembira yang diselenggarakan di Kota Pekalongan itu tercatat sebagai rekor Muri ke-5.931.<br /><br />&ldquo;Kota Pekalongan berhasil memecahkan rekor Muri senam dengan peserta terbanyak. Sebelumnya, kami mencatat senam dengan peserta terbanyak diikuti 1.416 (708 pasang) yang diselenggarakan Sweety Baby Diapers di Jakarta pada 27 Oktober 2012,&rdquo; terang Deputi Manager Muri, Ariani Siregar.<br /><br />Pemecahan rekor senam dengan peserta terbanyak melibatkan ibu dan siswa dari 199 Pendidikan Anak Usia Dini (PAUD), 74 Taman Kanak &ndash; kanak (TK) dan 24 Raudhatul Anfal (RA) se-Kota Pekalongan. kegiatan dimulai sekitar pukul 09.00 dan dipandu empat orang instruktur. Walikota M Basyir Ahmad, Wakil, Walikota A Alf Arslan Djunaid, Ketua DPRD M Bowo Leksono, Sekda Dwi Arie Putranto, Kepala Dindikpora Agust Marhaendayana dan Bunda PAUD Balgies Diab juga ikut senam dalam rangka memecahkan rekor tersebut.<br /><br />Setelah peserta melaksanakan senam keluarga gembira dua kali, Ariani Siregar menyerahkan piagam penghargaan kepada Bunda PAUD sekaligus Ketua Tim Penggerak PKK Kota Pekalongan Balgies Diab sebagai pemrakarsa kegiatan itu. Selain itu, piagam penghargaan juga diserahkan kepada Agust Marhaendayana sebagai penyelenggara, serta kepada pendukung kegiatan, Himpunan Pendidik dan Tenaga Kependidikan Anak Usia Dini Indonesia (HIMPAUDI), Ikatan Guru Taman Kanak-kanak Indonesia (IGTKI), dan Ikatan Guru Raudhatul Anfal (IGRA). (K30-69)</p>', 'Tiaz Iskandar Muda', '3.jpg', '2016-07-19'),
(6, 'BERSAMA RATUSAN WARGA KAJEN, BUPATI IKUTI SENAM HKN', '<p style="margin: 15px 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14.4px; line-height: 21.6px;">KAJEN- Sebagai penutup rangkaian kegiatan memperingati Hari Kesehatan Nasional (HKN) ke-50 tahun 2014, Pemkab Pekalongan menggelar senam aerobik sehat bugar bersama masyarakat. Kegiatan digelar di halaman rumah dinas jabatan Bupati Pekalongan, Jl. Merapi No. 1 Kajen, Minggu (16/11/2014).</p>\r\n<p style="margin: 15px 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14.4px; line-height: 21.6px;">Kegiatan senam dibuka dan diikuti langsung oleh Bupati Pekalongan Drs. H. A. Antono, M.Si dan para kepala SKPD se Kabupaten Pekalongan, seluruh jajaran kesehatan baik Dinas Kesehatan RSUD Kraton, RSUD Kajen, Puskesmas se Kabupaten Pekalongan, dan rumah sakit maupun balai pengobatan swasta yang ada di Kabupaten Pekalongan, serta ratusan warga Kajen.</p>\r\n<p style="margin: 15px 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14.4px; line-height: 21.6px;">Sebelum senam dimulai, Kepala Dinas Kesehatan, dr. Sutanto Setiabudi, M.Kes dalam laporannya menyatakan bahwa serangkaian kegiatan HKN telah dilaksanakan sejak 7 Nopember 2014 yakni antara lain lomba-lomba baik lomba olahraga maupun lomba prestasi.</p>\r\n<p style="margin: 15px 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14.4px; line-height: 21.6px;">Kemudian, lanjut Sutanto, bakti masyarakat, donor darah. Sebagai puncak peringatan HKN yaitu upacara yang telah dilaksanakan pada tanggal 12 Nopember 2014. Dan penutupan serangkaian kegiatan HKN adalah pada hari ini yaitu senam aerobik dan dilanjutkan kegiatan keakraban jajaran kesehatan. &ldquo;Tujuan kegiatan ini adalah untuk kebersamaan sehingga kita bersama-sama dalam satu acara Disamping itu, acara ini untuk memupuk solidaritas dan kerjasama,&rdquo; ujar Sutanto.</p>\r\n<p style="margin: 15px 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14.4px; line-height: 21.6px;">Sedangkan Bupati dalam sambutannya menyampaikan dukungan atas diselenggarakannya acara oleh Dinas Kesehatan. Menurutnya, kegiatan yang dilaksanakan dalam rangka untuk kebersamaan bukan hanya bagi jajaran kesehatan tetapi juga melibatkan masyarakat. &ldquo;Saya sangat mendukung kegiatan semacam ini. Dan ini sangat membanggakan karena untuk meningkatkan derajat kesehatan tidak mungkin hanya dilakukan oleh Dinas Kesehatan tetapi perlu dukungan dari masyarakat,&rdquo; ujar Bupati.</p>\r\n<p style="margin: 15px 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14.4px; line-height: 21.6px;">Dalam kesempatan itu, Bupati menegaskan kembali agar diantara kita untuk saling melengkapi dan saling memperkuat untuk membangun Kabupaten Pekalongan yang lebih baik. &ldquo;Khususnya Dinas Kesehatan, RSUD Kraton dan RSUD Kajen bahwa kalian itu merupakan satu kesatuan yang utuh dari Pemerintah Kabupaten Pekalongan untuk membangun masyarakat yang lebih sejahtera,&rdquo; tegas Bupati.</p>\r\n<p style="margin: 15px 0px; padding: 0px; border: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14.4px; line-height: 21.6px;">Seusai senam aerobik, acara dialnjutkan dengan kegiatan keakraban jajaran kesehatan yang digelar di alun-alun Kajen. Adapun acaranya yaitu digelarnya berbagai macam permainan atau games yaitu lomba bakiak, tarik tambang, HHD dan yel-yel yang diikuti oleh seluruh jajaran kesehatan yang ada di Kabupaten Pekalongan (di2k)</p>', 'Tiaz Iskandar Muda', 'senam_HKN.jpg', '2016-07-20'),
(7, 'Ratusan Warga Pekalongan Ikuti Senam Hari Kesehatan Nasional', '<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: #898888; font-family: tahoma; font-size: 14px; line-height: 22px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">KAJEN, suaramerdeka.com</strong>&nbsp;&ndash; Ratusan warga Kabupaten Pekalongan dan sekitarnya mengikuti senam massal. Kegiatan itu digelar dalam rangkaian peringatan Hari Kesehatan Nasional (HKN) ke-50 tingkat kabupaten, kemarin.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: #898888; font-family: tahoma; font-size: 14px; line-height: 22px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Acara itu digelar di halaman rumah dinas Bupati Pekalongan, Jalan Merapi No 1 Kajen. Kegiatan senam dibuka dan diikuti langsung oleh Bupati Amat Antono serta para kepala SKPD se-Kabupaten Pekalongan, seluruh jajaran kesehatan baik Dinas Kesehatan RSUD Kraton, RSUD Kajen, Puskesmas dan rumah sakit maupun balai pengobatan swasta yang ada di Kabupaten Pekalongan.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: #898888; font-family: tahoma; font-size: 14px; line-height: 22px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Kepala Dinas Kesehatan Kabupaten Pekalongan Sutanto Setiabudi mengatakan, serangkaian kegiatan HKN telah dilaksanakan sejak 7 Nopember 2014 di antaranya lomba-lomba baik lomba olahraga maupun lomba prestasi.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: #898888; font-family: tahoma; font-size: 14px; line-height: 22px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Kemudian, lanjut Sutanto, bakti masyarakat, sumbang darah dan sebagainya. Sebagai puncak peringatan HKN yaitu upacara yang telah dilaksanakan pada tanggal 12 Nopember 2014. Adapun&nbsp; penutupan rangkaian kegiatan HKN adalah pada hari ini yaitu senam aerobik dan dilanjutkan kegiatan keakraban jajaran kesehatan.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: #898888; font-family: tahoma; font-size: 14px; line-height: 22px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">&ldquo;Tujuan kegiatan ini adalah untuk kebersamaan sehingga kita bersama-sama dalam satu acara. Di samping itu, acara ini untuk memupuk solidaritas dan kerjasama,&rdquo; ujar Sutanto sebagaimana siaran pers yang diterima Suara Merdeka, Senin&nbsp; (17/11) pukul 13.00.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: #898888; font-family: tahoma; font-size: 14px; line-height: 22px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Sementara itu, Bupati Amat Antono dalam sambutannya menyampaikan dukungan atas diselenggarakannya acara oleh Dinas Kesehatan. Menurutnya, kegiatan yang dilaksanakan untuk memupuk kebersamaan itu bukan hanya bagi jajaran kesehatan tetapi juga melibatkan masyarakat.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: #898888; font-family: tahoma; font-size: 14px; line-height: 22px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">&ldquo;Saya sangat mendukung kegiatan semacam ini. Dan ini sangat membanggakan karena untuk meningkatkan derajat kesehatan tidak mungkin hanya dilakukan oleh Dinas Kesehatan tetapi perlu dukungan dari masyarakat,&rdquo; ujar Bupati</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: #898888; font-family: tahoma; font-size: 14px; line-height: 22px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Pada kesempatan itu, Antono menegaskan&nbsp; agar jajaran di lingkungan Dinkes saling melengkapi dan memperkuat untuk membangun Kabupaten Pekalongan yang lebih baik.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: #898888; font-family: tahoma; font-size: 14px; line-height: 22px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Seusai senam aerobik, acara dilanjutkan dengan kegiatan keakraban jajaran kesehatan yang digelar di alun-alun Kajen. Adapun acaranya yaitu digelarnya berbagai macam permainan atau games yaitu lomba bakiak, tarik tambang, dan lainnya.</p>', 'Tiaz Iskandar Muda', 'berita2.jpg', '2016-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(100) NOT NULL,
  `tanggal` int(3) NOT NULL,
  `date` date NOT NULL,
  `badge` tinyint(1) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `hari`, `tanggal`, `date`, `badge`, `title`, `body`, `penulis`) VALUES
(3, 'Sunday', 24, '2016-07-24', 1, 'Senam Sehat Indonesia 2', 'Senam Sehat Indonesia dalam rangka memperingati hari lansia', 'Tiaz Iskandar Muda'),
(5, 'Saturday', 2, '2016-07-02', 0, 'Senam Sehat Indonesia', 'Senam sehat indonesia bulanan ', 'Tiaz Iskandar Muda');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `caption` text NOT NULL,
  `penyunting` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `caption`, `penyunting`, `lokasi`, `tanggal`) VALUES
(1, 'Senam Pagii', 'Senam Sehat Jasmani', 'Tiaz Iskandar Muda', '11.jpg', '2016-07-20'),
(2, 'Kegiatan Rutin', 'Senam Sehat Indonesia ..', 'admin', '10.jpg', '2016-06-24'),
(3, 'Kegiatan Rutin', 'Senam Sehat Indonesia ..', 'admin', '3.jpg', '2016-06-24'),
(4, 'Kegiatan Rutin', 'Senam Sehat Indonesia', 'Tiaz Iskandar Muda', '13.jpg', '2016-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `sanggar`
--

CREATE TABLE IF NOT EXISTS `sanggar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `koordinator` varchar(100) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sanggar`
--

INSERT INTO `sanggar` (`id`, `nama`, `lokasi`, `koordinator`, `oleh`) VALUES
(2, 'Sasana Pusat', 'Lapangan Mataram', 'Pak Sobiri', 'Tiaz Iskandar Muda');

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Tiaz Iskandar Muda', 'tiaz.rekayasa.31@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
