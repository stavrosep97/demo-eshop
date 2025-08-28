-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 02:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `featured` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `description`, `product_image`, `featured`) VALUES
(1, 'Samsung S24 Ultra ', '1500$', 'The S24 Ultra is a feature-packed smartphone designed to impress. <br>\r\nIt boasts a stunning 6.8-inch AMOLED<\r\ndisplay and an advanced camera<br>\r\nsystem with ultra-wide, telephoto, and macro lenses. Powered by a robust<br>\r\nprocessor and equipped with a long-lasting\r\nbattery, it ensures seamless<br>\r\nmultitasking and gaming. With 5G connectivity, sleek design, enhanced<br>\r\nsecurity features, and water and dust\r\nresistance, it offers both style<br>\r\nand durability for an exceptional mobile\r\nexperience.', '/eshop/images/s24.jpg', 1),
(2, 'Iphone 15 Pro Max', '1300$', 'The iPhone 15 Pro Max packs a 6.9-inch<br>\r\nSuper Retina XDR display with ProMotion<br>\r\ntechnology for a seamless 120Hz refresh<br> rate. Powered by the A15 Bionic chip,<br> it ensures smooth performance <br>and multitasking, with storage options up to 1TB. <br>Its triple-lens camera system <br>captures stunning photos with<br>\r\n12MP wide, ultra-wide, and telephoto lenses, enhanced by<br> computational photography features.\r\nWith 5G connectivity,<br> MagSafe improvements, IP68 water<br> and dust resistance, and iOS 16,\r\nit offers a<br> comprehensive and advanced user experience.', '/eshop/images/iphone.jpg', 1),
(3, 'Xiaomi 14 Ultra', '1600$', 'The Xiaomi 14 Ultra boasts a magnificent\r\n6.8-inch AMOLED<br> display, delivering vibrant<br>\r\ncolors and sharp visuals. Powered by Qualcomm\'s<br>\r\nflagship Snapdragon processor, it ensures<br>\r\nblazing-fast performance and seamless multitasking.<br>\r\nIts sophisticated camera system includes high-resolution<br>\r\nlenses, offering exceptional detail and clarity in<br> every shot.\r\nWith support for 5G connectivity,<br> a sizable battery, and fast\r\ncharging<br> capabilities, it keeps you connected <br>and powered up\r\nall day long.', '/eshop/images/xiaomi.jpg', 0),
(4, 'Poxo X6 Pro 512GB', '600$', 'The Poco X6 Pro features a captivating 6.67-inch display,<br>\r\ndelivering immersive visuals and vibrant colors. Powered<br>\r\nby a robust Qualcomm Snapdragon chipset, it ensures smooth<br>\r\nperformance and efficient multitasking. Its versatile camera<br>\r\nsetup includes high-resolution sensors, allowing for detailed<br>\r\nand crisp photography in various lighting conditions.<br> With\r\nsupport for 5G connectivity, a large battery<br> capacity, and fast\r\ncharging technology, <br>it keeps you connected and powered throughout<br>\r\nthe day.', '/eshop/images/poco x6 pro.jpg', 0),
(5, 'Razer Gaming Mouse', '100$', 'The Razer gaming mouse is a high-performance<br> peripheral\r\ndesigned for competitive gaming. <br>With its ergonomic design\r\nand customizable<br> buttons, it offers comfort and precision <br>during\r\nlong gaming sessions. Equipped with <br>advanced optical sensors and\r\ncustomizable DPI settings,<br> it ensures accurate and responsive<br>\r\ntracking, crucial for gaming success.', '/eshop/images/razer.jpg', 0),
(6, 'Iphone 15 128GB', '800$', 'The iPhone 15 is a cutting-edge smartphone that <br>pushes\r\nthe boundaries of technology and innovation.<br> With its\r\nsleek design and premium build quality,<br> it exudes elegance\r\nand sophistication. Powered by the <br>latest A15 Bionic chip,\r\nit offers unparalleled performance <br>and efficiency,\r\nhandling even the most demanding tasks with ease.<br>\r\nIts advanced camera system captures stunning photos<br>\r\nand videos, leveraging computational photography to<br>\r\ndeliver exceptional results in any lighting condition.', '/eshop/images/iphone 15.jpg', 0),
(7, 'Lenovo Legion 5 Gaming Laptop ', '1600$', 'The Lenovo Legion 5 is a formidable gaming laptop<br>\r\nengineered for high-performance gaming experiences.<br>\r\nIts robust design and premium build quality ensure<br>\r\ndurability and reliability even during intense<br>\r\ngaming sessions. Powered by powerful AMD Ryzen or<br>\r\nIntel Core processors, paired with NVIDIA GeForce<br>\r\ngraphics, it delivers exceptional gaming performance<br>\r\nwith smooth frame rates and stunning visuals.', '/eshop/images/lenovolegion.jpg', 0),
(8, 'Xiaomi Redmi A3', '100$', 'The Redmi A3 is a versatile smartphone designed<br>\r\nto deliver reliable performance and essential<br>\r\nfeatures at an affordable price point. With its<br>\r\nsleek design and compact form factor, it offers a<br>\r\ncomfortable grip and stylish appearance. Powered<br>\r\nby a Qualcomm Snapdragon processor, it provides smooth<br>\r\neveryday performance for common tasks such as browsing<br>\r\nthe web, social media, and multimedia consumption.', '/eshop/images/a3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(24, 'stavros ', 's.epifaniou@nup.ac.cy', '$2y$10$0.SnDzGw6amgARs6CdhGKukjuj87zW/fzlrc.NtfUA3TTzkGGmpJm'),
(25, 'dimitris ', 'd.pasir@nup.ac.cy', '$2y$10$afrgdXsIs..1j2xAShig0Okze.3.ntAfivi8er82jbzF7YWLfyT0q'),
(27, 'tasos', 'tasos@gmail.com', '$2y$10$vPkpje02R0WdmSdfT0Z5xOudG/.wg1c0Ydd7VsBBfBS4hJi/jppw2'),
(28, 'pan', 'makre@hotmail.com', '$2y$10$L1CTaELg7MKradWaZGOjOuKpebWpdRx6AFwnlA7uL2tTV7Jv4qIV.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
