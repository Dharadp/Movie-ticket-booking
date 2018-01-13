-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2015 at 06:09 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movie_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `m_id` int(4) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(30) NOT NULL,
  `m_date` date NOT NULL,
  `m_path` varchar(200) NOT NULL,
  PRIMARY KEY (`m_id`),
  KEY `m_name` (`m_name`),
  KEY `m_date` (`m_date`),
  KEY `m_date_2` (`m_date`),
  KEY `m_path` (`m_path`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`m_id`, `m_name`, `m_date`, `m_path`) VALUES
(1, 'kis kis ko pyar karu', '2015-10-06', '/movie_ticket_booking/images/kiskiskopyarkaru2.jpg'),
(5, 'Sing is bling', '2015-10-09', '/images/singh-is-bling-1-190815.jpg'),
(6, 'Talvar', '2015-10-09', '/images/talvar-poster.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movie_time`
--

CREATE TABLE IF NOT EXISTS `movie_time` (
  `t_id` int(4) NOT NULL AUTO_INCREMENT,
  `time` time NOT NULL,
  PRIMARY KEY (`t_id`),
  KEY `time` (`time`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `movie_time`
--

INSERT INTO `movie_time` (`t_id`, `time`) VALUES
(2, '01:00:00'),
(5, '04:00:00'),
(6, '07:00:00'),
(1, '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `old_movie`
--

CREATE TABLE IF NOT EXISTS `old_movie` (
  `o_id` int(4) NOT NULL AUTO_INCREMENT,
  `o_name` varchar(30) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `old_movie`
--

INSERT INTO `old_movie` (`o_id`, `o_name`) VALUES
(1, 'Brother'),
(2, 'Bajarangi Bhaijan');

-- --------------------------------------------------------

--
-- Table structure for table `seat_arrange`
--

CREATE TABLE IF NOT EXISTS `seat_arrange` (
  `s_id` int(4) NOT NULL AUTO_INCREMENT,
  `book_seat_each_row` int(4) NOT NULL,
  `total_seat_row` int(4) NOT NULL,
  `seat_type` varchar(20) NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `seat_each_row` (`book_seat_each_row`,`total_seat_row`),
  KEY `seat_type` (`seat_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `seat_arrange`
--

INSERT INTO `seat_arrange` (`s_id`, `book_seat_each_row`, `total_seat_row`, `seat_type`) VALUES
(1, 1, 20, 'First'),
(2, 1, 30, 'Second');
