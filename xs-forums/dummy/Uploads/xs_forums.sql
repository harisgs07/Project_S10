-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 09:12 AM
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
(5, 1, 2, 0),
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

--
-- Dumping data for table `otp_expiry`
--

INSERT INTO `otp_expiry` (`id`, `otp`, `is_expired`, `create_at`, `regid`) VALUES
(1, '159908', 0, '2021-01-28 16:54:44', 0),
(2, '166575', 0, '2021-01-28 16:55:03', 0),
(3, '237734', 0, '2021-01-28 16:55:12', 0),
(4, '208808', 0, '2021-01-28 19:03:18', 0),
(5, '888901', 0, '2021-01-28 19:23:06', 0),
(6, '771351', 0, '2021-01-28 19:25:05', 0),
(7, '295132', 0, '2021-01-28 19:26:11', 0),
(8, '271358', 0, '2021-01-28 19:27:26', 0),
(9, '747293', 0, '2021-01-28 19:31:13', 0),
(10, '287863', 0, '2021-01-28 19:32:46', 0),
(11, '163315', 0, '2021-01-28 19:36:41', 0),
(12, '977036', 0, '2021-01-28 19:37:42', 0),
(13, '687206', 0, '2021-01-28 19:45:35', 0),
(14, '505777', 0, '2021-01-28 19:45:52', 0),
(15, '850213', 0, '2021-01-28 19:58:33', 0),
(16, '683241', 0, '2021-01-28 20:07:23', 0),
(17, '204060', 0, '2021-01-28 20:11:30', 0),
(18, '243226', 0, '2021-01-28 20:13:57', 0),
(19, '582281', 0, '2021-01-29 16:11:49', 0),
(20, '305417', 0, '2021-01-29 16:19:26', 0),
(21, '221381', 0, '2021-01-29 16:28:04', 0),
(22, '122814', 0, '2021-01-29 16:29:28', 0),
(23, '238675', 0, '2021-01-29 16:39:16', 0),
(24, '110461', 0, '2021-01-29 16:40:09', 0),
(25, '593340', 0, '2021-01-29 16:40:52', 0),
(26, '345502', 0, '2021-03-15 14:06:11', 0),
(27, '988113', 0, '2021-03-19 09:50:16', 0),
(28, '594491', 0, '2021-03-19 09:52:01', 0),
(29, '633084', 0, '2021-03-19 09:52:10', 0),
(30, '337523', 0, '2021-03-19 10:43:15', 0),
(31, '531505', 0, '2021-03-19 10:44:01', 0),
(32, '570362', 0, '2021-03-19 10:44:26', 0),
(33, '550377', 0, '2021-03-19 10:53:31', 0),
(34, '141934', 0, '2021-03-19 10:53:48', 0);

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
(1, 'Terms and Conditions', 'terms', '(1) ACCEPTANCE OF TERMS\n\nWel'),
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
  `role` varchar(25) NOT NULL,
  `stastus` varchar(25) NOT NULL DEFAULT 'offline',
  `valid` int(10) NOT NULL DEFAULT 1,
  `regid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`acid`, `name`, `username`, `phone`, `about`, `role`, `stastus`, `valid`, `regid`) VALUES
(1, 'Jayakrishnan', 'jaya', '7891230564', 'dasdsadasdasdasdasdsad', '', 'offline', 0, 1),
(2, 'Ajith kumar', 'Ajith', '74896523156', NULL, '', 'offline', 0, 2),
(3, 'Har4inarayanan', 'harikuttan', '78889630277', NULL, '', 'offline', 1, 3),
(4, '', 'admin', NULL, NULL, '', 'offline', 0, 4),
(5, '', 'admin', NULL, NULL, '', 'offline', 1, 5),
(6, 'admin@r', 'harikrishnan', '8898989898', NULL, '', 'online', 1, 6),
(7, '', '', NULL, NULL, '', 'online', 1, 7),
(8, '', '', NULL, NULL, '', 'online', 1, 8),
(9, '', 'adminsada', NULL, NULL, '', 'offline', 1, 9),
(10, '', 'admin', NULL, NULL, '', 'offline', 1, 10),
(11, '', '', NULL, NULL, '', 'online', 1, 14),
(12, '', '', NULL, NULL, '', 'offline', 1, 15),
(13, '', '', NULL, NULL, '', 'online', 1, 16),
(14, '', 'Harikrishnan R', NULL, NULL, '', 'online', 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `chatid` int(10) NOT NULL,
  `chat` text NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL DEFAULT current_timestamp(),
  `regid` int(10) NOT NULL,
  `grpid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`chatid`, `chat`, `time`, `date`, `regid`, `grpid`) VALUES
