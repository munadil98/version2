-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 02:38 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trineogen`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `picture` varchar(20) CHARACTER SET utf8 NOT NULL,
  `dob` date NOT NULL,
  `lanuage` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `genealogy` varchar(50) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `consumption` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sex` varchar(20) CHARACTER SET utf8 NOT NULL,
  `occupation` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
