-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 03:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywebsite_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `ID` int(11) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Image` text NOT NULL,
  `Title` text NOT NULL,
  `Content` text NOT NULL,
  `Des` text NOT NULL,
  `user_data_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`ID`, `Author`, `Date`, `Image`, `Title`, `Content`, `Des`, `user_data_id`) VALUES
(20, 'xxi_admin', '2022-07-06', '6986903982562_blog.jpg', 'Coding as a beginner', '7559076173335_blog.docx', 'The journey from beginner to being a coder!', 16),
(24, 'kn', '2022-07-25', '5249285770548_blog.jpg', 'My travels', '418569488144_blog.docx', 'A short blog about my travels around the world...', 17),
(25, 'xxi', '2022-07-25', '1283364305522_blog.jpg', 'naya hai ta', '6845991443158_blog.pdf', 'This is a report we did on wireshark a while back. I just posted this here for testing purposes.', 16),
(27, 'kn', '2022-07-27', '9916966365952_blog.jpg', 'The story of now', '294613768897_blog.pdf', 'This is the story of the present the story of now', 17),
(29, 'Parth Dhungana', '2022-07-27', '9071562530385_blog.jpg', 'The life of a student', '4196319432809_blog.pdf', 'This is also for testing purposes!!!', 19);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `comment_by` text NOT NULL,
  `comment_by_id` int(11) NOT NULL,
  `comment_on_bid` int(11) NOT NULL,
  `comment` text NOT NULL,
  `dateoc` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `comment_by`, `comment_by_id`, `comment_on_bid`, `comment`, `dateoc`) VALUES
(31, 'Kn', 17, 27, 'test', '2022-07-27 04:26:14'),
(33, 'Kn', 17, 25, 'k raicha', '2022-07-27 04:58:07'),
(35, 'Parth Dhungana', 19, 25, 'Let me comment here as well!!', '2022-07-27 05:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `About` text NOT NULL,
  `Profile_p` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`ID`, `Name`, `Email`, `Password`, `About`, `Profile_p`) VALUES
(16, 'xxi_admin', 'xxi@admin.com', 'bdf36e80c6d998105121fc3419887617', 'xxi_admin for testing main            ', '1566084825101_profile.jpg'),
(17, 'Kn', 'kn@gmail.com', '202cb962ac59075b964b07152d234b70', 'this is Kn', '2609783555_profile.jpg'),
(18, 'gemn21', 'gemn21@21.com', 'bdf36e80c6d998105121fc3419887617', 'I am the one and the only', '6002676616174_profile.jpg'),
(19, 'Parth Dhungana', 'parthdhungana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'I love to play game, listen to music and travel.', '255381041858_profile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
