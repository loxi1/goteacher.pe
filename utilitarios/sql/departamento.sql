/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : veterinaria

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-12-17 21:32:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `departamento`
-- ----------------------------
DROP TABLE IF EXISTS `departamento`;
CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `departamento` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of departamento
-- ----------------------------
INSERT INTO `departamento` VALUES ('1', 'AMAZONAS');
INSERT INTO `departamento` VALUES ('2', 'ANCASH');
INSERT INTO `departamento` VALUES ('3', 'APURIMAC');
INSERT INTO `departamento` VALUES ('4', 'AREQUIPA');
INSERT INTO `departamento` VALUES ('5', 'AYACUCHO');
INSERT INTO `departamento` VALUES ('6', 'CAJAMARCA');
INSERT INTO `departamento` VALUES ('7', 'REGION CALLAO');
INSERT INTO `departamento` VALUES ('8', 'CUSCO');
INSERT INTO `departamento` VALUES ('9', 'HUANCAVELICA');
INSERT INTO `departamento` VALUES ('10', 'HUANUCO');
INSERT INTO `departamento` VALUES ('11', 'ICA');
INSERT INTO `departamento` VALUES ('12', 'JUNIN');
INSERT INTO `departamento` VALUES ('13', 'LA LIBERTAD');
INSERT INTO `departamento` VALUES ('14', 'LAMBAYEQUE');
INSERT INTO `departamento` VALUES ('15', 'LIMA');
INSERT INTO `departamento` VALUES ('16', 'LORETO');
INSERT INTO `departamento` VALUES ('17', 'MADRE DE DIOS');
INSERT INTO `departamento` VALUES ('18', 'MOQUEGUA');
INSERT INTO `departamento` VALUES ('19', 'PASCO');
INSERT INTO `departamento` VALUES ('20', 'PIURA');
INSERT INTO `departamento` VALUES ('21', 'PUNO');
INSERT INTO `departamento` VALUES ('22', 'SAN MARTI??N');
INSERT INTO `departamento` VALUES ('23', 'TACNA');
INSERT INTO `departamento` VALUES ('24', 'TUMBES');
INSERT INTO `departamento` VALUES ('25', 'UCAYALI');
INSERT INTO `departamento` VALUES ('26', 'NO DETERMINADO');
