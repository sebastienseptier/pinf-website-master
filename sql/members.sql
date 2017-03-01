-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2016 at 09:41 AM
-- Server version: 5.5.47-0+deb8u1
-- PHP Version: 5.6.17-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mindup`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--


DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jobId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressId` int(11) NOT NULL,
  `cityOfBirth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathToStudentCard` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathToIdCard` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathToCV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathToLicense` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathToGrayCard` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `members` (`id`, `name`, `firstname`, `jobId`, `email`, `hash`, `mobile`, `addressId`, `cityOfBirth`, `pathToStudentCard`, `pathToIdCard`, `pathToCV`, `pathToLicense`, `pathToGrayCard`) VALUES
(0, 'Admin', 'Admin', 'admin', 'admin', '$2y$10$RXa9PP9duKR/HQj8AXao6.Tp3bgcU7r/ehunqMVpBXkI/uPg7H.qi', '0123456789', 0, 'City', '','','','',''), -- pass = admin
(1, 'John', 'Do', 'project-manager', 'themail@gmail.com', '', '0621307498', 0, 'City', '','','','','')
;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`), ADD KEY `positionId` (`jobId`), ADD KEY `addressId` (`addressId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
