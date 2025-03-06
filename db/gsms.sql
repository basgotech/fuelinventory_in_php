-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 01:28 PM
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
  `amount` decimal(11,0) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oil_inventory`
--

INSERT INTO `oil_inventory` (`oil_id`, `oil_lit_type`, `amount`, `reg_date`) VALUES
(2, 1, 34, '2025-03-05 11:08:48'),
(3, 3, 23, '2025-03-05 11:17:44'),
(4, 5, 12, '2025-03-05 11:17:47');

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
(3, 'bbbsss', '2025-03-06 10:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `tanker_inventory`
--

CREATE TABLE `tanker_inventory` (
  `tanker_id` int(11) NOT NULL,
  `fuel_type` text DEFAULT NULL,
  `quantity_litter` decimal(10,0) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanker_inventory`
--

INSERT INTO `tanker_inventory` (`tanker_id`, `fuel_type`, `quantity_litter`, `added_date`) VALUES
(2, 'Diesel', 1235, '2025-03-05 07:28:04'),
(3, 'Gasoline', 7890, '2025-03-05 07:28:55'),
(8, 'Benzin', 1, '2025-03-05 12:53:26'),
(10, 'CBE', NULL, '2025-03-06 07:21:17');

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
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tanker_inventory`
--
ALTER TABLE `tanker_inventory`
  MODIFY `tanker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
