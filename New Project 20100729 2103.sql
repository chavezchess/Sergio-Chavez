-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.33-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema notas2010
--

CREATE DATABASE IF NOT EXISTS notas2010;
USE notas2010;

--
-- Definition of table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno` (
  `ALUM_RUT` varchar(13) NOT NULL,
  `JORN_ID` double NOT NULL,
  `CARR_ID` double NOT NULL,
  `ALUM_NOMBRE` varchar(70) NOT NULL,
  `ALUM_FNAC` varchar(10) NOT NULL,
  `ALUM_CIUDAD` varchar(70) NOT NULL,
  `ALUM_DIRECCION` varchar(70) NOT NULL,
  `ALUM_FONO` varchar(13) NOT NULL,
  `ALUM_FOTO` varchar(45) NOT NULL,
  `ALUM_INGRESO` varchar(6) NOT NULL DEFAULT '0',
  `ALUM_PROCED` varchar(70) NOT NULL,
  PRIMARY KEY (`ALUM_RUT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumno`
--

/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;


--
-- Definition of table `alumno_asignatura`
--

DROP TABLE IF EXISTS `alumno_asignatura`;
CREATE TABLE `alumno_asignatura` (
  `ASIG_ID` double NOT NULL DEFAULT '0',
  `ALUM_RUT` varchar(13) NOT NULL DEFAULT '0',
  `JORN_ID` double NOT NULL DEFAULT '0',
  `ALUM_AÑOCURSADO` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ALUM_RUT`,`ASIG_ID`,`JORN_ID`,`ALUM_AÑOCURSADO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumno_asignatura`
--

/*!40000 ALTER TABLE `alumno_asignatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumno_asignatura` ENABLE KEYS */;


--
-- Definition of table `alumno_carrera`
--

