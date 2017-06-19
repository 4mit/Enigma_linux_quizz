-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2017 at 05:52 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enigma`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `qid` varchar(5) NOT NULL,
  `email` varchar(200) NOT NULL,
  `answer` char(1) NOT NULL,
  `submissionTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`qid`, `email`, `answer`, `submissionTime`) VALUES
('qq100', 'asasas@ewew.com', '-', '17:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qid` varchar(5) NOT NULL,
  `quest` varchar(10000) NOT NULL,
  `answer` char(1) NOT NULL,
  `op1` varchar(100) NOT NULL,
  `op2` varchar(100) NOT NULL,
  `op3` varchar(100) NOT NULL,
  `op4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `quest`, `answer`, `op1`, `op2`, `op3`, `op4`) VALUES
('q1000', 'ffkdskfjj1ghj', 'a', 'dsfdff sdf', ' fsfsdfsdf', ' dsfsfsdf ', 'sfsdf sf sf ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `institute` varchar(200) NOT NULL,
  `p1` varchar(200) NOT NULL,
  `p2` varchar(299) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `submitted` char(1) NOT NULL DEFAULT 'n',
  `locked` char(1) NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`institute`, `p1`, `p2`, `mail`, `mob`, `submitted`, `locked`) VALUES
('sasas', 'asasa', 'sasasas', 'asasas@ewew.com', 'mob', 'y', 'n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
