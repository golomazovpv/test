<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-25 01:09:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\views\gamerequestview.php [ 3 ]
2012-07-25 01:09:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH\views\gamerequestview.php [ 3 ]
--
#0 Z:\home\test1.ru\www\application\views\gamerequestview.php(3): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
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
2012-07-25 09:27:03 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ APPPATH\classes\controller\gamerequest.php [ 14 ]
2012-07-25 09:27:03 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ APPPATH\classes\controller\gamerequest.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}