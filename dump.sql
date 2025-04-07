-- MySQL dump 10.13  Distrib 8.0.41, for Linux (x86_64)
--
-- Host: localhost    Database: cfu
-- ------------------------------------------------------
-- Server version	8.0.41

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

--
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cards` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `date` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `organizer` varchar(255) DEFAULT NULL,
  `poppup_desc` text,
  `event_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards`
--

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
INSERT INTO `cards` VALUES (1,'01.02','test.jpg','левая тусовка ','lb1','bigcfu.svg','smallcfu.svg','еще бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(2,'02.03','test.jpg','главная тусовка','lb2','bigcfu.svg','smallcfu.svg','еще бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(3,'04.03','test.jpg','правая тусовка','lb3','bigcfu.svg','smallcfu.svg','еще бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(4,'04.04','test.jpg','бибибиби','lb4','bigcfu.svg','smallcfu.svg','еще бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(5,'04.05','test.jpg','бибибиби','lb5','bigcfu.svg','smallcfu.svg','еще бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(6,'12.12','test.jpg','пипипупу','lb6','bigcfu.svg','smallcfu.svg','еще бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(7,'04.10','test.jpg','бебебебе','lb7','bigcfu.svg','smallcfu.svg','бла бла бла бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(8,'04.11','test.jpg','бебебебе','lb8','bigcfu.svg','smallcfu.svg','бла бла бла бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(9,'10.12','test.jpg','бебебебе','lb9','bigcfu.svg','smallcfu.svg','бла бла бла бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(10,'10.10','test.jpg','бебебебе','lb10','bigcfu.svg','smallcfu.svg','бла бла бла бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com');
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disciplines`
--

DROP TABLE IF EXISTS `disciplines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `disciplines` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disciplines`
--

LOCK TABLES `disciplines` WRITE;
/*!40000 ALTER TABLE `disciplines` DISABLE KEYS */;
INSERT INTO `disciplines` VALUES (1,'Чат','chat.svg'),(2,'Курсы','courses.svg');
/*!40000 ALTER TABLE `disciplines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sos`
--

DROP TABLE IF EXISTS `sos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sos`
--

LOCK TABLES `sos` WRITE;
/*!40000 ALTER TABLE `sos` DISABLE KEYS */;
INSERT INTO `sos` VALUES (1,'docs.svg','Документы','/sos/documents'),(2,'general_info.svg','Общая информация о поступлении','/sos/info'),(3,'subjects.svg','Предметы для поступления','/sos/entrance'),(4,'program.svg','Программа','/sos/program'),(5,'lectures.svg','Лекции','/sos/lectures'),(6,'exams.svg','Экзамены','/sos/exams');
/*!40000 ALTER TABLE `sos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-04-07 15:37:53
