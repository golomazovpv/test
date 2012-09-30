<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-14 00:10:16 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2012-09-14 00:10:16 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 Z:\home\test1.ru\www\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 Z:\home\test1.ru\www\modules\auth\classes\kohana\auth.php(57): Kohana_Session::instance('native')
#3 Z:\home\test1.ru\www\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 Z:\home\test1.ru\www\application\classes\securityapi.php(7): Kohana_Auth::instance()
#5 [internal function]: Securityapi->before()
#6 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Api))
#7 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#10 {main}
2012-09-14 19:44:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: my_ships ~ APPPATH\views\gameview.php [ 52 ]
2012-09-14 19:44:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: my_ships ~ APPPATH\views\gameview.php [ 52 ]
--
#0 Z:\home\test1.ru\www\application\views\gameview.php(52): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
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
2012-09-14 20:07:50 --- ERROR: Kohana_Exception [ 0 ]: The turn property does not exist in the Model_Orm_Game class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-09-14 20:07:50 --- STRACE: Kohana_Exception [ 0 ]: The turn property does not exist in the Model_Orm_Game class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('turn', '4')
#1 Z:\home\test1.ru\www\application\classes\model\game.php(290): Kohana_ORM->__set('turn', '4')
#2 Z:\home\test1.ru\www\application\classes\controller\api.php(79): Model_Game->fire('14')
#3 [internal function]: Controller_Api->action_fire()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-14 20:08:11 --- ERROR: Kohana_Exception [ 0 ]: The turn property does not exist in the Model_Orm_Game class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-09-14 20:08:11 --- STRACE: Kohana_Exception [ 0 ]: The turn property does not exist in the Model_Orm_Game class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('turn', '4')
#1 Z:\home\test1.ru\www\application\classes\model\game.php(290): Kohana_ORM->__set('turn', '4')
#2 Z:\home\test1.ru\www\application\classes\controller\api.php(79): Model_Game->fire('42')
#3 [internal function]: Controller_Api->action_fire()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-14 20:08:58 --- ERROR: Kohana_Exception [ 0 ]: The turn property does not exist in the Model_Orm_Game class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-09-14 20:08:58 --- STRACE: Kohana_Exception [ 0 ]: The turn property does not exist in the Model_Orm_Game class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('turn', '4')
#1 Z:\home\test1.ru\www\application\classes\model\game.php(290): Kohana_ORM->__set('turn', '4')
#2 Z:\home\test1.ru\www\application\classes\controller\api.php(79): Model_Game->fire('14')
#3 [internal function]: Controller_Api->action_fire()
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Api))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}