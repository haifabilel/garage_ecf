-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: esilxl0nthgloe1y.chr7pe7iynqr.eu-west-1.rds.amazonaws.com    Database: wyk5nombobh9yvg1
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '';

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','vinccentparrot@gmail.com','$2y$10$jl0sD4kkctvSaLGKy5DPKOkl2Z.PwiSh608UdnTOY7msBePeBkCFm','admin'),(6,'second_user','second_user@gmail.com','$2y$10$8p5HunD7Y9Fy8djX3gQWwOmBVEfR9PAdYibXoPlVsRnMpdzjw490i','employe');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `details_voitures`
--

DROP TABLE IF EXISTS `details_voitures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `details_voitures` (
  `id_details` int NOT NULL AUTO_INCREMENT,
  `caracteristique` varchar(255) NOT NULL,
  `liste_equipements` varchar(255) NOT NULL,
  `options_installes` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  PRIMARY KEY (`id_details`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `details_voitures`
--

LOCK TABLES `details_voitures` WRITE;
/*!40000 ALTER TABLE `details_voitures` DISABLE KEYS */;
INSERT INTO `details_voitures` VALUES (1,'Centrer des lignes de texte\nCentrer un bloc ou une image\nCentrer verticalement','Centrer des lignes de texte\nCentrer un bloc ou une image\nCentrer verticalement','loremCentrer des lignes de texte\nCentrer un bloc ou une image\nCentrer verticalement3','bmw_1.jpg','bmw_2.jpg','bmw_3.jpg'),(2,'lorem1','lorem2','lorem3','peugeot-2008_1.jpg','peugeot-2008_2.jpg','peugeot-2008_3.jpg'),(3,'lorem1','lorem2','lorem3','audi_2.jpg','audi_3.jpg','audi_1.jpg'),(4,'lorem1','lorem2','lorem3','mrcdes_benz_2.jpg','mercedes-1.jpg','mecedes_3.jpg'),(5,'lorem1','lorem2','lorem3','fiat-2.jpg','fiat-1.jpg','fiat-3.jpg'),(6,'lorem1','lorem2','lorem3','toyota_2.jpg','toyota_1.jpg','toyota_3.jpg');
/*!40000 ALTER TABLE `details_voitures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employe`
--

DROP TABLE IF EXISTS `employe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employe`
--

LOCK TABLES `employe` WRITE;
/*!40000 ALTER TABLE `employe` DISABLE KEYS */;
INSERT INTO `employe` VALUES (5,'second_user','second_user@gmail.com','$2y$10$8p5HunD7Y9Fy8djX3gQWwOmBVEfR9PAdYibXoPlVsRnMpdzjw490i','employe');
/*!40000 ALTER TABLE `employe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horaires`
--

DROP TABLE IF EXISTS `horaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `horaires` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jour` varchar(255) NOT NULL,
  `matin` varchar(255) DEFAULT NULL,
  `apres_midi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horaires`
--

LOCK TABLES `horaires` WRITE;
/*!40000 ALTER TABLE `horaires` DISABLE KEYS */;
INSERT INTO `horaires` VALUES (1,'Lundi','8h:00-12h:00','14h:00-19h:00'),(2,'Mardi','08h:00 - 12h00','14h00 - 19h00'),(3,'Mercredi','8h:00-12h:00','14h:00-19h:00'),(4,'Jeudi','8h:00-12h:00','14h:00-19h:00'),(5,'Vendredi','8h:00-12h:00','14h:00-19h:00'),(6,'Samedi','08h:00 - 12h00','ferm├®'),(7,'Dimanche','ferm├®','ferm├®');
/*!40000 ALTER TABLE `horaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_table`
--

DROP TABLE IF EXISTS `review_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `review_table` (
  `review_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_rating` int NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_table`
--

LOCK TABLES `review_table` WRITE;
/*!40000 ALTER TABLE `review_table` DISABLE KEYS */;
INSERT INTO `review_table` VALUES (15,'Jean CHARLES',5,'bravo pour le service!',1697830115),(16,'Adam',5,'tr├®s bon ├®quipe',1698053268),(17,'Christophe',4,'Prix correcte',1698053302),(21,'Jack',1,'je recommande pas ce garage',1698070181),(22,'Christine',1,'je recommande pas',1698348131);
/*!40000 ALTER TABLE `review_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (21,'Pare-brise et bris de glace','Vous avez constat├® un impact sur votre pare-brise ? Il est temps de le faire examiner par nos experts. Au Garage Parrot, nous r├®alisons toutes vos op├®rations de r├®paration et remplacement de pare-brise. Nous vous proposons des solutions vitrage adapt├®es afin de vous garantir une conduite sereine avec un confort visuel, thermique et acoustique.',_binary 'pare_brise.jpg'),(23,'Atelier m├®canique','Au Garage Parrot, nous disposons dÔÇÖun atelier m├®canique pour entretenir et r├®parer votre v├®hicule, quelle que soit sa marque. Nous utilisons les m├®thodes pr├®conis├®es par le constructeur, avec les pi├¿ces dÔÇÖorigine. Nos techniciens sont exp├®riment├®s pour effectuer toutes les op├®rations n├®cessaires ├á la mobilit├® de votre v├®hicule, quÔÇÖil sÔÇÖagisse dÔÇÖinterventions courantes ou de m├®canique lourde. ',_binary '../uploads/mecanique.jpg'),(24,'Vidange','La vidange de votre voiture consiste ├á remplacer l\'huile moteur usag├®e par une huile neuve de meilleure qualit├®.\r\n\r\nLa vidange doit ├¬tre r├®alis├®e entre 10 000 km et 15 000 km si vous avez une essence, tous les 7 000 km si vous conduisez un diesel ou tous les ans si vous roulez moins.',_binary '../uploads/oil_change.jpg'),(25,'Climatisation','Le manque dÔÇÖentretien de votre syst├¿me de climatisation peut entra├«ner de graves cons├®quences m├®caniques, sanitaires ou m├¬me s├®curitaires. En effet, une climatisation mal entretenue peut ├¬tre ├á lÔÇÖorigine de d├®faillances techniques ou de pannes.',_binary '../uploads/climatisation.jpg'),(37,'R├®parations carrosserie','Des jantes ├®rafl├®es ? Une rayure ou une bosse sur votre carrosserie voiture ? Une griffure sur votre tableau de bord ? Ne vous inqui├®tez pas, au GarageParrot, nous nous occupons de tout. Nos experts se tiennent ├á votre disposition pour r├®parer, prot├®ger et entretenir la carrosserie de votre v├®hicule. Nous nous engageons ├á r├®aliser un redressage de qualit├® de votre carrosserie.',_binary 'carousserie.jpg'),(39,'Contr├┤le pneumatiques','\r\nLes pneumatiques sont essentiels pour votre v├®hicule, cÔÇÖest pourquoi il est important dÔÇÖen prendre soin. Nous vous recommandons de les faire contr├┤ler au moins une fois par an chez un sp├®cialiste et dÔÇÖen v├®rifier la pression une fois par mois. Il est d├®conseill├® de laisser ses pneus sous-gonfl├®s ou sur-gonfl├®s car ils consomment plus de carburant et durent moins longtemps.',_binary '../uploads/pneu.jpg');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voitures`
--

DROP TABLE IF EXISTS `voitures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `voitures` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_details` int NOT NULL,
  `brand` varchar(255) NOT NULL,
  `prix` int NOT NULL,
  `kilometrage` int NOT NULL,
  `annee` int NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voitures`
--

LOCK TABLES `voitures` WRITE;
/*!40000 ALTER TABLE `voitures` DISABLE KEYS */;
INSERT INTO `voitures` VALUES (1,1,'BMW M4',25000,187000,2008,_binary '../uploads/bmw-m4.jpg'),(2,2,'Peugeot 2008',27000,115000,2011,_binary '../uploads/peugeot-2008.jpg'),(3,3,'Audi',28000,125000,2010,_binary '../uploads/audi.jpg'),(4,4,'Mercedes benz',22900,145000,2017,_binary '../uploads/mercedes-benz-1370536_640.jpg'),(5,5,'Fiat 500',7500,85000,2017,_binary '../uploads/S5-Fiat-40429.jpg'),(6,6,'Toyota yaris cross',25900,95000,2018,_binary '../uploads/toyota-yaris.jpg');
/*!40000 ALTER TABLE `voitures` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-15 15:55:54
