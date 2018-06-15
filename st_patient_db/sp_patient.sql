/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : sp_patient

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-06-15 09:55:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for person_info
-- ----------------------------
DROP TABLE IF EXISTS `person_info`;
CREATE TABLE `person_info` (
  `person_id` int(7) NOT NULL,
  `id_card` varchar(13) NOT NULL,
  `prefix` int(2) unsigned DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `weight` double(5,0) unsigned NOT NULL,
  `height` double(5,0) NOT NULL,
  `scar` mediumtext,
  `status` char(2) NOT NULL,
  `job` varchar(200) DEFAULT NULL,
  `workplace` varchar(200) DEFAULT NULL,
  `tel_work` char(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `mu` varchar(4) DEFAULT NULL,
  `road` varchar(100) DEFAULT NULL,
  `tambol` varchar(100) DEFAULT NULL,
  `amphur` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `edu` varchar(2) DEFAULT NULL,
  `edu_detail` varchar(100) DEFAULT NULL,
  `line_id` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `person_em` varchar(100) DEFAULT NULL,
  `tel_em` varchar(20) DEFAULT NULL,
  `exp_1` mediumtext,
  `exp_2` mediumtext,
  `exp_3` mediumtext,
  `exp_4` mediumtext,
  `time_to_come` varchar(2) NOT NULL,
  PRIMARY KEY (`person_id`),
  KEY `prefix` (`prefix`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of person_info
-- ----------------------------

-- ----------------------------
-- Table structure for prefix
-- ----------------------------
DROP TABLE IF EXISTS `prefix`;
CREATE TABLE `prefix` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `prefix` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of prefix
-- ----------------------------
INSERT INTO `prefix` VALUES ('1', 'ด.ช.');

-- ----------------------------
-- Table structure for sp_act
-- ----------------------------
DROP TABLE IF EXISTS `sp_act`;
CREATE TABLE `sp_act` (
  `sp_act_id` int(5) NOT NULL,
  `sp_code` varchar(3) NOT NULL,
  `sp_act_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sp_act_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sp_act
-- ----------------------------

-- ----------------------------
-- Table structure for sp_info
-- ----------------------------
DROP TABLE IF EXISTS `sp_info`;
CREATE TABLE `sp_info` (
  `sp_info_id` int(5) NOT NULL,
  `person_id` int(7) NOT NULL,
  `date` date NOT NULL,
  `sp_act_id` int(5) DEFAULT NULL,
  `symp_id` int(11) unsigned DEFAULT NULL,
  `evaluation` char(1) DEFAULT NULL,
  `comment` mediumtext,
  PRIMARY KEY (`sp_info_id`),
  KEY `sp_act_id` (`sp_act_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sp_info
-- ----------------------------

-- ----------------------------
-- Table structure for symptom
-- ----------------------------
DROP TABLE IF EXISTS `symptom`;
CREATE TABLE `symptom` (
  `sym_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sym_name` varchar(255) NOT NULL,
  PRIMARY KEY (`sym_id`),
  UNIQUE KEY `id` (`sym_id`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of symptom
-- ----------------------------
INSERT INTO `symptom` VALUES ('1', '');
INSERT INTO `symptom` VALUES ('2', 'acute glomerulonephritis');
INSERT INTO `symptom` VALUES ('3', 'acute pancreatitis');
INSERT INTO `symptom` VALUES ('4', 'angina pectoris');
INSERT INTO `symptom` VALUES ('5', 'benign venus');
INSERT INTO `symptom` VALUES ('6', 'bitemporal hemianopia');
INSERT INTO `symptom` VALUES ('7', 'breast feeding');
INSERT INTO `symptom` VALUES ('8', 'CA Cx.');
INSERT INTO `symptom` VALUES ('9', 'cardiogenic syncope');
INSERT INTO `symptom` VALUES ('10', 'carpal tunnel');
INSERT INTO `symptom` VALUES ('11', 'cervical nerve root 6 radiculopathy/compression');
INSERT INTO `symptom` VALUES ('12', 'consent tonsil');
INSERT INTO `symptom` VALUES ('13', 'DM');
INSERT INTO `symptom` VALUES ('14', 'ectopic pregnancy');
INSERT INTO `symptom` VALUES ('15', 'G6PD deficiency');
INSERT INTO `symptom` VALUES ('16', 'Genetic counseling');
INSERT INTO `symptom` VALUES ('17', 'hematochesia');
INSERT INTO `symptom` VALUES ('18', 'hemophilia');
INSERT INTO `symptom` VALUES ('19', 'herpes zooster');
INSERT INTO `symptom` VALUES ('20', 'HNP rt.5th lumbar compression');
INSERT INTO `symptom` VALUES ('21', 'lumbar puncture');
INSERT INTO `symptom` VALUES ('22', 'majordepressive disorder');
INSERT INTO `symptom` VALUES ('23', 'maxillofacial injury');
INSERT INTO `symptom` VALUES ('24', 'normal breast');
INSERT INTO `symptom` VALUES ('25', 'obstructive jaundice');
INSERT INTO `symptom` VALUES ('26', 'paroxysmal ventricular tachycardia');
INSERT INTO `symptom` VALUES ('27', 'Poor visual acuity');
INSERT INTO `symptom` VALUES ('28', 'postural drainage');
INSERT INTO `symptom` VALUES ('29', 'premature rupture of membranes');
INSERT INTO `symptom` VALUES ('30', 'primary survey');
INSERT INTO `symptom` VALUES ('31', 'right homonymous hemianopia');
INSERT INTO `symptom` VALUES ('32', 'roseolar infantum');
INSERT INTO `symptom` VALUES ('33', 'splint');
INSERT INTO `symptom` VALUES ('34', 'URI');
INSERT INTO `symptom` VALUES ('35', 'viral gastroenteritis');
INSERT INTO `symptom` VALUES ('36', 'jaundice');
INSERT INTO `symptom` VALUES ('37', 'urethral cath.');
INSERT INTO `symptom` VALUES ('38', 'anterior nasal packing');
INSERT INTO `symptom` VALUES ('39', 'pap smear');
INSERT INTO `symptom` VALUES ('40', 'CPR');
INSERT INTO `symptom` VALUES ('41', 'disability');
INSERT INTO `symptom` VALUES ('42', 'labor curve');
INSERT INTO `symptom` VALUES ('43', 'EKG tracing');
INSERT INTO `symptom` VALUES ('44', 'Gram, AFB, Tzank stain');
INSERT INTO `symptom` VALUES ('45', 'abd.x-ray');
INSERT INTO `symptom` VALUES ('46', 'blood smear');
INSERT INTO `symptom` VALUES ('47', 'basic CPR');
INSERT INTO `symptom` VALUES ('48', 'suturing');
INSERT INTO `symptom` VALUES ('49', '???????????????????(?????????? ???? ???????????????)');
INSERT INTO `symptom` VALUES ('50', 'stool exam');
INSERT INTO `symptom` VALUES ('51', 'meningococcal septicemia');
INSERT INTO `symptom` VALUES ('52', 'RUL atelectasis ???? lung tumor');
INSERT INTO `symptom` VALUES ('53', 'thrombotic thrombocytopenic purpura (TTP)');
INSERT INTO `symptom` VALUES ('54', 'ventricular tachycardia');
INSERT INTO `symptom` VALUES ('55', 'DMPA');
INSERT INTO `symptom` VALUES ('56', 'incision & drain');
INSERT INTO `symptom` VALUES ('57', 'remove foreign body');
INSERT INTO `symptom` VALUES ('58', '??????????????????? (fracture of left clavicle)');
INSERT INTO `symptom` VALUES ('59', 'acute cholecystitis');
