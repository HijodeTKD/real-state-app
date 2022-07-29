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
-- Table structure for table `entradas`
--

DROP TABLE IF EXISTS `entradas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entradas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `contenido` longtext NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `creado` datetime DEFAULT NULL,
  `usuarioID` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `index2` (`usuarioID`),
  CONSTRAINT `usuarioID` FOREIGN KEY (`usuarioID`) REFERENCES `usuarios` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entradas`
--

LOCK TABLES `entradas` WRITE;
/*!40000 ALTER TABLE `entradas` DISABLE KEYS */;
INSERT INTO `entradas` VALUES (3,'Como mantener la casa impecable','Aunque nuestra casa supere más de 100m2, hay trucos muy útiles para mantener la casa limpia apenas sin esfuerzo.','74f9108557820fd59a4f0491578e4295.jpg','2022-06-04 18:21:12',3),(4,'Las flores para combatir el calor','Cualquier estancia que tenga plantas, automáticamente será más fresca. Las plantas oxigenan el ambiente y crean espacios con mayor humedad. Por eso tener un ficus o un bambú en el salón es una gran idea para crear un ambiente más confortable dentro de casa en verano. Aunque si quieres estar a la moda, hazte con una strelitzia, la planta que marca tendencia en decoración.','7de1b6028271833e9f1e79f0f0ada817.jpg','2022-06-13 11:21:12',2),(5,'Ventilación de la casa','Puede parecer algo obvio, pero no está mal que lo recordemos: el mejor momento para ventilar la casa es a primera hora de la mañana y a última de la tarde. Evita las horas más calurosas o el calor exterior se colará en tu casa. Con las persianas tienes que tener clara la diferencia ente que entre luz y que entre sol, si entra el sol, vas a calentar la casa más de lo debido. Regula tus persianas para mantener fresca la temperatura o busca soluciones decorativas para dar sombra a tu terraza o patio. Por la noche, también puedes pulverizar agua en tus cortinas para que el aire que entre sea más fresco.','9e7fa036ca844fe33fa16d24cdda405f.jpg','2022-06-24 20:01:12',3),(6,'Trucos de decoración por interioristas','Hay muchos trucos de decoración que empleamos los interioristas y decoradores en todos los proyectos, básicamente por que funcionan. Son eficaces.\r\n\r\nLo mejor de todo, es que la mayoría de ellos son meros movimientos estéticos, pequeños cambios, sutiles toques, que puede realizar cualquier persona, sin conocimientos en la materia, con los mínimos recursos y la mayoría, rápidamente.\r\n\r\nCualquier persona y en cualquier casa, y mejorarla al instante.\r\n\r\nY eso es lo que vamos a ver a continuación: 50 trucos de decoración fáciles que puedes realizar en tu casa, en cualquier momento.\r\n\r\nAlgunos no te interesarán, otros te vendrán de perlas. Escoge los que necesites y aplícalos para que notes una mejoría instantánea y considerable en la decoración de tu hogar.','ad2492cb2fc3724f435731a6384f4391.jpg','2022-07-27 00:00:00',2);
/*!40000 ALTER TABLE `entradas` ENABLE KEYS */;
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
