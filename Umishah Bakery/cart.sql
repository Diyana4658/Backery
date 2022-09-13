-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 05:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,

) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`) VALUES
('1', 'Normal Theme Cakes', 'Normal Cake 3.jpg'),
('2', 'Unique Theme Cakes', 'Cake cartoon 4.jpg'),
('3', 'Normal Shape Bahulu', 'Bahulu 3.jpg'),
('4', 'Fish Shape Cakes', 'Bahulu 1.jpg'),
('5', 'Cheese Moist Cakes', 'Moist Cake1.jpg'),
('6', 'Chocolate Moist Cakes', 'Moist Cake2.jpg'),
('7', 'Cupcakes', 'Cupcake2.jpg'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

			<div class="cart-action">
      <select name="flav">
      <option>Please choose Flavour
      <option name="flav" value="Orange">Orange
      <option name="flav" value="Butter">Butter
      <option name="flav" value="Strawberry">Strawberry
      <option name="flav" value="Pandan">Pandan
      <option name="flav" value="Chocolate">Chocolate
			<option name="flav" value="Coffee">Coffee 
      </select></div>

      <div class="cart-action"><select name="size">
      <option>Please choose size
      <option name="size" value="6 inch">6 inch
      <option name="size" value="7 inch">7 inch
			<option name="size" value="8 inch">8 inch</div>
      </select>