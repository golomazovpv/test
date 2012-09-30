<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-21 01:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 01:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 03:01:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 03:01:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 03:05:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
2012-04-21 03:05:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-21 03:16:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 03:16:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 03:44:11 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-04-21 03:44:11 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\route.php(392): Kohana_Core::error_handler('#^admin(?:(?P</...', 'admin', NULL)
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(567): Kohana_Route->matches('admin')
#2 Z:\home\test1.ru\www\system\classes\kohana\request.php(785): Kohana_Request::process_uri('admin', Array)
#3 Z:\home\test1.ru\www\system\classes\kohana\request.php(198): Kohana_Request->__construct('/admin/', NULL)
#4 Z:\home\test1.ru\www\index.php(108): Kohana_Request::factory()
#5 {main}
2012-04-21 03:50:38 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-04-21 03:50:38 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\route.php(392): Kohana_Core::error_handler('#^admin(?:(?P</...', 'admin', NULL)
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(567): Kohana_Route->matches('admin')
#2 Z:\home\test1.ru\www\system\classes\kohana\request.php(785): Kohana_Request::process_uri('admin', Array)
#3 Z:\home\test1.ru\www\system\classes\kohana\request.php(198): Kohana_Request->__construct('/admin/', NULL)
#4 Z:\home\test1.ru\www\index.php(108): Kohana_Request::factory()
#5 {main}
2012-04-21 03:50:39 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-04-21 03:50:39 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\route.php(392): Kohana_Core::error_handler('#^admin(?:(?P</...', 'favicon.ico', NULL)
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(567): Kohana_Route->matches('favicon.ico')
#2 Z:\home\test1.ru\www\system\classes\kohana\request.php(785): Kohana_Request::process_uri('favicon.ico', Array)
#3 Z:\home\test1.ru\www\system\classes\kohana\request.php(198): Kohana_Request->__construct('/favicon.ico', NULL)
#4 Z:\home\test1.ru\www\index.php(108): Kohana_Request::factory()
#5 {main}
2012-04-21 03:54:13 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-04-21 03:54:13 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\route.php(392): Kohana_Core::error_handler('#^admin(?:(?P</...', 'admin', NULL)
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(567): Kohana_Route->matches('admin')
#2 Z:\home\test1.ru\www\system\classes\kohana\request.php(785): Kohana_Request::process_uri('admin', Array)
#3 Z:\home\test1.ru\www\system\classes\kohana\request.php(198): Kohana_Request->__construct('/admin/', NULL)
#4 Z:\home\test1.ru\www\index.php(108): Kohana_Request::factory()
#5 {main}
2012-04-21 03:54:16 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-04-21 03:54:16 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\route.php(392): Kohana_Core::error_handler('#^admin(?:(?P</...', 'admin', NULL)
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(567): Kohana_Route->matches('admin')
#2 Z:\home\test1.ru\www\system\classes\kohana\request.php(785): Kohana_Request::process_uri('admin', Array)
#3 Z:\home\test1.ru\www\system\classes\kohana\request.php(198): Kohana_Request->__construct('/admin', NULL)
#4 Z:\home\test1.ru\www\index.php(108): Kohana_Request::factory()
#5 {main}
2012-04-21 03:54:22 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-04-21 03:54:22 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\route.php(392): Kohana_Core::error_handler('#^admin(?:(?P</...', '', NULL)
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(567): Kohana_Route->matches('')
#2 Z:\home\test1.ru\www\system\classes\kohana\request.php(785): Kohana_Request::process_uri('', Array)
#3 Z:\home\test1.ru\www\system\classes\kohana\request.php(198): Kohana_Request->__construct('', NULL)
#4 Z:\home\test1.ru\www\index.php(108): Kohana_Request::factory()
#5 {main}
2012-04-21 03:55:39 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-04-21 03:55:39 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\route.php(392): Kohana_Core::error_handler('#^admin(?:(?P</...', '', NULL)
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(567): Kohana_Route->matches('')
#2 Z:\home\test1.ru\www\system\classes\kohana\request.php(785): Kohana_Request::process_uri('', Array)
#3 Z:\home\test1.ru\www\system\classes\kohana\request.php(198): Kohana_Request->__construct('', NULL)
#4 Z:\home\test1.ru\www\index.php(108): Kohana_Request::factory()
#5 {main}
2012-04-21 03:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-21 03:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-21 04:46:32 --- ERROR: View_Exception [ 0 ]: The requested view recoverpass could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-21 04:46:32 --- STRACE: View_Exception [ 0 ]: The requested view recoverpass could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('recoverpass')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('recoverpass', NULL)
#2 Z:\home\test1.ru\www\application\classes\controller\auth.php(76): Kohana_View::factory('recoverpass')
#3 [internal function]: Controller_Auth->action_recoverpass()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-21 04:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 04:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 04:47:00 --- ERROR: View_Exception [ 0 ]: The requested view recoverpass could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-21 04:47:00 --- STRACE: View_Exception [ 0 ]: The requested view recoverpass could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('recoverpass')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('recoverpass', NULL)
#2 Z:\home\test1.ru\www\application\classes\controller\auth.php(76): Kohana_View::factory('recoverpass')
#3 [internal function]: Controller_Auth->action_recoverpass()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-21 04:47:27 --- ERROR: View_Exception [ 0 ]: The requested view recoverpass could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-04-21 04:47:27 --- STRACE: View_Exception [ 0 ]: The requested view recoverpass could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('recoverpass')
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(30): Kohana_View->__construct('recoverpass', NULL)
#2 Z:\home\test1.ru\www\application\classes\controller\auth.php(76): Kohana_View::factory('recoverpass')
#3 [internal function]: Controller_Auth->action_recoverpass()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-21 04:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 04:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 04:48:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 04:48:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 04:49:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 04:49:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 04:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 04:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 04:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 04:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 04:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 04:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 04:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 04:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 04:49:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 04:49:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 04:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 04:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 04:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 04:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 05:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/checkcode/$genpass was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-04-21 05:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/checkcode/$genpass was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-21 09:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 09:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 09:55:11 --- ERROR: ErrorException [ 8 ]: Use of undefined constant email - assumed 'email' ~ APPPATH\classes\controller\auth.php [ 81 ]
2012-04-21 09:55:11 --- STRACE: ErrorException [ 8 ]: Use of undefined constant email - assumed 'email' ~ APPPATH\classes\controller\auth.php [ 81 ]
--
#0 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Kohana_Core::error_handler()
#1 [internal function]: Controller_Auth->action_recoverpass(Object(Controller_Auth))
#2 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-21 10:01:40 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:01:40 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:03:46 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:03:46 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:14:11 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:14:11 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:17:34 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:17:34 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 10:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 10:18:42 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:18:42 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 10:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 10:19:14 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:19:14 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:19:44 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:19:44 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 10:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 10:20:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 10:20:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 10:22:57 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:22:57 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 10:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 10:27:34 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:27:34 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:33:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 10:33:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 10:33:16 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:33:16 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('admin')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:37:58 --- ERROR: ErrorException [ 1 ]: Call to undefined function  var_damp() ~ APPPATH\classes\model\register.php [ 48 ]
2012-04-21 10:37:58 --- STRACE: ErrorException [ 1 ]: Call to undefined function  var_damp() ~ APPPATH\classes\model\register.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('admin')
#1 {main}
2012-04-21 10:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 10:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 10:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 10:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 10:40:28 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:40:28 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:42:42 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:42:42 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:47:36 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:47:36 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:49:22 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:49:22 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 10:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 10:49:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 10:49:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 10:52:03 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-04-21 10:52:03 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 Z:\home\test1.ru\www\application\classes\model\register.php(58): Kohana_ORM->save()
#3 Z:\home\test1.ru\www\application\classes\controller\auth.php(81): Model_Register->getnewpass('golomazovpv@gma...')
#4 [internal function]: Controller_Auth->action_recoverpass()
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-04-21 10:58:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 10:58:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 15:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 15:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 15:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 15:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 15:32:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 15:32:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 15:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 15:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-21 15:44:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-21 15:44:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}