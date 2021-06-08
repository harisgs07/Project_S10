-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 03:22 PM
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
(34, '141934', 0, '2021-03-19 10:53:48', 0),
(35, '518598', 0, '2021-04-17 21:28:09', 0),
(36, '351516', 0, '2021-04-17 21:28:10', 0),
(37, '837407', 0, '2021-04-17 21:47:23', 0),
(38, '693434', 0, '2021-04-17 22:05:46', 0);

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
(1, 'Harikrishnan r', 'Harisgs', '9061129468', NULL, 'Software Engineer', 'offline', 1, 1),
(2, 'jayakrishnan', 'jayasgs', '7012724158', NULL, 'Mechanical Engineer', 'online', 1, 2),
(3, '', 'Ambily krishnan', NULL, NULL, 'Food Inspector', 'offline', 1, 3);

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
(1, 'first_try', '14:09:12', '2021-03-26', 1, 1),
(2, 'Hy whts about the project updation', '14:09:36', '2021-03-26', 1, 1),
(3, 'I just added a jquery zip file for project design', '14:10:29', '2021-03-26', 1, 1),
(4, 'wow!..what a tyming I was Waiting for the file ', '14:15:05', '2021-03-26', 2, 1),
(5, 'Thkzz lol...', '14:15:17', '2021-03-26', 2, 1),
(6, 'jdoodle.com/ia/bIy', '14:07:00', '2021-04-06', 2, 1),
(7, 'https://www.jdoodle.com/', '14:07:28', '2021-04-06', 2, 1),
(8, 'tyrtryrt', '19:56:13', '2021-04-06', 1, 1),
(9, 'tyy', '19:56:17', '2021-04-06', 1, 1),
(10, 'javshcahcvhajc', '00:30:34', '2021-04-07', 1, 1),
(11, 'rr', '12:07:55', '2021-04-12', 1, 2),
(12, '', '12:07:55', '2021-04-12', 1, 2),
(13, 'rr', '12:08:00', '2021-04-12', 1, 2),
(14, 'qw', '12:25:54', '2021-04-12', 2, 5),
(15, 'qw', '12:25:56', '2021-04-12', 2, 5),
(16, 'rty', '12:28:51', '2021-04-12', 2, 1),
(17, 'https://www.jdoodle.com/iembed/v0/c00', '12:34:33', '2021-04-12', 2, 1),
(18, 'we', '12:38:43', '2021-04-12', 1, 5);

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
(8, '', '', '', '', '', 1, 'online', 13, '', ''),
(9, '', '', '', '', '', 1, 'offline', 4, 'VR company', 'harisgs078@gmail.com');

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
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_enq_cmp`
--

INSERT INTO `tbl_enq_cmp` (`enqid`, `regid`, `about`, `date`, `status`) VALUES
(1, 1, 'sfdsfsfdsfsdfsff\r\ndsfsfsfdsfdfsdfgsfsf\r\nsdafsdafasfdfasdfsadf\r\ndfsadfasfdfsdfsdfsadfsdf', '2020-11-04', 0),
(2, 2, 'dasugofiosadgfopgasdo;fgasopdgfsdgfsgfugfugsdfigs\r\n\r\n546988469486984894', '2020-11-02', 0),
(3, 3, '', '2021-04-03', 1),
(4, 0, 'sdfggdsfgdgdsfgdsf', '2021-04-03', 1),
(5, 0, 'dvddsf', '2021-04-03', 1),
(6, 0, 'dfghdfgdfg', '2021-04-03', 1),
(7, 2, 'saasasasasasasa', '2021-04-03', 1),
(8, 0, 'ergffgfs', '2021-04-03', 1),
(9, 2, 'fgdhdfghdfghfdghdfgh', '2021-04-03', 1),
(10, 2, 'gfjhfhj', '2021-04-03', 1),
(11, 2, 'sfsdafsadfsadfasdfasdfasdfasdf889', '2021-04-03', 1),
(12, 2, 'qwertyuiuopp', '2021-04-16', 1),
(13, 2, 'qaetfgw123455', '2021-04-16', 1);

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
  `event_ends` date NOT NULL,
  `regid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`eventid`, `event_name`, `event_about`, `event_starts`, `event_ends`, `regid`) VALUES
