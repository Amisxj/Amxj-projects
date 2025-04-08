DELETE FROM `ey_users_menu` WHERE `version` = 'v1' AND `mca` = 'user/Users/collection_index';
INSERT INTO `ey_users_menu` (`title`, `version`, `mca`, `active_url`, `is_userpage`, `sort_order`, `status`, `lang`, `add_time`, `update_time`) VALUES ('我的收藏', 'v1', 'user/Users/collection_index', '', '0', '100', '1', 'cn', '1590484667', '1614651537');
DELETE FROM `ey_shop_express` WHERE `express_code` = 'fengwang' AND `express_name` = '丰网速运';
INSERT INTO `ey_shop_express` (`express_code`, `express_name`, `express_lnitials`, `is_choose`, `sort_order`, `add_time`, `update_time`) VALUES ('fengwang', '丰网速运', 'F', '0', '100', '1553911076', '1647484768');
ALTER TABLE `ey_search_word` MODIFY COLUMN `word`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '关键词' AFTER `id`;
ALTER TABLE `ey_search_word` ADD COLUMN `resultNum`  int(10) NULL DEFAULT 0 COMMENT '搜索结果数量' AFTER `searchNum`;
UPDATE `ey_admin_menu` SET `title` = 'html生成' WHERE `menu_id` = '2003004';
UPDATE `ey_admin_menu` SET `title` = '生成静态html' WHERE `menu_id` = '2004016';
UPDATE `ey_admin_menu` SET `action_name` = 'arctype_index' WHERE `menu_id` = '2004004';
UPDATE `ey_users_parameter` SET `dtype` = 'datetime' WHERE `dtype` = 'date';
ALTER TABLE `ey_product_spec_preset` ADD COLUMN `merchant_id`  int(11) UNSIGNED NOT NULL DEFAULT 0 COMMENT '多商家ID' AFTER `sort_order`;
ALTER TABLE `ey_product_spec_preset` ADD COLUMN `product_add`  tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '是否在商品添加或编辑页添加的规格信息，0否，1是，默认0' AFTER `merchant_id`;
ALTER TABLE `ey_guestbook_attribute` ADD COLUMN `real_validate`  tinyint(1) UNSIGNED NULL DEFAULT 0 COMMENT '是否进行真实验证，0=不验证，1=真实验证' AFTER `validate_type`;
ALTER TABLE `ey_shop_order_comment` MODIFY COLUMN `is_anonymous`  tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '是否匿名评价：0否，1是' AFTER `is_show`;
ALTER TABLE `ey_shop_order_comment` ADD COLUMN `is_new_comment`  tinyint(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '是否新版评价：0否，1是' AFTER `is_anonymous`;
ALTER TABLE `ey_config_attribute` ADD COLUMN `type_id`  int(11) UNSIGNED NULL DEFAULT 1 AFTER `inc_type`;
ALTER TABLE `ey_arctype` ADD COLUMN `typearcrank`  int(10) NULL DEFAULT 0 COMMENT '阅读权限：0=开放浏览，-1=待审核稿件' AFTER `nofollow`;
DELETE FROM `ey_channelfield` WHERE `name` IN ('typearcrank') AND `channel_id` = '-99';
INSERT INTO `ey_channelfield` (`name`, `channel_id`, `title`, `dtype`, `define`, `maxlength`, `dfvalue`, `dfvalue_unit`, `remark`, `is_screening`, `is_release`, `ifeditable`, `ifrequire`, `ifsystem`, `ifmain`, `ifcontrol`, `sort_order`, `status`, `add_time`, `update_time`) VALUES ('typearcrank', '-99', '阅读权限：0=开放浏览，-1=待审核稿件', 'int', 'int(10)', '10', '0', '', '', '0', '0', '1', '0', '1', '1', '1', '100', '1', '1547890773', '1547890773');
ALTER TABLE `ey_shop_cart` ADD COLUMN `discount_active_id`  int(11) NULL DEFAULT 0 COMMENT '限时折扣ID,用来区分购物车的商品哪些是限时折扣活动的' AFTER `update_time`;
ALTER TABLE `ey_users_money` MODIFY COLUMN `cause_type`  tinyint(1) NULL DEFAULT 0 COMMENT '数据类型,0-消费,1-充值,2-退款,3-订单支付,4-管理员添加,5-管理员减少' AFTER `cause`;
ALTER TABLE `ey_users_money` ADD COLUMN `admin_id`  int(10) NULL DEFAULT 0 COMMENT '管理员表ID' AFTER `update_time`;
ALTER TABLE `ey_users_score` MODIFY COLUMN `type`  tinyint(1) NULL DEFAULT 1 COMMENT '类型:1-提问,2-回答,3-最佳答案4-悬赏退回,5-每日签到,6-管理员编辑' AFTER `id`;
ALTER TABLE `ey_users_score` ADD COLUMN `current_score`  int(10) NULL DEFAULT 0 COMMENT '当前积分' AFTER `update_time`;
ALTER TABLE `ey_users_score` ADD COLUMN `current_devote`  int(10) NULL DEFAULT 0 COMMENT '当前贡献值' AFTER `current_score`;
ALTER TABLE `ey_users_score` ADD COLUMN `admin_id`  int(10) NULL DEFAULT 0 COMMENT '管理员表ID' AFTER `current_devote`;
ALTER TABLE `ey_users_score` ADD COLUMN `remark`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '备注' AFTER `admin_id`;

DROP TABLE IF EXISTS `ey_config_type`;
CREATE TABLE `ey_config_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) DEFAULT '' COMMENT '分组名称',
  `status` tinyint(1) DEFAULT '1',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  `sort_order` int(11) DEFAULT '100' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='自定义变量分组表';

INSERT INTO `ey_config_type` (`id`, `type_name`, `add_time`, `update_time`) VALUES ('1', '默认分组', '1650271499', '1650271499');

DROP TABLE IF EXISTS `ey_ddos_log`;
CREATE TABLE `ey_ddos_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `md5key` varchar(50) DEFAULT '' COMMENT 'md5值',
  `file_name` varchar(500) DEFAULT '' COMMENT '文件名',
  `file_num` int(10) DEFAULT '0' COMMENT '已扫描数',
  `file_total` int(10) DEFAULT '0' COMMENT '总文件数',
  `file_num_ky` int(10) DEFAULT '0' COMMENT '可疑恶意文件数',
  `is_suspicious` tinyint(1) DEFAULT '0' COMMENT '是否可疑',
  `html` text,
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='ddos查杀进度记录表';

DROP TABLE IF EXISTS `ey_product_spec_data_handle`;
CREATE TABLE `ey_product_spec_data_handle` (
  `spec_id` int(10) NOT NULL COMMENT '对应 product_spec_data 数据表',
  `aid` int(10) DEFAULT '0' COMMENT '对应 product_spec_data 数据表',
  `spec_mark_id` int(10) DEFAULT '0' COMMENT '对应 product_spec_data 数据表',
  `spec_name` varchar(100) DEFAULT '' COMMENT '对应 product_spec_data 数据表',
  `spec_value_id` int(10) DEFAULT '0' COMMENT '对应 product_spec_data 数据表',
  `spec_value` varchar(100) DEFAULT '' COMMENT '对应 product_spec_data 数据表',
  `spec_is_select` tinyint(1) DEFAULT '0' COMMENT '对应 product_spec_data 数据表',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '对应 product_spec_data 数据表',
  `add_time` int(11) DEFAULT '0' COMMENT '对应 product_spec_data 数据表',
  `update_time` int(11) DEFAULT '0' COMMENT '对应 product_spec_data 数据表',
  PRIMARY KEY (`spec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='商品规格表(product_spec_data)预处理规格数据表';


DROP TABLE IF EXISTS `ey_download_order`;
CREATE TABLE `ey_download_order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章订单ID',
  `order_code` varchar(50) NOT NULL DEFAULT '' COMMENT '媒体订单编号',
  `users_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `order_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单状态：0未付款，1已付款',
  `order_amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '订单应付总金额',
  `pay_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '支付时间',
  `pay_name` varchar(20) NOT NULL DEFAULT '' COMMENT '支付方式名称',
  `wechat_pay_type` varchar(20) NOT NULL DEFAULT '' COMMENT '微信支付时，标记使用的支付类型（扫码支付，微信内部，微信H5页面）',
  `pay_details` text COMMENT '支付时返回的数据，以serialize序列化后存入，用于后续查询。',
  `product_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '视频文档ID',
  `product_name` varchar(100) DEFAULT '' COMMENT '视频文档名称',
  `product_litpic` varchar(500) DEFAULT '' COMMENT '视频文档封面图片',
  `lang` varchar(30) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) unsigned DEFAULT '0' COMMENT '下单时间',
  `update_time` int(11) unsigned DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_code` (`order_code`) USING BTREE,
  KEY `users_id` (`users_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

ALTER TABLE `ey_shop_product_attr` ADD COLUMN `is_custom`  tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '是否自定义参数(0否 1是)' AFTER `attr_price`;
ALTER TABLE `ey_shop_product_attr` ADD COLUMN `sort_order`  int(11) UNSIGNED NOT NULL DEFAULT 100 COMMENT '属性排序' AFTER `is_custom`;
ALTER TABLE `ey_shop_product_attribute` ADD COLUMN `is_custom`  tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '是否自定义参数(0否 1是)' AFTER `is_del`;
ALTER TABLE `ey_archives` ADD COLUMN `no_vip_pay`  tinyint(3) NULL DEFAULT 0 COMMENT 'restric_type = 2 时,会员专享,非会员可付费使用,0-关闭,1-开启' AFTER `update_time`;
