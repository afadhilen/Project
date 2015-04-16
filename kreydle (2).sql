-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2015 at 04:27 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kreydle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin123', 'admin one');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` varchar(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(5) NOT NULL,
  `pcs` int(4) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `type`, `pcs`) VALUES
('0-01', 'Naruto', 'comic', 48),
('0-02', 'Onepiece vol 2', 'comic', 5),
('0-03', 'Twilight', 'novel', 2),
('0-06', 'Grey', 'comic', 6),
('0-10', 'Naruto Shippuden', 'comic', 3),
('0-80', 'Twilight F', 'other', 2),
('0-85', 'Hunter', 'comic', 2),
('1-28', 'Derby', 'comic', 3),
('1-78', 'Naruto', 'comic', 6),
('2-98', 'Onepiece vol 86', 'comic', 2),
('6-88', 'Ayam Goreng', 'novel', 3),
('9-00', 'Queen', 'comic', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(1, 'fadhil', 'fadhil1234', 'ahmad', 'fadhil', 'fadhil@yahoo.com'),
(11, 'kuroky', 'kuroky123', 'Kuroky', 'Salehi', 'kuro@ky.com'),
(15, 'afadhilen', 'fadhil123', 'Ahmad', 'Fadhil Naswir', 'fadhil.kreydle@gmail.com'),
(13, 'goma11', 'gomz123', 'George', 'Mathew', 'gw@en.com'),
(14, 'yuko11', 'yuko123', 'Yuyu', 'Hakusho', 'yu@ko.cc'),
(16, 'ironman', 'ironman123', 'Robert', 'Dawney Jr', 'iron@man.com'),
(18, 'bobby', 'bobby123', 'Bob', 'Marley', 'bob@marley.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
