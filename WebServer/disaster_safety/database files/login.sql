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
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` varchar(13) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `latitude` double NOT NULL DEFAULT '0',
  `longitude` double NOT NULL DEFAULT '0',
  `gcm_regId` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `status`, `latitude`, `longitude`, `gcm_regId`) VALUES
('+917404959233', 'Arzoo', 1, 29.9415183, 76.8173265, 'APA91bG2ieu9PdfjOewS0xX9yQPc5UDrjo1jlaw1oTdFTYmWOsh9uQ1GbVQm-VMKD10df-4wpFW0oFxX2qt7ZIjdZ7irJKHhSxdV3c0Az4irl9AE1TpVZ5far6dlBJJP3iAfsUH0IWt4tv5sEoVhRHa1_09gLm3JbwwGKP4Pzcqg5QUCkqzD58g'),
('+918053970992', 'Puneet', 1, 29.9481684, 76.8161596, 'APA91bHyED-9t7366jIhtRElpH5Xufgg4ODRMu00SAtfQaFzX3URGeCZXRxpVFb86j0gFrt-R-a5JEQgAPEe4gxHOz3Bmz1oiSjEzwoRxelDyTNkS3os9AI-pPdqKElSxh5OyMHor-ga0b4M22cOkTB3U78bZ5fDKsYVElFrA3euhq7aSex-nfE'),
('+918130629829', 'achyut', 0, 29.9481542, 76.816135, 'APA91bG-TLYJUnAERJfMBMA2P7CRf0VDf9uo9XqV8BTgND0jFrr7KFvGraWRwhBWTVJBCLXyLg-Y5eI4lhl_cT3ZBUba2bTXC6I8DkV0JcEQvVYOBoJWe8OroeDkmsfzZfCzCu4atrYst8LPXhY1eAJWpPvM6vnLqu1UdiRMIS9mn8Squ6JqthM'),
('+918950683510', 'navne', 0, 29.9482466, 76.816035, 'APA91bFzChdKxpTvGpeh9kNxDWyBGOJGDnRSLuw3ObM-Yxp4hvNsiVD2sjCeuMA1ACUvdo2wPZeKyovyrNyqm7bTD6r98Q1z4VcoGOUacYsSFAOC5e1rk_NEQMYhAihFOpkB49ltI5enyK84LuAIblw4689AnYvRNG_RTJf-1tg2g20vj48joNc'),
('+919034928885', 'Sumit', 1, 0, 0, 'APA91bG2ieu9PdfjOewS0xX9yQPc5UDrjo1jlaw1oTdFTYmWOsh9uQ1GbVQm-VMKD10df-4wpFW0oFxX2qt7ZIjdZ7irJKHhSxdV3c0Az4irl9AE1TpVZ5far6dlBJJP3iAfsUH0IWt4tv5sEoVhRHa1_09gLm3JbwwGKP4Pzcqg5QUCkqzD58g'),
('+919813965219', 'Tarun', 1, 0, 0, 'APA91bG2ieu9PdfjOewS0xX9yQPc5UDrjo1jlaw1oTdFTYmWOsh9uQ1GbVQm-VMKD10df-4wpFW0oFxX2qt7ZIjdZ7irJKHhSxdV3c0Az4irl9AE1TpVZ5far6dlBJJP3iAfsUH0IWt4tv5sEoVhRHa1_09gLm3JbwwGKP4Pzcqg5QUCkqzD58g');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
