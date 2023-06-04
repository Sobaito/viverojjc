-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2023 a las 13:24:52
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vivero_bbdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(2, 'correo@correo.com', '$2y$10$9d5uaqDgQQch3x8WxM.4keubzyO3lZ260EywdOYsw9aIjWi1y4XZC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivero`
--

CREATE TABLE `vivero` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `sol` int(3) NOT NULL,
  `agua` int(1) NOT NULL,
  `frio` int(3) NOT NULL,
  `fechaSembrado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vivero`
--

INSERT INTO `vivero` (`id`, `nombre`, `imagen`, `descripcion`, `sol`, `agua`, `frio`, `fechaSembrado`) VALUES
(13, 'Manzano', 'd52c4d79bb8b5bb78bd272a723f445a2.jpg', 'Nuestros manzanos son árboles de tamaño mediano, ideales para jardines y huertos pequeños. Alcanzan alturas de hasta 4 metros y tienen una copa amplia y redondeada. Los manzanos son muy decorativos durante la primavera con sus hermosas flores blancas y rosadas, y producen manzanas sabrosas en otoño. ¡Un árbol frutal perfecto para cualquier hogar!', 40, 2, 2, '2023-05-01'),
(14, 'Albaricoques', '80a5ed6b48ea485634c2b18fda041255.jpg', 'Los albaricoques de nuestro vivero son árboles frutales de hoja caduca que crecen hasta 3-4 metros de altura. Tienen una copa redondeada y densa con hojas verdes y ovaladas. Las flores son de color blanco o rosado y aparecen en grupos antes que las hojas. Los frutos son redondos y suaves, de piel aterciopelada amarilla y carne dulce y jugosa en su interior. Son resistentes y se adaptan bien a diferentes tipos de suelo.', 30, 2, 1, '2023-05-01'),
(15, 'Limonero', '55403cf094d1d3496c84378893965079.jpg', 'Nuestros limoneros son árboles frutales saludables y de alta calidad. Tienen un tamaño mediano, alcanzando alturas de hasta 4 metros. El limonero es un árbol ornamental con una copa redondeada y hojas verdes brillantes. Produce frutos amarillos y jugosos en invierno, y es perfecto para añadir sabor a cualquier plato o bebida. Ideal para jardines y patios pequeños.', 40, 1, 3, '2020-01-08'),
(16, 'Cerezo', 'b53b2346ec4614b3507bbf3ca6bdd396.jpg', ' Contamos con cerezos de hoja caduca que crecen hasta 4-6 metros de altura. Tienen una copa redondeada y densa con hojas verdes y ovaladas. Las flores son de color rosa o blanco y aparecen en primavera antes que las hojas. Los frutos son redondos y suaves, de piel roja o amarilla y una pulpa dulce y jugosa en su interior. Son resistentes y se adaptan bien a diferentes tipos de suelo y climas, por lo que son una excelente opción para jardines y paisajes urbanos.', 20, 2, 2, '2021-10-13'),
(17, 'Granado', 'bf267325efde3fb4586ff0f9ceb5e37f.jpg', 'Son árboles frutales de hoja perenne que crecen hasta 3-4 metros de altura. Tienen una copa densa y redondeada con hojas verdes brillantes y flores de color naranja rojizo que aparecen en grupos antes que las hojas. Los frutos son redondos y tienen una piel gruesa de color rojo oscuro y una pulpa jugosa y dulce en el interior. Son resistentes a la sequía y se adaptan bien a diferentes tipos de suelo, por lo que son una excelente opción para jardines y paisajes urbanos.', 30, 2, 1, '2022-06-09'),
(18, 'Peral', '635f392dca4b830fcb8ef6512e611b14.jpg', 'Los perales de nuestro vivero son árboles frutales de hoja caduca que crecen hasta 4-6 metros de altura. Tienen una copa redondeada y densa con hojas verdes ovaladas y flores blancas o rosadas que aparecen en primavera antes que las hojas. Los frutos son peras redondas o alargadas con una piel delgada de color amarillo o verde y una pulpa jugosa y dulce en su interior. Son resistentes y se adaptan bien a diferentes tipos de suelo y climas.', 40, 3, 2, '2022-02-18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vivero`
--
ALTER TABLE `vivero`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vivero`
--
ALTER TABLE `vivero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
