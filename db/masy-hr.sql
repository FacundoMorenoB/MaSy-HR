-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-03-2019 a las 06:56:51
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
CREATE DATABASE IF NOT EXISTS `masy-hr` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `masy-hr`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl`
--

DROP TABLE IF EXISTS `acl`;
CREATE TABLE `acl` (
  `ai` int(10) UNSIGNED NOT NULL,
  `action_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_actions`
--

DROP TABLE IF EXISTS `acl_actions`;
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

DROP TABLE IF EXISTS `acl_categories`;
CREATE TABLE `acl_categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_code` varchar(100) NOT NULL COMMENT 'No periods allowed!',
  `category_desc` varchar(100) NOT NULL COMMENT 'Human readable description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_sessions`
--

DROP TABLE IF EXISTS `auth_sessions`;
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
('d1kfqhhspt1ciooihetm25d1rljtubpk', 1637400287, '2019-03-30 05:23:33', '2019-03-30 05:48:27', '::1', 'Chrome 73.0.3683.86 on Windows 10'),
('hj8quflupi492jqplgeq8epu7doovutm', 1637400287, '2019-03-30 05:50:35', '2019-03-30 05:42:19', '::1', 'Firefox 66.0 on Windows 10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
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
('d1kfqhhspt1ciooihetm25d1rljtubpk', '::1', 1553925187, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932343930373b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a32333a3333223b7d223b),
('4mdg78umfq75qu0j2r3fhn076olb8uf4', '::1', 1553924907, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932343930373b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a32333a3333223b7d223b),
('hj8quflupi492jqplgeq8epu7doovutm', '::1', 1553924539, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932343533393b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a35303a3335223b7d223b),
('i0jjv9vphbf48d9heep0btpg4vogb3h9', '::1', 1553924539, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932343533393b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a35303a3335223b7d223b),
('7hbu3o5j6p2l1i87m6nv03st85s79uuf', '::1', 1553924131, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932343133313b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a35303a3335223b7d223b),
('bfrur1v53ho6iglm4l68a34fn63j2jv1', '::1', 1553923717, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932333731373b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a35303a3335223b7d223b),
('8hvknovk2jtsai9r3f9fr8o8018r3blp', '::1', 1553923395, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932333339353b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a35303a3335223b7d223b),
('c5kq2oafois4ggfdtd191d736fkhmv2d', '::1', 1553923050, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932333035303b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a35303a3335223b7d223b),
('617ioncfl6tgtq4n2le344ltta3i4bgg', '::1', 1553922394, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932323339343b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a35303a3335223b7d223b),
('c0qfjk33mm5qogu7qjeokhfscaqf63de', '::1', 1553924567, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932343536373b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a32333a3333223b7d223b),
('qv58fn64p4rvi9b2pqa36opj30vibh4d', '::1', 1553921837, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932313833373b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a35303a3335223b7d223b),
('jhv31a2ur9toh13h7fqkgl7h7hafvhie', '::1', 1553921435, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932313433353b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a35303a3335223b7d223b),
('kv2ou66skt9itnb7d0jof4odj6h61duj', '::1', 1553921432, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932313433323b),
('f2fvhg4ukeccisrgi8ll1336f6f9u25m', '::1', 1553921559, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932313535393b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a32333a3333223b7d223b),
('1893d4sp6ue665gr3ajn0a2um38fvppr', '::1', 1553921181, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932313138313b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a32333a3333223b7d223b),
('7tesap9aqobp04ckebi4hlbr0b9fdvrc', '::1', 1553919781, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931393738313b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('5vt02q6cf86e1mnq91dh8ak02k22e48b', '::1', 1553919328, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931393332383b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('9ue99ma27j924rvfjufkvtlalse5s7qt', '::1', 1553919022, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931393032323b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('r14tdmtmfujdpmhd0boirdedi6otlmjs', '::1', 1553918711, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931383731313b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('vrpje93v72pda208dk9m69t7b168j629', '::1', 1553918206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931383230363b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('aor1b99kgm13ubabe7pmfpj3fndj2if1', '::1', 1553917861, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931373836313b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('csf5iv08fv2rtq3e6pt88nfc369h96b3', '::1', 1553916846, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931363834363b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('iaganpdgmetu85okqgeqima05h80h3ab', '::1', 1553916528, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931363532383b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('b17apjq1hdrg6vs6pobklfitj6a4bscv', '::1', 1553915081, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931353038313b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('4f104a90evvcm7rq5m3chetigmqr1rlb', '::1', 1553914493, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931343439333b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('6coqqtalslr0hq2noa27cghgs2730oll', '::1', 1553914163, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931343136333b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('p36n1dho3s6m7rm5m4do0ssv261do5af', '::1', 1553913733, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931333733333b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('i0sjjaobpkonqgekknhvjfqskcih4gs8', '::1', 1553920884, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932303838343b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030323a34373a3131223b7d223b),
('kgprm7fie6n4opq4c8ts6pnhi3hehjhv', '::1', 1553919813, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333931393831333b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a32333a3333223b7d223b),
('5l3frdef5qeuuvh7ciqtdp24iqitig9h', '::1', 1553920158, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932303135383b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a32333a3333223b7d223b),
('frlk0ip4us0apmqpac30sdiotqsq73es', '::1', 1553920515, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535333932303531353b617574685f6964656e746966696572737c733a38333a22613a323a7b733a373a22757365725f6964223b733a31303a2231363337343030323837223b733a31303a226c6f67696e5f74696d65223b733a31393a22323031392d30332d33302030353a32333a3333223b7d223b);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denied_access`
--

DROP TABLE IF EXISTS `denied_access`;
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

DROP TABLE IF EXISTS `gsareasdireccion`;
CREATE TABLE `gsareasdireccion` (
  `IDGSAREASDIRECCION` int(11) NOT NULL,
  `ANOMBREAREA` varchar(100) NOT NULL,
  `IDGSDIRECCION` int(11) NOT NULL,
  `IDGSPERSONAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsdirdirecciones`
--

DROP TABLE IF EXISTS `gsdirdirecciones`;
CREATE TABLE `gsdirdirecciones` (
  `IDGSDIRDIRECCION` int(11) NOT NULL,
  `IDGSDIRECCION` int(11) DEFAULT NULL,
  `IDPERFILPUESTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gsdirdirecciones`
--

INSERT INTO `gsdirdirecciones` (`IDGSDIRDIRECCION`, `IDGSDIRECCION`, `IDPERFILPUESTO`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsdirdireccionesgen`
--

DROP TABLE IF EXISTS `gsdirdireccionesgen`;
CREATE TABLE `gsdirdireccionesgen` (
  `IDGSDIRDIRECCION` int(11) NOT NULL,
  `ACLAVEDIRECCION` varchar(10) NOT NULL,
  `ANOMBREDIRECCION` varchar(50) NOT NULL,
  `IDGSPERSONAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gsdirdireccionesgen`
--

INSERT INTO `gsdirdireccionesgen` (`IDGSDIRDIRECCION`, `ACLAVEDIRECCION`, `ANOMBREDIRECCION`, `IDGSPERSONAS`) VALUES
(1, 'ABC', 'Direccion General', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsdirecciones`
--

DROP TABLE IF EXISTS `gsdirecciones`;
CREATE TABLE `gsdirecciones` (
  `IDGSDIRECCION` int(11) NOT NULL,
  `ANOMBREDIRECCION` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gsdirecciones`
--

INSERT INTO `gsdirecciones` (`IDGSDIRECCION`, `ANOMBREDIRECCION`) VALUES
(1, 'Direccion General');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsdireccionessub`
--

DROP TABLE IF EXISTS `gsdireccionessub`;
CREATE TABLE `gsdireccionessub` (
  `IDGSDIRECCION` int(11) NOT NULL,
  `ANOMBREDIRECCION` varchar(50) NOT NULL,
  `IDGSPERSONAS` int(11) NOT NULL,
  `IDGSDIRDIRECCION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gsdireccionessub`
--

INSERT INTO `gsdireccionessub` (`IDGSDIRECCION`, `ANOMBREDIRECCION`, `IDGSPERSONAS`, `IDGSDIRDIRECCION`) VALUES
(5, 'Direccion General', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsgerencias`
--

DROP TABLE IF EXISTS `gsgerencias`;
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

DROP TABLE IF EXISTS `gsperfilespuestos`;
CREATE TABLE `gsperfilespuestos` (
  `IDPERFILDEPUESTO` int(11) NOT NULL,
  `ANOMBREPERFILPUESTO` varchar(50) NOT NULL,
  `IDGSDIRECCION` int(11) DEFAULT NULL,
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

INSERT INTO `gsperfilespuestos` (`IDPERFILDEPUESTO`, `ANOMBREPERFILPUESTO`, `IDGSDIRECCION`, `AGERENCIAPERT`, `APUESTOREPORTA`, `ANIVELIMPACTO`, `ANIVELEVALUACION`, `ARANGOSUELDO`, `NSUELDO`, `AMISION`, `NRANGOEDAD`, `AGENERO`, `AESTADOCIVIL`, `AESCOLARIDAD`, `AESTATUSESCOLARIDAD`, `NAEXPERIENCIA`, `APUESTOSOCUPADOS`, `ACONOCIMIENTOSTEC`, `AIDIOMAS`, `APROGRAMASINFO`, `AMANEJOVALORES`, `AHABILIDADESPRF`, `AFUNESPECIFICAS`, `AUFECHAMOV`, `AUIDGSUSUARIO`, `AUHORA`) VALUES
(1, 'Director TI', NULL, 'Dirección de TI', 'Director de sistemas', '1', 'Director', '$20000 - $50000', '35000.00', 'Director TI', '25-35', 'Indistinto', NULL, NULL, NULL, '', '', 'Director TI', 'Ingles, Fr', 'Ofimatica, ERPs, SAP,', '', 'Director TI', '1. Liderazgo\r\n2. Autodidacta\r\n3. Inovador', '0000-00-00 00:00:00', NULL, '2019-03-30 03:06:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsperfilessistema`
--

DROP TABLE IF EXISTS `gsperfilessistema`;
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

DROP TABLE IF EXISTS `gspersonas`;
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
  `IDPERFILDEPUESTO` int(11) DEFAULT NULL,
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

INSERT INTO `gspersonas` (`IDGSPERSONAS`, `ANOMBREPERSONA`, `APATERNO`, `AMATERNO`, `ADIRECCION`, `ATELEFONO`, `ACURP`, `ARFC`, `AFECHANACIMIENTO`, `NCIUDAD`, `AESTADO`, `CVVTAE`, `CONTRATO`, `IDPERFILDEPUESTO`, `ACANDIDATO`, `AEMPLEADO`, `ADRESULTPSICO`, `AUFECHAMOV`, `IDUSUARIO`, `AUHORA`) VALUES
(5, 'Facundo', 'Armando', 'Moreno', 'Bugambilias', '55-5555-5555', 'MOBF880122JTAHMCRN03', 'MOBF880122JTA', '2019-01-22 00:00:00', 1, 1, NULL, NULL, 1, NULL, NULL, NULL, '2019-03-29 00:00:00', NULL, '2019-03-30 04:29:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gsusuarios`
--

DROP TABLE IF EXISTS `gsusuarios`;
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

DROP TABLE IF EXISTS `incursosxempl`;
CREATE TABLE `incursosxempl` (
  `IDMICURSOSXEMPL` int(11) NOT NULL,
  `IDGSPERSONAS` int(11) NOT NULL,
  `IDMICALENDARIOCURSOS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `incursosxempl`
--

INSERT INTO `incursosxempl` (`IDMICURSOSXEMPL`, `IDGSPERSONAS`, `IDMICALENDARIOCURSOS`) VALUES
(4, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ips_on_hold`
--

DROP TABLE IF EXISTS `ips_on_hold`;
CREATE TABLE `ips_on_hold` (
  `ai` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_errors`
--

DROP TABLE IF EXISTS `login_errors`;
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

DROP TABLE IF EXISTS `micalendariocursos`;
CREATE TABLE `micalendariocursos` (
  `IDMICALENDARCURSO` int(11) NOT NULL,
  `IDCURSOIND` int(11) NOT NULL,
  `AFECHAINICIO` datetime DEFAULT NULL,
  `AFECHAFIN` datetime NOT NULL,
  `IDGSPERSONAS` int(11) NOT NULL,
  `ACOMENTARIOS` varchar(250) DEFAULT NULL,
  `ACLAVECURSO` varchar(20) NOT NULL,
  `IDCAPACITADORES` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `micalendariocursos`
--

INSERT INTO `micalendariocursos` (`IDMICALENDARCURSO`, `IDCURSOIND`, `AFECHAINICIO`, `AFECHAFIN`, `IDGSPERSONAS`, `ACOMENTARIOS`, `ACLAVECURSO`, `IDCAPACITADORES`) VALUES
(5, 3, '2019-03-29 00:00:00', '2019-03-29 00:00:00', 5, 'ABC', 'ABC', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `micapacitadores`
--

DROP TABLE IF EXISTS `micapacitadores`;
CREATE TABLE `micapacitadores` (
  `IDCAPACITADORES` int(11) NOT NULL,
  `IDGSPERSONA` int(11) NOT NULL,
  `APREPARACION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `micapacitadores`
--

INSERT INTO `micapacitadores` (`IDCAPACITADORES`, `IDGSPERSONA`, `APREPARACION`) VALUES
(1, 5, 'Curso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mincursos`
--

DROP TABLE IF EXISTS `mincursos`;
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
(3, 'Capacitacion', 'Obligatorio', 5, 'Capacitacion', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shcitasmedicas`
--

DROP TABLE IF EXISTS `shcitasmedicas`;
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

DROP TABLE IF EXISTS `shconsultorios`;
CREATE TABLE `shconsultorios` (
  `IDSHCONSULTORIOS` int(11) NOT NULL,
  `AOFICINACONSULTORIO` varchar(50) NOT NULL,
  `IDMEDICO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shentradasmed`
--

DROP TABLE IF EXISTS `shentradasmed`;
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

DROP TABLE IF EXISTS `shmedicamentos`;
CREATE TABLE `shmedicamentos` (
  `IDMEDICAMENTOS` int(11) NOT NULL,
  `ADESCRIPCIONMEDICAMENTO` varchar(100) NOT NULL,
  `NCOSTO` decimal(10,2) NOT NULL,
  `AUBICACIÓN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shmedicosasignados`
--

DROP TABLE IF EXISTS `shmedicosasignados`;
CREATE TABLE `shmedicosasignados` (
  `IDMEDICO` int(11) NOT NULL,
  `IDGSPERSONA` int(11) NOT NULL,
  `AESPECIALIDAD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shprocesos`
--

DROP TABLE IF EXISTS `shprocesos`;
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

DROP TABLE IF EXISTS `shsalidasmed`;
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

DROP TABLE IF EXISTS `username_or_email_on_hold`;
CREATE TABLE `username_or_email_on_hold` (
  `ai` int(10) UNSIGNED NOT NULL,
  `username_or_email` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
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
(1637400287, 'admin', 'admin@masy.hr.com', 9, '0', '$2y$11$rAtGz48T6o2zc1/0iSESYOAp4KjRtsGAqeXaxiq/Xq1dS0/krcOf6', NULL, NULL, NULL, '2019-03-30 05:50:35', '2019-03-13 05:14:35', '2019-03-30 04:50:35');

--
-- Disparadores `users`
--
DROP TRIGGER IF EXISTS `ca_passwd_trigger`;
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
-- Indices de la tabla `gsdirdirecciones`
--
ALTER TABLE `gsdirdirecciones`
  ADD PRIMARY KEY (`IDGSDIRDIRECCION`),
  ADD KEY `IXFK_GSDIRDIRECCIONES_GSDIRECCIONES` (`IDGSDIRECCION`);

--
-- Indices de la tabla `gsdirdireccionesgen`
--
ALTER TABLE `gsdirdireccionesgen`
  ADD PRIMARY KEY (`IDGSDIRDIRECCION`),
  ADD KEY `FK_GSDIRDIRECCIONESGEN_GSPERSONAS` (`IDGSPERSONAS`);

--
-- Indices de la tabla `gsdirecciones`
--
ALTER TABLE `gsdirecciones`
  ADD PRIMARY KEY (`IDGSDIRECCION`);

--
-- Indices de la tabla `gsdireccionessub`
--
ALTER TABLE `gsdireccionessub`
  ADD PRIMARY KEY (`IDGSDIRECCION`),
  ADD KEY `FK_GSDIRECCIONESSUB_GSDIRDIRECCIONESGEN` (`IDGSDIRDIRECCION`),
  ADD KEY `FK_GSDIRECCIONESSUB_GSPERSONAS` (`IDGSPERSONAS`);

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
  ADD PRIMARY KEY (`IDPERFILDEPUESTO`),
  ADD KEY `FK_GSPERFILESPUESTOS_GSDIRECCIONES` (`IDGSDIRECCION`);

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
  ADD KEY `FK_GSPERSONAS_GSPERFILESPUESTOS` (`IDPERFILDEPUESTO`);

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
  ADD KEY `FK_MICALENDARIOCURSOS_GSPERSONAS` (`IDGSPERSONAS`),
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
-- AUTO_INCREMENT de la tabla `gsdirdirecciones`
--
ALTER TABLE `gsdirdirecciones`
  MODIFY `IDGSDIRDIRECCION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `gsdirdireccionesgen`
--
ALTER TABLE `gsdirdireccionesgen`
  MODIFY `IDGSDIRDIRECCION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gsdirecciones`
--
ALTER TABLE `gsdirecciones`
  MODIFY `IDGSDIRECCION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gsdireccionessub`
--
ALTER TABLE `gsdireccionessub`
  MODIFY `IDGSDIRECCION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `IDGSPERSONAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `gsusuarios`
--
ALTER TABLE `gsusuarios`
  MODIFY `IDGSUSUARIO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `incursosxempl`
--
ALTER TABLE `incursosxempl`
  MODIFY `IDMICURSOSXEMPL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ips_on_hold`
--
ALTER TABLE `ips_on_hold`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `login_errors`
--
ALTER TABLE `login_errors`
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `micalendariocursos`
--
ALTER TABLE `micalendariocursos`
  MODIFY `IDMICALENDARCURSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `micapacitadores`
--
ALTER TABLE `micapacitadores`
  MODIFY `IDCAPACITADORES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mincursos`
--
ALTER TABLE `mincursos`
  MODIFY `IDCURSOIND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `ai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Filtros para la tabla `gsdirdirecciones`
--
ALTER TABLE `gsdirdirecciones`
  ADD CONSTRAINT `FK_GSDIRDIRECCIONES_GSDIRECCIONES` FOREIGN KEY (`IDGSDIRECCION`) REFERENCES `gsdirecciones` (`IDGSDIRECCION`);

--
-- Filtros para la tabla `gsdirdireccionesgen`
--
ALTER TABLE `gsdirdireccionesgen`
  ADD CONSTRAINT `FK_GSDIRDIRECCIONESGEN_GSPERSONAS` FOREIGN KEY (`IDGSPERSONAS`) REFERENCES `gspersonas` (`IDGSPERSONAS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gsdireccionessub`
--
ALTER TABLE `gsdireccionessub`
  ADD CONSTRAINT `FK_GSDIRECCIONESSUB_GSDIRDIRECCIONESGEN` FOREIGN KEY (`IDGSDIRDIRECCION`) REFERENCES `gsdirdireccionesgen` (`IDGSDIRDIRECCION`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_GSDIRECCIONESSUB_GSPERSONAS` FOREIGN KEY (`IDGSPERSONAS`) REFERENCES `gspersonas` (`IDGSPERSONAS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gsgerencias`
--
ALTER TABLE `gsgerencias`
  ADD CONSTRAINT `FK_GSGERENCIAS_GSPERSONAS` FOREIGN KEY (`IDGSPERSONAS`) REFERENCES `gspersonas` (`IDGSPERSONAS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gsperfilespuestos`
--
ALTER TABLE `gsperfilespuestos`
  ADD CONSTRAINT `FK_GSPERFILESPUESTOS_GSDIRECCIONES` FOREIGN KEY (`IDGSDIRECCION`) REFERENCES `gsdireccionessub` (`IDGSDIRECCION`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gspersonas`
--
ALTER TABLE `gspersonas`
  ADD CONSTRAINT `FK_GSPERSONAS_GSPERFILESPUESTOS` FOREIGN KEY (`IDPERFILDEPUESTO`) REFERENCES `gsperfilespuestos` (`IDPERFILDEPUESTO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `FK_MICALENDARIOCURSOS_GSPERSONAS` FOREIGN KEY (`IDGSPERSONAS`) REFERENCES `gspersonas` (`IDGSPERSONAS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
