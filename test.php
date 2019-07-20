 
<?php
 
// 引入初始化文件
require_once("redisSession.php");
$handler = new redisSession(array(
               'host' => "192.0.0.02",
               'port' => "6379",
	       'password' => "123456789",
				));
$handler->begin();
// 这也是必须的，打开session，必须在 session_set_save_handler 后面执行
session_start();
/*************************************************************************/

/*简易版*/
$_SESSION['think']['test'] = "Hello world";  
$_SESSION['think']['name']  = "jackie";
print_r($_SESSION);
