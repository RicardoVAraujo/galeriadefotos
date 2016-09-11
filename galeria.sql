# Host: localhost  (Version 5.7.12-log)
# Date: 2016-07-24 13:48:12
# Generator: MySQL-Front 5.3  (Build 6.26)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "fotos"
#

DROP TABLE IF EXISTS `fotos`;
CREATE TABLE `fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "fotos"
#

INSERT INTO `fotos` VALUES (3,'Gato na Neve','4e97ddfe65e652efa0e156312529af46.jpg'),(4,'Bolo de Chocolate','99d74e0522a47b8fa35362bcade90506.jpg');
