-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2019 at 02:03 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
CREATE TABLE IF NOT EXISTS `marks` (
  `usn` varchar(10) NOT NULL,
  `sem1` varchar(25) NOT NULL,
  `marks1` double NOT NULL,
  `att1` int(50) NOT NULL,
  `sem2` varchar(25) NOT NULL,
  `marks2` double NOT NULL,
  `att2` int(50) NOT NULL,
  `sem3` varchar(25) NOT NULL,
  `marks3` double NOT NULL,
  `att3` int(50) NOT NULL,
  `sem4` varchar(25) NOT NULL,
  `marks4` double NOT NULL,
  `att4` int(50) NOT NULL,
    `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`,`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`usn`, `sem1`, `marks1`, `att1`, `sem2`, `marks2`, `att2`, `sem3`, `marks3`, `att3`, `sem4`, `marks4`, `att4`,`id`) VALUES
('1BI17CS052', 'sem-1', 8.66, 91, 'sem-2', 8.13, 87, 'sem-3', 8.05, 88.12, 'sem-4', 7.95, 86.1, 1),
('1BI17CS017', 'sem-1', 7.66, 79, 'sem-2', 7.85, 91.34, 'sem-3', 7.5, 76.9, 'sem-4', 8.05, 80.25, 2),
('1BI17IS047', 'sem-1', 7.33, 91.6, 'sem-2', 7.66, 90.25, 'sem-3', 8.13, 94.3, 'sem-4', 7.86, 89.56, 3),
('1BI17IS023', 'sem-1', 8.1, 93.4, 'sem-2', 8.5, 83.5, 'sem-3', 7.89, 89.67, 'sem-4', 8.13, 90.15, 4),
('1BI17EC039', 'sem-1', 7.05, 79.66, 'sem-2', 7.33, 84.77, 'sem-3', 7.7, 87.98, 'sem-4', 7.4, 84.1, 5),
('1BI17EC061', 'sem-1', 7.23, 88.33, 'sem-2', 7.5, 90.13, 'sem-3', 7.5, 81.23, 'sem-4', 7.8, 89.66, 6),
('1BI17ME056', 'sem-1', 6.97, 84.5, 'sem-2', 6.6, 80.24, 'sem-3', 7.13, 78.9, 'sem-4', 7.72, 90.34, 7),
('1BI17ME041', 'sem-1', 6.5, 82, 'sem-2', 7.18, 85.66, 'sem-3', 7.4, 77.33, 'sem-4', 7.13, 92.78, 8),
('1BI17EI004', 'sem-1', 8.05, 77, 'sem-2', 8.13, 87.1, 'sem-3', 7.88, 88.6, 'sem-4', 7.5, 85.46, 9),
('1BI17EI021', 'sem-1', 8.2, 81, 'sem-2', 7.93, 93, 'sem-3', 7.66, 86, 'sem-4', 8.0, 87.8, 10);




-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE IF NOT EXISTS `personal` (
  `branch` varchar(250) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `income` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `ph` varchar(250) NOT NULL,
  `nation` varchar(250) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `padd` text NOT NULL,
  `cadd` text NOT NULL,
  `pmob` varchar(10) NOT NULL,
  `board1` varchar(50) NOT NULL,
  `roll1` varchar(50) NOT NULL,
  `pyear1` varchar(50) NOT NULL,
  `board2` varchar(250) NOT NULL,
  `roll2` varchar(250) NOT NULL,
  `pyear2` varchar(250) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`branch`, `usn`, `fname`, `lname`, `gender`, `pname`, `income`, `category`, `ph`, `nation`, `mobno`, `email`, `country`, `state`, `city`, `padd`, `cadd`, `pmob`, `board1`, `roll1`, `pyear1`, `board2`, `roll2`, `pyear2`, `id`) VALUES
('i.s', '1BI17IS047', 'RAHUL', 'KUMAR', 'Male', 'SHARATH', '450000', 'SC', 'NO', 'INDIAN', '9734343999', 'jdk@gmail.com', 'INDIA', 'KARNATAKA', 'BANGALORE', 'DAVANAGERE', 'VIJAYNAGAR', '5634799299', 'SSLC', '318', '2015', 'PUC', '123', '2017', 1),
('i.s', '1BI17IS023', 'SUSHMITHA', 'H', 'Female', 'HITESH', '300000', 'GENERAL', 'NO', 'INDIAN', '9223877900', 'jdsk@yahoo.com', 'INDIA', 'KARNATAKA', 'BANGALORE', 'BELGAUM', 'RAJAJINAGAR', '5634799299', 'SSLC', '317', '2015', 'PUC', '134', '2017', 2),
('c.s', '1BI17CS052', 'RACHITA', 'GOWDA', 'Female', 'RANGASWAMY', '600000', 'ST', 'NO', 'INDIAN', '8876545400', 'rosie@gmail.com', 'INDIA', 'KARNATAKA', 'BANGALORE', 'BAGALKOT', 'VV PURAM', '5634799299', 'SSLC', '316', '2015', 'PUC', '234', '2017', 3),
('c.s', '1BI17CS017', 'Milind ', 'KUMAR', 'Male', 'CHIRAG', '500000', 'OBC', 'NO', 'INDIAN', '8097659706', 'current@gmail.com', 'INDIA', 'KARNATAKA', 'BANGALORE', 'TN NAGAR', 'V B NAGAR', '5634799299', 'cbse', '315', '2015', 'PUC', '101', '2017', 4),
('e.c', '1BI17EC039', 'RAKUL', 'SINHA', 'Male', 'RAMESH', '340000', 'OBC', 'NO', 'INDIAN', '9900901066', '1257@gmail.com', 'INDIA', 'KARNATAKA', 'BANGALORE', 'TULASINAGAR', 'VNAGAR', '5634799299', 'SSLC', '310', '2015', 'PUC', '111', '2017', 5),
('e.c', '1BI17EC061', 'RAHUL', 'N.S', 'Male', 'VISHAL', '360000', 'GENERAL', 'NO', 'INDIAN', '7800991910', 'rah_vir@gmail.com', 'INDIA', 'KARNATAKA', 'BANGALORE', 'TUMKUR', 'V R NAGAR', '5634799299', 'cbse', '309', '2015', 'cbse', '141', '2017', 6),
('mech', '1BI17CS056', 'ABISHEKH', 'NAYAK', 'Male', 'AMIT', '400000', 'SC', 'NO', 'INDIAN', '6036453227', 'abhi99@yahoo.com', 'INDIA', 'KARNATAKA', 'BANGALORE', 'HOSUR', 'SHIVAJINAGAR', '5634799299', 'cbse', '303', '2014', 'cbse', '143', '2017', 7),
('mech', '1BI17ME041', 'PARAS', 'SINGHANIYA', 'Male', 'KARAN', '700000', 'OBC', 'NO', 'INDIAN', '9234567856', 'psgs@gmail.com', 'INDIA', 'KARNATAKA', 'BANGALORE', 'KANAKPUR', 'SADASHIVNAGAR', '5634799299', 'SSLC', '343', '2015', 'PUC', '149', '2017', 8),
('e.i', '1BI17EI004', 'NAVEEN', 'KUMAR', 'Male', 'RAJESH', '420000', 'ST', 'NO', 'INDIAN', '9443573987', 'navkum@gmail.com', 'INDIA', 'MUMBSAI', 'NOORDAL', 'DARJAPUR', 'RASTROTANA NAGAR', '5634799299', 'SSLC', '324', '2014', 'PUC', '145', '2016', 9),
('e.i', '1BI17EI021', 'NOOR', 'FATHIMA', 'Female', 'SHAJIDH', '350000', 'OBC', 'NO', 'INDIAN', '9886756032', 'noor18@gmail.com', 'INDIA', 'MAHARASTRA', 'BANFRRE', 'SHAKTI NAGAR', 'JAIBHADRE NAGAR', '5634799299', 'SSLC', '324', '2015', 'PUC', '162', '2017', 10);

-- --------------------------------------------------------
    DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `tid` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mob` double NOT NULL,
  `branch` varchar(50) NOT NULL,
`id` int(20) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `teachers` (`tid`,`name`,`mob`,`branch`,`id`) VALUES
('cs022','Pooja','9786543213','C.S',1),
('is017','Anupama','9739114235','I.S',2),
('ec022','Keshav','7899190704','E.C',3),
('mech022','Girish','8903452311','MECH',4),
('ei011','Vidya','9906745778','E.I',5);
--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subid` int(11) NOT NULL AUTO_INCREMENT,
  `cshort` varchar(50) NOT NULL,
  `cfull` varchar(250) NOT NULL,
  `sub1` varchar(250) NOT NULL,
  `sub2` varchar(250) NOT NULL,
  `sub3` varchar(250) NOT NULL,
  `sub4` varchar(250) NOT NULL,
  `sub5` varchar(250) NOT NULL,
  `sub6` varchar(250) NOT NULL,
  PRIMARY KEY (`subid`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


INSERT INTO `subject` (`subid`, `cshort`, `cfull`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
(1, 'C.S', 'COMPUTER SCIENCE', 'M&E', 'AT&C', 'DBMS', 'CN', 'AJ&J2EE', 'OE'),
(2, 'I.S', 'INFORMATION SCIENCE', 'M&E', 'AT&C', 'DBMS', 'CN', 'AJ&J2EE', 'OE'),
(3, 'E.C', 'ELECTRONICS AND COMMUNICATION', 'M&E', 'DSP', 'VHDL', 'IT&C', 'NT', 'OE'),
(4, 'MECH', 'MECHANICAL', 'M&E', 'DME', 'BTD', 'M&M', 'FM', 'OE'),
(5, 'E.I', 'ELECTRONICS AND INSTRUMENTATION', 'M&E', 'DSP', 'PCS', 'BI', 'VLSI', 'OE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

DROP TABLE IF EXISTS `tbl_branch`;
CREATE TABLE IF NOT EXISTS `tbl_branch` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cshort` varchar(250) NOT NULL,
  `cfull` varchar(250) NOT NULL,
  `cdate` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`cid`, `cshort`, `cfull`, `cdate`) VALUES
