-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 11:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campustrackr`
--

-- --------------------------------------------------------

--
-- Table structure for table `track_found`
--

CREATE TABLE `track_found` (
  `found_id` int(11) NOT NULL,
  `found_fname` varchar(50) DEFAULT NULL,
  `found_lname` varchar(50) DEFAULT NULL,
  `found_email` varchar(50) DEFAULT NULL,
  `found_item` varchar(255) NOT NULL,
  `found_desc` varchar(255) DEFAULT NULL,
  `found_loc` varchar(255) DEFAULT NULL,
  `found_date` date NOT NULL,
  `found_time` time DEFAULT NULL,
  `found_msg` text DEFAULT NULL,
  `found_img` varchar(255) NOT NULL,
  `found_stat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `track_found`
--

INSERT INTO `track_found` (`found_id`, `found_fname`, `found_lname`, `found_email`, `found_item`, `found_desc`, `found_loc`, `found_date`, `found_time`, `found_msg`, `found_img`, `found_stat`) VALUES
(1, '', '', '', 'watch', 'wrist watch', 'library', '2023-07-09', '09:42:00', 'asdas', '../uploads/watch.jpg', 'Reported'),
(2, '', '', '', 'watch', 'wrist watch casio', 'library', '2023-07-09', '09:44:00', '', '../uploads/watch.jpg', 'Reported'),
(3, 'Bryce', 'Halnin', 'bsphalnin@campustrack', 'watch', 'wrist watch rolex', 'lobby', '2023-07-09', '09:46:00', '', '../uploads/watch.jpg', 'Reported'),
(4, 'Bryce', 'Halnin', 'bsphalnin@campustrack', 'watch', 'wrist watch rolex', 'lobby', '2023-07-09', '09:46:00', '', '../uploads/watch.jpg', 'Reported'),
(5, 'Bryce', 'Halnin', 'bsphalnin@campustrack', 'Aquaflask', 'thermal flask', 'Room 416', '2023-07-09', '11:49:00', 'Keeping it until weekend only', '../uploads/water-bottle.jpg', 'Reported'),
(7, 'Angela', 'Caraan', 'amgcaraan@campustrack', 'ball', 'Soccer Ball', 'Canteen', '2023-07-24', '10:53:00', '', '../uploads/football.jpg', 'Reported');

-- --------------------------------------------------------

--
-- Table structure for table `track_msg`
--

CREATE TABLE `track_msg` (
  `msg_id` int(11) NOT NULL,
  `msg_senderFname` varchar(255) NOT NULL,
  `msg_senderLname` varchar(255) NOT NULL,
  `msg_recFname` varchar(255) NOT NULL,
  `msg_recLname` varchar(255) NOT NULL,
  `msg_date` date NOT NULL,
  `msg_subj` varchar(255) NOT NULL,
  `msg_content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `track_msg`
--

INSERT INTO `track_msg` (`msg_id`, `msg_senderFname`, `msg_senderLname`, `msg_recFname`, `msg_recLname`, `msg_date`, `msg_subj`, `msg_content`) VALUES
(1, 'Bryce', 'Halnin', 'Angela', 'Caraan', '2023-07-24', 'Try', 'This is a try.'),
(2, 'Angela', 'Caraan', 'Bryce', 'Halnin', '2023-07-24', 'Ingoing', 'This is a try'),
(3, 'Bryce', 'Halnin', 'Angela', 'Caraan', '2023-07-24', 'API try', 'This is to try the Twilio API.'),
(40, 'Bryce', 'Halnin', 'Angela', 'Caraan', '2023-07-24', 'Claiming Lost Item', 'I believe you have found my lost item.');

-- --------------------------------------------------------

--
-- Table structure for table `track_user`
--

CREATE TABLE `track_user` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_uname` varchar(50) NOT NULL,
  `user_pword` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_sex` varchar(10) NOT NULL,
  `user_year` varchar(20) NOT NULL,
  `user_prog` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `track_user`
--

INSERT INTO `track_user` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_uname`, `user_pword`, `user_phone`, `user_sex`, `user_year`, `user_prog`) VALUES
(1, 'Bryce', 'Halnin', 'bsphalnin@campustrack', 'bsphalnin', '12345', '0123456789', 'male', 'Sophomore', 'BSCS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `track_found`
--
ALTER TABLE `track_found`
  ADD PRIMARY KEY (`found_id`);

--
-- Indexes for table `track_msg`
--
ALTER TABLE `track_msg`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `track_user`
--
ALTER TABLE `track_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `track_found`
--
ALTER TABLE `track_found`
  MODIFY `found_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `track_msg`
--
ALTER TABLE `track_msg`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `track_user`
--
ALTER TABLE `track_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
