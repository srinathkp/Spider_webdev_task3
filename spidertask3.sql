-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2015 at 11:31 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='For the purpose of avoiding questions answered by the use' AUTO_INCREMENT=88 ;

--
-- Dumping data for table `filter`
--

INSERT INTO `filter` (`id`, `uid`, `qid`, `uanswer`, `points`) VALUES
(87, '30', '1', 'a', '2');

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
('What happened in the Ashes series 2013/14?', 'Australia won', 'England won', 'Series Draw', 'Series abandoned due to some issues', 'a', 'moderate', 'sports', 1, ''),
('Who proposed the theory of relativity?', 'Max Planck', 'Nikola Tesla', 'Albert Einstein', 'Neils Bohr', 'c', 'easy', 'science', 2, ''),
('The concept of ''Biosphere Reserve'' was evolved by ', 'Govt. of India', 'Botanical Survey of India', 'UNESCO', 'UNDP', 'c', 'difficult', 'nature', 3, ''),
('What does GNU stand for?', 'General UNIX', 'General Need UNIX', 'GNU''s not Unix', 'General Noble Unix', 'c', 'moderate', 'general', 4, ''),
('The Indian to beat the computers in mathematical wizardry is ', 'Ramanujam', 'Rina Panigrahi', 'Raja Ramanna', 'Shakunthala Devi', 'd', 'difficult', 'general', 9, '30'),
('Who''s the author of "Freedom Behind Bars"', 'Kiran Bedi', 'Jawaharlal Nehru', 'Sheikh Abdulla', 'Nelson Mandela', 'a', 'difficult', 'general', 10, ''),
('Gilt-edged market means', 'Market of Govt. Securities', 'Market of guns', 'Market of metals', 'None of the above', 'a', 'easy', 'general', 11, '');

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
('Srinath', 'srinath007', '$2y$10$msAmuHigBST2fJqSyOgwI.1', 10, 3, '', '', ''),
('Dinesh', 'srinathh', '$2y$10$R4pCKdbwvQcXM54F5VlSQ.t', 7, 4, '', '', ''),
('DInssss', 'aaaaaaaaaaaaaaa', '$2y$10$CXbkPx.UxmpV6sctjoPY..C', 7, 5, '$2y$10$9RdWiO4s82GTh3jRJqGNW.u0UDlni4f8IF3MmvYL67HsUXClKySOK', '', ''),
('Srinath', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '$2y$10$jeSSFSIPcrrG5ZWGiAvoEOj', 9, 6, '$2y$10$Om9X5do/JMEReO4ZlqcPmufQ3YzsR3PJjgglj/rnA1gPlSiQBSPJm', '', ''),
('aaaaaaaaaaaa', 'aaaaaaaaaaa', '$2y$10$8hsJLOlUI9tvOZgnd01eseTqeiWsbsz0URwCph5D6LKG9pyscyr8m', 13, 26, 'vlcsnap-2014-10-05-01h11m00s79.png', '', ''),
('Srinathnitt', 'srinathnitt', '$2y$10$edPAdFJ5KJLqtFweY9XOGuTWKjbDoF/Rav26MjFuaeVClkw9tpjAm', 23, 27, '', 'VlFzU9P6R1hgciT2CsY6qWVKrLRxr8HOgmZ6Gyrpk9HJOo2Bsyexai2BFfGr', ''),
('gggggggggggggggggg', 'ggggggggggggggg', '$2y$10$CdZCyfhpHSea912l8AeEi.NnMsrLNXt3D6XxMCivc/LiFfO.BbXW.', 6, 29, '', '', ''),
('Srinath', 'srinath', '$2y$10$Ikqyr0iYRiaUdY9j3z4tUudJ5U0H6uDp0bq5mJGlV4FGB.WNE.Sva', 19, 30, '', '8ercfOvEteuRGUF1xr16G8dTImv5HLAzWzuOdPHZaaQZkwsp8cpcuDpRnu5f', ' ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
