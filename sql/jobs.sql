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
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `textId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `browseBackOffice` tinyint(1) NOT NULL,
  `editSelfInfos` tinyint(1) NOT NULL,
  `readOtherInfos` tinyint(1) NOT NULL,
  `manageProject` tinyint(1) NOT NULL,
  `editFigures` tinyint(1) NOT NULL,
  `editOtherInfos` tinyint(1) NOT NULL,
  `editPublicTexts` tinyint(1) NOT NULL,
  `managePositions` tinyint(1) NOT NULL,
  `manageMembers` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;





INSERT INTO `jobs` (`textId`, `browseBackOffice`, `editSelfInfos`, `readOtherInfos`, `manageProject`, `editFigures`, `editOtherInfos`, `editPublicTexts`, `managePositions`, `manageMembers`) VALUES
    ('admin', 1, 1, 1, 1, 1, 1, 1, 1, 1),
    ('guest', 0, 0, 0, 0, 0, 0, 0, 0, 0),
    ('member', 1, 1, 1, 0, 0, 0, 0, 0, 0),
    ('project-manager', 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `jobs`
    ADD PRIMARY KEY (`textId`);

--
-- AUTO_INCREMENT for dumped tables
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
