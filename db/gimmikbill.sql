-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 18 ก.ย. 2016  20:43น.
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
-- โครงสร้างตาราง `tbl_appconfig`
--

CREATE TABLE IF NOT EXISTS `tbl_appconfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- dump ตาราง `tbl_appconfig`
--

INSERT INTO `tbl_appconfig` (`id`, `setting`, `value`) VALUES
(1, 'CompanyName', 'PHPMixBill v5.0'),
(2, 'theme', 'blue'),
(3, 'currency_code', 'บาท'),
(4, 'language', 'english'),
(5, 'show-logo', '1'),
(6, 'nstyle', 'blue'),
(7, 'timezone', 'Asia/Bangkok'),
(8, 'dec_point', '.'),
(9, 'thousands_sep', ','),
(10, 'rtl', '0'),
(11, 'address', 'Jl. Kubangsari VII No. 31 RT.03/RW.06 Bandung'),
(12, 'phone', '081322225141'),
(13, 'date_format', 'd M Y'),
(14, 'note', 'Thank you...');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_bandwidth`
--

CREATE TABLE IF NOT EXISTS `tbl_bandwidth` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_bw` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rate_down` int(10) unsigned NOT NULL,
  `rate_down_unit` enum('Kbps','Mbps') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rate_up` int(10) unsigned NOT NULL,
  `rate_up_unit` enum('Kbps','Mbps') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `tbl_bandwidth`
--

INSERT INTO `tbl_bandwidth` (`id`, `name_bw`, `rate_down`, `rate_down_unit`, `rate_up`, `rate_up_unit`) VALUES
(1, 'Free Bandwidth', 2, 'Mbps', 512, 'Kbps'),
(2, '3M/3M', 3, 'Mbps', 3, 'Mbps');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_customers`
--

CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) CHARACTER SET latin1 NOT NULL,
  `password` varchar(45) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(45) CHARACTER SET latin1 NOT NULL,
  `address` text CHARACTER SET latin1,
  `phonenumber` varchar(20) CHARACTER SET latin1 DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `username`, `password`, `fullname`, `address`, `phonenumber`, `created_at`, `last_login`) VALUES
(1, 'mixbill', 'mixbill', 'mixbill test1', '', '', '2016-09-13 13:46:02', NULL),
(2, 'mixbill2', 'mixbill2', 'mixbill test2', '', '', '2016-09-13 14:12:33', NULL);

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

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_language`
--

CREATE TABLE IF NOT EXISTS `tbl_language` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `folder` varchar(32) NOT NULL,
  `author` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- dump ตาราง `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `name`, `folder`, `author`) VALUES
