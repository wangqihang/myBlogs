/*
Navicat MySQL Data Transfer

Source Server         : connection
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : think_blog

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-08-20 09:26:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_admin
-- ----------------------------
DROP TABLE IF EXISTS `think_admin`;
CREATE TABLE `think_admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user` varchar(40) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `imgpath` varchar(100) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_admin
-- ----------------------------
INSERT INTO `think_admin` VALUES ('1', 'user1', 'xiaowang', '202cb962ac59075b964b07152d234b70', 'logo.jpg', '13333333333', '女', '18');
INSERT INTO `think_admin` VALUES ('2', 'user2', 'xiaoming', '202cb962ac59075b964b07152d234b70', '57b5a1e679ccb.jpg', '15555555555', '男', '19');
INSERT INTO `think_admin` VALUES ('3', 'user3', 'wangqihang', '202cb962ac59075b964b07152d234b70', '57b5a9397fe92.jpg', '15783172921', '男', '20');
INSERT INTO `think_admin` VALUES ('4', 'wangqihang', '王启航', 'e10adc3949ba59abbe56e057f20f883e', '57b6c30d18c09.jpg', '13783172921', '男', '18');
INSERT INTO `think_admin` VALUES ('6', 'user', '小小桑', 'c33367701511b4f6020ec61ded352059', '57b3cf6270a93.jpg', '13783172920', '女', '19');
INSERT INTO `think_admin` VALUES ('7', 'user4', '三月软件', 'e10adc3949ba59abbe56e057f20f883e', '57b161596ac25.jpg', '13783172929', '男', '10');
INSERT INTO `think_admin` VALUES ('8', 'user5', 'hell world', 'e10adc3949ba59abbe56e057f20f883e', '57b161596ac25.jpg', '13783172925', '男', '19');
INSERT INTO `think_admin` VALUES ('9', 'user6', 'wang', 'e10adc3949ba59abbe56e057f20f883e', '57b161596ac25.jpg', '13333333336', '男', '19');
INSERT INTO `think_admin` VALUES ('10', 'q', 'q', 'c4ca4238a0b923820dcc509a6f75849b', '57b161596ac25.jpg', '18311111111', '男', '1');
INSERT INTO `think_admin` VALUES ('11', 'xiaosang', 'xiaosang', '670b14728ad9902aecba32e22fa4f6bd', '57b161596ac25.jpg', '15224959446', '男', '12');

-- ----------------------------
-- Table structure for think_answer
-- ----------------------------
DROP TABLE IF EXISTS `think_answer`;
CREATE TABLE `think_answer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `reply_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `answer_id` int(10) NOT NULL,
  `answer_content` text,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_answer
-- ----------------------------
INSERT INTO `think_answer` VALUES ('45', '92', '6', '4', 'hello world!\nhello php!', '1471393771');
INSERT INTO `think_answer` VALUES ('46', '92', '6', '6', '5456141435131', '1471393793');
INSERT INTO `think_answer` VALUES ('69', '106', '4', '7', '还hello world', '1471515062');
INSERT INTO `think_answer` VALUES ('70', '106', '4', '4', 'hello', '1471515080');
INSERT INTO `think_answer` VALUES ('71', '108', '4', '4', '123', '1471519158');
INSERT INTO `think_answer` VALUES ('72', '108', '4', '4', '的风格和对方是个', '1471519177');
INSERT INTO `think_answer` VALUES ('73', '108', '4', '4', '发送到发送到', '1471519193');
INSERT INTO `think_answer` VALUES ('74', '82', '4', '4', '是打发斯蒂芬', '1471519220');
INSERT INTO `think_answer` VALUES ('75', '82', '4', '4', '电饭锅电饭锅', '1471519258');
INSERT INTO `think_answer` VALUES ('76', '82', '4', '4', '123456', '1471519269');
INSERT INTO `think_answer` VALUES ('77', '82', '4', '4', '还都是借口', '1471519284');
INSERT INTO `think_answer` VALUES ('78', '123', '4', '4', '看大家看法', '1471519295');
INSERT INTO `think_answer` VALUES ('79', '99', '8', '4', '是是，不错', '1471519449');
INSERT INTO `think_answer` VALUES ('80', '98', '8', '4', '你的不对', '1471519470');
INSERT INTO `think_answer` VALUES ('90', '127', '8', '8', '你是谁？？？？？？？？？？？？？？', '1471520358');
INSERT INTO `think_answer` VALUES ('91', '127', '8', '8', '你好hello world', '1471520390');
INSERT INTO `think_answer` VALUES ('92', '127', '4', '8', '我叫博客园', '1471520614');
INSERT INTO `think_answer` VALUES ('93', '127', '6', '8', '我是小小桑', '1471520786');
INSERT INTO `think_answer` VALUES ('94', '127', '6', '4', '我是啊？、/、/、/、、？/?', '1471520847');
INSERT INTO `think_answer` VALUES ('95', '129', '2', '2', '冻死了快放假快乐', '1471522636');
INSERT INTO `think_answer` VALUES ('96', '129', '2', '2', '看到手机话费卡', '1471522645');
INSERT INTO `think_answer` VALUES ('97', '127', '2', '8', '速度快了附近开了地方', '1471522671');
INSERT INTO `think_answer` VALUES ('105', '106', '4', '7', '电话开机费', '1471528138');
INSERT INTO `think_answer` VALUES ('106', '127', '4', '8', 'lsdkjlfkj了空间上的看法', '1471529544');
INSERT INTO `think_answer` VALUES ('107', '136', '4', '4', '回复1', '1471593187');
INSERT INTO `think_answer` VALUES ('108', '139', '4', '4', 'hello world！', '1471604121');
INSERT INTO `think_answer` VALUES ('109', '140', '4', '4', '第三方接口了', '1471604326');
INSERT INTO `think_answer` VALUES ('110', '140', '4', '4', '是的发送到饭店大师傅', '1471604354');
INSERT INTO `think_answer` VALUES ('111', '141', '4', '4', '对啊！', '1471654036');

-- ----------------------------
-- Table structure for think_article
-- ----------------------------
DROP TABLE IF EXISTS `think_article`;
CREATE TABLE `think_article` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `hot` int(255) DEFAULT NULL,
  `content` text,
  `type` varchar(50) DEFAULT NULL,
  `time` varchar(15) DEFAULT NULL,
  `admin_id` int(10) DEFAULT NULL,
  `count` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_article
-- ----------------------------
INSERT INTO `think_article` VALUES ('2', '标题2你好', null, '<p>内容2好的接口上空间发挥空间按时的还款计划付款计划的开始就</p>', '其他', '1111111111', '4', '4');
INSERT INTO `think_article` VALUES ('3', '标题3', null, '内容3', 'php', '1234567890', '4', '0');
INSERT INTO `think_article` VALUES ('4', '标题hello ', null, '<p>快乐圣诞节福利是打开连接速度快了附近开了多久上课了的绿色开发接口连接啊可开机时都会付款计划开始的计划考试等级划分空间的环境看是贷款首付款计划的授课计划的机房环境肯定好看就发货等级划分空间都很困惑动画客户肯定就会看见后开机都会开机后打开就会开机后打开就会抠脚大汉开机发的还是客户反馈电话卡复活抠脚大汉开机凤凰健康的环境恢复快捷的回复开机后打开就会分开机后打开就的环境是否就看电视点击恢复计划单价点击恢复计划单价看接电话机房环境都会会圣诞节福利是打开连接速度快了附近开了多久上课了的绿色开发接口连接啊可开机时都会付款计划开始的计划考试等级划分空间的环境看是贷款首付款计划的授课计划的机房环境肯定好看就发货等级划分空间都很困惑动画客户肯定就会看见后开机都会开机后打开就会开机后打开就会抠脚大汉开机发的还是客户反馈电话卡复活抠脚大汉开机凤凰健康的环境恢复快捷的回复开机后打开就会分开机后打开就的环境是否就看电视点击恢复计划单价点击恢复计划单价看接电话机房环境都会会圣诞节福利是打开连接速度快了附近开了多久上课了的绿色开发接口连接啊可开机时都会付款计划开始的计划考试等级划分空间的环境看是贷款首付款计划的授课计划的机房环境肯定好看就发货等级划分空间都很困惑动画客户肯定就会看见后开机都会开机后打开就会开机后打开就会抠脚大汉开机发的还是客户反馈电话卡复活抠脚大汉开机凤凰健康的环境恢复快捷的回复开机后打开就会分开机后打开就的环境是否就看电视点击恢复计划单价点击恢复计划单价看接电话机房环境都会会圣诞节福利是打开连接速度快了附近开了多久上课了的绿色开发接口连接啊可开机时都会付款计划开始的计划考试等级划分空间的环境看是贷款首付款计划的授课计划的机房环境肯定好看就发货等级划分空间都很困惑动画客户肯定就会看见后开机都会开机后打开就会开机后打开就会抠脚大汉开机发的还是客户反馈电话卡复活抠脚大汉开机凤凰健康的环境恢复快捷的回复开机后打开就会分开机后打开就的环境是否就看电视点击恢复计划单价点击恢复计划单价看接电话机房环境都会会圣诞节福利是打开连接速度快了附近开了多久上课了的绿色开发接口连接啊可开机时都会付款计划开始的计划考试等级划分空间的环境看是贷款首付款计划的授课计划的机房环境肯定好看就发货等级划分空间都很困惑动画客户肯定就会看见后开机都会开机后打开就会开机后打开就会抠脚大汉开机发的还是客户反馈电话卡复活抠脚大汉开机凤凰健康的环境恢复快捷的回复开机后打开就会分开机后打开就的环境是否就看电视点击恢复计划单价点击恢复计划单价看接电话机房环境都会会圣诞节福利是打开连接速度快了附近开了多久上课了的绿色开发接口连接啊可开机时都会付款计划开始的计划考试等级划分空间的环境看是贷款首付款计划的授课计划的机房环境肯定好看就发货等级划分空间都很困惑动画客户肯定就会看见后开机都会开机后打开就会开机后打开就会抠脚大汉开机发的还是客户反馈电话卡复活抠脚大汉开机凤凰健康的环境恢复快捷的回复开机后打开就会分开机后打开就的环境是否就看电视点击恢复计划单价点击恢复计划单价看接电话机房环境都会会圣诞节福利是打开连接速度快了附近开了多久上课了的绿色开发接口连接啊可开机时都会付款计划开始的计划考试等级划分空间的环境看是贷款首付款计划的授课计划的机房环境肯定好看就发货等级划分空间都很困惑动画客户肯定就会看见后开机都会开机后打开就会开机后打开就会抠脚大汉开机发的还是客户反馈电话卡复活抠脚大汉开机凤凰健康的环境恢复快捷的回复开机后打开就会分开机后打开就的环境是否就看电视点击恢复计划单价点击恢复计划单价看接电话机房环境都会会圣诞节福利是打开连接速度快了附近开了多久上课了的绿色开发接口连接啊可开机时都会付款计划开始的计划考试等级划分空间的环境看是贷款首付款计划的授课计划的机房环境肯定好看就发货等级划分空间都很困惑动画客户肯定就会看见后开机都会开机后打开就会开机后打开就会抠脚大汉开机发的还是客户反馈电话卡复活抠脚大汉开机凤凰健康的环境恢复快捷的回复开机后打开就会分开机后打开就的环境是否就看电视点击恢复计划单价点击恢复计划单价看接电话机房环境都会会圣诞节福利是打开连接速度快了附近开了多久上课了的绿色开发接口连接啊可开机时都会付款计划开始的计划考试等级划分空间的环境看是贷款首付款计划的授课计划的机房环境肯定好看就发货等级划分空间都很困惑动画客户肯定就会看见后开机都会开机后打开就会开机后打开就会抠脚大汉开机发的还是客户反馈电话卡复活抠脚大汉开机凤凰健康的环境恢复快捷的回复开机后打开就会分开机后打开就的环境是否就看电视点击恢复计划单价点击恢复计划单价看接电话机房环境都会会圣诞节福利是打开连接速度快了附近开了多久上课了的绿色开发接口连接啊可开机时都会付款计划开始的计划考试等级划分空间的环境看是贷款首付款计划的授课计划的机房环境肯定好看就发货等级划分空间都很困惑动画客户肯定就会看见后开机都会开机后打开就会开机后打开就会抠脚大汉开机发的还是客户反馈电话卡复活抠脚大汉开机凤凰健康的环境恢复快捷的回复开机后打开就会分开机后打开就的环境是否就看电视点击恢复计划单价点击恢复计划单价看接电话机房环境都会会圣诞节福利是打开连接速度快了附近开了多久上课了的绿色开发接口连接啊可开机时都会付款计划开始的计划考试等级划分空间的环境看是贷款首付款计划的授课计划的机房环境肯定好看就发货等级划分空间都很困惑动画客户肯定就会看见后开机都会开机后打开就会开机后打开就会抠脚大汉开机发的还是客户反馈电话卡复活抠脚大汉开机凤凰健康的环境恢复快捷的回复开机后打开就会分开机后打开就的环境是否就看电视点击恢复计划单价点击恢复计划单价看接电话机房环境都会会</p>', 'php', '1212121212', '3', '5');
INSERT INTO `think_article` VALUES ('5', '标题5', null, '内容5', 'php', '11111111111', '3', '0');
INSERT INTO `think_article` VALUES ('6', '标题6', null, '内容6', '综合', '1010101010', '3', '0');
INSERT INTO `think_article` VALUES ('10', '关于php的登陆问题', null, '<p>这个还是算了吧！<br/></p>', 'web前端', '1470815009', '4', '0');
INSERT INTO `think_article` VALUES ('11', 'php', null, '你热饭了看第三方公司的机会给附近估计是打飞机回家的时刻就会发空间的很少看见回复开机后打开就会电视', 'php', '1234567890', '4', '0');
INSERT INTO `think_article` VALUES ('42', '我是文章', null, '<p>快乐圣诞节福利是打开连接速度快了附近开了多久上课了的绿色开发接口连接啊可开机时都会付款计划开始的计划考试等级划分空间的环境看是贷款首付款计划的授课计划的机房环境肯定好看就发货等级划分空间都很困惑动画客户肯定就会看见后开机都会开机后打开就会开机后打开就会抠脚大汉开机发的还是客户反馈电话卡复活抠脚大汉开机凤凰健康的环境恢复快捷的回复开机后打开就会分开机后打开就的环境是否就看电视点击恢复计划单价点击恢复计划单价看接电话机房环境都会会</p>', 'php', '1470823710', '4', '0');
INSERT INTO `think_article` VALUES ('43', '文章1', null, '<p>开机费点卡了手机付款了但是客服经理开始的记录圣诞快乐放假了可接受的老师看见对方考虑<br/></p>', 'php', '1470823779', '4', '0');
INSERT INTO `think_article` VALUES ('44', 'abc', null, '<p>sdsfdsfs<br/></p>', 'php', '1470832785', '4', '0');
INSERT INTO `think_article` VALUES ('45', '你好', null, '<p>sdsfdsfs<br/></p>', 'php', '1470832786', '4', '1');
INSERT INTO `think_article` VALUES ('46', '开始电话卡复活', null, '<p><strong>sdsfdsfsdfhfs</strong><br/></p>', 'php', '1470832788', '4', '0');
INSERT INTO `think_article` VALUES ('48', '是点击付款链接', null, '<p>sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看sdsfdsfs离开时点击付款了呢是打发了看电视可怜的考虑是否考虑但是看了就付款了呢的时刻放大看是否可骄傲和电视开机南方科技的少年看法的考试呢开发大男生看法的考试呢分看电视开机能分开都是您付款你的伤口年费的开机时能否看电视开机能分空间大脑壳房间内的空间你看到今年分空间大脑壳能看到你空间大脑壳能否看到室内空间你看</p>', 'php', '1470832790', '4', '2');
INSERT INTO `think_article` VALUES ('49', '间发货快', null, '<p style=\"text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">sdsfskldjfl路电视机房里看见了就到了房间里的空间流口水的解放路口就离开房间的绿色减肥类似的家乐福简单来说开机费离开的手机付款了大家来看风景的离开家里的空间分可立即打开了分就到了开机费凉快多了烦恼都上来发哪里的你浪费你的了声卡法律的思考就付了款打得十分好看的好看发贺卡的健身房的房价开始大力反馈回来打卡点时空里回复空间和罚款的精髓回复看大家是否开机的首付款加多少空间很放得开了手机话费看了大家说付款计划都是看了就发货看大家是否开机后打开手机话费开机号多少空间发挥不可达基数付款计划的开始疯狂动画付款计划的空间发货快点击回复空间的回复空间的回复开机时都会开飞机好的空间划分快到家后付款觉得很疯狂的fs的红dn,mdsfns</span><br/></p>', 'php', '1470832791', '4', '3');
INSERT INTO `think_article` VALUES ('55', 'HTML5的实例应用', null, '<p>html5是非常好用的！<br/></p>', 'web前端', '1471268683', '6', '3');
INSERT INTO `think_article` VALUES ('56', 'php文件上传实战应用', null, '<p>12345678945643132132131564684613213135645613131</p><p>1231314564546416513654</p><p>4136513</p><p>1313</p><p>13</p><p>131</p><p>3131</p><p>312321</p><p>3213213132132</p><p>1</p><p>31321321</p><p>3213</p><p>21321321321</p><p><br/></p><p>3132</p><p>1321</p><p>321</p><p>321</p><p>313</p><p>13</p><p>2131</p><p>35113</p><p>1311</p><p>51361</p>', 'php', '1471269486', '6', '1');
INSERT INTO `think_article` VALUES ('57', '生活', null, '<p>你好最近在干什么呢</p>', '其他', '1471401308', '6', '2');
INSERT INTO `think_article` VALUES ('58', '123456', null, '<p>456465413131321gfsdfgs公司付大哥的风格十分的</p>', 'php', '1471402763', '7', '4');
INSERT INTO `think_article` VALUES ('65', 'HTML+CSSS+JS', null, '<p>合适的开发和空间按时圣诞节后付款就收到货款纠纷和上的空间划分空间都十分看好的思考和卡的很深刻疯狂的河南科技</p>', 'web前端', '1471520235', '8', '3');
INSERT INTO `think_article` VALUES ('69', '圣诞节', null, '<p>但是飞机离开大家快来打发第三方大幅度</p>', '综合', '1471529685', '4', '0');
INSERT INTO `think_article` VALUES ('70', '小小桑', null, '<p>快乐圣诞节疯狂了觉得谁卡了考了多少看会电视开机抠脚大汉开机开机</p>', 'php', '1471604060', '4', '2');
INSERT INTO `think_article` VALUES ('71', '我来了', null, '<p>我是武宇飞</p>', '综合', '1471618137', '10', '0');
INSERT INTO `think_article` VALUES ('72', 'thinkphp完结', null, '<p>hello thinkphp！<br/></p>', '综合', '1471653998', '4', '1');

-- ----------------------------
-- Table structure for think_files
-- ----------------------------
DROP TABLE IF EXISTS `think_files`;
CREATE TABLE `think_files` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `upload_id` int(10) DEFAULT NULL,
  `file_name` varchar(150) DEFAULT NULL,
  `size` int(10) DEFAULT NULL,
  `file_type` varchar(20) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `count` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_files
-- ----------------------------
INSERT INTO `think_files` VALUES ('126', '4', '1471501403.jpg', '4900', 'jpg', '1471501403', '0');
INSERT INTO `think_files` VALUES ('127', '4', '1471501405.jpg', '10990', 'jpg', '1471501405', '1');
INSERT INTO `think_files` VALUES ('143', '8', '1471511457.jpg', '8059', 'jpg', '1471511457', '3');
INSERT INTO `think_files` VALUES ('145', '8', '1471511727.docx', '11910', 'docx', '1471511727', '2');
INSERT INTO `think_files` VALUES ('148', '4', '1471529791.jpg', '4900', 'jpg', '1471529791', '0');
INSERT INTO `think_files` VALUES ('149', '4', '1471529792.jpg', '10990', 'jpg', '1471529792', '0');
INSERT INTO `think_files` VALUES ('150', '4', '1471529793.jpg', '9811', 'jpg', '1471529793', '0');
INSERT INTO `think_files` VALUES ('151', '4', '1471529795.jpg', '7280', 'jpg', '1471529795', '0');
INSERT INTO `think_files` VALUES ('152', '4', '1471529796.jpg', '9752', 'jpg', '1471529796', '0');
INSERT INTO `think_files` VALUES ('167', '4', '1471603161.jpg', '8752', 'jpg', '1471603161', '0');
INSERT INTO `think_files` VALUES ('168', '4', '1471603264.jpg', '8059', 'jpg', '1471603264', '0');
INSERT INTO `think_files` VALUES ('169', '4', '1471603311.jpg', '4900', 'jpg', '1471603311', '0');
INSERT INTO `think_files` VALUES ('170', '4', '1471603312.jpg', '10990', 'jpg', '1471603312', '0');
INSERT INTO `think_files` VALUES ('171', '4', '1471603313.jpg', '9811', 'jpg', '1471603313', '0');
INSERT INTO `think_files` VALUES ('172', '4', '1471603314.jpg', '7280', 'jpg', '1471603314', '0');
INSERT INTO `think_files` VALUES ('173', '4', '1471603316.jpg', '9752', 'jpg', '1471603316', '0');
INSERT INTO `think_files` VALUES ('174', '4', '1471603317.jpg', '6900', 'jpg', '1471603317', '0');
INSERT INTO `think_files` VALUES ('175', '4', '1471603318.jpg', '8937', 'jpg', '1471603318', '0');
INSERT INTO `think_files` VALUES ('176', '4', '1471603319.jpg', '8906', 'jpg', '1471603319', '0');
INSERT INTO `think_files` VALUES ('177', '4', '1471603320.jpg', '8752', 'jpg', '1471603320', '0');
INSERT INTO `think_files` VALUES ('178', '4', '1471603321.jpg', '8059', 'jpg', '1471603321', '0');
INSERT INTO `think_files` VALUES ('179', '4', '1471603323.jpg', '12061', 'jpg', '1471603323', '0');
INSERT INTO `think_files` VALUES ('180', '4', '1471603324.jpg', '5551', 'jpg', '1471603324', '0');
INSERT INTO `think_files` VALUES ('181', '4', '1471603325.jpg', '6470', 'jpg', '1471603325', '0');
INSERT INTO `think_files` VALUES ('182', '4', '1471603326.jpg', '6735', 'jpg', '1471603326', '0');
INSERT INTO `think_files` VALUES ('183', '4', '1471603327.jpg', '6890', 'jpg', '1471603327', '1');
INSERT INTO `think_files` VALUES ('192', '4', '1471653640.jpg', '8906', 'jpg', '1471653640', '0');
INSERT INTO `think_files` VALUES ('193', '4', '1471653672.jpg', '9752', 'jpg', '1471653672', '1');
INSERT INTO `think_files` VALUES ('194', '4', '1471654100.jpg', '8906', 'jpg', '1471654100', '0');
INSERT INTO `think_files` VALUES ('195', '4', '1471654115.jpg', '6799', 'jpg', '1471654115', '0');
INSERT INTO `think_files` VALUES ('196', '4', '1471654116.jpg', '6822', 'jpg', '1471654116', '0');
INSERT INTO `think_files` VALUES ('197', '4', '1471654117.jpg', '5900', 'jpg', '1471654117', '0');
INSERT INTO `think_files` VALUES ('198', '4', '1471654119.jpg', '6454', 'jpg', '1471654119', '0');

-- ----------------------------
-- Table structure for think_message
-- ----------------------------
DROP TABLE IF EXISTS `think_message`;
CREATE TABLE `think_message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` text,
  `article_id` int(10) DEFAULT NULL,
  `reply_time` int(11) DEFAULT NULL,
  `admin_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_message
-- ----------------------------
INSERT INTO `think_message` VALUES ('72', '觉得萨芬健康理解的深刻理解付款了就快了点附近开了坚实的', '48', '1471058866', '4');
INSERT INTO `think_message` VALUES ('73', '你叫什么名字？', '45', '1471059229', '4');
INSERT INTO `think_message` VALUES ('75', '是电话客服会卡机的环境是', '4', '1471060275', '4');
INSERT INTO `think_message` VALUES ('76', '答复都快来上课了', '4', '1471060476', '4');
INSERT INTO `think_message` VALUES ('79', 'fkhdskhfkjhasdkf kadshkfhkdsahfkhdskjhfkajdlsf', '48', '1471061474', '3');
INSERT INTO `think_message` VALUES ('82', 'nihao!', '2', '1471081179', '4');
INSERT INTO `think_message` VALUES ('92', '这是文章的评论！', '4', '1471165290', '4');
INSERT INTO `think_message` VALUES ('98', 'nihaoma', '49', '1471349878', '4');
INSERT INTO `think_message` VALUES ('99', '这篇好文章', '49', '1471355941', '4');
INSERT INTO `think_message` VALUES ('100', 'hello world ', '4', '1471393736', '6');
INSERT INTO `think_message` VALUES ('101', '999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999', '4', '1471393816', '6');
INSERT INTO `think_message` VALUES ('102', '666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666', '49', '1471395949', '6');
INSERT INTO `think_message` VALUES ('105', '123456789', '58', '1471402916', '7');
INSERT INTO `think_message` VALUES ('106', 'hello world', '58', '1471403186', '7');
INSERT INTO `think_message` VALUES ('107', '52825085', '56', '1471404157', '7');
INSERT INTO `think_message` VALUES ('108', 'sdlfjlkadjsklfjkldsjklfjkldsjklfjkldsjklfjadsfkljdkasf', '2', '1471482804', '4');
INSERT INTO `think_message` VALUES ('109', '连接到付款了多少收到了开机费来了金莱克；看到懒得罗科', '2', '1471482850', '4');
INSERT INTO `think_message` VALUES ('122', '这篇文章太简单！', '58', '1471515041', '4');
INSERT INTO `think_message` VALUES ('123', 'hello world', '2', '1471519146', '4');
INSERT INTO `think_message` VALUES ('126', '评论1', '65', '1471520251', '8');
INSERT INTO `think_message` VALUES ('127', '觉得是看了就付款了倒计时', '65', '1471520327', '8');
INSERT INTO `think_message` VALUES ('128', '付款了收到后付款的', '57', '1471522619', '2');
INSERT INTO `think_message` VALUES ('129', '对话框就撒谎空间的发生', '57', '1471522626', '2');
INSERT INTO `think_message` VALUES ('134', 'nihao', '58', '1471528120', '4');
INSERT INTO `think_message` VALUES ('135', 'jdlskjflkjl ', '65', '1471529524', '4');
INSERT INTO `think_message` VALUES ('136', '评论1', '55', '1471593152', '4');
INSERT INTO `think_message` VALUES ('137', '评论2', '55', '1471593163', '4');
INSERT INTO `think_message` VALUES ('138', '评论3\r\n', '55', '1471593173', '4');
INSERT INTO `think_message` VALUES ('139', 'hello world！', '70', '1471604099', '4');
INSERT INTO `think_message` VALUES ('140', '丧服觉得好看就', '70', '1471604315', '4');
INSERT INTO `think_message` VALUES ('141', '终于结束了thinkphp之旅，心里很开心\r\n', '72', '1471654024', '4');
