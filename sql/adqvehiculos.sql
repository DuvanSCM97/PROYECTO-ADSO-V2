-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2025 a las 20:11:10
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adqvehiculos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `ID_EMPLEADO` int(17) NOT NULL,
  `NOMEMP` varchar(60) DEFAULT NULL,
  `CARGO` varchar(60) DEFAULT NULL,
  `TELEMP` int(15) DEFAULT NULL,
  `CORREO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginusuarios`
--

CREATE TABLE `loginusuarios` (
  `CORRUSUARIO` varchar(30) NOT NULL,
  `PASWUSER` varchar(20) NOT NULL,
  `NOMUSR` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `loginusuarios`
--

INSERT INTO `loginusuarios` (`CORRUSUARIO`, `PASWUSER`, `NOMUSR`) VALUES
('dscasilimas@misena.edu.co', 'duvan1234', 'Duvan Steeven Casilimas Mota'),
('dscasilimas@misena.edu.co', 'duvan1234', 'Duvan Steeven Casilimas Mota'),
('duvanstevencm@gmail.com', 'duvan123', 'DUVAN CASILIMAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(17) NOT NULL,
  `TIPDOC` varchar(60) DEFAULT NULL,
  `NOMUSR` varchar(60) DEFAULT NULL,
  `TELUSR` int(11) DEFAULT NULL,
  `CORRUSR` varchar(60) DEFAULT NULL,
  `CATLICEN` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `ID_Vehiculo` int(17) NOT NULL,
  `MARCA` varchar(60) DEFAULT NULL,
  `MODELO` varchar(60) DEFAULT NULL,
  `AÑOVEH` int(4) DEFAULT NULL,
  `VALOR` decimal(17,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID_EMPLEADO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`ID_Vehiculo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
