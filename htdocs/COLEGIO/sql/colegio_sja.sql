-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2017 a las 02:52:47
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colegio_sja`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `nacionalidad_alum` enum('V','E') COLLATE utf8_spanish_ci NOT NULL,
  `ci_alum` int(11) NOT NULL,
  `primer_nom_alum` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `seg_nom_alum` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `primer_ape_alum` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `seg_ape_alum` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo_alum` enum('femenino','masculino') COLLATE utf8_spanish_ci NOT NULL,
  `nacimiento_alum` date DEFAULT NULL,
  `direccion_alum` text COLLATE utf8_spanish_ci,
  `telefono_alum` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_alum` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `año_idaño` int(10) UNSIGNED NOT NULL,
  `estatus` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`nacionalidad_alum`, `ci_alum`, `primer_nom_alum`, `seg_nom_alum`, `primer_ape_alum`, `seg_ape_alum`, `sexo_alum`, `nacimiento_alum`, `direccion_alum`, `telefono_alum`, `email_alum`, `año_idaño`, `estatus`) VALUES
('V', 1, 'Yenny', NULL, 'Álvarez', NULL, 'femenino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 2, 'Eduardo', NULL, 'Amundarai', NULL, 'masculino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 3, 'José', NULL, 'Ávila', NULL, 'masculino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 4, 'Hector', NULL, 'Blanco', NULL, 'masculino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 5, 'Juan', NULL, 'Blanco', NULL, 'masculino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 6, 'Richard', NULL, 'Brandy', NULL, 'masculino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 7, 'Luther', NULL, 'Bravo', NULL, 'masculino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 8, 'Wilmer', NULL, 'Carao', NULL, 'masculino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 9, 'Ruth', NULL, 'Celis', NULL, 'femenino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 10, 'Ivonne', NULL, 'Cordero', NULL, 'femenino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 11, 'Isabel', NULL, 'Díaz', NULL, 'femenino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 12, 'Anaida', NULL, 'Espinoza', NULL, 'femenino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 13, 'Yomelis', NULL, 'Evies', NULL, 'femenino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 14, 'Yuribi', NULL, 'Fernández', NULL, 'femenino', NULL, NULL, NULL, NULL, 1, b'1'),
('V', 16, 'Jonathan', NULL, 'Gamboa', NULL, 'masculino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 17, 'Alexandra', NULL, 'González', NULL, 'femenino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 18, 'Auley', NULL, 'González', NULL, 'femenino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 19, 'Diego', NULL, 'González', NULL, 'masculino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 20, 'Norma', NULL, 'Hernández', NULL, 'femenino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 21, 'Luis', NULL, 'Herrera', NULL, 'masculino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 22, 'Gisela', NULL, 'Izquierdo', NULL, 'femenino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 23, 'Luis', NULL, 'Lara', NULL, 'femenino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 24, 'Luibetsi', NULL, 'Laya', NULL, 'femenino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 25, 'Teresa', NULL, 'López', NULL, 'femenino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 26, 'Rablin', NULL, 'López', NULL, 'masculino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 27, 'Merly', NULL, 'Martínez', NULL, 'femenino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 28, 'Claudia', NULL, 'Medina', NULL, 'femenino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 29, 'Mary', NULL, 'Mendez', NULL, 'femenino', NULL, NULL, NULL, NULL, 2, b'1'),
('V', 31, 'Javier', NULL, 'Morgado', NULL, 'masculino', NULL, NULL, NULL, NULL, 3, b'1'),
('V', 32, 'Vladimir', NULL, 'Palacios', NULL, 'masculino', NULL, NULL, NULL, NULL, 3, b'1'),
('V', 33, 'María', NULL, 'Pereira', NULL, 'femenino', NULL, NULL, NULL, NULL, 3, b'1'),
('V', 34, 'Lidia', NULL, 'Pérez', NULL, 'femenino', NULL, NULL, NULL, NULL, 3, b'1'),
('V', 35, 'Mary', NULL, 'Pérez', NULL, 'femenino', NULL, NULL, NULL, NULL, 3, b'1'),
('V', 36, 'Alexander', NULL, 'Pino', NULL, 'masculino', NULL, NULL, NULL, NULL, 3, b'1'),
('V', 37, 'Yelitza', NULL, 'Pire', NULL, 'femenino', NULL, NULL, NULL, NULL, 3, b'1'),
('V', 38, 'Doris', NULL, 'Prada', NULL, 'femenino', NULL, NULL, NULL, NULL, 3, b'1'),
('V', 39, 'Cecilia', NULL, 'Quintero', NULL, 'femenino', NULL, NULL, NULL, NULL, 3, b'1'),
('V', 40, 'Lenny', NULL, 'Ramirez', NULL, 'masculino', NULL, NULL, NULL, NULL, 3, b'1'),
('V', 41, 'Mayerling', NULL, 'Ramos', NULL, 'femenino', NULL, NULL, NULL, NULL, 4, b'1'),
('V', 42, 'Haidee', NULL, 'Rivera', NULL, 'femenino', NULL, NULL, NULL, NULL, 4, b'1'),
('V', 43, 'Eliana', NULL, 'Rodríguez', NULL, 'femenino', NULL, NULL, NULL, NULL, 4, b'1'),
('V', 44, 'Lisset', NULL, 'Rodríguez', NULL, 'femenino', NULL, NULL, NULL, NULL, 4, b'1'),
('V', 45, 'Lenny', NULL, 'Ruíz', NULL, 'masculino', NULL, NULL, NULL, NULL, 4, b'1'),
('V', 46, 'Heidy', NULL, 'Salazar', NULL, 'femenino', NULL, NULL, NULL, NULL, 4, b'1'),
('V', 47, 'Tayde', NULL, 'Torrealba', NULL, 'femenino', NULL, NULL, NULL, NULL, 4, b'1'),
('V', 48, 'Ana', NULL, 'Torres', NULL, 'femenino', NULL, NULL, NULL, NULL, 4, b'1'),
('V', 49, 'Olga', NULL, 'Villareal', NULL, 'femenino', NULL, NULL, NULL, NULL, 4, b'1'),
('V', 50, 'Carlos', NULL, 'Quijada', NULL, 'masculino', NULL, NULL, NULL, NULL, 4, b'1'),
('V', 51, 'Romulo', NULL, 'Minera', NULL, 'masculino', NULL, NULL, NULL, NULL, 5, b'1'),
('V', 52, 'Pedro', NULL, 'Noguera', NULL, 'masculino', NULL, NULL, NULL, NULL, 5, b'1'),
('V', 53, 'María', NULL, 'Pestana', NULL, 'femenino', NULL, NULL, NULL, NULL, 5, b'1'),
('V', 54, 'Ernesto', NULL, 'Manzanilla', NULL, 'masculino', NULL, NULL, NULL, NULL, 5, b'1'),
('V', 55, 'Gerson', NULL, 'Páez', NULL, 'masculino', NULL, NULL, NULL, NULL, 5, b'1'),
('V', 56, 'Pedro', NULL, 'González', NULL, 'masculino', NULL, NULL, NULL, NULL, 5, b'1'),
('V', 57, 'Zahidet', NULL, 'Kofinke', NULL, 'femenino', NULL, NULL, NULL, NULL, 5, b'1'),
('V', 58, 'Olivia', NULL, 'Cubas', NULL, 'femenino', NULL, NULL, NULL, NULL, 5, b'1'),
('V', 59, 'José', NULL, 'Mejías', NULL, '', NULL, NULL, NULL, NULL, 5, b'1'),
('V', 60, 'Pablo', NULL, 'Guillen', NULL, 'masculino', NULL, NULL, NULL, NULL, 5, b'1'),
('V', 112, 'a', 'B', 'V', 'C', 'masculino', '2006-05-12', 'F', '443', 'JOA@COE.COM', 3, b'1'),
('V', 25000000, 'Andrea', 'Carolina', 'Palacios', 'López', 'femenino', '2004-11-11', 'Caracas', '0416000000', 'andrea@correo.com', 1, b'1'),
('V', 30000000, 'María', 'Fernanda', 'Vázquez', 'Carrero', 'femenino', '2003-03-12', 'Caracas', '04260000000', 'maria@correo.com', 4, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `año`
--

CREATE TABLE `año` (
  `idaño` int(10) UNSIGNED NOT NULL,
  `año_alum` enum('PRIMERO','SEGUNDO','TERCERO','CUARTO','QUINTO') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `año`
--

INSERT INTO `año` (`idaño`, `año_alum`) VALUES
(1, 'PRIMERO'),
(2, 'SEGUNDO'),
(3, 'TERCERO'),
(4, 'CUARTO'),
(5, 'QUINTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `nacionalidad_doc` enum('V','E') COLLATE utf8_spanish_ci DEFAULT NULL,
  `ci_docente` int(11) NOT NULL,
  `primer_nom_doc` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `seg_nom_doc` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `primer_ape_doc` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `seg_ape_doc` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo_doc` enum('femenino','masculino') COLLATE utf8_spanish_ci DEFAULT NULL,
  `nacimiento_doc` date DEFAULT NULL,
  `direccion_doc` text COLLATE utf8_spanish_ci,
  `telefono_doc` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_doc` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estatus` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`nacionalidad_doc`, `ci_docente`, `primer_nom_doc`, `seg_nom_doc`, `primer_ape_doc`, `seg_ape_doc`, `sexo_doc`, `nacimiento_doc`, `direccion_doc`, `telefono_doc`, `email_doc`, `estatus`) VALUES
