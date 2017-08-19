-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-08-2017 a las 16:53:16
-- Versión del servidor: 5.7.15-log
-- Versión de PHP: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcomercial`
--
CREATE DATABASE IF NOT EXISTS `bdcomercial` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bdcomercial`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cli` int(11) NOT NULL,
  `nom_cli` varchar(50) NOT NULL,
  `ci_cli` varchar(10) NOT NULL,
  `tel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cli`, `nom_cli`, `ci_cli`, `tel`) VALUES
(2, 'SUSANA TERCEROS', '222', '67192838'),
(3, 'FRANKLIN MAMANI', '123', '6352524'),
(4, 'ADRIANA VILLALOVOS', '321', '524524');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `n_compra` int(11) NOT NULL,
  `id_cli` int(11) NOT NULL,
  `imp_tot` int(11) NOT NULL,
  `fechac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`n_compra`, `id_cli`, `imp_tot`, `fechac`) VALUES
(1, 1, 150, '2017-05-31'),
(2, 1, 200, '2017-05-31'),
(3, 1, 250, '2017-05-31'),
(4, 3, 0, '2017-06-27'),
(5, 3, 0, '2017-06-27'),
(8, 4, 180, '2017-06-27'),
(9, 4, 120, '2017-06-27'),
(10, 4, 120, '2017-06-27'),
(11, 3, 190, '2017-06-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallec`
--

CREATE TABLE `detallec` (
  `n_compra` int(11) NOT NULL,
  `id_detc` int(11) NOT NULL,
  `cod_prod` varchar(5) NOT NULL,
  `cantc` int(11) NOT NULL,
  `imp_detc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallec`
--

INSERT INTO `detallec` (`n_compra`, `id_detc`, `cod_prod`, `cantc`, `imp_detc`) VALUES
(3, 1, 'PR3', 2, 280),
(3, 2, 'PR1', 1, 50),
(3, 3, 'PR4', 2, 240),
(3, 4, 'PR2', 1, 30),
(3, 5, 'PR3', 1, 140),
(3, 6, 'PR1', 1, 50),
(4, 8, 'PR1', 1, 50),
(4, 9, 'PR4', 1, 120),
(5, 10, 'PR2', 1, 30),
(11, 23, 'PR3', 1, 140),
(11, 24, 'PR1', 1, 50),
(12, 38, 'PR1', 1, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallev`
--

CREATE TABLE `detallev` (
  `n_detv` int(11) NOT NULL,
  `cod_pro` int(11) NOT NULL,
  `n_venta` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `importe_detv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_prod` varchar(5) NOT NULL,
  `nom_prod` varchar(50) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `punit` int(11) NOT NULL,
  `existe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_prod`, `nom_prod`, `marca`, `punit`, `existe`) VALUES
('PR1', 'TECLADO', 'GENIUS', 50, 18),
('PR2', 'MOUSE', 'DELUX', 30, 25),
('PR3', 'MONITOR', 'LG', 140, 11),
('PR4', 'MONITOR', 'SAMSUNG', 120, 12),
('PR5', 'MONITOR TACTIL', 'SONY', 2100, 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idprove` int(11) NOT NULL,
  `nomprove` varchar(20) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `dir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `n_venta` int(11) NOT NULL,
  `idprove` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `impote_tot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cli`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`n_compra`);

--
-- Indices de la tabla `detallec`
--
ALTER TABLE `detallec`
  ADD PRIMARY KEY (`id_detc`);

--
-- Indices de la tabla `detallev`
--
ALTER TABLE `detallev`
  ADD PRIMARY KEY (`n_detv`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_prod`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idprove`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`n_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `n_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `detallec`
--
ALTER TABLE `detallec`
  MODIFY `id_detc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `detallev`
--
ALTER TABLE `detallev`
  MODIFY `n_detv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idprove` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `n_venta` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
