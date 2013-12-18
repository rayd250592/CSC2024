-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2013 at 03:22 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutcompany`
--

CREATE TABLE IF NOT EXISTS `aboutcompany` (
  `ArticleID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY (`ArticleID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `aboutcompany`
--

INSERT INTO `aboutcompany` (`ArticleID`, `title`, `content`) VALUES
(10, 'Test', 'Test'),
(9, 'Test', 'Test'),
(8, 'Test', 'Test'),
(6, 'About the Company', 'Based on Malone Road, Belfast!'),
(11, 'Test', 'Test'),
(12, 'Test', 'Test'),
(13, 'Test', 'Test123'),
(14, 'This is a test', 'This is anther thest'),
(15, 'About the Company', 'Based on Malone Road, belfast, Raymond''s PC''s is the place to go for all your desktop and laptop needs!'),
(16, 'abc', '123'),
(17, 'test`', 'abc123'),
(18, 'test`;', 'abc123;'),
(19, 'Raymond', '123'),
(20, 'Raymond ', '<p>This is a test</p>'),
(25, '', ''),
(26, '', ''),
(27, '', ''),
(28, 'wqeqw', '<p>weqwqewqeqwq</p>'),
(29, 'wqeqw  ', '<p>weqwqewqeqwq</p>'),
(32, 'sdsa', '<p>sadsadasdsada</p>'),
(33, 'this is a test ', '<p>ahhh testing</p>'),
(34, 'Hello', '<p>This is a test</p>'),
(35, 'Hello', '<p>This is a test</p>'),
(36, 'Hello', '<p>This is a test</p>'),
(37, 'Hello', '<p>This is a test</p>'),
(38, 'Hello abc ', '<p>This another is This is a test</p>'),
(39, 'sdaasdas', '<p>adsasdaaaaaaaaaaaaaaaaaaa</p>'),
(40, 'sdaasdas', '<p>adsasdaaaaaaaaaaaaaaaaaaa</p>'),
(41, 'sdaasdas', '<p>adsasdaaaaaaaaaaaaaaaaaaa</p>'),
(42, 'sdaasdas', '<p>adsasdaaaaaaaaaaaaaaaaaaa</p>'),
(43, 'sdaasdas', '<p>adsasdaaaaaaaaaaaaaaaaaaa</p>'),
(44, 'sdaasdas', '<p>adsasdaaaaaaaaaaaaaaaaaaa</p>');

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE IF NOT EXISTS `colour` (
  `ColourID` int(11) NOT NULL AUTO_INCREMENT,
  `hexvalue` varchar(10) NOT NULL,
  PRIMARY KEY (`ColourID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`ColourID`, `hexvalue`) VALUES
(1, '#994000');

-- --------------------------------------------------------

--
-- Table structure for table `companyhistory`
--

CREATE TABLE IF NOT EXISTS `companyhistory` (
  `ArticleID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY (`ArticleID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `companyhistory`
--

INSERT INTO `companyhistory` (`ArticleID`, `title`, `content`) VALUES
(1, 'Test ', '<p>Test123</p>'),
(3, ' ewqe', '<p>wqewqwqe</p>');

-- --------------------------------------------------------

--
-- Table structure for table `customercharter`
--

CREATE TABLE IF NOT EXISTS `customercharter` (
  `ArticleID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `content` varchar(100) NOT NULL,
  `title1` varchar(40) NOT NULL,
  `content1` varchar(100) NOT NULL,
  `title2` varchar(40) NOT NULL,
  `content2` varchar(100) NOT NULL,
  `title3` varchar(40) NOT NULL,
  `content3` varchar(100) NOT NULL,
  `title4` varchar(40) NOT NULL,
  `content4` varchar(100) NOT NULL,
  PRIMARY KEY (`ArticleID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customercharter`
--

INSERT INTO `customercharter` (`ArticleID`, `title`, `content`, `title1`, `content1`, `title2`, `content2`, `title3`, `content3`, `title4`, `content4`) VALUES
(1, 't', '\r\nc\r\n\r\n', 't1', '\r\nc1\r\n\r\n', 't2', '\r\nc2\r\n\r\n', 't3', '\r\nc3\r\n\r\n', 't4', '\r\nc4\r\n\r\n'),
(3, 'sdaasd', '<p>asdsdaas</p>', 'sadasd', '<p>sadasd</p>', 'sadsa', '<p>sadasd</p>', 'rea', '<p>asd</p>', 'wer', '<p>abcde12345</p>');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `ArticleID` int(11) NOT NULL AUTO_INCREMENT,
  `line1` varchar(50) NOT NULL,
  `line2` varchar(50) NOT NULL,
  `line3` varchar(50) NOT NULL,
  PRIMARY KEY (`ArticleID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`ArticleID`, `line1`, `line2`, `line3`) VALUES
(2, '<p>dsfasfadsfs</p>', '<p>adsfdsafasdfsas</p>', '<p>4444444444444dfsfdsfsf</p>');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE IF NOT EXISTS `header` (
  `HeaderID` int(11) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(30) NOT NULL,
  PRIMARY KEY (`HeaderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`HeaderID`, `imagepath`) VALUES
(3, 'WIN_20131208_164356.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE IF NOT EXISTS `homepage` (
  `ArticleID` int(11) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(60) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY (`ArticleID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`ArticleID`, `imagepath`, `content`) VALUES
(1, 'WIN_20131208_164404.JPG', '\r\ntaylor\r\n\r\n'),
(2, 'WIN_20131208_164356.JPG', '<p>taylor</p>'),
(3, 'WIN_20131208_164410.JPG', '<p>asdas</p>'),
(4, 'WIN_20131208_164410.JPG', '<p>sadsa</p>'),
(5, 'WIN_20131208_164410.JPG', '<p>sadsa</p>'),
(6, 'WIN_20131208_164408.JPG', '<p>erew</p>'),
(7, 'WIN_20131208_164408.JPG', '<p>erew</p>'),
(8, 'WIN_20131208_164408.JPG', '<p>erew</p>'),
(9, 'WIN_20131208_164408.JPG', '<p>erew</p>'),
(10, 'WIN_20131208_164356.JPG', '<p>dsfdsfsdf</p>'),
(11, 'WIN_20131208_164356.JPG', '<p>dsfdsfsdf</p>'),
(14, 'WIN_20131208_164705.JPG', '<p>This is a test</p>');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pword` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `username`, `pword`) VALUES
(1, 'admin', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `machinename` varchar(50) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `hdd` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `os` varchar(50) NOT NULL,
  `graphics` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `imagepath` varchar(50) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `machinename`, `processor`, `hdd`, `ram`, `os`, `graphics`, `price`, `imagepath`) VALUES
(1, 'testing', '1', '2', '3', '4', '5', '3', 'WIN_20131208_165302.JPG'),
(2, 'testing', '1', '2', '3', '4', '5', '3', 'WIN_20131208_165302.JPG'),
(4, 'testing', '1', '2', '3', '4', '5', '3', 'WIN_20131208_165302.JPG'),
(6, 'sda', 'sadas', 'sadsadsa', 'sadsa', 'win9', 'ss', '10', 'WIN_20131208_165322.JPG'),
(5, 'testingafter', '1', '2', '3', '4', '5', '31', 'WIN_20131208_165302.JPG'),
(7, 'this', 'is', 'a', 'test', '7', '89', '100', 'WIN_20131208_164353.JPG');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
