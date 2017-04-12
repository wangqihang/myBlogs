<?php
return array(
	//'配置项'=>'配置值'
	'SHOW_PAGE_TRACE' =>true,
    'URL_HTML_SUFFIX' => 'html|shtml|xml',

	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'think_blog',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '520',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'think_',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

    'URL_ROUTER_ON'   => true, 
    'URL_MAP_RULES'=>array(    
        //'wangqihang' => 'qihang/Thinkblog/index.php/',
        'Home/index' => 'Home/Index/index',
        'Home/resource' => 'Home/Index/resource',
        ),
);