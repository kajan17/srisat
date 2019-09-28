-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 03:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satellitetv`
--

-- --------------------------------------------------------

--
-- Table structure for table `areatechnician`
--

CREATE TABLE `areatechnician` (
  `technicianarea_ID` int(11) NOT NULL,
  `technician_ID` int(100) NOT NULL,
  `area` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carduser`
--

CREATE TABLE `carduser` (
  `carduser_ID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `cardnumber` varchar(100) NOT NULL,
  `vender` text NOT NULL,
  `installationmethode` varchar(50) NOT NULL,
  `partialstatus` int(11) NOT NULL,
  `finishstatus` int(11) NOT NULL,
  `partialcomments` text NOT NULL,
  `amount` varchar(11) NOT NULL DEFAULT '',
  `purchasedate` datetime NOT NULL,
  `activestatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carduser`
--

INSERT INTO `carduser` (`carduser_ID`, `customerID`, `cardnumber`, `vender`, `installationmethode`, `partialstatus`, `finishstatus`, `partialcomments`, `amount`, `purchasedate`, `activestatus`) VALUES
(57, 52, '01518438824', 'DishTV', '', 0, 0, '', '', '0000-00-00 00:00:00', 1),
(58, 53, '01564785239', 'DishTV', '', 0, 0, '', '', '0000-00-00 00:00:00', 0),
(59, 54, '10577026312', 'Sundirect', '', 0, 0, '', '', '0000-00-00 00:00:00', 1),
(62, 57, '42805989631', 'DishTV', '', 0, 0, '', '', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` text NOT NULL,
  `area` text NOT NULL,
  `gsdivision` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` int(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `mobilenocode` bigint(20) NOT NULL,
  `mobileconfirmation` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `username`, `fullname`, `area`, `gsdivision`, `address`, `contactno`, `image`, `mobilenocode`, `mobileconfirmation`) VALUES
(52, '783441705v', 'nagarajah kajan', 'nallur', 'J/103', '221,point pedro rd,  annaipanthy,jaffna', 779591178, 'images/783441705v/dishtv.jpg', 197882979, 2),
(53, '724117456v', 'balasingam servel', 'nallur', 'J/101', '254,pointpedro rd, nallur', 764541176, 'images/724117456v/', 1306080470, 2),
(54, '796114578v', 'yogarajah jasanthan', 'nallur', 'J/102', 'thirumagal rd, Ariyalai south,Jaffna', 773536647, 'images/796114578v/sundirect.jpg', 185985833, 2),
(56, '853441705v', 'ravishankar kapilan', 'nallur', 'J/102', '43,navalar rd,jaffna', 706321147, 'images/853441705v/sundir.png', 361112182, 2),
(57, '783554715v', 'nagarajah nishanth', 'nallur', 'J/101', '21,pointpedro rd jaffna', 762891456, '', 1314838593, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dsdivision`
--

CREATE TABLE `dsdivision` (
  `ds_ID` int(11) NOT NULL,
  `dsdivision` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsdivision`
--

INSERT INTO `dsdivision` (`ds_ID`, `dsdivision`) VALUES
(1, 'Nallur'),
(2, 'jaffna'),
(3, 'kopay'),
(4, 'vaikamamsouth');

-- --------------------------------------------------------

--
-- Table structure for table `gs_division`
--

CREATE TABLE `gs_division` (
  `gs_ID` int(11) NOT NULL,
  `DS_ID` int(11) NOT NULL,
  `gsdivision` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gs_division`
--

INSERT INTO `gs_division` (`gs_ID`, `DS_ID`, `gsdivision`, `name`) VALUES
(1, 1, 'J/100', 'Vannarpannai North East'),
(2, 1, 'J/101', 'Neeraviyady'),
(3, 1, 'J/102', 'Kantharmadam North west'),
(4, 1, 'J/103', 'Kantharmadam North'),
(5, 2, 'j/96', 'chundukuli'),
(6, 2, 'j/98', 'eechamodai');

-- --------------------------------------------------------

--
-- Table structure for table `jobassignment`
--

CREATE TABLE `jobassignment` (
  `jobassignID` int(11) NOT NULL,
  `complaientID` int(11) NOT NULL,
  `technicianID` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `knotification`
--

CREATE TABLE `knotification` (
  `knotificationID` int(11) NOT NULL,
  `cardnumber` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newconnectioncard`
--

CREATE TABLE `newconnectioncard` (
  `newconnectionID` int(11) NOT NULL,
  `nicno` varchar(30) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `vcnumber` varchar(50) NOT NULL,
  `installationmethode` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newconnectioncard`
--

INSERT INTO `newconnectioncard` (`newconnectionID`, `nicno`, `vendor`, `vcnumber`, `installationmethode`, `amount`, `Status`) VALUES
(8, '724117456v', 'DishTV', '01564785239', 'srisat', 6500, 1),
(9, '742114562v', 'DishTV', '', 'self', 5500, 0),
(10, '783554715v', 'DishTV', '42805989631', 'srisat', 6500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packageid` int(11) NOT NULL,
  `packagename` text NOT NULL,
  `month` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `tvid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packageid`, `packagename`, `month`, `amount`, `tvid`, `date`) VALUES
(2, 'South Silver for 1 month', 1, 600, 14, '2019-05-10 18:01:02'),
(3, 'South Silver for 3 month', 3, 1700, 14, '2019-05-10 18:01:30'),
(4, 'tamilpropack1', 1, 750, 15, '2019-05-25 10:50:11'),
(5, 'tamilpropack2', 3, 1850, 15, '2019-05-25 10:50:50'),
(6, 'tamil DPO1', 1, 600, 17, '2019-05-25 10:51:14'),
(7, 'tamil DPO1', 3, 1700, 17, '2019-05-25 10:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `rechargeID` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recharge`
--

CREATE TABLE `recharge` (
  `rechargeID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT 'yyy',
  `contactno` varchar(50) NOT NULL DEFAULT '0',
  `vendorname` varchar(25) NOT NULL,
  `vcno` varchar(100) NOT NULL,
  `packageID` int(11) NOT NULL,
  `amount` decimal(11,0) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `recharged_date` date NOT NULL DEFAULT '0000-00-00',
  `expireddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recharge`
--

INSERT INTO `recharge` (`rechargeID`, `name`, `contactno`, `vendorname`, `vcno`, `packageID`, `amount`, `status`, `date`, `recharged_date`, `expireddate`) VALUES
(1, 'kajan', '0779591178', 'Sundirect', '10456989654', 7, '1700', 1, '2019-05-28 15:12:50', '2019-05-28', '2019-08-28'),
(2, 'janakan', '0779591178', 'DishtvTV', '10545566666', 4, '750', 1, '2019-05-28 15:13:34', '2019-05-28', '2019-06-28'),
(3, 'nagarajah kajan', '779591178', 'Sundirect', '1054879877', 7, '1700', 1, '2019-05-28 15:15:57', '2019-05-28', '2019-08-28'),
(4, 'nagarajah kajan', '779591178', 'Sundirect', '1054879877', 7, '1700', 0, '2019-05-28 17:58:35', '0000-00-00', '0000-00-00'),
(5, 'nagarajah kajan', '779591178', 'Sundirect', '1245789654', 6, '600', 0, '2019-05-28 17:59:55', '0000-00-00', '0000-00-00'),
(6, 'gfdgdfg', '435435', 'DishtvTV', '345345', 4, '750', 0, '2019-05-28 18:18:38', '0000-00-00', '0000-00-00'),
(7, 'gfdgdfg', '435435', 'DishtvTV', '345345', 4, '750', 0, '2019-05-28 18:23:02', '0000-00-00', '0000-00-00'),
(8, 'erter', '435', 'DishtvTV', '34', 4, '750', 1, '2019-07-05 15:00:59', '2019-07-05', '2019-08-05'),
(9, 'dfdsd', '234', 'DishtvTV', '234', 4, '750', 1, '2019-07-05 14:58:19', '2019-07-05', '2019-08-05'),
(10, 'nagarajah kajan', '779591178', 'DishTV', '015478956412', 4, '750', 1, '2019-05-31 03:22:51', '2019-05-31', '2019-07-01'),
(11, 'nagarajah kajan', '779591178', 'DishTV', '015478956412', 5, '1850', 0, '2019-05-31 03:22:17', '0000-00-00', '0000-00-00'),
(12, 'thilaiyampalam rajkumar', '0775647787', 'Videocon', '01523689742', 2, '600', 0, '2019-07-02 12:09:30', '0000-00-00', '0000-00-00'),
(13, 'thilayamplam sukumar', '0774586614', 'Sundirect', '10547896352', 7, '1700', 0, '2019-07-02 12:10:53', '0000-00-00', '0000-00-00'),
(14, 'kunarajah rajasekar', '0774586621', 'DishTV', '10456789123', 5, '1850', 0, '2019-07-02 12:13:27', '0000-00-00', '0000-00-00'),
(15, 'kulasekaramkajan', '762828985', 'DishTV', '10547127865', 5, '1850', 1, '2019-07-06 04:44:54', '2019-07-06', '2019-10-06'),
(16, 'ravishankar kapilan', '706321147', 'DishTV', '01547244444', 4, '750', 1, '2019-07-07 07:48:50', '2019-07-07', '2019-08-07'),
(17, 'nagarajah nishanth', '762891456', 'DishTV', '42805989631', 4, '750', 1, '2019-07-08 03:54:50', '2019-07-08', '2019-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `repaicomplaient`
--

CREATE TABLE `repaicomplaient` (
  `complaientID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `vcnumber` bigint(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactnumber` bigint(10) NOT NULL,
  `errorcode` varchar(100) NOT NULL,
  `finishstatus` int(11) NOT NULL DEFAULT '0',
  `partialstatus` int(11) NOT NULL DEFAULT '0',
  `partialcomments` varchar(50) NOT NULL,
  `technicianrepaircomments` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repaicomplaient`
--

INSERT INTO `repaicomplaient` (`complaientID`, `customerID`, `vcnumber`, `address`, `contactnumber`, `errorcode`, `finishstatus`, `partialstatus`, `partialcomments`, `technicianrepaircomments`, `date`) VALUES
(1, 56, 41332012651, '43,navalar rd,jaffna', 706321147, 'e -407', 0, 1, 'Bad Weather', '', '2019-06-07 08:51:34'),
(2, 56, 41332012651, '43,navalar rd,jaffna', 706321147, 'e-450', 1, 0, 'Low Signal', '', '2019-07-07 09:04:51'),
(3, 57, 42805989631, '21,pointpedro rd jaffna', 762891456, 'low signal', 1, 0, '', '', '2019-07-07 04:05:18'),
(4, 54, 10577026312, 'thirumagal rd, Ariyalai south,Jaffna', 773536647, 'low signal', 0, 0, '', '', '2019-07-08 04:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `repaircostestimation`
--

CREATE TABLE `repaircostestimation` (
  `estimationID` int(11) NOT NULL,
  `repaircomplaientid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `technicianid` int(11) NOT NULL,
  `servicecharge` int(11) NOT NULL,
  `lmpchange` int(11) NOT NULL,
  `receivercharge` int(11) NOT NULL,
  `cablecharge` int(11) NOT NULL,
  `adminapproval` int(11) NOT NULL DEFAULT '0',
  `customerapproval` int(11) NOT NULL DEFAULT '0',
  `customerapproveddate` date NOT NULL,
  `technicianestimation` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repaircostestimation`
--

INSERT INTO `repaircostestimation` (`estimationID`, `repaircomplaientid`, `customerid`, `technicianid`, `servicecharge`, `lmpchange`, `receivercharge`, `cablecharge`, `adminapproval`, `customerapproval`, `customerapproveddate`, `technicianestimation`) VALUES
(1, 1, 56, 18, 450, 0, 0, 150, 1, 1, '2019-07-07', 1),
(2, 2, 56, 18, 450, 500, 0, 100, 1, 1, '2019-07-07', 1),
(3, 3, 57, 18, 540, 250, 0, 0, 1, 1, '2019-07-08', 1),
(4, 4, 54, 18, 452, 234, 0, 0, 0, 0, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `repairjob`
--

CREATE TABLE `repairjob` (
  `jobid` int(11) NOT NULL,
  `complaientid` int(11) NOT NULL,
  `technicianid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `jobstatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `satellitetv`
--

CREATE TABLE `satellitetv` (
  `tvID` int(11) NOT NULL,
  `tvname` text,
  `price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satellitetv`
--

INSERT INTO `satellitetv` (`tvID`, `tvname`, `price`, `date`) VALUES
(14, 'Videocon', 5000, '2019-01-02 13:51:37'),
(15, 'DishTV', 5500, '2019-05-31 03:14:31'),
(17, 'Sundirect', 4500, '2019-05-25 02:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `sripoints`
--

CREATE TABLE `sripoints` (
  `pointID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `rechargedate` date NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sundurect`
--

CREATE TABLE `sundurect` (
  `packageID` int(11) NOT NULL,
  `tvID` int(11) NOT NULL,
  `packagename` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sundurect`
--

INSERT INTO `sundurect` (`packageID`, `tvID`, `packagename`, `amount`) VALUES
(2, 12, 'tamil Ecomony Pack 1month', 450),
(3, 12, 'tamil Ecomony Pack 3month', 1250),
(4, 12, 'tamil Ecomony Pack 6month', 2500),
(5, 12, 'tamil Ecomony Pack 12month', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `technicianID` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` text NOT NULL,
  `mobilenumber` int(10) NOT NULL,
  `workingarea` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`technicianID`, `username`, `fullname`, `mobilenumber`, `workingarea`) VALUES
(18, '745661705v', 'joseph fransis', 769591178, 'nallur');

-- --------------------------------------------------------

--
-- Table structure for table `tvconnection`
--

CREATE TABLE `tvconnection` (
  `connectionID` int(11) NOT NULL,
  `nicnumber` varchar(15) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dsdivision` varchar(50) NOT NULL,
  `gsdivision` varchar(50) NOT NULL,
  `installationaddress` varchar(100) NOT NULL,
  `landlinenumber` int(10) NOT NULL,
  `contactno` int(10) NOT NULL,
  `partialstatus` int(11) NOT NULL DEFAULT '0',
  `finishstatus` int(11) NOT NULL,
  `connectionstatuscomments` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tvconnection`
--

INSERT INTO `tvconnection` (`connectionID`, `nicnumber`, `fullname`, `email`, `dsdivision`, `gsdivision`, `installationaddress`, `landlinenumber`, `contactno`, `partialstatus`, `finishstatus`, `connectionstatuscomments`, `status`, `date`) VALUES
(8, '724117456v', 'balasingam servel', '', 'nallur', 'J/101', '254,pointpedro rd, nallur', 212221849, 764541176, 1, 1, 'Low Signal', 0, '2019-07-07 07:34:53'),
(9, '742114562v', 'selvarajah piratheepan', '', 'jaffna', 'J/89', '12,kandy road, ariyalai', 212221459, 728695147, 0, 0, '', 0, '2019-07-07 08:24:42'),
(10, '783554715v', 'nagarajah nishanth', '', 'nallur', 'J/101', '21,pointpedro rd jaffna', 212221784, 762891456, 1, 1, 'Bad Weather', 0, '2019-07-08 03:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(11) NOT NULL,
  `username` varchar(700) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` text NOT NULL,
  `adminapproval` int(11) NOT NULL DEFAULT '0',
  `adminjeject` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `username`, `password`, `usertype`, `adminapproval`, `adminjeject`, `date`) VALUES
(1, 'adminF', 'f04194654c8affc91757d5c8855c7c79', 'adminfunction', 1, 0, '2019-07-02 14:31:51'),
(2, 'adminM', 'f04194654c8affc91757d5c8855c7c79', 'adminmanagement', 1, 0, '2019-07-02 14:13:19'),
(83, '783441705v', 'f04194654c8affc91757d5c8855c7c79', 'Customer', 0, 0, '2019-07-06 17:40:52'),
(86, '745661705v', 'f04194654c8affc91757d5c8855c7c79', 'Technician', 1, 0, '2019-07-06 19:38:38'),
(87, '724117456v', 'f04194654c8affc91757d5c8855c7c79', 'Customer', 0, 0, '2019-07-06 21:20:09'),
(88, '796114578v', 'f04194654c8affc91757d5c8855c7c79', 'Customer', 0, 0, '2019-07-07 01:27:46'),
(90, '853441705v', 'f04194654c8affc91757d5c8855c7c79', 'Customer', 0, 0, '2019-07-07 03:19:17'),
(91, '783554715v', 'f04194654c8affc91757d5c8855c7c79', 'Customer', 0, 0, '2019-07-08 03:50:30'),
(92, '745661789v', 'f04194654c8affc91757d5c8855c7c79', 'Customer', 0, 0, '2019-07-08 04:08:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areatechnician`
--
ALTER TABLE `areatechnician`
  ADD PRIMARY KEY (`technicianarea_ID`);

--
-- Indexes for table `carduser`
--
ALTER TABLE `carduser`
  ADD PRIMARY KEY (`carduser_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`,`username`);

--
-- Indexes for table `dsdivision`
--
ALTER TABLE `dsdivision`
  ADD PRIMARY KEY (`ds_ID`);

--
-- Indexes for table `gs_division`
--
ALTER TABLE `gs_division`
  ADD PRIMARY KEY (`gs_ID`);

--
-- Indexes for table `jobassignment`
--
ALTER TABLE `jobassignment`
  ADD PRIMARY KEY (`jobassignID`);

--
-- Indexes for table `knotification`
--
ALTER TABLE `knotification`
  ADD PRIMARY KEY (`knotificationID`);

--
-- Indexes for table `newconnectioncard`
--
ALTER TABLE `newconnectioncard`
  ADD PRIMARY KEY (`newconnectionID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packageid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `recharge`
--
ALTER TABLE `recharge`
  ADD PRIMARY KEY (`rechargeID`);

--
-- Indexes for table `repaicomplaient`
--
ALTER TABLE `repaicomplaient`
  ADD PRIMARY KEY (`complaientID`);

--
-- Indexes for table `repaircostestimation`
--
ALTER TABLE `repaircostestimation`
  ADD PRIMARY KEY (`estimationID`);

--
-- Indexes for table `repairjob`
--
ALTER TABLE `repairjob`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `satellitetv`
--
ALTER TABLE `satellitetv`
  ADD PRIMARY KEY (`tvID`);

--
-- Indexes for table `sripoints`
--
ALTER TABLE `sripoints`
  ADD PRIMARY KEY (`pointID`);

--
-- Indexes for table `sundurect`
--
ALTER TABLE `sundurect`
  ADD PRIMARY KEY (`packageID`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`technicianID`);

--
-- Indexes for table `tvconnection`
--
ALTER TABLE `tvconnection`
  ADD PRIMARY KEY (`connectionID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areatechnician`
--
ALTER TABLE `areatechnician`
  MODIFY `technicianarea_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carduser`
--
ALTER TABLE `carduser`
  MODIFY `carduser_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `dsdivision`
--
ALTER TABLE `dsdivision`
  MODIFY `ds_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gs_division`
--
ALTER TABLE `gs_division`
  MODIFY `gs_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobassignment`
--
ALTER TABLE `jobassignment`
  MODIFY `jobassignID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knotification`
--
ALTER TABLE `knotification`
  MODIFY `knotificationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newconnectioncard`
--
ALTER TABLE `newconnectioncard`
  MODIFY `newconnectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `packageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recharge`
--
ALTER TABLE `recharge`
  MODIFY `rechargeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `repaicomplaient`
--
ALTER TABLE `repaicomplaient`
  MODIFY `complaientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `repaircostestimation`
--
ALTER TABLE `repaircostestimation`
  MODIFY `estimationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `repairjob`
--
ALTER TABLE `repairjob`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `satellitetv`
--
ALTER TABLE `satellitetv`
  MODIFY `tvID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sripoints`
--
ALTER TABLE `sripoints`
  MODIFY `pointID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sundurect`
--
ALTER TABLE `sundurect`
  MODIFY `packageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `technicianID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tvconnection`
--
ALTER TABLE `tvconnection`
  MODIFY `connectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
