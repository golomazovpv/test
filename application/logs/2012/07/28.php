<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-28 00:36:00 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-28 00:36:00 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\application\classes\model\ships.php(11): Kohana_ORM->__construct()
#6 Z:\home\test1.ru\www\application\classes\controller\api.php(11): Model_Ships->saveships('')
#7 [internal function]: Controller_Api->action_shipspos()
#8 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-28 00:36:04 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-28 00:36:04 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\application\classes\model\ships.php(11): Kohana_ORM->__construct()
#6 Z:\home\test1.ru\www\application\classes\controller\api.php(11): Model_Ships->saveships('')
#7 [internal function]: Controller_Api->action_shipspos()
#8 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-28 00:36:42 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-28 00:36:42 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\application\classes\model\ships.php(11): Kohana_ORM->__construct()
#6 Z:\home\test1.ru\www\application\classes\controller\api.php(11): Model_Ships->saveships('')
#7 [internal function]: Controller_Api->action_shipspos()
#8 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-28 07:51:12 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-28 07:51:12 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_games' doesn't exist [ SHOW FULL COLUMNS FROM `orm_games` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_games')
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 Z:\home\test1.ru\www\application\classes\model\ships.php(11): Kohana_ORM->__construct()
#6 Z:\home\test1.ru\www\application\classes\controller\api.php(11): Model_Ships->saveships('11:5:12:5:16:7:...')
#7 [internal function]: Controller_Api->action_shipspos()
#8 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-28 12:18:07 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\views\gamerequestview.php [ 6 ]
2012-07-28 12:18:07 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\views\gamerequestview.php [ 6 ]
--
#0 Z:\home\test1.ru\www\application\views\gamerequestview.php(6): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\test1.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\parentview.php(18): Kohana_View->__toString('Z:\home\test1.r...', Array)
#5 Z:\home\test1.ru\www\system\classes\kohana\view.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Gamerequest))
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-28 12:23:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONCAT_EQUAL, expecting ',' or ';' ~ APPPATH\views\gamerequestview.php [ 6 ]
2012-07-28 12:23:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONCAT_EQUAL, expecting ',' or ';' ~ APPPATH\views\gamerequestview.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Z:\home\test1.r...', Array)
#1 {main}
2012-07-28 12:27:52 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\views\gamerequestview.php [ 6 ]
2012-07-28 12:27:52 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\views\gamerequestview.php [ 6 ]
--
#0 Z:\home\test1.ru\www\application\views\gamerequestview.php(6): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\test1.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\parentview.php(18): Kohana_View->__toString('Z:\home\test1.r...', Array)
#5 Z:\home\test1.ru\www\system\classes\kohana\view.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Gamerequest))
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-28 12:27:54 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\views\gamerequestview.php [ 6 ]
2012-07-28 12:27:54 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\views\gamerequestview.php [ 6 ]
--
#0 Z:\home\test1.ru\www\application\views\gamerequestview.php(6): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\test1.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\parentview.php(18): Kohana_View->__toString('Z:\home\test1.r...', Array)
#5 Z:\home\test1.ru\www\system\classes\kohana\view.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Gamerequest))
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}