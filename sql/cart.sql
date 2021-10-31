-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2021 at 04:13 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f32ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(40) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `quantity` int(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `description`, `price`, `quantity`) VALUES
(1, 'Classic Set Meal', 'Angus Beef Burger with Curly Fries and Drink', 15.9, 0),
(2, 'Fishy Set Meal', 'Fish Burger With Tartar Sauce with Potato Wedges', 12.9, 0),
(3, 'Steak Platter', 'Freshest Tomahawk steak seared on the super-heated Lava Stone.', 22.9, 0),
(4, 'Sausage Platter', 'Multiple choices of tasty sausages imported from Germany.', 17.9, 0),
(5, 'Mixed Grill', 'Mixed types of lamb, pork chop and sausages.', 19.9, 0),
(6, 'Aglio e Olio', 'Traditional Italian pasta dish from Naples, with premium black pepper!', 17.9, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
