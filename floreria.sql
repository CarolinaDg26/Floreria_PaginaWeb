-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2022 a las 02:14:07
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `floreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(5) NOT NULL,
  `ruta` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `precio` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `ruta`, `nombre`, `descripcion`, `precio`) VALUES
(1, 'imagenes/2022-12-06-06-05-55-ramos.jpg', 'Ramo de Rosas', 'Ramos de rosas rosas, tamaño grande, con envió a domicilio.', '$200'),
(2, 'imagenes/2022-12-06-06-08-17-mama.jpg', 'Caja De Flores para Mamá', 'Caja de rosas y flores variadas, con diseño para regalo para mama, en formato caja.', '$250'),
(3, 'imagenes/2022-12-06-06-10-21-cumpleaños.jpg', 'Ramo Cumpleañero', 'Ramo de flores variadas, con decoración a la elección del cliente.', '$180'),
(4, 'imagenes/2022-12-06-06-11-19-corona.jpg', 'Corona ', 'Corona Fúnebre con diseño de listón a elección del cliente, flores variada.', '$700'),
(5, 'imagenes/2022-12-06-06-13-44-bodas.jpg', 'Ramo de Bodas', 'Ramo de boda con flores variadas y diseño a elección del cliente.', '$800'),
(6, 'imagenes/2022-12-06-06-14-27-cajasorpresa.jpg', 'Caja Sorpresa', 'Caja sorpresa de rosas rojas, con chocolates a elección del cliente, diseño en formato de caja.', '$190'),
(7, 'imagenes/2022-12-06-06-15-09-girasol.jpg', 'Ramo de girasoles', 'Ramo de girasoles y flores a lección, diseño en formato de ramo.', '$170'),
(8, 'imagenes/2022-12-06-06-15-49-diseños.jpg', 'Oso Rosal', 'Diseño de oso con flores a elección del cliente.', '$800'),
(9, 'imagenes/2022-12-06-06-18-07-canasta.jpg', 'Canasta de Flores', 'Canasta básica de flores, con flores a elección del cliente.', '$200'),
(10, 'imagenes/2022-12-06-06-20-09-centro.jpg', 'Centro De Mesa', 'Centro de besa en formato de árbol, flores a elección del cliente, tamaño regular.', '$900');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sesiones`
--

INSERT INTO `sesiones` (`id`, `nombre`, `apellido`, `email`, `contrasena`) VALUES
(1, 'Carolina', 'Dominguez', 'carodomg@gmail.com', '123654'),
(2, 'Eduardo', 'García', 'eduardo@email.com', '789654'),
(3, 'Mariana', 'Lopez', '9989532616', '753951'),
(4, 'Kaylani', 'Rodriguez', 'kay@gmail.com', '753214'),
(5, 'Sahara', 'León', '9999475648', '852258');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
