-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2019 a las 05:32:29
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `action_code` varchar(100) NOT NULL COMMENT 'No periods allowed!',
  `action_desc` varchar(100) NOT NULL COMMENT 'Human readable description',
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_categories`
--

CREATE TABLE `acl_categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_code` varchar(100) NOT NULL COMMENT 'No periods allowed!',
  `category_desc` varchar(100) NOT NULL COMMENT 'Human readable description'
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
('qubhsk3akcifvqrfuohdqdcmnfi1m17e', 1637400287, '2019-04-06 04:32:26', '2019-04-06 03:30:07', '::1', 'Firefox 66.0 on Windows 10'),
('bf2s6ds0mckph4atodetmbu9sbprr08n', 1637400287, '2019-04-06 04:58:16', '2019-04-06 03:31:20', '::1', 'Chrome 73.0.3683.86 on Windows 10');

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
('maccggsv69147qasmebgo6r41h05i185', '::1', 1554517946, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343531373934363b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30342d30362030343a33323a3236223b7d223b),
('dubmnekg52ohc3uf7kc1qml3fvmqn0dt', '::1', 1554519442, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343531393434323b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30342d30362030343a33323a3236223b7d223b),
('qrn762bc7cqahjfcak9ruvr82fglmoj8', '::1', 1554520156, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343532303135363b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30342d30362030343a33323a3236223b7d223b),
('kpfatin7a2lgbhl73h7it54ucj9dukft', '::1', 1554519496, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343531393439363b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30342d30362030343a35383a3136223b7d223b),
('hvnjui249prqplfg09akec1j43hrspms', '::1', 1554520741, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343532303734313b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30342d30362030343a35383a3136223b7d223b),
('ukuseunnidauhthmcvq0gh18i2lu8tq1', '::1', 1554520477, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343532303437373b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30342d30362030343a33323a3236223b7d223b),
('ba0fupcodav18g0vi7in4v3k8t934eua', '::1', 1554520800, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343532303830303b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30342d30362030343a33323a3236223b7d223b),
('ghna0parjpoco1mpgudk2t64akharm8o', '::1', 1554521480, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343532313438303b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30342d30362030343a35383a3136223b7d223b),
('fog3t6sfeb25khcb70mlub2t55ctfgvn', '::1', 1554521407, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343532313430373b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30342d30362030343a33323a3236223b7d223b),
('qubhsk3akcifvqrfuohdqdcmnfi1m17e', '::1', 1554521436, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343532313430373b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30342d30362030343a33323a3236223b7d223b),
('bf2s6ds0mckph4atodetmbu9sbprr08n', '::1', 1554521480, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535343532313438303b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30342d30362030343a35383a3136223b7d223b);

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
  `IDGSAREASDIRECCION` int(11) NOT NULL,
  `ANOMBREAREA` varchar(100) NOT NULL,
  `IDGSDIRECCION` int(11) NOT NULL,
  `IDGSPERSONAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsdirdireccionesgen`
--

CREATE TABLE `gsdirdireccionesgen` (
  `IDGSDIRDIRECCION` int(11) NOT NULL,
  `ACLAVEDIRECCION` varchar(10) NOT NULL,
  `ANOMBREDIRECCION` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gsdirdireccionesgen`
--