(1, 'Indonesia', 'indonesia', 'Ismail Marzuqi'),
(2, 'English', 'english', 'Ismail Marzuqi'),
(3, 'Thai', 'thai', 'thai');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_logs`
--

CREATE TABLE IF NOT EXISTS `tbl_logs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `userid` int(10) NOT NULL,
  `ip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- dump ตาราง `tbl_logs`
--

INSERT INTO `tbl_logs` (`id`, `date`, `type`, `description`, `userid`, `ip`) VALUES
(1, '2016-09-12 13:58:37', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(2, '2016-09-12 15:45:40', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(3, '2016-09-12 15:58:20', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(4, '2016-09-12 16:01:35', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(5, '2016-09-12 16:10:23', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(6, '2016-09-12 16:19:03', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(7, '2016-09-12 16:20:26', 'Admin', '[admin]: Settings Saved Successfully', 1, '110.169.86.119'),
(8, '2016-09-12 16:20:31', 'Admin', '[admin]: Settings Saved Successfully', 1, '110.169.86.119'),
(9, '2016-09-12 16:25:09', 'Admin', 'admin Login Successful', 1, '1.46.98.135'),
(10, '2016-09-12 20:12:38', 'Admin', 'admin Login Successful', 1, '101.109.169.72'),
(11, '2016-09-13 02:20:35', 'Admin', 'admin Login Successful', 1, '1.4.212.4'),
(12, '2016-09-13 11:39:19', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(13, '2016-09-13 11:41:34', 'Admin', '[admin]: Settings Saved Successfully', 1, '110.169.86.119'),
(14, '2016-09-13 20:28:27', 'Admin', 'admin Login Successful', 1, '1.10.147.42'),
(15, '2016-09-13 20:38:18', 'Admin', 'admin Login Successful', 1, '1.10.147.42'),
(16, '2016-09-13 20:39:12', 'Admin', 'admin Login Successful', 1, '1.10.147.42'),
(17, '2016-09-13 20:39:51', 'Admin', 'admin Login Successful', 1, '1.10.147.42'),
(18, '2016-09-13 21:00:01', 'Admin', '[admin]: Settings Saved Successfully', 1, '1.10.147.42'),
(19, '2016-09-14 10:47:36', 'Admin', 'admin Login Successful', 1, '1.20.133.89'),
(20, '2016-09-14 10:48:49', 'Admin', '[admin]: Settings Saved Successfully', 1, '1.20.133.89'),
(21, '2016-09-14 10:48:52', 'Admin', '[admin]: Settings Saved Successfully', 1, '1.20.133.89'),
(22, '2016-09-14 11:18:48', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(23, '2016-09-14 11:19:17', 'Admin', '[admin]: Settings Saved Successfully', 1, '110.169.86.119'),
(24, '2016-09-14 11:19:56', 'Admin', 'admin Login Successful', 1, '1.20.133.89'),
(25, '2016-09-14 11:21:19', 'Admin', 'admin Login Successful', 1, '1.20.133.89'),
(26, '2016-09-14 13:33:36', 'Admin', 'admin Login Successful', 1, '1.20.133.89'),
(27, '2016-09-14 16:43:17', 'Admin', 'admin Login Successful', 1, '1.20.133.89'),
(28, '2016-09-14 21:47:57', 'Admin', 'admin Login Successful', 1, '101.51.89.98'),
(29, '2016-09-15 09:26:57', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(30, '2016-09-15 12:05:32', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(31, '2016-09-15 12:07:06', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(32, '2016-09-15 12:08:40', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(33, '2016-09-15 12:10:38', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(34, '2016-09-15 12:21:31', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(35, '2016-09-15 12:32:44', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(36, '2016-09-15 12:35:24', '', 'First step', 0, '110.169.86.119'),
(37, '2016-09-15 12:37:44', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(38, '2016-09-15 12:37:50', '', 'First step', 0, '110.169.86.119'),
(39, '2016-09-15 12:37:50', '', 'UID Session : ', 0, '110.169.86.119'),
(40, '2016-09-15 12:39:09', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(41, '2016-09-15 12:39:13', '', 'First step', 0, '110.169.86.119'),
(42, '2016-09-15 12:39:13', '', 'UID Session : ', 0, '110.169.86.119'),
(43, '2016-09-15 12:39:13', '', 'Second step', 0, '110.169.86.119'),
(44, '2016-09-15 12:39:13', '', 'Third step', 0, '110.169.86.119'),
(45, '2016-09-15 12:39:13', '', 'Fouth step', 0, '110.169.86.119'),
(46, '2016-09-15 12:39:13', '', 'Fifth step', 0, '110.169.86.119'),
(47, '2016-09-15 12:58:56', 'Admin', 'admin Login Successful', 1, '110.169.86.119'),
(48, '2016-09-16 09:25:59', 'Admin', '[admin]: User Updated Successfully', 1, '110.169.86.119'),
(49, '2016-09-16 09:26:32', 'Admin', '[admin]: Settings Saved Successfully', 1, '110.169.86.119');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `from_user` varchar(32) CHARACTER SET latin1 NOT NULL,
  `to_user` varchar(32) CHARACTER SET latin1 NOT NULL,
  `title` varchar(60) CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `status` enum('0','1') CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_plans`
--

