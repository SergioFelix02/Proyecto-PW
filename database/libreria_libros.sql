CREATE DATABASE  IF NOT EXISTS `libreria` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `libreria`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: libreria.capm1ejvj3fy.us-west-1.rds.amazonaws.com    Database: libreria
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
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
-- Table structure for table `libros`
--

DROP TABLE IF EXISTS `libros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `libros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `autor` varchar(50) DEFAULT NULL,
  `foto` varchar(999) DEFAULT NULL,
  `favoritos` tinyint(1) DEFAULT NULL,
  `puntuacion` double DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `leerdespues` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libros`
--

LOCK TABLES `libros` WRITE;
/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` VALUES (1,'El Seños de los Anillos, la Comunidad del Anillo','J. R. R. Tolkien',' https://images-na.ssl-images-amazon.com/images/I/816QLZKwmIL.jpg',1,4.5,'2022-05-12 07:21:26','Fantasía',1),(2,'Harry Potter','J.K. Rowling',' https://images-na.ssl-images-amazon.com/images/I/91R1AixEiLL.jpg',1,4.7,'2022-05-12 07:22:36','Fantasía',1),(3,'Juego de Tronos','George R.R. Martin','https://images-na.ssl-images-amazon.com/images/I/41yADQ1wEhL._SY344_BO1,204,203,200_QL70_ML2_.jpg ',1,5,'2022-05-12 07:22:45','Fantasía',1),(4,'Wigetta','Vegetta777 & Willyrex',' https://images-na.ssl-images-amazon.com/images/I/91onbOzEJYL.jpg',0,3.9,'2022-05-12 07:22:50','Aventura',NULL),(5,'El Hobbit','J. R. R. Tolkien',' https://images-na.ssl-images-amazon.com/images/I/81VxEj--PkL.jpg',0,4.2,'2022-05-12 07:22:53','Fantasía',NULL),(6,'Los Juegos del Hambre','S. Collins','https://m.media-amazon.com/images/I/41k0dOgLx+L.jpg ',1,4.6,'2022-05-12 07:23:03','Aventura',NULL),(7,'Festival de la Blasfemia','Dross Rotzank','https://m.media-amazon.com/images/I/519aEp6aq2L.jpg',1,4,'2022-05-12 07:23:13','Terror y Suspenso',1),(8,'Bajo la misma estrella','J. Green','https://images-na.ssl-images-amazon.com/images/I/81sImSY6vvL.jpg ',0,3.8,'2022-05-12 07:24:40','Novela Romantica',NULL),(9,'The Walking Dead: El gobernador','J. Bonansinga, R. Kirkman',' https://www.planetadelibros.com.mx/usuaris/libros/fotos/141/m_libros/140858_the-walking-dead-el-gobernador_9788448040338.jpg',1,4.3,'2022-05-12 07:24:47','Ciencia Ficcion',1),(10,'12 reglas para vivir: Un antídoto al caos','J. Peterson',' https://images-na.ssl-images-amazon.com/images/I/61fM5ZTv+zL.jpg',0,4.5,'2022-05-12 07:24:50','Otros',NULL),(11,'50 sombras de Grey','E. L. James','https://images-na.ssl-images-amazon.com/images/I/81H6eD1rVvL.jpg',0,4.6,'2022-05-12 07:24:58','Novela Erotica',NULL),(12,'Diario de Greg 1','J. Kinney','https://images-na.ssl-images-amazon.com/images/I/91LtKsGoUmL.jpg',1,4.5,'2022-05-12 07:25:01','Juvenil',1),(15,'Thirteen reasons why','J. Asher','https://images-na.ssl-images-amazon.com/images/I/8174dqojKcL.jpg',1,4.5,'2022-05-13 08:54:05','Misterio',0),(16,'Dune','Frank Herbert','https://images-na.ssl-images-amazon.com/images/I/81ym3QUd3KL.jpg',1,4.8,'2022-05-13 08:54:53','Ciencia Ficcion',1),(17,'El poder del perro','D. Winslow','https://m.media-amazon.com/images/I/51knq-IRXiL.jpg',0,4.7,'2022-05-13 08:57:30','Aventura',NULL),(18,'El Psicoanalista','J. Katzenbach','https://images-na.ssl-images-amazon.com/images/I/91-ELvEEeIL.jpg',1,4.9,'2022-05-13 08:58:24','Thriller',NULL),(19,'El Juego del Alma','J. Castillo','https://m.media-amazon.com/images/I/41zKtEAVh5L.jpg',0,4.3,'2022-05-13 08:59:41','Thriller',NULL),(20,'La Paciente Silenciosa','A. Michaelides','https://m.media-amazon.com/images/I/41R0uVX8eEL.jpg',0,4.7,'2022-05-13 09:00:40','Misterio',NULL),(21,'La Chica de al Lado','J. Ketchum ','https://imagessl1.casadellibro.com/a/l/t5/91/9788490185391.jpg',1,4.8,'2022-05-13 09:04:11','Terror y Suspenso',NULL),(22,'Te Veré Bajo el Hielo','R. Bryndza','https://www.rocalibros.com/archivos/imagenes/mayores/2767.jpg',1,4.7,'2022-05-13 09:04:59','Thriller',1),(23,'Cabal','C. Barker','https://images-na.ssl-images-amazon.com/images/I/61WKkkaGs9L._SX359_BO1,204,203,200_.jpg',1,4.2,'2022-05-13 09:06:01','Terror y Suspenso',NULL),(24,'Nosotros en la Luna','Alice Kellen','https://www.planetadelibros.com/usuaris/libros/fotos/310/m_libros/portada_nosotros-en-la-luna_alice-kellen_201911261050.jpg',0,4.3,'2022-05-13 09:07:22','Terror y Suspenso',NULL),(25,'Hearstopper Vol. 1','A. Oseman','https://images-na.ssl-images-amazon.com/images/I/41arMDQ7cAL._SX325_BO1,204,203,200_.jpg',0,4.5,'2022-05-13 09:08:00','Terror y Suspenso',0),(26,'IT','Stephen King','https://m.media-amazon.com/images/I/41nngxCNKxL.jpg',1,5,'2022-05-13 09:09:21','Terror y Suspenso',1),(27,'El Resplandor','Stephen King','https://images-na.ssl-images-amazon.com/images/I/81ySgYEwArL.jpg',1,4.9,'2022-05-13 09:09:58','Terror y Suspenso',1);
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;
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

-- Dump completed on 2022-05-13 20:23:45
