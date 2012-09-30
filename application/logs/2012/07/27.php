<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-27 03:55:06 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-27 03:55:06 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('index')
#3 Z:\home\test1.ru\www\application\classes\mycontrolleradmin.php(13): Kohana_Controller_Template->before()
#4 [internal function]: Mycontrolleradmin->before()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-27 07:25:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  HTTP_REFERER ~ APPPATH\classes\controller\gamerequest.php [ 14 ]
2012-07-27 07:25:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  HTTP_REFERER ~ APPPATH\classes\controller\gamerequest.php [ 14 ]
--
#0 Z:\home\test1.ru\www\application\classes\controller\gamerequest.php(14): Kohana_Core::error_handler()
#1 [internal function]: Controller_Gamerequest->action_index(Object(Controller_Gamerequest))
#2 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-27 07:27:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  HTTP_REFERER ~ APPPATH\classes\controller\gamerequest.php [ 14 ]
2012-07-27 07:27:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  HTTP_REFERER ~ APPPATH\classes\controller\gamerequest.php [ 14 ]
--
#0 Z:\home\test1.ru\www\application\classes\controller\gamerequest.php(14): Kohana_Core::error_handler()
#1 [internal function]: Controller_Gamerequest->action_index(Object(Controller_Gamerequest))
#2 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-27 07:28:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  HTTP_REFERER ~ APPPATH\classes\controller\gamerequest.php [ 14 ]
2012-07-27 07:28:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  HTTP_REFERER ~ APPPATH\classes\controller\gamerequest.php [ 14 ]
--
#0 Z:\home\test1.ru\www\application\classes\controller\gamerequest.php(14): Kohana_Core::error_handler()
#1 [internal function]: Controller_Gamerequest->action_index(Object(Controller_Gamerequest))
#2 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}