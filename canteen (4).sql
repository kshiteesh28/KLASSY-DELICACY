-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 11:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_info`
--

CREATE TABLE `bill_info` (
  `BILL_NO` int(11) NOT NULL,
  `CUST_ID` varchar(20) NOT NULL,
  `ORD_ID` varchar(20) DEFAULT NULL,
  `ORD_TIME` time NOT NULL DEFAULT current_timestamp(),
  `DATE` date NOT NULL,
  `TOTAL_AMOUNT` int(11) DEFAULT NULL,
  `STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_info`
--

INSERT INTO `bill_info` (`BILL_NO`, `CUST_ID`, `ORD_ID`, `ORD_TIME`, `DATE`, `TOTAL_AMOUNT`, `STATUS`) VALUES
(1, '19IS023', '22010809224619IS023', '01:52:46', '2022-01-09', 140, 'ACCEPT'),
(2, '19IS011', '22010809232019IS011', '01:53:21', '2022-01-09', 150, ''),
(3, '19IS023', '22010906551019IS023', '11:25:11', '2022-01-09', 150, ''),
(4, '1RF19IS008', '22011510104619IS008', '02:40:46', '2022-01-16', 230, 'ACCEPT'),
(13, '1RF19IS008', '22011606594219IS008', '11:29:42', '2022-01-16', 310, ''),
(14, '1RF19IS008', '22011607122419IS008', '11:42:24', '2022-01-16', 310, ''),
(15, '1RF19IS008', '22011607145519IS008', '11:44:56', '2022-01-16', 310, ''),
(16, '1RF19IS008', '22011607174219IS008', '11:47:42', '2022-01-16', 10, ''),
(17, '1RF19IS008', '22011607181519IS008', '11:48:15', '2022-01-16', 10, ''),
(18, '1RF19IS008', '22011607182819IS008', '11:48:28', '2022-01-16', 10, ''),
(19, '1RF19IS008', '22011607190019IS008', '11:49:00', '2022-01-16', 10, ''),
(20, '1RF19IS008', '22011607204119IS008', '11:50:41', '2022-01-16', 10, ''),
(21, '1RF19IS008', '22011607231119IS008', '11:53:12', '2022-01-16', 10, ''),
(22, '1RF19IS008', '22011607231519IS008', '11:53:15', '2022-01-16', 10, ''),
(23, '1RF19IS008', '22011607294919IS008', '11:59:49', '2022-01-16', 10, ''),
(24, '', '220116073106', '12:01:06', '2022-01-16', 0, ''),
(25, '', '220116073448', '12:04:48', '2022-01-16', 0, ''),
(26, '', '220116073453', '12:04:53', '2022-01-16', 0, ''),
(27, '', '220116073457', '12:04:57', '2022-01-16', 0, ''),
(28, '1RF19IS008', '22011607425919IS008', '12:12:59', '2022-01-16', 10, 'reject'),
(29, '1RF19IS008', '22011607511619IS008', '12:21:16', '2022-01-16', 320, 'ACCEPT'),
(30, '1RF19IS008', '22011611392519IS008', '16:09:25', '2022-01-16', 120, 'ACCEPT'),
(31, '1RF19IS008', '22011611493319IS008', '16:19:33', '2022-01-16', 0, 'reject'),
(32, '1RF19IS008', '22011611504419IS008', '16:20:44', '2022-01-16', 150, 'ACCEPT'),
(33, '1RF19IS008', '22011603264819IS008', '19:56:48', '2022-01-16', 90, 'REJECT'),
(36, '1RF19IS008', '22011704150219IS008', '08:45:02', '2022-01-17', 190, 'ACCEPT'),
(37, '1RF19IS008', '22011710160119IS008', '14:46:01', '2022-01-17', 210, ''),
(38, '1RF19IS008', '22011710175419IS008', '14:47:54', '2022-01-17', 210, 'reject'),
(39, '1RF19IS023', '22011806021519IS023', '10:32:15', '2022-01-18', 125, 'ACCEPT'),
(40, '1rf19is004', '22011806065119is004', '10:36:51', '2022-01-18', 40, 'REJECTED'),
(41, '1RF19IS023', '22011808563819IS023', '13:26:38', '2022-01-18', 210, 'ACCEPTED'),
(42, '1RF19IS011', '22011809023119IS011', '13:32:31', '2022-01-18', 380, 'ACCEPTED'),
(43, '1RF19IS011', '22011810083819IS011', '14:38:38', '2022-01-18', 490, 'ACCEPTED'),
(44, '1RF19IS023', '22011806494819IS023', '23:19:48', '2022-01-18', 220, 'ACCEPTED'),
(45, '', '220118065301', '23:23:01', '2022-01-18', 0, 'ACCEPTED'),
(46, '1RF19IS023', '22011807024419IS023', '23:32:44', '2022-01-18', 50, 'REJECTED'),
(47, '1rf19is052', '22011912142919is052', '16:44:30', '2022-01-19', 120, 'ACCEPTED'),
(48, '1rf19is052', '22011912230619is052', '16:53:07', '2022-01-19', 120, 'ACCEPTED'),
(49, '1rf19is052', '22011912283219is052', '16:58:32', '2022-01-19', 120, 'ACCEPTED'),
(50, '1rf19is052', '22011912300719is052', '17:00:07', '2022-01-19', 120, 'ACCEPTED'),
(51, '1rf19is052', '22011912312319is052', '17:01:23', '2022-01-19', 120, 'ACCEPTED'),
(52, '1rf19is052', '22011912383719is052', '17:08:37', '2022-01-19', 70, 'ACCEPTED'),
(53, '1rf19is052', '22011912395819is052', '17:09:58', '2022-01-19', 10, 'REJECTED'),
(54, '1rf19is004', '22011912421219is004', '17:12:12', '2022-01-19', 10, 'ACCEPTED'),
(55, '1rf19is024', '22012008221819is024', '12:52:19', '2022-01-20', 100, 'ACCEPTED'),
(56, '1rf19is004', '22013008231719is004', '12:53:17', '2022-01-30', 170, 'ACCEPTED'),
(57, '1RF19IS008', '22013112405319IS008', '17:10:53', '2022-01-31', 135, 'ACCEPTED'),
(58, '1RF19IS008', '22013101120319IS008', '17:42:04', '2022-01-31', 50, 'REJECTED'),
(59, '1rf19is004', '22013101130419is004', '17:43:04', '2022-01-31', 10, ''),
(60, '1RF19IS023', '22020309343719IS023', '14:04:37', '2022-02-03', 70, 'ACCEPTED'),
(61, '1RF19IS023', '22020309451719IS023', '14:15:17', '2022-02-03', 70, 'REJECTED'),
(62, '1rf19is004', '22022811281919is004', '15:58:19', '2022-02-28', 10, 'ACCEPTED');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ORD_ID` varchar(20) NOT NULL,
  `CUST_ID` varchar(20) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `SERVICE` varchar(20) NOT NULL,
  `FOOD` varchar(20) NOT NULL,
  `COMMENTS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ORD_ID`, `CUST_ID`, `NAME`, `SERVICE`, `FOOD`, `COMMENTS`) VALUES
