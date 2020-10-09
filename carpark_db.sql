-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2020 at 07:39 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carpark_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `adm_id` int(22) NOT NULL,
  `adm_username` varchar(255) NOT NULL,
  `adm_password` varchar(255) NOT NULL,
  `adm_lastseen` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`adm_id`, `adm_username`, `adm_password`, `adm_lastseen`) VALUES
(1, 'Gaj', '12345', '2020-09-08 11:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `booking_tb`
--

CREATE TABLE `booking_tb` (
  `book_id` int(22) NOT NULL,
  `book_userid` int(22) NOT NULL,
  `book_floorid` int(22) NOT NULL,
  `book_floorspot` varchar(255) NOT NULL,
  `book_rateid` int(22) NOT NULL,
  `book_vehiclenumber` varchar(255) NOT NULL,
  `book_todate` varchar(255) NOT NULL,
  `book_fromdate` varchar(255) NOT NULL,
  `book_totime` varchar(255) NOT NULL,
  `book_fromtime` varchar(255) NOT NULL,
  `book_timediff` varchar(255) NOT NULL,
  `book_totalprice` varchar(255) NOT NULL,
  `book_status` enum('Confirm','Complete') NOT NULL,
  `book_cdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_tb`
--

INSERT INTO `booking_tb` (`book_id`, `book_userid`, `book_floorid`, `book_floorspot`, `book_rateid`, `book_vehiclenumber`, `book_todate`, `book_fromdate`, `book_totime`, `book_fromtime`, `book_timediff`, `book_totalprice`, `book_status`, `book_cdate`) VALUES
(51, 28, 10, '44', 12, 'AYV79C', '2020-10-02', '2020-10-03', '', '', '1-0-0', '10', 'Confirm', '2020-10-02 02:48:58'),
(50, 28, 9, '32', 12, 'AYV79C', '2020-10-02', '2020-10-03', '', '', '1-0-0', '10', 'Confirm', '2020-10-02 02:48:48'),
(49, 28, 9, '31', 10, 'AYV79C', '2020-10-02', '2020-10-02', '02:17', '03:18', '0-1-1', '30', 'Confirm', '2020-10-02 02:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `floor_tb`
--

CREATE TABLE `floor_tb` (
  `flr_id` int(22) NOT NULL,
  `flr_name` varchar(255) NOT NULL,
  `flr_space` varchar(255) NOT NULL,
  `flr_forspace` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floor_tb`
--

INSERT INTO `floor_tb` (`flr_id`, `flr_name`, `flr_space`, `flr_forspace`) VALUES
(1, 'Floor-1', '1-30', 'Motorcycle'),
(9, 'Floor-1', '31-40', 'Small Car'),
(10, 'Floor-2', '41-80', 'Small Car'),
(11, 'Floor-3', '81-120', 'Small Car'),
(12, 'Floor-4', '121-160', 'Big Car'),
(13, 'Floor-5', '161-200', 'Big Car'),
(14, 'Floor-6', '201-240', 'Big Car'),
(15, 'Floor-7', '241-280', 'Big Car'),
(16, 'Floor-8', '281-320', 'Big Car'),
(17, 'Floor-9', '321-360', 'Big Car'),
(18, 'Floor-10', '361-400', 'Big Car');

-- --------------------------------------------------------

--
-- Table structure for table `rate_tb`
--

CREATE TABLE `rate_tb` (
  `rate_id` int(22) NOT NULL,
  `rate_vehicletype` enum('Car','Motorcycle') NOT NULL,
  `rate_days` enum('Week Day','Weekend') NOT NULL,
  `rate_time` enum('Day','Hour') NOT NULL,
  `rate_rate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate_tb`
--

INSERT INTO `rate_tb` (`rate_id`, `rate_vehicletype`, `rate_days`, `rate_time`, `rate_rate`) VALUES
(5, 'Motorcycle', 'Week Day', 'Day', '10'),
(8, 'Car', 'Weekend', 'Day', '10'),
(7, 'Car', 'Week Day', 'Day', '25'),
(9, 'Motorcycle', 'Weekend', 'Day', '5'),
(10, 'Car', 'Week Day', 'Hour', '20'),
(11, 'Motorcycle', 'Week Day', 'Hour', '20'),
(12, 'Car', 'Weekend', 'Hour', '10'),
(13, 'Motorcycle', 'Weekend', 'Hour', '10');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(22) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_contact` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_postalcode` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_cdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `user_name`, `user_contact`, `user_email`, `user_postalcode`, `user_password`, `user_cdate`) VALUES
(28, 'Divyang Agja', '+61468451886', 'D_A054@student.usc.edu.au', '2146', '12345', '2020-10-02 02:17:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `booking_tb`
--
ALTER TABLE `booking_tb`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `floor_tb`
--
ALTER TABLE `floor_tb`
  ADD PRIMARY KEY (`flr_id`);

--
-- Indexes for table `rate_tb`
--
ALTER TABLE `rate_tb`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `adm_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking_tb`
--
ALTER TABLE `booking_tb`
  MODIFY `book_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `floor_tb`
--
ALTER TABLE `floor_tb`
  MODIFY `flr_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rate_tb`
--
ALTER TABLE `rate_tb`
  MODIFY `rate_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
