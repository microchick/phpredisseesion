 
<?php
 
// 引入初始化文件
require_once("redisSession.php");
$handler = new redisSession(array(
               'host' => "192.168.105.252",
               'port' => "6379",
			   'password' => "a17D40F5BF8696A70236BCAF4626657C",
				));
$handler->begin();
// 这也是必须的，打开session，必须在 session_set_save_handler 后面执行
session_start();
/*************************************************************************/

/*简易版*/
$_SESSION['think']['test'] = "Hello world";  
$_SESSION['think']['name']  = "jackie";
print_r($_SESSION);
