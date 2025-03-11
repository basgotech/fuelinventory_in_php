-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2025 at 02:08 PM
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
-- Database: `gsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `oil_inventory`
--

CREATE TABLE `oil_inventory` (
  `oil_id` int(11) NOT NULL,
  `oil_lit_type` decimal(11,0) DEFAULT NULL,
  `oil_price` float DEFAULT NULL,
  `amount` decimal(11,0) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oil_inventory`
--

INSERT INTO `oil_inventory` (`oil_id`, `oil_lit_type`, `oil_price`, `amount`, `reg_date`) VALUES
(2, 1, 1000, 30, '2025-03-05 11:08:48'),
(3, 3, 2900, 21, '2025-03-05 11:17:44'),
(4, 5, 10000, 12, '2025-03-05 11:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `pay_method` text DEFAULT NULL,
  `pay_reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `pay_method`, `pay_reg_date`) VALUES
(1, 'CASH', '2025-03-06 07:21:00'),
(2, 'CBE', '2025-03-06 07:22:14'),
(6, 'AWASH', '2025-03-10 05:44:29'),
(7, 'Tele Birr', '2025-03-10 08:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `tanker_inventory`
--

CREATE TABLE `tanker_inventory` (
  `tanker_id` int(11) NOT NULL,
  `fuel_type` text DEFAULT NULL,
  `quantity_litter` decimal(10,0) DEFAULT NULL,
  `price_by_lttr` float DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanker_inventory`
--

INSERT INTO `tanker_inventory` (`tanker_id`, `fuel_type`, `quantity_litter`, `price_by_lttr`, `added_date`) VALUES
(2, 'Diesel', 1413, 99.3, '2025-03-05 07:28:04'),
(3, 'Gasoline', 6000, 100.1, '2025-03-05 07:28:55'),
(8, 'Benzin', 1000, 102.4, '2025-03-05 12:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tra_id` int(11) NOT NULL,
  `fuel_type` text DEFAULT NULL,
  `quantity_liters` text DEFAULT NULL,
  `single_price` float DEFAULT NULL,
  `total_price` text DEFAULT NULL,
  `payed_by` text DEFAULT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `day` int(11) DEFAULT NULL,
  `week` int(11) DEFAULT NULL,
  `month` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `type` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`tra_id`, `fuel_type`, `quantity_liters`, `single_price`, `total_price`, `payed_by`, `transaction_date`, `day`, `week`, `month`, `year`, `type`) VALUES
(5, 'Diesel ', '10', 99.3, '993', '2 ', '2025-03-10 08:53:37', 10, 1, 3, 25, 1),
(6, 'Gasoline ', '890', 100.1, '89089', '1 ', '2025-03-10 08:54:54', 10, 1, 3, 25, 1),
(7, 'Diesel ', '67', 99.3, '6653.1', '1 ', '2025-03-11 05:43:20', 11, 2, 3, 25, 1),
(8, 'Gasoline ', '1000', 100.1, '100100', '2 ', '2025-03-11 05:43:47', 11, 2, 3, 25, 1),
(9, '1 ', '1', 1000, '1000', '1 ', '2025-03-11 08:07:07', 11, 2, 3, 25, 2),
(10, '3 ', '1', 2900, '2900', '1 ', '2025-03-11 08:09:54', 11, 2, 3, 25, 2),
(11, '3 ', '1', 2900, '2900', '1 ', '2025-03-11 08:10:38', 11, 2, 3, 25, 2),
(12, '1 ', '4', 1000, '4000', '2 ', '2025-03-11 08:10:58', 11, 2, 3, 25, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'basliel@gmail.com', '4297f44b13955235245b2497399d7a93', 'mayuri.infospace@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oil_inventory`
--
ALTER TABLE `oil_inventory`
  ADD PRIMARY KEY (`oil_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `tanker_inventory`
--
ALTER TABLE `tanker_inventory`
  ADD PRIMARY KEY (`tanker_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tra_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oil_inventory`
--
ALTER TABLE `oil_inventory`
  MODIFY `oil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tanker_inventory`
--
ALTER TABLE `tanker_inventory`
  MODIFY `tanker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
