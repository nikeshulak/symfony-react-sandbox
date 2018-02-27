-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 07:04 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfreact`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `description`, `image`) VALUES
(1, 'Paella', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat efficitur venenatis. Proin eros nisl, maximus id tristique et, placerat a felis. Integer finibus lacinia pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla ipsum libero, fringilla id mollis molestie, maximus quis lectus. Sed euismod, risus interdum mattis rhoncus, lectus sem lacinia eros, eu gravida sapien nunc eu risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras ultrices nunc eget congue viverra. Nulla finibus metus mi, in porttitor neque laoreet quis. Proin ut lacinia felis, sit amet mollis ligula. In tincidunt posuere volutpat. Morbi aliquet nunc dolor, ut consequat lacus maximus vitae. Donec orci sem, interdum quis scelerisque et, tincidunt ut nibh. Vivamus bibendum suscipit urna, et rutrum felis suscipit non.', 'paella.jpg'),
(2, 'Carbonara', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat efficitur venenatis. Proin eros nisl, maximus id tristique et, placerat a felis. Integer finibus lacinia pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla ipsum libero, fringilla id mollis molestie, maximus quis lectus. Sed euismod, risus interdum mattis rhoncus, lectus sem lacinia eros, eu gravida sapien nunc eu risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras ultrices nunc eget congue viverra. Nulla finibus metus mi, in porttitor neque laoreet quis. Proin ut lacinia felis, sit amet mollis ligula. In tincidunt posuere volutpat. Morbi aliquet nunc dolor, ut consequat lacus maximus vitae. Donec orci sem, interdum quis scelerisque et, tincidunt ut nibh. Vivamus bibendum suscipit urna, et rutrum felis suscipit non.', 'carbonara.jpg'),
(3, 'Falafel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat efficitur venenatis. Proin eros nisl, maximus id tristique et, placerat a felis. Integer finibus lacinia pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla ipsum libero, fringilla id mollis molestie, maximus quis lectus. Sed euismod, risus interdum mattis rhoncus, lectus sem lacinia eros, eu gravida sapien nunc eu risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras ultrices nunc eget congue viverra. Nulla finibus metus mi, in porttitor neque laoreet quis. Proin ut lacinia felis, sit amet mollis ligula. In tincidunt posuere volutpat. Morbi aliquet nunc dolor, ut consequat lacus maximus vitae. Donec orci sem, interdum quis scelerisque et, tincidunt ut nibh. Vivamus bibendum suscipit urna, et rutrum felis suscipit non.', 'falafel.jpg'),
(4, 'Sushi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat efficitur venenatis. Proin eros nisl, maximus id tristique et, placerat a felis. Integer finibus lacinia pretium. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla ipsum libero, fringilla id mollis molestie, maximus quis lectus. Sed euismod, risus interdum mattis rhoncus, lectus sem lacinia eros, eu gravida sapien nunc eu risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras ultrices nunc eget congue viverra. Nulla finibus metus mi, in porttitor neque laoreet quis. Proin ut lacinia felis, sit amet mollis ligula. In tincidunt posuere volutpat. Morbi aliquet nunc dolor, ut consequat lacus maximus vitae. Donec orci sem, interdum quis scelerisque et, tincidunt ut nibh. Vivamus bibendum suscipit urna, et rutrum felis suscipit non.', 'sushi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