(2, 'we all are doing greatwhat about you', '00:00:00', '0000-00-00', 2, 12),
(3, 'fine', '00:00:00', '0000-00-00', 1, 12),
(4, 'gowri did you do the work i ask for', '00:00:00', '0000-00-00', 6, 12),
(5, 'javshcahcvhajc', '09:08:01', '2021-03-26', 1, 12),
(6, 'javshcahcvhajc', '09:08:03', '2021-03-26', 6, 12),
(7, 'sadadasd', '09:08:20', '2021-03-26', 6, 12),
(8, 'asdsad', '09:08:56', '2021-03-26', 6, 12),
(9, 'assad', '09:13:51', '2021-03-26', 6, 12),
(10, 'asdasdasdasd', '09:16:46', '2021-03-26', 6, 12),
(11, 'e', '09:17:05', '2021-03-26', 6, 12),
(12, 'r', '09:20:01', '2021-03-26', 6, 12),
(13, 'at', '09:22:24', '2021-03-26', 6, 12),
(14, 'er', '09:23:24', '2021-03-26', 6, 12),
(15, 'sa', '09:23:43', '2021-03-26', 6, 12),
(16, 'eeee', '09:24:05', '2021-03-26', 6, 12),
(17, 'ererer', '09:26:14', '2021-03-26', 6, 12),
(18, 'tyy', '09:29:39', '2021-03-26', 6, 12),
(19, 'errrrrrrr', '09:30:54', '2021-03-26', 6, 12),
(20, 'wwwwwwwwww', '09:31:27', '2021-03-26', 6, 12),
(21, 'ty', '10:18:57', '2021-03-26', 6, 12),
(22, 'as', '10:19:47', '2021-03-26', 6, 12),
(23, 'ty', '10:23:31', '2021-03-26', 6, 12),
(24, 'rrr', '10:25:35', '2021-03-26', 6, 12),
(25, 'ui', '10:25:44', '2021-03-26', 6, 12),
(26, 'javshcahcvhajc', '10:26:40', '2021-03-26', 6, 12),
(27, 'vf', '10:26:52', '2021-03-26', 6, 12),
(28, '', '10:27:20', '2021-03-26', 6, 12),
(29, 'asdadasd', '10:27:31', '2021-03-26', 6, 12),
(30, 'javshcahcvhajc', '10:32:33', '2021-03-26', 6, 12),
(31, 'javshcahcvhajc', '10:32:34', '2021-03-26', 6, 12),
(32, 'javshcahcvhajc', '10:32:45', '2021-03-26', 6, 12),
(33, 'asdas', '10:32:50', '2021-03-26', 6, 12),
(34, 'dsfdf', '10:33:14', '2021-03-26', 6, 12),
(35, 'dsfdf', '10:33:29', '2021-03-26', 6, 12),
(36, 'asdasad', '10:33:50', '2021-03-26', 6, 12),
(37, 'asd', '10:34:09', '2021-03-26', 6, 12),
(38, 'asssss', '10:34:23', '2021-03-26', 6, 12),
(39, 'sass', '10:34:36', '2021-03-26', 6, 12),
(40, 'sass', '10:34:40', '2021-03-26', 6, 12),
(41, 'ss', '10:35:00', '2021-03-26', 6, 12),
(42, 'sss', '10:35:14', '2021-03-26', 6, 12),
(43, 'ddd', '10:35:25', '2021-03-26', 6, 12),
(44, 'sadasdasdsadasd', '10:35:31', '2021-03-26', 6, 12),
(45, 'sadasdasdsadasdasdad', '10:35:33', '2021-03-26', 6, 12),
(46, 'asdasdsad', '10:35:49', '2021-03-26', 6, 12),
(47, 'asdasdsad', '10:35:50', '2021-03-26', 6, 12),
(48, 'sadsad', '10:36:00', '2021-03-26', 6, 12),
(49, 'asdsadssssss', '10:36:13', '2021-03-26', 6, 12),
(50, 'fdasdfdsfsd', '10:36:19', '2021-03-26', 6, 12),
(51, 'fdasdfdsfsd', '10:36:20', '2021-03-26', 6, 12),
(52, 'asdfdsafasdf', '10:36:25', '2021-03-26', 6, 12),
(53, 'gffggf', '10:37:12', '2021-03-26', 6, 12),
(54, 'sdsa', '10:40:33', '2021-03-26', 6, 12),
(55, 'asdfdsafdsfsdf', '10:40:37', '2021-03-26', 6, 12),
(56, 'asdfdsafdsfsdf', '10:40:38', '2021-03-26', 6, 12),
(57, 'asdfdsafdsfsdfss', '10:40:41', '2021-03-26', 6, 12),
(58, 'sa', '10:41:04', '2021-03-26', 6, 12),
(59, 'sadasdas', '10:41:07', '2021-03-26', 6, 12),
(60, 'asdasdasd', '10:41:26', '2021-03-26', 6, 12),
(61, 'javshcahcvhajcas', '10:41:37', '2021-03-26', 6, 12),
(62, '', '10:41:52', '2021-03-26', 6, 12),
(63, 'sad', '10:42:54', '2021-03-26', 6, 12),
(64, 'sadsa', '10:43:50', '2021-03-26', 6, 12),
(65, 'sada', '10:45:31', '2021-03-26', 6, 12),
(66, 'ss', '10:46:14', '2021-03-26', 6, 12),
(67, 'ssxs', '10:46:17', '2021-03-26', 6, 12),
(68, 'sadasdad', '10:46:24', '2021-03-26', 6, 12),
(69, 'ttttt', '10:46:44', '2021-03-26', 6, 12),
(70, 'ttttt', '10:47:08', '2021-03-26', 6, 12),
(71, 'sadds', '10:50:21', '2021-03-26', 6, 12),
(72, 'sadds', '10:50:22', '2021-03-26', 6, 12),
(73, 'sadds', '10:50:22', '2021-03-26', 6, 12),
(74, 'asdadad', '10:50:32', '2021-03-26', 6, 12),
(75, 'asdadad', '10:50:33', '2021-03-26', 6, 12),
(76, 'asdadad', '10:50:34', '2021-03-26', 6, 12),
(77, 'asdadad', '10:50:34', '2021-03-26', 6, 12),
(78, 'asdadad', '10:50:35', '2021-03-26', 6, 12),
(79, 'asdadad', '10:50:35', '2021-03-26', 6, 12),
(80, 'asdadad', '10:50:35', '2021-03-26', 6, 12),
(81, 'asdadad', '10:50:35', '2021-03-26', 6, 12),
(82, 'asdadad', '10:50:35', '2021-03-26', 6, 12),
(83, 'asdadad', '10:50:36', '2021-03-26', 6, 12),
(84, 'asdadad', '10:50:36', '2021-03-26', 6, 12),
(85, 'asdadad', '10:50:36', '2021-03-26', 6, 12),
(86, 'ds', '10:58:39', '2021-03-26', 6, 12),
(87, 'ds', '10:58:40', '2021-03-26', 6, 12),
(88, 'sdasd', '10:58:48', '2021-03-26', 6, 12),
(89, 'sdasd', '10:58:49', '2021-03-26', 6, 12),
(90, 'sdasd', '10:58:49', '2021-03-26', 6, 12),
(91, 'sdasdsdadf', '10:58:53', '2021-03-26', 6, 12),
(92, 'sdasdsdadfdsfadasf', '10:58:58', '2021-03-26', 6, 12),
(93, 'sdasdsdadfdsfadasfdsfdasfasdf', '10:59:01', '2021-03-26', 6, 12),
(94, 'asdfadsfdsf', '10:59:05', '2021-03-26', 6, 12),
(95, 'asdfadsaasdfad', '10:59:08', '2021-03-26', 6, 12),
(96, 'asdfsadsad', '10:59:12', '2021-03-26', 6, 12),
(97, 'sdsad', '10:59:14', '2021-03-26', 6, 12),
(98, 'as', '11:00:19', '2021-03-26', 6, 12),
(99, 'asdas', '11:00:23', '2021-03-26', 6, 12),
(100, 'asdasd', '11:00:26', '2021-03-26', 6, 12),
(101, 'sadasd', '11:00:28', '2021-03-26', 6, 12),
(102, 'rtt', '12:59:51', '2021-03-26', 6, 5),
(103, 'fdgfgf', '13:01:42', '2021-03-26', 6, 5),
(104, 'sakdbfkdbsfkjadsfasfasd\r\nfasdfjhaslkdfhlsdhkflasdhflksdl\'fkhdsf\r\nsdfasdlkfhlsdk;hfksad', '00:00:00', '0000-00-00', 2, 5),
(105, 'javshcahcvhajc', '13:02:53', '2021-03-26', 6, 5),
(106, 'yuittjroiiooi', '13:03:00', '2021-03-26', 6, 5),
(107, 'sdfdfsfsdf', '13:03:05', '2021-03-26', 6, 5),
(108, 'dsfaf', '13:19:49', '2021-03-26', 17, 1),
(109, 'sdfsadf', '13:19:53', '2021-03-26', 17, 1),
(110, 'sdfsdaf', '13:19:55', '2021-03-26', 17, 1),
(111, 'asasd', '13:21:52', '2021-03-26', 17, 1),
(112, 'asdasdsd', '13:21:55', '2021-03-26', 17, 1),
(113, 'asdsad', '13:21:57', '2021-03-26', 17, 1);

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
(1, 'Aravind', 'Aravind123', '7012724158', 'HR', 'HR', 0, 'offline', 11, 'harisgs07', 'harisgsqq@gmail.com'),
(2, 'Shailaja', 'poiuy', '9012724158', 'PO', 'PO', 1, 'offline', 14, 'class01', 'harisgs@gmail.com'),
(3, 'jadu', '78hkkr', '8529634568', 'PO', 'PO', 0, 'offline', 15, 'class01', 'harisgs@gmail.com'),
(4, 'siji', 'qwertyui', '8777634568', 'PO', 'PO', 0, 'offline', 23, 'admin', 'harisgs07s@gmail.com'),
(6, '', '', '', '', '', 1, 'offline', 11, '', ''),
(7, '', '', '', '', '', 1, 'online', 12, '', ''),
(8, '', '', '', '', '', 1, 'online', 13, '', '');

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
(1, 'harikrishnan r', 'harisgs07@gmail.com', '7856952359', 'HODff', 'invalid'),
(2, 'admin', 'harisgs07s@gmail.com', '7852365201', 'Tutor', 'valid'),
(3, 'admin', 'harisgs07@gmail.com', '4455663312', 'Instructor', 'invalid'),
(4, 'admin', 'harisgs67@gmail.com', '7485201236', 'principal', 'valid'),
(71, '', '', '', '', 'valid'),
(72, 'yuy', 'harisgs0745@gmail.com', '7012724158', 'ui', 'valid');

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
(40, 'guiuioyuio', 2, 1),
(41, 'yyyyyy', 2, 1),
(42, 'yyyyyy', 2, 1);

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
(1, 'qwer', 'sdgdfsgfdgsdfgdsfg\r\nsdfgsdfgdsfgsdfgsdfgsdfg\r\ndfbvcxbvb', '2021-01-27', '2021-04-29'),
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
(39, '/Uploads', '', 4),
(40, '/Uploads', '', 4),
(41, '/Uploads', '26NEW_PRJ_RPT_HARIKRISHNAN.pdf', 4),
(42, '/Uploads', '26NEW_PRJ_RPT_HARIKRISHNAN.pdf', 4),
(43, '/Uploads', '26NEW_PRJ_RPT_HARIKRISHNAN.pdf', 4),
(44, '/Uploads', 'BEN.pptx', 4),
(45, '/Uploads', '', 4),
(46, '/Uploads', '', 4),
(47, '/Uploads', 'review paper.pdf', 4),
(48, '/Uploads', 'review paper.pdf', 4),
(49, '/Uploads', 'review paper.pdf', 4),
(50, '/Uploads', 'review paper.pdf', 4),
(51, '/Uploads', 'jQuery-File-Upload-10.31.0 (1).zip', 0),
(52, '/Uploads', 'AdminLTE 3  Dashboard 2.pdf', 4),
(53, '/Uploads', 'jQuery-File-Upload-10.31.0 (1).zip', 0),
(54, '/Uploads', 'jQuery-File-Upload-10.31.0 (1).zip', 0),
(55, '/Uploads', 'jQuery-File-Upload-10.31.0 (1).zip', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `grpid` int(10) NOT NULL,
  `regid` int(10) NOT NULL,
  `prjctid` int(10) NOT NULL,
  `regid_stastus` varchar(25) NOT NULL DEFAULT 'valid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`grpid`, `regid`, `prjctid`, `regid_stastus`) VALUES
(1, 1, 1, 'valid'),
(2, 6, 1, 'valid'),
(3, 6, 1, 'valid'),
(4, 6, 1, 'valid'),
(5, 6, 1, 'valid'),
(6, 6, 1, 'valid'),
(7, 6, 1, 'valid'),
(8, 6, 1, 'valid'),
(9, 6, 1, 'valid'),
(10, 6, 1, 'valid'),
(11, 4, 1, 'valid'),
(12, 7, 5, 'valid'),
(13, 1, 5, 'valid'),
(14, 6, 5, 'valid'),
(15, 6, 5, 'valid'),
(16, 6, 5, 'valid'),
(17, 6, 5, 'valid'),
(18, 0, 3, 'valid'),
(19, 0, 9, 'valid'),
(20, 0, 4, 'valid'),
(21, 6, 5, 'valid'),
(22, 6, 11, 'valid'),
(23, 6, 1, 'valid'),
(24, 6, 1, 'valid'),
(25, 6, 1, 'valid'),
(26, 6, 5, 'valid'),
(27, 6, 1, 'valid'),
(28, 6, 5, 'valid'),
(29, 6, 5, 'valid'),
(30, 1, 12, 'valid'),
(31, 2, 12, 'valid'),
(32, 3, 12, 'valid'),
(33, 4, 12, 'valid'),
(34, 6, 1, 'valid'),
(35, 6, 12, 'valid'),
(36, 6, 12, 'valid'),
(37, 6, 5, 'valid'),
(38, 6, 9, 'valid'),
(39, 6, 11, 'valid'),
(40, 6, 3, 'valid'),
(41, 17, 1, 'valid');

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
(1, 'hkr', 'invalid'),
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
(1, 1, 'What’s your rt way to spend a day off?', '0000-00-00', 1, 1),
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
(1, 2, 'ITALY', 0, 1, 1, '2021-01-15'),
(2, 3, 'INDIA', 1, 1, 1, '2021-01-12'),
(3, 13, 'ARISTROTLE', 1, 2, 1, '2020-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prjct_file`
--

CREATE TABLE `tbl_prjct_file` (
  `prjfileid` int(10) NOT NULL,
  `file` varchar(225) NOT NULL,
  `about` varchar(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `regid` int(10) NOT NULL,
  `prjctid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_prjct_file`
--

INSERT INTO `tbl_prjct_file` (`prjfileid`, `file`, `about`, `date`, `regid`, `prjctid`) VALUES
(1, 'AdminLTE 3  Dashboard 2 (1).csv', 'sdsfdsf', '2021-03-25', 6, 2),
(2, 'Harikrishnan R_new.pdf', 'sdsfdsfsdaasda', '2021-03-25', 6, 1),
(3, 'Research Abstract Only.docx', 'asasassa', '2021-03-25', 6, 1),
(4, 'FLYER_2022-2023 Fulbright Fellowships for Indian citizens.pdf', 'fullbright', '2021-03-25', 6, 5),
(5, 'ABSTRACT FORMAT (1).docx', 'a', '2021-03-25', 6, 5),
(6, 'AdminLTE 3  Dashboard 2 (1).csv', 'gyhjlgul', '2021-03-25', 6, 5),
(7, '16111423863024_Harikrishnan R (6).pdf', 'wwww', '2021-03-25', 6, 12),
(182, 'Harikrishnan R_new.pdf', 'sdsfdsf', '2021-03-25', 6, 12),
(183, 'jQuery-File-Upload-10.31.0 (1).zip', 'sadasa', '2021-03-25', 6, 12),
(184, 'Harikrishnan R_new.pdf', 'sss', '2021-03-25', 6, 12),
(185, 'jQuery-File-Upload-10.31.0 (1).zip', 'asdsadasd', '2021-03-26', 6, 11),
(186, 'AdminLTE 3  Dashboard 2.pdf', 'assss', '2021-03-26', 6, 12),
(187, 'AdminLTE 3  Dashboard 2.pdf', 'ty', '2021-03-26', 6, 11),
(188, 'Research Abstract Only.docx', 'ZXC', '2021-03-26', 6, 12),
(189, '16111423863024_Harikrishnan R (6).pdf', 'dsdfdfs', '2021-03-26', 6, 12),
(190, 'AdminLTE 3  Dashboard 2 (1).csv', 'ttttttttttttt', '2021-03-26', 6, 12),
(191, 'SEMINAR REPORT-Front pages.docx', 'sadaasadasd', '2021-03-26', 6, 5),
(192, 'jQuery-File-Upload-10.31.0 (1).zip', 'sd', '2021-03-26', 6, 5),
(193, 'Harikrishnan R_resume.pdf', 'dfgds', '2021-03-26', 17, 1),
(194, 'SEMINAR REPORT.pdf', 'dvs', '2021-03-26', 17, 1),
(195, 'PHPMailer-master.zip', 'saddssd', '2021-03-26', 17, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `prjctid` int(10) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `stastus` varchar(25) NOT NULL,
  `Client_Email` varchar(100) NOT NULL,
  `leader` varchar(25) NOT NULL,
  `total_members` int(10) NOT NULL,
  `start` date DEFAULT current_timestamp(),
  `end` date DEFAULT NULL,
  `active` int(10) NOT NULL DEFAULT 0,
  `regid` int(10) DEFAULT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`prjctid`, `name`, `description`, `stastus`, `Client_Email`, `leader`, `total_members`, `start`, `end`, `active`, `regid`, `amount`) VALUES
(1, 'first', 'sadadasdasdfjasdkfhsadhbfvlkasddhbvk;lasdhkv;lhbjasd;klvjbhasd;dkljvbhas;dkljvbhasdjhv;kalsdhvasdkohvvvvvvvvvvvas;dohvasdhvo sdvihasd ovhadso[ivhasdo[hvsoadih asd hgopasdhgoashdoghasdohgasdo ihgashd gasdi hg[oasidhgo sidhgo[sdhg[oashgoiasdgiasdhgoiasdh g[oasidh pghibhasd]f gha ', 'On Hold', 'harisgs07@gmail.com', 'hari', 7, '2021-03-03', '2021-03-01', 0, 1, 0),
(2, 'sdfasda', 'asdasdasd', 'On Hold', 'harisgs087@gmail.com', 'hari', 7, '0000-00-00', '2021-03-16', 0, 1, 0),
(3, 'sadasdasdsadasdasd', 'asdasdasd', 'On Hold', 'harisgs087@gmail.com', 'hari', 7, '0000-00-00', '0000-00-00', 0, 1, 0),
(4, 'sadasdasdsadasdasd', 'asdasdasd', 'Starting', 'harisgs087@gmail.com', 'hari', 7, '0000-00-00', '0000-00-00', 0, 1, 0),
(5, 'fd', 'df', 'On Hold', 'harisgs07@gmail.com', 'hari', 8, '0000-00-00', '0000-00-00', 0, 1, 0),
(6, 'as', 'asassa', 'Starting', 'harisgs07@gmail.com', 'hari', 2, '0000-00-00', '0000-00-00', 0, 1, 0),
(7, 'as', 'asdasdasd', 'On Hold', 'sadasd', 'hari', 6, '0000-00-00', '0000-00-00', 0, 1, 0),
(8, 'as', 'asdasdasd', 'On Hold', 'sadasd', 'hari', 6, '0000-00-00', '0000-00-00', 0, 3, 0),
(9, 'sadasd', 'asdasd', 'Starting', 'harisgs07@gmail.com', 'hari', 22, '0000-00-00', '0000-00-00', 0, 1, 0),
(10, 'asdada', 'dasdasd', 'Starting', 'harisgs07@gmail.com', 'hari', 3, '0000-00-00', '0000-00-00', 0, 1, 0),
(11, 'firstsadsadadsa', 'sadd', 'In Progress', 'harisgs07@gmail.com', 'hari', 6, '2021-03-25', NULL, 0, 8, 0),
(12, 'firstasdasda', 'asdadad', 'On Hold', 'harisgs07@gmail.com', 'hari', 8, '2021-03-25', NULL, 0, 6, 0),
(13, 'hai', 'sadfsdafsdfdsafsd', 'Starting', 'harisgs07@gmail.com', 'hari', 89, '2021-03-26', NULL, 0, 6, 0),
(14, 'second', 'sadasdasdasdasd', 'On Hold', 'harisgs07@gmail.com', 'hariop', 77, '2021-03-26', NULL, 0, 17, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects_job`
--

CREATE TABLE `tbl_projects_job` (
  `job_id` int(10) NOT NULL,
  `job_name` varchar(25) NOT NULL,
  `about` text NOT NULL,
  `reg_date_start` date NOT NULL,
  `reg_date_ends` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg_users`
--

CREATE TABLE `tbl_reg_users` (
  `regid` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `verification` int(10) NOT NULL DEFAULT 1,
  `vid` varchar(25) DEFAULT NULL,
  `type` varchar(25) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reg_users`
--

INSERT INTO `tbl_reg_users` (`regid`, `email`, `password`, `verification`, `vid`, `type`) VALUES
(1, 'jayasgs07@gmail.com', '7c5f697462487c3bd8a39ea9bb7c775a', 1, NULL, 'user'),
(2, 'Ajithsgs88@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 1, NULL, 'user'),
(3, 'harisgs007@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 1, NULL, 'user'),
(4, 'harisgs071@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 1, NULL, 'user'),
(5, 'harisgs074@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 1, NULL, 'user'),
(6, 'harisgs07@gmail.com', '65af3aeab88efd39ec9568c3e28aee5b', 1, NULL, 'user'),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', 1, NULL, 'user'),
(8, '', 'd41d8cd98f00b204e9800998ecf8427e', 1, NULL, 'user'),
(9, 'harisgs077@gmail.com', '753f2eac1a7aa2df4b366e2ef7fe5225', 1, NULL, 'user'),
(10, 'harisgs707@gmail.com', 'ba45d205a9ee8bdf4999d10301a82f90', 1, NULL, 'user'),
(11, '', '', 1, NULL, 'company'),
(12, '', 'd41d8cd98f00b204e9800998ecf8427e', 1, NULL, 'company'),
(13, '', 'd41d8cd98f00b204e9800998ecf8427e', 1, NULL, 'company'),
(14, '', 'd41d8cd98f00b204e9800998ecf8427e', 1, NULL, 'user'),
(15, '', 'd4922541faef68dc2aab40559c583ae9', 1, NULL, 'user'),
(16, '', 'd41d8cd98f00b204e9800998ecf8427e', 1, NULL, 'user'),
(17, 'harisgs101@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 1, NULL, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_share`
--

CREATE TABLE `tbl_share` (
  `shareid` int(10) NOT NULL,
  `send_recp_id` int(10) NOT NULL,
  `recv_recp_id` int(10) NOT NULL DEFAULT 0,
  `fileid` int(10) NOT NULL,
  `location` varchar(25) NOT NULL DEFAULT '/Uploads',
  `type` varchar(25) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_share`
--

INSERT INTO `tbl_share` (`shareid`, `send_recp_id`, `recv_recp_id`, `fileid`, `location`, `type`) VALUES
(1, 4, 1, 0, '/Uploads', '0'),
(2, 4, 2, 0, '/Uploads', '0'),
(3, 4, 1, 2, '/Uploads', '0'),
(4, 4, 2, 2, '/Uploads', '0'),
(5, 4, 1, 3, '/Uploads', '0'),
(6, 4, 2, 3, '/Uploads', '0'),
(7, 4, 3, 3, '/Uploads', '0');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_store_share_file`
--

CREATE TABLE `tbl_store_share_file` (
  `fileid` int(10) NOT NULL,
  `file` varchar(225) NOT NULL,
  `stastus` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_store_share_file`
--

INSERT INTO `tbl_store_share_file` (`fileid`, `file`, `stastus`) VALUES
(3, 'xs_forums (1).sql', 1),
(5, 'Current Status of the Project Details_Hari.docx', 1);

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
-- Indexes for table `otp_expiry`
--
ALTER TABLE `otp_expiry`
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
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`chatid`);

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
  ADD PRIMARY KEY (`grpid`);

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
-- Indexes for table `tbl_prjct_file`
--
ALTER TABLE `tbl_prjct_file`
  ADD PRIMARY KEY (`prjfileid`);

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`prjctid`);

--
-- Indexes for table `tbl_projects_job`
--
ALTER TABLE `tbl_projects_job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `tbl_reg_users`
--
ALTER TABLE `tbl_reg_users`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `tbl_share`
--
ALTER TABLE `tbl_share`
  ADD PRIMARY KEY (`shareid`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`stateid`);

--
-- Indexes for table `tbl_store_share_file`
--
ALTER TABLE `tbl_store_share_file`
  ADD PRIMARY KEY (`fileid`);

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
-- AUTO_INCREMENT for table `otp_expiry`
--
ALTER TABLE `otp_expiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `acid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `chatid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tbl_cmpny_account`
--
ALTER TABLE `tbl_cmpny_account`
  MODIFY `compid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `conid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

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
  MODIFY `enqansid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
  MODIFY `fileid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `grpid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
-- AUTO_INCREMENT for table `tbl_prjct_file`
--
ALTER TABLE `tbl_prjct_file`
  MODIFY `prjfileid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `prjctid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_projects_job`
--
ALTER TABLE `tbl_projects_job`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reg_users`
--
ALTER TABLE `tbl_reg_users`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_share`
--
ALTER TABLE `tbl_share`
  MODIFY `shareid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `stateid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_store_share_file`
--
ALTER TABLE `tbl_store_share_file`
  MODIFY `fileid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
