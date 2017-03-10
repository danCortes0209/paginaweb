-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Servidor: 10.123.0.209:3306
-- Tiempo de generación: 10-03-2017 a las 03:47:45
-- Versión del servidor: 5.7.15
-- Versión de PHP: 5.4.45-0+deb7u7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dancor36_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `producto` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `existencias` varchar(5) NOT NULL,
  `p_compra` varchar(10) NOT NULL,
  `p_venta` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `descripcion`, `existencias`, `p_compra`, `p_venta`) VALUES
(1, 'martillo', 'para clavar clavos', '15', '20.50', '25.50'),
(2, 'calculadora', 'para hacer calculos con funciones', '20', '10.50', '12.50'),
(3, 'telefono', 'para hacer llamadas', '5', '4500.00', '5799.99'),
(4, 'Coca Cola', 'para refrescar la sed', '300', '7.00', '9.99');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
