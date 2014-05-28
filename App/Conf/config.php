<?php
return array(
	// 数据库配置信息
	'DB_HOST' => 'localhost',
	'DB_USER' => 'root',
	'DB_PWD' => '',
	'DB_NAME' => 'grade',
	'DB_PREFIX' => 'g_',
	
	// 开启日志记录
	'LOG_RECORD' => true,
	'LOG_LEVEL' => 'EMERG,ALERT,CRIT,ERR',

	// APP分组实现
	'APP_GROUP_LIST' => 'Public,Manage,Student,Teacher',
	'DEFAULT_GROUP' => 'Public',

	'URL_MODEL' => 2,


	
);
?>