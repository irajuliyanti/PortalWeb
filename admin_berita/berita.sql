-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2016 at 10:15 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_carousel`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--



CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `tanggal`, `gambar`, `judul`, `konten`) VALUES
(2, '2015-08-17', 'hapus06.jpg', 'How to create facebook form login', '<div>Web applications still use the classical wyswig editors. In this Responsive Web Era, everyone looking for responsive wyswig editor, compatible with mobile devices also.</div><div><br></div>'),
(9, '2015-12-22', '4.png', 'WHYSIWYG Web Editor', 'tes ajalah disini'),
(12, '2015-12-23', '10', 'facebook form login', '<p>Who doesnt know facebook ?</p>');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
