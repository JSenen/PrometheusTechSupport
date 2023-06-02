-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 02-06-2023 a las 18:13:23
-- Versión del servidor: 5.7.39
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prometheusdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `date_comment` datetime(6) DEFAULT NULL,
  `ticket_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `department`
--

CREATE TABLE `department` (
  `department_id` bigint(20) NOT NULL,
  `department_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `id` bigint(20) NOT NULL,
  `date_end` datetime(6) DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `phone_unit` varchar(255) DEFAULT NULL,
  `priority` varchar(255) DEFAULT 'active',
  `theme` varchar(255) DEFAULT NULL,
  `department_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`id`, `date_end`, `date_start`, `description`, `phone_unit`, `priority`, `theme`, `department_id`, `user_id`) VALUES
(16, NULL, '2023-06-01', 'Intento encender pero no veo lucecitas', '0710111', 'fixed', 'PC NO ARRANCA', NULL, 14),
(17, NULL, '2023-06-01', 'No puedo navegar por paginas de periódicos', '07000001', 'fixed', 'SIN CONEXION RED', NULL, 15),
(18, NULL, '2023-06-01', 'Que clave se usa para multiusuario', '0707070', 'fixed', 'CONFIGURAR MOVIL', NULL, 16),
(19, NULL, '2023-06-01', 'Con la nueva impresora no se imprimir', '0710111', 'fixed', 'No se imprimir', NULL, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket_state`
--

CREATE TABLE `ticket_state` (
  `state_id` bigint(20) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `ticket_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'user',
  `user_unit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_password`, `user_phone`, `role`, `user_unit`) VALUES
(13, 'GATI', '$2y$10$qiI6pECKwgjWeN.Crxq94uB/sQAZcGMH1ocnfz6XAfA1GzpfPijYC', '0700047', 'admin', 'GATI BARCELONA'),
(14, 'A11111A', '$2y$10$gCvAK336JRPNGC9ckxunIOfpAUcZSJhPJ8LHRypxPVAwiw69OawRW', '0710111', 'user', 'PESADOS'),
(15, 'B12345B', '$2y$10$2ygJ.LqVyz56o2R3dye1s.4hkV//RyN5GJ3juOlGkSGqFDJWlmL66', '07000001', 'user', 'GENERAL JEFE'),
(16, 'B22222B', '$2y$10$EbKvLTS5WF46cEyqiEa8be2k64a4Nw2QV3lJGiM6hgVFg4v/mK5ai', '0707070', 'user', 'PJ PLANA'),
(17, 'C33333C', '$2y$10$Lc6rrQeikQsqW/OyN3VnM.yxN9.fYkTao9jruQZPV6NW8.lMKOmqG', '0700101', 'user', 'INFO ZONA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `FKg0qfxjfr46wyg3x1l8awqhxdp` (`ticket_id`);

--
-- Indices de la tabla `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKdsmw3fh1l8ocqs3jr3vquskh6` (`department_id`),
  ADD KEY `FKgn7f8646lh27rfc1lxuv3v9j7` (`user_id`);

--
-- Indices de la tabla `ticket_state`
--
ALTER TABLE `ticket_state`
  ADD PRIMARY KEY (`state_id`),
  ADD UNIQUE KEY `UK_32waq7m2uvq2fm3ijehhcjqmb` (`ticket_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `department`
--
ALTER TABLE `department`
  MODIFY `department_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `ticket_state`
--
ALTER TABLE `ticket_state`
  MODIFY `state_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FKg0qfxjfr46wyg3x1l8awqhxdp` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`);

--
-- Filtros para la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `FKdsmw3fh1l8ocqs3jr3vquskh6` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `FKgn7f8646lh27rfc1lxuv3v9j7` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `ticket_state`
--
ALTER TABLE `ticket_state`
  ADD CONSTRAINT `FKh0157jcysf0u374lu2qynvq5f` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
