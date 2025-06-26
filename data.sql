-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2025 at 05:34 PM
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
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `TraineeID` varchar(5) NOT NULL,
  `TraineeName` varchar(255) NOT NULL,
  `TraineeMajor` varchar(255) NOT NULL,
  `TraineePassword` varchar(255) NOT NULL,
  `TraineeBatch` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`TraineeID`, `TraineeName`, `TraineeMajor`, `TraineePassword`, `TraineeBatch`) VALUES
('T001', 'BENEDICTUS WILLIAM FABIANO SUKRESNA', 'Computer Science', '$2y$10$wusMqo8HcDGqM.4GK7AnuOYIXyx1bvWxFRhWe8SqS5Nze1tfaK0zK', 'B27'),
('T002', 'MADE ABHIRAMA ADWITYA KARTIKA', 'Cyber Security', '$2y$10$Ne6CiTxFzYIzMQO0vd15j.yK13WcHq.f4jGuR8pSqNrY1QwSPKcA6', 'B27'),
('T003', 'MACHAEL TAN WIJAYA', 'Computer Science', '$2y$10$AbTjGPUwVOioZbiX5LXZPOJ8ifGN/AhT.W2BHY.NwWaYyD.IMhgSq', 'B27'),
('T004', 'MATTHEW ENGELBERT ', 'Computer Science', '$2y$10$CusVAwWemtsZxR/Wymv2sOsTSugzorawcM.H9iyX77YHHe1iMTFpm', 'B27'),
('T005', 'Leonard Vanderson Gani', 'Computer Science(MIT)', '$2y$10$j9TUfPa1w8.p5Vqmqqb5u.T5Fni7UOhvht6GWb/OwbOpM474AvHJW', 'B27'),
('T006', 'Jordan Grant', 'Computer Science', '$2y$10$YnHfCc535URXwN.W2jz4sucdDjDec1BQwnRvxsmj8Y9k7LcaL1cUm', 'B27'),
('T007', 'Alice Chandra', 'Computer Science(MIT)', '$2y$10$QhsVOHiRKD6u5R7bjIz3FuxPx0LEKGIJDlZTuyobkPB/Raonb2OhO', 'B27'),
('T008', 'Darren Elisy', 'Computer Science', '$2y$10$JJPVt7tdSvUlh4CYKdKpe.x62h12xW/e2s/vfA.p1g/6/ZifxfYJi', 'B27'),
('T009', 'EDUARD MARIO KAYESA', 'Computer Science', '$2y$10$kgWTlzx.7y00dK906HxwtuLIj7ZV9ucesyPB9rOAmP87ok1BMgjW.', 'B27'),
('T010', 'XAVIER RENJIRO GANESIA TALIE ', 'Computer Science', '$2y$10$EPgIi5tZCOn25Mg8ywoyJe3NwuA5kPvW6hDFlh2auGHh0Rq5jdSO6', 'B27'),
('T011', 'Raymond Surya Setiawan', 'Computer Science', '$2y$10$wh83IyKB5byk7fWTt.dfROQeEYGmLCs9aWFBTlqdkT5ZbpsSE/6HG', 'B27'),
('T012', 'Melati Rinjani Gunawan', 'Information Systems and Accounting', '$2y$10$N5X/8q3zSIXr/AGZYuP5beH/BtSEflNgWPf0yQjpML24G921Bz5QC', 'B27'),
('T013', 'Juan Verron Anggani', 'Computer Science', '$2y$10$5BULuQVO6XgqMveIgWC7punu6KXMLN2713j8y09OVeKRmPVvbEluq', 'B27'),
('T027', 'Gavin Justine', 'Cyber Security', '$2y$10$gmSbKWqjhcDyVpgxFcsiE.Tz2N2TNh2aIq1hcPKqyoCYr12GgZM1q', 'B28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`TraineeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
