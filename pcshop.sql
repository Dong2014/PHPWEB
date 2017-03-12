-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2017 at 08:06 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc shop`
--
CREATE DATABASE IF NOT EXISTS `pc shop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pc shop`;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemname` varchar(20) NOT NULL,
  `itemcost` double NOT NULL,
  `itemprice` double NOT NULL,
  `itemunits` int(11) NOT NULL,
  `itemcat` varchar(20) NOT NULL,
  `itempath` varchar(100) NOT NULL,
  `itemid` int(100) NOT NULL,
  `itemhit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemname`, `itemcost`, `itemprice`, `itemunits`, `itemcat`, `itempath`, `itemid`, `itemhit`) VALUES
('ASUSZ1', 50, 100, 20, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m1.jpg', 1, 1),
('ASUS122', 50, 100, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m2.jpg', 2, 2),
('ASUS144', 60, 100, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m3.jpg', 3, 3),
('ASUSZ5', 60, 200, 22, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m4.jpg', 4, 1),
('DELL123', 70, 300, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m5.jpg', 5, 2),
('GYG122', 60, 100, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m6.jpg', 6, 3),
('TY122', 60, 200, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m7.jpg', 7, 11),
('MSI122', 60, 300, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m8.jpg', 8, 22),
('GYTT111', 60, 80, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m9.jpg', 9, 4),
('UX1222', 60, 144, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m10.jpg', 10, 2),
('UXX111', 60, 180, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m11.jpg', 11, 44),
('PX111', 60, 130, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m12.jpg', 12, 441),
('UX100', 223, 500, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m13.jpg', 13, 12),
('DULL99', 13, 100, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m14.jpg', 14, 1),
('TXXX11', 50, 100, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m15.jpg', 15, 3),
('RX770', 50, 233, 30, 'MB', 'http://localhost:1080/Sources/computer%20parts/motherboards/m16.jpg', 16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `id`) VALUES
('dong', '123', 0),
('ellen', '0610', 0),
('ellen', '0610', 0),
('ellen', '0610', 0),
('ellen', '0610', 0),
('ellen', '0610', 0),
('ellen', '0610', 0),
('dong', '123aaaaaaa', 0),
('dong', 'aa', 0),
('ccc', '123', 0),
('', '123', 0),
('aa', 'aa', 0),
('tom', '123', 0),
('yuuu', 'yuu', 0),
('cc', 'cc', 0),
('ellen', '0610', 0),
('fccc', 'ccc', 0),
('uioo', 'iouoik', 0),
('sdfdsafdsa', 'sdfdsf', 0),
('test', 'test', 0),
('sdfdasf', 'dfdsaf', 0),
('ccccccc', 'ccc', 0),
('cccccccccc', 'cc', 0),
('cccccccccc', 'ccc', 0),
('uio122', 'sdjufldsaj', 0),
('myellen', 'myellen', 0),
('yuiosdfdsa', 'myellen', 0),
('sdfdsafdsa', 'sdfdsafdsa', 0),
('acccc', 'cccc', 0),
('test test', 'sdrfdsf', 0),
('cccccccccc', 'cc', 0),
('sdfdsafdsf', 'dsfdsafdsa', 0),
('sddddddddd', 'sdss', 0),
('tes11', '11', 0),
('ellen', '0610', 0),
('è€å©†å“’', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD UNIQUE KEY `itemid` (`itemid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
