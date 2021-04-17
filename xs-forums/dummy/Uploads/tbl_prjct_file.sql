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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_prjct_file`
--
ALTER TABLE `tbl_prjct_file`
  ADD PRIMARY KEY (`prjfileid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_prjct_file`
--
ALTER TABLE `tbl_prjct_file`
  MODIFY `prjfileid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
