-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 03:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE `idea` (
  `ideaId` int(11) NOT NULL,
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
-- Dumping data for table `idea`
--

INSERT INTO `idea` (`ideaId`, `userId`, `shortDescription`, `longDescription`, `largeImage`, `smallImage`, `area`, `dateUploaded`, `dateExp`) VALUES
(6, 0, 'sa', 'sa', 'pink-sports-car.jpg', '', 'sagsd', '0000-00-00', '0000-00-00'),
(9, 1, 'g', 'g', 'pink-sports-car.jpg', '', 'ff', '0000-00-00', '0000-00-00'),
(12, 1, 'khizer', 'adding', 'pink-sports-car.jpg', '', '23', '0000-00-00', '0000-00-00'),
(13, 1, 'dwq', 'dwqdwq', 'Berline.jpg', '', 'dwq', '0000-00-00', '0000-00-00'),
(14, 1, 'dwq', 'dwqdwq', 'Berline.jpg', '', 'dwq', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `SurName` varchar(20) NOT NULL,
  `Mobile` varchar(18) NOT NULL,
  `AddressLine1` varchar(25) NOT NULL,
  `AddressLine2` varchar(20) NOT NULL,
  `AddressLine3` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `UserID` int(13) NOT NULL COMMENT 'user id is unique for user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserName`, `Password`, `FirstName`, `SurName`, `Mobile`, `AddressLine1`, `AddressLine2`, `AddressLine3`, `email`, `UserID`) VALUES
('Ian', '123456789', 'Ian', 'Tully', '0862695454', 'Limerick', 'City Centre', 'Ireland', 'Ian@gmail.com', 1),
('Mark', '123456', 'Mark', 'Hayes', '0899795704', 'limerick ', 'ballysimon', 'county limerick', 'markhayes@gmail.com', 3),
('Zaheer', '123456', 'Zaheer', 'Uddin', '0868603790', 'raheen', 'limerick city', '', 'zaheer7779@gmail.com', 8),
('shahzad', '123456', 'shahzad', 'bhai', '0860637691', 'raheen', 'limerick', 'county limerick', 'shahzad@gmail.com', 888),
('khizer', 'Khizer123456', 'Khizer', 'Iqbal', '0831600162', '11 Lower Glanmire Road', 'Cork City', 'County Cork', 'khzeribal@gmail.com', 123456),
('b', 'b', 'd', 'd', '2121', 'd', 'd', 'd', 'b@lit.ie', 123457),
('khizer', 'Khizer123456', 'Khizer', 'Iqbal', '0831600162', '11 Lower Glanmire Road', 'Cork City', 'County Cork', 'khzeribal@gmail.com', 123458),
('khizer', 'Khizer123456', 'Khizer', 'Iqbal', '0831600162', '11 Lower Glanmire Road', 'Cork City', 'County Cork', 'khzeribal@gmail.com', 123459),
('Ian', '123456789', 'Ian', 'Tully', '0862695454', 'Limerick', 'City Centre', 'Ireland', 'Ian@gmail.com', 123460),
('Ian', '123456789', 'Ian', 'Tully', '0862695454', 'Limerick', 'City Centre', 'Ireland', 'Ian@gmail.com', 123461),
('Ian', '123456789', 'Ian', 'Tully', '0862695454', 'Limerick', 'City Centre', 'Ireland', 'Ian@gmail.com', 123462),
('Ian', 'Khizer123456', 'Ian', 'Tully', '0862695454', 'Limerick', 'City Centre', 'Ireland', 'Ian@gmail.com', 123463);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `idea`
--
ALTER TABLE `idea`
  ADD PRIMARY KEY (`ideaId`),
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
-- AUTO_INCREMENT for table `idea`
--
ALTER TABLE `idea`
  MODIFY `ideaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(13) NOT NULL AUTO_INCREMENT COMMENT 'user id is unique for user', AUTO_INCREMENT=123464;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
