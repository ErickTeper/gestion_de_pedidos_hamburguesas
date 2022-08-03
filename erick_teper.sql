-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-07-2022 a las 22:57:04
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erick_teper`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_admin` int(3) NOT NULL,
  `usuario` varchar(8) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_admin`, `usuario`, `clave`) VALUES
(1, '20123456', 'admin123'),
(2, 'operario', 'admin2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocteles`
--

CREATE TABLE `cocteles` (
  `ID` int(3) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `imagen` longblob NOT NULL,
  `estado` varchar(200) NOT NULL,
  `descripcion` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cocteles`
--

INSERT INTO `cocteles` (`ID`, `nombre`, `imagen`, `estado`, `descripcion`) VALUES
(7, 'negroni', 0x6e6567726f6e692e77656270, '', 'vermuth rosso, gin, campari'),
(20, 'MOJITO', 0x6d6f6a69746f2e77656270, '', 'Ron, Menta, Lima, Azucar'),
(21, 'Daiquiri', 0x64616971756972692e6a7067, '', 'Ron, frutilla, azucar, hielo'),
(22, 'cynar Julep', 0x63796e61722e6a7067, '', 'Cynar, gaseosa pomelo, menta, limon'),
(23, 'baileys cream', 0x6261696c6579732e6a7067, '', 'baileys\r\nhelado de americana'),
(24, 'martini perfect', 0x6d617274696e692e6a7067, '', 'gin, vermuth bianco, vermuth dru'),
(25, 'aperol sprit', 0x617065726f6c2e77656270, '', 'aperol, espumante, soda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(3) NOT NULL,
  `hamburguesa` varchar(15) NOT NULL,
  `medallones` int(2) NOT NULL,
  `papas` tinyint(1) DEFAULT NULL,
  `agregado1` varchar(20) DEFAULT NULL,
  `agregado2` varchar(20) DEFAULT NULL,
  `agregado3` varchar(20) DEFAULT NULL,
  `comentarios` text DEFAULT NULL,
  `precio` int(5) NOT NULL,
  `entregado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `hamburguesa`, `medallones`, `papas`, `agregado1`, `agregado2`, `agregado3`, `comentarios`, `precio`, `entregado`) VALUES
(19, 'criolla', 2, 1, 'cheddar', '', '', '', 970, 'entregado'),
(20, 'americana', 1, 1, 'chimi', 'cheddar', 'cebolla', 'bien cocida', 1050, 'entregado'),
(21, 'mexicana', 1, 0, 'pepinillos', 'guacamole', '', '', 890, 'procesando'),
(22, 'clasica', 3, 1, 'chimi', '', '', '', 840, 'procesando'),
(23, 'mexicana', 1, 1, 'cheddar', '', '', '', 1100, 'entregado'),
(24, 'americana', 3, 1, 'cheddar', 'cebolla', 'guacamole', '', 1200, 'entregado'),
(25, 'criolla', 2, 1, '', '', '', '', 870, 'procesando'),
(26, 'clasica', 1, 1, 'pepinillos', 'guacamole', '', '', 790, 'entregado'),
(27, 'americana', 2, 0, '', '', '', '', 770, 'procesando'),
(28, 'clasica', 2, 1, 'cheddar', '', '', '', 870, 'procesando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

CREATE TABLE `reclamos` (
  `id` int(3) NOT NULL,
  `comentario` text NOT NULL,
  `imagen` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reclamos`
--

INSERT INTO `reclamos` (`id`, `comentario`, `imagen`) VALUES
(2, 'la hamburguesa llegó cruda', 0x68616d62757267756573615f63727564612e77656270);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `cocteles`
--
ALTER TABLE `cocteles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cocteles`
--
ALTER TABLE `cocteles`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
