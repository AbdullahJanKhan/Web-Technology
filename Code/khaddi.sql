-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2020 at 08:26 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khaddi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`cartid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=eucjpms;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `email`, `pid`, `quantity`) VALUES
(10, 'abdullah@gmail.com', 'UCX002', 2),
(9, 'abdullah@gmail.com', 'UCX001', 1),
(8, 'abdullah@gmail.com', 'UCX001', 6),
(11, 'abdullah@gmail.com', 'UCX002', 7),
(12, 'abdullah@gmail.com', 'KCX001', 3),
(13, 'abdullah@gmail.com', 'KCX001', 3),
(14, 'abdullah@gmail.com', 'PCX002', 67),
(18, 'aleena@gmail.com', 'PCX003', 1),
(19, 'aleena@gmail.com', 'KCX005', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `fname` char(100) NOT NULL,
  `lname` char(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fname`, `lname`, `email`, `password`) VALUES
('Abdullah', 'Khan', 'abdullah@gmail.com', '1234'),
('aleena', 'naveed', 'aleena@gmail.com', '1234'),
('raihan', 'jan', 'rjk@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `type`, `img`, `price`) VALUES
('PCX001', 'Pret', 'Pret1.jpg', 3499),
('PCX002', 'Pret', 'Pret2.jpg', 3499),
('PCX003', 'Pret', 'Pret3.jpg', 3499),
('PCX004', 'Pret', 'Pret4.jpg', 3499),
('PCX005', 'Pret', 'Pret5.jpg', 3499),
('PCX006', 'Pret', 'Pret6.jpg', 3499),
('PCX007', 'Pret', 'Pret7.jpg', 3499),
('PCX008', 'Pret', 'Pret8.jpg', 3499),
('PCX009', 'Pret', 'Pret8.jpg', 3499),
('UCX001', 'USC', 'US1.jpg', 2499),
('UCX002', 'USC', 'US2.jpg', 2499),
('UCX003', 'USC', 'US3.jpg', 2499),
('UCX004', 'USC', 'US4.jpg', 2499),
('UCX005', 'USC', 'US5.jpg', 2499),
('UCX006', 'USC', 'US6.jpg', 2499),
('UCX007', 'USC', 'US7.jpg', 2499),
('UCX008', 'USC', 'US8.jpg', 2499),
('UCX009', 'USC', 'US9.jpg', 2499),
('KCX001', 'Khass', 'khaas1.jpg', 4499),
('KCX002', 'Khass', 'khaas2.jpg', 4499),
('KCX003', 'Khass', 'khaas3.jpg', 4499),
('KCX004', 'Khass', 'khaas4.jpg', 4499),
('KCX005', 'Khass', 'khaas5.jpg', 4499),
('KCX006', 'Khass', 'khaas6.jpg', 4499),
('KCX007', 'Khass', 'khaas7.jpg', 4499),
('KCX008', 'Khass', 'khaas8.jpg', 4499),
('KCX009', 'Khass', 'khaas9.jpg', 4499);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
