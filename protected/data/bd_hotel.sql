-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2013 a las 18:42:31
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_hotel`
--
CREATE DATABASE IF NOT EXISTS `bd_hotel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_hotel`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alojamiento`
--

CREATE TABLE IF NOT EXISTS `alojamiento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numero_alojamiento` varchar(15) NOT NULL,
  `tipo_alojamiento` int(10) unsigned NOT NULL,
  `estado` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_alojamiento_tipo_alojamiento1_idx` (`tipo_alojamiento`),
  KEY `fk_alojamiento_estado1_idx` (`estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE IF NOT EXISTS `detalle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `factura` int(10) unsigned NOT NULL,
  `producto` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_detalle_factura1_idx` (`factura`),
  KEY `fk_detalle_producto1_idx` (`producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_rol`
--

CREATE TABLE IF NOT EXISTS `empleado_rol` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rol` int(10) unsigned NOT NULL,
  `empleado` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_empleado_rol_rol1_idx` (`rol`),
  KEY `fk_empleado_rol_persona1_idx` (`empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `estado` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reserva` int(10) unsigned NOT NULL,
  `fecha_factura` date NOT NULL,
  `total_factura` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_factura_reserva1_idx` (`reserva`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `horario_entrada` datetime NOT NULL,
  `horario_salida` datetime NOT NULL,
  `empleado_rol` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_horario_empleado_rol1_idx` (`empleado_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huesped_reserva`
--

CREATE TABLE IF NOT EXISTS `huesped_reserva` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reserva` int(10) unsigned NOT NULL,
  `huesped` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_huesped_reserva_reserva1_idx` (`reserva`),
  KEY `fk_huesped_reserva_persona1_idx` (`huesped`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `numero_documento` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `lugar_procedencia` varchar(30) DEFAULT NULL,
  `hoja_vida` varchar(60) DEFAULT NULL,
  `tipo_persona` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_persona_tipo_persona1_idx` (`tipo_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_producto` varchar(60) NOT NULL,
  `precio_producto` double NOT NULL,
  `iva` double NOT NULL DEFAULT '0.16',
  `tipo_servicio` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_producto_tipo_servicio1_idx` (`tipo_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_entrada` datetime NOT NULL,
  `fecha_salida` datetime NOT NULL,
  `empleado_rol` int(10) unsigned NOT NULL,
  `alojamiento` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reserva_empleado_rol1_idx` (`empleado_rol`),
  KEY `fk_reserva_alojamiento1_idx` (`alojamiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_rol` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_alojamiento`
--

CREATE TABLE IF NOT EXISTS `tipo_alojamiento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_tipo_alojamiento` varchar(30) NOT NULL,
  `numero_personas` int(11) NOT NULL,
  `numero_camas` int(11) NOT NULL,
  `tarifa_alojamiento` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE IF NOT EXISTS `tipo_persona` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_tipo_persona` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE IF NOT EXISTS `tipo_servicio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_tipo_servicio` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(40) NOT NULL,
  `persona` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_persona1_idx` (`persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alojamiento`
--
ALTER TABLE `alojamiento`
  ADD CONSTRAINT `fk_alojamiento_tipo_alojamiento1` FOREIGN KEY (`tipo_alojamiento`) REFERENCES `tipo_alojamiento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alojamiento_estado1` FOREIGN KEY (`estado`) REFERENCES `estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `fk_detalle_factura1` FOREIGN KEY (`factura`) REFERENCES `factura` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_producto1` FOREIGN KEY (`producto`) REFERENCES `producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado_rol`
--
ALTER TABLE `empleado_rol`
  ADD CONSTRAINT `fk_empleado_rol_rol1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empleado_rol_persona1` FOREIGN KEY (`empleado`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_factura_reserva1` FOREIGN KEY (`reserva`) REFERENCES `reserva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `fk_horario_empleado_rol1` FOREIGN KEY (`empleado_rol`) REFERENCES `empleado_rol` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `huesped_reserva`
--
ALTER TABLE `huesped_reserva`
  ADD CONSTRAINT `fk_huesped_reserva_reserva1` FOREIGN KEY (`reserva`) REFERENCES `reserva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_huesped_reserva_persona1` FOREIGN KEY (`huesped`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_persona_tipo_persona1` FOREIGN KEY (`tipo_persona`) REFERENCES `tipo_persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_tipo_servicio1` FOREIGN KEY (`tipo_servicio`) REFERENCES `tipo_servicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_reserva_empleado_rol1` FOREIGN KEY (`empleado_rol`) REFERENCES `empleado_rol` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reserva_alojamiento1` FOREIGN KEY (`alojamiento`) REFERENCES `alojamiento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_persona1` FOREIGN KEY (`persona`) REFERENCES `persona` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