INSERT INTO `gsdirdireccionesgen` (`IDGSDIRDIRECCION`, `ACLAVEDIRECCION`, `ANOMBREDIRECCION`) VALUES
(1, 'ABC', 'Direccion General'),
(2, 'DEF', 'Direccion TI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsdireccionessub`
--

CREATE TABLE `gsdireccionessub` (
  `IDGSDIRECCION` int(11) NOT NULL,
  `ANOMBREDIRECCION` varchar(50) NOT NULL,
  `IDGSDIRDIRECCION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gsdireccionessub`
--

INSERT INTO `gsdireccionessub` (`IDGSDIRECCION`, `ANOMBREDIRECCION`, `IDGSDIRDIRECCION`) VALUES
(1, 'Direccion General', 1),
(2, 'Direccion TI', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsgerencias`
--

CREATE TABLE `gsgerencias` (
  `IDGSGERENCIAS` int(11) NOT NULL,
  `ADESCRIPCIONGERE` varchar(50) NOT NULL,
  `IDGSPERSONA` int(11) NOT NULL,
  `IDGSPERSONAS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsperfilespuestos`
--

CREATE TABLE `gsperfilespuestos` (
  `IDPERFILDEPUESTO` int(11) NOT NULL,
  `ANOMBREPERFILPUESTO` varchar(250) DEFAULT NULL,
  `AGERENCIAPERT` varchar(50) DEFAULT NULL,
  `APUESTOREPORTA` varchar(20) DEFAULT NULL,
  `ANIVELIMPACTO` varchar(10) NOT NULL,
  `ANIVELEVALUACION` varchar(10) NOT NULL,
  `ARANGOSUELDO` varchar(50) NOT NULL,
  `NSUELDO` decimal(10,2) NOT NULL,
  `AMISION` varchar(500) NOT NULL,
  `NRANGOEDAD` varchar(50) NOT NULL,
  `AGENERO` varchar(50) NOT NULL,
  `AESTADOCIVIL` varchar(20) DEFAULT NULL,
  `AESCOLARIDAD` int(11) DEFAULT NULL,
  `AESTATUSESCOLARIDAD` varchar(20) DEFAULT NULL,
  `NAEXPERIENCIA` varchar(10) NOT NULL,
  `APUESTOSOCUPADOS` varchar(150) NOT NULL,
  `ACONOCIMIENTOSTEC` varchar(150) NOT NULL,
  `AIDIOMAS` varchar(10) NOT NULL,
  `APROGRAMASINFO` varchar(100) NOT NULL,
  `AMANEJOVALORES` varchar(50) NOT NULL,
  `AHABILIDADESPRF` varchar(150) NOT NULL,
  `AFUNESPECIFICAS` varchar(500) DEFAULT NULL,
  `AUFECHAMOV` datetime NOT NULL,
  `AUIDGSUSUARIO` int(11) DEFAULT NULL,
  `AUHORA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gsperfilespuestos`
--

INSERT INTO `gsperfilespuestos` (`IDPERFILDEPUESTO`, `ANOMBREPERFILPUESTO`, `AGERENCIAPERT`, `APUESTOREPORTA`, `ANIVELIMPACTO`, `ANIVELEVALUACION`, `ARANGOSUELDO`, `NSUELDO`, `AMISION`, `NRANGOEDAD`, `AGENERO`, `AESTADOCIVIL`, `AESCOLARIDAD`, `AESTATUSESCOLARIDAD`, `NAEXPERIENCIA`, `APUESTOSOCUPADOS`, `ACONOCIMIENTOSTEC`, `AIDIOMAS`, `APROGRAMASINFO`, `AMANEJOVALORES`, `AHABILIDADESPRF`, `AFUNESPECIFICAS`, `AUFECHAMOV`, `AUIDGSUSUARIO`, `AUHORA`) VALUES
(1, 'Director General', 'Dirección General', 'Director general', '1', 'Director', '$20000 - $50000', '35000.00', 'Director General', '25-35', 'Hombre', NULL, NULL, NULL, '', '', 'Director General', 'Ingles, Fr', 'Ofimatica, ERPs, SAP,ITIL', '', 'Director General', 'Director General', '0000-00-00 00:00:00', NULL, '2019-04-06 02:33:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsperfilessistema`
--

CREATE TABLE `gsperfilessistema` (
  `IDGESPERFILES` int(11) NOT NULL,
  `ADESCRIPCION` varchar(50) NOT NULL,
  `ACLAVEPERFIL` varchar(10) NOT NULL,
  `AUFECHAMOV` datetime DEFAULT NULL,
  `AUIDUSUARIO` int(11) DEFAULT NULL,
  `AUHORA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gspersonas`
--

CREATE TABLE `gspersonas` (
  `IDGSPERSONAS` int(11) NOT NULL,
  `ANOMBREPERSONA` varchar(50) DEFAULT NULL,
  `APATERNO` varchar(20) DEFAULT NULL,
  `AMATERNO` varchar(20) DEFAULT NULL,
  `ADIRECCION` varchar(20) DEFAULT NULL,
  `ATELEFONO` varchar(20) DEFAULT NULL,
  `ACURP` varchar(50) DEFAULT NULL,
  `ARFC` varchar(20) DEFAULT NULL,
  `AFECHANACIMIENTO` datetime DEFAULT NULL,
  `NCIUDAD` int(11) DEFAULT NULL,
  `AESTADO` int(11) DEFAULT NULL,
  `CVVTAE` blob,
  `CONTRATO` blob,
  `IDGSPUESTOS` int(11) DEFAULT NULL,
  `ACANDIDATO` tinyint(4) DEFAULT NULL,
  `AEMPLEADO` tinyint(4) DEFAULT NULL,
  `ADRESULTPSICO` blob,
  `AUFECHAMOV` datetime DEFAULT NULL,
  `IDUSUARIO` int(11) DEFAULT NULL,
  `AUHORA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gspersonas`
--

INSERT INTO `gspersonas` (`IDGSPERSONAS`, `ANOMBREPERSONA`, `APATERNO`, `AMATERNO`, `ADIRECCION`, `ATELEFONO`, `ACURP`, `ARFC`, `AFECHANACIMIENTO`, `NCIUDAD`, `AESTADO`, `CVVTAE`, `CONTRATO`, `IDGSPUESTOS`, `ACANDIDATO`, `AEMPLEADO`, `ADRESULTPSICO`, `AUFECHAMOV`, `IDUSUARIO`, `AUHORA`) VALUES
(1, 'Jesus ', 'Garcia', 'Gonzalez', 'Bugambilias', '55-5555-5555', 'JGGZRPMZ452841LKRP', 'JGGZRPM123456', '2019-04-01 00:00:00', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-01 00:00:00', NULL, '2019-04-06 03:00:58'),
(2, 'Facundo', 'Moreno', 'Bonilla', 'Bugambilias', '55-5555-5555', 'MOBF880122HMCRBC03', 'MOBF880122JTA', '2019-04-01 00:00:00', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-30 00:00:00', NULL, '2019-04-06 03:12:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gspuestos`
--

CREATE TABLE `gspuestos` (
  `IDGSPUESTOS` int(11) NOT NULL,
  `ANOMBREPUESTO` varchar(50) NOT NULL,
  `ADESCRIPCIONPUESTO` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gspuestos`
--

INSERT INTO `gspuestos` (`IDGSPUESTOS`, `ANOMBREPUESTO`, `ADESCRIPCIONPUESTO`) VALUES
(1, 'Director General', 'Director General'),
(2, 'Director TI', 'Director TI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsusuarios`
--

CREATE TABLE `gsusuarios` (
  `IDGSUSUARIO` int(11) NOT NULL,
  `IDGSPERSONAS` int(11) DEFAULT NULL,
  `ACLAVEUSUARIO` varchar(50) NOT NULL,
  `APASSWORD` varchar(50) NOT NULL,
  `ACLAVEPERFIL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incursosxempl`
--

CREATE TABLE `incursosxempl` (
  `IDMICURSOSXEMPL` int(11) NOT NULL,
  `IDGSPERSONAS` int(11) NOT NULL,
  `IDMICALENDARIOCURSOS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `incursosxempl`
--

INSERT INTO `incursosxempl` (`IDMICURSOSXEMPL`, `IDGSPERSONAS`, `IDMICALENDARIOCURSOS`) VALUES
(1, 1, 1),
(2, 1, 2);

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

--
-- Volcado de datos para la tabla `login_errors`
--

INSERT INTO `login_errors` (`ai`, `username_or_email`, `ip_address`, `time`) VALUES
(1, 'admuser', '::1', '2019-04-06 04:58:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `micalendariocursos`
--

CREATE TABLE `micalendariocursos` (
  `IDMICALENDARCURSO` int(11) NOT NULL,
  `IDCURSOIND` int(11) NOT NULL,
  `AFECHAINICIO` datetime DEFAULT NULL,
  `AFECHAFIN` datetime NOT NULL,
  `ACOMENTARIOS` varchar(250) DEFAULT NULL,
  `ACLAVECURSO` varchar(20) NOT NULL,
  `IDCAPACITADORES` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `micalendariocursos`
--

INSERT INTO `micalendariocursos` (`IDMICALENDARCURSO`, `IDCURSOIND`, `AFECHAINICIO`, `AFECHAFIN`, `ACOMENTARIOS`, `ACLAVECURSO`, `IDCAPACITADORES`) VALUES
(1, 1, '2019-04-01 00:00:00', '2019-04-01 00:00:00', 'Capacitación', 'ABC', 1),
(2, 2, '2019-04-01 00:00:00', '2019-04-30 00:00:00', 'Induccion', 'DEF', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `micapacitadores`
--

CREATE TABLE `micapacitadores` (
  `IDCAPACITADORES` int(11) NOT NULL,
  `IDGSPERSONA` int(11) NOT NULL,
  `APREPARACION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `micapacitadores`
--

INSERT INTO `micapacitadores` (`IDCAPACITADORES`, `IDGSPERSONA`, `APREPARACION`) VALUES
(1, 2, 'Capacitador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mincursos`
--

CREATE TABLE `mincursos` (
  `IDCURSOIND` int(11) NOT NULL,
  `ANOMBRECURSO` varchar(50) NOT NULL,
  `ATIPOCURSO` varchar(20) NOT NULL,
  `IDGSDIRECCION` int(11) NOT NULL,
  `ACONTENIDO` varchar(2500) DEFAULT NULL,
  `AIMGFOLLETO` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mincursos`
--

INSERT INTO `mincursos` (`IDCURSOIND`, `ANOMBRECURSO`, `ATIPOCURSO`, `IDGSDIRECCION`, `ACONTENIDO`, `AIMGFOLLETO`) VALUES
(1, 'Capacitacion', 'Obligatorio', 1, 'Capacitacion', NULL),
(2, 'Induccion', 'Obligatorio', 1, 'Capacitacion', NULL),
(3, 'Servicio', 'Requerido', 1, 'Servicio', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shcitasmedicas`
--

CREATE TABLE `shcitasmedicas` (
  `IDCITASMEDICAS` int(11) NOT NULL,
  `IDCONSULTORIO` int(11) NOT NULL,
  `IDGSPERSONA` int(11) NOT NULL,
  `AFECHACONSULTA` date NOT NULL,
  `ARECETAMEDICA` tinyint(4) DEFAULT NULL,
  `RECETAMEDICA` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shconsultorios`
--

CREATE TABLE `shconsultorios` (
  `IDSHCONSULTORIOS` int(11) NOT NULL,
  `AOFICINACONSULTORIO` varchar(50) NOT NULL,
  `IDMEDICO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shentradasmed`
--

CREATE TABLE `shentradasmed` (
  `IDENTRADA` int(11) NOT NULL,
  `FECHAENTRADA` date NOT NULL,
  `IDMEDICAMENTO` int(11) NOT NULL,
  `CANTIDAD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shmedicamentos`
--

CREATE TABLE `shmedicamentos` (
  `IDMEDICAMENTOS` int(11) NOT NULL,
  `ADESCRIPCIONMEDICAMENTO` varchar(100) NOT NULL,
  `NCOSTO` decimal(10,2) NOT NULL,
  `AUBICACI0N` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shmedicosasignados`
--

CREATE TABLE `shmedicosasignados` (
  `IDMEDICO` int(11) NOT NULL,
  `IDGSPERSONA` int(11) NOT NULL,
  `AESPECIALIDAD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shprocesos`
--

CREATE TABLE `shprocesos` (
  `IDSHPROCESOS` int(11) NOT NULL,
  `APROCESO` varchar(100) NOT NULL,
  `IDDIRECCIONEMP` int(11) NOT NULL,
  `IDGSAREASDIRECCION` int(11) NOT NULL,
  `AFECHAINICIO` date NOT NULL,
  `AFECHAFIN` date NOT NULL,
  `AMANUALPROCESO` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shsalidasmed`
--

CREATE TABLE `shsalidasmed` (
  `IDSALIDASMED` int(11) NOT NULL,
  `AFECHASALIDA` date NOT NULL,
  `IDMEDICAMENTO` int(11) NOT NULL,
  `IDCONSULTORIO` int(11) NOT NULL,
  `NCANTIDAD` varchar(10) NOT NULL
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
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `auth_level`, `banned`, `passwd`, `passwd_recovery_code`, `passwd_recovery_date`, `passwd_modified_at`, `last_login`, `created_at`, `modified_at`) VALUES
(1637400287, 'admin', 'admin@masy.hr.com', 9, '0', '$2y$11$rAtGz48T6o2zc1/0iSESYOAp4KjRtsGAqeXaxiq/Xq1dS0/krcOf6', NULL, NULL, NULL, '2019-04-06 04:58:16', '2019-03-13 05:14:35', '2019-04-06 02:58:16');

--
-- Disparadores `users`
--
DELIMITER $$
CREATE TRIGGER `ca_passwd_trigger` BEFORE UPDATE ON `users` FOR EACH ROW BEGIN
    IF ((NEW.passwd <=> OLD.passwd) = 0) THEN
        SET NEW.passwd_modified_at = NOW();
    END IF;
END
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
  ADD PRIMARY KEY (`IDGSAREASDIRECCION`),
  ADD KEY `FK_GSAREASDIRECCION_GSDIRECCIONESSUB` (`IDGSDIRECCION`);

--
-- Indices de la tabla `gsdirdireccionesgen`
--
ALTER TABLE `gsdirdireccionesgen`
  ADD PRIMARY KEY (`IDGSDIRDIRECCION`);

--
-- Indices de la tabla `gsdireccionessub`
--
ALTER TABLE `gsdireccionessub`
  ADD PRIMARY KEY (`IDGSDIRECCION`),
  ADD KEY `FK_GSDIRECCIONESSUB_GSDIRDIRECCIONESGEN` (`IDGSDIRDIRECCION`);

--
-- Indices de la tabla `gsgerencias`
--
ALTER TABLE `gsgerencias`
  ADD PRIMARY KEY (`IDGSGERENCIAS`),
  ADD KEY `FK_GSGERENCIAS_GSPERSONAS` (`IDGSPERSONAS`);

--
-- Indices de la tabla `gsperfilespuestos`
--
ALTER TABLE `gsperfilespuestos`
  ADD PRIMARY KEY (`IDPERFILDEPUESTO`);

--
-- Indices de la tabla `gsperfilessistema`
--
ALTER TABLE `gsperfilessistema`
  ADD PRIMARY KEY (`IDGESPERFILES`);

--
-- Indices de la tabla `gspersonas`
--
ALTER TABLE `gspersonas`
  ADD PRIMARY KEY (`IDGSPERSONAS`),
  ADD KEY `FK_GSPERSONAS_GSPUESTOS` (`IDGSPUESTOS`);

--
-- Indices de la tabla `gspuestos`
--
ALTER TABLE `gspuestos`
  ADD PRIMARY KEY (`IDGSPUESTOS`);

--
-- Indices de la tabla `gsusuarios`
--
ALTER TABLE `gsusuarios`
  ADD PRIMARY KEY (`IDGSUSUARIO`);

--
-- Indices de la tabla `incursosxempl`
--
ALTER TABLE `incursosxempl`
  ADD PRIMARY KEY (`IDMICURSOSXEMPL`),
  ADD KEY `FK_INCURSOSXEMPL_GSPERSONAS` (`IDGSPERSONAS`),
  ADD KEY `FK_INCURSOSXEMPL_MICALENDARIOCURSOS` (`IDMICALENDARIOCURSOS`);

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
  ADD PRIMARY KEY (`IDMICALENDARCURSO`),
  ADD KEY `FK_MICALENDARIOCURSOS_MICAPACITADORES` (`IDCAPACITADORES`),
  ADD KEY `FK_MICALENDARIOCURSOS_MINCURSOS` (`IDCURSOIND`);

--
-- Indices de la tabla `micapacitadores`
--
ALTER TABLE `micapacitadores`
  ADD PRIMARY KEY (`IDCAPACITADORES`),
  ADD KEY `FK_MICAPACITADORES_GSPERSONAS` (`IDGSPERSONA`);

--
-- Indices de la tabla `mincursos`
--
ALTER TABLE `mincursos`
  ADD PRIMARY KEY (`IDCURSOIND`),
  ADD KEY `FK_MINCURSOS_GSDIRECCIONESSUB` (`IDGSDIRECCION`);

--
-- Indices de la tabla `shcitasmedicas`
--
ALTER TABLE `shcitasmedicas`
  ADD PRIMARY KEY (`IDCITASMEDICAS`),
  ADD KEY `FK_SHCITASMEDICAS_GSPERSONAS` (`IDGSPERSONA`),
  ADD KEY `FK_SHCITASMEDICAS_SHCONSULTORIOS` (`IDCONSULTORIO`);

--
-- Indices de la tabla `shconsultorios`
--
ALTER TABLE `shconsultorios`
  ADD PRIMARY KEY (`IDSHCONSULTORIOS`),
  ADD KEY `FK_SHCONSULTORIOS_SHMEDICOSASIGNADOS` (`IDMEDICO`);

--
-- Indices de la tabla `shentradasmed`
--
ALTER TABLE `shentradasmed`
  ADD PRIMARY KEY (`IDENTRADA`),
  ADD KEY `FK_SHENTRADASMED_SHMEDICAMENTOS` (`IDMEDICAMENTO`);

--
-- Indices de la tabla `shmedicamentos`
--
ALTER TABLE `shmedicamentos`
  ADD PRIMARY KEY (`IDMEDICAMENTOS`);

--
-- Indices de la tabla `shmedicosasignados`
--
ALTER TABLE `shmedicosasignados`
  ADD PRIMARY KEY (`IDMEDICO`),
  ADD KEY `FK_SHMEDICOSASIGNADOS_GSPERSONAS` (`IDGSPERSONA`);

--
-- Indices de la tabla `shprocesos`
--
ALTER TABLE `shprocesos`
  ADD PRIMARY KEY (`IDSHPROCESOS`);

--
-- Indices de la tabla `shsalidasmed`
--
ALTER TABLE `shsalidasmed`
  ADD PRIMARY KEY (`IDSALIDASMED`),
  ADD KEY `FK_SHSALIDASMED_SHCONSULTORIOS` (`IDCONSULTORIO`),
  ADD KEY `FK_SHSALIDASMED_SHMEDICAMENTOS` (`IDMEDICAMENTO`);

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
  ADD UNIQUE KEY `username` (`username`);

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
  MODIFY `IDGSAREASDIRECCION` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gsdirdireccionesgen`
--
ALTER TABLE `gsdirdireccionesgen`
  MODIFY `IDGSDIRDIRECCION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `gsdireccionessub`
--
ALTER TABLE `gsdireccionessub`
  MODIFY `IDGSDIRECCION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `gsgerencias`
--
ALTER TABLE `gsgerencias`
  MODIFY `IDGSGERENCIAS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gsperfilespuestos`
--
ALTER TABLE `gsperfilespuestos`
  MODIFY `IDPERFILDEPUESTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gsperfilessistema`
--
ALTER TABLE `gsperfilessistema`
  MODIFY `IDGESPERFILES` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gspersonas`
--
ALTER TABLE `gspersonas`
  MODIFY `IDGSPERSONAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `gspuestos`
--
ALTER TABLE `gspuestos`
  MODIFY `IDGSPUESTOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `gsusuarios`
--
ALTER TABLE `gsusuarios`
  MODIFY `IDGSUSUARIO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `incursosxempl`
--
ALTER TABLE `incursosxempl`
  MODIFY `IDMICURSOSXEMPL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ips_on_hold`
--
ALTER TABLE `ips_on_hold`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login_errors`
--
ALTER TABLE `login_errors`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `micalendariocursos`
--
ALTER TABLE `micalendariocursos`
  MODIFY `IDMICALENDARCURSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `micapacitadores`
--
ALTER TABLE `micapacitadores`
  MODIFY `IDCAPACITADORES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mincursos`
--
ALTER TABLE `mincursos`
  MODIFY `IDCURSOIND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `shcitasmedicas`
--
ALTER TABLE `shcitasmedicas`
  MODIFY `IDCITASMEDICAS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `shconsultorios`
--
ALTER TABLE `shconsultorios`
  MODIFY `IDSHCONSULTORIOS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `shentradasmed`
--
ALTER TABLE `shentradasmed`
  MODIFY `IDENTRADA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `shmedicamentos`
--
ALTER TABLE `shmedicamentos`
  MODIFY `IDMEDICAMENTOS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `shmedicosasignados`
--
ALTER TABLE `shmedicosasignados`
  MODIFY `IDMEDICO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `shprocesos`
--
ALTER TABLE `shprocesos`
  MODIFY `IDSHPROCESOS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `shsalidasmed`
--
ALTER TABLE `shsalidasmed`
  MODIFY `IDSALIDASMED` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `FK_GSAREASDIRECCION_GSDIRECCIONESSUB` FOREIGN KEY (`IDGSDIRECCION`) REFERENCES `gsdireccionessub` (`IDGSDIRECCION`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gsdireccionessub`
--
ALTER TABLE `gsdireccionessub`
  ADD CONSTRAINT `FK_GSDIRECCIONESSUB_GSDIRDIRECCIONESGEN` FOREIGN KEY (`IDGSDIRDIRECCION`) REFERENCES `gsdirdireccionesgen` (`IDGSDIRDIRECCION`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gsgerencias`
--
ALTER TABLE `gsgerencias`
  ADD CONSTRAINT `FK_GSGERENCIAS_GSPERSONAS` FOREIGN KEY (`IDGSPERSONAS`) REFERENCES `gspersonas` (`IDGSPERSONAS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gspersonas`
--
ALTER TABLE `gspersonas`
  ADD CONSTRAINT `FK_GSPERSONAS_GSPUESTOS` FOREIGN KEY (`IDGSPUESTOS`) REFERENCES `gspuestos` (`IDGSPUESTOS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `incursosxempl`
--
ALTER TABLE `incursosxempl`
  ADD CONSTRAINT `FK_INCURSOSXEMPL_GSPERSONAS` FOREIGN KEY (`IDGSPERSONAS`) REFERENCES `gspersonas` (`IDGSPERSONAS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_INCURSOSXEMPL_MICALENDARIOCURSOS` FOREIGN KEY (`IDMICALENDARIOCURSOS`) REFERENCES `micalendariocursos` (`IDMICALENDARCURSO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `micalendariocursos`
--
ALTER TABLE `micalendariocursos`
  ADD CONSTRAINT `FK_MICALENDARIOCURSOS_MICAPACITADORES` FOREIGN KEY (`IDCAPACITADORES`) REFERENCES `micapacitadores` (`IDCAPACITADORES`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_MICALENDARIOCURSOS_MINCURSOS` FOREIGN KEY (`IDCURSOIND`) REFERENCES `mincursos` (`IDCURSOIND`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `micapacitadores`
--
ALTER TABLE `micapacitadores`
  ADD CONSTRAINT `FK_MICAPACITADORES_GSPERSONAS` FOREIGN KEY (`IDGSPERSONA`) REFERENCES `gspersonas` (`IDGSPERSONAS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mincursos`
--
ALTER TABLE `mincursos`
  ADD CONSTRAINT `FK_MINCURSOS_GSDIRECCIONESSUB` FOREIGN KEY (`IDGSDIRECCION`) REFERENCES `gsdireccionessub` (`IDGSDIRECCION`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shcitasmedicas`
--
ALTER TABLE `shcitasmedicas`
  ADD CONSTRAINT `FK_SHCITASMEDICAS_GSPERSONAS` FOREIGN KEY (`IDGSPERSONA`) REFERENCES `gspersonas` (`IDGSPERSONAS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_SHCITASMEDICAS_SHCONSULTORIOS` FOREIGN KEY (`IDCONSULTORIO`) REFERENCES `shconsultorios` (`IDSHCONSULTORIOS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shconsultorios`
--
ALTER TABLE `shconsultorios`
  ADD CONSTRAINT `FK_SHCONSULTORIOS_SHMEDICOSASIGNADOS` FOREIGN KEY (`IDMEDICO`) REFERENCES `shmedicosasignados` (`IDMEDICO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shentradasmed`
--
ALTER TABLE `shentradasmed`
  ADD CONSTRAINT `FK_SHENTRADASMED_SHMEDICAMENTOS` FOREIGN KEY (`IDMEDICAMENTO`) REFERENCES `shmedicamentos` (`IDMEDICAMENTOS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shmedicosasignados`
--
ALTER TABLE `shmedicosasignados`
  ADD CONSTRAINT `FK_SHMEDICOSASIGNADOS_GSPERSONAS` FOREIGN KEY (`IDGSPERSONA`) REFERENCES `gspersonas` (`IDGSPERSONAS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shsalidasmed`
--
ALTER TABLE `shsalidasmed`
  ADD CONSTRAINT `FK_SHSALIDASMED_SHCONSULTORIOS` FOREIGN KEY (`IDCONSULTORIO`) REFERENCES `shconsultorios` (`IDSHCONSULTORIOS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_SHSALIDASMED_SHMEDICAMENTOS` FOREIGN KEY (`IDMEDICAMENTO`) REFERENCES `shmedicamentos` (`IDMEDICAMENTOS`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
