-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 07:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(5) NOT NULL,
  `category_id` int(5) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `blog_image` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `short_description`, `long_description`, `blog_image`, `status`) VALUES
(23, 15, 'Cricket', 'I like this game.', 'I like this game.', '../assets/images/cricket.jpg', '1'),
(24, 15, 'Football', 'Ronaldo play this game.', 'Ronaldo play this game.', '../assets/images/football.jpg', '1'),
(25, 15, 'Badminton', 'We love Badminton.', 'We love Badminton.', '../assets/images/badminton.jpg', '1'),
(26, 16, 'Facebook', 'We love Facebook.', 'We love Facebook.', '../assets/images/f.png', '1'),
(27, 16, 'LinkedIn', 'LinkedIn Is a social communication website.', 'LinkedIn Is a social communication website.', '../assets/images/l.png', '1'),
(28, 16, 'Twitter', 'Twitter is also a website.', 'Twitter is also a website.', '../assets/images/twitter.jpg', '0'),
(29, 18, 'PHP', 'I am a PHP developer.', 'I am a PHP developer.', '../assets/images/PHP.jpg', '1'),
(35, 18, 'Java', 'java is powerful.', 'java is powerful.', '../assets/images/java.jpg', '0'),
(36, 15, ' XC zc', 'sacaszc', 'ascsac', '../assets/images/IIT.jpg', '0'),
(37, 17, 'Shofia', 'Shofia', 'Shofia', '../assets/images/google.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `status`) VALUES
(15, 'Sports', 'We love Sports.', '1'),
(16, 'Website', ' Website is the backbone of  IIT industry.', '1'),
(17, 'Technology', '  Technology is very power full.', '1'),
(18, 'Programming Language', 'I am a Programming.', '1'),
(19, 'Politics', '  Everybody know about it.', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Super Admin', 'admin@blogs.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Sofiqul Islam', 'sofiq@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
