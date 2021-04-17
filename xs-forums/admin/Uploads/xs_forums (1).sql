-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 07:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xs_forums`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `regid` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `secondname` varchar(25) DEFAULT NULL,
  `address1` varchar(25) DEFAULT NULL,
  `address2` varchar(25) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `zipcode` varchar(25) DEFAULT NULL,
  `phone` varchar(25) NOT NULL,
  `alternateno` varchar(25) DEFAULT NULL,
  `stastus` varchar(25) NOT NULL DEFAULT 'valid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`regid`, `username`, `email`, `password`, `firstname`, `secondname`, `address1`, `address2`, `city`, `state`, `zipcode`, `phone`, `alternateno`, `stastus`) VALUES
(1, 'harikrishnan', 'harisgs07@gmail.com', '53eddd103ad199240d2125890555ebf9', 'harikrishnan', 'r', 'chirakrathundiy', 'sdfsfdsaf', '7', '2', '898989', '7012724158', '', 'valid'),
(2, 'harikrishnan', 'harisgs07@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 'hari', 'r', 'chirakarthundiyil', 'puliyoor', '2', '1', '689510', '7012724158', '9061129468', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `like_unlike`
--

CREATE TABLE `like_unlike` (
  `id` int(10) NOT NULL,
  `postid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `type` int(10) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_unlike`
--

INSERT INTO `like_unlike` (`id`, `postid`, `userid`, `type`) VALUES
(1, 1, 5, 1),
(2, 2, 5, 1),
(3, 2, 2, 0),
(4, 1, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `like_unlike_ans`
--

CREATE TABLE `like_unlike_ans` (
  `id` int(10) NOT NULL,
  `postid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `type` int(10) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_unlike_ans`
--

INSERT INTO `like_unlike_ans` (`id`, `postid`, `userid`, `type`) VALUES
(1, 1, 5, 0),
(2, 2, 5, 0),
(3, 3, 5, 0),
(4, 3, 2, 0),
(5, 1, 2, 1),
(6, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

CREATE TABLE `otp_expiry` (
  `id` int(11) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `is_expired` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `regid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', '(1) ACCEPTANCE OF TERMS\n\nWelcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: http://in.docs.yahoo.com/info/terms/. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service.\n\nWelcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: http://in.docs.yahoo.com/info/terms/. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service.\n\nWelcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: http://in.docs.yahoo.com/info/terms/. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service.'),
