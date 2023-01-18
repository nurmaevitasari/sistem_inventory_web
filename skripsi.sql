-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2017 at 05:48 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `malasngoding_kios`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(70) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`, `foto`) VALUES
(4, 'nurma', 'nurma', 'PhotoGrid_1438012946889.jpg'),
(5, 'ivana', 'ivana', '');

-- --------------------------------------------------------

--
-- Table structure for table `cable_multi_pear`
--

CREATE TABLE IF NOT EXISTS `cable_multi_pear` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(20) NOT NULL,
  `Masuk` varchar(10) NOT NULL,
  `Keluar` varchar(10) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Subplier` varchar(20) NOT NULL,
  `Project` varchar(20) NOT NULL,
  `Stock` varchar(10) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cable_multi_pear`
--

INSERT INTO `cable_multi_pear` (`No`, `Tanggal`, `Masuk`, `Keluar`, `Unit`, `Subplier`, `Project`, `Stock`) VALUES
(1, '2017-05-10', '40', '', 'Reel', 'Armindo', '', 'Gudang'),
(2, '2017-05-11', '', '5', 'Reel', '', 'RS siloam Karawaci', ''),
(5, '19 mei 2017', '30', '', 'Reel', 'Armindo', '', 'Gudang');

-- --------------------------------------------------------

--
-- Table structure for table `clos_rack_30u`
--

CREATE TABLE IF NOT EXISTS `clos_rack_30u` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(20) NOT NULL,
  `Masuk` varchar(20) NOT NULL,
  `Keluar` varchar(20) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `Subplier` varchar(50) NOT NULL,
  `Project` varchar(50) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `clos_rack_42u`
--

CREATE TABLE IF NOT EXISTS `clos_rack_42u` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(20) NOT NULL,
  `Masuk` varchar(20) NOT NULL,
  `Keluar` varchar(20) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `Subplier` varchar(50) NOT NULL,
  `Project` varchar(50) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patch_fo_lc`
--

CREATE TABLE IF NOT EXISTS `patch_fo_lc` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(20) NOT NULL,
  `Masuk` varchar(20) NOT NULL,
  `Keluar` varchar(20) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `Subplier` varchar(50) NOT NULL,
  `Project` varchar(50) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patch_panel_2u`
--

CREATE TABLE IF NOT EXISTS `patch_panel_2u` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(20) NOT NULL,
  `Masuk` varchar(20) NOT NULL,
  `Keluar` varchar(20) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `Subplier` varchar(50) NOT NULL,
  `Project` varchar(50) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patch_panel_cat5`
--

CREATE TABLE IF NOT EXISTS `patch_panel_cat5` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(20) NOT NULL,
  `Masuk` varchar(20) NOT NULL,
  `Keluar` varchar(20) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `Subplier` varchar(50) NOT NULL,
  `Project` varchar(50) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patch_panel_cat6`
--

CREATE TABLE IF NOT EXISTS `patch_panel_cat6` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(20) NOT NULL,
  `Masuk` varchar(20) NOT NULL,
  `Keluar` varchar(20) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `Subplier` varchar(50) NOT NULL,
  `Project` varchar(50) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patch_panel_fo_1u`
--

CREATE TABLE IF NOT EXISTS `patch_panel_fo_1u` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(20) NOT NULL,
  `Masuk` varchar(20) NOT NULL,
  `Keluar` varchar(20) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `Subplier` varchar(50) NOT NULL,
  `Project` varchar(50) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pipa_clipsal_20mm`
--

CREATE TABLE IF NOT EXISTS `pipa_clipsal_20mm` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(20) NOT NULL,
  `Masuk` varchar(20) NOT NULL,
  `Keluar` varchar(20) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `Subplier` varchar(50) NOT NULL,
  `Project` varchar(50) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sock_clipsal_20mm`
--

CREATE TABLE IF NOT EXISTS `sock_clipsal_20mm` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(20) NOT NULL,
  `Masuk` varchar(20) NOT NULL,
  `Keluar` varchar(20) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `Subplier` varchar(50) NOT NULL,
  `Project` varchar(50) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tranking_25/16`
--

CREATE TABLE IF NOT EXISTS `tranking_25/16` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(20) NOT NULL,
  `Masuk` varchar(20) NOT NULL,
  `Keluar` varchar(20) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `Subplier` varchar(50) NOT NULL,
  `Project` varchar(50) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `utp_cat6_blue`
--

CREATE TABLE IF NOT EXISTS `utp_cat6_blue` (
  `No` int(10) NOT NULL AUTO_INCREMENT,
  `Tanggal` varchar(20) NOT NULL,
  `Masuk` varchar(20) NOT NULL,
  `Keluar` varchar(20) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `Subplier` varchar(50) NOT NULL,
  `Project` varchar(50) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
