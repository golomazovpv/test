<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-02 05:26:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\controller\game.php [ 14 ]
2012-08-02 05:26:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\controller\game.php [ 14 ]
--
#0 Z:\home\test1.ru\www\application\classes\controller\game.php(14): Kohana_Core::error_handler()
#1 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#2 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#6 {main}