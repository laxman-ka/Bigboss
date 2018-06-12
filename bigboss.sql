-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 05:59 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigboss`
--

-- --------------------------------------------------------

--
-- Table structure for table `contestants`
--

CREATE TABLE `contestants` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `short_name` varchar(10) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `entry_on` varchar(15) NOT NULL,
  `entry_type` varchar(5) NOT NULL,
  `profile_pic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestants`
--

INSERT INTO `contestants` (`id`, `name`, `short_name`, `profession`, `entry_on`, `entry_type`, `profile_pic`) VALUES
(2, 'Geeta Madhuri', 'GTM', 'Singer', 'Day 1', 'N', 'logo.png'),
(3, 'Shyamala', 'SYM', 'Anchor', 'Day 1', 'N', 'SYM.jpg'),
(4, 'Amith Tiwari', 'AMT', 'Artist', 'Day 1', 'N', 'AMT.jpg'),
(5, 'Deepti Sunaina', 'DSN', 'Insta Star', 'Day 1', 'N', 'DSN.jpg'),
(6, 'Deepthi', 'DPT', 'Anchor', 'Day 1', 'N', 'DPT.jpg'),
(7, 'Tanish', 'TNS', 'Actor', 'Day 1', 'N', 'TNS.jpg'),
(8, 'Babu Gogineni', 'BBG', 'Humanist Leader', 'Day 1', 'N', 'BBG.jpg'),
(9, 'Bhanu Shree Mehara', 'BSM', 'Artist', 'Day 1', 'N', 'BSM.jpg'),
(10, 'Nutan Naidu', 'NTN', 'Coomon Man', 'Day 1', 'N', 'NTN.jpg'),
(11, 'Roll Rida', 'RRD', 'Rapper', 'Day 1', 'N', 'RRd.jpg'),
(12, 'KIreeti', 'KRT', 'Artist', 'Day 1', 'N', 'KRT.jpg'),
(13, 'Kushal Manda', 'KSM', 'TV Actor', 'Day 1', 'N', 'KSM.jpg'),
(14, 'Tejaswi Madivada', 'TJM', 'Heroine', 'Day 1', 'N', 'TJM.jpg'),
(15, 'Samrat Reddy', 'SMR', 'Tv Artist', 'Day 1', 'N', 'SMR.jpg'),
(16, 'Ganesh', 'GNS', 'Common Man', 'Day 1', 'N', 'GNS.jpg'),
(17, 'Sanjana Anne', 'SNJ', 'Common Man', 'Day 1', 'N', 'SNJ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `elimination_process`
--

CREATE TABLE `elimination_process` (
  `id` int(11) NOT NULL,
  `selector` varchar(50) NOT NULL,
  `person1` varchar(50) NOT NULL,
  `person2` varchar(50) NOT NULL,
  `week_no` varchar(10) NOT NULL,
  `info` text NOT NULL,
  `created` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elimination_process`
--

INSERT INTO `elimination_process` (`id`, `selector`, `person1`, `person2`, `week_no`, `info`, `created`) VALUES
(3, 'Geetha Madhuri', 'SNJ', 'KRT', 'Week1', 'not participating in activities\r\nover acting than the normal people', 1528800180);

-- --------------------------------------------------------

--
-- Table structure for table `votes_count`
--

CREATE TABLE `votes_count` (
  `id` int(11) NOT NULL,
  `contestant` varchar(50) NOT NULL,
  `week_no` varchar(10) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes_count`
--

INSERT INTO `votes_count` (`id`, `contestant`, `week_no`, `votes`) VALUES
(1, '--Select Nominee--', 'Week3', 2),
(2, 'SNJ', 'Week3', 1),
(3, 'KRT', 'Week3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contestants`
--
ALTER TABLE `contestants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elimination_process`
--
ALTER TABLE `elimination_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes_count`
--
ALTER TABLE `votes_count`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contestants`
--
ALTER TABLE `contestants`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `elimination_process`
--
ALTER TABLE `elimination_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `votes_count`
--
ALTER TABLE `votes_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
