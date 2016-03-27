-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2016 at 09:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `busbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `seatsmsafiri01`
--

CREATE TABLE IF NOT EXISTS `seatsmsafiri01` (
  `Seatno` int(15) NOT NULL,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`Seatno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='for saving booked seats ';

--
-- Dumping data for table `seatsmsafiri01`
--

INSERT INTO `seatsmsafiri01` (`Seatno`, `Status`) VALUES
(1, 'Booked'),
(2, 'Booked'),
(3, 'Booked'),
(4, 'NA'),
(5, 'NA'),
(6, 'Booked'),
(7, 'Booked'),
(8, 'Booked'),
(9, 'Booked'),
(10, 'NA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
