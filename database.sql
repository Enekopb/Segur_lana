-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Nov 20, 2022 at 03:28 PM
-- Server version: 10.8.2-MariaDB-1:10.8.2+maria~focal
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `Altzariak`
--

CREATE TABLE `Altzariak` (
  `IdProduktu` varchar(30) NOT NULL,
  `Izena` varchar(30) NOT NULL,
  `Kolorea` varchar(30) NOT NULL,
  `Mota` varchar(30) NOT NULL,
  `Prezioa` varchar(10) NOT NULL,
  `Tamaina` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Altzariak`
--

INSERT INTO `Altzariak` (`IdProduktu`, `Izena`, `Kolorea`, `Mota`, `Prezioa`, `Tamaina`) VALUES
('1', 'Smallen', 'Beltza', 'Aulkia', '30€', '80cm x 50cm x 50cm'),
('1001', 'Swnick', 'Gorria', 'Mahaia', '20€', '100cm x 100cm x 200cm'),
('2', 'Bogglen', 'Horia', 'Ohea', '60€', '80cm x 150cm x 200cm');

-- --------------------------------------------------------

--
-- Table structure for table `Erabiltzaileak`
--

CREATE TABLE `Erabiltzaileak` (
  `NAN` varchar(9) NOT NULL,
  `Pasahitza` varchar(260) NOT NULL,
  `IzenAbizena` varchar(30) NOT NULL,
  `TelefonoZenbakia` int(9) NOT NULL,
  `JaiotzeData` varchar(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ErabId` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Erabiltzaileak`
--

INSERT INTO `Erabiltzaileak` (`NAN`, `Pasahitza`, `IzenAbizena`, `TelefonoZenbakia`, `JaiotzeData`, `Email`, `ErabId`) VALUES
('12345678A', '$2y$10$6tB8JHj3o0Oj6YDt3yXb1ufVptIk0w7X.9lrFQoKKir8YMLRSb.DW', 'proba', 123456789, '2000/01/01', 'proba@pro.ba', 'proba');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ErabId` varchar(30) NOT NULL,
  `Pasahitza` varchar(20) NOT NULL,
  `saiaKop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Altzariak`
--
ALTER TABLE `Altzariak`
  ADD PRIMARY KEY (`IdProduktu`);

--
-- Indexes for table `Erabiltzaileak`
--
ALTER TABLE `Erabiltzaileak`
  ADD PRIMARY KEY (`ErabId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ErabId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
