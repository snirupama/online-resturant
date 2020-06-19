-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 07:17 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-res`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(20) NOT NULL,
  `adminemail` varchar(50) NOT NULL,
  `adminpass` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminemail`, `adminpass`) VALUES
(1, 'a@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

CREATE TABLE `booktable` (
  `id` int(5) NOT NULL,
  `date` varchar(15) NOT NULL,
  `booktime` varchar(15) NOT NULL,
  `tableno` varchar(20) NOT NULL,
  `member` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `mobno` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `datetime` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`id`, `date`, `booktime`, `tableno`, `member`, `name`, `emailid`, `mobno`, `address`, `datetime`) VALUES
(4, '2019-06-27', '8:30am', 'Table 2', '2 Peoples', 'Tanya', 'tanya123@gmail.com', '8218587843', 'faiizabad', ''),
(2, '2019-05-22', '', 'Table 1', '1 Person', 'jhv', 'n@gmail.com', '987654', 'kjhgfd', ''),
(8, '2019-05-23', '7:00am', 'Table 1', '1 Person', 'mayurika', 'tanya123@gmail.com', '8387369445', 'scdgfhgfmhgf', '17/05/19'),
(5, '2019-06-27', '8:30am', 'Table 2', '2 Peoples', 'Tanya', 'tanya123@gmail.com', '68654345', 'faiizabad', ''),
(6, '2019-06-27', '8:30am', 'Table 2', '2 Peoples', 'Tanya', 'tanya123@gmail.com', '68654345', 'faiizabad', ''),
(7, '2019-05-23', '7:00am', 'Table 1', '1 Person', 'mayurika', 'm@gmail.com', '8387369445', 'basti', ''),
(9, '2019-05-21', '12:00pm', 'Table 1', '1 Person', 'Rimjhim', 'rimmi123@gmail.com', '9628199157', 'Faizabad', '20/05/19'),
(10, '2019-05-21', '12:00pm', 'Table 4', '2 Peoples', 'rimmi', 'tanya123@gmail.com', '6392347167', 'Faizabad', '20/05/19'),
(11, '', '7:00am', 'Table 1', '1 Person', 'muskan', 'mus123@gmail.com', '9628199157', 'chgcghj', '21/05/19'),
(12, '2019-05-23', '7:00am', 'Table 1', '1 Person', 'Arpita', 'niru123@gmail.com', '9628199157', 'lucknow', '22/05/19'),
(13, '2019-05-29', '7:00am', 'Table 1', '1 Person', 'Akash', 'akash123@gmail.com', '8218587843', 'Firozpur', '29/05/19'),
(14, '2019-01-09', '7:00am', 'Table 2', '1 Person', 'nirupama', 'niru123@gmail.com', '8218587843', 'lucknow', '23/09/19');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `conid` int(20) NOT NULL,
  `conname` varchar(50) NOT NULL,
  `conemail` varchar(50) NOT NULL,
  `conmob` int(30) NOT NULL,
  `conmsg` varchar(50) NOT NULL,
  `condatetime` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`conid`, `conname`, `conemail`, `conmob`, `conmsg`, `condatetime`) VALUES
(7, '', '', 0, '', 19),
(6, 'niru', 'a@gmail.com', 55, 'hhhjvhjvh', 17),
(5, '', '', 0, '', 17),
(8, 'niru', 'tanya123@gmail.com', 2147483647, 'shxbjbkj', 19),
(9, 'Akash', 'akash123@gmail.com', 2147483647, 'hlo im akash', 29),
(10, 'Akash', 'akash123@gmail.com', 2147483647, 'worst', 10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `logid` int(10) NOT NULL,
  `logemail` varchar(50) NOT NULL,
  `logpass` varchar(30) NOT NULL,
  `logdatetime` varchar(30) NOT NULL,
  `logoutdatetime` varchar(30) NOT NULL,
  `logstatus` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`logid`, `logemail`, `logpass`, `logdatetime`, `logoutdatetime`, `logstatus`) VALUES
(10, 'anku123@gmail.com', 'ankitakumari', '16/05/19 12:08:10pm', '16/05/19 12:08:53pm', 'false'),
(3, 'priya@gmail.com', '12345698', '0', '0', ''),
(4, 'arpita@gmail.com', '12345679', '03/08/18 11:39:48am', '03/08/18 12:07:49pm', 'false'),
(6, 'sdkhkdjsk@gmail.com', 'dshkf324y89#hj', '', '', ''),
(5, 'ameysingj34087@gmail.com', 'asdfghjk', '12/08/18 10:16:02am', '', 'true'),
(7, 'anjalianshu3@gmail.com', 'anshikagupta', '07/11/19 07:10:19pm', '29/03/19 11:02:17am', 'true'),
(8, 'mani123@gmail.com', 'manipriya', '21/01/20 07:59:23pm', '28/03/19 07:58:55pm', 'true'),
(9, 'niru123@gmail.com', 'nirupama', '23/09/19 03:30:42pm', '23/09/19 03:30:49pm', 'false'),
(11, 'akash123@gmail.com', 'akash123', '16/08/19 07:50:25pm', '16/08/19 07:50:40pm', 'false'),
(12, 'samu@gmail.com', 'samu123', '30/01/20 02:15:19pm', '', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `regres`
--

CREATE TABLE `regres` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `reglocation` varchar(30) NOT NULL,
  `regaddress` text NOT NULL,
  `regpic` varchar(30) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regres`
--

INSERT INTO `regres` (`id`, `name`, `reglocation`, `regaddress`, `regpic`, `price`) VALUES
(29, 'Cafebar', 'Munshipuliya', 'Lucknow', '1558003611.jpg', '3000'),
(14, 'Nainital Momos', 'lucknow', 'vikaskhand', '1534047317.jpg', ''),
(19, 'Barbeque Nation', 'lucknow', 'vikaskhand', '1534047681.jpg', ''),
(13, 'oudhyana', 'lucknow', 'gomtinagar', '1534047277.jpg', ''),
(17, 'Uraban Terrace', 'lucknow', 'Near Faizabad Road', '1534047576.jpg', ''),
(18, 'Pavilion', 'lucknow', 'kapurthala', '1534047609.jpg', ''),
(21, 'Zaika', 'lucknow', 'kapurthala', '1534047709.jpg', ''),
(27, 'kalikahut', 'aminabad', 'lucknow', '1557989156.jpg', '3000');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `city` varchar(70) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `city`, `contact`, `datetime`) VALUES
(13, 'Samiksha', 'samu@gmail.com', 'samiksha', 'Lucknow', '3274775758975', '30/01/20'),
(8, 'Anjali', 'anjalianshu3@gmail.com', 'anjaligupta', 'Lucknow', '9792055982', '28/03/19'),
(7, 'Niru', 'sdkhkdjsk@gmail.com', 'dshkf324y89#hj', 'Allahabad', '34789764899', '28/03/19'),
(6, 'ajey', 'ameysingj34087@gmail.com', 'asdfghjk', 'Lucknow', '8174888578', '12/08/18'),
(10, 'nirusingh', 'niru123@gmail.com', 'nirupama', 'Allahabad', '45678997654', '28/03/19'),
(11, 'ankita', 'anku123@gmail.com', 'ankitakumari', 'Lucknow', '8218587843', '16/05/19'),
(12, 'Akash', 'akash123@gmail.com', 'akash123', 'Lucknow', '8218587843', '28/05/19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `booktable`
--
ALTER TABLE `booktable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`conid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `regres`
--
ALTER TABLE `regres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booktable`
--
ALTER TABLE `booktable`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `conid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `logid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `regres`
--
ALTER TABLE `regres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
