-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 16-09-2020 a las 16:37:17
-- Versión del servidor: 10.5.5-MariaDB-1:10.5.5+maria~focal
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Erabiltzaileak`
--

CREATE TABLE `Erabiltzaileak` (
`NAN` varchar(9) NOT NULL,
`Pasahitza` varchar(20) NOT NULL,
`IzenAbizena` varchar(30) NOT NULL,
`TelefonoZenbakia` int(9) NOT NULL,
`JaiotzeData` varchar(11) NOT NULL,
`Email` varchar(30) NOT NULL,
`ErabId`varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Erabiltzaileak`
--

INSERT INTO `Erabiltzaileak`(`NAN`,`IzenAbizena`, `TelefonoZenbakia`, `JaiotzeData`, `Email`, `Pasahitza`,`ErabId`) VALUES 
('72319114F', 'Eneko Perez', '635823255','2002/08/18', 'eperez151@ikasle.ehu.eus', 'ep151eneko','eneko05'), ('72335264F', 'Eneko Basauri', '635678254','2002/03/11', 'ebasauri02@ikasle.ehu.eus', 'enekoBasau1','eneko29'), ('72319987F', 'Aimar Larrazabal', '638743222','2002/04/30', 'alarrazabal7@ikasle.ehu.eus', 'larra1234','aimar1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Altzariak`
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
-- Volcado de datos para la tabla `Altzariak`
--

INSERT INTO `Altzariak`(`IdProduktu`, `Izena`, `Kolorea`, `Mota`, `Prezioa`, `Tamaina`) VALUES 
('1','Smallen', 'Beltza', 'Aulkia','30€', '80cm x 50cm x 50cm'), ('2','Bogglen', 'Horia', 'Ohea','60€', '80cm x 150cm x 200cm'), ('1001','Swnick', 'Gorria', 'Mahaia','20€', '100cm x 100cm x 200cm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
`ErabId`varchar(30) NOT NULL,
`Pasahitza` varchar(20) NOT NULL, 
`saiaKop` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

-- --------------------------------------------------------

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Erabiltzaileak`
--
ALTER TABLE `Erabiltzaileak`
  ADD PRIMARY KEY (`ErabId`);

--
-- Indices de la tabla `Altzariak`
--
ALTER TABLE `Altzariak`
  ADD PRIMARY KEY (`IdProduktu`);

--
-- Indices de la tabla `Erabiltzaileak`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ErabId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
