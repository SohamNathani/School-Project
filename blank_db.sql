-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 29, 2018 at 02:22 PM
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
-- Database: `school_login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_c`
--

DROP TABLE IF EXISTS `activity_c`;
CREATE TABLE IF NOT EXISTS `activity_c` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `c_description` varchar(500) NOT NULL,
  PRIMARY KEY (`c_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_c`
--

INSERT INTO `activity_c` (`c_id`, `c_name`, `c_description`) VALUES
(1, '9df04ac50e5659bc8e1247a44a2ec475.Android studio.JPG', 'this is the decription'),
(2, '65903f2aa2ee74b9956ed0a22c827cdd.FB data policy.JPG', 'this is the decription'),
(3, '4b875c0c4693c762939e72bcc3888e19.webinar.JPG', 'this is the decription');

-- --------------------------------------------------------

--
-- Table structure for table `activity_pics`
--

DROP TABLE IF EXISTS `activity_pics`;
CREATE TABLE IF NOT EXISTS `activity_pics` (
  `pic_id` int(10) NOT NULL AUTO_INCREMENT,
  `pic_name` varchar(100) DEFAULT NULL,
  `pic_description` varchar(200) DEFAULT NULL,
  KEY `indexing` (`pic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_pics`
--

INSERT INTO `activity_pics` (`pic_id`, `pic_name`, `pic_description`) VALUES
(1, '5c4af856c9c28b8b48ba90f1ddbfb969.webinar.JPG', 'another landing page'),
(4, '2bda500ad7266b2e047b4b5c8b6b6ea7.Android studio.JPG', ''),
(3, '393e31806fdaef232bad10e7b32f4f7c.FB data policy.JPG', 'fb data'),
(21, 'edc83bf2f10a76f88c1858c147b4cdc1.', ''),
(23, 'bca55cc5cf0bd3b09e2f9225809f763d.', ''),
(7, '118c0e414a31ed923516cb26ac11c6df.', ''),
(8, '0a447474a0122746111ae92fabfd1b1e.', ''),
(9, 'dc8229392bd94ce1aa063da5415daaa2.', ''),
(10, '4171c436b10e2e755967e800ffd61e76.', ''),
(22, 'ae3ef28b4b72e9b4d1ee58be6663f86a.', ''),
(24, '875b2cb450d02f6285d03308307ba23f.', ''),
(26, 'f79ef198040fc25c87238ad31de18f4b.', '');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_passwd` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`user_id`, `user_name`, `user_passwd`) VALUES
(1, 'Admin', '$2y$10$ppog4SOF41fxbwpX7sXR8.ub56O6BNPqvT7eALcpp3/CigoxiD8CC');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(10) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(250) NOT NULL,
  `day` int(2) NOT NULL,
  `month` varchar(10) NOT NULL,
  `time` time(6) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `event_name`, `day`, `month`, `time`) VALUES
(1, 'Painting competition', 7, 'March', '07:30:00.000000'),
(4, 'Singing competition', 20, 'April', '20:30:00.000000'),
(3, 'Dance competition', 31, 'Jan', '10:30:00.000000'),
(5, 'Painting competition 1', 7, 'Nov', '22:50:00.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
