<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-13 21:45:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$execute ~ APPPATH\classes\model\game.php [ 193 ]
2012-09-13 21:45:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$execute ~ APPPATH\classes\model\game.php [ 193 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(193): Kohana_Core::error_handler(Array, '4')
#1 Z:\home\test1.ru\www\application\classes\model\game.php(98): Model_Game->damage_discover(true)
#2 Z:\home\test1.ru\www\application\classes\controller\api.php(79): Model_Game->get_opp_ships()
#3 [internal function]: Controller_Api->action_fire(Object(Controller_Api))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}