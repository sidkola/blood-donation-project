-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2016 at 08:37 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
DROP DATABASE IF EXISTS `blood`;
CREATE DATABASE `blood`;

USE `blood`;


-- --------------------------------------------------------

--
-- Table structure for table `donarreg`
--

CREATE TABLE IF NOT EXISTS `donarreg` (
  `bloodgroup` varchar(10) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `district` varchar(10) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donarreg`
--

INSERT INTO `donarreg` (`bloodgroup`, `state`, `district`, `city`, `name`, `unit`, `date`, `mobileno`) VALUES
('A-', 'EASFD', 'fsfdsdf', 'sdfsd', 'sddssd', '23', '2016-12-29', '4564564564');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(10) DEFAULT NULL,
  `mobileno` int(10) DEFAULT NULL,
  `occupation` varchar(10) DEFAULT NULL,
  `location` varchar(10) DEFAULT NULL,
  `feedback` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `name` varchar(20) DEFAULT NULL,
  `bloodgroup` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `mobileno` int(10) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `district` varchar(10) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `email` varchar(10) DEFAULT NULL,
  `add` varchar(50) DEFAULT NULL,
  `userid` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--


-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE IF NOT EXISTS `req` (
  `pname` varchar(20) DEFAULT NULL,
  `pbloodgroup` varchar(10) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `unit` int(10) DEFAULT NULL,
  `mobileno` int(10) DEFAULT NULL,
  `hname` varchar(10) DEFAULT NULL,
  `location` varchar(10) DEFAULT NULL,
  `add` varchar(50) DEFAULT NULL,
  `purpose` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `req`
--

