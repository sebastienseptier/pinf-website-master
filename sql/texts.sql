-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2016 at 08:51 AM
-- Server version: 5.5.47-0+deb8u1
-- PHP Version: 5.6.17-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

DROP TABLE IF EXISTS `texts`;
CREATE TABLE IF NOT EXISTS `texts` (
  `textId` varchar(255) NOT NULL,
  `french` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`textId`, `french`) VALUES
('PAGE-TYPE-ID', 'DEFAULT'),
('website', 'Mind Up'),
('copyright', 'Copyright 2015 mind-up'),
('alt-logo', '[image for the logo]'),
('alt-twitter', 'DEFAULT'),
('alt-facebook', 'DEFAULT'),
('alt-google', 'DEFAULT'),
('a-home', 'Home'),
('a-login', 'Login'),
('a-team', 'Team'),

('a-inscription', 'inscription'),
('a-manage-members', 'manage-members'),
('a-profil', 'profil'),
('a-edit-profil', 'edit-profil'),
('a-edit-figures', 'edit-figures'),
('a-edit-projects', 'edit-projects'),
('a-edit-texts', 'edit-texts'),
('a-logout', 'logout'),
('a-project', 'project'),

('a-projects', 'Projects'),
('home-h-1-1', 'home-h-1-1'),
('home-h-2-1', 'home-h-2-1'),
('home-h-2-2', 'home-h-2-2'),
('home-h-3-1', 'home-h-3-1'),
('home-h-3-2', 'home-h-3-2'),
('home-p-1', 'home-p-1'),
('home-p-2', 'home-p-2'),
('home-p-3', 'home-p-3'),
('home-p-4', 'home-p-4'),
('home-p-5', 'home-p-5'),
('home-p-6', 'home-p-6'),
('home-p-7', 'home-p-7'),
('home-p-8', 'home-p-8'),
('rights-browseBackOffice', 'browseBackOffice'),
('rights-editSelfInfos', 'editSelfInfos'),
('rights-readOtherInfos', 'readOtherInfos'),
('rights-manageProject', 'manageProject'),
('rights-editFigures', 'editFigures'),
('rights-editOtherInfos', 'editOtherInfos'),
('rights-editPublicTexts', 'editPublicTexts'),
('rights-managePositions', 'managePositions'),
('rights-manageMembers', 'manageMembers'),
('admin', 'Administrateur'),
('guest', 'guest'),
('project-manager', 'Chargé d\'affaires'),
('member', 'member')
;



--
-- Indexes for dumped tables
--

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
 ADD PRIMARY KEY (`textId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `texts`
--
/*ALTER TABLE `texts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;*/
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
