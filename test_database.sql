-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2017 at 11:40 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`) VALUES
(1, 'amal.jpg'),
(2, 'hoda.png'),
(3, 'hore.png');

-- --------------------------------------------------------

--
-- Table structure for table `selects`
--

CREATE TABLE `selects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `selects`
--

INSERT INTO `selects` (`id`, `title`, `parent`) VALUES
(1, 'اسيا', 0),
(2, 'افريقيا', 0),
(3, 'اوروبا', 0),
(6, ' كازاخستان', 1),
(7, 'الصين', 1),
(8, 'السعودية', 1),
(9, 'الكويت', 1),
(10, 'الامارات', 1),
(11, 'البحرين', 1),
(12, 'لبنان', 1),
(13, 'مصر', 2),
(14, 'السودان', 2),
(15, 'ليبيا', 2),
(16, 'الجزائر', 2),
(17, 'المغرب', 2),
(18, 'تونس', 2),
(19, 'موريتانيا', 2),
(20, 'بريطاينا', 3),
(21, 'فرنسا', 3),
(22, 'بلجيكيا', 3),
(23, 'سويسرا', 3),
(24, 'هولندا', 3),
(25, 'أكتاو', 6),
(26, 'أكتوبي', 6),
(27, 'ألماتي', 6),
(28, 'أركاليك', 6),
(29, 'أستانا', 6),
(30, 'بالخاش', 6),
(31, 'كيزيلوردا', 6),
(32, 'كوستناي', 6),
(33, 'كوكشيتو', 6),
(34, 'بافلودار', 6),
(35, 'شنغهاي', 7),
(36, 'بكين', 7),
(37, 'هونغ كونغ', 7),
(38, 'تيانجين', 7),
(39, 'ووهان', 7),
(40, 'قوانغتشو', 7),
(41, 'شينتشين', 7),
(42, 'شنيانغ', 7),
(43, 'تشونغتشينغ', 7),
(44, 'جينباي', 7),
(50, 'مكة المكرمة', 8),
(51, 'الرياض', 8),
(52, 'الخبر', 8),
(53, 'جدة', 8),
(54, 'الدمام', 8),
(55, 'محافظة العاصمة', 9),
(56, 'محافظة الأحمدي', 9),
(57, 'محافظة الفروانية', 9),
(58, 'محافظة الجهراء', 9),
(59, 'محافظة حولي', 9),
(60, 'دبي', 10),
(61, 'ابو ظبي', 10),
(62, 'العين', 10),
(63, 'الشارقة', 10),
(64, 'راس الخيمة', 10),
(65, 'المنامة', 11),
(66, 'المحرق', 11),
(67, 'بيروت', 12),
(68, 'البقاع', 12),
(69, 'القاهرة', 13),
(70, 'سينا', 13),
(71, 'الخرطوم', 14),
(72, 'أم درمان', 14),
(73, 'طرابلس', 15),
(74, 'بنغازي', 15),
(75, 'وهران', 16),
(76, 'عنابة', 16),
(77, 'طنجة', 17),
(78, 'تطوان', 17),
(79, 'صفاقس', 18),
(80, 'سوسة ', 18),
(81, 'نواكشوط', 19),
(82, 'أطار', 19),
(83, 'لندن', 20),
(84, 'مانشستر', 20),
(85, 'باريس', 21),
(86, 'ليون', 21),
(87, 'بروكسل', 22),
(88, 'بروج', 22),
(89, 'جنيف', 23),
(90, 'بازل', 23),
(91, 'امستردام', 24),
(92, 'لاهاي', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `address`, `gender`, `designation`, `age`, `image`) VALUES
(1, 'Bruce Tom', '656 Edsel Road\r\nSherman Oaks, CA 91403', 'Male', 'Driver', 36, '1.jpg'),
(5, 'Clara Gilliam', '63 Woodridge Lane\r\nMemphis, TN 38138', 'Female', 'Programmer', 24, '2.jpg'),
(6, 'Barbra K. Hurley', '1241 Canis Heights Drive\r\nLos Angeles, CA 90017', 'Female', 'Service technician', 26, '3.jpg'),
(7, 'Antonio J. Forbes', '403 Snyder Avenue\r\nCharlotte, NC 28208', 'Male', 'Faller', 32, '4.jpg'),
(8, 'Charles D. Horst', '1636 Walnut Hill Drive\r\nCincinnati, OH 45202', 'Male', 'Financial investigator', 29, '5.jpg'),
(175, 'Ronald D. Colella', '1571 Bingamon Branch Road, Barrington, IL 60010', 'Male', 'Top executive', 32, '6.jpg'),
(174, 'Martha B. Tomlinson', '4005 Bird Spring Lane, Houston, TX 77002', 'Female', 'Systems programmer', 38, '7.jpg'),
(161, 'Glenda J. Stewart', '3482 Pursglove Court, Rossburg, OH 45362', 'Female', 'Cost consultant', 28, '8.jpg'),
(162, 'Jarrod D. Jones', '3827 Bingamon Road, Garfield Heights, OH 44125', 'Male', 'Manpower development advisor', 64, '9.jpg'),
(163, 'William C. Wright', '2653 Pyramid Valley Road, Cedar Rapids, IA 52404', 'Male', 'Political geographer', 33, '10.jpg'),
(178, 'Sara K. Ebert', '1197 Nelm Street\r\nMc Lean, VA 22102', 'Female', 'Billing machine operator', 50, ''),
(177, 'Patricia L. Scott', '1584 Dennison Street\r\nModesto, CA 95354', 'Female', 'Urban and regional planner', 54, ''),
(179, 'James K. Ridgway', '3462 Jody Road\r\nWayne, PA 19088', 'Female', 'Recreation leader', 41, ''),
(180, 'Stephen A. Crook', '448 Deercove Drive\r\nDallas, TX 75201', 'Male', 'Optical goods worker', 36, ''),
(181, 'Kimberly J. Ellis', '4905 Holt Street\r\nFort Lauderdale, FL 33301', 'Male', 'Dressing room attendant', 24, ''),
(182, 'Elizabeth N. Bradley', '1399 Randall Drive\r\nHonolulu, HI 96819', 'Female', ' Software quality assurance analyst', 25, ''),
(183, 'Steve John', '108, Vile Parle, CL', 'Male', 'Software Engineer', 29, ''),
(184, 'Marks Johnson', '021, Big street, NY', 'Male', 'Head of IT', 41, ''),
(185, 'Mak Pub', '1462 Juniper Drive\r\nBreckenridge, MI 48612', 'Male', 'Mental health counselor', 40, ''),
(186, 'ali', '1462 Juniper Drive\r\nBreckenridge, MI 48612', 'Male', 'Mental health counselor', 40, ''),
(187, 'amal', 'amal', 'Female', 'amal', 99, ''),
(188, 'mona', 'mona', 'Female', 'mona', 44, ''),
(189, 'jana', 'jana', 'Female', 'jana', 33, ''),
(190, 'kaled', 'kaled', 'Male', 'kaled', 33, ''),
(191, 'ddaa', 'aa', 'Male', 'aa', 55, ''),
(192, 'qq', 'qq', 'Male', 'qq', 44, ''),
(193, 'ff', 'ff', 'Male', 'ff', 44, ''),
(194, 'kk', 'kk', 'Male', 'kk', 55, ''),
(195, 'rr', 'rr', 'Male', 'ww', 55, ''),
(196, 'ee', 'ee', 'Male', 'ee', 404, ''),
(197, 'oo', 'oo', 'Male', 'jj', 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `video_id` int(11) NOT NULL,
  `video_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`video_id`, `video_title`) VALUES
(1, 'How to generate simple random password in php?\r\n'),
(2, 'Create Simple Image using PHP\r\n'),
(3, 'How to check Username availability in php and MySQL using Ajax Jquery\r\n'),
(4, 'How to Insert Watermark on to Image using PHP GD Library\r\n'),
(5, 'Make SEO Friendly / Clean Url in PHP using .htaccess\r\n'),
(6, 'Live Table Add Edit Delete using Ajax Jquery in PHP Mysql\r\n'),
(7, 'How to Export MySQL data to Excel in PHP - PHP Tutorial\r\n'),
(8, 'How to Load More Data using Ajax Jquery\r\n'),
(9, 'Dynamically Add / Remove input fields in PHP with Jquery Ajax\r\n'),
(10, 'Read Excel Data and Insert into Mysql Database using PHP\r\n'),
(11, 'How to Convert Currency using Google Finance in PHP\r\n'),
(12, 'Dynamically generate a select list with jQuery, AJAX & PHP\r\n'),
(13, 'How to get Multiple Checkbox values in php\r\n'),
(14, 'Ajax Live Data Search using Jquery PHP MySql\r\n'),
(15, 'Auto Save Data using Ajax, Jquery, PHP and Mysql\r\n'),
(16, 'How to Use Ajax with PHP for login with shake effect\r\n'),
(17, 'Facebook style time ago function using PHP\r\n'),
(18, 'Upload Resize Image using Ajax Jquery PHP without Page Refresh\r\n\r\n'),
(19, 'How to Search for Exact word match FROM String using RLIKE\r\n'),
(20, 'How To Create A Show Hide Password Button using Jquery\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`) VALUES
(1, 'saleh'),
(2, 'ali'),
(3, 'kaled'),
(4, 'omer'),
(5, 'amal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selects`
--
ALTER TABLE `selects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `selects`
--
ALTER TABLE `selects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
