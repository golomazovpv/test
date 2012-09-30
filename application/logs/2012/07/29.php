<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-29 12:47:57 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\model\gamerequest.php [ 50 ]
2012-07-29 12:47:57 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\model\gamerequest.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('{"id":"3","acti...')
#1 {main}
2012-07-29 12:50:41 --- ERROR: ErrorException [ 1 ]: Call to undefined function  agree() ~ APPPATH\classes\model\gamerequest.php [ 52 ]
2012-07-29 12:50:41 --- STRACE: ErrorException [ 1 ]: Call to undefined function  agree() ~ APPPATH\classes\model\gamerequest.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('{"id":"3","acti...')
#1 {main}
2012-07-29 12:54:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_Orm/gamerequest' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-29 12:54:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_Orm/gamerequest' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('orm/gamerequest')
#1 {main}
2012-07-29 12:55:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: start ~ APPPATH\classes\model\gamerequest.php [ 61 ]
2012-07-29 12:55:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: start ~ APPPATH\classes\model\gamerequest.php [ 61 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\gamerequest.php(61): Kohana_Core::error_handler('{"id":"3","acti...')
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(22): Model_Gamerequest->ajaxproc()
#2 [internal function]: Controller_Api->action_gamerequest(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-29 13:00:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_EXIT ~ APPPATH\classes\model\gamerequest.php [ 149 ]
2012-07-29 13:00:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_EXIT ~ APPPATH\classes\model\gamerequest.php [ 149 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Gamereque...')
#1 {main}
2012-07-29 23:43:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH\views\gamerequestview.php [ 7 ]
2012-07-29 23:43:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH\views\gamerequestview.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Z:\home\test1.r...', Array)
#1 {main}