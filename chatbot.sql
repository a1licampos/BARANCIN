-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2021 a las 08:51:20
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, '¿me podría dar información?', 'Claro! Barancin es una plataforma de E-Commerce en la cual se maneja la compra de productos agropecuarios ¿Está interesado en adquirir  algunos de nuestros productos?'),
(2, 'si', 'Los productos que manejamos en estos momentos son: El café, Cacao y la miel'),
(3, '¿dónde puedo comunicarme con ustedes?', 'Le proporcionamos el correo de Barancin: barancinmx@gmail.com'),
(4, '¿qué productos tienen?', 'Contamos con: Café, Cacao y Miel'),
(5, '¿dónde puedo hacer la compra?', 'Le proporcionamos el siguiente link en el cual puede realizar su compras: http://localhost/BARANCIN/tienda.php'),
(6, '¿qué métodos de pago tienen?', 'Para que la compra sea segura aceptamos pagos con tarjeta de credito/debito a tráves de pay pal o directamente con pay pal'),
(7, 'información', 'Barancin es una plataforma de E-Commerce en la cual se maneja la compra de productos agropecuarios como lo son: El café, el cacao y la miel, por dar algunos ejemplos, ¿Está interesado en dquirir  algunos de nuestros productos?'),
(8, 'no', 'Muchas gracias por su atencion eperamos verlo pronto por aqui! Que tenga un maravilloso día '),
(9, '¿cuándo llega mi pedido?', 'Aproximadamente en 2 días hábiles'),
(10, '¿dónde puedo saber más de Barancin?', 'En nuestro blog: http://localhost/BARANCIN/blog.php');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
