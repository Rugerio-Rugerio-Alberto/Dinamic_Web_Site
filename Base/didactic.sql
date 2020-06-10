-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2020 a las 08:09:51
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `didactic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id_Empleado` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `Postal` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `Id_Pedido` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `PRODUCTO` varchar(100) NOT NULL,
  `CANTIDAD` varchar(100) NOT NULL,
  `Postal` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Fecha_reg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_Producto` int(11) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  `Producto` varchar(100) NOT NULL,
  `Marca` varchar(100) NOT NULL,
  `Precio` varchar(100) NOT NULL,
  `Existencia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_Producto`, `Categoria`, `Producto`, `Marca`, `Precio`, `Existencia`) VALUES
(1, 'OFICINA', 'BORRADOR', 'ERASER', '$65.68', '84'),
(2, 'OFICINA', 'LAMPARA', 'LUMINIC', '$455.99', '24'),
(3, 'OFICINA', 'ECRITORIO', 'SOL', '$2499.99', '58'),
(4, 'OFICINA', 'PERFORADORA', 'NORMA', '$45.36', '32'),
(5, 'DIDACTICO', 'TIJERAS', 'ROM', '$15.63', '51'),
(6, 'DIDACTICO', 'MARCADOR', 'SHARPIE', '$18.36', '35'),
(7, 'DIDACTICO', 'PEGAMENTO', 'NORMA', '$12.87', '41'),
(8, 'DIDACTICO', 'LIBRETA(P)', 'NORMA', '$87.56', '87'),
(9, 'PRODUCTO', 'COSEDORA', 'SIC', '$364.98', '68'),
(10, 'PRODUCTO', 'CINTA', 'PEGI', '$25.99', '14'),
(11, 'PRODUCTO', 'ENGRAPADORA', 'SMART', '$79.36', '18'),
(12, 'PRODUCTO', 'BROCHES', 'BACO', '$12.00', '125');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_Usuario` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Clave` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Localidad` varchar(100) NOT NULL,
  `Postal` varchar(100) NOT NULL,
  `Pais` varchar(100) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `Fecha_reg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Id_Venta` int(11) NOT NULL,
  `Total` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Fecha_reg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_Empleado`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`Id_Pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_Producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Id_Venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Id_Empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `Id_Pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `Id_Venta` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
