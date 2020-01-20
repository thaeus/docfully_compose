-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: 35.236.84.212    Database: docfully_web
-- ------------------------------------------------------
-- Server version	5.7.14-google-log

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
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED='203c93a5-7a96-11e9-97cc-42010aa80013:1-20840725';

--
-- Table structure for table `disorders`
--

DROP TABLE IF EXISTS `disorders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disorders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disorder_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disorders`
--

LOCK TABLES `disorders` WRITE;
/*!40000 ALTER TABLE `disorders` DISABLE KEYS */;
INSERT INTO `disorders` VALUES (1,'Measles'),(2,'Mumps'),(3,'Chicken Pox'),(4,'Whooping Cough'),(5,'Scarlet Fever'),(6,'Pnenonia'),(7,'Bursitis'),(8,'Polio'),(9,'Reduced Vitality'),(10,'Arteriosclerosis'),(11,'Stoke'),(12,'Heart Problems'),(13,'Seizure Disorders'),(14,'Anxiety Disorder'),(15,'Elevated PSA Level'),(16,'Anemia'),(17,'Bulimia'),(18,'Anorexia'),(19,'Cirrhosis of the Liver'),(20,'Renal Failure'),(21,'Colitis'),(22,'Herpes'),(23,'Syphilis'),(24,'HIV Disease'),(25,'Chlamydia'),(26,'Angina Pectorsis'),(27,'Tachycardia'),(28,'Hypertension'),(29,'Hypotension'),(30,'Tuberculosis'),(31,'Breathing Problems'),(32,'Asthma'),(33,'Chronic Bronchitis'),(34,'Chronic Cough'),(35,'Emphysema'),(36,'Chronic Sinusitis'),(37,'Allergic Sinus Problem'),(38,'Chronic Allergic Rhinitis'),(39,'Sinus Headaches'),(40,'Chronic Colds'),(41,'Female Menopause'),(42,'Andropause'),(43,'Nervous Disturbances'),(44,'Loss of Memory'),(45,'Psychiatric Disturbances'),(46,'Decreased Sexual Potency'),(47,'Sleepp Disturbances'),(48,'Dizziness'),(49,'Chronic Migrane'),(50,'Meningitis'),(51,'Jaundice'),(52,'Epilepsy'),(53,'Ear Infectioni'),(54,'Hearing Loss'),(55,'Nausea'),(56,'Rectal Bleeding'),(57,'Burning of Urination'),(58,'Breast Cancer'),(59,'Cervical Cancer'),(60,'Ovarian Cancer'),(61,'Prostate Cancer'),(62,'Enlarged Prostate'),(63,'Bladder Cancer'),(64,'Liver Disease'),(65,'Kidney Disease'),(66,'Hyperthyroidism'),(67,'Thyroid Disease'),(68,'Hypothyroidism'),(69,'Lupus Erythematosus'),(70,'Scleroderma'),(71,'Epistaxis'),(72,'Bacterial/Fungal Infection'),(73,'Hepatitis'),(74,'Glaucoma'),(75,'Loss of Appetite'),(76,'Rapid Weight Gain'),(77,'Rapid Weight Loss'),(78,'Digestive Problem'),(79,'Acid Indigestion'),(80,'Stomach Ulcers'),(81,'Overweight Problem'),(82,'Pancreatitis'),(83,'Pancreatic Insufficiency'),(84,'Leg Cramps'),(85,'Swollen Ankles'),(86,'Varicose Veins'),(87,'Joint Pain'),(88,'Back Pain'),(89,'Arthritis'),(90,'Leg Ulcers'),(91,'Arms/Legs Tingling Sensation'),(92,'Hand/Legs Falling Asleep');
/*!40000 ALTER TABLE `disorders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `health_history`
--

DROP TABLE IF EXISTS `health_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `health_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `health_history`
--

LOCK TABLES `health_history` WRITE;
/*!40000 ALTER TABLE `health_history` DISABLE KEYS */;
INSERT INTO `health_history` VALUES (1,'Previous primary care physician'),(2,'Current medications and supplements'),(3,'Previous medications and supplements'),(4,'Drug allergies'),(5,'Other allergies'),(6,'Date and reason for last doctor visit'),(7,'Date and conditions of surgical procedures'),(8,'Date and conditions of hospitalizations'),(9,'Overall health'),(10,'Energy level'),(11,'Exercise routine'),(12,'Mental alertness'),(13,'Diseases that run in your family'),(14,'Substance abuse'),(15,'Depression'),(16,'Alcoholic drinks per week'),(17,'Pack of cigarettes per day');
/*!40000 ALTER TABLE `health_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `health_score`
--

DROP TABLE IF EXISTS `health_score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `health_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `health_score`
--

LOCK TABLES `health_score` WRITE;
/*!40000 ALTER TABLE `health_score` DISABLE KEYS */;
INSERT INTO `health_score` VALUES (1,'Hours of sleep per night'),(2,'Glasses of water per day'),(3,'Mood for the past week'),(4,'Smoker'),(5,'Cigars per week'),(6,'Hours of exercise per week'),(7,'Alcoholic drinks per week'),(8,'Servings of meat per week'),(9,'Serving of refined sugar');
/*!40000 ALTER TABLE `health_score` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_disorders`
--

DROP TABLE IF EXISTS `patient_disorders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_disorders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `disorder_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_patient_disorder_patient_idx` (`patient_id`),
  KEY `fk_patient_disorder_disorder_idx` (`disorder_id`),
  CONSTRAINT `fk_patient_disorder_disorder` FOREIGN KEY (`disorder_id`) REFERENCES `disorders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_patient_disorder_patient` FOREIGN KEY (`patient_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_disorders`
--

LOCK TABLES `patient_disorders` WRITE;
/*!40000 ALTER TABLE `patient_disorders` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_disorders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_health_history`
--

DROP TABLE IF EXISTS `patient_health_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_health_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `health_history_id` int(11) NOT NULL,
  `answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_patient_health_history_patient_idx` (`patient_id`),
  KEY `fk_patient_health_history_health_history_idx` (`health_history_id`),
  CONSTRAINT `fk_patient_health_history_health_history` FOREIGN KEY (`health_history_id`) REFERENCES `health_history` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_patient_health_history_patient` FOREIGN KEY (`patient_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_health_history`
--

LOCK TABLES `patient_health_history` WRITE;
/*!40000 ALTER TABLE `patient_health_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_health_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_health_score`
--

DROP TABLE IF EXISTS `patient_health_score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_health_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `health_score_id` int(11) NOT NULL,
  `answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pk_patient_health_score_patient_idx` (`patient_id`),
  KEY `pk_patient_health_scrore_health_score_idx` (`health_score_id`),
  CONSTRAINT `pk_patient_health_score_patient` FOREIGN KEY (`patient_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pk_patient_health_scrore_health_score` FOREIGN KEY (`health_score_id`) REFERENCES `health_score` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_health_score`
--

LOCK TABLES `patient_health_score` WRITE;
/*!40000 ALTER TABLE `patient_health_score` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_health_score` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_info`
--

DROP TABLE IF EXISTS `patient_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `address_1` varchar(60) DEFAULT NULL,
  `address_2` varchar(60) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip_code` varchar(5) DEFAULT NULL,
  `marital_status` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `insurrance_provider` int(11) DEFAULT NULL,
  `emergency_contact` varchar(40) DEFAULT NULL,
  `emergency_email` varchar(80) DEFAULT NULL,
  `emergency_phone` varchar(25) DEFAULT NULL,
  `emergency_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_patient_info_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_info`
--

LOCK TABLES `patient_info` WRITE;
/*!40000 ALTER TABLE `patient_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_visit`
--

DROP TABLE IF EXISTS `patient_visit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_visit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `medical_id` int(11) DEFAULT NULL,
  `visit_date` datetime NOT NULL,
  `length_of_visit` decimal(7,2) DEFAULT NULL,
  `visit_reason` varchar(255) DEFAULT NULL,
  `is_previous_condition` bit(1) DEFAULT b'0',
  PRIMARY KEY (`id`),
  KEY `pk_patient_user_idx` (`patient_id`),
  KEY `pk_medical_user_idx` (`medical_id`),
  CONSTRAINT `pk_medical_user` FOREIGN KEY (`medical_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pk_patient_user` FOREIGN KEY (`patient_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_visit`
--

LOCK TABLES `patient_visit` WRITE;
/*!40000 ALTER TABLE `patient_visit` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_visit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_vitals`
--

DROP TABLE IF EXISTS `patient_vitals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_vitals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_visit_id` int(11) NOT NULL,
  `vital_stat_id` int(11) NOT NULL,
  `reading` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_patient_vitals_visit_idx` (`patient_visit_id`),
  KEY `fk_patient_vitals_vital_stat_idx` (`vital_stat_id`),
  CONSTRAINT `fk_patient_vitals_visit` FOREIGN KEY (`patient_visit_id`) REFERENCES `patient_visit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_patient_vitals_vital_stat` FOREIGN KEY (`vital_stat_id`) REFERENCES `vital_stats` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_vitals`
--

LOCK TABLES `patient_vitals` WRITE;
/*!40000 ALTER TABLE `patient_vitals` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_vitals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `passcode` char(40) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `update_passcode` bit(1) DEFAULT NULL,
  `change_code` int(11) DEFAULT NULL,
  `is_iniactive` bit(1) NOT NULL DEFAULT b'0',
  `is_deleted` bit(1) NOT NULL DEFAULT b'0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`),
  KEY `fk_user_user_type_idx` (`user_type_id`),
  CONSTRAINT `fk_user_user_type` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'user','hiba.haidar@gmail.com','6eb0c61201a96afc99cbf180f1c8d93c0a9fd8c8',2,NULL,NULL,_binary '\0',_binary '\0','2019-07-09 18:05:26',NULL),(2,'doc','hiba_haidar@gmail.com','f7f029ecb98abe979074a3ab45b74dbd9af02d42',2,NULL,NULL,_binary '\0',_binary '\0','2019-07-09 18:06:16',NULL),(3,'user1','hiba.haidar@gmail.com','b3daa77b4c04a9551b8781d03191fe098f325e67',1,NULL,NULL,_binary '\0',_binary '\0','2019-07-09 18:07:12',NULL),(7,'user3','hiba.haidar@gmail.com','0b7f849446d3383546d15a480966084442cd2193',2,NULL,NULL,_binary '\0',_binary '\0','2019-07-09 18:21:55',NULL),(8,'doc2','hiba.haidar@gmail.com','f5baae8fc259f034438c1c634fbad0ed0532bb84',1,NULL,NULL,_binary '\0',_binary '\0','2019-07-09 19:22:15',NULL),(9,'user4','hiba.haidar@gmail.com','06e6eef6adf2e5f54ea6c43c376d6d36605f810e',2,NULL,NULL,_binary '\0',_binary '\0','2019-07-09 19:23:03',NULL),(11,'user5','hiba.haidar@gmail.com','7d112681b8dd80723871a87ff506286613fa9cf6',1,NULL,NULL,_binary '\0',_binary '\0','2019-07-09 19:23:55',NULL),(12,'bob','hiba.haidar@gmail.com','48181acd22b3edaebc8a447868a7df7ce629920a',1,NULL,NULL,_binary '\0',_binary '\0','2019-07-09 20:37:30',NULL),(14,'user6','hiba.haidar@gmail.com','312a46dc52117efa4e3096eda510370f01c83b27',1,NULL,NULL,_binary '\0',_binary '\0','2019-07-09 20:47:45',NULL),(15,'test_doctor','test@doctor.com','9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684',2,NULL,NULL,_binary '\0',_binary '\0','2019-07-13 22:29:56',NULL),(16,'','','da39a3ee5e6b4b0d3255bfef95601890afd80709',1,NULL,NULL,_binary '\0',_binary '\0','2019-12-03 06:15:07',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_type`
--

LOCK TABLES `user_type` WRITE;
/*!40000 ALTER TABLE `user_type` DISABLE KEYS */;
INSERT INTO `user_type` VALUES (1,'Patient'),(2,'Medical');
/*!40000 ALTER TABLE `user_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vital_stats`
--

DROP TABLE IF EXISTS `vital_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vital_stats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vital_stats`
--

LOCK TABLES `vital_stats` WRITE;
/*!40000 ALTER TABLE `vital_stats` DISABLE KEYS */;
INSERT INTO `vital_stats` VALUES (1,'Blook Pressure'),(2,'Heart Rate'),(3,'Body Fat'),(4,'Weight'),(5,'Temperature'),(6,'Repiratory'),(7,'Pulse Ox'),(8,'BMI'),(9,'Hand Strength'),(10,'Blood Sugar');
/*!40000 ALTER TABLE `vital_stats` ENABLE KEYS */;
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

-- Dump completed on 2020-01-19 19:39:46
