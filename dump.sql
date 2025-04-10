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
  `date` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `organizer_logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `organizer_id` bigint DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `poppup_desc` text,
  `event_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizer_id` (`organizer_id`),
  CONSTRAINT `cards_ibfk_1` FOREIGN KEY (`organizer_id`) REFERENCES `organizers` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards`
--

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
INSERT INTO `cards` VALUES (1,'2025-12-12','test.jpg','левая тусовка ','Развитие технологий','bigcfu.svg','smallcfu.svg',1,'Научная конференция','еще бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(2,'2025-11-30','test.jpg','главная тусовка','Тусовка с маканом','bigcfu.svg','smallcfu.svg',2,'Развлечения','еще бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(3,'2025-09-25','test.jpg','правая тусовка','RIP Паша. Прощание','bigcfu.svg','smallcfu.svg',3,'Развлечения','еще бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(4,'2025-09-13','test.jpg','бибибиби','Как писать код?','bigcfu.svg','smallcfu.svg',1,'Мастер-класс','еще бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(5,'2025-04-09','test.jpg','бибибиби','Развитие эмбриона в матке','bigcfu.svg','smallcfu.svg',2,'Научная конференция','еще бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(6,'2025-03-16','test.jpg','пипипупу','Ошибки в развитии бизнеса','bigcfu.svg','smallcfu.svg',1,'Научная конференция','еще бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(7,'2025-02-23','test.jpg','бебебебе','JAM тусовка','bigcfu.svg','smallcfu.svg',3,'Развлечения','бла бла бла бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(8,'2025-07-01','test.jpg','бебебебе','Как не вылететь с ВУЗа','bigcfu.svg','smallcfu.svg',1,'Учебная конференция','бла бла бла бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(9,'2025-07-07','test.jpg','бебебебе','Как сдать вышмат?','bigcfu.svg','smallcfu.svg',2,'Учебная конференция','бла бла бла бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com'),(10,'2025-03-31','test.jpg','бебебебе','Учимся делать сайты на тильде','bigcfu.svg','smallcfu.svg',2,'Мастер-класс','бла бла бла бла бла бла бла бла бла бла бла описание для попапа','https://youtube.com');
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `courses` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'Высшая математика','Цель дисциплины - научить нас чему-то, что-то рассказывают, но ничего не понятно','zaglushka.jpg'),(2,'Математический анализ','Цель этой дисциплины бла бла бла бла бла бла ','zaglushka.jpg'),(3,'Теория программирования на языках высокого уровня','Что-то там очень интересное, но сложное бла бла бла бла','zaglushka.jpg'),(4,'Человек и право','Тяжелая дисциплина для нас всех, очень тяжко бла бла бла бла','zaglushka.jpg');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
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
-- Table structure for table `organizers`
--

DROP TABLE IF EXISTS `organizers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organizers` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizers`
--

LOCK TABLES `organizers` WRITE;
/*!40000 ALTER TABLE `organizers` DISABLE KEYS */;
INSERT INTO `organizers` VALUES (1,'КФУ','smallcfu.svg'),(2,'ФТИ','smallcfu.svg'),(3,'JAM','smallcfu.svg');
/*!40000 ALTER TABLE `organizers` ENABLE KEYS */;
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

-- Dump completed on 2025-04-10 11:35:20
