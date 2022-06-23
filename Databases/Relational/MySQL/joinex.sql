-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: joinexample
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table1` (
  `nodeID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL,
  `currentFloor` tinyint(4) NOT NULL,
  PRIMARY KEY (`nodeID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table1`
--

LOCK TABLES `table1` WRITE;
/*!40000 ALTER TABLE `table1` DISABLE KEYS */;
INSERT INTO `table1` VALUES (1,1,2),(2,2,3),(3,1,1),(4,3,2);
/*!40000 ALTER TABLE `table1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table2`
--

DROP TABLE IF EXISTS `table2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table2` (
  `nodeID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `requestedFloor` tinyint(4) NOT NULL,
  `otherInfo` text DEFAULT NULL,
  KEY `nodeID` (`nodeID`),
  CONSTRAINT `table2_ibfk_1` FOREIGN KEY (`nodeID`) REFERENCES `table1` (`nodeID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table2`
--

LOCK TABLES `table2` WRITE;
/*!40000 ALTER TABLE `table2` DISABLE KEYS */;
INSERT INTO `table2` VALUES (1,2,'request'),(2,3,'no req'),(3,2,'request');
/*!40000 ALTER TABLE `table2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tablegroup`
--

DROP TABLE IF EXISTS `tablegroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tablegroup` (
  `nodeID` tinyint(3) unsigned NOT NULL,
  `time` time NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tablegroup`
--

LOCK TABLES `tablegroup` WRITE;
/*!40000 ALTER TABLE `tablegroup` DISABLE KEYS */;
INSERT INTO `tablegroup` VALUES (1,'11:00:00',0),(2,'01:00:00',1),(3,'04:00:00',1),(2,'07:00:00',1),(1,'03:00:00',1),(3,'05:00:00',1);
/*!40000 ALTER TABLE `tablegroup` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-20 10:44:37
