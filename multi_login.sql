-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2019 at 09:19 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `edu`
--

CREATE TABLE `edu` (
  `eduid` int(11) NOT NULL,
  `edutype` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edu`
--

INSERT INTO `edu` (`eduid`, `edutype`, `date`, `title`, `institution`) VALUES
(1, 'Master\'s Degree', '2019-Present', 'Masters in Computer Science', 'University of Texas Arlington'),
(2, 'Engineering', '2015-2019', 'Bachelors of Computer Engineering', 'Atharva College of Engineering'),
(3, 'High School', '2013-2015', 'Bachelors of Science', 'Vidyalankar');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `expid` int(11) NOT NULL,
  `firm` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`expid`, `firm`, `date`, `title`, `description`) VALUES
(1, 'SSN Web Architects', 'July 2018-Sept 2018', 'Web Developer', 'Collaborate within an Agile team structure where they assisted with developing code using such technologies as: Java, JavaScript and Wordpress.\n\nDeveloped front-end web applications using HTML/CSS and JavaScript. Developed back-end web applications using php and mysql.                        '),
(2, 'NMIMS Kirit P. Mehta School of Law', 'Feb 2017- Aug 2017', 'Freelance Web Developer', 'This was the freelancing project which was developed by me and my colleague. I did UI, UX development using Javascript, CSS and various frameworks. Also I was in thorough contact with my client and I was making sure that all his requirements are fulfilled. http://meraki.nmims.edu                                    ');

-- --------------------------------------------------------

--
-- Table structure for table `hireme`
--

CREATE TABLE `hireme` (
  `hireid` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hireme`
--

INSERT INTO `hireme` (`hireid`, `cost`, `description`) VALUES
(1, 300, 'Design for natural people'),
(2, 1400, 'Website Design'),
(3, 800, '3d character Design');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `homeid` int(50) NOT NULL,
  `nameid` varchar(50) NOT NULL,
  `bio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`homeid`, `nameid`, `bio`) VALUES
(1, '\n        Adit Patil', '\n      Web Developer, Android Developer, Writer   ');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `pid` int(11) NOT NULL,
  `aboutme` mediumtext NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `languages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`pid`, `aboutme`, `age`, `email`, `phone`, `address`, `languages`) VALUES
(1, '      A graduate Computer Science student at University of Texas at Arlington with an interest in Web developing, Data mining, Artificial Intelligence and Machine Learning. Seeking the new opportunities across various tech domains. Currently working and Learning AI &amp; Algorithms.', 22, '        adi10.patil@gmail.com', '        +14699203325', '        221B Bakers Street', '        English, Hindi, Marathi');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serid` int(11) NOT NULL,
  `services` varchar(50) NOT NULL,
  `hireid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serid`, `services`, `hireid`) VALUES
(1, 'Logo', 1),
(2, 'Advertising image to print', 1),
(3, 'Photo Editing', 1),
(4, 'Site Construction', 2),
(5, 'Maintenance for 6 months', 2),
(6, 'Character Sketch', 3),
(7, 'Digitization and development', 3),
(8, 'Animation', 3),
(9, 'Video demo', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'admin', 'adi10.patil@gmail.com', 'admin', 'admin'),
(2, 'id', 'id', 'admin', 'id'),
(3, 'admin', 'adi@gmail.com', 'admin', 'f6fdffe48c908deb0f4c3bd36c032e72'),
(4, 'admin', 'adi@gmail.com', 'admin', 'f6fdffe48c908deb0f4c3bd36c032e72'),
(5, 'user', 'adit2patil@gmail.com', 'user', '5cc32e366c87c4cb49e4309b75f57d64'),
(6, 'user', 'adit2patil@gmail.com', 'user', '5cc32e366c87c4cb49e4309b75f57d64');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`eduid`);

--
-- Indexes for table `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`expid`);

--
-- Indexes for table `hireme`
--
ALTER TABLE `hireme`
  ADD PRIMARY KEY (`hireid`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`homeid`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serid`),
  ADD KEY `hireid` (`hireid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edu`
--
ALTER TABLE `edu`
  MODIFY `eduid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exp`
--
ALTER TABLE `exp`
  MODIFY `expid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hireme`
--
ALTER TABLE `hireme`
  MODIFY `hireid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `homeid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
