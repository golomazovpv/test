<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-01 06:01:32 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ships' not found ~ APPPATH\classes\controller\api.php [ 9 ]
2012-08-01 06:01:32 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ships' not found ~ APPPATH\classes\controller\api.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-01 06:02:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ships' not found ~ APPPATH\classes\controller\api.php [ 9 ]
2012-08-01 06:02:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ships' not found ~ APPPATH\classes\controller\api.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-01 06:05:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ships' not found ~ APPPATH\classes\controller\api.php [ 9 ]
2012-08-01 06:05:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ships' not found ~ APPPATH\classes\controller\api.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-01 06:07:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ships' not found ~ APPPATH\classes\controller\api.php [ 9 ]
2012-08-01 06:07:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ships' not found ~ APPPATH\classes\controller\api.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-01 06:08:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ships' not found ~ APPPATH\classes\controller\api.php [ 9 ]
2012-08-01 06:08:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ships' not found ~ APPPATH\classes\controller\api.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-01 06:08:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ships' not found ~ APPPATH\classes\controller\api.php [ 9 ]
2012-08-01 06:08:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ships' not found ~ APPPATH\classes\controller\api.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-01 06:09:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ship' not found ~ APPPATH\classes\controller\api.php [ 9 ]
2012-08-01 06:09:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ship' not found ~ APPPATH\classes\controller\api.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-01 06:15:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH\classes\model\ship.php [ 14 ]
2012-08-01 06:15:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH\classes\model\ship.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('11:1:14:2:17:3:...')
#1 {main}
2012-08-01 06:31:32 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\model\gamerequest.php [ 52 ]
2012-08-01 06:31:32 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\model\gamerequest.php [ 52 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(52): Kohana_Core::error_handler('{"action":"agre...')
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc()
#2 [internal function]: Controller_Api->action_gamerequest(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-01 06:33:07 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\model\gamerequest.php [ 52 ]
2012-08-01 06:33:07 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\model\gamerequest.php [ 52 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(52): Kohana_Core::error_handler('{"action":"agre...')
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc()
#2 [internal function]: Controller_Api->action_gamerequest(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-01 06:33:08 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\model\gamerequest.php [ 52 ]
2012-08-01 06:33:08 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\model\gamerequest.php [ 52 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(52): Kohana_Core::error_handler('{"action":"agre...')
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc()
#2 [internal function]: Controller_Api->action_gamerequest(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-01 06:33:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\model\gamerequest.php [ 52 ]
2012-08-01 06:33:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\model\gamerequest.php [ 52 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(52): Kohana_Core::error_handler('{"action":"agre...')
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc()
#2 [internal function]: Controller_Api->action_gamerequest(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-01 06:33:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\model\gamerequest.php [ 52 ]
2012-08-01 06:33:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\model\gamerequest.php [ 52 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(52): Kohana_Core::error_handler('{"action":"agre...')
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc()
#2 [internal function]: Controller_Api->action_gamerequest(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-01 06:33:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\model\gamerequest.php [ 52 ]
2012-08-01 06:33:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\model\gamerequest.php [ 52 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(52): Kohana_Core::error_handler('{"action":"agre...')
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc()
#2 [internal function]: Controller_Api->action_gamerequest(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-01 09:18:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\model\game.php [ 13 ]
2012-08-01 09:18:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\model\game.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Game')
#1 {main}
2012-08-01 09:27:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'player_id' in 'where clause' [ SELECT `orm_game`.* FROM `games` AS `orm_game` WHERE `player_id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-08-01 09:27:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'player_id' in 'where clause' [ SELECT `orm_game`.* FROM `games` AS `orm_game` WHERE `player_id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `orm_gam...', false, Array)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 Z:\home\test1.ru\www\application\classes\model\game.php(11): Kohana_ORM->find()
#4 Z:\home\test1.ru\www\application\classes\controller\game.php(10): Model_Game->__construct(Object(Model_User))
#5 [internal function]: Controller_Game->action_index()
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Game))
#7 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-01 09:49:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\model\game.php [ 26 ]
2012-08-01 09:49:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\model\game.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-01 09:57:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\game.php [ 13 ]
2012-08-01 09:57:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\game.php [ 13 ]
--
#0 Z:\home\test1.ru\www\application\classes\controller\game.php(13): Kohana_Core::error_handler()
#1 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#2 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}