CREATE TABLE IF NOT EXISTS `tbl_plans` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name_plan` varchar(40) CHARACTER SET latin1 NOT NULL,
  `id_bw` int(10) NOT NULL,
  `price` varchar(40) CHARACTER SET latin1 NOT NULL,
  `type` enum('Hotspot','PPPOE') CHARACTER SET latin1 NOT NULL,
  `typebp` enum('Unlimited','Limited') CHARACTER SET latin1 DEFAULT NULL,
  `limit_type` enum('Time_Limit','Data_Limit','Both_Limit') CHARACTER SET latin1 DEFAULT NULL,
  `time_limit` int(10) unsigned DEFAULT NULL,
  `time_unit` enum('Mins','Hrs') CHARACTER SET latin1 DEFAULT NULL,
  `data_limit` int(10) unsigned DEFAULT NULL,
  `data_unit` enum('MB','GB') CHARACTER SET latin1 DEFAULT NULL,
  `validity` int(10) NOT NULL,
  `validity_unit` enum('Days','Months') CHARACTER SET latin1 NOT NULL,
  `shared_users` int(10) DEFAULT NULL,
  `routers` varchar(32) CHARACTER SET latin1 NOT NULL,
  `pool` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `tbl_plans`
--

INSERT INTO `tbl_plans` (`id`, `name_plan`, `id_bw`, `price`, `type`, `typebp`, `limit_type`, `time_limit`, `time_unit`, `data_limit`, `data_unit`, `validity`, `validity_unit`, `shared_users`, `routers`, `pool`) VALUES
(1, '2M', 1, '500', 'Hotspot', 'Unlimited', 'Time_Limit', 0, 'Hrs', 0, 'MB', 30, 'Days', 1, 'Mikrotik', NULL),
(2, '3M', 2, '700', 'Hotspot', 'Unlimited', 'Time_Limit', 0, 'Hrs', 0, 'MB', 30, 'Days', 1, 'Mikrotik', NULL);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_pool`
--

CREATE TABLE IF NOT EXISTS `tbl_pool` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pool_name` varchar(40) NOT NULL,
  `range_ip` varchar(40) NOT NULL,
  `routers` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_routers`
--

CREATE TABLE IF NOT EXISTS `tbl_routers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET latin1 NOT NULL,
  `ip_address` varchar(128) CHARACTER SET latin1 NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 NOT NULL,
  `description` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- dump ตาราง `tbl_routers`
--

INSERT INTO `tbl_routers` (`id`, `name`, `ip_address`, `username`, `password`, `description`) VALUES
(3, 'Mikrotik', '1.10.147.42', 'admin', '123qwe', '');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_transactions`
--

CREATE TABLE IF NOT EXISTS `tbl_transactions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(25) NOT NULL,
  `username` varchar(32) NOT NULL,
  `plan_name` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL,
  `recharged_on` date NOT NULL,
  `expiration` date NOT NULL,
  `time` time NOT NULL,
  `method` enum('voucher','admin') NOT NULL,
  `routers` varchar(32) NOT NULL,
  `type` enum('Hotspot','PPPOE') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- dump ตาราง `tbl_transactions`
--

INSERT INTO `tbl_transactions` (`id`, `invoice`, `username`, `plan_name`, `price`, `recharged_on`, `expiration`, `time`, `method`, `routers`, `type`) VALUES
(1, 'INV-95258', 'mixbill', '2M', '500', '2016-09-13', '2016-10-13', '20:48:40', 'admin', 'Mikrotik', 'Hotspot'),
(2, 'INV-36857', 'mixbill2', '2M', '500', '2016-09-13', '2016-10-13', '21:13:03', 'admin', 'Mikrotik', 'Hotspot'),
(3, 'INV-13078', 'mixbill2', '3M', '700', '2016-09-13', '2016-10-13', '21:14:32', 'admin', 'Mikrotik', 'Hotspot');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `fullname` varchar(45) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `password` text CHARACTER SET latin1 NOT NULL,
  `user_type` enum('Admin','Sales') CHARACTER SET latin1 NOT NULL,
  `status` enum('Active','Inactive') CHARACTER SET latin1 NOT NULL DEFAULT 'Active',
  `last_login` datetime DEFAULT NULL,
  `creationdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- dump ตาราง `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `fullname`, `password`, `user_type`, `status`, `last_login`, `creationdate`) VALUES
(1, 'admin', 'System Administrator', '$1$W44.ns/.$MUnR0NeBH9xAcXm0Oku2h1', 'Admin', 'Active', '2016-09-15 12:58:56', '2014-06-23 01:43:07');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_user_recharges`
--

