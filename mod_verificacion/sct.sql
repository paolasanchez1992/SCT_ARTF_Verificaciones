-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-04-2019 a las 22:45:28
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sct`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actas_not`
--

DROP TABLE IF EXISTS `actas_not`;
CREATE TABLE IF NOT EXISTS `actas_not` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_ver` int(10) UNSIGNED NOT NULL,
  `id_centro` varchar(45) NOT NULL,
  `fecha` datetime NOT NULL,
  `estatus_ver` varchar(45) NOT NULL,
  `estatus_gen` varchar(45) NOT NULL,
  `usuario` varchar(120) NOT NULL,
  `vgcf` int(10) UNSIGNED NOT NULL,
  `linea` varchar(5) NOT NULL,
  `ruta` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actas_not`
--

INSERT INTO `actas_not` (`id`, `id_ver`, `id_centro`, `fecha`, `estatus_ver`, `estatus_gen`, `usuario`, `vgcf`, `linea`, `ruta`) VALUES
(5, 4, '4', '2019-04-16 15:59:47', 'L', 'F', '2', 4, '6', ''),
(6, 4, '4', '2019-04-16 18:36:13', 'L', 'F', '2', 4, '6', ''),
(7, 4, '4', '2019-04-16 18:36:13', 'L', 'F', '2', 4, '6', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alcance`
--

DROP TABLE IF EXISTS `alcance`;
CREATE TABLE IF NOT EXISTS `alcance` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idobjeto` int(10) NOT NULL,
  `nombre` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alcance`
--

INSERT INTO `alcance` (`id`, `idobjeto`, `nombre`, `descripcion`) VALUES
(1, 1, 'ALCANCE OVI', 'Reforzar la segura, eficiente y adecuada prestaci&oacute;n del servicio p&uacute;blico del transporte ferroviario de carga y/o pasajeros.'),
(2, 2, 'ALCANCE V&Iacute;A FERREA', 'Reforzar la segura, eficiente y adecuada prestaci&oacute;n del servicio p&uacute;blico del transporte ferroviario de carga y/o pasajeros.'),
(3, 3, 'ALCANCE PUENTES Y/O ALCANTARILLAS', 'Reforzar la segura, eficiente y adecuada prestaci&oacute;n del servicio p&uacute;blico del transporte ferroviario de carga y/o pasajeros.'),
(4, 4, 'ALCANCE T&Uacute;NELES', 'Reforzar la segura, eficiente y adecuada prestaci&oacute;n del servicio p&uacute;blico del transporte ferroviario de carga y/o pasajeros.'),
(5, 5, 'ALCANCE SE&Ntilde;ALES', 'Reforzar la segura, eficiente y adecuada prestaci&oacute;n del servicio p&uacute;blico del transporte ferroviario de carga y/o pasajeros.'),
(6, 6, 'ALCANCE INSTALACIONES', 'Reforzar la segura, eficiente y adecuada prestaci&oacute;n del servicio p&uacute;blico del transporte ferroviario de carga y/o pasajeros.'),
(7, 7, 'ALCANCE DVC', 'Reforzar la segura, eficiente y adecuada prestaci&oacute;n del servicio p&uacute;blico del transporte ferroviario de carga y/o pasajeros.'),
(8, 8, 'ALCANCE TRANSPORTE DE CARGA', 'Reforzar la segura, eficiente y adecuada prestaci&oacute;n del servicio p&uacute;blico del transporte ferroviario de carga y/o pasajeros.'),
(9, 9, 'ALCANCE TRANSPORTE DE PASAJEROS', 'Reforzar la segura, eficiente y adecuada prestaci&oacute;n del servicio p&uacute;blico del transporte ferroviario de pasajeros.'),
(10, 10, 'ALCANCE EQUIPO ANTES DE SU SALIDA', 'Reforzar la segura, eficiente y adecuada prestaci&oacute;n del servicio p&uacute;blico del transporte ferroviario de carga y pasajeros.'),
(11, 11, 'ALCANCE UNIDADES DE ARRASTRE I', 'Reforzar los estandares de seguridad en la adecuada prestaci&oacute;n del mantenimiento del equipo ferroviario y de las medidas de protecci&oacute;n al medio ambiente.'),
(12, 12, 'ALCANCE UNIDADES DE ARRASTRE II', 'Reforzar los estandares de seguridad en la adecuada prestaci&oacute;n del mantenimiento del equipo ferroviario y de las medidas de protecci&oacute;n al medio ambiente.'),
(13, 13, 'ALCANCE EQUIPO TRACTIVO Y CLL', 'Reforzar los estandares de seguridad en la adecuada prestaci&oacute;n del mantenimiento del equipo ferroviario y de las medidas de protecci&oacute;n al medio ambiente.'),
(14, 14, 'ALCANCE CENTRO DE ABASTOS', 'Reforzar los estandares de seguridad en el adecuado abastecimiento y susministro de insumos al equipo ferroviario y de las medidas de protecci&oacute;n al medio ambiente.'),
(15, 15, 'ALCANCE TRANSBORDO Y TRANSVASE DE L&Iacute;QUIDOS', 'NA'),
(16, 16, 'TERMINAL DE CARGA', 'NA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_ver`
--

DROP TABLE IF EXISTS `area_ver`;
CREATE TABLE IF NOT EXISTS `area_ver` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area_ver`
--

INSERT INTO `area_ver` (`id`, `nombre`) VALUES
(1, 'Infraestructura'),
(2, 'Operaci&oacute;n/Equipo en Transito'),
(3, 'Equipo Antes de su Salida'),
(4, 'Servicio Auxiliar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_ver`
--

DROP TABLE IF EXISTS `calendario_ver`;
CREATE TABLE IF NOT EXISTS `calendario_ver` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_centro` varchar(40) CHARACTER SET latin1 NOT NULL,
  `ver_programadas` varchar(80) CHARACTER SET latin1 NOT NULL,
  `ene` varchar(10) CHARACTER SET latin1 NOT NULL,
  `feb` varchar(10) CHARACTER SET latin1 NOT NULL,
  `mar` varchar(10) CHARACTER SET latin1 NOT NULL,
  `abr` varchar(10) CHARACTER SET latin1 NOT NULL,
  `may` varchar(10) CHARACTER SET latin1 NOT NULL,
  `jun` varchar(10) CHARACTER SET latin1 NOT NULL,
  `jul` varchar(10) CHARACTER SET latin1 NOT NULL,
  `ago` varchar(10) CHARACTER SET latin1 NOT NULL,
  `sep` varchar(10) CHARACTER SET latin1 NOT NULL,
  `oct` varchar(10) CHARACTER SET latin1 NOT NULL,
  `nov` varchar(10) CHARACTER SET latin1 NOT NULL,
  `dic` varchar(10) CHARACTER SET latin1 NOT NULL,
  `total` varchar(10) CHARACTER SET latin1 NOT NULL,
  `iniciales` varchar(10) CHARACTER SET latin1 NOT NULL,
  `seg_ms` varchar(10) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `calendario_ver`
--

INSERT INTO `calendario_ver` (`id`, `id_centro`, `ver_programadas`, `ene`, `feb`, `mar`, `abr`, `may`, `jun`, `jul`, `ago`, `sep`, `oct`, `nov`, `dic`, `total`, `iniciales`, `seg_ms`) VALUES
(2, 'SCT_DUR', 'Infraestructura', '0', '0', '2', '2', '2', '1', '2', '3', '2', '1', '0', '0', '15', '15', ''),
(3, 'SCT_DUR', 'Operaci&oacute;n y Equipo en tr&aacute;nsito ', '0', '1', '0', '0', '1', '0', '0', '1', '0', '0', '1', '0', '4', '4', ''),
(4, 'SCT_DUR', 'Equipo antes de su Salida  ', '0', '1', '0', '1', '0', '1', '0', '1', '0', '1', '0', '1', '6', '6', ''),
(5, 'SCT_DUR', 'Servicio Auxiliar ', '0', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '2', '2', ''),
(6, 'SCT_DUR', 'TOTAL', '0', '2', '2', '3', '3', '4', '2', '5', '2', '2', '1', '1', '27', '27', ''),
(8, 'SCT_TAM', 'Infraestructura', '0', '1', '2', '2', '2', '2', '1', '2', '2', '1', '0', '0', '15', '15', ''),
(9, 'SCT_TAM', 'Operaci&oacute;n y Equipo en tr&aacute;nsito ', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '2', '2', ''),
(10, 'SCT_TAM', 'Equipo antes de su Salida  ', '0', '1', '0', '1', '0', '1', '1', '0', '0', '0', '1', '0', '5', '5', ''),
(11, 'SCT_TAM', 'Servicio Auxiliar ', '0', '1', '0', '1', '0', '1', '1', '0', '0', '0', '0', '0', '4', '4', ''),
(12, 'SCT_TAM', 'TOTAL', '0', '3', '3', '4', '2', '4', '3', '2', '2', '2', '1', '0', '26', '26', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros_sct`
--

DROP TABLE IF EXISTS `centros_sct`;
CREATE TABLE IF NOT EXISTS `centros_sct` (
  `id_centro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_estado` int(10) NOT NULL,
  `valor_centro` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_centro` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `titular` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `encargado` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `verificador1` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `verificador2` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_centro`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `centros_sct`
--

INSERT INTO `centros_sct` (`id_centro`, `id_estado`, `valor_centro`, `nombre_centro`, `titular`, `encargado`, `verificador1`, `verificador2`) VALUES
(1, 1, 'SCT_AGU', 'SCT AGUASCALIENTES', 'Ing. Gregorio Ledezma Quirarte', 'Ing. Victor Hugo Romo Romo', 'Ing. Victor Hugo Romo Romo', ''),
(2, 2, 'SCT_BCN', 'SCT BAJA CALIFORNIA', 'Ing. Jes&uacute;s Felipe Verdugo L&oacute;pez', 'Lic. Sandra Berenice Avila Pi&ntilde;uelas', 'Ing. Eduardo L&oacute;pez Corral', ''),
(3, 3, 'SCT_BCS', 'SCT BAJA CALIFORNIA SUR', 'Lic. Sergio Herrera Concha', '', '', ''),
(4, 4, 'SCT_CAM', 'SCT CAMPECHE', 'Ing. Jes&uacute;s Armando Araiza Armenta', 'Mtro. Jos&eacute; Mauricio Angulo Garc&iacute;a', 'Ing. Daniel Gonz&aacute;lez J&aacute;uregui', ''),
(5, 6, 'SCT_CHP', 'SCT CHIAPAS', 'Ing. Oscar Rigoberto Coello Dom&iacute;nguez', 'Lic. Gerardo Joel Mart&iacute;nez Caliano', 'Lic. Gerardo Joel Mart&iacute;nez Caliano', ''),
(6, 7, 'SCT_CHH', 'SCT CHIHUAHUA', 'Ing. Julio Cesar Huerta Flores', 'Ing. Lorenzo Huber Corral Anchondo', 'M.I. Luis Carlos L&oacute;pez Estrada', 'Ing. Jes&uacute;s Antonio Almeida Acosta'),
(7, 8, 'SCT_COA', 'SCT COAHUILA', 'Ing. Fidencio Elpidio Valdez Torres', 'Lic. P&aacute;vel Javalera Hern&aacute;ndez', 'Ing. Gustavo Z&uacute;&ntilde;iga Linares', 'Ing. Gustavo Cervantes Aguirre'),
(8, 9, 'SCT_COL', 'SCT COLIMA', 'Ing. Guido Mendiburu Solis', 'Lic. Laura Alicia Sevilla Larios', 'Ing. Arturo Sevilla Trejo', ''),
(9, 10, 'SCT_DUR', 'SCT DURANGO', 'Ing. &aacute;ngel Sergio Devora Nu&ntilde;ez', 'Lic. Eduardo Medina V&aacute;zquez\nEncargado', 'Ing. Gast&oacute;n Aar&oacute;n Rocha Campa', ''),
(10, 11, 'SCT_MEX', 'SCT ESTADO DE MEXICO', 'Ing. Santiago Rico Galindo', 'Ing. Jos&eacute; Aurelio L&oacute;pez Flores', 'Ing. Janner Jaimes Jaramillo', ''),
(11, 12, 'SCT_GUA', 'SCT GUANAJUATO', 'Ing. Ernesto J&aacute;uregi Asomoza', '', 'Ing. Edgar Enrique Torres Guerrero', ''),
(12, 13, 'SCT_GRO', 'SCT GUERRERO', 'Ing. Cesar Valenzo Sotelo', 'Ing. Edgar Mario Ortega S&aacute;nchez', '', ''),
(13, 14, 'SCT_HID', 'SCT HIDALGO', 'Ing. Ignacio meza echavarria', 'L.A.P. Rene del Castillo Bravo', 'Ing. Carmen Azucena Zapata Calder&oacute;n', ''),
(14, 15, 'SCT_JAL', 'SCT JALISCO', 'Ing. Ernesto Rubio &aacute;valos ', 'Lic. Julio Tirado Ca&ntilde;edo', 'T.S.U. Luis Enrique Rubio Ram&iacute;rez ', ''),
(15, 16, 'SCT_MIC', 'SCT MICHOACAN', 'Ing. Roberto Espinosa Quintino ', 'Lic. Daniel P&eacute;rez Garc&iacute;a', 'Ing. Sonia Castro Morales', ''),
(16, 17, 'SCT_MOR', 'SCT MORELOS', 'Ing. H&eacute;ctor Armando Casta&ntilde;eda Molina', 'Lic. Rosa Minerva Aguilar Dur&aacute;n', '', ''),
(17, 18, 'SCT_NAY', 'SCT NAYARIT', 'Ing. Carlos Luis Ram&iacute;rez Garc&iacute;a', 'Ing. Juan Carlos Becerra Ruelas', 'Ing. Josu&eacute; Isaias Enriquez Castillo', ''),
(18, 19, 'SCT_NLE', 'SCT NUEVO LEON', 'Ing. Ramon Mancillas Esparza', 'Lic. C&eacute;sar Ordorica Gonz&aacute;lez', 'Ing. Francisco Javier Garnica Trevi&ntilde;o', ''),
(19, 20, 'SCT_OAX', 'SCT OAXACA', 'Ing. Jos&eacute; Luis Chida Pardo', 'Lic. Alfredo Santiago Rivera', 'Ing. Romel Manzo Rojas', ''),
(20, 21, 'SCT_PUE', 'SCT PUEBLA', '', 'Lic. Enrique Garc&iacute;a Ferrando', 'Ing. &aacute;ngel Morales Moreno', ''),
(21, 22, 'SCT_QUE', 'SCT QUERETARO', 'Ing. Efrain Arias Vel&aacute;zquez', 'Ing. Manuel Alberto Alcocer Leos', 'Ing. Oscar I. Valenzuela Chavez', ''),
(22, 23, 'SCT_ROO', 'SCT QUINTANA ROO', 'Ing. Francisco Gomez Orozco', 'Francisco Elizondo Garrido', '', ''),
(23, 24, 'SCT_SLP', 'SCT SAN LUIS POTOSI', 'Ing. Ernesto Cepeda Aldape ', 'Lic. Javier Agust&iacute;n Cruz Ortega', 'Ing. Enrique Torres G&oacute;mez', ''),
(24, 25, 'SCT_SIN', 'SCT SINALOA', 'Ing. Jose Refugio Avila Muro', 'Lic. Patricio Virgilio Chavero Elizondo', 'Ing. Oscar Omar Alvarez Torres', ''),
(25, 26, 'SCT_SON', 'SCT SONORA', 'Ing. Eduardo Antonio Pacheco grageda', '', 'Ing. Jos&eacute; Manuel Borb&oacute;n Cota', ''),
(26, 27, 'SCT_TAB', 'SCT TABASCO', 'Ing. Gilberto Cano Mailinedo', 'M.A.P.T. Victor Manuel Garc&iacute;a Vanegas', 'Ing. Edgar Soberanis Calder&oacute;n', ''),
(27, 28, 'SCT_TAM', 'SCT TAMAULIPAS', 'Ing. Ricardo Ortiz Estrada', 'Lic. Marco Antonio Garc&iacute;a Castillo', 'Ing. Manuel Aguilar Hern&aacute;ndez', ''),
(28, 29, 'SCT_TLA', 'SCT TLAXCALA', 'Ing. Guillermo Hern&aacute;ndez Mercado', 'Lic. Jos&eacute; Trinidad Rueda Rojas', 'Lic. Juan Francisco Villalobos L&oacute;pez', ''),
(29, 30, 'SCT_VER', 'SCT VERACRUZ', 'Ing. Jose Adalberto vega regalado', 'L.A.E. Gabriel C&aacute;rdenas Hern&aacute;ndez', 'Ing. Antonio Aguilar Aquino', ''),
(30, 31, 'SCT_YUC', 'SCT YUCATAN', 'Ing. Jos&eacute; Ren&aacute;n Canto Jairala', 'Ing. Fco. Javier Escalante Romero', 'C. Freddy del Rosario G&oacute;ngora Yuit', ''),
(31, 32, 'SCT_ZAC', 'SCT ZACATECAS', 'Ing. Jorge Ra&uacute;l Aguilar Villegas', 'Lic. Juan Jos&eacute; M&aacute;rquez Romero', 'Ing. Alejandro Medrano Jacobo', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consecutivos`
--

DROP TABLE IF EXISTS `consecutivos`;
CREATE TABLE IF NOT EXISTS `consecutivos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_estado` int(10) NOT NULL,
  `numero` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consecutivos`
--

INSERT INTO `consecutivos` (`id`, `id_estado`, `numero`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0),
(4, 4, 0),
(5, 5, 0),
(6, 6, 0),
(7, 7, 0),
(8, 8, 0),
(9, 9, 0),
(10, 10, 0),
(11, 11, 0),
(12, 12, 0),
(13, 13, 0),
(14, 14, 0),
(15, 15, 0),
(16, 16, 0),
(17, 18, 0),
(18, 19, 0),
(19, 20, 0),
(20, 21, 0),
(21, 22, 0),
(22, 23, 0),
(23, 24, 0),
(24, 25, 0),
(25, 26, 0),
(26, 27, 0),
(27, 28, 0),
(28, 29, 0),
(29, 30, 0),
(30, 31, 0),
(31, 32, 0),
(32, 33, 0),
(33, 34, 0),
(34, 17, 0),
(35, 1, 1),
(37, 1, 2),
(38, 1, 3),
(39, 10, 1),
(40, 10, 2),
(41, 10, 3),
(42, 10, 4),
(43, 10, 5),
(44, 4, 1),
(45, 4, 2),
(46, 4, 3),
(47, 4, 4),
(48, 4, 5),
(49, 4, 6),
(50, 4, 7),
(51, 4, 8),
(52, 4, 9),
(53, 4, 10),
(54, 4, 11),
(55, 4, 12),
(56, 4, 13),
(57, 4, 14),
(58, 4, 15),
(59, 4, 16),
(60, 4, 17),
(61, 4, 18),
(62, 4, 19),
(63, 4, 20),
(64, 4, 21),
(65, 4, 22),
(66, 4, 23),
(67, 4, 24),
(68, 4, 25),
(69, 4, 26),
(70, 4, 27),
(71, 4, 28),
(72, 4, 29),
(73, 4, 30),
(74, 4, 31),
(75, 4, 32),
(76, 1, 4),
(77, 10, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruces`
--

DROP TABLE IF EXISTS `cruces`;
CREATE TABLE IF NOT EXISTS `cruces` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_centro` varchar(80) NOT NULL,
  `total_c` varchar(15) NOT NULL,
  `cruces_true` varchar(120) NOT NULL,
  `cruces_false` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruces`
--

INSERT INTO `cruces` (`id`, `id_centro`, `total_c`, `cruces_true`, `cruces_false`) VALUES
(2, 'SCT_DUR', '219', 'FERROMEX = 95 y LCD = 124', '0'),
(3, 'SCT_TAM', '274', '274 FXE Y KCSM', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruces_gen`
--

DROP TABLE IF EXISTS `cruces_gen`;
CREATE TABLE IF NOT EXISTS `cruces_gen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_centro` varchar(80) NOT NULL,
  `no` varchar(4) NOT NULL,
  `linea` varchar(10) NOT NULL,
  `descripcion` text NOT NULL,
  `kilometraje` varchar(40) NOT NULL,
  `autorizado` varchar(40) NOT NULL,
  `n_autorizado` varchar(40) NOT NULL,
  `ultima_ver` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=496 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruces_gen`
--

INSERT INTO `cruces_gen` (`id`, `id_centro`, `no`, `linea`, `descripcion`, `kilometraje`, `autorizado`, `n_autorizado`, `ultima_ver`) VALUES
(2, 'SCT_DUR', '1', 'A', 'DIST.CAMACHO', ' 962+770', 'si', '', '2018-10-01'),
(3, 'SCT_DUR', '2', 'A', 'DIST.CAMACHO', ' 969+406', 'si', '', '2018-10-01'),
(4, 'SCT_DUR', '3', 'A', 'DIST.CAMACHO', ' 974+198', 'si', '', '2018-10-01'),
(5, 'SCT_DUR', '4', 'A', 'DIST.CAMACHO', ' 977+245', 'si', '', '2018-10-01'),
(6, 'SCT_DUR', '5', 'A', 'DIST.CAMACHO', ' 981+214', 'si', '', '2018-10-01'),
(7, 'SCT_DUR', '6', 'A', 'DIST.CAMACHO', ' 982+087', 'si', '', '2018-10-01'),
(8, 'SCT_DUR', '7', 'A', 'DIST.CAMACHO', ' 985+558', 'si', '', '2018-10-01'),
(9, 'SCT_DUR', '8', 'A', 'DIST.CAMACHO', ' 990+015', 'si', '', '2018-10-01'),
(10, 'SCT_DUR', '9', 'A', 'DIST.CAMACHO', ' 993+252', 'si', '', '2018-10-01'),
(11, 'SCT_DUR', '10', 'A', 'DIST.CAMACHO', ' 998+233', 'si', '', '2018-10-01'),
(12, 'SCT_DUR', '11', 'A', 'DIST.CAMACHO', ' 1095+702', 'si', '', '2018-10-01'),
(13, 'SCT_DUR', '12', 'A', 'DIST.CAMACHO', ' 1104+800', 'si', '', '2018-10-01'),
(14, 'SCT_DUR', '13', 'A', 'DIST.CAMACHO', ' 1106+027', 'si', '', '2018-10-01'),
(15, 'SCT_DUR', '14', 'A', 'DIST.CAMACHO', ' 1110+151', 'si', '', '2018-10-01'),
(16, 'SCT_DUR', '15', 'A', 'DIST.CAMACHO', ' 1112+150', 'si', '', '2018-10-01'),
(17, 'SCT_DUR', '16', 'A', 'DIST.CAMACHO', ' 1114+361', 'si', '', '2018-10-01'),
(18, 'SCT_DUR', '17', 'A', 'DIST.CAMACHO', ' 1115+677', 'si', '', '2018-10-01'),
(19, 'SCT_DUR', '18', 'A', 'DIST.CAMACHO', ' 1118+730', 'si', '', '2018-10-01'),
(20, 'SCT_DUR', '19', 'A', 'P. EST. G.P.', ' 1138+545', 'si', '', '2018-10-01'),
(21, 'SCT_DUR', '20', 'A', 'P. EST. G.P.', ' 1138+580', 'si', '', '2018-10-01'),
(22, 'SCT_DUR', '21', 'A', 'P. EST. G.P.', ' 1141+530', 'si', '', '2018-10-01'),
(23, 'SCT_DUR', '22', 'A', 'P. EST. G.P.', ' 1141+630', 'si', '', '2018-10-01'),
(24, 'SCT_DUR', '23', 'A', 'P. EST. G.P.', ' 1142+157', 'si', '', '2018-10-01'),
(25, 'SCT_DUR', '24', 'A', 'P. EST. G.P.', ' 1143+582', 'si', '', '2018-10-01'),
(26, 'SCT_DUR', '25', 'A', 'P. EST. G.P.', ' 1144+178', 'si', '', '2018-10-01'),
(27, 'SCT_DUR', '26', 'A', 'P. EST. G.P.', ' 1144+226', 'si', '', '2018-10-01'),
(28, 'SCT_DUR', '27', 'A', 'P. EST. G.P.', ' 1146+375', 'si', '', '2018-10-01'),
(29, 'SCT_DUR', '28', 'A', 'DIST.ESCALON', ' 1147+696', 'si', '', '2018-10-01'),
(30, 'SCT_DUR', '29', 'A', 'DIST.ESCALON', ' 1148+806', 'si', '', '2018-10-01'),
(31, 'SCT_DUR', '30', 'A', 'DIST.ESCALON', ' 1152+490', 'si', '', '2018-10-01'),
(32, 'SCT_DUR', '31', 'A', 'DIST.ESCALON', ' 1153+765', 'si', '', '2018-10-01'),
(33, 'SCT_DUR', '32', 'A', 'DIST.ESCALON', ' 1155+669', 'si', '', '2018-10-01'),
(34, 'SCT_DUR', '33', 'A', 'DIST.ESCALON', ' 1156+300', 'si', '', '2018-10-01'),
(35, 'SCT_DUR', '34', 'A', 'DIST.ESCALON', ' 1158+568', 'si', '', '2018-10-01'),
(36, 'SCT_DUR', '35', 'A', 'DIST.ESCALON', ' 1159+253', 'si', '', '2018-10-01'),
(37, 'SCT_DUR', '36', 'A', 'DIST.ESCALON', ' 1159+461', 'si', '', '2018-10-01'),
(38, 'SCT_DUR', '37', 'A', 'DIST.ESCALON', ' 1160+854', 'si', '', '2018-10-01'),
(39, 'SCT_DUR', '38', 'A', 'DIST.ESCALON', ' 1163+214', 'si', '', '2018-10-01'),
(40, 'SCT_DUR', '39', 'A', 'DIST.ESCALON', ' 1163+866', 'si', '', '2018-10-01'),
(41, 'SCT_DUR', '40', 'A', 'DIST.ESCALON', ' 1166+027', 'si', '', '2018-10-01'),
(42, 'SCT_DUR', '41', 'A', 'DIST.ESCALON', ' 1169+272', 'si', '', '2018-10-01'),
(43, 'SCT_DUR', '42', 'A', 'DIST.ESCALON', ' 1170+461', 'si', '', '2018-10-01'),
(44, 'SCT_DUR', '43', 'A', 'DIST.ESCALON', ' 1173+321', 'si', '', '2018-10-01'),
(45, 'SCT_DUR', '44', 'A', 'DIST.ESCALON', ' 1176+842', 'si', '', '2018-10-01'),
(46, 'SCT_DUR', '45', 'A', 'DIST.ESCALON', ' 1178+633', 'si', '', '2018-10-01'),
(47, 'SCT_DUR', '46', 'A', 'DIST.ESCALON', ' 1179+678', 'si', '', '2018-10-01'),
(48, 'SCT_DUR', '47', 'A', 'DIST.ESCALON', ' 1186+738', 'si', '', '2018-10-01'),
(49, 'SCT_DUR', '48', 'A', 'DIST.ESCALON', ' 1188+988', 'si', '', '2018-10-01'),
(50, 'SCT_DUR', '49', 'A', 'DIST.ESCALON', ' 1195+633', 'si', '', '2018-10-01'),
(51, 'SCT_DUR', '50', 'A', 'DIST.ESCALON', ' 1202+296', 'si', '', '2018-10-01'),
(52, 'SCT_DUR', '51', 'A', 'DIST.ESCALON', ' 1207+268', 'si', '', '2018-10-01'),
(53, 'SCT_DUR', '52', 'A', 'DIST.ESCALON', ' 1224+733', 'si', '', '2018-10-01'),
(54, 'SCT_DUR', '53', 'A', 'DIST.ESCALON', ' 1233+092', 'si', '', '2018-10-01'),
(55, 'SCT_DUR', '54', 'A', 'DIST.ESCALON', ' 1236+217', 'si', '', '2018-10-01'),
(56, 'SCT_DUR', '55', 'A', 'DIST.ESCALON', ' 1239+355', 'si', '', '2018-10-01'),
(57, 'SCT_DUR', '56', 'A', 'DIST.ESCALON', ' 1243+120', 'si', '', '2018-10-01'),
(58, 'SCT_DUR', '57', 'A', 'DIST.ESCALON', ' 1245+033', 'si', '', '2018-10-01'),
(59, 'SCT_DUR', '58', 'A', 'DIST.ESCALON', ' 1245+767', 'si', '', '2018-10-01'),
(60, 'SCT_DUR', '59', 'A', 'DIST.ESCALON', ' 1247+929', 'si', '', '2018-10-01'),
(61, 'SCT_DUR', '60', 'A', 'DIST.ESCALON', ' 1251+071', 'si', '', '2018-10-01'),
(62, 'SCT_DUR', '61', 'A', 'DIST.ESCALON', ' 1253+244', 'si', '', '2018-10-01'),
(63, 'SCT_DUR', '62', 'A', 'DIST.ESCALON', ' 1259+109', 'si', '', '2018-10-01'),
(64, 'SCT_DUR', '63', 'A', 'DIST.ESCALON', ' 1267+038', 'si', '', '2018-10-01'),
(65, 'SCT_DUR', '64', 'A', 'DIST.ESCALON', ' 1267+472', 'si', '', '2018-10-01'),
(66, 'SCT_DUR', '65', 'A', 'DIST.ESCALON', ' 1269+474', 'si', '', '2018-10-01'),
(67, 'SCT_DUR', '66', 'A', 'DIST.ESCALON', ' 1270+444', 'si', '', '2018-10-01'),
(68, 'SCT_DUR', '67', 'A', 'DIST.ESCALON', ' 1277+474', 'si', '', '2018-10-01'),
(69, 'SCT_DUR', '68', 'A', 'DIST.ESCALON', ' 1285+510', 'si', '', '2018-10-01'),
(70, 'SCT_DUR', '69', 'M', 'DIST.PAREDON', ' 871+100', 'si', '', '2018-10-01'),
(71, 'SCT_DUR', '70', 'M', 'DIST.PAREDON', ' 873+020', 'si', '', '2018-10-01'),
(72, 'SCT_DUR', '71', 'M', 'DIST.PAREDON', ' 873+217', 'si', '', '2018-10-01'),
(73, 'SCT_DUR', '72', 'M', 'DIST.PAREDON', ' 874+362', 'si', '', '2018-10-01'),
(74, 'SCT_DUR', '73', 'M', 'DIST.PAREDON', ' 875+665', 'si', '', '2018-10-01'),
(75, 'SCT_DUR', '74', 'M', 'DIST.PAREDON', ' 877+105', 'si', '', '2018-10-01'),
(76, 'SCT_DUR', '75', 'M', 'DIST.PAREDON', ' 878+655', 'si', '', '2018-10-01'),
(77, 'SCT_DUR', '76', 'M', 'DIST.PAREDON', ' 879+255', 'si', '', '2018-10-01'),
(78, 'SCT_DUR', '77', 'M', 'DIST.PAREDON', ' 882+332', 'si', '', '2018-10-01'),
(79, 'SCT_DUR', '78', 'M', 'DIST.PAREDON', ' 883+770', 'si', '', '2018-10-01'),
(80, 'SCT_DUR', '79', 'M', 'DIST.PAREDON', ' 885+342', 'si', '', '2018-10-01'),
(81, 'SCT_DUR', '80', 'M', 'DIST.PAREDON', ' 886+780', 'si', '', '2018-10-01'),
(82, 'SCT_DUR', '81', 'M', 'DIST.PAREDON', ' 887+997', 'si', '', '2018-10-01'),
(83, 'SCT_DUR', '82', 'M', 'DIST.PAREDON', ' 888+823', 'si', '', '2018-10-01'),
(84, 'SCT_DUR', '83', 'M', 'DIST.PAREDON', ' 890+049', 'si', '', '2018-10-01'),
(85, 'SCT_DUR', '84', 'M', 'DIST.PAREDON', ' 890+721', 'si', '', '2018-10-01'),
(86, 'SCT_DUR', '85', 'M', 'DIST.PAREDON', ' 892+150', 'si', '', '2018-10-01'),
(87, 'SCT_DUR', '86', 'M', 'DIST.PAREDON', ' 892+990', 'si', '', '2018-10-01'),
(88, 'SCT_DUR', '87', 'M', 'DIST.PAREDON', ' 893+694', 'si', '', '2018-10-01'),
(89, 'SCT_DUR', '88', 'M', 'DIST.PAREDON', ' 893+907', 'si', '', '2018-10-01'),
(90, 'SCT_DUR', '89', 'M', 'DIST.PAREDON', ' 894+067', 'si', '', '2018-10-01'),
(91, 'SCT_DUR', '90', 'M', 'DIST.PAREDON', ' 894+100', 'si', '', '2018-10-01'),
(92, 'SCT_DUR', '91', 'M', 'DIST.PAREDON', ' 894+165', 'si', '', '2018-10-01'),
(93, 'SCT_DUR', '92', 'M', 'DIST.PAREDON', ' 894+194', 'si', '', '2018-10-01'),
(94, 'SCT_DUR', '93', 'M', 'DIST.PAREDON', ' 894+986', 'si', '', '2018-10-01'),
(95, 'SCT_DUR', '94', 'M', 'DIST.PAREDON', ' 895+921', 'si', '', '2018-10-01'),
(96, 'SCT_DUR', '95', 'M', 'DIST.PAREDON', ' 895+573', 'si', '', '2018-10-01'),
(97, 'SCT_DUR', '96', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 7+468', 'si', '', '2018-08-01'),
(98, 'SCT_DUR', '97', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 8+011', 'si', '', '2018-08-01'),
(99, 'SCT_DUR', '98', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 9+200', 'si', '', '2018-08-01'),
(100, 'SCT_DUR', '99', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 9+408', 'si', '', '2018-08-01'),
(101, 'SCT_DUR', '100', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 9+800', 'si', '', '2018-08-01'),
(102, 'SCT_DUR', '101', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 10+630', 'si', '', '2018-08-01'),
(103, 'SCT_DUR', '102', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 11+093', 'si', '', '2018-08-01'),
(104, 'SCT_DUR', '103', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 11+415', 'si', '', '2018-08-01'),
(105, 'SCT_DUR', '104', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 12+034', 'si', '', '2018-08-01'),
(106, 'SCT_DUR', '105', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 12+066', 'si', '', '2018-08-01'),
(107, 'SCT_DUR', '106', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 17+005', 'si', '', '2018-08-01'),
(108, 'SCT_DUR', '107', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 17+700', 'si', '', '2018-08-01'),
(109, 'SCT_DUR', '108', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 21+040', 'si', '', '2018-08-01'),
(110, 'SCT_DUR', '109', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 35+260', 'si', '', '2018-08-01'),
(111, 'SCT_DUR', '110', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 37+760', 'si', '', '2018-08-01'),
(112, 'SCT_DUR', '111', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 41+700', 'si', '', '2018-08-01'),
(113, 'SCT_DUR', '112', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 46+830', 'si', '', '2018-08-01'),
(114, 'SCT_DUR', '113', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 50+100', 'si', '', '2018-08-01'),
(115, 'SCT_DUR', '114', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 51+500', 'si', '', '2018-08-01'),
(116, 'SCT_DUR', '115', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 54+108', 'si', '', '2018-08-01'),
(117, 'SCT_DUR', '116', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 55+128', 'si', '', '2018-08-01'),
(118, 'SCT_DUR', '117', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 55+800', 'si', '', '2018-08-01'),
(119, 'SCT_DUR', '118', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 61+260', 'si', '', '2018-08-01'),
(120, 'SCT_DUR', '119', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 63+730', 'si', '', '2018-08-01'),
(121, 'SCT_DUR', '120', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 65+480', 'si', '', '2018-08-01'),
(122, 'SCT_DUR', '121', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 67+990', 'si', '', '2018-08-01'),
(123, 'SCT_DUR', '122', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 74+050', 'si', '', '2018-08-01'),
(124, 'SCT_DUR', '123', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 75+300', 'si', '', '2018-08-01'),
(125, 'SCT_DUR', '124', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 75+445', 'si', '', '2018-08-01'),
(126, 'SCT_DUR', '125', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 76+160', 'si', '', '2018-08-01'),
(127, 'SCT_DUR', '126', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 77+020', 'si', '', '2018-08-01'),
(128, 'SCT_DUR', '127', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 80+156', 'si', '', '2018-08-01'),
(129, 'SCT_DUR', '128', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 82+181', 'si', '', '2018-08-01'),
(130, 'SCT_DUR', '129', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 87+653', 'si', '', '2018-08-01'),
(131, 'SCT_DUR', '130', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 88+600', 'si', '', '2018-08-01'),
(132, 'SCT_DUR', '131', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 97+474', 'si', '', '2018-08-01'),
(133, 'SCT_DUR', '132', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 100+860', 'si', '', '2018-08-01'),
(134, 'SCT_DUR', '133', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 105+300', 'si', '', '2018-08-01'),
(135, 'SCT_DUR', '134', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 108+010', 'si', '', '2018-08-01'),
(136, 'SCT_DUR', '135', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 103+995', 'si', '', '2018-08-01'),
(137, 'SCT_DUR', '136', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 123+200', 'si', '', '2018-08-01'),
(138, 'SCT_DUR', '137', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 123+465', 'si', '', '2018-08-01'),
(139, 'SCT_DUR', '138', 'DA', 'SUB DIV. 4 DGO. LCD.', '124+625', 'si', '', '2018-08-01'),
(140, 'SCT_DUR', '139', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 147+960', 'si', '', '2018-08-01'),
(141, 'SCT_DUR', '140', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 149+250', 'si', '', '2018-08-01'),
(142, 'SCT_DUR', '141', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 151+660', 'si', '', '2018-08-01'),
(143, 'SCT_DUR', '142', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 156+170', 'si', '', '2018-08-01'),
(144, 'SCT_DUR', '143', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 163+130', 'si', '', '2018-08-01'),
(145, 'SCT_DUR', '144', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 168+070', 'si', '', '2018-08-01'),
(146, 'SCT_DUR', '145', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 173+596', 'si', '', '2018-08-01'),
(147, 'SCT_DUR', '146', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 175+763', 'si', '', '2018-08-01'),
(148, 'SCT_DUR', '147', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 181+000', 'si', '', '2018-08-01'),
(149, 'SCT_DUR', '148', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 188+329', 'si', '', '2018-08-01'),
(150, 'SCT_DUR', '149', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 199+250', 'si', '', '2018-08-01'),
(151, 'SCT_DUR', '150', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 205+865', 'si', '', '2018-08-01'),
(152, 'SCT_DUR', '151', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 208+361', 'si', '', '2018-08-01'),
(153, 'SCT_DUR', '152', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 215+890', 'si', '', '2018-08-01'),
(154, 'SCT_DUR', '153', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 227+242', 'si', '', '2018-08-01'),
(155, 'SCT_DUR', '154', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 228+730', 'si', '', '2018-08-01'),
(156, 'SCT_DUR', '155', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 231+717', 'si', '', '2018-08-01'),
(157, 'SCT_DUR', '156', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 234+030', 'si', '', '2018-08-01'),
(158, 'SCT_DUR', '157', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 234+840', 'si', '', '2018-08-01'),
(159, 'SCT_DUR', '158', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 236+790', 'si', '', '2018-08-01'),
(160, 'SCT_DUR', '159', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 237+750', 'si', '', '2018-08-01'),
(161, 'SCT_DUR', '160', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 238+490', 'si', '', '2018-08-01'),
(162, 'SCT_DUR', '161', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 239+070', 'si', '', '2018-08-01'),
(163, 'SCT_DUR', '162', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 239+970', 'si', '', '2018-08-01'),
(164, 'SCT_DUR', '163', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 240+780', 'si', '', '2018-08-01'),
(165, 'SCT_DUR', '164', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 243+228', 'si', '', '2018-08-01'),
(166, 'SCT_DUR', '165', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 243+850', 'si', '', '2018-08-01'),
(167, 'SCT_DUR', '166', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 244+750', 'si', '', '2018-08-01'),
(168, 'SCT_DUR', '167', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 245+500', 'si', '', '2018-08-01'),
(169, 'SCT_DUR', '168', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 246+375', 'si', '', '2018-08-01'),
(170, 'SCT_DUR', '169', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 248+210', 'si', '', '2018-08-01'),
(171, 'SCT_DUR', '170', 'DA', 'SUB DIV. 4 DGO. LCD.', ' 249+740', 'si', '', '2018-08-01'),
(172, 'SCT_DUR', '171', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 3+360', 'si', '', '2018-08-01'),
(173, 'SCT_DUR', '172', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 4+090', 'si', '', '2018-08-01'),
(174, 'SCT_DUR', '173', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 6+875', 'si', '', '2018-08-01'),
(175, 'SCT_DUR', '174', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 7+750', 'si', '', '2018-08-01'),
(176, 'SCT_DUR', '175', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 8+625', 'si', '', '2018-08-01'),
(177, 'SCT_DUR', '176', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 9+657', 'si', '', '2018-08-01'),
(178, 'SCT_DUR', '177', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 10+709', 'si', '', '2018-08-01'),
(179, 'SCT_DUR', '178', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 13+706', 'si', '', '2018-08-01'),
(180, 'SCT_DUR', '179', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 14+187', 'si', '', '2018-08-01'),
(181, 'SCT_DUR', '180', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 15+800', 'si', '', '2018-08-01'),
(182, 'SCT_DUR', '181', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 16+937', 'si', '', '2018-08-01'),
(183, 'SCT_DUR', '182', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 18+187', 'si', '', '2018-08-01'),
(184, 'SCT_DUR', '183', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 20+985', 'si', '', '2018-08-01'),
(185, 'SCT_DUR', '184', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 22+937', 'si', '', '2018-08-01'),
(186, 'SCT_DUR', '185', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 24+625', 'si', '', '2018-08-01'),
(187, 'SCT_DUR', '186', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 26+312', 'si', '', '2018-08-01'),
(188, 'SCT_DUR', '187', 'DC', 'SUB DIV. 5 DGO. LCD.', '33+755', 'si', '', '2018-08-01'),
(189, 'SCT_DUR', '188', 'DC', 'SUB DIV. 5 DGO. LCD.', '34+312', 'si', '', '2018-08-01'),
(190, 'SCT_DUR', '189', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 39+687', 'si', '', '2018-08-01'),
(191, 'SCT_DUR', '190', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 42+875', 'si', '', '2018-08-01'),
(192, 'SCT_DUR', '191', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 43+400', 'si', '', '2018-08-01'),
(193, 'SCT_DUR', '192', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 44+250', 'si', '', '2018-08-01'),
(194, 'SCT_DUR', '193', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 47+250', 'si', '', '2018-08-01'),
(195, 'SCT_DUR', '194', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 50+687', 'si', '', '2018-08-01'),
(196, 'SCT_DUR', '195', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 52+050', 'si', '', '2018-08-01'),
(197, 'SCT_DUR', '196', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 58+750', 'si', '', '2018-08-01'),
(198, 'SCT_DUR', '197', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 60+735', 'si', '', '2018-08-01'),
(199, 'SCT_DUR', '198', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 61+470', 'si', '', '2018-08-01'),
(200, 'SCT_DUR', '199', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 66+937', 'si', '', '2018-08-01'),
(201, 'SCT_DUR', '200', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 70+060', 'si', '', '2018-08-01'),
(202, 'SCT_DUR', '201', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 77+250', 'si', '', '2018-08-01'),
(203, 'SCT_DUR', '202', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 79+312', 'si', '', '2018-08-01'),
(204, 'SCT_DUR', '203', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 80+312', 'si', '', '2018-08-01'),
(205, 'SCT_DUR', '204', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 83+565', 'si', '', '2018-08-01'),
(206, 'SCT_DUR', '205', 'DC', 'SUB DIV. 5 DGO. LCD.', '87+120', 'si', '', '2018-08-01'),
(207, 'SCT_DUR', '206', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 91+400', 'si', '', '2018-08-01'),
(208, 'SCT_DUR', '207', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 91+700', 'si', '', '2018-08-01'),
(209, 'SCT_DUR', '208', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 97+125', 'si', '', '2018-08-01'),
(210, 'SCT_DUR', '209', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 97+937', 'si', '', '2018-08-01'),
(211, 'SCT_DUR', '210', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 100+180', 'si', '', '2018-08-01'),
(212, 'SCT_DUR', '211', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 100+875', 'si', '', '2018-08-01'),
(213, 'SCT_DUR', '212', 'DC', 'SUB DIV. 5 DGO. LCD.', ' 101+060', 'si', '', '2018-08-01'),
(214, 'SCT_DUR', '213', 'DB', 'SUB DIV. 10  DGO. LCD.', ' 1+350', 'si', '', '2018-11-01'),
(215, 'SCT_DUR', '214', 'DB', 'SUB DIV. 10  DGO. LCD.', ' 2+650', 'si', '', '2018-11-01'),
(216, 'SCT_DUR', '215', 'DB', 'SUB DIV. 10  DGO. LCD.', ' 3+970', 'si', '', '2018-11-01'),
(217, 'SCT_DUR', '216', 'DB', 'SUB DIV. 10  DGO. LCD.', ' 7+240', 'si', '', '2018-11-01'),
(218, 'SCT_DUR', '217', 'DB', 'SUB DIV. 10  DGO. LCD.', ' 7+900', 'si', '', '2018-11-01'),
(219, 'SCT_DUR', '218', 'DB', 'SUB DIV. 10  DGO. LCD.', ' 12+710', 'si', '', '2018-11-01'),
(220, 'SCT_DUR', '219', 'DB', 'SUB DIV. 10  DGO. LCD.', ' 15+800', 'si', '', '2018-11-01'),
(222, 'SCT_TAM', '1', 'B', 'CARTAS DE VIA', '1263+966', 'si', '', '0000-00-00'),
(223, 'SCT_TAM', '2', 'B', 'CARTA DE VIA', '1271+135', 'si', '', '0000-00-00'),
(224, 'SCT_TAM', '3', 'B', 'CARTA DE VIA', '1276+383', 'si', '', '0000-00-00'),
(225, 'SCT_TAM', '4', 'BJ', 'CARTA DE VIA', '5+733', 'si', '', '0000-00-00'),
(226, 'SCT_TAM', '5', 'BJ', 'AYTO. DE NUEVO LAREDO', '11+300', 'si', '', '0000-00-00'),
(227, 'SCT_TAM', '6', 'BJ', 'CARTA DE VIA', '14+098', 'si', '', '0000-00-00'),
(228, 'SCT_TAM', '7', 'BJ', 'AYTO. DE NUEVO LAREDO', '14+334', 'si', '', '0000-00-00'),
(229, 'SCT_TAM', '8', 'BJ', 'AYTO. DE NUEVO LAREDO', '14+449', 'si', '', '0000-00-00'),
(230, 'SCT_TAM', '9', 'MB', 'CARTA DE VIA', '1+700', 'si', '', '0000-00-00'),
(231, 'SCT_TAM', '10', 'MB', 'CARTA DE VIA', '3+300', 'si', '', '0000-00-00'),
(232, 'SCT_TAM', '11', 'MB', 'ING. JOSE GARCIA FANJON', '3+953', 'si', '', '0000-00-00'),
(233, 'SCT_TAM', '12', 'MB', 'CARTA DE VIA', '5+430', 'si', '', '0000-00-00'),
(234, 'SCT_TAM', '13', 'L', 'CARTA DE VIA', '664+580', 'si', '', '0000-00-00'),
(235, 'SCT_TAM', '14', 'L', 'CARTA DE VIA', '664+815', 'si', '', '0000-00-00'),
(236, 'SCT_TAM', '15', 'L', 'CARTA DE VIA', '665+430', 'si', '', '0000-00-00'),
(237, 'SCT_TAM', '16', 'L', 'CARTA DE VIA', '666+130', 'si', '', '0000-00-00'),
(238, 'SCT_TAM', '17', 'L', 'CARTA DE VIA', '666+670', 'si', '', '0000-00-00'),
(239, 'SCT_TAM', '18', 'L', 'CARTA DE VIA', '668+379', 'si', '', '0000-00-00'),
(240, 'SCT_TAM', '19', 'L', 'CARTA DE VIA', '669+210', 'si', '', '0000-00-00'),
(241, 'SCT_TAM', '20', 'L', 'CARTA DE VIA', '669+435', 'si', '', '0000-00-00'),
(242, 'SCT_TAM', '21', 'L', 'CARTA DE VIA', '669+565', 'si', '', '0000-00-00'),
(243, 'SCT_TAM', '22', 'L', 'CARTA DE VIA', '669+619', 'si', '', '0000-00-00'),
(244, 'SCT_TAM', '23', 'L', 'CARTA DE VIA', '669+860', 'si', '', '0000-00-00'),
(245, 'SCT_TAM', '24', 'L', 'CARTA DE VIA', '670+345', 'si', '', '0000-00-00'),
(246, 'SCT_TAM', '25', 'L', 'CARTA DE VIA', '670+657', 'si', '', '0000-00-00'),
(247, 'SCT_TAM', '26', 'L', 'CARTA DE VIA', '671+474', 'si', '', '0000-00-00'),
(248, 'SCT_TAM', '27', 'L', 'AYTO. TAMPICO', '671+740', 'si', '', '0000-00-00'),
(249, 'SCT_TAM', '28', 'L', 'CARTA DE VIA', '672+445', 'si', '', '0000-00-00'),
(250, 'SCT_TAM', '29', 'L', 'CARTA DE VIA', '672+900', 'si', '', '0000-00-00'),
(251, 'SCT_TAM', '30', 'L', 'CARTA DE VIA', '673+100', 'si', '', '0000-00-00'),
(252, 'SCT_TAM', '31', 'L', 'CARTA DE VIA', '675+293', 'si', '', '0000-00-00'),
(253, 'SCT_TAM', '32', 'L', 'CARTA DE VIA', '676+090', 'si', '', '0000-00-00'),
(254, 'SCT_TAM', '33', 'L', 'PEMEX-VENTAS', '677+252', 'si', '', '0000-00-00'),
(255, 'SCT_TAM', '34', 'F', 'CARTA DE VIA', '154+807', 'si', '', '0000-00-00'),
(256, 'SCT_TAM', '35', 'F', 'CARTA DE VIA', '156+840', 'si', '', '0000-00-00'),
(257, 'SCT_TAM', '36', 'F', 'CARTA DE VIA', '158+768', 'si', '', '0000-00-00'),
(258, 'SCT_TAM', '37', 'F', 'CARTA DE VIA', '161+763', 'si', '', '0000-00-00'),
(259, 'SCT_TAM', '38', 'F', 'CARTA DE VIA', '167+244', 'si', '', '0000-00-00'),
(260, 'SCT_TAM', '39', 'F', 'CARTA DE VIA', '170+128', 'si', '', '0000-00-00'),
(261, 'SCT_TAM', '40', 'F', 'CARTA DE VIA', '171+078', 'si', '', '0000-00-00'),
(262, 'SCT_TAM', '41', 'F', 'CARTA DE VIA', '173+025', 'si', '', '0000-00-00'),
(263, 'SCT_TAM', '42', 'F', 'CARTA DE VIA', '178+157', 'si', '', '0000-00-00'),
(264, 'SCT_TAM', '43', 'F', 'CARTA DE VIA', '179+463', 'si', '', '0000-00-00'),
(265, 'SCT_TAM', '44', 'F', 'CARTA DE VIA', '184+074', 'si', '', '0000-00-00'),
(266, 'SCT_TAM', '45', 'F', 'CARTA DE VIA', '185+418', 'si', '', '0000-00-00'),
(267, 'SCT_TAM', '46', 'F', 'CARTA DE VIA', '186+391', 'si', '', '0000-00-00'),
(268, 'SCT_TAM', '47', 'F', 'CARTA DE VIA', '187+756', 'si', '', '0000-00-00'),
(269, 'SCT_TAM', '48', 'F', 'CARTA DE VIA', '189+649', 'si', '', '0000-00-00'),
(270, 'SCT_TAM', '49', 'F', 'CARTA DE VIA', '190+730', 'si', '', '0000-00-00'),
(271, 'SCT_TAM', '50', 'F', 'CARTA DE VIA', '192+416', 'si', '', '0000-00-00'),
(272, 'SCT_TAM', '51', 'F', 'CARTA DE VIA', '193+980', 'si', '', '0000-00-00'),
(273, 'SCT_TAM', '52', 'F', 'CARTA DE VIA', '195+607', 'si', '', '0000-00-00'),
(274, 'SCT_TAM', '53', 'F', 'CARTA DE VIA', '197+393', 'si', '', '0000-00-00'),
(275, 'SCT_TAM', '54', 'F', 'CARTA DE VIA', '198+513', 'si', '', '0000-00-00'),
(276, 'SCT_TAM', '55', 'F', 'CARTA DE VIA', '198+906', 'si', '', '0000-00-00'),
(277, 'SCT_TAM', '56', 'F', 'CARTA DE VIA', '199+455', 'si', '', '0000-00-00'),
(278, 'SCT_TAM', '57', 'F', 'CARTA DE VIA', '199+851', 'si', '', '0000-00-00'),
(279, 'SCT_TAM', '58', 'F', 'CARTA DE VIA', '202+079', 'si', '', '0000-00-00'),
(280, 'SCT_TAM', '59', 'F', 'CARTA DE VIA', '203+164', 'si', '', '0000-00-00'),
(281, 'SCT_TAM', '60', 'F', 'CARTA DE VIA', '207+248', 'si', '', '0000-00-00'),
(282, 'SCT_TAM', '61', 'F', 'CARTA DE VIA', '207+763', 'si', '', '0000-00-00'),
(283, 'SCT_TAM', '62', 'F', 'CARTA DE VIA', '211+410', 'si', '', '0000-00-00'),
(284, 'SCT_TAM', '63', 'F', 'CARTA DE VIA', '211+851', 'si', '', '0000-00-00'),
(285, 'SCT_TAM', '64', 'F', 'CARTA DE VIA', '214+809', 'si', '', '0000-00-00'),
(286, 'SCT_TAM', '65', 'F', 'CARTA DE VIA', '220+170', 'si', '', '0000-00-00'),
(287, 'SCT_TAM', '66', 'F', 'CARTA DE VIA', '224+190', 'si', '', '0000-00-00'),
(288, 'SCT_TAM', '67', 'F', 'CARTA DE VIA', '225+960', 'si', '', '0000-00-00'),
(289, 'SCT_TAM', '68', 'F', 'CARTA DE VIA', '226+970', 'si', '', '0000-00-00'),
(290, 'SCT_TAM', '69', 'F', 'CARTA DE VIA', '230+248', 'si', '', '0000-00-00'),
(291, 'SCT_TAM', '70', 'F', 'CARTA DE VIA', '230+980', 'si', '', '0000-00-00'),
(292, 'SCT_TAM', '71', 'F', 'CARTA DE VIA', '232+020', 'si', '', '0000-00-00'),
(293, 'SCT_TAM', '72', 'F', 'CARTA DE VIA', '233+040', 'si', '', '0000-00-00'),
(294, 'SCT_TAM', '73', 'F', 'CARTA DE VIA', '234+240', 'si', '', '0000-00-00'),
(295, 'SCT_TAM', '74', 'F', 'CARTA DE VIA', '237+160', 'si', '', '0000-00-00'),
(296, 'SCT_TAM', '75', 'F', 'CARTA DE VIA', '238+150', 'si', '', '0000-00-00'),
(297, 'SCT_TAM', '76', 'F', 'CARTA DE VIA', '239+020', 'si', '', '0000-00-00'),
(298, 'SCT_TAM', '77', 'F', 'CARTA DE VIA', '241+300', 'si', '', '0000-00-00'),
(299, 'SCT_TAM', '78', 'F', 'CARTA DE VIA', '242+120', 'si', '', '0000-00-00'),
(300, 'SCT_TAM', '79', 'F', 'JUNTA MEJORAS REYNOSA', '242+200', 'si', '', '0000-00-00'),
(301, 'SCT_TAM', '80', 'F', 'CARTA DE VIA', '242+905', 'si', '', '0000-00-00'),
(302, 'SCT_TAM', '81', 'F', 'JUNTA MEJORAS REYNOSA', '243+180', 'si', '', '0000-00-00'),
(303, 'SCT_TAM', '82', 'F', 'CARTA DE VIA', '243+501', 'si', '', '0000-00-00'),
(304, 'SCT_TAM', '83', 'F', 'CARTA DE VIA', '243+868', 'si', '', '0000-00-00'),
(305, 'SCT_TAM', '84', 'F', 'CARTA DE VIA', '244+280', 'si', '', '0000-00-00'),
(306, 'SCT_TAM', '85', 'F', 'CARTA DE VIA', '247+530', 'si', '', '0000-00-00'),
(307, 'SCT_TAM', '86', 'F', 'CARTA DE VIA', '247+590', 'si', '', '0000-00-00'),
(308, 'SCT_TAM', '87', 'F', 'CARTA DE VIA', '249+000', 'si', '', '0000-00-00'),
(309, 'SCT_TAM', '88', 'F', 'CARTA DE VIA', '253+800', 'si', '', '0000-00-00'),
(310, 'SCT_TAM', '89', 'F', 'CARTA DE VIA', '256+740', 'si', '', '0000-00-00'),
(311, 'SCT_TAM', '90', 'F', 'CARTA DE VIA', '258+470', 'si', '', '0000-00-00'),
(312, 'SCT_TAM', '91', 'F', 'CARTA DE VIA', '263+170', 'si', '', '0000-00-00'),
(313, 'SCT_TAM', '92', 'F', 'CARTA DE VIA', '263+720', 'si', '', '0000-00-00'),
(314, 'SCT_TAM', '93', 'F', 'CARTA DE VIA', '264+300', 'si', '', '0000-00-00'),
(315, 'SCT_TAM', '94', 'F', 'CARTA DE VIA', '264+746', 'si', '', '0000-00-00'),
(316, 'SCT_TAM', '95', 'F', 'CARTA DE VIA', '265+300', 'si', '', '0000-00-00'),
(317, 'SCT_TAM', '96', 'F', 'CARTA DE VIA', '265+560', 'si', '', '0000-00-00'),
(318, 'SCT_TAM', '97', 'F', 'CARTA DE VIA', '265+730', 'si', '', '0000-00-00'),
(319, 'SCT_TAM', '98', 'F', 'CARTA DE VIA', '265+980', 'si', '', '0000-00-00'),
(320, 'SCT_TAM', '99', 'F', 'CARTA DE VIA', '266+240', 'si', '', '0000-00-00'),
(321, 'SCT_TAM', '100', 'F', 'CARTA DE VIA', '266+940', 'si', '', '0000-00-00'),
(322, 'SCT_TAM', '101', 'F', 'CARTA DE VIA', '268+150', 'si', '', '0000-00-00'),
(323, 'SCT_TAM', '102', 'F', 'CARTA DE VIA', '269+290', 'si', '', '0000-00-00'),
(324, 'SCT_TAM', '103', 'F', 'DURO BAG-1989', '270+131', 'si', '', '0000-00-00'),
(325, 'SCT_TAM', '104', 'F', 'CARTA DE VIA', '270+780', 'si', '', '0000-00-00'),
(326, 'SCT_TAM', '105', 'F', 'CARTA DE VIA', '271+910', 'si', '', '0000-00-00'),
(327, 'SCT_TAM', '106', 'F', 'CARTA DE VIA', '273+090', 'si', '', '0000-00-00'),
(328, 'SCT_TAM', '107', 'F', 'CARTA DE VIA', '274+280', 'si', '', '0000-00-00'),
(329, 'SCT_TAM', '108', 'F', 'CARTA DE VIA', '276+780', 'si', '', '0000-00-00'),
(330, 'SCT_TAM', '109', 'F', 'CARTA DE VIA', '278+270', 'si', '', '0000-00-00'),
(331, 'SCT_TAM', '110', 'F', 'CARTA DE VIA', '279+340', 'si', '', '0000-00-00'),
(332, 'SCT_TAM', '111', 'F', 'CARTA DE VIA', '279+825', 'si', '', '0000-00-00'),
(333, 'SCT_TAM', '112', 'F', 'CARTA DE VIA', '281+480', 'si', '', '0000-00-00'),
(334, 'SCT_TAM', '113', 'F', 'CARTA DE VIA', '283+000', 'si', '', '0000-00-00'),
(335, 'SCT_TAM', '114', 'F', 'CARTA DE VIA', '284+480', 'si', '', '0000-00-00'),
(336, 'SCT_TAM', '115', 'F', 'CARTA DE VIA', '286+220', 'si', '', '0000-00-00'),
(337, 'SCT_TAM', '116', 'F', 'CARTA DE VIA', '289+410', 'si', '', '0000-00-00'),
(338, 'SCT_TAM', '117', 'F', 'CARTA DE VIA', '291+510', 'si', '', '0000-00-00'),
(339, 'SCT_TAM', '118', 'F', 'CARTA DE VIA', '294+310', 'si', '', '0000-00-00'),
(340, 'SCT_TAM', '119', 'F', 'CARTA DE VIA', '295+100', 'si', '', '0000-00-00'),
(341, 'SCT_TAM', '120', 'F', 'CARTA DE VIA', '297+090', 'si', '', '0000-00-00'),
(342, 'SCT_TAM', '121', 'F', 'CARTA DE VIA', '297+680', 'si', '', '0000-00-00'),
(343, 'SCT_TAM', '122', 'F', 'CARTA DE VIA', '298+160', 'si', '', '0000-00-00'),
(344, 'SCT_TAM', '123', 'F', 'CARTA DE VIA', '299+090', 'si', '', '0000-00-00'),
(345, 'SCT_TAM', '124', 'F', 'CARTA DE VIA', '300+700', 'si', '', '0000-00-00'),
(346, 'SCT_TAM', '125', 'F', 'CARTA DE VIA', '303+090', 'si', '', '0000-00-00'),
(347, 'SCT_TAM', '126', 'F', 'CARTA DE VIA', '305+000', 'si', '', '0000-00-00'),
(348, 'SCT_TAM', '127', 'F', 'CARTA DE VIA', '307+090', 'si', '', '0000-00-00'),
(349, 'SCT_TAM', '128', 'F', 'CARTA DE VIA', '308+130', 'si', '', '0000-00-00'),
(350, 'SCT_TAM', '129', 'F', 'CARTA DE VIA', '309+940', 'si', '', '0000-00-00'),
(351, 'SCT_TAM', '130', 'F', 'CARTA DE VIA', '309+980', 'si', '', '0000-00-00'),
(352, 'SCT_TAM', '131', 'F', 'CARTA DE VIA', '311+120', '', '', '0000-00-00'),
(353, 'SCT_TAM', '132', 'F', 'CARTA DE VIA', '313+906', 'si', '', '0000-00-00'),
(354, 'SCT_TAM', '133', 'F', 'CARTA DE VIA', '315+180', 'si', '', '0000-00-00'),
(355, 'SCT_TAM', '134', 'F', 'CARTA DE VIA', '315+670', 'si', '', '0000-00-00'),
(356, 'SCT_TAM', '135', 'F', 'CARTA DE VIA', '316+790', 'si', '', '0000-00-00'),
(357, 'SCT_TAM', '136', 'F', 'CARTA DE VIA', '317+160', 'si', '', '0000-00-00'),
(358, 'SCT_TAM', '137', 'F', 'CARTA DE VIA', '318+070', 'si', '', '0000-00-00'),
(359, 'SCT_TAM', '138', 'F', 'CARTA DE VIA', '318+970', 'si', '', '0000-00-00'),
(360, 'SCT_TAM', '139', 'F', 'CARTA DE VIA', '320+210', 'si', '', '0000-00-00'),
(361, 'SCT_TAM', '140', 'F', 'CARTA DE VIA', '323+560', 'si', '', '0000-00-00'),
(362, 'SCT_TAM', '141', 'F', 'CARTA DE VIA', '323+970', 'si', '', '0000-00-00'),
(363, 'SCT_TAM', '142', 'F', 'FINSA IND.-1989', '325+420', 'si', '', '0000-00-00'),
(364, 'SCT_TAM', '143', 'F', 'FRACC.IND.-1983', '325+690', 'si', '', '0000-00-00'),
(365, 'SCT_TAM', '144', 'F', 'CARTA DE VIA', '327+500', 'si', '', '0000-00-00'),
(366, 'SCT_TAM', '145', 'M', 'CARTA DE VIA', '4+298', 'si', '', '0000-00-00'),
(367, 'SCT_TAM', '146', 'M', 'CARTA DE VIA', '4+514', 'si', '', '0000-00-00'),
(368, 'SCT_TAM', '147', 'M', 'CARTA DE VIA', '5+094', 'si', '', '0000-00-00'),
(369, 'SCT_TAM', '148', 'M', 'CARTA DE VIA', '5+200', 'si', '', '0000-00-00'),
(370, 'SCT_TAM', '149', 'M', 'CARTA DE VIA', '5+310', 'si', '', '0000-00-00'),
(371, 'SCT_TAM', '150', 'M', 'CARTA DE VIA', '5+612', 'si', '', '0000-00-00'),
(372, 'SCT_TAM', '151', 'M', 'CARTA DE VIA', '5+695', 'si', '', '0000-00-00'),
(373, 'SCT_TAM', '152', 'M', 'CARTA DE VIA', '5+718', 'si', '', '0000-00-00'),
(374, 'SCT_TAM', '153', 'M', 'CARTA DE VIA', '5+790', 'si', '', '0000-00-00'),
(375, 'SCT_TAM', '154', 'M', 'CARTA DE VIA', '6+365', 'si', '', '0000-00-00'),
(376, 'SCT_TAM', '155', 'M', 'CARTA DE VIA', '6+723', 'si', '', '0000-00-00'),
(377, 'SCT_TAM', '156', 'M', 'CARTA DE VIA', '6+942', 'si', '', '0000-00-00'),
(378, 'SCT_TAM', '157', 'M', 'CARTAS DE VIA', '7+345', 'si', '', '0000-00-00'),
(379, 'SCT_TAM', '158', 'M', 'CARTA DE VIA', '8+128', 'si', '', '0000-00-00'),
(380, 'SCT_TAM', '159', 'M', 'AYTO.CD.MADERO-2006-CV', '8+713', 'si', '', '0000-00-00'),
(381, 'SCT_TAM', '160', 'M', 'AYTO.CD.MADERO-2006-CV', '8+746', 'si', '', '0000-00-00'),
(382, 'SCT_TAM', '161', 'M', 'AYTO.CD.MADERO-2005', '9+400', 'si', '', '0000-00-00'),
(383, 'SCT_TAM', '162', 'M', 'CARTA DE VIA', '9+825', 'si', '', '0000-00-00'),
(384, 'SCT_TAM', '163', 'M', 'CARTA DE VIA', '10+217', 'si', '', '0000-00-00'),
(385, 'SCT_TAM', '164', 'M', 'CARTA DE VIA', '10+836', 'si', '', '0000-00-00'),
(386, 'SCT_TAM', '165', 'M', 'CARTA DE VIA', '11+650', 'si', '', '0000-00-00'),
(387, 'SCT_TAM', '166', 'M', 'CARTA DE VIA', '12+324', 'si', '', '0000-00-00'),
(388, 'SCT_TAM', '167', 'M', 'CARTA DE VIA', '13+570', 'si', '', '0000-00-00'),
(389, 'SCT_TAM', '168', 'M', 'CARTA DE VIA', '15+312', 'si', '', '0000-00-00'),
(390, 'SCT_TAM', '169', 'M', 'AYTO.ALTAMIRA1995-CV', '16+555', 'si', '', '0000-00-00'),
(391, 'SCT_TAM', '170', 'M', 'CARTA DE VIA', '16+888', 'si', '', '0000-00-00'),
(392, 'SCT_TAM', '171', 'M', 'CARTA DE VIA', '17+607', 'si', '', '0000-00-00'),
(393, 'SCT_TAM', '172', 'M', 'CARTA DE VIA', '18+174', 'si', '', '0000-00-00'),
(394, 'SCT_TAM', '173', 'M', 'CARTA DE VIA', '18+194', 'si', '', '0000-00-00'),
(395, 'SCT_TAM', '174', 'M', 'CARTA DE VIA', '18+765', 'si', '', '0000-00-00'),
(396, 'SCT_TAM', '175', 'M', 'CARTA DE VIA', '19+425', 'si', '', '0000-00-00'),
(397, 'SCT_TAM', '176', 'M', 'ENERTEK-CV', '19+910', 'si', '', '0000-00-00'),
(398, 'SCT_TAM', '177', 'M', 'CARTA DE VIA', '20+424', 'si', '', '0000-00-00'),
(399, 'SCT_TAM', '178', 'M', 'CARTA DE VIA', '22+290', 'si', '', '0000-00-00'),
(400, 'SCT_TAM', '179', 'M', 'CARTA DE VIA', '22+422', 'si', '', '0000-00-00'),
(401, 'SCT_TAM', '180', 'M', 'MERCURIO-1995-CV', '22+500', 'si', '', '0000-00-00'),
(402, 'SCT_TAM', '181', 'M', 'AMPL.AYTO.ALT.2015', '22+659', 'si', '', '0000-00-00'),
(403, 'SCT_TAM', '182', 'M', 'AYTO.ALTAMIRA2015-CV', '24+252', 'si', '', '0000-00-00'),
(404, 'SCT_TAM', '183', 'M', 'CARTA DE VIA', '24+900', 'si', '', '0000-00-00'),
(405, 'SCT_TAM', '184', 'M', 'CARTA DE VIA', '25+262', 'si', '', '0000-00-00'),
(406, 'SCT_TAM', '185', 'M', 'CARTA DE VIA', '25+272', 'si', '', '0000-00-00'),
(407, 'SCT_TAM', '186', 'M', 'CARTA DE VIA', '25+732', 'si', '', '0000-00-00'),
(408, 'SCT_TAM', '187', 'M', 'AYTO.ALTAM-CV', '26+125', 'si', '', '0000-00-00'),
(409, 'SCT_TAM', '188', 'M', 'CARTA DE VIA', '28+482', 'si', '', '0000-00-00'),
(410, 'SCT_TAM', '189', 'M', 'CARTA DE VIA', '31+203', 'si', '', '0000-00-00'),
(411, 'SCT_TAM', '190', 'M', 'CARTA DE VIA', '34+082', 'si', '', '0000-00-00'),
(412, 'SCT_TAM', '191', 'M', 'CARTA DE VIA', '35+230', 'si', '', '0000-00-00'),
(413, 'SCT_TAM', '192', 'M', 'CARTA DE VIA', '39+510', 'si', '', '0000-00-00'),
(414, 'SCT_TAM', '193', 'M', 'CARTA DE VIA', '40+346', 'si', '', '0000-00-00'),
(415, 'SCT_TAM', '194', 'M', 'CARTA DE VIA', '45+025', 'si', '', '0000-00-00'),
(416, 'SCT_TAM', '195', 'M', 'CARTA DE VIA', '47+235', 'si', '', '0000-00-00'),
(417, 'SCT_TAM', '196', 'M', 'CARTA DE VIA', '50+784', 'si', '', '0000-00-00'),
(418, 'SCT_TAM', '197', 'M', 'CARTA DE VIA', '53+721', 'si', '', '0000-00-00'),
(419, 'SCT_TAM', '198', 'M', 'CARTA DE VIA', '54+258', 'si', '', '0000-00-00'),
(420, 'SCT_TAM', '199', 'M', 'CARTA DE VIA', '57+976', 'si', '', '0000-00-00'),
(421, 'SCT_TAM', '200', 'M', 'CARTA DE VIA', '58+730', 'si', '', '0000-00-00'),
(422, 'SCT_TAM', '201', 'M', 'CARTA DE VIA', '61+064', 'si', '', '0000-00-00'),
(423, 'SCT_TAM', '202', 'M', 'ARTURO GZA-1965-CV', '65+328', 'si', '', '0000-00-00'),
(424, 'SCT_TAM', '203', 'M', 'ALFON.RAMOS1988-CV', '67+384', 'si', '', '0000-00-00'),
(425, 'SCT_TAM', '204', 'M', 'MORENA GZA-1979-CV', '69+930', 'si', '', '0000-00-00'),
(426, 'SCT_TAM', '205', 'M', 'MORENA GZA-1979-CV', '70+801', 'si', '', '0000-00-00'),
(427, 'SCT_TAM', '206', 'M', 'MORENA GZA-1979-CV', '73+190', 'si', '', '0000-00-00'),
(428, 'SCT_TAM', '207', 'M', 'RODOL.CASTA?-1963-CV', '79+374', 'si', '', '0000-00-00'),
(429, 'SCT_TAM', '208', 'M', 'CARTA DE VIA', '80+728', 'si', '', '0000-00-00'),
(430, 'SCT_TAM', '209', 'M', 'CARTA DE VIA', '89+810', 'si', '', '0000-00-00'),
(431, 'SCT_TAM', '210', 'M', 'CARTA DE VIA', '96+774', 'si', '', '0000-00-00'),
(432, 'SCT_TAM', '211', 'M', 'CARRET.FED.SCT-CV', '99+279', 'si', '', '0000-00-00'),
(433, 'SCT_TAM', '212', 'M', 'CARTA DE VIA', '103+326', 'si', '', '0000-00-00'),
(434, 'SCT_TAM', '213', 'M', 'GUILLER.GZLEZ-1965-CV', '110+076', 'si', '', '0000-00-00'),
(435, 'SCT_TAM', '214', 'M', 'AUGUSTO RIVE.1977-CV', '113+430', 'si', '', '0000-00-00'),
(436, 'SCT_TAM', '215', 'M', 'CARTA DE VIA', '117+247', 'si', '', '0000-00-00'),
(437, 'SCT_TAM', '216', 'M', 'JOSE ANG. ZOZOYA-2000', '123+291', 'si', '', '0000-00-00'),
(438, 'SCT_TAM', '217', 'M', 'HUMBERT. CERV.1980-CV', '131+989', 'si', '', '0000-00-00'),
(439, 'SCT_TAM', '218', 'M', 'EJIDO QUINTERO-1981-CV', '137+139', 'si', '', '0000-00-00'),
(440, 'SCT_TAM', '219', 'M', 'GOB.EDO.TAMPS-1998', '139+534', 'si', '', '0000-00-00'),
(441, 'SCT_TAM', '220', 'M', 'CARTA DE VIA', '140+208', 'si', '', '0000-00-00'),
(442, 'SCT_TAM', '221', 'M', 'RAUL PEREZ-1980-CV', '151+671', 'si', '', '0000-00-00'),
(443, 'SCT_TAM', '222', 'M', 'JOSE RDG.1979-CV', '152+432', 'si', '', '0000-00-00'),
(444, 'SCT_TAM', '223', 'M', 'CARTA DE VIA', '156+967', 'si', '', '0000-00-00'),
(445, 'SCT_TAM', '224', 'M', 'ROXANA ALVAREZ-1997', '169+795', 'si', '', '0000-00-00'),
(446, 'SCT_TAM', '225', 'M', 'LUIS LAURO-1979-CV', '175+654', 'si', '', '0000-00-00'),
(447, 'SCT_TAM', '226', 'M', 'CARTA DE VIA', '185+090', 'si', '', '0000-00-00'),
(448, 'SCT_TAM', '227', 'M', 'TRES MESAS-2016', '185+562', 'si', '', '0000-00-00'),
(449, 'SCT_TAM', '228', 'M', 'RODOL.HIGUERA-1981-CV', '194+757', 'si', '', '0000-00-00'),
(450, 'SCT_TAM', '229', 'M', 'EJIDO ERAC.BERNAL1992', '196+990', 'si', '', '0000-00-00'),
(451, 'SCT_TAM', '230', 'M', 'CARTA DE VIA', '199+927', 'si', '', '0000-00-00'),
(452, 'SCT_TAM', '231', 'M', 'CARTA DE VIA', '206+335', 'si', '', '0000-00-00'),
(453, 'SCT_TAM', '232', 'M', 'CARTA DE VIA', '214+770', 'si', '', '0000-00-00'),
(454, 'SCT_TAM', '233', 'M', 'BEATRIZ GARCIA1986-CV', '217+707', 'si', '', '0000-00-00'),
(455, 'SCT_TAM', '234', 'M', 'JUNTA CAMINO-1984-CV', '225+681', 'si', '', '0000-00-00'),
(456, 'SCT_TAM', '235', 'M', 'CARTAS DE VIA', '227+637', 'si', '', '0000-00-00'),
(457, 'SCT_TAM', '236', 'M', 'CARTA DE VIA', '230+707', 'si', '', '0000-00-00'),
(458, 'SCT_TAM', '237', 'M', 'RAYMUN. WONG-1994-CV', '231+340', 'si', '', '0000-00-00'),
(459, 'SCT_TAM', '238', 'M', 'CARTA DE VIA', '232+062', 'si', '', '0000-00-00'),
(460, 'SCT_TAM', '239', 'M', 'AYTO.CD.VICTORIA.-2002', '232+888', 'si', '', '0000-00-00'),
(461, 'SCT_TAM', '240', 'M', 'CARTA DE VIA', '233+352', 'si', '', '0000-00-00'),
(462, 'SCT_TAM', '241', 'M', 'AYTO.CD.VICTORIA-CV', '234+500', 'si', '', '0000-00-00'),
(463, 'SCT_TAM', '242', 'M', 'AYTO.CD.VICTORIA-CV', '234+952', 'si', '', '0000-00-00'),
(464, 'SCT_TAM', '243', 'M', 'AYTO.VICTORIA-1990-CV', '235+308', 'si', '', '0000-00-00'),
(465, 'SCT_TAM', '244', 'M', 'CARTA DE VIA', '235+922', 'si', '', '0000-00-00'),
(466, 'SCT_TAM', '245', 'M', 'AYTO.VICTORIA-1997-CV', '237+930', 'si', '', '0000-00-00'),
(467, 'SCT_TAM', '246', 'M', 'JUNTA CAMINO-1984-CV', '238+780', 'si', '', '0000-00-00'),
(468, 'SCT_TAM', '247', 'M', 'CARTA DE VIA', '238+803', 'si', '', '0000-00-00'),
(469, 'SCT_TAM', '248', 'M', 'CARTA DE VIA', '240+552', 'si', '', '0000-00-00'),
(470, 'SCT_TAM', '249', 'M', 'CARTA DE VIA', '241+410', 'si', '', '0000-00-00'),
(471, 'SCT_TAM', '250', 'M', 'CARTA DE VIA', '242+260', 'si', '', '0000-00-00'),
(472, 'SCT_TAM', '251', 'M', 'CARTA DE VIA', '246+635', 'si', '', '0000-00-00'),
(473, 'SCT_TAM', '252', 'M', 'CARTA DE VIA', '248+183', 'si', '', '0000-00-00'),
(474, 'SCT_TAM', '253', 'M', 'CARTA DE VIA', '251+433', 'si', '', '0000-00-00'),
(475, 'SCT_TAM', '254', 'M', 'CARTA DE VIA', '252+774', 'si', '', '0000-00-00'),
(476, 'SCT_TAM', '255', 'M', 'CARTA DE VIA', '254+253', 'si', '', '0000-00-00'),
(477, 'SCT_TAM', '256', 'M', 'CARTA DE VIA', '256+443', 'si', '', '0000-00-00'),
(478, 'SCT_TAM', '257', 'M', 'CARTA DE VIA', '258+340', 'si', '', '0000-00-00'),
(479, 'SCT_TAM', '258', 'M', 'CARTA DE VIA', '261+098', 'si', '', '0000-00-00'),
(480, 'SCT_TAM', '259', 'M', 'CARTA DE VIA', '262+060', 'si', '', '0000-00-00'),
(481, 'SCT_TAM', '260', 'M', 'EJIDO BALCON.1991-CV', '265+441', 'si', '', '0000-00-00'),
(482, 'SCT_TAM', '261', 'M', 'JUNTA CAMINO 1984-CV', '265+875', 'si', '', '0000-00-00'),
(483, 'SCT_TAM', '262', 'M', 'CARTA DE VIA', '271+202', 'si', '', '0000-00-00'),
(484, 'SCT_TAM', '263', 'M', 'CARTA DE VIA', '277+120', 'si', '', '0000-00-00'),
(485, 'SCT_TAM', '264', 'M', 'CARTA DE VIA', '277+844', 'si', '', '0000-00-00'),
(486, 'SCT_TAM', '265', 'M', 'CARTA DE VIA', '289+594', 'si', '', '0000-00-00'),
(487, 'SCT_TAM', '266', 'M', 'CARTA DE VIA', '309+552', 'si', '', '0000-00-00'),
(488, 'SCT_TAM', '267', 'M', 'ARMANDO MONT.1997-CV', '313+289', 'si', '', '0000-00-00'),
(489, 'SCT_TAM', '268', 'M', 'CARTA DE VIA', '313+390', 'si', '', '0000-00-00'),
(490, 'SCT_TAM', '269', 'M', 'CARTA DE VIA', '325+961', 'si', '', '0000-00-00'),
(491, 'SCT_TAM', '270', 'M', 'CARTA DE VIA', '326+750', 'si', '', '0000-00-00'),
(492, 'SCT_TAM', '271', 'M', 'CARTA DE VIA', '327+211', 'si', '', '0000-00-00'),
(493, 'SCT_TAM', '272', 'M', 'CARTA DE VIA', '332+132', 'si', '', '0000-00-00'),
(494, 'SCT_TAM', '273', 'M', 'CARTA DE VIA', '337+857', 'si', '', '0000-00-00'),
(495, 'SCT_TAM', '274', 'M', 'CARTA DE VIA', '346+764', 'si', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruces_geo`
--

DROP TABLE IF EXISTS `cruces_geo`;
CREATE TABLE IF NOT EXISTS `cruces_geo` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `lat` float NOT NULL,
  `lang` float NOT NULL,
  `descripcion` text NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `tipos_denom` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruces_geo`
--

INSERT INTO `cruces_geo` (`id`, `nombre`, `lat`, `lang`, `descripcion`, `direccion`, `tipos_denom`) VALUES
(1, 'CRUCE SCT_MEX', 19.1264, 98.7638, 'Casa de Adobe', 'Av. Progreso 102, Amecameca Edo. de Mex. C.P. 5600', 'AB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruces_res`
--

DROP TABLE IF EXISTS `cruces_res`;
CREATE TABLE IF NOT EXISTS `cruces_res` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_centro` varchar(80) NOT NULL,
  `no` varchar(4) NOT NULL,
  `linea` varchar(10) NOT NULL,
  `kilometraje` varchar(40) NOT NULL,
  `autorizado` varchar(40) NOT NULL,
  `n_autorizado` varchar(40) NOT NULL,
  `ultima_ver` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruces_res`
--

INSERT INTO `cruces_res` (`id`, `id_centro`, `no`, `linea`, `kilometraje`, `autorizado`, `n_autorizado`, `ultima_ver`) VALUES
(2, 'SCT_DUR', '18', '\"A\"Dist.Ca', 'A- 962+770 al A- 1118+730', 'si', '', '2017-11-01'),
(3, 'SCT_DUR', '9', '\"A\"   P. E', 'A- 1138+545 al A- 1146+375', 'si', '', '2017-11-01'),
(4, 'SCT_DUR', '41', '\"A\"  Dist.', 'A- 1147+696 al A- 1285+510', 'si', '', '2017-08-01'),
(5, 'SCT_DUR', '27', '\"M\" Dist.P', 'M- 871+100 al M- 895+573', 'si', '', '2017-09-01'),
(6, 'SCT_DUR', '75', '\"DA\" Sub D', 'DA- 7+468 al DA- 249+740', 'si', '', '2017-09-01'),
(7, 'SCT_DUR', '42', '\"DC\" Sub D', 'DC- 3+360 al DC- 101+060', 'si', '', '2017-12-01'),
(8, 'SCT_DUR', '7', '\"DB\" Sub D', 'DB- 1+350 al DB- 15+800', 'si', '', '2017-11-01'),
(18, 'SCT_TAM', '1', 'B', '1263.0 AL 1290.0', '3', '', '2018-04-17'),
(19, 'SCT_TAM', '2', 'BJ', '5.0 AL 14.0', '5', '', '2018-04-18'),
(20, 'SCT_TAM', '3', 'F', '153.0 AL 328.0', '111', '', '2018-06-13'),
(21, 'SCT_TAM', '4', 'L', '664.0 AL 678', '21', '', '2018-02-28'),
(22, 'SCT_TAM', '5', 'M', '4.0 AL 346', '130', '', '2018-08-07'),
(23, 'SCT_TAM', '6', 'MB', '0 AL 17', '4', '', '2018-03-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cvf`
--

DROP TABLE IF EXISTS `cvf`;
CREATE TABLE IF NOT EXISTS `cvf` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_centro` varchar(40) NOT NULL,
  `tpv` varchar(120) NOT NULL,
  `longitud` varchar(40) NOT NULL,
  `participacion` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cvf`
--

INSERT INTO `cvf` (`id`, `id_centro`, `tpv`, `longitud`, `participacion`) VALUES
(2, 'SCT_DUR', 'V&Iacute;A PRINCIPAL  Y SECUNDARIA CONSECIONADA', '623.535', ''),
(3, 'SCT_DUR', 'V&Iacute;AS AUXILIAR (PATIOS Y LADEROS ', '40.413', ''),
(4, 'SCT_DUR', 'V&Iacute;AS PARTICULARES', '4.955', ''),
(5, 'SCT_DUR', 'TOTAL (V&Iacute;A OPERADA)', '668.903', '100%'),
(6, 'SCT_DUR', 'V&Iacute;A PRINCIPAL Y SECUNDARIA FUERA DE OPERACI&Oacute;N ', '7.000', ''),
(7, 'SCT_DUR', 'TOTAL', '675.903', ''),
(9, 'SCT_TAM', 'V&Iacute;A PRINCIPAL ', '596.990', ''),
(10, 'SCT_TAM', 'V&Iacute;AS AUXILIAR (PATIOS Y LADEROS)', '235.823', ''),
(11, 'SCT_TAM', 'V&Iacute;AS PARTICULARES', '5.664', ''),
(12, 'SCT_TAM', 'TOTAL (V&Iacute;A OPERADA)', '838.477', '100%'),
(13, 'SCT_TAM', 'V&Iacute;A PRINCIPAL  FUERA DE OPERACI&Oacute;N ', '87.000', ''),
(14, 'SCT_TAM', 'TOTAL', '925.477', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_ver`
--

DROP TABLE IF EXISTS `descripcion_ver`;
CREATE TABLE IF NOT EXISTS `descripcion_ver` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_centro` varchar(40) CHARACTER SET latin1 NOT NULL,
  `numero` varchar(4) CHARACTER SET latin1 NOT NULL,
  `mes` varchar(40) CHARACTER SET latin1 NOT NULL,
  `area_ver` int(10) UNSIGNED NOT NULL,
  `vgcf` int(10) UNSIGNED NOT NULL,
  `empresa` int(10) UNSIGNED NOT NULL,
  `tramo` text CHARACTER SET latin1 NOT NULL,
  `linea` varchar(4) CHARACTER SET latin1 NOT NULL,
  `km_ini` varchar(20) CHARACTER SET latin1 NOT NULL,
  `km_fin` varchar(20) CHARACTER SET latin1 NOT NULL,
  `km_redf` varchar(25) CHARACTER SET latin1 NOT NULL,
  `objeto_ver` text CHARACTER SET latin1 NOT NULL,
  `dias_estimados` varchar(4) CHARACTER SET latin1 NOT NULL,
  `observaciones` text CHARACTER SET latin1 NOT NULL,
  `estatus` varchar(2) CHARACTER SET latin1 NOT NULL,
  `folio_notifica` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `descripcion_ver`
--

INSERT INTO `descripcion_ver` (`id`, `id_centro`, `numero`, `mes`, `area_ver`, `vgcf`, `empresa`, `tramo`, `linea`, `km_ini`, `km_fin`, `km_redf`, `objeto_ver`, `dias_estimados`, `observaciones`, `estatus`, `folio_notifica`) VALUES
(1, 'id_centro', 'nume', 'mes', 0, 0, 0, 'tramo', 'line', 'km_ini', 'km_fin', 'km_redf', 'objeto_ver', 'dias', 'observaciones', 'es', ''),
(2, '10', '1', '02', 2, 8, 5, 'Durango - El S&ucute;chil', 'DC', '2.5', '0', '0.000', 'Objeto por definir por la ARTF', '1', '', 'P', ''),
(3, '10', '2', '03', 3, 8, 5, 'Nueva Terminal Ferroviaria Durango', 'DA', '21.05', '0', '123.512', 'Objeto por definir por la ARTF', '3', '', 'P', 'artf'),
(4, '10', '3', '03', 1, 8, 5, 'Durango - Yerbanis', 'DA', '6.75', '123.512', '132.346', 'Objeto por definir por la ARTF', '3', '', 'P', 'artf'),
(5, '10', '4', '03', 1, 8, 5, 'Yerbanis - Torre&ocute;n', 'DA', '123.8', '132.346', '33.311', 'Objeto por definir por la ARTF', '2', '', 'P', ''),
(6, '10', '5', '04', 1, 2, 2, 'G&ocute;mez Palacio - Gregorio Garc', 'M', '869', '33.311', '112.613', 'Objeto por definir por la ARTF', '1', '', 'P', ''),
(7, '10', '6', '04', 1, 8, 5, 'Durango - El S&ucute;chil', 'DC', '2.5', '112.613', '0.000', 'Objeto por definir por la ARTF', '1', '', 'P', 'mike'),
(8, '10', '7', '04', 2, 8, 5, 'Durango - Torre&ocute;n', 'DA', '21.05', '0', '68.245', 'Objeto por definir por la ARTF', '2', '', 'P', 'mike'),
(9, '10', '8', '05', 1, 2, 2, 'San Isidro - Acacias                         ( Distrito Camacho ) Picardias - Nazareno          ', 'A', '958.3  1092.710', '68.245', '165.122', 'Objeto por definir por la ARTF', '1', '', 'P', ''),
(10, '10', '9', '05', 1, 2, 2, 'G&ocute;mez Palacio - Zav&acute;lza   (Distrito Bachimba)', 'A', '1137.88', '165.122', '16.049', 'Objeto por definir por la ARTF', '1', '', 'P', ''),
(11, '10', '10', '06', 1, 8, 5, 'Durango - Casa Blanca', 'DB', '0.8', '16.049', '0.000', 'Objeto por definir por la ARTF', '1', '', 'P', ''),
(12, '10', '11', '06', 3, 8, 5, 'Nueva Terminal Ferroviaria Durango', 'DA', '21.05', '0', '0.000', 'Objeto por definir por la ARTF', '1', '', 'P', ''),
(13, '10', '12', '06', 1, 8, 5, 'Durango - Felipe Pescador', 'DC', '2.5', '0', '', 'Objeto por definir por la ARTF', '2', '', 'P', ''),
(14, '10', '13', '06', 1, 8, 5, 'Durango - Torre&ocute;n', 'DA', '6.75', '0', '0.000', 'Objeto por definir por la ARTF', '1', '', 'P', ''),
(15, '10', '14', '07', 1, 2, 2, 'Britingham - Dinamita', 'AK', '0.3', '0', '0.000', 'Objeto por definir por la ARTF', '2', '', 'P', ''),
(16, '10', '15', '08', 1, 2, 2, 'San Isidro - Acacias                         ( Distrito Camacho ) Picardias - Nazareno          ', 'A', '958.3    1092.710', '0', '0.000', 'Objeto por definir por la ARTF', '2', '', 'P', ''),
(17, '10', '16', '08', 1, 2, 2, 'G&ocute;mez Palacio - Zav&acute;lza   (Distrito Bachimba)', 'A', '1137.88', '0', '0.000', 'Objeto por definir por la ARTF', '1', '', 'P', ''),
(18, '10', '17', '08', 2, 2, 2, 'San Isidro  (Distrito Camacho)  -  Zav&acute;lza   (Distrito Bachimba)', 'A', '958.3', '0', '0.000', 'Objeto por definir por la ARTF', '1', '', 'P', ''),
(19, '10', '18', '09', 3, 8, 5, 'Nueva Terminal Ferroviaria Durango', 'DA', '21.05', '0', '0.000', 'Objeto por definir por la ARTF', '1', '', 'P', ''),
(20, '10', '19', '10', 4, 8, 5, 'Nueva Terminal Ferroviaria Durango', 'DA', '21.05', '0', '0.000', 'Objeto por definir por la ARTF', '1', '', 'P', ''),
(21, '10', '20', '10', 2, 2, 2, 'G&ocute;mez Palacio - Gregorio Garc', 'M', '869', '0', '0.000', 'Objeto por definir por la ARTF', '1', '', 'P', ''),
(22, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', ''),
(23, '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cal`
--

DROP TABLE IF EXISTS `detalle_cal`;
CREATE TABLE IF NOT EXISTS `detalle_cal` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_ver` int(10) NOT NULL,
  `id_centro` int(10) NOT NULL,
  `lugar` text COLLATE utf8_spanish_ci NOT NULL,
  `linea` int(10) NOT NULL,
  `vgcf` int(10) NOT NULL,
  `hora` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `fecha_f` date NOT NULL,
  `verificador` int(10) NOT NULL,
  `p_act` int(10) NOT NULL,
  `fecha_mod` datetime NOT NULL,
  `estatus` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_cal`
--

INSERT INTO `detalle_cal` (`id`, `id_ver`, `id_centro`, `lugar`, `linea`, `vgcf`, `hora`, `fecha`, `fecha_f`, `verificador`, `p_act`, `fecha_mod`, `estatus`) VALUES
(1, 18, 4, 'SCT CENTRO 2', 6, 5, '09:00', '2019-05-01', '2019-05-01', 13, 13, '2019-04-09 19:48:27', 'A'),
(3, 18, 4, 'sct', 6, 5, '09:00', '2019-05-09', '2019-05-10', 13, 13, '2019-04-16 18:27:31', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentacion`
--

DROP TABLE IF EXISTS `documentacion`;
CREATE TABLE IF NOT EXISTS `documentacion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idfun` int(10) NOT NULL,
  `nombre` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `documentacion`
--

INSERT INTO `documentacion` (`id`, `idfun`, `nombre`, `descripcion`) VALUES
(2, 1, 'DOC. OVI', '1. Oficio de personal autorizado y que tenga la capacitaci&oacute;n t&eacute;cnica requerida al &aacute;rea a verificar, que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado.<br>                                                                                                                                                                                                                                  2. Relaci&oacute;n de personal (nombre, especialidad del personal del servicio ferroviario y cantidad) que realiza las actividades de mantenimiento y conservaci&oacute;n en el tramo a verificar, as&iacute; como del equipo con el cual realizan sus actividades. <br>\r\n3.  &Uacute;ltimo reporte de inspecci&oacute;n realizada en materia de  v&iacute;a f&eacute;rrea, v&iacute;as auxiliares, herrajes de cambio, puentes, alcantarillas, t?neles, se&ntilde;ales y cruzamientos, que de manera individual o en conjunto abarquen el tramo a verificar. <br>\r\n4.  &Uacute;ltimo reporte  de ejecuci&oacute;n de los trabajos realizados en materia de  v&iacute;a f&eacute;rrea, v&iacute;as auxiliares, herrajes de cambio, puentes, alcantarillas, t&uacute;neles, se&ntilde;ales y cruzamientos, que de manera individual o en conjunto abarquen el tramo a verificar.<br>                                                                                                                                                                                                                 5.   &Uacute;ltimo reporte de inspecci&oacute;n para detectar defectos internos de riel, de ser el caso con equipo especializado en el tramo a verificar. <br>\r\n6.   Relaci&oacute;nes de: <br>\r\na) Estaciones, incluyendo aquellas que tengan el car&aacute;cter de monumento hist&oacute;rico, as&iacute; como toda aquella documentaci&oacute;n e informaci&oacute;n que acrediten el mantenimiento y conservaci&oacute;n que les hayan dado en t&eacute;rminos de la normatividad de la materia, durante los ?ltimos tres a&ntilde;os. <br>\r\nb).   Detecci&oacute;n de Invasi&oacute;n (es) al Derecho de V&iacute;a Concesionado/Asignado (IDVC/A),  en su caso presentar copia simple de la (s) denuncia(s) presentadas por IDVC, as&iacute; como oficio de notificaci&oacute;n a la Secretar&iacute;a.<br>\r\nc). Obras e instalaciones otorgadas en el t&iacute;tulo de concesi&oacute;n/asignaci&oacute;n, as&iacute; como aquellas construidas y levantadas despues del otorgamiento de la concesi&oacute;n/asignaci&oacute;n, para lo cual se deber&aacute; presentar la autorizaci&oacute;n correspondiente, o el oficio de notificaci&oacute;n de obras menores a la Secretar&iacute;a. As&iacute; como de aquellas con las que no se cuenta con dicha autorizaci&oacute;n/aviso. Incluyendo obras particulares.  <br>                                                                                                                                                                                                                                                                                                                                                            d). Patios que indique como minimo numero de vias, longitud y capacidad. \r\nDicha (s) relaci&oacute;n (es) deber&aacute; (n) especificar la descripci&oacute;n del tipo de estaci&oacute;n, IDVC, obra y  su localizaci&oacute;n respecto del kil&oacute;metro y l&iacute;nea f&eacute;rrea.\r\n\r\n'),
(3, 2, 'DOC. V&Iacute;A FERREA', '1. Oficio de personal autorizado y que tenga la capacitaci&oacute;n t&eacute;cnica requerida al &aacute;rea a verificar, que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado. <br>                                                                                                                                                                                                                                  2. Relaci&oacute;n de personal (nombre, especialidad del personal del servicio ferroviario y cantidad) que realiza las actividades de mantenimiento y conservaci&oacute;n en el tramo a verificar, as&iacute; como del equipo con el cual realizan sus actividades.<br>\r\n3.  &Uacute;ltimo reporte de inspecci&oacute;n realizada en materia de v&iacute;a f&eacute;rrea  (incluyendo contracunetas y canalizacion de escurrimientos en zonas de cortes) que de manera individual o en conjunto abarquen el tramo a verificar. <br>\r\n4. &Uacute;ltimo reporte  de ejecuci&oacute;n de los trabajos realizados en materia de v&iacute;a f&eacute;rrea  (incluyendo contracunetas y canalizacion de escurrimientos en zonas de cortes) que de manera individual o en conjunto abarquen el tramo a verificar. <br>                                                                                                                                                                        5.  &Uacute;ltimo reporte de inspecci&oacute;n para detectar defectos internos de riel, de ser el caso con equipo especializado en el tramo a verificar.  <br>                                                                                                                                                                                                                                                                                                                          6. Patios que indique como minimo numero de vias, longitud y capacidad.\r\n'),
(4, 3, 'DOC. PUENTES Y/O ALCANTARILLAS', '1. Oficio de personal autorizado y que tenga la capacitaci&oacute;n t&eacute;cnica requerida al &aacute;rea a verificar, que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado.<br>                                                                                                                                                                                                                                                             2. Relaci&oacute;n de personal (nombre, especialidad del personal del servicio ferroviario y cantidad) que realiza las actividades de mantenimiento y conservaci&oacute;n en el tramo a verificar, as&iacute; como del equipo con el cual realizan sus actividades.<br>\r\n3.  &Uacute;ltimo reporte de inspecci&oacute;n realizada en materia de v&iacute;a f&eacute;rrea (puentes y/o alcantarillas) incluyendo canalizacion de los escurrimientos en los accesos, que de manera individual o en conjunto abarquen el tramo a verificar. <br>\r\n4. &Uacute;ltimo reporte  de ejecuci&oacute;n de los trabajos realizados en materia de v&iacute;a f&eacute;rrea (puentes y alcantarillas) incluyendo canalizacion de los escurrimientos en los accesos, que de manera individual o en conjunto abarquen el tramo a verificar.  <br>                                                            \r\n5.   Relaci&oacute;nes de: <br>\r\na) De puentes y/o alcantarillas  del tramo a verificar.        '),
(5, 4, 'DOC. T&Uacute;NELES', '1. Oficio de personal autorizado y que tenga la capacitaci&oacute;n t&eacute;cnica requerida al &aacute;rea a verificar, que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado.<br>                                                                                                                                                                                                                                                              2. Relaci&oacute;n de personal (nombre, especialidad del personal del servicio ferroviario y cantidad) que realiza las actividades de mantenimiento y conservaci&oacute;n en el tramo a verificar, as&iacute; como del equipo con el cual realizan sus actividades.<br>\r\n3. &Uacute;ltimo reporte de inspecci&oacute;n realizada en materia de v&iacute;a f&eacute;rrea (tuneles incluyendo contracunetas y canalizacion de los escurrimientos en los accesos) que de manera individual o en conjunto abarquen el tramo a verificar. <br>\r\n4. &Uacute;ltimo reporte  de ejecuci&oacute;n de los trabajos realizados en materia de v&iacute;a f&eacute;rrea (tuneles incluyendo contracunetas y canalizacion de los escurrimientos en los accesos) que de manera individual o en conjunto abarquen el tramo a verificar.  <br>                                                           \r\n5.   Relaci&oacute;nes de: <br>\r\na) De tuneles  del tramo a verificar.   '),
(6, 5, 'DOC. SE&Ntilde;ALES', '1. Oficio de personal autorizado y que tenga la capacitaci&oacute;n t&eacute;cnica requerida al &aacute;rea a verificar, que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado. <br>                                                                                                                                                                                                                                                                             2. Relaci&oacute;n de personal (nombre, especialidad del personal del servicio ferroviario y cantidad) que realiza las actividades de mantenimiento y conservaci&oacute;n en el tramo a verificar, as&iacute; como del equipo con el cual realizan sus actividades. <br>\r\n3.  &Uacute;ltimo reporte de inspecci&oacute;n realizada en materia de v&iacute;a f&eacute;rrea (se&ntilde;ales) que de manera individual o en conjunto abarquen el tramo a verificar. <br>\r\n4. &Uacute;ltimo reporte  de ejecuci&oacute;n de los trabajos realizados en materia de v&iacute;a f&eacute;rrea (se&ntilde;ales) que de manera individual o en conjunto abarquen el tramo a verificar.         '),
(7, 6, 'DOC. INSTALACIONES', '1. Oficio de personal autorizado y que tenga la capacitaci&oacute;n t&eacute;cnica requerida al &aacute;rea a verificar, que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado.  <br>                                                                                                                                                                                                                                                               2. Relaci&oacute;n de personal (nombre, especialidad del personal del servicio ferroviario y cantidad) que realiza las actividades de mantenimiento y conservaci&oacute;n en el tramo a verificar, as&iacute; como del equipo con el cual realizan sus actividades. <br>\r\n3.  &Uacute;ltimo reporte de inspecci&oacute;n realizada en materia de v&iacute;a f&eacute;rrea (instalaciones) que de manera individual o en conjunto abarquen el tramo a verificar. <br>\r\n4. &Uacute;ltimo reporte  de ejecuci&oacute;n de los trabajos realizados en materia de v&iacute;a f&eacute;rrea (instalaciones) que de manera individual o en conjunto abarquen el tramo a verificar.            '),
(8, 7, 'DOC. DVC', '1. Oficio de personal autorizado y que tenga la capacitaci&oacute;n t&eacute;cnica requerida al &aacute;rea a verificar, que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado. <br>                                                                                                                                                                                                                                                   2. Relaci&oacute;n de personal (nombre, especialidad del personal del servicio ferroviario y cantidad) que realiza las actividades de mantenimiento y conservaci&oacute;n en el tramo a verificar, as&iacute; como del equipo con el cual realizan sus actividades. <br>\r\n3. &Uacute;ltimo reporte de inspecci&oacute;n realizada en materia de v&iacute;a f&eacute;rrea (invasiones al derecho de v&iacute;a) que de manera individual o en conjunto abarquen el tramo a verificar. <br>\r\n4. &Uacute;ltimo reporte  de ejecuci&oacute;n de los trabajos realizados en materia de v&iacute;a f&eacute;rrea (invasiones al derecho de v&iacute;a) que de manera individual o en conjunto abarquen el tramo a verificar.<br>                                                                           \r\n5. Relaci&oacute;nes de: <br>\r\na) Detecci&oacute;n de Invasi&oacute;n (es) al Derecho de V&iacute;a Concesionado/Asignado (IDVC/A),  en su caso presentar copia simple de la (s) denuncia(s) presentadas por IDVC, as&iacute; como oficio de notificaci&oacute;n a la Secretar&iacute;a.\r\nDicha (s) relaci&oacute;n (es) deber&aacute; (n) especificar la descripci&oacute;n del tipo de IDVC, obra y  su localizaci&oacute;n respecto del kil&oacute;metro y l&iacute;nea f&eacute;rrea.\r\n\r\n'),
(9, 8, 'DOC. TRANSPORTE DE CARGA', '1. Oficio de personal autorizado que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado. <br>\r\n2. Registro de llamado de trenes que estan en circulaci&oacute;n en la (s) v&iacute;a (s) general (s) de comunicaci&oacute;n ferroviaria, el d&iacute;a o d&iacute;as que abarca la verificaci&oacute;n <br>\r\n3. Entrega de formato(s) de Inspecci&oacute;n del equipo ferroviario, donde se haga constar: el cumplimiento de  las condiciones de peso, dimensiones, capacidad y otras especificaciones (CONSIST basico y detallado); de la verificaci&oacute;n t&eacute;cnica de sus condiciones f&iacute;sicas y mec&aacute;nicas y  se  obtenga la  constancia de aprobaci&oacute;n de salida para su tr&aacute;nsito por personal calificado. (OD 99 y DM 274/ o sus equivalentes, gr&aacute;fica de tonelaje (formaci&oacute;n de equipo ferroviario)). <br>\r\n4. La evidencia del cumplimiento del procedimiento en  el que se vigile y constate se porte la Licencia Federal Ferroviaria, as&iacute; como las herramientas y ?tiles de trabajo. (de los ?ltimos 3 d&iacute;as antes de la verificaci&oacute;n). <br>\r\n5. La evidencia del cumplimiento del Sistema de Control para impedir que el personal t&eacute;cnico ferroviario, labore en estado de ebriedad o bajo el influjo de estupefacientes, psicotr&oacute;picos o de cualquier otra sustancia que produzca efectos similares, o presente incapacidades psicof&iacute;sicas que impidan el adecuado desempe&ntilde;o de sus funciones. (de los &uacute;ltimos 3 d&iacute;as antes de la verificaci&oacute;n).\r\n'),
(10, 9, 'DOC. TRANSPORTE DE PASAJEROS', '1. Oficio de personal autorizado que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado. <br>\r\n2. Registro de llamado de trenes que estan en circulaci&oacute;n en la (s) v&iacute;a (s) general (s) de comunicaci&oacute;n ferroviaria, el d&iacute;a o d&iacute;as que abarca la verificaci&oacute;n <br>\r\n3. Entrega de formato(s) de Inspecci&oacute;n del equipo ferroviario, donde se haga constar: el cumplimiento de  las condiciones de peso, dimensiones, capacidad y otras especificaciones (CONSIST basico y detallado); de la verificaci&oacute;n t&eacute;cnica de sus condiciones f&iacute;sicas y mec&aacute;nicas y  se  obtenga la  constancia de aprobaci&oacute;n de salida para su tr&aacute;nsito por personal calificado. (OD 99 y DM 274/ o sus equivalentes, gr&aacute;fica de tonelaje (formaci&oacute;n de equipo ferroviario). <br>\r\n4. La evidencia del cumplimiento del procedimiento en  el que se vigile y constate se porte la Licencia Federal Ferroviaria, as&iacute; como las herramientas y ?tiles de trabajo. (de los ?ltimos 3 d&iacute;as antes de la verificaci&oacute;n). <br>\r\n5. La evidencai del cumplimiento del Sistema de Control para impedir que el personal t&eacute;cnico ferroviario, labore en estado de ebriedad o bajo el influjo de estupefacientes, psicotr&oacute;picos o de cualquier otra sustancia que produzca efectos similares, o presente incapacidades psicof&iacute;sicas que impidan el adecuado desempe&ntilde;o de sus funciones. (de los &Uacute;ltimos 3 d&iacute;as antes de la verificaci&oacute;n). <br>\r\n6. Procedimientos/Medidas implementados (as) para; <br>\r\na)  impedir el abordaje de trenes a personas en estado de ebriedad o bajo la influencia de drogas o enervantes, o que porten  armas, explosivos, sustancias peligrosas, mercanc&iacute;as o, en general, cualquier otro elemento que constituya un riesgo dentro de los lugares destinados a los pasajeros. <br>\r\nb) Atender de manera adecuada a los discapacitados y personas de edad avanzada que contraten el servicio de transporte\r\n\r\n'),
(11, 10, 'DOC. EQUIPO ANTES DE SU SALIDA', '1.Oficio de personal autorizado que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado. <br>\r\n2.  Plantilla del personal del servicio ferroviario calificado para la inspecci&oacute;n del equipo ferroviario (unidades de arrastre y equipo tractivo) que el d&iacute;a de la verificaci&oacute;n se encuentra en funciones. <br>                                                                                                                                                                                                                   3. Constancias de habilidades del personal. <br>\r\n4. Registro de llamado de trenes que est&aacute;n de/para salida el d&iacute;a o d&iacute;as que abarca la verificaci&oacute;n <br> \r\n5. Consist de los trenes que han sido inspeccionados, el d&iacute;a de la verificaci&oacute;n.   <br>                                                                                                                                                                                                                                                                                                                                                                                                                                                6. Formato(s) de Inspecci&oacute;n donde se haga constar el cumplimiento de las condiciones f&iacute;sicas y mec&aacute;nicas y  se  obtenga la  constancia de aprobaci&oacute;n de salida para su tr&aacute;nsito por personal calificado.\r\n'),
(12, 11, 'DOC. UNIDADES DE ARRASTRE I', '1. Oficio de personal autorizado que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado. <br>\r\n2. Permiso, autorizaci&oacute;n o notificaci&oacute;n a la Secretar&iacute;a de la Prestaci&oacute;n del Servicio Auxiliar. <br>\r\n3. Relaci&oacute;n y presentaci&oacute;n de Manuales, normas, informaci&oacute;n t&eacute;cnica para la prestaci&oacute;n del servicio que se brinda incluyendo las relacionadas a medidas de protecci&oacute;n al ambiente.<br>\r\n4. Programa de capacitaci&oacute;n al personal y de seguridad en las instalaciones 2018. <br>\r\n5  Relaci&oacute;n del personal t&eacute;cnico que ah&iacute; labora, describiendo su nombre, funci&oacute;n,  capacitaci&oacute;n recibida en 20187 y si cuenta con certificaci&oacute;n. <br>\r\n6  Presentar el Programa de Mantenimiento 2018 <br>\r\na)  De conformidad a su programa presentar la evidencia de su cumplimiento al 1er trimestre . De acuerdo al tiempo en que se efectue la verificaci&oacute;n)\r\n\r\n'),
(13, 12, 'DOC. UNIDADES DE ARRASTRE II', '1. Oficio de personal autorizado que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado.<br>\r\n2. Permiso o notificaci&oacute;n la Secretar&iacute;a para la prestaci&oacute;n del servicio auxiliar.<br>\r\n3. Relaci&oacute;n y presentaci&oacute;n de manuales, normas, informaci&oacute;n t&eacute;cnica para la prestaci&oacute;n del servicio que se brinda incluyendo las relacionadas a medidas de protecci&oacute;n al ambiente.  <br>                                                                                                                                                                                                                                 4.Programa de capacitaci&oacute;n t&eacute;cnica al personal del servicio ferroviario, as&iacute; como su capacitaci&oacute;n en seguridad para las instalaciones, del periodo 2018 y 2019, asi como evidencia de haberlos impartido, en su caso.<br>                                                                                                                                                                       5. Relaci&oacute;n del personal de servicio ferroviario capacitado que ah&iacute; labora, describiendo su nombre, funci&oacute;n, capacitaci&oacute;n recibida en 2018 y si cuenta con certificaci&oacute;n.  <br>                                                                                                                                                                                                                                                            6. Presentar el Programa de Mantenimiento a las instalaciones, equipo y herramienta. 2018-2019, as&iacute; como presentar evidencia de su cumplimiento. <br>                                                                                                                                                                                                                                                                                                 7.- Relaci&oacute;n y presentaci&oacute;n de la maquinaria, equipo y herramienta con que cuenta en las instalaciones para el servicio que brinda a las unidades de equipo ferroviario (unidades de arrastre).   <br>                                                                                                                                                                                                        8. Relaci&oacute;n y presentaci&oacute;n del material con que se cuenta en las instalaciones para la atenci&oacute;n a las unidades de equipo ferroviario (unidades de arrastre).  <br>                                                                                                                                                                                                                                                                                    9.- Relaci&oacute;n y evidencia documental de las unidades de equipo ferroviario (unidades de arrastre) que fueron atendidas en 2018 y enero 2019.                                                                                  '),
(14, 13, 'DOC. EQUIPO TRACTIVO Y CLL', '1. Oficio de personal autorizado que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado. <br>\r\n2. Permiso o notificaci&oacute;n la Secretar&iacute;a para la prestaci&oacute;n del servicio auxiliar.<br>\r\n3. Relaci&oacute;n y presentaci&oacute;n de manuales, normas, informaci&oacute;n t&eacute;cnica para la prestaci&oacute;n del servicio que se brinda incluyendo las relacionadas a medidas de protecci&oacute;n al ambiente. <br>                                                                                                                                                                                                                                                4. Programa de capacitaci&oacute;n t&eacute;cnica al personal del servicio ferroviario, as&iacute; como su capacitaci&oacute;n en seguridad para las instalaciones, del periodo 2018 y 2019, asi como evidencia de haberlos impartido, en su caso. <br>                                                                                                                                                                                5. Relaci&oacute;n del personal de servicio ferroviario capacitado que ah&iacute; labora, describiendo su nombre, funci&oacute;n, capacitaci&oacute;n recibida en 2018 y si cuenta con certificaci&oacute;n.   <br>                                                                                                                                                                                                                                                                      6. Presentar el Programa de Mantenimiento a las instalaciones, equipo y herramienta. 2018-2019, as&iacute; como presentar evidencia de su cumplimiento. <br>                                                                                                                                                                                                                                                                                                   7. Relaci&oacute;n y presentaci&oacute;n de la maquinaria, equipo y herramienta con que cuenta en las instalaciones para el servicio que brinda a las unidades de equipo ferroviario (locomotoras).    <br>                                                                                                                                                                                                                                                 8. Relaci&oacute;n y presentaci&oacute;n del material con que cuenta en las instalaciones para la atenci&oacute;n a las unidades de equipo ferroviario (locomotoras).  <br>                                                                                                                                                                                                                                                                                                         9.- Relaci&oacute;n y evidencia documental de las unidades de equipo ferroviario (locomotoras) que fueron atendidas en 2018 y enero 2019. <br>                                                                                                                                                                                                                                                                                                                               10. Constancia de inspecci&oacute;n de seguridad al taller por la autoridad ambiental y tratamiento de la disposici&oacute;n final de los residuos peligrosos, como puede ser manifiesto por parte de las empresas recolectoras, etc.  <br>                                                                                                                                                                             11. Constancia de locomotoras acreditadas en el tema de contaminantes y ruidos. <br>                                                                                                                                                                                                                                                                                                                                                                                                                                         12. Relaci&oacute;n del Mantenimiento programado conforme lo indican los manuales de los fabricantes de equipo tractivo. (locomotoras), Entregando evidencia de su cumplimiento para cada una de las locomotoras propias o arrendadas con las cuales brinde el servicio concesionado.'),
(15, 14, 'DOC. CENTRO DE ABASTOS', '1. Oficio de personal autorizado que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado.<br>\r\n2. Permiso o notificaci&oacute;n a la Secretar&iacute;a para la prestaci&oacute;n del servicio auxiliar, segun corresponda.<br>\r\n3. Relaci&oacute;n y presentaci&oacute;n de manuales e normas, informaci&oacute;n t&eacute;cnica para la prestaci&oacute;n del (los) servicio (s) que se brinda (n) incluyendo las relacionadas a medidas de protecci&oacute;n al ambiente. <br>                                                                                                                                                                                                            4. Programa de capacitaci&oacute;n del personal para abastecimiento, as&iacute; como su capacitaci&oacute;n en seguridad para las instalaciones, del periodo 2018 y 2019, asi como evidencia de haberlos impartido, en su caso.   <br>                                                                                                                                                                                          5. Presentar el Programa de Mantenimiento a las instalaciones, equipo y herramienta, periodo 2018 as&iacute; como presentar evidencia de su cumplimiento. As&iacute; como presentar el correspondiente a 2019 <br>                                                                                                                                                                                                           6. Plantilla del personal capacitado para abastecimiento de combustibles (aceite, agua, arena, combustible), describiendo su nombre, funci&oacute;n, capacitaci&oacute;n recibida en 2018 y de ser el caso si cuenta con certificaci&oacute;n. <br>                                                                                                                                                                                    7. Relaci&oacute;n y presentaci&oacute;n de la maquinaria, equipo y herramienta con que cuenta en las instalaciones para el (los) servicio (s) que brinda. <br>                                                                                                                                                                                                                                                                                                                      8. Reportes de los abastecimientos dados al equipo ferroviario locomotoras de patio y camino. <br>\r\n9. Condiciones f&iacute;sicas de las instalaciones para almacenamiento y suministro de los consumibles. <br>                                                                                                                                                                                                                                                                                                                                                                                                         10. Constancia de Inspecci&oacute;n de seguridad al centro de abastos por autoridad ambiental y tratamiento de la disposici&oacute;n final de los residuos peligrosos, como pueden ser Manifiesto por parte de la empresa recolectora, etc.      '),
(16, 15, 'DOC. TRANSBORDO Y TRANSVASE DE L&Iacute;QUIDOS', '1. Oficio de personal autorizado que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado.<br>\r\n2. Permiso o notificaci&oacute;n a la Secretar&iacute;a para la prestaci&oacute;n del servicio auxiliar, seg&uacute;n corresponda.<br>\r\n3. Relaci&oacute;n y presentaci&oacute;n de manuales, normas, informaci&oacute;n t&eacute;cnica para la prestaci&oacute;n del servicio que se brinda incluyendo las relacionadas a medidas de protecci&oacute;n al ambiente. <br>                                                                                                                                                                                                                                            4. Programa de capacitaci&oacute;n del personal para transbordo y transvase, as&iacute; como su capacitaci&oacute;n en seguridad para las instalaciones, del periodo 2018, asi como evidencia de haberlos impartido, en su caso. As&iacute; como el programa 2019. <br>                                                                                                                                                                                                                   5. Presentar el Programa de Mantenimiento a las instalaciones, equipo y herramienta, del periodo 2018, asi como evidencia de haberlos impartido, en su caso. As&iacute; como el programa 2019. <br>                                                                                                                                                                                                                                                                                                                                                                6. Plantilla del personal capacitado para transbordo y transvase, describiendo su nombre, funci&oacute;n, capacitaci&oacute;n recibida en 2018 y de ser el caso si cuenta con certificaci&oacute;n. <br>                                                                                                                                                                                                                                                             7. Relaci&oacute;n y presentaci&oacute;n de la maquinaria, equipo y herramienta con que cuenta en las instalaciones para el servicio que brinda. <br>                                                                                                                                                                                   \r\n8. Reportes de los transbordos y/o tranvases realizados del periodo de 2018. <br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                           9. Constancia de Inspecci&oacute;n de seguridad de instalaciones deriviado de las activiades de transbordo y tranvase  por autoridad ambiental y tratamiento de la disposici&oacute;n final de los residuos peligrosos, como pueden ser Manifiesto por parte de la empresa recolectora, etc.    '),
(17, 16, 'DOC. TERMINAL DE CARGA', '1. Oficio de personal autorizado que de ser el caso atender&aacute; en su representaci&oacute;n el acto de verificaci&oacute;n notificado.<br>                                                                                                                                                                                                                                                                                                                                                                                        2. Permiso para la prestaci&oacute;n del servicio auxiliar de terminal de carga general y/o especializada. <br>                                                                                                                                                                                                                                                                                                                                                                                                                      3. Oficio de aprobaci&oacute;n de P&oacute;liza de seguros.  <br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   4. Relaci&oacute;n y presentaci&oacute;n de los sistemas, maquinaria, equipo y herramienta con que cuenta en las instalaciones para el servicio que brinda.  <br>                                                                                                                                                                                                                                                                                                                  5. Relaci&oacute;n y presentaci&oacute;n de manuales, normas, informaci&oacute;n t&eacute;cnica para la prestaci&oacute;n del servicio que se brinda. incluyendo las relacionadas a medidas de protecci&oacute;n al ambiente. <br>                                                                                                                                                                                                                                                   6. Programa de capacitaci&oacute;n del personal para servicios de terminal, as&iacute; como su capacitaci&oacute;n en seguridad para las instalaciones, del periodo 2018 asi como evidencia de haberlos impartido, en su caso.  As&iacute; como programa de capacitaci&oacute;n 2019.<br>                                                                                                                                                                                                                                7. Plantilla del personal capacitado para los servicios de terminal, describiendo su nombre, funci&oacute;n, capacitaci&oacute;n recibida en 2018 y de ser el caso si cuenta con certificaci&oacute;n. <br>                                                                                                                                                                                                                                                           8. Presentar el Programa de Mantenimiento a los sistemas, instalaciones, equipo y herramienta del periodo 2018 as&iacute; como presentar evidencia de su cumplimiento. <br>                                                                                                                                                                                                                                                                               9. Planos que contengan las v&iacute;as de la terminal, incluyendo su conexi&oacute;n a la v&iacute;a principal, para determinar la longitud total de v&iacute;as dentro de la Terminal. As&iacute; como las instalaciones y equipo para la atenci&oacute;n de los servicios que presta a trav&eacute;s del ferrocarril. <br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       10. Registro del control de entradas y salidas de los equipos ferroviarios.                                                                                                                                                                      ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_c` varchar(120) NOT NULL,
  `empresa` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre_c`, `empresa`) VALUES
(1, 'KCSM', 'Kansas City Southern de M&eacute;xico, S.A de C.V.'),
(2, 'FERROMEX', 'Ferrocarril Mexicano, S.A de C.V.'),
(3, 'FERROSUR', 'Ferrosur,  S.A. de C.V'),
(4, 'FTVM', 'Ferrocarril y Terminal del Valle de M&eacute;xico, S.A de C.V.'),
(5, 'LCD', 'L&iacute;nea Coahuila-Durango, S.A. de C.V'),
(6, 'FIT', 'Ferrocarril del Istmo de Tehuantepec, S.A de C.V.'),
(7, 'ADMICARGA', 'Administradora V&iacute;a Corta Tijuana Tecate'),
(8, 'FFSS', 'Ferrocarriles Suburbanos, S.A.P.I. de C.V.'),
(9, 'GEP', 'Gobierno del Estado de Puebla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas_piv`
--

DROP TABLE IF EXISTS `empresas_piv`;
CREATE TABLE IF NOT EXISTS `empresas_piv` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_estado` int(10) NOT NULL,
  `empresa` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas_piv`
--

INSERT INTO `empresas_piv` (`id`, `id_estado`, `empresa`) VALUES
(1, 1, 'FERROMEX'),
(2, 1, 'KCSM'),
(3, 2, 'FERROMEX'),
(4, 2, 'ADMICARGA'),
(5, 4, 'FIT'),
(6, 5, 'FTVM'),
(7, 6, 'FIT'),
(8, 7, 'FERROMEX'),
(9, 8, 'FERROMEX'),
(10, 8, 'LCD'),
(11, 9, 'FERROMEX'),
(12, 10, 'FERROMEX'),
(13, 10, 'LCD'),
(14, 11, 'FTVM'),
(15, 11, 'KCSM'),
(16, 11, 'FERROSUR'),
(17, 11, 'FERROMEX'),
(18, 12, 'FERROMEX'),
(19, 12, 'KCSM'),
(20, 14, 'FERROMEX'),
(21, 14, 'KCSM'),
(22, 14, 'FERROSUR'),
(23, 15, 'FERROMEX'),
(24, 16, 'KCSM'),
(25, 16, 'FERROMEX'),
(26, 17, 'FERROSUR'),
(27, 18, 'FERROMEX'),
(28, 19, 'FERROMEX'),
(29, 19, 'KCSM'),
(30, 20, 'FIT'),
(31, 20, 'FERROSUR'),
(32, 21, 'FERROSUR'),
(33, 21, 'KCSM'),
(34, 22, 'KCSM'),
(35, 22, 'FERROMEX'),
(36, 24, 'KCSM'),
(37, 26, 'FERROMEX'),
(38, 27, 'FIT'),
(39, 28, 'KCSM'),
(40, 28, 'FERROMEX'),
(41, 29, 'FERROSUR'),
(42, 29, 'KCSM'),
(43, 30, 'FERROSUR'),
(44, 30, 'FIT'),
(45, 31, 'FIT'),
(46, 32, 'FERROMEX'),
(47, 32, 'KCSM'),
(48, 32, 'LCD'),
(49, 33, 'FERROMEX'),
(50, 33, 'LCD'),
(51, 34, 'FERROMEX'),
(52, 34, 'KCSM'),
(53, 25, 'FERROMEX');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `idestado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `estado` varchar(80) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `zona` varchar(1) NOT NULL,
  PRIMARY KEY (`idestado`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idestado`, `estado`, `valor`, `zona`) VALUES
(1, 'AGUASCALIENTES', 'AGU', 'C'),
(2, 'BAJA CALIFORNIA', 'BCN', 'N'),
(3, 'BAJA CALIFORNIA SUR', 'BCS', ''),
(4, 'CAMPECHE', 'CAM', 'S'),
(5, 'CDMX', 'CMX', 'C'),
(6, 'CHIAPAS', 'CHP', 'S'),
(7, 'CHIHUAHUA', 'CHH', 'N'),
(8, 'COAHUILA', 'COA', 'N'),
(9, 'COLIMA', 'COL', 'C'),
(10, 'DURANGO', 'DUR', 'N'),
(11, 'ESTADO DE MEXICO', 'MEX', 'C'),
(12, 'GUANAJUATO', 'GUA', 'C'),
(13, 'GUERRERO', 'GRO', ''),
(14, 'HIDALGO', 'HID', 'C'),
(15, 'JALISCO', 'JAL', 'C'),
(16, 'MICHOACAN', 'MIC', 'C'),
(17, 'MORELOS', 'MOR', 'S'),
(18, 'NAYARIT', 'NAY', 'C'),
(19, 'NUEVO LEON', 'NLE', 'N'),
(20, 'OAXACA', 'OAX', 'S'),
(21, 'PUEBLA', 'PUE', 'S'),
(22, 'QUERETARO', 'QUE', 'C'),
(23, 'QUINTANA ROO', 'ROO', ''),
(24, 'SAN LUIS POTOSI', 'SLP', 'N'),
(25, 'SINALOA', 'SIN', 'C'),
(26, 'SONORA', 'SON', 'N'),
(27, 'TABASCO', 'TAB', 'S'),
(28, 'TAMAULIPAS', 'TAM', 'N'),
(29, 'TLAXCALA', 'TLA', 'S'),
(30, 'VERACRUZ', 'VER', 'S'),
(31, 'YUCATAN', 'YUC', 'S'),
(32, 'ZACATECAS', 'ZAC', 'N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `folios_acta`
--

DROP TABLE IF EXISTS `folios_acta`;
CREATE TABLE IF NOT EXISTS `folios_acta` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_centro` varchar(10) NOT NULL,
  `num` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `folios_acta`
--

INSERT INTO `folios_acta` (`id`, `id_centro`, `num`) VALUES
(1, 'SCT_AGU', '0'),
(2, 'SCT_BCN', '0'),
(3, 'SCT_BCS', '0'),
(4, 'SCT_CAM', '0'),
(5, 'SCT_CHP', '0'),
(6, 'SCT_CHH', '0'),
(7, 'SCT_CDM', '0'),
(8, 'SCT_COA', '0'),
(9, 'SCT_COL', '0'),
(10, 'SCT_DUR', '0'),
(11, 'SCT_GUA', '0'),
(12, 'SCT_GRO', '0'),
(13, 'SCT_HID', '0'),
(14, 'SCT_JAL', '0'),
(15, 'SCT_MEX', '0'),
(16, 'SCT_MIC', '0'),
(17, 'SCT_MOR', '0'),
(18, 'SCT_NAY', '0'),
(19, 'SCT_NLE', '0'),
(20, 'SCT_OAX', '0'),
(21, 'SCT_PUE', '0'),
(22, 'SCT_QUE', '0'),
(23, 'SCT_ROO', '0'),
(24, 'SCT_SLP', '0'),
(25, 'SCT_SIN', '0'),
(26, 'SCT_SON', '0'),
(27, 'SCT_TAB', '0'),
(28, 'SCT_TAM', '10'),
(29, 'SCT_TLA', '0'),
(30, 'SCT_VER', '0'),
(31, 'SCT_YUC', '0'),
(32, 'SCT_ZAC', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fundamentos`
--

DROP TABLE IF EXISTS `fundamentos`;
CREATE TABLE IF NOT EXISTS `fundamentos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idalcance` int(10) NOT NULL,
  `nombre` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `fundamentos`
--

INSERT INTO `fundamentos` (`id`, `idalcance`, `nombre`, `descripcion`) VALUES
(1, 1, 'FUNDAMENTO OVI', 'Art&iacute;culos 3, 14, 27, 28, 29, 31, 34, 57 y 60 de la Ley Reglamentaria del Servicio Ferroviario; 28, 29, 30, 31, 35, 42, 44, 45, 47, 48, 49, 50, 51, 52, 53, 55, 222 y 223 del Reglamento del Servicio Ferroviario, NOM-050-SCT2-2017, NOM-034-SCT2-2011, NOMS.'),
(2, 2, 'FUNDAMENTO V&Iacute;A FERREA', 'Art&iacute;culos 3, 14, 27, 28, 29 y 57 de la Ley Reglamentaria del Servicio Ferroviario; 28, 42, 44, 45, 47, 55, 222 y 223 del Reglamento del Servicio Ferroviario.'),
(3, 3, 'FUNDAMENTO PUENTES Y/O ALCANTARILLAS', 'Art&iacute;culos 3, 14, 27, 28, 29 y 57 de la Ley Reglamentaria del Servicio Ferroviario; 28, 35, 42, 44, 45, 47, 51, 222 y 223 del Reglamento del Servicio Ferroviario.'),
(4, 4, 'FUNDAMENTO T&Uacute;NELES', 'Art&iacute;culos 3, 14, 27, 28, 29 y 57 de la Ley Reglamentaria del Servicio Ferroviario; 28, 35, 42, 44, 45, 47, 51, 222 y 223 del Reglamento del Servicio Ferroviario.'),
(5, 5, 'FUNDAMENTO SE&Ntilde;ALES', 'Art&iacute;culos 3, 14, 27, 28, 29 y 57 de la Ley Reglamentaria del Servicio Ferroviario; 28, 35, 42, 44, 45, 47, 53, 222 y 223 del Reglamento del Servicio Ferroviario.'),
(6, 6, 'FUNDAMENTO INSTALACIONES', 'Art&iacute;culos 3, 14, 27, 28, 29 y 57 de la Ley Reglamentaria del Servicio Ferroviario; 28, 35, 42, 44, 45, 47, 222 y 223 del Reglamento del Servicio Ferroviario.'),
(7, 7, 'FUNDAMENTO DVC', 'Art&iacute;culos 3, 14, 27, 28, 29, 31, 31 bis, 34 y 57 de la Ley Reglamentaria del Servicio Ferroviario; 28, 42, 44, 45, 47, 48, 49, 50, 553, 222 y 223 del Reglamento del Servicio Ferroviario.'),
(8, 8, 'FUNDAMENTO TRANSPORTE DE CARGA', 'Art&iacute;culos 38, 39 y 40 de la Ley Reglamentaria del Servicio Ferroviario;  77, 78, 79, 80, 82, 83, 92, 93, 94, 98, 144, 150, 151 del Reglamento del Servicio Ferroviario. Y lo correspondiente al Reglamento para el Transporte Terrestre de Materiales y Residuos Peligrosos articulos 71, 72, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 108, 121, 122.'),
(9, 9, 'FUNDAMENTO TRANSPORTE DE PASAJEROS', 'Art&iacute;culos 38, 39, 40, 50 de la Ley Reglamentaria del Servicio Ferroviario;  58, 59, 77, 78, 79, 80, 82, 83, 92, 93, 94, 98, 144, 150, 151 del Reglamento del Servicio Ferroviario. '),
(10, 10, 'FUNDAMENTO EQUIPO ANTES DE SU SALIDA', 'Art&iacute;culos 38 y 39 de la Ley Reglamentaria del Servicio Ferroviario; 80, 81, 82, 83, 84, 91 y  99  fracci&oacute;n II del Reglamento del Servicio Ferroviario '),
(11, 11, 'FUNDAMENTO UNIDADES DE ARRASTRE I', 'Art&iacute;culos 15 Fracci&oacute;n I , 44 y 45 de la Ley Reglamentaria del Servicio Ferroviario; (Terminales de Pasajeros 115,116 y 117 RSF) (Terminales de carga del  118 al 126 RSF ) ( Transbordo y Transvase 127 al 133 del RSF)  (Talleres de Mantenimiento de Equipo 134, 135, 136, 137 RSF)  ( Centro de Abasto 138, 139 RSF ) y 142 y 198 del Reglamento del Servicio Ferroviario)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      '),
(12, 12, 'FUNDAMENTO UNIDADES DE ARRASTRE II', 'Art&iacute;culos 15,  fracci&oacute;n I, 44 y 45 de la Ley Reglamentaria del Servicio Ferroviario; 2, fracci&oacute;n XX, 134, 135, 136, 137, 142 y 198 del Reglamento del Servicio Ferroviario y Lineamientos en materia de emisi&oacute;n de ruido y otros contaminantes atribuibles al tr&aacute;nsito ferroviario al interior de zonas urbanas o centros de poblaci&oacute;n.  '),
(13, 13, 'FUNDAMENTO EQUIPO TRACTIVO Y CLL', 'Art&iacute;culos 15,  fracci&oacute;n I, 44 y 45 de la Ley Reglamentaria del Servicio Ferroviario; 2, fracci&oacute;n XX, 77, 78, 79, 134, 135, 136, 137, 142 y 198 del Reglamento del Servicio Ferroviario y Lineamientos en materia de emisi&oacute;n de ruido y otros contaminantes atribuibles al tr&aacute;nsito ferroviario al interior de zonas urbanas o centros de poblaci&oacute;n.  '),
(14, 14, 'FUNDAMENTO CENTRO DE ABASTOS', 'Art&iacute;culos 15 fracci&oacute;n I, 44 y 45 de la ley Reglamentaria del Servicio Ferroviario; 138, 139, 142 y 198 del Reglamento del Servicio Ferroviario, Lineamientos en materia de emisiones de ruido y otros contaminantes atribuibles al tr&aacute;nsito ferroviario al interior de zonas urbanas o centros de poblaci&oacute;n publicados en el DOF 21 de octubre de 2016.                                                                                                  '),
(15, 15, 'FUNDAMENTO TRANSBORDO Y TRANSVASE DE L&Iacute;QUIDOS', 'Art&iacute;culos 15 fracci&oacute;n I, 44 y 45 de la ley Reglamentaria del Servicio Ferroviario; 127, 128, 129, 130, 131, 132, 133, 142 y 198 del Reglamento del Servicio Ferroviario, 73, 98 y 99 del Reglamento para el Transporte Terrestre de Materilaes y Residuos Peligrosos, Lineamientos en materia de emisiones de ruido y otros contaminantes atribuibles al tr&aacute;nsito ferroviario al interior de zonas urbanas o centros de poblaci&oacute;n publicados en el DOF 21 de octubre de 2016.                                                                                              '),
(16, 16, 'FUNDAMENTO TERMINAL DE CARGA', 'Art&iacute;culos 15 fracci&oacute;n I, 44 y 45 de la ley Reglamentaria del Servicio Ferroviario; 118, 119, 120, 121, 122, 123, 124, 125, 126, 142 y 198 del Reglamento del Servicio Ferroviario, Lineamientos en materia de emisiones de ruido y otros contaminantes atribuibles al tr&aacute;nsito ferroviario al interior de zonas urbanas o centros de poblaci&oacute;n publicados en el DOF 21 de octubre de 2016.                                                                                                     ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infraestructura`
--

DROP TABLE IF EXISTS `infraestructura`;
CREATE TABLE IF NOT EXISTS `infraestructura` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_centro` varchar(45) NOT NULL,
  `linea` varchar(4) NOT NULL,
  `km_ini` varchar(45) NOT NULL,
  `km_fin` varchar(45) NOT NULL,
  `total_km` varchar(45) NOT NULL,
  `tipo_v` varchar(45) NOT NULL,
  `vgcf` varchar(45) NOT NULL,
  `empresa_f` varchar(45) NOT NULL,
  `infra_estra` text NOT NULL,
  `ubicacion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `infraestructura`
--

INSERT INTO `infraestructura` (`id`, `id_centro`, `linea`, `km_ini`, `km_fin`, `total_km`, `tipo_v`, `vgcf`, `empresa_f`, `infra_estra`, `ubicacion`) VALUES
(2, 'SCT_DUR', 'A', '958.300', '999.125', '40.825', 'MIXTA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(3, 'SCT_DUR', 'A', '1092.710', '1112.000', '19.290', 'MIXTA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(4, 'SCT_DUR', 'A', '1137.880', '1143.000', '5.120', 'MIXTA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', 'Patio Estaci&oacute;n G&oacute;mez Palacio', ' L&iacute;nea \"A\" 1137.880 al 1143.000'),
(5, 'SCT_DUR', 'A', '1143.000', '1290.000', '147.000', 'MIXTA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(6, 'SCT_DUR', 'M', '869.000', '897.000', '28.000', 'MIXTA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(7, 'SCT_DUR', 'DA', '6.750', '251.000', '244.250', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango. S.A. de C.V.', '', ''),
(8, 'SCT_DUR', 'DC', '2.500', '102.600', '100.100', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango. S.A. de C.V.', '', ''),
(9, 'SCT_DUR', 'DB', '0.800', '16.000', '15.200', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango. S.A. de C.V.', '', ''),
(10, 'SCT_DUR', 'DA', '21.050', '24.750', '3.700', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango. S.A. de C.V.', 'Nueva Terminal Ferroviaria de Durango', ' L&iacute;nea \"DA\" Durango - Torre&oacute;n Del km. DA - 21+050 al km. DA - 24+750 <br>  Con 25  V&iacute;as  Secundarias incluyendo la \"Y\" Griega.  Para un total de 23.750 kms. de longitud.'),
(12, 'SCT_TAM', 'B', '1263+631', '1290+840', '27.209', 'ELASTICA', 'FERROCARRIL DEL NORESTE', 'KANSAS CITY SOUTHERN DE MEXICO, S.A. C.V.', 'PUENTE INTERNACIONAL FERROVIARIO', 'B- 1290+840'),
(13, 'SCT_TAM', 'BJ', '0+000', '14+000', '14.000', 'ELASTICA', 'FERROCARRIL DEL NORESTE', 'KANSAS CITY SOUTHERN DE MEXICO, S.A. C.V.', 'TALLER FERROVIARIO', 'BJ- 12+500'),
(14, 'SCT_TAM', 'F', '153+683', '328+017', '174.334', 'ELASTICA-CLASICA', 'FERROCARRIL DEL NORESTE', 'KANSAS CITY SOUTHERN DE MEXICO, S.A. C.V.', 'PATIO MATAMOROS', 'FK-1+300'),
(15, 'SCT_TAM', 'L', '664+010', '678+000', '13.990', 'ELASTICA', 'FERROCARRIL DEL NORESTE', 'KANSAS CITY SOUTHERN DE MEXICO, S.A. C.V.', 'PATIO DO&Ntilde;A CECILIA', 'L-673+066'),
(16, 'SCT_TAM', 'M', '4+128', '351+785', '347.657', 'ELASTICA', 'PACIFICO-NORTE', 'FERROCARRIL MEXICANO, S.A. C.V.', 'PATIO MIRAMAR', 'M-14+000'),
(17, 'SCT_TAM', 'MB', '0+000', '19+800', '19.800', 'ELASTICA', 'PACIFICO-NORTE', 'FERROCARRIL MEXICANO, S.A. C.V.', 'ACCESO PUERTO INDUSTRIAL ALTAMIRA', 'FRENTE AL M-27+616=MB-0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `irregularidades`
--

DROP TABLE IF EXISTS `irregularidades`;
CREATE TABLE IF NOT EXISTS `irregularidades` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_ver` varchar(45) NOT NULL,
  `id_centro` varchar(45) NOT NULL,
  `estatus` varchar(2) NOT NULL,
  `placa_kini` varchar(45) NOT NULL,
  `placa_kfin` varchar(45) NOT NULL,
  `pl` varchar(45) NOT NULL,
  `descripcion1` text NOT NULL,
  `descripcion2` text NOT NULL,
  `descripcion3` text NOT NULL,
  `plazo` varchar(45) NOT NULL,
  `fecha_c` date NOT NULL,
  `descripcion4` text NOT NULL,
  `verificador` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `irregularidades`
--

INSERT INTO `irregularidades` (`id`, `id_ver`, `id_centro`, `estatus`, `placa_kini`, `placa_kfin`, `pl`, `descripcion1`, `descripcion2`, `descripcion3`, `plazo`, `fecha_c`, `descripcion4`, `verificador`) VALUES
(2, '31', 'SCT_TAM', 'P', 'H', 'I', 'J', 'A', 'A', 'A', 'A', '2019-01-31', 'A', 'MANUEL AGUILAR HERNANDEZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

DROP TABLE IF EXISTS `lineas`;
CREATE TABLE IF NOT EXISTS `lineas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_estado` int(10) NOT NULL,
  `linea` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`id`, `id_estado`, `linea`) VALUES
(2, 2, 'L'),
(3, 3, 'B'),
(4, 4, 'B'),
(5, 4, 'N'),
(6, 4, 'NB'),
(7, 5, 'JUAREZ'),
(8, 5, 'MORELOS'),
(9, 6, 'JUAREZ'),
(10, 6, 'MORELOS'),
(11, 6, 'N'),
(12, 6, 'V'),
(13, 7, 'N'),
(14, 7, 'NE'),
(15, 8, 'ANTIGUA F'),
(16, 8, 'ANTIGUA M'),
(17, 8, 'B'),
(18, 8, 'BF'),
(19, 8, 'BMA'),
(20, 8, 'F'),
(21, 8, 'M'),
(22, 9, 'V'),
(23, 10, 'B'),
(24, 11, 'BC'),
(25, 11, 'B'),
(26, 11, 'L'),
(27, 11, 'LB'),
(28, 12, 'B'),
(29, 12, 'BJ'),
(30, 12, 'F'),
(31, 12, 'L'),
(32, 13, 'V'),
(33, 14, 'L'),
(34, 14, 'V'),
(35, 15, 'B'),
(36, 15, 'L'),
(37, 16, 'A'),
(38, 17, 'U'),
(39, 17, 'UA'),
(40, 18, 'A'),
(41, 18, 'QA'),
(42, 19, 'A'),
(43, 19, 'DA'),
(44, 19, 'M'),
(45, 19, 'R'),
(46, 19, 'RB'),
(47, 19, 'RC'),
(48, 19, 'RD'),
(49, 20, 'I '),
(50, 20, 'IP'),
(51, 21, 'A'),
(52, 21, 'M'),
(53, 22, 'A'),
(54, 22, 'AC'),
(55, 22, 'AE'),
(56, 22, 'B'),
(57, 22, 'B'),
(58, 22, 'I'),
(59, 22, 'IN'),
(60, 23, 'B'),
(61, 24, 'A'),
(62, 24, 'I'),
(63, 24, 'T'),
(64, 25, 'B'),
(65, 26, 'I'),
(66, 26, 'IB'),
(67, 26, 'IN'),
(68, 27, 'T'),
(69, 28, 'BM'),
(70, 28, 'M'),
(71, 29, 'A'),
(72, 29, 'B'),
(73, 30, 'T'),
(74, 30, 'TH'),
(75, 30, 'TI'),
(76, 30, 'TJ'),
(77, 31, 'T'),
(78, 31, 'TC'),
(79, 31, 'TE'),
(80, 31, 'TF'),
(81, 31, 'TG'),
(82, 31, 'TO'),
(83, 31, 'TP'),
(84, 31, 'U'),
(85, 32, 'M'),
(86, 32, 'MB'),
(87, 33, 'A'),
(88, 34, 'Q'),
(89, 34, 'QA'),
(90, 35, 'Q'),
(91, 36, 'TA'),
(92, 36, 'TB'),
(93, 37, 'A'),
(94, 37, 'A'),
(95, 37, 'AB'),
(96, 37, 'H'),
(97, 37, 'HA'),
(98, 37, 'HB'),
(99, 37, 'HC'),
(100, 37, 'S'),
(101, 37, 'V'),
(102, 38, 'VB '),
(103, 38, 'H'),
(104, 38, 'S'),
(105, 39, 'G'),
(106, 39, 'GF'),
(107, 40, 'E'),
(108, 40, 'EA'),
(109, 40, 'S'),
(110, 40, 'SA'),
(111, 40, 'SC'),
(112, 40, 'VB '),
(113, 41, 'S'),
(114, 41, 'SA'),
(115, 42, 'FA '),
(116, 42, 'G'),
(117, 42, 'GA'),
(118, 42, 'S'),
(119, 42, 'SC'),
(120, 42, 'V'),
(121, 42, 'Z'),
(122, 42, 'ZA'),
(123, 42, 'ZT'),
(124, 43, 'VK'),
(125, 43, 'VL'),
(126, 44, 'VC'),
(127, 44, 'VK'),
(128, 45, 'VB '),
(129, 46, 'A'),
(130, 46, 'B'),
(131, 46, 'C'),
(132, 46, 'CNA'),
(133, 46, 'N'),
(134, 46, 'NA'),
(135, 46, 'PATIO TLATILCO '),
(136, 46, 'PATIO VALLEJO A'),
(137, 46, 'YB'),
(138, 46, 'YH'),
(139, 47, 'A'),
(140, 47, 'B'),
(141, 47, 'H'),
(142, 47, 'JUAREZ'),
(143, 47, 'MORELOS'),
(144, 47, 'N'),
(145, 47, 'S'),
(146, 47, 'SB'),
(147, 47, 'SH'),
(148, 47, 'TS'),
(149, 47, 'VK'),
(150, 47, 'VS'),
(151, 48, 'RD'),
(152, 49, 'RC'),
(153, 49, 'RD'),
(154, 50, 'DA'),
(155, 50, 'DB'),
(156, 50, 'DC'),
(157, 51, 'DC'),
(158, 52, 'FA '),
(159, 53, 'FA '),
(160, 53, 'K'),
(161, 53, 'KA'),
(162, 54, 'K'),
(163, 54, 'Z'),
(164, 55, 'FA '),
(165, 56, 'FA '),
(166, 56, 'Z'),
(167, 57, 'FA '),
(168, 57, 'FD'),
(169, 57, 'FX'),
(170, 58, 'E'),
(171, 59, 'E'),
(172, 60, 'UB'),
(173, 61, 'L1'),
(174, 61, 'L2'),
(175, 62, 'L1'),
(176, 62, 'L2'),
(177, 63, 'VC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_piv`
--

DROP TABLE IF EXISTS `linea_piv`;
CREATE TABLE IF NOT EXISTS `linea_piv` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_vgcf` int(10) NOT NULL,
  `linea` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=187 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `linea_piv`
--

INSERT INTO `linea_piv` (`id`, `id_vgcf`, `linea`) VALUES
(1, 1, 'A'),
(2, 2, 'L'),
(3, 3, 'UA'),
(4, 3, 'U'),
(5, 4, 'UB'),
(6, 5, 'FA'),
(7, 5, 'FL'),
(8, 6, 'A'),
(9, 6, 'B'),
(10, 6, 'CNA'),
(11, 6, 'CNA'),
(12, 6, 'N'),
(13, 6, 'YB'),
(14, 6, 'YH'),
(15, 6, 'NA'),
(16, 6, '304'),
(17, 6, 'patio vallejo A'),
(18, 6, 'patio tlatilco'),
(19, 7, 'K'),
(20, 7, 'FA'),
(21, 8, 'Q'),
(22, 8, 'QA'),
(23, 9, 'QA'),
(24, 10, 'R'),
(25, 10, 'RB'),
(26, 10, 'RC'),
(27, 10, 'RD'),
(28, 11, 'RD'),
(29, 11, 'RC'),
(30, 12, 'I'),
(31, 12, 'IP'),
(32, 13, 'A'),
(33, 14, 'DA'),
(34, 14, 'DC'),
(35, 14, 'DB'),
(36, 15, 'A'),
(37, 15, 'B'),
(38, 15, 'S'),
(39, 15, 'VK'),
(40, 15, 'H'),
(41, 15, 'N'),
(42, 15, 'TS'),
(43, 15, 'SB'),
(44, 15, 'SH'),
(45, 15, 'JUAREZ'),
(46, 15, 'MORELOS'),
(47, 15, 'VS'),
(48, 16, 'N'),
(49, 16, 'JUAREZ'),
(50, 16, 'MORELOS'),
(51, 16, 'V'),
(52, 17, 'VK'),
(53, 17, 'VL'),
(54, 18, 'S'),
(55, 18, 'H'),
(56, 18, 'A'),
(57, 19, 'B'),
(58, 20, 'MORELOS'),
(59, 20, 'AC'),
(60, 20, 'A'),
(61, 20, 'I'),
(62, 20, 'IN'),
(63, 20, 'AE'),
(64, 21, 'NB'),
(65, 21, 'JUAREZ'),
(66, 21, 'B'),
(67, 21, 'BD'),
(68, 21, 'N'),
(69, 22, 'B'),
(70, 23, 'JUAREZ/MORELOS'),
(71, 23, 'V'),
(72, 24, 'HA'),
(73, 24, 'AB'),
(74, 24, 'HB'),
(75, 24, 'HC'),
(76, 24, 'A'),
(77, 24, 'H'),
(78, 24, 'S'),
(79, 25, 'VB'),
(80, 26, 'I'),
(81, 26, 'T'),
(82, 26, 'IZ'),
(83, 26, 'ID'),
(84, 26, 'IC'),
(85, 26, 'TL'),
(86, 27, 'N'),
(87, 27, 'NC'),
(88, 27, 'NF'),
(89, 27, 'NE'),
(90, 27, 'ISLA COYACAL'),
(91, 27, 'IN'),
(92, 28, 'I'),
(93, 28, 'IN'),
(94, 28, 'IB'),
(95, 29, 'VK'),
(96, 29, 'VC'),
(97, 30, 'T'),
(98, 31, 'M'),
(99, 31, 'BM'),
(100, 32, 'F'),
(101, 32, 'B'),
(102, 32, 'BF'),
(103, 32, 'BMA'),
(104, 32, 'M'),
(105, 32, 'ANTIGUA F'),
(106, 33, 'Z'),
(107, 33, 'K'),
(108, 34, 'G'),
(109, 34, 'GF'),
(110, 35, 'VB'),
(111, 35, 'E'),
(112, 35, 'EA'),
(113, 35, 'SA'),
(114, 35, 'S'),
(115, 35, 'SC'),
(116, 36, 'V'),
(117, 36, 'VC'),
(118, 37, 'A'),
(119, 37, 'JUAREZ'),
(120, 37, 'MORELOS'),
(121, 37, 'BC'),
(122, 37, 'AL'),
(123, 38, 'B'),
(124, 38, 'MORELOS'),
(125, 39, 'BC'),
(126, 39, 'B'),
(127, 39, 'L'),
(128, 39, 'LB'),
(129, 39, 'BB'),
(130, 39, 'LA'),
(131, 40, 'T'),
(132, 40, 'TA'),
(133, 40, 'TB'),
(134, 40, 'TC'),
(135, 40, 'TE'),
(136, 40, 'TF'),
(137, 40, 'TG'),
(138, 40, 'TO'),
(139, 40, 'TP'),
(140, 40, 'U'),
(141, 41, 'FA'),
(142, 42, 'B'),
(143, 42, 'BJ'),
(144, 42, 'F'),
(145, 42, 'L'),
(146, 42, 'FK'),
(147, 43, 'M'),
(148, 43, 'MB'),
(149, 43, 'MC'),
(150, 43, 'MA'),
(151, 44, 'S'),
(152, 44, 'SA'),
(153, 45, 'VB'),
(154, 46, 'V'),
(155, 47, 'G'),
(156, 47, 'GA'),
(157, 47, 'Z'),
(158, 47, 'ZT'),
(159, 47, 'ZA'),
(160, 47, 'FA'),
(161, 48, 'Z'),
(162, 48, 'FA'),
(163, 49, 'FA'),
(164, 49, 'FD'),
(165, 49, 'FX'),
(166, 49, 'MERIDA'),
(167, 49, 'FN'),
(168, 50, 'A'),
(169, 51, 'B'),
(170, 51, 'L'),
(171, 52, 'DC'),
(172, 52, 'DF'),
(173, 53, 'A'),
(174, 53, 'P'),
(175, 53, 'PA'),
(176, 54, 'RD'),
(177, 55, 'A'),
(178, 55, 'M'),
(179, 55, 'DA'),
(180, 55, 'J'),
(181, 55, 'AJ'),
(182, 56, 'B'),
(183, 57, 'T'),
(184, 57, 'TH'),
(185, 57, 'TI'),
(186, 57, 'Q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapas`
--

DROP TABLE IF EXISTS `mapas`;
CREATE TABLE IF NOT EXISTS `mapas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_centro` int(10) NOT NULL,
  `img` varchar(120) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mapas`
--

INSERT INTO `mapas` (`id`, `id_centro`, `img`, `nombre`) VALUES
(1, 10, '../img/mapas/SCT_DUR.jpg', 'Durango'),
(2, 28, '../img/mapas/SCT_TAM.jpg', 'Tamaulipas'),
(3, 2, '../img/mapas/SCT_BCN.jpg', 'Baja California'),
(4, 4, '../img/mapas/SCT_DUR.jpg', 'Campeche');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mes`
--

DROP TABLE IF EXISTS `mes`;
CREATE TABLE IF NOT EXISTS `mes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mes`
--

INSERT INTO `mes` (`id`, `nombre`) VALUES
(1, 'enero'),
(2, 'febrero'),
(3, 'marzo'),
(4, 'abril'),
(5, 'mayo'),
(6, 'junio'),
(7, 'julio'),
(8, 'agosto'),
(9, 'septiembre'),
(10, 'octubre'),
(11, 'novimbre'),
(12, 'diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetos`
--

DROP TABLE IF EXISTS `objetos`;
CREATE TABLE IF NOT EXISTS `objetos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idarea` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `objetos`
--

INSERT INTO `objetos` (`id`, `idarea`, `nombre`, `descripcion`) VALUES
(1, 1, 'OVI', 'Verificar que se realice la inspecci&oacute;n, conservaci&oacute;n y mantenimiento de la v&iacute;a general de comunicaci&oacute;n ferroviaria referente a: v&iacute;a f&eacute;rrea, v&iacute;as auxiliares, herrajes de cambio, puentes, alcantarillas, t&uacute;neles, se&ntilde;ales, instalaciones, cruzamientos y estaciones; as&iacute; como la preservaci&oacute;n del derecho de v&iacute;a  concesionado libre de invasiones y de trabajos de construcci&oacute;n de obras no autorizadas.    '),
(2, 1, 'V&Iacute;A FERREA', 'Verificar que se realice la inspecci&oacute;n, conservaci&oacute;n y mantenimiento de la v&iacute;a general de comunicaci&oacute;n ferroviaria referente a: v&iacute;a f&eacute;rrea, v&iacute;as auxiliares, laderos, escapes y v&iacute;as particulares.      '),
(3, 1, 'PUENTES Y/O ALCANTARILLAS', 'Verificar que se realice la inspecci&oacute;n, conservaci&oacute;n y mantenimiento de puentes y/o alcantarillas.   '),
(4, 1, 'T&Uacute;NELES', 'Verificar que se realice la inspecci&oacute;n, conservaci&oacute;n y mantenimiento de t&uacute;neles, puentes y alcantarillas.'),
(5, 1, 'SE&Ntilde;ALES', 'Verificar que se realice la inspecci&oacute;n, conservaci&oacute;n y mantenimiento de la v&iacute;a general de comunicaci&oacute;n ferroviaria: se&ntilde;ales operativas '),
(6, 1, 'INSTALACIONES', 'Verificar que se realice la inspecci?n, conservaci&oacute;n y mantenimiento de la v&iacute;a general de comunicaci&oacute;n ferroviaria:  instalaciones que forman parte de la operaci&oacute;n ferroviaria.    '),
(7, 1, 'DVC', 'Verificar que se realice la inspecci&oacute;n, conservaci&oacute;n y mantenimiento de la v&iacute;a general de comunicaci&oacute;n ferroviaria: preservaci&oacute;n del derecho de v&iacute;a  concesionado libre de invasiones y de trabajos de construcci&oacute;n de obras no autorizadas.   '),
(8, 2, 'TRANSPORTE DE CARGA', 'Verificar los trenes (trenes de camino, patio, servicio a industrias) que transiten por una v&iacute;a general de comunicaci&oacute;n ferroviaria, previamente al inicio de operaciones, el equipo ferroviario haya sido inspeccionado y aprobado para su tr&aacute;nsito y que sea operado durante su tr&aacute;nsito por personal acreditado de conformidad a los requisitos  reglamentarios, est&aacute;ndares de operaci&oacute;n y de seguridad establecidos; as&iacute; como los trenes que transportan carga especializada (Materiales y Residuos Peligrosos).'),
(9, 2, 'TRANSPORTE DE PASAJEROS', 'Verificar los trenes de pasajeros que transiten por una v&iacute;a general de comunicaci&oacute;n ferroviaria, previamente al inicio de operaciones, el equipo ferroviario haya sido inspeccionado y aprobado para su tr&aacute;nsito y que sea operado durante su tr&aacute;nsito por personal.'),
(10, 3, 'EQUIPO ANTES DE SU SALIDA', 'Verificar que el equipo ferroviario (unidades de arrastre y equipo tractivo) previamente al inicio de operaciones sea inspeccionado por personal calificado, con la finalidad de autorizar su movimiento por las V&iacute;as F&eacute;rreas, incidiendo  en sus  condiciones f&iacute;sicas y mec&aacute;nicas, de peso, dimensiones, capacidad y sistemas de frenos, dispositivos de control de velocidad y matricula (estencilado) asignada visible/legible.'),
(11, 4, 'UNIDADES DE ARRASTRE I', 'Verificar  que el servicio prestado se relice conforme a los manuales, normas NOM?s e informaci&oacute;n t&eacute;cnica establecida para tal efecto (incluyendo las medidas de protecci&oacute;n al ambiente), as&iacute; mismo este sea realizado por personal capacitado y/o certificado; as&iacute; mismo igualmente se cuente con como de  instalaciones, y equipo y herramienta necesario para realizar los trabajos y  garantizar la seguridad de las personas y los bienes,  a efecto de garantizar su  seguridad eficiencia, higiene, r&aacute;pidez y funcionalidad.\n                                                                                                                                                 '),
(12, 4, 'UNIDADES DE ARRASTRE II', 'Verificar  que el servicio prestado se realice por: personal capacitado, atendiendo lo indicado en los manuales de mantenimiento para cada tipo de equipo ferroviario, normas NOM?s, lineamientos en materia de emisi&oacute;n de ruidos y otros contaminantes, as&iacute; mismo, se cuente con las instalaciones, equipo y herramientas que se requieran para realizar los trabajos y  garantizar que los servicios se presten con seguridad, eficiencia, higiene, rapidez y funcionalidad, con la finalidad de garantizar la seguridad de las personas y los bienes.       '),
(13, 4, 'EQUIPO TRACTIVO Y CLL', 'Verificar  que el servicio prestado se realice por: personal capacitado, atendiendo lo indicado en los manuales de mantenimiento para cada tipo de equipo ferroviario, normas NOM?s, lineamientos en materia de emisi&oacute;n de ruidos y otros contaminantes, as&iacute; mismo, se cuente con las instalaciones, equipo y herramientas que se requieran para realizar los trabajos y  garantizar que los servicios se presten con seguridad, eficiencia, higiene, rapidez y funcionalidad, con la finalidad de garantizar la seguridad de las personas y los bienes.       '),
(14, 4, 'CENTRO DE ABASTOS', 'Verificar  que el (los) servicio (s) prestado (s) se realice (n) por: personal capacitado, atendiendo lo indicado en los manuales, normas de seguridad NOM?s, as&iacute; mismo, se cuente con las instalaciones, equipo y herramientas que se requieran para la prestaci?n del servicio con seguridad, eficiencia, higiene, rapidez y funcionalidad, con la finalidad de garantizar la seguridad de las personas y los bienes.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                '),
(15, 4, 'TRANSBORDO Y TRANSVASE DE L&Iacute;QUIDO', 'Verificar  que el servicio prestado se realice por: personal capacitado, atendiendo lo indicado en los manuales, normas NOM?s, Reglamento para el Transporte Terrestre de Materiales y Residuos Peligrosos (RTTMRP), as&iacute; mismo se cuente con las instalaciones, equipo y herramientas que se requieran para la prestaci&oacute;n del servicio con seguridad, eficiencia, higiene, rapidez y funcionalidad, con la finalidad de garantizar la seguridad de las personas y los bienes.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                '),
(16, 4, 'TERMINAL DE CARGA', 'Verificar  que el servicio prestado se realice por: personal capacitado, atendiendo lo indicado en los manuales de procedimientos para el manejo de la carga, normas NOM?s,  as&iacute; mismo, se cuente con la infraestructura, instalaciones, sistemas, equipo y herramientas que se requieran para la prestaci&oacute;n del servicio con seguridad, eficiencia, higiene, rapidez y funcionalidad, con la finalidad de garantizar la seguridad de las personas y los bienes.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_a`
--

DROP TABLE IF EXISTS `servicios_a`;
CREATE TABLE IF NOT EXISTS `servicios_a` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_centro` varchar(40) NOT NULL,
  `linea` varchar(5) NOT NULL,
  `kilometraje` varchar(20) NOT NULL,
  `domicilio` text NOT NULL,
  `tipo` varchar(120) NOT NULL,
  `servicio_p` text NOT NULL,
  `nombre` text NOT NULL,
  `empresa_f` varchar(120) NOT NULL,
  `tercero` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios_a`
--

INSERT INTO `servicios_a` (`id`, `id_centro`, `linea`, `kilometraje`, `domicilio`, `tipo`, `servicio_p`, `nombre`, `empresa_f`, `tercero`) VALUES
(2, 'SCT_DUR', '\"A\" M', 'Espuela &Uacute;bica', 'Blvd. Gonzalez de la Vega No 302, Parque Industrial Lagunero, G&oacute;mez Palacio, Dgo.', 'TERMINAL DE CARGA', 'Zona de Transbordo y Transbase', 'Sindicato &Uacute;nico de Carreros y Camioneros de G&oacute;mez Palacio, Dgo.', 'FERROMEX', ''),
(3, 'SCT_DUR', '\"M\" T', 'Espuela &Uacute;bica', 'Ejido San Jos&eacute; del Vi&ntilde;edo del Municipio de G&oacute;mez Palacio, Dgo.', 'TERMINAL DE CARGA', 'Zona de Transbordo y Transbase', 'Rancho Lucero, S.P.R. de R.L.', 'FERROMEX', ''),
(5, 'SCT_TAM', 'MC', '1+200', 'PUERTO INDUSTRIAL DE ALTAMIRA', 'TERMINAL DE CARGA', 'CARGA Y DESCARGA DE CONTENEDORES', 'A.T.M., S.A. DE C.V.', 'FERROMEX', ''),
(6, 'SCT_TAM', 'MB', '8+638', 'PUERTO INDUSTRIAL DE ALTAMIRA', 'TERMINAL DE CARGA', 'CARGA Y DESCARGA DE ROLLOS DE ACERO', 'FERPTO GOLFO, S.A. C.V.', 'FERROMEX', ''),
(7, 'SCT_TAM', 'L', '674+200', 'CD. MADERO, TAMAULIPAS', 'TALLER DE  LOCOMOTORAS Y UNIDADES ARRASTRE', 'LOCOM(INSP. VIAJE)UNID.ARRAS(REPARACI&Oacute;N)', 'KCSM,S.A.C.V.', 'KCSM,S.A.C.V.', ''),
(8, 'SCT_TAM', 'FK', '4+500', 'MATAMOROS,TAMAULIPAS', 'TALLER DE UNIDADES DE ARRASTRE', 'UNIDADES DE ARRASTRE(REPARACI&Oacute;N)', 'KCSM,S.A.C.V.', 'KCSM,S.A.C.V.', ''),
(9, 'SCT_TAM', 'BJ', '12+500', 'NUEVO LAREDO, TAMAULIPAS', 'TALLER DE LOCOMOTORAS YUNIDADES ARRASTRE', 'LOCOM(INSP. VIAJE)UNID.ARRAS(REPARACI&Oacute;N)', 'KCSM,S.A.C.V.', 'KCSM,S.A.C.V.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nick` varchar(15) NOT NULL,
  `pass` varchar(120) NOT NULL,
  `nombre` varchar(120) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nivel` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `bloqueo` int(10) UNSIGNED NOT NULL,
  `foto` varchar(120) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(3) NOT NULL,
  `zona` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nick`, `pass`, `nombre`, `correo`, `nivel`, `bloqueo`, `foto`, `estado`, `zona`) VALUES
(1, 'MIGUELHR', '27a471994077f985ae054ed6b5b0d4b0d48ce56e', 'MIGUEL ANGEL HERNANDEZ RAMIREZ', 'miguelhr290986@hotmail.com', 'ADMIN', 1, 'foto_perfil/MIGUELAHR.jpg', 0, ''),
(2, 'JOSELUISLA', '4d35c46e8c502b2b662eab359723c358acaa70ec', 'JOSE LUIS LOPEZ AMAYA ', 'jose.lopezy@sct.gob.mx', 'DIRECTOR', 1, 'foto_perfil/JOSELUISAL.jpg', 0, ''),
(3, 'JAVIERMH', 'e42009b357c7fff5af962c263546cea3a3e8af6f', 'JAVIER MOYSEN HERNANDEZ', 'jmoysenh@sct.gob.mx', 'VERIFICADOR', 1, 'foto_perfil/JAVIERMH.jpg', 0, ''),
(4, 'PEDROVAC', 'b7ee0487460a958e4c39fef67321bb32a1df0946', 'PEDRO VACIO CRUZ', 'pvacio@sct.gob.mx', 'DIRECTORS', 1, 'foto_perfil/PEDROVAC.jpg', 0, ''),
(5, 'ELIUTHMG', '82f31a71e33248a464f73ab6f742f4b58fd1648d', 'ELIUTH MARTINEZ GABRIEL', 'emargab@sct.gob.mx', 'DIRECTORN', 1, 'foto_perfil/ELIUTHMG.jpg', 0, ''),
(6, 'LUISANAF', 'c2bc09276798d3dd704eeb14b301e2153d590534', 'LUIS ANTONIO AGUILAR FLORES', 'luis.aguilar@sct.gob.mx', 'DIRECTORC', 1, 'foto_perfil/LUISANAF.jpg', 0, ''),
(7, 'MANUELAH', '2bcd97abfb84dc52e987e8742aa08b5f7c03386e', 'MANUEL AGUILAR HERNANDEZ', 'manuel@sct.gob.mx', 'VERIFICADOR', 1, 'foto_perfil/MANUELAH.jpg', 28, ''),
(8, 'VICTORHR', '7386acc45faeade560453e495c8573e20df746df', 'VICTOR HUGO ROMO ROMO ', 'victor.romo@sct.gob.mx', 'VERIFICADOR', 1, 'foto_perfil/img.jpg', 1, ''),
(9, 'JOELANDM', '0873ea495fc663204d3503e4a2760fab96dfdbee', 'JOEL ANDRADE MORALES ', 'jandramo@sct.gob.mx', 'SUBDIRECTORS', 1, 'foto_perfil/JOELADM.png', 0, 'S'),
(10, 'JUANCARLOSC', 'acf4d38d9cb27d824bcdd6cbf66625c85c723270', 'JUAN CARLOS ALVARADO JIMENEZ', 'jalvarad@sct.gob.mx', 'SUBDIRECTORC', 1, 'foto_perfil/JUANCARLOSC.jpg', 0, 'C'),
(11, 'ALFREDOB', 'e1ff4aa8bbbcfb2429228e4e984d2e6e6c9dd916', 'ALFREDO BRIANO PEREZ ', 'abrianop@sct.gob.mx', 'SUBDIRECTORN', 1, 'foto_perfil/BRIANO.jpg', 0, 'N'),
(12, 'GASTONARC', 'a8c5f8c9b077c8e3a4b34eb3224d87ee836de68f', 'GASTON ARON ROCHA CAMPA', 'grocha@sct.gob.mx', 'VERIFICADOR', 1, 'foto_perfil/img.jpg', 10, 'N'),
(13, 'DANIELGJAU', '2b4c17b2d898676b6a21414492dcc4f2460ca953', 'DANIEL GONZALES JAUREGUI', 'pablo.sandoval@sct.gob.mx', 'VERIFICADOR', 1, 'foto_perfil/img.jpg', 4, 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificaciones`
--

DROP TABLE IF EXISTS `verificaciones`;
CREATE TABLE IF NOT EXISTS `verificaciones` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_ver` varchar(10) NOT NULL,
  `id_centro` varchar(45) NOT NULL,
  `estatus` varchar(2) NOT NULL,
  `tipo_v` varchar(20) NOT NULL,
  `clase` varchar(4) NOT NULL,
  `calibre_r` varchar(6) NOT NULL,
  `fijacion` varchar(45) NOT NULL,
  `tipo_d` varchar(45) NOT NULL,
  `laminado` varchar(80) NOT NULL,
  `oficio_n` varchar(120) NOT NULL,
  `oficio_c` varchar(120) NOT NULL,
  `actai_fecha` date NOT NULL,
  `actai_numero` varchar(10) NOT NULL,
  `verificador` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificaciones_pro`
--

DROP TABLE IF EXISTS `verificaciones_pro`;
CREATE TABLE IF NOT EXISTS `verificaciones_pro` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_centro` int(10) NOT NULL,
  `numero_ver` int(10) NOT NULL,
  `tipo_ver` int(10) NOT NULL,
  `mes_ver` int(10) NOT NULL,
  `area_ver` int(10) NOT NULL,
  `objeto_ver` int(10) NOT NULL,
  `alcance_ver` int(10) NOT NULL,
  `fun_ver` int(10) NOT NULL,
  `doc_ver` int(10) NOT NULL,
  `empresa` int(10) NOT NULL,
  `vgcf` int(10) NOT NULL,
  `linea` int(10) NOT NULL,
  `tramo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `km_ini` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `km_fin` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `km_redf` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dias_ver` int(2) NOT NULL,
  `observaciones` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estatus_ini` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estatus_pro` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `folio_notifica` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_captura` datetime NOT NULL,
  `usuario` int(10) NOT NULL,
  `fecha_act` datetime NOT NULL,
  `usuario_act` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Volcado de datos para la tabla `verificaciones_pro`
--

INSERT INTO `verificaciones_pro` (`id`, `id_centro`, `numero_ver`, `tipo_ver`, `mes_ver`, `area_ver`, `objeto_ver`, `alcance_ver`, `fun_ver`, `doc_ver`, `empresa`, `vgcf`, `linea`, `tramo`, `km_ini`, `km_fin`, `km_redf`, `dias_ver`, `observaciones`, `estatus_ini`, `estatus_pro`, `folio_notifica`, `fecha_captura`, `usuario`, `fecha_act`, `usuario_act`) VALUES
(1, 1, 1, 1, 2, 1, 2, 2, 2, 3, 2, 2, 2, 'Chicalote - San Gil (Lim Edos Ags/Zac) Dist Salinas', '14.318', '55.085', '40.767', 1, 'Escapes: Chicalote (0.300), Ca&ntilde;ada (1.815) El Tule (1.890), San Gil (0.420)', 'F', 'I', '1', '2019-03-21 20:23:28', 8, '2019-03-21 20:23:28', 8),
(2, 1, 2, 1, 2, 2, 8, 8, 8, 9, 1, 1, 1, 'Patio S. Fco de los Romo', '557.149', '649.976', '92.827', 1, 'NA', 'F', 'I', '1', '2019-03-21 20:34:54', 8, '2019-03-21 20:34:54', 8),
(3, 1, 3, 1, 3, 1, 3, 3, 3, 4, 1, 1, 1, 'El Tigre (Lim Edos Jal/Ags) - Lim Sur Patio S. Fco de los Romo', '557.149', '599', '41.851', 1, 'NA', 'F', 'I', '1', '2019-03-21 20:36:47', 8, '2019-03-21 20:36:47', 8),
(4, 10, 1, 1, 2, 2, 8, 8, 8, 9, 13, 14, 34, 'Durango - El S&uacute;chil', '2500', '102', '-2398', 1, 'Verificaci&oacute;n pendiente del mes de Diciembre del 2018. ', 'S', 'I', '004', '2019-03-26 16:21:37', 12, '2019-03-26 16:21:37', 12),
(5, 10, 2, 1, 2, 3, 10, 10, 10, 11, 13, 14, 33, 'Nueva Terminal Ferroviaria Durango', '21050', '24', '-21026', 1, 'Verificaci&oacute;n pendiente del mes de Diciembre del 2018. ', 'S', 'I', '1', '2019-03-26 16:24:42', 12, '2019-03-26 16:24:42', 12),
(6, 10, 3, 1, 3, 1, 2, 2, 2, 3, 13, 14, 33, 'Durango - Yerbanis', '6', '123', '117', 3, '117.050+Longitud de laderos', 'S', 'I', '1', '2019-03-26 16:26:37', 12, '2019-03-26 16:26:37', 12),
(7, 10, 4, 1, 3, 1, 3, 3, 3, 4, 13, 14, 33, 'Yerbanis - Torre&oacute;n', '123', '250', '127', 3, '127.200 +Longitud de laderos', 'S', 'I', '1', '2019-03-26 16:37:27', 12, '2019-03-26 16:37:27', 12),
(8, 10, 5, 1, 4, 1, 5, 5, 5, 6, 12, 13, 32, 'Durango - El S&uacute;chil', '2', '102', '100', 1, '100.100+Longitud de laderos', 'S', 'I', '1', '2019-03-26 16:45:02', 12, '2019-03-26 16:45:02', 12),
(9, 4, 1, 1, 2, 2, 8, 8, 8, 9, 5, 5, 6, 'Campeche-Lim. Edos. Camp/Yuc', '722.000', '815.359', '93.359', 1, 'N/A', 'F', 'I', '1', '2019-03-27 19:30:13', 13, '2019-03-27 19:30:13', 13),
(10, 4, 2, 1, 2, 4, 13, 13, 13, 14, 5, 5, 6, 'Patio Campeche', '722.000', '0', '-722', 1, 'N/A', 'F', 'I', '1', '2019-03-27 19:50:38', 13, '2019-03-27 19:50:38', 13),
(11, 4, 3, 1, 2, 1, 2, 2, 2, 3, 5, 5, 6, 'Campeche-Becal', '722.000', '815.359', '93.359', 2, 'N/A', 'F', 'I', '1', '2019-03-27 19:54:05', 13, '2019-03-27 19:54:05', 13),
(12, 4, 4, 1, 3, 2, 8, 8, 8, 9, 5, 5, 6, 'Campeche-Lim. Edos. Camp/Tab', '722.000', '467.600', '-254.4', 1, 'N/A', 'F', 'I', '1', '2019-03-27 19:57:25', 13, '2019-03-27 19:57:25', 13),
(13, 4, 5, 1, 3, 4, 13, 13, 13, 14, 5, 5, 6, 'Candelaria', '494.100', '0', '-494.1', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:00:34', 13, '2019-03-27 20:00:34', 13),
(14, 4, 6, 1, 3, 1, 2, 2, 2, 3, 5, 5, 6, 'Campeche-Carrillo Puerto', '722.000', '615.300', '-106.7', 2, 'N/A', 'F', 'I', '1', '2019-03-27 20:02:15', 13, '2019-03-27 20:02:15', 13),
(15, 4, 7, 1, 4, 2, 8, 8, 8, 9, 5, 5, 6, 'Campeche-Lim. Edos. Camp/Yuc', '722.000', '815.359', '93.359', 1, 'Registro de Calidad: Relaci&oacute;n trimestral de trenes verificados y diagn&oacute;stico General', 'F', 'I', '1', '2019-03-27 20:04:17', 13, '2019-03-27 20:04:17', 13),
(16, 4, 8, 1, 4, 4, 13, 13, 13, 14, 5, 5, 6, 'Patio Campeche', '722.000', '0', '-722', 1, 'Registro de Calidad: Relaci&oacute;n Trimestral de equipo verificado y diagn&oacute;stico general', 'F', 'I', '1', '2019-03-27 20:05:53', 13, '2019-03-27 20:05:53', 13),
(17, 4, 9, 1, 4, 1, 2, 2, 2, 3, 5, 5, 6, 'Carrillo Puerto-Lim. Edos. Camp/Tab', '615.300', '467.6', '-147.7', 2, 'Registros de Calidad: Relaci&oacute;n de Cambios de v&iacute;a, Reaci&oacute;n de v&iacute;as particulares, Relaci&oacute;n de tramos con invasiones del derecho de v&iacute;a, Relaci&oacute;n de Edificios y estaciones, Relaci&oacute;n de cruces a nivel y relaci&oacute;n de laderos. ', 'F', 'I', '1', '2019-03-27 20:08:15', 13, '2019-03-27 20:08:15', 13),
(18, 4, 10, 1, 5, 2, 8, 8, 8, 9, 5, 5, 6, 'Campeche-Lim. Edos. Camp/Yuc', '722.000', '815.359', '93.359', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:10:55', 13, '2019-03-27 20:10:55', 13),
(19, 4, 11, 1, 5, 4, 13, 13, 13, 14, 5, 5, 6, 'Patio Campeche', '722.000', '0', '-722', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:12:49', 13, '2019-03-27 20:12:49', 13),
(20, 4, 12, 1, 5, 1, 2, 2, 2, 3, 5, 5, 6, 'Campeche-Becal', '722.000', '815.359', '93.359', 2, 'N/A', 'F', 'I', '1', '2019-03-27 20:14:02', 13, '2019-03-27 20:14:02', 13),
(21, 4, 13, 1, 6, 2, 8, 8, 8, 9, 5, 5, 6, 'Campeche-Lim. Edos. Camp/Tab', '722.000', '467.600', '-254.4', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:15:11', 13, '2019-03-27 20:15:11', 13),
(22, 4, 14, 1, 6, 4, 13, 13, 13, 14, 5, 5, 6, 'Candelaria', '494.100', '0', '-494.1', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:16:25', 13, '2019-03-27 20:16:25', 13),
(23, 4, 15, 1, 6, 1, 2, 2, 2, 3, 5, 5, 6, 'Campeche-Carrillo Puerto', '722.000', '615.300', '-106.7', 2, 'N/A', 'F', 'I', '1', '2019-03-27 20:18:05', 13, '2019-03-27 20:18:05', 13),
(24, 4, 16, 1, 7, 2, 8, 8, 8, 9, 5, 5, 6, 'Campeche-Lim. Edos. Camp/Yuc', '722.000', '815.359', '93.359', 1, 'Registro de calidad: Relaci&oacute;n trimestral de trenes verificados y diagn&oacute;stico', 'F', 'I', '1', '2019-03-27 20:20:25', 13, '2019-03-27 20:20:25', 13),
(25, 4, 17, 1, 7, 4, 13, 13, 13, 14, 5, 5, 6, 'Patio Campeche', '722.000', '0', '-722', 1, 'Registgro de calidad: Relaci&oacute;n trimestral de equipo verificado y diagn&oacute;stico', 'F', 'I', '1', '2019-03-27 20:21:52', 13, '2019-03-27 20:21:52', 13),
(26, 4, 18, 1, 7, 1, 2, 2, 2, 3, 5, 5, 6, 'Carrillo Puerto-Lim. Edos. Camp/Tab', '615.300', '467.600', '-147.7', 2, 'Registro de calidad: Relaci&oacute;n de Puentes y Alcantarillas y diagn&oacute;stico', 'F', 'I', '1', '2019-03-27 20:24:53', 13, '2019-03-27 20:24:53', 13),
(27, 4, 19, 1, 8, 2, 8, 8, 8, 9, 5, 5, 6, 'Campeche-Lim. Edos. Camp/Yuc', '722.000', '815.359', '93.359', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:27:42', 13, '2019-03-27 20:27:42', 13),
(28, 4, 20, 1, 8, 1, 2, 2, 2, 3, 5, 5, 6, 'Subdivisi&oacute;n Tenosique', '495.00', '510.00', '15', 1, 'Curvatura m&aacute;xima 4&deg;18&acute;, pendiente m&aacute;xima 1.03% al Norte. Laderos de encuentro Candelaria y Miguel Alem&aacute;n', 'F', 'I', '1', '2019-03-27 20:31:28', 13, '2019-03-27 20:31:28', 13),
(29, 4, 21, 1, 8, 1, 2, 2, 2, 3, 5, 5, 6, 'Patio Campeche', '720.000', '728.000', '8', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:33:55', 13, '2019-03-27 20:33:55', 13),
(30, 4, 22, 1, 9, 2, 8, 8, 8, 9, 5, 5, 6, 'Campeche-Lim. Edos. Camp/Tab', '722.000', '467.600', '-254.4', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:35:32', 13, '2019-03-27 20:35:32', 13),
(31, 4, 23, 1, 9, 1, 2, 2, 2, 3, 5, 5, 6, 'Subdivisi&oacute;n Tenosique ', '530.000', '560.000', '30', 1, 'Curvatura m&aacute;xima 5&deg;, pendiente m&aacute;xima al Norte 1.08%. Laderos de encuentro Haro y Escarcega.', 'F', 'I', '1', '2019-03-27 20:37:12', 13, '2019-03-27 20:37:12', 13),
(32, 4, 24, 1, 9, 1, 2, 2, 2, 3, 5, 5, 6, 'Patio Escarcega', '554.000', '558.000', '4', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:38:32', 13, '2019-03-27 20:38:32', 13),
(33, 4, 25, 1, 10, 2, 8, 8, 8, 9, 5, 5, 6, 'Campeche-Lim. Edos. Camp/Yuc', '722.000', '815.359', '93.359', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:40:53', 13, '2019-03-27 20:40:53', 13),
(34, 4, 26, 1, 10, 1, 2, 2, 2, 3, 5, 5, 6, 'Subdivisdi&oacute;n ', '725.000', '680.00', '-45', 2, 'Curvatura m&aacute;xima 6&deg;, pendiente m&aacute;xima al Norte 1%. Laderos de encuentro Huayamon y Campeche.', 'F', 'I', '1', '2019-03-27 20:42:36', 13, '2019-03-27 20:42:36', 13),
(35, 4, 27, 1, 10, 1, 2, 2, 2, 3, 5, 5, 7, 'Ramal a Lerma, En desuso', '0', '9.042', '9.042', 2, 'N/A', 'F', 'I', '1', '2019-03-27 20:44:33', 13, '2019-03-27 20:44:33', 13),
(36, 4, 28, 1, 11, 2, 8, 8, 8, 9, 5, 5, 6, 'Campeche-Lim. Edos. Camp/Yuc', '722.000', '815.359', '93.359', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:45:45', 13, '2019-03-27 20:45:45', 13),
(37, 4, 29, 1, 11, 1, 2, 2, 2, 3, 5, 5, 6, 'Campeche-Becal', '722.000', '815.359', '93.359', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:47:04', 13, '2019-03-27 20:47:04', 13),
(38, 4, 30, 1, 11, 1, 2, 2, 2, 3, 5, 5, 6, 'Campeche-Carrillo Puerto', '722.000', '615.300', '-106.7', 1, 'N/A', 'F', 'I', '1', '2019-03-27 20:48:07', 13, '2019-03-27 20:48:07', 13),
(39, 4, 31, 1, 11, 1, 2, 2, 2, 3, 5, 5, 6, 'Campeche-Carrillo Puerto', '722.000', '615.300', '-106.7', 1, 'N/A', 'F', 'I', '1', '2019-03-27 23:22:29', 13, '2019-03-27 23:22:29', 13),
(40, 4, 32, 1, 12, 1, 2, 2, 2, 3, 5, 5, 6, ' Zona Urbana', '717.00', '729.000', '12', 1, 'N/A', 'F', 'I', '1', '2019-03-27 23:24:11', 13, '2019-03-27 23:24:11', 13),
(41, 1, 4, 1, 2, 1, 4, 4, 4, 5, 1, 1, 1, 'jocoso 500', '5000', '3000', '-2000', 1, 'n/a', 'F', 'I', '1', '2019-04-12 15:52:16', 8, '2019-04-12 15:52:16', 8),
(42, 10, 6, 1, 1, 1, 2, 2, 2, 3, 12, 13, 32, 'js 500', '5000', '6000', '1000', 1, 'na', 'S', 'I', '1', '2019-04-16 17:29:28', 12, '2019-04-16 17:29:28', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vgcf`
--

DROP TABLE IF EXISTS `vgcf`;
CREATE TABLE IF NOT EXISTS `vgcf` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_empresa` varchar(10) NOT NULL,
  `vgcf` varchar(80) NOT NULL,
  `concesion` text NOT NULL,
  `servicios_t` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vgcf`
--

INSERT INTO `vgcf` (`id`, `id_empresa`, `vgcf`, `concesion`, `servicios_t`) VALUES
(1, '1', 'Nte', 'V&icute;a Troncal del Noreste', '0'),
(2, '2', 'PNte', 'V&icute;a Troncal Pac&icute;fico Norte', '0'),
(3, '2', 'OT', 'V&icute;a Corta Ojinaga Topolobampo', '1'),
(4, '2', 'NAC', 'V&icute;a Corta Nacozari', '0'),
(5, '3', 'Ste', 'V&icute;a Troncal del Sureste', '0'),
(6, '3', 'OS', 'Via Corta Oaxaca y Sur', '0'),
(7, '4', 'VGCFVM', 'Del Valle de M&ecute;xico', '0'),
(8, '5', 'CD', 'Via Corta Coahuila - Durango', '0'),
(9, '6', 'IT', 'V&icute;a Troncal Itsmo de Tehuantepec', '0'),
(10, '6', 'VCO', 'V&icute;a Corta Oaxaca', '0'),
(11, '7', 'VCTT', 'V&icute;a Corta Tijuna - Tecate', '1'),
(12, '8', 'VGCFRC-B', 'SPTF de Pasajeros en la modalidad de regular Suburbano en la ruta: Cuautitl&acute;n - Buenavista ', '2'),
(13, '9', 'CHOPU', 'SPTF de Pasajeros en la modalidad de regular urbano y especial tur&icute;stico en la ruta: Puebla - Cholula ', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vgcf_edo`
--

DROP TABLE IF EXISTS `vgcf_edo`;
CREATE TABLE IF NOT EXISTS `vgcf_edo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_vgcf` int(10) NOT NULL,
  `estado` varchar(4) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vgcf_edo`
--

INSERT INTO `vgcf_edo` (`id`, `id_vgcf`, `estado`, `nombre`) VALUES
(2, 1, 'AGU', 'AGUASCALIENTES'),
(3, 1, 'COA', 'COAHUILA DE ZARAGOZA'),
(4, 1, 'GUA', 'GUANAJUATO'),
(5, 1, 'HID', 'HIDALGO'),
(6, 1, 'MEX', 'ESTADO DE MEXICO'),
(7, 1, 'MIC', 'MICHOACAN DE OCAMPO'),
(8, 1, 'NLE', 'NUEVO LEON'),
(9, 1, 'PUE', 'PUEBLA'),
(10, 1, 'QUE', 'QUERETARO'),
(11, 1, 'SLP', 'SAN LUIS POTOSI	'),
(12, 1, 'TAM', 'TAMAULIPAS'),
(13, 1, 'TLA', 'TLAXCALA'),
(14, 1, 'VER', 'VERACRUZ DE IGNACIO DE LA LLAVE'),
(15, 1, 'ZAC', 'ZACATECAS'),
(16, 2, 'AGU', 'AGUASCALIENTES'),
(17, 2, 'BCN', 'BAJA CALIFORNIA'),
(18, 2, 'CHH', 'CHIHUAHUA'),
(19, 2, 'COA', 'COAHUILA DE ZARAGOZA'),
(20, 2, 'COL', 'COLIMA'),
(21, 2, 'DUR', 'DURANGO'),
(22, 2, 'GUA', 'GUANAJUATO'),
(23, 2, 'HID', 'HIDALGO'),
(24, 2, 'JAL', 'JALISCO'),
(25, 2, 'MEX', 'ESTADO DE MEXICO'),
(26, 2, 'MIC', 'MICHOACAN DE OCAMPO'),
(27, 2, 'NAY', 'NAYARIT'),
(28, 2, 'NLE', 'NUEVO LEON'),
(29, 2, 'QUE', 'QUERETARO'),
(30, 2, 'SIN', 'SINALOA'),
(31, 2, 'SON', 'SONORA'),
(32, 2, 'TAM', 'TAMAULIPAS'),
(33, 2, 'ZAC', 'ZACATECAS'),
(34, 3, 'CHH', 'CHIHUAHUA'),
(35, 3, 'SIN', 'SINALOA'),
(36, 4, 'SON', 'SONORA'),
(37, 5, 'HID', 'HIDALGO'),
(38, 5, 'MEX', 'ESTADO DE MEXICO'),
(39, 5, 'OAX', 'OAXACA'),
(40, 5, 'PUE', 'PUEBLA'),
(41, 5, 'TLA', 'TLAXCALA'),
(42, 5, 'VER', 'VERACRUZ DE IGNACIO DE LA LLAVE'),
(43, 6, 'MEX', 'ESTADO DE MEXICO'),
(44, 6, 'MOR', 'MORELOS'),
(45, 6, 'TLA', 'TLAXCALA'),
(46, 7, 'CMX', 'CIUDAD DE MEXICO'),
(47, 7, 'MEX', 'ESTADO DE MEXICO'),
(48, 8, 'CHH', 'CHIHUAHUA'),
(49, 8, 'COA', 'COAHUILA DE ZARAGOZA'),
(50, 8, 'DUR', 'DURANGO'),
(51, 8, 'ZAC', 'ZACATECAS'),
(52, 9, 'CAM', 'CAMPECHE'),
(53, 9, 'CHP', 'CHIAPAS'),
(54, 9, 'OAX', 'OAXACA'),
(55, 9, 'TAB', 'TABASCO'),
(56, 9, 'VER', 'VERACRUZ DE IGNACIO DE LA LLAVE'),
(57, 9, 'YUC', 'YUCATAN'),
(58, 10, 'OAX', 'OAXACA'),
(59, 10, 'PUE', 'PUEBLA'),
(60, 11, 'BCN', 'BAJA CALIFORNIA'),
(61, 12, 'CMX', 'CIUDAD DE MEXICO'),
(62, 12, 'MEX', 'ESTADO DE MEXICO'),
(63, 13, 'PUE', 'PUEBLA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vgcf_piv`
--

DROP TABLE IF EXISTS `vgcf_piv`;
CREATE TABLE IF NOT EXISTS `vgcf_piv` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_emp` int(10) NOT NULL,
  `vgcf` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vgcf_piv`
--

INSERT INTO `vgcf_piv` (`id`, `id_emp`, `vgcf`) VALUES
(1, 1, 'PNte'),
(2, 2, 'Nte'),
(3, 3, 'PNte'),
(4, 4, 'VCTT'),
(5, 5, 'IT'),
(6, 6, 'VGCFVM'),
(7, 7, 'IT'),
(8, 8, 'OT'),
(9, 8, 'PNte'),
(10, 9, 'PNte'),
(11, 10, 'CD'),
(12, 11, 'PNte'),
(13, 12, 'CD'),
(14, 13, 'CD'),
(15, 14, 'VGCFVM'),
(16, 15, 'Nte'),
(17, 16, 'OS'),
(18, 16, 'Ste'),
(19, 17, 'PNte'),
(20, 18, 'PNte'),
(21, 19, 'Nte'),
(22, 20, 'PNte'),
(23, 21, 'Nte'),
(24, 22, 'Ste'),
(25, 22, 'OS'),
(26, 23, 'PNte'),
(27, 24, 'Nte'),
(28, 25, 'PNte'),
(29, 26, 'OS'),
(30, 27, 'PNte'),
(31, 28, 'PNte'),
(32, 29, 'Nte'),
(33, 30, 'IT'),
(34, 31, 'Ste'),
(35, 32, 'Ste'),
(36, 33, 'Nte'),
(37, 34, 'Nte'),
(38, 35, 'PNte'),
(39, 36, 'Nte'),
(40, 37, 'PNte'),
(41, 38, 'IT'),
(42, 39, 'Nte'),
(43, 40, 'PNte'),
(44, 41, 'Ste'),
(45, 41, 'OS'),
(46, 42, 'Nte'),
(47, 43, 'Ste'),
(48, 44, 'IT'),
(49, 45, 'IT'),
(50, 46, 'PNte'),
(51, 47, 'Nte'),
(52, 48, 'CD'),
(53, 49, 'PNte'),
(54, 50, 'CD'),
(55, 51, 'PNte'),
(56, 52, 'Nte'),
(57, 53, 'PNte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vias_a`
--

DROP TABLE IF EXISTS `vias_a`;
CREATE TABLE IF NOT EXISTS `vias_a` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_centro` varchar(45) NOT NULL,
  `linea` varchar(4) NOT NULL,
  `km_ini` varchar(45) NOT NULL,
  `km_fin` varchar(45) NOT NULL,
  `total_km` varchar(45) NOT NULL,
  `tipo_v` varchar(45) NOT NULL,
  `vgcf` varchar(45) NOT NULL,
  `empresa_f` varchar(45) NOT NULL,
  `infra_estra` text NOT NULL,
  `ubicacion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vias_a`
--

INSERT INTO `vias_a` (`id`, `id_centro`, `linea`, `km_ini`, `km_fin`, `total_km`, `tipo_v`, `vgcf`, `empresa_f`, `infra_estra`, `ubicacion`) VALUES
(2, 'SCT_DUR', 'DB', '4.070', '4.750', '0.680', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(3, 'SCT_DUR', 'DB', '15.534', '15.803', '0.169', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(4, 'SCT_DUR', 'DC', '33.813', '34.450', '0.637', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(5, 'SCT_DUR', 'DC', '60.754', '61.437', '0.683', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(6, 'SCT_DUR', 'DC', '87.229', '87.830', '0.601', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(7, 'SCT_DUR', 'DC', '100.680', '101.272', '0.592', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(8, 'SCT_DUR', 'DA', '6.998', '9.320', '2.322', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(9, 'SCT_DUR', 'DA', '37.558', '38.550', '0.992', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(10, 'SCT_DUR', 'DA', '53.901', '55.089', '1.188', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(11, 'SCT_DUR', 'DA', '76.245', '77.06', '0.815', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(12, 'SCT_DUR', 'DA', '122.903', '124.048', '1.145', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(13, 'SCT_DUR', 'DA', '172.973', '173.518', '0.545', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(14, 'SCT_DUR', 'DA', '208.774', '209.77', '0.996', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(15, 'SCT_DUR', 'DA', '208.817', '209.728', '0.911', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(16, 'SCT_DUR', 'DA', '228.167', '229.179', '1.012', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(17, 'SCT_DUR', 'DA', '228.245', '228.927', '0.682', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango, S.A. de C.V.', '', ''),
(18, 'SCT_DUR', 'A', '978.877', '981.627', '2.75', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(19, 'SCT_DUR', 'A', '1094.141', '1096.771', '2.63', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(20, 'SCT_DUR', 'A', '1104.144', '1106.894', '2.75', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(21, 'SCT_DUR', 'A', '1144.644', '1147.394', '2.75', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(22, 'SCT_DUR', 'A', '1177.739', '1179.652', '1.913', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(23, 'SCT_DUR', 'A', '1202.318', '1204.671', '2.353', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(24, 'SCT_DUR', 'A', '1246.651', '1248.258', '1.607', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(25, 'SCT_DUR', 'A', '1264.195', '1266.945', '2.75', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(26, 'SCT_DUR', 'A', '1284.31', '1285.939', '1.629', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(27, 'SCT_DUR', 'M', '871.322', '872.99', '1.668', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(28, 'SCT_DUR', 'M', '879.257.6', '882.100.4', '2.8428', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(29, 'SCT_DUR', 'M', '887.169', '887.969', '0.8', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(31, 'SCT_TAM', 'B', '1271+756', '1273+985', '81.127', 'ELASTICA', 'FERROCARRIL DEL NORESTE', 'KANSAS CITY SOUTHERN DE MEXICO, S.A. C.V.', 'PATIO SANCHEZ (IMPORTACI&Oacute;N)', 'B-1271+756 '),
(32, 'SCT_TAM', 'BJ-L', '12+766', '13+900', '11.340', 'CLASICA', 'FERROCARRIL DEL NORESTE', 'KANSAS CITY SOUTHERN DE MEXICO, S.A. C.V.', 'PATIO DE EXPORTACI&Oacute;N', 'BJ-12+766 '),
(33, 'SCT_TAM', 'BJ-L', '8+055', '10+908', '8.559', 'CLASICA', 'FERROCARRIL DEL NORESTE', 'KANSAS CITY SOUTHERN DE MEXICO, S.A. C.V.', 'LADEROS VIAS LARGAS', 'BJ-8+055'),
(34, 'SCT_TAM', 'FK', '0+000', '10+908', '10.900', 'ELASTICA', 'FERROCARRIL DEL NORESTE', 'KANSAS CITY SOUTHERN DE MEXICO, S.A. C.V.', 'VIA PRINCIPAL FK', 'FK-10+908'),
(35, 'SCT_TAM', 'FK-P', '1+300', '5+800', '20.300', 'CLASICA', 'FERROCARRIL DEL NORESTE', 'KANSAS CITY SOUTHERN DE MEXICO, S.A. C.V.', 'PATIO FK', 'PATIO FK-1+300 '),
(36, 'SCT_TAM', 'LADE', '160+570', '323+507', '31.430', 'CLASICA', 'FERROCARRIL DEL NORESTE', 'KANSAS CITY SOUTHERN DE MEXICO, S.A. C.V.', 'LADEROS VIA  \"F\"', 'LADEROS F-160+570'),
(37, 'SCT_TAM', 'L', '667+963', '669+093', '11.636', 'CLASICA', 'FERROCARRIL DEL NORESTE', 'KANSAS CITY SOUTHERN DE MEXICO, S.A. C.V.', 'PATIO TAMPICO', 'L-667+963'),
(38, 'SCT_TAM', 'L', '673+066', '675+270', '23.641', 'CLASICA', 'FERROCARRIL DEL NORESTE', 'KANSAS CITY SOUTHERN DE MEXICO, S.A. C.V.', 'PATIO DO&Ntilde;A CECILIA', 'L-673+066'),
(39, 'SCT_TAM', 'M-PA', '14+000', '16+331', '9.340', 'CLASICA', 'FERROCARRIL PACIFICO-NORTE', 'FERROCARRIL MEXICANO, S.A. C.V.', 'PATIO MIRAMAR', 'M-14+000'),
(40, 'SCT_TAM', 'M-PA', '234+00', '234+660', '1.980', 'CLASICA', 'FERROCARRIL PACIFICO-NORTE', 'FERROCARRIL MEXICANO, S.A. C.V.', 'PATIO CD. VICTORIA,TAM', 'M-234+000'),
(41, 'SCT_TAM', 'LADE', '38+965', '310+087', '16.558', 'CLASICA', 'FERROCARRIL PACIFICO-NORTE', 'FERROCARRIL MEXICANO, S.A. C.V.', 'LADEROS VIA \"M\"', 'M-38+965'),
(42, 'SCT_TAM', 'MB-P', '16+526', '17+681', '3.465', 'ELASTICA', 'FERROCARRIL PACIFICO-NORTE', 'FERROCARRIL MEXICANO, S.A. C.V.', 'PATIO PTO. INDUS. ALTAMIR', 'MB-16+526 '),
(43, 'SCT_TAM', 'LADE', '2+000 ', '3+850', '2.800', 'CLASICA', 'FERROCARRIL PACIFICO-NORTE', 'FERROCARRIL MEXICANO, S.A. C.V.', 'LADERO VIA \"MB\"', 'MB-2+000 '),
(44, 'SCT_TAM', 'LADE', ' 6+327', '9+074', '2.747', 'CLASICA', 'FERROCARRIL PACIFICO-NORTE', 'FERROCARRIL MEXICANO, S.A. C.V.', 'LADERO VIA \"MB\"', 'MB-6+327');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vias_ap`
--

DROP TABLE IF EXISTS `vias_ap`;
CREATE TABLE IF NOT EXISTS `vias_ap` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_centro` varchar(45) NOT NULL,
  `linea` varchar(4) NOT NULL,
  `km_ini` varchar(45) NOT NULL,
  `km_fin` varchar(45) NOT NULL,
  `total_km` varchar(45) NOT NULL,
  `tipo_v` varchar(45) NOT NULL,
  `vgcf` varchar(45) NOT NULL,
  `empresa_f` varchar(45) NOT NULL,
  `infra_estra` text NOT NULL,
  `ubicacion` text NOT NULL,
  `subtotal_km` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vias_ap`
--

INSERT INTO `vias_ap` (`id`, `id_centro`, `linea`, `km_ini`, `km_fin`, `total_km`, `tipo_v`, `vgcf`, `empresa_f`, `infra_estra`, `ubicacion`, `subtotal_km`) VALUES
(1, 'SCT_TAM', 'MA', '0+000', '87+000', '87.00', 'CLASICA', 'FERROCARRIL PACIFICO-NORTE', 'FERROCARRIL MEXICANO, S.A. C.V.', 'CONEXI&Oacute;N \"Y\" ESTACION CALLES ', 'FRENTE AL M-140+200 ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vias_p`
--

DROP TABLE IF EXISTS `vias_p`;
CREATE TABLE IF NOT EXISTS `vias_p` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_centro` varchar(45) NOT NULL,
  `linea` varchar(4) NOT NULL,
  `km_ini` varchar(45) NOT NULL,
  `km_fin` varchar(45) NOT NULL,
  `total_km` varchar(45) NOT NULL,
  `tipo_v` varchar(45) NOT NULL,
  `vgcf` varchar(45) NOT NULL,
  `empresa_f` varchar(45) NOT NULL,
  `infra_estra` text NOT NULL,
  `ubicacion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vias_p`
--

INSERT INTO `vias_p` (`id`, `id_centro`, `linea`, `km_ini`, `km_fin`, `total_km`, `tipo_v`, `vgcf`, `empresa_f`, `infra_estra`, `ubicacion`) VALUES
(2, 'SCT_DUR', 'DB', '5.539', '5.742', '0.203', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango. S.A. de C.V.', '', ''),
(3, 'SCT_DUR', 'DC', '2.992', '3.279', '0.287', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango. S.A. de C.V.', '', ''),
(4, 'SCT_DUR', 'DC', '26.369', '27.261', '0.892', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango. S.A. de C.V.', '', ''),
(5, 'SCT_DUR', 'DC', '87.057', '87.374', '0.317', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango. S.A. de C.V.', '', ''),
(6, 'SCT_DUR', 'DA', '240.477', '242.212', '1.716', 'CLASICA', 'LCD', 'L&iacute;nea Coahuila Durango. S.A. de C.V.', '', ''),
(7, 'SCT_DUR', 'M', '883.805', '885.345.83', '1.540', 'CLASICA', 'PNTE', 'Ferrocarril Mexicano, S.A. de C.V.', '', ''),
(8, 'SCT_TAM', 'MC', '0+000', '5+664', '5.664', 'ELASTICA', 'FERROCARRIL PACIFICO-NORTE', 'MEXPLUS, S.A. DE C.V.-VOPAK MEXICO,S.A.C.V.', 'VIA PINCIPAL \"MC\" Y CONEXI&Oacute;N \"MB\"', 'CONEXI&Oacute;N MB-9+300=MB-0+000');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_actanotificacion`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vista_actanotificacion`;
CREATE TABLE IF NOT EXISTS `vista_actanotificacion` (
`id` int(10)
,`id_centro` varchar(40)
,`mes` varchar(40)
,`area_ver` int(10) unsigned
,`vgcf` int(10) unsigned
,`empresa` int(10) unsigned
,`tramo` text
,`linea` varchar(4)
,`km_ini` varchar(20)
,`km_fin` varchar(20)
,`objeto_ver` text
,`folio_notifica` varchar(45)
,`estatus_ver` varchar(45)
,`estatus_gen` varchar(45)
,`lugar` text
,`fecha` date
,`hora` varchar(10)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_verificaciones`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vista_verificaciones`;
CREATE TABLE IF NOT EXISTS `vista_verificaciones` (
`id_ver` int(10)
,`id_centro` int(10)
,`lugar` text
,`fecha` date
,`fecha_f` date
,`hora` varchar(10)
,`verificador` int(10)
,`estatus` varchar(10)
,`numero_ver` int(10)
,`mes_ver` int(10)
,`area_ver` int(10)
,`vgcf` int(10)
,`linea` int(10)
,`empresa` int(10)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_actanotificacion`
--
DROP TABLE IF EXISTS `vista_actanotificacion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_actanotificacion`  AS  select `descripcion_ver`.`id` AS `id`,`descripcion_ver`.`id_centro` AS `id_centro`,`descripcion_ver`.`mes` AS `mes`,`descripcion_ver`.`area_ver` AS `area_ver`,`descripcion_ver`.`vgcf` AS `vgcf`,`descripcion_ver`.`empresa` AS `empresa`,`descripcion_ver`.`tramo` AS `tramo`,`descripcion_ver`.`linea` AS `linea`,`descripcion_ver`.`km_ini` AS `km_ini`,`descripcion_ver`.`km_fin` AS `km_fin`,`descripcion_ver`.`objeto_ver` AS `objeto_ver`,`descripcion_ver`.`folio_notifica` AS `folio_notifica`,`actas_not`.`estatus_ver` AS `estatus_ver`,`actas_not`.`estatus_gen` AS `estatus_gen`,`detalle_cal`.`lugar` AS `lugar`,`detalle_cal`.`fecha` AS `fecha`,`detalle_cal`.`hora` AS `hora` from ((`descripcion_ver` join `actas_not` on((`descripcion_ver`.`vgcf` = `actas_not`.`vgcf`))) join `detalle_cal` on(((`descripcion_ver`.`vgcf` = `detalle_cal`.`vgcf`) and (`descripcion_ver`.`id` = `actas_not`.`id_ver`)))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_verificaciones`
--
DROP TABLE IF EXISTS `vista_verificaciones`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_verificaciones`  AS  select `detalle_cal`.`id_ver` AS `id_ver`,`detalle_cal`.`id_centro` AS `id_centro`,`detalle_cal`.`lugar` AS `lugar`,`detalle_cal`.`fecha` AS `fecha`,`detalle_cal`.`fecha_f` AS `fecha_f`,`detalle_cal`.`hora` AS `hora`,`detalle_cal`.`verificador` AS `verificador`,`detalle_cal`.`estatus` AS `estatus`,`verificaciones_pro`.`numero_ver` AS `numero_ver`,`verificaciones_pro`.`mes_ver` AS `mes_ver`,`verificaciones_pro`.`area_ver` AS `area_ver`,`verificaciones_pro`.`vgcf` AS `vgcf`,`verificaciones_pro`.`linea` AS `linea`,`verificaciones_pro`.`empresa` AS `empresa` from (`detalle_cal` join `verificaciones_pro` on((`detalle_cal`.`id_ver` = `verificaciones_pro`.`id`))) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
