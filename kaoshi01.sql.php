/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : kaoshi01

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-05-11 09:01:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `a_id` smallint(2) NOT NULL AUTO_INCREMENT,
  `a_user` varchar(50) DEFAULT NULL,
  `a_pass` varchar(50) DEFAULT NULL,
  `a_count` smallint(6) DEFAULT '0',
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '5dc517612ded0033fe2f90cdeebeb57d', '203');

-- ----------------------------
-- Table structure for `cart`
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_user` varchar(50) DEFAULT NULL,
  `c_user_id` smallint(6) DEFAULT '0',
  `c_confirm` tinyint(4) DEFAULT '1',
  `c_products_type` tinyint(4) DEFAULT '0',
  `c_products_id` smallint(6) DEFAULT '0',
  `c_products_quantity` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('3', 'qqqqqq', '2', '1', '1', '17', '1');
INSERT INTO `cart` VALUES ('2', 'qqqqqq', '2', '1', '1', '18', '1');
INSERT INTO `cart` VALUES ('4', '2013222123', '3', '1', '1', '17', '127');
INSERT INTO `cart` VALUES ('6', 'aaa123', '4', '1', '1', '20', '1');
INSERT INTO `cart` VALUES ('7', 'mpxq22', '5', '1', '1', '19', '1');

-- ----------------------------
-- Table structure for `cart_kw`
-- ----------------------------
DROP TABLE IF EXISTS `cart_kw`;
CREATE TABLE `cart_kw` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_user` varchar(50) DEFAULT NULL,
  `c_user_id` smallint(6) DEFAULT '0',
  `c_cart_id` smallint(6) DEFAULT '0',
  `c_products2_type` tinyint(4) DEFAULT '0',
  `c_products2_id` smallint(6) DEFAULT '0',
  `c_products2_quantity` smallint(6) DEFAULT '0',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart_kw
-- ----------------------------

-- ----------------------------
-- Table structure for `cn_about`
-- ----------------------------
DROP TABLE IF EXISTS `cn_about`;
CREATE TABLE `cn_about` (
  `a_id` smallint(2) NOT NULL DEFAULT '0',
  `a_content` text,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_about
-- ----------------------------
INSERT INTO `cn_about` VALUES ('1', '<p><span style=\"font-size: 12px\">后台对应可以编辑</span></p>\r\n');
INSERT INTO `cn_about` VALUES ('2', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>');
INSERT INTO `cn_about` VALUES ('3', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>');
INSERT INTO `cn_about` VALUES ('4', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>');
INSERT INTO `cn_about` VALUES ('5', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>');
INSERT INTO `cn_about` VALUES ('11', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>');
INSERT INTO `cn_about` VALUES ('12', '<p><strong><span style=\"font-size: 14px\">欢迎来电询问</span></strong><br />\r\n后台编辑</p>\r\n');

-- ----------------------------
-- Table structure for `cn_aboutus`
-- ----------------------------
DROP TABLE IF EXISTS `cn_aboutus`;
CREATE TABLE `cn_aboutus` (
  `a_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `a_class` smallint(6) DEFAULT '0',
  `a_order` smallint(6) DEFAULT '0',
  `a_name` varchar(255) DEFAULT NULL,
  `a_cuslink` varchar(255) DEFAULT NULL,
  `a_content` text,
  `k_name` varchar(255) DEFAULT NULL,
  `k_keyword` varchar(255) DEFAULT NULL,
  `k_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_aboutus
-- ----------------------------
INSERT INTO `cn_aboutus` VALUES ('1', '99', '1', '报名流程', '', '<p style=\"text-align: center\"><span style=\"font-size: 36px\"><span style=\"color: #0000ff\"><span style=\"font-family: 黑体\">全国英语等级考试报名流程</span></span></span></p>\r\n\r\n<p><span style=\"font-size: 22px\"><span style=\"font-family: 黑体\">一、注册与登陆</span></span></p>\r\n\r\n<p><span style=\"font-family: 宋体\"><span style=\"font-size: 18px\">说明:使用本系统请先注册。考生需要登陆后才能报名、修改和查询。注册意味着您接受我们的报名规则。</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size: 22px\"><span style=\"font-family: 黑体\">二、填写资料并上传相片&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-family: 宋体\"><span style=\"font-size: 18px\">说明:考生在报名之前需要填写真实完整的个人信息，报名后不再提供修改，请务必慎重填写并核对！这将意味着您对填写的个人信息承诺真实性。</span></span></p>\r\n\r\n<p><span style=\"font-family: 宋体\"><span style=\"font-size: 18px\">上传相片说明:考生报名后方可上传电子照片。电子照片宽144高192，文件大小不超过500KB。(可通过右键单击照片文件，选择&quot;属性&quot;查看。)</span></span><span style=\"font-size: 18px\"><span style=\"font-family: 黑体\"> </span></span></p>\r\n\r\n<p><span style=\"font-size: 22px\"><span style=\"font-family: 黑体\">三、填写报考科目和保留成绩&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-family: 宋体\"><span style=\"font-size: 18px\">说明:考生报名时需选择报考科目，如有保留成绩，需填写要补考的类别（笔试、口试）和上次考试的准考证号。</span></span><span style=\"font-size: 18px\"><span style=\"font-family: 黑体\">&nbsp;</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size: 22px\"><span style=\"font-family: 黑体\">四、报名表打印和确认交费&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-family: 宋体\"><span style=\"font-size: 18px\">说明:到考点交费后，请再次登陆核对报名信息（包括交费情况）。没有交费就未完成报名。有问题请联系考点(0660-3367733郑老师)。</span></span></p>\r\n\r\n<p><strong><span style=\"font-family: 宋体\"><span style=\"font-size: 18px\"><span style=\"color: #ff0000\">另：如果网上报名遇到的问题请联系网络中心李老师。</span></span></span></strong></p>\r\n\r\n<p><strong><span style=\"font-family: 宋体\"><span style=\"font-size: 18px\"><span style=\"color: #ff0000\">QQ：1908772803；办公地点：实训楼202；移动短号：669788</span></span></span></strong></p>\r\n\r\n<p><span style=\"font-size: 22px\"><span style=\"font-family: 黑体\">五、收费标准（单位：元）</span></span></p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" height=\"66\" width=\"500\">\r\n	<tbody>\r\n		<tr>\r\n			<td>考试项目</td>\r\n			<td>全考</td>\r\n			<td>笔试</td>\r\n			<td>口试</td>\r\n		</tr>\r\n		<tr>\r\n			<td>一级B、一级、二级</td>\r\n			<td>110</td>\r\n			<td>80</td>\r\n			<td>30</td>\r\n		</tr>\r\n		<tr>\r\n			<td>三级</td>\r\n			<td>160</td>\r\n			<td>100</td>\r\n			<td>60</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', null, null, null);
INSERT INTO `cn_aboutus` VALUES ('2', '99', '2', '子栏目二', '', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n', null, null, null);
INSERT INTO `cn_aboutus` VALUES ('3', '99', '3', '子栏目三', '', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n', null, null, null);
INSERT INTO `cn_aboutus` VALUES ('4', '2', '4', '荣誉资质', '', '', null, null, null);

-- ----------------------------
-- Table structure for `cn_about_image`
-- ----------------------------
DROP TABLE IF EXISTS `cn_about_image`;
CREATE TABLE `cn_about_image` (
  `a_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `a_class` smallint(6) DEFAULT '0',
  `a_order` smallint(6) DEFAULT '0',
  `a_name` varchar(255) DEFAULT NULL,
  `a_image` varchar(50) DEFAULT NULL,
  `a_thumb` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_about_image
-- ----------------------------
INSERT INTO `cn_about_image` VALUES ('1', '2', '1', '图片名称1', 'uploadfiles/2013_phpv1.jpg', 'thumbs/2013_phpv1.jpg');
INSERT INTO `cn_about_image` VALUES ('2', '2', '2', '图片名称2', 'uploadfiles/2013_phpv1.jpg', 'thumbs/2013_phpv1.jpg');
INSERT INTO `cn_about_image` VALUES ('3', '2', '3', '图片名称3', 'uploadfiles/2013_phpv1.jpg', 'thumbs/2013_phpv1.jpg');
INSERT INTO `cn_about_image` VALUES ('4', '2', '4', '图片名称4', 'uploadfiles/2013_phpv1.jpg', 'thumbs/2013_phpv1.jpg');
INSERT INTO `cn_about_image` VALUES ('5', '2', '5', '图片名称5', 'uploadfiles/2013_phpv1.jpg', 'thumbs/2013_phpv1.jpg');
INSERT INTO `cn_about_image` VALUES ('6', '2', '6', '图片名称6', 'uploadfiles/2013_phpv1.jpg', 'thumbs/2013_phpv1.jpg');

-- ----------------------------
-- Table structure for `cn_ad`
-- ----------------------------
DROP TABLE IF EXISTS `cn_ad`;
CREATE TABLE `cn_ad` (
  `a_id` smallint(2) NOT NULL AUTO_INCREMENT,
  `a_class` tinyint(4) DEFAULT '0',
  `a_order` smallint(2) DEFAULT '0',
  `a_title` varchar(255) DEFAULT NULL,
  `a_image` varchar(255) DEFAULT NULL,
  `a_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_ad
-- ----------------------------
INSERT INTO `cn_ad` VALUES ('1', '1', '1', '', 'uploadfiles/20141128_214001.png', '');
INSERT INTO `cn_ad` VALUES ('6', '2', '1', '', 'uploadfiles/20141028_212007.jpg', '');
INSERT INTO `cn_ad` VALUES ('7', '2', '2', '', 'uploadfiles/20141028_212009.jpg', '');
INSERT INTO `cn_ad` VALUES ('8', '2', '3', '', 'uploadfiles/20141028_212012.jpg', '');

-- ----------------------------
-- Table structure for `cn_banner`
-- ----------------------------
DROP TABLE IF EXISTS `cn_banner`;
CREATE TABLE `cn_banner` (
  `b_id` smallint(2) NOT NULL DEFAULT '0',
  `b_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_banner
-- ----------------------------
INSERT INTO `cn_banner` VALUES ('1', '');
INSERT INTO `cn_banner` VALUES ('2', '');
INSERT INTO `cn_banner` VALUES ('3', '');
INSERT INTO `cn_banner` VALUES ('4', '');
INSERT INTO `cn_banner` VALUES ('5', '');
INSERT INTO `cn_banner` VALUES ('6', '');
INSERT INTO `cn_banner` VALUES ('7', '');
INSERT INTO `cn_banner` VALUES ('8', '');
INSERT INTO `cn_banner` VALUES ('9', '');
INSERT INTO `cn_banner` VALUES ('10', '');
INSERT INTO `cn_banner` VALUES ('11', '');
INSERT INTO `cn_banner` VALUES ('12', '');
INSERT INTO `cn_banner` VALUES ('13', '');
INSERT INTO `cn_banner` VALUES ('14', '');
INSERT INTO `cn_banner` VALUES ('15', '');

-- ----------------------------
-- Table structure for `cn_config`
-- ----------------------------
DROP TABLE IF EXISTS `cn_config`;
CREATE TABLE `cn_config` (
  `s_id` smallint(6) NOT NULL DEFAULT '0',
  `s_name` varchar(255) DEFAULT NULL,
  `s_domain` varchar(255) DEFAULT NULL,
  `s_keyword` varchar(255) DEFAULT NULL,
  `s_description` varchar(255) DEFAULT NULL,
  `s_copyright` text,
  `s_tel` varchar(50) DEFAULT NULL,
  `s_tdc` varchar(50) DEFAULT NULL,
  `s_weibo` varchar(255) DEFAULT NULL,
  `s_tqq` varchar(255) DEFAULT NULL,
  `s_postage` smallint(6) DEFAULT '0',
  `s_postage_amount` smallint(6) DEFAULT '0',
  `s_coupon` decimal(2,1) DEFAULT '0.0',
  `s_coupon_name` varchar(50) DEFAULT NULL,
  `s_soc` smallint(6) DEFAULT '0',
  `s_soc2` smallint(6) DEFAULT '0',
  `s_soc2_code` text,
  `s_stat` smallint(6) DEFAULT '0',
  `s_stat_code` text,
  `s_se_email` varchar(50) DEFAULT NULL,
  `s_se_name` varchar(50) DEFAULT NULL,
  `s_se_pass` varchar(50) DEFAULT NULL,
  `s_se_smtp` varchar(50) DEFAULT NULL,
  `s_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_config
-- ----------------------------
INSERT INTO `cn_config` VALUES ('1', '汕尾职业技术学院-全国英语等级考试', 'http://', '汕尾职业技术学院-全国英语等级考试', '汕尾职业技术学院-全国英语等级考试', '<p style=\"text-align: center\">版权所有： Copyright <span style=\"font-family: arial, helvetica, sans-serif\">&copy;</span> 2014</p>\r\n', '0755-88888888', 'uploadfiles/20141028_212102.jpg', 'http://tqq.com', 'http://weibo.com', '15', '100', '9.5', '95折及赠送甜品（甜品目前仅限深圳地区）', '0', '0', '', '0', '', '455948725@qq.com', 'liukun', '', 'smtp.qq.com', 'liukun615@126.com');

-- ----------------------------
-- Table structure for `cn_keywords`
-- ----------------------------
DROP TABLE IF EXISTS `cn_keywords`;
CREATE TABLE `cn_keywords` (
  `k_id` smallint(2) NOT NULL DEFAULT '0',
  `k_name` varchar(255) DEFAULT NULL,
  `k_keyword` varchar(255) DEFAULT NULL,
  `k_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`k_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_keywords
-- ----------------------------
INSERT INTO `cn_keywords` VALUES ('1', null, null, null);
INSERT INTO `cn_keywords` VALUES ('2', null, null, null);
INSERT INTO `cn_keywords` VALUES ('3', null, null, null);
INSERT INTO `cn_keywords` VALUES ('4', null, null, null);
INSERT INTO `cn_keywords` VALUES ('5', null, null, null);
INSERT INTO `cn_keywords` VALUES ('6', null, null, null);
INSERT INTO `cn_keywords` VALUES ('7', null, null, null);
INSERT INTO `cn_keywords` VALUES ('8', null, null, null);
INSERT INTO `cn_keywords` VALUES ('9', null, null, null);
INSERT INTO `cn_keywords` VALUES ('10', null, null, null);

-- ----------------------------
-- Table structure for `cn_links`
-- ----------------------------
DROP TABLE IF EXISTS `cn_links`;
CREATE TABLE `cn_links` (
  `l_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `l_class` smallint(6) DEFAULT '0',
  `l_name` varchar(255) DEFAULT NULL,
  `l_image` varchar(255) DEFAULT NULL,
  `l_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_links
-- ----------------------------
INSERT INTO `cn_links` VALUES ('1', '1', '友情链接1', '', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('2', '1', '友情链接2', '', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('3', '1', '友情链接3', '', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('4', '1', '友情链接4', '', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('5', '1', '友情链接5', '', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('6', '1', '友情链接6', '', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('7', '1', '友情链接7', '', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('8', '1', '友情链接8', '', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('9', '1', '友情链接9', '', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('10', '1', '友情链接10', '', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('11', '2', '图片链接1', 'http://www.baidu.com/img/baidu_sylogo1.gif', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('12', '2', '图片链接2', 'http://www.baidu.com/img/baidu_sylogo1.gif', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('13', '2', '图片链接3', 'http://www.baidu.com/img/baidu_sylogo1.gif', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('14', '2', '图片链接4', 'http://www.baidu.com/img/baidu_sylogo1.gif', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('15', '2', '图片链接5', 'http://www.baidu.com/img/baidu_sylogo1.gif', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('16', '2', '图片链接6', 'http://www.baidu.com/img/baidu_sylogo1.gif', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('17', '2', '图片链接7', 'http://www.baidu.com/img/baidu_sylogo1.gif', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('18', '2', '图片链接8', 'http://www.baidu.com/img/baidu_sylogo1.gif', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('19', '2', '图片链接9', 'http://www.baidu.com/img/baidu_sylogo1.gif', 'http://www.baidu.com');
INSERT INTO `cn_links` VALUES ('20', '2', '图片链接10', 'http://www.baidu.com/img/baidu_sylogo1.gif', 'http://www.baidu.com');

-- ----------------------------
-- Table structure for `cn_news`
-- ----------------------------
DROP TABLE IF EXISTS `cn_news`;
CREATE TABLE `cn_news` (
  `n_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `n_class` smallint(6) DEFAULT '0',
  `n_index` tinyint(4) DEFAULT '0',
  `n_title` varchar(255) DEFAULT NULL,
  `n_content` text,
  `n_date` datetime DEFAULT NULL,
  `n_count` smallint(6) DEFAULT '0',
  `k_name` varchar(255) DEFAULT NULL,
  `k_keyword` varchar(255) DEFAULT NULL,
  `k_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_news
-- ----------------------------
INSERT INTO `cn_news` VALUES ('1', '1', '0', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 08:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('2', '1', '0', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 09:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('3', '1', '0', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 10:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('4', '1', '0', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 11:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('5', '1', '0', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 12:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('6', '1', '0', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 13:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('7', '1', '0', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 14:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('8', '1', '0', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 15:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('9', '1', '1', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 16:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('10', '1', '0', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 17:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('11', '1', '1', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 18:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('12', '1', '0', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 19:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('13', '1', '0', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 20:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('14', '1', '1', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 21:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('15', '1', '0', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p><p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>', '2014-08-16 22:00:00', '0', null, null, null);
INSERT INTO `cn_news` VALUES ('16', '1', '1', '测试数据测试数据测试数据测试数据测试数据测试数据测试数据', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n', '2014-08-16 23:00:00', '0', '', '', '');

-- ----------------------------
-- Table structure for `cn_news_class`
-- ----------------------------
DROP TABLE IF EXISTS `cn_news_class`;
CREATE TABLE `cn_news_class` (
  `n_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `n_sid` smallint(6) DEFAULT '0',
  `n_order` smallint(6) DEFAULT '0',
  `n_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_news_class
-- ----------------------------
INSERT INTO `cn_news_class` VALUES ('1', '0', '1', '公司新闻');
INSERT INTO `cn_news_class` VALUES ('2', '0', '2', '行业新闻');

-- ----------------------------
-- Table structure for `cn_online_service`
-- ----------------------------
DROP TABLE IF EXISTS `cn_online_service`;
CREATE TABLE `cn_online_service` (
  `o_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `o_class` smallint(6) DEFAULT '0',
  `o_order` smallint(6) DEFAULT '0',
  `o_name` varchar(50) DEFAULT NULL,
  `o_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_online_service
-- ----------------------------
INSERT INTO `cn_online_service` VALUES ('1', '1', '1', '客服名称1', 'QQ');
INSERT INTO `cn_online_service` VALUES ('2', '2', '2', '客服名称2', 'MSN');
INSERT INTO `cn_online_service` VALUES ('3', '3', '3', '客服名称3', 'Skype');
INSERT INTO `cn_online_service` VALUES ('4', '5', '4', '客服名称4', 'Wang');

-- ----------------------------
-- Table structure for `cn_products`
-- ----------------------------
DROP TABLE IF EXISTS `cn_products`;
CREATE TABLE `cn_products` (
  `p_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `p_class` smallint(6) DEFAULT '0',
  `p_subclass` smallint(6) DEFAULT '0',
  `p_thdclass` smallint(6) DEFAULT '0',
  `p_order` smallint(6) DEFAULT '0',
  `p_index` tinyint(4) DEFAULT '0',
  `p_commend` tinyint(4) DEFAULT '0',
  `p_hot` tinyint(4) DEFAULT '0',
  `p_new` tinyint(4) DEFAULT '0',
  `p_name` varchar(255) DEFAULT NULL,
  `p_price` smallint(6) DEFAULT '0',
  `p_image` varchar(50) DEFAULT NULL,
  `p_thumb` varchar(50) DEFAULT NULL,
  `p_imagei` varchar(50) DEFAULT NULL,
  `p_nd` tinyint(4) DEFAULT '0',
  `p_time` varchar(50) DEFAULT NULL,
  `p_file` varchar(50) DEFAULT NULL,
  `p_desc` text,
  `p_video` varchar(255) DEFAULT NULL,
  `p_content` text,
  `p_date` datetime DEFAULT NULL,
  `p_date1` datetime DEFAULT NULL,
  `p_count` smallint(6) DEFAULT '0',
  `k_name` varchar(255) DEFAULT NULL,
  `k_keyword` varchar(255) DEFAULT NULL,
  `k_description` varchar(255) DEFAULT NULL,
  `qianzui` varchar(255) DEFAULT NULL,
  `weishu` varchar(255) DEFAULT NULL,
  `new_qianzui` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_products
-- ----------------------------
INSERT INTO `cn_products` VALUES ('27', '2', '0', '0', '1', '0', '0', '0', '0', '全国英语等级考试（PETS）', '0', null, null, null, '0', null, null, '考试时间：2015-3-28至2015-3-29 考试费用：按所选科目到系办交费。', null, '<p>枯</p>\r\n', '2015-03-28 00:00:00', '2014-12-31 00:00:00', '0', null, null, null, '1501142', '7', '1501151');

-- ----------------------------
-- Table structure for `cn_products2`
-- ----------------------------
DROP TABLE IF EXISTS `cn_products2`;
CREATE TABLE `cn_products2` (
  `p_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `p_class` smallint(6) DEFAULT '0',
  `p_order` smallint(6) DEFAULT '0',
  `p_name` varchar(255) DEFAULT NULL,
  `p_price` smallint(6) DEFAULT '0',
  `p_image` varchar(50) DEFAULT NULL,
  `p_thumb` varchar(50) DEFAULT NULL,
  `p_nd` tinyint(4) DEFAULT '0',
  `p_time` varchar(50) DEFAULT NULL,
  `p_file` varchar(50) DEFAULT NULL,
  `p_desc` text,
  `p_video` varchar(255) DEFAULT NULL,
  `p_content` text,
  `p_content2` text,
  `p_date` datetime DEFAULT NULL,
  `p_count` smallint(6) DEFAULT '0',
  `k_name` varchar(255) DEFAULT NULL,
  `k_keyword` varchar(255) DEFAULT NULL,
  `k_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_products2
-- ----------------------------

-- ----------------------------
-- Table structure for `cn_products2_kw`
-- ----------------------------
DROP TABLE IF EXISTS `cn_products2_kw`;
CREATE TABLE `cn_products2_kw` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_class` smallint(6) DEFAULT '0',
  `p_order` smallint(6) DEFAULT '0',
  `p_name` varchar(50) DEFAULT NULL,
  `p_price` smallint(6) DEFAULT '0',
  `p_image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_products2_kw
-- ----------------------------

-- ----------------------------
-- Table structure for `cn_products2_rc`
-- ----------------------------
DROP TABLE IF EXISTS `cn_products2_rc`;
CREATE TABLE `cn_products2_rc` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_class` smallint(6) DEFAULT '0',
  `p_order` smallint(6) DEFAULT '0',
  `p_name` varchar(50) DEFAULT NULL,
  `p_price` smallint(6) DEFAULT '0',
  `p_image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_products2_rc
-- ----------------------------

-- ----------------------------
-- Table structure for `cn_products2_sc`
-- ----------------------------
DROP TABLE IF EXISTS `cn_products2_sc`;
CREATE TABLE `cn_products2_sc` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_class` smallint(6) DEFAULT '0',
  `p_order` smallint(6) DEFAULT '0',
  `p_name` varchar(50) DEFAULT NULL,
  `p_price` smallint(6) DEFAULT '0',
  `p_image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_products2_sc
-- ----------------------------

-- ----------------------------
-- Table structure for `cn_products_class`
-- ----------------------------
DROP TABLE IF EXISTS `cn_products_class`;
CREATE TABLE `cn_products_class` (
  `p_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `p_sid` smallint(6) DEFAULT '0',
  `p_tid` smallint(6) DEFAULT '0',
  `p_order` smallint(6) DEFAULT '0',
  `p_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_products_class
-- ----------------------------
INSERT INTO `cn_products_class` VALUES ('2', '0', '0', '1', '外语系报名系统');

-- ----------------------------
-- Table structure for `cn_products_cp`
-- ----------------------------
DROP TABLE IF EXISTS `cn_products_cp`;
CREATE TABLE `cn_products_cp` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_class` smallint(6) DEFAULT '0',
  `p_order` smallint(6) DEFAULT '0',
  `p_name` varchar(50) DEFAULT NULL,
  `p_image` varchar(50) DEFAULT NULL,
  `p_content` text,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_products_cp
-- ----------------------------
INSERT INTO `cn_products_cp` VALUES ('1', '1', '1', '准备工作', 'uploadfiles/20141104_194055.jpg', '准备工作，将南瓜切成小块，洋葱切丝。');
INSERT INTO `cn_products_cp` VALUES ('2', '1', '2', '煮佐料', 'uploadfiles/20141104_194055.jpg', '把黄油放入锅内，加热至融化。放入百里香，炒香。放入洋葱，炒至洋葱金黄色。倒入南瓜。');
INSERT INTO `cn_products_cp` VALUES ('3', '1', '3', '煮南瓜', 'uploadfiles/20141104_194055.jpg', '当南瓜外层开始变软，起酥时加水。水加到淹没南瓜。将肉桂放入汤内。');
INSERT INTO `cn_products_cp` VALUES ('4', '1', '4', '熬南瓜汤', 'uploadfiles/20141104_194055.jpg', '大火将水烧开后，转小火慢慢烧。');
INSERT INTO `cn_products_cp` VALUES ('5', '1', '5', ' 打匀南瓜汤', 'uploadfiles/20141104_194055.jpg', '当南瓜烧酥烂时，关火，将肉桂棒与百里香枝取出。用粉碎机将汤里的原料全粉碎。加入奶油（留几滴用作后面拉花），拌匀。再放入2茶匙盐和白胡椒调味。 ');
INSERT INTO `cn_products_cp` VALUES ('6', '1', '6', '摆盘', 'uploadfiles/20141104_194055.jpg', '将完成的南瓜汤装盘。可依个人喜好用奶油在汤的表面拉花。');
INSERT INTO `cn_products_cp` VALUES ('7', '2', '1', '准备工作', 'uploadfiles/20141104_194810.JPG', '准备工作，将南瓜切成小块，洋葱切丝。');
INSERT INTO `cn_products_cp` VALUES ('8', '2', '2', '煮佐料', 'uploadfiles/20141104_194818.JPG', '把黄油放入锅内，加热至融化。放入百里香，炒香。放入洋葱，炒至洋葱金黄色。倒入南瓜。');
INSERT INTO `cn_products_cp` VALUES ('9', '2', '3', '煮南瓜', 'uploadfiles/20141104_194823.JPG', '当南瓜外层开始变软，起酥时加水。水加到淹没南瓜。将肉桂放入汤内。');
INSERT INTO `cn_products_cp` VALUES ('10', '2', '4', '熬南瓜汤', 'uploadfiles/20141104_194827.JPG', '大火将水烧开后，转小火慢慢烧。');
INSERT INTO `cn_products_cp` VALUES ('11', '2', '5', ' 打匀南瓜汤', 'uploadfiles/20141104_194831.JPG', '当南瓜烧酥烂时，关火，将肉桂棒与百里香枝取出。用粉碎机将汤里的原料全粉碎。加入奶油（留几滴用作后面拉花），拌匀。再放入2茶匙盐和白胡椒调味。 ');
INSERT INTO `cn_products_cp` VALUES ('12', '2', '6', '摆盘', 'uploadfiles/20141104_194835.JPG', '将完成的南瓜汤装盘。可依个人喜好用奶油在汤的表面拉花。');

-- ----------------------------
-- Table structure for `cn_products_yl`
-- ----------------------------
DROP TABLE IF EXISTS `cn_products_yl`;
CREATE TABLE `cn_products_yl` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_class` smallint(6) DEFAULT '0',
  `p_order` smallint(6) DEFAULT '0',
  `p_name` varchar(50) DEFAULT NULL,
  `p_image` varchar(50) DEFAULT NULL,
  `p_content` text,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_products_yl
-- ----------------------------
INSERT INTO `cn_products_yl` VALUES ('1', '1', '1', '测试数据1', 'uploadfiles/20141104_193937.jpg', '在北欧，鳕鱼被称为“餐桌上的营养师”， 葡萄牙人就更直接把它称为“液体黄金”，可见它的营养价值之高。鳕鱼含丰富蛋白质、维生素A、维生素D、钙、镁、硒等营养元素，营养丰富、肉味甘美；鱼肉中含有丰富的镁元素，对心血管系统有很好的保护作用，有利于预防高血压、心肌梗死等心血管疾病。');
INSERT INTO `cn_products_yl` VALUES ('2', '2', '1', '测试数据2', 'uploadfiles/20141104_194020.JPG', '南瓜可谓秋日恩物，浑身上下都是宝，不仅南瓜肉清香甘甜，它的皮、籽、叶子、甚至花朵都可以食用。在南瓜灯成为万圣节的标志流行开来之前，在美国已经有了雕刻南瓜来庆祝丰收的习俗。');
INSERT INTO `cn_products_yl` VALUES ('3', '2', '2', '测试数据3', 'uploadfiles/20141104_194055.jpg', '文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容');
INSERT INTO `cn_products_yl` VALUES ('4', '3', '1', '测试数据4', 'uploadfiles/20141104_194055.jpg', '文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容');
INSERT INTO `cn_products_yl` VALUES ('5', '4', '1', '测试数据5', 'uploadfiles/20141104_194055.jpg', '文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容');
INSERT INTO `cn_products_yl` VALUES ('6', '5', '1', '测试数据6', 'uploadfiles/20141104_194055.jpg', '文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容');
INSERT INTO `cn_products_yl` VALUES ('7', '6', '1', '测试数据7', 'uploadfiles/20141104_194055.jpg', '文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容文字测试内容');

-- ----------------------------
-- Table structure for `cn_service`
-- ----------------------------
DROP TABLE IF EXISTS `cn_service`;
CREATE TABLE `cn_service` (
  `s_id` smallint(2) NOT NULL AUTO_INCREMENT,
  `s_class` smallint(2) DEFAULT '0',
  `s_order` smallint(2) DEFAULT '0',
  `s_name` varchar(255) DEFAULT NULL,
  `s_cuslink` varchar(255) DEFAULT NULL,
  `s_content` text,
  `k_name` varchar(255) DEFAULT NULL,
  `k_keyword` varchar(255) DEFAULT NULL,
  `k_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cn_service
-- ----------------------------
INSERT INTO `cn_service` VALUES ('1', '99', '1', '子栏目一', '', '<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n\r\n<p>　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n', null, null, null);
INSERT INTO `cn_service` VALUES ('2', '99', '2', '子栏目二', '', '<p>\r\n	　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n<p>\r\n	　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n<p>\r\n	　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n<p>\r\n	　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n<p>\r\n	　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n', null, null, null);
INSERT INTO `cn_service` VALUES ('3', '99', '3', '子栏目三', '', '<p>\r\n	　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n<p>\r\n	　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n<p>\r\n	　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n<p>\r\n	　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n<p>\r\n	　　自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容自由排版内容</p>\r\n', null, null, null);

-- ----------------------------
-- Table structure for `collect`
-- ----------------------------
DROP TABLE IF EXISTS `collect`;
CREATE TABLE `collect` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_user` varchar(50) DEFAULT NULL,
  `c_user_id` smallint(6) DEFAULT '0',
  `c_products_id` smallint(6) DEFAULT '0',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of collect
-- ----------------------------

-- ----------------------------
-- Table structure for `coupon`
-- ----------------------------
DROP TABLE IF EXISTS `coupon`;
CREATE TABLE `coupon` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) DEFAULT NULL,
  `c_min` smallint(6) DEFAULT '0',
  `c_max` smallint(6) DEFAULT '0',
  `c_zk` decimal(2,1) DEFAULT '0.0',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of coupon
-- ----------------------------
INSERT INTO `coupon` VALUES ('1', '满200送95折优惠券', '200', '299', '9.5');
INSERT INTO `coupon` VALUES ('2', '满300送93折优惠券', '300', '399', '9.3');
INSERT INTO `coupon` VALUES ('3', '满400送91折优惠券', '400', '499', '9.1');
INSERT INTO `coupon` VALUES ('4', '满500送88折优惠券', '500', '599', '8.8');

-- ----------------------------
-- Table structure for `dz_city`
-- ----------------------------
DROP TABLE IF EXISTS `dz_city`;
CREATE TABLE `dz_city` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_pid` smallint(6) DEFAULT NULL,
  `c_zipcode` varchar(50) DEFAULT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=346 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dz_city
-- ----------------------------
INSERT INTO `dz_city` VALUES ('1', '1', '100000', '北京市');
INSERT INTO `dz_city` VALUES ('2', '2', '100000', '天津市');
INSERT INTO `dz_city` VALUES ('3', '3', '050000', '石家庄市');
INSERT INTO `dz_city` VALUES ('4', '3', '063000', '唐山市');
INSERT INTO `dz_city` VALUES ('5', '3', '066000', '秦皇岛市');
INSERT INTO `dz_city` VALUES ('6', '3', '056000', '邯郸市');
INSERT INTO `dz_city` VALUES ('7', '3', '054000', '邢台市');
INSERT INTO `dz_city` VALUES ('8', '3', '071000', '保定市');
INSERT INTO `dz_city` VALUES ('9', '3', '075000', '张家口市');
INSERT INTO `dz_city` VALUES ('10', '3', '067000', '承德市');
INSERT INTO `dz_city` VALUES ('11', '3', '061000', '沧州市');
INSERT INTO `dz_city` VALUES ('12', '3', '065000', '廊坊市');
INSERT INTO `dz_city` VALUES ('13', '3', '053000', '衡水市');
INSERT INTO `dz_city` VALUES ('14', '4', '030000', '太原市');
INSERT INTO `dz_city` VALUES ('15', '4', '037000', '大同市');
INSERT INTO `dz_city` VALUES ('16', '4', '045000', '阳泉市');
INSERT INTO `dz_city` VALUES ('17', '4', '046000', '长治市');
INSERT INTO `dz_city` VALUES ('18', '4', '048000', '晋城市');
INSERT INTO `dz_city` VALUES ('19', '4', '036000', '朔州市');
INSERT INTO `dz_city` VALUES ('20', '4', '030600', '晋中市');
INSERT INTO `dz_city` VALUES ('21', '4', '044000', '运城市');
INSERT INTO `dz_city` VALUES ('22', '4', '034000', '忻州市');
INSERT INTO `dz_city` VALUES ('23', '4', '041000', '临汾市');
INSERT INTO `dz_city` VALUES ('24', '4', '030500', '吕梁市');
INSERT INTO `dz_city` VALUES ('25', '5', '010000', '呼和浩特市');
INSERT INTO `dz_city` VALUES ('26', '5', '014000', '包头市');
INSERT INTO `dz_city` VALUES ('27', '5', '016000', '乌海市');
INSERT INTO `dz_city` VALUES ('28', '5', '024000', '赤峰市');
INSERT INTO `dz_city` VALUES ('29', '5', '028000', '通辽市');
INSERT INTO `dz_city` VALUES ('30', '5', '010300', '鄂尔多斯市');
INSERT INTO `dz_city` VALUES ('31', '5', '021000', '呼伦贝尔市');
INSERT INTO `dz_city` VALUES ('32', '5', '014400', '巴彦淖尔市');
INSERT INTO `dz_city` VALUES ('33', '5', '011800', '乌兰察布市');
INSERT INTO `dz_city` VALUES ('34', '5', '137500', '兴安盟');
INSERT INTO `dz_city` VALUES ('35', '5', '011100', '锡林郭勒盟');
INSERT INTO `dz_city` VALUES ('36', '5', '016000', '阿拉善盟');
INSERT INTO `dz_city` VALUES ('37', '6', '110000', '沈阳市');
INSERT INTO `dz_city` VALUES ('38', '6', '116000', '大连市');
INSERT INTO `dz_city` VALUES ('39', '6', '114000', '鞍山市');
INSERT INTO `dz_city` VALUES ('40', '6', '113000', '抚顺市');
INSERT INTO `dz_city` VALUES ('41', '6', '117000', '本溪市');
INSERT INTO `dz_city` VALUES ('42', '6', '118000', '丹东市');
INSERT INTO `dz_city` VALUES ('43', '6', '121000', '锦州市');
INSERT INTO `dz_city` VALUES ('44', '6', '115000', '营口市');
INSERT INTO `dz_city` VALUES ('45', '6', '123000', '阜新市');
INSERT INTO `dz_city` VALUES ('46', '6', '111000', '辽阳市');
INSERT INTO `dz_city` VALUES ('47', '6', '124000', '盘锦市');
INSERT INTO `dz_city` VALUES ('48', '6', '112000', '铁岭市');
INSERT INTO `dz_city` VALUES ('49', '6', '122000', '朝阳市');
INSERT INTO `dz_city` VALUES ('50', '6', '125000', '葫芦岛市');
INSERT INTO `dz_city` VALUES ('51', '7', '130000', '长春市');
INSERT INTO `dz_city` VALUES ('52', '7', '132000', '吉林市');
INSERT INTO `dz_city` VALUES ('53', '7', '136000', '四平市');
INSERT INTO `dz_city` VALUES ('54', '7', '136200', '辽源市');
INSERT INTO `dz_city` VALUES ('55', '7', '134000', '通化市');
INSERT INTO `dz_city` VALUES ('56', '7', '134300', '白山市');
INSERT INTO `dz_city` VALUES ('57', '7', '131100', '松原市');
INSERT INTO `dz_city` VALUES ('58', '7', '137000', '白城市');
INSERT INTO `dz_city` VALUES ('59', '7', '133000', '延边朝鲜族自治州');
INSERT INTO `dz_city` VALUES ('60', '8', '150000', '哈尔滨市');
INSERT INTO `dz_city` VALUES ('61', '8', '161000', '齐齐哈尔市');
INSERT INTO `dz_city` VALUES ('62', '8', '158100', '鸡西市');
INSERT INTO `dz_city` VALUES ('63', '8', '154100', '鹤岗市');
INSERT INTO `dz_city` VALUES ('64', '8', '155100', '双鸭山市');
INSERT INTO `dz_city` VALUES ('65', '8', '163000', '大庆市');
INSERT INTO `dz_city` VALUES ('66', '8', '152300', '伊春市');
INSERT INTO `dz_city` VALUES ('67', '8', '154000', '佳木斯市');
INSERT INTO `dz_city` VALUES ('68', '8', '154600', '七台河市');
INSERT INTO `dz_city` VALUES ('69', '8', '157000', '牡丹江市');
INSERT INTO `dz_city` VALUES ('70', '8', '164300', '黑河市');
INSERT INTO `dz_city` VALUES ('71', '8', '152000', '绥化市');
INSERT INTO `dz_city` VALUES ('72', '8', '165000', '大兴安岭地区');
INSERT INTO `dz_city` VALUES ('73', '9', '200000', '上海市');
INSERT INTO `dz_city` VALUES ('74', '10', '210000', '南京市');
INSERT INTO `dz_city` VALUES ('75', '10', '214000', '无锡市');
INSERT INTO `dz_city` VALUES ('76', '10', '221000', '徐州市');
INSERT INTO `dz_city` VALUES ('77', '10', '213000', '常州市');
INSERT INTO `dz_city` VALUES ('78', '10', '215000', '苏州市');
INSERT INTO `dz_city` VALUES ('79', '10', '226000', '南通市');
INSERT INTO `dz_city` VALUES ('80', '10', '222000', '连云港市');
INSERT INTO `dz_city` VALUES ('81', '10', '223200', '淮安市');
INSERT INTO `dz_city` VALUES ('82', '10', '224000', '盐城市');
INSERT INTO `dz_city` VALUES ('83', '10', '225000', '扬州市');
INSERT INTO `dz_city` VALUES ('84', '10', '212000', '镇江市');
INSERT INTO `dz_city` VALUES ('85', '10', '225300', '泰州市');
INSERT INTO `dz_city` VALUES ('86', '10', '223800', '宿迁市');
INSERT INTO `dz_city` VALUES ('87', '11', '310000', '杭州市');
INSERT INTO `dz_city` VALUES ('88', '11', '315000', '宁波市');
INSERT INTO `dz_city` VALUES ('89', '11', '325000', '温州市');
INSERT INTO `dz_city` VALUES ('90', '11', '314000', '嘉兴市');
INSERT INTO `dz_city` VALUES ('91', '11', '313000', '湖州市');
INSERT INTO `dz_city` VALUES ('92', '11', '312000', '绍兴市');
INSERT INTO `dz_city` VALUES ('93', '11', '321000', '金华市');
INSERT INTO `dz_city` VALUES ('94', '11', '324000', '衢州市');
INSERT INTO `dz_city` VALUES ('95', '11', '316000', '舟山市');
INSERT INTO `dz_city` VALUES ('96', '11', '318000', '台州市');
INSERT INTO `dz_city` VALUES ('97', '11', '323000', '丽水市');
INSERT INTO `dz_city` VALUES ('98', '12', '230000', '合肥市');
INSERT INTO `dz_city` VALUES ('99', '12', '241000', '芜湖市');
INSERT INTO `dz_city` VALUES ('100', '12', '233000', '蚌埠市');
INSERT INTO `dz_city` VALUES ('101', '12', '232000', '淮南市');
INSERT INTO `dz_city` VALUES ('102', '12', '243000', '马鞍山市');
INSERT INTO `dz_city` VALUES ('103', '12', '235000', '淮北市');
INSERT INTO `dz_city` VALUES ('104', '12', '244000', '铜陵市');
INSERT INTO `dz_city` VALUES ('105', '12', '246000', '安庆市');
INSERT INTO `dz_city` VALUES ('106', '12', '242700', '黄山市');
INSERT INTO `dz_city` VALUES ('107', '12', '239000', '滁州市');
INSERT INTO `dz_city` VALUES ('108', '12', '236100', '阜阳市');
INSERT INTO `dz_city` VALUES ('109', '12', '234100', '宿州市');
INSERT INTO `dz_city` VALUES ('110', '12', '238000', '巢湖市');
INSERT INTO `dz_city` VALUES ('111', '12', '237000', '六安市');
INSERT INTO `dz_city` VALUES ('112', '12', '236800', '亳州市');
INSERT INTO `dz_city` VALUES ('113', '12', '247100', '池州市');
INSERT INTO `dz_city` VALUES ('114', '12', '366000', '宣城市');
INSERT INTO `dz_city` VALUES ('115', '13', '350000', '福州市');
INSERT INTO `dz_city` VALUES ('116', '13', '361000', '厦门市');
INSERT INTO `dz_city` VALUES ('117', '13', '351100', '莆田市');
INSERT INTO `dz_city` VALUES ('118', '13', '365000', '三明市');
INSERT INTO `dz_city` VALUES ('119', '13', '362000', '泉州市');
INSERT INTO `dz_city` VALUES ('120', '13', '363000', '漳州市');
INSERT INTO `dz_city` VALUES ('121', '13', '353000', '南平市');
INSERT INTO `dz_city` VALUES ('122', '13', '364000', '龙岩市');
INSERT INTO `dz_city` VALUES ('123', '13', '352100', '宁德市');
INSERT INTO `dz_city` VALUES ('124', '14', '330000', '南昌市');
INSERT INTO `dz_city` VALUES ('125', '14', '333000', '景德镇市');
INSERT INTO `dz_city` VALUES ('126', '14', '337000', '萍乡市');
INSERT INTO `dz_city` VALUES ('127', '14', '332000', '九江市');
INSERT INTO `dz_city` VALUES ('128', '14', '338000', '新余市');
INSERT INTO `dz_city` VALUES ('129', '14', '335000', '鹰潭市');
INSERT INTO `dz_city` VALUES ('130', '14', '341000', '赣州市');
INSERT INTO `dz_city` VALUES ('131', '14', '343000', '吉安市');
INSERT INTO `dz_city` VALUES ('132', '14', '336000', '宜春市');
INSERT INTO `dz_city` VALUES ('133', '14', '332900', '抚州市');
INSERT INTO `dz_city` VALUES ('134', '14', '334000', '上饶市');
INSERT INTO `dz_city` VALUES ('135', '15', '250000', '济南市');
INSERT INTO `dz_city` VALUES ('136', '15', '266000', '青岛市');
INSERT INTO `dz_city` VALUES ('137', '15', '255000', '淄博市');
INSERT INTO `dz_city` VALUES ('138', '15', '277100', '枣庄市');
INSERT INTO `dz_city` VALUES ('139', '15', '257000', '东营市');
INSERT INTO `dz_city` VALUES ('140', '15', '264000', '烟台市');
INSERT INTO `dz_city` VALUES ('141', '15', '261000', '潍坊市');
INSERT INTO `dz_city` VALUES ('142', '15', '272100', '济宁市');
INSERT INTO `dz_city` VALUES ('143', '15', '271000', '泰安市');
INSERT INTO `dz_city` VALUES ('144', '15', '265700', '威海市');
INSERT INTO `dz_city` VALUES ('145', '15', '276800', '日照市');
INSERT INTO `dz_city` VALUES ('146', '15', '271100', '莱芜市');
INSERT INTO `dz_city` VALUES ('147', '15', '276000', '临沂市');
INSERT INTO `dz_city` VALUES ('148', '15', '253000', '德州市');
INSERT INTO `dz_city` VALUES ('149', '15', '252000', '聊城市');
INSERT INTO `dz_city` VALUES ('150', '15', '256600', '滨州市');
INSERT INTO `dz_city` VALUES ('151', '15', '255000', '荷泽市');
INSERT INTO `dz_city` VALUES ('152', '16', '450000', '郑州市');
INSERT INTO `dz_city` VALUES ('153', '16', '475000', '开封市');
INSERT INTO `dz_city` VALUES ('154', '16', '471000', '洛阳市');
INSERT INTO `dz_city` VALUES ('155', '16', '467000', '平顶山市');
INSERT INTO `dz_city` VALUES ('156', '16', '454900', '安阳市');
INSERT INTO `dz_city` VALUES ('157', '16', '456600', '鹤壁市');
INSERT INTO `dz_city` VALUES ('158', '16', '453000', '新乡市');
INSERT INTO `dz_city` VALUES ('159', '16', '454100', '焦作市');
INSERT INTO `dz_city` VALUES ('160', '16', '457000', '濮阳市');
INSERT INTO `dz_city` VALUES ('161', '16', '461000', '许昌市');
INSERT INTO `dz_city` VALUES ('162', '16', '462000', '漯河市');
INSERT INTO `dz_city` VALUES ('163', '16', '472000', '三门峡市');
INSERT INTO `dz_city` VALUES ('164', '16', '473000', '南阳市');
INSERT INTO `dz_city` VALUES ('165', '16', '476000', '商丘市');
INSERT INTO `dz_city` VALUES ('166', '16', '464000', '信阳市');
INSERT INTO `dz_city` VALUES ('167', '16', '466000', '周口市');
INSERT INTO `dz_city` VALUES ('168', '16', '463000', '驻马店市');
INSERT INTO `dz_city` VALUES ('169', '17', '430000', '武汉市');
INSERT INTO `dz_city` VALUES ('170', '17', '435000', '黄石市');
INSERT INTO `dz_city` VALUES ('171', '17', '442000', '十堰市');
INSERT INTO `dz_city` VALUES ('172', '17', '443000', '宜昌市');
INSERT INTO `dz_city` VALUES ('173', '17', '441000', '襄樊市');
INSERT INTO `dz_city` VALUES ('174', '17', '436000', '鄂州市');
INSERT INTO `dz_city` VALUES ('175', '17', '448000', '荆门市');
INSERT INTO `dz_city` VALUES ('176', '17', '432100', '孝感市');
INSERT INTO `dz_city` VALUES ('177', '17', '434000', '荆州市');
INSERT INTO `dz_city` VALUES ('178', '17', '438000', '黄冈市');
INSERT INTO `dz_city` VALUES ('179', '17', '437000', '咸宁市');
INSERT INTO `dz_city` VALUES ('180', '17', '441300', '随州市');
INSERT INTO `dz_city` VALUES ('181', '17', '445000', '恩施土家族苗族自治州');
INSERT INTO `dz_city` VALUES ('182', '17', '442400', '神农架');
INSERT INTO `dz_city` VALUES ('183', '18', '410000', '长沙市');
INSERT INTO `dz_city` VALUES ('184', '18', '412000', '株洲市');
INSERT INTO `dz_city` VALUES ('185', '18', '411100', '湘潭市');
INSERT INTO `dz_city` VALUES ('186', '18', '421000', '衡阳市');
INSERT INTO `dz_city` VALUES ('187', '18', '422000', '邵阳市');
INSERT INTO `dz_city` VALUES ('188', '18', '414000', '岳阳市');
INSERT INTO `dz_city` VALUES ('189', '18', '415000', '常德市');
INSERT INTO `dz_city` VALUES ('190', '18', '427000', '张家界市');
INSERT INTO `dz_city` VALUES ('191', '18', '413000', '益阳市');
INSERT INTO `dz_city` VALUES ('192', '18', '423000', '郴州市');
INSERT INTO `dz_city` VALUES ('193', '18', '425000', '永州市');
INSERT INTO `dz_city` VALUES ('194', '18', '418000', '怀化市');
INSERT INTO `dz_city` VALUES ('195', '18', '417000', '娄底市');
INSERT INTO `dz_city` VALUES ('196', '18', '416000', '湘西土家族苗族自治州');
INSERT INTO `dz_city` VALUES ('197', '19', '510000', '广州市');
INSERT INTO `dz_city` VALUES ('198', '19', '521000', '韶关市');
INSERT INTO `dz_city` VALUES ('199', '19', '518000', '深圳市');
INSERT INTO `dz_city` VALUES ('200', '19', '519000', '珠海市');
INSERT INTO `dz_city` VALUES ('201', '19', '515000', '汕头市');
INSERT INTO `dz_city` VALUES ('202', '19', '528000', '佛山市');
INSERT INTO `dz_city` VALUES ('203', '19', '529000', '江门市');
INSERT INTO `dz_city` VALUES ('204', '19', '524000', '湛江市');
INSERT INTO `dz_city` VALUES ('205', '19', '525000', '茂名市');
INSERT INTO `dz_city` VALUES ('206', '19', '526000', '肇庆市');
INSERT INTO `dz_city` VALUES ('207', '19', '516000', '惠州市');
INSERT INTO `dz_city` VALUES ('208', '19', '514000', '梅州市');
INSERT INTO `dz_city` VALUES ('209', '19', '516600', '汕尾市');
INSERT INTO `dz_city` VALUES ('210', '19', '517000', '河源市');
INSERT INTO `dz_city` VALUES ('211', '19', '529500', '阳江市');
INSERT INTO `dz_city` VALUES ('212', '19', '511500', '清远市');
INSERT INTO `dz_city` VALUES ('213', '19', '511700', '东莞市');
INSERT INTO `dz_city` VALUES ('214', '19', '528400', '中山市');
INSERT INTO `dz_city` VALUES ('215', '19', '515600', '潮州市');
INSERT INTO `dz_city` VALUES ('216', '19', '522000', '揭阳市');
INSERT INTO `dz_city` VALUES ('217', '19', '527300', '云浮市');
INSERT INTO `dz_city` VALUES ('218', '20', '530000', '南宁市');
INSERT INTO `dz_city` VALUES ('219', '20', '545000', '柳州市');
INSERT INTO `dz_city` VALUES ('220', '20', '541000', '桂林市');
INSERT INTO `dz_city` VALUES ('221', '20', '543000', '梧州市');
INSERT INTO `dz_city` VALUES ('222', '20', '536000', '北海市');
INSERT INTO `dz_city` VALUES ('223', '20', '538000', '防城港市');
INSERT INTO `dz_city` VALUES ('224', '20', '535000', '钦州市');
INSERT INTO `dz_city` VALUES ('225', '20', '537100', '贵港市');
INSERT INTO `dz_city` VALUES ('226', '20', '537000', '玉林市');
INSERT INTO `dz_city` VALUES ('227', '20', '533000', '百色市');
INSERT INTO `dz_city` VALUES ('228', '20', '542800', '贺州市');
INSERT INTO `dz_city` VALUES ('229', '20', '547000', '河池市');
INSERT INTO `dz_city` VALUES ('230', '20', '546100', '来宾市');
INSERT INTO `dz_city` VALUES ('231', '20', '532200', '崇左市');
INSERT INTO `dz_city` VALUES ('232', '21', '570000', '海口市');
INSERT INTO `dz_city` VALUES ('233', '21', '572000', '三亚市');
INSERT INTO `dz_city` VALUES ('234', '22', '400000', '重庆市');
INSERT INTO `dz_city` VALUES ('235', '23', '610000', '成都市');
INSERT INTO `dz_city` VALUES ('236', '23', '643000', '自贡市');
INSERT INTO `dz_city` VALUES ('237', '23', '617000', '攀枝花市');
INSERT INTO `dz_city` VALUES ('238', '23', '646100', '泸州市');
INSERT INTO `dz_city` VALUES ('239', '23', '618000', '德阳市');
INSERT INTO `dz_city` VALUES ('240', '23', '621000', '绵阳市');
INSERT INTO `dz_city` VALUES ('241', '23', '628000', '广元市');
INSERT INTO `dz_city` VALUES ('242', '23', '629000', '遂宁市');
INSERT INTO `dz_city` VALUES ('243', '23', '641000', '内江市');
INSERT INTO `dz_city` VALUES ('244', '23', '614000', '乐山市');
INSERT INTO `dz_city` VALUES ('245', '23', '637000', '南充市');
INSERT INTO `dz_city` VALUES ('246', '23', '612100', '眉山市');
INSERT INTO `dz_city` VALUES ('247', '23', '644000', '宜宾市');
INSERT INTO `dz_city` VALUES ('248', '23', '638000', '广安市');
INSERT INTO `dz_city` VALUES ('249', '23', '635000', '达州市');
INSERT INTO `dz_city` VALUES ('250', '23', '625000', '雅安市');
INSERT INTO `dz_city` VALUES ('251', '23', '635500', '巴中市');
INSERT INTO `dz_city` VALUES ('252', '23', '641300', '资阳市');
INSERT INTO `dz_city` VALUES ('253', '23', '624600', '阿坝藏族羌族自治州');
INSERT INTO `dz_city` VALUES ('254', '23', '626000', '甘孜藏族自治州');
INSERT INTO `dz_city` VALUES ('255', '23', '615000', '凉山彝族自治州');
INSERT INTO `dz_city` VALUES ('256', '24', '55000', '贵阳市');
INSERT INTO `dz_city` VALUES ('257', '24', '553000', '六盘水市');
INSERT INTO `dz_city` VALUES ('258', '24', '563000', '遵义市');
INSERT INTO `dz_city` VALUES ('259', '24', '561000', '安顺市');
INSERT INTO `dz_city` VALUES ('260', '24', '554300', '铜仁地区');
INSERT INTO `dz_city` VALUES ('261', '24', '551500', '黔西南布依族苗族自治州');
INSERT INTO `dz_city` VALUES ('262', '24', '551700', '毕节地区');
INSERT INTO `dz_city` VALUES ('263', '24', '551500', '黔东南苗族侗族自治州');
INSERT INTO `dz_city` VALUES ('264', '24', '550100', '黔南布依族苗族自治州');
INSERT INTO `dz_city` VALUES ('265', '25', '650000', '昆明市');
INSERT INTO `dz_city` VALUES ('266', '25', '655000', '曲靖市');
INSERT INTO `dz_city` VALUES ('267', '25', '653100', '玉溪市');
INSERT INTO `dz_city` VALUES ('268', '25', '678000', '保山市');
INSERT INTO `dz_city` VALUES ('269', '25', '657000', '昭通市');
INSERT INTO `dz_city` VALUES ('270', '25', '674100', '丽江市');
INSERT INTO `dz_city` VALUES ('271', '25', '665000', '思茅市');
INSERT INTO `dz_city` VALUES ('272', '25', '677000', '临沧市');
INSERT INTO `dz_city` VALUES ('273', '25', '675000', '楚雄彝族自治州');
INSERT INTO `dz_city` VALUES ('274', '25', '654400', '红河哈尼族彝族自治州');
INSERT INTO `dz_city` VALUES ('275', '25', '663000', '文山壮族苗族自治州');
INSERT INTO `dz_city` VALUES ('276', '25', '666200', '西双版纳傣族自治州');
INSERT INTO `dz_city` VALUES ('277', '25', '671000', '大理白族自治州');
INSERT INTO `dz_city` VALUES ('278', '25', '678400', '德宏傣族景颇族自治州');
INSERT INTO `dz_city` VALUES ('279', '25', '671400', '怒江傈僳族自治州');
INSERT INTO `dz_city` VALUES ('280', '25', '674400', '迪庆藏族自治州');
INSERT INTO `dz_city` VALUES ('281', '26', '850000', '拉萨市');
INSERT INTO `dz_city` VALUES ('282', '26', '854000', '昌都地区');
INSERT INTO `dz_city` VALUES ('283', '26', '856000', '山南地区');
INSERT INTO `dz_city` VALUES ('284', '26', '857000', '日喀则地区');
INSERT INTO `dz_city` VALUES ('285', '26', '852000', '那曲地区');
INSERT INTO `dz_city` VALUES ('286', '26', '859100', '阿里地区');
INSERT INTO `dz_city` VALUES ('287', '26', '860100', '林芝地区');
INSERT INTO `dz_city` VALUES ('288', '27', '710000', '西安市');
INSERT INTO `dz_city` VALUES ('289', '27', '727000', '铜川市');
INSERT INTO `dz_city` VALUES ('290', '27', '721000', '宝鸡市');
INSERT INTO `dz_city` VALUES ('291', '27', '712000', '咸阳市');
INSERT INTO `dz_city` VALUES ('292', '27', '714000', '渭南市');
INSERT INTO `dz_city` VALUES ('293', '27', '716000', '延安市');
INSERT INTO `dz_city` VALUES ('294', '27', '723000', '汉中市');
INSERT INTO `dz_city` VALUES ('295', '27', '719000', '榆林市');
INSERT INTO `dz_city` VALUES ('296', '27', '725000', '安康市');
INSERT INTO `dz_city` VALUES ('297', '27', '711500', '商洛市');
INSERT INTO `dz_city` VALUES ('298', '28', '730000', '兰州市');
INSERT INTO `dz_city` VALUES ('299', '28', '735100', '嘉峪关市');
INSERT INTO `dz_city` VALUES ('300', '28', '737100', '金昌市');
INSERT INTO `dz_city` VALUES ('301', '28', '730900', '白银市');
INSERT INTO `dz_city` VALUES ('302', '28', '741000', '天水市');
INSERT INTO `dz_city` VALUES ('303', '28', '733000', '武威市');
INSERT INTO `dz_city` VALUES ('304', '28', '734000', '张掖市');
INSERT INTO `dz_city` VALUES ('305', '28', '744000', '平凉市');
INSERT INTO `dz_city` VALUES ('306', '28', '735000', '酒泉市');
INSERT INTO `dz_city` VALUES ('307', '28', '744500', '庆阳市');
INSERT INTO `dz_city` VALUES ('308', '28', '743000', '定西市');
INSERT INTO `dz_city` VALUES ('309', '28', '742100', '陇南市');
INSERT INTO `dz_city` VALUES ('310', '28', '731100', '临夏回族自治州');
INSERT INTO `dz_city` VALUES ('311', '28', '747000', '甘南藏族自治州');
INSERT INTO `dz_city` VALUES ('312', '29', '810000', '西宁市');
INSERT INTO `dz_city` VALUES ('313', '29', '810600', '海东地区');
INSERT INTO `dz_city` VALUES ('314', '29', '810300', '海北藏族自治州');
INSERT INTO `dz_city` VALUES ('315', '29', '811300', '黄南藏族自治州');
INSERT INTO `dz_city` VALUES ('316', '29', '813000', '海南藏族自治州');
INSERT INTO `dz_city` VALUES ('317', '29', '814000', '果洛藏族自治州');
INSERT INTO `dz_city` VALUES ('318', '29', '815000', '玉树藏族自治州');
INSERT INTO `dz_city` VALUES ('319', '29', '817000', '海西蒙古族藏族自治州');
INSERT INTO `dz_city` VALUES ('320', '30', '750000', '银川市');
INSERT INTO `dz_city` VALUES ('321', '30', '753000', '石嘴山市');
INSERT INTO `dz_city` VALUES ('322', '30', '751100', '吴忠市');
INSERT INTO `dz_city` VALUES ('323', '30', '756000', '固原市');
INSERT INTO `dz_city` VALUES ('324', '30', '751700', '中卫市');
INSERT INTO `dz_city` VALUES ('325', '31', '830000', '乌鲁木齐市');
INSERT INTO `dz_city` VALUES ('326', '31', '834000', '克拉玛依市');
INSERT INTO `dz_city` VALUES ('327', '31', '838000', '吐鲁番地区');
INSERT INTO `dz_city` VALUES ('328', '31', '839000', '哈密地区');
INSERT INTO `dz_city` VALUES ('329', '31', '831100', '昌吉回族自治州');
INSERT INTO `dz_city` VALUES ('330', '31', '833400', '博尔塔拉蒙古自治州');
INSERT INTO `dz_city` VALUES ('331', '31', '841000', '巴音郭楞蒙古自治州');
INSERT INTO `dz_city` VALUES ('332', '31', '843000', '阿克苏地区');
INSERT INTO `dz_city` VALUES ('333', '31', '835600', '克孜勒苏柯尔克孜自治州');
INSERT INTO `dz_city` VALUES ('334', '31', '844000', '喀什地区');
INSERT INTO `dz_city` VALUES ('335', '31', '848000', '和田地区');
INSERT INTO `dz_city` VALUES ('336', '31', '833200', '伊犁哈萨克自治州');
INSERT INTO `dz_city` VALUES ('337', '31', '834700', '塔城地区');
INSERT INTO `dz_city` VALUES ('338', '31', '836500', '阿勒泰地区');
INSERT INTO `dz_city` VALUES ('339', '31', '832000', '石河子市');
INSERT INTO `dz_city` VALUES ('340', '31', '843300', '阿拉尔市');
INSERT INTO `dz_city` VALUES ('341', '31', '843900', '图木舒克市');
INSERT INTO `dz_city` VALUES ('342', '31', '831300', '五家渠市');
INSERT INTO `dz_city` VALUES ('343', '32', '000000', '香港');
INSERT INTO `dz_city` VALUES ('344', '33', '000000', '澳门');
INSERT INTO `dz_city` VALUES ('345', '34', '000000', '台湾');

-- ----------------------------
-- Table structure for `dz_dengji`
-- ----------------------------
DROP TABLE IF EXISTS `dz_dengji`;
CREATE TABLE `dz_dengji` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) DEFAULT NULL,
  `ks_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dz_dengji
-- ----------------------------
INSERT INTO `dz_dengji` VALUES ('38', '一级B', '1');
INSERT INTO `dz_dengji` VALUES ('39', '一级', '2');
INSERT INTO `dz_dengji` VALUES ('40', '二级', '3');
INSERT INTO `dz_dengji` VALUES ('41', '三级', '4');

-- ----------------------------
-- Table structure for `dz_district`
-- ----------------------------
DROP TABLE IF EXISTS `dz_district`;
CREATE TABLE `dz_district` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_cid` varchar(50) DEFAULT NULL,
  `d_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2863 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dz_district
-- ----------------------------
INSERT INTO `dz_district` VALUES ('1', '1', '东城区');
INSERT INTO `dz_district` VALUES ('2', '1', '西城区');
INSERT INTO `dz_district` VALUES ('3', '1', '崇文区');
INSERT INTO `dz_district` VALUES ('4', '1', '宣武区');
INSERT INTO `dz_district` VALUES ('5', '1', '朝阳区');
INSERT INTO `dz_district` VALUES ('6', '1', '丰台区');
INSERT INTO `dz_district` VALUES ('7', '1', '石景山区');
INSERT INTO `dz_district` VALUES ('8', '1', '海淀区');
INSERT INTO `dz_district` VALUES ('9', '1', '门头沟区');
INSERT INTO `dz_district` VALUES ('10', '1', '房山区');
INSERT INTO `dz_district` VALUES ('11', '1', '通州区');
INSERT INTO `dz_district` VALUES ('12', '1', '顺义区');
INSERT INTO `dz_district` VALUES ('13', '1', '昌平区');
INSERT INTO `dz_district` VALUES ('14', '1', '大兴区');
INSERT INTO `dz_district` VALUES ('15', '1', '怀柔区');
INSERT INTO `dz_district` VALUES ('16', '1', '平谷区');
INSERT INTO `dz_district` VALUES ('17', '1', '密云县');
INSERT INTO `dz_district` VALUES ('18', '1', '延庆县');
INSERT INTO `dz_district` VALUES ('19', '2', '和平区');
INSERT INTO `dz_district` VALUES ('20', '2', '河东区');
INSERT INTO `dz_district` VALUES ('21', '2', '河西区');
INSERT INTO `dz_district` VALUES ('22', '2', '南开区');
INSERT INTO `dz_district` VALUES ('23', '2', '河北区');
INSERT INTO `dz_district` VALUES ('24', '2', '红桥区');
INSERT INTO `dz_district` VALUES ('25', '2', '塘沽区');
INSERT INTO `dz_district` VALUES ('26', '2', '汉沽区');
INSERT INTO `dz_district` VALUES ('27', '2', '大港区');
INSERT INTO `dz_district` VALUES ('28', '2', '东丽区');
INSERT INTO `dz_district` VALUES ('29', '2', '西青区');
INSERT INTO `dz_district` VALUES ('30', '2', '津南区');
INSERT INTO `dz_district` VALUES ('31', '2', '北辰区');
INSERT INTO `dz_district` VALUES ('32', '2', '武清区');
INSERT INTO `dz_district` VALUES ('33', '2', '宝坻区');
INSERT INTO `dz_district` VALUES ('34', '2', '宁河县');
INSERT INTO `dz_district` VALUES ('35', '2', '静海县');
INSERT INTO `dz_district` VALUES ('36', '2', '蓟县');
INSERT INTO `dz_district` VALUES ('37', '3', '长安区');
INSERT INTO `dz_district` VALUES ('38', '3', '桥东区');
INSERT INTO `dz_district` VALUES ('39', '3', '桥西区');
INSERT INTO `dz_district` VALUES ('40', '3', '新华区');
INSERT INTO `dz_district` VALUES ('41', '3', '井陉矿区');
INSERT INTO `dz_district` VALUES ('42', '3', '裕华区');
INSERT INTO `dz_district` VALUES ('43', '3', '井陉县');
INSERT INTO `dz_district` VALUES ('44', '3', '正定县');
INSERT INTO `dz_district` VALUES ('45', '3', '栾城县');
INSERT INTO `dz_district` VALUES ('46', '3', '行唐县');
INSERT INTO `dz_district` VALUES ('47', '3', '灵寿县');
INSERT INTO `dz_district` VALUES ('48', '3', '高邑县');
INSERT INTO `dz_district` VALUES ('49', '3', '深泽县');
INSERT INTO `dz_district` VALUES ('50', '3', '赞皇县');
INSERT INTO `dz_district` VALUES ('51', '3', '无极县');
INSERT INTO `dz_district` VALUES ('52', '3', '平山县');
INSERT INTO `dz_district` VALUES ('53', '3', '元氏县');
INSERT INTO `dz_district` VALUES ('54', '3', '赵县');
INSERT INTO `dz_district` VALUES ('55', '3', '辛集市');
INSERT INTO `dz_district` VALUES ('56', '3', '藁城市');
INSERT INTO `dz_district` VALUES ('57', '3', '晋州市');
INSERT INTO `dz_district` VALUES ('58', '3', '新乐市');
INSERT INTO `dz_district` VALUES ('59', '3', '鹿泉市');
INSERT INTO `dz_district` VALUES ('60', '4', '路南区');
INSERT INTO `dz_district` VALUES ('61', '4', '路北区');
INSERT INTO `dz_district` VALUES ('62', '4', '古冶区');
INSERT INTO `dz_district` VALUES ('63', '4', '开平区');
INSERT INTO `dz_district` VALUES ('64', '4', '丰南区');
INSERT INTO `dz_district` VALUES ('65', '4', '丰润区');
INSERT INTO `dz_district` VALUES ('66', '4', '滦县');
INSERT INTO `dz_district` VALUES ('67', '4', '滦南县');
INSERT INTO `dz_district` VALUES ('68', '4', '乐亭县');
INSERT INTO `dz_district` VALUES ('69', '4', '迁西县');
INSERT INTO `dz_district` VALUES ('70', '4', '玉田县');
INSERT INTO `dz_district` VALUES ('71', '4', '唐海县');
INSERT INTO `dz_district` VALUES ('72', '4', '遵化市');
INSERT INTO `dz_district` VALUES ('73', '4', '迁安市');
INSERT INTO `dz_district` VALUES ('74', '5', '海港区');
INSERT INTO `dz_district` VALUES ('75', '5', '山海关区');
INSERT INTO `dz_district` VALUES ('76', '5', '北戴河区');
INSERT INTO `dz_district` VALUES ('77', '5', '青龙满族自治县');
INSERT INTO `dz_district` VALUES ('78', '5', '昌黎县');
INSERT INTO `dz_district` VALUES ('79', '5', '抚宁县');
INSERT INTO `dz_district` VALUES ('80', '5', '卢龙县');
INSERT INTO `dz_district` VALUES ('81', '6', '邯山区');
INSERT INTO `dz_district` VALUES ('82', '6', '丛台区');
INSERT INTO `dz_district` VALUES ('83', '6', '复兴区');
INSERT INTO `dz_district` VALUES ('84', '6', '峰峰矿区');
INSERT INTO `dz_district` VALUES ('85', '6', '邯郸县');
INSERT INTO `dz_district` VALUES ('86', '6', '临漳县');
INSERT INTO `dz_district` VALUES ('87', '6', '成安县');
INSERT INTO `dz_district` VALUES ('88', '6', '大名县');
INSERT INTO `dz_district` VALUES ('89', '6', '涉县');
INSERT INTO `dz_district` VALUES ('90', '6', '磁县');
INSERT INTO `dz_district` VALUES ('91', '6', '肥乡县');
INSERT INTO `dz_district` VALUES ('92', '6', '永年县');
INSERT INTO `dz_district` VALUES ('93', '6', '邱县');
INSERT INTO `dz_district` VALUES ('94', '6', '鸡泽县');
INSERT INTO `dz_district` VALUES ('95', '6', '广平县');
INSERT INTO `dz_district` VALUES ('96', '6', '馆陶县');
INSERT INTO `dz_district` VALUES ('97', '6', '魏县');
INSERT INTO `dz_district` VALUES ('98', '6', '曲周县');
INSERT INTO `dz_district` VALUES ('99', '6', '武安市');
INSERT INTO `dz_district` VALUES ('100', '7', '桥东区');
INSERT INTO `dz_district` VALUES ('101', '7', '桥西区');
INSERT INTO `dz_district` VALUES ('102', '7', '邢台县');
INSERT INTO `dz_district` VALUES ('103', '7', '临城县');
INSERT INTO `dz_district` VALUES ('104', '7', '内丘县');
INSERT INTO `dz_district` VALUES ('105', '7', '柏乡县');
INSERT INTO `dz_district` VALUES ('106', '7', '隆尧县');
INSERT INTO `dz_district` VALUES ('107', '7', '任县');
INSERT INTO `dz_district` VALUES ('108', '7', '南和县');
INSERT INTO `dz_district` VALUES ('109', '7', '宁晋县');
INSERT INTO `dz_district` VALUES ('110', '7', '巨鹿县');
INSERT INTO `dz_district` VALUES ('111', '7', '新河县');
INSERT INTO `dz_district` VALUES ('112', '7', '广宗县');
INSERT INTO `dz_district` VALUES ('113', '7', '平乡县');
INSERT INTO `dz_district` VALUES ('114', '7', '威县');
INSERT INTO `dz_district` VALUES ('115', '7', '清河县');
INSERT INTO `dz_district` VALUES ('116', '7', '临西县');
INSERT INTO `dz_district` VALUES ('117', '7', '南宫市');
INSERT INTO `dz_district` VALUES ('118', '7', '沙河市');
INSERT INTO `dz_district` VALUES ('119', '8', '新市区');
INSERT INTO `dz_district` VALUES ('120', '8', '北市区');
INSERT INTO `dz_district` VALUES ('121', '8', '南市区');
INSERT INTO `dz_district` VALUES ('122', '8', '满城县');
INSERT INTO `dz_district` VALUES ('123', '8', '清苑县');
INSERT INTO `dz_district` VALUES ('124', '8', '涞水县');
INSERT INTO `dz_district` VALUES ('125', '8', '阜平县');
INSERT INTO `dz_district` VALUES ('126', '8', '徐水县');
INSERT INTO `dz_district` VALUES ('127', '8', '定兴县');
INSERT INTO `dz_district` VALUES ('128', '8', '唐县');
INSERT INTO `dz_district` VALUES ('129', '8', '高阳县');
INSERT INTO `dz_district` VALUES ('130', '8', '容城县');
INSERT INTO `dz_district` VALUES ('131', '8', '涞源县');
INSERT INTO `dz_district` VALUES ('132', '8', '望都县');
INSERT INTO `dz_district` VALUES ('133', '8', '安新县');
INSERT INTO `dz_district` VALUES ('134', '8', '易县');
INSERT INTO `dz_district` VALUES ('135', '8', '曲阳县');
INSERT INTO `dz_district` VALUES ('136', '8', '蠡县');
INSERT INTO `dz_district` VALUES ('137', '8', '顺平县');
INSERT INTO `dz_district` VALUES ('138', '8', '博野县');
INSERT INTO `dz_district` VALUES ('139', '8', '雄县');
INSERT INTO `dz_district` VALUES ('140', '8', '涿州市');
INSERT INTO `dz_district` VALUES ('141', '8', '定州市');
INSERT INTO `dz_district` VALUES ('142', '8', '安国市');
INSERT INTO `dz_district` VALUES ('143', '8', '高碑店市');
INSERT INTO `dz_district` VALUES ('144', '9', '桥东区');
INSERT INTO `dz_district` VALUES ('145', '9', '桥西区');
INSERT INTO `dz_district` VALUES ('146', '9', '宣化区');
INSERT INTO `dz_district` VALUES ('147', '9', '下花园区');
INSERT INTO `dz_district` VALUES ('148', '9', '宣化县');
INSERT INTO `dz_district` VALUES ('149', '9', '张北县');
INSERT INTO `dz_district` VALUES ('150', '9', '康保县');
INSERT INTO `dz_district` VALUES ('151', '9', '沽源县');
INSERT INTO `dz_district` VALUES ('152', '9', '尚义县');
INSERT INTO `dz_district` VALUES ('153', '9', '蔚县');
INSERT INTO `dz_district` VALUES ('154', '9', '阳原县');
INSERT INTO `dz_district` VALUES ('155', '9', '怀安县');
INSERT INTO `dz_district` VALUES ('156', '9', '万全县');
INSERT INTO `dz_district` VALUES ('157', '9', '怀来县');
INSERT INTO `dz_district` VALUES ('158', '9', '涿鹿县');
INSERT INTO `dz_district` VALUES ('159', '9', '赤城县');
INSERT INTO `dz_district` VALUES ('160', '9', '崇礼县');
INSERT INTO `dz_district` VALUES ('161', '10', '双桥区');
INSERT INTO `dz_district` VALUES ('162', '10', '双滦区');
INSERT INTO `dz_district` VALUES ('163', '10', '鹰手营子矿区');
INSERT INTO `dz_district` VALUES ('164', '10', '承德县');
INSERT INTO `dz_district` VALUES ('165', '10', '兴隆县');
INSERT INTO `dz_district` VALUES ('166', '10', '平泉县');
INSERT INTO `dz_district` VALUES ('167', '10', '滦平县');
INSERT INTO `dz_district` VALUES ('168', '10', '隆化县');
INSERT INTO `dz_district` VALUES ('169', '10', '丰宁满族自治县');
INSERT INTO `dz_district` VALUES ('170', '10', '宽城满族自治县');
INSERT INTO `dz_district` VALUES ('171', '10', '围场满族蒙古族自治县');
INSERT INTO `dz_district` VALUES ('172', '11', '新华区');
INSERT INTO `dz_district` VALUES ('173', '11', '运河区');
INSERT INTO `dz_district` VALUES ('174', '11', '沧县');
INSERT INTO `dz_district` VALUES ('175', '11', '青县');
INSERT INTO `dz_district` VALUES ('176', '11', '东光县');
INSERT INTO `dz_district` VALUES ('177', '11', '海兴县');
INSERT INTO `dz_district` VALUES ('178', '11', '盐山县');
INSERT INTO `dz_district` VALUES ('179', '11', '肃宁县');
INSERT INTO `dz_district` VALUES ('180', '11', '南皮县');
INSERT INTO `dz_district` VALUES ('181', '11', '吴桥县');
INSERT INTO `dz_district` VALUES ('182', '11', '献县');
INSERT INTO `dz_district` VALUES ('183', '11', '孟村回族自治县');
INSERT INTO `dz_district` VALUES ('184', '11', '泊头市');
INSERT INTO `dz_district` VALUES ('185', '11', '任丘市');
INSERT INTO `dz_district` VALUES ('186', '11', '黄骅市');
INSERT INTO `dz_district` VALUES ('187', '11', '河间市');
INSERT INTO `dz_district` VALUES ('188', '12', '安次区');
INSERT INTO `dz_district` VALUES ('189', '12', '广阳区');
INSERT INTO `dz_district` VALUES ('190', '12', '固安县');
INSERT INTO `dz_district` VALUES ('191', '12', '永清县');
INSERT INTO `dz_district` VALUES ('192', '12', '香河县');
INSERT INTO `dz_district` VALUES ('193', '12', '大城县');
INSERT INTO `dz_district` VALUES ('194', '12', '文安县');
INSERT INTO `dz_district` VALUES ('195', '12', '大厂回族自治县');
INSERT INTO `dz_district` VALUES ('196', '12', '霸州市');
INSERT INTO `dz_district` VALUES ('197', '12', '三河市');
INSERT INTO `dz_district` VALUES ('198', '13', '桃城区');
INSERT INTO `dz_district` VALUES ('199', '13', '枣强县');
INSERT INTO `dz_district` VALUES ('200', '13', '武邑县');
INSERT INTO `dz_district` VALUES ('201', '13', '武强县');
INSERT INTO `dz_district` VALUES ('202', '13', '饶阳县');
INSERT INTO `dz_district` VALUES ('203', '13', '安平县');
INSERT INTO `dz_district` VALUES ('204', '13', '故城县');
INSERT INTO `dz_district` VALUES ('205', '13', '景县');
INSERT INTO `dz_district` VALUES ('206', '13', '阜城县');
INSERT INTO `dz_district` VALUES ('207', '13', '冀州市');
INSERT INTO `dz_district` VALUES ('208', '13', '深州市');
INSERT INTO `dz_district` VALUES ('209', '14', '小店区');
INSERT INTO `dz_district` VALUES ('210', '14', '迎泽区');
INSERT INTO `dz_district` VALUES ('211', '14', '杏花岭区');
INSERT INTO `dz_district` VALUES ('212', '14', '尖草坪区');
INSERT INTO `dz_district` VALUES ('213', '14', '万柏林区');
INSERT INTO `dz_district` VALUES ('214', '14', '晋源区');
INSERT INTO `dz_district` VALUES ('215', '14', '清徐县');
INSERT INTO `dz_district` VALUES ('216', '14', '阳曲县');
INSERT INTO `dz_district` VALUES ('217', '14', '娄烦县');
INSERT INTO `dz_district` VALUES ('218', '14', '古交市');
INSERT INTO `dz_district` VALUES ('219', '15', '城区');
INSERT INTO `dz_district` VALUES ('220', '15', '矿区');
INSERT INTO `dz_district` VALUES ('221', '15', '南郊区');
INSERT INTO `dz_district` VALUES ('222', '15', '新荣区');
INSERT INTO `dz_district` VALUES ('223', '15', '阳高县');
INSERT INTO `dz_district` VALUES ('224', '15', '天镇县');
INSERT INTO `dz_district` VALUES ('225', '15', '广灵县');
INSERT INTO `dz_district` VALUES ('226', '15', '灵丘县');
INSERT INTO `dz_district` VALUES ('227', '15', '浑源县');
INSERT INTO `dz_district` VALUES ('228', '15', '左云县');
INSERT INTO `dz_district` VALUES ('229', '15', '大同县');
INSERT INTO `dz_district` VALUES ('230', '16', '城区');
INSERT INTO `dz_district` VALUES ('231', '16', '矿区');
INSERT INTO `dz_district` VALUES ('232', '16', '郊区');
INSERT INTO `dz_district` VALUES ('233', '16', '平定县');
INSERT INTO `dz_district` VALUES ('234', '16', '盂县');
INSERT INTO `dz_district` VALUES ('235', '17', '城区');
INSERT INTO `dz_district` VALUES ('236', '17', '郊区');
INSERT INTO `dz_district` VALUES ('237', '17', '长治县');
INSERT INTO `dz_district` VALUES ('238', '17', '襄垣县');
INSERT INTO `dz_district` VALUES ('239', '17', '屯留县');
INSERT INTO `dz_district` VALUES ('240', '17', '平顺县');
INSERT INTO `dz_district` VALUES ('241', '17', '黎城县');
INSERT INTO `dz_district` VALUES ('242', '17', '壶关县');
INSERT INTO `dz_district` VALUES ('243', '17', '长子县');
INSERT INTO `dz_district` VALUES ('244', '17', '武乡县');
INSERT INTO `dz_district` VALUES ('245', '17', '沁县');
INSERT INTO `dz_district` VALUES ('246', '17', '沁源县');
INSERT INTO `dz_district` VALUES ('247', '17', '潞城市');
INSERT INTO `dz_district` VALUES ('248', '18', '城区');
INSERT INTO `dz_district` VALUES ('249', '18', '沁水县');
INSERT INTO `dz_district` VALUES ('250', '18', '阳城县');
INSERT INTO `dz_district` VALUES ('251', '18', '陵川县');
INSERT INTO `dz_district` VALUES ('252', '18', '泽州县');
INSERT INTO `dz_district` VALUES ('253', '18', '高平市');
INSERT INTO `dz_district` VALUES ('254', '19', '朔城区');
INSERT INTO `dz_district` VALUES ('255', '19', '平鲁区');
INSERT INTO `dz_district` VALUES ('256', '19', '山阴县');
INSERT INTO `dz_district` VALUES ('257', '19', '应县');
INSERT INTO `dz_district` VALUES ('258', '19', '右玉县');
INSERT INTO `dz_district` VALUES ('259', '19', '怀仁县');
INSERT INTO `dz_district` VALUES ('260', '20', '榆次区');
INSERT INTO `dz_district` VALUES ('261', '20', '榆社县');
INSERT INTO `dz_district` VALUES ('262', '20', '左权县');
INSERT INTO `dz_district` VALUES ('263', '20', '和顺县');
INSERT INTO `dz_district` VALUES ('264', '20', '昔阳县');
INSERT INTO `dz_district` VALUES ('265', '20', '寿阳县');
INSERT INTO `dz_district` VALUES ('266', '20', '太谷县');
INSERT INTO `dz_district` VALUES ('267', '20', '祁县');
INSERT INTO `dz_district` VALUES ('268', '20', '平遥县');
INSERT INTO `dz_district` VALUES ('269', '20', '灵石县');
INSERT INTO `dz_district` VALUES ('270', '20', '介休市');
INSERT INTO `dz_district` VALUES ('271', '21', '盐湖区');
INSERT INTO `dz_district` VALUES ('272', '21', '临猗县');
INSERT INTO `dz_district` VALUES ('273', '21', '万荣县');
INSERT INTO `dz_district` VALUES ('274', '21', '闻喜县');
INSERT INTO `dz_district` VALUES ('275', '21', '稷山县');
INSERT INTO `dz_district` VALUES ('276', '21', '新绛县');
INSERT INTO `dz_district` VALUES ('277', '21', '绛县');
INSERT INTO `dz_district` VALUES ('278', '21', '垣曲县');
INSERT INTO `dz_district` VALUES ('279', '21', '夏县');
INSERT INTO `dz_district` VALUES ('280', '21', '平陆县');
INSERT INTO `dz_district` VALUES ('281', '21', '芮城县');
INSERT INTO `dz_district` VALUES ('282', '21', '永济市');
INSERT INTO `dz_district` VALUES ('283', '21', '河津市');
INSERT INTO `dz_district` VALUES ('284', '22', '忻府区');
INSERT INTO `dz_district` VALUES ('285', '22', '定襄县');
INSERT INTO `dz_district` VALUES ('286', '22', '五台县');
INSERT INTO `dz_district` VALUES ('287', '22', '代县');
INSERT INTO `dz_district` VALUES ('288', '22', '繁峙县');
INSERT INTO `dz_district` VALUES ('289', '22', '宁武县');
INSERT INTO `dz_district` VALUES ('290', '22', '静乐县');
INSERT INTO `dz_district` VALUES ('291', '22', '神池县');
INSERT INTO `dz_district` VALUES ('292', '22', '五寨县');
INSERT INTO `dz_district` VALUES ('293', '22', '岢岚县');
INSERT INTO `dz_district` VALUES ('294', '22', '河曲县');
INSERT INTO `dz_district` VALUES ('295', '22', '保德县');
INSERT INTO `dz_district` VALUES ('296', '22', '偏关县');
INSERT INTO `dz_district` VALUES ('297', '22', '原平市');
INSERT INTO `dz_district` VALUES ('298', '23', '尧都区');
INSERT INTO `dz_district` VALUES ('299', '23', '曲沃县');
INSERT INTO `dz_district` VALUES ('300', '23', '翼城县');
INSERT INTO `dz_district` VALUES ('301', '23', '襄汾县');
INSERT INTO `dz_district` VALUES ('302', '23', '洪洞县');
INSERT INTO `dz_district` VALUES ('303', '23', '古县');
INSERT INTO `dz_district` VALUES ('304', '23', '安泽县');
INSERT INTO `dz_district` VALUES ('305', '23', '浮山县');
INSERT INTO `dz_district` VALUES ('306', '23', '吉县');
INSERT INTO `dz_district` VALUES ('307', '23', '乡宁县');
INSERT INTO `dz_district` VALUES ('308', '23', '大宁县');
INSERT INTO `dz_district` VALUES ('309', '23', '隰县');
INSERT INTO `dz_district` VALUES ('310', '23', '永和县');
INSERT INTO `dz_district` VALUES ('311', '23', '蒲县');
INSERT INTO `dz_district` VALUES ('312', '23', '汾西县');
INSERT INTO `dz_district` VALUES ('313', '23', '侯马市');
INSERT INTO `dz_district` VALUES ('314', '23', '霍州市');
INSERT INTO `dz_district` VALUES ('315', '24', '离石区');
INSERT INTO `dz_district` VALUES ('316', '24', '文水县');
INSERT INTO `dz_district` VALUES ('317', '24', '交城县');
INSERT INTO `dz_district` VALUES ('318', '24', '兴县');
INSERT INTO `dz_district` VALUES ('319', '24', '临县');
INSERT INTO `dz_district` VALUES ('320', '24', '柳林县');
INSERT INTO `dz_district` VALUES ('321', '24', '石楼县');
INSERT INTO `dz_district` VALUES ('322', '24', '岚县');
INSERT INTO `dz_district` VALUES ('323', '24', '方山县');
INSERT INTO `dz_district` VALUES ('324', '24', '中阳县');
INSERT INTO `dz_district` VALUES ('325', '24', '交口县');
INSERT INTO `dz_district` VALUES ('326', '24', '孝义市');
INSERT INTO `dz_district` VALUES ('327', '24', '汾阳市');
INSERT INTO `dz_district` VALUES ('328', '25', '新城区');
INSERT INTO `dz_district` VALUES ('329', '25', '回民区');
INSERT INTO `dz_district` VALUES ('330', '25', '玉泉区');
INSERT INTO `dz_district` VALUES ('331', '25', '赛罕区');
INSERT INTO `dz_district` VALUES ('332', '25', '土默特左旗');
INSERT INTO `dz_district` VALUES ('333', '25', '托克托县');
INSERT INTO `dz_district` VALUES ('334', '25', '和林格尔县');
INSERT INTO `dz_district` VALUES ('335', '25', '清水河县');
INSERT INTO `dz_district` VALUES ('336', '25', '武川县');
INSERT INTO `dz_district` VALUES ('337', '26', '东河区');
INSERT INTO `dz_district` VALUES ('338', '26', '昆都仑区');
INSERT INTO `dz_district` VALUES ('339', '26', '青山区');
INSERT INTO `dz_district` VALUES ('340', '26', '石拐区');
INSERT INTO `dz_district` VALUES ('341', '26', '白云矿区');
INSERT INTO `dz_district` VALUES ('342', '26', '九原区');
INSERT INTO `dz_district` VALUES ('343', '26', '土默特右旗');
INSERT INTO `dz_district` VALUES ('344', '26', '固阳县');
INSERT INTO `dz_district` VALUES ('345', '26', '达尔罕茂明安联合旗');
INSERT INTO `dz_district` VALUES ('346', '27', '海勃湾区');
INSERT INTO `dz_district` VALUES ('347', '27', '海南区');
INSERT INTO `dz_district` VALUES ('348', '27', '乌达区');
INSERT INTO `dz_district` VALUES ('349', '28', '红山区');
INSERT INTO `dz_district` VALUES ('350', '28', '元宝山区');
INSERT INTO `dz_district` VALUES ('351', '28', '松山区');
INSERT INTO `dz_district` VALUES ('352', '28', '阿鲁科尔沁旗');
INSERT INTO `dz_district` VALUES ('353', '28', '巴林左旗');
INSERT INTO `dz_district` VALUES ('354', '28', '巴林右旗');
INSERT INTO `dz_district` VALUES ('355', '28', '林西县');
INSERT INTO `dz_district` VALUES ('356', '28', '克什克腾旗');
INSERT INTO `dz_district` VALUES ('357', '28', '翁牛特旗');
INSERT INTO `dz_district` VALUES ('358', '28', '喀喇沁旗');
INSERT INTO `dz_district` VALUES ('359', '28', '宁城县');
INSERT INTO `dz_district` VALUES ('360', '28', '敖汉旗');
INSERT INTO `dz_district` VALUES ('361', '29', '科尔沁区');
INSERT INTO `dz_district` VALUES ('362', '29', '科尔沁左翼中旗');
INSERT INTO `dz_district` VALUES ('363', '29', '科尔沁左翼后旗');
INSERT INTO `dz_district` VALUES ('364', '29', '开鲁县');
INSERT INTO `dz_district` VALUES ('365', '29', '库伦旗');
INSERT INTO `dz_district` VALUES ('366', '29', '奈曼旗');
INSERT INTO `dz_district` VALUES ('367', '29', '扎鲁特旗');
INSERT INTO `dz_district` VALUES ('368', '29', '霍林郭勒市');
INSERT INTO `dz_district` VALUES ('369', '30', '东胜区');
INSERT INTO `dz_district` VALUES ('370', '30', '达拉特旗');
INSERT INTO `dz_district` VALUES ('371', '30', '准格尔旗');
INSERT INTO `dz_district` VALUES ('372', '30', '鄂托克前旗');
INSERT INTO `dz_district` VALUES ('373', '30', '鄂托克旗');
INSERT INTO `dz_district` VALUES ('374', '30', '杭锦旗');
INSERT INTO `dz_district` VALUES ('375', '30', '乌审旗');
INSERT INTO `dz_district` VALUES ('376', '30', '伊金霍洛旗');
INSERT INTO `dz_district` VALUES ('377', '31', '海拉尔区');
INSERT INTO `dz_district` VALUES ('378', '31', '阿荣旗');
INSERT INTO `dz_district` VALUES ('379', '31', '莫力达瓦达斡尔族自治旗');
INSERT INTO `dz_district` VALUES ('380', '31', '鄂伦春自治旗');
INSERT INTO `dz_district` VALUES ('381', '31', '鄂温克族自治旗');
INSERT INTO `dz_district` VALUES ('382', '31', '陈巴尔虎旗');
INSERT INTO `dz_district` VALUES ('383', '31', '新巴尔虎左旗');
INSERT INTO `dz_district` VALUES ('384', '31', '新巴尔虎右旗');
INSERT INTO `dz_district` VALUES ('385', '31', '满洲里市');
INSERT INTO `dz_district` VALUES ('386', '31', '牙克石市');
INSERT INTO `dz_district` VALUES ('387', '31', '扎兰屯市');
INSERT INTO `dz_district` VALUES ('388', '31', '额尔古纳市');
INSERT INTO `dz_district` VALUES ('389', '31', '根河市');
INSERT INTO `dz_district` VALUES ('390', '32', '临河区');
INSERT INTO `dz_district` VALUES ('391', '32', '五原县');
INSERT INTO `dz_district` VALUES ('392', '32', '磴口县');
INSERT INTO `dz_district` VALUES ('393', '32', '乌拉特前旗');
INSERT INTO `dz_district` VALUES ('394', '32', '乌拉特中旗');
INSERT INTO `dz_district` VALUES ('395', '32', '乌拉特后旗');
INSERT INTO `dz_district` VALUES ('396', '32', '杭锦后旗');
INSERT INTO `dz_district` VALUES ('397', '33', '集宁区');
INSERT INTO `dz_district` VALUES ('398', '33', '卓资县');
INSERT INTO `dz_district` VALUES ('399', '33', '化德县');
INSERT INTO `dz_district` VALUES ('400', '33', '商都县');
INSERT INTO `dz_district` VALUES ('401', '33', '兴和县');
INSERT INTO `dz_district` VALUES ('402', '33', '凉城县');
INSERT INTO `dz_district` VALUES ('403', '33', '察哈尔右翼前旗');
INSERT INTO `dz_district` VALUES ('404', '33', '察哈尔右翼中旗');
INSERT INTO `dz_district` VALUES ('405', '33', '察哈尔右翼后旗');
INSERT INTO `dz_district` VALUES ('406', '33', '四子王旗');
INSERT INTO `dz_district` VALUES ('407', '33', '丰镇市');
INSERT INTO `dz_district` VALUES ('408', '34', '乌兰浩特市');
INSERT INTO `dz_district` VALUES ('409', '34', '阿尔山市');
INSERT INTO `dz_district` VALUES ('410', '34', '科尔沁右翼前旗');
INSERT INTO `dz_district` VALUES ('411', '34', '科尔沁右翼中旗');
INSERT INTO `dz_district` VALUES ('412', '34', '扎赉特旗');
INSERT INTO `dz_district` VALUES ('413', '34', '突泉县');
INSERT INTO `dz_district` VALUES ('414', '35', '二连浩特市');
INSERT INTO `dz_district` VALUES ('415', '35', '锡林浩特市');
INSERT INTO `dz_district` VALUES ('416', '35', '阿巴嘎旗');
INSERT INTO `dz_district` VALUES ('417', '35', '苏尼特左旗');
INSERT INTO `dz_district` VALUES ('418', '35', '苏尼特右旗');
INSERT INTO `dz_district` VALUES ('419', '35', '东乌珠穆沁旗');
INSERT INTO `dz_district` VALUES ('420', '35', '西乌珠穆沁旗');
INSERT INTO `dz_district` VALUES ('421', '35', '太仆寺旗');
INSERT INTO `dz_district` VALUES ('422', '35', '镶黄旗');
INSERT INTO `dz_district` VALUES ('423', '35', '正镶白旗');
INSERT INTO `dz_district` VALUES ('424', '35', '正蓝旗');
INSERT INTO `dz_district` VALUES ('425', '35', '多伦县');
INSERT INTO `dz_district` VALUES ('426', '36', '阿拉善左旗');
INSERT INTO `dz_district` VALUES ('427', '36', '阿拉善右旗');
INSERT INTO `dz_district` VALUES ('428', '36', '额济纳旗');
INSERT INTO `dz_district` VALUES ('429', '37', '和平区');
INSERT INTO `dz_district` VALUES ('430', '37', '沈河区');
INSERT INTO `dz_district` VALUES ('431', '37', '大东区');
INSERT INTO `dz_district` VALUES ('432', '37', '皇姑区');
INSERT INTO `dz_district` VALUES ('433', '37', '铁西区');
INSERT INTO `dz_district` VALUES ('434', '37', '苏家屯区');
INSERT INTO `dz_district` VALUES ('435', '37', '东陵区');
INSERT INTO `dz_district` VALUES ('436', '37', '新城子区');
INSERT INTO `dz_district` VALUES ('437', '37', '于洪区');
INSERT INTO `dz_district` VALUES ('438', '37', '辽中县');
INSERT INTO `dz_district` VALUES ('439', '37', '康平县');
INSERT INTO `dz_district` VALUES ('440', '37', '法库县');
INSERT INTO `dz_district` VALUES ('441', '37', '新民市');
INSERT INTO `dz_district` VALUES ('442', '38', '中山区');
INSERT INTO `dz_district` VALUES ('443', '38', '西岗区');
INSERT INTO `dz_district` VALUES ('444', '38', '沙河口区');
INSERT INTO `dz_district` VALUES ('445', '38', '甘井子区');
INSERT INTO `dz_district` VALUES ('446', '38', '旅顺口区');
INSERT INTO `dz_district` VALUES ('447', '38', '金州区');
INSERT INTO `dz_district` VALUES ('448', '38', '长海县');
INSERT INTO `dz_district` VALUES ('449', '38', '瓦房店市');
INSERT INTO `dz_district` VALUES ('450', '38', '普兰店市');
INSERT INTO `dz_district` VALUES ('451', '38', '庄河市');
INSERT INTO `dz_district` VALUES ('452', '39', '铁东区');
INSERT INTO `dz_district` VALUES ('453', '39', '铁西区');
INSERT INTO `dz_district` VALUES ('454', '39', '立山区');
INSERT INTO `dz_district` VALUES ('455', '39', '千山区');
INSERT INTO `dz_district` VALUES ('456', '39', '台安县');
INSERT INTO `dz_district` VALUES ('457', '39', '岫岩满族自治县');
INSERT INTO `dz_district` VALUES ('458', '39', '海城市');
INSERT INTO `dz_district` VALUES ('459', '40', '新抚区');
INSERT INTO `dz_district` VALUES ('460', '40', '东洲区');
INSERT INTO `dz_district` VALUES ('461', '40', '望花区');
INSERT INTO `dz_district` VALUES ('462', '40', '顺城区');
INSERT INTO `dz_district` VALUES ('463', '40', '抚顺县');
INSERT INTO `dz_district` VALUES ('464', '40', '新宾满族自治县');
INSERT INTO `dz_district` VALUES ('465', '40', '清原满族自治县');
INSERT INTO `dz_district` VALUES ('466', '41', '平山区');
INSERT INTO `dz_district` VALUES ('467', '41', '溪湖区');
INSERT INTO `dz_district` VALUES ('468', '41', '明山区');
INSERT INTO `dz_district` VALUES ('469', '41', '南芬区');
INSERT INTO `dz_district` VALUES ('470', '41', '本溪满族自治县');
INSERT INTO `dz_district` VALUES ('471', '41', '桓仁满族自治县');
INSERT INTO `dz_district` VALUES ('472', '42', '元宝区');
INSERT INTO `dz_district` VALUES ('473', '42', '振兴区');
INSERT INTO `dz_district` VALUES ('474', '42', '振安区');
INSERT INTO `dz_district` VALUES ('475', '42', '宽甸满族自治县');
INSERT INTO `dz_district` VALUES ('476', '42', '东港市');
INSERT INTO `dz_district` VALUES ('477', '42', '凤城市');
INSERT INTO `dz_district` VALUES ('478', '43', '古塔区');
INSERT INTO `dz_district` VALUES ('479', '43', '凌河区');
INSERT INTO `dz_district` VALUES ('480', '43', '太和区');
INSERT INTO `dz_district` VALUES ('481', '43', '黑山县');
INSERT INTO `dz_district` VALUES ('482', '43', '义县');
INSERT INTO `dz_district` VALUES ('483', '43', '凌海市');
INSERT INTO `dz_district` VALUES ('484', '43', '北宁市');
INSERT INTO `dz_district` VALUES ('485', '44', '站前区');
INSERT INTO `dz_district` VALUES ('486', '44', '西市区');
INSERT INTO `dz_district` VALUES ('487', '44', '鲅鱼圈区');
INSERT INTO `dz_district` VALUES ('488', '44', '老边区');
INSERT INTO `dz_district` VALUES ('489', '44', '盖州市');
INSERT INTO `dz_district` VALUES ('490', '44', '大石桥市');
INSERT INTO `dz_district` VALUES ('491', '45', '海州区');
INSERT INTO `dz_district` VALUES ('492', '45', '新邱区');
INSERT INTO `dz_district` VALUES ('493', '45', '太平区');
INSERT INTO `dz_district` VALUES ('494', '45', '清河门区');
INSERT INTO `dz_district` VALUES ('495', '45', '细河区');
INSERT INTO `dz_district` VALUES ('496', '45', '阜新蒙古族自治县');
INSERT INTO `dz_district` VALUES ('497', '45', '彰武县');
INSERT INTO `dz_district` VALUES ('498', '46', '白塔区');
INSERT INTO `dz_district` VALUES ('499', '46', '文圣区');
INSERT INTO `dz_district` VALUES ('500', '46', '宏伟区');
INSERT INTO `dz_district` VALUES ('501', '46', '弓长岭区');
INSERT INTO `dz_district` VALUES ('502', '46', '太子河区');
INSERT INTO `dz_district` VALUES ('503', '46', '辽阳县');
INSERT INTO `dz_district` VALUES ('504', '46', '灯塔市');
INSERT INTO `dz_district` VALUES ('505', '47', '双台子区');
INSERT INTO `dz_district` VALUES ('506', '47', '兴隆台区');
INSERT INTO `dz_district` VALUES ('507', '47', '大洼县');
INSERT INTO `dz_district` VALUES ('508', '47', '盘山县');
INSERT INTO `dz_district` VALUES ('509', '48', '银州区');
INSERT INTO `dz_district` VALUES ('510', '48', '清河区');
INSERT INTO `dz_district` VALUES ('511', '48', '铁岭县');
INSERT INTO `dz_district` VALUES ('512', '48', '西丰县');
INSERT INTO `dz_district` VALUES ('513', '48', '昌图县');
INSERT INTO `dz_district` VALUES ('514', '48', '调兵山市');
INSERT INTO `dz_district` VALUES ('515', '48', '开原市');
INSERT INTO `dz_district` VALUES ('516', '49', '双塔区');
INSERT INTO `dz_district` VALUES ('517', '49', '龙城区');
INSERT INTO `dz_district` VALUES ('518', '49', '朝阳县');
INSERT INTO `dz_district` VALUES ('519', '49', '建平县');
INSERT INTO `dz_district` VALUES ('520', '49', '喀喇沁左翼蒙古族自治县');
INSERT INTO `dz_district` VALUES ('521', '49', '北票市');
INSERT INTO `dz_district` VALUES ('522', '49', '凌源市');
INSERT INTO `dz_district` VALUES ('523', '50', '连山区');
INSERT INTO `dz_district` VALUES ('524', '50', '龙港区');
INSERT INTO `dz_district` VALUES ('525', '50', '南票区');
INSERT INTO `dz_district` VALUES ('526', '50', '绥中县');
INSERT INTO `dz_district` VALUES ('527', '50', '建昌县');
INSERT INTO `dz_district` VALUES ('528', '50', '兴城市');
INSERT INTO `dz_district` VALUES ('529', '51', '南关区');
INSERT INTO `dz_district` VALUES ('530', '51', '宽城区');
INSERT INTO `dz_district` VALUES ('531', '51', '朝阳区');
INSERT INTO `dz_district` VALUES ('532', '51', '二道区');
INSERT INTO `dz_district` VALUES ('533', '51', '绿园区');
INSERT INTO `dz_district` VALUES ('534', '51', '双阳区');
INSERT INTO `dz_district` VALUES ('535', '51', '农安县');
INSERT INTO `dz_district` VALUES ('536', '51', '九台市');
INSERT INTO `dz_district` VALUES ('537', '51', '榆树市');
INSERT INTO `dz_district` VALUES ('538', '51', '德惠市');
INSERT INTO `dz_district` VALUES ('539', '52', '昌邑区');
INSERT INTO `dz_district` VALUES ('540', '52', '龙潭区');
INSERT INTO `dz_district` VALUES ('541', '52', '船营区');
INSERT INTO `dz_district` VALUES ('542', '52', '丰满区');
INSERT INTO `dz_district` VALUES ('543', '52', '永吉县');
INSERT INTO `dz_district` VALUES ('544', '52', '蛟河市');
INSERT INTO `dz_district` VALUES ('545', '52', '桦甸市');
INSERT INTO `dz_district` VALUES ('546', '52', '舒兰市');
INSERT INTO `dz_district` VALUES ('547', '52', '磐石市');
INSERT INTO `dz_district` VALUES ('548', '53', '铁西区');
INSERT INTO `dz_district` VALUES ('549', '53', '铁东区');
INSERT INTO `dz_district` VALUES ('550', '53', '梨树县');
INSERT INTO `dz_district` VALUES ('551', '53', '伊通满族自治县');
INSERT INTO `dz_district` VALUES ('552', '53', '公主岭市');
INSERT INTO `dz_district` VALUES ('553', '53', '双辽市');
INSERT INTO `dz_district` VALUES ('554', '54', '龙山区');
INSERT INTO `dz_district` VALUES ('555', '54', '西安区');
INSERT INTO `dz_district` VALUES ('556', '54', '东丰县');
INSERT INTO `dz_district` VALUES ('557', '54', '东辽县');
INSERT INTO `dz_district` VALUES ('558', '55', '东昌区');
INSERT INTO `dz_district` VALUES ('559', '55', '二道江区');
INSERT INTO `dz_district` VALUES ('560', '55', '通化县');
INSERT INTO `dz_district` VALUES ('561', '55', '辉南县');
INSERT INTO `dz_district` VALUES ('562', '55', '柳河县');
INSERT INTO `dz_district` VALUES ('563', '55', '梅河口市');
INSERT INTO `dz_district` VALUES ('564', '55', '集安市');
INSERT INTO `dz_district` VALUES ('565', '56', '八道江区');
INSERT INTO `dz_district` VALUES ('566', '56', '抚松县');
INSERT INTO `dz_district` VALUES ('567', '56', '靖宇县');
INSERT INTO `dz_district` VALUES ('568', '56', '长白朝鲜族自治县');
INSERT INTO `dz_district` VALUES ('569', '56', '江源县');
INSERT INTO `dz_district` VALUES ('570', '56', '临江市');
INSERT INTO `dz_district` VALUES ('571', '57', '宁江区');
INSERT INTO `dz_district` VALUES ('572', '57', '前郭尔罗斯蒙古族自治县');
INSERT INTO `dz_district` VALUES ('573', '57', '长岭县');
INSERT INTO `dz_district` VALUES ('574', '57', '乾安县');
INSERT INTO `dz_district` VALUES ('575', '57', '扶余县');
INSERT INTO `dz_district` VALUES ('576', '58', '洮北区');
INSERT INTO `dz_district` VALUES ('577', '58', '镇赉县');
INSERT INTO `dz_district` VALUES ('578', '58', '通榆县');
INSERT INTO `dz_district` VALUES ('579', '58', '洮南市');
INSERT INTO `dz_district` VALUES ('580', '58', '大安市');
INSERT INTO `dz_district` VALUES ('581', '59', '延吉市');
INSERT INTO `dz_district` VALUES ('582', '59', '图们市');
INSERT INTO `dz_district` VALUES ('583', '59', '敦化市');
INSERT INTO `dz_district` VALUES ('584', '59', '珲春市');
INSERT INTO `dz_district` VALUES ('585', '59', '龙井市');
INSERT INTO `dz_district` VALUES ('586', '59', '和龙市');
INSERT INTO `dz_district` VALUES ('587', '59', '汪清县');
INSERT INTO `dz_district` VALUES ('588', '59', '安图县');
INSERT INTO `dz_district` VALUES ('589', '60', '道里区');
INSERT INTO `dz_district` VALUES ('590', '60', '南岗区');
INSERT INTO `dz_district` VALUES ('591', '60', '道外区');
INSERT INTO `dz_district` VALUES ('592', '60', '香坊区');
INSERT INTO `dz_district` VALUES ('593', '60', '动力区');
INSERT INTO `dz_district` VALUES ('594', '60', '平房区');
INSERT INTO `dz_district` VALUES ('595', '60', '松北区');
INSERT INTO `dz_district` VALUES ('596', '60', '呼兰区');
INSERT INTO `dz_district` VALUES ('597', '60', '依兰县');
INSERT INTO `dz_district` VALUES ('598', '60', '方正县');
INSERT INTO `dz_district` VALUES ('599', '60', '宾县');
INSERT INTO `dz_district` VALUES ('600', '60', '巴彦县');
INSERT INTO `dz_district` VALUES ('601', '60', '木兰县');
INSERT INTO `dz_district` VALUES ('602', '60', '通河县');
INSERT INTO `dz_district` VALUES ('603', '60', '延寿县');
INSERT INTO `dz_district` VALUES ('604', '60', '阿城市');
INSERT INTO `dz_district` VALUES ('605', '60', '双城市');
INSERT INTO `dz_district` VALUES ('606', '60', '尚志市');
INSERT INTO `dz_district` VALUES ('607', '60', '五常市');
INSERT INTO `dz_district` VALUES ('608', '61', '龙沙区');
INSERT INTO `dz_district` VALUES ('609', '61', '建华区');
INSERT INTO `dz_district` VALUES ('610', '61', '铁锋区');
INSERT INTO `dz_district` VALUES ('611', '61', '昂昂溪区');
INSERT INTO `dz_district` VALUES ('612', '61', '富拉尔基区');
INSERT INTO `dz_district` VALUES ('613', '61', '碾子山区');
INSERT INTO `dz_district` VALUES ('614', '61', '梅里斯达斡尔族区');
INSERT INTO `dz_district` VALUES ('615', '61', '龙江县');
INSERT INTO `dz_district` VALUES ('616', '61', '依安县');
INSERT INTO `dz_district` VALUES ('617', '61', '泰来县');
INSERT INTO `dz_district` VALUES ('618', '61', '甘南县');
INSERT INTO `dz_district` VALUES ('619', '61', '富裕县');
INSERT INTO `dz_district` VALUES ('620', '61', '克山县');
INSERT INTO `dz_district` VALUES ('621', '61', '克东县');
INSERT INTO `dz_district` VALUES ('622', '61', '拜泉县');
INSERT INTO `dz_district` VALUES ('623', '61', '讷河市');
INSERT INTO `dz_district` VALUES ('624', '62', '鸡冠区');
INSERT INTO `dz_district` VALUES ('625', '62', '恒山区');
INSERT INTO `dz_district` VALUES ('626', '62', '滴道区');
INSERT INTO `dz_district` VALUES ('627', '62', '梨树区');
INSERT INTO `dz_district` VALUES ('628', '62', '城子河区');
INSERT INTO `dz_district` VALUES ('629', '62', '麻山区');
INSERT INTO `dz_district` VALUES ('630', '62', '鸡东县');
INSERT INTO `dz_district` VALUES ('631', '62', '虎林市');
INSERT INTO `dz_district` VALUES ('632', '62', '密山市');
INSERT INTO `dz_district` VALUES ('633', '63', '向阳区');
INSERT INTO `dz_district` VALUES ('634', '63', '工农区');
INSERT INTO `dz_district` VALUES ('635', '63', '南山区');
INSERT INTO `dz_district` VALUES ('636', '63', '兴安区');
INSERT INTO `dz_district` VALUES ('637', '63', '东山区');
INSERT INTO `dz_district` VALUES ('638', '63', '兴山区');
INSERT INTO `dz_district` VALUES ('639', '63', '萝北县');
INSERT INTO `dz_district` VALUES ('640', '63', '绥滨县');
INSERT INTO `dz_district` VALUES ('641', '64', '尖山区');
INSERT INTO `dz_district` VALUES ('642', '64', '岭东区');
INSERT INTO `dz_district` VALUES ('643', '64', '四方台区');
INSERT INTO `dz_district` VALUES ('644', '64', '宝山区');
INSERT INTO `dz_district` VALUES ('645', '64', '集贤县');
INSERT INTO `dz_district` VALUES ('646', '64', '友谊县');
INSERT INTO `dz_district` VALUES ('647', '64', '宝清县');
INSERT INTO `dz_district` VALUES ('648', '64', '饶河县');
INSERT INTO `dz_district` VALUES ('649', '65', '萨尔图区');
INSERT INTO `dz_district` VALUES ('650', '65', '龙凤区');
INSERT INTO `dz_district` VALUES ('651', '65', '让胡路区');
INSERT INTO `dz_district` VALUES ('652', '65', '红岗区');
INSERT INTO `dz_district` VALUES ('653', '65', '大同区');
INSERT INTO `dz_district` VALUES ('654', '65', '肇州县');
INSERT INTO `dz_district` VALUES ('655', '65', '肇源县');
INSERT INTO `dz_district` VALUES ('656', '65', '林甸县');
INSERT INTO `dz_district` VALUES ('657', '65', '杜尔伯特蒙古族自治县');
INSERT INTO `dz_district` VALUES ('658', '66', '伊春区');
INSERT INTO `dz_district` VALUES ('659', '66', '南岔区');
INSERT INTO `dz_district` VALUES ('660', '66', '友好区');
INSERT INTO `dz_district` VALUES ('661', '66', '西林区');
INSERT INTO `dz_district` VALUES ('662', '66', '翠峦区');
INSERT INTO `dz_district` VALUES ('663', '66', '新青区');
INSERT INTO `dz_district` VALUES ('664', '66', '美溪区');
INSERT INTO `dz_district` VALUES ('665', '66', '金山屯区');
INSERT INTO `dz_district` VALUES ('666', '66', '五营区');
INSERT INTO `dz_district` VALUES ('667', '66', '乌马河区');
INSERT INTO `dz_district` VALUES ('668', '66', '汤旺河区');
INSERT INTO `dz_district` VALUES ('669', '66', '带岭区');
INSERT INTO `dz_district` VALUES ('670', '66', '乌伊岭区');
INSERT INTO `dz_district` VALUES ('671', '66', '红星区');
INSERT INTO `dz_district` VALUES ('672', '66', '上甘岭区');
INSERT INTO `dz_district` VALUES ('673', '66', '嘉荫县');
INSERT INTO `dz_district` VALUES ('674', '66', '铁力市');
INSERT INTO `dz_district` VALUES ('675', '67', '永红区');
INSERT INTO `dz_district` VALUES ('676', '67', '向阳区');
INSERT INTO `dz_district` VALUES ('677', '67', '前进区');
INSERT INTO `dz_district` VALUES ('678', '67', '东风区');
INSERT INTO `dz_district` VALUES ('679', '67', '郊区');
INSERT INTO `dz_district` VALUES ('680', '67', '桦南县');
INSERT INTO `dz_district` VALUES ('681', '67', '桦川县');
INSERT INTO `dz_district` VALUES ('682', '67', '汤原县');
INSERT INTO `dz_district` VALUES ('683', '67', '抚远县');
INSERT INTO `dz_district` VALUES ('684', '67', '同江市');
INSERT INTO `dz_district` VALUES ('685', '67', '富锦市');
INSERT INTO `dz_district` VALUES ('686', '68', '新兴区');
INSERT INTO `dz_district` VALUES ('687', '68', '桃山区');
INSERT INTO `dz_district` VALUES ('688', '68', '茄子河区');
INSERT INTO `dz_district` VALUES ('689', '68', '勃利县');
INSERT INTO `dz_district` VALUES ('690', '69', '东安区');
INSERT INTO `dz_district` VALUES ('691', '69', '阳明区');
INSERT INTO `dz_district` VALUES ('692', '69', '爱民区');
INSERT INTO `dz_district` VALUES ('693', '69', '西安区');
INSERT INTO `dz_district` VALUES ('694', '69', '东宁县');
INSERT INTO `dz_district` VALUES ('695', '69', '林口县');
INSERT INTO `dz_district` VALUES ('696', '69', '绥芬河市');
INSERT INTO `dz_district` VALUES ('697', '69', '海林市');
INSERT INTO `dz_district` VALUES ('698', '69', '宁安市');
INSERT INTO `dz_district` VALUES ('699', '69', '穆棱市');
INSERT INTO `dz_district` VALUES ('700', '70', '爱辉区');
INSERT INTO `dz_district` VALUES ('701', '70', '嫩江县');
INSERT INTO `dz_district` VALUES ('702', '70', '逊克县');
INSERT INTO `dz_district` VALUES ('703', '70', '孙吴县');
INSERT INTO `dz_district` VALUES ('704', '70', '北安市');
INSERT INTO `dz_district` VALUES ('705', '70', '五大连池市');
INSERT INTO `dz_district` VALUES ('706', '71', '北林区');
INSERT INTO `dz_district` VALUES ('707', '71', '望奎县');
INSERT INTO `dz_district` VALUES ('708', '71', '兰西县');
INSERT INTO `dz_district` VALUES ('709', '71', '青冈县');
INSERT INTO `dz_district` VALUES ('710', '71', '庆安县');
INSERT INTO `dz_district` VALUES ('711', '71', '明水县');
INSERT INTO `dz_district` VALUES ('712', '71', '绥棱县');
INSERT INTO `dz_district` VALUES ('713', '71', '安达市');
INSERT INTO `dz_district` VALUES ('714', '71', '肇东市');
INSERT INTO `dz_district` VALUES ('715', '71', '海伦市');
INSERT INTO `dz_district` VALUES ('716', '72', '呼玛县');
INSERT INTO `dz_district` VALUES ('717', '72', '塔河县');
INSERT INTO `dz_district` VALUES ('718', '72', '漠河县');
INSERT INTO `dz_district` VALUES ('719', '73', '黄浦区');
INSERT INTO `dz_district` VALUES ('720', '73', '卢湾区');
INSERT INTO `dz_district` VALUES ('721', '73', '徐汇区');
INSERT INTO `dz_district` VALUES ('722', '73', '长宁区');
INSERT INTO `dz_district` VALUES ('723', '73', '静安区');
INSERT INTO `dz_district` VALUES ('724', '73', '普陀区');
INSERT INTO `dz_district` VALUES ('725', '73', '闸北区');
INSERT INTO `dz_district` VALUES ('726', '73', '虹口区');
INSERT INTO `dz_district` VALUES ('727', '73', '杨浦区');
INSERT INTO `dz_district` VALUES ('728', '73', '闵行区');
INSERT INTO `dz_district` VALUES ('729', '73', '宝山区');
INSERT INTO `dz_district` VALUES ('730', '73', '嘉定区');
INSERT INTO `dz_district` VALUES ('731', '73', '浦东新区');
INSERT INTO `dz_district` VALUES ('732', '73', '金山区');
INSERT INTO `dz_district` VALUES ('733', '73', '松江区');
INSERT INTO `dz_district` VALUES ('734', '73', '青浦区');
INSERT INTO `dz_district` VALUES ('735', '73', '南汇区');
INSERT INTO `dz_district` VALUES ('736', '73', '奉贤区');
INSERT INTO `dz_district` VALUES ('737', '73', '崇明县');
INSERT INTO `dz_district` VALUES ('738', '74', '玄武区');
INSERT INTO `dz_district` VALUES ('739', '74', '白下区');
INSERT INTO `dz_district` VALUES ('740', '74', '秦淮区');
INSERT INTO `dz_district` VALUES ('741', '74', '建邺区');
INSERT INTO `dz_district` VALUES ('742', '74', '鼓楼区');
INSERT INTO `dz_district` VALUES ('743', '74', '下关区');
INSERT INTO `dz_district` VALUES ('744', '74', '浦口区');
INSERT INTO `dz_district` VALUES ('745', '74', '栖霞区');
INSERT INTO `dz_district` VALUES ('746', '74', '雨花台区');
INSERT INTO `dz_district` VALUES ('747', '74', '江宁区');
INSERT INTO `dz_district` VALUES ('748', '74', '六合区');
INSERT INTO `dz_district` VALUES ('749', '74', '溧水县');
INSERT INTO `dz_district` VALUES ('750', '74', '高淳县');
INSERT INTO `dz_district` VALUES ('751', '75', '崇安区');
INSERT INTO `dz_district` VALUES ('752', '75', '南长区');
INSERT INTO `dz_district` VALUES ('753', '75', '北塘区');
INSERT INTO `dz_district` VALUES ('754', '75', '锡山区');
INSERT INTO `dz_district` VALUES ('755', '75', '惠山区');
INSERT INTO `dz_district` VALUES ('756', '75', '滨湖区');
INSERT INTO `dz_district` VALUES ('757', '75', '江阴市');
INSERT INTO `dz_district` VALUES ('758', '75', '宜兴市');
INSERT INTO `dz_district` VALUES ('759', '76', '鼓楼区');
INSERT INTO `dz_district` VALUES ('760', '76', '云龙区');
INSERT INTO `dz_district` VALUES ('761', '76', '九里区');
INSERT INTO `dz_district` VALUES ('762', '76', '贾汪区');
INSERT INTO `dz_district` VALUES ('763', '76', '泉山区');
INSERT INTO `dz_district` VALUES ('764', '76', '丰县');
INSERT INTO `dz_district` VALUES ('765', '76', '沛县');
INSERT INTO `dz_district` VALUES ('766', '76', '铜山县');
INSERT INTO `dz_district` VALUES ('767', '76', '睢宁县');
INSERT INTO `dz_district` VALUES ('768', '76', '新沂市');
INSERT INTO `dz_district` VALUES ('769', '76', '邳州市');
INSERT INTO `dz_district` VALUES ('770', '77', '天宁区');
INSERT INTO `dz_district` VALUES ('771', '77', '钟楼区');
INSERT INTO `dz_district` VALUES ('772', '77', '戚墅堰区');
INSERT INTO `dz_district` VALUES ('773', '77', '新北区');
INSERT INTO `dz_district` VALUES ('774', '77', '武进区');
INSERT INTO `dz_district` VALUES ('775', '77', '溧阳市');
INSERT INTO `dz_district` VALUES ('776', '77', '金坛市');
INSERT INTO `dz_district` VALUES ('777', '78', '沧浪区');
INSERT INTO `dz_district` VALUES ('778', '78', '平江区');
INSERT INTO `dz_district` VALUES ('779', '78', '金阊区');
INSERT INTO `dz_district` VALUES ('780', '78', '虎丘区');
INSERT INTO `dz_district` VALUES ('781', '78', '吴中区');
INSERT INTO `dz_district` VALUES ('782', '78', '相城区');
INSERT INTO `dz_district` VALUES ('783', '78', '常熟市');
INSERT INTO `dz_district` VALUES ('784', '78', '张家港市');
INSERT INTO `dz_district` VALUES ('785', '78', '昆山市');
INSERT INTO `dz_district` VALUES ('786', '78', '吴江市');
INSERT INTO `dz_district` VALUES ('787', '78', '太仓市');
INSERT INTO `dz_district` VALUES ('788', '79', '崇川区');
INSERT INTO `dz_district` VALUES ('789', '79', '港闸区');
INSERT INTO `dz_district` VALUES ('790', '79', '海安县');
INSERT INTO `dz_district` VALUES ('791', '79', '如东县');
INSERT INTO `dz_district` VALUES ('792', '79', '启东市');
INSERT INTO `dz_district` VALUES ('793', '79', '如皋市');
INSERT INTO `dz_district` VALUES ('794', '79', '通州市');
INSERT INTO `dz_district` VALUES ('795', '79', '海门市');
INSERT INTO `dz_district` VALUES ('796', '80', '连云区');
INSERT INTO `dz_district` VALUES ('797', '80', '新浦区');
INSERT INTO `dz_district` VALUES ('798', '80', '海州区');
INSERT INTO `dz_district` VALUES ('799', '80', '赣榆县');
INSERT INTO `dz_district` VALUES ('800', '80', '东海县');
INSERT INTO `dz_district` VALUES ('801', '80', '灌云县');
INSERT INTO `dz_district` VALUES ('802', '80', '灌南县');
INSERT INTO `dz_district` VALUES ('803', '81', '清河区');
INSERT INTO `dz_district` VALUES ('804', '81', '楚州区');
INSERT INTO `dz_district` VALUES ('805', '81', '淮阴区');
INSERT INTO `dz_district` VALUES ('806', '81', '清浦区');
INSERT INTO `dz_district` VALUES ('807', '81', '涟水县');
INSERT INTO `dz_district` VALUES ('808', '81', '洪泽县');
INSERT INTO `dz_district` VALUES ('809', '81', '盱眙县');
INSERT INTO `dz_district` VALUES ('810', '81', '金湖县');
INSERT INTO `dz_district` VALUES ('811', '82', '亭湖区');
INSERT INTO `dz_district` VALUES ('812', '82', '盐都区');
INSERT INTO `dz_district` VALUES ('813', '82', '响水县');
INSERT INTO `dz_district` VALUES ('814', '82', '滨海县');
INSERT INTO `dz_district` VALUES ('815', '82', '阜宁县');
INSERT INTO `dz_district` VALUES ('816', '82', '射阳县');
INSERT INTO `dz_district` VALUES ('817', '82', '建湖县');
INSERT INTO `dz_district` VALUES ('818', '82', '东台市');
INSERT INTO `dz_district` VALUES ('819', '82', '大丰市');
INSERT INTO `dz_district` VALUES ('820', '83', '广陵区');
INSERT INTO `dz_district` VALUES ('821', '83', '邗江区');
INSERT INTO `dz_district` VALUES ('822', '83', '维扬区');
INSERT INTO `dz_district` VALUES ('823', '83', '宝应县');
INSERT INTO `dz_district` VALUES ('824', '83', '仪征市');
INSERT INTO `dz_district` VALUES ('825', '83', '高邮市');
INSERT INTO `dz_district` VALUES ('826', '83', '江都市');
INSERT INTO `dz_district` VALUES ('827', '84', '京口区');
INSERT INTO `dz_district` VALUES ('828', '84', '润州区');
INSERT INTO `dz_district` VALUES ('829', '84', '丹徒区');
INSERT INTO `dz_district` VALUES ('830', '84', '丹阳市');
INSERT INTO `dz_district` VALUES ('831', '84', '扬中市');
INSERT INTO `dz_district` VALUES ('832', '84', '句容市');
INSERT INTO `dz_district` VALUES ('833', '85', '海陵区');
INSERT INTO `dz_district` VALUES ('834', '85', '高港区');
INSERT INTO `dz_district` VALUES ('835', '85', '兴化市');
INSERT INTO `dz_district` VALUES ('836', '85', '靖江市');
INSERT INTO `dz_district` VALUES ('837', '85', '泰兴市');
INSERT INTO `dz_district` VALUES ('838', '85', '姜堰市');
INSERT INTO `dz_district` VALUES ('839', '86', '宿城区');
INSERT INTO `dz_district` VALUES ('840', '86', '宿豫区');
INSERT INTO `dz_district` VALUES ('841', '86', '沭阳县');
INSERT INTO `dz_district` VALUES ('842', '86', '泗阳县');
INSERT INTO `dz_district` VALUES ('843', '86', '泗洪县');
INSERT INTO `dz_district` VALUES ('844', '87', '上城区');
INSERT INTO `dz_district` VALUES ('845', '87', '下城区');
INSERT INTO `dz_district` VALUES ('846', '87', '江干区');
INSERT INTO `dz_district` VALUES ('847', '87', '拱墅区');
INSERT INTO `dz_district` VALUES ('848', '87', '西湖区');
INSERT INTO `dz_district` VALUES ('849', '87', '滨江区');
INSERT INTO `dz_district` VALUES ('850', '87', '萧山区');
INSERT INTO `dz_district` VALUES ('851', '87', '余杭区');
INSERT INTO `dz_district` VALUES ('852', '87', '桐庐县');
INSERT INTO `dz_district` VALUES ('853', '87', '淳安县');
INSERT INTO `dz_district` VALUES ('854', '87', '建德市');
INSERT INTO `dz_district` VALUES ('855', '87', '富阳市');
INSERT INTO `dz_district` VALUES ('856', '87', '临安市');
INSERT INTO `dz_district` VALUES ('857', '88', '海曙区');
INSERT INTO `dz_district` VALUES ('858', '88', '江东区');
INSERT INTO `dz_district` VALUES ('859', '88', '江北区');
INSERT INTO `dz_district` VALUES ('860', '88', '北仑区');
INSERT INTO `dz_district` VALUES ('861', '88', '镇海区');
INSERT INTO `dz_district` VALUES ('862', '88', '鄞州区');
INSERT INTO `dz_district` VALUES ('863', '88', '象山县');
INSERT INTO `dz_district` VALUES ('864', '88', '宁海县');
INSERT INTO `dz_district` VALUES ('865', '88', '余姚市');
INSERT INTO `dz_district` VALUES ('866', '88', '慈溪市');
INSERT INTO `dz_district` VALUES ('867', '88', '奉化市');
INSERT INTO `dz_district` VALUES ('868', '89', '鹿城区');
INSERT INTO `dz_district` VALUES ('869', '89', '龙湾区');
INSERT INTO `dz_district` VALUES ('870', '89', '瓯海区');
INSERT INTO `dz_district` VALUES ('871', '89', '洞头县');
INSERT INTO `dz_district` VALUES ('872', '89', '永嘉县');
INSERT INTO `dz_district` VALUES ('873', '89', '平阳县');
INSERT INTO `dz_district` VALUES ('874', '89', '苍南县');
INSERT INTO `dz_district` VALUES ('875', '89', '文成县');
INSERT INTO `dz_district` VALUES ('876', '89', '泰顺县');
INSERT INTO `dz_district` VALUES ('877', '89', '瑞安市');
INSERT INTO `dz_district` VALUES ('878', '89', '乐清市');
INSERT INTO `dz_district` VALUES ('879', '90', '秀城区');
INSERT INTO `dz_district` VALUES ('880', '90', '秀洲区');
INSERT INTO `dz_district` VALUES ('881', '90', '嘉善县');
INSERT INTO `dz_district` VALUES ('882', '90', '海盐县');
INSERT INTO `dz_district` VALUES ('883', '90', '海宁市');
INSERT INTO `dz_district` VALUES ('884', '90', '平湖市');
INSERT INTO `dz_district` VALUES ('885', '90', '桐乡市');
INSERT INTO `dz_district` VALUES ('886', '91', '吴兴区');
INSERT INTO `dz_district` VALUES ('887', '91', '南浔区');
INSERT INTO `dz_district` VALUES ('888', '91', '德清县');
INSERT INTO `dz_district` VALUES ('889', '91', '长兴县');
INSERT INTO `dz_district` VALUES ('890', '91', '安吉县');
INSERT INTO `dz_district` VALUES ('891', '92', '越城区');
INSERT INTO `dz_district` VALUES ('892', '92', '绍兴县');
INSERT INTO `dz_district` VALUES ('893', '92', '新昌县');
INSERT INTO `dz_district` VALUES ('894', '92', '诸暨市');
INSERT INTO `dz_district` VALUES ('895', '92', '上虞市');
INSERT INTO `dz_district` VALUES ('896', '92', '嵊州市');
INSERT INTO `dz_district` VALUES ('897', '93', '婺城区');
INSERT INTO `dz_district` VALUES ('898', '93', '金东区');
INSERT INTO `dz_district` VALUES ('899', '93', '武义县');
INSERT INTO `dz_district` VALUES ('900', '93', '浦江县');
INSERT INTO `dz_district` VALUES ('901', '93', '磐安县');
INSERT INTO `dz_district` VALUES ('902', '93', '兰溪市');
INSERT INTO `dz_district` VALUES ('903', '93', '义乌市');
INSERT INTO `dz_district` VALUES ('904', '93', '东阳市');
INSERT INTO `dz_district` VALUES ('905', '93', '永康市');
INSERT INTO `dz_district` VALUES ('906', '94', '柯城区');
INSERT INTO `dz_district` VALUES ('907', '94', '衢江区');
INSERT INTO `dz_district` VALUES ('908', '94', '常山县');
INSERT INTO `dz_district` VALUES ('909', '94', '开化县');
INSERT INTO `dz_district` VALUES ('910', '94', '龙游县');
INSERT INTO `dz_district` VALUES ('911', '94', '江山市');
INSERT INTO `dz_district` VALUES ('912', '95', '定海区');
INSERT INTO `dz_district` VALUES ('913', '95', '普陀区');
INSERT INTO `dz_district` VALUES ('914', '95', '岱山县');
INSERT INTO `dz_district` VALUES ('915', '95', '嵊泗县');
INSERT INTO `dz_district` VALUES ('916', '96', '椒江区');
INSERT INTO `dz_district` VALUES ('917', '96', '黄岩区');
INSERT INTO `dz_district` VALUES ('918', '96', '路桥区');
INSERT INTO `dz_district` VALUES ('919', '96', '玉环县');
INSERT INTO `dz_district` VALUES ('920', '96', '三门县');
INSERT INTO `dz_district` VALUES ('921', '96', '天台县');
INSERT INTO `dz_district` VALUES ('922', '96', '仙居县');
INSERT INTO `dz_district` VALUES ('923', '96', '温岭市');
INSERT INTO `dz_district` VALUES ('924', '96', '临海市');
INSERT INTO `dz_district` VALUES ('925', '97', '莲都区');
INSERT INTO `dz_district` VALUES ('926', '97', '青田县');
INSERT INTO `dz_district` VALUES ('927', '97', '缙云县');
INSERT INTO `dz_district` VALUES ('928', '97', '遂昌县');
INSERT INTO `dz_district` VALUES ('929', '97', '松阳县');
INSERT INTO `dz_district` VALUES ('930', '97', '云和县');
INSERT INTO `dz_district` VALUES ('931', '97', '庆元县');
INSERT INTO `dz_district` VALUES ('932', '97', '景宁畲族自治县');
INSERT INTO `dz_district` VALUES ('933', '97', '龙泉市');
INSERT INTO `dz_district` VALUES ('934', '98', '瑶海区');
INSERT INTO `dz_district` VALUES ('935', '98', '庐阳区');
INSERT INTO `dz_district` VALUES ('936', '98', '蜀山区');
INSERT INTO `dz_district` VALUES ('937', '98', '包河区');
INSERT INTO `dz_district` VALUES ('938', '98', '长丰县');
INSERT INTO `dz_district` VALUES ('939', '98', '肥东县');
INSERT INTO `dz_district` VALUES ('940', '98', '肥西县');
INSERT INTO `dz_district` VALUES ('941', '99', '镜湖区');
INSERT INTO `dz_district` VALUES ('942', '99', '马塘区');
INSERT INTO `dz_district` VALUES ('943', '99', '新芜区');
INSERT INTO `dz_district` VALUES ('944', '99', '鸠江区');
INSERT INTO `dz_district` VALUES ('945', '99', '芜湖县');
INSERT INTO `dz_district` VALUES ('946', '99', '繁昌县');
INSERT INTO `dz_district` VALUES ('947', '99', '南陵县');
INSERT INTO `dz_district` VALUES ('948', '100', '龙子湖区');
INSERT INTO `dz_district` VALUES ('949', '100', '蚌山区');
INSERT INTO `dz_district` VALUES ('950', '100', '禹会区');
INSERT INTO `dz_district` VALUES ('951', '100', '淮上区');
INSERT INTO `dz_district` VALUES ('952', '100', '怀远县');
INSERT INTO `dz_district` VALUES ('953', '100', '五河县');
INSERT INTO `dz_district` VALUES ('954', '100', '固镇县');
INSERT INTO `dz_district` VALUES ('955', '101', '大通区');
INSERT INTO `dz_district` VALUES ('956', '101', '田家庵区');
INSERT INTO `dz_district` VALUES ('957', '101', '谢家集区');
INSERT INTO `dz_district` VALUES ('958', '101', '八公山区');
INSERT INTO `dz_district` VALUES ('959', '101', '潘集区');
INSERT INTO `dz_district` VALUES ('960', '101', '凤台县');
INSERT INTO `dz_district` VALUES ('961', '102', '金家庄区');
INSERT INTO `dz_district` VALUES ('962', '102', '花山区');
INSERT INTO `dz_district` VALUES ('963', '102', '雨山区');
INSERT INTO `dz_district` VALUES ('964', '102', '当涂县');
INSERT INTO `dz_district` VALUES ('965', '103', '杜集区');
INSERT INTO `dz_district` VALUES ('966', '103', '相山区');
INSERT INTO `dz_district` VALUES ('967', '103', '烈山区');
INSERT INTO `dz_district` VALUES ('968', '103', '濉溪县');
INSERT INTO `dz_district` VALUES ('969', '104', '铜官山区');
INSERT INTO `dz_district` VALUES ('970', '104', '狮子山区');
INSERT INTO `dz_district` VALUES ('971', '104', '郊区');
INSERT INTO `dz_district` VALUES ('972', '104', '铜陵县');
INSERT INTO `dz_district` VALUES ('973', '105', '迎江区');
INSERT INTO `dz_district` VALUES ('974', '105', '大观区');
INSERT INTO `dz_district` VALUES ('975', '105', '郊区');
INSERT INTO `dz_district` VALUES ('976', '105', '怀宁县');
INSERT INTO `dz_district` VALUES ('977', '105', '枞阳县');
INSERT INTO `dz_district` VALUES ('978', '105', '潜山县');
INSERT INTO `dz_district` VALUES ('979', '105', '太湖县');
INSERT INTO `dz_district` VALUES ('980', '105', '宿松县');
INSERT INTO `dz_district` VALUES ('981', '105', '望江县');
INSERT INTO `dz_district` VALUES ('982', '105', '岳西县');
INSERT INTO `dz_district` VALUES ('983', '105', '桐城市');
INSERT INTO `dz_district` VALUES ('984', '106', '屯溪区');
INSERT INTO `dz_district` VALUES ('985', '106', '黄山区');
INSERT INTO `dz_district` VALUES ('986', '106', '徽州区');
INSERT INTO `dz_district` VALUES ('987', '106', '歙县');
INSERT INTO `dz_district` VALUES ('988', '106', '休宁县');
INSERT INTO `dz_district` VALUES ('989', '106', '黟县');
INSERT INTO `dz_district` VALUES ('990', '106', '祁门县');
INSERT INTO `dz_district` VALUES ('991', '107', '琅琊区');
INSERT INTO `dz_district` VALUES ('992', '107', '南谯区');
INSERT INTO `dz_district` VALUES ('993', '107', '来安县');
INSERT INTO `dz_district` VALUES ('994', '107', '全椒县');
INSERT INTO `dz_district` VALUES ('995', '107', '定远县');
INSERT INTO `dz_district` VALUES ('996', '107', '凤阳县');
INSERT INTO `dz_district` VALUES ('997', '107', '天长市');
INSERT INTO `dz_district` VALUES ('998', '107', '明光市');
INSERT INTO `dz_district` VALUES ('999', '108', '颍州区');
INSERT INTO `dz_district` VALUES ('1000', '108', '颍东区');
INSERT INTO `dz_district` VALUES ('1001', '108', '颍泉区');
INSERT INTO `dz_district` VALUES ('1002', '108', '临泉县');
INSERT INTO `dz_district` VALUES ('1003', '108', '太和县');
INSERT INTO `dz_district` VALUES ('1004', '108', '阜南县');
INSERT INTO `dz_district` VALUES ('1005', '108', '颍上县');
INSERT INTO `dz_district` VALUES ('1006', '108', '界首市');
INSERT INTO `dz_district` VALUES ('1007', '109', '埇桥区');
INSERT INTO `dz_district` VALUES ('1008', '109', '砀山县');
INSERT INTO `dz_district` VALUES ('1009', '109', '萧县');
INSERT INTO `dz_district` VALUES ('1010', '109', '灵璧县');
INSERT INTO `dz_district` VALUES ('1011', '109', '泗县');
INSERT INTO `dz_district` VALUES ('1012', '110', '居巢区');
INSERT INTO `dz_district` VALUES ('1013', '110', '庐江县');
INSERT INTO `dz_district` VALUES ('1014', '110', '无为县');
INSERT INTO `dz_district` VALUES ('1015', '110', '含山县');
INSERT INTO `dz_district` VALUES ('1016', '110', '和县');
INSERT INTO `dz_district` VALUES ('1017', '111', '金安区');
INSERT INTO `dz_district` VALUES ('1018', '111', '裕安区');
INSERT INTO `dz_district` VALUES ('1019', '111', '寿县');
INSERT INTO `dz_district` VALUES ('1020', '111', '霍邱县');
INSERT INTO `dz_district` VALUES ('1021', '111', '舒城县');
INSERT INTO `dz_district` VALUES ('1022', '111', '金寨县');
INSERT INTO `dz_district` VALUES ('1023', '111', '霍山县');
INSERT INTO `dz_district` VALUES ('1024', '112', '谯城区');
INSERT INTO `dz_district` VALUES ('1025', '112', '涡阳县');
INSERT INTO `dz_district` VALUES ('1026', '112', '蒙城县');
INSERT INTO `dz_district` VALUES ('1027', '112', '利辛县');
INSERT INTO `dz_district` VALUES ('1028', '113', '贵池区');
INSERT INTO `dz_district` VALUES ('1029', '113', '东至县');
INSERT INTO `dz_district` VALUES ('1030', '113', '石台县');
INSERT INTO `dz_district` VALUES ('1031', '113', '青阳县');
INSERT INTO `dz_district` VALUES ('1032', '114', '宣州区');
INSERT INTO `dz_district` VALUES ('1033', '114', '郎溪县');
INSERT INTO `dz_district` VALUES ('1034', '114', '广德县');
INSERT INTO `dz_district` VALUES ('1035', '114', '泾县');
INSERT INTO `dz_district` VALUES ('1036', '114', '绩溪县');
INSERT INTO `dz_district` VALUES ('1037', '114', '旌德县');
INSERT INTO `dz_district` VALUES ('1038', '114', '宁国市');
INSERT INTO `dz_district` VALUES ('1039', '115', '鼓楼区');
INSERT INTO `dz_district` VALUES ('1040', '115', '台江区');
INSERT INTO `dz_district` VALUES ('1041', '115', '仓山区');
INSERT INTO `dz_district` VALUES ('1042', '115', '马尾区');
INSERT INTO `dz_district` VALUES ('1043', '115', '晋安区');
INSERT INTO `dz_district` VALUES ('1044', '115', '闽侯县');
INSERT INTO `dz_district` VALUES ('1045', '115', '连江县');
INSERT INTO `dz_district` VALUES ('1046', '115', '罗源县');
INSERT INTO `dz_district` VALUES ('1047', '115', '闽清县');
INSERT INTO `dz_district` VALUES ('1048', '115', '永泰县');
INSERT INTO `dz_district` VALUES ('1049', '115', '平潭县');
INSERT INTO `dz_district` VALUES ('1050', '115', '福清市');
INSERT INTO `dz_district` VALUES ('1051', '115', '长乐市');
INSERT INTO `dz_district` VALUES ('1052', '116', '思明区');
INSERT INTO `dz_district` VALUES ('1053', '116', '海沧区');
INSERT INTO `dz_district` VALUES ('1054', '116', '湖里区');
INSERT INTO `dz_district` VALUES ('1055', '116', '集美区');
INSERT INTO `dz_district` VALUES ('1056', '116', '同安区');
INSERT INTO `dz_district` VALUES ('1057', '116', '翔安区');
INSERT INTO `dz_district` VALUES ('1058', '117', '城厢区');
INSERT INTO `dz_district` VALUES ('1059', '117', '涵江区');
INSERT INTO `dz_district` VALUES ('1060', '117', '荔城区');
INSERT INTO `dz_district` VALUES ('1061', '117', '秀屿区');
INSERT INTO `dz_district` VALUES ('1062', '117', '仙游县');
INSERT INTO `dz_district` VALUES ('1063', '118', '梅列区');
INSERT INTO `dz_district` VALUES ('1064', '118', '三元区');
INSERT INTO `dz_district` VALUES ('1065', '118', '明溪县');
INSERT INTO `dz_district` VALUES ('1066', '118', '清流县');
INSERT INTO `dz_district` VALUES ('1067', '118', '宁化县');
INSERT INTO `dz_district` VALUES ('1068', '118', '大田县');
INSERT INTO `dz_district` VALUES ('1069', '118', '尤溪县');
INSERT INTO `dz_district` VALUES ('1070', '118', '沙县');
INSERT INTO `dz_district` VALUES ('1071', '118', '将乐县');
INSERT INTO `dz_district` VALUES ('1072', '118', '泰宁县');
INSERT INTO `dz_district` VALUES ('1073', '118', '建宁县');
INSERT INTO `dz_district` VALUES ('1074', '118', '永安市');
INSERT INTO `dz_district` VALUES ('1075', '119', '鲤城区');
INSERT INTO `dz_district` VALUES ('1076', '119', '丰泽区');
INSERT INTO `dz_district` VALUES ('1077', '119', '洛江区');
INSERT INTO `dz_district` VALUES ('1078', '119', '泉港区');
INSERT INTO `dz_district` VALUES ('1079', '119', '惠安县');
INSERT INTO `dz_district` VALUES ('1080', '119', '安溪县');
INSERT INTO `dz_district` VALUES ('1081', '119', '永春县');
INSERT INTO `dz_district` VALUES ('1082', '119', '德化县');
INSERT INTO `dz_district` VALUES ('1083', '119', '金门县');
INSERT INTO `dz_district` VALUES ('1084', '119', '石狮市');
INSERT INTO `dz_district` VALUES ('1085', '119', '晋江市');
INSERT INTO `dz_district` VALUES ('1086', '119', '南安市');
INSERT INTO `dz_district` VALUES ('1087', '120', '芗城区');
INSERT INTO `dz_district` VALUES ('1088', '120', '龙文区');
INSERT INTO `dz_district` VALUES ('1089', '120', '云霄县');
INSERT INTO `dz_district` VALUES ('1090', '120', '漳浦县');
INSERT INTO `dz_district` VALUES ('1091', '120', '诏安县');
INSERT INTO `dz_district` VALUES ('1092', '120', '长泰县');
INSERT INTO `dz_district` VALUES ('1093', '120', '东山县');
INSERT INTO `dz_district` VALUES ('1094', '120', '南靖县');
INSERT INTO `dz_district` VALUES ('1095', '120', '平和县');
INSERT INTO `dz_district` VALUES ('1096', '120', '华安县');
INSERT INTO `dz_district` VALUES ('1097', '120', '龙海市');
INSERT INTO `dz_district` VALUES ('1098', '121', '延平区');
INSERT INTO `dz_district` VALUES ('1099', '121', '顺昌县');
INSERT INTO `dz_district` VALUES ('1100', '121', '浦城县');
INSERT INTO `dz_district` VALUES ('1101', '121', '光泽县');
INSERT INTO `dz_district` VALUES ('1102', '121', '松溪县');
INSERT INTO `dz_district` VALUES ('1103', '121', '政和县');
INSERT INTO `dz_district` VALUES ('1104', '121', '邵武市');
INSERT INTO `dz_district` VALUES ('1105', '121', '武夷山市');
INSERT INTO `dz_district` VALUES ('1106', '121', '建瓯市');
INSERT INTO `dz_district` VALUES ('1107', '121', '建阳市');
INSERT INTO `dz_district` VALUES ('1108', '122', '新罗区');
INSERT INTO `dz_district` VALUES ('1109', '122', '长汀县');
INSERT INTO `dz_district` VALUES ('1110', '122', '永定县');
INSERT INTO `dz_district` VALUES ('1111', '122', '上杭县');
INSERT INTO `dz_district` VALUES ('1112', '122', '武平县');
INSERT INTO `dz_district` VALUES ('1113', '122', '连城县');
INSERT INTO `dz_district` VALUES ('1114', '122', '漳平市');
INSERT INTO `dz_district` VALUES ('1115', '123', '蕉城区');
INSERT INTO `dz_district` VALUES ('1116', '123', '霞浦县');
INSERT INTO `dz_district` VALUES ('1117', '123', '古田县');
INSERT INTO `dz_district` VALUES ('1118', '123', '屏南县');
INSERT INTO `dz_district` VALUES ('1119', '123', '寿宁县');
INSERT INTO `dz_district` VALUES ('1120', '123', '周宁县');
INSERT INTO `dz_district` VALUES ('1121', '123', '柘荣县');
INSERT INTO `dz_district` VALUES ('1122', '123', '福安市');
INSERT INTO `dz_district` VALUES ('1123', '123', '福鼎市');
INSERT INTO `dz_district` VALUES ('1124', '124', '东湖区');
INSERT INTO `dz_district` VALUES ('1125', '124', '西湖区');
INSERT INTO `dz_district` VALUES ('1126', '124', '青云谱区');
INSERT INTO `dz_district` VALUES ('1127', '124', '湾里区');
INSERT INTO `dz_district` VALUES ('1128', '124', '青山湖区');
INSERT INTO `dz_district` VALUES ('1129', '124', '南昌县');
INSERT INTO `dz_district` VALUES ('1130', '124', '新建县');
INSERT INTO `dz_district` VALUES ('1131', '124', '安义县');
INSERT INTO `dz_district` VALUES ('1132', '124', '进贤县');
INSERT INTO `dz_district` VALUES ('1133', '125', '昌江区');
INSERT INTO `dz_district` VALUES ('1134', '125', '珠山区');
INSERT INTO `dz_district` VALUES ('1135', '125', '浮梁县');
INSERT INTO `dz_district` VALUES ('1136', '125', '乐平市');
INSERT INTO `dz_district` VALUES ('1137', '126', '安源区');
INSERT INTO `dz_district` VALUES ('1138', '126', '湘东区');
INSERT INTO `dz_district` VALUES ('1139', '126', '莲花县');
INSERT INTO `dz_district` VALUES ('1140', '126', '上栗县');
INSERT INTO `dz_district` VALUES ('1141', '126', '芦溪县');
INSERT INTO `dz_district` VALUES ('1142', '127', '庐山区');
INSERT INTO `dz_district` VALUES ('1143', '127', '浔阳区');
INSERT INTO `dz_district` VALUES ('1144', '127', '九江县');
INSERT INTO `dz_district` VALUES ('1145', '127', '武宁县');
INSERT INTO `dz_district` VALUES ('1146', '127', '修水县');
INSERT INTO `dz_district` VALUES ('1147', '127', '永修县');
INSERT INTO `dz_district` VALUES ('1148', '127', '德安县');
INSERT INTO `dz_district` VALUES ('1149', '127', '星子县');
INSERT INTO `dz_district` VALUES ('1150', '127', '都昌县');
INSERT INTO `dz_district` VALUES ('1151', '127', '湖口县');
INSERT INTO `dz_district` VALUES ('1152', '127', '彭泽县');
INSERT INTO `dz_district` VALUES ('1153', '127', '瑞昌市');
INSERT INTO `dz_district` VALUES ('1154', '128', '渝水区');
INSERT INTO `dz_district` VALUES ('1155', '128', '分宜县');
INSERT INTO `dz_district` VALUES ('1156', '129', '月湖区');
INSERT INTO `dz_district` VALUES ('1157', '129', '余江县');
INSERT INTO `dz_district` VALUES ('1158', '129', '贵溪市');
INSERT INTO `dz_district` VALUES ('1159', '130', '章贡区');
INSERT INTO `dz_district` VALUES ('1160', '130', '赣县');
INSERT INTO `dz_district` VALUES ('1161', '130', '信丰县');
INSERT INTO `dz_district` VALUES ('1162', '130', '大余县');
INSERT INTO `dz_district` VALUES ('1163', '130', '上犹县');
INSERT INTO `dz_district` VALUES ('1164', '130', '崇义县');
INSERT INTO `dz_district` VALUES ('1165', '130', '安远县');
INSERT INTO `dz_district` VALUES ('1166', '130', '龙南县');
INSERT INTO `dz_district` VALUES ('1167', '130', '定南县');
INSERT INTO `dz_district` VALUES ('1168', '130', '全南县');
INSERT INTO `dz_district` VALUES ('1169', '130', '宁都县');
INSERT INTO `dz_district` VALUES ('1170', '130', '于都县');
INSERT INTO `dz_district` VALUES ('1171', '130', '兴国县');
INSERT INTO `dz_district` VALUES ('1172', '130', '会昌县');
INSERT INTO `dz_district` VALUES ('1173', '130', '寻乌县');
INSERT INTO `dz_district` VALUES ('1174', '130', '石城县');
INSERT INTO `dz_district` VALUES ('1175', '130', '瑞金市');
INSERT INTO `dz_district` VALUES ('1176', '130', '南康市');
INSERT INTO `dz_district` VALUES ('1177', '131', '吉州区');
INSERT INTO `dz_district` VALUES ('1178', '131', '青原区');
INSERT INTO `dz_district` VALUES ('1179', '131', '吉安县');
INSERT INTO `dz_district` VALUES ('1180', '131', '吉水县');
INSERT INTO `dz_district` VALUES ('1181', '131', '峡江县');
INSERT INTO `dz_district` VALUES ('1182', '131', '新干县');
INSERT INTO `dz_district` VALUES ('1183', '131', '永丰县');
INSERT INTO `dz_district` VALUES ('1184', '131', '泰和县');
INSERT INTO `dz_district` VALUES ('1185', '131', '遂川县');
INSERT INTO `dz_district` VALUES ('1186', '131', '万安县');
INSERT INTO `dz_district` VALUES ('1187', '131', '安福县');
INSERT INTO `dz_district` VALUES ('1188', '131', '永新县');
INSERT INTO `dz_district` VALUES ('1189', '131', '井冈山市');
INSERT INTO `dz_district` VALUES ('1190', '132', '袁州区');
INSERT INTO `dz_district` VALUES ('1191', '132', '奉新县');
INSERT INTO `dz_district` VALUES ('1192', '132', '万载县');
INSERT INTO `dz_district` VALUES ('1193', '132', '上高县');
INSERT INTO `dz_district` VALUES ('1194', '132', '宜丰县');
INSERT INTO `dz_district` VALUES ('1195', '132', '靖安县');
INSERT INTO `dz_district` VALUES ('1196', '132', '铜鼓县');
INSERT INTO `dz_district` VALUES ('1197', '132', '丰城市');
INSERT INTO `dz_district` VALUES ('1198', '132', '樟树市');
INSERT INTO `dz_district` VALUES ('1199', '132', '高安市');
INSERT INTO `dz_district` VALUES ('1200', '133', '临川区');
INSERT INTO `dz_district` VALUES ('1201', '133', '南城县');
INSERT INTO `dz_district` VALUES ('1202', '133', '黎川县');
INSERT INTO `dz_district` VALUES ('1203', '133', '南丰县');
INSERT INTO `dz_district` VALUES ('1204', '133', '崇仁县');
INSERT INTO `dz_district` VALUES ('1205', '133', '乐安县');
INSERT INTO `dz_district` VALUES ('1206', '133', '宜黄县');
INSERT INTO `dz_district` VALUES ('1207', '133', '金溪县');
INSERT INTO `dz_district` VALUES ('1208', '133', '资溪县');
INSERT INTO `dz_district` VALUES ('1209', '133', '东乡县');
INSERT INTO `dz_district` VALUES ('1210', '133', '广昌县');
INSERT INTO `dz_district` VALUES ('1211', '134', '信州区');
INSERT INTO `dz_district` VALUES ('1212', '134', '上饶县');
INSERT INTO `dz_district` VALUES ('1213', '134', '广丰县');
INSERT INTO `dz_district` VALUES ('1214', '134', '玉山县');
INSERT INTO `dz_district` VALUES ('1215', '134', '铅山县');
INSERT INTO `dz_district` VALUES ('1216', '134', '横峰县');
INSERT INTO `dz_district` VALUES ('1217', '134', '弋阳县');
INSERT INTO `dz_district` VALUES ('1218', '134', '余干县');
INSERT INTO `dz_district` VALUES ('1219', '134', '鄱阳县');
INSERT INTO `dz_district` VALUES ('1220', '134', '万年县');
INSERT INTO `dz_district` VALUES ('1221', '134', '婺源县');
INSERT INTO `dz_district` VALUES ('1222', '134', '德兴市');
INSERT INTO `dz_district` VALUES ('1223', '135', '历下区');
INSERT INTO `dz_district` VALUES ('1224', '135', '市中区');
INSERT INTO `dz_district` VALUES ('1225', '135', '槐荫区');
INSERT INTO `dz_district` VALUES ('1226', '135', '天桥区');
INSERT INTO `dz_district` VALUES ('1227', '135', '历城区');
INSERT INTO `dz_district` VALUES ('1228', '135', '长清区');
INSERT INTO `dz_district` VALUES ('1229', '135', '平阴县');
INSERT INTO `dz_district` VALUES ('1230', '135', '济阳县');
INSERT INTO `dz_district` VALUES ('1231', '135', '商河县');
INSERT INTO `dz_district` VALUES ('1232', '135', '章丘市');
INSERT INTO `dz_district` VALUES ('1233', '136', '市南区');
INSERT INTO `dz_district` VALUES ('1234', '136', '市北区');
INSERT INTO `dz_district` VALUES ('1235', '136', '四方区');
INSERT INTO `dz_district` VALUES ('1236', '136', '黄岛区');
INSERT INTO `dz_district` VALUES ('1237', '136', '崂山区');
INSERT INTO `dz_district` VALUES ('1238', '136', '李沧区');
INSERT INTO `dz_district` VALUES ('1239', '136', '城阳区');
INSERT INTO `dz_district` VALUES ('1240', '136', '胶州市');
INSERT INTO `dz_district` VALUES ('1241', '136', '即墨市');
INSERT INTO `dz_district` VALUES ('1242', '136', '平度市');
INSERT INTO `dz_district` VALUES ('1243', '136', '胶南市');
INSERT INTO `dz_district` VALUES ('1244', '136', '莱西市');
INSERT INTO `dz_district` VALUES ('1245', '137', '淄川区');
INSERT INTO `dz_district` VALUES ('1246', '137', '张店区');
INSERT INTO `dz_district` VALUES ('1247', '137', '博山区');
INSERT INTO `dz_district` VALUES ('1248', '137', '临淄区');
INSERT INTO `dz_district` VALUES ('1249', '137', '周村区');
INSERT INTO `dz_district` VALUES ('1250', '137', '桓台县');
INSERT INTO `dz_district` VALUES ('1251', '137', '高青县');
INSERT INTO `dz_district` VALUES ('1252', '137', '沂源县');
INSERT INTO `dz_district` VALUES ('1253', '138', '市中区');
INSERT INTO `dz_district` VALUES ('1254', '138', '薛城区');
INSERT INTO `dz_district` VALUES ('1255', '138', '峄城区');
INSERT INTO `dz_district` VALUES ('1256', '138', '台儿庄区');
INSERT INTO `dz_district` VALUES ('1257', '138', '山亭区');
INSERT INTO `dz_district` VALUES ('1258', '138', '滕州市');
INSERT INTO `dz_district` VALUES ('1259', '139', '东营区');
INSERT INTO `dz_district` VALUES ('1260', '139', '河口区');
INSERT INTO `dz_district` VALUES ('1261', '139', '垦利县');
INSERT INTO `dz_district` VALUES ('1262', '139', '利津县');
INSERT INTO `dz_district` VALUES ('1263', '139', '广饶县');
INSERT INTO `dz_district` VALUES ('1264', '140', '芝罘区');
INSERT INTO `dz_district` VALUES ('1265', '140', '福山区');
INSERT INTO `dz_district` VALUES ('1266', '140', '牟平区');
INSERT INTO `dz_district` VALUES ('1267', '140', '莱山区');
INSERT INTO `dz_district` VALUES ('1268', '140', '长岛县');
INSERT INTO `dz_district` VALUES ('1269', '140', '龙口市');
INSERT INTO `dz_district` VALUES ('1270', '140', '莱阳市');
INSERT INTO `dz_district` VALUES ('1271', '140', '莱州市');
INSERT INTO `dz_district` VALUES ('1272', '140', '蓬莱市');
INSERT INTO `dz_district` VALUES ('1273', '140', '招远市');
INSERT INTO `dz_district` VALUES ('1274', '140', '栖霞市');
INSERT INTO `dz_district` VALUES ('1275', '140', '海阳市');
INSERT INTO `dz_district` VALUES ('1276', '141', '潍城区');
INSERT INTO `dz_district` VALUES ('1277', '141', '寒亭区');
INSERT INTO `dz_district` VALUES ('1278', '141', '坊子区');
INSERT INTO `dz_district` VALUES ('1279', '141', '奎文区');
INSERT INTO `dz_district` VALUES ('1280', '141', '临朐县');
INSERT INTO `dz_district` VALUES ('1281', '141', '昌乐县');
INSERT INTO `dz_district` VALUES ('1282', '141', '青州市');
INSERT INTO `dz_district` VALUES ('1283', '141', '诸城市');
INSERT INTO `dz_district` VALUES ('1284', '141', '寿光市');
INSERT INTO `dz_district` VALUES ('1285', '141', '安丘市');
INSERT INTO `dz_district` VALUES ('1286', '141', '高密市');
INSERT INTO `dz_district` VALUES ('1287', '141', '昌邑市');
INSERT INTO `dz_district` VALUES ('1288', '142', '市中区');
INSERT INTO `dz_district` VALUES ('1289', '142', '任城区');
INSERT INTO `dz_district` VALUES ('1290', '142', '微山县');
INSERT INTO `dz_district` VALUES ('1291', '142', '鱼台县');
INSERT INTO `dz_district` VALUES ('1292', '142', '金乡县');
INSERT INTO `dz_district` VALUES ('1293', '142', '嘉祥县');
INSERT INTO `dz_district` VALUES ('1294', '142', '汶上县');
INSERT INTO `dz_district` VALUES ('1295', '142', '泗水县');
INSERT INTO `dz_district` VALUES ('1296', '142', '梁山县');
INSERT INTO `dz_district` VALUES ('1297', '142', '曲阜市');
INSERT INTO `dz_district` VALUES ('1298', '142', '兖州市');
INSERT INTO `dz_district` VALUES ('1299', '142', '邹城市');
INSERT INTO `dz_district` VALUES ('1300', '143', '泰山区');
INSERT INTO `dz_district` VALUES ('1301', '143', '岱岳区');
INSERT INTO `dz_district` VALUES ('1302', '143', '宁阳县');
INSERT INTO `dz_district` VALUES ('1303', '143', '东平县');
INSERT INTO `dz_district` VALUES ('1304', '143', '新泰市');
INSERT INTO `dz_district` VALUES ('1305', '143', '肥城市');
INSERT INTO `dz_district` VALUES ('1306', '144', '环翠区');
INSERT INTO `dz_district` VALUES ('1307', '144', '文登市');
INSERT INTO `dz_district` VALUES ('1308', '144', '荣成市');
INSERT INTO `dz_district` VALUES ('1309', '144', '乳山市');
INSERT INTO `dz_district` VALUES ('1310', '145', '东港区');
INSERT INTO `dz_district` VALUES ('1311', '145', '岚山区');
INSERT INTO `dz_district` VALUES ('1312', '145', '五莲县');
INSERT INTO `dz_district` VALUES ('1313', '145', '莒县');
INSERT INTO `dz_district` VALUES ('1314', '146', '莱城区');
INSERT INTO `dz_district` VALUES ('1315', '146', '钢城区');
INSERT INTO `dz_district` VALUES ('1316', '147', '兰山区');
INSERT INTO `dz_district` VALUES ('1317', '147', '罗庄区');
INSERT INTO `dz_district` VALUES ('1318', '147', '河东区');
INSERT INTO `dz_district` VALUES ('1319', '147', '沂南县');
INSERT INTO `dz_district` VALUES ('1320', '147', '郯城县');
INSERT INTO `dz_district` VALUES ('1321', '147', '沂水县');
INSERT INTO `dz_district` VALUES ('1322', '147', '苍山县');
INSERT INTO `dz_district` VALUES ('1323', '147', '费县');
INSERT INTO `dz_district` VALUES ('1324', '147', '平邑县');
INSERT INTO `dz_district` VALUES ('1325', '147', '莒南县');
INSERT INTO `dz_district` VALUES ('1326', '147', '蒙阴县');
INSERT INTO `dz_district` VALUES ('1327', '147', '临沭县');
INSERT INTO `dz_district` VALUES ('1328', '148', '德城区');
INSERT INTO `dz_district` VALUES ('1329', '148', '陵县');
INSERT INTO `dz_district` VALUES ('1330', '148', '宁津县');
INSERT INTO `dz_district` VALUES ('1331', '148', '庆云县');
INSERT INTO `dz_district` VALUES ('1332', '148', '临邑县');
INSERT INTO `dz_district` VALUES ('1333', '148', '齐河县');
INSERT INTO `dz_district` VALUES ('1334', '148', '平原县');
INSERT INTO `dz_district` VALUES ('1335', '148', '夏津县');
INSERT INTO `dz_district` VALUES ('1336', '148', '武城县');
INSERT INTO `dz_district` VALUES ('1337', '148', '乐陵市');
INSERT INTO `dz_district` VALUES ('1338', '148', '禹城市');
INSERT INTO `dz_district` VALUES ('1339', '149', '东昌府区');
INSERT INTO `dz_district` VALUES ('1340', '149', '阳谷县');
INSERT INTO `dz_district` VALUES ('1341', '149', '莘县');
INSERT INTO `dz_district` VALUES ('1342', '149', '茌平县');
INSERT INTO `dz_district` VALUES ('1343', '149', '东阿县');
INSERT INTO `dz_district` VALUES ('1344', '149', '冠县');
INSERT INTO `dz_district` VALUES ('1345', '149', '高唐县');
INSERT INTO `dz_district` VALUES ('1346', '149', '临清市');
INSERT INTO `dz_district` VALUES ('1347', '150', '滨城区');
INSERT INTO `dz_district` VALUES ('1348', '150', '惠民县');
INSERT INTO `dz_district` VALUES ('1349', '150', '阳信县');
INSERT INTO `dz_district` VALUES ('1350', '150', '无棣县');
INSERT INTO `dz_district` VALUES ('1351', '150', '沾化县');
INSERT INTO `dz_district` VALUES ('1352', '150', '博兴县');
INSERT INTO `dz_district` VALUES ('1353', '150', '邹平县');
INSERT INTO `dz_district` VALUES ('1354', '151', '牡丹区');
INSERT INTO `dz_district` VALUES ('1355', '151', '曹县');
INSERT INTO `dz_district` VALUES ('1356', '151', '单县');
INSERT INTO `dz_district` VALUES ('1357', '151', '成武县');
INSERT INTO `dz_district` VALUES ('1358', '151', '巨野县');
INSERT INTO `dz_district` VALUES ('1359', '151', '郓城县');
INSERT INTO `dz_district` VALUES ('1360', '151', '鄄城县');
INSERT INTO `dz_district` VALUES ('1361', '151', '定陶县');
INSERT INTO `dz_district` VALUES ('1362', '151', '东明县');
INSERT INTO `dz_district` VALUES ('1363', '152', '中原区');
INSERT INTO `dz_district` VALUES ('1364', '152', '二七区');
INSERT INTO `dz_district` VALUES ('1365', '152', '管城回族区');
INSERT INTO `dz_district` VALUES ('1366', '152', '金水区');
INSERT INTO `dz_district` VALUES ('1367', '152', '上街区');
INSERT INTO `dz_district` VALUES ('1368', '152', '惠济区');
INSERT INTO `dz_district` VALUES ('1369', '152', '中牟县');
INSERT INTO `dz_district` VALUES ('1370', '152', '巩义市');
INSERT INTO `dz_district` VALUES ('1371', '152', '荥阳市');
INSERT INTO `dz_district` VALUES ('1372', '152', '新密市');
INSERT INTO `dz_district` VALUES ('1373', '152', '新郑市');
INSERT INTO `dz_district` VALUES ('1374', '152', '登封市');
INSERT INTO `dz_district` VALUES ('1375', '153', '龙亭区');
INSERT INTO `dz_district` VALUES ('1376', '153', '顺河回族区');
INSERT INTO `dz_district` VALUES ('1377', '153', '鼓楼区');
INSERT INTO `dz_district` VALUES ('1378', '153', '南关区');
INSERT INTO `dz_district` VALUES ('1379', '153', '郊区');
INSERT INTO `dz_district` VALUES ('1380', '153', '杞县');
INSERT INTO `dz_district` VALUES ('1381', '153', '通许县');
INSERT INTO `dz_district` VALUES ('1382', '153', '尉氏县');
INSERT INTO `dz_district` VALUES ('1383', '153', '开封县');
INSERT INTO `dz_district` VALUES ('1384', '153', '兰考县');
INSERT INTO `dz_district` VALUES ('1385', '154', '老城区');
INSERT INTO `dz_district` VALUES ('1386', '154', '西工区');
INSERT INTO `dz_district` VALUES ('1387', '154', '廛河回族区');
INSERT INTO `dz_district` VALUES ('1388', '154', '涧西区');
INSERT INTO `dz_district` VALUES ('1389', '154', '吉利区');
INSERT INTO `dz_district` VALUES ('1390', '154', '洛龙区');
INSERT INTO `dz_district` VALUES ('1391', '154', '孟津县');
INSERT INTO `dz_district` VALUES ('1392', '154', '新安县');
INSERT INTO `dz_district` VALUES ('1393', '154', '栾川县');
INSERT INTO `dz_district` VALUES ('1394', '154', '嵩县');
INSERT INTO `dz_district` VALUES ('1395', '154', '汝阳县');
INSERT INTO `dz_district` VALUES ('1396', '154', '宜阳县');
INSERT INTO `dz_district` VALUES ('1397', '154', '洛宁县');
INSERT INTO `dz_district` VALUES ('1398', '154', '伊川县');
INSERT INTO `dz_district` VALUES ('1399', '154', '偃师市');
INSERT INTO `dz_district` VALUES ('1400', '155', '新华区');
INSERT INTO `dz_district` VALUES ('1401', '155', '卫东区');
INSERT INTO `dz_district` VALUES ('1402', '155', '石龙区');
INSERT INTO `dz_district` VALUES ('1403', '155', '湛河区');
INSERT INTO `dz_district` VALUES ('1404', '155', '宝丰县');
INSERT INTO `dz_district` VALUES ('1405', '155', '叶县');
INSERT INTO `dz_district` VALUES ('1406', '155', '鲁山县');
INSERT INTO `dz_district` VALUES ('1407', '155', '郏县');
INSERT INTO `dz_district` VALUES ('1408', '155', '舞钢市');
INSERT INTO `dz_district` VALUES ('1409', '155', '汝州市');
INSERT INTO `dz_district` VALUES ('1410', '156', '文峰区');
INSERT INTO `dz_district` VALUES ('1411', '156', '北关区');
INSERT INTO `dz_district` VALUES ('1412', '156', '殷都区');
INSERT INTO `dz_district` VALUES ('1413', '156', '龙安区');
INSERT INTO `dz_district` VALUES ('1414', '156', '安阳县');
INSERT INTO `dz_district` VALUES ('1415', '156', '汤阴县');
INSERT INTO `dz_district` VALUES ('1416', '156', '滑县');
INSERT INTO `dz_district` VALUES ('1417', '156', '内黄县');
INSERT INTO `dz_district` VALUES ('1418', '156', '林州市');
INSERT INTO `dz_district` VALUES ('1419', '157', '鹤山区');
INSERT INTO `dz_district` VALUES ('1420', '157', '山城区');
INSERT INTO `dz_district` VALUES ('1421', '157', '淇滨区');
INSERT INTO `dz_district` VALUES ('1422', '157', '浚县');
INSERT INTO `dz_district` VALUES ('1423', '157', '淇县');
INSERT INTO `dz_district` VALUES ('1424', '158', '红旗区');
INSERT INTO `dz_district` VALUES ('1425', '158', '卫滨区');
INSERT INTO `dz_district` VALUES ('1426', '158', '凤泉区');
INSERT INTO `dz_district` VALUES ('1427', '158', '牧野区');
INSERT INTO `dz_district` VALUES ('1428', '158', '新乡县');
INSERT INTO `dz_district` VALUES ('1429', '158', '获嘉县');
INSERT INTO `dz_district` VALUES ('1430', '158', '原阳县');
INSERT INTO `dz_district` VALUES ('1431', '158', '延津县');
INSERT INTO `dz_district` VALUES ('1432', '158', '封丘县');
INSERT INTO `dz_district` VALUES ('1433', '158', '长垣县');
INSERT INTO `dz_district` VALUES ('1434', '158', '卫辉市');
INSERT INTO `dz_district` VALUES ('1435', '158', '辉县市');
INSERT INTO `dz_district` VALUES ('1436', '159', '解放区');
INSERT INTO `dz_district` VALUES ('1437', '159', '中站区');
INSERT INTO `dz_district` VALUES ('1438', '159', '马村区');
INSERT INTO `dz_district` VALUES ('1439', '159', '山阳区');
INSERT INTO `dz_district` VALUES ('1440', '159', '修武县');
INSERT INTO `dz_district` VALUES ('1441', '159', '博爱县');
INSERT INTO `dz_district` VALUES ('1442', '159', '武陟县');
INSERT INTO `dz_district` VALUES ('1443', '159', '温县');
INSERT INTO `dz_district` VALUES ('1444', '159', '济源市');
INSERT INTO `dz_district` VALUES ('1445', '159', '沁阳市');
INSERT INTO `dz_district` VALUES ('1446', '159', '孟州市');
INSERT INTO `dz_district` VALUES ('1447', '160', '华龙区');
INSERT INTO `dz_district` VALUES ('1448', '160', '清丰县');
INSERT INTO `dz_district` VALUES ('1449', '160', '南乐县');
INSERT INTO `dz_district` VALUES ('1450', '160', '范县');
INSERT INTO `dz_district` VALUES ('1451', '160', '台前县');
INSERT INTO `dz_district` VALUES ('1452', '160', '濮阳县');
INSERT INTO `dz_district` VALUES ('1453', '161', '魏都区');
INSERT INTO `dz_district` VALUES ('1454', '161', '许昌县');
INSERT INTO `dz_district` VALUES ('1455', '161', '鄢陵县');
INSERT INTO `dz_district` VALUES ('1456', '161', '襄城县');
INSERT INTO `dz_district` VALUES ('1457', '161', '禹州市');
INSERT INTO `dz_district` VALUES ('1458', '161', '长葛市');
INSERT INTO `dz_district` VALUES ('1459', '162', '源汇区');
INSERT INTO `dz_district` VALUES ('1460', '162', '郾城区');
INSERT INTO `dz_district` VALUES ('1461', '162', '召陵区');
INSERT INTO `dz_district` VALUES ('1462', '162', '舞阳县');
INSERT INTO `dz_district` VALUES ('1463', '162', '临颍县');
INSERT INTO `dz_district` VALUES ('1464', '163', '市辖区');
INSERT INTO `dz_district` VALUES ('1465', '163', '湖滨区');
INSERT INTO `dz_district` VALUES ('1466', '163', '渑池县');
INSERT INTO `dz_district` VALUES ('1467', '163', '陕县');
INSERT INTO `dz_district` VALUES ('1468', '163', '卢氏县');
INSERT INTO `dz_district` VALUES ('1469', '163', '义马市');
INSERT INTO `dz_district` VALUES ('1470', '163', '灵宝市');
INSERT INTO `dz_district` VALUES ('1471', '164', '宛城区');
INSERT INTO `dz_district` VALUES ('1472', '164', '卧龙区');
INSERT INTO `dz_district` VALUES ('1473', '164', '南召县');
INSERT INTO `dz_district` VALUES ('1474', '164', '方城县');
INSERT INTO `dz_district` VALUES ('1475', '164', '西峡县');
INSERT INTO `dz_district` VALUES ('1476', '164', '镇平县');
INSERT INTO `dz_district` VALUES ('1477', '164', '内乡县');
INSERT INTO `dz_district` VALUES ('1478', '164', '淅川县');
INSERT INTO `dz_district` VALUES ('1479', '164', '社旗县');
INSERT INTO `dz_district` VALUES ('1480', '164', '唐河县');
INSERT INTO `dz_district` VALUES ('1481', '164', '新野县');
INSERT INTO `dz_district` VALUES ('1482', '164', '桐柏县');
INSERT INTO `dz_district` VALUES ('1483', '164', '邓州市');
INSERT INTO `dz_district` VALUES ('1484', '165', '梁园区');
INSERT INTO `dz_district` VALUES ('1485', '165', '睢阳区');
INSERT INTO `dz_district` VALUES ('1486', '165', '民权县');
INSERT INTO `dz_district` VALUES ('1487', '165', '睢县');
INSERT INTO `dz_district` VALUES ('1488', '165', '宁陵县');
INSERT INTO `dz_district` VALUES ('1489', '165', '柘城县');
INSERT INTO `dz_district` VALUES ('1490', '165', '虞城县');
INSERT INTO `dz_district` VALUES ('1491', '165', '夏邑县');
INSERT INTO `dz_district` VALUES ('1492', '165', '永城市');
INSERT INTO `dz_district` VALUES ('1493', '166', '浉河区');
INSERT INTO `dz_district` VALUES ('1494', '166', '平桥区');
INSERT INTO `dz_district` VALUES ('1495', '166', '罗山县');
INSERT INTO `dz_district` VALUES ('1496', '166', '光山县');
INSERT INTO `dz_district` VALUES ('1497', '166', '新县');
INSERT INTO `dz_district` VALUES ('1498', '166', '商城县');
INSERT INTO `dz_district` VALUES ('1499', '166', '固始县');
INSERT INTO `dz_district` VALUES ('1500', '166', '潢川县');
INSERT INTO `dz_district` VALUES ('1501', '166', '淮滨县');
INSERT INTO `dz_district` VALUES ('1502', '166', '息县');
INSERT INTO `dz_district` VALUES ('1503', '167', '川汇区');
INSERT INTO `dz_district` VALUES ('1504', '167', '扶沟县');
INSERT INTO `dz_district` VALUES ('1505', '167', '西华县');
INSERT INTO `dz_district` VALUES ('1506', '167', '商水县');
INSERT INTO `dz_district` VALUES ('1507', '167', '沈丘县');
INSERT INTO `dz_district` VALUES ('1508', '167', '郸城县');
INSERT INTO `dz_district` VALUES ('1509', '167', '淮阳县');
INSERT INTO `dz_district` VALUES ('1510', '167', '太康县');
INSERT INTO `dz_district` VALUES ('1511', '167', '鹿邑县');
INSERT INTO `dz_district` VALUES ('1512', '167', '项城市');
INSERT INTO `dz_district` VALUES ('1513', '168', '驿城区');
INSERT INTO `dz_district` VALUES ('1514', '168', '西平县');
INSERT INTO `dz_district` VALUES ('1515', '168', '上蔡县');
INSERT INTO `dz_district` VALUES ('1516', '168', '平舆县');
INSERT INTO `dz_district` VALUES ('1517', '168', '正阳县');
INSERT INTO `dz_district` VALUES ('1518', '168', '确山县');
INSERT INTO `dz_district` VALUES ('1519', '168', '泌阳县');
INSERT INTO `dz_district` VALUES ('1520', '168', '汝南县');
INSERT INTO `dz_district` VALUES ('1521', '168', '遂平县');
INSERT INTO `dz_district` VALUES ('1522', '168', '新蔡县');
INSERT INTO `dz_district` VALUES ('1523', '169', '江岸区');
INSERT INTO `dz_district` VALUES ('1524', '169', '江汉区');
INSERT INTO `dz_district` VALUES ('1525', '169', '硚口区');
INSERT INTO `dz_district` VALUES ('1526', '169', '汉阳区');
INSERT INTO `dz_district` VALUES ('1527', '169', '武昌区');
INSERT INTO `dz_district` VALUES ('1528', '169', '青山区');
INSERT INTO `dz_district` VALUES ('1529', '169', '洪山区');
INSERT INTO `dz_district` VALUES ('1530', '169', '东西湖区');
INSERT INTO `dz_district` VALUES ('1531', '169', '汉南区');
INSERT INTO `dz_district` VALUES ('1532', '169', '蔡甸区');
INSERT INTO `dz_district` VALUES ('1533', '169', '江夏区');
INSERT INTO `dz_district` VALUES ('1534', '169', '黄陂区');
INSERT INTO `dz_district` VALUES ('1535', '169', '新洲区');
INSERT INTO `dz_district` VALUES ('1536', '170', '黄石港区');
INSERT INTO `dz_district` VALUES ('1537', '170', '西塞山区');
INSERT INTO `dz_district` VALUES ('1538', '170', '下陆区');
INSERT INTO `dz_district` VALUES ('1539', '170', '铁山区');
INSERT INTO `dz_district` VALUES ('1540', '170', '阳新县');
INSERT INTO `dz_district` VALUES ('1541', '170', '大冶市');
INSERT INTO `dz_district` VALUES ('1542', '171', '茅箭区');
INSERT INTO `dz_district` VALUES ('1543', '171', '张湾区');
INSERT INTO `dz_district` VALUES ('1544', '171', '郧县');
INSERT INTO `dz_district` VALUES ('1545', '171', '郧西县');
INSERT INTO `dz_district` VALUES ('1546', '171', '竹山县');
INSERT INTO `dz_district` VALUES ('1547', '171', '竹溪县');
INSERT INTO `dz_district` VALUES ('1548', '171', '房县');
INSERT INTO `dz_district` VALUES ('1549', '171', '丹江口市');
INSERT INTO `dz_district` VALUES ('1550', '172', '西陵区');
INSERT INTO `dz_district` VALUES ('1551', '172', '伍家岗区');
INSERT INTO `dz_district` VALUES ('1552', '172', '点军区');
INSERT INTO `dz_district` VALUES ('1553', '172', '猇亭区');
INSERT INTO `dz_district` VALUES ('1554', '172', '夷陵区');
INSERT INTO `dz_district` VALUES ('1555', '172', '远安县');
INSERT INTO `dz_district` VALUES ('1556', '172', '兴山县');
INSERT INTO `dz_district` VALUES ('1557', '172', '秭归县');
INSERT INTO `dz_district` VALUES ('1558', '172', '长阳土家族自治县');
INSERT INTO `dz_district` VALUES ('1559', '172', '五峰土家族自治县');
INSERT INTO `dz_district` VALUES ('1560', '172', '宜都市');
INSERT INTO `dz_district` VALUES ('1561', '172', '当阳市');
INSERT INTO `dz_district` VALUES ('1562', '172', '枝江市');
INSERT INTO `dz_district` VALUES ('1563', '173', '襄城区');
INSERT INTO `dz_district` VALUES ('1564', '173', '樊城区');
INSERT INTO `dz_district` VALUES ('1565', '173', '襄阳区');
INSERT INTO `dz_district` VALUES ('1566', '173', '南漳县');
INSERT INTO `dz_district` VALUES ('1567', '173', '谷城县');
INSERT INTO `dz_district` VALUES ('1568', '173', '保康县');
INSERT INTO `dz_district` VALUES ('1569', '173', '老河口市');
INSERT INTO `dz_district` VALUES ('1570', '173', '枣阳市');
INSERT INTO `dz_district` VALUES ('1571', '173', '宜城市');
INSERT INTO `dz_district` VALUES ('1572', '174', '梁子湖区');
INSERT INTO `dz_district` VALUES ('1573', '174', '华容区');
INSERT INTO `dz_district` VALUES ('1574', '174', '鄂城区');
INSERT INTO `dz_district` VALUES ('1575', '175', '东宝区');
INSERT INTO `dz_district` VALUES ('1576', '175', '掇刀区');
INSERT INTO `dz_district` VALUES ('1577', '175', '京山县');
INSERT INTO `dz_district` VALUES ('1578', '175', '沙洋县');
INSERT INTO `dz_district` VALUES ('1579', '175', '钟祥市');
INSERT INTO `dz_district` VALUES ('1580', '176', '孝南区');
INSERT INTO `dz_district` VALUES ('1581', '176', '孝昌县');
INSERT INTO `dz_district` VALUES ('1582', '176', '大悟县');
INSERT INTO `dz_district` VALUES ('1583', '176', '云梦县');
INSERT INTO `dz_district` VALUES ('1584', '176', '应城市');
INSERT INTO `dz_district` VALUES ('1585', '176', '安陆市');
INSERT INTO `dz_district` VALUES ('1586', '176', '汉川市');
INSERT INTO `dz_district` VALUES ('1587', '177', '沙市区');
INSERT INTO `dz_district` VALUES ('1588', '177', '荆州区');
INSERT INTO `dz_district` VALUES ('1589', '177', '公安县');
INSERT INTO `dz_district` VALUES ('1590', '177', '监利县');
INSERT INTO `dz_district` VALUES ('1591', '177', '江陵县');
INSERT INTO `dz_district` VALUES ('1592', '177', '石首市');
INSERT INTO `dz_district` VALUES ('1593', '177', '洪湖市');
INSERT INTO `dz_district` VALUES ('1594', '177', '松滋市');
INSERT INTO `dz_district` VALUES ('1595', '178', '黄州区');
INSERT INTO `dz_district` VALUES ('1596', '178', '团风县');
INSERT INTO `dz_district` VALUES ('1597', '178', '红安县');
INSERT INTO `dz_district` VALUES ('1598', '178', '罗田县');
INSERT INTO `dz_district` VALUES ('1599', '178', '英山县');
INSERT INTO `dz_district` VALUES ('1600', '178', '浠水县');
INSERT INTO `dz_district` VALUES ('1601', '178', '蕲春县');
INSERT INTO `dz_district` VALUES ('1602', '178', '黄梅县');
INSERT INTO `dz_district` VALUES ('1603', '178', '麻城市');
INSERT INTO `dz_district` VALUES ('1604', '178', '武穴市');
INSERT INTO `dz_district` VALUES ('1605', '179', '咸安区');
INSERT INTO `dz_district` VALUES ('1606', '179', '嘉鱼县');
INSERT INTO `dz_district` VALUES ('1607', '179', '通城县');
INSERT INTO `dz_district` VALUES ('1608', '179', '崇阳县');
INSERT INTO `dz_district` VALUES ('1609', '179', '通山县');
INSERT INTO `dz_district` VALUES ('1610', '179', '赤壁市');
INSERT INTO `dz_district` VALUES ('1611', '180', '曾都区');
INSERT INTO `dz_district` VALUES ('1612', '180', '广水市');
INSERT INTO `dz_district` VALUES ('1613', '181', '恩施市');
INSERT INTO `dz_district` VALUES ('1614', '181', '利川市');
INSERT INTO `dz_district` VALUES ('1615', '181', '建始县');
INSERT INTO `dz_district` VALUES ('1616', '181', '巴东县');
INSERT INTO `dz_district` VALUES ('1617', '181', '宣恩县');
INSERT INTO `dz_district` VALUES ('1618', '181', '咸丰县');
INSERT INTO `dz_district` VALUES ('1619', '181', '来凤县');
INSERT INTO `dz_district` VALUES ('1620', '181', '鹤峰县');
INSERT INTO `dz_district` VALUES ('1621', '182', '仙桃市');
INSERT INTO `dz_district` VALUES ('1622', '182', '潜江市');
INSERT INTO `dz_district` VALUES ('1623', '182', '天门市');
INSERT INTO `dz_district` VALUES ('1624', '182', '神农架林区');
INSERT INTO `dz_district` VALUES ('1625', '183', '芙蓉区');
INSERT INTO `dz_district` VALUES ('1626', '183', '天心区');
INSERT INTO `dz_district` VALUES ('1627', '183', '岳麓区');
INSERT INTO `dz_district` VALUES ('1628', '183', '开福区');
INSERT INTO `dz_district` VALUES ('1629', '183', '雨花区');
INSERT INTO `dz_district` VALUES ('1630', '183', '长沙县');
INSERT INTO `dz_district` VALUES ('1631', '183', '望城县');
INSERT INTO `dz_district` VALUES ('1632', '183', '宁乡县');
INSERT INTO `dz_district` VALUES ('1633', '183', '浏阳市');
INSERT INTO `dz_district` VALUES ('1634', '184', '荷塘区');
INSERT INTO `dz_district` VALUES ('1635', '184', '芦淞区');
INSERT INTO `dz_district` VALUES ('1636', '184', '石峰区');
INSERT INTO `dz_district` VALUES ('1637', '184', '天元区');
INSERT INTO `dz_district` VALUES ('1638', '184', '株洲县');
INSERT INTO `dz_district` VALUES ('1639', '184', '攸县');
INSERT INTO `dz_district` VALUES ('1640', '184', '茶陵县');
INSERT INTO `dz_district` VALUES ('1641', '184', '炎陵县');
INSERT INTO `dz_district` VALUES ('1642', '184', '醴陵市');
INSERT INTO `dz_district` VALUES ('1643', '185', '雨湖区');
INSERT INTO `dz_district` VALUES ('1644', '185', '岳塘区');
INSERT INTO `dz_district` VALUES ('1645', '185', '湘潭县');
INSERT INTO `dz_district` VALUES ('1646', '185', '湘乡市');
INSERT INTO `dz_district` VALUES ('1647', '185', '韶山市');
INSERT INTO `dz_district` VALUES ('1648', '186', '珠晖区');
INSERT INTO `dz_district` VALUES ('1649', '186', '雁峰区');
INSERT INTO `dz_district` VALUES ('1650', '186', '石鼓区');
INSERT INTO `dz_district` VALUES ('1651', '186', '蒸湘区');
INSERT INTO `dz_district` VALUES ('1652', '186', '南岳区');
INSERT INTO `dz_district` VALUES ('1653', '186', '衡阳县');
INSERT INTO `dz_district` VALUES ('1654', '186', '衡南县');
INSERT INTO `dz_district` VALUES ('1655', '186', '衡山县');
INSERT INTO `dz_district` VALUES ('1656', '186', '衡东县');
INSERT INTO `dz_district` VALUES ('1657', '186', '祁东县');
INSERT INTO `dz_district` VALUES ('1658', '186', '耒阳市');
INSERT INTO `dz_district` VALUES ('1659', '186', '常宁市');
INSERT INTO `dz_district` VALUES ('1660', '187', '双清区');
INSERT INTO `dz_district` VALUES ('1661', '187', '大祥区');
INSERT INTO `dz_district` VALUES ('1662', '187', '北塔区');
INSERT INTO `dz_district` VALUES ('1663', '187', '邵东县');
INSERT INTO `dz_district` VALUES ('1664', '187', '新邵县');
INSERT INTO `dz_district` VALUES ('1665', '187', '邵阳县');
INSERT INTO `dz_district` VALUES ('1666', '187', '隆回县');
INSERT INTO `dz_district` VALUES ('1667', '187', '洞口县');
INSERT INTO `dz_district` VALUES ('1668', '187', '绥宁县');
INSERT INTO `dz_district` VALUES ('1669', '187', '新宁县');
INSERT INTO `dz_district` VALUES ('1670', '187', '城步苗族自治县');
INSERT INTO `dz_district` VALUES ('1671', '187', '武冈市');
INSERT INTO `dz_district` VALUES ('1672', '188', '岳阳楼区');
INSERT INTO `dz_district` VALUES ('1673', '188', '云溪区');
INSERT INTO `dz_district` VALUES ('1674', '188', '君山区');
INSERT INTO `dz_district` VALUES ('1675', '188', '岳阳县');
INSERT INTO `dz_district` VALUES ('1676', '188', '华容县');
INSERT INTO `dz_district` VALUES ('1677', '188', '湘阴县');
INSERT INTO `dz_district` VALUES ('1678', '188', '平江县');
INSERT INTO `dz_district` VALUES ('1679', '188', '汨罗市');
INSERT INTO `dz_district` VALUES ('1680', '188', '临湘市');
INSERT INTO `dz_district` VALUES ('1681', '189', '武陵区');
INSERT INTO `dz_district` VALUES ('1682', '189', '鼎城区');
INSERT INTO `dz_district` VALUES ('1683', '189', '安乡县');
INSERT INTO `dz_district` VALUES ('1684', '189', '汉寿县');
INSERT INTO `dz_district` VALUES ('1685', '189', '澧县');
INSERT INTO `dz_district` VALUES ('1686', '189', '临澧县');
INSERT INTO `dz_district` VALUES ('1687', '189', '桃源县');
INSERT INTO `dz_district` VALUES ('1688', '189', '石门县');
INSERT INTO `dz_district` VALUES ('1689', '189', '津市市');
INSERT INTO `dz_district` VALUES ('1690', '190', '永定区');
INSERT INTO `dz_district` VALUES ('1691', '190', '武陵源区');
INSERT INTO `dz_district` VALUES ('1692', '190', '慈利县');
INSERT INTO `dz_district` VALUES ('1693', '190', '桑植县');
INSERT INTO `dz_district` VALUES ('1694', '191', '资阳区');
INSERT INTO `dz_district` VALUES ('1695', '191', '赫山区');
INSERT INTO `dz_district` VALUES ('1696', '191', '南县');
INSERT INTO `dz_district` VALUES ('1697', '191', '桃江县');
INSERT INTO `dz_district` VALUES ('1698', '191', '安化县');
INSERT INTO `dz_district` VALUES ('1699', '191', '沅江市');
INSERT INTO `dz_district` VALUES ('1700', '192', '北湖区');
INSERT INTO `dz_district` VALUES ('1701', '192', '苏仙区');
INSERT INTO `dz_district` VALUES ('1702', '192', '桂阳县');
INSERT INTO `dz_district` VALUES ('1703', '192', '宜章县');
INSERT INTO `dz_district` VALUES ('1704', '192', '永兴县');
INSERT INTO `dz_district` VALUES ('1705', '192', '嘉禾县');
INSERT INTO `dz_district` VALUES ('1706', '192', '临武县');
INSERT INTO `dz_district` VALUES ('1707', '192', '汝城县');
INSERT INTO `dz_district` VALUES ('1708', '192', '桂东县');
INSERT INTO `dz_district` VALUES ('1709', '192', '安仁县');
INSERT INTO `dz_district` VALUES ('1710', '192', '资兴市');
INSERT INTO `dz_district` VALUES ('1711', '193', '芝山区');
INSERT INTO `dz_district` VALUES ('1712', '193', '冷水滩区');
INSERT INTO `dz_district` VALUES ('1713', '193', '祁阳县');
INSERT INTO `dz_district` VALUES ('1714', '193', '东安县');
INSERT INTO `dz_district` VALUES ('1715', '193', '双牌县');
INSERT INTO `dz_district` VALUES ('1716', '193', '道县');
INSERT INTO `dz_district` VALUES ('1717', '193', '江永县');
INSERT INTO `dz_district` VALUES ('1718', '193', '宁远县');
INSERT INTO `dz_district` VALUES ('1719', '193', '蓝山县');
INSERT INTO `dz_district` VALUES ('1720', '193', '新田县');
INSERT INTO `dz_district` VALUES ('1721', '193', '江华瑶族自治县');
INSERT INTO `dz_district` VALUES ('1722', '194', '鹤城区');
INSERT INTO `dz_district` VALUES ('1723', '194', '中方县');
INSERT INTO `dz_district` VALUES ('1724', '194', '沅陵县');
INSERT INTO `dz_district` VALUES ('1725', '194', '辰溪县');
INSERT INTO `dz_district` VALUES ('1726', '194', '溆浦县');
INSERT INTO `dz_district` VALUES ('1727', '194', '会同县');
INSERT INTO `dz_district` VALUES ('1728', '194', '麻阳苗族自治县');
INSERT INTO `dz_district` VALUES ('1729', '194', '新晃侗族自治县');
INSERT INTO `dz_district` VALUES ('1730', '194', '芷江侗族自治县');
INSERT INTO `dz_district` VALUES ('1731', '194', '靖州苗族侗族自治县');
INSERT INTO `dz_district` VALUES ('1732', '194', '通道侗族自治县');
INSERT INTO `dz_district` VALUES ('1733', '194', '洪江市');
INSERT INTO `dz_district` VALUES ('1734', '195', '娄星区');
INSERT INTO `dz_district` VALUES ('1735', '195', '双峰县');
INSERT INTO `dz_district` VALUES ('1736', '195', '新化县');
INSERT INTO `dz_district` VALUES ('1737', '195', '冷水江市');
INSERT INTO `dz_district` VALUES ('1738', '195', '涟源市');
INSERT INTO `dz_district` VALUES ('1739', '196', '吉首市');
INSERT INTO `dz_district` VALUES ('1740', '196', '泸溪县');
INSERT INTO `dz_district` VALUES ('1741', '196', '凤凰县');
INSERT INTO `dz_district` VALUES ('1742', '196', '花垣县');
INSERT INTO `dz_district` VALUES ('1743', '196', '保靖县');
INSERT INTO `dz_district` VALUES ('1744', '196', '古丈县');
INSERT INTO `dz_district` VALUES ('1745', '196', '永顺县');
INSERT INTO `dz_district` VALUES ('1746', '196', '龙山县');
INSERT INTO `dz_district` VALUES ('1747', '197', '东山区');
INSERT INTO `dz_district` VALUES ('1748', '197', '荔湾区');
INSERT INTO `dz_district` VALUES ('1749', '197', '越秀区');
INSERT INTO `dz_district` VALUES ('1750', '197', '海珠区');
INSERT INTO `dz_district` VALUES ('1751', '197', '天河区');
INSERT INTO `dz_district` VALUES ('1752', '197', '芳村区');
INSERT INTO `dz_district` VALUES ('1753', '197', '白云区');
INSERT INTO `dz_district` VALUES ('1754', '197', '黄埔区');
INSERT INTO `dz_district` VALUES ('1755', '197', '番禺区');
INSERT INTO `dz_district` VALUES ('1756', '197', '花都区');
INSERT INTO `dz_district` VALUES ('1757', '197', '增城市');
INSERT INTO `dz_district` VALUES ('1758', '197', '从化市');
INSERT INTO `dz_district` VALUES ('1759', '198', '武江区');
INSERT INTO `dz_district` VALUES ('1760', '198', '浈江区');
INSERT INTO `dz_district` VALUES ('1761', '198', '曲江区');
INSERT INTO `dz_district` VALUES ('1762', '198', '始兴县');
INSERT INTO `dz_district` VALUES ('1763', '198', '仁化县');
INSERT INTO `dz_district` VALUES ('1764', '198', '翁源县');
INSERT INTO `dz_district` VALUES ('1765', '198', '乳源瑶族自治县');
INSERT INTO `dz_district` VALUES ('1766', '198', '新丰县');
INSERT INTO `dz_district` VALUES ('1767', '198', '乐昌市');
INSERT INTO `dz_district` VALUES ('1768', '198', '南雄市');
INSERT INTO `dz_district` VALUES ('1769', '199', '罗湖区');
INSERT INTO `dz_district` VALUES ('1770', '199', '福田区');
INSERT INTO `dz_district` VALUES ('1771', '199', '南山区');
INSERT INTO `dz_district` VALUES ('1772', '199', '宝安区');
INSERT INTO `dz_district` VALUES ('1773', '199', '龙岗区');
INSERT INTO `dz_district` VALUES ('1774', '199', '盐田区');
INSERT INTO `dz_district` VALUES ('1775', '200', '香洲区');
INSERT INTO `dz_district` VALUES ('1776', '200', '斗门区');
INSERT INTO `dz_district` VALUES ('1777', '200', '金湾区');
INSERT INTO `dz_district` VALUES ('1778', '201', '龙湖区');
INSERT INTO `dz_district` VALUES ('1779', '201', '金平区');
INSERT INTO `dz_district` VALUES ('1780', '201', '濠江区');
INSERT INTO `dz_district` VALUES ('1781', '201', '潮阳区');
INSERT INTO `dz_district` VALUES ('1782', '201', '潮南区');
INSERT INTO `dz_district` VALUES ('1783', '201', '澄海区');
INSERT INTO `dz_district` VALUES ('1784', '201', '南澳县');
INSERT INTO `dz_district` VALUES ('1785', '202', '禅城区');
INSERT INTO `dz_district` VALUES ('1786', '202', '南海区');
INSERT INTO `dz_district` VALUES ('1787', '202', '顺德区');
INSERT INTO `dz_district` VALUES ('1788', '202', '三水区');
INSERT INTO `dz_district` VALUES ('1789', '202', '高明区');
INSERT INTO `dz_district` VALUES ('1790', '203', '蓬江区');
INSERT INTO `dz_district` VALUES ('1791', '203', '江海区');
INSERT INTO `dz_district` VALUES ('1792', '203', '新会区');
INSERT INTO `dz_district` VALUES ('1793', '203', '台山市');
INSERT INTO `dz_district` VALUES ('1794', '203', '开平市');
INSERT INTO `dz_district` VALUES ('1795', '203', '鹤山市');
INSERT INTO `dz_district` VALUES ('1796', '203', '恩平市');
INSERT INTO `dz_district` VALUES ('1797', '204', '赤坎区');
INSERT INTO `dz_district` VALUES ('1798', '204', '霞山区');
INSERT INTO `dz_district` VALUES ('1799', '204', '坡头区');
INSERT INTO `dz_district` VALUES ('1800', '204', '麻章区');
INSERT INTO `dz_district` VALUES ('1801', '204', '遂溪县');
INSERT INTO `dz_district` VALUES ('1802', '204', '徐闻县');
INSERT INTO `dz_district` VALUES ('1803', '204', '廉江市');
INSERT INTO `dz_district` VALUES ('1804', '204', '雷州市');
INSERT INTO `dz_district` VALUES ('1805', '204', '吴川市');
INSERT INTO `dz_district` VALUES ('1806', '205', '茂南区');
INSERT INTO `dz_district` VALUES ('1807', '205', '茂港区');
INSERT INTO `dz_district` VALUES ('1808', '205', '电白县');
INSERT INTO `dz_district` VALUES ('1809', '205', '高州市');
INSERT INTO `dz_district` VALUES ('1810', '205', '化州市');
INSERT INTO `dz_district` VALUES ('1811', '205', '信宜市');
INSERT INTO `dz_district` VALUES ('1812', '206', '端州区');
INSERT INTO `dz_district` VALUES ('1813', '206', '鼎湖区');
INSERT INTO `dz_district` VALUES ('1814', '206', '广宁县');
INSERT INTO `dz_district` VALUES ('1815', '206', '怀集县');
INSERT INTO `dz_district` VALUES ('1816', '206', '封开县');
INSERT INTO `dz_district` VALUES ('1817', '206', '德庆县');
INSERT INTO `dz_district` VALUES ('1818', '206', '高要市');
INSERT INTO `dz_district` VALUES ('1819', '206', '四会市');
INSERT INTO `dz_district` VALUES ('1820', '207', '惠城区');
INSERT INTO `dz_district` VALUES ('1821', '207', '惠阳区');
INSERT INTO `dz_district` VALUES ('1822', '207', '博罗县');
INSERT INTO `dz_district` VALUES ('1823', '207', '惠东县');
INSERT INTO `dz_district` VALUES ('1824', '207', '龙门县');
INSERT INTO `dz_district` VALUES ('1825', '208', '梅江区');
INSERT INTO `dz_district` VALUES ('1826', '208', '梅县');
INSERT INTO `dz_district` VALUES ('1827', '208', '大埔县');
INSERT INTO `dz_district` VALUES ('1828', '208', '丰顺县');
INSERT INTO `dz_district` VALUES ('1829', '208', '五华县');
INSERT INTO `dz_district` VALUES ('1830', '208', '平远县');
INSERT INTO `dz_district` VALUES ('1831', '208', '蕉岭县');
INSERT INTO `dz_district` VALUES ('1832', '208', '兴宁市');
INSERT INTO `dz_district` VALUES ('1833', '209', '城区');
INSERT INTO `dz_district` VALUES ('1834', '209', '海丰县');
INSERT INTO `dz_district` VALUES ('1835', '209', '陆河县');
INSERT INTO `dz_district` VALUES ('1836', '209', '陆丰市');
INSERT INTO `dz_district` VALUES ('1837', '210', '源城区');
INSERT INTO `dz_district` VALUES ('1838', '210', '紫金县');
INSERT INTO `dz_district` VALUES ('1839', '210', '龙川县');
INSERT INTO `dz_district` VALUES ('1840', '210', '连平县');
INSERT INTO `dz_district` VALUES ('1841', '210', '和平县');
INSERT INTO `dz_district` VALUES ('1842', '210', '东源县');
INSERT INTO `dz_district` VALUES ('1843', '211', '江城区');
INSERT INTO `dz_district` VALUES ('1844', '211', '阳西县');
INSERT INTO `dz_district` VALUES ('1845', '211', '阳东县');
INSERT INTO `dz_district` VALUES ('1846', '211', '阳春市');
INSERT INTO `dz_district` VALUES ('1847', '212', '清城区');
INSERT INTO `dz_district` VALUES ('1848', '212', '佛冈县');
INSERT INTO `dz_district` VALUES ('1849', '212', '阳山县');
INSERT INTO `dz_district` VALUES ('1850', '212', '连山壮族瑶族自治县');
INSERT INTO `dz_district` VALUES ('1851', '212', '连南瑶族自治县');
INSERT INTO `dz_district` VALUES ('1852', '212', '清新县');
INSERT INTO `dz_district` VALUES ('1853', '212', '英德市');
INSERT INTO `dz_district` VALUES ('1854', '212', '连州市');
INSERT INTO `dz_district` VALUES ('1855', '215', '湘桥区');
INSERT INTO `dz_district` VALUES ('1856', '215', '潮安县');
INSERT INTO `dz_district` VALUES ('1857', '215', '饶平县');
INSERT INTO `dz_district` VALUES ('1858', '216', '榕城区');
INSERT INTO `dz_district` VALUES ('1859', '216', '揭东县');
INSERT INTO `dz_district` VALUES ('1860', '216', '揭西县');
INSERT INTO `dz_district` VALUES ('1861', '216', '惠来县');
INSERT INTO `dz_district` VALUES ('1862', '216', '普宁市');
INSERT INTO `dz_district` VALUES ('1863', '217', '云城区');
INSERT INTO `dz_district` VALUES ('1864', '217', '新兴县');
INSERT INTO `dz_district` VALUES ('1865', '217', '郁南县');
INSERT INTO `dz_district` VALUES ('1866', '217', '云安县');
INSERT INTO `dz_district` VALUES ('1867', '217', '罗定市');
INSERT INTO `dz_district` VALUES ('1868', '218', '兴宁区');
INSERT INTO `dz_district` VALUES ('1869', '218', '青秀区');
INSERT INTO `dz_district` VALUES ('1870', '218', '江南区');
INSERT INTO `dz_district` VALUES ('1871', '218', '西乡塘区');
INSERT INTO `dz_district` VALUES ('1872', '218', '良庆区');
INSERT INTO `dz_district` VALUES ('1873', '218', '邕宁区');
INSERT INTO `dz_district` VALUES ('1874', '218', '武鸣县');
INSERT INTO `dz_district` VALUES ('1875', '218', '隆安县');
INSERT INTO `dz_district` VALUES ('1876', '218', '马山县');
INSERT INTO `dz_district` VALUES ('1877', '218', '上林县');
INSERT INTO `dz_district` VALUES ('1878', '218', '宾阳县');
INSERT INTO `dz_district` VALUES ('1879', '218', '横县');
INSERT INTO `dz_district` VALUES ('1880', '219', '城中区');
INSERT INTO `dz_district` VALUES ('1881', '219', '鱼峰区');
INSERT INTO `dz_district` VALUES ('1882', '219', '柳南区');
INSERT INTO `dz_district` VALUES ('1883', '219', '柳北区');
INSERT INTO `dz_district` VALUES ('1884', '219', '柳江县');
INSERT INTO `dz_district` VALUES ('1885', '219', '柳城县');
INSERT INTO `dz_district` VALUES ('1886', '219', '鹿寨县');
INSERT INTO `dz_district` VALUES ('1887', '219', '融安县');
INSERT INTO `dz_district` VALUES ('1888', '219', '融水苗族自治县');
INSERT INTO `dz_district` VALUES ('1889', '219', '三江侗族自治县');
INSERT INTO `dz_district` VALUES ('1890', '220', '秀峰区');
INSERT INTO `dz_district` VALUES ('1891', '220', '叠彩区');
INSERT INTO `dz_district` VALUES ('1892', '220', '象山区');
INSERT INTO `dz_district` VALUES ('1893', '220', '七星区');
INSERT INTO `dz_district` VALUES ('1894', '220', '雁山区');
INSERT INTO `dz_district` VALUES ('1895', '220', '阳朔县');
INSERT INTO `dz_district` VALUES ('1896', '220', '临桂县');
INSERT INTO `dz_district` VALUES ('1897', '220', '灵川县');
INSERT INTO `dz_district` VALUES ('1898', '220', '全州县');
INSERT INTO `dz_district` VALUES ('1899', '220', '兴安县');
INSERT INTO `dz_district` VALUES ('1900', '220', '永福县');
INSERT INTO `dz_district` VALUES ('1901', '220', '灌阳县');
INSERT INTO `dz_district` VALUES ('1902', '220', '龙胜各族自治县');
INSERT INTO `dz_district` VALUES ('1903', '220', '资源县');
INSERT INTO `dz_district` VALUES ('1904', '220', '平乐县');
INSERT INTO `dz_district` VALUES ('1905', '220', '荔蒲县');
INSERT INTO `dz_district` VALUES ('1906', '220', '恭城瑶族自治县');
INSERT INTO `dz_district` VALUES ('1907', '221', '万秀区');
INSERT INTO `dz_district` VALUES ('1908', '221', '蝶山区');
INSERT INTO `dz_district` VALUES ('1909', '221', '长洲区');
INSERT INTO `dz_district` VALUES ('1910', '221', '苍梧县');
INSERT INTO `dz_district` VALUES ('1911', '221', '藤县');
INSERT INTO `dz_district` VALUES ('1912', '221', '蒙山县');
INSERT INTO `dz_district` VALUES ('1913', '221', '岑溪市');
INSERT INTO `dz_district` VALUES ('1914', '222', '海城区');
INSERT INTO `dz_district` VALUES ('1915', '222', '银海区');
INSERT INTO `dz_district` VALUES ('1916', '222', '铁山港区');
INSERT INTO `dz_district` VALUES ('1917', '222', '合浦县');
INSERT INTO `dz_district` VALUES ('1918', '223', '港口区');
INSERT INTO `dz_district` VALUES ('1919', '223', '防城区');
INSERT INTO `dz_district` VALUES ('1920', '223', '上思县');
INSERT INTO `dz_district` VALUES ('1921', '223', '东兴市');
INSERT INTO `dz_district` VALUES ('1922', '224', '钦南区');
INSERT INTO `dz_district` VALUES ('1923', '224', '钦北区');
INSERT INTO `dz_district` VALUES ('1924', '224', '灵山县');
INSERT INTO `dz_district` VALUES ('1925', '224', '浦北县');
INSERT INTO `dz_district` VALUES ('1926', '225', '港北区');
INSERT INTO `dz_district` VALUES ('1927', '225', '港南区');
INSERT INTO `dz_district` VALUES ('1928', '225', '覃塘区');
INSERT INTO `dz_district` VALUES ('1929', '225', '平南县');
INSERT INTO `dz_district` VALUES ('1930', '225', '桂平市');
INSERT INTO `dz_district` VALUES ('1931', '226', '玉州区');
INSERT INTO `dz_district` VALUES ('1932', '226', '容县');
INSERT INTO `dz_district` VALUES ('1933', '226', '陆川县');
INSERT INTO `dz_district` VALUES ('1934', '226', '博白县');
INSERT INTO `dz_district` VALUES ('1935', '226', '兴业县');
INSERT INTO `dz_district` VALUES ('1936', '226', '北流市');
INSERT INTO `dz_district` VALUES ('1937', '227', '右江区');
INSERT INTO `dz_district` VALUES ('1938', '227', '田阳县');
INSERT INTO `dz_district` VALUES ('1939', '227', '田东县');
INSERT INTO `dz_district` VALUES ('1940', '227', '平果县');
INSERT INTO `dz_district` VALUES ('1941', '227', '德保县');
INSERT INTO `dz_district` VALUES ('1942', '227', '靖西县');
INSERT INTO `dz_district` VALUES ('1943', '227', '那坡县');
INSERT INTO `dz_district` VALUES ('1944', '227', '凌云县');
INSERT INTO `dz_district` VALUES ('1945', '227', '乐业县');
INSERT INTO `dz_district` VALUES ('1946', '227', '田林县');
INSERT INTO `dz_district` VALUES ('1947', '227', '西林县');
INSERT INTO `dz_district` VALUES ('1948', '227', '隆林各族自治县');
INSERT INTO `dz_district` VALUES ('1949', '228', '八步区');
INSERT INTO `dz_district` VALUES ('1950', '228', '昭平县');
INSERT INTO `dz_district` VALUES ('1951', '228', '钟山县');
INSERT INTO `dz_district` VALUES ('1952', '228', '富川瑶族自治县');
INSERT INTO `dz_district` VALUES ('1953', '229', '金城江区');
INSERT INTO `dz_district` VALUES ('1954', '229', '南丹县');
INSERT INTO `dz_district` VALUES ('1955', '229', '天峨县');
INSERT INTO `dz_district` VALUES ('1956', '229', '凤山县');
INSERT INTO `dz_district` VALUES ('1957', '229', '东兰县');
INSERT INTO `dz_district` VALUES ('1958', '229', '罗城仫佬族自治县');
INSERT INTO `dz_district` VALUES ('1959', '229', '环江毛南族自治县');
INSERT INTO `dz_district` VALUES ('1960', '229', '巴马瑶族自治县');
INSERT INTO `dz_district` VALUES ('1961', '229', '都安瑶族自治县');
INSERT INTO `dz_district` VALUES ('1962', '229', '大化瑶族自治县');
INSERT INTO `dz_district` VALUES ('1963', '229', '宜州市');
INSERT INTO `dz_district` VALUES ('1964', '230', '兴宾区');
INSERT INTO `dz_district` VALUES ('1965', '230', '忻城县');
INSERT INTO `dz_district` VALUES ('1966', '230', '象州县');
INSERT INTO `dz_district` VALUES ('1967', '230', '武宣县');
INSERT INTO `dz_district` VALUES ('1968', '230', '金秀瑶族自治县');
INSERT INTO `dz_district` VALUES ('1969', '230', '合山市');
INSERT INTO `dz_district` VALUES ('1970', '231', '江洲区');
INSERT INTO `dz_district` VALUES ('1971', '231', '扶绥县');
INSERT INTO `dz_district` VALUES ('1972', '231', '宁明县');
INSERT INTO `dz_district` VALUES ('1973', '231', '龙州县');
INSERT INTO `dz_district` VALUES ('1974', '231', '大新县');
INSERT INTO `dz_district` VALUES ('1975', '231', '天等县');
INSERT INTO `dz_district` VALUES ('1976', '231', '凭祥市');
INSERT INTO `dz_district` VALUES ('1977', '232', '秀英区');
INSERT INTO `dz_district` VALUES ('1978', '232', '龙华区');
INSERT INTO `dz_district` VALUES ('1979', '232', '琼山区');
INSERT INTO `dz_district` VALUES ('1980', '232', '美兰区');
INSERT INTO `dz_district` VALUES ('1981', '233', '五指山市');
INSERT INTO `dz_district` VALUES ('1982', '233', '琼海市');
INSERT INTO `dz_district` VALUES ('1983', '233', '儋州市');
INSERT INTO `dz_district` VALUES ('1984', '233', '文昌市');
INSERT INTO `dz_district` VALUES ('1985', '233', '万宁市');
INSERT INTO `dz_district` VALUES ('1986', '233', '东方市');
INSERT INTO `dz_district` VALUES ('1987', '233', '定安县');
INSERT INTO `dz_district` VALUES ('1988', '233', '屯昌县');
INSERT INTO `dz_district` VALUES ('1989', '233', '澄迈县');
INSERT INTO `dz_district` VALUES ('1990', '233', '临高县');
INSERT INTO `dz_district` VALUES ('1991', '233', '白沙黎族自治县');
INSERT INTO `dz_district` VALUES ('1992', '233', '昌江黎族自治县');
INSERT INTO `dz_district` VALUES ('1993', '233', '乐东黎族自治县');
INSERT INTO `dz_district` VALUES ('1994', '233', '陵水黎族自治县');
INSERT INTO `dz_district` VALUES ('1995', '233', '保亭黎族苗族自治县');
INSERT INTO `dz_district` VALUES ('1996', '233', '琼中黎族苗族自治县');
INSERT INTO `dz_district` VALUES ('1997', '233', '西沙群岛');
INSERT INTO `dz_district` VALUES ('1998', '233', '南沙群岛');
INSERT INTO `dz_district` VALUES ('1999', '233', '中沙群岛的岛礁及其海域');
INSERT INTO `dz_district` VALUES ('2000', '234', '万州区');
INSERT INTO `dz_district` VALUES ('2001', '234', '涪陵区');
INSERT INTO `dz_district` VALUES ('2002', '234', '渝中区');
INSERT INTO `dz_district` VALUES ('2003', '234', '大渡口区');
INSERT INTO `dz_district` VALUES ('2004', '234', '江北区');
INSERT INTO `dz_district` VALUES ('2005', '234', '沙坪坝区');
INSERT INTO `dz_district` VALUES ('2006', '234', '九龙坡区');
INSERT INTO `dz_district` VALUES ('2007', '234', '南岸区');
INSERT INTO `dz_district` VALUES ('2008', '234', '北碚区');
INSERT INTO `dz_district` VALUES ('2009', '234', '万盛区');
INSERT INTO `dz_district` VALUES ('2010', '234', '双桥区');
INSERT INTO `dz_district` VALUES ('2011', '234', '渝北区');
INSERT INTO `dz_district` VALUES ('2012', '234', '巴南区');
INSERT INTO `dz_district` VALUES ('2013', '234', '黔江区');
INSERT INTO `dz_district` VALUES ('2014', '234', '长寿区');
INSERT INTO `dz_district` VALUES ('2015', '234', '綦江县');
INSERT INTO `dz_district` VALUES ('2016', '234', '潼南县');
INSERT INTO `dz_district` VALUES ('2017', '234', '铜梁县');
INSERT INTO `dz_district` VALUES ('2018', '234', '大足县');
INSERT INTO `dz_district` VALUES ('2019', '234', '荣昌县');
INSERT INTO `dz_district` VALUES ('2020', '234', '璧山县');
INSERT INTO `dz_district` VALUES ('2021', '234', '梁平县');
INSERT INTO `dz_district` VALUES ('2022', '234', '城口县');
INSERT INTO `dz_district` VALUES ('2023', '234', '丰都县');
INSERT INTO `dz_district` VALUES ('2024', '234', '垫江县');
INSERT INTO `dz_district` VALUES ('2025', '234', '武隆县');
INSERT INTO `dz_district` VALUES ('2026', '234', '忠县');
INSERT INTO `dz_district` VALUES ('2027', '234', '开县');
INSERT INTO `dz_district` VALUES ('2028', '234', '云阳县');
INSERT INTO `dz_district` VALUES ('2029', '234', '奉节县');
INSERT INTO `dz_district` VALUES ('2030', '234', '巫山县');
INSERT INTO `dz_district` VALUES ('2031', '234', '巫溪县');
INSERT INTO `dz_district` VALUES ('2032', '234', '石柱土家族自治县');
INSERT INTO `dz_district` VALUES ('2033', '234', '秀山土家族苗族自治县');
INSERT INTO `dz_district` VALUES ('2034', '234', '酉阳土家族苗族自治县');
INSERT INTO `dz_district` VALUES ('2035', '234', '彭水苗族土家族自治县');
INSERT INTO `dz_district` VALUES ('2036', '234', '江津市');
INSERT INTO `dz_district` VALUES ('2037', '234', '合川市');
INSERT INTO `dz_district` VALUES ('2038', '234', '永川市');
INSERT INTO `dz_district` VALUES ('2039', '234', '南川市');
INSERT INTO `dz_district` VALUES ('2040', '235', '锦江区');
INSERT INTO `dz_district` VALUES ('2041', '235', '青羊区');
INSERT INTO `dz_district` VALUES ('2042', '235', '金牛区');
INSERT INTO `dz_district` VALUES ('2043', '235', '武侯区');
INSERT INTO `dz_district` VALUES ('2044', '235', '成华区');
INSERT INTO `dz_district` VALUES ('2045', '235', '龙泉驿区');
INSERT INTO `dz_district` VALUES ('2046', '235', '青白江区');
INSERT INTO `dz_district` VALUES ('2047', '235', '新都区');
INSERT INTO `dz_district` VALUES ('2048', '235', '温江区');
INSERT INTO `dz_district` VALUES ('2049', '235', '金堂县');
INSERT INTO `dz_district` VALUES ('2050', '235', '双流县');
INSERT INTO `dz_district` VALUES ('2051', '235', '郫县');
INSERT INTO `dz_district` VALUES ('2052', '235', '大邑县');
INSERT INTO `dz_district` VALUES ('2053', '235', '蒲江县');
INSERT INTO `dz_district` VALUES ('2054', '235', '新津县');
INSERT INTO `dz_district` VALUES ('2055', '235', '都江堰市');
INSERT INTO `dz_district` VALUES ('2056', '235', '彭州市');
INSERT INTO `dz_district` VALUES ('2057', '235', '邛崃市');
INSERT INTO `dz_district` VALUES ('2058', '235', '崇州市');
INSERT INTO `dz_district` VALUES ('2059', '236', '自流井区');
INSERT INTO `dz_district` VALUES ('2060', '236', '贡井区');
INSERT INTO `dz_district` VALUES ('2061', '236', '大安区');
INSERT INTO `dz_district` VALUES ('2062', '236', '沿滩区');
INSERT INTO `dz_district` VALUES ('2063', '236', '荣县');
INSERT INTO `dz_district` VALUES ('2064', '236', '富顺县');
INSERT INTO `dz_district` VALUES ('2065', '237', '东区');
INSERT INTO `dz_district` VALUES ('2066', '237', '西区');
INSERT INTO `dz_district` VALUES ('2067', '237', '仁和区');
INSERT INTO `dz_district` VALUES ('2068', '237', '米易县');
INSERT INTO `dz_district` VALUES ('2069', '237', '盐边县');
INSERT INTO `dz_district` VALUES ('2070', '238', '江阳区');
INSERT INTO `dz_district` VALUES ('2071', '238', '纳溪区');
INSERT INTO `dz_district` VALUES ('2072', '238', '龙马潭区');
INSERT INTO `dz_district` VALUES ('2073', '238', '泸县');
INSERT INTO `dz_district` VALUES ('2074', '238', '合江县');
INSERT INTO `dz_district` VALUES ('2075', '238', '叙永县');
INSERT INTO `dz_district` VALUES ('2076', '238', '古蔺县');
INSERT INTO `dz_district` VALUES ('2077', '239', '旌阳区');
INSERT INTO `dz_district` VALUES ('2078', '239', '中江县');
INSERT INTO `dz_district` VALUES ('2079', '239', '罗江县');
INSERT INTO `dz_district` VALUES ('2080', '239', '广汉市');
INSERT INTO `dz_district` VALUES ('2081', '239', '什邡市');
INSERT INTO `dz_district` VALUES ('2082', '239', '绵竹市');
INSERT INTO `dz_district` VALUES ('2083', '240', '涪城区');
INSERT INTO `dz_district` VALUES ('2084', '240', '游仙区');
INSERT INTO `dz_district` VALUES ('2085', '240', '三台县');
INSERT INTO `dz_district` VALUES ('2086', '240', '盐亭县');
INSERT INTO `dz_district` VALUES ('2087', '240', '安县');
INSERT INTO `dz_district` VALUES ('2088', '240', '梓潼县');
INSERT INTO `dz_district` VALUES ('2089', '240', '北川羌族自治县');
INSERT INTO `dz_district` VALUES ('2090', '240', '平武县');
INSERT INTO `dz_district` VALUES ('2091', '240', '江油市');
INSERT INTO `dz_district` VALUES ('2092', '241', '市中区');
INSERT INTO `dz_district` VALUES ('2093', '241', '元坝区');
INSERT INTO `dz_district` VALUES ('2094', '241', '朝天区');
INSERT INTO `dz_district` VALUES ('2095', '241', '旺苍县');
INSERT INTO `dz_district` VALUES ('2096', '241', '青川县');
INSERT INTO `dz_district` VALUES ('2097', '241', '剑阁县');
INSERT INTO `dz_district` VALUES ('2098', '241', '苍溪县');
INSERT INTO `dz_district` VALUES ('2099', '242', '船山区');
INSERT INTO `dz_district` VALUES ('2100', '242', '安居区');
INSERT INTO `dz_district` VALUES ('2101', '242', '蓬溪县');
INSERT INTO `dz_district` VALUES ('2102', '242', '射洪县');
INSERT INTO `dz_district` VALUES ('2103', '242', '大英县');
INSERT INTO `dz_district` VALUES ('2104', '243', '市中区');
INSERT INTO `dz_district` VALUES ('2105', '243', '东兴区');
INSERT INTO `dz_district` VALUES ('2106', '243', '威远县');
INSERT INTO `dz_district` VALUES ('2107', '243', '资中县');
INSERT INTO `dz_district` VALUES ('2108', '243', '隆昌县');
INSERT INTO `dz_district` VALUES ('2109', '244', '市中区');
INSERT INTO `dz_district` VALUES ('2110', '244', '沙湾区');
INSERT INTO `dz_district` VALUES ('2111', '244', '五通桥区');
INSERT INTO `dz_district` VALUES ('2112', '244', '金口河区');
INSERT INTO `dz_district` VALUES ('2113', '244', '犍为县');
INSERT INTO `dz_district` VALUES ('2114', '244', '井研县');
INSERT INTO `dz_district` VALUES ('2115', '244', '夹江县');
INSERT INTO `dz_district` VALUES ('2116', '244', '沐川县');
INSERT INTO `dz_district` VALUES ('2117', '244', '峨边彝族自治县');
INSERT INTO `dz_district` VALUES ('2118', '244', '马边彝族自治县');
INSERT INTO `dz_district` VALUES ('2119', '244', '峨眉山市');
INSERT INTO `dz_district` VALUES ('2120', '245', '顺庆区');
INSERT INTO `dz_district` VALUES ('2121', '245', '高坪区');
INSERT INTO `dz_district` VALUES ('2122', '245', '嘉陵区');
INSERT INTO `dz_district` VALUES ('2123', '245', '南部县');
INSERT INTO `dz_district` VALUES ('2124', '245', '营山县');
INSERT INTO `dz_district` VALUES ('2125', '245', '蓬安县');
INSERT INTO `dz_district` VALUES ('2126', '245', '仪陇县');
INSERT INTO `dz_district` VALUES ('2127', '245', '西充县');
INSERT INTO `dz_district` VALUES ('2128', '245', '阆中市');
INSERT INTO `dz_district` VALUES ('2129', '246', '东坡区');
INSERT INTO `dz_district` VALUES ('2130', '246', '仁寿县');
INSERT INTO `dz_district` VALUES ('2131', '246', '彭山县');
INSERT INTO `dz_district` VALUES ('2132', '246', '洪雅县');
INSERT INTO `dz_district` VALUES ('2133', '246', '丹棱县');
INSERT INTO `dz_district` VALUES ('2134', '246', '青神县');
INSERT INTO `dz_district` VALUES ('2135', '247', '翠屏区');
INSERT INTO `dz_district` VALUES ('2136', '247', '宜宾县');
INSERT INTO `dz_district` VALUES ('2137', '247', '南溪县');
INSERT INTO `dz_district` VALUES ('2138', '247', '江安县');
INSERT INTO `dz_district` VALUES ('2139', '247', '长宁县');
INSERT INTO `dz_district` VALUES ('2140', '247', '高县');
INSERT INTO `dz_district` VALUES ('2141', '247', '珙县');
INSERT INTO `dz_district` VALUES ('2142', '247', '筠连县');
INSERT INTO `dz_district` VALUES ('2143', '247', '兴文县');
INSERT INTO `dz_district` VALUES ('2144', '247', '屏山县');
INSERT INTO `dz_district` VALUES ('2145', '248', '广安区');
INSERT INTO `dz_district` VALUES ('2146', '248', '岳池县');
INSERT INTO `dz_district` VALUES ('2147', '248', '武胜县');
INSERT INTO `dz_district` VALUES ('2148', '248', '邻水县');
INSERT INTO `dz_district` VALUES ('2149', '248', '华蓥市');
INSERT INTO `dz_district` VALUES ('2150', '249', '通川区');
INSERT INTO `dz_district` VALUES ('2151', '249', '达县');
INSERT INTO `dz_district` VALUES ('2152', '249', '宣汉县');
INSERT INTO `dz_district` VALUES ('2153', '249', '开江县');
INSERT INTO `dz_district` VALUES ('2154', '249', '大竹县');
INSERT INTO `dz_district` VALUES ('2155', '249', '渠县');
INSERT INTO `dz_district` VALUES ('2156', '249', '万源市');
INSERT INTO `dz_district` VALUES ('2157', '250', '雨城区');
INSERT INTO `dz_district` VALUES ('2158', '250', '名山县');
INSERT INTO `dz_district` VALUES ('2159', '250', '荥经县');
INSERT INTO `dz_district` VALUES ('2160', '250', '汉源县');
INSERT INTO `dz_district` VALUES ('2161', '250', '石棉县');
INSERT INTO `dz_district` VALUES ('2162', '250', '天全县');
INSERT INTO `dz_district` VALUES ('2163', '250', '芦山县');
INSERT INTO `dz_district` VALUES ('2164', '250', '宝兴县');
INSERT INTO `dz_district` VALUES ('2165', '251', '巴州区');
INSERT INTO `dz_district` VALUES ('2166', '251', '通江县');
INSERT INTO `dz_district` VALUES ('2167', '251', '南江县');
INSERT INTO `dz_district` VALUES ('2168', '251', '平昌县');
INSERT INTO `dz_district` VALUES ('2169', '252', '雁江区');
INSERT INTO `dz_district` VALUES ('2170', '252', '安岳县');
INSERT INTO `dz_district` VALUES ('2171', '252', '乐至县');
INSERT INTO `dz_district` VALUES ('2172', '252', '简阳市');
INSERT INTO `dz_district` VALUES ('2173', '253', '汶川县');
INSERT INTO `dz_district` VALUES ('2174', '253', '理县');
INSERT INTO `dz_district` VALUES ('2175', '253', '茂县');
INSERT INTO `dz_district` VALUES ('2176', '253', '松潘县');
INSERT INTO `dz_district` VALUES ('2177', '253', '九寨沟县');
INSERT INTO `dz_district` VALUES ('2178', '253', '金川县');
INSERT INTO `dz_district` VALUES ('2179', '253', '小金县');
INSERT INTO `dz_district` VALUES ('2180', '253', '黑水县');
INSERT INTO `dz_district` VALUES ('2181', '253', '马尔康县');
INSERT INTO `dz_district` VALUES ('2182', '253', '壤塘县');
INSERT INTO `dz_district` VALUES ('2183', '253', '阿坝县');
INSERT INTO `dz_district` VALUES ('2184', '253', '若尔盖县');
INSERT INTO `dz_district` VALUES ('2185', '253', '红原县');
INSERT INTO `dz_district` VALUES ('2186', '254', '康定县');
INSERT INTO `dz_district` VALUES ('2187', '254', '泸定县');
INSERT INTO `dz_district` VALUES ('2188', '254', '丹巴县');
INSERT INTO `dz_district` VALUES ('2189', '254', '九龙县');
INSERT INTO `dz_district` VALUES ('2190', '254', '雅江县');
INSERT INTO `dz_district` VALUES ('2191', '254', '道孚县');
INSERT INTO `dz_district` VALUES ('2192', '254', '炉霍县');
INSERT INTO `dz_district` VALUES ('2193', '254', '甘孜县');
INSERT INTO `dz_district` VALUES ('2194', '254', '新龙县');
INSERT INTO `dz_district` VALUES ('2195', '254', '德格县');
INSERT INTO `dz_district` VALUES ('2196', '254', '白玉县');
INSERT INTO `dz_district` VALUES ('2197', '254', '石渠县');
INSERT INTO `dz_district` VALUES ('2198', '254', '色达县');
INSERT INTO `dz_district` VALUES ('2199', '254', '理塘县');
INSERT INTO `dz_district` VALUES ('2200', '254', '巴塘县');
INSERT INTO `dz_district` VALUES ('2201', '254', '乡城县');
INSERT INTO `dz_district` VALUES ('2202', '254', '稻城县');
INSERT INTO `dz_district` VALUES ('2203', '254', '得荣县');
INSERT INTO `dz_district` VALUES ('2204', '255', '西昌市');
INSERT INTO `dz_district` VALUES ('2205', '255', '木里藏族自治县');
INSERT INTO `dz_district` VALUES ('2206', '255', '盐源县');
INSERT INTO `dz_district` VALUES ('2207', '255', '德昌县');
INSERT INTO `dz_district` VALUES ('2208', '255', '会理县');
INSERT INTO `dz_district` VALUES ('2209', '255', '会东县');
INSERT INTO `dz_district` VALUES ('2210', '255', '宁南县');
INSERT INTO `dz_district` VALUES ('2211', '255', '普格县');
INSERT INTO `dz_district` VALUES ('2212', '255', '布拖县');
INSERT INTO `dz_district` VALUES ('2213', '255', '金阳县');
INSERT INTO `dz_district` VALUES ('2214', '255', '昭觉县');
INSERT INTO `dz_district` VALUES ('2215', '255', '喜德县');
INSERT INTO `dz_district` VALUES ('2216', '255', '冕宁县');
INSERT INTO `dz_district` VALUES ('2217', '255', '越西县');
INSERT INTO `dz_district` VALUES ('2218', '255', '甘洛县');
INSERT INTO `dz_district` VALUES ('2219', '255', '美姑县');
INSERT INTO `dz_district` VALUES ('2220', '255', '雷波县');
INSERT INTO `dz_district` VALUES ('2221', '256', '南明区');
INSERT INTO `dz_district` VALUES ('2222', '256', '云岩区');
INSERT INTO `dz_district` VALUES ('2223', '256', '花溪区');
INSERT INTO `dz_district` VALUES ('2224', '256', '乌当区');
INSERT INTO `dz_district` VALUES ('2225', '256', '白云区');
INSERT INTO `dz_district` VALUES ('2226', '256', '小河区');
INSERT INTO `dz_district` VALUES ('2227', '256', '开阳县');
INSERT INTO `dz_district` VALUES ('2228', '256', '息烽县');
INSERT INTO `dz_district` VALUES ('2229', '256', '修文县');
INSERT INTO `dz_district` VALUES ('2230', '256', '清镇市');
INSERT INTO `dz_district` VALUES ('2231', '257', '钟山区');
INSERT INTO `dz_district` VALUES ('2232', '257', '六枝特区');
INSERT INTO `dz_district` VALUES ('2233', '257', '水城县');
INSERT INTO `dz_district` VALUES ('2234', '257', '盘县');
INSERT INTO `dz_district` VALUES ('2235', '258', '红花岗区');
INSERT INTO `dz_district` VALUES ('2236', '258', '汇川区');
INSERT INTO `dz_district` VALUES ('2237', '258', '遵义县');
INSERT INTO `dz_district` VALUES ('2238', '258', '桐梓县');
INSERT INTO `dz_district` VALUES ('2239', '258', '绥阳县');
INSERT INTO `dz_district` VALUES ('2240', '258', '正安县');
INSERT INTO `dz_district` VALUES ('2241', '258', '道真仡佬族苗族自治县');
INSERT INTO `dz_district` VALUES ('2242', '258', '务川仡佬族苗族自治县');
INSERT INTO `dz_district` VALUES ('2243', '258', '凤冈县');
INSERT INTO `dz_district` VALUES ('2244', '258', '湄潭县');
INSERT INTO `dz_district` VALUES ('2245', '258', '余庆县');
INSERT INTO `dz_district` VALUES ('2246', '258', '习水县');
INSERT INTO `dz_district` VALUES ('2247', '258', '赤水市');
INSERT INTO `dz_district` VALUES ('2248', '258', '仁怀市');
INSERT INTO `dz_district` VALUES ('2249', '259', '西秀区');
INSERT INTO `dz_district` VALUES ('2250', '259', '平坝县');
INSERT INTO `dz_district` VALUES ('2251', '259', '普定县');
INSERT INTO `dz_district` VALUES ('2252', '259', '镇宁布依族苗族自治县');
INSERT INTO `dz_district` VALUES ('2253', '259', '关岭布依族苗族自治县');
INSERT INTO `dz_district` VALUES ('2254', '259', '紫云苗族布依族自治县');
INSERT INTO `dz_district` VALUES ('2255', '260', '铜仁市');
INSERT INTO `dz_district` VALUES ('2256', '260', '江口县');
INSERT INTO `dz_district` VALUES ('2257', '260', '玉屏侗族自治县');
INSERT INTO `dz_district` VALUES ('2258', '260', '石阡县');
INSERT INTO `dz_district` VALUES ('2259', '260', '思南县');
INSERT INTO `dz_district` VALUES ('2260', '260', '印江土家族苗族自治县');
INSERT INTO `dz_district` VALUES ('2261', '260', '德江县');
INSERT INTO `dz_district` VALUES ('2262', '260', '沿河土家族自治县');
INSERT INTO `dz_district` VALUES ('2263', '260', '松桃苗族自治县');
INSERT INTO `dz_district` VALUES ('2264', '260', '万山特区');
INSERT INTO `dz_district` VALUES ('2265', '261', '兴义市');
INSERT INTO `dz_district` VALUES ('2266', '261', '兴仁县');
INSERT INTO `dz_district` VALUES ('2267', '261', '普安县');
INSERT INTO `dz_district` VALUES ('2268', '261', '晴隆县');
INSERT INTO `dz_district` VALUES ('2269', '261', '贞丰县');
INSERT INTO `dz_district` VALUES ('2270', '261', '望谟县');
INSERT INTO `dz_district` VALUES ('2271', '261', '册亨县');
INSERT INTO `dz_district` VALUES ('2272', '261', '安龙县');
INSERT INTO `dz_district` VALUES ('2273', '262', '毕节市');
INSERT INTO `dz_district` VALUES ('2274', '262', '大方县');
INSERT INTO `dz_district` VALUES ('2275', '262', '黔西县');
INSERT INTO `dz_district` VALUES ('2276', '262', '金沙县');
INSERT INTO `dz_district` VALUES ('2277', '262', '织金县');
INSERT INTO `dz_district` VALUES ('2278', '262', '纳雍县');
INSERT INTO `dz_district` VALUES ('2279', '262', '威宁彝族回族苗族自治县');
INSERT INTO `dz_district` VALUES ('2280', '262', '赫章县');
INSERT INTO `dz_district` VALUES ('2281', '263', '凯里市');
INSERT INTO `dz_district` VALUES ('2282', '263', '黄平县');
INSERT INTO `dz_district` VALUES ('2283', '263', '施秉县');
INSERT INTO `dz_district` VALUES ('2284', '263', '三穗县');
INSERT INTO `dz_district` VALUES ('2285', '263', '镇远县');
INSERT INTO `dz_district` VALUES ('2286', '263', '岑巩县');
INSERT INTO `dz_district` VALUES ('2287', '263', '天柱县');
INSERT INTO `dz_district` VALUES ('2288', '263', '锦屏县');
INSERT INTO `dz_district` VALUES ('2289', '263', '剑河县');
INSERT INTO `dz_district` VALUES ('2290', '263', '台江县');
INSERT INTO `dz_district` VALUES ('2291', '263', '黎平县');
INSERT INTO `dz_district` VALUES ('2292', '263', '榕江县');
INSERT INTO `dz_district` VALUES ('2293', '263', '从江县');
INSERT INTO `dz_district` VALUES ('2294', '263', '雷山县');
INSERT INTO `dz_district` VALUES ('2295', '263', '麻江县');
INSERT INTO `dz_district` VALUES ('2296', '263', '丹寨县');
INSERT INTO `dz_district` VALUES ('2297', '264', '都匀市');
INSERT INTO `dz_district` VALUES ('2298', '264', '福泉市');
INSERT INTO `dz_district` VALUES ('2299', '264', '荔波县');
INSERT INTO `dz_district` VALUES ('2300', '264', '贵定县');
INSERT INTO `dz_district` VALUES ('2301', '264', '瓮安县');
INSERT INTO `dz_district` VALUES ('2302', '264', '独山县');
INSERT INTO `dz_district` VALUES ('2303', '264', '平塘县');
INSERT INTO `dz_district` VALUES ('2304', '264', '罗甸县');
INSERT INTO `dz_district` VALUES ('2305', '264', '长顺县');
INSERT INTO `dz_district` VALUES ('2306', '264', '龙里县');
INSERT INTO `dz_district` VALUES ('2307', '264', '惠水县');
INSERT INTO `dz_district` VALUES ('2308', '264', '三都水族自治县');
INSERT INTO `dz_district` VALUES ('2309', '265', '五华区');
INSERT INTO `dz_district` VALUES ('2310', '265', '盘龙区');
INSERT INTO `dz_district` VALUES ('2311', '265', '官渡区');
INSERT INTO `dz_district` VALUES ('2312', '265', '西山区');
INSERT INTO `dz_district` VALUES ('2313', '265', '东川区');
INSERT INTO `dz_district` VALUES ('2314', '265', '呈贡县');
INSERT INTO `dz_district` VALUES ('2315', '265', '晋宁县');
INSERT INTO `dz_district` VALUES ('2316', '265', '富民县');
INSERT INTO `dz_district` VALUES ('2317', '265', '宜良县');
INSERT INTO `dz_district` VALUES ('2318', '265', '石林彝族自治县');
INSERT INTO `dz_district` VALUES ('2319', '265', '嵩明县');
INSERT INTO `dz_district` VALUES ('2320', '265', '禄劝彝族苗族自治县');
INSERT INTO `dz_district` VALUES ('2321', '265', '寻甸回族彝族自治县');
INSERT INTO `dz_district` VALUES ('2322', '265', '安宁市');
INSERT INTO `dz_district` VALUES ('2323', '266', '麒麟区');
INSERT INTO `dz_district` VALUES ('2324', '266', '马龙县');
INSERT INTO `dz_district` VALUES ('2325', '266', '陆良县');
INSERT INTO `dz_district` VALUES ('2326', '266', '师宗县');
INSERT INTO `dz_district` VALUES ('2327', '266', '罗平县');
INSERT INTO `dz_district` VALUES ('2328', '266', '富源县');
INSERT INTO `dz_district` VALUES ('2329', '266', '会泽县');
INSERT INTO `dz_district` VALUES ('2330', '266', '沾益县');
INSERT INTO `dz_district` VALUES ('2331', '266', '宣威市');
INSERT INTO `dz_district` VALUES ('2332', '267', '红塔区');
INSERT INTO `dz_district` VALUES ('2333', '267', '江川县');
INSERT INTO `dz_district` VALUES ('2334', '267', '澄江县');
INSERT INTO `dz_district` VALUES ('2335', '267', '通海县');
INSERT INTO `dz_district` VALUES ('2336', '267', '华宁县');
INSERT INTO `dz_district` VALUES ('2337', '267', '易门县');
INSERT INTO `dz_district` VALUES ('2338', '267', '峨山彝族自治县');
INSERT INTO `dz_district` VALUES ('2339', '267', '新平彝族傣族自治县');
INSERT INTO `dz_district` VALUES ('2340', '267', '元江哈尼族彝族傣族自治县');
INSERT INTO `dz_district` VALUES ('2341', '268', '隆阳区');
INSERT INTO `dz_district` VALUES ('2342', '268', '施甸县');
INSERT INTO `dz_district` VALUES ('2343', '268', '腾冲县');
INSERT INTO `dz_district` VALUES ('2344', '268', '龙陵县');
INSERT INTO `dz_district` VALUES ('2345', '268', '昌宁县');
INSERT INTO `dz_district` VALUES ('2346', '269', '昭阳区');
INSERT INTO `dz_district` VALUES ('2347', '269', '鲁甸县');
INSERT INTO `dz_district` VALUES ('2348', '269', '巧家县');
INSERT INTO `dz_district` VALUES ('2349', '269', '盐津县');
INSERT INTO `dz_district` VALUES ('2350', '269', '大关县');
INSERT INTO `dz_district` VALUES ('2351', '269', '永善县');
INSERT INTO `dz_district` VALUES ('2352', '269', '绥江县');
INSERT INTO `dz_district` VALUES ('2353', '269', '镇雄县');
INSERT INTO `dz_district` VALUES ('2354', '269', '彝良县');
INSERT INTO `dz_district` VALUES ('2355', '269', '威信县');
INSERT INTO `dz_district` VALUES ('2356', '269', '水富县');
INSERT INTO `dz_district` VALUES ('2357', '270', '古城区');
INSERT INTO `dz_district` VALUES ('2358', '270', '玉龙纳西族自治县');
INSERT INTO `dz_district` VALUES ('2359', '270', '永胜县');
INSERT INTO `dz_district` VALUES ('2360', '270', '华坪县');
INSERT INTO `dz_district` VALUES ('2361', '270', '宁蒗彝族自治县');
INSERT INTO `dz_district` VALUES ('2362', '271', '翠云区');
INSERT INTO `dz_district` VALUES ('2363', '271', '普洱哈尼族彝族自治县');
INSERT INTO `dz_district` VALUES ('2364', '271', '墨江哈尼族自治县');
INSERT INTO `dz_district` VALUES ('2365', '271', '景东彝族自治县');
INSERT INTO `dz_district` VALUES ('2366', '271', '景谷傣族彝族自治县');
INSERT INTO `dz_district` VALUES ('2367', '271', '镇沅彝族哈尼族拉祜族自治县');
INSERT INTO `dz_district` VALUES ('2368', '271', '江城哈尼族彝族自治县');
INSERT INTO `dz_district` VALUES ('2369', '271', '孟连傣族拉祜族佤族自治县');
INSERT INTO `dz_district` VALUES ('2370', '271', '澜沧拉祜族自治县');
INSERT INTO `dz_district` VALUES ('2371', '271', '西盟佤族自治县');
INSERT INTO `dz_district` VALUES ('2372', '272', '临翔区');
INSERT INTO `dz_district` VALUES ('2373', '272', '凤庆县');
INSERT INTO `dz_district` VALUES ('2374', '272', '云县');
INSERT INTO `dz_district` VALUES ('2375', '272', '永德县');
INSERT INTO `dz_district` VALUES ('2376', '272', '镇康县');
INSERT INTO `dz_district` VALUES ('2377', '272', '双江拉祜族佤族布朗族傣族自治县');
INSERT INTO `dz_district` VALUES ('2378', '272', '耿马傣族佤族自治县');
INSERT INTO `dz_district` VALUES ('2379', '272', '沧源佤族自治县');
INSERT INTO `dz_district` VALUES ('2380', '273', '楚雄市');
INSERT INTO `dz_district` VALUES ('2381', '273', '双柏县');
INSERT INTO `dz_district` VALUES ('2382', '273', '牟定县');
INSERT INTO `dz_district` VALUES ('2383', '273', '南华县');
INSERT INTO `dz_district` VALUES ('2384', '273', '姚安县');
INSERT INTO `dz_district` VALUES ('2385', '273', '大姚县');
INSERT INTO `dz_district` VALUES ('2386', '273', '永仁县');
INSERT INTO `dz_district` VALUES ('2387', '273', '元谋县');
INSERT INTO `dz_district` VALUES ('2388', '273', '武定县');
INSERT INTO `dz_district` VALUES ('2389', '273', '禄丰县');
INSERT INTO `dz_district` VALUES ('2390', '274', '个旧市');
INSERT INTO `dz_district` VALUES ('2391', '274', '开远市');
INSERT INTO `dz_district` VALUES ('2392', '274', '蒙自县');
INSERT INTO `dz_district` VALUES ('2393', '274', '屏边苗族自治县');
INSERT INTO `dz_district` VALUES ('2394', '274', '建水县');
INSERT INTO `dz_district` VALUES ('2395', '274', '石屏县');
INSERT INTO `dz_district` VALUES ('2396', '274', '弥勒县');
INSERT INTO `dz_district` VALUES ('2397', '274', '泸西县');
INSERT INTO `dz_district` VALUES ('2398', '274', '元阳县');
INSERT INTO `dz_district` VALUES ('2399', '274', '红河县');
INSERT INTO `dz_district` VALUES ('2400', '274', '金平苗族瑶族傣族自治县');
INSERT INTO `dz_district` VALUES ('2401', '274', '绿春县');
INSERT INTO `dz_district` VALUES ('2402', '274', '河口瑶族自治县');
INSERT INTO `dz_district` VALUES ('2403', '275', '文山县');
INSERT INTO `dz_district` VALUES ('2404', '275', '砚山县');
INSERT INTO `dz_district` VALUES ('2405', '275', '西畴县');
INSERT INTO `dz_district` VALUES ('2406', '275', '麻栗坡县');
INSERT INTO `dz_district` VALUES ('2407', '275', '马关县');
INSERT INTO `dz_district` VALUES ('2408', '275', '丘北县');
INSERT INTO `dz_district` VALUES ('2409', '275', '广南县');
INSERT INTO `dz_district` VALUES ('2410', '275', '富宁县');
INSERT INTO `dz_district` VALUES ('2411', '276', '景洪市');
INSERT INTO `dz_district` VALUES ('2412', '276', '勐海县');
INSERT INTO `dz_district` VALUES ('2413', '276', '勐腊县');
INSERT INTO `dz_district` VALUES ('2414', '277', '大理市');
INSERT INTO `dz_district` VALUES ('2415', '277', '漾濞彝族自治县');
INSERT INTO `dz_district` VALUES ('2416', '277', '祥云县');
INSERT INTO `dz_district` VALUES ('2417', '277', '宾川县');
INSERT INTO `dz_district` VALUES ('2418', '277', '弥渡县');
INSERT INTO `dz_district` VALUES ('2419', '277', '南涧彝族自治县');
INSERT INTO `dz_district` VALUES ('2420', '277', '巍山彝族回族自治县');
INSERT INTO `dz_district` VALUES ('2421', '277', '永平县');
INSERT INTO `dz_district` VALUES ('2422', '277', '云龙县');
INSERT INTO `dz_district` VALUES ('2423', '277', '洱源县');
INSERT INTO `dz_district` VALUES ('2424', '277', '剑川县');
INSERT INTO `dz_district` VALUES ('2425', '277', '鹤庆县');
INSERT INTO `dz_district` VALUES ('2426', '278', '瑞丽市');
INSERT INTO `dz_district` VALUES ('2427', '278', '潞西市');
INSERT INTO `dz_district` VALUES ('2428', '278', '梁河县');
INSERT INTO `dz_district` VALUES ('2429', '278', '盈江县');
INSERT INTO `dz_district` VALUES ('2430', '278', '陇川县');
INSERT INTO `dz_district` VALUES ('2431', '279', '泸水县');
INSERT INTO `dz_district` VALUES ('2432', '279', '福贡县');
INSERT INTO `dz_district` VALUES ('2433', '279', '贡山独龙族怒族自治县');
INSERT INTO `dz_district` VALUES ('2434', '279', '兰坪白族普米族自治县');
INSERT INTO `dz_district` VALUES ('2435', '280', '香格里拉县');
INSERT INTO `dz_district` VALUES ('2436', '280', '德钦县');
INSERT INTO `dz_district` VALUES ('2437', '280', '维西傈僳族自治县');
INSERT INTO `dz_district` VALUES ('2438', '281', '城关区');
INSERT INTO `dz_district` VALUES ('2439', '281', '林周县');
INSERT INTO `dz_district` VALUES ('2440', '281', '当雄县');
INSERT INTO `dz_district` VALUES ('2441', '281', '尼木县');
INSERT INTO `dz_district` VALUES ('2442', '281', '曲水县');
INSERT INTO `dz_district` VALUES ('2443', '281', '堆龙德庆县');
INSERT INTO `dz_district` VALUES ('2444', '281', '达孜县');
INSERT INTO `dz_district` VALUES ('2445', '281', '墨竹工卡县');
INSERT INTO `dz_district` VALUES ('2446', '282', '昌都县');
INSERT INTO `dz_district` VALUES ('2447', '282', '江达县');
INSERT INTO `dz_district` VALUES ('2448', '282', '贡觉县');
INSERT INTO `dz_district` VALUES ('2449', '282', '类乌齐县');
INSERT INTO `dz_district` VALUES ('2450', '282', '丁青县');
INSERT INTO `dz_district` VALUES ('2451', '282', '察雅县');
INSERT INTO `dz_district` VALUES ('2452', '282', '八宿县');
INSERT INTO `dz_district` VALUES ('2453', '282', '左贡县');
INSERT INTO `dz_district` VALUES ('2454', '282', '芒康县');
INSERT INTO `dz_district` VALUES ('2455', '282', '洛隆县');
INSERT INTO `dz_district` VALUES ('2456', '282', '边坝县');
INSERT INTO `dz_district` VALUES ('2457', '283', '乃东县');
INSERT INTO `dz_district` VALUES ('2458', '283', '扎囊县');
INSERT INTO `dz_district` VALUES ('2459', '283', '贡嘎县');
INSERT INTO `dz_district` VALUES ('2460', '283', '桑日县');
INSERT INTO `dz_district` VALUES ('2461', '283', '琼结县');
INSERT INTO `dz_district` VALUES ('2462', '283', '曲松县');
INSERT INTO `dz_district` VALUES ('2463', '283', '措美县');
INSERT INTO `dz_district` VALUES ('2464', '283', '洛扎县');
INSERT INTO `dz_district` VALUES ('2465', '283', '加查县');
INSERT INTO `dz_district` VALUES ('2466', '283', '隆子县');
INSERT INTO `dz_district` VALUES ('2467', '283', '错那县');
INSERT INTO `dz_district` VALUES ('2468', '283', '浪卡子县');
INSERT INTO `dz_district` VALUES ('2469', '284', '日喀则市');
INSERT INTO `dz_district` VALUES ('2470', '284', '南木林县');
INSERT INTO `dz_district` VALUES ('2471', '284', '江孜县');
INSERT INTO `dz_district` VALUES ('2472', '284', '定日县');
INSERT INTO `dz_district` VALUES ('2473', '284', '萨迦县');
INSERT INTO `dz_district` VALUES ('2474', '284', '拉孜县');
INSERT INTO `dz_district` VALUES ('2475', '284', '昂仁县');
INSERT INTO `dz_district` VALUES ('2476', '284', '谢通门县');
INSERT INTO `dz_district` VALUES ('2477', '284', '白朗县');
INSERT INTO `dz_district` VALUES ('2478', '284', '仁布县');
INSERT INTO `dz_district` VALUES ('2479', '284', '康马县');
INSERT INTO `dz_district` VALUES ('2480', '284', '定结县');
INSERT INTO `dz_district` VALUES ('2481', '284', '仲巴县');
INSERT INTO `dz_district` VALUES ('2482', '284', '亚东县');
INSERT INTO `dz_district` VALUES ('2483', '284', '吉隆县');
INSERT INTO `dz_district` VALUES ('2484', '284', '聂拉木县');
INSERT INTO `dz_district` VALUES ('2485', '284', '萨嘎县');
INSERT INTO `dz_district` VALUES ('2486', '284', '岗巴县');
INSERT INTO `dz_district` VALUES ('2487', '285', '那曲县');
INSERT INTO `dz_district` VALUES ('2488', '285', '嘉黎县');
INSERT INTO `dz_district` VALUES ('2489', '285', '比如县');
INSERT INTO `dz_district` VALUES ('2490', '285', '聂荣县');
INSERT INTO `dz_district` VALUES ('2491', '285', '安多县');
INSERT INTO `dz_district` VALUES ('2492', '285', '申扎县');
INSERT INTO `dz_district` VALUES ('2493', '285', '索县');
INSERT INTO `dz_district` VALUES ('2494', '285', '班戈县');
INSERT INTO `dz_district` VALUES ('2495', '285', '巴青县');
INSERT INTO `dz_district` VALUES ('2496', '285', '尼玛县');
INSERT INTO `dz_district` VALUES ('2497', '286', '普兰县');
INSERT INTO `dz_district` VALUES ('2498', '286', '札达县');
INSERT INTO `dz_district` VALUES ('2499', '286', '噶尔县');
INSERT INTO `dz_district` VALUES ('2500', '286', '日土县');
INSERT INTO `dz_district` VALUES ('2501', '286', '革吉县');
INSERT INTO `dz_district` VALUES ('2502', '286', '改则县');
INSERT INTO `dz_district` VALUES ('2503', '286', '措勤县');
INSERT INTO `dz_district` VALUES ('2504', '287', '林芝县');
INSERT INTO `dz_district` VALUES ('2505', '287', '工布江达县');
INSERT INTO `dz_district` VALUES ('2506', '287', '米林县');
INSERT INTO `dz_district` VALUES ('2507', '287', '墨脱县');
INSERT INTO `dz_district` VALUES ('2508', '287', '波密县');
INSERT INTO `dz_district` VALUES ('2509', '287', '察隅县');
INSERT INTO `dz_district` VALUES ('2510', '287', '朗县');
INSERT INTO `dz_district` VALUES ('2511', '288', '新城区');
INSERT INTO `dz_district` VALUES ('2512', '288', '碑林区');
INSERT INTO `dz_district` VALUES ('2513', '288', '莲湖区');
INSERT INTO `dz_district` VALUES ('2514', '288', '灞桥区');
INSERT INTO `dz_district` VALUES ('2515', '288', '未央区');
INSERT INTO `dz_district` VALUES ('2516', '288', '雁塔区');
INSERT INTO `dz_district` VALUES ('2517', '288', '阎良区');
INSERT INTO `dz_district` VALUES ('2518', '288', '临潼区');
INSERT INTO `dz_district` VALUES ('2519', '288', '长安区');
INSERT INTO `dz_district` VALUES ('2520', '288', '蓝田县');
INSERT INTO `dz_district` VALUES ('2521', '288', '周至县');
INSERT INTO `dz_district` VALUES ('2522', '288', '户县');
INSERT INTO `dz_district` VALUES ('2523', '288', '高陵县');
INSERT INTO `dz_district` VALUES ('2524', '289', '王益区');
INSERT INTO `dz_district` VALUES ('2525', '289', '印台区');
INSERT INTO `dz_district` VALUES ('2526', '289', '耀州区');
INSERT INTO `dz_district` VALUES ('2527', '289', '宜君县');
INSERT INTO `dz_district` VALUES ('2528', '290', '渭滨区');
INSERT INTO `dz_district` VALUES ('2529', '290', '金台区');
INSERT INTO `dz_district` VALUES ('2530', '290', '陈仓区');
INSERT INTO `dz_district` VALUES ('2531', '290', '凤翔县');
INSERT INTO `dz_district` VALUES ('2532', '290', '岐山县');
INSERT INTO `dz_district` VALUES ('2533', '290', '扶风县');
INSERT INTO `dz_district` VALUES ('2534', '290', '眉县');
INSERT INTO `dz_district` VALUES ('2535', '290', '陇县');
INSERT INTO `dz_district` VALUES ('2536', '290', '千阳县');
INSERT INTO `dz_district` VALUES ('2537', '290', '麟游县');
INSERT INTO `dz_district` VALUES ('2538', '290', '凤县');
INSERT INTO `dz_district` VALUES ('2539', '290', '太白县');
INSERT INTO `dz_district` VALUES ('2540', '291', '秦都区');
INSERT INTO `dz_district` VALUES ('2541', '291', '杨凌区');
INSERT INTO `dz_district` VALUES ('2542', '291', '渭城区');
INSERT INTO `dz_district` VALUES ('2543', '291', '三原县');
INSERT INTO `dz_district` VALUES ('2544', '291', '泾阳县');
INSERT INTO `dz_district` VALUES ('2545', '291', '乾县');
INSERT INTO `dz_district` VALUES ('2546', '291', '礼泉县');
INSERT INTO `dz_district` VALUES ('2547', '291', '永寿县');
INSERT INTO `dz_district` VALUES ('2548', '291', '彬县');
INSERT INTO `dz_district` VALUES ('2549', '291', '长武县');
INSERT INTO `dz_district` VALUES ('2550', '291', '旬邑县');
INSERT INTO `dz_district` VALUES ('2551', '291', '淳化县');
INSERT INTO `dz_district` VALUES ('2552', '291', '武功县');
INSERT INTO `dz_district` VALUES ('2553', '291', '兴平市');
INSERT INTO `dz_district` VALUES ('2554', '292', '临渭区');
INSERT INTO `dz_district` VALUES ('2555', '292', '华县');
INSERT INTO `dz_district` VALUES ('2556', '292', '潼关县');
INSERT INTO `dz_district` VALUES ('2557', '292', '大荔县');
INSERT INTO `dz_district` VALUES ('2558', '292', '合阳县');
INSERT INTO `dz_district` VALUES ('2559', '292', '澄城县');
INSERT INTO `dz_district` VALUES ('2560', '292', '蒲城县');
INSERT INTO `dz_district` VALUES ('2561', '292', '白水县');
INSERT INTO `dz_district` VALUES ('2562', '292', '富平县');
INSERT INTO `dz_district` VALUES ('2563', '292', '韩城市');
INSERT INTO `dz_district` VALUES ('2564', '292', '华阴市');
INSERT INTO `dz_district` VALUES ('2565', '293', '宝塔区');
INSERT INTO `dz_district` VALUES ('2566', '293', '延长县');
INSERT INTO `dz_district` VALUES ('2567', '293', '延川县');
INSERT INTO `dz_district` VALUES ('2568', '293', '子长县');
INSERT INTO `dz_district` VALUES ('2569', '293', '安塞县');
INSERT INTO `dz_district` VALUES ('2570', '293', '志丹县');
INSERT INTO `dz_district` VALUES ('2571', '293', '吴旗县');
INSERT INTO `dz_district` VALUES ('2572', '293', '甘泉县');
INSERT INTO `dz_district` VALUES ('2573', '293', '富县');
INSERT INTO `dz_district` VALUES ('2574', '293', '洛川县');
INSERT INTO `dz_district` VALUES ('2575', '293', '宜川县');
INSERT INTO `dz_district` VALUES ('2576', '293', '黄龙县');
INSERT INTO `dz_district` VALUES ('2577', '293', '黄陵县');
INSERT INTO `dz_district` VALUES ('2578', '294', '汉台区');
INSERT INTO `dz_district` VALUES ('2579', '294', '南郑县');
INSERT INTO `dz_district` VALUES ('2580', '294', '城固县');
INSERT INTO `dz_district` VALUES ('2581', '294', '洋县');
INSERT INTO `dz_district` VALUES ('2582', '294', '西乡县');
INSERT INTO `dz_district` VALUES ('2583', '294', '勉县');
INSERT INTO `dz_district` VALUES ('2584', '294', '宁强县');
INSERT INTO `dz_district` VALUES ('2585', '294', '略阳县');
INSERT INTO `dz_district` VALUES ('2586', '294', '镇巴县');
INSERT INTO `dz_district` VALUES ('2587', '294', '留坝县');
INSERT INTO `dz_district` VALUES ('2588', '294', '佛坪县');
INSERT INTO `dz_district` VALUES ('2589', '295', '榆阳区');
INSERT INTO `dz_district` VALUES ('2590', '295', '神木县');
INSERT INTO `dz_district` VALUES ('2591', '295', '府谷县');
INSERT INTO `dz_district` VALUES ('2592', '295', '横山县');
INSERT INTO `dz_district` VALUES ('2593', '295', '靖边县');
INSERT INTO `dz_district` VALUES ('2594', '295', '定边县');
INSERT INTO `dz_district` VALUES ('2595', '295', '绥德县');
INSERT INTO `dz_district` VALUES ('2596', '295', '米脂县');
INSERT INTO `dz_district` VALUES ('2597', '295', '佳县');
INSERT INTO `dz_district` VALUES ('2598', '295', '吴堡县');
INSERT INTO `dz_district` VALUES ('2599', '295', '清涧县');
INSERT INTO `dz_district` VALUES ('2600', '295', '子洲县');
INSERT INTO `dz_district` VALUES ('2601', '296', '汉滨区');
INSERT INTO `dz_district` VALUES ('2602', '296', '汉阴县');
INSERT INTO `dz_district` VALUES ('2603', '296', '石泉县');
INSERT INTO `dz_district` VALUES ('2604', '296', '宁陕县');
INSERT INTO `dz_district` VALUES ('2605', '296', '紫阳县');
INSERT INTO `dz_district` VALUES ('2606', '296', '岚皋县');
INSERT INTO `dz_district` VALUES ('2607', '296', '平利县');
INSERT INTO `dz_district` VALUES ('2608', '296', '镇坪县');
INSERT INTO `dz_district` VALUES ('2609', '296', '旬阳县');
INSERT INTO `dz_district` VALUES ('2610', '296', '白河县');
INSERT INTO `dz_district` VALUES ('2611', '297', '商州区');
INSERT INTO `dz_district` VALUES ('2612', '297', '洛南县');
INSERT INTO `dz_district` VALUES ('2613', '297', '丹凤县');
INSERT INTO `dz_district` VALUES ('2614', '297', '商南县');
INSERT INTO `dz_district` VALUES ('2615', '297', '山阳县');
INSERT INTO `dz_district` VALUES ('2616', '297', '镇安县');
INSERT INTO `dz_district` VALUES ('2617', '297', '柞水县');
INSERT INTO `dz_district` VALUES ('2618', '298', '城关区');
INSERT INTO `dz_district` VALUES ('2619', '298', '七里河区');
INSERT INTO `dz_district` VALUES ('2620', '298', '西固区');
INSERT INTO `dz_district` VALUES ('2621', '298', '安宁区');
INSERT INTO `dz_district` VALUES ('2622', '298', '红古区');
INSERT INTO `dz_district` VALUES ('2623', '298', '永登县');
INSERT INTO `dz_district` VALUES ('2624', '298', '皋兰县');
INSERT INTO `dz_district` VALUES ('2625', '298', '榆中县');
INSERT INTO `dz_district` VALUES ('2626', '300', '金川区');
INSERT INTO `dz_district` VALUES ('2627', '300', '永昌县');
INSERT INTO `dz_district` VALUES ('2628', '301', '白银区');
INSERT INTO `dz_district` VALUES ('2629', '301', '平川区');
INSERT INTO `dz_district` VALUES ('2630', '301', '靖远县');
INSERT INTO `dz_district` VALUES ('2631', '301', '会宁县');
INSERT INTO `dz_district` VALUES ('2632', '301', '景泰县');
INSERT INTO `dz_district` VALUES ('2633', '302', '秦城区');
INSERT INTO `dz_district` VALUES ('2634', '302', '北道区');
INSERT INTO `dz_district` VALUES ('2635', '302', '清水县');
INSERT INTO `dz_district` VALUES ('2636', '302', '秦安县');
INSERT INTO `dz_district` VALUES ('2637', '302', '甘谷县');
INSERT INTO `dz_district` VALUES ('2638', '302', '武山县');
INSERT INTO `dz_district` VALUES ('2639', '302', '张家川回族自治县');
INSERT INTO `dz_district` VALUES ('2640', '303', '凉州区');
INSERT INTO `dz_district` VALUES ('2641', '303', '民勤县');
INSERT INTO `dz_district` VALUES ('2642', '303', '古浪县');
INSERT INTO `dz_district` VALUES ('2643', '303', '天祝藏族自治县');
INSERT INTO `dz_district` VALUES ('2644', '304', '甘州区');
INSERT INTO `dz_district` VALUES ('2645', '304', '肃南裕固族自治县');
INSERT INTO `dz_district` VALUES ('2646', '304', '民乐县');
INSERT INTO `dz_district` VALUES ('2647', '304', '临泽县');
INSERT INTO `dz_district` VALUES ('2648', '304', '高台县');
INSERT INTO `dz_district` VALUES ('2649', '304', '山丹县');
INSERT INTO `dz_district` VALUES ('2650', '305', '崆峒区');
INSERT INTO `dz_district` VALUES ('2651', '305', '泾川县');
INSERT INTO `dz_district` VALUES ('2652', '305', '灵台县');
INSERT INTO `dz_district` VALUES ('2653', '305', '崇信县');
INSERT INTO `dz_district` VALUES ('2654', '305', '华亭县');
INSERT INTO `dz_district` VALUES ('2655', '305', '庄浪县');
INSERT INTO `dz_district` VALUES ('2656', '305', '静宁县');
INSERT INTO `dz_district` VALUES ('2657', '306', '肃州区');
INSERT INTO `dz_district` VALUES ('2658', '306', '金塔县');
INSERT INTO `dz_district` VALUES ('2659', '306', '安西县');
INSERT INTO `dz_district` VALUES ('2660', '306', '肃北蒙古族自治县');
INSERT INTO `dz_district` VALUES ('2661', '306', '阿克塞哈萨克族自治县');
INSERT INTO `dz_district` VALUES ('2662', '306', '玉门市');
INSERT INTO `dz_district` VALUES ('2663', '306', '敦煌市');
INSERT INTO `dz_district` VALUES ('2664', '307', '西峰区');
INSERT INTO `dz_district` VALUES ('2665', '307', '庆城县');
INSERT INTO `dz_district` VALUES ('2666', '307', '环县');
INSERT INTO `dz_district` VALUES ('2667', '307', '华池县');
INSERT INTO `dz_district` VALUES ('2668', '307', '合水县');
INSERT INTO `dz_district` VALUES ('2669', '307', '正宁县');
INSERT INTO `dz_district` VALUES ('2670', '307', '宁县');
INSERT INTO `dz_district` VALUES ('2671', '307', '镇原县');
INSERT INTO `dz_district` VALUES ('2672', '308', '安定区');
INSERT INTO `dz_district` VALUES ('2673', '308', '通渭县');
INSERT INTO `dz_district` VALUES ('2674', '308', '陇西县');
INSERT INTO `dz_district` VALUES ('2675', '308', '渭源县');
INSERT INTO `dz_district` VALUES ('2676', '308', '临洮县');
INSERT INTO `dz_district` VALUES ('2677', '308', '漳县');
INSERT INTO `dz_district` VALUES ('2678', '308', '岷县');
INSERT INTO `dz_district` VALUES ('2679', '309', '武都区');
INSERT INTO `dz_district` VALUES ('2680', '309', '成县');
INSERT INTO `dz_district` VALUES ('2681', '309', '文县');
INSERT INTO `dz_district` VALUES ('2682', '309', '宕昌县');
INSERT INTO `dz_district` VALUES ('2683', '309', '康县');
INSERT INTO `dz_district` VALUES ('2684', '309', '西和县');
INSERT INTO `dz_district` VALUES ('2685', '309', '礼县');
INSERT INTO `dz_district` VALUES ('2686', '309', '徽县');
INSERT INTO `dz_district` VALUES ('2687', '309', '两当县');
INSERT INTO `dz_district` VALUES ('2688', '310', '临夏市');
INSERT INTO `dz_district` VALUES ('2689', '310', '临夏县');
INSERT INTO `dz_district` VALUES ('2690', '310', '康乐县');
INSERT INTO `dz_district` VALUES ('2691', '310', '永靖县');
INSERT INTO `dz_district` VALUES ('2692', '310', '广河县');
INSERT INTO `dz_district` VALUES ('2693', '310', '和政县');
INSERT INTO `dz_district` VALUES ('2694', '310', '东乡族自治县');
INSERT INTO `dz_district` VALUES ('2695', '310', '积石山保安族东乡族撒拉族自治县');
INSERT INTO `dz_district` VALUES ('2696', '311', '合作市');
INSERT INTO `dz_district` VALUES ('2697', '311', '临潭县');
INSERT INTO `dz_district` VALUES ('2698', '311', '卓尼县');
INSERT INTO `dz_district` VALUES ('2699', '311', '舟曲县');
INSERT INTO `dz_district` VALUES ('2700', '311', '迭部县');
INSERT INTO `dz_district` VALUES ('2701', '311', '玛曲县');
INSERT INTO `dz_district` VALUES ('2702', '311', '碌曲县');
INSERT INTO `dz_district` VALUES ('2703', '311', '夏河县');
INSERT INTO `dz_district` VALUES ('2704', '312', '城东区');
INSERT INTO `dz_district` VALUES ('2705', '312', '城中区');
INSERT INTO `dz_district` VALUES ('2706', '312', '城西区');
INSERT INTO `dz_district` VALUES ('2707', '312', '城北区');
INSERT INTO `dz_district` VALUES ('2708', '312', '大通回族土族自治县');
INSERT INTO `dz_district` VALUES ('2709', '312', '湟中县');
INSERT INTO `dz_district` VALUES ('2710', '312', '湟源县');
INSERT INTO `dz_district` VALUES ('2711', '313', '平安县');
INSERT INTO `dz_district` VALUES ('2712', '313', '民和回族土族自治县');
INSERT INTO `dz_district` VALUES ('2713', '313', '乐都县');
INSERT INTO `dz_district` VALUES ('2714', '313', '互助土族自治县');
INSERT INTO `dz_district` VALUES ('2715', '313', '化隆回族自治县');
INSERT INTO `dz_district` VALUES ('2716', '313', '循化撒拉族自治县');
INSERT INTO `dz_district` VALUES ('2717', '314', '门源回族自治县');
INSERT INTO `dz_district` VALUES ('2718', '314', '祁连县');
INSERT INTO `dz_district` VALUES ('2719', '314', '海晏县');
INSERT INTO `dz_district` VALUES ('2720', '314', '刚察县');
INSERT INTO `dz_district` VALUES ('2721', '315', '同仁县');
INSERT INTO `dz_district` VALUES ('2722', '315', '尖扎县');
INSERT INTO `dz_district` VALUES ('2723', '315', '泽库县');
INSERT INTO `dz_district` VALUES ('2724', '315', '河南蒙古族自治县');
INSERT INTO `dz_district` VALUES ('2725', '316', '共和县');
INSERT INTO `dz_district` VALUES ('2726', '316', '同德县');
INSERT INTO `dz_district` VALUES ('2727', '316', '贵德县');
INSERT INTO `dz_district` VALUES ('2728', '316', '兴海县');
INSERT INTO `dz_district` VALUES ('2729', '316', '贵南县');
INSERT INTO `dz_district` VALUES ('2730', '317', '玛沁县');
INSERT INTO `dz_district` VALUES ('2731', '317', '班玛县');
INSERT INTO `dz_district` VALUES ('2732', '317', '甘德县');
INSERT INTO `dz_district` VALUES ('2733', '317', '达日县');
INSERT INTO `dz_district` VALUES ('2734', '317', '久治县');
INSERT INTO `dz_district` VALUES ('2735', '317', '玛多县');
INSERT INTO `dz_district` VALUES ('2736', '318', '玉树县');
INSERT INTO `dz_district` VALUES ('2737', '318', '杂多县');
INSERT INTO `dz_district` VALUES ('2738', '318', '称多县');
INSERT INTO `dz_district` VALUES ('2739', '318', '治多县');
INSERT INTO `dz_district` VALUES ('2740', '318', '囊谦县');
INSERT INTO `dz_district` VALUES ('2741', '318', '曲麻莱县');
INSERT INTO `dz_district` VALUES ('2742', '319', '格尔木市');
INSERT INTO `dz_district` VALUES ('2743', '319', '德令哈市');
INSERT INTO `dz_district` VALUES ('2744', '319', '乌兰县');
INSERT INTO `dz_district` VALUES ('2745', '319', '都兰县');
INSERT INTO `dz_district` VALUES ('2746', '319', '天峻县');
INSERT INTO `dz_district` VALUES ('2747', '320', '兴庆区');
INSERT INTO `dz_district` VALUES ('2748', '320', '西夏区');
INSERT INTO `dz_district` VALUES ('2749', '320', '金凤区');
INSERT INTO `dz_district` VALUES ('2750', '320', '永宁县');
INSERT INTO `dz_district` VALUES ('2751', '320', '贺兰县');
INSERT INTO `dz_district` VALUES ('2752', '320', '灵武市');
INSERT INTO `dz_district` VALUES ('2753', '321', '大武口区');
INSERT INTO `dz_district` VALUES ('2754', '321', '惠农区');
INSERT INTO `dz_district` VALUES ('2755', '321', '平罗县');
INSERT INTO `dz_district` VALUES ('2756', '322', '利通区');
INSERT INTO `dz_district` VALUES ('2757', '322', '盐池县');
INSERT INTO `dz_district` VALUES ('2758', '322', '同心县');
INSERT INTO `dz_district` VALUES ('2759', '322', '青铜峡市');
INSERT INTO `dz_district` VALUES ('2760', '323', '原州区');
INSERT INTO `dz_district` VALUES ('2761', '323', '西吉县');
INSERT INTO `dz_district` VALUES ('2762', '323', '隆德县');
INSERT INTO `dz_district` VALUES ('2763', '323', '泾源县');
INSERT INTO `dz_district` VALUES ('2764', '323', '彭阳县');
INSERT INTO `dz_district` VALUES ('2765', '324', '沙坡头区');
INSERT INTO `dz_district` VALUES ('2766', '324', '中宁县');
INSERT INTO `dz_district` VALUES ('2767', '324', '海原县');
INSERT INTO `dz_district` VALUES ('2768', '325', '天山区');
INSERT INTO `dz_district` VALUES ('2769', '325', '沙依巴克区');
INSERT INTO `dz_district` VALUES ('2770', '325', '新市区');
INSERT INTO `dz_district` VALUES ('2771', '325', '水磨沟区');
INSERT INTO `dz_district` VALUES ('2772', '325', '头屯河区');
INSERT INTO `dz_district` VALUES ('2773', '325', '达坂城区');
INSERT INTO `dz_district` VALUES ('2774', '325', '东山区');
INSERT INTO `dz_district` VALUES ('2775', '325', '乌鲁木齐县');
INSERT INTO `dz_district` VALUES ('2776', '326', '独山子区');
INSERT INTO `dz_district` VALUES ('2777', '326', '克拉玛依区');
INSERT INTO `dz_district` VALUES ('2778', '326', '白碱滩区');
INSERT INTO `dz_district` VALUES ('2779', '326', '乌尔禾区');
INSERT INTO `dz_district` VALUES ('2780', '327', '吐鲁番市');
INSERT INTO `dz_district` VALUES ('2781', '327', '鄯善县');
INSERT INTO `dz_district` VALUES ('2782', '327', '托克逊县');
INSERT INTO `dz_district` VALUES ('2783', '328', '哈密市');
INSERT INTO `dz_district` VALUES ('2784', '328', '巴里坤哈萨克自治县');
INSERT INTO `dz_district` VALUES ('2785', '328', '伊吾县');
INSERT INTO `dz_district` VALUES ('2786', '329', '昌吉市');
INSERT INTO `dz_district` VALUES ('2787', '329', '阜康市');
INSERT INTO `dz_district` VALUES ('2788', '329', '米泉市');
INSERT INTO `dz_district` VALUES ('2789', '329', '呼图壁县');
INSERT INTO `dz_district` VALUES ('2790', '329', '玛纳斯县');
INSERT INTO `dz_district` VALUES ('2791', '329', '奇台县');
INSERT INTO `dz_district` VALUES ('2792', '329', '吉木萨尔县');
INSERT INTO `dz_district` VALUES ('2793', '329', '木垒哈萨克自治县');
INSERT INTO `dz_district` VALUES ('2794', '330', '博乐市');
INSERT INTO `dz_district` VALUES ('2795', '330', '精河县');
INSERT INTO `dz_district` VALUES ('2796', '330', '温泉县');
INSERT INTO `dz_district` VALUES ('2797', '331', '库尔勒市');
INSERT INTO `dz_district` VALUES ('2798', '331', '轮台县');
INSERT INTO `dz_district` VALUES ('2799', '331', '尉犁县');
INSERT INTO `dz_district` VALUES ('2800', '331', '若羌县');
INSERT INTO `dz_district` VALUES ('2801', '331', '且末县');
INSERT INTO `dz_district` VALUES ('2802', '331', '焉耆回族自治县');
INSERT INTO `dz_district` VALUES ('2803', '331', '和静县');
INSERT INTO `dz_district` VALUES ('2804', '331', '和硕县');
INSERT INTO `dz_district` VALUES ('2805', '331', '博湖县');
INSERT INTO `dz_district` VALUES ('2806', '332', '阿克苏市');
INSERT INTO `dz_district` VALUES ('2807', '332', '温宿县');
INSERT INTO `dz_district` VALUES ('2808', '332', '库车县');
INSERT INTO `dz_district` VALUES ('2809', '332', '沙雅县');
INSERT INTO `dz_district` VALUES ('2810', '332', '新和县');
INSERT INTO `dz_district` VALUES ('2811', '332', '拜城县');
INSERT INTO `dz_district` VALUES ('2812', '332', '乌什县');
INSERT INTO `dz_district` VALUES ('2813', '332', '阿瓦提县');
INSERT INTO `dz_district` VALUES ('2814', '332', '柯坪县');
INSERT INTO `dz_district` VALUES ('2815', '333', '阿图什市');
INSERT INTO `dz_district` VALUES ('2816', '333', '阿克陶县');
INSERT INTO `dz_district` VALUES ('2817', '333', '阿合奇县');
INSERT INTO `dz_district` VALUES ('2818', '333', '乌恰县');
INSERT INTO `dz_district` VALUES ('2819', '334', '喀什市');
INSERT INTO `dz_district` VALUES ('2820', '334', '疏附县');
INSERT INTO `dz_district` VALUES ('2821', '334', '疏勒县');
INSERT INTO `dz_district` VALUES ('2822', '334', '英吉沙县');
INSERT INTO `dz_district` VALUES ('2823', '334', '泽普县');
INSERT INTO `dz_district` VALUES ('2824', '334', '莎车县');
INSERT INTO `dz_district` VALUES ('2825', '334', '叶城县');
INSERT INTO `dz_district` VALUES ('2826', '334', '麦盖提县');
INSERT INTO `dz_district` VALUES ('2827', '334', '岳普湖县');
INSERT INTO `dz_district` VALUES ('2828', '334', '伽师县');
INSERT INTO `dz_district` VALUES ('2829', '334', '巴楚县');
INSERT INTO `dz_district` VALUES ('2830', '334', '塔什库尔干塔吉克自治县');
INSERT INTO `dz_district` VALUES ('2831', '335', '和田市');
INSERT INTO `dz_district` VALUES ('2832', '335', '和田县');
INSERT INTO `dz_district` VALUES ('2833', '335', '墨玉县');
INSERT INTO `dz_district` VALUES ('2834', '335', '皮山县');
INSERT INTO `dz_district` VALUES ('2835', '335', '洛浦县');
INSERT INTO `dz_district` VALUES ('2836', '335', '策勒县');
INSERT INTO `dz_district` VALUES ('2837', '335', '于田县');
INSERT INTO `dz_district` VALUES ('2838', '335', '民丰县');
INSERT INTO `dz_district` VALUES ('2839', '336', '伊宁市');
INSERT INTO `dz_district` VALUES ('2840', '336', '奎屯市');
INSERT INTO `dz_district` VALUES ('2841', '336', '伊宁县');
INSERT INTO `dz_district` VALUES ('2842', '336', '察布查尔锡伯自治县');
INSERT INTO `dz_district` VALUES ('2843', '336', '霍城县');
INSERT INTO `dz_district` VALUES ('2844', '336', '巩留县');
INSERT INTO `dz_district` VALUES ('2845', '336', '新源县');
INSERT INTO `dz_district` VALUES ('2846', '336', '昭苏县');
INSERT INTO `dz_district` VALUES ('2847', '336', '特克斯县');
INSERT INTO `dz_district` VALUES ('2848', '336', '尼勒克县');
INSERT INTO `dz_district` VALUES ('2849', '337', '塔城市');
INSERT INTO `dz_district` VALUES ('2850', '337', '乌苏市');
INSERT INTO `dz_district` VALUES ('2851', '337', '额敏县');
INSERT INTO `dz_district` VALUES ('2852', '337', '沙湾县');
INSERT INTO `dz_district` VALUES ('2853', '337', '托里县');
INSERT INTO `dz_district` VALUES ('2854', '337', '裕民县');
INSERT INTO `dz_district` VALUES ('2855', '337', '和布克赛尔蒙古自治县');
INSERT INTO `dz_district` VALUES ('2856', '338', '阿勒泰市');
INSERT INTO `dz_district` VALUES ('2857', '338', '布尔津县');
INSERT INTO `dz_district` VALUES ('2858', '338', '富蕴县');
INSERT INTO `dz_district` VALUES ('2859', '338', '福海县');
INSERT INTO `dz_district` VALUES ('2860', '338', '哈巴河县');
INSERT INTO `dz_district` VALUES ('2861', '338', '青河县');
INSERT INTO `dz_district` VALUES ('2862', '338', '吉木乃县');

-- ----------------------------
-- Table structure for `dz_leibie`
-- ----------------------------
DROP TABLE IF EXISTS `dz_leibie`;
CREATE TABLE `dz_leibie` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) DEFAULT NULL,
  `ks_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dz_leibie
-- ----------------------------
INSERT INTO `dz_leibie` VALUES ('38', '全部', '2');
INSERT INTO `dz_leibie` VALUES ('39', '笔试', '0');
INSERT INTO `dz_leibie` VALUES ('40', '口试', '1');

-- ----------------------------
-- Table structure for `dz_minzu`
-- ----------------------------
DROP TABLE IF EXISTS `dz_minzu`;
CREATE TABLE `dz_minzu` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) DEFAULT NULL,
  `ks_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dz_minzu
-- ----------------------------
INSERT INTO `dz_minzu` VALUES ('1', '汉', '1');
INSERT INTO `dz_minzu` VALUES ('36', '蒙古', '2');
INSERT INTO `dz_minzu` VALUES ('37', '回', '3');
INSERT INTO `dz_minzu` VALUES ('38', '维吾尔', '5');
INSERT INTO `dz_minzu` VALUES ('39', '苗', '6');
INSERT INTO `dz_minzu` VALUES ('40', '彝', '7');
INSERT INTO `dz_minzu` VALUES ('41', '壮', '8');
INSERT INTO `dz_minzu` VALUES ('42', '布依', '9');
INSERT INTO `dz_minzu` VALUES ('43', '朝鲜', '10');
INSERT INTO `dz_minzu` VALUES ('44', '满', '11');
INSERT INTO `dz_minzu` VALUES ('45', '侗', '12');
INSERT INTO `dz_minzu` VALUES ('46', '瑶', '13');
INSERT INTO `dz_minzu` VALUES ('47', '白', '14');
INSERT INTO `dz_minzu` VALUES ('48', '土家', '15');
INSERT INTO `dz_minzu` VALUES ('49', '哈尼', '16');
INSERT INTO `dz_minzu` VALUES ('50', '哈萨克', '17');
INSERT INTO `dz_minzu` VALUES ('51', '傣', '18');
INSERT INTO `dz_minzu` VALUES ('52', '黎', '19');
INSERT INTO `dz_minzu` VALUES ('53', '其他', '97');
INSERT INTO `dz_minzu` VALUES ('54', '外国血缘', '98');
INSERT INTO `dz_minzu` VALUES ('55', '基诺', '56');
INSERT INTO `dz_minzu` VALUES ('56', '珞巴', '55');
INSERT INTO `dz_minzu` VALUES ('57', '门巴', '54');
INSERT INTO `dz_minzu` VALUES ('58', '京', '49');
INSERT INTO `dz_minzu` VALUES ('59', '畲', '22');
INSERT INTO `dz_minzu` VALUES ('60', '佤', '21');
INSERT INTO `dz_minzu` VALUES ('61', '傈僳', '20');
INSERT INTO `dz_minzu` VALUES ('62', '高山', '23');
INSERT INTO `dz_minzu` VALUES ('63', '拉祜', '24');
INSERT INTO `dz_minzu` VALUES ('64', '水', '25');
INSERT INTO `dz_minzu` VALUES ('65', '东乡', '26');
INSERT INTO `dz_minzu` VALUES ('66', '纳西', '27');
INSERT INTO `dz_minzu` VALUES ('67', '景颇', '28');
INSERT INTO `dz_minzu` VALUES ('68', '土', '30');
INSERT INTO `dz_minzu` VALUES ('70', '俄罗斯', '44');
INSERT INTO `dz_minzu` VALUES ('71', '保安', '47');
INSERT INTO `dz_minzu` VALUES ('72', '独龙', '51');
INSERT INTO `dz_minzu` VALUES ('73', '塔塔尔', '50');
INSERT INTO `dz_minzu` VALUES ('74', '鄂伦春', '52');
INSERT INTO `dz_minzu` VALUES ('75', '赫哲', '53');

-- ----------------------------
-- Table structure for `dz_shengma`
-- ----------------------------
DROP TABLE IF EXISTS `dz_shengma`;
CREATE TABLE `dz_shengma` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) DEFAULT NULL,
  `p_zhi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dz_shengma
-- ----------------------------
INSERT INTO `dz_shengma` VALUES ('1', '11北京市', '11');
INSERT INTO `dz_shengma` VALUES ('2', '12天津市', '12');
INSERT INTO `dz_shengma` VALUES ('3', '13河北省', '13');
INSERT INTO `dz_shengma` VALUES ('4', '14山西省', '14');
INSERT INTO `dz_shengma` VALUES ('5', '15内蒙古', '15');
INSERT INTO `dz_shengma` VALUES ('6', '21辽宁省', '21');
INSERT INTO `dz_shengma` VALUES ('7', '22吉林省', '22');
INSERT INTO `dz_shengma` VALUES ('8', '23黑龙江省', '23');
INSERT INTO `dz_shengma` VALUES ('17', '31上海市', '31');
INSERT INTO `dz_shengma` VALUES ('18', '32江苏省', '32');
INSERT INTO `dz_shengma` VALUES ('19', '33浙江省', '33');
INSERT INTO `dz_shengma` VALUES ('20', '34安徽省', '34');
INSERT INTO `dz_shengma` VALUES ('21', '35福建省', '35');
INSERT INTO `dz_shengma` VALUES ('22', '36江西省', '36');
INSERT INTO `dz_shengma` VALUES ('23', '37山东省', '37');
INSERT INTO `dz_shengma` VALUES ('24', '41河南省', '41');
INSERT INTO `dz_shengma` VALUES ('25', '42湖北省', '42');
INSERT INTO `dz_shengma` VALUES ('26', '43湖南省', '43');
INSERT INTO `dz_shengma` VALUES ('27', '44广东省', '44');
INSERT INTO `dz_shengma` VALUES ('28', '45广西省', '45');
INSERT INTO `dz_shengma` VALUES ('29', '46海南省', '46');
INSERT INTO `dz_shengma` VALUES ('30', '50重庆市', '50');
INSERT INTO `dz_shengma` VALUES ('31', '51四川省', '51');
INSERT INTO `dz_shengma` VALUES ('33', '53云南省', '53');
INSERT INTO `dz_shengma` VALUES ('35', '61陕西省', '61');
INSERT INTO `dz_shengma` VALUES ('36', '62甘肃省', '62');
INSERT INTO `dz_shengma` VALUES ('38', '64宁夏', '64');
INSERT INTO `dz_shengma` VALUES ('39', '65新疆', '65');
INSERT INTO `dz_shengma` VALUES ('40', '81总参', '81');
INSERT INTO `dz_shengma` VALUES ('41', '99Pets5', '99');

-- ----------------------------
-- Table structure for `dz_xueli`
-- ----------------------------
DROP TABLE IF EXISTS `dz_xueli`;
CREATE TABLE `dz_xueli` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) DEFAULT NULL,
  `ks_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dz_xueli
-- ----------------------------
INSERT INTO `dz_xueli` VALUES ('1', '本科', '3');
INSERT INTO `dz_xueli` VALUES ('36', '大专(专科)', '4');
INSERT INTO `dz_xueli` VALUES ('38', '硕士', '2');
INSERT INTO `dz_xueli` VALUES ('39', '高中(职高)', '5');
INSERT INTO `dz_xueli` VALUES ('40', '中专(中技)', '6');
INSERT INTO `dz_xueli` VALUES ('41', '初中', '7');
INSERT INTO `dz_xueli` VALUES ('42', '初中以下', '8');
INSERT INTO `dz_xueli` VALUES ('43', '博士', '1');

-- ----------------------------
-- Table structure for `dz_zhiye`
-- ----------------------------
DROP TABLE IF EXISTS `dz_zhiye`;
CREATE TABLE `dz_zhiye` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `ks_id` varchar(255) DEFAULT NULL,
  `p_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dz_zhiye
-- ----------------------------
INSERT INTO `dz_zhiye` VALUES ('1', '30', '学生');
INSERT INTO `dz_zhiye` VALUES ('49', '19', '卫生专业技术人员');
INSERT INTO `dz_zhiye` VALUES ('38', '08', '军人');
INSERT INTO `dz_zhiye` VALUES ('40', '04', '事业单位负责人');
INSERT INTO `dz_zhiye` VALUES ('41', '05', '企业负责人');
INSERT INTO `dz_zhiye` VALUES ('42', '02', '国家机关及其工作机构负责人');
INSERT INTO `dz_zhiye` VALUES ('43', '01', '中国共产党中央委员会和地方各级组织负责人');
INSERT INTO `dz_zhiye` VALUES ('44', '09', '不便分类的其他从业人员');
INSERT INTO `dz_zhiye` VALUES ('45', '10', '失业(含待业及无业人员)');
INSERT INTO `dz_zhiye` VALUES ('46', '11', '科学研究人员');
INSERT INTO `dz_zhiye` VALUES ('47', '13', '工程技术人员');
INSERT INTO `dz_zhiye` VALUES ('48', '17', '农业技术人员');
INSERT INTO `dz_zhiye` VALUES ('50', '18', '飞机和船舶技术人员');
INSERT INTO `dz_zhiye` VALUES ('51', '21', '经济业务人员');
INSERT INTO `dz_zhiye` VALUES ('52', '22', '金融业务人员');
INSERT INTO `dz_zhiye` VALUES ('53', '23', '法律专业人员');
INSERT INTO `dz_zhiye` VALUES ('54', '24', '教学人员');
INSERT INTO `dz_zhiye` VALUES ('55', '25', '文学艺术工作人员');
INSERT INTO `dz_zhiye` VALUES ('56', '26', '体育工作人员');
INSERT INTO `dz_zhiye` VALUES ('57', '28', '宗教职业者');
INSERT INTO `dz_zhiye` VALUES ('58', '31', '行政办公人员');
INSERT INTO `dz_zhiye` VALUES ('59', '32', '安全保卫和消防人员');
INSERT INTO `dz_zhiye` VALUES ('60', '41', '购销人员');
INSERT INTO `dz_zhiye` VALUES ('61', '42', '仓储人员');
INSERT INTO `dz_zhiye` VALUES ('62', '43', '餐饮服务人员');
INSERT INTO `dz_zhiye` VALUES ('63', '45', '运输服务人员');

-- ----------------------------
-- Table structure for `dz_zkz`
-- ----------------------------
DROP TABLE IF EXISTS `dz_zkz`;
CREATE TABLE `dz_zkz` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_number` varchar(255) DEFAULT NULL,
  `p_user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=478 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dz_zkz
-- ----------------------------
INSERT INTO `dz_zkz` VALUES ('423', '150115100001', '201400001');
INSERT INTO `dz_zkz` VALUES ('424', '150115100002', '201400002');
INSERT INTO `dz_zkz` VALUES ('426', '150115100004', '201400003');
INSERT INTO `dz_zkz` VALUES ('427', '150115100005', '201400004');
INSERT INTO `dz_zkz` VALUES ('428', '150115100006', '');
INSERT INTO `dz_zkz` VALUES ('429', '150115100007', '');
INSERT INTO `dz_zkz` VALUES ('430', '150115100008', '');
INSERT INTO `dz_zkz` VALUES ('431', '150115100009', '');
INSERT INTO `dz_zkz` VALUES ('432', '150115100010', '');
INSERT INTO `dz_zkz` VALUES ('433', '150115100011', '');
INSERT INTO `dz_zkz` VALUES ('434', '150115100012', '');
INSERT INTO `dz_zkz` VALUES ('435', '150115100013', '');
INSERT INTO `dz_zkz` VALUES ('436', '150115100014', '');
INSERT INTO `dz_zkz` VALUES ('437', '150115100015', '');
INSERT INTO `dz_zkz` VALUES ('438', '150115100016', '');
INSERT INTO `dz_zkz` VALUES ('439', '150115100017', '');
INSERT INTO `dz_zkz` VALUES ('440', '150115100018', '');
INSERT INTO `dz_zkz` VALUES ('441', '150115100019', '');
INSERT INTO `dz_zkz` VALUES ('442', '150115100020', '');
INSERT INTO `dz_zkz` VALUES ('443', '150115100021', '');
INSERT INTO `dz_zkz` VALUES ('444', '150115100022', '');
INSERT INTO `dz_zkz` VALUES ('445', '150115100023', '');
INSERT INTO `dz_zkz` VALUES ('446', '150115100024', '');
INSERT INTO `dz_zkz` VALUES ('447', '150115100025', '');
INSERT INTO `dz_zkz` VALUES ('448', '150115100026', '');
INSERT INTO `dz_zkz` VALUES ('449', '150115100027', '');
INSERT INTO `dz_zkz` VALUES ('450', '150115100028', '');
INSERT INTO `dz_zkz` VALUES ('451', '150115100029', '');
INSERT INTO `dz_zkz` VALUES ('452', '150115100030', '');
INSERT INTO `dz_zkz` VALUES ('453', '150115100031', '');
INSERT INTO `dz_zkz` VALUES ('454', '150115100032', '');
INSERT INTO `dz_zkz` VALUES ('455', '150115100033', '');
INSERT INTO `dz_zkz` VALUES ('456', '150115100034', '');
INSERT INTO `dz_zkz` VALUES ('457', '150115100035', '');
INSERT INTO `dz_zkz` VALUES ('458', '150115100036', '');
INSERT INTO `dz_zkz` VALUES ('459', '150115100037', '');
INSERT INTO `dz_zkz` VALUES ('460', '150115100038', '');
INSERT INTO `dz_zkz` VALUES ('461', '150115100039', '');
INSERT INTO `dz_zkz` VALUES ('462', '150115100040', '');
INSERT INTO `dz_zkz` VALUES ('463', '150115100041', '');
INSERT INTO `dz_zkz` VALUES ('464', '150115100042', '');
INSERT INTO `dz_zkz` VALUES ('465', '150115100043', '');
INSERT INTO `dz_zkz` VALUES ('466', '150115100044', '');
INSERT INTO `dz_zkz` VALUES ('467', '150115100045', '');
INSERT INTO `dz_zkz` VALUES ('468', '150115100046', '');
INSERT INTO `dz_zkz` VALUES ('469', '150115100047', '');
INSERT INTO `dz_zkz` VALUES ('470', '150115100048', '');
INSERT INTO `dz_zkz` VALUES ('471', '150115100049', '');
INSERT INTO `dz_zkz` VALUES ('472', '150115100050', '');
INSERT INTO `dz_zkz` VALUES ('473', '201400001', '');
INSERT INTO `dz_zkz` VALUES ('474', '201400002', '');
INSERT INTO `dz_zkz` VALUES ('475', '201400003', '');
INSERT INTO `dz_zkz` VALUES ('476', '201400004', '');
INSERT INTO `dz_zkz` VALUES ('477', null, '');

-- ----------------------------
-- Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(255) DEFAULT NULL,
  `m_tel` varchar(255) DEFAULT NULL,
  `m_fax` varchar(255) DEFAULT NULL,
  `m_email` varchar(255) DEFAULT NULL,
  `m_company` varchar(255) DEFAULT NULL,
  `m_address` varchar(255) DEFAULT NULL,
  `m_title` varchar(255) DEFAULT NULL,
  `m_content` text,
  `m_date` datetime DEFAULT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', '测试', '0755-12345678', '', 'abc@qq.com', '', '', '', '留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容留言测试内容', '2014-10-29 10:20:29');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_code` varchar(50) DEFAULT NULL,
  `o_user` varchar(50) DEFAULT NULL,
  `o_user_id` smallint(6) DEFAULT '0',
  `o_amount` decimal(10,1) DEFAULT '0.0',
  `o_zk` decimal(2,1) DEFAULT '0.0',
  `o_coupon` varchar(50) DEFAULT NULL,
  `o_status` tinyint(4) DEFAULT '0',
  `o_shipment` tinyint(4) DEFAULT '0',
  `o_delivery` text,
  `o_name` varchar(50) DEFAULT NULL,
  `o_tel` varchar(50) DEFAULT NULL,
  `o_address` varchar(255) DEFAULT NULL,
  `o_content` text,
  `o_date` datetime DEFAULT NULL,
  `o_products` smallint(6) DEFAULT '0',
  `o_leibie` smallint(6) DEFAULT '0',
  `o_dengji` smallint(6) DEFAULT '0',
  `old_zkz` varchar(255) DEFAULT NULL,
  `shengma` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM AUTO_INCREMENT=490 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('133', '150115100282', '64', '64', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-15 21:53:39', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('134', '150115100239', '58', '58', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-15 22:01:35', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('137', '150115100238', '65', '65', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-15 22:46:09', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('138', '150115100237', '56', '56', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-15 23:25:07', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('139', '', '67', '67', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-16 09:50:26', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('142', '150115100234', '70', '70', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 11:13:46', '27', '40', '41', ' 150114200118', ' 44');
INSERT INTO `orders` VALUES ('143', '', '74', '74', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-16 11:18:22', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('144', '150115100233', '73', '73', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 11:18:46', '27', '39', '41', ' 150114200127', ' 44');
INSERT INTO `orders` VALUES ('145', '150115100232', '75', '75', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 11:20:29', '27', '39', '41', ' 150114200109', ' 44');
INSERT INTO `orders` VALUES ('146', '150115100231', '76', '76', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 11:36:56', '27', '39', '41', ' 150114200132', ' 44');
INSERT INTO `orders` VALUES ('147', '150115100230', '79', '79', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 12:09:09', '27', '39', '41', ' 150114200122', ' 44');
INSERT INTO `orders` VALUES ('148', '150115100229', '69', '69', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 12:11:31', '27', '39', '41', ' 150114200131', ' 44');
INSERT INTO `orders` VALUES ('149', '150115100228', '77', '77', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 12:12:37', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('150', '150115100227', '80', '80', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 13:01:28', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('140', '150115100236', '71', '71', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 11:09:29', '27', '39', '41', ' 150114200116', ' 44');
INSERT INTO `orders` VALUES ('141', '150115100235', '72', '72', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 11:13:04', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('132', '150115100240', '59', '59', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-15 20:45:05', '27', '40', '41', ' 150114200138', ' 44');
INSERT INTO `orders` VALUES ('127', '', '43', '43', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-13 00:32:21', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('128', '150115100241', '50', '50', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-13 13:27:15', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('130', '', '53', '53', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-13 21:53:15', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('151', '150115100226', '84', '84', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 13:07:58', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('152', '150115100225', '81', '81', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 13:09:51', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('153', '150115100224', '83', '83', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 13:13:15', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('154', '150115100223', '85', '85', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 13:15:31', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('155', '150115100274', '87', '87', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 13:22:09', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('344', '150115100107', '306', '306', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 22:21:32', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('157', '150115100222', '90', '90', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 13:40:55', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('158', '150115100221', '89', '89', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 13:43:44', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('159', '', '92', '92', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-16 13:46:18', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('160', '150115100220', '93', '93', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 13:49:09', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('161', '150115100219', '94', '94', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 13:56:15', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('168', '150115100262', '103', '103', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 18:58:20', '27', '39', '41', ' 150114200054', ' 44');
INSERT INTO `orders` VALUES ('163', '150115100218', '98', '98', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 14:32:52', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('164', '150115100217', '97', '97', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 14:50:41', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('165', '150115100216', '100', '100', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 15:08:52', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('166', '150115100281', '66', '66', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 15:42:33', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('167', '150115100215', '102', '102', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 16:17:06', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('169', '150115100214', '63', '63', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 19:32:00', '27', '39', '41', ' 150114200196', ' 44');
INSERT INTO `orders` VALUES ('170', '150115100213', '96', '96', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 19:57:56', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('171', '150115100212', '107', '107', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 20:13:52', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('172', '150115100211', '108', '108', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 20:24:08', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('173', '', '105', '105', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-16 20:27:33', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('174', '150115100210', '109', '109', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 20:29:05', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('175', '150115100209', '110', '110', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 20:34:32', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('176', '150115100208', '106', '106', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 21:17:38', '27', '40', '41', ' 150114200166', ' 44');
INSERT INTO `orders` VALUES ('177', '150115100207', '112', '112', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 21:31:53', '27', '39', '41', ' 150114200169', ' 44');
INSERT INTO `orders` VALUES ('178', '150115100206', '114', '114', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 21:40:42', '27', '39', '41', ' 150114200168', ' 44');
INSERT INTO `orders` VALUES ('179', '150115100205', '115', '115', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 21:47:32', '27', '39', '41', ' 150114200037', ' 44');
INSERT INTO `orders` VALUES ('180', '150115100204', '116', '116', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 22:06:37', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('181', '150115100263', '117', '117', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 22:18:13', '27', '40', '41', ' 150114200053', ' 44');
INSERT INTO `orders` VALUES ('182', '150115100203', '118', '118', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 22:22:35', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('183', '150115100202', '119', '119', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 22:44:08', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('184', '150115100201', '121', '121', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 23:25:02', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('185', '150115100251', '120', '120', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-16 23:31:51', '27', '39', '41', ' 150114200064', ' 44');
INSERT INTO `orders` VALUES ('186', '150115100200', '122', '122', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 00:27:04', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('187', '', '124', '124', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-17 10:30:33', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('188', '150115100199', '125', '125', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 12:52:05', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('189', '150115100198', '126', '126', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 13:09:35', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('190', '150115100197', '127', '127', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 13:11:27', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('193', '150115100196', '86', '86', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 19:23:39', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('194', '150115100195', '131', '131', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 19:23:59', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('195', '150115100194', '135', '135', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 20:32:39', '27', '38', '41', '', ' 44');
INSERT INTO `orders` VALUES ('196', '150115100258', '137', '137', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 20:57:31', '27', '39', '41', ' 150114200157', ' 44');
INSERT INTO `orders` VALUES ('208', '150115100190', '153', '153', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 23:21:35', '27', '40', '41', ' 150114200167', ' 44');
INSERT INTO `orders` VALUES ('198', '150115100253', '140', '140', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 21:12:07', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('199', '150115100255', '141', '141', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 21:20:40', '27', '39', '41', ' 150114200148', ' 44');
INSERT INTO `orders` VALUES ('200', '150115100264', '142', '142', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 21:37:24', '27', '39', '41', ' 150114200059', ' 44');
INSERT INTO `orders` VALUES ('204', '150115100192', '134', '134', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 22:18:19', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('203', '150115100193', '146', '146', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 22:13:03', '27', '40', '41', ' 150114200011', ' 44');
INSERT INTO `orders` VALUES ('217', '150115100187', '157', '157', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 10:57:21', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('265', '150115100244', '136', '136', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 21:38:06', '27', '38', '41', '', ' 44');
INSERT INTO `orders` VALUES ('207', '150115100191', '150', '150', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 22:58:21', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('209', '150115100189', '154', '154', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 23:33:49', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('210', '150115100188', '155', '155', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-17 23:46:11', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('221', '150115100185', '161', '161', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 12:08:51', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('220', '150115100186', '160', '160', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 11:47:08', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('226', '', '145', '145', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-18 12:39:28', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('228', '150115100184', '113', '113', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 13:01:16', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('229', '150115100183', '163', '163', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 13:08:29', '27', '40', '41', ' 150114200136', ' 44');
INSERT INTO `orders` VALUES ('230', '150115100182', '149', '149', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 13:20:32', '27', '39', '41', ' 150114200021', ' 44');
INSERT INTO `orders` VALUES ('231', '150115100181', '167', '167', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 13:36:00', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('232', '150115100180', '165', '165', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 13:37:38', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('233', '150115100179', '164', '164', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 13:45:55', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('234', '150115100178', '159', '159', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 13:47:50', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('235', '150115100177', '166', '166', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 13:51:37', '27', '38', '41', null, ' 44');
INSERT INTO `orders` VALUES ('236', '150115100176', '169', '169', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 13:51:56', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('237', '150115100243', '171', '171', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 14:10:29', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('238', '150115100175', '158', '158', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 14:17:05', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('239', '', '104', '104', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-18 17:25:02', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('242', '', '175', '175', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-18 19:25:11', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('243', '150115100259', '179', '179', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 20:02:28', '27', '39', '41', ' 150114200150', ' 44');
INSERT INTO `orders` VALUES ('244', '150115100174', '180', '180', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 20:26:34', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('245', '150115100173', '183', '183', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 22:27:10', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('246', '150115100172', '184', '184', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-18 22:52:23', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('248', '150115100256', '186', '186', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 08:11:42', '27', '39', '41', ' 150114200153', ' 44');
INSERT INTO `orders` VALUES ('249', '150115100265', '187', '187', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 11:06:17', '27', '39', '41', ' 150114200056', ' 44');
INSERT INTO `orders` VALUES ('251', '150115100261', '189', '189', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 11:15:35', '27', '39', '41', ' 150114200055', ' 44');
INSERT INTO `orders` VALUES ('252', '150115100260', '190', '190', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 11:22:54', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('253', '150115100171', '191', '191', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 12:20:55', '27', '39', '41', ' 150114200094', ' 44');
INSERT INTO `orders` VALUES ('254', '150115100170', '194', '194', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 15:11:51', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('255', '', '195', '195', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-19 15:22:01', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('257', '150115100169', '193', '193', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 16:40:55', '27', '39', '41', ' 150114200092', ' 44');
INSERT INTO `orders` VALUES ('258', '150115100168', '196', '196', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 17:05:01', '27', '39', '41', ' 150114200103', ' 44');
INSERT INTO `orders` VALUES ('259', '150115100167', '199', '199', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 19:12:55', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('260', '150115100166', '139', '139', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 19:37:54', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('261', '150115100257', '200', '200', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 19:38:30', '27', '40', '41', ' 150114200064', ' 44');
INSERT INTO `orders` VALUES ('262', '150115100248', '197', '197', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 20:11:15', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('263', '150115100247', '202', '202', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 20:58:04', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('264', '150115100254', '206', '206', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 21:30:25', '27', '39', '41', ' 150114200152', ' 44');
INSERT INTO `orders` VALUES ('266', '150115100165', '205', '205', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 21:42:14', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('267', '150115100164', '209', '209', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 22:01:04', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('268', '150115100163', '185', '185', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 22:09:43', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('269', '150115100245', '216', '216', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 22:14:46', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('270', '150115100162', '220', '220', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 22:29:34', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('271', '150115100242', '170', '170', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 22:35:45', '27', '38', '41', '', ' 44');
INSERT INTO `orders` VALUES ('272', '150115100252', '221', '221', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 22:38:53', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('273', '150115100249', '222', '222', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-19 22:54:43', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('274', '150115100161', '227', '227', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 13:09:30', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('275', '150115100160', '231', '231', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 14:19:31', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('481', '150115100001', '234', '234', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-31 09:55:16', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('277', '150115100159', '207', '207', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 15:15:11', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('278', '150115100158', '208', '208', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 15:19:51', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('279', '150115100157', '210', '210', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 15:21:55', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('280', '150115100156', '212', '212', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 15:23:34', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('281', '150115100155', '213', '213', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 15:25:07', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('282', '150115100154', '214', '214', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 15:27:03', '27', '39', '40', ' 150114200083', ' 44');
INSERT INTO `orders` VALUES ('283', '150115100153', '215', '215', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 15:29:10', '27', '39', '39', ' 150114200084', ' 44');
INSERT INTO `orders` VALUES ('284', '150115100152', '217', '217', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 15:30:47', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('285', '150115100151', '236', '236', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 16:20:39', '27', '39', '41', ' 150114200027', ' 44');
INSERT INTO `orders` VALUES ('286', '150115100150', '239', '239', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 17:36:11', '27', '39', '41', ' 150114200013', ' 44');
INSERT INTO `orders` VALUES ('288', '', '244', '244', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-20 19:43:23', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('289', '150115100149', '246', '246', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 20:52:50', '27', '39', '41', ' 150114200008', ' 44');
INSERT INTO `orders` VALUES ('290', '150115100148', '247', '247', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 21:00:07', '27', '39', '41', ' 150114200009', ' 44');
INSERT INTO `orders` VALUES ('291', '150115100147', '248', '248', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 22:00:45', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('292', '150115100146', '226', '226', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 22:16:28', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('293', '150115100145', '250', '250', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 22:30:22', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('294', '150115100144', '78', '78', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 22:32:56', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('295', '150115100143', '251', '251', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 22:44:19', '27', '39', '41', ' 150114200012', ' 44');
INSERT INTO `orders` VALUES ('463', '', '429', '429', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-29 21:51:06', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('297', '150115100142', '253', '253', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-20 23:50:09', '27', '39', '41', ' 150114200105', ' 44');
INSERT INTO `orders` VALUES ('465', '150115100010', '428', '428', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-29 22:50:57', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('301', '150115100141', '178', '178', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 12:21:08', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('302', '150115100140', '235', '235', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 12:56:28', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('303', '150115100139', '256', '256', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 13:37:30', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('304', '150115100138', '68', '68', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 13:41:32', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('305', '150115100137', '144', '144', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 13:48:30', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('458', '150115100014', '423', '423', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-29 11:17:19', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('308', '150115100136', '262', '262', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 16:57:28', '27', '39', '41', ' 150114200025', ' 44');
INSERT INTO `orders` VALUES ('309', '150115100246', '257', '257', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 17:24:09', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('310', '150115100135', '263', '263', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 18:01:12', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('311', '150115100134', '228', '228', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 18:44:28', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('312', '150115100133', '264', '264', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 18:58:13', '27', '39', '41', ' 150114200024', ' 44');
INSERT INTO `orders` VALUES ('313', '150115100132', '260', '260', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 19:28:11', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('314', '150115100131', '265', '265', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 21:18:22', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('315', '150115100130', '266', '266', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 21:26:50', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('316', '150115100129', '229', '229', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-21 21:38:20', '27', '39', '41', ' 150114200018', ' 44');
INSERT INTO `orders` VALUES ('317', '150115100128', '174', '174', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-22 10:41:50', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('318', '150115100288', '272', '272', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-22 13:10:18', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('319', '150115100127', '219', '219', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-22 16:10:08', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('320', '150115100126', '268', '268', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-22 17:22:01', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('321', '150115100125', '276', '276', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-22 17:56:44', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('322', '150115100124', '225', '225', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-22 20:30:19', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('323', '150115100123', '278', '278', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-22 21:12:31', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('324', '150115100122', '279', '279', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-22 22:41:27', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('325', '150115100121', '282', '282', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-23 13:28:15', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('326', '150115100120', '283', '283', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-23 13:33:31', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('327', '150115100119', '245', '245', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-23 19:44:13', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('328', '150115100118', '287', '287', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-23 20:18:12', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('329', '', '285', '285', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-23 23:49:46', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('330', '150115100117', '293', '293', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 11:43:57', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('331', '150115100116', '294', '294', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 12:12:29', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('332', '150115100250', '295', '295', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 12:18:11', '27', '39', '41', ' 150114200076', ' 44');
INSERT INTO `orders` VALUES ('333', '150115100115', '297', '297', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 13:56:54', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('334', '150115100114', '298', '298', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 17:38:33', '27', '39', '41', ' 150114200104', ' 44');
INSERT INTO `orders` VALUES ('462', '', '399', '399', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-29 17:57:43', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('464', '', '430', '430', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-29 22:02:52', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('337', '150115100113', '303', '303', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 19:53:35', '27', '39', '41', ' 150114200175', ' 44');
INSERT INTO `orders` VALUES ('338', '150115100112', '255', '255', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 20:36:43', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('339', '150115100111', '304', '304', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 20:37:32', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('340', '150115100110', '292', '292', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 21:30:00', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('341', '150115100109', '284', '284', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 21:51:01', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('342', '150115100108', '271', '271', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 21:59:14', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('461', '150115100011', '425', '425', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-29 15:41:46', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('459', '150115100013', '181', '181', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-29 13:04:22', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('346', '150115100106', '261', '261', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-24 23:45:46', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('347', '', '308', '308', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-25 09:35:23', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('348', '150115100105', '192', '192', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 09:36:47', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('460', '150115100012', '305', '305', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-29 13:45:42', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('350', '150115100279', '39', '39', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 11:25:56', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('351', '150115100268', '313', '313', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 12:46:22', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('352', '150115100269', '314', '314', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 12:54:11', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('353', '150115100271', '315', '315', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 12:58:30', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('354', '150115100270', '316', '316', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 13:02:40', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('355', '150115100104', '317', '317', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 13:12:27', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('430', '150115100034', '403', '403', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 13:24:52', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('357', '150115100103', '321', '321', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 14:18:43', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('358', '150115100102', '322', '322', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 14:32:48', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('359', '150115100101', '318', '318', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 14:41:20', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('423', '150115100041', '286', '286', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 15:03:20', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('361', '150115100100', '326', '326', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:07:57', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('362', '150115100099', '325', '325', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:08:38', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('363', '150115100098', '323', '323', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:12:15', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('364', '150115100097', '339', '339', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:17:27', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('365', '150115100096', '330', '330', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:18:41', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('366', '150115100095', '333', '333', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:19:05', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('367', '150115100094', '336', '336', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:19:31', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('368', '150115100093', '328', '328', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:22:36', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('369', '150115100092', '329', '329', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:24:08', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('370', '150115100091', '345', '345', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:27:57', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('371', '150115100090', '346', '346', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:30:17', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('372', '150115100089', '341', '341', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:31:33', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('373', '150115100088', '334', '334', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:33:24', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('374', '150115100087', '348', '348', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:34:35', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('375', '150115100086', '353', '353', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:38:29', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('376', '150115100085', '349', '349', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:39:19', '27', '39', '40', ' 150114200030', ' 44');
INSERT INTO `orders` VALUES ('377', '150115100084', '356', '356', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:41:54', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('378', '150115100083', '352', '352', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:43:41', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('379', '150115100082', '350', '350', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:43:58', '27', '39', '39', ' 150114200031', ' 44');
INSERT INTO `orders` VALUES ('380', '150115100081', '331', '331', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:45:18', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('381', '150115100080', '358', '358', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:45:30', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('382', '150115100079', '355', '355', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:45:38', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('383', '150115100078', '354', '354', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:46:49', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('384', '150115100077', '327', '327', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:49:14', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('385', '150115100076', '357', '357', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:49:15', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('386', '150115100075', '347', '347', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:49:22', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('387', '150115100074', '335', '335', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:51:17', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('388', '150115100073', '342', '342', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:51:22', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('389', '150115100072', '359', '359', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:52:48', '27', '39', '40', ' 150114200033', ' 44');
INSERT INTO `orders` VALUES ('390', '150115100071', '343', '343', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:53:56', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('391', '150115100070', '340', '340', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:56:08', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('392', '150115100069', '351', '351', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:56:21', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('393', '150115100068', '332', '332', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:56:38', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('394', '150115100067', '361', '361', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 15:57:49', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('395', '150115100066', '360', '360', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 16:00:23', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('396', '150115100065', '362', '362', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 16:01:43', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('397', '150115100064', '338', '338', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 16:02:08', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('398', '150115100063', '344', '344', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 16:02:20', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('399', '150115100062', '364', '364', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 16:12:32', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('400', '150115100061', '365', '365', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 16:26:15', '27', '39', '40', ' 150114200035', ' 44');
INSERT INTO `orders` VALUES ('401', '150115100060', '366', '366', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 16:30:37', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('402', '150115100059', '368', '368', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 16:34:10', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('403', '150115100058', '367', '367', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 16:37:03', '27', '39', '41', ' 150114200107', ' 44');
INSERT INTO `orders` VALUES ('404', '150115100057', '369', '369', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 16:51:56', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('405', '150115100056', '370', '370', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 17:14:29', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('406', '150115100055', '372', '372', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 17:22:04', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('407', '150115100054', '378', '378', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 21:43:53', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('408', '150115100053', '373', '373', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 21:53:24', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('409', '150115100052', '379', '379', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 22:32:56', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('410', '150115100051', '376', '376', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 22:35:53', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('411', '150115100050', '296', '296', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-25 22:56:27', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('412', '150115100049', '375', '375', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 08:15:06', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('413', '150115100048', '386', '386', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 09:18:32', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('434', '150115100032', '387', '387', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 20:51:09', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('435', '150115100031', '388', '388', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 20:53:56', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('416', '150115100047', '389', '389', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 09:31:15', '27', '38', '39', ' ', ' 44');
INSERT INTO `orders` VALUES ('417', '150115100046', '182', '182', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 12:38:15', '27', '40', '41', ' 150114200173', ' 44');
INSERT INTO `orders` VALUES ('418', '150115100045', '320', '320', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 12:40:39', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('419', '150115100044', '382', '382', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 12:52:17', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('420', '150115100043', '374', '374', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 13:03:03', '27', '39', '41', ' 150114200100', ' 44');
INSERT INTO `orders` VALUES ('421', '150115100042', '392', '392', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 13:37:35', '27', '39', '41', ' 150114200101', ' 44');
INSERT INTO `orders` VALUES ('429', '150115100035', '398', '398', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 19:22:27', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('424', '150115100040', '394', '394', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 15:34:38', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('425', '150115100039', '274', '274', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 15:36:59', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('426', '150115100038', '396', '396', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 15:40:04', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('427', '150115100037', '395', '395', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 15:45:54', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('428', '150115100036', '381', '381', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-26 16:45:38', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('431', '150115100033', '406', '406', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 16:20:32', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('432', '150115100272', '404', '404', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 16:44:10', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('433', '', '407', '407', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-27 19:31:28', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('436', '150115100030', '289', '289', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 21:15:25', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('437', '150115100029', '411', '411', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 22:11:41', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('438', '150115100028', '281', '281', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 23:13:52', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('439', '150115100027', '371', '371', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 23:15:52', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('441', '150115100026', '377', '377', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 23:26:17', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('442', '150115100025', '390', '390', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 23:30:46', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('443', '150115100275', '290', '290', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 23:38:34', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('444', '150115100024', '380', '380', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-27 23:41:27', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('445', '150115100023', '397', '397', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-28 00:04:50', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('447', '150115100022', '415', '415', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-28 12:49:32', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('448', '150115100021', '391', '391', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-28 12:59:07', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('449', '150115100020', '409', '409', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-28 13:02:14', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('450', '150115100019', '410', '410', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-28 13:10:54', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('451', '150115100018', '408', '408', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-28 14:50:54', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('452', '150115100280', '418', '418', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-28 16:40:31', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('453', '150115100017', '413', '413', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-28 19:32:59', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('454', '150115100016', '421', '421', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-28 19:49:37', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('455', '', '402', '402', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-28 21:49:45', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('456', '150115100015', '422', '422', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-28 22:53:53', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('466', '150115100009', '280', '280', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-30 09:18:00', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('467', '150115100008', '427', '427', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-30 09:39:14', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('468', '150115100267', '432', '432', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-30 13:29:36', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('469', '150115100007', '267', '267', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-30 15:09:02', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('470', '150115100006', '433', '433', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-30 15:13:12', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('471', '150115100005', '99', '99', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-30 15:34:12', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('472', '150115100273', '417', '417', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-30 15:40:59', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('473', '150115100004', '434', '434', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-30 15:56:22', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('474', '150115100003', '431', '431', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-30 15:59:54', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('480', '150115100002', '232', '232', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-31 09:51:53', '27', '39', '41', ' 150114200015', ' 44');
INSERT INTO `orders` VALUES ('476', '150115100266', '437', '437', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-30 19:22:27', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('478', '', '426', '426', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-30 21:37:12', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('479', '', '439', '439', '0.0', '0.0', null, '0', '0', null, null, null, null, null, '2014-12-30 22:15:04', '27', '38', '40', ' ', ' 44');
INSERT INTO `orders` VALUES ('482', '150115100276', '441', '441', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-31 11:03:39', '27', '39', '41', ' 150114200189', ' 44');
INSERT INTO `orders` VALUES ('483', '150115100277', '442', '442', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-31 11:09:13', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('484', '150115100278', '443', '443', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-31 11:10:07', '27', '39', '41', ' 150114200057', ' 44');
INSERT INTO `orders` VALUES ('485', '150115100283', '405', '405', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-31 11:10:34', '27', '38', '38', ' ', ' 44');
INSERT INTO `orders` VALUES ('486', '150115100284', '218', '218', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-31 11:59:09', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('487', '150115100285', '233', '233', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-31 16:33:35', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('488', '150115100286', '400', '400', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-31 16:35:41', '27', '38', '41', ' ', ' 44');
INSERT INTO `orders` VALUES ('489', '150115100287', '424', '424', '0.0', '0.0', null, '1', '0', null, null, null, null, null, '2014-12-31 16:37:48', '27', '38', '41', ' ', ' 44');

-- ----------------------------
-- Table structure for `orders_products`
-- ----------------------------
DROP TABLE IF EXISTS `orders_products`;
CREATE TABLE `orders_products` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_code` varchar(50) DEFAULT NULL,
  `o_user` varchar(50) DEFAULT NULL,
  `o_user_id` smallint(6) DEFAULT '0',
  `o_products_type` tinyint(4) DEFAULT '0',
  `o_products_id` int(11) DEFAULT '0',
  `o_products_name` varchar(255) DEFAULT NULL,
  `o_products_image` varchar(50) DEFAULT NULL,
  `o_products_price` smallint(6) DEFAULT '0',
  `o_products_quantity` smallint(6) DEFAULT '0',
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders_products
-- ----------------------------

-- ----------------------------
-- Table structure for `orders_products_kw`
-- ----------------------------
DROP TABLE IF EXISTS `orders_products_kw`;
CREATE TABLE `orders_products_kw` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_code` varchar(50) DEFAULT NULL,
  `o_orders_id` int(11) DEFAULT NULL,
  `o_products2_type` tinyint(4) DEFAULT '0',
  `o_products2_id` int(11) DEFAULT '0',
  `o_products2_name` varchar(255) DEFAULT NULL,
  `o_products2_image` varchar(50) DEFAULT NULL,
  `o_products2_price` smallint(6) DEFAULT '0',
  `o_products2_quantity` smallint(6) DEFAULT '0',
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders_products_kw
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_user` varchar(50) DEFAULT NULL,
  `u_pass` varchar(50) DEFAULT NULL,
  `u_pass_code` varchar(50) DEFAULT NULL,
  `u_email` varchar(50) DEFAULT NULL,
  `u_name` varchar(50) DEFAULT NULL,
  `u_name_old` varchar(255) DEFAULT NULL,
  `u_zk_num` varchar(255) DEFAULT NULL,
  `u_czby_date` date DEFAULT NULL,
  `u_zj_num` varchar(255) DEFAULT NULL,
  `u_birth` date DEFAULT NULL,
  `u_sex` smallint(6) DEFAULT NULL,
  `u_image` varchar(255) DEFAULT NULL,
  `u_qq` varchar(50) DEFAULT NULL,
  `u_address_hk` varchar(255) DEFAULT NULL,
  `u_address_city` varchar(50) DEFAULT NULL COMMENT '市',
  `u_address_xian` varchar(255) DEFAULT NULL,
  `u_huji` varchar(255) DEFAULT NULL COMMENT '户籍类型',
  `u_minzu` varchar(255) DEFAULT NULL COMMENT '民族',
  `u_zzmm` varchar(255) DEFAULT NULL COMMENT '政治面貌',
  `u_at_school` varchar(255) DEFAULT NULL COMMENT '现就读学校',
  `u_vocational` varchar(255) DEFAULT NULL,
  `u_applyfor` varchar(255) DEFAULT NULL,
  `u_tel` varchar(50) DEFAULT NULL,
  `u_address` varchar(255) DEFAULT NULL,
  `u_addressee` varchar(255) DEFAULT NULL COMMENT '收件人',
  `u_code` varchar(255) DEFAULT NULL COMMENT '邮政编码',
  `u_skills` varchar(255) DEFAULT NULL COMMENT '技能证书名称',
  `u_skills_grade` varchar(255) DEFAULT NULL COMMENT '技能证书等级',
  `u_match` varchar(255) DEFAULT NULL COMMENT '技能比赛名称',
  `u_match_grade` varchar(255) DEFAULT NULL COMMENT '技能比赛获奖等级',
  `u_ip` varchar(50) DEFAULT NULL,
  `u_time` date DEFAULT NULL,
  `u_last_ip` varchar(50) DEFAULT NULL,
  `u_last_time` date DEFAULT NULL,
  `u_date` date DEFAULT NULL,
  `u_thumb_image` varchar(255) DEFAULT NULL,
  `u_resume1_date_star` date DEFAULT NULL COMMENT '个人简历起时间',
  `u_resume1_date_end` date DEFAULT NULL COMMENT '个人简历至时间',
  `u_resume1_content` varchar(255) DEFAULT NULL COMMENT '在何地、何单位学习',
  `u_resume1_position` varchar(255) DEFAULT NULL COMMENT '担任职务',
  `u_resume2_date_star` date DEFAULT NULL,
  `u_resume2_date_end` date DEFAULT NULL,
  `u_resume2_content` varchar(255) DEFAULT NULL,
  `u_resume2_position` varchar(255) DEFAULT NULL,
  `u_resume3_date_star` date DEFAULT NULL,
  `u_resume3_date_end` date DEFAULT NULL,
  `u_resume3_content` varchar(255) DEFAULT NULL,
  `u_resume3_position` varchar(255) DEFAULT NULL,
  `u_members1_name` varchar(255) DEFAULT NULL COMMENT '主要家庭成员姓名',
  `u_members1_relationship` varchar(255) DEFAULT NULL COMMENT '关 系',
  `u_members1_work` varchar(255) DEFAULT NULL COMMENT '单位',
  `u_members1_chief` varchar(255) DEFAULT NULL COMMENT '职务',
  `u_members2_name` varchar(255) DEFAULT NULL,
  `u_members2_relationship` varchar(255) DEFAULT NULL,
  `u_members2_work` varchar(255) DEFAULT NULL,
  `u_members2_chief` varchar(255) DEFAULT NULL,
  `u_members3_name` varchar(255) DEFAULT NULL,
  `u_members3_relationship` varchar(255) DEFAULT NULL,
  `u_members3_work` varchar(255) DEFAULT NULL,
  `u_members3_chief` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=457 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('456', 'company', '25f9e794323b453885f5181f1b624d0b', null, '', '', '', '', '0000-00-00', '', '1970-01-01', '1', null, null, '', '', '', '', '', '', '', '', '', '138000222', '', '', '', '', '', '', '', '::1', '2015-05-11', null, null, '2015-05-11', null, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `user` VALUES ('455', 'mpxq22', '62a16b2a24c24df3bdaa7808c8c5f048', null, '', '测试姓　 名', '曾用名', '073025101', '2015-05-11', '445381198703090856', '1987-03-09', '1', 'upload_pic/yt_1431285438.jpg', '', '', '深圳', '宝安', '0', '1', '0', '现就读学校', '中职专业', '报考专业', '13556843452', '深圳XXXXXXXXX', '收件人', '518000', '技能证书名称', '等级', '技能比赛名称', '获奖等级', '::1', '2015-05-11', '::1', '2015-05-11', '2015-05-10', 'upload_pic/xt_1431285438.jpg', '2015-05-11', '2015-05-19', '在何地、何单位学习1', '担任职务1', '2015-05-21', '2015-05-28', '在何地、何单位学习2', '担任职务2', '2015-05-26', '2015-05-30', '在何地、何单位学习3', '担任职务3', '姓 名1', '关 系1', '单 位1', '职 务1', '姓 名2', '关 系2', '单 位2', '职 务2', '姓 名3', '关 系3', '单 位3', '职 务3');

-- ----------------------------
-- Table structure for `user_address`
-- ----------------------------
DROP TABLE IF EXISTS `user_address`;
CREATE TABLE `user_address` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_user_id` smallint(6) DEFAULT NULL,
  `u_default` tinyint(4) DEFAULT '0',
  `u_name` varchar(50) DEFAULT NULL,
  `u_tel` varchar(50) DEFAULT NULL,
  `u_post` varchar(50) DEFAULT NULL,
  `u_province` smallint(6) DEFAULT '0',
  `u_city` smallint(6) DEFAULT '0',
  `u_district` smallint(6) DEFAULT '0',
  `u_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_address
-- ----------------------------
INSERT INTO `user_address` VALUES ('1', '1', '1', '刘坤', '13873801234', '518000', '19', '199', '1770', '测试地址测试地址测试地址');

-- ----------------------------
-- Table structure for `user_coupon`
-- ----------------------------
DROP TABLE IF EXISTS `user_coupon`;
CREATE TABLE `user_coupon` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_user` varchar(50) DEFAULT NULL,
  `u_user_id` smallint(6) DEFAULT '0',
  `u_code` varchar(255) DEFAULT NULL,
  `u_used` tinyint(4) DEFAULT '0',
  `u_name` varchar(50) DEFAULT NULL,
  `u_zk` decimal(2,1) DEFAULT '0.0',
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_coupon
-- ----------------------------
create table examination_room(
    id int primary key auto_increment,
    s_from_school varchar(255),
    s_school_num varchar(255),
    s_name varchar(255),
    s_sex varchar(255),
    s_id_card varchar(255),
    s_major varchar(255),
    s_want_major varchar(255),
    s_exam_subject varchar(255),
    s_id varchar(255),
    s_exam_venue varchar(255),
    s_exam_id varchar(255),
    s_seat_num varchar(255),
    s_exam_room varchar(255),
    s_exam_num varchar(255),
    s_exam_date varchar(255)
) charset="utf8";
