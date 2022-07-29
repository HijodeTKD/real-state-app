-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: bienesraicesdb
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `propiedades`
--

DROP TABLE IF EXISTS `propiedades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `propiedades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` longtext,
  `habitaciones` int DEFAULT NULL,
  `baños` int DEFAULT NULL,
  `aparcamientos` int DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `vendedorID` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vendedorID_idx` (`vendedorID`),
  CONSTRAINT `vendedorID` FOREIGN KEY (`vendedorID`) REFERENCES `vendedores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propiedades`
--

LOCK TABLES `propiedades` WRITE;
/*!40000 ALTER TABLE `propiedades` DISABLE KEYS */;
INSERT INTO `propiedades` VALUES (39,'  Casa de lujo en la playa',2500000.00,'a0161602253c7e61efc73a918985a07f.jpg','Una casa espectacular con vistas a la playa de roquetas. Una casa espectacular con vistas a la playa de roquetas.',3,2,1,'2022-07-12',1),(40,' Casa en el lago',15000000.00,'a1e1953d673a9b4c082c09b8ee54b324.jpg','Situada a pocos metros del gran lago de Zamora. Unas vistas espectaculares que no te dejarán indiferente.',5,2,2,'2022-07-12',1),(44,' Apartamento con piscina',1700000.00,'6c97439fe762ca50bd6a7bee20c70a1c.jpg','A pocos kilometros del centro de la ciudad. Apartamento totalmente a estrenar recien edificado.',3,1,2,'2022-07-12',1),(53,'Ático espectacular',1700000.00,'22aa6725950e5d1a5bdd5f292dbc797a.jpg','Ático situado cerca de la plaza de la libertad,  silencioso y amplio.',3,1,2,'2022-07-12',1);
/*!40000 ALTER TABLE `propiedades` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-29 20:29:21
