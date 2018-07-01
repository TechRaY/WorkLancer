-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2018 at 04:09 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cowrks`
--

-- --------------------------------------------------------

--
-- Table structure for table `invites`
--

CREATE TABLE `invites` (
  `Pid` varchar(30) NOT NULL,
  `Send_ID` varchar(30) NOT NULL,
  `Rec_ID` varchar(30) NOT NULL,
  `Is_Accepted` int(11) NOT NULL DEFAULT '0',
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invites`
--

INSERT INTO `invites` (`Pid`, `Send_ID`, `Rec_ID`, `Is_Accepted`, `Date`) VALUES
('71', 'ms@gmail.com', 'rahulshetty@gmail.com', 2, '2018-07-02'),
('72', 'ms@gmail.com', 'rahulshetty@gmail.com', 2, '2018-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Pid` int(11) NOT NULL,
  `Company` varchar(30) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `Stipend` int(11) NOT NULL,
  `Skillsets` varchar(30) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Refund_period` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Pid`, `Company`, `Description`, `Stipend`, `Skillsets`, `Duration`, `Refund_period`) VALUES
(72, 'STANFORD', 'Java working', 123, 'c', 1, 15),
(71, 'STANFORD', 'Java working', 123, 'c', 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `R_id` int(11) NOT NULL,
  `Is_Booked` int(11) NOT NULL DEFAULT '0',
  `Username` varchar(30) DEFAULT NULL,
  `Date` date NOT NULL,
  `Start_Time` int(11) NOT NULL,
  `End_Time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `X` int(11) NOT NULL,
  `Y` int(11) NOT NULL,
  `Is_Booked` int(11) NOT NULL DEFAULT '0',
  `Username` varchar(30) DEFAULT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `No_of_Days` int(11) NOT NULL,
  `Seat_ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TID` int(30) NOT NULL,
  `Send_ID` varchar(30) NOT NULL,
  `Rec_ID` varchar(30) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `SkillSets` varchar(50) DEFAULT NULL,
  `EmailID` varchar(30) DEFAULT NULL,
  `Mobile` varchar(12) DEFAULT NULL,
  `Credits` int(11) NOT NULL DEFAULT '100'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `SkillSets`, `EmailID`, `Mobile`, `Credits`) VALUES
('Rahul Shetty', '1234', 'c,java,python,scala', 'rahulshetty@gmail.com', '8655189780', 100),
('Mahesh Parwani', '1234', 'java,c', 'ms@gmail.com', '9876162133', -190);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`R_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`Seat_ID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `Seat_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TID` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
