-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2019 a las 18:00:20
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_multimedia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_usuario` int(255) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `rut` varchar(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apell_pat` varchar(50) NOT NULL,
  `apell_mat` varchar(50) NOT NULL,
  `correo_institucional` varchar(50) NOT NULL,
  `telefono` int(9) NOT NULL,
  `tipo_usario` varchar(50) NOT NULL,
  `id_login` int(255) NOT NULL,
  `id_sala` int(255) NOT NULL,
  `id_usuario` int(255) NOT NULL,
  `correo_personal` varchar(50) NOT NULL,
  `promocion` int(4) NOT NULL,
  `edad` int(3) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`rut`, `nombres`, `apell_pat`, `apell_mat`, `correo_institucional`, `telefono`, `tipo_usario`, `id_login`, `id_sala`, `id_usuario`, `correo_personal`, `promocion`, `edad`, `foto`) VALUES
('-', '', '', '', '', 0, '', 0, 0, 0, '', 0, 0, ''),
('1885245-2', 'dsasdsad', 'qwetuipd123', '2etwrqe123', 'asdqwe@gmail.comd', 123456789, 'honorario', 0, 0, 0, 'alumna@gmail.com123', 0, 0, 'cam/crops/5c8092a81b148.jpg'),
('18852451-2', 'dsasdsad', 'qwetuipd123', '2etwrqe123', 'asdqwe@gmail.comd', 123456789, 'honorario', 0, 0, 0, 'alumna@gmail.com123', 0, 0, 'cam/crops/5c8092a81b148.jpg'),
('18852456-0', 'dsasdsad', 'qwetuipd123', '2etwrqe123', 'asdqwe@gmail.comd', 123456789, 'honorario', 0, 0, 0, 'alumna@gmail.com123', 0, 0, 'cam/crops/5c8092a81b148.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramo`
--

CREATE TABLE `ramo` (
  `cod_ramo` int(255) NOT NULL,
  `nom_ramo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `id_sala` int(255) NOT NULL,
  `numero_sala` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `rut` varchar(10) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`rut`, `usuario`, `contraseña`) VALUES
('-', '-', '-'),
('1885245-2', '1885245-2', '1885245-2'),
('18852451-2', '18852451-2', '18852451-2'),
('18852456-0', '18852456-0', '18852456-0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE `visita` (
  `id_visita` int(255) NOT NULL,
  `fecha` date NOT NULL,
  `hora_sali` time NOT NULL,
  `hora_entra` time NOT NULL,
  `observacion` varchar(255) NOT NULL,
  `num_lab` int(3) NOT NULL,
  `rut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `visita`
--

INSERT INTO `visita` (`id_visita`, `fecha`, `hora_sali`, `hora_entra`, `observacion`, `num_lab`, `rut`) VALUES
(1, '2019-03-01', '00:00:00', '00:00:00', '12123', 103, '18852456-0'),
(2, '2019-03-01', '00:00:00', '00:00:00', '125125', 105, '18852456-0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `id_login` (`id_login`),
  ADD KEY `id_sala` (`id_sala`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `ramo`
--
ALTER TABLE `ramo`
  ADD PRIMARY KEY (`cod_ramo`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id_sala`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `visita`
--
ALTER TABLE `visita`
  ADD PRIMARY KEY (`id_visita`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_usuario` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ramo`
--
ALTER TABLE `ramo`
  MODIFY `cod_ramo` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `id_sala` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `visita`
--
ALTER TABLE `visita`
  MODIFY `id_visita` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
