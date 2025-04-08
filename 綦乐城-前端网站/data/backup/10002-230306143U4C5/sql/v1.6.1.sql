UPDATE `ey_shop_express` SET `is_choose`='1' WHERE `express_code`='fengwang';
ALTER TABLE `ey_auth_role` ADD COLUMN `switch_map`  tinyint(1) NULL DEFAULT 0 COMMENT '功能地图' AFTER `online_update`;
UPDATE `ey_auth_role` SET `switch_map`='1' WHERE `id` > 0;