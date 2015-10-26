-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2015 at 01:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(8) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  `cat_by` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name` (`cat_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`, `cat_by`, `date_created`) VALUES
(2, 'Transistors', 'All About Transistors', '1', '0000-00-00 00:00:00'),
(3, 'Opamps', 'This is all about computer', '2', '0000-00-00 00:00:00'),
(4, 'Volatge Controlled Oscillator', 'All about VCOs', '2', '0000-00-00 00:00:00'),
(7, 'comp', 'this', '3', '0000-00-00 00:00:00'),
(9, 'Comouters', 'this is all about computers hardware and software.', '1', '0000-00-00 00:00:00'),
(10, 'solidstate electronics', 'this is all about ic technology', '1', '0000-00-00 00:00:00'),
(11, 'Computersn knnknk', 'nllnklnnnklnklnlnkln', '2', '0000-00-00 00:00:00'),
(12, 'Phase Locked Loop', 'All About PLL', '3', '0000-00-00 00:00:00'),
(13, 'Test Category', 'This just a test category as you can see', 'adminUser', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_contents`
--

CREATE TABLE IF NOT EXISTS `course_contents` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(10) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_unit` int(10) NOT NULL,
  `course_content` longtext NOT NULL,
  `course_level` int(2) NOT NULL,
  `course_hours` int(10) NOT NULL,
  `isAssigned` tinyint(1) DEFAULT NULL,
  `assignedTo` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `course_content_ibfk_1` (`assignedTo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `course_contents`
--

INSERT INTO `course_contents` (`ID`, `course_code`, `course_name`, `course_unit`, `course_content`, `course_level`, `course_hours`, `isAssigned`, `assignedTo`) VALUES
(2, 'ENGR 101', 'Introduction To Engineering', 2, 'Introduction To Engineering', 1, 33, 0, 2),
(3, 'ENGR 202', 'Material Science', 4, 'This is an introduction to materials used ing rngineering as you can see.', 2, 32, 1, 14),
(4, 'MATH 111', 'Basic Mathematics', 4, 'This is an introduction to materials used ing rngineering as you can see.', 2, 32, 1, 14),
(5, 'MATH 122', 'Basic Mathematic 2', 4, 'This is an introduction to materials used ing rngineering as you can see.', 2, 32, 1, 14),
(6, 'CHEM 112', 'Introduction to basic chemistry', 4, 'This is an introduction to materials used ing rngineering as you can see.', 2, 32, 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `qCount` int(11) NOT NULL,
  `qCategory` varchar(255) NOT NULL,
  `qStyle` tinyint(1) NOT NULL,
  `qTime` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `eval_k` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`ID`, `user_id`, `qCount`, `qCategory`, `qStyle`, `qTime`) VALUES
