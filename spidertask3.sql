-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2015 at 10:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spidertask3`
--

-- --------------------------------------------------------

--
-- Table structure for table `filter`
--

CREATE TABLE IF NOT EXISTS `filter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` mediumtext NOT NULL,
  `qid` mediumtext NOT NULL,
  `uanswer` varchar(10) NOT NULL,
  `points` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='For the purpose of avoiding questions answered by the use' AUTO_INCREMENT=62 ;

--
-- Dumping data for table `filter`
--

INSERT INTO `filter` (`id`, `uid`, `qid`, `uanswer`, `points`) VALUES
(59, '30', '11', 'a', '3'),
(60, '30', '10', 'a', '3'),
(61, '30', '9', 'a', '2');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question` varchar(10000) NOT NULL,
  `opta` varchar(10000) NOT NULL,
  `optb` varchar(10000) NOT NULL,
  `optc` varchar(10000) NOT NULL,
  `optd` varchar(10000) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `difficulty` varchar(15) NOT NULL,
  `category` varchar(16) NOT NULL,
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `posted_by` varchar(10000) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question`, `opta`, `optb`, `optc`, `optd`, `answer`, `difficulty`, `category`, `qid`, `posted_by`) VALUES
('hi', 'hi', 'hello', 'van', 'come', 'a', 'difficult', 'sports', 1, ''),
('hahahahiii', 'solda', 'enada', 'odiru', 'darling', 'a', 'easy', 'science', 2, ''),
('hiiiiiiiiiiiiii', 'aaaaaaaaaa', 'bbbbbbbbb', 'ccccccccccc', 'ddddddddd', 'a', 'easy', 'nature', 3, ''),
('hiiiiiiiiiiiiii', 'aaaaaaaaaa', 'bbbbbbbbb', 'ccccccccccc', 'ddddddddd', 'a', 'easy', 'general', 4, ''),
('onnukm oppajsdioasndnasjsjndjonsba kjlbnvljkdnff', 'aaaaaaaaaaaaaaaaadasldnasnd', 'bsdnsdfnsdfjn', 'inldwnfkjdsnukfns', 'jdsnfkjsdnfnwej', 'a', 'moderate', 'general', 9, '30'),
('aaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbb', 'a', 'difficult', 'general', 10, '30'),
('aaaaaaaaaaaaaaaaaaaaaaaaanmhnjk', 'njjjjjjjjjjjjk', 'popkioohiuh', 'igtsdyfghfyguf', 'fdtjjhghokl;juiigv', 'a', 'difficult', 'general', 11, '30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `score` int(30) NOT NULL DEFAULT '0',
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `prof_pic` varchar(100) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `qid_answered` varchar(10000) NOT NULL DEFAULT '0' COMMENT 'qid of the questions answered so far by the user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `username`, `password`, `score`, `id`, `prof_pic`, `remember_token`, `qid_answered`) VALUES
('Srinath', 'srinath007', '$2y$10$msAmuHigBST2fJqSyOgwI.1', 0, 3, '', '', ''),
('Dinesh', 'srinathh', '$2y$10$R4pCKdbwvQcXM54F5VlSQ.t', 0, 4, '', '', ''),
('DInssss', 'aaaaaaaaaaaaaaa', '$2y$10$CXbkPx.UxmpV6sctjoPY..C', 0, 5, '$2y$10$9RdWiO4s82GTh3jRJqGNW.u0UDlni4f8IF3MmvYL67HsUXClKySOK', '', ''),
('Srinath', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '$2y$10$jeSSFSIPcrrG5ZWGiAvoEOj', 0, 6, '$2y$10$Om9X5do/JMEReO4ZlqcPmufQ3YzsR3PJjgglj/rnA1gPlSiQBSPJm', '', ''),
('aaaaaaaaaaaa', 'aaaaaaaaaaa', '$2y$10$8hsJLOlUI9tvOZgnd01eseTqeiWsbsz0URwCph5D6LKG9pyscyr8m', 0, 26, 'vlcsnap-2014-10-05-01h11m00s79.png', '', ''),
('Srinathnitt', 'srinathnitt', '$2y$10$edPAdFJ5KJLqtFweY9XOGuTWKjbDoF/Rav26MjFuaeVClkw9tpjAm', 0, 27, '', 'VlFzU9P6R1hgciT2CsY6qWVKrLRxr8HOgmZ6Gyrpk9HJOo2Bsyexai2BFfGr', ''),
('gggggggggggggggggg', 'ggggggggggggggg', '$2y$10$CdZCyfhpHSea912l8AeEi.NnMsrLNXt3D6XxMCivc/LiFfO.BbXW.', 0, 29, '', '', ''),
('Srinath', 'srinath', '$2y$10$Ikqyr0iYRiaUdY9j3z4tUudJ5U0H6uDp0bq5mJGlV4FGB.WNE.Sva', -7, 30, '', 'DpmTT1G5V1yOW76bA8moQXW2wbI72LL7l4tGzPY9zxxkVL7bWU9chWRsqoGG', ' ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
