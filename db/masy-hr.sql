-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-05-2019 a las 21:11:56
-- Versión del servidor: 5.7.26-0ubuntu0.18.10.1
-- Versión de PHP: 7.2.17-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `masy-hr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl`
--

CREATE TABLE `acl` (
  `ai` int(10) UNSIGNED NOT NULL,
  `action_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_actions`
--

CREATE TABLE `acl_actions` (
  `action_id` int(10) UNSIGNED NOT NULL,
  `action_code` varchar(100) NOT NULL COMMENT 'no periods allowed!',
  `action_desc` varchar(100) NOT NULL COMMENT 'human readable description',
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_categories`
--

CREATE TABLE `acl_categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_code` varchar(100) NOT NULL COMMENT 'no periods allowed!',
  `category_desc` varchar(100) NOT NULL COMMENT 'human readable description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_sessions`
--

CREATE TABLE `auth_sessions` (
  `id` varchar(128) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `login_time` datetime DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_sessions`
--

INSERT INTO `auth_sessions` (`id`, `user_id`, `login_time`, `modified_at`, `ip_address`, `user_agent`) VALUES
('cfcb8fmgctbojrhnoqeiat2e451926iu', 1637400287, '2019-05-01 18:55:21', '2019-05-01 23:55:22', '10.35.172.245', 'Firefox 66.0 on Windows 10'),
('gufm0hdkmmtn807umir048psm236lgql', 1637400287, '2019-05-01 21:08:39', '2019-05-02 02:08:39', '10.35.172.245', 'Firefox 66.0 on Windows 10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('33eprjfo7855pi1fc4gp79rifjiu2vab', '10.35.172.245', 1556754921, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363735343932313b),
('4ch4ujtknik2g439a9a40mdpakeuse9s', '10.35.172.245', 1556754921, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363735343932313b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30352d30312031383a35353a3231223b7d223b),
('cfcb8fmgctbojrhnoqeiat2e451926iu', '10.35.172.245', 1556754940, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363735343932313b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30352d30312031383a35353a3231223b7d223b),
('dhm291fi297k4mdpumc3pqio2t5j3cou', '10.35.172.245', 1556762919, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363736323931393b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30352d30312032313a30383a3339223b7d223b),
('gufm0hdkmmtn807umir048psm236lgql', '10.35.172.245', 1556762929, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535363736323931393b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30352d30312032313a30383a3339223b7d223b);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denied_access`
--

CREATE TABLE `denied_access` (
  `ai` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL,
  `reason_code` tinyint(1) UNSIGNED DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsareasdireccion`
--

CREATE TABLE `gsareasdireccion` (
  `idgsareasdireccion` int(11) NOT NULL,
  `anombrearea` varchar(100) NOT NULL,
  `idgsdireccion` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsdirdireccionesgen`
--

CREATE TABLE `gsdirdireccionesgen` (
  `idgsdirdireccion` int(11) NOT NULL,
  `aclavedireccion` varchar(10) NOT NULL,
  `anombredireccion` varchar(50) NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gsdirdireccionesgen`
--

INSERT INTO `gsdirdireccionesgen` (`idgsdirdireccion`, `aclavedireccion`, `anombredireccion`, `aufecha`, `autipomovimiento`, `auidusuario`) VALUES
(1, 'DGEG', 'Director General de Grupo', '2019-05-01 00:00:00', '1', 1637400287),
(2, 'DGOAD', 'Director Global de Administración', '2019-05-01 00:00:00', '1', 1637400287),
(3, 'DGOPA', 'Director Global de Personal y Asuntos Corporativos', '2019-05-01 00:00:00', '1', 1637400287),
(4, 'DGOTA', 'Director Global de Transformación', '2019-05-01 00:00:00', '1', 1637400287),
(5, 'DGOCO', 'Director Global de Contabilidad', '2019-05-01 00:00:00', '1', 1637400287),
(6, 'DGOMK', 'Director Global de Marketing', '2019-05-01 00:00:00', '1', 1637400287),
(7, 'DGOPR', 'Director Global de Producción', '2019-05-01 00:00:00', '1', 1637400287),
(8, 'DGOVT', 'Director Global de Ventas', '2019-05-01 00:00:00', '1', 1637400287),
(9, 'DGOAU', 'Director Global de Auditoría', '2019-05-01 00:00:00', '1', 1637400287),
(10, 'DGOSI', 'Director Global de Sistemas', '2019-05-01 00:00:00', '1', 1637400287);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsdireccionessub`
--

CREATE TABLE `gsdireccionessub` (
  `idgsdireccion` int(11) NOT NULL,
  `anombredireccion` varchar(50) NOT NULL,
  `idgsdirdireccion` int(11) NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gsdireccionessub`
--

INSERT INTO `gsdireccionessub` (`idgsdireccion`, `anombredireccion`, `idgsdirdireccion`, `aufecha`, `autipomovimiento`, `auidusuario`) VALUES
(1, 'Director General de Grupo', 1, '2019-05-01 00:00:00', '1', 1637400287),
(2, 'Director Global de Administración', 2, '2019-05-01 00:00:00', '1', 1637400287),
(3, 'Director Global de Personal y Asuntos Corporativos', 3, '2019-05-01 00:00:00', '1', 1637400287),
(4, 'Director Global de Transformación', 4, '2019-05-01 00:00:00', '1', 1637400287),
(5, 'Director Global de Contabilidad', 5, '2019-05-01 00:00:00', '1', 1637400287),
(6, 'Director Global de Marketing', 6, '2019-05-01 00:00:00', '1', 1637400287),
(7, 'Director Global de Producción', 7, '2019-05-01 00:00:00', '1', 1637400287),
(8, 'Director Global de Ventas', 8, '2019-05-01 00:00:00', '1', 1637400287),
(9, 'Director Global de Auditoría', 9, '2019-05-01 00:00:00', '1', 1637400287),
(10, 'Director Global de Sistemas', 10, '2019-05-01 00:00:00', '1', 1637400287),
(11, 'Director Cuentas por Cobrar', 2, '2019-05-01 00:00:00', '1', 1637400287),
(12, 'Director Cuentas por Pagar', 2, '2019-05-01 00:00:00', '1', 1637400287),
(13, 'Director de Mejora Continua', 2, '2019-05-01 00:00:00', '1', 1637400287),
(14, 'Director de Reclutamiento y Selección', 3, '2019-05-01 00:00:00', '1', 1637400287),
(15, 'Director de Capacitación', 3, '2019-05-01 00:00:00', '1', 1637400287),
(16, 'Director de Seguridad e Higiene', 3, '2019-05-01 00:00:00', '1', 1637400287),
(17, 'Director de Nominas', 3, '2019-05-01 00:00:00', '1', 1637400287),
(18, 'Director de Mejora Continua', 3, '2019-05-01 00:00:00', '1', 1637400287),
(19, 'Director de Seguridad Cibernetica', 10, '2019-05-01 00:00:00', '1', 1637400287),
(20, 'Director de Infraestructura', 10, '2019-05-01 00:00:00', '1', 1637400287);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsgerencias`
--

CREATE TABLE `gsgerencias` (
  `idgsgerencias` int(11) NOT NULL,
  `adescripciongere` varchar(50) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsperfilespuestos`
--

CREATE TABLE `gsperfilespuestos` (
  `idperfildepuesto` int(11) NOT NULL,
  `idgspuestos` int(11) NOT NULL,
  `agerenciapert` varchar(50) DEFAULT NULL,
  `apuestoreporta` varchar(20) DEFAULT NULL,
  `anivelimpacto` varchar(10) NOT NULL,
  `anivelevaluacion` varchar(10) NOT NULL,
  `arangosueldo` varchar(50) NOT NULL,
  `nsueldo` decimal(10,2) NOT NULL,
  `amision` varchar(500) NOT NULL,
  `nrangoedad` varchar(50) NOT NULL,
  `agenero` varchar(50) NOT NULL,
  `aestadocivil` varchar(20) DEFAULT NULL,
  `aescolaridad` int(11) DEFAULT NULL,
  `aestatusescolaridad` varchar(20) DEFAULT NULL,
  `naexperiencia` varchar(10) NOT NULL,
  `apuestosocupados` varchar(150) NOT NULL,
  `aconocimientostec` varchar(150) NOT NULL,
  `aidiomas` varchar(10) NOT NULL,
  `aprogramasinfo` varchar(100) NOT NULL,
  `amanejovalores` varchar(50) NOT NULL,
  `ahabilidadesprf` varchar(150) NOT NULL,
  `afunespecificas` varchar(500) DEFAULT NULL,
  `aufecha` datetime NOT NULL,
  `autipomovimiento` varchar(10) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsperfilessistema`
--

CREATE TABLE `gsperfilessistema` (
  `idgesperfiles` int(11) NOT NULL,
  `adescripcion` varchar(50) NOT NULL,
  `aclaveperfil` varchar(10) NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gspuestos`
--

CREATE TABLE `gspuestos` (
  `idgspuestos` int(11) NOT NULL,
  `anombrepuesto` varchar(50) NOT NULL,
  `adescripcionpuesto` varchar(100) DEFAULT NULL,
  `idgsdireccion` int(11) DEFAULT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gspuestos`
--

INSERT INTO `gspuestos` (`idgspuestos`, `anombrepuesto`, `adescripcionpuesto`, `idgsdireccion`, `aufecha`, `autipomovimiento`, `auidusuario`) VALUES
(1, 'Director General de Grupo', 'Director General de Grupo', 1, '2019-05-01 00:00:00', '1', 1637400287),
(2, 'Director de Seguridad Cibernetica', 'Director de Seguridad Cibernetica', 19, '2019-05-01 00:00:00', '1', 1637400287),
(3, 'Director de Redes y Comunicaciones', 'Director de Redes y Comunicaciones', 19, '2019-05-01 00:00:00', '1', 1637400287),
(4, 'Sub-Director de Redes Comunicaciones', 'Sub-Director de Redes Comunicaciones', 19, '2019-05-01 00:00:00', '1', 1637400287),
(5, 'Gerente de Redes Comunicaciones', 'Gerente de Redes Comunicaciones', 19, '2019-05-01 00:00:00', '1', 1637400287),
(6, 'Técnico de Redes Comunicaciones', 'Técnico de Redes Comunicaciones', 19, '2019-05-01 00:00:00', '1', 1637400287),
(7, 'Director de Seguridad y Perfilado', 'Director de Seguridad y Perfilado', 19, '2019-05-01 00:00:00', '1', 1637400287),
(8, 'Sub-Director de Seguridad y Perfilado', 'Sub-Director de Seguridad y Perfilado', 19, '2019-05-01 00:00:00', '1', 1637400287),
(9, 'Gerente de Seguridad y Perfilado', 'Gerente de Seguridad y Perfilado', 19, '2019-05-01 00:00:00', '1', 1637400287),
(10, 'Técnico de Seguridad y Perfilado', 'Técnico de Seguridad y Perfilado', 19, '2019-05-01 00:00:00', '1', 1637400287);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incursosxempl`
--

CREATE TABLE `incursosxempl` (
  `idmicursosxempl` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `idmicalendariocursos` int(11) NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `atipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ips_on_hold`
--

CREATE TABLE `ips_on_hold` (
  `ai` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_errors`
--

CREATE TABLE `login_errors` (
  `ai` int(10) UNSIGNED NOT NULL,
  `username_or_email` varchar(255) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `micalendariocursos`
--

CREATE TABLE `micalendariocursos` (
  `idmicalendarcurso` int(11) NOT NULL,
  `idcursoind` int(11) NOT NULL,
  `afechainicio` datetime DEFAULT NULL,
  `afechafin` datetime NOT NULL,
  `acomentarios` varchar(250) DEFAULT NULL,
  `aclavecurso` varchar(20) NOT NULL,
  `idcapacitadores` int(11) DEFAULT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `micapacitadores`
--

CREATE TABLE `micapacitadores` (
  `idcapacitadores` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `apreparacion` varchar(100) NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mincursos`
--

CREATE TABLE `mincursos` (
  `idcursoind` int(11) NOT NULL,
  `anombrecurso` varchar(50) NOT NULL,
  `atipocurso` varchar(20) NOT NULL,
  `idgsdireccion` int(11) NOT NULL,
  `acontenido` varchar(2500) DEFAULT NULL,
  `aimgfolleto` longblob NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shcitasmedicas`
--

CREATE TABLE `shcitasmedicas` (
  `idcitasmedicas` int(11) NOT NULL,
  `idconsultorio` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `afechaconsulta` date NOT NULL,
  `arecetamedica` tinyint(4) DEFAULT NULL,
  `recetamedica` blob,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shconsultorios`
--

CREATE TABLE `shconsultorios` (
  `idshconsultorios` int(11) NOT NULL,
  `aoficinaconsultorio` varchar(50) NOT NULL,
  `idmedico` int(11) NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shentradasmed`
--

CREATE TABLE `shentradasmed` (
  `identrada` int(11) NOT NULL,
  `fechaentrada` date NOT NULL,
  `idmedicamento` int(11) NOT NULL,
  `cantidad` varchar(10) NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shmedicamentos`
--

CREATE TABLE `shmedicamentos` (
  `idmedicamentos` int(11) NOT NULL,
  `adescripcionmedicamento` varchar(100) NOT NULL,
  `ncosto` decimal(10,2) NOT NULL,
  `aubicaci` varchar(50) NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shmedicosasignados`
--

CREATE TABLE `shmedicosasignados` (
  `idmedico` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `aespecialidad` varchar(100) NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shprocesos`
--

CREATE TABLE `shprocesos` (
  `idshprocesos` int(11) NOT NULL,
  `aproceso` varchar(100) NOT NULL,
  `iddireccionemp` int(11) NOT NULL,
  `idgsareasdireccion` int(11) NOT NULL,
  `afechainicio` date NOT NULL,
  `afechafin` date NOT NULL,
  `amanualproceso` blob NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shsalidasmed`
--

CREATE TABLE `shsalidasmed` (
  `idsalidasmed` int(11) NOT NULL,
  `afechasalida` date NOT NULL,
  `idmedicamento` int(11) NOT NULL,
  `idconsultorio` int(11) NOT NULL,
  `ncantidad` varchar(10) NOT NULL,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `username_or_email_on_hold`
--

CREATE TABLE `username_or_email_on_hold` (
  `ai` int(10) UNSIGNED NOT NULL,
  `username_or_email` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `auth_level` tinyint(3) UNSIGNED NOT NULL,
  `banned` enum('0','1') NOT NULL DEFAULT '0',
  `passwd` varchar(60) NOT NULL,
  `passwd_recovery_code` varchar(60) DEFAULT NULL,
  `passwd_recovery_date` datetime DEFAULT NULL,
  `passwd_modified_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `anombrepersona` varchar(50) DEFAULT NULL,
  `apaterno` varchar(20) DEFAULT NULL,
  `amaterno` varchar(20) DEFAULT NULL,
  `adireccion` varchar(20) DEFAULT NULL,
  `atelefono` varchar(20) DEFAULT NULL,
  `acurp` varchar(50) DEFAULT NULL,
  `arfc` varchar(20) DEFAULT NULL,
  `afechanacimiento` datetime DEFAULT NULL,
  `nciudad` int(11) DEFAULT NULL,
  `aestado` int(11) DEFAULT NULL,
  `cvvtae` blob,
  `contrato` blob,
  `idgspuestos` int(11) DEFAULT NULL,
  `acandidato` tinyint(4) DEFAULT NULL,
  `aempleado` tinyint(4) DEFAULT NULL,
  `adresultpsico` blob,
  `aufecha` datetime DEFAULT NULL,
  `autipomovimiento` varchar(16) DEFAULT NULL,
  `auidusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `auth_level`, `banned`, `passwd`, `passwd_recovery_code`, `passwd_recovery_date`, `passwd_modified_at`, `last_login`, `created_at`, `modified_at`, `anombrepersona`, `apaterno`, `amaterno`, `adireccion`, `atelefono`, `acurp`, `arfc`, `afechanacimiento`, `nciudad`, `aestado`, `cvvtae`, `contrato`, `idgspuestos`, `acandidato`, `aempleado`, `adresultpsico`, `aufecha`, `autipomovimiento`, `auidusuario`) VALUES
(1637400287, 'admin', 'admin@masy.hr.com', 9, '0', '$2y$11$rAtGz48T6o2zc1/0iSESYOAp4KjRtsGAqeXaxiq/Xq1dS0/krcOf6', NULL, NULL, NULL, '2019-05-01 21:08:39', '2019-03-13 05:14:35', '2019-05-02 02:08:39', 'Administrador', NULL, NULL, 'MaSy-HR', '55-5555-5555', NULL, NULL, '2019-01-01 00:00:00', 1, 1, NULL, NULL, 1, NULL, NULL, NULL, '2019-05-01 00:00:00', '1', 1637400287);

--
-- Disparadores `users`
--
DELIMITER $$
CREATE TRIGGER `ca_passwd_trigger` BEFORE UPDATE ON `users` FOR EACH ROW begin
    if ((new.passwd <=> old.passwd) = 0) then
        set new.passwd_modified_at = now();
    end if;
end
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acl`
--
ALTER TABLE `acl`
  ADD PRIMARY KEY (`ai`),
  ADD KEY `action_id` (`action_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `acl_actions`
--
ALTER TABLE `acl_actions`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `acl_categories`
--
ALTER TABLE `acl_categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_code` (`category_code`),
  ADD UNIQUE KEY `category_desc` (`category_desc`);

--
-- Indices de la tabla `auth_sessions`
--
ALTER TABLE `auth_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indices de la tabla `denied_access`
--
ALTER TABLE `denied_access`
  ADD PRIMARY KEY (`ai`);

--
-- Indices de la tabla `gsareasdireccion`
--
ALTER TABLE `gsareasdireccion`
  ADD PRIMARY KEY (`idgsareasdireccion`),
  ADD KEY `fk_gsareasdireccion_gsdireccionessub` (`idgsdireccion`);

--
-- Indices de la tabla `gsdirdireccionesgen`
--
ALTER TABLE `gsdirdireccionesgen`
  ADD PRIMARY KEY (`idgsdirdireccion`);

--
-- Indices de la tabla `gsdireccionessub`
--
ALTER TABLE `gsdireccionessub`
  ADD PRIMARY KEY (`idgsdireccion`),
  ADD KEY `fk_gsdireccionessub_gsdirdireccionesgen` (`idgsdirdireccion`);

--
-- Indices de la tabla `gsgerencias`
--
ALTER TABLE `gsgerencias`
  ADD PRIMARY KEY (`idgsgerencias`),
  ADD KEY `fk_gsgerencias_gspersonas` (`user_id`);

--
-- Indices de la tabla `gsperfilespuestos`
--
ALTER TABLE `gsperfilespuestos`
  ADD PRIMARY KEY (`idperfildepuesto`),
  ADD KEY `fk_gsperfilespuestos_gspuestos` (`idgspuestos`);

--
-- Indices de la tabla `gsperfilessistema`
--
ALTER TABLE `gsperfilessistema`
  ADD PRIMARY KEY (`idgesperfiles`);

--
-- Indices de la tabla `gspuestos`
--
ALTER TABLE `gspuestos`
  ADD PRIMARY KEY (`idgspuestos`),
  ADD KEY `fk_gspuestos_gsdireccionessub` (`idgsdireccion`);

--
-- Indices de la tabla `incursosxempl`
--
ALTER TABLE `incursosxempl`
  ADD PRIMARY KEY (`idmicursosxempl`),
  ADD KEY `fk_incursosxempl_gspersonas` (`user_id`),
  ADD KEY `fk_incursosxempl_micalendariocursos` (`idmicalendariocursos`);

--
-- Indices de la tabla `ips_on_hold`
--
ALTER TABLE `ips_on_hold`
  ADD PRIMARY KEY (`ai`);

--
-- Indices de la tabla `login_errors`
--
ALTER TABLE `login_errors`
  ADD PRIMARY KEY (`ai`);

--
-- Indices de la tabla `micalendariocursos`
--
ALTER TABLE `micalendariocursos`
  ADD PRIMARY KEY (`idmicalendarcurso`),
  ADD KEY `fk_micalendariocursos_micapacitadores` (`idcapacitadores`),
  ADD KEY `fk_micalendariocursos_mincursos` (`idcursoind`);

--
-- Indices de la tabla `micapacitadores`
--
ALTER TABLE `micapacitadores`
  ADD PRIMARY KEY (`idcapacitadores`),
  ADD KEY `fk_micapacitadores_gspersonas` (`user_id`);

--
-- Indices de la tabla `mincursos`
--
ALTER TABLE `mincursos`
  ADD PRIMARY KEY (`idcursoind`),
  ADD KEY `fk_mincursos_gsdireccionessub` (`idgsdireccion`);

--
-- Indices de la tabla `shcitasmedicas`
--
ALTER TABLE `shcitasmedicas`
  ADD PRIMARY KEY (`idcitasmedicas`),
  ADD KEY `fk_shcitasmedicas_gspersonas` (`user_id`),
  ADD KEY `fk_shcitasmedicas_shconsultorios` (`idconsultorio`);

--
-- Indices de la tabla `shconsultorios`
--
ALTER TABLE `shconsultorios`
  ADD PRIMARY KEY (`idshconsultorios`),
  ADD KEY `fk_shconsultorios_shmedicosasignados` (`idmedico`);

--
-- Indices de la tabla `shentradasmed`
--
ALTER TABLE `shentradasmed`
  ADD PRIMARY KEY (`identrada`),
  ADD KEY `fk_shentradasmed_shmedicamentos` (`idmedicamento`);

--
-- Indices de la tabla `shmedicamentos`
--
ALTER TABLE `shmedicamentos`
  ADD PRIMARY KEY (`idmedicamentos`);

--
-- Indices de la tabla `shmedicosasignados`
--
ALTER TABLE `shmedicosasignados`
  ADD PRIMARY KEY (`idmedico`),
  ADD KEY `fk_shmedicosasignados_gspersonas` (`user_id`);

--
-- Indices de la tabla `shprocesos`
--
ALTER TABLE `shprocesos`
  ADD PRIMARY KEY (`idshprocesos`);

--
-- Indices de la tabla `shsalidasmed`
--
ALTER TABLE `shsalidasmed`
  ADD PRIMARY KEY (`idsalidasmed`),
  ADD KEY `fk_shsalidasmed_shconsultorios` (`idconsultorio`),
  ADD KEY `fk_shsalidasmed_shmedicamentos` (`idmedicamento`);

--
-- Indices de la tabla `username_or_email_on_hold`
--
ALTER TABLE `username_or_email_on_hold`
  ADD PRIMARY KEY (`ai`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_gspersonas_gspuestos` (`idgspuestos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acl`
--
ALTER TABLE `acl`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `acl_actions`
--
ALTER TABLE `acl_actions`
  MODIFY `action_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `acl_categories`
--
ALTER TABLE `acl_categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `denied_access`
--
ALTER TABLE `denied_access`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `gsareasdireccion`
--
ALTER TABLE `gsareasdireccion`
  MODIFY `idgsareasdireccion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `gsdirdireccionesgen`
--
ALTER TABLE `gsdirdireccionesgen`
  MODIFY `idgsdirdireccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `gsdireccionessub`
--
ALTER TABLE `gsdireccionessub`
  MODIFY `idgsdireccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `gsgerencias`
--
ALTER TABLE `gsgerencias`
  MODIFY `idgsgerencias` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `gsperfilespuestos`
--
ALTER TABLE `gsperfilespuestos`
  MODIFY `idperfildepuesto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `gsperfilessistema`
--
ALTER TABLE `gsperfilessistema`
  MODIFY `idgesperfiles` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `gspuestos`
--
ALTER TABLE `gspuestos`
  MODIFY `idgspuestos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `incursosxempl`
--
ALTER TABLE `incursosxempl`
  MODIFY `idmicursosxempl` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ips_on_hold`
--
ALTER TABLE `ips_on_hold`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `login_errors`
--
ALTER TABLE `login_errors`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `micalendariocursos`
--
ALTER TABLE `micalendariocursos`
  MODIFY `idmicalendarcurso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `micapacitadores`
--
ALTER TABLE `micapacitadores`
  MODIFY `idcapacitadores` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mincursos`
--
ALTER TABLE `mincursos`
  MODIFY `idcursoind` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `shcitasmedicas`
--
ALTER TABLE `shcitasmedicas`
  MODIFY `idcitasmedicas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `shconsultorios`
--
ALTER TABLE `shconsultorios`
  MODIFY `idshconsultorios` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `shentradasmed`
--
ALTER TABLE `shentradasmed`
  MODIFY `identrada` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `shmedicamentos`
--
ALTER TABLE `shmedicamentos`
  MODIFY `idmedicamentos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `shmedicosasignados`
--
ALTER TABLE `shmedicosasignados`
  MODIFY `idmedico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `shprocesos`
--
ALTER TABLE `shprocesos`
  MODIFY `idshprocesos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `shsalidasmed`
--
ALTER TABLE `shsalidasmed`
  MODIFY `idsalidasmed` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `username_or_email_on_hold`
--
ALTER TABLE `username_or_email_on_hold`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acl`
--
ALTER TABLE `acl`
  ADD CONSTRAINT `acl_ibfk_1` FOREIGN KEY (`action_id`) REFERENCES `acl_actions` (`action_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `acl_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `acl_actions`
--
ALTER TABLE `acl_actions`
  ADD CONSTRAINT `acl_actions_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `acl_categories` (`category_id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `gsareasdireccion`
--
ALTER TABLE `gsareasdireccion`
  ADD CONSTRAINT `fk_gsareasdireccion_gsdireccionessub` FOREIGN KEY (`idgsdireccion`) REFERENCES `gsdireccionessub` (`idgsdireccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gsdireccionessub`
--
ALTER TABLE `gsdireccionessub`
  ADD CONSTRAINT `fk_gsdireccionessub_gsdirdireccionesgen` FOREIGN KEY (`idgsdirdireccion`) REFERENCES `gsdirdireccionesgen` (`idgsdirdireccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gsgerencias`
--
ALTER TABLE `gsgerencias`
  ADD CONSTRAINT `fk_gsgerencias_gspersonas` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gsperfilespuestos`
--
ALTER TABLE `gsperfilespuestos`
  ADD CONSTRAINT `fk_gsperfilespuestos_gspuestos` FOREIGN KEY (`idgspuestos`) REFERENCES `gspuestos` (`idgspuestos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gspuestos`
--
ALTER TABLE `gspuestos`
  ADD CONSTRAINT `fk_gspuestos_gsdireccionessub` FOREIGN KEY (`idgsdireccion`) REFERENCES `gsdireccionessub` (`idgsdireccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `incursosxempl`
--
ALTER TABLE `incursosxempl`
  ADD CONSTRAINT `fk_incursosxempl_gspersonas` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_incursosxempl_micalendariocursos` FOREIGN KEY (`idmicalendariocursos`) REFERENCES `micalendariocursos` (`idmicalendarcurso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `micalendariocursos`
--
ALTER TABLE `micalendariocursos`
  ADD CONSTRAINT `fk_micalendariocursos_micapacitadores` FOREIGN KEY (`idcapacitadores`) REFERENCES `micapacitadores` (`idcapacitadores`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_micalendariocursos_mincursos` FOREIGN KEY (`idcursoind`) REFERENCES `mincursos` (`idcursoind`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `micapacitadores`
--
ALTER TABLE `micapacitadores`
  ADD CONSTRAINT `fk_micapacitadores_gspersonas` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mincursos`
--
ALTER TABLE `mincursos`
  ADD CONSTRAINT `fk_mincursos_gsdireccionessub` FOREIGN KEY (`idgsdireccion`) REFERENCES `gsdireccionessub` (`idgsdireccion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shcitasmedicas`
--
ALTER TABLE `shcitasmedicas`
  ADD CONSTRAINT `fk_shcitasmedicas_gspersonas` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_shcitasmedicas_shconsultorios` FOREIGN KEY (`idconsultorio`) REFERENCES `shconsultorios` (`idshconsultorios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shconsultorios`
--
ALTER TABLE `shconsultorios`
  ADD CONSTRAINT `fk_shconsultorios_shmedicosasignados` FOREIGN KEY (`idmedico`) REFERENCES `shmedicosasignados` (`idmedico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shentradasmed`
--
ALTER TABLE `shentradasmed`
  ADD CONSTRAINT `fk_shentradasmed_shmedicamentos` FOREIGN KEY (`idmedicamento`) REFERENCES `shmedicamentos` (`idmedicamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shmedicosasignados`
--
ALTER TABLE `shmedicosasignados`
  ADD CONSTRAINT `fk_shmedicosasignados_gspersonas` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shsalidasmed`
--
ALTER TABLE `shsalidasmed`
  ADD CONSTRAINT `fk_shsalidasmed_shconsultorios` FOREIGN KEY (`idconsultorio`) REFERENCES `shconsultorios` (`idshconsultorios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_shsalidasmed_shmedicamentos` FOREIGN KEY (`idmedicamento`) REFERENCES `shmedicamentos` (`idmedicamentos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_gspersonas_gspuestos` FOREIGN KEY (`idgspuestos`) REFERENCES `gspuestos` (`idgspuestos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
