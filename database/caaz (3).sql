-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 02:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `severity` varchar(30) CHARACTER SET utf8 NOT NULL,
  `notes` varchar(200) CHARACTER SET utf8 NOT NULL,
  `case_num` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `employee_id`, `severity`, `notes`, `case_num`) VALUES
(7, '', 'حرج', '<p>لللللللللللللللللللللللللللللللللل</p>', '20200503220911.6471');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `joined` varchar(30) NOT NULL,
  `tmp` varchar(30) NOT NULL,
  `namek` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `name`, `surname`, `phone`, `email`, `gender`, `joined`, `tmp`, `namek`) VALUES
(4, '1938203', 'arnold', 'maruba', '263773891093', 'arnold.maruba@gmail.com', 'M', ' 10 Sep 2018 ', '5267', ''),
(5, '1029482', 'partmore', 'kapingura', '263712394859', 'teko@gmail.com', 'M', ' 10 Sep 2018 ', '6954', ''),
(6, '1038492', 'samuel', 'makota', '263775011617', 'sam.strover@yahoo.com', 'M', ' 10 Sep 2018 ', '7731', ''),
(7, '2063549', 'qqqqq', 'qqqqqqqq', '263776655442', 'ndbhalerao91@gmail.com', '?', ' 22 Apr 2020 ', '5155', ''),
(8, '3597554', 'tfght', 'tyht', '263776524120', 'dmdm.almalaky@gmail.com', 'F', ' 22 Apr 2020 ', '3562', ''),
(11, '1687292', 'qqqqq', 'mmmm', '263774366552', 'wwwww@gmail.com', 'F', ' 24 Apr 2020 ', '7138', ''),
(12, '7748243', 'qwefqwef', 'qerfefearv', '263775632140', 'erfsdfvesfddsef@rrsdfv.jk', 'F', ' 24 Apr 2020 ', '9112', ''),
(13, '6156782', 'tfg', 'qqqqqqqq', '263776452320', 'ndbhaleraggo91@gmail.com', 'F', ' 24 Apr 2020 ', '9581', ''),
(14, '4143551', '', '', '263', '', '', ' 27 Apr 2020 ', '1575', '');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `tmp` varchar(90) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `tmp`, `name`) VALUES
(2, '1301', 'user1301.jpg'),
(3, '5267', 'user5267.jpg'),
(4, '6954', 'user6954.jpg'),
(5, '7731', 'user7731.jpg'),
(6, '6476', 'user6476.jpg'),
(7, '7569', 'user7569.jpg'),
(8, '7138', 'user7138.jpg'),
(9, '9112', 'user9112.jpg'),
(10, '9581', 'user9581.jpg'),
(11, '1575', 'user1575.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(100) NOT NULL,
  `Timestamp` varchar(100) CHARACTER SET utf8 NOT NULL,
  `code` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Donor1` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Donor2` text CHARACTER SET utf8 NOT NULL,
  `Donor3` text CHARACTER SET utf8 NOT NULL,
  `Donor4` text CHARACTER SET utf8 NOT NULL,
  `Department` varchar(100) CHARACTER SET utf8 NOT NULL,
  `location` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` varchar(300) CHARACTER SET utf8 NOT NULL,
  `PR` varchar(300) CHARACTER SET utf8 NOT NULL,
  `details_English` varchar(300) CHARACTER SET utf8 NOT NULL,
  `details_Arabic` varchar(300) CHARACTER SET utf8 NOT NULL,
  `Amount_USD` varchar(300) CHARACTER SET utf8 NOT NULL,
  `Amount_SYP` varchar(300) CHARACTER SET utf8 NOT NULL,
  `Amount_TRY` varchar(300) CHARACTER SET utf8 NOT NULL,
  `Office` varchar(300) CHARACTER SET utf8 NOT NULL,
  `Payment_number` varchar(300) CHARACTER SET utf8 NOT NULL,
  `paid` varchar(300) CHARACTER SET utf8 NOT NULL,
  `Payment_date` varchar(300) CHARACTER SET utf8 NOT NULL,
  `Bank` varchar(300) CHARACTER SET utf8 NOT NULL,
  `SYP_Ex_rate` varchar(300) CHARACTER SET utf8 NOT NULL,
  `Contract` varchar(300) CHARACTER SET utf8 NOT NULL,
  `iii` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `Timestamp`, `code`, `date`, `Donor1`, `Donor2`, `Donor3`, `Donor4`, `Department`, `location`, `name`, `PR`, `details_English`, `details_Arabic`, `Amount_USD`, `Amount_SYP`, `Amount_TRY`, `Office`, `Payment_number`, `paid`, `Payment_date`, `Bank`, `SYP_Ex_rate`, `Contract`, `iii`) VALUES
(10, '', 'dfdfgthrthg', '2020-05-13', 'S1 20 8 ECHO', '', '', '', 'HR\r\n', 'photo-of-a-person-holding-cellular-phone-and-stylus-3773391.jpg', 'bbfd', 'dfbfdbf', '', '', '', '', '', 'Syria - Idleb\r\n', '', '', '', '', '', '', ''),
(11, '', '73253', '2020-05-14', 'Shared cost', '', '', '', 'HR\r\n', 'green-and-yellow-darts-on-brown-black-green-and-red-695266.jpg', 'admin', 'aa', '', '', '', '', '', 'Syria - Idleb\r\n', '', '', '', '', '', '', ''),
(12, '', '88754', '2020-05-15', '', '', '', '', 'HR\r\n', 'green-and-yellow-darts-on-brown-black-green-and-red-695266.jpg', 'malik9991QQ', 'dfbfdbf', 'aa', 'aa', '3', '4', '4', 'Syria - Idleb\r\n', '', '', '', '', '', '', ''),
(13, '', '84920', '2020-05-15', 'S1 20 3 OCHA FSL', 'S1 20 4 OCHA SNFI', 'S1 20 8 ECHO', '', 'Livelihood\r\n', 'black-board-bright-bullseye-226569.jpg', 'malik9991QQ', '222', '', 'aa', '22', '22', '22', 'Syria - Idleb\r\n', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `joined` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `permission` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `username`, `password`, `joined`, `type`, `permission`, `gender`, `phone`) VALUES
(7, 'admin', 'admin', 'admin@gmail.com', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', ' 09 Sep 2018 ', 'user', '1', 'M', '263774123998'),
(9, 'asdfgh', 'mmmm', 'ndbhalerao91@gmail.com', 'zxcvbn', '827ccb0eea8a706c4c34a16891f84e7b', ' 03 May 2020 ', 'user', '2', 'F', '263774362540');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
