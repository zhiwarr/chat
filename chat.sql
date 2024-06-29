-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 03:45 PM
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
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `title`, `description`, `id`) VALUES
(44, '', '', 4),
(45, 'skdn', 'sdom', 4);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `send_id` int(11) NOT NULL,
  `receive_id` int(11) NOT NULL,
  `message_content` text NOT NULL,
  `send_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `send_id`, `receive_id`, `message_content`, `send_time`) VALUES
(64, 3, 4, 'hi', '2023-02-15 20:26:47'),
(65, 4, 3, 'spo', '2023-02-15 20:27:03'),
(66, 4, 3, 'aosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisah', '2023-02-15 20:30:38'),
(67, 4, 3, 'aosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisah', '2023-02-15 20:30:49'),
(68, 4, 3, 'aosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisah', '2023-02-15 20:32:04'),
(69, 4, 3, 'aosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisahaosihouhashsadhusahihisah', '2023-02-15 20:32:49'),
(70, 4, 3, 'hi', '2023-02-15 21:06:08'),
(71, 4, 3, 'hi', '2023-02-15 21:09:09'),
(72, 4, 3, 'hi', '2023-02-15 21:09:46'),
(73, 4, 3, 'sad', '2023-02-15 21:10:29'),
(74, 4, 3, 's', '2023-02-15 21:11:46'),
(75, 4, 3, 'ss', '2023-02-15 21:13:05'),
(76, 4, 3, 'ojpp', '2023-02-15 21:15:58'),
(77, 4, 3, 'sas', '2023-02-15 21:17:13'),
(78, 4, 3, 'asa', '2023-02-15 21:17:43'),
(79, 4, 47, 'iodsajod', '2023-02-15 21:19:20'),
(80, 4, 47, 'aa', '2023-02-15 21:19:27'),
(81, 4, 47, 'df', '2023-02-15 21:20:02'),
(82, 4, 47, 'hi', '2023-02-17 06:42:09'),
(83, 47, 4, 'hi', '2023-02-17 20:11:40'),
(84, 47, 4, '', '2023-02-17 20:11:40'),
(85, 47, 4, 'a', '2023-02-17 20:11:46'),
(86, 47, 4, '', '2023-02-17 20:11:46'),
(87, 47, 4, 'zhiwar', '2023-02-17 20:11:59'),
(88, 47, 4, '', '2023-02-17 20:11:59'),
(89, 47, 4, 'a', '2023-02-17 20:16:26'),
(90, 47, 4, 'b', '2023-02-17 20:16:34'),
(91, 50, 4, 'aa', '2023-02-18 08:23:30'),
(92, 51, 4, 'aa', '2023-02-18 08:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `send_request`
--

CREATE TABLE `send_request` (
  `iid` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `response_id` int(11) NOT NULL,
  `is_accept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `send_request`
--

INSERT INTO `send_request` (`iid`, `request_id`, `response_id`, `is_accept`) VALUES
(25, 50, 4, 1),
(26, 4, 47, 1),
(27, 4, 3, 0),
(28, 4, 53, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `age`, `gender`, `password`) VALUES
(3, 'zhyar', 'zhyar02@gmail.com', 21, 1, 'f9dcfc6f6908040ec446d02cf269adfcb95ef3747ef06e0202e71d00eadd13c7'),
(4, 'zhiwar', 'zhiwar04@gmail.com', 21, 1, 'f9dcfc6f6908040ec446d02cf269adfcb95ef3747ef06e0202e71d00eadd13c7'),
(47, 'yasin', 'yasin@gmail.com', 20, 1, '350a52d96153ef5daacfde291dab244bca7904810daafd7419659d06585bd598'),
(50, 'hawkar', 'hawkar@gmail.com', 22, 1, '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457'),
(51, 'gashtyar', 'gashtyar@gmail.com', 22, 1, '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457'),
(52, 'mahamad', 'mahamad@gmail.com', 22, 1, '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457'),
(53, 'aa', 'aa@gmail.com', 20, 2, '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457'),
(54, 'zhewarr', 'zhewar02@gmail.com', 20, 1, '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457'),
(55, 'zhiar', 'zhiar@gmail.com', 20, 1, '827e4ff5e7448b7fc43a27f1f4dd91a2c9daeba237a96f990654b611fcd5f5b2'),
(56, 'zhewi', 'zhuh0@gsok.com', 20, 1, 'd1f2f24c8b568b9202243db820be15daa039c6dd6633710b76cedb59da6fcc51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_request`
--
ALTER TABLE `send_request`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `send_request`
--
ALTER TABLE `send_request`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
