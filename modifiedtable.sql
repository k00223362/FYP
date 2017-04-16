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
(1, '', '', '', '', '', '', '', '', ''),
(2, 'Mike', 'Mike1', 'Ryan', '88888888888', 'Limerick Main Street Cork City County Cork', 'gh@lit.ie'),
(3, 'john', 'John1', 'Ryan', '454545454', 'some where some address some town', 'email@lit.ie'),
(4, 'liam', 'Liam1', 'Ryan', '123456789', 'Dublin Road Dublin Street Dublin', 'liam@lit.ie'),
(5, 'michelle', 'michelle1', 'Shine', '7778787878', 'bog road somewhere Tipperary', 'ms@lit.ie');

-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
 ADD PRIMARY KEY (`ContactID`);
  -- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
 MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;