('22011603264819IS008', '1RF19IS008', 'anjali', 'Very Satisfied', 'Satisfied', 'very tastyyyyyyy'),
('22011611504419IS008', '1RF19IS008', 'kst', 'Very Satisfied', 'Very Satisfied', 'no'),
('22011806021519IS023', '1RF19IS023', 'kshiteesh', 'Very Satisfied', 'Satisfied', 'Good food and quality..'),
('22011912421219is004', '1rf19is004', 'akash', 'Very Satisfied', 'Very Satisfied', 'Food is of great quality.!!'),
('22013008231719is004', '1rf19is004', 'ubaa', 'Very Satisfied', 'Very Satisfied', 'good, excellent and hygienic');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `FOOD_ID` varchar(20) NOT NULL,
  `FOOD_NAME` varchar(20) NOT NULL,
  `FOOD_TYPE` varchar(20) NOT NULL,
  `FOOD_PRICE` int(11) NOT NULL,
  `IMAGE` varchar(20) NOT NULL,
  `FOOD_DESC` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`FOOD_ID`, `FOOD_NAME`, `FOOD_TYPE`, `FOOD_PRICE`, `IMAGE`, `FOOD_DESC`) VALUES
('1rvbev01', 'coffee', 'Be_verage', 10, 'f5', 'There’s nothing quite like that first cup of coffee in the A.M. A few sips of the aromatic magic stuff later and you\'re suddenly awake and motivated to tackle your day head on.'),
('1rvbev02', 'Tea', 'Be_verage', 10, 'f9', 'Tea is an aromatic beverage prepared by pouring hot or boiling water over cured or fresh leaves of Camellia sinensis, an evergreen shrub native to China and other East Asian countries.'),
('1rvburger01', 'Burger', 'Your_Choice', 80, 'f7', 'My brain screams exercise, but my heart whispers cheeseburger.'),
('1rvchanna04', 'Channa masala', 'North_Indian', 70, 'f4', 'Chole bhature is a food dish popular in the Northern areas of the Indian subcontinent. It is a combination of chana masala (spicy white chickpeas) and bhatura, a fried bread made from maida.'),
('1rvchap01', 'chapati', 'North_Indian', 35, 'f3', 'Chapatis are made using a soft dough comprising wheat flour, salt and water. It is more finely ground than most western-style whole wheat flours.'),
('1rvdosa02', 'dosa', 'South_Indian', 40, 'f2', 'A dosa is a thin pancake or crepe originating from South India, made from a fermented batter predominantly consisting of lentils and rice. It is a Tamil dish belonging to Tamilnadu in India and then got familiarity in other South Indian states.'),
('1rvidli01', 'Idli', 'South_Indian', 30, 'f8', 'Idlis are a type of savoury rice cake, originating from the Indian subcontinent, popular as breakfast foods in Southern India and in Sri Lanka. The cakes are made by steaming a batter consisting of fermented black lentils and rice.'),
('1rvnoodle03', 'Noodles', 'Your_Choice', 50, 'f1', 'Noodles are a type of food made from unleavened dough which is rolled flat and cut, stretched or extruded, into long strips or strings.'),
('1rvpizza01', 'Pizza', 'Your_Choice', 70, 'f6', 'Pizza is a dish of Italian origin consisting of a usually round, flat base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients, which is then baked at a high temperature, traditionally in a wood-fired oven.'),
('1rvupma01', 'upma', 'South_Indian', 35, 'f11', 'Upma is a flavorful South Indian breakfast dish made from rava or cream of wheat.\r\nThis traditional dish involves cooking roasted rava in water that has been flavored by ghee , cashews, onion, ginger and additional herbs and spices.');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `USER_ID` varchar(20) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `PHONE` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`USER_ID`, `USERNAME`, `PASSWORD`, `PHONE`) VALUES
('1rf19is004', 'akash', '94754d0abb89e4cf0a7f1c494dbb9d2c', 988766554),
('1RF19IS008', 'anjali', 'abfa98e6182cf0fb8ad59c6f25665312', 778652419),
('1rf19is011', 'chinmay', '72264e113943a77136e9a82eecd01274', 2147483647),
('1rf19is023', 'kst', 'b192db6a46dd90ede0482b5109894e04', 2147483647),
('1rf19is024', 'pritesh bohra', 'd821e72d0b9f832d6cde431111057d96', 2147483647),
('1rf19is052', 'shivank', '05ac45c9e2a5491a67a1ea5c14df7bb2', 2147483647),
('1rvadmin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 771126543),
('1rvchef01', 'chef', 'cbb4581ba3ada1ddef9b431eef2660ce', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `ORD_ID` varchar(20) NOT NULL,
  `FOOD_ID` varchar(20) NOT NULL,
  `FOOD_NAME` varchar(30) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`ORD_ID`, `FOOD_ID`, `FOOD_NAME`, `QUANTITY`, `PRICE`) VALUES
('22010808443619IS008', '1rvitdosa', '', 1, 30),
('22010808443619IS008', '2rvit34', '', 2, 80),
('22010808450019IS023', '1rvitdosa', '', 2, 60),
('22010808450019IS023', '2rvit34', '', 2, 80),
('22010809224619IS023', '1rvitdosa', '', 2, 60),
('22010809224619IS023', '2rvit34', '', 2, 80),
('22010809232019IS011', '1rvitchapathi', '', 2, 60),
('22010809232019IS011', '1rvitdosa', '', 3, 90),
('22010906551019IS023', '1rvitchapathi', '', 4, 120),
('22010906551019IS023', '1rvitdosa', '', 1, 30),
('22011510104619IS008', '1rvbev01', '', 1, 10),
('22011510104619IS008', '1rvnoodle03', '', 3, 150),
('22011510104619IS008', '1rvpizza01', '', 1, 70),
('22011603264819IS008', '1rvbev02', '', 2, 20),
('22011603264819IS008', '1rvpizza01', '', 1, 70),
('22011606594219IS008', '1rvbev01', '', 1, 10),
('22011606594219IS008', '1rvburger01', '', 1, 80),
('22011606594219IS008', '1rvnoodle03', '', 3, 150),
('22011606594219IS008', '1rvpizza01', '', 1, 70),
('22011607122419IS008', '1rvbev01', '', 1, 10),
('22011607122419IS008', '1rvburger01', '', 1, 80),
('22011607122419IS008', '1rvnoodle03', '', 3, 150),
('22011607122419IS008', '1rvpizza01', '', 1, 70),
('22011607145519IS008', '1rvbev01', '', 1, 10),
('22011607145519IS008', '1rvburger01', '', 1, 80),
('22011607145519IS008', '1rvnoodle03', '', 3, 150),
('22011607145519IS008', '1rvpizza01', '', 1, 70),
('22011607174219IS008', '1rvbev02', '', 1, 10),
('22011607181519IS008', '1rvbev02', '', 1, 10),
('22011607182819IS008', '1rvbev02', '', 1, 10),
('22011607190019IS008', '1rvbev02', '', 1, 10),
('22011607204119IS008', '1rvbev02', '', 1, 10),
('22011607231119IS008', '1rvbev02', '', 1, 10),
('22011607231519IS008', '1rvbev02', '', 1, 10),
('22011607294919IS008', '1rvbev02', 'tea', 1, 10),
('22011607425919IS008', '1rvbev02', 'tea', 1, 10),
('22011607511619IS008', '1rvbev02', 'tea', 2, 20),
('22011607511619IS008', '1rvburger01', 'burger', 3, 240),
('22011607511619IS008', '1rvpasta01', 'pasta', 1, 60),
('22011611392519IS008', '1rvburger01', 'burger', 1, 80),
('22011611392519IS008', '1rvdosa02', 'dosa', 1, 40),
('22011611504419IS008', '1rvbev02', 'tea', 1, 10),
('22011611504419IS008', '1rvchanna04', 'channa masala', 2, 140),
('22011704150219IS008', '1rvburger01', 'burger', 2, 160),
('22011704150219IS008', '1rvidli01', 'idli', 1, 30),
('22011710160119IS008', '1rvpizza01', 'pizza', 3, 210),
('22011710175419IS008', '1rvpizza01', 'pizza', 3, 210),
('22011806021519IS023', '1rvbev01', 'coffee', 1, 10),
('22011806021519IS023', '1rvchap01', 'chapati', 1, 35),
('22011806021519IS023', '1rvdosa02', 'dosa', 2, 80),
('22011806065119is004', '1rvbev02', 'Tea', 1, 10),
('22011806065119is004', '1rvidli01', 'Idli', 1, 30),
('22011806494819IS023', '1rvchanna04', 'Channa masala', 1, 70),
('22011806494819IS023', '1rvnoodle03', 'Noodles', 3, 150),
('22011807024419IS023', '1rvnoodle03', 'Noodles', 1, 50),
('22011808563819IS023', '1rvchanna04', 'Channa masala', 1, 70),
('22011808563819IS023', '1rvpizza01', 'Pizza', 2, 140),
('22011809023119IS011', '1rvbev01', 'coffee', 2, 20),
('22011809023119IS011', '1rvburger01', 'Burger', 4, 320),
('22011809023119IS011', '1rvdosa02', 'dosa', 1, 40),
('22011810083819IS011', '1rvbev02', 'Tea', 1, 10),
('22011810083819IS011', '1rvmaggi01', 'maggi', 12, 480),
('22011912142919is052', '1rvidli01', 'Idli', 4, 120),
('22011912230619is052', '1rvidli01', 'Idli', 4, 120),
('22011912283219is052', '1rvidli01', 'Idli', 4, 120),
('22011912300719is052', '1rvidli01', 'Idli', 4, 120),
('22011912312319is052', '1rvidli01', 'Idli', 4, 120),
('22011912383719is052', '1rvchap01', 'chapati', 2, 70),
('22011912395819is052', '1rvbev01', 'coffee', 1, 10),
('22011912421219is004', '1rvbev02', 'Tea', 1, 10),
('22012008221819is024', '1rvbev01', 'coffee', 1, 10),
('22012008221819is024', '1rvbev02', 'Tea', 1, 10),
('22012008221819is024', '1rvburger01', 'Burger', 1, 80),
('22013008231719is004', '1rvdosa02', 'dosa', 3, 120),
('22013008231719is004', '1rvnoodle03', 'Noodles', 1, 50),
('22013101120319IS008', '1rvbev02', 'Tea', 1, 10),
('22013101120319IS008', '1rvdosa02', 'dosa', 1, 40),
('22013101130419is004', '1rvbev02', 'Tea', 1, 10),
('22013112405319IS008', '1rvbev01', 'coffee', 2, 20),
('22013112405319IS008', '1rvburger01', 'Burger', 1, 80),
('22013112405319IS008', '1rvchap01', 'chapati', 1, 35),
('22020309343719IS023', '1rvchap01', 'chapati', 1, 35),
('22020309343719IS023', '1rvupma01', 'upma', 1, 35),
('22020309451719IS023', '1rvchanna04', 'Channa masala', 1, 70),
('22022811281919is004', '1rvbev02', 'Tea', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` varchar(20) NOT NULL,
  `PERMISSIONS` varchar(20) NOT NULL,
  `WALLET` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `PERMISSIONS`, `WALLET`) VALUES
('1rf19is004', 'cust', 125),
('1RF19IS008', 'CUSTOMER', 220),
('1RF19IS011', 'customer', 120),
('1RF19IS023', 'CUSTOMER', 300),
('1rf19is024', 'customer', 50),
('1rf19is038', 'cust', 120),
('1rf19is052', 'customer', 10),
('1rvadmin', 'admin', 150),
('1rvchef01', 'chef', 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_info`
--
ALTER TABLE `bill_info`
  ADD PRIMARY KEY (`BILL_NO`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ORD_ID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`FOOD_ID`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`USER_ID`(10)),
  ADD KEY `login_details_ibfk_1` (`USER_ID`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`ORD_ID`,`FOOD_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_info`
--
ALTER TABLE `bill_info`
  MODIFY `BILL_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_details`
--
ALTER TABLE `login_details`
  ADD CONSTRAINT `login_details_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
