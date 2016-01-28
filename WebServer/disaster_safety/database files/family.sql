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
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
  `member_id` varchar(13) NOT NULL,
  `family_id` varchar(13) NOT NULL,
  `permission_given` tinyint(1) NOT NULL DEFAULT '0',
  KEY `member_id` (`member_id`),
  KEY `family_id` (`family_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`member_id`, `family_id`, `permission_given`) VALUES
('+918053970992', '+919034928885', 0),
('+918053970992', '+917404959233', 1),
('+918053970992', '+919813965219', 0),
('+918053970992', '+918950683510', 1),
('+918950683510', '+919034928885', 1),
('+918950683510', '+919813965219', 1),
('+918950683510', '+917404959233', 1),
('+918950683510', '+918053970992', 1),
('+918130629829', '+919034928885', 0),
('+918130629829', '+917404959233', 0),
('+918130629829', '+919813965219', 0),
('+918130629829', '+918950683510', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `family_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `login` (`id`),
  ADD CONSTRAINT `family_ibfk_2` FOREIGN KEY (`family_id`) REFERENCES `login` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
