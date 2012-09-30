<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-09 11:43:05 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-09 11:43:05 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('index')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('index', NULL)
#2 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('index')
#3 [internal function]: Kohana_Controller_Template->before()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-09 11:43:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-09 11:43:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-09 11:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-09 11:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-09 11:47:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-09 11:47:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-09 11:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-09 11:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-09 11:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-09 11:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: application/views/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-09 11:49:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-09 11:49:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}