(1, 'C.S', 'COMPUTER SCIENCE', '25-11-2019'),
(2, 'I.S', 'INFORMATION SCIENCE', '25-11-2019'),
(3, 'E.C', 'ELECTRONICS AND COMMUNICATION', '25-11-2019'),
(4, 'MECH', 'MECHANICAL', '25-11-2019'),
(5, 'E.I', 'ELECTRONICS AND INSTRUMENTATION', '25-11-2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(250) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `loginid`, `password`) VALUES
(1, 'ise', 'ise123');
INSERT INTO `tbl_login` (`id`, `loginid`, `password`) VALUES
(2, 'KUSHAL', 'KUSHAL');
INSERT INTO `tbl_login` (`id`, `loginid`, `password`) VALUES
(3, 'BARATH', 'BARATH');


-- --------------------------------------------------------

--
-- Table structure for table `tbl_tlogin`
--

DROP TABLE IF EXISTS `tbl_tlogin`;
CREATE TABLE IF NOT EXISTS `tbl_tlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(250) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tlogin`
--

INSERT INTO `tbl_tlogin` (`id`, `loginid`, `password`) VALUES
(1, 'teacher', 'teacher'),
(2,'Pooja','pc'),
(3,'Anupama','kca'),
(4,'Keshav','kmr'),
(5,'Girish','gvk'),
(6,'Vidya','svv');

DELIMITER $$
 
CREATE PROCEDURE GetTeachers()
BEGIN
    SELECT * FROM teachers;
    END$$

-- DELIMITER $$
-- CREATE TRIGGER `after_branch_edit` AFTER UPDATE ON `tbl_branch` 
-- FOR EACH ROW 
-- BEGIN
--    INSERT INTO tbl_branch SET cdate = CURRENT_TIMESTAMP()  ;
-- END
-- $$
-- DELIMITER ;

COMMIT;


