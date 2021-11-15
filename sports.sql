-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2021 at 05:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` varchar(30) NOT NULL,
  `admin-name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `admin-name`, `password`) VALUES
('ankur', 'Ankur Kumar Karn', '12345'),
('anishwar', 'Anishwar Sharma', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `sport_name` varchar(40) DEFAULT NULL,
  `category_name` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `team_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `sport_name`, `category_name`, `gender`, `team_size`) VALUES
(10003, 'cricket', 'cricket-boys-oneday-15', 'male', 15);

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `contestant_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `solo_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contestant_in_event`
--

CREATE TABLE `contestant_in_event` (
  `event_id` int(11) NOT NULL,
  `contestant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(40) DEFAULT NULL,
  `event_day` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `solo_id_roll` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`solo_id_roll`, `name`, `email`, `password`, `phone`, `gender`, `age`) VALUES
('20BCS997', 'Sahil Anand', 'sahil@gmail.com', '12345678', '9876054321', 'male', 20),
('20BCS998', 'Rohan', 'rohan@gmail.com', '1234', '1234567890', 'male', 19),
('20BCS999', 'Sahil Anand', 'sahil@gmail.com', '12345678', '9876054321', 'male', 20);

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sport_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sport_name`) VALUES
('cricket');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `team_roster`
--

CREATE TABLE `team_roster` (
  `team_id` int(11) NOT NULL,
  `solo_id_roll` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `sport_name` (`sport_name`);

--
-- Indexes for table `contestant`
--
ALTER TABLE `contestant`
  ADD PRIMARY KEY (`contestant_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `solo_id` (`solo_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `contestant_in_event`
--
ALTER TABLE `contestant_in_event`
  ADD PRIMARY KEY (`event_id`,`contestant_id`),
  ADD KEY `contestant_id` (`contestant_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`solo_id_roll`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sport_name`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `team_roster`
--
ALTER TABLE `team_roster`
  ADD PRIMARY KEY (`team_id`,`solo_id_roll`),
  ADD KEY `solo_id_roll` (`solo_id_roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `contestant`
--
ALTER TABLE `contestant`
  MODIFY `contestant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`sport_name`) REFERENCES `sports` (`sport_name`);

--
-- Constraints for table `contestant`
--
ALTER TABLE `contestant`
  ADD CONSTRAINT `contestant_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `contestant_ibfk_2` FOREIGN KEY (`solo_id`) REFERENCES `member` (`solo_id_roll`),
  ADD CONSTRAINT `contestant_ibfk_3` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`);

--
-- Constraints for table `contestant_in_event`
--
ALTER TABLE `contestant_in_event`
  ADD CONSTRAINT `contestant_in_event_ibfk_1` FOREIGN KEY (`contestant_id`) REFERENCES `contestant` (`contestant_id`),
  ADD CONSTRAINT `contestant_in_event_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`);

--
-- Constraints for table `team_roster`
--
ALTER TABLE `team_roster`
  ADD CONSTRAINT `team_roster_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`),
  ADD CONSTRAINT `team_roster_ibfk_2` FOREIGN KEY (`solo_id_roll`) REFERENCES `member` (`solo_id_roll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
