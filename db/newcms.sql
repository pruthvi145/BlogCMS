-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 03:27 AM
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
(65, 'new cat');

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
  `post_comment_conut` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_cat_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_conut`, `post_status`) VALUES
(23, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(24, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(25, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(26, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(27, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(28, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(29, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(30, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(31, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(32, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(33, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(34, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(35, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(36, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(37, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(38, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(39, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(40, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(41, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(42, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(43, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(44, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(45, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(46, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(47, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(48, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(49, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(50, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(51, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(52, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(53, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(54, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(55, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(56, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(57, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(58, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(59, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(60, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(61, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(62, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(63, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(64, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(65, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(66, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(67, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(68, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(69, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(70, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(71, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(72, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(73, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(74, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(75, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(76, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(77, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(78, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(79, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(80, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(81, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(82, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(83, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(84, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(85, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(86, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(87, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(88, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(89, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(90, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(91, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(92, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(93, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(94, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(95, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(96, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(97, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(98, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(99, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(100, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(101, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(102, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(103, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(104, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(105, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(106, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(107, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(108, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(109, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(110, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(111, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(112, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(113, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(114, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(115, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(116, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(117, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(118, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(119, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(120, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(121, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(122, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(123, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(124, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(125, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(126, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(127, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(128, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(129, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(130, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(131, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(132, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(133, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(134, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(135, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(136, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(137, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(138, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(139, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(140, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(141, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(142, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(143, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(144, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(145, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(146, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(147, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(148, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(149, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(150, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(151, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(152, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(153, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(154, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(155, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(156, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(157, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(158, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(159, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(160, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(161, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(162, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(163, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(164, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(165, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(166, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(167, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(168, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(169, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(170, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(171, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(172, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(173, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(174, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(175, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(176, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(177, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(178, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(179, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(180, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(181, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(182, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(183, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(184, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(185, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(186, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(187, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(188, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(189, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(190, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(191, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(192, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(193, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(194, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(195, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(196, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(197, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(198, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(199, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(200, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(201, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(202, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(203, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(204, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(205, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(206, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(207, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(208, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(209, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(210, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(211, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(212, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(213, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(214, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(215, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(216, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(217, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(218, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(219, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(220, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(221, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(222, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(223, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(224, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(225, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(226, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(227, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(228, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(229, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(230, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(231, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(232, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(233, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(234, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(235, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(236, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(237, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(238, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(239, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(240, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(241, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(242, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(243, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(244, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(245, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(246, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(247, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(248, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(249, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(250, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(251, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(252, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(253, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(254, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(255, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(256, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(257, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(258, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(259, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(260, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(261, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(262, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(263, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(264, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(265, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(266, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(267, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(268, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(269, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(270, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(271, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(272, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(273, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(274, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(275, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(276, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(277, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(278, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(279, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(280, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(281, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(282, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(283, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(284, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(285, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(286, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(287, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(288, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(289, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(290, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(291, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(292, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(293, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(294, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(295, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(296, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(297, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(298, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(299, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(300, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(301, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(302, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(303, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(304, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(305, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(306, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(307, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(308, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(309, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(310, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(311, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(312, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(313, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(314, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(315, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(316, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(317, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(318, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(319, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(320, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(321, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(322, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(323, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(324, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(325, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(326, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(327, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(328, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(329, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(330, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(331, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(332, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(333, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(334, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(335, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(336, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(337, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(338, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(339, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(340, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(341, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(342, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(343, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(344, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(345, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(346, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(347, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(348, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(349, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(350, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(351, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(352, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(353, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(354, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(355, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(356, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft'),
(357, 56, 'new post', 'me', '0000-00-00', 'myAvatar.png', 'this is new post content', 'new tags', 4, 'draft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=358;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
