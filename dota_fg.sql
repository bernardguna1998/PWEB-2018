-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2018 at 09:09 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dota_fg`
--

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

DROP TABLE IF EXISTS `heroes`;
CREATE TABLE IF NOT EXISTS `heroes` (
  `hero_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `type` enum('Strength','Agility','Intelligence','') NOT NULL,
  `strength` smallint(6) NOT NULL,
  `agility` smallint(6) NOT NULL,
  `intelligence` smallint(6) NOT NULL,
  `damage` smallint(6) NOT NULL,
  `armor` smallint(6) NOT NULL,
  `is_ranged` tinyint(1) NOT NULL,
  PRIMARY KEY (`hero_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`hero_id`, `name`, `type`, `strength`, `agility`, `intelligence`, `damage`, `armor`, `is_ranged`) VALUES
(1, 'Huskar', 'Strength', 23, 10, 12, 50, 35, 1),
(2, 'Crystal Maiden', 'Intelligence', 10, 12, 23, 50, 15, 1),
(3, 'Juggernaut', 'Agility', 11, 23, 10, 25, 12, 0),
(4, 'Terrorblade', 'Agility', 14, 25, 11, 25, 14, 0),
(5, 'Pudge', 'Strength', 26, 10, 10, 24, 18, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `name`) VALUES
(1, 'Sentinel'),
(2, 'Scourge');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
