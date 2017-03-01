-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2016 at 03:37 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mindup`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postalCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `streetNameAndNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `figures`
--

CREATE TABLE IF NOT EXISTS `figures` (
  `id` int(11) NOT NULL,
  `textId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL,
  `titleId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jobId` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressId` int(11) NOT NULL,
  `cityOfBirth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathToStudentCard` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathToIdCard` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathToCV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathToLicense` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathToGrayCard` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(11) NOT NULL,
  `jobId` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `firstName` int(11) NOT NULL,
  `job` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `cityOfBirth` int(11) NOT NULL,
  `studentCard` int(11) NOT NULL,
  `idCard` int(11) NOT NULL,
  `CV` int(11) NOT NULL,
  `license` int(11) NOT NULL,
  `grayCard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE IF NOT EXISTS `texts` (
  `id` int(11) NOT NULL,
  `textId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `french` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `figures`
--
ALTER TABLE `figures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `textId` (`textId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`titleId`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `positionId` (`jobId`),
  ADD KEY `addressId` (`addressId`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobId` (`jobId`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `textId` (`textId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `figures`
--
ALTER TABLE `figures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`jobId`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`addressId`) REFERENCES `addresses` (`id`);

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_ibfk_1` FOREIGN KEY (`jobId`) REFERENCES `jobs` (`id`);

--
-- Constraints for table `texts`
--
ALTER TABLE `texts`
  ADD CONSTRAINT `texts_ibfk_1` FOREIGN KEY (`textId`) REFERENCES `jobs` (`titleId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