CREATE TABLE IF NOT EXISTS `tbl_user_recharges` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `username` varchar(32) CHARACTER SET latin1 NOT NULL,
  `plan_id` int(10) NOT NULL,
  `namebp` varchar(40) CHARACTER SET latin1 NOT NULL,
  `recharged_on` date NOT NULL,
  `expiration` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(20) CHARACTER SET latin1 NOT NULL,
  `method` enum('voucher','admin') CHARACTER SET latin1 NOT NULL,
  `routers` varchar(32) CHARACTER SET latin1 NOT NULL,
  `type` varchar(15) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `tbl_user_recharges`
--

INSERT INTO `tbl_user_recharges` (`id`, `customer_id`, `username`, `plan_id`, `namebp`, `recharged_on`, `expiration`, `time`, `status`, `method`, `routers`, `type`) VALUES
(1, 1, 'mixbill', 1, '2M', '2016-09-13', '2016-10-13', '20:48:40', 'on', 'admin', 'Mikrotik', 'Hotspot'),
(2, 2, 'mixbill2', 2, '3M', '2016-09-13', '2016-10-13', '21:14:32', 'on', 'admin', 'Mikrotik', 'Hotspot');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbl_voucher`
--

CREATE TABLE IF NOT EXISTS `tbl_voucher` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` enum('Hotspot','PPPOE') CHARACTER SET latin1 NOT NULL,
  `routers` varchar(32) CHARACTER SET latin1 NOT NULL,
  `id_plan` int(10) NOT NULL,
  `code` varchar(55) CHARACTER SET latin1 NOT NULL,
  `user` varchar(45) CHARACTER SET latin1 NOT NULL,
  `status` varchar(25) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- dump ตาราง `tbl_voucher`
--

INSERT INTO `tbl_voucher` (`id`, `type`, `routers`, `id_plan`, `code`, `user`, `status`) VALUES
(1, 'Hotspot', 'Mikrotik', 2, '787', '0', '0'),
(2, 'Hotspot', 'Mikrotik', 2, '66E', '0', '0'),
(3, 'Hotspot', 'Mikrotik', 2, '18C', '0', '0'),
(4, 'Hotspot', 'Mikrotik', 2, '7C4', '0', '0'),
(5, 'Hotspot', 'Mikrotik', 2, '272', '0', '0'),
(6, 'Hotspot', 'Mikrotik', 2, '2A4', '0', '0'),
(7, 'Hotspot', 'Mikrotik', 2, 'DEF', '0', '0'),
(8, 'Hotspot', 'Mikrotik', 2, 'DE4', '0', '0'),
(9, 'Hotspot', 'Mikrotik', 2, 'A7D', '0', '0'),
(10, 'Hotspot', 'Mikrotik', 2, 'FF1', '0', '0'),
(11, 'Hotspot', 'Mikrotik', 2, '801', '0', '0'),
(12, 'Hotspot', 'Mikrotik', 2, '230', '0', '0'),
(13, 'Hotspot', 'Mikrotik', 2, '5D0', '0', '0'),
(14, 'Hotspot', 'Mikrotik', 2, 'A6A', '0', '0'),
(15, 'Hotspot', 'Mikrotik', 2, 'C16', '0', '0'),
(16, 'Hotspot', 'Mikrotik', 2, '8A3', '0', '0'),
(17, 'Hotspot', 'Mikrotik', 2, '270', '0', '0'),
(18, 'Hotspot', 'Mikrotik', 2, '409', '0', '0'),
(19, 'Hotspot', 'Mikrotik', 2, '108', '0', '0'),
(20, 'Hotspot', 'Mikrotik', 2, 'FED', '0', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
