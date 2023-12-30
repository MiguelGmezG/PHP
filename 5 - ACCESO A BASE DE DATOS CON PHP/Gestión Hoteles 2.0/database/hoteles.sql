-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-12-2023 a las 20:27:10
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

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
  `Nombre` varchar(255) DEFAULT NULL,
  `Categoria` int(11) DEFAULT NULL,
  `Habitacion` int(11) DEFAULT NULL,
  `Poblacion` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`Nombre`, `Categoria`, `Habitacion`, `Poblacion`, `Direccion`, `Imagen`) VALUES
('Abashiti (NA)', 3, 168, '46013 Valencia', 'Avenida Ausias March, 59', '../../database/img/hotel1.jpg'),
('Abba Acteon (Abba Hoteles)', 4, 189, '46023 Valencia', 'Escultor Vicente Bertrán Grimal, 2', '../../database/img/hotel2.jpg'),
('Acta Atarazanas', 4, 42, '46011 Valencia', 'Plaza tribunas de las aguas, 4', '../../database/img/hotel3.jpg'),
('Acta del Carmen', 3, 25, '46003 Valencia', 'Blanquerías,11', '../../database/img/hotel4.jpg'),
('AC Valencia (AC hotels)', 4, 183, '46023 Valencia', 'Avenida Francia, 67', '../../database/img/hotel5.jpg'),
('Ad Hoc Monumental Valencia', 3, 28, '46003 Valencia', 'Boix, 4', '../../database/img/hotel6.jpg'),
('Alkazar', 1, 18, '46002 Valencia', 'Mosen Femades, 11', '../../database/img/hotel1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
