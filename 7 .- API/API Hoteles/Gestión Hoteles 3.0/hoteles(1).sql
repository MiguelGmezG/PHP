-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2024 a las 10:37:00
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hoteles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

CREATE TABLE `hoteles` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Categoria` int(11) DEFAULT NULL,
  `Habitacion` int(11) DEFAULT NULL,
  `Poblacion` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`ID`, `Nombre`, `Categoria`, `Habitacion`, `Poblacion`, `Direccion`) VALUES
(1, 'Abashiti (NA)', 3, 168, '46013 Valencia', 'Avenida Ausias March, 59'),
(2, 'Abba Acteon (Abba Hoteles)', 4, 189, '46023 Valencia', 'Escultor Vicente Bertrán Grimal, 2'),
(3, 'Acta Atarazanas', 4, 42, '46011 Valencia', 'Plaza tribunas de las aguas, 4'),
(4, 'Acta del Carmen', 3, 25, '46003 Valencia', 'Blanquerías,11'),
(5, 'AC Valencia (AC hotels)', 4, 183, '46023 Valencia', 'Avenida Francia, 67'),
(6, 'Ad Hoc Monumental Valencia', 3, 28, '46003 Valencia', 'Boix, 4'),
(7, 'Alkazar', 1, 18, '46002 Valencia', 'Mosen Femades, 11'),
(9, 'Abba Acteon (Abba Hoteles)', 4, 35, '25', 'Adsd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
