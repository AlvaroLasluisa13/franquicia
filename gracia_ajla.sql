-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2023 a las 19:53:38
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gracia_ajla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `franquicia_ajla`
--

CREATE TABLE `franquicia_ajla` (
  `id_ajla` int(11) NOT NULL,
  `latitud_ajla` float DEFAULT NULL,
  `longitud_ajla` float DEFAULT NULL,
  `lugar_ajla` varchar(100) DEFAULT NULL,
  `telefono_ajla` varchar(100) DEFAULT NULL,
  `propietario_ajla` varchar(100) DEFAULT NULL,
  `tipo_ajla` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `franquicia_ajla`
--

INSERT INTO `franquicia_ajla` (`id_ajla`, `latitud_ajla`, `longitud_ajla`, `lugar_ajla`, `telefono_ajla`, `propietario_ajla`, `tipo_ajla`) VALUES
(11, -1.22386, -78.6057, 'ambato', '09876543212', 'raul reyes', 'Nuevo'),
(12, -1.45451, -78.7815, 'Guayaquil', '0987765578', 'eri huilactoma', 'Nuevo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `franquicia_ajla`
--
ALTER TABLE `franquicia_ajla`
  ADD PRIMARY KEY (`id_ajla`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `franquicia_ajla`
--
ALTER TABLE `franquicia_ajla`
  MODIFY `id_ajla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
