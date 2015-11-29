-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2015 at 02:45 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Name`, `Email`, `Message`) VALUES
(1, '1', 'z@gmail.com', '1234'),
(2, 'zanil', 'mohammedzanil7@gmail.com', '\r\nasdfasdf'),
(3, 'bilal', 'bilal@gmail.com', 'hello world'),
(4, 'Bilal', 'bilal@gmail.com', 'This is my feedback');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(5) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profession` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fName`, `lName`, `blood`, `city`, `hospital`, `gender`, `profession`, `date`) VALUES
(7, 'A', 'B', 'o+ve', 'chennai', 'Royapettah', 'male', 'studying', '2015-10-20'),
(8, 'C', 'D', 'o-ve', 'Madurai', 'Appolo', 'female', 'studying', '2012-12-12'),
(9, 'E', 'F', 'a+ve', 'Kanchipuram', 'Kavayri', 'male', 'job', '2015-10-25'),
(10, 'G', 'H', 'a-ve', 'ooty', 'Hindu Mission', 'female', 'studying', '2015-10-25'),
(11, 'I', 'J', 'b+ve', 'Palani', '>K.V.S', 'female', 'job', '2015-12-12'),
(12, 'K', 'L', 'b-ve', 'Pondichery', 'Hari Health care', 'female', 'studying', '2015-10-20'),
(13, 'M', 'N', 'ab+ve', 'Kanyakumari', 'GH', 'female', 'job', '2015-10-25'),
(14, 'O', 'P', 'ab-ve', 'ooty', 'Pallavan', 'male', 'studying', '2012-12-12'),
(15, 'A', 'J', 'o+ve', 'Madurai', 'Hindu Mission', 'male', 'studying', '2012-12-12'),
(16, 'C', 'B', 'b+ve', 'Palani', 'Hindu Mission', 'female', 'studying', '2015-10-25'),
(17, 'Bilal', 'Shariff', 'o+ve', 'chennai', 'Royapettah', 'male', 'studying', '1993-07-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
