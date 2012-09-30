<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-02 03:50:31 --- ERROR: ErrorException [ 8 ]: Use of undefined constant G - assumed 'G' ~ APPPATH\classes\model\game.php [ 23 ]
2012-09-02 03:50:31 --- STRACE: ErrorException [ 8 ]: Use of undefined constant G - assumed 'G' ~ APPPATH\classes\model\game.php [ 23 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(23): Kohana_Core::error_handler()
#1 Z:\home\test1.ru\www\application\classes\controller\game.php(11): Model_Game->get_my_ships()
#2 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-02 12:23:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column '$id' in 'where clause' [ SELECT pole
                      FROM ships
                      WHERE player_id = $id ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-02 12:23:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column '$id' in 'where clause' [ SELECT pole
                      FROM ships
                      WHERE player_id = $id ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(31): Kohana_Database_MySQL->query(1, 'SELECT pole??  ...')
#1 Z:\home\test1.ru\www\application\classes\controller\game.php(11): Model_Game->get_my_ships()
#2 [internal function]: Controller_Game->action_index()
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Game))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-02 12:32:42 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\model\game.php [ 16 ]
2012-09-02 12:32:42 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\model\game.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler(Object(Model_User))
#1 {main}
2012-09-02 12:45:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: his ~ APPPATH\classes\model\game.php [ 47 ]
2012-09-02 12:45:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: his ~ APPPATH\classes\model\game.php [ 47 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(47): Kohana_Core::error_handler()
#1 Z:\home\test1.ru\www\application\classes\controller\game.php(12): Model_Game->get_opp_ships()
#2 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-02 12:46:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: his ~ APPPATH\classes\model\game.php [ 47 ]
2012-09-02 12:46:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: his ~ APPPATH\classes\model\game.php [ 47 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(47): Kohana_Core::error_handler()
#1 Z:\home\test1.ru\www\application\classes\controller\game.php(12): Model_Game->get_opp_ships()
#2 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-02 12:46:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: his ~ APPPATH\classes\model\game.php [ 47 ]
2012-09-02 12:46:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: his ~ APPPATH\classes\model\game.php [ 47 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(47): Kohana_Core::error_handler()
#1 Z:\home\test1.ru\www\application\classes\controller\game.php(12): Model_Game->get_opp_ships()
#2 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-02 12:52:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: his ~ APPPATH\classes\model\game.php [ 45 ]
2012-09-02 12:52:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: his ~ APPPATH\classes\model\game.php [ 45 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(45): Kohana_Core::error_handler()
#1 Z:\home\test1.ru\www\application\classes\controller\game.php(12): Model_Game->get_opp_ships()
#2 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-02 13:28:27 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\game.php [ 24 ]
2012-09-02 13:28:27 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\game.php [ 24 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(24): Kohana_Core::error_handler(Object(Model_User))
#1 Z:\home\test1.ru\www\application\classes\controller\game.php(10): Model_Game->__construct()
#2 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-02 13:30:08 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\game.php [ 26 ]
2012-09-02 13:30:08 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\game.php [ 26 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(26): Kohana_Core::error_handler(Object(Model_User))
#1 Z:\home\test1.ru\www\application\classes\controller\game.php(10): Model_Game->__construct()
#2 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-02 13:30:41 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\game.php [ 27 ]
2012-09-02 13:30:41 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\model\game.php [ 27 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(27): Kohana_Core::error_handler(Object(Model_User))
#1 Z:\home\test1.ru\www\application\classes\controller\game.php(10): Model_Game->__construct()
#2 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}