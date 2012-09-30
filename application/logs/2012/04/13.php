<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-13 03:22:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 03:22:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 03:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 03:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 03:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 03:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 03:26:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 03:26:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 03:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 03:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 06:04:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 06:04:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 06:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/index1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-04-13 06:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/index1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-13 09:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 09:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 09:00:12 --- ERROR: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-13 09:00:12 --- STRACE: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('test')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('test', Array)
#2 Z:\home\test1.ru\www\application\classes\controller\welcome.php(11): Kohana_View::factory('test', Array)
#3 [internal function]: Controller_Welcome->action_index()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-13 09:00:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 09:00:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 09:00:19 --- ERROR: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-13 09:00:19 --- STRACE: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('test')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('test', Array)
#2 Z:\home\test1.ru\www\application\classes\controller\welcome.php(11): Kohana_View::factory('test', Array)
#3 [internal function]: Controller_Welcome->action_index()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-13 09:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 09:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 09:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 09:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 09:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 09:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 09:32:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\index.php [ 23 ]
2012-04-13 09:32:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\index.php [ 23 ]
--
#0 Z:\home\test1.ru\www\application\views\index.php(23): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Welcome))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-13 09:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 09:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 09:34:51 --- ERROR: ErrorException [ 1 ]: Call to undefined function  test() ~ APPPATH\classes\controller\welcome.php [ 10 ]
2012-04-13 09:34:51 --- STRACE: ErrorException [ 1 ]: Call to undefined function  test() ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-13 09:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 09:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 09:35:10 --- ERROR: ErrorException [ 1 ]: Call to undefined function  action_test() ~ APPPATH\classes\controller\welcome.php [ 10 ]
2012-04-13 09:35:10 --- STRACE: ErrorException [ 1 ]: Call to undefined function  action_test() ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-13 09:35:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 09:35:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 09:36:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 09:36:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 09:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 09:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-13 14:26:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-13 14:26:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}