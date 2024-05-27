-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: formulario
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `estructuras`
--

DROP TABLE IF EXISTS `estructuras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estructuras` (
  `id_estructura` int NOT NULL AUTO_INCREMENT,
  `id_solicitud` int DEFAULT NULL,
  `servidor_BD` tinyint DEFAULT '0',
  `servidor_web` tinyint DEFAULT '0',
  `servidor_app` tinyint DEFAULT '0',
  `BD` tinyint DEFAULT '0',
  `otros` tinyint DEFAULT '0',
  PRIMARY KEY (`id_estructura`),
  KEY `fk_solicitud_idx` (`id_solicitud`),
  CONSTRAINT `fk_solicitud` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estructuras`
--

LOCK TABLES `estructuras` WRITE;
/*!40000 ALTER TABLE `estructuras` DISABLE KEYS */;
INSERT INTO `estructuras` VALUES (7,15,1,1,0,0,0);
/*!40000 ALTER TABLE `estructuras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud`
--

DROP TABLE IF EXISTS `solicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solicitud` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha_solicitud` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_registro` datetime DEFAULT CURRENT_TIMESTAMP,
  `nombre_solicitante` varchar(45) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `descripcion_cambio` varchar(100) DEFAULT NULL,
  `justificacion` varchar(100) DEFAULT NULL,
  `nombre_validador` varchar(50) DEFAULT NULL,
  `nombre_autorizador` varchar(50) DEFAULT NULL,
  `motivo_rechazo` varchar(100) DEFAULT NULL,
  `responsable_cambio` varchar(45) DEFAULT NULL,
  `descripcion_accion` varchar(100) DEFAULT NULL,
  `fecha_cambio` datetime DEFAULT CURRENT_TIMESTAMP,
  `estado` tinyint DEFAULT NULL,
  `tipo_cambio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud`
--

LOCK TABLES `solicitud` WRITE;
/*!40000 ALTER TABLE `solicitud` DISABLE KEYS */;
INSERT INTO `solicitud` VALUES (15,'2024-05-27 01:43:26','2024-05-27 01:43:26','Juan Perez','Software','Se necesita cambiar de arquitectura ','Se necesita escalabilidad','Eduardo Perez','Lucio Ramirez','','Ernesto Contreras','Se cambiara la arquitectura del programa','2024-05-27 01:43:26',1,'estandar');
/*!40000 ALTER TABLE `solicitud` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-27  3:37:39
