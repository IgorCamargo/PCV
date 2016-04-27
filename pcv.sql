# Host: localhost:3307  (Version: 5.6.16-log)
# Date: 2016-04-25 21:18:18
# Generator: MySQL-Front 5.3  (Build 4.156)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "historico_rota"
#

DROP TABLE IF EXISTS `historico_rota`;
CREATE TABLE `historico_rota` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CidadeRef` varchar(255) DEFAULT NULL,
  `Rota` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "historico_rota"
#

INSERT INTO `historico_rota` VALUES (1,'Aracaju',NULL),(2,'Belem',NULL),(3,'Belo Horizonte',NULL),(4,'Boa Vista',NULL),(5,'Brasilia',NULL),(6,'Campo Grande',NULL),(7,'Cuiaba',NULL),(8,'Curitiba',NULL),(9,'Florianopolis',NULL),(10,'Fortaleza',NULL),(11,'Goiania',NULL),(12,'Joao Pessoa',NULL),(13,'Maceio',NULL),(14,'Manaus',NULL),(15,'Natal',NULL),(16,'Palmas',NULL),(17,'Porto Alegre',NULL),(18,'Porto Velho',NULL),(19,'Recife',NULL),(20,'Rio Branco',NULL),(21,'Rio de Janeiro',NULL),(22,'Salvador',NULL),(23,'Sao Luis',NULL),(24,'Sao Paulo',NULL),(25,'Teresinha',NULL),(26,'Vitoria',NULL);
