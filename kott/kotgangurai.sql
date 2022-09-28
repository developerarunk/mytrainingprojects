-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2017 at 03:15 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kotgangurai`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `about_desc` text NOT NULL,
  `about_img` varchar(100) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`about_id`, `about_desc`, `about_img`) VALUES
(20, 'The school is a premium, purpose-built and offers a world class standards from Nursery to Grade 12th.It is not only about quality of learning and teaching but also about creating a warm, enthusiastic and exciting environment in which young people can learn to succeed.<br/>\n			Established in 1978 Nankana Sahib Public School is proud member of Nankana Sahib Education Trust running 16 educational institutions including 11 Schools , Guru Nanak Dev Engineering College, Guru Nanak Dev Polytechnic, Training College at Kot Gangu Rai, Community Development & Training Centre, Science & Technology Entrepreneur''s Park. <br/>Ever since its inception it was led by missionaries, visionaries and academicians with a purpose of imparting education to rural children on the public school pattern.\n\n		It is a matter of great pride that our students can successfully compete with urban children and can mark their entry into professional colleges and public services.<br/> With a sprawling campus spreading over 15 acres of land the school caters to 60 villages around Ludhiana. Affiliated to Central Board of Secondary Education New Delhi Vide Aff. No.1630044 the medium of instruction in the school is English. However languages of Punjabi and Hindi are taught being Regional and National language as compulsory subjects. While following the latest guidelines by CBSE the stress is laid on "learning by doing".', 'about.png ');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `activities_id` int(11) NOT NULL AUTO_INCREMENT,
  `activities_title` varchar(100) NOT NULL,
  `activities_desc` varchar(800) NOT NULL,
  `activities_icon` varchar(50) NOT NULL,
  `activities_img` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`activities_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activities_id`, `activities_title`, `activities_desc`, `activities_icon`, `activities_img`, `status`) VALUES
(12, 'Sports Games', '<p>Besides health benefits, sport gives children &nbsp;many life lessons that can contribute to &nbsp;professional personal achievements in adult life</p> ', 'fa fa-gamepad', 'red-round.png', 1),
(13, 'Art & Craft', '<p>Besides health benefits, sport gives children &nbsp;many life lessons that can contribute to &nbsp;professional personal achievements in adult life</p> ', 'fa fa-paint-brush', 'yellow-round.png', 1),
(14, 'Music & Dance', '<p>Besides health benefits, sport gives children &amp; many life lessons that can contribute to professional personal achievements in adult life</p> ', 'fa fa-music', 'purple-round.png', 1),
(16, 'Music Class', ' ', '', 'music.jpg', 0),
(17, 'Dance Class', ' ', '', 'bhangra.jpg', 0),
(18, 'Computer Class', ' ', '', 'pclabs.jpg', 0),
(19, 'Kids Activity', ' ', '', 'classs.jpg', 0),
(20, 'Basketball', ' ', '', 'basketball.jpg', 0),
(21, 'Volleyball', ' ', '', 'volleyball.jpg', 0),
(22, 'Race', ' ', '', 'race.jpg', 0),
(23, 'Disc Throw', ' ', '', 'discus.jpg', 0),
(25, 'Matka Race', ' ', '', 'port.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'nankana', '9e7e165cf25246c82413669f2eeea1db');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE IF NOT EXISTS `featured` (
  `featured_id` int(11) NOT NULL AUTO_INCREMENT,
  `featured_title` varchar(50) NOT NULL,
  `featured_desc` varchar(2000) NOT NULL,
  `featured_icon` varchar(50) NOT NULL,
  PRIMARY KEY (`featured_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`featured_id`, `featured_title`, `featured_desc`, `featured_icon`) VALUES
(3, 'Smart Class', 'It gives me immense pleasure to tell that Nankana Sahib College of Education, Kot Gangu Rai has created a niche for itself among the renowned colleges ', 'fa fa-graduation-cap'),
(4, 'Bus Service', 'It gives me immense pleasure to tell that Nankana Sahib College of Education, Kot Gangu Rai has created a niche for itself among the renowned colleges ', 'fa fa-bus'),
(5, 'Large Building', 'We have large building for  better experience of students. ', 'fa icon_fac fa-building  '),
(6, 'Computer Labs', 'We provide computer labs for practical development of students rather than just   ', 'fa icon_fac fa-laptop  '),
(7, 'Friendly Environment', 'We provide friendly environment for practical development of students rather than just reading from books ', 'fa icon_fac fa-handshake-o  '),
(8, 'Library', 'We provide library for self-study of students. ', 'fa icon_fac fa-book  '),
(9, 'Canteen', 'We have a canteen for the mid-day meal of students. ', 'fa icon_fac fa-coffee  '),
(10, 'Expert Teachers', '<p>It gives me immense pleasure to tell that Nankana Sahib College of Education, Kot Gangu Rai has created a niche for itself among the renowned colleges&nbsp;</p> ', 'fa fa-users');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_img` varchar(100) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_img`) VALUES
(11, 'gall2.jpg'),
(13, 'gall3.jpg'),
(14, 'gall4.jpg'),
(15, 'gall1.jpg'),
(16, 'gall5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_desc` varchar(2000) NOT NULL,
  `message_img` varchar(100) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slide_id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_img` varchar(100) NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_img`) VALUES
(5, 'slide4.png'),
(15, 'slide3.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
