<?php
class installerDbUpdaterPrt {
	static public function runUpdate() {
		//self::update_001();
	}
	
	static public function update_001() {
		global $wpdb;
		$wpPrefix = $wpdb->prefix;
		/*dbPrt::query("INSERT INTO `". $wpPrefix.BUP_DB_PREF. "modules` ( id, code, active, type_id, params, has_tab, label, description, ex_plug_dir) 
		  				VALUES (NULL, 'access', 1, 1, '', 0, 'Access', 'Access', NULL);");
		
		if (!dbPrt::exist($wpPrefix.BUP_DB_PREF. "access")) {
			$q = "CREATE TABLE `". $wpPrefix.BUP_DB_PREF. "access` (
					`id` int(11) NOT NULL AUTO_INCREMENT,
					`access` varchar(255) DEFAULT NULL,
					`type_access` tinyint(1) DEFAULT NULL,
					PRIMARY KEY (`id`)
				  ) DEFAULT CHARSET=utf8;";
			 dbDelta($q);
		}
		dbPrt::query("INSERT INTO `". $wpPrefix.BUP_DB_PREF. "access` (id, access, type_access) VALUES (1, '10', 3);");
		
		dbPrt::query("INSERT INTO `". $wpPrefix.BUP_DB_PREF. "options` (`id`,`code`,`value`,`label`,`description`,`htmltype_id`,`params`,`cat_id`,`sort_order`) VALUES 
					(NULL,'sub_enter_email_msg','Enter your email to subscribe','\"Enter Email\" message','\"Enter Email\" message',1,'',3,0),
					(NULL,'sub_success_msg','Thank you for subscription!','Subscribe success message','Subscribe success message',1,'',3,0),
					
					(NULL,'soc_yt_enable_link','','Youtube','Youtube',1,'',18,0),
					(NULL,'soc_yt_account','','Youtube','Youtube',1,'',18,0),
					(NULL,'soc_yt_enable_subscribe','','Youtube','Youtube',1,'',18,0),
					(NULL,'soc_yt_sub_layout','default','Youtube','Youtube',1,'',18,0),
					(NULL,'soc_yt_sub_theme','default','Youtube','Youtube',1,'',18,0),
					
					(NULL,'soc_im_enable_link','','Instagram','Instagram',1,'',18,0),
					(NULL,'soc_im_account','','Instagram','Instagram',1,'',18,0);");*/
	}
}