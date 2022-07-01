-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2022 a las 17:23:17
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `opcion6`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico_usuario`
--

CREATE TABLE `historico_usuario` (
  `run` varchar(20) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historico_usuario`
--

INSERT INTO `historico_usuario` (`run`, `nombre`, `apellido`, `telefono`, `direccion`, `fecha`, `hora`) VALUES
('13.952.605-8', 'Raul', 'Carrera', '(+56) 942851967', 'Conden 224', '2022-07-01', '09:23:17'),
('20.125.111-7', 'Bersabeth', 'Montalba', '(+56) 958723577', 'La peña 2, pasaje volcan isluga, #1876', '2022-07-01', '09:26:14'),
('20.513.316-5', 'Wladimir', 'Medina', '(+56) 934120758', 'Poblacion Villa nueva ilusion, pasaje los copihues', '2022-07-01', '09:20:47'),
('20.955.427-5', 'Kevin', 'Solar', '(+56) 954714457', 'Calle lanco encalada, #150', '2022-07-01', '09:21:30'),
('20.957.689-7', 'Marco', 'Troncoso', '(+56) 9 15456895', 'Arauco, calle los alemanes, casa#1645', '2022-07-01', '11:22:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id` tinyint(4) NOT NULL,
  `juegos_resultado` varchar(60) DEFAULT NULL,
  `score_final` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `juegos_resultado`, `score_final`) VALUES
(1, 'Call of duty Black Ops', '4.90'),
(2, 'Dead Space™', '8.35'),
(3, 'Dead Space™ 2', '12.70'),
(4, 'Dead Space™ 3', '15.25'),
(5, 'Dungeon Keeper™', '14.50'),
(6, 'Dungeon Keeper™ 2', '10.85'),
(7, 'Mirror\'s Edge (2009)', '14.30'),
(8, 'Call of duty Black Ops II', '17.75'),
(9, 'Rocket Arena', '21.55'),
(10, 'Call of duty Black Ops III', '12.55'),
(11, 'Syndicate™ (1993)', '16.80'),
(12, 'A Way Out', '8.60'),
(13, 'Alice: Madness Returns™', '22.33'),
(14, 'Fe', '19.42'),
(15, 'It Takes Two', '14.66'),
(16, 'Valorant', '11.10'),
(17, 'Lost in Random™', '13.75'),
(18, 'Mirror\'s Edge™ Catalyst', '15.70'),
(19, 'Rebel Galaxy', '21.50'),
(20, 'Sea of Solitude', '24.10'),
(21, 'The Saboteur™', '16.25'),
(22, 'STAR WARS Jedi: Fallen Order™', '19.70'),
(23, 'Burnout™ Paradise Remastered', '9.40'),
(24, 'Need for Speed™', '14.95'),
(25, 'Need for Speed™ Heat', '17.60'),
(26, 'Need for Speed™ Hot Pursuit Remastered', '10.55'),
(27, 'Need for Speed™ Most Wanted', '14.00'),
(28, 'Need for Speed™ Payback', '17.45'),
(29, 'Need for Speed™ Rivals', '20.10'),
(30, 'FIFA 20', '8.70'),
(31, 'FIFA 21', '17.50'),
(32, 'Knockout City™', '20.95'),
(33, 'Madden NFL 21', '9.20'),
(34, 'Madden NFL 22', '7.40'),
(35, 'Super Mega Baseball 3', '3.60'),
(36, 'Command & Conquer™ Remastered Collection', '11.80'),
(37, 'Minecraft', '14.45'),
(38, 'Plantas contra Zombis™ edición juego del año', '17.90'),
(39, 'Fall Guys', '21.35'),
(40, 'Move Or die', '24.80'),
(41, 'Populous™', '16.95'),
(42, 'Populous™ II: Trials of the Olympian Gods', '20.40'),
(43, 'Fornite', '23.85'),
(44, 'Anthem™', '28.30'),
(45, 'Dragon Age™ II', '18.30'),
(46, 'Dragon Age™: Inquisition', '11.25'),
(47, 'Dragon Age™: Origins', '14.70'),
(48, 'HIVESWAP: Act 1', '18.15'),
(49, 'Jade Empire™: Edición Especial', '20.80'),
(50, 'The Bard’s Tale Trilogy', '24.25'),
(51, 'Ultima™ Underworld 1', '17.20'),
(52, 'Ultima™ Underworld 2', '20.65'),
(53, 'Peggle®', '24.30'),
(54, 'Peggle® Nights', '27.75'),
(55, 'Unravel™', '31.20'),
(56, 'Unravel Two', '11.50'),
(57, 'Battlefield™ 1', '15.15'),
(58, 'Battlefield 3™', '18.60'),
(59, 'Battlefield 4™', '22.05'),
(60, 'Battlefield: Bad Company™ 2', '6.50'),
(61, 'Battlefield™ Hardline', '17.65'),
(62, 'Battlefield™ V', '21.10'),
(63, 'Crysis® (2007)', '24.55'),
(64, 'Crysis® 2 Maximum Edition', '28.00'),
(65, 'Crysis® 3', '30.65'),
(66, 'Crysis Remastered', '23.60'),
(67, 'Mass Effect™ (2007)', '14.40'),
(68, 'Mass Effect™ 2 (2010)', '17.85'),
(69, 'Mass Effect™ 3 (2012)', '20.50'),
(70, 'Mass Effect™: Andromeda', '23.95'),
(71, 'Mass Effect™ Legendary Edition', '16.90'),
(72, 'Plants vs. Zombies™: La Batalla de Neighborville', '20.35'),
(73, 'Plants vs. Zombies™ Garden Warfare', '23.00'),
(74, 'Plants vs. Zombies™ Garden Warfare 2: Edición Estándar', '26.45'),
(75, 'Phasmophobia', '29.90'),
(76, 'STAR WARS™ Battlefront™ Ultimate Edition', '22.85'),
(77, 'OutClast', '16.50'),
(78, 'Titanfall™ 2', '16.30'),
(79, 'SimCity™', '20.75'),
(80, 'SimCity 2000™ Special Edition', '24.20'),
(81, 'SimCity™ 4 Deluxe Edition', '16.35'),
(82, 'SPORE™', '19.80'),
(83, 'Mario Bros', '23.25'),
(84, 'Los Sims™ 4', '26.70'),
(85, 'Medal of Honor Airborne™', '30.35'),
(86, 'STAR WARS™ Battlefront™ II', '37.80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `run` varchar(20) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `constrasena` varchar(255) DEFAULT NULL,
  `politica` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`run`, `nombre`, `apellido`, `telefono`, `direccion`, `constrasena`, `politica`) VALUES
