-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2018 at 10:13 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `notedownme`
--
CREATE DATABASE IF NOT EXISTS `notedownme` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `notedownme`;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `determinAge`(IN `id` INT)
SELECT YEAR(CURDATE()) - YEAR(dob) AS old_age FROM user where uid=id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `apid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `ap_on` datetime NOT NULL,
  `postedon` date NOT NULL,
  `reason` longtext NOT NULL,
  `astatus` varchar(30) NOT NULL,
  `apwith` varchar(40) NOT NULL,
  PRIMARY KEY (`apid`),
  KEY `cid` (`cid`,`uid`),
  KEY `uid` (`uid`),
  KEY `uid_2` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`apid`, `cid`, `uid`, `ap_on`, `postedon`, `reason`, `astatus`, `apwith`) VALUES
(39, 3, 8, '2018-10-01 11:11:00', '2018-10-08', 'mnp', 'pending', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `birthday`
--

CREATE TABLE IF NOT EXISTS `birthday` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `bname` varchar(30) NOT NULL,
  `bstatus` varchar(30) NOT NULL,
  `postedon` date NOT NULL,
  PRIMARY KEY (`bid`),
  KEY `cid` (`cid`,`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `birthday`
--

INSERT INTO `birthday` (`bid`, `cid`, `uid`, `bdate`, `bname`, `bstatus`, `postedon`) VALUES
(17, 5, 8, '1997-10-26', 'pammi', 'pending', '2018-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(30) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `category`) VALUES
(1, 'account_income'),
(2, 'account_expense'),
(3, 'appointment'),
(4, 'memories'),
(5, 'birthday'),
(6, 'meeting'),
(7, 'note'),
(8, 'occassion');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `etitle` varchar(30) NOT NULL,
  `description` longtext NOT NULL,
  `evenue` varchar(30) NOT NULL,
  `eventdate` datetime NOT NULL,
  `postedon` date NOT NULL,
  `estatus` varchar(30) NOT NULL,
  PRIMARY KEY (`eid`),
  KEY `cid` (`cid`,`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eid`, `cid`, `uid`, `etitle`, `description`, `evenue`, `eventdate`, `postedon`, `estatus`) VALUES
(20, 8, 8, '', 'pqr', 'xyz', '2018-10-04 02:22:00', '2018-10-07', '');

-- --------------------------------------------------------

--
-- Table structure for table `extra_income`
--

CREATE TABLE IF NOT EXISTS `extra_income` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `maccid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `money` double NOT NULL,
  `goton` date NOT NULL,
  `posteddate` date NOT NULL,
  `reason` longtext NOT NULL,
  PRIMARY KEY (`in_id`),
  KEY `maccid` (`maccid`,`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `meeid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `mwith` varchar(40) NOT NULL,
  `reason` longtext NOT NULL,
  `mdate` datetime NOT NULL,
  `postedon` date NOT NULL,
  `mstatus` varchar(30) NOT NULL,
  PRIMARY KEY (`meeid`),
  KEY `cid` (`cid`,`uid`),
  KEY `uid` (`uid`),
  KEY `cid_2` (`cid`),
  KEY `uid_2` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`meeid`, `cid`, `uid`, `mwith`, `reason`, `mdate`, `postedon`, `mstatus`) VALUES
(12, 6, 8, 'mno', 'pqrs', '2018-10-02 15:33:00', '2018-10-07', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `memories`
--

CREATE TABLE IF NOT EXISTS `memories` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `memory_title` varchar(30) NOT NULL,
  `mem_desc` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `postedon` date NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `cid` (`cid`),
  KEY `cid_2` (`cid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `memories`
--

INSERT INTO `memories` (`mid`, `cid`, `uid`, `memory_title`, `mem_desc`, `image`, `postedon`) VALUES
(65, 4, 8, 'maria', 'birthday ', 't3.jpg,t4.jpg,t5.jpg,t6.jpg', '2018-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_account`
--

CREATE TABLE IF NOT EXISTS `monthly_account` (
  `maccid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `month` varchar(30) NOT NULL,
  `amount` double NOT NULL,
  `till_date_amt` double NOT NULL,
  `posteddate` date NOT NULL,
  PRIMARY KEY (`maccid`),
  KEY `cid` (`cid`,`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `monthly_account`
--

INSERT INTO `monthly_account` (`maccid`, `cid`, `uid`, `month`, `amount`, `till_date_amt`, `posteddate`) VALUES
(10, 1, 4, 'July', 50, 50, '2018-08-30'),
(11, 1, 4, 'Sep', 1000, 1050, '2018-08-30'),
(13, 1, 4, 'Sep', 200, 1050, '2018-08-30'),
(14, 1, 5, 'Sep', 1000, 2050, '2018-09-06'),
(15, 1, 3, 'Jan', 1000, 3250, '2018-09-12'),
(16, 1, 3, 'Jan', 1000, 3250, '2018-09-12'),
(17, 1, 3, 'July', 1000, 5250, '2018-09-12'),
(18, 1, 8, 'Jan', 500, 4750, '2018-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_expense`
--

CREATE TABLE IF NOT EXISTS `monthly_expense` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `spentdate` date NOT NULL,
  `spentamt` double NOT NULL,
  `reason` longtext NOT NULL,
  `posteddate` date NOT NULL,
  PRIMARY KEY (`exp_id`),
  KEY `maccid` (`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `monthly_expense`
--

INSERT INTO `monthly_expense` (`exp_id`, `uid`, `spentdate`, `spentamt`, `reason`, `posteddate`) VALUES
(13, 4, '2018-08-10', 200, 'fees', '2018-08-30'),
(14, 5, '2018-09-27', 200, 'dtrd', '2018-09-06'),
(15, 3, '2018-09-01', 1000, 'ad', '2018-09-12'),
(16, 8, '2018-10-07', 1000, 'abcd', '2018-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE IF NOT EXISTS `reminder` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `thingname` varchar(30) NOT NULL,
  `storage` varchar(30) NOT NULL,
  `storedon` date NOT NULL,
  `postedon` date NOT NULL,
  `rstatus` varchar(30) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `uid` (`uid`,`cid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`rid`, `uid`, `cid`, `thingname`, `storage`, `storedon`, `postedon`, `rstatus`) VALUES
(10, 8, 7, 'puni', 'mangalore', '2018-10-05', '2018-10-07', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `age` int(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `email`, `pwd`, `gender`, `dob`, `age`, `image`, `contact`) VALUES
(3, 'ABC', 'abc@gmail.com', '100', 'male', '1990-08-30', 42, 'p2.jpg', 9876543210),
(4, 'XYZ', 'xyz@gmail.com', '000', 'female', '1998-08-23', 20, 'p5.jpg', 9995281005),
(5, 'areef', 'areef@gmail.com', '555', 'male', '2000-09-12', 20, 'p4.jpg', 987654321),
(8, 'pramitha', 'pramithakn26@gmail.com', 'Pammi111', 'female', '1997-07-26', 21, 'r6.jpg', 8139881782);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `birthday`
--
ALTER TABLE `birthday`
  ADD CONSTRAINT `birthday_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `birthday_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `extra_income`
--
ALTER TABLE `extra_income`
  ADD CONSTRAINT `extra_income_ibfk_1` FOREIGN KEY (`maccid`) REFERENCES `monthly_account` (`maccid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `extra_income_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `meeting_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `meeting_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `memories`
--
ALTER TABLE `memories`
  ADD CONSTRAINT `memories_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memories_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `monthly_account`
--
ALTER TABLE `monthly_account`
  ADD CONSTRAINT `monthly_account_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `monthly_account_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `monthly_expense`
--
ALTER TABLE `monthly_expense`
  ADD CONSTRAINT `monthly_expense_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reminder`
--
ALTER TABLE `reminder`
  ADD CONSTRAINT `reminder_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reminder_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
