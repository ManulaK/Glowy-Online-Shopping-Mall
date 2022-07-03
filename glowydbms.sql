-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2021 at 11:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glowydbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `allitems`
--

CREATE TABLE `allitems` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allitems`
--

INSERT INTO `allitems` (`product_id`, `product_name`, `product_price`, `product_image`, `product_quantity`, `product_desc`) VALUES
(1, 'Levis collection of men\'s casual t-shirts, Simple plain t-shirts', 1200, 'images/Homepage/P1.jpg', 12, 'Find out why Levi\'s® shirts for men are a must-have closet staple, perfect for any outfit. '),
(2, 'Branded Tshirts Tops for Women ', 1500, 'images/Homepage/PN1.jpg', 20, 'Levi\'s® women\'s shirts, blouses & denim tops are a modern twist on classic styles that have defined generations. '),
(3, 'Men\'s Citizen Endeavour Watch AW1428-53X ', 5500, 'images/Homepage/PN10.jpg', 50, 'A watch is a portable timepiece intended to be carried or worn by a person'),
(4, 'Nikon D3500 DSLR Camera with 18-55mm ', 75000, 'images/Homepage/PN3.jpg', 5, 'Nikon cameras have been trusted by photographers and picture takers of every caliber for their enduring performance'),
(5, 'A Foundation & Concealer Palette', 3500, 'images/Homepage/PN4.jpg', 10, 'A primer is the first and the most integral part of a girl\'s makeup'),
(6, 'Apple iPhone 5s - Full set', 35000, 'images/Homepage/PN2.jpg', 12, 'Apple iPhone 5s · Released 2013, September 20 · 112g, 7.6mm thickness · iOS 7, up to iOS 12.4.6 · 16GB/32GB/64GB storage'),
(7, 'Shampoo & Conditioner', 750, 'images/Homepage/PN11.jpg', 25, 'Shampoo is a hair care product, typically in the form of a viscous liquid, that is used for cleaning hair. '),
(8, 'Fresh Oranges', 75.5, 'images/Homepage/PN12.jpg', 30, 'There is nothing quite refreshing like a freshly squeezed oranges. Try it out for yourself!'),
(9, 'Vegetable pack', 1350, 'images/Homepage/PN13.jpg', 40, 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants '),
(10, 'Burger ', 1050, 'images/Homepage/PN14.jpg', 50, 'Hamburger, a sandwich consisting of one or more cooked patties, is placed inside a sliced bread roll or bun. '),
(11, 'MacBook Air - Apple', 255000, 'images/Homepage/PN5.jpg', 10, 'MacBook Air is completely transformed by the power of the Apple-designed M1 chip. Up to 3.5x faster CPU, 5x faster graphics, and 18 hours of battery life.'),
(12, 'Apple iPhone 12 Pro Max', 150000, 'images/Homepage/PN6.jpg', 10, 'Apple iPhone 12 Pro Max · Released 2020, November 13 · 228g, 7.4mm thickness · iOS 14.1, up to iOS 15 · 128GB/256GB/512GB storage'),
(13, 'Logitech G733 Lightspeed Wireless Gaming Headset', 5500, 'images/Homepage/PN7.jpg', 10, 'Best Buy customers often prefer the following products when searching for White Headsets.'),
(14, 'AirPods Pro - Apple', 4500, 'images/Homepage/PN8.jpg', 10, 'AirPods Pro is sweat and water-resistant for non-water sports and exercise. AirPods Pro were tested under controlled laboratory conditions'),
(15, 'Brand new Smart Watches ', 3550, 'images/Homepage/PN9.jpg', 10, 'Smartwatches pair with your phone to put messaging and apps right on your wrist. They don\'t simply clone your phone'),
(16, 'Men\'s Branded Denim ', 2550, 'images/Homepage/PN15.jpg', 25, 'The best classic brand of jeans for guys is Levi\'s. The brand is a denim pioneer and offers affordable and high-quality jeans in a range of styles.'),
(17, 'Men\'s Shoes & Sneakers Nike', 10500, 'images/Homepage/PN16.jpg', 30, 'Get laced up for training, sport, and lifestyle with the latest designs of men\'s shoes and sneakers from Nike.com.'),
(18, 'High Heels Sandals', 8500, 'images/Homepage/PN17.jpg', 30, 'High Heels Sandals · Beige Ray Pencil High Heels · Peanut Brown Heels · Dark Knight Block Heels · Likewise Leopard Print Heels'),
(19, 'Stuffed Animals & Plush Toys', 10000, 'images/Homepage/PN18.jpg', 40, 'Online shopping for Toys & Games from a great selection of Plush Pillows, Stuffed Animals & Teddy Bears'),
(20, 'Acoustic Guitars', 25000, 'images/Homepage/PN19.jpg', 50, 'Acoustic Guitars. An acoustic guitar doesnt rely on electronics to make sound; instead, the guitar transmits sound from the vibration of the string');

-- --------------------------------------------------------

--
-- Table structure for table `customershipping`
--

CREATE TABLE `customershipping` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customershipping`
--

