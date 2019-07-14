-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 23, 2018 at 07:14 AM
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
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`apid`, `cid`, `uid`, `ap_on`, `postedon`, `reason`, `astatus`, `apwith`) VALUES
(12, 3, 3, '2018-08-06 23:02:00', '2018-08-23', 'koso', 'pending', 'mn'),
(13, 3, 3, '2018-08-06 23:02:00', '2018-08-23', 'koso', 'pending', 'mn');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `birthday`
--

INSERT INTO `birthday` (`bid`, `cid`, `uid`, `bdate`, `bname`, `bstatus`, `postedon`) VALUES
(5, 5, 3, '2018-07-26', 'Pramitha K', 'pending', '2018-08-23');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eid`, `cid`, `uid`, `etitle`, `description`, `evenue`, `eventdate`, `postedon`, `estatus`) VALUES
(11, 8, 3, 'aa', 'nxd', 'ij9', '2018-08-07 02:22:00', '2018-08-23', 'pending'),
(12, 8, 3, 'rfh', 'eidjihui', 'errf', '2018-08-01 06:06:00', '2018-08-23', 'pending');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`meeid`, `cid`, `uid`, `mwith`, `reason`, `mdate`, `postedon`, `mstatus`) VALUES
(5, 6, 3, 'rp', 'fhufhuf', '2018-08-13 14:22:00', '2018-08-23', 'pending');

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
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `image5` varchar(100) NOT NULL,
  `postedon` date NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `cid` (`cid`),
  KEY `cid_2` (`cid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `memories`
--

INSERT INTO `memories` (`mid`, `cid`, `uid`, `memory_title`, `mem_desc`, `image1`, `image2`, `image3`, `image4`, `image5`, `postedon`) VALUES
(8, 4, 3, 'ccc', 'f', '', '', '', '', '$', '2018-08-23'),
(9, 4, 3, 'ytrt', 'dd', '', '', '', '', '$', '2018-08-23'),
(10, 4, 3, 'ytrt', 'f', '[]', '', '', '', '', '2018-08-23'),
(11, 4, 3, 'ytrt', 'f', '[]', '', '', '', '', '2018-08-23');

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
  `posteddate` date NOT NULL,
  PRIMARY KEY (`maccid`),
  KEY `cid` (`cid`,`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `monthly_expense`
--

CREATE TABLE IF NOT EXISTS `monthly_expense` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `maccid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `spentdate` date NOT NULL,
  `spentamt` double NOT NULL,
  `reason` longtext NOT NULL,
  `posteddate` date NOT NULL,
  PRIMARY KEY (`exp_id`),
  KEY `maccid` (`maccid`,`uid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`rid`, `uid`, `cid`, `thingname`, `storage`, `storedon`, `postedon`, `rstatus`) VALUES
(7, 3, 7, 'rf', 'rfrd', '2018-08-01', '2018-08-23', 'pending');

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
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `email`, `pwd`, `gender`, `dob`, `age`, `image`, `contact`) VALUES
(2, 'PQR', 'pqr@gmail.com', '111', 'female', '2018-08-09', 30, 'p.jpg', 9998887770),
(3, 'ABC', 'abc@gmail.com', '100', 'male', '2018-08-30', 42, 'p2.jpg', 9876543210),
(4, 'XYZ', 'xyz@gmail.com', '000', 'female', '2018-08-23', 20, 'p5.jpg', 9995281005);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `monthly_expense_ibfk_1` FOREIGN KEY (`maccid`) REFERENCES `monthly_account` (`maccid`) ON DELETE CASCADE ON UPDATE CASCADE,
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
