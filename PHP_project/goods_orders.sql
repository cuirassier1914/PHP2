-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: goods
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ids` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `status` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (23,'2018-06-29 19:18:09','2,3',16,350,'отправлен'),(24,'2018-07-28 11:41:10','4,1,2',16,550,'отправлен'),(25,'2018-06-29 18:49:07','4,6,1',16,750,'создан'),(26,'2018-06-29 19:21:26','2,4,6',101,800,'отправлен'),(27,'2018-07-01 10:43:31','4',16,300,'создан'),(28,'2018-07-01 10:44:59','2',16,150,'создан'),(29,'2018-07-05 18:34:04','2,4',16,450,'создан'),(30,'2018-07-05 18:47:52','2,3',16,350,'создан'),(31,'2018-07-27 20:40:15','1,2,3,4',16,750,'создан'),(32,'2018-07-27 20:40:31','1,2,3,4',16,750,'создан'),(33,'2018-07-27 20:40:55','1,2,3,4',16,750,'создан'),(34,'2018-07-27 20:53:17','2,1,5,6',16,850,'создан'),(35,'2018-07-28 11:06:05','1,2,3,4',16,750,'создан'),(36,'2018-07-28 11:18:28','1,2,3,4',16,750,'создан'),(37,'2018-07-28 11:19:02','1,2,3',16,450,'создан'),(38,'2018-07-28 11:20:02','1,2',16,250,'создан'),(39,'2018-07-28 11:24:16','1,2,3',16,450,'создан'),(40,'2018-07-28 11:27:27','1,2,3',16,450,'создан'),(41,'2018-07-28 11:37:00','1,2,3,4',16,590,'создан'),(42,'2018-07-28 11:37:21','1,2,3',16,290,'создан'),(43,'2018-07-28 11:39:26','3,2,4',16,490,'создан'),(44,'2018-07-29 08:59:59','3,5,6,4,2,1',16,940,'создан'),(45,'2018-10-09 20:09:56','19,2,1',16,400,'создан');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-11 17:22:12
