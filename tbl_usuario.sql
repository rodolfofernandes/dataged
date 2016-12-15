/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : db_cliente

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2016-12-15 17:55:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_usuario
-- ----------------------------
DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `cd_CPF` char(21) NOT NULL,
  `nm_usuario` varchar(30) NOT NULL,
  `ds_email` varchar(50) NOT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `tp_sexo` char(1) DEFAULT NULL,
  `nm_login` varchar(20) DEFAULT NULL,
  `cd_senha` varchar(50) DEFAULT NULL,
  `ic_ativo` char(1) DEFAULT NULL,
  `tp_acesso` int(1) DEFAULT NULL,
  `dt_cadastro` date DEFAULT NULL,
  `dt_exclusao` date DEFAULT NULL,
  `dt_ultimoAcesso` date DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