(1, 1, 20, 'Analog Electronic', 1, 20),
(3, 1, 10, 'Basic Electronics', 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `logedin_member`
--

CREATE TABLE IF NOT EXISTS `logedin_member` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `ssid` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `login_type` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `lm_ibfk_1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `media_by` varchar(255) NOT NULL,
  `when` datetime NOT NULL,
  `approved` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_content` varchar(255) NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(255) NOT NULL,
  `post_by` int(255) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `post_topic` (`post_topic`),
  KEY `post_by` (`post_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`) VALUES
(1, 'Transistor is a semi-conductor device that is used for numerous purposes is electronic circuits.\nTransistor is a semi-conductor device that is used for numerous purposes is electronic circuits.', '2015-02-11 00:00:00', 5, 2),
(2, 'The main parts of a VCO includes:', '2015-02-12 00:00:00', 5, 1),
(5, 'Comparators are used to cmopare and switch two sijgnals', '2015-02-26 03:25:31', 6, 1),
(9, 'NMOS ', '2015-03-03 11:41:03', 7, 1),
(10, 'NMOS AGIN', '2015-03-03 11:42:03', 7, 1),
(11, 'Biasing is a way of determining the operating point of a transistor', '2015-03-03 11:44:03', 4, 1),
(12, 'Biasing is very important in transistor operations as it determins all the operating conditions of the transistor.', '2015-03-03 11:46:03', 4, 1),
(13, 'Now the question is what is biasing in your own understanding.', '2015-03-03 11:59:03', 4, 1),
(14, 'what does biasing mean.\n', '2015-03-03 15:22:03', 4, 1),
(15, 'What actually is NMOS and how can it be used in Electronics.', '2015-03-03 15:24:03', 7, 1),
(16, 'This is wonderful for a good design.\n', '2015-03-03 18:12:03', 5, 1),
(17, 'op amps are used to make comparators.\n', '2015-03-04 13:56:03', 6, 1),
(18, 'Differential amplifiers are a major component  used to make an Instrumentation amplifier', '2015-03-04 14:01:03', 8, 1),
(19, 'qhwbasbdwsdskndjknskndkjsnkdnsjkndsdsdsd', '2015-03-05 13:01:03', 8, 12),
(20, 'The Full meaening of VCO is Voltage Controlled Oscillator.', '2015-03-05 21:02:03', 5, 1),
(21, 'A VCO is used in implementation of a PLL, How can this be done, i need help.\n', '2015-03-06 13:35:03', 5, 14),
(22, 'i am just commenting in all things.\n', '2015-03-08 22:30:03', 5, 3),
(23, 'How to bias is a transistor?. Somebody help.!', '2015-03-10 09:21:03', 5, 1),
(24, '@jerry. This is the solution: Go to www.howtodo.com', '2015-03-10 09:23:03', 5, 1),
(25, '@jerry. This is the solution: Go to &amp;lt;a href=&amp;quot;www.howtodo.com&amp;quot;&amp;gt;Here&amp;lt;/a&amp;gt;', '2015-03-10 09:23:03', 5, 1),
(26, 'PLL means Phase Locked Loop. Its built on a VCO.\n', '2015-03-11 08:50:03', 10, 1),
(27, 'I can not believe that i have transferred from jquery to jquery mobile,', '2015-03-15 17:23:03', 5, 3),
(28, 'This is actually working more than i think,,,..', '2015-03-15 17:44:03', 5, 3),
(29, 'This is the First comment on this serei..', '2015-03-15 17:46:03', 9, 3),
(30, 'This should be the second comment', '2015-03-15 17:49:03', 9, 3),
(31, 'Third Comment is what is Opamps.', '2015-03-15 17:51:03', 6, 3),
(32, 'This is a link [Go To|http://www.google.com]', '2015-03-15 19:39:03', 5, 3),
(33, 'This is a test to see what will happen &amp;lt;a href =&amp;quot;#&amp;quot;&amp;gt;Click here please&amp;lt;/a&amp;gt;', '2015-03-17 07:54:03', 8, 3),
(34, 'Not Working as expected', '2015-03-17 07:55:03', 8, 3),
(35, 'So much work tombe done', '2015-03-17 08:26:03', 5, 3),
(36, 'vco STANDS FOR voLTAGE cONTROLLED oscillator\n', '2015-03-20 20:38:03', 9, 1),
(37, 'dats kul', '2015-04-13 10:12:04', 5, 1),
(38, 'This is still a test of www.test.com', '2015-04-17 20:40:04', 5, 1),
(39, 'http://www.tests.com', '2015-04-17 20:40:04', 5, 1),
(40, 'This is a test of my codes http://www.test.com', '2015-04-17 22:53:04', 4, 1),
(41, 'Commenting on Opamp is just Good', '2015-04-24 08:51:04', 8, 1),
(42, 'test', '2015-04-24 17:21:04', 8, 3),
(43, 'just now\n', '2015-04-24 20:57:04', 5, 3),
(44, '&amp;lt;a href=&amp;quot;wwww.edigitron.org&amp;quot;&amp;gt;Click Here&amp;lt;/a&amp;gt;', '2015-04-30 06:06:04', 5, 3),
(45, 'Are we Confused!\n', '2015-06-09 17:46:06', 8, 3),
(46, 'PLL means phase lock loop. It is used in electronics\n', '2015-07-06 17:24:07', 10, 3),
(47, 'May  be we can stop talking aboubt OPamp and do somthing else.\n', '2015-08-12 12:44:08', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `profile_data`
--

CREATE TABLE IF NOT EXISTS `profile_data` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `entry_year` date NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` tinytext NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `m_status` text NOT NULL,
  `p_pic` varchar(255) NOT NULL,
  `signup_date` datetime NOT NULL,
  `ver_code` varchar(255) NOT NULL,
  `last-login` datetime(1) NOT NULL,
  `user_id` int(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `prof_dat_1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `profile_data`
--

INSERT INTO `profile_data` (`ID`, `f_name`, `m_name`, `l_name`, `regno`, `entry_year`, `date_of_birth`, `gender`, `email`, `phone`, `address`, `username`, `password`, `user_type`, `m_status`, `p_pic`, `signup_date`, `ver_code`, `last-login`, `user_id`) VALUES
(9, 'Okafor', 'Chinonso', 'JerryHanks', '2010/171858', '0000-00-00', '1899-11-08', 'male', 'hanksjerry_dedon@yahoo.com', '08030520715', 'Tochukwu Students Hostel', 'chinonso', '3b23b4a38752fd45a71d6db74328b989dc7e77dc61f926a58a52784c5b4ee64070508fc414e7c4c7b2dcdcdc5083f3952656e6d0ab29555c350d70a73f574319', '0', 'single', 'pp1.jpg', '2015-03-05 09:04:03', '4h6ZHrGeE3', '0000-00-00 00:00:00.0', 1),
(10, 'okpara ', 'Chukwuneworu', 'Chuks', '2010/173849', '2015-06-02', '0000-00-00', 'male', 'ugochukwuugwuede@gmail.com', '08182441027', 'house 130 fruitin avenue', 'rob', '0400fe0aca3330a04592872cbd9d14882ffd1a49ca5244a34aaa2af04140b1197277d64fa5162707fb5335e917cb44ac0ddc6535673d1389cab76c866f85e409', '0', 'single', 'pp2.jpg', '2015-03-06 13:15:03', 'reyLDSxVlz', '0000-00-00 00:00:00.0', 2),
(11, 'ugochukwu ', 'ugwuede', 'robert', '2010/173849', '0000-00-00', '0000-00-00', 'male', 'ugochukwuugwuede@gmail.com', '08182441027', 'house 130 fruitin avenue', 'rob', '0304eae652f988a814596d8ea4d91232e9ea9b138d9a6a63622f2c0898284b803652ec55cf675b3f6947de040d1445246d174f3b5fecd56f523804e3512b9a49', '0', 'single', 'pp3.jpg', '2015-03-06 13:16:03', 'MTLcLvCgMj', '0000-00-00 00:00:00.0', 3),
(14, 'Okafor', 'Jerryhanks', 'Chinonso', '2010/171858', '0000-00-00', '0000-00-00', 'male', 'hanksjerry_dedon@yahoo.com', '08030520715', 'Tochukwu Students Hostel', 'hanksdon', '68a10eda0df490324ba812c4cea20f270751ffc785bae637a90835ee6f2ab8acdd91689032c03e73bb42b0952975ec5c6dd1a1a8b092b4ed20f68e9db35e6fb3', '0', 'single', 'pp4.jpg', '2015-03-07 07:47:03', 'gm5bJlshEF', '0000-00-00 00:00:00.0', 22),
(15, 'Chukwunweolu', 'Okpara', 'Lewechukwu', '2010/171725', '0000-00-00', '0000-00-00', 'on', 'glorious_chuks@yahoo.com', '+2348139566741', 'Lagos Nigeria', 'chuksokpara', '5c8b8b285b65d4c1805d6ec84337267e6a64871c742782683763ed7704f7037aa1a857e44493879fc0cc7beb0a2fff6b0b51b406d8581c7650e272967cddac17', '0', 'single', 'bBT4PNBTPJ.jpg', '2015-08-12 12:57:08', '8r2JbHbNpJ', '0000-00-00 00:00:00.0', 24);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `rNameUsr` varchar(100) NOT NULL,
  `rsize` varchar(50) NOT NULL,
  `rtype` varchar(50) NOT NULL,
  `format` varchar(255) NOT NULL,
  `doc_by` varchar(255) NOT NULL,
  `user_r_type` varchar(50) NOT NULL,
  `rDescription` varchar(100) NOT NULL,
  `rprio` int(11) NOT NULL,
  `when` datetime NOT NULL,
  `approved` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`ID`, `name`, `rNameUsr`, `rsize`, `rtype`, `format`, `doc_by`, `user_r_type`, `rDescription`, `rprio`, `when`, `approved`) VALUES
(35, '338073730.pdf', 'Test Resources', '135871', 'application/pdf', 'pdf', 'ugochukwu  robert ugwuede', 'test', 'Resource1', 48, '2015-08-04 09:12:08', 0),
(38, '288168334.pdf', 'Resources1', '135871', 'application/pdf', 'pdf', 'ugochukwu  robert ugwuede', 'null', 'dlgnfgnklfng', 0, '2015-08-04 09:45:08', 0),
(39, '529455566.pdf', 'This is the first test that is meant to be dowloaded', '135442', 'application/pdf', 'pdf', 'ugochukwu  robert ugwuede', 'doc', 'Catch Fun', 44, '2015-08-04 12:39:08', 0),
(40, '120983886.docx', 'ProjectName', '11316', 'application/vnd.openxmlformats-officedocument.word', 'docx', 'ugochukwu  robert ugwuede', 'doc', 'This is also a test project', 40, '2015-08-04 14:35:08', 0),
(41, '216784667.xls', 'This is an xls texs file', '17920', 'application/vnd.ms-excel', 'xls', 'ugochukwu  robert ugwuede', 'doc', 'This is a test file', 63, '2015-08-04 14:43:08', 0),
(42, '659149169.jpg', 'This is a test Image Value for the project', '613200', 'image/jpeg', 'jpg', 'ugochukwu  robert ugwuede', 'image', 'This is my Image while i was with mandilas', 46, '2015-08-04 14:59:08', 0),
(43, '624844360.pdf', 'Resource2', '135871', 'application/pdf', 'pdf', 'ugochukwu  robert ugwuede', 'image', 'Resource2', 45, '2015-08-04 15:26:08', 0),
(44, 'ZmZhaXjc5T.pdf', 'Resource3', '135871', 'application/pdf', 'pdf', 'ugochukwu  robert ugwuede', 'image', 'Resource3', 0, '2015-08-04 15:28:08', 0),
(45, 'E5u6OzlYqV.gif', 'Resource4', '13674', 'image/gif', 'gif', 'ugochukwu  robert ugwuede', 'image', 'Resource4', 43, '2015-08-04 15:29:08', 0),
(46, 'J6wBtZJ2QL.jpg', 'Resource5', '43229', 'image/jpeg', 'jpg', 'ugochukwu  robert ugwuede', 'image', 'Resource5', 56, '2015-08-04 17:58:08', 0),
(47, 'ypCXugvGfa.mp4', 'Resource6', '1439481', 'video/mp4', 'mp4', 'ugochukwu  robert ugwuede', 'video', 'Resource6', 0, '2015-08-04 22:37:08', 0),
(48, 'gFhEXfIkLD.flv', 'Testing fot FLV', '667318', 'application/octet-stream', 'flv', 'ugochukwu  robert ugwuede', 'video', 'This an flv test as you can see', 0, '2015-08-04 23:58:08', 0),
(49, 'GbgVMQ3AmB.flv', 'Testing fot FLV', '667318', 'application/octet-stream', 'flv', 'ugochukwu  robert ugwuede', 'video', 'This an flv test as you can see', 0, '2015-08-04 23:59:08', 0),
(50, '6HBO44Kvq2.flv', 'Testing fot FLV', '667318', 'application/octet-stream', 'flv', 'ugochukwu  robert ugwuede', 'video', 'This an flv test as you can see', 51, '2015-08-05 00:07:08', 0),
(51, 'KABo8prOg5.mp4', 'wskrjfnkjdnkfndkn', '1569834', 'video/mp4', 'mp4', 'ugochukwu  robert ugwuede', 'image', 'slnfdlkfkldmlf', 0, '2015-08-05 07:35:08', 0),
(52, 'lm7Pkd8K7C.gif', 'Png Test', '73968', 'image/gif', 'gif', 'ugochukwu  robert ugwuede', 'image', 'This simply a test of png image uplaod', 42, '2015-08-06 10:20:08', 0),
(53, 'go58of1LWJ.26.12.jpg', 'PICTURES', '1601539', 'image/jpeg', '.jpg', 'ugochukwu  robert ugwuede', 'image', 'This is a test Image', 3, '2015-08-12 01:36:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(8) NOT NULL AUTO_INCREMENT,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` varchar(255) NOT NULL,
  `topic_by` int(8) NOT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `topic_cat` (`topic_cat`),
  KEY `topic_ibfk_2` (`topic_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES
(4, 'Biasing ', '0000-00-00 00:00:00', 'solidstate electronics', 1),
(5, 'Main parts of a VCO', '2015-02-11 05:50:02', 'Transistors', 1),
(6, 'Comparators', '2015-02-11 05:54:02', 'Opamps', 1),
(7, 'NMOS', '2015-02-12 15:32:02', 'solidstate electronics', 1),
(8, 'Differential Amplifiers', '2015-03-04 13:58:03', 'Opamps', 1),
(9, 'Overview of VCO', '2015-03-06 14:37:03', 'Volatge Controlled Oscillator', 14),
(10, 'What is PLL', '2015-03-11 08:50:03', 'Phase Locked Loop', 1),
(11, 'This the first topic in this category.', '2015-08-12 07:31:08', 'Test Category', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `logintype` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `signup_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_status` tinyint(1) NOT NULL,
  `last_login` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ver_code` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `logintype`, `email`, `avatar`, `signup_date`, `user_status`, `last_login`, `ver_code`, `verified`) VALUES
(1, 'jerryhanks', '3b23b4a38752fd45a71d6db74328b989dc7e77dc61f926a58a52784c5b4ee64070508fc414e7c4c7b2dcdcdc5083f3952656e6d0ab29555c350d70a73f574319', '0', 'hanksje', 'azm10sV3cx', '2015-06-06 05:20:57', 1, '2015-06-06 14:20:06', '123', 1),
(2, 'hanksjerry', '3b23b4a38752fd45a71d6db74328b989dc7e77dc61f926a58a52784c5b4ee64070508fc414e7c4c7b2dcdcdc5083f3952656e6d0ab29555c350d70a73f574319', '1', 'hanksjer', 'azm10sV3cx', '2015-04-19 20:29:08', 1, '2015-04-19 20:29:08', '123', 0),
(3, 'adminUser', '3b23b4a38752fd45a71d6db74328b989dc7e77dc61f926a58a52784c5b4ee64070508fc414e7c4c7b2dcdcdc5083f3952656e6d0ab29555c350d70a73f574319', '2', 'hanksjerry_', 'azm10sV3cx', '2015-08-11 23:43:21', 1, '2015-08-12 08:43:08', '123', 1),
(12, 'chinonso', '3b23b4a38752fd45a71d6db74328b989dc7e77dc61f926a58a52784c5b4ee64070508fc414e7c4c7b2dcdcdc5083f3952656e6d0ab29555c350d70a73f574319', '0', 'hanksjerry_dedon@yahoo.com', 'azm10sV3cx', '2015-04-20 05:44:06', 1, '2015-04-20 14:44:04', '4h6ZHrGeE3', 1),
(14, 'rob', '0304eae652f988a814596d8ea4d91232e9ea9b138d9a6a63622f2c0898284b803652ec55cf675b3f6947de040d1445246d174f3b5fecd56f523804e3512b9a49', '0', 'ugochukwuu', 'yrGb5k20Kr', '2015-04-19 11:17:20', 0, '2015-04-19 11:17:20', 'MTLcLvCgMj', 1),
(22, 'hanksdon', '68a10eda0df490324ba812c4cea20f270751ffc785bae637a90835ee6f2ab8acdd91689032c03e73bb42b0952975ec5c6dd1a1a8b092b4ed20f68e9db35e6fb3', '0', 'hanks', 'xpJnZtLqMp', '2015-04-19 11:17:24', 0, '2015-04-19 11:17:24', 'gm5bJlshEF', 1),
(23, '', '2ac479e6e5b7d9e8f5ad4838940787e39dea64c86b851f8eb0770f2ea9453230b28fab4f35c9a67ae0fa3234d4049da63368cd41ad9a1b23621411d76ee93d3a', '0', '', 'gwjlbxOXZm', '2015-08-12 12:51:08', 1, '2015-08-12 12:51:08', 'Nyepo8Pbwp', 0),
(24, 'chuksokpara', '5c8b8b285b65d4c1805d6ec84337267e6a64871c742782683763ed7704f7037aa1a857e44493879fc0cc7beb0a2fff6b0b51b406d8581c7650e272967cddac17', '0', 'glorious_chuks@yahoo.com', 'R8gIjmt28U', '2015-08-12 04:06:58', 1, '2015-08-12 13:06:08', '8r2JbHbNpJ', 1),
(25, 'sebastine', 'dbc0a4be6320e45bd0fafc8125de30db662eb1288cf8d0c1d3349a00a3fbcbaa7864ef2ae03baaaf3f408aa4dea4fcf95b3fbcc6250c8b9a9c0766c0d1599967', '0', '', 'Yh2XtP3QPO', '2015-08-12 13:13:08', 1, '2015-08-12 13:13:08', 'aeh0tVieOc', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_contents`
--
ALTER TABLE `course_contents`
  ADD CONSTRAINT `course_content_ibfk_1` FOREIGN KEY (`assignedTo`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `eval_k` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logedin_member`
--
ALTER TABLE `logedin_member`
  ADD CONSTRAINT `lm_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_topic`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`post_by`) REFERENCES `users` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `profile_data`
--
ALTER TABLE `profile_data`
  ADD CONSTRAINT `prof_dat_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`topic_cat`) REFERENCES `categories` (`cat_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topic_ibfk_2` FOREIGN KEY (`topic_by`) REFERENCES `users` (`ID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
