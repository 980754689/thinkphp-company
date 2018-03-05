-- MySQL dump 10.13  Distrib 5.5.54, for Linux (x86_64)
--
-- Host: localhost    Database: xiu_mengnana_co
-- ------------------------------------------------------
-- Server version	5.5.54-log

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
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `tel` varchar(255) DEFAULT NULL COMMENT '电话',
  `phone` varchar(255) DEFAULT NULL COMMENT '手机',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `qq` varchar(255) NOT NULL COMMENT 'QQ',
  `work_time` varchar(255) NOT NULL COMMENT '工作时间',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `user_id` int(11) DEFAULT NULL COMMENT '发布人id',
  `user_name` varchar(255) DEFAULT NULL COMMENT '发布人账号',
  `created_time` int(11) NOT NULL COMMENT '创建时间',
  `updated_time` int(11) NOT NULL COMMENT '修改时间',
  `wechat` varchar(100) DEFAULT NULL COMMENT '微信',
  `company` varchar(255) DEFAULT NULL COMMENT '公司名',
  `jianjie` text,
  `wenhua` text,
  `fazhan` text,
  `fanwei` text,
  `youshi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='关于我们表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (1,'152-0551-2918','152-0551-2918 （朱经理）','980754689@qq.com','980754689','周一至周五9:00-18:00','合肥市蜀山区怀宁路2299号',NULL,NULL,0,1510279291,'wx980754689','家居展示设计类网站','合肥菲尔粮油装备有限公司成立2016年，位于安徽省省会合肥市，是一家专业提供粮油加工装备以及技术服务的供应商，公司是集新技术与推广为一体的创新型企业。公司制造工厂拥有A1/A2级特种设备设计以及制造许可证。目前已经为多家国有、外资等大型油脂加工企业提供设备及备件服务。同时公司提供第三方机构认证的食品级油脂专用滤袋，除尘布袋以及骨架。','公司自成立以来，生产能力、技术水平迅速提升，以单机设备推动成套设备供货，客户遍及全国二十多个省市，部分装备出口到巴基斯坦、俄罗斯、乌克兰等国际。客户涉及粮油、食品、石油、煤化工、化工、精细化工等领域。公司与多家知名化工设计院建立了紧密合作关系，共同开发了多套高技术含量的产品，满足客户多元化的需求。\r\n公司按现代企业管理理念，建立了规范高效的管理体系，实行人性化管理，保证了健康快速的发展。','公司自成立以来，生产能力、技术水平迅速提升，以单机设备推动成套设备供货，客户遍及全国二十多个省市，部分装备出口到巴基斯坦、俄罗斯、乌克兰等国际。客户涉及粮油、食品、石油、煤化工、化工、精细化工等领域。公司与多家知名化工设计院建立了紧密合作关系，共同开发了多套高技术含量的产品，满足客户多元化的需求。\r\n公司按现代企业管理理念，建立了规范高效的管理体系，实行人性化管理，保证了健康快速的发展。','办公空间：写字楼办公室设计与施工，配套工程消防空调家具弱电软装设计等\r\n \r\n商业空间：服装类，鞋类，皮具类，饰品类，眼镜店等，各大商装卖场专卖店设计与施工\r\n \r\n餐饮空间：定位各类菜系，根据不同菜品定位量身打造不同餐饮空间的风格特色，以保证客户经营利润最大化\r\n \r\n娱乐空间：茶楼，棋牌，沐足，会所，KTV等各类休闲娱乐场所项目设计\r\n \r\n酒店会所：定位准星级，评定星级，主题类，风情类，快捷类等各大综合性酒店宾馆设计与施工\r\n \r\n展示空间：手机专卖店，家具展厅，陶瓷展厅，科技展厅等各类展厅设计与施工\r\n \r\n教育空间：幼儿园，早教中心等专业设计与施工\r\n \r\n住宅空间: 公寓 二手房 清水房 别墅设计与施工；灯光设计,软装设计,风水设计,家具设计声控设计等','汇集国内一流设计团队\r\n \r\n团队全部来源于国内外高等设计名校，注册设计师占总设计团队的80%以上，只有一流的设计师才能做出一流的设计作品。\r\n \r\n \r\n预算精准合理\r\n \r\n预算精准，误差10%以内，合伙伙伴均为国内一线品牌供应商，与格莱美达成长期战略合作，保证产品质量的同时，也降低了成本。\r\n \r\n \r\n国家质量验收标准\r\n \r\n严格按照ISO9001：2008质量标准管理，严格选择国家ISO14001：2004环境管理标准，保证质量稳定同时符合环保要求。\r\n \r\n \r\n工程配套一体化\r\n \r\n报建、消防、弱电系统、空调系统、家具系统、门禁考勤、监控系统、程控电话、集团视频会议系统等一体化配套。\r\n \r\n \r\n24小时快速服务响应\r\n \r\n客服24小时在线为您服务，即时响应解答疑难。工程2年保修、终身维护，水电问题24小时迅速解决。\r\n \r\n \r\n数字化科学管理\r\n \r\n独创“全表格化、数字化”的管理模式，量化每一个标准。工地在线展示系统，随时掌控工地实况，省时省力更省心。\r\n \r\n \r\n完工3年免费翻新\r\n \r\n极具特色、人性的三年后翻新服务；只要您成为我们的客户，工程竣工三年后将可以享受：免材料费的墙面（乳胶漆）翻新服务。\r\n \r\n \r\n环境保鲜一条龙省心方案\r\n \r\n我们联合行业一流的合作伙伴为您精心准备了一系列后续服务，如办公环境的日常清洁，绿色植物的保养等，为您的办公环境持续保鲜。\r\n \r\n \r\n客户联谊交流共赢\r\n \r\n与国内一线品牌人才面对面交流，扩充人脉，交换思维，有梦一起飞。定期举办新、老客户联谊会、交流会、企业讨论会，加强合作，促进交流，实现资源共享。');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `auth_key` varchar(32) DEFAULT NULL COMMENT '自动登录key',
  `password_hash` varchar(255) NOT NULL COMMENT '加密密码',
  `password_reset_token` varchar(255) DEFAULT NULL COMMENT '重置密码token',
  `email_validate_token` varchar(255) DEFAULT NULL COMMENT '邮箱验证token',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `status` smallint(6) DEFAULT '10' COMMENT '状态',
  `avatar` varchar(255) DEFAULT NULL COMMENT '头像',
  `created_at` int(11) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `唯一索引` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='管理员表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'zhangkun','rN5dsp_Z3CVcRpu1ux-OYFfKTf7BvmXK','zhangkun',NULL,NULL,'11@qq.com',0,NULL,1494661643,1504508240),(2,'zhangkun1','rN5dsp_Z3CVcRpu1ux-OYFfKTf7BvmXK','$2y$13$AxMk5gTSvhkl6uXhOUHU2evw6Hbw3AKV9XJamPjCwJsYyrUUF/xpK',NULL,NULL,'11@qq.com',10,NULL,1494661643,1504081448),(5,'321',NULL,'123123',NULL,NULL,'123',10,NULL,1505469576,NULL),(6,'123',NULL,'4297f44b13955235245b2497399d7a93',NULL,NULL,'123',10,NULL,1505469744,NULL);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `advertising`
--

DROP TABLE IF EXISTS `advertising`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advertising` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `img` varchar(255) DEFAULT NULL COMMENT '图片',
  `url` varchar(255) NOT NULL COMMENT '链接',
  `user_id` int(11) DEFAULT NULL COMMENT '发布人id',
  `user_name` varchar(255) DEFAULT NULL COMMENT '发布人账号',
  `is_valid` tinyint(1) DEFAULT '0' COMMENT '是否有效：0-未发布 1-已发布',
  `address` int(1) NOT NULL,
  `created_time` int(11) NOT NULL COMMENT '创建时间',
  `updated_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='广告位表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advertising`
