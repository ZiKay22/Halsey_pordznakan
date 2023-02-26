-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2023 at 12:36 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halsey`
--

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`, `description`, `link`) VALUES
(1, 'Halsey Carer', 'You Can Read About Halsey Carer in', 'index.html'),
(2, 'Halsey lyrics', 'You Can Read All Songs Texts In ', 's_txt.html'),
(3, 'Halsey album', 'You can see all albums in', 'albums.html'),
(4, 'Halsey songs', 'Yu Can Lisen And Download Halsey Songs In', 's_d.html'),
(5, 'Halsey and Alev Aydin', 'You Can Read About Halsey Personal Life in ', 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `s_d`
--

CREATE TABLE `s_d` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `s_url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_d`
--

INSERT INTO `s_d` (`id`, `name`, `s_url`) VALUES
(8, '1121', '1121.mp3'),
(10, '929', '929.mp3'),
(11, 'Beautiful Stranger  ', 'beautiful stranger.mp3'),
(12, 'Clementine', 'clementine.mp3'),
(13, 'Darling', 'Darling.mp3'),
(14, 'Dominic s Interlude', 'Dominic s Interlude.mp3'),
(15, 'Forever ... (is a long time)   Halsey', 'Forever ... (is a long time)   Halsey.mp3'),
(16, 'Good Morning   Halsey', 'Good Morning   Halsey.mp3'),
(17, 'Halsey - 3am (Visualizer)', 'Halsey - 3am (Visualizer).m4a'),
(18, 'Halsey - Angel On Fire', 'Halsey - Angel On Fire.mp3'),
(19, 'Halsey - Ashley ', 'Halsey - Ashley (Lyric Video).m4a'),
(20, 'Halsey - Bells in Santa Fe ', 'Halsey - Bells in Santa Fe (Lyric Video).m4a'),
(21, 'Halsey - Castle ', 'Halsey - Castle (Official Audio).m4a'),
(22, 'Halsey - Colors', 'Halsey - Colors.mp3'),
(23, 'Halsey - Coming Down ', 'Halsey - Coming Down (Audio).m4a'),
(24, 'Halsey - Control', 'Halsey - Control (Official Audio).m4a'),
(25, 'Halsey - Don’t Play ', 'Halsey - Don’t Play (Audio).m4a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_d`
--
ALTER TABLE `s_d`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `s_d`
--
ALTER TABLE `s_d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
