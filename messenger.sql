-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2018 at 06:29 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `messenger`
--

-- --------------------------------------------------------

--
-- Table structure for table `messagedb`
--

CREATE TABLE IF NOT EXISTS `messagedb` (
  `user_name` varchar(50) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `message_time` datetime DEFAULT NULL,
  `to_user` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `messagedb`
--

INSERT INTO `messagedb` (`user_name`, `message`, `message_time`, `to_user`, `id`) VALUES
('Soumitra', 'hello!', '2018-10-22 15:49:09', 'Abhishek', 39),
('Abhishek', 'hii :)', '2018-10-22 15:49:50', 'Soumitra', 40),
('Soumitra', 'what are you doing?', '2018-10-22 15:50:51', 'Abhishek', 41),
('Abhishek', 'nothing much. u say', '2018-10-22 15:52:13', 'Soumitra', 42),
('Soumitra', 'hii jay', '2018-10-23 11:30:33', 'Jayesh', 43),
('Soumitra', 'what are you doing?', '2018-10-30 12:54:01', 'Abhishek', 44),
('Abhishek', 'nothing', '2018-10-30 12:54:42', 'Soumitra', 45),
('Soumitra', 'ok', '2018-10-30 13:07:16', 'Abhishek', 46),
('Sayani', 'hii', '2018-10-30 14:37:22', 'Soumitra', 47),
('Soumitra', 'hello', '2018-10-30 14:38:14', 'Sayani', 48),
('Sayani', 'hi', '2018-11-02 16:18:09', 'Sonia', 49),
('Sonia', 'hellooo', '2018-11-02 16:19:25', 'Sayani', 50),
('Soumitra', 'hi', '2018-12-24 01:00:50', 'Soumitra', 51),
('Soumitra', 'jgfjf', '2018-12-25 20:15:41', 'Abhishek', 52),
('Abhishek', 'kjkj', '2018-12-25 20:16:46', 'Soumitra', 53);

-- --------------------------------------------------------

--
-- Table structure for table `signupdb`
--

CREATE TABLE IF NOT EXISTS `signupdb` (
  `email` varchar(100) NOT NULL DEFAULT '',
  `user` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `signupdb`
--

INSERT INTO `signupdb` (`email`, `user`, `password`, `id`) VALUES
('smtro0000@gmail.com', 'Soumitra', 'abc', 9),
('abhishek@gmail.com', 'Abhishek', 'abc', 10),
('jayesh@gmail.com', 'Jayesh', 'abc', 11),
('kiaan@gmail.com', 'Kiaan', 'abc', 12),
('sonia@gmail.com', 'Sonia', 'abc', 13),
('s@gmail.com', 'Sayani', 'abc', 14);
