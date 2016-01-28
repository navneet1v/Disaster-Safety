-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2015 at 02:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `disaster_safety`
--

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE IF NOT EXISTS `help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `type_of_help` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `latitude`, `longitude`, `type_of_help`) VALUES
(1, 28.333, 28.333, 'Hospital'),
(2, 26.44, 26.44, 'Camp'),
(5, 77, 30, 'Hospital'),
(6, 30, 77, 'Camp'),
(7, 29.94188, 76.8204, 'Hospital'),
(13, 25, 28, 'Camp'),
(14, 27.99, 76.789, 'Hospital'),
(15, 28.76, 78, 'Home'),
(16, 29.94, 76.81, 'Police Station'),
(17, 30.5416987, 76.7173805, 'Police Station'),
(18, 30.5416987, 77.7173805, 'Police Station'),
(19, 30.5416987, 75.7173805, 'Police Station'),
(20, 30.5416987, 75.7173805, 'Police Station'),
(21, 76, 29, 'hello'),
(22, 3423.34, 34.23, 'Camp2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
