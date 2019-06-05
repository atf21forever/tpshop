<?php
return array(
	//'配置项'=>'配置值'
    //TP3.2默认没有启用路由，需要在配置文件中开启
    'URL_ROUTER_ON'   => true, //开启路由,

    //数据库配置信息
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => '10.50.5.133', // 服务器地址
    'DB_NAME' => 'tpshop', // 数据库名
    'DB_USER' => 'tpshop', // 用户名
    'DB_PWD' => '123456', // 密码
    'DB_PORT' => 3306, // 端口
    'DB_PREFIX'             =>  'tp_',    // 数据库表前缀
  

    // 显示页面Trace信息
    'SHOW_PAGE_TRACE' =>true,

    )

?>