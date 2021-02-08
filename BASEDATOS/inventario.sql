-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2021 a las 07:15:09
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `perfil` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `perfil`) VALUES
(1, 'Admin'),
(2, 'DirGen'),
(3, 'Personal'),
(4, 'DirDep');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `codigo` int(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `img` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo`, `nombre`, `fecha_ingreso`, `cantidad`, `img`) VALUES
(1, 12345, 'Laptop Gamer Hp', '2021-02-03', 5, 'https://d22k5h68hofcrd.cloudfront.net/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/2/R/2RJ23LA-1_T1540958860.png'),
(2, 65432, 'Mouse Gamer Aurus', '2021-02-03', 5, 'https://redragonla.com/wp-content/uploads/2019/04/M908-6.png'),
(3, 98758, 'Cpu Gamer AMD', '2021-02-03', 10, 'https://sgmhost.com.mx/wp-content/uploads/2020/06/Screenshot43.png'),
(4, 256489, 'CPU GAMER DELUXE', '2021-02-03', 10, 'https://assets.spartangeek.com/cc/ew-thor-1_200106_021015.png?mtime=20200105201016&focal=none'),
(5, 74589, 'CPU RYZEN AMD', '2021-02-03', 20, 'https://res.cloudinary.com/cdnco/image/upload/w_250/omarberrio/imgs/products/assamblies/case-crystal-g9.png'),
(6, 58924, 'CPU RYZER GAMER', '2021-01-07', 30, 'https://static.wixstatic.com/media/11632c_ea61d760b7d64860be77d8e8e5618d6f~mv2.png/v1/fill/w_1260,h_709,al_c/11632c_ea61d760b7d64860be77d8e8e5618d6f~mv2.png'),
(7, 74152, 'CPU DELUXE CYPERPUNK', '2021-01-20', 10, 'https://gamefactor.mx/images/galeria_articulos/CSG500-00.png'),
(73, 654321, 'Monitor Gamer Asus', '2021-02-07', 100, 'https://spartangeek.com/blog/content/images/2019/06/monitor-gamer.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `perfil` int(11) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `perfil`, `nombre`, `usuario`, `pass`, `correo`) VALUES
(1, 1, 'Jasiel', 'BERSERK', '12345', 'useradmin@gmail.com'),
(2, 4, 'Naiby', 'JEFA', '12345', 'userdir@gmail.com'),
(3, 2, 'Alex', 'POLLO', '12345', 'usergen@gmail.com'),
(4, 3, 'Damaris', 'DAMACR7', '12345', 'userper@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `perfil` (`perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil`) REFERENCES `perfil` (`id_perfil`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
