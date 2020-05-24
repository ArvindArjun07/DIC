-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: dic
-- ------------------------------------------------------
-- Server version	5.6.26-log

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
-- Table structure for table `disha1`
--

DROP TABLE IF EXISTS `disha1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disha1` (
  `username` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone1` varchar(10) NOT NULL,
  `phone2` varchar(10) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `aadhar` int(12) NOT NULL DEFAULT '0',
  `gender` varchar(45) DEFAULT NULL,
  `region` varchar(45) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `education` varchar(45) DEFAULT NULL,
  `caste` varchar(45) DEFAULT NULL,
  `experience` varchar(45) DEFAULT NULL,
  `interest` varchar(100) DEFAULT NULL,
  `rupees` float DEFAULT NULL,
  `other_info` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`aadhar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disha1`
--

LOCK TABLES `disha1` WRITE;
/*!40000 ALTER TABLE `disha1` DISABLE KEYS */;
INSERT INTO `disha1` VALUES ('arjun','dfghj','985',' 333','sdf',6,'male','rural','4586-12-06',66,'UP TO S.S.L.C','OBC','fghj','job, employment',22,'fg '),('pp','sdfg','3122',' 1231','xc',31,'Not Mentioned','Not Mentioned','',32,'UP TO S.S.L.C','MIN','wf','job, others',1,'kjhg '),('ajsh','dfghjk','55',' 321','cvbn',321,'male','rural','1997-12-12',35,'UP TO S.S.L.C','MIN','asdfgh','job, employment',333,'ertyj ');
/*!40000 ALTER TABLE `disha1` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-24 19:46:02