(1, 'qwer', 'sdgdfsgfdgsdfgdsfg\r\nsdfgsdfgdsfgsdfgsdfgsdfg\r\ndfbvcxbvb', '2021-01-27', '2021-04-29', 1),
(2, 'qwer', 'sdgdfsgfdgsdfgdsfg\r\nsdfgsdfgdsfgsdfgsdfgsdfg\r\ndfbvcxbvb', '2021-01-24', '2021-01-27', 2),
(3, 'gfsdfgs', 'dfgdfgdfgdsfgsdf', '2021-04-12', '2021-04-27', 2);

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
(2, 2, 2, 'valid'),
(3, 2, 3, 'valid'),
(11, 1, 4, 'valid'),
(12, 1, 5, 'valid'),
(19, 1, 10, 'valid'),
(20, 3, 10, 'valid'),
(21, 1, 11, 'valid'),
(22, 2, 11, 'valid'),
(23, 3, 11, 'valid');

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
  `date` date NOT NULL DEFAULT current_timestamp(),
  `viwed` int(10) NOT NULL DEFAULT 0,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`postid`, `regid`, `about`, `date`, `viwed`, `status`) VALUES
(1, 1, 'What’s your rt way to spend a day off?', '0000-00-00', 1, 1),
(2, 2, 'Who is known as father of Zoology', '2020-11-04', 1, 1),
(4, 1, 'qweerguyjuioiuo asdfsdaghsjhsrtujfyjktyktyulotui;ui;lgtuyiltuklteydyjkeryjrt jrtj rtj rtj rtj rtsjsrjtrs rt', '2021-04-07', 1, 1),
(5, 1, 'qqqqqqqqqqqqqqqqqqqqq', '2021-04-07', 1, 1),
(6, 2, 'qqqwwwwwwwwwwww', '2021-04-12', 1, 1);

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
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post_ans`
--

INSERT INTO `tbl_post_ans` (`ansid`, `regid`, `about`, `ad_check`, `postid`, `status`, `date`) VALUES
(1, 2, 'ITALY', 0, 1, 1, '2021-01-15'),
(2, 3, 'INDIA', 1, 1, 1, '2021-01-12'),
(3, 1, 'ARISTROTLE', 1, 2, 1, '2020-11-02'),
(4, 1, 'we are greate to honor u', 0, 4, 1, '2021-04-07'),
(5, 1, 'dsdsds', 0, 4, 1, '2021-04-07'),
(6, 1, 's', 0, 4, 1, '2021-04-07'),
(7, 1, '', 0, 4, 1, '2021-04-07'),
(8, 1, '', 0, 4, 1, '2021-04-07'),
(9, 1, '', 0, 2, 1, '2021-04-07'),
(10, 1, '', 0, 1, 1, '2021-04-07'),
(11, 1, '', 0, 2, 1, '2021-04-07'),
(12, 1, 'sadssdsad', 0, 2, 1, '2021-04-07'),
(13, 1, 'p', 0, 1, 1, '2021-04-07'),
(14, 1, 'd', 0, 5, 1, '2021-04-07'),
(15, 1, 'https://www.jdoodle.com/', 0, 4, 1, '2021-04-07'),
(16, 2, 'qwerttyu', 0, 5, 1, '2021-04-12');

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
(2, 'data.csv', 'data for weka research', '2021-04-12', 1, 2),
(3, 'Harikrishnan R_resume.pdf', 'Resume', '2021-04-12', 2, 5),
(7, '26.harikrishnan_identity and access management.docx', '', '2021-04-17', 2, 1),
(8, 'pp.jpg', '', '2021-04-12', 2, 1),
(9, '26harikrishnanropen.pdf', '', '2021-04-17', 2, 1),
(10, 'profile.docx', '', '2021-04-17', 1, 1),
(11, 'xs_forums.sql', '', '2021-04-17', 2, 1),
(12, 'hh.csv', '', '2021-04-17', 2, 1),
(13, 'tbl_prjct_file.sql', '', '2021-04-17', 1, 1),
(14, 'testee.csv', '', '2021-04-17', 2, 1),
(15, 'kali.txt', '', '2021-04-17', 2, 1),
(16, 'XS-Forum  Reportii.pdf', '', '2021-04-17', 2, 1),
(17, '5394_FfAP8h_project_Abstract_Harikrishnan.docx', '', '2021-04-17', 2, 1);

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
  `end` int(10) DEFAULT NULL,
  `active` int(10) NOT NULL DEFAULT 0,
  `regid` int(10) DEFAULT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`prjctid`, `name`, `description`, `stastus`, `Client_Email`, `leader`, `total_members`, `start`, `end`, `active`, `regid`, `amount`) VALUES
(1, 'My_project_hari_po', 'developing a food deliverey app for the world where the need of need to be vanished.', 'On Hold', 'jayasgs07@gmail.com', 'hari', 0, '2021-03-26', NULL, 0, 2, 0),
(2, 'secondary check', 'nothing', 'Starting', 'harisgs07@gmail.com', 'hari kri', 7, '2021-04-07', NULL, 0, 1, 0),
(3, 'secc', 'hjk', 'In Progress', 'harisgs07@gmail.com', 'hari', 7, '2021-04-07', NULL, 0, 1, 0),
(4, 'firstxc', 'yuuii', 'On Hold', 'harisgs07@gmail.com', 'hari', 1, '2021-04-07', NULL, 0, 2, 0),
(5, 'rt', 'web development', 'In Progress', 'harisgs07@gmail.com', 'hari', 7, '2021-04-12', NULL, 0, 2, 0),
(6, '', '', '', '', '', 0, '2021-04-17', NULL, 0, 2, 0),
(7, '', '', '', '', '', 0, '2021-04-17', NULL, 0, 2, 0),
(8, 'sartyrtry', 'wqeqweqwewqeq', 'On Hold', 'harisgs07@gmail.com', 'hari', 4, '2021-04-17', NULL, 0, 2, 0),
(9, 'tyui', 'wertyui', 'Starting', 'harisgs007@gmail.com', 'hari', -1, '2021-04-17', NULL, 0, 2, 0),
(10, 'asdasdasd', 'asdasdasdasd', 'On Hold', 'harisgs07@gmail.com', 'hari', 2, '2021-04-17', NULL, 0, 2, 0),
(11, 'as', 'as', 'On Hold', 'harisgs07@gmail.com', 'hari', 2, '2021-04-25', NULL, 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects_job`
--

