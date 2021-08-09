-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2019 at 05:52 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leaveapp`
--
CREATE DATABASE IF NOT EXISTS `leaveapp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `leaveapp`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`) VALUES
('admin', 'mkgkassd');

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE IF NOT EXISTS `applied` (
  `apply_date` date NOT NULL,
  `stud_name` varchar(30) NOT NULL,
  `stud_year` varchar(30) NOT NULL,
  `stud_dept` varchar(30) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `reason` varchar(2000) NOT NULL,
  `stud_mail` varchar(30) NOT NULL,
  `staff_mail` varchar(30) NOT NULL,
  `stat` int(1) NOT NULL DEFAULT '0',
  `id` int(3) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_name` varchar(30) NOT NULL,
  `staff_mail` varchar(30) NOT NULL,
  `staff_pass` varchar(30) NOT NULL,
  `staff_mobno` int(10) NOT NULL,
  `staff_dept` varchar(10) NOT NULL,
  `staff_year` varchar(30) NOT NULL,
  PRIMARY KEY (`staff_mail`),
  UNIQUE KEY `staff_mobno` (`staff_mobno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE IF NOT EXISTS `stud` (
  `stud_name` varchar(30) NOT NULL,
  `stud_mail` varchar(30) NOT NULL,
  `stud_pass` varchar(30) NOT NULL,
  `stud_mobno` int(10) NOT NULL,
  `stud_dept` varchar(10) NOT NULL,
  `stud_year` varchar(10) NOT NULL,
  PRIMARY KEY (`stud_mail`),
  UNIQUE KEY `stud_mobno` (`stud_mobno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