('13.952.605-8', 'Raul', 'Carrera', '(+56) 942851967', 'Conden 224', '123456', 'Acepto las politicas y condiciones'),
('20.125.111-7', 'Bersabeth', 'Montalba', '(+56) 958723577', 'La peña 2, pasaje volcan isluga, #1876', '123456', 'Acepto las politicas y condiciones'),
('20.513.316-5', 'Wladimir', 'Medina', '(+56) 934120758', 'Poblacion Villa nueva ilusion, pasaje los copihues', '123456', 'Acepto las politicas y condiciones'),
('20.955.427-5', 'Kevin', 'Solar', '(+56) 954714457', 'Calle lanco encalada, #150', '123456', 'Acepto las politicas y condiciones'),
('20.957.689-7', 'Marco', 'Troncoso', '(+56) 9 15456895', 'Arauco, calle los alemanes, casa#1645', 'Marco159!', 'Acepto las politicas y condiciones');

--
-- Disparadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `eliminar_usuario` AFTER DELETE ON `usuario` FOR EACH ROW begin 
	insert into usuario_eliminado (run, nombre, apellido, telefono, direccion, fecha, hora)
    values (old.run, old.nombre, old.apellido, old.telefono, old.direccion, curdate(), curtime());
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertar_usuario` BEFORE INSERT ON `usuario` FOR EACH ROW begin 
	insert into historico_usuario (run, nombre, apellido, telefono, direccion, fecha, hora)
    values (new.run, new.nombre, new.apellido, new.telefono, new.direccion, curdate(), curtime());
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_eliminado`
--

CREATE TABLE `usuario_eliminado` (
  `run` varchar(20) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_eliminado`
--

INSERT INTO `usuario_eliminado` (`run`, `nombre`, `apellido`, `telefono`, `direccion`, `fecha`, `hora`) VALUES
('11.111.111-1', 'pancha', 'veredas', '133', 'mi casa', '2022-07-01', '10:34:25'),
('18.821.888-1', 'alan', 'brito', '934120758', 'Poblacion Villa nueva ilusion, pasaje los copihues', '2022-07-01', '11:19:14'),
('20.866.865-k', 'Sebastian', 'Riquelme', '(+56) 937271001', 'Pasaje volcan miño, #2941', '2022-07-01', '11:22:46'),
('22.222.222-2', 'alan', 'Medina', '934120758', 'Calle lanco encalada, #150', '2022-07-01', '11:19:19'),
('33.333.333-3', 'alan', 'solar', '934120758', 'Poblacion Villa nueva ilusion, pasaje los copihues', '2022-07-01', '11:19:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_juegos`
--

CREATE TABLE `usuario_has_juegos` (
  `usuario_run` varchar(20) NOT NULL,
  `juegos_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historico_usuario`
--
ALTER TABLE `historico_usuario`
  ADD PRIMARY KEY (`run`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`run`);

--
-- Indices de la tabla `usuario_eliminado`
--
ALTER TABLE `usuario_eliminado`
  ADD PRIMARY KEY (`run`);

--
-- Indices de la tabla `usuario_has_juegos`
--
ALTER TABLE `usuario_has_juegos`
  ADD PRIMARY KEY (`usuario_run`,`juegos_id`),
  ADD KEY `fk_usuario_has_juegos_juegos1_idx` (`juegos_id`),
  ADD KEY `fk_usuario_has_juegos_usuario_idx` (`usuario_run`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario_has_juegos`
--
ALTER TABLE `usuario_has_juegos`
  ADD CONSTRAINT `fk_usuario_has_juegos_juegos1` FOREIGN KEY (`juegos_id`) REFERENCES `juegos` (`id`),
  ADD CONSTRAINT `fk_usuario_has_juegos_usuario` FOREIGN KEY (`usuario_run`) REFERENCES `usuario` (`run`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