CREATE TABLE `tbl_projects_job` (
  `job_id` int(10) NOT NULL,
  `job_name` varchar(25) NOT NULL,
  `job_desc` text NOT NULL,
  `about` text NOT NULL,
  `reg_date_start` date NOT NULL,
  `reg_date_ends` date NOT NULL,
  `qualification` varchar(225) NOT NULL,
  `re` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_projects_job`
--

INSERT INTO `tbl_projects_job` (`job_id`, `job_name`, `job_desc`, `about`, `reg_date_start`, `reg_date_ends`, `qualification`, `re`) VALUES
(1, 'sdfsdfas', 'dfasdfasd', 'fasdfasd', '2021-04-16', '2021-04-20', 'fasdfasdfsadf', 2);

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
(1, 'harisgs07@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 1, NULL, 'user'),
(2, 'jayasgs07@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 1, NULL, 'user'),
(3, 'ambily@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 1, NULL, 'user'),
(4, 'harisgs078@gmail.com', 'c03581e789d6b6d19633f5c1b4863357', 1, NULL, 'company');

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

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `about` varchar(225) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `last_date` date NOT NULL,
  `regid` int(10) NOT NULL,
  `prjctid` int(10) NOT NULL,
  `check_check` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`id`, `about`, `post_date`, `last_date`, `regid`, `prjctid`, `check_check`) VALUES
(1, 'dsffhdfhdfhdfh\r\ndsfhsdfhdfhdfh', '0000-00-00', '2021-04-07', 1, 2, 0),
(2, 'poiiuyhpoipyup\r\nioupiopoipyio', '0000-00-00', '2021-04-22', 2, 1, 1),
(3, 'sdsfdsfsdaasda', '2021-04-25', '2021-04-29', 2, 1, 0),
(4, 'fullbright', '2021-04-25', '2021-05-09', 2, 1, 0),
(5, 'sdsfdsfsdfsadf', '2021-04-25', '2021-05-06', 2, 1, 1),
(6, '1222', '2021-04-25', '2021-05-10', 2, 1, 0);

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
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `acid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `chatid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_cmpny_account`
--
ALTER TABLE `tbl_cmpny_account`
  MODIFY `compid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `enqid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_enq_comp_ans`
--
ALTER TABLE `tbl_enq_comp_ans`
  MODIFY `enqansid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `eventid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `grpid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_orgnl_group`
--
ALTER TABLE `tbl_orgnl_group`
  MODIFY `grpid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `postid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_post_ans`
--
ALTER TABLE `tbl_post_ans`
  MODIFY `ansid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_prjct_file`
--
ALTER TABLE `tbl_prjct_file`
  MODIFY `prjfileid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `prjctid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_projects_job`
--
ALTER TABLE `tbl_projects_job`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_reg_users`
--
ALTER TABLE `tbl_reg_users`
  MODIFY `regid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

--
-- AUTO_INCREMENT for table `todolist`
--
ALTER TABLE `todolist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
