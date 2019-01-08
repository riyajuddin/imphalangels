-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2019 at 05:25 AM
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
  `startup_stall` int(2) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `file_ext` varchar(20) NOT NULL,
  `file_size` varchar(20) NOT NULL,
  `dinner_attend` int(10) NOT NULL,
  `user_amount` varchar(20) NOT NULL,
  `pitching` int(2) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`company_id`, `company_name`, `co_founder_no`, `company_email`, `company_contact`, `startup_stall`, `file_name`, `file_ext`, `file_size`, `dinner_attend`, `user_amount`, `pitching`) VALUES
(1, 'sdfsdfas', 0, 'xdfsdfs@SDFSDF.SDF', '2342342', 1, ' ', ' ', ' ', 1, '4300', 0),
(2, 'sdfsdfas', 0, 'xdfsdfs@SDFSDF.SDF', '2342342', 1, ' ', ' ', ' ', 1, '4300', 0),
(3, 'sdsfs', 0, 'xfgfsgsfg@sfdsdf.sdf', '43534543', 1, '', '', '', 1, '4300', 0),
(4, 'sdsfs', 0, 'xfgfsgsfg@sfdsdf.sdf', '43534543', 1, '1546844365Tulips.jpg', '.jpg', '606.34', 1, '4300', 1),
(5, 'sdsfs', 0, 'xfgfsgsfg@sfdsdf.sdf', '43534543', 0, '1546844378Tulips.jpg', '.jpg', '606.34', 2, '2100', 1),
(6, 'sdsfs', 0, 'xfgfsgsfg@sfdsdf.sdf', '43534543', 0, '', '', '', 0, '500', 0),
(7, 'sffsfd', 0, 'sdfsdfsdfsdfsdfsdfds', '23423443242342342342', 0, '1546844661INVOICE_xlsx.pdf', '.pdf', '360.04', 0, '500', 1),
(8, 'Mobimp', 0, 'mdriya93@gmail.com', '1234567890', 1, '', '', '', 1, '4300', 0),
(9, 'Mobimp', 0, 'mdriya93@gmail.com', '1234567890', 1, '', '', '', 1, '4300', 0),
(10, 'Mobimp', 0, 'mdriya93@gmail.com', '1234567890', 1, '', '', '', 1, '4300', 0),
(11, 'Mobimp', 0, 'mdriya93@gmail.com', '1234567890', 1, '', '', '', 1, '4300', 0),
(12, 'Mobimp', 0, 'mdriya93@gmail.com', '1234567890', 1, '', '', '', 1, '4300', 0),
(13, 'Mobimp', 0, 'mdriya93@gmail.com', '1234567890', 1, '', '', '', 1, '4300', 0),
(14, 'Mobimp', 0, 'mdriya93@gmail.com', '1234567890', 1, '', '', '', 1, '4300', 0),
(15, 'dfgfgd', 0, 'sdfsdfsd@sdf.sdf', '2132133121', 0, '', '', '', 0, '500', 0),
(16, 'dfgfgd', 0, 'sdfsdfsd@sdf.sdf', '2132133121', 0, '', '', '', 0, '500', 0),
(17, 'dfgfgd', 0, 'sdfsdfsd@sdf.sdf', '2132133121', 0, '', '', '', 0, '500', 0),
(18, 'dfgfgd', 0, 'sdfsdfsd@sdf.sdf', '2132133121', 0, '', '', '', 0, '500', 0),
(19, 'dfgfgd', 0, 'sdfsdfsd@sdf.sdf', '2132133121', 0, '', '', '', 0, '500', 0),
(20, 'dfgfgd', 0, 'sdfsdfsd@sdf.sdf', '2132133121', 0, '', '', '', 0, '500', 0),
(21, 'IMPHAL', 0, 'mdriya93@gmail.com', '1234567890', 1, '', '', '', 1, '4300', 0),
(22, 'teste', 0, 'sdflksjfsd@dxfdfsd.s', '23423423', 0, '', '', '', 0, '500', 0),
(23, 'sfsdfsd', 0, 'sdfsdfsdf@dfgdfg.sdf', '234342', 0, '', '', '', 0, '500', 0),
(24, 'fdgfdgd', 0, 'hghdf@jfhg.hdfd', '43143143134', 0, '', '', '', 0, '500', 0),
(25, 'dfsdfsd', 0, 'sdfsdfds@sdfsdfs.sdf', '234324', 0, '', '', '', 0, '500', 0),
(26, 'xfgfgfd', 0, 'sfsdfsdf@sdfsdf.sdf', '3453453', 0, '', '', '', 0, '500', 0),
(27, 'hgfhgfgh', 0, 'gfgdf@hfhgfh.hgf', '4324324', 0, '', '', '', 0, '500', 0),
(28, 'hghghd', 0, 'gfdfgdfd2@gfdgfdfgd.', '4343232', 0, '', '', '', 0, '500', 0),
(29, 'slkjsdflkj', 0, 'dsflkjsd@sdaf.sdf', '23342', 0, '', '', '', 0, '500', 0),
(30, 'slkjsdflkj', 0, 'dsflkjsd@sdaf.sdf', '23342', 0, '', '', '', 0, '500', 0),
(31, 'xffgd', 0, 'sfsdfsdf@sdfsdf.sdf', '2342342', 0, '', '', '', 0, '500', 0),
(32, 'dfglkjfdlkj', 0, 'lkjsdflkjfs@flskdfj.', '23424', 0, '', '', '', 0, '500', 0),
(33, 'mobimp', 0, 'test@gmail.com', '12324324234', 0, '', '', '', 0, '500', 0),
(34, 'test company', 0, 'sdflksjfsd@dxfdfsd.s', '8765656567', 0, '', '', '', 0, '500', 0),
(35, 'test', 0, 'sdflksjfsd@dxfdfsd.s', '2121212121', 0, '', '', '', 0, '500', 0),
(36, 'test', 0, 'sdflksjfsd@dxfdfsd.s', '2121212121', 0, '', '', '', 0, '500', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_user_details`
--

DROP TABLE IF EXISTS `company_user_details`;
CREATE TABLE IF NOT EXISTS `company_user_details` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `company_id` varchar(100) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_user_details`
--

INSERT INTO `company_user_details` (`user_id`, `company_id`, `user_name`) VALUES
(1, '1', '1ST NAME'),
(2, '1', '2ND NAME'),
(3, '1', '3RD NAME'),
(4, '2', '1ST NAME'),
(5, '2', '2ND NAME'),
(6, '2', '3RD NAME'),
(7, '3', '1st name'),
(8, '3', '2nd name'),
(9, '3', '3rd name'),
(10, '4', '1st name'),
(11, '4', '2nd name'),
(12, '4', '3rd name'),
(13, '5', '1st name'),
(14, '5', '2nd name'),
(15, '5', '3rd name'),
(16, '6', '1st name'),
(17, '6', '2nd name'),
(18, '6', '3rd name'),
(19, '7', 'sdfsdfs'),
(20, '8', 'sdfsdfs'),
(21, '8', 'Tomba 1'),
(22, '8', 'Tomba 2'),
(23, '9', 'Tomba 1'),
(24, '9', 'Tomba 2'),
(25, '10', 'Tomba 1'),
(26, '10', 'Tomba 2'),
(27, '11', 'Tomba 1'),
(28, '11', 'Tomba 2'),
(29, '12', 'Tomba 1'),
(30, '12', 'Tomba 2'),
(31, '13', 'Tomba 1'),
(32, '13', 'Tomba 2'),
(33, '14', 'Tomba 1'),
(34, '14', 'Tomba 2'),
(35, '15', 'sdfsdf'),
(36, '16', 'sdfsdf'),
(37, '17', 'sdfsdf'),
(38, '18', 'sdfsdf'),
(39, '19', 'sdfsdf'),
(40, '20', 'sdfsdf'),
(41, '21', 'test name 1'),
(42, '21', 'test name 2'),
(43, '22', 'sdsfd'),
(44, '22', 'sfddfsd'),
(45, '23', 'sdfsfd'),
(46, '24', 'fdsfds'),
(47, '25', '1fgdf'),
(48, '26', 'dsfsfd'),
(49, '27', 'gfd'),
(50, '28', '1fgdf'),
(51, '29', 'dsfsfd'),
(52, '30', 'dsfsfd'),
(53, '31', '234ds'),
(54, '32', '1'),
(55, '33', 'test'),
(56, '34', 'ererere'),
(57, '35', 'test name 1'),
(58, '36', 'test name 1');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `company_id`, `user_id`, `payment_amount`, `payment_status`, `tranc_id`, `ref_id`, `payment_date`) VALUES
(1, 21, '21', 800, 'INCOMPLETE', 'ff422045fe5aa81bd529', 'kkd0Uzpphmha9GaiJcGdYaUGJGFmljj1vqGFY0coyiYw90ikjm', '2019-01-06 18:21:46'),
(2, 21, '21', 800, 'INCOMPLETE', '9a7bc6b0328f55fa0b51', 'l0G3mJYla82G7p104u9lmej6Hd13J33o8krJc1g8Hh7pjn6uze', '2019-01-06 18:22:56');

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
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_user`
--

INSERT INTO `student_user` (`user_id`, `student_name`, `college_name`, `student_email`, `student_contact`, `dinner_attend`, `date_time`, `user_amount`) VALUES
(1, 'dsflj', 'xdlkjxc', 'xclkjxcvjxc', 23423424, '0', '2019-01-06 17:39:05', 500),
(2, 'dfdgd', 'dgfgdfdjh', 'xckvjhxcvkj', 34534353, '0', '2019-01-06 17:39:58', 500),
(3, 'dsdlfhjsdf', 'xdkjvhxcvkjh', 'xkcvjhxckv', 23423432, '0', '2019-01-06 17:41:24', 500),
(4, 'dsdlfhjsdf', 'xdkjvhxcvkjh', 'xkcvjhxckv', 23423432, '0', '2019-01-06 18:21:46', 500),
(5, 'xfg', 'vxvcxv', 'xvxcvxcv', 2342342, '0', '2019-01-06 18:22:56', 500),
(6, 'dvfd', 'kjhkjhk', 'jhkjxhkjhs', 2147483647, '0', '2019-01-06 18:24:15', 500),
(7, 'sdfsdf', 'sdfsdf', 'xcvxcv', 23432, '0', '2019-01-06 18:45:58', 500),
(8, 'slkhsfhs', 'skfjhsdkfhsk', 'ssdfkjhsdf@asdf.sdf', 234234234, '1', '2019-01-07 07:12:12', 1300),
(9, 'sesfsd', 'sdfsdfs', 'dfsd@sdf.sdf', 213242342, '1', '2019-01-07 07:16:39', 1300);

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
