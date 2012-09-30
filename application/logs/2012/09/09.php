<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-09 13:50:51 --- ERROR: ErrorException [ 8 ]: Undefined index:  pole ~ APPPATH\views\gameview.php [ 72 ]
2012-09-09 13:50:51 --- STRACE: ErrorException [ 8 ]: Undefined index:  pole ~ APPPATH\views\gameview.php [ 72 ]
--
#0 Z:\home\test1.ru\www\application\views\gameview.php(72): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
#1 Z:\home\test1.ru\www\system\classes\kohana\view.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 Z:\home\test1.ru\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\application\views\parentview.php(18): Kohana_View->__toString('Z:\home\test1.r...', Array)
#5 Z:\home\test1.ru\www\system\classes\kohana\view.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 Z:\home\test1.ru\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Game))
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-09 13:55:46 --- ERROR: ErrorException [ 8 ]: Undefined index:  ship_id ~ APPPATH\classes\model\game.php [ 127 ]
2012-09-09 13:55:46 --- STRACE: ErrorException [ 8 ]: Undefined index:  ship_id ~ APPPATH\classes\model\game.php [ 127 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(127): Kohana_Core::error_handler(Array)
#1 Z:\home\test1.ru\www\application\classes\model\game.php(59): Model_Game->damage_discover()
#2 Z:\home\test1.ru\www\application\classes\controller\game.php(12): Model_Game->get_my_damage()
#3 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-09 16:04:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'ship.pole' in 'where clause' [ SELECT * FROM `ships`, `misses` WHERE (`ships`.`player_id` = '1' AND `ship`.`pole` = '101') OR (`misses`.`player_id` = '1' AND `misses`.`pole` = '101') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-09 16:04:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'ship.pole' in 'where clause' [ SELECT * FROM `ships`, `misses` WHERE (`ships`.`player_id` = '1' AND `ship`.`pole` = '101') OR (`misses`.`player_id` = '1' AND `misses`.`pole` = '101') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 Z:\home\test1.ru\www\application\classes\model\game.php(186): Kohana_Database_Query->execute()
#2 Z:\home\test1.ru\www\application\classes\controller\api.php(75): Model_Game->fire('101')
#3 [internal function]: Controller_Api->action_game()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-09 23:27:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\model\game.php [ 188 ]
2012-09-09 23:27:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\model\game.php [ 188 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('Model_Game')
#1 {main}