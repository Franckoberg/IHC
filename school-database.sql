-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: schoolApp
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `cours`
--

DROP TABLE IF EXISTS `cours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cours` (
  `idcours` int(11) NOT NULL AUTO_INCREMENT,
  `code_cours` varchar(40) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `coefficient` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcours`),
  UNIQUE KEY `code_cours_UNIQUE` (`code_cours`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cours`
--

LOCK TABLES `cours` WRITE;
/*!40000 ALTER TABLE `cours` DISABLE KEYS */;
/*!40000 ALTER TABLE `cours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cours_etudiants`
--

DROP TABLE IF EXISTS `cours_etudiants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cours_etudiants` (
  `cours_idcours` int(11) NOT NULL,
  `etudiants_idetudiants` int(11) NOT NULL,
  `type_notes` varchar(40) DEFAULT NULL,
  `notes` int(11) DEFAULT NULL,
  `periode_idperiode` int(11) NOT NULL,
  PRIMARY KEY (`cours_idcours`,`etudiants_idetudiants`,`periode_idperiode`),
  KEY `fk_cours_has_etudiants_etudiants1_idx` (`etudiants_idetudiants`),
  KEY `fk_cours_has_etudiants_cours1_idx` (`cours_idcours`),
  KEY `fk_cours_etudiants_periode1_idx` (`periode_idperiode`),
  CONSTRAINT `fk_cours_etudiants_periode1` FOREIGN KEY (`periode_idperiode`) REFERENCES `periode` (`idperiode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cours_has_etudiants_cours1` FOREIGN KEY (`cours_idcours`) REFERENCES `cours` (`idcours`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cours_has_etudiants_etudiants1` FOREIGN KEY (`etudiants_idetudiants`) REFERENCES `etudiants` (`idetudiants`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cours_etudiants`
--

LOCK TABLES `cours_etudiants` WRITE;
/*!40000 ALTER TABLE `cours_etudiants` DISABLE KEYS */;
/*!40000 ALTER TABLE `cours_etudiants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cours_professeur`
--

DROP TABLE IF EXISTS `cours_professeur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cours_professeur` (
  `cours_idcours` int(11) NOT NULL,
  `professeur_idprofesseur` int(11) NOT NULL,
  `nbre_heures` int(11) DEFAULT NULL,
  `periode_idperiode` int(11) NOT NULL,
  PRIMARY KEY (`cours_idcours`,`professeur_idprofesseur`,`periode_idperiode`),
  KEY `fk_cours_has_professeur_professeur1_idx` (`professeur_idprofesseur`),
  KEY `fk_cours_has_professeur_cours1_idx` (`cours_idcours`),
  KEY `fk_cours_professeur_periode1_idx` (`periode_idperiode`),
  CONSTRAINT `fk_cours_has_professeur_cours1` FOREIGN KEY (`cours_idcours`) REFERENCES `cours` (`idcours`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cours_has_professeur_professeur1` FOREIGN KEY (`professeur_idprofesseur`) REFERENCES `professeur` (`idprofesseur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cours_professeur_periode1` FOREIGN KEY (`periode_idperiode`) REFERENCES `periode` (`idperiode`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cours_professeur`
--

LOCK TABLES `cours_professeur` WRITE;
/*!40000 ALTER TABLE `cours_professeur` DISABLE KEYS */;
/*!40000 ALTER TABLE `cours_professeur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etudiants` (
  `idetudiants` int(11) NOT NULL AUTO_INCREMENT,
  `code_etudiant` varchar(40) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `tuteur` varchar(45) DEFAULT NULL,
  `addresse` text,
  `telephone` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`idetudiants`),
  UNIQUE KEY `code_etudiant_UNIQUE` (`code_etudiant`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiants`
--

LOCK TABLES `etudiants` WRITE;
/*!40000 ALTER TABLE `etudiants` DISABLE KEYS */;
INSERT INTO `etudiants` VALUES (1,'Etu-00001','Bergele','Franck','Masculin','2017-09-16','Md Roland Bergele','#1 Duval 30 croix-des-bouquest haiti','4018-6048'),(2,'Etu-00002','Jean','Vanessa','Feminin','2017-09-19','Mr Pierre  Richard','Delmas 48 haiti','3282-4015');
/*!40000 ALTER TABLE `etudiants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscrit`
--

DROP TABLE IF EXISTS `inscrit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscrit` (
  `idinscrit` int(11) NOT NULL AUTO_INCREMENT,
  `classe` varchar(40) DEFAULT NULL,
  `dernier_ecole_frequente` text,
  `periode_idperiode` int(11) NOT NULL,
  `etudiants_idetudiants` int(11) NOT NULL,
  PRIMARY KEY (`idinscrit`,`periode_idperiode`,`etudiants_idetudiants`),
  KEY `fk_inscrit_periode1_idx` (`periode_idperiode`),
  KEY `fk_inscrit_etudiants1_idx` (`etudiants_idetudiants`),
  CONSTRAINT `fk_inscrit_etudiants1` FOREIGN KEY (`etudiants_idetudiants`) REFERENCES `etudiants` (`idetudiants`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_inscrit_periode1` FOREIGN KEY (`periode_idperiode`) REFERENCES `periode` (`idperiode`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscrit`
--

LOCK TABLES `inscrit` WRITE;
/*!40000 ALTER TABLE `inscrit` DISABLE KEYS */;
INSERT INTO `inscrit` VALUES (1,'3eme secondaire','College mixte joinvil jean pierre',2,1),(2,'7eme anne fondamentale','ecole national de port-au-prince',1,2);
/*!40000 ALTER TABLE `inscrit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periode`
--

DROP TABLE IF EXISTS `periode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periode` (
  `idperiode` int(11) NOT NULL AUTO_INCREMENT,
  `periode` int(11) DEFAULT NULL,
  `Annees` date DEFAULT NULL,
  `semestre` varchar(20) DEFAULT NULL,
  `trimestre` varchar(20) DEFAULT NULL,
  `mois` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idperiode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periode`
--

LOCK TABLES `periode` WRITE;
/*!40000 ALTER TABLE `periode` DISABLE KEYS */;
INSERT INTO `periode` VALUES (1,1,'2017-09-12',NULL,NULL,'Novembre'),(2,2,'2015-09-19',NULL,NULL,'Decembre');
/*!40000 ALTER TABLE `periode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personel`
--

DROP TABLE IF EXISTS `personel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personel` (
  `idpersonel` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `sexe` varchar(15) DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `cin_ou_nif` varchar(25) DEFAULT NULL,
  `addresse` varchar(45) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `status_matrimonial` varchar(25) DEFAULT NULL,
  `roles` varchar(25) DEFAULT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `centre_interet` varchar(50) DEFAULT NULL,
  `code_personel` varchar(45) NOT NULL,
  PRIMARY KEY (`idpersonel`),
  UNIQUE KEY `code_personel_UNIQUE` (`code_personel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personel`
--

LOCK TABLES `personel` WRITE;
/*!40000 ALTER TABLE `personel` DISABLE KEYS */;
/*!40000 ALTER TABLE `personel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professeur` (
  `idprofesseur` int(11) NOT NULL AUTO_INCREMENT,
  `code_professeur` varchar(40) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `sexe` varchar(10) DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `cin_ou_nif` varchar(25) DEFAULT NULL,
  `addresse` text,
  `email` varchar(40) DEFAULT NULL,
  `telephone` decimal(10,0) DEFAULT NULL,
  `status_matrimonial` varchar(40) DEFAULT NULL,
  `profession` text,
  `centre_interet` text,
  PRIMARY KEY (`idprofesseur`),
  UNIQUE KEY `code_professeur_UNIQUE` (`code_professeur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professeur`
--

LOCK TABLES `professeur` WRITE;
/*!40000 ALTER TABLE `professeur` DISABLE KEYS */;
/*!40000 ALTER TABLE `professeur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idroles` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`idroles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_has_personel`
--

DROP TABLE IF EXISTS `roles_has_personel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_has_personel` (
  `roles_idroles` int(11) NOT NULL,
  `personel_idpersonel` int(11) NOT NULL,
  PRIMARY KEY (`roles_idroles`,`personel_idpersonel`),
  KEY `fk_roles_has_personel_personel1_idx` (`personel_idpersonel`),
  KEY `fk_roles_has_personel_roles1_idx` (`roles_idroles`),
  CONSTRAINT `fk_roles_has_personel_personel1` FOREIGN KEY (`personel_idpersonel`) REFERENCES `personel` (`idpersonel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_roles_has_personel_roles1` FOREIGN KEY (`roles_idroles`) REFERENCES `roles` (`idroles`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_has_personel`
--

LOCK TABLES `roles_has_personel` WRITE;
/*!40000 ALTER TABLE `roles_has_personel` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles_has_personel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typenotes`
--

DROP TABLE IF EXISTS `typenotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typenotes` (
  `type_notes` varchar(45) DEFAULT NULL,
  `coefficient` int(11) DEFAULT NULL,
  `cours_etudiants_cours_idcours` int(11) NOT NULL,
  `cours_etudiants_etudiants_idetudiants` int(11) NOT NULL,
  PRIMARY KEY (`cours_etudiants_cours_idcours`,`cours_etudiants_etudiants_idetudiants`),
  CONSTRAINT `fk_typenotes_cours_etudiants1` FOREIGN KEY (`cours_etudiants_cours_idcours`, `cours_etudiants_etudiants_idetudiants`) REFERENCES `cours_etudiants` (`cours_idcours`, `etudiants_idetudiants`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typenotes`
--

LOCK TABLES `typenotes` WRITE;
/*!40000 ALTER TABLE `typenotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `typenotes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-22 16:59:42
