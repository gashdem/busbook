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
-- Table structure for table `ticketmsafiri01`
--

CREATE TABLE IF NOT EXISTS `ticketmsafiri01` (
  `Seatno` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Idno` int(30) NOT NULL,
  `Phone` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketmsafiri01`
--

INSERT INTO `ticketmsafiri01` (`Seatno`, `Name`, `Idno`, `Phone`) VALUES
('1', 'Andrew Chege', 101, 201),
('2', 'Maxwell Ambege', 102, 202),
('3', 'Alpha', 103, 203),
('4', '', 0, 0),
('5', '', 0, 0),
('6', 'Josephat Terer', 106, 206),
('7', 'Collins Tembur', 107, 207),
('8', 'Milicent', 108, 108),
('9', 'Edwin', 109, 209),
('10', '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
