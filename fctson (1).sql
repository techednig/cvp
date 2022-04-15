-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2022 at 08:06 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fctson`
--

-- --------------------------------------------------------

--
-- Table structure for table `activation`
--

DROP TABLE IF EXISTS `activation`;
CREATE TABLE IF NOT EXISTS `activation` (
  `act_id` int(10) NOT NULL AUTO_INCREMENT,
  `remita_no` varchar(12) NOT NULL,
  `formno` varchar(10) NOT NULL,
  `prog` varchar(30) NOT NULL,
  `stream` varchar(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `act_state` int(1) NOT NULL DEFAULT '1' COMMENT '0, 1',
  `entrydate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryby` varchar(30) NOT NULL,
  `lastupdated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedby` varchar(30) NOT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

DROP TABLE IF EXISTS `adminusers`;
CREATE TABLE IF NOT EXISTS `adminusers` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `a_email` varchar(50) NOT NULL,
  `a_password` varchar(200) NOT NULL,
  `a_lname` varchar(30) NOT NULL,
  `a_fname` varchar(30) NOT NULL,
  `o_name` varchar(30) DEFAULT NULL,
  `privilege` int(1) NOT NULL,
  `a_phone` varchar(20) DEFAULT NULL,
  `a_address` varchar(200) DEFAULT NULL,
  `a_state` varchar(15) DEFAULT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`user_id`, `a_email`, `a_password`, `a_lname`, `a_fname`, `o_name`, `privilege`, `a_phone`, `a_address`, `a_state`, `entry_date`, `last_updated`) VALUES
(1, 'a@a.com', '6a24cd3aee17129b5d5d10ab6c0c8e24', 'Uhuangho', 'Ayo', 'Courage', 1, '08039536404', 'Lugbe, After Iron Bridge', 'FCT', '2022-02-13 23:16:11', '2022-02-19 20:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `appresult`
--

DROP TABLE IF EXISTS `appresult`;
CREATE TABLE IF NOT EXISTS `appresult` (
  `result_id` int(10) NOT NULL AUTO_INCREMENT,
  `appid` int(15) NOT NULL,
  `category` varchar(1) NOT NULL,
  `r_type` int(15) NOT NULL,
  `exam_no` int(30) NOT NULL,
  `cand_no` int(30) NOT NULL,
  `mat` int(3) NOT NULL,
  `eng` int(3) NOT NULL,
  `phy` int(3) NOT NULL,
  `bio` int(3) NOT NULL,
  `chem` int(3) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`result_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `batchinfo`
--

DROP TABLE IF EXISTS `batchinfo`;
CREATE TABLE IF NOT EXISTS `batchinfo` (
  `batchid` int(4) NOT NULL AUTO_INCREMENT,
  `bcode` varchar(2) NOT NULL COMMENT '1A, 2B',
  `edate` date DEFAULT NULL,
  `etime` varchar(4) NOT NULL COMMENT '7AM, 9AM, 11AM, 1PM',
  `entryby` varchar(50) NOT NULL COMMENT 'userID',
  `entrydate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`batchid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `batchtable`
--

DROP TABLE IF EXISTS `batchtable`;
CREATE TABLE IF NOT EXISTS `batchtable` (
  `appid` int(15) NOT NULL,
  `batchid` varchar(5) DEFAULT NULL,
  `hall` varchar(50) DEFAULT NULL,
  `seatno` int(5) DEFAULT NULL,
  `attendance_status` varchar(20) NOT NULL DEFAULT 'Absent',
  `updatedby` varchar(50) DEFAULT NULL,
  `update_date` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
  `appid` int(20) NOT NULL AUTO_INCREMENT,
  `form_no` varchar(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `oname` varchar(30) DEFAULT NULL,
  `gender` varchar(7) NOT NULL,
  `state` varchar(15) NOT NULL,
  `phone1` varchar(15) NOT NULL,
  `phone2` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nationality` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `progname` varchar(30) NOT NULL,
  `progyr` year(4) NOT NULL COMMENT '2022',
  `stream` varchar(1) NOT NULL COMMENT 'A, B',
  `batchid` int(2) DEFAULT NULL COMMENT '3, 2',
  `result_state` int(1) NOT NULL DEFAULT '0' COMMENT '1, 0',
  `submit_state` int(1) NOT NULL DEFAULT '0' COMMENT '1, 0',
  `code` varchar(30) DEFAULT NULL,
  `photolink` text,
  `entrydate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryby` varchar(100) NOT NULL,
  `lastupdated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedby` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM AUTO_INCREMENT=202200005 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`appid`, `form_no`, `sname`, `fname`, `oname`, `gender`, `state`, `phone1`, `phone2`, `email`, `nationality`, `dob`, `progname`, `progyr`, `stream`, `batchid`, `result_state`, `submit_state`, `code`, `photolink`, `entrydate`, `entryby`, `lastupdated`, `updatedby`) VALUES
(202200001, '005652', 'Ken', 'Hopkins', 'Okon', 'Female', 'Cross River', '08039536404', '08039536404', 'asdsd@assdsa.com', 'Nigerian', '2022-02-10', 'BM', 2022, 'B', NULL, 0, 1, NULL, '../dashboard/img_passport/Klala--2 edited2.png', '2022-02-20 23:30:42', '1', '2022-02-20 23:30:42', '1'),
(202200002, '55685', 'Gob', 'Hon', 'KOn', 'Female', 'Cross River', '08039536404', '08039536404', 'adasd@asdsad.com', 'Nigerian', '2022-02-10', 'BM', 2022, 'B', NULL, 0, 1, NULL, '../dashboard/img_passport/Abuja_gate.jpg', '2022-02-20 23:32:32', '1', '2022-02-20 23:32:32', '1'),
(202200003, '00565', 'Ken', 'Brice', 'Kim', 'Female', 'Cross River', '08039536404', '08039536407', 'ken@brice.com', 'Nigerian', '1993-06-22', 'BN', 2022, 'B', NULL, 0, 1, NULL, '../dashboard/img_passport/FCTA NO BG.gif', '2022-02-21 00:31:09', '1', '2022-02-21 00:31:09', '1'),
(202200004, '055856', 'Jack', 'Rob', 'Lynx', 'Male', 'Bauchi', '08180366172', '08180366172', 'binn@kiewe.com', 'Nigerian', '2021-03-31', 'PBN', 2025, 'A', NULL, 0, 1, NULL, 'img_passport/exam info.jpg', '2022-02-21 00:47:15', '1', '2022-02-21 00:47:15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `roleid` int(2) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleid`, `role`, `status`) VALUES
(1, 'Super Admin', 1),
(2, 'Capturing Officer', 1),
(3, 'Activation Officer', 1),
(4, 'Verification Officer', 1),
(5, 'Interviewer', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
