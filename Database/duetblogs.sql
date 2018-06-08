-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2015 at 03:22 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `duetblogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `e_id` int(50) NOT NULL,
  `name` varchar(33) NOT NULL,
  `user_id` varchar(33) NOT NULL,
  `user_pass` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `address` varchar(200) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e_id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`e_id`, `name`, `user_id`, `user_pass`, `email`, `address`, `photo`, `id`) VALUES
(12345, 'Admin', '12345', '123', 'admin@gmail.com', 'DUET, Gazipur.', 'AA.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `content` longtext NOT NULL,
  `photo` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(50) NOT NULL,
  `comment_by` varchar(50) NOT NULL,
  PRIMARY KEY (`comment`),
  KEY `post_id` (`post_id`,`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `emp_details`
--

CREATE TABLE IF NOT EXISTS `emp_details` (
  `id` int(10) NOT NULL,
  `e_name` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `desig` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` varchar(200) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `online` int(2) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_details`
--

INSERT INTO `emp_details` (`id`, `e_name`, `dept`, `desig`, `user_id`, `user_pass`, `photo`, `email`, `address`, `u_name`, `t_name`, `online`) VALUES
(1213, 'Md Najmul Hossen', 'ME', 'Assistant Professor', '1213', '123', 'abrefjik.png', 'najmul.duet@yahoo.com', 'Gazipur,DUET.', 'Hasan Mahmud', 'Abdur Rouf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `type`) VALUES
(1213, '1'),
(124045, '2'),
(124050, '2');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `cat_id` int(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_by` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `file` varchar(500) NOT NULL,
  `file2` varchar(56) NOT NULL,
  `file3` varchar(322) NOT NULL,
  `file4` varchar(300) NOT NULL,
  `file5` varchar(300) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `cat_id` (`cat_id`,`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `posts`
--


-- --------------------------------------------------------

--
-- Table structure for table `post_catagory`
--

CREATE TABLE IF NOT EXISTS `post_catagory` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `post_catagory`
--

INSERT INTO `post_catagory` (`cat_id`, `cat_name`) VALUES
(1, 'Admission'),
(2, 'Sports'),
(3, 'Srijoni'),
(4, 'Computer Society'),
(5, 'Debate Club'),
(6, 'Transport'),
(7, 'Security'),
(8, 'Residential News'),
(9, 'Medical'),
(10, 'Library'),
(11, 'Academic'),
(12, 'Orientation'),
(13, 'Others'),
(14, 'Computer Center');

-- --------------------------------------------------------

--
-- Table structure for table `stu_details`
--

CREATE TABLE IF NOT EXISTS `stu_details` (
  `id` int(10) NOT NULL,
  `s_name` varchar(22) NOT NULL,
  `dept` varchar(22) NOT NULL,
  `year` varchar(11) NOT NULL,
  `semester` varchar(11) NOT NULL,
  `section` varchar(30) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `file` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `online` int(2) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_details`
--

INSERT INTO `stu_details` (`id`, `s_name`, `dept`, `year`, `semester`, `section`, `user_id`, `user_pass`, `file`, `email`, `address`, `u_name`, `t_name`, `online`) VALUES
(124045, 'Md Akhter Hossen', 'CSE', 'Third', '1st', 'Single', 124045, '123', 'hadbbh.jpg', 'litu.duet@yahoo.com', 'Habiganj,Shylet.', 'Sahud', 'Saifur', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emp_details`
--
ALTER TABLE `emp_details`
  ADD CONSTRAINT `emp_details_ibfk_1` FOREIGN KEY (`id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `post_catagory` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stu_details`
--
ALTER TABLE `stu_details`
  ADD CONSTRAINT `stu_details_ibfk_1` FOREIGN KEY (`id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
