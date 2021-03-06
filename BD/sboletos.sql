-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-11-2017 a las 06:09:54
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sboletos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletos`
--

DROP TABLE IF EXISTS `boletos`;
CREATE TABLE IF NOT EXISTS `boletos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial` int(11) NOT NULL,
  `evento` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `boletos`
--

INSERT INTO `boletos` (`id`, `serial`, `evento`, `fecha`, `ubicacion`, `usuario`) VALUES
(1, 32366, 'Heaven And Hells', '12/12/2012', 'Altos', 'jose'),
(24, 3525, 'sdsd', '24234', 'Altos', 'jose'),
(27, 342, 'rwe', '252', 'Medios', 'd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `cedula`, `direccion`, `sexo`, `telefono`, `email`, `usuario`, `password`, `admin`) VALUES
(6, 'Gerifruncio Maizeno', 'De La Consolacion', 123456, 'Junto a Merceria Paquita', 'otro', '08001235555', 'malindranio@gmail.com', 'p3tr0m1n0', 'chanchan', 0),
(2, 'Josefono', 'Perez', 25638324, 'Heaven', 'masculino', '04127777', 'elsegundo@hotmail.com', 'jose', 'epa', 0),
(3, 'Javier Humberto', 'Bastidas Quintero', 25632200, 'Santa Ana', 'masculino', '04149796050', 'javier7bastidas@gmail.com', 'javier7b', 'JavierHBQ7', 1),
(5, 'Marco Tulio', 'Ramirez', 24322309, 'Las Vegas', 'masculino', '041723742', 'marcot.ramirez@unet.edu.ve', 'marco', 'mako', 1),
(13, 'Dayona', 'Herrera', 26768068, 'La Concordia', 'femenino', '041472612414', 'dayo@', 'dayo', '8', 0),
(16, 'Epa', 'le', 4524, 'dvsdv', 'masculino', '4346', 'vfb', 'd', 'e', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
