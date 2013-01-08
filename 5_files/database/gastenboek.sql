-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2012 at 11:20 PM
-- Server version: 5.1.63
-- PHP Version: 5.3.3-7+squeeze13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `www`
--

-- --------------------------------------------------------

--
-- Table structure for table `_gastenboek`
--

CREATE TABLE IF NOT EXISTS `gastenboek` (
  `bericht_id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` tinytext NOT NULL,
  `bericht` text NOT NULL,
  `bericht_toegevoegd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`bericht_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='In deze tabel worden gastenboek berichten opgeslagen.' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `_gastenboek`
--

INSERT INTO `gastenboek` (`bericht_id`, `auteur`, `bericht`, `bericht_toegevoegd`) VALUES
(1, 'Justus', 'First post!', '2012-12-17 23:13:27'),
(2, 'Justus', 'Second...', '2012-12-17 23:13:57');
