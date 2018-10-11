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
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imageUrl` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `promoprice` int(11) NOT NULL,
  `salePeriodstart` text,
  `salePeriodstop` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (1,'../data/img/canari.jpg','Canari','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',100,0,NULL,NULL),(2,'../data/img/chouette.jpg','Chouette','Chouette est le nom vernaculaire de certains oiseaux de la famille des Strigidaes',150,10,'2018-07-10','2018-08-15'),(3,'../data/img/hirondelle.jpg','Hirondelle','es hirondelles sont des oiseaux appartenant à la famille des Hirundinidae. ',200,180,'2018-07-07','2018-07-31'),(4,'../data/img/messange.jpg','Messange','Mésange est un nom vernaculaire ambigu en français.',300,220,NULL,NULL),(5,'../data/img/perroquet.jpg','Perroquet','Le terme perroquet ([pɛ.ʁɔ.kɛ]) est un terme du vocabulaire courant qui désigne',250,0,'2018-07-29','2018-09-01'),(6,'../data/img/rossignol.jpg','Rossignol','Rossignol est un oeseau qui chante',350,310,NULL,NULL),(19,'../data/img/canari.jpg','Canari1','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',150,0,NULL,NULL),(20,'../data/img/chouette.jpg','Chouette1','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',560,0,NULL,NULL),(21,'../data/img/hirondelle.jpg','Hirondelle1','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',543,0,NULL,NULL),(22,'../data/img/messange.jpg','Messange1','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',765,0,NULL,NULL),(23,'../data/img/perroquet.jpg','Perroquet1','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',123,0,NULL,NULL),(24,'../data/img/perroquet.jpg','Rossignol1','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',345,0,NULL,NULL),(25,'../data/img/canari.jpg','Canari2','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',150,0,NULL,NULL),(26,'../data/img/chouette.jpg','Chouette2','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',560,0,NULL,NULL),(27,'../data/img/hirondelle.jpg','Hirondelle2','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',543,0,NULL,NULL),(28,'../data/img/messange.jpg','Messange2','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',765,0,NULL,NULL),(29,'../data/img/perroquet.jpg','Perroquet2','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',123,0,NULL,NULL),(30,'../data/img/perroquet.jpg','Rossignol2','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',345,0,NULL,NULL),(31,'../data/img/canari.jpg','Canari3','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',150,0,NULL,NULL),(32,'../data/img/chouette.jpg','Chouette3','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',560,0,NULL,NULL),(33,'../data/img/hirondelle.jpg','Hirondelle3','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',543,0,NULL,NULL),(34,'../data/img/messange.jpg','Messange3','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',765,0,NULL,NULL),(35,'../data/img/perroquet.jpg','Perroquet3','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',123,0,NULL,NULL),(36,'../data/img/perroquet.jpg','Rossignol3','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',345,0,NULL,NULL),(37,'../data/img/canari.jpg','Canari4','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',150,0,NULL,NULL),(38,'../data/img/chouette.jpg','Chouette4','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',560,0,NULL,NULL),(39,'../data/img/hirondelle.jpg','Hirondelle4','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',543,0,NULL,NULL),(40,'../data/img/messange.jpg','Messange4','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',765,0,NULL,NULL),(41,'../data/img/perroquet.jpg','Perroquet4','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',123,0,NULL,NULL),(42,'../data/img/perroquet.jpg','Rossignol4','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',345,0,NULL,NULL),(43,'../data/img/canari.jpg','Canari5','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',150,0,NULL,NULL),(44,'../data/img/chouette.jpg','Chouette5','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',560,0,NULL,NULL),(45,'../data/img/hirondelle.jpg','Hirondelle5','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',543,0,NULL,NULL),(46,'../data/img/messange.jpg','Messange5','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',765,0,NULL,NULL),(47,'../data/img/perroquet.jpg','Perroquet5','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',123,0,NULL,NULL),(48,'../data/img/perroquet.jpg','Rossignol5','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',345,0,NULL,NULL),(49,'../data/img/canari.jpg','Canari6','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',150,0,NULL,NULL),(50,'../data/img/chouette.jpg','Chouette6','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',560,0,NULL,NULL),(51,'../data/img/hirondelle.jpg','Hirondelle6','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',543,0,NULL,NULL),(52,'../data/img/messange.jpg','Messange6','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',765,0,NULL,NULL),(53,'../data/img/perroquet.jpg','Perroquet6','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',123,0,NULL,NULL),(54,'../data/img/perroquet.jpg','Rossignol6','Le Canari est la forme domestiquée du Serin des Canaries (Serinus canaria).',345,0,NULL,NULL);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
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
