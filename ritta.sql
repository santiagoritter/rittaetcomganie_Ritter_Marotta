-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2024 a las 22:50:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ritta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) DEFAULT NULL,
  `id_perfume` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfume`
--

CREATE TABLE `perfume` (
  `nombremarca` varchar(45) DEFAULT NULL,
  `nombremodelo` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `tamanio` int(11) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfume`
--

INSERT INTO `perfume` (`nombremarca`, `nombremodelo`, `precio`, `id`, `tamanio`, `foto`) VALUES
('jpg', 'le male Elixir', 100, 1, 125, 'fotos/lemaleelc2.png'),
('jpg', 'le male', 100, 2, 75, 'fotos/lemale.png'),
('jpg', 'scandal', 100, 3, 75, 'fotos/scandal.png'),
('Armani', 'stronger with you intensely', 100, 4, 100, 'fotos/strongerwithyou.png'),
('Antonio Banderas', 'golden secret', 200, 5, 100, 'fotos/goldensecret.png'),
('Baharara', 'king', 200, 6, 100, 'fotos/bhararaking.png'),
('Dior', 'sauvage elixir', 200, 7, 120, 'fotos/sauvage.png'),
('Dior', 'homme intens', 200, 8, 120, 'fotos/dierhommeintense.png'),
('Paco Rabbane', 'Invictus platinum', 200, 9, 120, 'fotos/invictusedt.png'),
('Paco Rabbane', 'Invictus Parfam', 200, 10, 120, 'fotos/invictusparfum.png'),
('Paco Rabbane', 'Invictus Victory Elixir', 200, 11, 120, 'fotos/invictuselexir.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `contrasenia` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `id`, `apellido`, `mail`, `contrasenia`) VALUES
('sdadasda', 4, 'fafa', 'santi.buhler1@gmail.com', '12345679'),
('lal', 12345678, '1', 'santi@gmail.com', 'santi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfume`
--
ALTER TABLE `perfume`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
