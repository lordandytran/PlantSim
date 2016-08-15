-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: vergil.u.washington.edu:252525
-- Generation Time: Aug 15, 2016 at 03:16 PM
-- Server version: 5.5.18
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `445ProjDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `growth`
--

CREATE TABLE `growth` (
  `day` int(11) NOT NULL,
  `rose` double NOT NULL,
  `tulip` double NOT NULL,
  `chamomile` double NOT NULL,
  `calendula` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `growth`
--

INSERT INTO `growth` (`day`, `rose`, `tulip`, `chamomile`, `calendula`) VALUES
(1, 0.1, 0.01, 0.01, 0.01),
(2, 0.3, 0.03, 0.02, 0.05),
(3, 0.5, 0.06, 0.05, 0.09),
(4, 0.8, 0.1, 0.09, 1.2),
(5, 1, 1.2, 1.1, 1.4),
(6, 1.1, 1.3, 1.3, 1.7),
(7, 1.3, 1.5, 1.5, 2.1),
(8, 1.5, 1.7, 1.7, 2.4),
(9, 1.8, 1.9, 1.9, 2.7),
(10, 1.8, 2.2, 2.2, 3.1),
(11, 1.9, 2.3, 2.5, 3.5),
(12, 2.1, 2.4, 2.8, 3.8),
(13, 2.3, 2.6, 3.1, 4.1),
(14, 2.7, 2.7, 3.3, 4.4),
(15, 2.9, 2.9, 3.6, 4.7),
(16, 3.1, 3.1, 3.9, 5),
(17, 3.3, 3.3, 4.1, 5.4),
(18, 3.5, 3.4, 4.4, 5.9),
(19, 3.6, 3.6, 4.9, 6.3),
(20, 3.9, 3.7, 5.1, 6.7),
(21, 4.2, 3.8, 5.4, 6.9),
(22, 4.6, 3.9, 5.8, 7.2),
(23, 4.9, 4.1, 6.2, 7.6),
(24, 5.4, 4.3, 6.4, 8.1),
(25, 5.8, 4.4, 6.7, 8.5),
(26, 6.3, 4.5, 6.9, 8.9),
(27, 6.7, 4.7, 7.2, 9.5),
(28, 7.1, 4.8, 7.5, 10.1),
(29, 7.5, 5, 7.9, 10.7),
(30, 7.9, 5.2, 8.3, 11.2),
(31, 8.2, 5.3, 8.6, 11.7),
(32, 8.8, 5.4, 9, 12.2),
(33, 9.3, 5.6, 9.3, 12.9),
(34, 9.7, 5.8, 9.7, 13.6),
(35, 10.1, 5.9, 10.1, 14.1),
(36, 10.6, 6, 10.4, 14.7),
(37, 11, 6.2, 10.7, 15.3),
(38, 11.6, 6.3, 10.9, 15.9),
(39, 12.2, 6.5, 11.3, 16.7),
(40, 12.8, 6.6, 11.5, 17.9),
(41, 13.4, 6.7, 11.8, 18.7),
(42, 13.9, 6.9, 12.2, 19.4),
(43, 14.6, 7.2, 12.5, 20.3),
(44, 15.1, 7.5, 12.8, 21.2),
(45, 15.9, 7.7, 13.3, 22),
(46, 16.6, 7.9, 13.7, 23.2),
(47, 17.3, 8.2, 14.2, 24.1),
(48, 17.9, 8.5, 14.7, 26.3),
(49, 18.4, 8.7, 15.1, 28.5),
(50, 19.2, 9, 15.6, 30.4),
(51, 19.8, 9.5, 15.9, 32.1),
(52, 20.6, 9.9, 16.2, 34.6),
(53, 21.4, 10.4, 16.7, 36.2),
(54, 0, 10.6, 17.1, 38.9),
(55, 22.1, 10.8, 17.6, 41.1),
(56, 22.9, 11.3, 18, 43.2),
(57, 23.7, 11.7, 18.5, 45.7),
(58, 24.3, 12.3, 18.9, 47.1),
(59, 25.6, 12.9, 19.4, 49.3),
(60, 26.2, 13.5, 19.8, 51.2),
(61, 27.1, 14.1, 20.2, 53.4),
(62, 28.8, 14.8, 20.7, 55.5),
(63, 29.7, 15.5, 21.1, 57.2),
(64, 31.2, 16.2, 21.6, 59.7),
(65, 32.4, 16.9, 22.3, 61.1),
(66, 33.7, 17.7, 22.9, 63.1),
(67, 34.4, 18.4, 23.5, 65.2),
(68, 35.7, 19.2, 24.2, 66.9),
(69, 37.1, 20, 24.9, 68.7),
(70, 39.3, 20.9, 25.6, 69.8),
(71, 41.6, 21.7, 26.3, 71.7),
(72, 43.9, 22.6, 27, 72.5),
(73, 45.1, 23.1, 27.8, 74.1),
(74, 46.3, 23.8, 28.7, 75.4),
(75, 49.4, 24.6, 29.8, 76.7),
(76, 52.3, 25.4, 31.1, 77.9),
(77, 54.8, 26.8, 32.2, 78.7),
(78, 57, 27.3, 33.5, 79.1),
(79, 59.4, 27.9, 34.6, 81.1),
(80, 62.3, 28.4, 35.3, 81.9),
(81, 65.7, 29.2, 36.6, 82.2),
(82, 68.1, 29.9, 37.4, 82.8),
(83, 71.2, 30.2, 39, 83.3),
(84, 73.5, 30.7, 40.3, 84.1),
(85, 75.9, 31.3, 41.4, 84.7),
(86, 78.7, 31.8, 42.7, 85.3),
(87, 81.2, 32.3, 44.1, 86.5),
(88, 84.6, 32.9, 45.6, 87.3),
(89, 86.4, 33.1, 46.1, 87.9),
(90, 88.7, 33.7, 47.3, 88.1);

-- --------------------------------------------------------

--
-- Table structure for table `my_plants`
--

CREATE TABLE `my_plants` (
  `my_id` int(11) NOT NULL,
  `my_plant_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_plants`
--

INSERT INTO `my_plants` (`my_id`, `my_plant_id`) VALUES
(10, 17),
(10, 9),
(9, 23),
(9, 25),
(5, 5),
(5, 6),
(5, 7),
(5, 24),
(5, 9),
(5, 10),
(5, 11),
(5, 12),
(5, 13),
(5, 15),
(5, 16),
(5, 17),
(5, 18),
(5, 19),
(5, 20),
(5, 21),
(5, 23),
(12, 5),
(12, 6),
(12, 7),
(12, 24),
(12, 9),
(12, 10),
(12, 11),
(12, 12),
(12, 13),
(12, 15),
(12, 16),
(12, 17),
(12, 18),
(12, 19),
(12, 20),
(12, 21),
(12, 23),
(9, 5),
(9, 6),
(9, 7),
(9, 24),
(9, 9),
(9, 10),
(9, 11),
(9, 12),
(9, 13),
(9, 15),
(9, 16),
(9, 17),
(9, 18),
(9, 19),
(9, 20),
(9, 21),
(9, 23);

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `plant_id` int(11) NOT NULL,
  `plant_name` varchar(45) NOT NULL,
  `genus` varchar(45) DEFAULT NULL,
  `species` varchar(45) DEFAULT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`plant_id`, `plant_name`, `genus`, `species`, `url`) VALUES
(18, 'Cornflower', 'Centaurea', 'cyanus', ''),
(17, 'Coneflower', 'Echinacea', 'angustifolia', ''),
(25, 'Christmas Rose', 'Helleborus', 'niger', ''),
(15, 'Chincherinchee', 'Ornithogalum', 'thyrsoides', ''),
(13, 'Blue Throatwort', 'Trachelium', 'caerulem', 'https://en.wikipedia.org/wiki/Trachelium_caeruleum'),
(12, 'Chrysanthemum', 'Chrysanthemum', 'indicum', ''),
(11, 'Canterbury Bells', 'Campanul', 'medium', 'https://en.wikipedia.org/wiki/Campanula_medium'),
(10, 'Bleeding Heart', 'Lamprocapnos', 'spectabilis', ''),
(9, 'Bird of Paradise', 'Strelitzia', 'reginae', ''),
(5, 'African Lily', 'Agapanthus', 'africanus', ''),
(7, 'March Lily', 'Amaryllis', 'belladonna', ''),
(6, 'Alpine Thistle', 'Cicerbita', 'alpina', ''),
(19, 'Daffoldil', 'Narcissus', 'poeticus', 'https://en.wikipedia.org/wiki/Narcissus_poeticus'),
(20, 'Evening Primrose', 'Calylophus', 'serrulatus', ''),
(23, 'Forget-me-not', 'Myosotis', 'scorpioides', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `pass`, `fullname`) VALUES
(6, 'Professor', 'e17aedfaa2f7c79f67c9d8f00220b798', 'Professor'),
(5, 'hello', '5d41402abc4b2a76b9719d911017c592', 'louis'),
(4, 'test', '5f4dcc3b5aa765d61d8327deb882cf99', 'test'),
(7, 'world', '7d793037a0760186574b0282f2f435e7', 'hello'),
(8, '1234', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
(9, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Andy'),
(10, 'andy', 'da41bceff97b1cf96078ffb249b3d66e', 'andy'),
(11, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(12, 'aa', '4124bc0a9335c27f086f24ba207a4912', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `growth`
--
ALTER TABLE `growth`
  ADD PRIMARY KEY (`day`),
  ADD UNIQUE KEY `day_UNIQUE` (`day`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`plant_id`),
  ADD UNIQUE KEY `plant_id_UNIQUE` (`plant_id`),
  ADD UNIQUE KEY `plant_name_UNIQUE` (`plant_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `growth`
--
ALTER TABLE `growth`
  MODIFY `day` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `plant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
