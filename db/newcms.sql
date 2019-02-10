-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 12:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(54, 'hello html'),
(55, 'javascrpit'),
(56, 'java'),
(57, 'c'),
(58, 'cpp'),
(59, 'c#'),
(60, 'node'),
(66, 'new ha'),
(67, 'new ha nice'),
(68, 'new ha');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(41, 362, 'dcvsdvdsv', 'vdsvdvsv', 'dsvdsvdsvsv', 'unapproved', '0000-00-00'),
(45, 370, 'vdsvsdvs', 'vsdvsdvsdv', 'dsvsdvsdvsvdsv', 'approved', '0000-00-00'),
(46, 370, 'dsvsvsdvsdv', 'dsvsvsdvsv', 'vdsvvsvsvsdvdsv', 'approved', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_cat_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_cat_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(362, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 1, 'published'),
(370, 56, 'java demo post', 'Pruthvi Patel', '0000-00-00', 'Screenshot (1).png', 'there are huge content of lorem ipsum', 'new tag', 2, 'published'),
(371, 56, 'java demo post', 'Pruthvi Patel', '0000-00-00', 'Screenshot (1).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(372, 58, 'Demo post ', 'Pruthvi Patel', '0000-00-00', 'myAvatar.png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(373, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(374, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(375, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(376, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(377, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(378, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(379, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(380, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(381, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(382, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(383, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(384, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(385, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(386, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(387, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(388, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(389, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(390, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(391, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(392, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(393, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(394, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published'),
(395, 55, 'new post bitch', 'Pruthvi Patel', '0000-00-00', 'Screenshot (13).png', 'there are huge content of lorem ipsum', 'new tag', 0, 'published');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(25, 'pruthvipatel', 'test', 'Pruthvi', 'Patel', 'pruthvi200@gmail.com', 'Screenshot (18).png', 'admin', 'passenc'),
(26, 'test', 'test', 'john', 'doe', 'john@yahho.com', 'Screenshot (25).png', 'subscriber', 'passenc'),
(27, 'test2', 'test2', 'john', 'smith', 'johns@yahho.com', 'Screenshot (1).png', 'admin', 'passenc'),
(28, 'test2', 'test2', 'john', 'smith', 'johns@yahho.com', 'Screenshot (1).png', 'subscriber', 'passenc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
