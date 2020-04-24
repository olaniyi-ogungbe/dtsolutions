-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2020 at 12:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtsolutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `port`
--

CREATE TABLE `port` (
  `port_id` int(3) NOT NULL,
  `port_date` date NOT NULL,
  `port_client` varchar(255) NOT NULL,
  `port_title` varchar(255) NOT NULL,
  `port_category` varchar(255) NOT NULL,
  `port_image` text NOT NULL,
  `port_content` varchar(255) NOT NULL,
  `port_website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `port`
--

INSERT INTO `port` (`port_id`, `port_date`, `port_client`, `port_title`, `port_category`, `port_image`, `port_content`, `port_website`) VALUES
(8, '2020-04-22', 'Hamoye', 'Rem', 'Mobile/Web Development', 'profile_2.png', 'hgdhdjjjs', 'boo.com'),
(10, '2020-04-23', 'Hamoye', 'Remhhh', 'Branding & Design', 'profile_3.png', '          drfcydgyo6tfrdju8yfjij;', 'boo.com'),
(13, '2020-04-23', '', 'JCXFM', 'Mobile/Web Development', '', '          ', ''),
(14, '2020-04-23', '', 'CGVHYGHJIO', 'Mobile/Web Development', '', '          ', ''),
(15, '2020-04-23', '', 'TDGUIGO6FYG7GYTK', 'Mobile/Web Development', '', '          ', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_category`) VALUES
(11, 'blue', '2020-04-22', 'preloader.gif', '          dxfjch;oiyghiouyg', 'java, script', 'Mobile/Web Development'),
(12, 'Blue', '2020-04-23', 'profile_1.png', '[;y8t;redfyu0[P;l', 'aye, go , scar', 'Branding & Design'),
(13, 'UG;UGG;G;UU;UI;U;U;U;UG;UG', '2020-04-23', '', '          ', '', 'Mobile/Web Development'),
(14, 'RFTI6Y6T', '2020-04-23', '', '          ', '', 'Mobile/Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(3) NOT NULL,
  `test_author` varchar(255) NOT NULL,
  `test_company` varchar(255) NOT NULL,
  `test_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_author`, `test_company`, `test_content`) VALUES
(8, 'Black', 'Google', 'jcfxhji;ogjki;bk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`port_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `port`
--
ALTER TABLE `port`
  MODIFY `port_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
