-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2020 a las 02:43:22
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basebetta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `betta`
--

CREATE TABLE `betta` (
  `Codigo` int(11) NOT NULL,
  `Clase` varchar(100) DEFAULT NULL,
  `Alias` varchar(100) DEFAULT NULL,
  `Edad` int(100) DEFAULT NULL,
  `Clasificacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desobe`
--

CREATE TABLE `desobe` (
  `id` int(11) NOT NULL,
  `betta` varchar(100) DEFAULT NULL,
  `fechaDes` varchar(100) DEFAULT NULL,
  `fechaNac` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `betta`
--
ALTER TABLE `betta`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `desobe`
--
ALTER TABLE `desobe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `desobe`
--
ALTER TABLE `desobe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
