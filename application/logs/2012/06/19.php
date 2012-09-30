<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-19 09:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-19 09:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-19 09:23:44 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:23:44 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:24:26 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:24:26 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:24:33 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:24:33 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:25:18 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:25:18 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:25:22 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:25:22 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:26:01 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:26:01 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:26:44 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:26:44 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:27:15 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:27:15 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:28:10 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:28:10 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:28:22 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:28:22 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:29:42 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:29:42 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:30:24 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:30:24 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:30:28 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:30:28 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:32:45 --- ERROR: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 09:32:45 --- STRACE: View_Exception [ 0 ]: The requested view basic could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('basic')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('basic', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('basic')
#3 Z:\home\test1.ru\www\application\classes\mycontroller.php(12): Kohana_Controller_Template->before()
#4 [internal function]: Mycontroller->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Material))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-19 09:36:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_Mterial' not found ~ APPPATH\classes\controller\material.php [ 13 ]
2012-06-19 09:36:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_Mterial' not found ~ APPPATH\classes\controller\material.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 09:37:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `materials` WHERE `category_id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-19 09:37:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'category_id' in 'where clause' [ SELECT * FROM `materials` WHERE `category_id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 Z:\home\test1.ru\www\application\classes\model\material.php(10): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\application\classes\controller\material.php(14): Model_Material->getMatById('6')
#3 [internal function]: Controller_Material->action_category()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Material))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 11:21:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-19 11:21:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-19 11:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/jgjg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-19 11:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/jgjg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 11:24:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/jgjg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-19 11:24:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/jgjg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 11:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-19 11:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-19 11:24:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/jgjg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-19 11:24:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/jgjg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 11:24:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-19 11:24:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-19 11:24:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/jgjg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-19 11:24:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/jgjg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 11:24:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-19 11:24:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-19 11:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/jgjg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-19 11:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/jgjg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 11:24:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-19 11:24:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-19 11:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/jgjg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-19 11:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/jgjg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 11:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-19 11:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-19 11:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hjhh was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-19 11:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hjhh was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 11:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL exceptionhandler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-19 11:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL exceptionhandler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 11:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL exceptionhandler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-19 11:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL exceptionhandler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 11:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-19 11:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-19 11:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ex was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-19 11:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ex was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 11:42:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ex was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-19 11:42:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ex was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 11:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ex was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-19 11:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ex was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 11:48:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-19 11:48:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}