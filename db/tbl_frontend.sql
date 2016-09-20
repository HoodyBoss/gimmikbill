-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 19 ก.ย. 2016  20:09น.
-- เวอร์ชั่นของเซิร์ฟเวอร์: 5.1.73-log
-- รุ่นของ PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `gimmikbill`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_frontend`
--

CREATE TABLE IF NOT EXISTS `tbl_frontend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_msg` varchar(500) DEFAULT NULL,
  `logo_img` varchar(30) DEFAULT NULL,
  `bg_img` varchar(30) DEFAULT NULL,
  `cd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cb` varchar(50) DEFAULT NULL,
  `md` datetime DEFAULT NULL,
  `mb` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- dump ตาราง `tbl_frontend`
--

INSERT INTO `tbl_frontend` (`id`, `title_msg`, `logo_img`, `bg_img`, `cd`, `cb`, `md`, `mb`, `status`) VALUES
(1, 'Welcome', NULL, NULL, '2016-09-15 05:58:08', NULL, NULL, NULL, 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
