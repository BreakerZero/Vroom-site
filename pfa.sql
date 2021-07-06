-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2021 at 08:43 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `classement`
--

CREATE TABLE `classement` (
  `ID_Apprenti` int(12) NOT NULL DEFAULT '0',
  `Pseudo_Apprenti` varchar(32) DEFAULT NULL,
  `Score_Examen` int(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classement`
--

INSERT INTO `classement` (`ID_Apprenti`, `Pseudo_Apprenti`, `Score_Examen`) VALUES
(1, 'Matthieu_', 100),
(2, 'Salah_', 99),
(3, 'Gaëtan_', 50),
(4, 'Jérôme_', 70),
(5, 'Superconducteur78', 85),
(6, 'UnJourJ\'AuraisMonCode!', 74);

-- --------------------------------------------------------

--
-- Table structure for table `rapport`
--

CREATE TABLE `rapport` (
  `ID_Rapport` int(9) NOT NULL,
  `Pseudo_Apprenti` varchar(32) DEFAULT NULL,
  `Mail_Apprenti` varchar(64) DEFAULT NULL,
  `Sujet_Rapport` varchar(50) NOT NULL,
  `Message_Rapport` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rapport`
--

INSERT INTO `rapport` (`ID_Rapport`, `Pseudo_Apprenti`, `Mail_Apprenti`, `Sujet_Rapport`, `Message_Rapport`) VALUES
(2, 'Matthieu', 'matthieus701@gmail.com', 'fonctionnement', 'Problème visualisation voiture rouge dans croisement à trois voies'),
(3, 'Matthieu', 'matthieus701@gmail.com', 'fonctionnement', 'Problème visualisation voiture rouge dans croisement à trois voies lorsque bidule enchaine avec la moitié de  la congolexicomatisation des loi du marché'),
(4, 'salah', 'matthieus701@gmail.com', 'fonctionnement', 'ertyhtrez'),
(5, 'test', 'matthieu.stancato@massimini.fr', 'fonctionnement', 'zedfvgbn'),
(6, 'test', 'matthieu.stancato@massimini.fr', 'fonctionnement', 'zedfvgbn'),
(7, 'test1', 'matthieu.stancato@massimini.fr', 'fonctionnement', 'zedfvgbn'),
(8, 'test1', 'matthieu.stancato@massimini.fr', 'fonctionnement', 'zedfvgbn'),
(9, 'erfg', 'matthieu.stancato@massimini.fr', 'fonctionnement', 'edfrghytgr'),
(10, 'erfg', 'matthieu.stancato@massimini.fr', 'fonctionnement', 'edfrghytgr'),
(11, 'Matthieu', 'matthieus701@gmail.com', 'bug', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classement`
--
ALTER TABLE `classement`
  ADD PRIMARY KEY (`ID_Apprenti`),
  ADD UNIQUE KEY `Pseudo_Apprenti` (`Pseudo_Apprenti`);

--
-- Indexes for table `rapport`
--
ALTER TABLE `rapport`
  ADD PRIMARY KEY (`ID_Rapport`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rapport`
--
ALTER TABLE `rapport`
  MODIFY `ID_Rapport` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
