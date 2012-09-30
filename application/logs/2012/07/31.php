<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-31 07:33:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Gamerequest::update() ~ APPPATH\classes\controller\api.php [ 53 ]
2012-07-31 07:33:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Gamerequest::update() ~ APPPATH\classes\controller\api.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 07:33:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Gamerequest::update() ~ APPPATH\classes\controller\api.php [ 53 ]
2012-07-31 07:33:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Gamerequest::update() ~ APPPATH\classes\controller\api.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 07:42:05 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-31 07:42:05 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(78): Kohana_ORM::factory('Orm_Game')
#7 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(57): Model_Gamerequest->start('1')
#8 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc('{"action":"star...')
#9 [internal function]: Controller_Api->action_gamerequest()
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#11 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-31 07:45:18 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-31 07:45:18 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(78): Kohana_ORM::factory('Orm_Game')
#7 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(57): Model_Gamerequest->start('1')
#8 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc('{"action":"star...')
#9 [internal function]: Controller_Api->action_gamerequest()
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#11 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-31 07:45:20 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-31 07:45:20 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(78): Kohana_ORM::factory('Orm_Game')
#7 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(57): Model_Gamerequest->start('1')
#8 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc('{"action":"star...')
#9 [internal function]: Controller_Api->action_gamerequest()
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#11 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-31 07:45:20 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-31 07:45:20 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(78): Kohana_ORM::factory('Orm_Game')
#7 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(57): Model_Gamerequest->start('1')
#8 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc('{"action":"star...')
#9 [internal function]: Controller_Api->action_gamerequest()
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#11 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-31 07:45:21 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-31 07:45:21 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(78): Kohana_ORM::factory('Orm_Game')
#7 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(57): Model_Gamerequest->start('1')
#8 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc('{"action":"star...')
#9 [internal function]: Controller_Api->action_gamerequest()
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#11 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-31 07:47:00 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-31 07:47:00 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(80): Kohana_ORM::factory('Orm_Game')
#7 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(57): Model_Gamerequest->start('1')
#8 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc('{"action":"star...')
#9 [internal function]: Controller_Api->action_gamerequest()
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#11 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-31 07:47:02 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-31 07:47:02 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(80): Kohana_ORM::factory('Orm_Game')
#7 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(57): Model_Gamerequest->start('1')
#8 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc('{"action":"star...')
#9 [internal function]: Controller_Api->action_gamerequest()
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#11 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-31 07:47:02 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-31 07:47:02 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(80): Kohana_ORM::factory('Orm_Game')
#7 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(57): Model_Gamerequest->start('1')
#8 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc('{"action":"star...')
#9 [internal function]: Controller_Api->action_gamerequest()
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#11 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-31 07:47:03 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-31 07:47:03 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(80): Kohana_ORM::factory('Orm_Game')
#7 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(57): Model_Gamerequest->start('1')
#8 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc('{"action":"star...')
#9 [internal function]: Controller_Api->action_gamerequest()
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#11 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-31 07:50:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\model\gamerequest.php [ 66 ]
2012-07-31 07:50:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\model\gamerequest.php [ 66 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(66): Kohana_Core::error_handler('{"action":"star...')
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc()
#2 [internal function]: Controller_Api->action_gamerequest(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-31 08:13:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\model\gamerequest.php [ 66 ]
2012-07-31 08:13:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\model\gamerequest.php [ 66 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(66): Kohana_Core::error_handler('{"action":"star...')
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc()
#2 [internal function]: Controller_Api->action_gamerequest(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-31 08:13:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\model\gamerequest.php [ 66 ]
2012-07-31 08:13:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\model\gamerequest.php [ 66 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(66): Kohana_Core::error_handler('{"action":"star...')
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc()
#2 [internal function]: Controller_Api->action_gamerequest(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-31 08:13:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\model\gamerequest.php [ 66 ]
2012-07-31 08:13:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\model\gamerequest.php [ 66 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(66): Kohana_Core::error_handler('{"action":"star...')
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc()
#2 [internal function]: Controller_Api->action_gamerequest(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}