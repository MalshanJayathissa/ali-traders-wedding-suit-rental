-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 01, 2024 at 10:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `child_ladies_admin_control`
--

CREATE TABLE `child_ladies_admin_control` (
  `id` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child_ladies_admin_control`
--

INSERT INTO `child_ladies_admin_control` (`id`, `description`, `image`, `price`) VALUES
(4, 'Saree 1', 'resized_1691255595-inbound68808170694951034.jpg', 6599),
(5, 'Saree 2', 'resized_1697176171-inbound2657476797257874694.jpg', 8999),
(6, 'Saree 3', 'resized_1693386055-inbound3115051660054233798.jpg', 10),
(65, 'aaaaa', 'df', 1111),
(89, 'dsv', 'sdv', 898),
(634, 'scac', 'ca', 34345);

-- --------------------------------------------------------

--
-- Table structure for table `child_mens_admin_control`
--

CREATE TABLE `child_mens_admin_control` (
  `id` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child_mens_admin_control`
--

INSERT INTO `child_mens_admin_control` (`id`, `description`, `image`, `price`) VALUES
(1, 'Nilame Costume 1\r\n\r\n', 'resized_1709449788-DSC00093.jpg', 4999),
(2, 'Nilame Costume 2', 'resized_1702558457-DSC00207.jpg', 6999),
(3, 'Nilame Costume 3', 'resized_1709449788-DSC00093.jpg', 7999);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `qty` int(4) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `description`, `image`, `qty`, `price`) VALUES
(31, 'Nilame Costume 1\r\n\r\n', 'resized_1709449788-DSC00093.jpg', 1, 4999),
(37, 'Nilame Costume 1\r\n\r\n', 'resized_1709449788-DSC00093.jpg', 2, 4999);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_name`, `email`, `password`) VALUES
('asd', 'asd@gmail.com', '$2y$10$QsQiG.oxYteg4of6OkdlfeZvXnaje4QaBXHqipdoGvEGXkED/0tlS'),
('dumindu', 'dumindu@gmail.com', '$2y$10$YBR63rbgHI91x9TFnNmO2uhNgyTBGwwGroxJmBNpSNXplWJXzOOR2'),
('Gihan', 'dileepamalshan638@gmail.com', '$2y$10$POGa/g4Hf9Y9wfPTbzAfMejN7kcA3DMYjIbMDt5JkpxfKBFKuFMs.'),
('lithira', 'lithira@gmail.com', '$2y$10$pNygYxJRi5SSMHUSZjqZv.q2C/mjB7mZfJp4EjBdGcCNtCGGkA0qO'),
('malshan12', 'dileepamalshan8@gmail.com', '$2y$10$9AkTruuIjjlsNNeV9ptEXujnicajh2B9QNby/FZaicPv8A2F5y05G'),
('malshan123', 'dileepamalshan86@gmail.com', '$2y$10$0hvnHtWc7NghW75uhZM0AeTRGLr8EQGqzJjw.UyLw8DLatXBjyVxK'),
('pahan', 'pahan@gmail.com', '$2y$10$FOI16o3DtHjCtvv19xRjT.ul2jGRNGIE4iUFPXz/ibsJsbYjni8va'),
('pahan sithru', 'pahansithrumobile12345@gmail.com', '$2y$10$ShCxvML2iQaQQhCSQaPJieQPyBB/M5hvAiLIhv1hCfzcmWcYifV3K'),
('shashika', 'dileepamalshan7@gmail.com', '$2y$10$3GXP/dFEmnhLnCQte6g9s.pTsp1Buelja/Q4j7phzjEHfQF1u0TnO');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(20) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`name`, `address`, `district`, `contact_no`, `email`) VALUES
('erg', 'fdb', 'fdb', 5151, 'dbce@gmail.com'),
('malshan', 'vcgwvde', 'ferg', 5215565, 'fg@gmail.com'),
('dfgdg', 'gdfg', 'dfgg', 3515, 'fgerge@gmail.com'),
('eh56', 'rth', 'rth', 6465, 'rth@gmail.com'),
('gvg', 'agn', 'fn', 515, 'tgft@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `younger_ladies_admin_control`
--

CREATE TABLE `younger_ladies_admin_control` (
  `id` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `younger_ladies_admin_control`
--

INSERT INTO `younger_ladies_admin_control` (`id`, `description`, `image`, `price`) VALUES
(7, 'Wedding Frock', 'resized_1691768161-inbound4886544377180861438.jpg', 7599),
(8, 'Wedding Frock', 'resized_1693386170-inbound6246814986656423998.jpg', 8000),
(9, 'Wedding Frock', 'resized_1697176197-inbound1912074110987844435.jpg', 5599);

-- --------------------------------------------------------

--
-- Table structure for table `younger_mens_admin_control`
--

CREATE TABLE `younger_mens_admin_control` (
  `id` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `younger_mens_admin_control`
--

INSERT INTO `younger_mens_admin_control` (`id`, `description`, `image`, `price`) VALUES
(10, 'Men Western Dress 1', '1_20160811_HolidayEcom_WhiteJacketTuxedo_0127_R1812x1875_new.webp', 9999),
(11, 'Men Western Dress 2', '13_Split_Tartan_Jacket_Tuxedo33_2023_8496JacketCrop_2812x3750_14a95063-7e0f-45f4-bff7-d97f5b07.webp', 7599),
(12, 'Men Western Dress 3', 'x19_New_Line_Black_Suit_2023_3816_CloseUpJacket_af8e4515-e6ba-42f7-9f85-8a652f692bfc - Copy.jpg', 5599);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child_ladies_admin_control`
--
ALTER TABLE `child_ladies_admin_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_mens_admin_control`
--
ALTER TABLE `child_mens_admin_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `younger_ladies_admin_control`
--
ALTER TABLE `younger_ladies_admin_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `younger_mens_admin_control`
--
ALTER TABLE `younger_mens_admin_control`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