DROP TABLE IF EXISTS `alumno_carrera`;
CREATE TABLE `alumno_carrera` (
  `ALUM_RUT` varchar(13) DEFAULT NULL,
  `CARR_ID` double DEFAULT NULL,
  KEY `FK_ALUMNO_C_REFERENCE_CARRERA` (`CARR_ID`),
  CONSTRAINT `FK_ALUMNO_C_REFERENCE_CARRERA` FOREIGN KEY (`CARR_ID`) REFERENCES `carrera` (`CARR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumno_carrera`
--

/*!40000 ALTER TABLE `alumno_carrera` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumno_carrera` ENABLE KEYS */;


--
-- Definition of table `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
CREATE TABLE `asignatura` (
  `ASIG_ID` double NOT NULL AUTO_INCREMENT,
  `SEME_ID` double NOT NULL,
  `ASIG_NOMBRE` varchar(70) NOT NULL,
  `CARR_ID` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`ASIG_ID`),
  KEY `FK_ASIGNATU_REFERENCE_SEMESTRE` (`SEME_ID`),
  CONSTRAINT `FK_ASIGNATU_REFERENCE_SEMESTRE` FOREIGN KEY (`SEME_ID`) REFERENCES `semestre` (`SEME_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asignatura`
--

/*!40000 ALTER TABLE `asignatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `asignatura` ENABLE KEYS */;


--
-- Definition of table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
CREATE TABLE `carrera` (
  `CARR_ID` double NOT NULL AUTO_INCREMENT,
  `CARR_NOMBRE` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`CARR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrera`
--

/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;


--
-- Definition of table `jornada`
--

DROP TABLE IF EXISTS `jornada`;
CREATE TABLE `jornada` (
  `JORN_ID` double NOT NULL AUTO_INCREMENT,
  `JORN_NOMBRE` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`JORN_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jornada`
--

/*!40000 ALTER TABLE `jornada` DISABLE KEYS */;
INSERT INTO `jornada` (`JORN_ID`,`JORN_NOMBRE`) VALUES 
 (1,'Diurna'),
 (2,'Vespertina ');
/*!40000 ALTER TABLE `jornada` ENABLE KEYS */;


--
-- Definition of table `nota`
--

DROP TABLE IF EXISTS `nota`;
CREATE TABLE `nota` (
  `PROF_RUT` varchar(13) NOT NULL,
  `ASIG_ID` double DEFAULT NULL,
  `SEME_ID` double DEFAULT NULL,
  `ALUM_RUT` varchar(13) NOT NULL,
  `NOTA_PROMEDIO` varchar(3) DEFAULT NULL,
  `ALUM_AÑOCURSADO` varchar(50) NOT NULL,
  `JORN_ID` double NOT NULL,
  PRIMARY KEY (`PROF_RUT`,`ALUM_RUT`,`JORN_ID`,`ALUM_AÑOCURSADO`) USING BTREE,
  KEY `FK_NOTA_REFERENCE_ASIGNATU` (`ASIG_ID`),
  KEY `FK_NOTA_REFERENCE_SEMESTRE` (`SEME_ID`),
  KEY `FK_NOTA_REFERENCE_PROFESOR` (`PROF_RUT`),
  CONSTRAINT `FK_NOTA_REFERENCE_ASIGNATU` FOREIGN KEY (`ASIG_ID`) REFERENCES `asignatura` (`ASIG_ID`),
  CONSTRAINT `FK_NOTA_REFERENCE_PROFESOR` FOREIGN KEY (`PROF_RUT`) REFERENCES `profesor` (`PROF_RUT`),
  CONSTRAINT `FK_NOTA_REFERENCE_SEMESTRE` FOREIGN KEY (`SEME_ID`) REFERENCES `semestre` (`SEME_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

/*!40000 ALTER TABLE `nota` DISABLE KEYS */;
/*!40000 ALTER TABLE `nota` ENABLE KEYS */;


--
-- Definition of table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE `profesor` (
  `PROF_RUT` varchar(13) NOT NULL,
  `CARR_ID` double NOT NULL,
  `PROF_NOMBRE` varchar(70) NOT NULL,
  `PROF_DIRECCION` varchar(70) NOT NULL,
  `PROF_IMAGEN` varchar(30) NOT NULL,
  PRIMARY KEY (`PROF_RUT`),
  KEY `FK_PROFESOR_REFERENCE_CARRERA` (`CARR_ID`),
  CONSTRAINT `FK_PROFESOR_REFERENCE_CARRERA` FOREIGN KEY (`CARR_ID`) REFERENCES `carrera` (`CARR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profesor`
--

/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;


--
-- Definition of table `profesor_asignatura`
--

DROP TABLE IF EXISTS `profesor_asignatura`;
CREATE TABLE `profesor_asignatura` (
  `PROF_RUT` varchar(13) NOT NULL DEFAULT '0',
  `ASIG_ID` double NOT NULL DEFAULT '0',
  `JORN_ID` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`JORN_ID`,`ASIG_ID`,`PROF_RUT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profesor_asignatura`
--

/*!40000 ALTER TABLE `profesor_asignatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesor_asignatura` ENABLE KEYS */;


--
-- Definition of table `semestre`
--

DROP TABLE IF EXISTS `semestre`;
CREATE TABLE `semestre` (
  `SEME_ID` double NOT NULL AUTO_INCREMENT,
  `SEME_NOMBRE` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`SEME_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semestre`
--

/*!40000 ALTER TABLE `semestre` DISABLE KEYS */;
INSERT INTO `semestre` (`SEME_ID`,`SEME_NOMBRE`) VALUES 
 (1,'1º Semestre '),
 (2,'2º Semestre'),
 (3,'3º Semestre'),
 (4,'4º Semestre'),
 (5,'5º Semestre'),
 (6,'6º Semestre');
/*!40000 ALTER TABLE `semestre` ENABLE KEYS */;


--
-- Definition of table `tipo_usuarios`
--

DROP TABLE IF EXISTS `tipo_usuarios`;
CREATE TABLE `tipo_usuarios` (
  `tipo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_tipo` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tipo_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_usuarios`
--

/*!40000 ALTER TABLE `tipo_usuarios` DISABLE KEYS */;
INSERT INTO `tipo_usuarios` (`tipo_id`,`tipo_tipo`) VALUES 
 (1,'Administrador'),
 (2,'Profesor'),
 (3,'Alumno');
/*!40000 ALTER TABLE `tipo_usuarios` ENABLE KEYS */;


--
-- Definition of table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `descripcion` text,
  `email` varchar(45) NOT NULL,
  `fecha` varchar(45) NOT NULL,
  `tipo_id` varchar(45) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`,`usuario`,`password`,`descripcion`,`email`,`fecha`,`tipo_id`) VALUES 
 (1,'manuel','123',NULL,'m@j.com','24-07-10','Administrador');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