--

LOCK TABLES `advertising` WRITE;
/*!40000 ALTER TABLE `advertising` DISABLE KEYS */;
INSERT INTO `advertising` VALUES (1,'/guanggao/2017-10-20/59e9a31328bb4.jpg','312',6,'123',1,4,1508483448,1509291868),(2,'/guanggao/2017-10-20/59e9aaf6b348d.jpg','',6,'123',1,2,1508485862,1508485878),(3,'/guanggao/2017-10-29/59f5f004cc02d.jpg','',6,'123',1,3,1509289988,1509291856),(4,'/guanggao/2017-10-29/59f5f063abd38.jpg','',6,'123',1,1,1509290083,1509291876),(5,'/guanggao/2017-10-29/59f5f0759edb4.jpg','',6,'123',1,5,1509290101,1509290101);
/*!40000 ALTER TABLE `advertising` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `copyright`
--

DROP TABLE IF EXISTS `copyright`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `copyright` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `time` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL COMMENT '备案号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `copyright`
--

LOCK TABLES `copyright` WRITE;
/*!40000 ALTER TABLE `copyright` DISABLE KEYS */;
INSERT INTO `copyright` VALUES (1,'2014-2015-2016','https://www.baidu.com','家居展示设计类网站','上231231');
/*!40000 ALTER TABLE `copyright` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flow`
--

DROP TABLE IF EXISTS `flow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flow` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `title_en` varchar(100) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `created_time` varchar(100) DEFAULT NULL,
  `updated_time` varchar(100) DEFAULT NULL,
  `is_valid` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flow`
--

LOCK TABLES `flow` WRITE;
/*!40000 ALTER TABLE `flow` DISABLE KEYS */;
INSERT INTO `flow` VALUES (1,'咨询','Consultation','客户咨询电话：400-966-1234 / 1366-005-1234。\r\n装饰设计意向客户可通过在线咨询、电话咨询、亦可直接在设计团队预约满意的设计师上门量房，客服人员将第一时间响应您的请求，竭诚为您服务。\r\n设计师仔细聆听客户的装修需求（广州办公室装修、店铺装修、写字楼装修、厂房装修等装修相关业务），并解答分析。','1510220217','1510277971',1),(2,'初步方案','Preliminary Plan','为您精心挑选合适的设计师上门进行度量环境，同时与客户深度沟通认真聆听客户的需求，为客户量身定制绿色环保的办公或居住空间。\r\n设计师及技术员亲自到现场度量及观察现场环境后，绘制平面配置图，初步平面方案确认后出具装修预算造价。\r\n','1510220275','1510220275',1),(3,'优化设计','Optimization Design','双方达成一致意见，客户与公司签订合作协议，交纳设计押金后，设计师作进一步深化设计，提供方案效果图、方案施工图及准确装修报价表。','1510220329','1510220329',1),(4,'签订合同','Signing of the contract','根据客户的思想和要求，设计师会为您提供最优的、专业的设计方案及详细的装饰预算，客户确认方案后将与绿菩提装饰签订项目合作协议。客户确认设计和报价后，双方签订装修施工合同。','1510220361','1510220361',1),(5,'施工','Construction','针对所有项目均会成立项目组进场，办理入场手续，在收到第一期工程款后进行开工。项目组负责人在项目施工期间进行科学控制、5s现场管理、分段验收、监督工程质量、严格控制工进度等。\r\n 客户与工程人员办理入场手续，收到客户第一期工程款后开工。装修施工期间公司派工程人员到场管理、监督人员检查装修工程质量，发现问题及时解决，进行按质按量操作。\r\n','1510220395','1510220395',1),(6,'售后服务','After-sale service','项目竣工验收保质保量，按国家及行业规范进行整体验收，不合格或未达标在工程期限内进行整改，以达到验收标准。验收通过签订验收单进行工程尾款结算，同时为您提供竣工技术文件、工程保修卡。\r\n 定期对客户回访，提供两年的免费保修服务，终身维护。水电紧急保修情况，24小时上门维修；其他保修情况，48小时上门维修。请相信，我们是专业的广州设计公司。','1510220429','1510220429',1);
/*!40000 ALTER TABLE `flow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `num` varchar(255) DEFAULT NULL COMMENT '招聘人数',
  `zhize` varchar(255) NOT NULL COMMENT '职责',
  `ask` varchar(255) DEFAULT NULL COMMENT '要求',
  `work_time` varchar(255) DEFAULT NULL COMMENT '年限',
  `is_valid` tinyint(1) DEFAULT '0' COMMENT '是否有效：0-未发布 1-已发布',
  `created_time` int(11) NOT NULL COMMENT '创建时间',
  `updated_time` int(11) NOT NULL COMMENT '修改时间',
  `pay` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='招聘信息表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job`
--

LOCK TABLES `job` WRITE;
/*!40000 ALTER TABLE `job` DISABLE KEYS */;
INSERT INTO `job` VALUES (1,'专家设计师','3人','1、较强的空间设计能力、手绘能力、平面规划能力。熟练3DMAX、CAD、LIGHTSCAPE、PHOTOSHOP等软件及办公软件。\r\n2、能独立承担设计工作任务，具有较强的沟通应变和谈单能力，熟悉工程预算、施工、材料。\r\n3、工作积极主动，责任心强，忠于职守，勇于创新。\r\n4、良好的个人形象、思维活跃、富有创造力、具有较强的团队合作精神。','1、要求:27-45岁，从事办公室装饰设计工作5年以上设计签单工作经验，具有公装大中型成功案例者；\r\n2、大专及以上学历，室内设计、装饰设计、美术设计类相关专业；\r\n','2-3年工作年限',1,1510297568,1510299897,'8K','980754689@qq.com'),(2,'技术指导','2人','1、负责预算成本分析，为每个工程制作清晰准确的成本分析以供客户经理或设计师与客户谈判；\r\n2、负责施工工艺、施工细节的指导。熟悉电气系统、给排水、暖通、消防、中央空调、弱点 电（门禁、监控、网络、电话等）系统、家具、厨房工程、环保工程、钢结构、土建工程等；熟悉装饰材料及材料价格；熟悉施工工艺及施工人力成本，对施工中的重点难点能分辨并妥善处理；\r\n3、不定期对拓展部内部人员、实习/助理设计师开展专业的技术培训；\r\n4、负责图纸审核，并能对错、漏、不规范之处指出及给出具体的审核意见及指导；\r\n5、负责预算制作','1、负责预算成本分析，为每个工程制作清晰准确的成本分析以供客户经理或设计师与客户谈判；\r\n2、负责施工工艺、施工细节的指导。熟悉电气系统、给排水、暖通、消防、中央空调、弱点 电（门禁、监控、网络、电话等）系统、家具、厨房工程、环保工程、钢结构、土建工程等；熟悉装饰材料及材料价格；熟悉施工工艺及施工人力成本，对施工中的重点难点能分辨并妥善处理；\r\n3、不定期对拓展部内部人员、实习/助理设计师开展专业的技术培训；\r\n4、负责图纸审核，并能对错、漏、不规范之处指出及给出具体的审核意见及指导；\r\n5、负责预算制作','2-3年工作年限',1,1510297644,1510299912,'10K','980754689@qq.com'),(3,'业务拓展人员','3人','1、18周岁以上，高中以上学历；\r\n2、具有良好的亲和力、沟通能力以及团队合作精神；\r\n3、具有较佳的服务意识和良好的心理素质；\r\n4、热爱营销工作，敬业，责任心强；\r\n5、有物管、中介公司任职工作经验者优先。','1、18周岁以上，高中以上学历；\r\n2、具有良好的亲和力、沟通能力以及团队合作精神；\r\n3、具有较佳的服务意识和良好的心理素质；\r\n4、热爱营销工作，敬业，责任心强；\r\n5、有物管、中介公司任职工作经验者优先。','2-3年工作年限',1,1510299771,1510299918,'6K','980754689@qq.com'),(4,'业务拓展人员','3人','1、18周岁以上，高中以上学历； 2、具有良好的亲和力、沟通能力以及团队合作精神； 3、具有较佳的服务意识和良好的心理素质； 4、热爱营销工作，敬业，责任心强； 5、有物管、中介公司任职工作经验者优先。','1、18周岁以上，高中以上学历； 2、具有良好的亲和力、沟通能力以及团队合作精神； 3、具有较佳的服务意识和良好的心理素质； 4、热爱营销工作，敬业，责任心强； 5、有物管、中介公司任职工作经验者优先。','2-3年工作年限',1,1510299997,1510299997,'6K','980754689@qq.com');
/*!40000 ALTER TABLE `job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_zhan`
--

DROP TABLE IF EXISTS `job_zhan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_zhan` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `content` text COMMENT '内容',
  `is_valid` tinyint(1) DEFAULT '0' COMMENT '是否有效：0-未发布 1-已发布',
  `created_time` int(11) NOT NULL COMMENT '创建时间',
  `updated_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='人才战略表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_zhan`
--

LOCK TABLES `job_zhan` WRITE;
/*!40000 ALTER TABLE `job_zhan` DISABLE KEYS */;
INSERT INTO `job_zhan` VALUES (1,'合肥菲尔粮油装备有限公司成立2016年，位于安徽省省会合肥市，是一家专业提供粮油加工装备以及技术服务的供应商，公司是集新技术与推广为一体的创新型企业。公司制造工厂拥有A1/A2级特种设备设计以及制造许可证。目前已经为多家国有、外资等大型油脂加工企业提供设备及备件服务。同时公司提供第三方机构认证的食品级油脂专用滤袋，除尘布袋以及骨架。',0,0,1510299045);
/*!40000 ALTER TABLE `job_zhan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new`
--

DROP TABLE IF EXISTS `new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `new` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `img` varchar(255) DEFAULT NULL COMMENT '图片',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content_1` varchar(255) NOT NULL COMMENT '简介',
  `content_2` text NOT NULL COMMENT '内容',
  `num` int(11) NOT NULL COMMENT '浏览数',
  `user_id` int(11) DEFAULT NULL COMMENT '发布人id',
  `user_name` varchar(255) DEFAULT NULL COMMENT '发布人账号',
  `is_valid` tinyint(1) DEFAULT '0' COMMENT '是否有效：0-未发布 1-已发布',
  `created_time` int(11) NOT NULL COMMENT '创建时间',
  `updated_time` int(11) NOT NULL COMMENT '修改时间',
  `seat` int(10) DEFAULT NULL,
  `type_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='新闻表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new`
--

LOCK TABLES `new` WRITE;
/*!40000 ALTER TABLE `new` DISABLE KEYS */;
INSERT INTO `new` VALUES (1,'/img/New/2017-11-09/5a043b5349ec9.jpg','墙体发霉烦事多 月亮湾给你来支招','在我们的日常生活中，往往会遇到墙面受潮发霉，对我们的生活造成了一定的影响。那么当发生墙面受潮发霉的情况时该怎么办呢？别担心，爱装集团给你来支招！ 1、防水石膏板受潮...','在我们的日常生活中，往往会遇到墙面受潮发霉，对我们的生活造成了一定的影响。那么当发生墙面受潮发霉的情况时该怎么办呢？别担心，爱装集团给你来支招！\r\n \r\n1、防水石膏板受潮需更换 \r\n \r\n卫生间漏水是最常见的漏水情况之一。一般来说，卫生间都需要有吊顶，洇水墙面会被隐藏起来，所以不需要进行特别的处理。吊顶常用材料是铝扣板，解决漏水问题后，只要将铝扣板擦干净就可以了。 \r\n \r\n2、乳胶漆墙面注意温湿度 \r\n \r\n对工期有要求的业主需要留意施工时的温湿度。如果修补面积在10平方米以内，墙面的自然风干在春秋季',0,6,'123',1,1510225219,1510228405,100,2),(2,'/img/New/2017-11-09/5a043be57a5a3.jpg','新装修的办公室有异味怎么办','在新装修的办公室里新家具等饰材是必不可少的。然而，新的家具总会散发出异味，让人很不舒服。其中有毒污染物质有很多种，其中主要有害气体是氡、甲醛、苯和氨，那么新装修的...','在新装修的办公室里新家具等饰材是必不可少的。然而，新的家具总会散发出异味，让人很不舒服。其中有毒污染物质有很多种，其中主要有害气体是氡、甲醛、苯和氨，那么新装修的办公室该怎么除味呢？今天月亮湾就来给您支支招。\r\n \r\n1、通风法去除甲醛方案\r\n \r\n通过室内空气的流通，可以降低室内空气中部分游离的有害物质含量，从而减少此类物质对人体的危害，但是治标不治本。冬天，人们常常紧闭门窗，室内外空气不能流通，不仅室内空气中甲醛的含量会增加，氡气也会不断积累，甚至达到很高的浓度。\r\n \r\n2、活性炭吸附法\r\n \r\n活性炭是国际公认的吸毒能手，活性炭口罩，防毒面具都使用活性炭。原生钛活性炭利用活性炭的物理作用除臭，去毒；无任何化学添加剂，对人身无影响。每屋放两至三碟，72小时可基本除尽室内异味。中低度污染可选此法，也可选此法与其它化学法综合使用，综合治理效果更佳。\r\n \r\n3、普通土招\r\n \r\n300克红茶泡热茶两脸盆水，放入室内，并开窗透气，48小时内室内甲醛含量将下降90%以上，刺激性气味稍微会消除一些。\r\n \r\n4、植物除味的方法\r\n \r\n中低度污染可选择植物去污：一般室内环境污染在轻度和中度污染、污染值在国家标准2倍以下的环境，采用植物净化能达到一定的效果。根据室内空间的不同功能、面积的大小选择和摆放植物。一般情况下，10平方米左右的房间，1.5米高的植物放两盆比较合适。（推荐用：芦荟、吊兰、虎皮兰）\r\n \r\n5、除家具甲醛味的方法\r\n \r\na：可以在室内放两盆盐水，油漆味会很快消除。如果是木器家具散发出的油漆味，可以用茶水擦洗几遍，油漆味也会消除得快一些；b：可以去市场挑选一些高科技的祛味清洁剂，它能去除新装修房、新家具等散发出的有害气体。据有关人士介绍，这些祛味清洁剂一般都是进口产品，利用氨化合物与有害物质发生化学反应，从而起到了祛味清洁的作用。在新装修的房间中，可把这种祛味清洁剂倒入盘中，将盘分别放在每个房间中，再结合擦洗祛味法，连续几天后就可有效去除难闻气味；c：要快速清除残留油漆味，可用柠檬酸浸湿棉球，挂在室内以及木器家具内。',0,6,'123',1,1510226917,1510226917,400,2),(3,'/img/New/2017-11-09/5a043c28249cf.jpg','新中式装修风格之陈设艺术','伴随着经济水平的提高，人们越发开始注重办公室装修和软装的追求，对品味及软实力层次的提升。而软装设计的种类也是比较多的，新中式软装元素也是中国上下五千年的文化发展的...','伴随着经济水平的提高，人们越发开始注重办公室装修和软装的追求，对品味及软实力层次的提升。而软装设计的种类也是比较多的，新中式软装元素也是中国上下五千年的文化发展的沉淀，是中国文化每一个里程发展的符号。随着“中国梦”弘扬传统文化的主旋律，新中式软装更是对中国文化精髓的弘扬和继承。\r\n \r\n\r\n \r\n软装设计中新中式软装风格大多采用对称式的布局，用以营造清幽雅致的生活氛围，在装饰细节上崇尚自然情趣。在家具选配上，一般采用传统的圈椅，条案等中式家具去进行西式陈设，强调舒适性与实用性。\r\n \r\n在探寻中国设计界的本土意识之初，逐渐成熟的新一代设计队伍和消费市场孕育出含蓄秀美的新中式风格。在中国文化风靡全球的现金时代，中式元素与现代材质的巧妙兼柔，明清家具、布艺床品相互辉映，再现了移步变景的精妙小品。\r\n \r\n新中式软装风格主要包括两方面的基本内容，一是中国传统风格文化意义在当前时代背景下的演绎；二是对中国当代文化充分理解上的当代设计。\r\n \r\n新中式风格不是纯粹的元素堆砌，而是通过对传统文化的认识，将现代元素和传统元素结合在一起，以现代人的审美需求来打造富有传统韵味的事物，让传统艺术在当今社会得到合适的体现。\r\n \r\n随着国内软装风格的发展，新中式软装风格也开始兴起。新中式软装风格是对传统中式装饰风格的继承和创新它将现代元素和传统元素进行了有机的结合，以现代人的审美需求去营造传统的韵味。 ',0,6,'123',1,1510226984,1510226984,100,2),(4,'/img/New/2017-11-09/5a043c5d8e56f.jpg','设计总监看装饰行业发展趋势','公司步入装饰行业已经十年，正如中国改革春风巨变的十年。十年前，我们在唏嘘国人审美的标准的时候，十年后我们又曾做到多少令国人改变审美标准的努力！在当下的写字楼装修装...','公司步入装饰行业已经十年，正如中国改革春风巨变的十年。十年前，我们在唏嘘国人审美的标准的时候，十年后我们又曾做到多少令国人改变审美标准的努力！在当下的写字楼装修装饰行业中，行业的规范性、行业自身的约束力、装饰行业从业人员的门槛标准和整个市场的诚信环境等等都是影响装饰行业前进的重要因素。\r\n \r\n\r\n \r\n在物质生活不断提高的今天，群众对艺术的追求不断提升，随着互联网及移动终端的飞速发展，其迅猛之势真的可以用迅雷不及掩耳形容，当各个行业都在搭这趟快车的时候，写字楼装修行业还在停滞不前，在朋友圈有几个朋友都在叫嚣着要引领装修界的互联网模式，甚至有一些不是装修行业的朋友利用众筹模式在大量的做互联网装修平台推广，做了一份几百页的市场调研，认为装修行业发展的趋势在于如何利用互联网提升资源整合和客户资源。\r\n \r\n我自身在装修行业工作十年，清晰认识到装饰行业的发展瓶颈。我们纵眼望去，许多互联网模式成功的案例都有一个共性，就是从传统销售模式转变到互联网销售模式，其在发展前已经是一个比较成熟的市场运作系统。比如唯品会的名品折扣，这个在线下的模式早已经过漫长的实践和摸索，名品折扣店比比皆是，其成熟的商业策划及员工培训体系早已非常完善，并且经过数年周期的磨合才能生存、发展、盈利。而转换为互联网模式仅仅是把它搬上了PC端和移动终端，并解决了物流体系，而物流体系也早以是有很多运作成熟的系统供它使用，这一切一定是建立在市场非常成熟的基础上。其实早在互联网模式未诞生的时候，他们的经验及基础已经相当完善，只是在等待这个契机而已。回过头再来看看写字楼装修装饰行业，首先从基础分析，我们的一线从业人员的基础，施工队伍的素质经过十年的发展有没有质的改变。其实，它的发展举步维艰，大部分施工从业人员都是农民工的基础，这里并没有贬低农民伯伯的意思。但现实就是所有专业施工工种入口门槛很低，没有大量的施工培训机构和专业证书的认证。大部分人从简单的学徒到技术工，都只是按照封建农作的师傅带徒弟等学习方法，在这个过程中，涉及新的施工工艺及材料的发展时都没有认真的、系统的去学习，很多施工工艺都相对传统、老套，根本赶不上市场的更新及变化的需求，对施工的综合需求和更深入的理解几乎不清晰。中国大概3亿农民工，如此多的施工从业人员基础的确相当薄弱，国家在担负此部分人员的培训和指导的责任远远做的还不够，这是装修行业基础最为薄弱和需要提升的地方。\r\n \r\n再谈谈设计队伍和管理队伍。我们知道，要想成为一个室内设计师，其门槛之低难以想象，国家没有强制这方面的执业资格证书，我指的是没有强制的从业的执业资格。所以很多不具备设计能力的“设计师”出现在各大小装饰公司，加上企业自身的社会责任感不强，盲目追求盈利，没有进行很有力的培训和纠错工作，出现了很多低劣和漏洞百出的施工项目，为装饰行业的发展铺满荆棘。另外学校及培训机构也变成了赚钱的机器，对毕业生的专业能力几乎不负任何责任，大部分所谓的专业院校出来的学生放到市场根本没有办法用，需要长达三五年的适应和学习才能基本操作。\r\n \r\n装饰行业的基础如此薄弱，如何能够翻身跻身互联网行业，是一个值得深思的问题。我们欠缺的基础还很多，需要努力改进的工作还很多。在未来的发展趋势中，市场前景将会变得更加明朗，众多原来依赖关系和渠道的项目将会变得更加透明，谁能够提升自身的基础和适时作出迎合市场的改革，务必将引领装饰行业发展。',0,6,'123',1,1510227037,1510227037,400,0),(5,'/img/New/2017-11-09/5a043c8caa95e.jpg','办公室装修怎么设计才好看？','最近有一客户联系到我们，一来就问了这么一句话：办公室装修要怎样设计才好看？对方的公司是主营女性化妆品的，老板给了装修负责人一个要求，客户来到办公室参观时，要让他们...','对于现在的办公室装修来讲，除了要有基本办公功能以外，越来越重视环境的营造。办公室设计千万不可只注重整体外表的好看，细节的设计尤为重要。首先，我们要先确定办公室的功能区域规划，如前台区域、接待室、会议室、办公区、财务室、经理室等，这些功能区域是由装修客户根据公司的实际情况给出的。然后，设计公司则会根据这些功能要求再结合空间的大小去整体的布局规划，以实现空间最大化为前提考虑。接下来，就会考虑一些细节的设计，如机房、茶水间、强弱电布线等问题，在办公室装修前尽可能的把所有项目都考虑进入，因为在装修之后去整改是很麻烦的一项工程。当然，在进行整体布局的时候，设计师也会考虑到一些风水问题，比如董事长室的位置、财务室的方位。\r\n \r\n除了以上的装修设计要素以外，其次就是要选择适合的装修风格。现今的办公室装修风格五花八门，有现代风格、田园风格、后现代风格、欧式古典风格、地中海风格、东南亚风格、中式风格、自然风格、新中式风格等。办公室装修的风格定制之后，设计师会从硬装部分、软装饰部分以及家具部分结合体现该风格。\r\n \r\n最后，想给大家说一说好的办公室装修所得到的回报，有些企业家觉得不愿意在装修这块多花钱，反正就是有一个地方办公即可。对于重视办公室环境的企业来讲，或许前期是多支付了一些装修费用，但对后期却有着无影的额外收入。例如，好的办公环境更能吸引求职者；好的办公环境能给企业的顾客带来深刻印象增加合作成功率；好的办公环境使得员工工作氛围更加轻松，从而带动工作热情带动业绩。 ',0,6,'123',1,1510227084,1510227084,100,0),(6,'/img/New/2017-11-09/5a043cb263173.jpg','互联网时代，装修行业如何生','今年两会，国家总理李克强在政府工作报告中首次提出，制定互联网+行动计划，推动移动互联网、云计算、大数据、物联网等与现代制造业结合，促进电子商务、工业互联网和互联网金...','今年两会，国家总理李克强在政府工作报告中首次提出，“制定‘互联网+’行动计划，推动移动互联网、云计算、大数据、物联网等与现代制造业结合，促进电子商务、工业互联网和互联网金融健康发展”。“互联网+”随即成为关注和讨论的热。今天，在百度上搜索“互联网+”得到的相关结果已经超过1亿。对于传统不能再传统的装修行业，究竟如何才能结合互联网+的思路，如何才能玩转所谓的互联网思维呢?\r\n \r\n就目前的形势而言，以国外 “互联网+”为代表的家居装饰网站Houzz，并于2014年获得1.65 亿美元的 D 轮融资，2015年中国装修行业风云再起，先是去年海尔的有住网开始进军互联网装修，然后是年初雷军的顺为资本6000万下注爱空间，紧接着58同城投资土巴兔，然后仅接着新浪，搜房，淘宝等都开始掺和进来。装修行业终于得到互联网界的大佬关注。传统的装修公司如何在互联网大佬的步步紧逼下求生存?而传统的装修公司又如何打造自己的”互联网+装修“的模式呢?\r\n \r\n我们来分析一下目前互联网装修模式有哪几种\r\n \r\n第一种是很早兴起的装修信息中介网站：如艾逸网。这类装修网站主要是帮助业主通过平台找到适合业主的装修公司，网站是装修公司快速获取订单的一种渠道。因为装修公司目前主要的营销方式是电话营销和网络营销，由于电话营销受到国家隐私政策及法律法规的约束，这种营销必然会走向末路。而这种以平台获取订单渠道的方式已然成为目前互联网装修的主要方式，同时这类网站对其合作的装修公司有一定的管控机制，对于部分装修问题也能在装修公司和业主之间起到协调和监督作用。\r\n \r\n第二种是以类似B2C的商务平台：天猫家装e站、淘宝极有家等。这类平台往往是找当地装修公司合作的模式，电子商务网站把线上巨大的流量导入线下，同时找当地的1-2家装修公司加盟或直营，整合资源获取客户。从而通过线下实体店铺转化客户。\r\n \r\n第三种就是各装修公司内部自己组建的网络营销部门：有的公司自建团队或外包的方式进行所谓的网络营销推广，主要营销渠道是针对搜索引擎的竞价：百度竞价、360竞价。这种以导流引客的模式，不仅烧钱，成本高昂，而且效果甚微!\r\n \r\n第四种是互联网装修公司：爱空间、搜房房天下装饰等。他们的背景实质就是装修公司，只是用互联网的作为营销工具来获取客户。\r\n \r\n那么究竟哪种模式才是业主需要选择的互联网装修模式呢?关于这个问题，让我们真正的从互联网装修的优势来分析：\r\n \r\n一、 比较传统装修模式，互联网装修价格更透明，监督更全面\r\n \r\n对于上面提到的四种模式来看，互联网装修在价格优势上更加引人注目。比如：爱空间推出的699元/㎡;搜房推出的666元/㎡。相比之下，很早兴起装修招标平台，比如：艾逸网则是通过提供的多份装修公司详细报价作对比的方式,在价格透明问题上对业主吸引力更大，因为业主在日常生活消费中都知道“货比三家“这个简单的道理。\r\n \r\n二、互联网打破传统装修的信息闭塞问题\r\n \r\n业主通过互联网能快速获取各种装修资讯如：装修方案、装修预算、主材价格、施工工艺等，其实质上是在打破传统装修行业长久以来“信息闭塞”的问题。随着移动互联网的兴起，微信、微博分享转载功能的大量使用。传统装修行业的负面信息以其惊人的速度被业主分享或转载，对传统装修起到很大威慑。所以每年的315都是装修公司高度重视的日子，担心业主的投诉及维权对公司造成负面影响。\r\n \r\n通过以上两点的分析来看，互联网装修目前玩的只是概念，而对传统的装修公司而言，真正应该放弃以“重营销”为主的装修模式，从而把更多的精力放在服务业主，提升工艺水平及工程质量的环节，同时把互联网作为工具以提升对业主的附加值。\r\n \r\n现阶段，互联网装修才处在萌芽状态，毕竟是个新生事物，消费者对其自然抱有一定的怀疑态度。对业主而言装修不是小事，选择互联网装修的人毕竟还是少数，据相关的数据统计互联网家装渗透率在8%以内。相比之下，艾逸网类装修网站经过近6年多的发展已日趋成熟，作为第三方的互联网装修平台，除了具有以上互联网特性外，还具有第三方监理作用，这点能在一定程度上提升消费者选择互联网装修的信心!但互联网瞬息万变真正谁才能笑到最后，谁才能把互联网装修玩到极致，还得让我们的业主来给出答案。 ',0,6,'123',1,1510227122,1510227273,400,1),(7,'/img/New/2017-11-09/5a043d346bfc8.jpg','2015秋装修流行潮流趋势','2015又到了一年中最适合装修的季节。今秋别墅装修又有哪些流行趋势呢？让小编为您打探最新别墅装修热潮，因为只有深谙这些新变化，才能使你的新家变得更加舒适、时尚....... 装修...','2015又到了一年中最适合装修的季节。今秋别墅装修又有哪些流行趋势呢？让小编为您打探最新别墅装修热潮，因为只有深谙这些新变化，才能使你的新家变得更加舒适、时尚.......\r\n \r\n装修风格注重简单：“在简单中求艺术”，以装饰品和艺术陈设去营造起居空间，要给居室留下变换的空间，同时注重环保和节约。\r\n \r\n地板瓷砖显文化品位：据某品牌陶瓷有关负责人透露，“现在的装修都力求简单，但又希望能有些品位，这只能在瓷砖、地板这些成品材料上做文章。而如今的瓷砖都通过三维立体图案、表面光泽深浅的变化，将各种富有代表性的图案与色彩巧妙搭配，使瓷砖也充满了文化韵味，似乎已成为了一种装饰品。”\r\n \r\n材料更加钟情轻薄：在别墅装修方面，比较流行纯粹、清淡的特点，这就需要在装修材料的选材上注重“轻”、“薄”。而与此对应的是，装饰中可采用一些玻璃质感的小物件，以突出通透感。此外，窗帘的作用是装饰为主，因此薄型窗帘也是流行元素，像透明纱质的材料，或上面有色彩鲜艳刺绣图案的材料尤其受欢迎。 ',0,6,'123',1,1510227252,1510227330,100,1);
/*!40000 ALTER TABLE `new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `username` varchar(255) DEFAULT NULL COMMENT '姓名',
  `tel` varchar(255) DEFAULT NULL COMMENT '电话',
  `time` varchar(255) DEFAULT NULL COMMENT '时间',
  `code` varchar(255) DEFAULT NULL COMMENT '验证码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,'123','17756550415',NULL,NULL),(2,'312','17756550415',NULL,NULL),(3,'123','17756550415','1505459961','0'),(4,'123','17756550415','1505460198','123');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `img_1` varchar(255) DEFAULT NULL COMMENT '图片_1',
  `img_2` varchar(255) DEFAULT NULL COMMENT '图片_2',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` varchar(255) NOT NULL COMMENT '简介',
  `pay` varchar(255) NOT NULL COMMENT '价格',
  `url` varchar(255) NOT NULL COMMENT '链接',
  `user_id` int(11) DEFAULT NULL COMMENT '发布人id',
  `user_name` varchar(255) DEFAULT NULL COMMENT '发布人账号',
  `is_valid` tinyint(1) DEFAULT '0' COMMENT '是否有效：0-未发布 1-已发布',
  `created_time` int(11) NOT NULL COMMENT '创建时间',
  `updated_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='产品表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (4,'/product/2017-10-25/59f0392fcda96.jpg',NULL,'213','123','123','',6,'123',1,1508915503,1508915503),(5,'/product/2017-10-25/59f03945a4b4f.jpg',NULL,'123','12312','13','',6,'123',0,1508915525,1508915532);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_ser`
--

DROP TABLE IF EXISTS `product_ser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_ser` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `img` varchar(255) DEFAULT NULL COMMENT '图片',
  `url` varchar(255) DEFAULT NULL COMMENT '链接',
  `user_id` int(11) NOT NULL COMMENT '发布人id',
  `user_name` varchar(255) NOT NULL COMMENT '发布人账号',
  `is_valid` tinyint(1) DEFAULT '0' COMMENT '是否有效：0-未发布 1-已发布',
  `created_time` int(11) NOT NULL COMMENT '创建时间',
  `updated_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品服务表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_ser`
--

LOCK TABLES `product_ser` WRITE;
/*!40000 ALTER TABLE `product_ser` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_ser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `img` varchar(255) DEFAULT NULL COMMENT '图片',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `address` varchar(255) NOT NULL COMMENT '项目地址',
  `area` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL COMMENT '项目介绍',
  `type_id` int(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT '发布人id',
  `user_name` varchar(255) DEFAULT NULL COMMENT '发布人账号',
  `is_valid` tinyint(1) DEFAULT '0' COMMENT '是否有效：0-未发布 1-已发布',
  `created_time` int(11) NOT NULL COMMENT '创建时间',
  `updated_time` int(11) NOT NULL COMMENT '修改时间',
  `seat` varchar(50) DEFAULT NULL COMMENT '位置',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COMMENT='方案表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (2,'/img/Case/2017-11-13/5a08f9239d5a1.jpg','广州育晟广告公司办公室','广州越秀环市东路476号之一广州住建','300㎡','设计公司十分了解广告设计人员的工作性质，所以在方案设计之时，我们侧重考虑的是员工的办公环境。这些设计人员兼顾着创意，思维常常感觉到才思枯竭，希望和同事能方便地交流。方案上我们设计了一个敞开式办公区域，延伸了空间，扩大了思维。色彩上运用大胆，表达出时尚感、活跃感，凸显出公司的创造力和活力。',1,6,'123',1,1508916557,1510537507,'100'),(3,'/img/Case/2017-11-13/5a08f9322fd4d.jpg','迈格森国际教育室内设计','广州市越秀区中山四路319号玉鸣轩','800㎡','迈格森国际教育是由新东方集团和美国麦格希集团联手打造的高端教育品牌，整个设计方案利用了LOGO颜色作为主导，塑造出新颖、国际化的教育环境。 迈格森依托新东方多年英语培训经验并结合国际先进教育资源为中国4-17岁青少年提供个性化学习解决方案和一站式英语学习平台。',1,6,'123',1,1508918491,1510537522,'200'),(4,'/img/Case/2017-11-13/5a08f95de76b4.jpg','贸易公司办公室','广州市天河区科韵路','600㎡','本案例的前台设计所运用的颜色素材完美体现了该贸易公司的专业和稳重，从而给到客户一种安心、放心的感觉。董事长办公室则利用了古色古香的办公家具和水墨画作为装饰，大大的提升了主人的格调与品位。',1,6,'123',1,1510204865,1510537565,'300'),(5,'/img/Case/2017-11-13/5a08f9b20d715.jpg','致生集团广州分公司办公室','广州市天河区耀中大厦17楼','400㎡','致生集团广州办公室装修设计案例中，设计师将办公室设计的元素、色彩、照明、原材料简化到最少的程度，同时又能保持对色彩、材料的质感极高的敏感度。整体方案以米黄色和白色的结合，这样的效果给人带来一种简约、时尚、明净的感受。',1,6,'123',1,1510205216,1510537650,'400'),(6,'/img/Case/2017-11-13/5a08f9cf17a66.jpg','致颜熙SPA','致颜熙SPA会所','320㎡','颜熙spa会所是一个能提供专业肌肤咨询独享个性化私人定制，感 受超值服务的专业spa会所，并引进高端设备，一流的环境，成为集美容、美体、化妆、养生、spa水疗等服务项目为一体的高端大气spa美容会所！颜熙 spa会所也是歌缔装饰目前刚接受的工程，以下歌缔装饰小编为大家分享其设计作品！',2,6,'123',1,1510210090,1510538980,'100'),(7,'/img/Case/2017-11-13/5a08f9f011bf4.jpg','广州广告传媒公司办公室','广州市科技大厦','2700㎡','该企业办公室设计以大方庄重为中心思想，从办公功能到办公家具装饰上设计师都用心构想。会议室、接待室、总经理室皆选用了高档皮质的办公座椅，不但能令使用者坐着有舒适的感觉，还能增加整个办公室的大方庄重感。',2,6,'123',1,1510210165,1510538990,'200'),(8,'/img/Case/2017-11-13/5a08fa148c308.jpg','雄志企业保利克洛维写字楼','广州市天河区珠江新城黄埔大道保利克洛维二期','120㎡','本写字楼装修设计项目位于广州天河区保利克洛维，设计方案打破了传统写字楼装修格局和风格，以真正舒适休闲的环境为主要概念。这里的办公区并非一排排的办公桌椅，而是类似高级餐厅的布局。',2,6,'123',1,1510210609,1510539000,'300'),(9,'/img/Case/2017-11-13/5a08fa2503817.jpg','肯纳飞硕金属公司广州办公室','华南新材料创新园G1-819','200㎡','Kennametal公司创立于1938年，它的业务从汽车工业 到航空航天工业,从纺织机械到电子行业，从道路建设到石油开采。肯纳以其优质完备的产品和完善的服务享誉世界六十年。一直以来，肯纳是歌缔装饰长期合作的 伙伴，近期广州科学城一办公室装修设计项目依然放心的交给了歌缔装饰全权负责。',2,6,'123',1,1510210704,1510539013,'400'),(10,'/img/Case/2017-11-13/5a08f8f708e9f.jpg','一号公馆会所','成都','3000㎡','本案设计区域包含：大厦外立面、大堂电梯间、多功能厅、卫生间、商务会议室设计、五层电梯间和接待厅等设计效果图。',3,6,'123',1,1510211022,1510539021,'100'),(11,'/img/Case/2017-11-13/5a08fa38decde.jpg','酷蜂教育科技有限公司','广州市天河区东圃大马路时代TIT创意园','450㎡','本案注重室内空间与企业VI的衔接与呼应，在设计前期为本案找准空间色调及形体调性显得尤为重要，酷蜂的感觉利用蜂巢阵列的效果，不单纯只为空间内的人办公舒适性服务，它更加与企业产品，文化相互感染，利用这一特性体现企业不断发展、散射、影响力等等。 英伦风一直是我们不断在尝试的风格，注重私人办公区域的体现，将软装极其精致的设计在这个具有工业革命时代印记的空间，显得很有情调。光影效果在自然界的体现是鬼斧神工的杰作，人类在追求和模仿自然界的光影效果，将其运用到室内空间中，为营造舒适的办公环境。',3,6,'123',1,1510211073,1510539031,'200'),(12,'/img/Case/2017-11-13/5a08fa8ec808c.jpg','古典结合现代文化的大堂','广州市天河区','900㎡','本次设计案例传递的是浓厚的历史文化气息，大堂天花使用了实木装饰出不同的造型，营造出一种古典气息。',3,6,'123',1,1510211112,1510539055,'300'),(13,'/img/Case/2017-11-13/5a08faf6efb3a.jpg','CEO教育机构培训办公室','广州市番禺区大学城','500㎡','本案例企业主要是针对公司经理、老板级别的人才进行权威的深造培训，以会议的模式展开课程。在500平方的办公室里面，会议室已占用了大部分的面积，有多人的演讲培训室和大小不一的会议室。每个会议室的装修都采用了不同的设计手法，使得单一沉闷的会议室变得生动、舒适。',3,6,'123',1,1510211162,1510539063,'400'),(14,'/img/Case/2017-11-13/5a08fb1265e7c.jpg','惠州华悦雅苑售楼部','广东省惠州市大亚湾澳头','1500㎡','惠州华悦雅苑打造的是当地最优滨海生活区，将休闲与高档的结合。华悦雅苑的售楼部设计以温馨理念出发，在软装搭配部分充分体现出该理念。',4,6,'123',1,1510211222,1510539069,'100'),(15,'/img/Case/2017-11-13/5a08fb8eabc20.jpg','深圳销售中心售楼部','深圳市','1700㎡','本案设计布局表达的是一种生活方式，追求人性化与个性化的价值理念。设计师深入挖掘简约而不简单的设计手法，也是对时尚简约而不失奢华的一种诠释！看了本案的设计之后,你会不会有一种惊讶，惊讶着它的富丽堂皇而不庸俗!',4,6,'123',1,1510211269,1510539101,'200'),(16,'/img/Case/2017-11-13/5a08fb5ba5557.jpg','东莞别墅设计','广东省东莞市','600㎡','本别墅设计方案通过传统的文化特征、现代的居住环境体现出对“贵族精神”的崇尚，然而随着时尚观念的不断发展，这种昔日以奢华取胜的“贵族精神”逐渐偏向于简约的潮流，在保留原有生活居住品位的同时兼具审美和实用性。',4,6,'123',1,1510211359,1510539112,'300'),(17,'/img/Case/2017-11-13/5a08fb748bf83.jpg','广州番禺区唐总别墅','广州市番禺区','280㎡','东南亚豪华风格是一种结合了东南亚民族岛屿特色及精致文化品位的家居设计方式,多适宜喜欢静谧与雅致、文化修养较高的成功人士。设计师在设计时运用了木材和其他的天然原材料，深木色的家具以及灯光的变化体现了稳重及豪华感。',4,6,'123',1,1510211404,1510539124,'400');
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `img` varchar(255) DEFAULT NULL COMMENT '图片',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `url` varchar(255) NOT NULL COMMENT '链接',
  `user_id` int(11) DEFAULT NULL COMMENT '发布人id',
  `user_name` varchar(255) DEFAULT NULL COMMENT '发布人账号',
  `is_valid` tinyint(1) DEFAULT '0' COMMENT '是否有效：0-未发布 1-已发布',
  `created_time` int(11) NOT NULL COMMENT '创建时间',
  `updated_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='方案表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,'/img/service/2017-11-08/5a02c45d9af50.jpg','办公空间','',6,'123',1,0,1510130781),(2,'/img/service/2017-11-08/5a02c48f56cdc.jpg','商业空间','',6,'123',1,1508916557,1510130831),(3,'/img/service/2017-11-08/5a02c49ce0333.jpg','餐饮空间','',6,'123',1,1508918491,1510130844),(4,'/img/service/2017-11-08/5a02c4c58a578.jpg','娱乐空间','',6,'123',1,1510130885,1510130885),(5,'/img/service/2017-11-08/5a02c4d534ddf.jpg','酒店会所','',6,'123',1,1510130901,1510130901),(6,'/img/service/2017-11-08/5a02c4e2e2a48.jpg','展示空间','',6,'123',1,1510130914,1510130914),(7,'/img/service/2017-11-08/5a02c4ed9a09c.jpg','教育空间','',6,'123',1,1510130925,1510130925),(8,'/img/service/2017-11-08/5a02c4f81e67c.jpg','住宅空间','',6,'123',1,1510130936,1510130936);
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `img` varchar(255) DEFAULT NULL COMMENT '图片',
  `url` varchar(255) NOT NULL COMMENT '链接',
  `user_id` int(11) DEFAULT NULL COMMENT '发布人id',
  `user_name` varchar(255) DEFAULT NULL COMMENT '发布人账号',
  `is_valid` tinyint(1) DEFAULT '0' COMMENT '是否有效：0-未发布 1-已发布',
  `created_time` int(11) NOT NULL COMMENT '创建时间',
  `updated_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='轮播图表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slideshow`
--

LOCK TABLES `slideshow` WRITE;
/*!40000 ALTER TABLE `slideshow` DISABLE KEYS */;
INSERT INTO `slideshow` VALUES (1,'/img/chart/2017-11-08/5a02b98475273.jpg','',6,'123',1,1508476614,1510128004),(3,'/img/chart/2017-11-08/5a02b9b229601.jpg','',6,'123',1,1510127787,1510128050),(4,'/img/chart/2017-11-08/5a02b993ef322.jpg','',6,'123',1,1510128019,1510128451);
/*!40000 ALTER TABLE `slideshow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `img` varchar(255) DEFAULT NULL COMMENT '图片',
  `name` varchar(255) DEFAULT NULL COMMENT '姓名',
  `zhicheng` varchar(255) DEFAULT NULL COMMENT '职称',
  `jianjie` varchar(255) NOT NULL COMMENT '简介',
  `fenge` varchar(255) DEFAULT NULL COMMENT '分格',
  `exper` varchar(255) DEFAULT NULL COMMENT '经验',
  `work_time` varchar(255) DEFAULT NULL COMMENT '工作年限',
  `is_valid` tinyint(1) DEFAULT '0' COMMENT '是否有效：0-未发布 1-已发布',
  `created_time` int(11) NOT NULL COMMENT '创建时间',
  `updated_time` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='团队表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'/img/team/2018-01-31/5a712865c8b4f.jpg','设计师','高级设计师','2006年年毕业于华东地质学院(现东华理工大学)艺术设计专业，2010年毕业于日本东京艺术大学室内设计专业，获得硕士学位，现为广州市歌缔装饰设计有限公司总经理、设计总监。东建筑设计协会副会长、中国室内设计协会会员。','设计以现代风格见长，敢于突破、创新，尝试新手法，经他手设计的酒店风格各异，各不雷同，各自精彩。设计手法大气、简炼，同时注重细节的精致，对空间有很强的把握能力。','有10年酒店、办公室设计经验，参与过酒店从整体策划，方案构思，施工图制作，与各专业的协调配合，到现场配合直至竣工验收的全过程，相关经验丰富，工作严谨、尽心尽职。','5年',1,1510281665,1517365349),(2,'/img/team/2018-01-31/5a7128711875f.jpg','总监','设计总监','2006年年毕业于华东地质学院(现东华理工大学)艺术设计专业，2010年毕业于日本东京艺术大学室内设计专业，获得硕士学位，现为广州市歌缔装饰设计有限公司总经理、设计总监。东建筑设计协会副会长、中国室内设计协会会员。','设计以现代风格见长，敢于突破、创新，尝试新手法，经他手设计的酒店风格各异，各不雷同，各自精彩。设计手法大气、简炼，同时注重细节的精致，对空间有很强的把握能力。','有10年酒店、办公室设计经验，参与过酒店从整体策划，方案构思，施工图制作，与各专业的协调配合，到现场配合直至竣工验收的全过程，相关经验丰富，工作严谨、尽心尽职。','10年',1,1510283381,1517365361),(3,'/img/team/2018-01-31/5a71287897204.jpg','顾问','顾问设计师','2006年年毕业于华东地质学院(现东华理工大学)艺术设计专业，2010年毕业于日本东京艺术大学室内设计专业，获得硕士学位，现为广州市歌缔装饰设计有限公司总经理、设计总监。东建筑设计协会副会长、中国室内设计协会会员。','设计以现代风格见长，敢于突破、创新，尝试新手法，经他手设计的酒店风格各异，各不雷同，各自精彩。设计手法大气、简炼，同时注重细节的精致，对空间有很强的把握能力。\r\n','有10年酒店、办公室设计经验，参与过酒店从整体策划，方案构思，施工图制作，与各专业的协调配合，到现场配合直至竣工验收的全过程，相关经验丰富，工作严谨、尽心尽职。','8年',1,1510284447,1517365368);
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` varchar(255) DEFAULT NULL COMMENT '分类名',
  `time` varchar(255) DEFAULT NULL COMMENT '时间',
  `updated_time` varchar(100) DEFAULT NULL COMMENT '修改时间',
  `is_valid` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (1,'商业空间',NULL,'1510195235',1),(2,'娱乐空间',NULL,'1510195252',1),(3,'酒店会所','1505459961','1510195264',1),(4,'住宅空间','1505460198','1510195278',1);
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `auth_key` varchar(32) NOT NULL COMMENT '自动登录key',
  `password_hash` varchar(255) NOT NULL COMMENT '加密密码',
  `password_reset_token` varchar(255) DEFAULT NULL COMMENT '重置密码token',
  `email_validate_token` varchar(255) DEFAULT NULL COMMENT '邮箱验证token',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `role` smallint(6) NOT NULL DEFAULT '10' COMMENT '角色等级',
  `status` smallint(6) NOT NULL DEFAULT '1' COMMENT '状态 1 有肖 非1 无效',
  `avatar` varchar(255) DEFAULT NULL COMMENT '头像',
  `vip_lv` int(11) DEFAULT '0' COMMENT 'vip等级',
  `created_at` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='会员表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'zhangkun','rN5dsp_Z3CVcRpu1ux-OYFfKTf7BvmXK','$2y$13$AxMk5gTSvhkl6uXhOUHU2evw6Hbw3AKV9XJamPjCwJsYyrUUF/xpK',NULL,NULL,'11@qq.com',10,10,NULL,0,1494661643,1494661643),(2,'zhang','Gj-zbbrdBnE7bMcqC-tvoZz3Zv9Vxq6l','$2y$13$eASQHIT5vvz0TGUIvDXt..cokqI5LttiznCJoGmV0mJrLA8KuxCfK',NULL,NULL,'11@11.com',10,10,NULL,0,1494845546,1494845546),(3,'zhangsan','dnLa8iTq_Typie6jnBz4pVivpQryycLi','$2y$13$Fm.dSraUdPVNQKvFwxUdjua9YkXc3PuaAy.UMravdpcCa4cUEIIdO',NULL,NULL,'980@qq.com',10,10,NULL,0,1499503211,1499503211),(4,'zhangsan111','vgpcCaGCQIhVOAC5c2loeqrTLU_aDOoV','$2y$13$lGgbo913nJ2dj8rFq8JxIOVIPtnilTyaESFlLJBTvuSHW1ND4mxOu',NULL,NULL,'qq@qq.com',10,10,NULL,0,1504159206,1504159206);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-31 10:28:53
