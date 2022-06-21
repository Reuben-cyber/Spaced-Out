-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 14, 2021 at 04:35 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `space_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

DROP TABLE IF EXISTS `booked`;
CREATE TABLE IF NOT EXISTS `booked` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `space_id` varchar(5) NOT NULL,
  `u_id` varchar(5) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`b_id`),
  KEY `space_id` (`space_id`),
  KEY `u_id` (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`b_id`, `space_id`, `u_id`, `startDate`, `endDate`, `startTime`, `endTime`, `status`) VALUES
(15, '70', '19', '2020-12-04', '2020-12-04', '05:06:00', '06:07:00', 'accepted'),
(16, '70', '20', '2020-12-04', '2020-12-04', '05:30:00', '06:30:00', 'accepted'),
(17, '79', '20', '2020-12-04', '2020-12-04', '05:00:00', '06:00:00', 'waiting'),
(18, '83', '9', '2021-04-02', '2021-04-30', '05:00:00', '06:00:00', 'accepted'),
(19, '75', '8', '2020-12-29', '2020-12-31', '04:03:00', '05:45:00', 'waiting'),
(20, '74', '8', '2020-12-28', '2020-12-29', '04:05:00', '05:06:00', 'waiting'),
(21, '71', '8', '2020-12-26', '2020-12-27', '04:05:00', '06:05:00', 'waiting'),
(22, '76', '8', '2020-12-28', '2020-12-29', '04:05:00', '07:00:00', 'waiting'),
(23, '76', '8', '2020-12-29', '2020-12-30', '04:05:00', '05:04:00', 'waiting'),
(24, '76', '8', '2020-12-29', '2020-12-30', '04:05:00', '05:04:00', 'waiting'),
(25, '76', '8', '2020-12-28', '2020-12-29', '05:06:00', '06:05:00', 'waiting'),
(26, '76', '8', '2020-12-28', '2020-12-29', '03:04:00', '04:03:00', 'waiting'),
(27, '76', '8', '2021-01-01', '2021-01-02', '04:05:00', '05:04:00', 'waiting'),
(28, '75', '8', '2020-12-03', '2020-12-05', '17:04:00', '18:04:00', 'waiting'),
(29, '75', '8', '2020-12-04', '2020-12-06', '17:07:00', '19:07:00', 'waiting'),
(30, '71', '8', '2021-01-01', '2021-01-02', '19:08:00', '15:12:00', 'waiting'),
(31, '72', '8', '2021-01-02', '2021-01-03', '04:06:00', '06:04:00', 'waiting'),
(32, '70', '8', '2021-01-01', '2021-01-02', '04:05:00', '05:04:00', 'waiting'),
(33, '81', '21', '2021-01-03', '2021-01-04', '17:41:00', '18:41:00', 'waiting'),
(34, '74', '21', '2021-01-04', '2021-01-05', '05:07:00', '07:08:00', 'waiting'),
(35, '88', '20', '2021-03-24', '2021-03-25', '05:00:00', '06:00:00', 'accepted'),
(36, '90', '9', '2021-03-27', '2021-03-28', '05:00:00', '06:00:00', 'accepted'),
(37, '91', '9', '2021-03-27', '2021-03-28', '05:00:00', '07:00:00', 'accepted'),
(38, '92', '9', '2021-03-27', '2021-03-28', '05:00:00', '06:00:00', 'accepted'),
(39, '93', '31', '2021-03-29', '2021-03-30', '05:00:00', '07:00:00', 'accepted'),
(40, '94', '9', '2021-03-30', '2021-04-10', '05:00:00', '07:00:00', 'accepted'),
(41, '95', '41', '2021-06-17', '2021-06-18', '07:00:00', '08:00:00', 'accepted'),
(42, '96', '42', '2021-06-17', '2021-06-18', '07:00:00', '08:00:00', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`) VALUES
(1, 'Production'),
(2, 'Workspace'),
(3, 'Workshop'),
(4, 'Lounges'),
(5, 'Sports'),
(6, 'Banquets');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `ccid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `problem` text NOT NULL,
  `status` varchar(3) NOT NULL,
  PRIMARY KEY (`ccid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ccid`, `email`, `subject`, `problem`, `status`) VALUES
(18, 'reuben2000@outlook.com', 'issue', 'space not getting listed', 's'),
(19, 'reuben2000@outlook.com', 'Space not listing', 'my space is not getting listed', 's'),
(16, 'reuben2000@outlook.com', 'space issue', 'space was not as in the images', 's'),
(17, 'reuben2000@outlook.com', 'space was not as listed', 'was not satisfactory', 's');

-- --------------------------------------------------------

--
-- Table structure for table `space_list`
--

DROP TABLE IF EXISTS `space_list`;
CREATE TABLE IF NOT EXISTS `space_list` (
  `space_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `u_id` int(11) NOT NULL,
  `space_name` varchar(30) NOT NULL,
  `space_address` varchar(150) NOT NULL,
  `space_description` varchar(150) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `facility` varchar(50) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `image4` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `rper` varchar(6) NOT NULL,
  `verified` varchar(5) NOT NULL,
  PRIMARY KEY (`space_id`),
  KEY `u_id` (`u_id`),
  KEY `c_name` (`c_name`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `space_list`
--

INSERT INTO `space_list` (`space_id`, `c_name`, `u_id`, `space_name`, `space_address`, `space_description`, `phone`, `facility`, `image1`, `image2`, `image3`, `image4`, `price`, `rper`, `verified`) VALUES
(79, 'Workshop', 12, 'Eco workshops', 'Eco workshops,Sumukh Society, Shivajinagar, Pune, Maharashtra 411005', 'Have a great time by conducting workshops in these spaces', 9678234566, 'restroom,parking,wifi,', 'eco1.jpeg', 'eco2.jpeg', 'eco3.jpeg', 'eco4.jpeg', 3000, 'day', 'v'),
(76, 'Sports', 11, 'Aaryan Sports Club', 'Aaryan Sports Club,Kondhwa Budruk, Pune, Maharashtra 411048', 'Ground open for rent to play games ', 9860055509, 'restroom,parking,cafeteria,', 'aaryan3.jpeg', 'Aaryan (2).jpg', 'Aaryan (1).jpg', 'aaryan4.jpeg', 1000, 'hour', 'v'),
(74, 'Lounges', 11, 'Rude Lounge', 'Terrace, 6th Floor, Trade Net Building, Next to Phoenix Market city, Nagar Rd, Viman Nagar, Pune, Maharashtra 411014', 'Lounges to have a great time with your loved ones', 7738892802, 'restroom,parking,cafeteria,wifi,', 'rude (1).jpg', 'rude3.jpg', 'rude4.jpg', 'rude (2).jpg', 2000, 'hour', 'v'),
(75, 'Production', 11, 'LMB Productions', 'LMB Productions,Unit 2, Classico Bungalow, Plot. No.110, Near ICC office, opposite Sapna Pavbhaji lane, Lullanagar, Pune, Maharashtra 411040', 'Studio for photoshoots and production house', 9175959598, 'restroom,parking,cafeteria,wifi,', 'lmb (1).jpg', 'lmb (2).jpg', 'lmb3.jpg', 'lmb4.jpg', 2000, 'hour', 'v'),
(72, 'Sports', 8, 'SP College Sports Ground', 'SP College Sports Ground,Tilak Road, Sadashiv Peth, Pune, Maharashtra 411030', 'Ground open for rent to play games ', 24331978, 'restroom,parking,cafeteria,', 'sp (2).jpg', 'sp (1).jpg', 'sp4.jpeg', 'sp3.jpeg', 1000, 'hour', 'v'),
(73, 'Banquets', 11, 'Hotel Ajit Banquets', 'Hotel Ajit, 766, 3, Deccan Gymkhana Rd, Pune, Maharashtra 411004', 'Banquet hall open for rent for weddings,parties,corporates,etc.', 9822010444, 'restroom,parking,cafeteria,wifi,', 'ajit (1).jpg', 'ajit (2).jpg', 'ajit3.jpeg', 'ajit4.jpeg', 10000, 'day', 'v'),
(70, 'Lounges', 8, 'Ecstacy Bar & Eatery', 'Ecstacy Bar & Eatery,Sharao Lawns, Jijau Masaheb Marg, near MIT College, Rambaug Colony, Kothrud, Pune, Maharashtra 411038', 'Lounges to have a great time with your loved ones', 8956000011, 'restroom,parking,wifi,', 'ecsty (2).jpg', 'ecsty (1).jpg', 'ecstasy4.jpg', 'ecstasy3.jpg', 1000, 'hour', 'v'),
(71, 'Production', 8, '4K FILM PRODUCTIONS', '4K FILM PRODUCTIONS,Bilding No 2 Kudale Patil Complex Flat no 3 Manik Bag, Sinhgad Rd, Near Indian oil petrol pump, Pune, Maharashtra 411051', 'Studio for photoshoots and production house', 9673715324, 'restroom,parking,cafeteria,wifi,', '4k (1).jpg', '4k (2).jpg', '4k 3.jpg', '4k 4.jpg', 2000, 'hour', 'v'),
(65, 'Banquets', 13, 'Royal Banquets', 'Royal Banquets,1194/14 B, Modern Engineering College Rd, Sud Nagar, Shivajinagar, Pune, Maharashtra 411005', 'Banquet hall open for rent for weddings,parties,corporates,etc.', 9881258359, 'restroom,parking,cafeteria,wifi,', 'royal2.jpg', 'royal.jpg', 'royal4.jpeg', 'royal3.jpeg', 10000, 'day', 'v'),
(66, 'Lounges', 13, 'Mmyra Lounge', 'Mmyra Lounge,G4, Fergusson College Road, Opp Fergusson College Main Gate, Millennium Plaza, Pune, Maharashtra 411004', 'Lounges to have a great time with your loved ones', 8551820000, 'restroom,parking,wifi,', 'mmrya (2).jpg', 'mmrya (1).jpg', 'myra3.jpg', 'myra4.jpg', 2000, 'hour', 'v'),
(67, 'Production', 13, 'Mimo Productions', 'Mimo Productions,Kale Plaza, 215, Off, Jangali Maharaj Rd, near Panchmukhi Maruti Temple, Shivajinagar, Pune, Maharashtra 411005', 'Studio for photoshoots and production house', 8048053456, 'restroom,parking,wifi,', 'mimo (2).jpg', 'mimo (1).jpg', 'mimo4.jpg', 'mimo3.jpg', 2000, 'hour', 'v'),
(69, 'Banquets', 8, 'Shreyas Banquets', 'Shreyas Banquets,1233 D, Apte Road, Deccan Gymkhana, Shivajinagar, Pune, Maharashtra 411004', 'Banquet hall open for rent for weddings,parties,corporates,etc.', 2025532785, 'restroom,parking,cafeteria,wifi,', 'shreyas (2).jpg', 'shreyas (1).jpg', 'shreyas3.jpeg', 'shreyas4.jpeg', 10000, 'day', 'v'),
(81, 'Workspace', 9, 'CCW Pune - Coworking Space', 'CCW Pune,Unit No 04 Heavenly Homes Next To Cummins India and Iris Balewadi High Street Near Baner, Balewadi, Pune, Maharashtra 411045', 'Share your workspace with others', 9877675543, 'restroom,parking,cafeteria,wifi,', 'ccw.jpg', 'ccw.jpeg', 'ccw2.jpeg', 'ccw3.jpeg', 2000, 'month', 'v'),
(82, 'Workspace', 9, 'SECTOR 7 WORKSPACES PVT. LTD.', 'SECTOR 7 WORKSPACES,Office no. 405, 4th floor, Town Square Shopping Center, New Airport Rd, Mhada Colony, Viman Nagar, Pune, Maharashtra 411014', 'Share your workspace with others', 9820096242, 'restroom,parking,cafeteria,wifi,', 'sector7 (1).jpg', 'sector7 (2).jpg', 'sector3.jpeg', 'sector4.jpeg', 2000, 'month', 'v'),
(83, 'Workspace', 12, 'Divine Coworking space ', 'Divine Coworking space,Plot no. 26, Cosmos gardens, Next to The Learning Curve school Baner, Pune, Maharashtra 411045', 'Share your workspace with others', 9067675558, 'restroom,parking,cafeteria,wifi,', 'divine (1).JPG', 'divine (2).jpg', 'divine3.jpeg', 'divine4.jpeg', 2000, 'Day', 'v'),
(96, 'Sports', 42, 'Silver Sports Club', '166/5,Behind Vedanta Society,Shankar Kalat Nagar,Wakad, Pune, Maharashtra 411057', 'sports club', 8381000555, 'restroom,parking,cafeteria,wifi,', 'silver1.jpeg', 'silver2.jpeg', 'silver3.jpeg', 'silver4.jpeg', 500, 'Day', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `type` char(1) NOT NULL,
  `blocked` varchar(3) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `name`, `u_email`, `password`, `mobile`, `type`, `blocked`) VALUES
(9, 'padmashree', 'padmashree@gmail.com', 'padma123', 98230802, 'u', 'nb'),
(8, 'Aditya j', 'adityajanve@123.com', 'aditya123', 7030634000, 'u', 'nb'),
(40, 'ayushi', 'ayushi@123.com', 'ayushi', 9823080277, 'a', 'nb'),
(11, 'shubham gavhane', 'shubham@123.com', 'shubham123', 9823080277, 'u', 'nb'),
(12, 'aritro talukdar', 'aritro@123.com', 'aritro123', 9823080277, 'u', 'nb'),
(13, 'pushp mittal', 'pushp@123.com', 'pushp123', 9823080277, 'u', 'nb'),
(43, 'reuben', 'reuben2001@outlook.com', 'reuben', 9823080277, 'a', 'nb'),
(38, 'reuben', 'kurianreuben13@gmail.com', 'reuben', 9823080277, 'u', 'nb'),
(42, 'Manjusha', 'manjushawadekar.bmcc@despune.org', '123', 9823080277, 'u', 'nb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
