-- MySQL dump 10.17  Distrib 10.3.22-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: rp143
-- ------------------------------------------------------
-- Server version	10.3.22-MariaDB-1:10.3.22+maria~stretch

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clienti`
--

DROP TABLE IF EXISTS `clienti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clienti` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `nume_cli` varchar(50) NOT NULL,
  `prenume_cli` varchar(50) NOT NULL,
  `cnp_cli` char(50) NOT NULL,
  `serie_cli` char(50) NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clienti`
--

LOCK TABLES `clienti` WRITE;
/*!40000 ALTER TABLE `clienti` DISABLE KEYS */;
INSERT INTO `clienti` VALUES (1,'Martigan','George','1835923753254','ZL325234'),(20,'Popescu','Ion','1984392747382','GL234234'),(22,'Costache','George','1849273659321','GL135234'),(23,'Vlad','Alexandru','193823959372','GL125323');
/*!40000 ALTER TABLE `clienti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tranzactii`
--

DROP TABLE IF EXISTS `tranzactii`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tranzactii` (
  `idtranz` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) NOT NULL,
  `sumaprimita` char(50) NOT NULL,
  `sumaoferita` char(50) NOT NULL,
  `datatranzactiei` char(50) NOT NULL,
  PRIMARY KEY (`idtranz`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tranzactii`
--

LOCK TABLES `tranzactii` WRITE;
/*!40000 ALTER TABLE `tranzactii` DISABLE KEYS */;
INSERT INTO `tranzactii` VALUES (2,1,'100 EUR','480 RON','01/06/2020'),(3,20,'500 USD','2181 RON','30/05/2020'),(4,22,'250 GBP','1350 RON','27/06/2020');
/*!40000 ALTER TABLE `tranzactii` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'user2','$2y$10$GiDNrGzYwm6wI72Y3pC32eIhr/q5ROrTBTg45Oj8yazCVIA7d0CFO','2020-05-30 15:37:58'),(6,'admin','$2y$10$3mwIvGVA497w/UF34AZtEOicea5IjOXMdnGbXjn6VXxt6r4/snei.','2020-05-30 15:40:18'),(7,'daniel','$2y$10$yjib5dad3ZMW7cVJU9y/tOaaHXOWZtZkDBO2sng3FXyp8Wp1o28vu','2020-05-30 15:49:54');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'rp143'
--

--
-- Dumping routines for database 'rp143'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-03 14:44:14