INSERT INTO `customershipping` (`id`, `username`, `fullname`, `email`, `address`, `city`, `state`, `zip`) VALUES
(1, '', 'Chathuka Viduranga', 'chathuka.viduranga.bc@gmail.com', '102A/1, Madamulla', 'Minuwangoda', 'Western Province', '11550'),
(2, '', 'Chathuka Viduranga', 'chathuka.viduranga.bc@gmail.com', '102A/1,, Madamulla', 'Minuwangoda', 'Western Province', '11550'),
(3, '', 'Chathuka Viduranga', 'chathuka.viduranga.bc@gmail.com', '102A/1,, Madamulla', 'Minuwangoda', 'Western Province', '11550'),
(4, '', 'Chathuka Viduranga', 'chathuka.viduranga.bc@gmail.com', '102A/1,, Madamulla', 'Minuwangoda', 'Western Province', '11550'),
(5, '', 'Chathuka Viduranga', 'chathuka.viduranga.bc@gmail.com', '102A/1,, Madamulla', 'Minuwangoda', 'Western Province', '11550'),
(6, '', 'Chathuka Viduranga', 'chathuka.viduranga.bc@gmail.com', '102A/1,, Madamulla', 'Minuwangoda', 'Western Province', '11550'),
(7, 'chathuka', 'Chathuka Viduranga', 'chathuka.viduranga.bc@gmail.com', '102A/1,, Madamulla', 'Minuwangoda', 'Western Province', '11550'),
(8, 'chathuka', 'Chathuka Viduranga', 'chathuka.viduranga.bc@gmail.com', '102A/1,, Madamulla', 'Minuwangoda', 'Western Province', '11550'),
(9, 'chathuka', 'Chathuka Viduranga', 'manulap@gmail.com', 'adrvftvtbyn', 'Minuwangoda', 'asdfg', '11250');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`name`, `email`, `subject`) VALUES
('Chathuka Viduranga', 'chathuka.viduranga.bc@gmail.com', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `glowy`
--

CREATE TABLE `glowy` (
  `Customer_ID` int(50) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `E_mail` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `glowy`
--

INSERT INTO `glowy` (`Customer_ID`, `First_Name`, `Last_Name`, `User_Name`, `E_mail`, `Password`) VALUES
(1, 'chathuka', 'chathuka', 'chathuka', 'chathuka.viduranga.bc@gmail.com', 'chathuka');

-- --------------------------------------------------------

--
-- Table structure for table `home_product`
--

CREATE TABLE `home_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `product_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_product`
--

INSERT INTO `home_product` (`id`, `product_name`, `product_price`, `product_image`, `product_code`, `product_desc`) VALUES
(1, 'Levis collection of men\'s casual t-shirts, Simple plain t-shirts', '1200.00', 'images/Homepage/P1.jpg', 'P0001', 'Find out why Levi\'s® shirts for men are a must-have closet staple, perfect for any outfit. '),
(2, 'Branded Tshirts Tops for Women ', '1500.00', 'images/Homepage/PN1.jpg', 'P0002', 'Levi\'s® women\'s shirts, blouses & denim tops are a modern twist on classic styles that have defined generations. '),
(3, 'Men\'s Citizen Endeavour Watch AW1428-53X ', '5500.00', 'images/Homepage/PN10.jpg', 'P0003', 'A watch is a portable timepiece intended to be carried or worn by a person'),
(4, 'Nikon D3500 DSLR Camera with 18-55mm ', '75000.00', 'images/Homepage/PN3.jpg', 'P0004', 'Nikon cameras have been trusted by photographers and picture takers of every caliber for their enduring performance'),
(5, 'A Foundation & Concealer Palette', '3500.00', 'images/Homepage/PN4.jpg', 'P0005', 'A primer is the first and the most integral part of a girl\'s makeup');

-- --------------------------------------------------------

--
-- Table structure for table `just_for_you`
--

CREATE TABLE `just_for_you` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(11) NOT NULL,
  `product_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `just_for_you`
--

INSERT INTO `just_for_you` (`id`, `product_name`, `product_price`, `product_image`, `product_code`, `product_desc`) VALUES
(1, 'Apple iPhone 5s - Full set', 35000, 'images/Homepage/PN2.jpg', 'J0001', 'Apple iPhone 5s · Released 2013, September 20 · 112g, 7.6mm thickness · iOS 7, up to iOS 12.4.6 · 16GB/32GB/64GB storage'),
(2, 'Shampoo & Conditioner', 750, 'images/Homepage/PN11.jpg', 'J0002', 'Shampoo is a hair care product, typically in the form of a viscous liquid, that is used for cleaning hair. '),
(3, 'Fresh Oranges', 75.5, 'images/Homepage/PN12.jpg', 'J0003', 'There is nothing quite refreshing like a freshly squeezed oranges. Try it out for yourself!'),
(4, 'Vegetable pack', 1350, 'images/Homepage/PN13.jpg', 'J0004', 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants '),
(5, 'Burger ', 1050, 'images/Homepage/PN14.jpg', 'J0005', 'Hamburger, a sandwich consisting of one or more cooked patties, is placed inside a sliced bread roll or bun. ');

-- --------------------------------------------------------

--
-- Table structure for table `new_collections`
--

CREATE TABLE `new_collections` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` int(11) NOT NULL,
  `product_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_collections`
--

INSERT INTO `new_collections` (`id`, `product_name`, `product_price`, `product_image`, `product_code`, `product_desc`) VALUES
(1, 'MacBook Air - Apple', 255000, 'images/Homepage/PN5.jpg', 10001, 'MacBook Air is completely transformed by the power of the Apple-designed M1 chip. Up to 3.5x faster CPU, 5x faster graphics, and 18 hours of battery life.'),
(2, 'Apple iPhone 12 Pro Max', 150000, 'images/Homepage/PN6.jpg', 10002, 'Apple iPhone 12 Pro Max · Released 2020, November 13 · 228g, 7.4mm thickness · iOS 14.1, up to iOS 15 · 128GB/256GB/512GB storage'),
(3, 'Logitech G733 Lightspeed Wireless Gaming Headset', 5500, 'images/Homepage/PN7.jpg', 10003, 'Best Buy customers often prefer the following products when searching for White Headsets.'),
(4, 'AirPods Pro - Apple', 4500, 'images/Homepage/PN8.jpg', 10004, 'AirPods Pro is sweat and water-resistant for non-water sports and exercise. AirPods Pro were tested under controlled laboratory conditions'),
(5, 'Brand new Smart Watches ', 3550, 'images/Homepage/PN9.jpg', 10005, 'Smartwatches pair with your phone to put messaging and apps right on your wrist. They don\'t simply clone your phone');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobilenumber` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`ID`, `firstname`, `lastname`, `email`, `mobilenumber`, `username`, `password`) VALUES
(1, 'manula', 'rox', 'na bn email', 'numbers na', 'manula', 'minuli');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `SellerID` int(11) NOT NULL,
  `SellerName` varchar(100) NOT NULL,
  `Shopname` varchar(100) NOT NULL,
  `ProductTitle` varchar(255) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `AboutProduct` varchar(500) NOT NULL,
  `Productprice` double NOT NULL,
  `ProductQuantity` int(255) NOT NULL,
  `product_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`SellerID`, `SellerName`, `Shopname`, `ProductTitle`, `Category`, `AboutProduct`, `Productprice`, `ProductQuantity`, `product_img`) VALUES
(1, 'asdf', 'asdfgh', 'asdf', 'Electronics-Devices', 'asdf', 123, 4, '4505-test.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `up_comming`
--

CREATE TABLE `up_comming` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(11) NOT NULL,
  `product_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `up_comming`
--

INSERT INTO `up_comming` (`id`, `product_name`, `product_price`, `product_image`, `product_code`, `product_desc`) VALUES
(1, 'Men\'s Branded Denim ', 2550, 'images/Homepage/PN15.jpg', 'N0001', 'The best classic brand of jeans for guys is Levi\'s. The brand is a denim pioneer and offers affordable and high-quality jeans in a range of styles.'),
(2, 'Men\'s Shoes & Sneakers Nike', 10500, 'images/Homepage/PN16.jpg', 'N0002', 'Get laced up for training, sport, and lifestyle with the latest designs of men\'s shoes and sneakers from Nike.com.'),
(3, 'High Heels Sandals', 8500, 'images/Homepage/PN17.jpg', 'N0003', 'High Heels Sandals · Beige Ray Pencil High Heels · Peanut Brown Heels · Dark Knight Block Heels · Likewise Leopard Print Heels'),
(4, 'Stuffed Animals & Plush Toys', 10000, 'images/Homepage/PN18.jpg', 'N0004', 'Online shopping for Toys & Games from a great selection of Plush Pillows, Stuffed Animals & Teddy Bears'),
(5, 'Acoustic Guitars', 25000, 'images/Homepage/PN19.jpg', 'N0005', 'Acoustic Guitars. An acoustic guitar doesnt rely on electronics to make sound; instead, the guitar transmits sound from the vibration of the string');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allitems`
--
ALTER TABLE `allitems`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `customershipping`
--
ALTER TABLE `customershipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glowy`
--
ALTER TABLE `glowy`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `home_product`
--
ALTER TABLE `home_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `just_for_you`
--
ALTER TABLE `just_for_you`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_collections`
--
ALTER TABLE `new_collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`SellerID`);

--
-- Indexes for table `up_comming`
--
ALTER TABLE `up_comming`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allitems`
--
ALTER TABLE `allitems`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customershipping`
--
ALTER TABLE `customershipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `glowy`
--
ALTER TABLE `glowy`
  MODIFY `Customer_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_product`
--
ALTER TABLE `home_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `just_for_you`
--
ALTER TABLE `just_for_you`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new_collections`
--
ALTER TABLE `new_collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `SellerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `up_comming`
--
ALTER TABLE `up_comming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
