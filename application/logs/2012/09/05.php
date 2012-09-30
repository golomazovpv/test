<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-05 09:28:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'player1' in 'where clause' [ SELECT * FROM `ships` WHERE `player1` = '1' AND `time` IS NOT NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-05 09:28:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'player1' in 'where clause' [ SELECT * FROM `ships` WHERE `player1` = '1' AND `time` IS NOT NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 Z:\home\test1.ru\www\application\classes\model\game.php(56): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\application\classes\controller\game.php(12): Model_Game->get_my_destroy()
#3 [internal function]: Controller_Game->action_index()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Game))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-05 13:52:04 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\model\game.php [ 69 ]
2012-09-05 13:52:04 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\model\game.php [ 69 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(69): Kohana_Core::error_handler()
#1 Z:\home\test1.ru\www\application\classes\controller\game.php(12): Model_Game->get_my_destroy()
#2 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-05 14:10:41 --- ERROR: ErrorException [ 8 ]: Undefined index:  10 ~ APPPATH\classes\model\game.php [ 104 ]
2012-09-05 14:10:41 --- STRACE: ErrorException [ 8 ]: Undefined index:  10 ~ APPPATH\classes\model\game.php [ 104 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(104): Kohana_Core::error_handler(Array, '10')
#1 Z:\home\test1.ru\www\application\classes\model\game.php(62): Model_Game->ver_alive()
#2 Z:\home\test1.ru\www\application\classes\controller\game.php(12): Model_Game->get_my_destroy()
#3 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-05 14:11:23 --- ERROR: ErrorException [ 8 ]: Undefined index:  10 ~ APPPATH\classes\model\game.php [ 104 ]
2012-09-05 14:11:23 --- STRACE: ErrorException [ 8 ]: Undefined index:  10 ~ APPPATH\classes\model\game.php [ 104 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(104): Kohana_Core::error_handler(Array, '10')
#1 Z:\home\test1.ru\www\application\classes\model\game.php(62): Model_Game->ver_alive()
#2 Z:\home\test1.ru\www\application\classes\controller\game.php(12): Model_Game->get_my_destroy()
#3 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}