(NULL, 1, 'Nelson', NULL, 'Rodríguez', NULL, 'masculino', NULL, NULL, NULL, NULL, b'1'),
(NULL, 2, 'Gustavo', NULL, 'Pérez', NULL, 'masculino', NULL, NULL, NULL, NULL, b'1'),
(NULL, 3, 'Jesús', NULL, 'Vivas', NULL, 'masculino', NULL, NULL, NULL, NULL, b'1'),
(NULL, 4, 'Hector', NULL, 'González', NULL, 'masculino', NULL, NULL, NULL, NULL, b'1'),
(NULL, 5, 'Sikiu', NULL, 'Araujo', NULL, 'femenino', NULL, NULL, NULL, NULL, b'1'),
(NULL, 6, 'Isea', NULL, 'Romer', NULL, 'femenino', NULL, NULL, NULL, NULL, b'1'),
(NULL, 7, 'Alfredo', NULL, 'Sánchez', NULL, 'masculino', NULL, NULL, NULL, NULL, b'1'),
(NULL, 8, 'Norelis', NULL, 'Uzcátegui', NULL, 'femenino', NULL, NULL, NULL, NULL, b'1'),
(NULL, 9, 'Irwing', NULL, 'Rodríguez', NULL, 'masculino', NULL, NULL, NULL, NULL, b'1'),
(NULL, 10, 'Reinaldo', NULL, 'Gómez', NULL, 'masculino', NULL, NULL, NULL, NULL, b'1'),
(NULL, 12, 'Damelis', NULL, 'Coronado', NULL, 'femenino', NULL, NULL, NULL, NULL, b'1'),
(NULL, 13, 'Henry', NULL, 'Travieso', NULL, 'masculino', NULL, NULL, NULL, NULL, b'1'),
(NULL, 14, 'Freddy', NULL, 'Obregon', NULL, 'masculino', NULL, NULL, NULL, NULL, b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `materia_cod_materia` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `materia_docente_ci_docente` int(11) NOT NULL,
  `alumno_ci_alum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`materia_cod_materia`, `materia_docente_ci_docente`, `alumno_ci_alum`) VALUES
('ARTP01', 12, 25000000),
('CSTRR01', 4, 30000000),
('MAT01', 3, 25000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lapso`
--

CREATE TABLE `lapso` (
  `cod_lapso` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `lapso` enum('Primer Lapso','Segundo Lapso','Tercer Lapso') COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `estatus` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lapso`
--

INSERT INTO `lapso` (`cod_lapso`, `lapso`, `fecha_inicio`, `fecha_fin`, `estatus`) VALUES
('2017-I', 'Primer Lapso', '2017-09-25', '2017-12-12', b'1'),
('2017-II', 'Segundo Lapso', '2017-12-03', '2017-12-12', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `cod_materia` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_materia` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `docente_ci_docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`cod_materia`, `nombre_materia`, `docente_ci_docente`) VALUES
('ARTP01', 'Arte y Patrimonio ', 12),
('CAST01', 'Castellano ', 1),
('COSM01', 'Costo y Mercadeo', 13),
('CSBIO01', 'Ciencias Biológicas', 4),
('CSBIO2', 'Ciencias Biológicas', 5),
('CSTRR01', 'Ciencias de la Tierra', 4),
('EFIS01', 'Edu. Física', 9),
('EFIS02', 'Edu. Física', 10),
('FIS01', 'Física', 6),
('GHC01', 'Geografía,Historia y Ciudadanía', 8),
('ING01', 'Inglés', 2),
('MAT01', 'Matemática', 3),
('MECO01', 'Medios de Comunicación', 14),
('QUI01', 'Química', 7),
('SOB01', 'Soberanía', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `id_nota` bigint(20) UNSIGNED NOT NULL,
  `evaluacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_eval` date NOT NULL,
  `puntaje` int(11) NOT NULL,
  `peso` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `alumno_ci_alum` int(11) NOT NULL,
  `lapso_cod_lapso` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `materia_cod_materia` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`id_nota`, `evaluacion`, `fecha_eval`, `puntaje`, `peso`, `alumno_ci_alum`, `lapso_cod_lapso`, `materia_cod_materia`) VALUES
(22, 'examen 1', '2017-11-01', 12, '20%', 25000000, '2017-I', 'MAT01'),
(23, 'Examen 2', '2017-11-14', 20, '20%', 30000000, '2017-I', 'CSTRR01'),
(25, 'taller', '2017-12-03', 14, '20%', 25000000, '2017-I', 'ARTP01'),
(26, 'taller', '2017-12-03', 12, '20%', 25000000, '2017-II', 'ARTP01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula` bigint(20) NOT NULL,
  `username` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` enum('Estudiante','Docente','Administrador') COLLATE utf8_spanish_ci NOT NULL,
  `pregunta` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL,
  `respuesta` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `username`, `password`, `tipo_usuario`, `pregunta`, `respuesta`) VALUES
(3, 'docente', 'b0c6dba68b7c837b085d889493ea09853b0ff791', 'Docente', 'Color Favorito', 'f8565338e474aa929d9f59110d3edf2b2b768c2e'),
(112, 'q', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Estudiante', NULL, NULL),
(2000000, 'admin', 'cfbafbe2a9d26aa2a79e5ef4135b4139ab345cf9', 'Administrador', 'Color Favorito', 'f8565338e474aa929d9f59110d3edf2b2b768c2e'),
(25000000, 'estudiante', '63f290bc442a8e70c4cd1dc8acb7f990d22b5aaf', 'Estudiante', NULL, NULL),
(30000000, 'alum', '86f2f2063eede90281194cd47ca3321f009dd264', 'Estudiante', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`ci_alum`),
  ADD KEY `fk_alumno_año1` (`año_idaño`);

--
-- Indices de la tabla `año`
--
ALTER TABLE `año`
  ADD PRIMARY KEY (`idaño`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`ci_docente`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`materia_cod_materia`,`materia_docente_ci_docente`,`alumno_ci_alum`),
  ADD KEY `fk_materia_has_alumno_alumno1` (`alumno_ci_alum`),
  ADD KEY `fk_materia_has_alumno_materia1` (`materia_cod_materia`,`materia_docente_ci_docente`),
  ADD KEY `materia_docente_ci_docente` (`materia_docente_ci_docente`);

--
-- Indices de la tabla `lapso`
--
ALTER TABLE `lapso`
  ADD PRIMARY KEY (`cod_lapso`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`cod_materia`,`docente_ci_docente`),
  ADD KEY `fk_materia_docente1` (`docente_ci_docente`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `fk_nota_alumno1` (`alumno_ci_alum`),
  ADD KEY `fk_nota_lapso1` (`lapso_cod_lapso`),
  ADD KEY `fk_nota_materia1` (`materia_cod_materia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `año`
--
ALTER TABLE `año`
  MODIFY `idaño` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alumno_año1` FOREIGN KEY (`año_idaño`) REFERENCES `año` (`idaño`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`materia_cod_materia`) REFERENCES `materia` (`cod_materia`),
  ADD CONSTRAINT `inscripcion_ibfk_2` FOREIGN KEY (`alumno_ci_alum`) REFERENCES `alumno` (`ci_alum`),
  ADD CONSTRAINT `inscripcion_ibfk_3` FOREIGN KEY (`materia_docente_ci_docente`) REFERENCES `materia` (`docente_ci_docente`);

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `fk_materia_docente1` FOREIGN KEY (`docente_ci_docente`) REFERENCES `docente` (`ci_docente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_nota_alumno1` FOREIGN KEY (`alumno_ci_alum`) REFERENCES `alumno` (`ci_alum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nota_lapso1` FOREIGN KEY (`lapso_cod_lapso`) REFERENCES `lapso` (`cod_lapso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`materia_cod_materia`) REFERENCES `materia` (`cod_materia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