(2, 'Privacy Policy', 'privacy', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat'),
(3, 'About Us ', 'aboutus', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque \nsdugfiuasgdfigsadifugsiadfgisadugfiugsadfgiusad\ndsasdgadf'),
(11, 'FAQs', 'faqs', 'Address------Test    dsfdsfds\nokiikik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `acid` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `about` mediumtext DEFAULT NULL,
  `stastus` varchar(25) NOT NULL DEFAULT 'offline',
  `valid` int(10) NOT NULL DEFAULT 1,
  `regid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`acid`, `name`, `username`, `phone`, `about`, `stastus`, `valid`, `regid`) VALUES
(1, '', 'admina', NULL, NULL, 'offline', 1, 1),
(2, '', 'hario', NULL, NULL, 'online', 1, 2),
(3, '', 'admin', NULL, NULL, 'online', 1, 3),
(4, '', 'admin', NULL, NULL, 'online', 0, 4),
(5, '', 'admin', NULL, NULL, 'offline', 1, 5),
(6, '', 'admin', NULL, NULL, 'online', 0, 6),
(7, '', 'adminsad', NULL, NULL, 'online', 1, 3),
(8, '', 'admiholhoh', NULL, NULL, 'offline', 0, 4),
(9, '', 'admin', NULL, NULL, 'offline', 1, 5),
(10, '', 'haha', NULL, NULL, 'offline', 1, 6),
(11, '', 'adminsada', NULL, NULL, 'offline', 1, 7),
(12, '', 'adminsada', NULL, NULL, 'offline', 1, 8),
(13, '', 'adminsada', NULL, NULL, 'offline', 1, 9),
(14, '', 'admin', NULL, NULL, 'offline', 1, 10),
(15, '', 'adminsada', NULL, NULL, 'offline', 1, 11),
(16, '', 'admin', NULL, NULL, 'offline', 1, 12),
(17, '', 'admin', NULL, NULL, 'offline', 1, 13),
(18, '', 'adminsada', NULL, NULL, 'offline', 1, 14),
(19, '', 'adminsada', NULL, NULL, 'offline', 1, 15),
(20, '', 'admin', NULL, NULL, 'offline', 1, 16),
(21, '', 'admin', NULL, NULL, 'offline', 1, 17),
(22, '', 'admin', NULL, NULL, 'offline', 1, 18),
(23, '', 'admin', NULL, NULL, 'offline', 1, 19),
(24, '', 'admin', NULL, NULL, 'offline', 1, 20),
(25, '', 'admin', NULL, NULL, 'offline', 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cmpny_account`
--

CREATE TABLE `tbl_cmpny_account` (
  `compid` int(10) NOT NULL,
  `repname` varchar(25) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `about` text NOT NULL,
  `position` varchar(25) NOT NULL,
  `valid` int(10) NOT NULL DEFAULT 1,
  `stastus` varchar(25) NOT NULL DEFAULT 'offline',
  `regid` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cmpny_account`
--

INSERT INTO `tbl_cmpny_account` (`compid`, `repname`, `cname`, `phone`, `about`, `position`, `valid`, `stastus`, `regid`, `username`, `email`) VALUES
(1, '', '', '', '', '', 0, 'offline', 11, 'harisgs07', 'harisgsqq@gmail.com'),
(2, '', '', '', '', '', 1, 'offline', 14, 'class01', 'harisgs@gmail.com'),
(3, '', '', '', '', '', 0, 'offline', 15, 'class01', 'harisgs@gmail.com'),
(4, '', '', '', '', '', 0, 'offline', 23, 'admin', 'harisgs07s@gmail.com'),
(5, '', '', '', '', '', 0, 'offline', 2, 'admin', 'harisgs073@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `conid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'valid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`conid`, `name`, `email`, `phone`, `role`, `status`) VALUES
(1, 'harikrishnan r', 'harisgs07@gmail.com', '', '12312312', 'valid'),
(2, 'admin', 'harisgs07s@gmail.com', '7777777777', 'kllksadasd', 'valid'),
(3, 'admin', 'harisgs07@gmail.com', '8888888888', '12312312', 'invalid'),
(4, 'admin', '', '', '', 'valid'),
(5, 'admin', '', ', role=\'', '12312312', 'valid'),
(6, 'admin', '', ', role=\'', '12312312', 'invalid'),
(7, 'admin', 'sdsd@ds.ddssghghghgh', '', '', 'valid'),
(8, 'admin', 'harisgs07ddd@gmail.com', '9061129468', '', 'valid'),
(9, 'admin', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(10, 'admin', 'sdsd@ds.dds', '2314132', '12312312', 'valid'),
(11, 'admin', 'sdsd@ds.dds', '2314132', 'kllksadasd', 'valid'),
(12, 'admin', 'harisgs45@gmail.com', '2314132', 'kllksadasd', 'invalid'),
(13, 'admin', 'harisgs45@gmail.com', '2314132', 'kllksadasd', 'valid'),
(14, 'admin', 'harisgs45@gmail.com', '2314132', 'kllksadasd', 'invalid'),
(15, 'admin', 'harisgs45@gmail.com', '2314132', 'kllksadasd', 'valid'),
(16, 'admin', 'harisgs45@gmail.com', '2314132', 'kllksadasd', 'valid'),
(17, 'admin', 'harisgs45@gmail.com', '2314132', '12312312', 'valid'),
(18, 'admin', 'harisgs07@gmail.com', '2314132', '12312312', 'invalid'),
(19, 'admin', 'harisgs07@gmail.com', '2314132', '12312312', 'invalid'),
(20, 'admintgtg', 'harisgs07@gmail.com', '2314132', '12312312', 'invalid'),
(21, 'admintgtg', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(22, 'admin', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(23, 'admin', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(24, 'admin', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(25, 'admintgtg', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(26, 'admintgtg', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(27, 'admin', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(28, 'admin', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(29, 'admin', 'harisgs45@gmail.com', '2314132', '12312312', 'valid'),
(30, 'admin', 'harisgs45@gmail.com', '2314132', '12312312', 'valid'),
(31, 'admin', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(32, '', '', '', '', 'valid'),
(33, '', '', '', '', 'valid'),
(34, '', '', '', '', 'valid'),
(35, 'u', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(36, 'u', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(37, 'u', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(38, 'u', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(39, 'u', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(40, 'u', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(41, 'uu', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(42, 'uu', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(43, 'uu', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(44, 'uu', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(45, 'uu', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(46, 'uu', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(47, 'uu', 'harisgs45@gmail.com', '2314132', '12312312', 'valid'),
(48, 'uu', 'sdsd@ds.dds', '2314132', 'kllksadasd', 'valid'),
(49, 'uu', 'sdsd@ds.dds', '2314132', 'kllksadasd', 'valid'),
(50, 'uu', 'harisgs07@gmail.comasa', '2314132', 'hariii', 'valid'),
(51, 'u', 'harisgs07@gmail.com', '2314132', '12312312', 'valid'),
(52, 'uu', 'harisgs07@gmail.comdfsa', '2314132', '12312312', 'valid'),
(53, 'uu', 'harisgs07@gmail.comgrf', '2314132', '12312312', 'valid'),
(54, 'uu', 'harisgs07@gmail.comhh', '2314132', '12312312', 'valid'),
(55, 'uu', 'harisgs07@gmail.coms', '2314132', '12312312', 'valid'),
(56, 'uu', 'harisgs07@gmail.comht', '2314132', '12312312', 'valid'),
(57, 'uu', 'harisgs07@gsmail.com', '2314132', '12312312', 'valid'),
(58, 'uu', 'harisgs07@gmail.comww', '2314132', '12312312', 'valid'),
(59, 'uu', 'harisgs@gmail.com', '2314132', 'awwas', 'valid'),
(60, 'uu', 'a0@k.com', '2314132', 'kllksadasd', 'valid'),
(61, 'uu', 'haris07@gmail.com', '2314132', '12312312', 'valid'),
(62, 'uu', 'harisgs07@gmail.comDD', '2314132', '12312312', 'valid'),
(63, 'admin', 'har990@gmail.com', '7012724158', 'dsfsadf', 'valid'),
(64, 'admin', 'harisgs4444@gmail.com', '7012724158', '12312312', 'valid'),
(65, 'admin', 'harisgsww07@gmail.com', '7012724158', '12312312', 'valid'),
(66, 'hari', 'harikrishnan7@gmail.com', '7012724158', 'director', 'valid'),
(67, 'admin', 'harisgs0ffq7@gmail.com', '7012724158', '12312312', 'valid'),
(68, 'admin', 'harisgs072@gmail.com', '7012724158', 'kllkwewqeqwe', 'valid'),
(69, 'admin', 'harisgs037@gmail.com', '7012724158', '12312312', 'invalid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dist`
--

CREATE TABLE `tbl_dist` (
  `distid` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `stastus` varchar(25) NOT NULL DEFAULT 'valid',
  `stateid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dist`
--

INSERT INTO `tbl_dist` (`distid`, `name`, `stastus`, `stateid`) VALUES
(1, 'alappuzha', 'valid', 1),
(2, 'kottayam', 'valid', 1),
(3, 'tvm', 'valid', 1),
(4, 'ptn', 'valid', 1),
(5, 'ekm', 'valid', 1),
(6, 'thr', 'valid', 1),
(7, 'kararkoram', 'valid', 2),
(8, 'shisha', 'valid', 2),
(9, 'kalmkota', 'valid', 2),
(10, 'etumn', 'valid', 2),
(11, 'varnasi', 'valid', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enq_cmp`
--

CREATE TABLE `tbl_enq_cmp` (
  `enqid` int(10) NOT NULL,
  `regid` int(10) NOT NULL,
  `about` text NOT NULL,
  `date` date NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_enq_cmp`
--

INSERT INTO `tbl_enq_cmp` (`enqid`, `regid`, `about`, `date`, `status`) VALUES
(1, 1, 'sfdsfsfdsfsdfsff\r\ndsfsfsfdsfdfsdfgsfsf\r\nsdafsdafasfdfasdfsadf\r\ndfsadfasfdfsdfsdfsadfsdf', '2020-11-04', 0),
(2, 2, 'dasugofiosadgfopgasdo;fgasopdgfsdgfsgfugfugsdfigs\r\n\r\n546988469486984894', '2020-11-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enq_comp_ans`
--

CREATE TABLE `tbl_enq_comp_ans` (
  `enqansid` int(10) NOT NULL,
  `about_enq_ans` text NOT NULL,
  `adminid` int(10) NOT NULL,
  `enqid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_enq_comp_ans`
--

INSERT INTO `tbl_enq_comp_ans` (`enqansid`, `about_enq_ans`, `adminid`, `enqid`) VALUES
(1, 'sadasdsa', 2, 1),
(2, 'sadadasd', 2, 1),
(3, 'sdasdadasdadasd', 2, 1),
(4, 'asdadasdasdasdasdas', 2, 2),
(5, 'sxdasdasdsa', 2, 1),
(6, 'asdasdas', 2, 2),
(7, 'asdasdasdasd', 2, 1),
(8, '', 2, 2),
(9, 'ffghfghghbgfhgh', 2, 2),
(10, '', 2, 1),
(11, 'fdsfsdfoooooooooooooooo', 2, 1),
(12, 'cvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 2, 1),
(13, '', 2, 1),
(14, 'asdasd', 2, 1),
(15, 'qwsdadqd1111', 2, 1),
(16, 'sadadsa', 2, 1),
(17, 'ssadasd', 2, 2),
(18, 'zxa', 2, 1),
(19, 'adsfsdf', 2, 1),
(20, 'ss', 2, 2),
(21, 's', 2, 1),
(22, 'dgv', 2, 1),
(23, 'df', 2, 2),
(24, 'df', 2, 2),
(25, 'as', 2, 1),
(26, 'as', 2, 1),
(27, 'as', 2, 1),
(28, 'as', 2, 1),
(29, 'as', 2, 1),
(30, 'as', 2, 1),
(31, 'as', 2, 1),
(32, 'vxzvzdxdxz', 2, 1),
(33, 'vxzvzdxdxz', 2, 1),
(34, 'vxzvzdxdxz', 2, 1),
(35, 'vxzvzdxdxz', 2, 1),
(36, 'dsfsfsdfsdfsdf', 2, 1),
(37, 'dsfsfsdfsdfsdf', 2, 1),
(38, 'guiuioyuio', 2, 1),
(39, 'guiuioyuio', 2, 1),
(40, 'guiuioyuio', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `eventid` int(10) NOT NULL,
  `event_name` varchar(25) NOT NULL,
  `event_about` text NOT NULL,
  `event_starts` date NOT NULL,
  `event_ends` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`eventid`, `event_name`, `event_about`, `event_starts`, `event_ends`) VALUES
(1, 'qwer', 'sdgdfsgfdgsdfgdsfg\r\nsdfgsdfgdsfgsdfgsdfgsdfg\r\ndfbvcxbvb', '2021-01-27', '2021-01-28'),
(2, 'qwer', 'sdgdfsgfdgsdfgdsfg\r\nsdfgsdfgdsfgsdfgsdfgsdfg\r\ndfbvcxbvb', '2021-01-24', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedbackid` int(10) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `displayed` int(10) NOT NULL DEFAULT 0,
  `regid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedbackid`, `content`, `date`, `displayed`, `regid`) VALUES
(1, 'Feedback occurs when outputs of a system are routed back as inputs as part of a chain of cause-and-effect that forms a circuit or loop.[1] The system can then be said to feed back into itself. The notion of cause-and-effect has to be handled carefully when applied to feedback systems:', '2020-11-04', 1, 2),
(2, 'The English noun summary comes straight from the Latin neuter noun summārium “abridgment, abstract, epitome,” an extremely rare word used only once in the surviving Latin literature by the Roman author, tragedian, statesman, and Stoic philosopher Seneca (the Younger) in one of his Moral Letters to Lucilius (39), in which he complains “…what is now commonly called a ‘breviary’ [ breviārium ] was called, in the good old days, when we used to speak Latin, a ‘summary’ [ summārium ].\" (Complaints about the terrible state of the language are nothing new.)', '2020-12-08', 1, 2),
(3, 'hai there how its going', '2020-12-08', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file_stored_users`
--

CREATE TABLE `tbl_file_stored_users` (
  `fileid` int(10) NOT NULL,
  `location` varchar(50) NOT NULL DEFAULT '/Uploads',
  `file` varchar(225) NOT NULL,
  `regid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_file_stored_users`
--

INSERT INTO `tbl_file_stored_users` (`fileid`, `location`, `file`, `regid`) VALUES
(1, '/Uploads', '', 1),
(2, '/Uploads', '', 1),
(3, '/Uploads', '', 1),
(4, '/Uploads', '', 1),
(5, '/Uploads', '', 1),
(6, '/Uploads', '', 1),
(7, '/Uploads', '', 1),
(8, '/Uploads', '', 1),
(9, '/Uploads', '', 1),
(10, '/Uploads', '', 2),
(11, '/Uploads', '', 2),
(12, '/Uploads', '', 2),
(13, '/Uploads', '', 2),
(14, '/Uploads', 'ReviewofADAS-preprint.pdf', 2),
(15, '/Uploads', 'ReviewofADAS-preprint.pdf', 2),
(16, '/Uploads', 'Spicer_et_al_ADAS_evaluation_available_online.docx', 2),
(17, '/Uploads', 'Screenshot 2020-10-24 103756.png', 2),
(18, '/Uploads', 'Screenshot 2020-10-24 103756.png', 2),
(19, '/Uploads', 'Screenshot 2020-10-24 103756.png', 2),
(20, '/Uploads', 'Screenshot 2020-10-24 103756.png', 2),
(21, '/Uploads', 'Screenshot 2020-10-24 103756.png', 2),
(22, '/Uploads', '26.harikrishnanr-3-assgnmt.docx', 2),
(23, '/Uploads', '26harikrishnanecomopen.pdf', 2),
(24, '/Uploads', '26harikrishnanecomopen.pdf', 4),
(25, '/Uploads', 'Screenshot 2020-10-24 103756.png', 4),
(26, '/Uploads', '', 4),
(27, '/Uploads', 'seminar.docx', 4),
(28, '/Uploads', 'license.txt', 4),
(29, '/Uploads', '', 4),
(30, '/Uploads', 'license.txt', 4),
(31, '/Uploads', '160008', 4),
(32, '/Uploads', '34629', 4),
(33, '/Uploads', '9442151', 4),
(34, '/Uploads', 'Finalpublishedarticle_IEEE_August2016_RajeevThakurv2.pdf', 4),
(35, '/Uploads', '26.harikrishnanr-3-assgnmt.docx', 4),
(36, '/Uploads', 'IGIGlobal.pdf', 4),
(37, '/Uploads', 'DT20196012422_Application.pdf', 4),
(38, '/Uploads', 'Backstreet_Boys_-_Show_Me_The_Meaning_Of_Being_Lonely.mp4', 4),
(39, '/Uploads', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `listid` int(10) NOT NULL,
  `grpid` int(10) NOT NULL,
  `regid` int(10) NOT NULL,
  `regid_stastus` varchar(25) NOT NULL DEFAULT 'valid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`listid`, `grpid`, `regid`, `regid_stastus`) VALUES
(1, 1, 1, 'valid'),
(2, 1, 2, 'valid'),
(3, 1, 3, 'valid'),
(4, 2, 6, 'valid'),
(5, 2, 3, 'valid'),
(6, 3, 10, 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE `tbl_job` (
  `job_id` int(10) NOT NULL,
  `job_name` varchar(25) NOT NULL,
  `about` text NOT NULL,
  `reg_date_start` date NOT NULL,
  `reg_date_ends` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orgnl_group`
--

CREATE TABLE `tbl_orgnl_group` (
  `grpid` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `stastus` varchar(25) NOT NULL DEFAULT 'valid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orgnl_group`
--

INSERT INTO `tbl_orgnl_group` (`grpid`, `name`, `stastus`) VALUES
(1, 'hkr', 'valid'),
(2, 'shm', 'valid'),
(3, 'rk', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `postid` int(10) NOT NULL,
  `regid` int(10) NOT NULL,
  `about` text NOT NULL,
  `date` date NOT NULL,
  `viwed` int(10) NOT NULL DEFAULT 0,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`postid`, `regid`, `about`, `date`, `viwed`, `status`) VALUES
(1, 1, 'What’s your favorite way to spend a day off?', '0000-00-00', 1, 1),
(2, 1, 'Who is known as father of Zoology', '2020-11-04', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_ans`
--

CREATE TABLE `tbl_post_ans` (
  `ansid` int(10) NOT NULL,
  `regid` int(10) NOT NULL,
  `about` text NOT NULL,
  `ad_check` int(10) NOT NULL DEFAULT 0,
  `postid` int(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post_ans`
--

INSERT INTO `tbl_post_ans` (`ansid`, `regid`, `about`, `ad_check`, `postid`, `status`, `date`) VALUES
(1, 2, 'ITALY', 1, 1, 1, '2021-01-15'),
(2, 3, 'INDIA', 1, 1, 1, '2021-01-12'),
(3, 13, 'ARISTROTLE', 1, 2, 1, '2020-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg_users`
--

CREATE TABLE `tbl_reg_users` (
  `regid` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `verification` int(10) NOT NULL DEFAULT 0,
  `vid` varchar(25) DEFAULT NULL,
  `type` varchar(25) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reg_users`
--

INSERT INTO `tbl_reg_users` (`regid`, `email`, `password`, `verification`, `vid`, `type`) VALUES
(1, 'harisgs07@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 0, '', 'user'),
(2, 'harisgs073@gmail.com', '616870af9c7c67b80a2e910ea2a3865f', 0, '', 'company'),
(3, 'harisgs078@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 0, '', 'user'),
(4, 'harisgs08@gmail.com', '65af3aeab88efd39ec9568c3e28aee5b', 0, '', 'user'),
(5, 'harisgs077@gmail.com', '9ea47bc1383b5820c55eab6c95784b84', 0, '', 'user'),
(6, 'harikrishnanrc@mca.ajce.i', 'c03581e789d6b6d19633f5c1b4863357', 0, '', 'user'),
(7, 'harikrishnanrc@mca.ajce.i', 'c03581e789d6b6d19633f5c1b4863357', 0, '', 'user'),
(8, 'harikrishnanrc@mca.ajce.i', 'c03581e789d6b6d19633f5c1b4863357', 0, '', 'user'),
(9, 'harikrishnanrc@mca.ajce.i', 'c03581e789d6b6d19633f5c1b4863357', 0, '820360126', 'company'),
(10, 'harikrishnanrc@mca.ajce.i', 'c03581e789d6b6d19633f5c1b4863357', 0, '485364313', 'user'),
(11, 'harikrishnanrc@mca.ajce.i', 'c03581e789d6b6d19633f5c1b4863357', 0, '720001620', 'user'),
(12, 'harisgs07@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 0, '703356705', 'user'),
(13, 'harisgs07@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 0, '242255985', 'user'),
(14, 'harisgs07@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 0, '627868031', 'user'),
(15, 'harikrishnanrc@mca.ajce.i', 'c03581e789d6b6d19633f5c1b4863357', 0, '958999494', 'user'),
(16, 'harikrishnanrc@mca.ajce.i', 'c03581e789d6b6d19633f5c1b4863357', 0, '414920185', 'user'),
(17, 'shambhu7hari@gmail.com', '65af3aeab88efd39ec9568c3e28aee5b', 0, '929275667', 'user'),
(18, 'harisgs0788@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 0, '755343679', 'user'),
(19, 'harisgs07@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 0, '960590750', 'user'),
(20, 'harisgs07@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 0, '620626643', 'user'),
(21, 'harisgs107@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 0, '651039072', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `stateid` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `stastus` varchar(25) NOT NULL DEFAULT 'valid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`stateid`, `name`, `stastus`) VALUES
(1, 'kerala', 'valid'),
(2, 'goa', 'valid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `like_unlike`
--
ALTER TABLE `like_unlike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_unlike_ans`
--
ALTER TABLE `like_unlike_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`acid`);

--
-- Indexes for table `tbl_cmpny_account`
--
ALTER TABLE `tbl_cmpny_account`
  ADD PRIMARY KEY (`compid`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`conid`);

--
-- Indexes for table `tbl_dist`
--
ALTER TABLE `tbl_dist`
  ADD PRIMARY KEY (`distid`);

--
-- Indexes for table `tbl_enq_cmp`
--
ALTER TABLE `tbl_enq_cmp`
  ADD PRIMARY KEY (`enqid`);

--
-- Indexes for table `tbl_enq_comp_ans`
--
ALTER TABLE `tbl_enq_comp_ans`
  ADD PRIMARY KEY (`enqansid`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `tbl_file_stored_users`
--
ALTER TABLE `tbl_file_stored_users`
  ADD PRIMARY KEY (`fileid`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`listid`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `tbl_orgnl_group`
--
ALTER TABLE `tbl_orgnl_group`
  ADD PRIMARY KEY (`grpid`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `tbl_post_ans`
--
ALTER TABLE `tbl_post_ans`
  ADD PRIMARY KEY (`ansid`);

--
-- Indexes for table `tbl_reg_users`
--
ALTER TABLE `tbl_reg_users`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`stateid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `like_unlike`
--
ALTER TABLE `like_unlike`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `like_unlike_ans`
--
ALTER TABLE `like_unlike_ans`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `acid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_cmpny_account`
--
ALTER TABLE `tbl_cmpny_account`
  MODIFY `compid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `conid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_dist`
--
ALTER TABLE `tbl_dist`
  MODIFY `distid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_enq_cmp`
--
ALTER TABLE `tbl_enq_cmp`
  MODIFY `enqid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_enq_comp_ans`
--
ALTER TABLE `tbl_enq_comp_ans`
  MODIFY `enqansid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `eventid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedbackid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_file_stored_users`
--
ALTER TABLE `tbl_file_stored_users`
  MODIFY `fileid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `listid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_orgnl_group`
--
ALTER TABLE `tbl_orgnl_group`
  MODIFY `grpid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `postid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_post_ans`
--
ALTER TABLE `tbl_post_ans`
  MODIFY `ansid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_reg_users`
--
ALTER TABLE `tbl_reg_users`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `stateid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
