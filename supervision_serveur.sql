-- MariaDB dump 10.19  Distrib 10.5.10-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: supervision_serveur
-- ------------------------------------------------------
-- Server version	10.5.10-MariaDB-0ubuntu0.21.04.1

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
-- Table structure for table `serveur`
--

DROP TABLE IF EXISTS `serveur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serveur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1920 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serveur`
--

LOCK TABLES `serveur` WRITE;
/*!40000 ALTER TABLE `serveur` DISABLE KEYS */;
INSERT INTO `serveur` VALUES (1,'Gadagne','https://gadagne2.ideesculture.fr/gestion/monitor.php'),(2,'ACF','https://acf.lescollections.be/gestion/monitor.php'),(3,'laFayette','https://lafayetteanticipations.ideesculture.fr/gestion/monitor.php'),(4,'Aeroscopia','https://aeroscopia.ideesculture.fr/gestion/monitor.php'),(5,'Andre_Voulgre','https://andrevoulgre.ideesculture.fr/gestion/monitor.php'),(6,'Alphas','https://alphas.ideesculture.fr/gestion/monitor.php'),(7,'Arts_Urbain','https://artsurbain.ideesculture.fr/gestion/monitor.php'),(8,'Carhop2','https://carhop2.lescollections.be/gestion/monitor.php'),(9,'Carhif_3','https://carhif3.ideesculture.fr/gestion/monitor.php'),(10,'Chrd','https://chrd.ideesculture.fr/gestion/monitor.php'),(11,'Civa_2','https://civa2.ideesculture.fr/gestion/monitor.php'),(12,'Ganivenq','https://collection-ganivenq.ideesculture.fr/gestion/monitor.php'),(13,'Umons','https://collections-umons.ideesculture.fr/gestion/monitor.php'),(14,'Saicom','https://collections.saicom.be/gestion/monitor.php'),(15,'Bihm','https://bihm.lescollections.ch/gestion/monitor.php'),(16,'Ihoesd','https://ihoesd.ideesculture.fr/gestion/monitor.php'),(17,'Cpcp','https://cpcp2.lescollections.be/gestion/monitor.php'),(18,'Debuisson','https://debuisson.ideesculture.fr/gestion/monitor.php'),(19,'Debuisson2','https://debuisson2.ideesculture.fr/gestion/monitor.php'),(20,'Hennessy','https://hennessy.idcultu.re/gestion/monitor.php'),(21,'Inrap','https://inrapidc.ideesculture.fr/gestion/monitor.php'),(22,'Justice','https://justice.ideesculture.fr/gestion/monitor.php'),(23,'Civa','https://kanal.ideesculture.fr/gestion/monitor.php'),(24,'Magog','https://www.magog.ideesculture.fr/gestion/monitor.php'),(25,'Maison losseau','http://maisonlosseau.lescollections.be/gestion/monitor.php'),(26,'Marbres','https://marbres.ideesculture.fr/gestion/monitor.php'),(27,'Mayenne','http://mayenne.ideesculture.fr/gestion/monitor.php'),(28,'Mundaneum','https://catalogue.mundaneum.org/gestion/monitor.php'),(29,'Musee Photo','https://museephoto.lescollections.be/gestion/monitor.php'),(30,'Musee Sacem','https://museesacem.ideesculture.fr/gestion/monitor.php'),(31,'Musee Lyon','http://mutulyon.ideesculture.fr/gestion/monitor.php'),(32,'Resistance 31','https://resistance31.ideesculture.fr/gestion/monitor.php'),(33,'Alpilles','https://alpilles.ideesculture.fr/gestion/monitor.php'),(34,'Villamedicis','https://villamedicis.ideesculture.fr/gestion/monitor.php'),(35,'Anthropo','https://anthropo.lescollections.org/gestion/monitor.php'),(36,'Ath','https://ath.lescollections.be/gestion/monitor.php'),(37,'Bljd','https://bljd.ideesculture.fr/gestion/monitor.php'),(38,'Chambrun','https://chambrun.lafayette.ideesculture.fr/gestion/monitor.php'),(39,'CMN','http://cmn.ideesculture.fr/gestion/monitor.php'),(40,'Collections Lemusee','http://collections.lemusee.ch/gestion/monitor.php'),(41,'Alpes Azur Patrimoine','https://collections2.alpes-azur-patrimoine.fr/gestion/monitor.php'),(42,'Ihoes','https://ihoesc.ideesculture.fr/gestion/monitor.php'),(43,'Observatoire de Paris','https://observatoiredeparis.ideesculture.fr/gestion/monitor.php');
/*!40000 ALTER TABLE `serveur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-12 11:26:16
