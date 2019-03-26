-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2019 at 12:16 AM
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
-- Database: `db_organdona`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

DROP TABLE IF EXISTS `tbl_movies`;
CREATE TABLE IF NOT EXISTS `tbl_movies` (
  `movies_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movies_cover` varchar(75) NOT NULL DEFAULT 'cover_default.jpg',
  `movies_title` varchar(125) NOT NULL,
  `movies_year` varchar(5) NOT NULL,
  `movies_runtime` varchar(25) NOT NULL,
  `movies_storyline` text NOT NULL,
  `movies_trailer` varchar(75) NOT NULL DEFAULT 'trailer_default.jpg',
  `movies_release` varchar(125) NOT NULL,
  PRIMARY KEY (`movies_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movies_id`, `movies_cover`, `movies_title`, `movies_year`, `movies_runtime`, `movies_storyline`, `movies_trailer`, `movies_release`) VALUES
(2, 'Group 1.png', 'business card0-0', '2017', '1h 46m', '。', 'Dunkirk.mp4', 'July 21, 2017'),
(3, 'm-fc.jpg', 'facebook', '2017', '2h 17m', 'text//', 'Logan.mp4', 'March 3,2017'),
(4, 'm-ins.jpg', 'our ins', '2017', '2h', 'pupupupupu', 'Okja.mp4', 'June 28,2017'),
(6, 'm-logo.png', 'our logo', '2016', '2h 19m', 'logo hero hhhhhh', 'Hacksaw.mp4', 'November 4, 2016'),
(7, 'm-outside.jpg', 'outside logo', '2016', '1h 48m', '.....', 'Bloodpool.mp4', 'Febuary 12, 2016'),
(9, 'back-login.png', 'log in bagrd', '2016', '1h 46m', '..', 'Eddie.mp4', 'Febuary 26, 2016'),
(25, 'eye.png', '', '', '', '', '', '        '),
(26, 'eye.png', 'gugugu', '', '', '', '', '        '),
(27, 'bone.png', '', '', '', '', '', '        ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spread`
--

DROP TABLE IF EXISTS `tbl_spread`;
CREATE TABLE IF NOT EXISTS `tbl_spread` (
  `spread_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `spread_img` varchar(300) NOT NULL,
  `spread_title` varchar(100) NOT NULL,
  `spread_text` varchar(300) NOT NULL,
  PRIMARY KEY (`spread_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_spread`
--

INSERT INTO `tbl_spread` (`spread_id`, `spread_img`, `spread_title`, `spread_text`) VALUES
(1, 'm-card.jpg', 'Business Card', 'Business card for organ donation of Ontario                                        '),
(2, 'm-hoodi.png', 'hoodie', 'Our campaign\'s promotional product        '),
(3, 'stationery.png', 'Stationery', 'Our campaign\'s promotional product'),
(4, 'm-outside.jpg', 'Outside Billboard', 'Billboard on the building        '),
(5, 'm-fc.jpg', 'Facebook ', 'Our social account to post our events              '),
(7, 'm-ins.jpg', 'Instagram', 'Our social account to post our events');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_ip`) VALUES
(1, '123', 'ling', '000', '123@12.com', '2019-03-15 01:57:00', '::1'),
(6, 'Ling', 'dd', '123', 'azusakaworu@gmail.com', '2019-03-25 00:59:42', 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
