-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2014 at 04:59 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `indigint`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int(10) NOT NULL,
  `categoryName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `itemID` int(10) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(50) NOT NULL,
  `categoryID` int(10) NOT NULL,
  PRIMARY KEY (`itemID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `itemShoppingListLink`
--

CREATE TABLE IF NOT EXISTS `itemShoppingListLink` (
  `itemID` int(10) NOT NULL,
  `shoppingListID` int(10) NOT NULL,
  `userID` int(11) NOT NULL,
  `itemCount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemStoreLink`
--

CREATE TABLE IF NOT EXISTS `itemStoreLink` (
  `itemID` int(10) NOT NULL,
  `storeID` int(10) NOT NULL,
  `price` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `itemUserLink`
--

CREATE TABLE IF NOT EXISTS `itemUserLink` (
  `userID` int(10) NOT NULL,
  `itemID` int(10) NOT NULL,
  `frequency` int(3) NOT NULL,
  `priority` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `priceID` int(10) NOT NULL AUTO_INCREMENT,
  `storeID` int(10) NOT NULL,
  `itemID` int(10) NOT NULL,
  PRIMARY KEY (`priceID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`priceID`, `storeID`, `itemID`) VALUES
(1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingList`
--

CREATE TABLE IF NOT EXISTS `shoppingList` (
  `shoppingListID` int(10) NOT NULL AUTO_INCREMENT,
  `userID` int(10) NOT NULL,
  `shoppingListName` varchar(50) NOT NULL,
  PRIMARY KEY (`shoppingListID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shoppingList`
--

INSERT INTO `shoppingList` (`shoppingListID`, `userID`, `shoppingListName`) VALUES
(1, 2, 'electronics');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `storeID` int(10) NOT NULL AUTO_INCREMENT,
  `storeName` varchar(50) NOT NULL,
  `storeCity` varchar(30) NOT NULL,
  `storeState` varchar(10) NOT NULL,
  `storeZip` int(5) NOT NULL,
  PRIMARY KEY (`storeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `cellPhone` varchar(10) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userID` (`userID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `wishlistID` int(10) NOT NULL AUTO_INCREMENT,
  `userID` int(10) NOT NULL,
  `wishlistName` varchar(50) NOT NULL,
  PRIMARY KEY (`wishlistID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
