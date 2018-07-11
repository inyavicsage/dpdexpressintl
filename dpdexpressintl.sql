-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 07:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpdexpressintl`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`username`, `password`) VALUES
('admin', 'dpdadmin');

-- --------------------------------------------------------

--
-- Table structure for table `tracking_infos`
--

CREATE TABLE `tracking_infos` (
  `sn` int(11) NOT NULL,
  `tracking_no` varchar(10) NOT NULL,
  `shipper_name` varchar(50) NOT NULL,
  `shipper_phone` varchar(20) NOT NULL,
  `shipper_addr` varchar(100) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `receiver_phone` varchar(20) NOT NULL,
  `consign_no` varchar(50) NOT NULL,
  `ship_type` varchar(10) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `invoice_no` varchar(10) NOT NULL,
  `booking_mode` varchar(10) NOT NULL,
  `total_freight` varchar(10) NOT NULL,
  `mode` varchar(10) NOT NULL,
  `pickup_date_time` varchar(50) NOT NULL,
  `est_time_of_arrival` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `current_loc` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `comment2` varchar(1000) NOT NULL,
  `comment3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tracking_infos`
--
ALTER TABLE `tracking_infos`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tracking_infos`
--
ALTER TABLE `tracking_infos`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
