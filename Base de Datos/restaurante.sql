-- MariaDB dump 10.19  Distrib 10.10.2-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: restaurante
-- ------------------------------------------------------
-- Server version	10.10.2-MariaDB-log

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
-- Table structure for table `bebidas`
--

DROP TABLE IF EXISTS `bebidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bebidas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `ingredientes` varchar(200) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bebidas`
--

LOCK TABLES `bebidas` WRITE;
/*!40000 ALTER TABLE `bebidas` DISABLE KEYS */;
INSERT INTO `bebidas` VALUES
(1,'PASTÍS','5 Medidas De Agua, Alcohol',130.55,'beb01'),
(2,'ARMAGNAC','Licor de Menta o Crema de Menta, Hielo',180.99,'beb02'),
(3,'CALVADOS','Sidra (Jugo de Manzana Fermentado), Lunas del Juga de Manzana',169.99,'beb03'),
(4,'TRIPLE SEC','Jugo de Naranja, Jugo de Piña, Ron Blanco, Ron Oscuro, Hielo',99.99,'beb04'),
(5,'COGNAC JAPONES','Coñac, Almíbar de Almendras, Amargo de Angostura, Hielo',179.55,'beb05'),
(6,'KIR','Vino blanco Seco y Licor de Casis',150.55,'beb06'),
(7,'MARGARITA','Tequila Blanco, Licor de Naranja, Zumo de Lima, Sal y Sirope de Azúcar, Hielo',110.99,'beb07'),
(8,'COCA-COLA 600 ml','Coca-Cola',69.99,'beb08'),
(9,'JUGO DE NARANJA','Extracto de Naranja, Naranja en Rodajas, Sal',79.99,'beb09');
/*!40000 ALTER TABLE `bebidas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `sucursal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuenta`
--

DROP TABLE IF EXISTS `cuenta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuenta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `nombrePlatillo` varchar(70) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `ingredientes` varchar(100) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `fechaReg` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idCliente` (`idCliente`),
  CONSTRAINT `cuenta_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuenta`
--

LOCK TABLES `cuenta` WRITE;
/*!40000 ALTER TABLE `cuenta` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuenta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entradas`
--

DROP TABLE IF EXISTS `entradas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entradas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `ingredientes` varchar(200) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entradas`
--

LOCK TABLES `entradas` WRITE;
/*!40000 ALTER TABLE `entradas` DISABLE KEYS */;
INSERT INTO `entradas` VALUES
(1,'BISQUE DE HOMARD','Langosta, Aceite de Oliva, Chalota, Apio, Zanahoria, Tomate, Coñac, Vino Blanco, Arroz, Pescado, Pimienta, Ajo',150.99,'img01'),
(2,'VOL-AU-VENT DUCHESSE','Pechuga de Pollo, Champiñones, Ravioles, Nata, Caldo de Pollo, Harina, Mantequilla, Huevo, Nuez, Sal, Pimienta',220.5,'img02'),
(3,'ESCARGOTS À LÀ BOURGUIGNONNE','Mantequilla sin sal, Ajo, Perejil, Échalotes',300.79,'img03'),
(4,'QUICHE LORRAINE','Masa, Panceta, Nata, Huevo, Mantequilla sin sal, Nuez, Pimienta Negra y sal',200.55,'img04'),
(5,'BOUILLABAISSE','Pescado y Maricos, Cebolla, Hinojo, Tomillo, Perejil, Laurel, Tomate, Cascara de Naranja, Aceite de Oliva, Ajo, Azafrán, Pan',250.99,'img05'),
(6,'SALADE NIÇOISE','Huevos, judías Verdes, Hojas Verdes Variadas, Atún, Tomates, Filete Anchoa, Aceituna, Alcaparras, Sal, Vinagre de Vino',270.99,'img06'),
(7,'MELON AU PORTO','Un Melón Redondo, Vino Porto, Jamón',189.99,'img07'),
(8,'HUÎTRES','Ostras, Hielo, Vinagre de Jerez, Échalotes, Aceite de Oliva, Sal, Pimienta',100.55,'img08'),
(9,'TOMATES À LA PROVENÇALE','Tomates, Ajo, Azúcar, Aceite de Oliva, Sal, Perejil, Pimienta',120.55,'img09');
/*!40000 ALTER TABLE `entradas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postres`
--

DROP TABLE IF EXISTS `postres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postres` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `ingredientes` varchar(200) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postres`
--

LOCK TABLES `postres` WRITE;
/*!40000 ALTER TABLE `postres` DISABLE KEYS */;
INSERT INTO `postres` VALUES
(1,'MACARONS','Clara de Huevo, Almendra Molida, Azúcar y Azúcar Glasé',70.99,'post01'),
(2,'FARZ BRETÓN','Harina de Trigo, Mantequilla, Leche, Huevos, Azúcar, Un Toque de Vainilla o Ron',80.55,'post02'),
(3,'TARTE TATIN','Harina de Trigo, Manzana, Caramelo, Azúcar',50.55,'post03'),
(4,'CANELÉS','Huevos, Leche, Azúcar, Mantequilla, Harina, Ron, Vainilla',60.99,'post04'),
(5,'TARTE TROPÉZIENNE','Levadura, Harina, Leche, Huevos, Mantequilla blanda, Azúcar, Crema pastelera',100.99,'post05'),
(6,'CLAFOUTIS','Mantequilla, Azúcar, Leche, Harina, Manzana o Cerezas',110.55,'post06'),
(7,'FINANCIERS','Mantequilla, Harina de Repostería, Almendra en Polvo, Claras de Huevo, Almendras Enteras, Una Pizca de Sal, Azúcar Glasé',130.55,'post07'),
(8,'PAIN dÉPICES','Todo Para Hacer Pan, Una Cantidad de Miel y Especias, Anís, Jengibre',110.99,'post08'),
(9,'PROFITEROLES','Mantequilla, Huevo, Crema de Leche, Azúcar Blanquilla, Crema de Chocolate',150.35,'post09');
/*!40000 ALTER TABLE `postres` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-21 13:57:52
