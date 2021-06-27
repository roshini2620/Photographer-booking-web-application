-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2021 at 03:43 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web technology`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`name`, `password`) VALUES
('Admin', 'shabburosh'),
('Admin1', 'roshshabbu');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `User_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `name_of_the_event` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `services` varchar(50) NOT NULL,
  `package` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`User_name`, `email`, `date`, `name_of_the_event`, `address`, `services`, `package`) VALUES
('aadhvik', 'aadhvik@gmail.co', '2020-11-07', 'Betrothal', 'RR Mahal,Madurai', 'Photography and Videography', 'Heritage'),
('Ragavi', 'ragavi@gmail.com', '2020-11-12', 'Engagement', 'Saraswathy Mahal,Madurai.', 'Photography and Videography', 'Heritage'),
('sumo', 'sumo@gmail.com', '2021-03-27', 'Betrothal', 'T nagar,chennai', 'Photography and Videography', 'Moderate'),
('ankitha', 'ankitha@gmail.com', '2020-11-26', 'Marriage', 'SKR Mahal,Madurai.', 'Photography and Videography', 'Heritage'),
('deepalakshmi', 'deepa1@gmail.com', '2020-11-10', 'House warming', 'XYZ Mahal,Madurai.', 'Photography and Videography', 'Moderate'),
('Samyuktha', 'samyuktha@gmail.com', '2020-12-18', 'Babyshower', 'AS Mahal,Madurai.', 'Photography and Videography', 'Heritage');

-- --------------------------------------------------------

--
-- Table structure for table `forget_password`
--

CREATE TABLE IF NOT EXISTS `forget_password` (
  `email` varchar(20) NOT NULL,
  `temp_key` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forget_password`
--

INSERT INTO `forget_password` (`email`, `temp_key`) VALUES
('roshininb26@gmail.co', 'eef8b10b6fe8fb01fd5d'),
('roshininb26@gmail.co', '1a7a353c8ee3ce9debd6');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `password`) VALUES
('roshini', 'wwwww'),
('Shabreen', 'ismail'),
('Shabreen', 'ismail'),
('Shabreen', 'ghvhygv');

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE IF NOT EXISTS `pass` (
  `fullname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`fullname`, `password`, `email`) VALUES
('Roshini', 'add6dd5302a2789748c400ea5e54c7f9', 'roshininb26@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `email`, `phoneno`, `password`) VALUES
('harithara', 'thara@gmail.com', '9264628672', 'minik'),
('ankitha', 'ankitha@gmail.com', '9723142567', 'vfwsdg'),
('samairah', 'samairah@gmail.com', '9876543210', 'cgrtgn'),
('radha', 'radha@gmail.com', '9863653561', 'radhalaksh'),
('priya', 'priya@gmail.com', '6566576537', 'sanees'),
('aadhvik', 'aadhvik@gmail.com', '9647653891', 'vbbgxv'),
('preethi', 'preethi@gmail.com', '9675447213', 'fvfdvf'),
('pavithra', 'pavi@gmail.com', '9876534521', 'pavi'),
('deepa', 'deepa@gmail.com', '9876543211', 'deepa'),
('sumathi', 'sumathi@gmail.com', '9381408823', 'mathi'),
('rose', 'roshininb26@gmail.co', '9123456789', 'sdcsd'),
('felicia', 'felicia@gmail.com', '7362873832', 'n dcdjj'),
('Samyuktha', 'sam@gmail.com', '9562841235', 'samm'),
('deepalakshmi', 'deepa1@gmail.com', '9876543213', 'deepa'),
('sumo', 'sumo@gmail.com', '9126378635', 'smity'),
('ros', 'ros@gmail.com', '9654321678', 'john');
