-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2019 at 02:10 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imphal_angels`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

DROP TABLE IF EXISTS `company_details`;
CREATE TABLE IF NOT EXISTS `company_details` (
  `company_id` int(100) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(200) NOT NULL,
  `co_founder_no` int(10) NOT NULL,
  `company_email` varchar(20) NOT NULL,
  `company_contact` varchar(20) NOT NULL,
  `startup_showcasing` int(2) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_user_details`
--

DROP TABLE IF EXISTS `company_user_details`;
CREATE TABLE IF NOT EXISTS `company_user_details` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `company_id` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_amount` int(20) NOT NULL,
  `dinner_attend` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(125) NOT NULL AUTO_INCREMENT,
  `company_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `payment_amount` int(10) NOT NULL,
  `payment_status` varchar(10) NOT NULL,
  `tranc_id` varchar(50) NOT NULL,
  `ref_id` varchar(100) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_user`
--

DROP TABLE IF EXISTS `student_user`;
CREATE TABLE IF NOT EXISTS `student_user` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(10) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_contact` int(20) NOT NULL,
  `dinner_attend` varchar(1) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_amount` int(20) NOT NULL,
  `isActive` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` int(120) NOT NULL AUTO_INCREMENT,
  `company_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `ticket_code` varchar(100) NOT NULL,
  `ticket_status` varchar(20) NOT NULL,
  `ticket_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
