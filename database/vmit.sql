-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2017 at 09:49 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vmit`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_ID` int(11) NOT NULL,
  `Employee_Name` varchar(255) NOT NULL,
  `Phone_Number` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_ID`, `Employee_Name`, `Phone_Number`) VALUES
(1, 'Jara Epz', 716482041),
(2, 'Lahiru Epa', 776453212),
(3, 'Epzii Jara', 716483021);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Project_ID` int(11) NOT NULL,
  `Project_Name` varchar(32) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date DEFAULT NULL,
  `Status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Project_ID`, `Project_Name`, `Start_Date`, `End_Date`, `Status`) VALUES
(1, 'test', '2017-09-19', NULL, 1),
(2, 'test2', '2017-09-13', '2017-09-13', 22),
(3, 'Test Null', '2017-09-04', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reason`
--

CREATE TABLE `reason` (
  `Reason` int(11) NOT NULL,
  `Reason_Description` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reason`
--

INSERT INTO `reason` (`Reason`, `Reason_Description`) VALUES
(1, 'Extra work - Catchup Internal delays'),
(2, 'Client Request'),
(3, 'Virtusa meeting'),
(4, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Empid` int(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Route` int(50) NOT NULL,
  `ReqTime` int(50) NOT NULL,
  `ReqCode` text NOT NULL,
  `Destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Empid`, `Time`, `Date`, `Route`, `ReqTime`, `ReqCode`, `Destination`) VALUES
(0, 'time', 'date', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(0, 'time', 'date', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(1, 'time', 'date', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(1, 'time', 'date', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(1, 'time1', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(1, '4', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(1, '', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(1, '', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(12, 'time1', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(233, 'time1', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(23, 'time1', 'date1', 4, 6, 'Extra work - Catchup Internal delays ', ''),
(233, 'time1', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', 'aaqa'),
(1, 'time1', 'date1', 7, 8, 'Virtusa meeting', 'asf'),
(0, 'time', 'date', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(0, 'time', 'date', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(1, 'time', 'date', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(1, 'time', 'date', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(1, 'time1', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(1, '4', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(1, '', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(1, '', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(12, 'time1', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(233, 'time1', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', ''),
(23, 'time1', 'date1', 4, 6, 'Extra work - Catchup Internal delays ', ''),
(233, 'time1', 'date1', 1, 6, 'Extra work - Catchup Internal delays ', 'aaqa'),
(1, 'time1', 'date1', 7, 8, 'Virtusa meeting', 'asf');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Reservation_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Route_ID` int(11) NOT NULL,
  `Time_ID` int(11) NOT NULL,
  `Reason_ID` int(11) NOT NULL,
  `Nearest_City` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `Route_ID` int(11) NOT NULL,
  `Route_Number` tinyint(3) NOT NULL,
  `Route_Description` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`Route_ID`, `Route_Number`, `Route_Description`) VALUES
(1, 1, 'Kolpetty/Punchi Borella/ Rajagiriya'),
(2, 2, 'Kalutara/Panadura/ Batuwandara/ Palanwatte'),
(3, 3, 'Kandana/Kelaniya/Dalugama/Weliwita'),
(4, 4, 'Wellawatte/Battaramulla'),
(5, 5, 'Dehiwala/Mount/Pitakotte'),
(6, 6, 'Awissawella/ Kaduwela'),
(7, 7, 'Horana/Matthegoda/Athurugiriya'),
(8, 8, 'Kadawatha/Yakkala'),
(9, 9, 'Moratuwa/ Maharagama/Hokandara'),
(10, 10, 'Batakaththara/Wijerama/Pita Kotte/Malabe'),
(11, 11, 'Dematagoda/Kotahena');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Empid` int(50) NOT NULL,
  `Name` text NOT NULL,
  `Contact` int(50) NOT NULL,
  `Project` text NOT NULL,
  `Username` text NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Empid`, `Name`, `Contact`, `Project`, `Username`, `Password`) VALUES
(31, 'wefg', 324, 'wef', '{username}', 'wef'),
(2345, 'sdg', 2535, 'segt', 'sgg', 'sg'),
(31, 'wefg', 324, 'wef', 'wef', 'wef'),
(2345, 'awf', 35, 'efgf', 'agga', 'ag'),
(1, 'a', 2, 'a', 'aa', '11'),
(12, 'ag', 123, 'ad', 'asd', '123'),
(0, '', 0, '', 'da', 'ad'),
(23, 'asf', 325, 'fraf', 'aaa', 'sss'),
(7676, 'wf', 23423, 'asgr', 'qqqqq', 'aaaaa'),
(233, 'srg', 525, 'agr', 'asdf', '1234'),
(23, 'thsh', 346, 'rdh', 'asdfg', '12345'),
(31, 'wefg', 324, 'wef', '{username}', 'wef'),
(2345, 'sdg', 2535, 'segt', 'sgg', 'sg'),
(31, 'wefg', 324, 'wef', 'wef', 'wef'),
(2345, 'awf', 35, 'efgf', 'agga', 'ag'),
(1, 'a', 2, 'a', 'aa', '11'),
(12, 'ag', 123, 'ad', 'asd', '123'),
(0, '', 0, '', 'da', 'ad'),
(23, 'asf', 325, 'fraf', 'aaa', 'sss'),
(7676, 'wf', 23423, 'asgr', 'qqqqq', 'aaaaa'),
(233, 'srg', 525, 'agr', 'asdf', '1234'),
(23, 'thsh', 346, 'rdh', 'asdfg', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `Time_ID` int(11) NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`Time_ID`, `Time`) VALUES
(3, '18:00:00'),
(4, '20:00:00'),
(5, '21:30:00'),
(6, '22:30:00'),
(7, '23:30:00'),
(8, '00:30:00'),
(9, '01:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `Employee_ID` int(11) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `User_Role_ID` int(11) NOT NULL,
  `Project_ID` int(11) DEFAULT NULL,
  `Is_Approved` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Employee_ID`, `Username`, `Password`, `User_Role_ID`, `Project_ID`, `Is_Approved`) VALUES
(2, 1, 'hr', 'adab7b701f23bb82014c8506d3dc784e', 2, NULL, 1),
(3, 1, 'staff1', '4d7d719ac0cf3d78ea8a94701913fe47', 3, 1, 1),
(4, 1, 'staff2', '8bc01711b8163ec3f2aa0688d12cdf3b', 3, 2, 1),
(5, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, NULL, 1),
(21, 3, 'eer', 'f38aeb65a88f50a2373643a82158c6dc', 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `User_Role_ID` int(11) NOT NULL,
  `User_Role_Name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`User_Role_ID`, `User_Role_Name`) VALUES
(1, 'admin'),
(2, 'admin-HR'),
(3, 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Project_ID`);

--
-- Indexes for table `reason`
--
ALTER TABLE `reason`
  ADD PRIMARY KEY (`Reason`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservation_ID`),
  ADD KEY `Route_ID` (`Route_ID`),
  ADD KEY `Time_ID` (`Time_ID`),
  ADD KEY `Reason_ID` (`Reason_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`Route_ID`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`Time_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `Employee_ID` (`Employee_ID`),
  ADD KEY `User_Role_ID` (`User_Role_ID`) USING BTREE,
  ADD KEY `Project_ID` (`Project_ID`) USING BTREE;

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`User_Role_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Project_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reason`
--
ALTER TABLE `reason`
  MODIFY `Reason` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `Route_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `Time_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `User_Role_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Route_ID`) REFERENCES `route` (`Route_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`Time_ID`) REFERENCES `time` (`Time_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`Reason_ID`) REFERENCES `reason` (`Reason`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_4` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `employee` (`Employee_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`User_Role_ID`) REFERENCES `user_role` (`User_Role_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`Project_ID`) REFERENCES `project` (`Project_ID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
