<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-11 14:00:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_STRING ~ APPPATH\classes\model\game.php [ 212 ]
2012-09-11 14:00:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting T_STRING ~ APPPATH\classes\model\game.php [ 212 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Game')
#1 {main}
2012-09-11 22:36:35 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_Game::get_my_damage(), called in Z:\home\test1.ru\www\application\classes\controller\game.php on line 12 and defined ~ APPPATH\classes\model\game.php [ 49 ]
2012-09-11 22:36:35 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_Game::get_my_damage(), called in Z:\home\test1.ru\www\application\classes\controller\game.php on line 12 and defined ~ APPPATH\classes\model\game.php [ 49 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(49): Kohana_Core::error_handler()
#1 Z:\home\test1.ru\www\application\classes\controller\game.php(12): Model_Game->get_my_damage()
#2 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-11 22:45:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 173 ]
2012-09-11 22:45:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 173 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(173): Kohana_Core::error_handler(Array)
#1 Z:\home\test1.ru\www\application\classes\model\game.php(68): Model_Game->damage_discover(true)
#2 Z:\home\test1.ru\www\application\classes\controller\api.php(94): Model_Game->get_my_damage()
#3 [internal function]: Controller_Api->action_upgame(Object(Controller_Api))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-11 22:45:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 173 ]
2012-09-11 22:45:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 173 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(173): Kohana_Core::error_handler(Array)
#1 Z:\home\test1.ru\www\application\classes\model\game.php(68): Model_Game->damage_discover(true)
#2 Z:\home\test1.ru\www\application\classes\controller\api.php(94): Model_Game->get_my_damage()
#3 [internal function]: Controller_Api->action_upgame(Object(Controller_Api))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-11 22:48:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 175 ]
2012-09-11 22:48:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 175 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(175): Kohana_Core::error_handler(Array)
#1 Z:\home\test1.ru\www\application\classes\model\game.php(68): Model_Game->damage_discover(true)
#2 Z:\home\test1.ru\www\application\classes\controller\api.php(94): Model_Game->get_my_damage()
#3 [internal function]: Controller_Api->action_upgame(Object(Controller_Api))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-11 22:51:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 176 ]
2012-09-11 22:51:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 176 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(176): Kohana_Core::error_handler(Array)
#1 Z:\home\test1.ru\www\application\classes\model\game.php(68): Model_Game->damage_discover(true)
#2 Z:\home\test1.ru\www\application\classes\controller\api.php(94): Model_Game->get_my_damage()
#3 [internal function]: Controller_Api->action_upgame(Object(Controller_Api))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-11 22:51:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 176 ]
2012-09-11 22:51:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 176 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(176): Kohana_Core::error_handler(Array)
#1 Z:\home\test1.ru\www\application\classes\model\game.php(68): Model_Game->damage_discover(true)
#2 Z:\home\test1.ru\www\application\classes\controller\api.php(94): Model_Game->get_my_damage()
#3 [internal function]: Controller_Api->action_upgame(Object(Controller_Api))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-11 22:51:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 177 ]
2012-09-11 22:51:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 177 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(177): Kohana_Core::error_handler(Array)
#1 Z:\home\test1.ru\www\application\classes\model\game.php(68): Model_Game->damage_discover(true)
#2 Z:\home\test1.ru\www\application\classes\controller\api.php(94): Model_Game->get_my_damage()
#3 [internal function]: Controller_Api->action_upgame(Object(Controller_Api))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-11 22:53:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_EXIT ~ APPPATH\classes\model\game.php [ 162 ]
2012-09-11 22:53:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_EXIT ~ APPPATH\classes\model\game.php [ 162 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Game')
#1 {main}