<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-23 09:08:44 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.tree' doesn't exist [ SELECT *
				FROM `tree`
				ORDER BY left_key ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-23 09:08:44 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.tree' doesn't exist [ SELECT *
				FROM `tree`
				ORDER BY left_key ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT *?????FR...', false, Array)
#1 Z:\home\test1.ru\www\application\classes\nstree.php(100): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\application\classes\model\category.php(19): NSTree->getTree()
#3 Z:\home\test1.ru\www\application\classes\controller\admin\main.php(9): Model_Category->getTree()
#4 [internal function]: Controller_Admin_Main->action_index()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-23 09:14:24 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.materials' doesn't exist [ SELECT * FROM `materials` WHERE `cat_id` IS NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-23 09:14:24 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.materials' doesn't exist [ SELECT * FROM `materials` WHERE `cat_id` IS NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 Z:\home\test1.ru\www\application\classes\model\material.php(10): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\application\classes\controller\material.php(14): Model_Material->getMatById(NULL)
#3 [internal function]: Controller_Material->action_category()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Material))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-23 14:50:34 --- ERROR: ErrorException [ 1 ]: Class 'Template' not found ~ APPPATH\classes\controller\index.php [ 3 ]
2012-07-23 14:50:34 --- STRACE: ErrorException [ 1 ]: Class 'Template' not found ~ APPPATH\classes\controller\index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_inde...')
#1 {main}
2012-07-23 15:15:21 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-23 15:15:21 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('index')
#3 Z:\home\test1.ru\www\application\classes\securityaccess.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Securityaccess->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-23 15:27:04 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-23 15:27:04 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('index')
#3 Z:\home\test1.ru\www\application\classes\securityaccess.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Securityaccess->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-23 15:30:12 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-23 15:30:12 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('index')
#3 Z:\home\test1.ru\www\application\classes\securityaccess.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Securityaccess->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-23 15:38:11 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-23 15:38:11 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('index')
#3 Z:\home\test1.ru\www\application\classes\securityaccess.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Securityaccess->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Main))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-23 15:41:59 --- ERROR: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-23 15:41:59 --- STRACE: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('home')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('home', NULL)
#2 Z:\home\test1.ru\www\application\classes\controller\main.php(8): Kohana_View::factory('home')
#3 [internal function]: Controller_Main->action_index()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Main))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-23 15:44:47 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-23 15:44:47 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('index')
#3 Z:\home\test1.ru\www\application\classes\securityaccess.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Securityaccess->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Shipspos))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}