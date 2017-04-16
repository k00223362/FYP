-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 01:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fypci`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `SurName` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Message` varchar(150) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactID`, `FirstName`, `SurName`, `Mobile`, `Message`, `Email`) VALUES
(1, 'khizer', 'iqbal', '0831600162', 'hi how are you', 'khzeriqbal:gmail.com'),
(2, 'khizer', 'iqbal', '0831600162', 'hi how are you', 'khzeriqbal:gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `noticeId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `shortDescription` varchar(50) NOT NULL,
  `longDescription` varchar(250) NOT NULL,
  `largeImage` varchar(50) NOT NULL,
  `smallImage` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `dateUploaded` date NOT NULL,
  `dateExp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeId`, `userId`, `shortDescription`, `longDescription`, `largeImage`, `smallImage`, `area`, `dateUploaded`, `dateExp`) VALUES
(2, 8, 'art classes', 'all types available for birthdays', 'largeart1.jpg', 'smallart1.jpg', 'Limerick', '2014-03-18', '2014-03-25'),
(3, 3, 'bla bla', 'a lond description', 'image.jpg', 'small.jpg', 'limerick', '2014-03-25', '2014-03-26'),
(6, 1, 'ij', 'kj', 'Hydrangeas.jpg', '', '45', '0000-00-00', '0000-00-00'),
(7, 1, 'ij', 'kj', 'Hydrangeas.jpg', '', '45', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `SurName` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `AddressLine1` varchar(50) NOT NULL,
  `AddressLine2` varchar(50) NOT NULL,
  `AddressLine3` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`, `FirstName`, `SurName`, `Mobile`, `AddressLine1`, `AddressLine2`, `AddressLine3`, `Email`) VALUES
(1, 'fds', 'fsd', 'fsdrw', 'fsdrwe', 'fsd', 'fds', 'fds', 'fsd', 'fsd'),
(2, 'Mike', 'Mike123', 'Mike', 'Ryan', '88888888888', 'Main Street', 'Dublin Road', 'Limerick', 'gh@lit.ie'),
(3, 'john', 'john123', 'John', 'Ryan', '454545454', 'some where', 'some address', 'some town', 'email@lit.ie'),
(4, 'liam', 'liam123', 'Liam', 'Ryan', '123456789', 'Dublin Road', 'Dublin Street', 'Dublin', 'liam@lit.ie'),
(5, 'michelle', 'michelle123', 'michelle', 'Shine', '7778787878', 'bog road', 'somewhere', 'Tipperary', 'ms@lit.ie'),
(6, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd'),
(7, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(8, 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x'),
(9, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(10, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(11, 'liz', 'liz123', 'Elizabeth', 'Bourke', '62', '11 lower glanmire road cork', 'city', 'county', 'liz@lit.ie'),
(12, 'kjk', 'kjk', 'ali', 'kj', 'kj', 'kkj', 'kj', 'kj', 'kj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactID`),
  ADD UNIQUE KEY `ContactID_2` (`ContactID`),
  ADD KEY `ContactID` (`ContactID`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`noticeId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `noticeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
