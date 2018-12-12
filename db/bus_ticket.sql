-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 01:11 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`, `name`) VALUES
('admin', 'admin', 'admin'),
('Rabby123', '123456', 'Rabby');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bid` varchar(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `type_ac` char(3) NOT NULL,
  `type_sl` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bid`, `bname`, `type_ac`, `type_sl`) VALUES
('BB001', 'TR Travels', 'yes', 'yes'),
('BB002', 'Nabil Travels', 'yes', 'no'),
('BB003', 'Volvo Travels', 'yes', 'yes'),
('BB004', 'Akota Travels', 'yes', 'yes'),
('BB005', 'SR Travels', 'yes', 'yes'),
('BB006', 'Onabil Travels', 'no', 'no'),
('BB007', 'Shibpur Travels', 'yes', 'no'),
('BB008', 'Dhaka Travels', 'yes', 'yes'),
('BB009', 'Barisal Travels', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `num` varchar(16) NOT NULL,
  `type` varchar(30) NOT NULL,
  `expdate` date NOT NULL,
  `cvv` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`num`, `type`, `expdate`, `cvv`, `bank`) VALUES
('1234567890123456', 'Regular', '2018-12-30', 333, 'DBBL');

-- --------------------------------------------------------

--
-- Table structure for table `nb`
--

CREATE TABLE `nb` (
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nb`
--

INSERT INTO `nb` (`uname`, `password`, `bank`) VALUES
('Rabby123', '123456', 'DBBL');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `pid` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`pid`, `name`, `email`, `mob`) VALUES
('1111111', 'Admin', 'admin@easytravel.com', '1933245657'),
('1111112', 'rabby', 'rabby45@gmail.com', '8867159511'),
('1111116', 'admin', 'admin@gmail.com', '1234567890'),
('1111117', 'rabby', 'rabby45@gmail.com', '8867159511'),
('1111118', 'rabby', 'admin@easytravel.com', '1933245657'),
('1111119', 'rabby', 'rabby3@gmail.com', '1933245657'),
('1111120', 'rabby', 'rabby2@gmail.com', '1933245657'),
('1111121', 'rabby', 'rabby1@gmail.com', '1933456786'),
('1237373', 'Paul', 'paul@gamil.com', '1234567890'),
('1237374', 'Rabby', 'rabby312@gmail.com', '123456789'),
('1237375', 'Rabby', 'rabby312@gmail.com', '123456789'),
('1237376', 'Rabby', 'rabby312@gmail.com', '123456789'),
('1237377', 'kamal', 'rabby312@gmail.com', '1234567890'),
('1237378', 'kamal', 'rabby312@gmail.com', '123456789'),
('1237379', 'Rabby', 'rabby312@gmail.com', '123456777'),
('1237380', 'Rabby', 'rabby312@gmail.com', '123456777'),
('1237381', 'Rabby', 'rabby312@gmail.com', '123456777'),
('1237382', 'Rabby', 'rabby312@gmail.com', '123456777'),
('1237383', 'Rabby', 'rabby312@gmail.com', '123456777'),
('1237384', 'Rabby', 'rabby312@gmail.com', '1234567876'),
('1237385', 'kamal', 'rabby312@gmail.com', '1234545465'),
('1237386', 'kamal', 'rabby312@gmail.com', '1234545465'),
('1237387', 'kamal', 'rabby312@gmail.com', '1234545465'),
('1237388', 'kamal', 'rabby312@gmail.com', '1234545465'),
('1237389', 'kamal', 'rabby312@gmail.com', '1234545465');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `pnr` int(11) NOT NULL,
  `rid` int(11) DEFAULT NULL,
  `pid` varchar(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `DOT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`pnr`, `rid`, `pid`, `status`, `DOT`) VALUES
(1, 10001, '1111116', 'booked', '2018-12-12 21:00:00'),
(2, 10005, '1111119', 'booked', '2018-12-13 03:00:00'),
(22, 10001, '1111116', 'booked', '2018-12-13 09:29:09'),
(23, 10001, '1111116', 'booked', '2018-12-13 09:29:09'),
(24, 10000, '1111117', 'cancelled', '2018-12-13 09:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `rid` int(11) NOT NULL,
  `bid` varchar(11) DEFAULT NULL,
  `fromLoc` varchar(10) DEFAULT NULL,
  `toLoc` varchar(10) DEFAULT NULL,
  `fare` double DEFAULT NULL,
  `dep_date` date NOT NULL,
  `dep_time` time DEFAULT NULL,
  `arr_time` time DEFAULT NULL,
  `arr_date` date NOT NULL,
  `avalseats` int(10) NOT NULL DEFAULT '40',
  `maxseats` int(10) NOT NULL DEFAULT '40'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`rid`, `bid`, `fromLoc`, `toLoc`, `fare`, `dep_date`, `dep_time`, `arr_time`, `arr_date`, `avalseats`, `maxseats`) VALUES
(10000, 'BB001', 'Dhaka', 'Narsingdi', 1000, '2018-12-12', '20:00:00', '22:00:00', '2018-12-12', 40, 40),
(10001, 'BB002', 'Dhaka', 'Feni', 1100, '2018-12-29', '21:00:00', '23:00:00', '2018-12-30', 37, 40),
(10002, 'BB003', 'Feni', 'Dhaka', 1200, '2018-12-14', '03:00:00', '04:00:00', '2018-12-15', 40, 40),
(10003, 'BB004', 'Dhaka', 'Shibpur', 500, '2018-12-13', '04:05:00', '05:02:00', '2018-12-13', 40, 40),
(10004, 'BB003', 'Narsingdi', 'Dhaka', 100, '2018-12-14', '01:00:00', '01:00:00', '2018-12-14', 40, 40),
(10005, 'BB007', 'Sylhet', 'Dhaka', 1000, '2018-12-15', '06:00:00', '08:00:00', '2018-12-15', 39, 40),
(10006, 'BB008', 'Dhaka', 'Sylhet', 1000, '2018-12-13', '08:00:00', '09:00:00', '2018-12-13', 40, 40),
(10007, 'BB005', 'Dhaka', 'Rangpur', 1100, '2018-12-13', '11:00:00', '11:00:00', '2018-12-14', 40, 40),
(10007, 'BB005', 'Rangpur', 'Dhaka', 1100, '2018-12-14', '12:00:00', '11:00:00', '2018-12-15', 40, 40),
(10008, 'BB007', 'Barisal', 'Dhaka', 1000, '2018-12-13', '02:00:00', '09:00:00', '2018-12-13', 40, 40);

-- --------------------------------------------------------

--
-- Table structure for table `today`
--

CREATE TABLE `today` (
  `tod_time` time NOT NULL,
  `tod_date` date NOT NULL,
  `one` date NOT NULL DEFAULT '0000-00-01'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `today`
--

INSERT INTO `today` (`tod_time`, `tod_date`, `one`) VALUES
('18:00:16', '2018-12-12', '0000-00-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `nb`
--
ALTER TABLE `nb`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`pnr`),
  ADD KEY `rid` (`rid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`rid`,`dep_date`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `today`
--
ALTER TABLE `today`
  ADD PRIMARY KEY (`tod_time`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `pnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `route` (`rid`),
  ADD CONSTRAINT `reserves_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `passenger` (`pid`);

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `bus` (`bid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
