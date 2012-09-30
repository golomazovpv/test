<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-12 18:21:14 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\gameview.php [ 56 ]
2012-09-12 18:21:14 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\gameview.php [ 56 ]
--
#0 Z:\home\test1.ru\www\application\views\gameview.php(56): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
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
2012-09-12 18:22:27 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\gameview.php [ 56 ]
2012-09-12 18:22:27 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\gameview.php [ 56 ]
--
#0 Z:\home\test1.ru\www\application\views\gameview.php(56): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
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
2012-09-12 18:27:29 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\gameview.php [ 72 ]
2012-09-12 18:27:29 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\gameview.php [ 72 ]
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
2012-09-12 18:27:32 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\gameview.php [ 72 ]
2012-09-12 18:27:32 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\gameview.php [ 72 ]
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
2012-09-12 18:28:29 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\gameview.php [ 72 ]
2012-09-12 18:28:29 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\gameview.php [ 72 ]
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
2012-09-12 18:30:13 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Game::__construct(), called in Z:\home\test1.ru\www\application\classes\controller\api.php on line 75 and defined ~ APPPATH\classes\model\game.php [ 9 ]
2012-09-12 18:30:13 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Game::__construct(), called in Z:\home\test1.ru\www\application\classes\controller\api.php on line 75 and defined ~ APPPATH\classes\model\game.php [ 9 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(9): Kohana_Core::error_handler(Object(Model_User))
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(75): Model_Game->__construct()
#2 [internal function]: Controller_Api->action_fire(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 18:31:08 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Game::__construct(), called in Z:\home\test1.ru\www\application\classes\controller\api.php on line 75 and defined ~ APPPATH\classes\model\game.php [ 9 ]
2012-09-12 18:31:08 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Game::__construct(), called in Z:\home\test1.ru\www\application\classes\controller\api.php on line 75 and defined ~ APPPATH\classes\model\game.php [ 9 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(9): Kohana_Core::error_handler(Object(Model_User))
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(75): Model_Game->__construct()
#2 [internal function]: Controller_Api->action_fire(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 18:32:15 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Game::__construct(), called in Z:\home\test1.ru\www\application\classes\controller\api.php on line 75 and defined ~ APPPATH\classes\model\game.php [ 9 ]
2012-09-12 18:32:15 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Game::__construct(), called in Z:\home\test1.ru\www\application\classes\controller\api.php on line 75 and defined ~ APPPATH\classes\model\game.php [ 9 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(9): Kohana_Core::error_handler(Object(Model_User))
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(75): Model_Game->__construct()
#2 [internal function]: Controller_Api->action_fire(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 18:33:21 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Game::__construct(), called in Z:\home\test1.ru\www\application\classes\controller\api.php on line 75 and defined ~ APPPATH\classes\model\game.php [ 9 ]
2012-09-12 18:33:21 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Game::__construct(), called in Z:\home\test1.ru\www\application\classes\controller\api.php on line 75 and defined ~ APPPATH\classes\model\game.php [ 9 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(9): Kohana_Core::error_handler(Object(Model_User))
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(75): Model_Game->__construct()
#2 [internal function]: Controller_Api->action_fire(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-12 18:35:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  destroy ~ APPPATH\views\gameview.php [ 64 ]
2012-09-12 18:35:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  destroy ~ APPPATH\views\gameview.php [ 64 ]
--
#0 Z:\home\test1.ru\www\application\views\gameview.php(64): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
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
2012-09-12 18:35:43 --- ERROR: ErrorException [ 8 ]: Undefined index:  destroy ~ APPPATH\views\gameview.php [ 64 ]
2012-09-12 18:35:43 --- STRACE: ErrorException [ 8 ]: Undefined index:  destroy ~ APPPATH\views\gameview.php [ 64 ]
--
#0 Z:\home\test1.ru\www\application\views\gameview.php(64): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
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
2012-09-12 18:37:22 --- ERROR: ErrorException [ 8 ]: Undefined index:  destroy ~ APPPATH\views\gameview.php [ 64 ]
2012-09-12 18:37:22 --- STRACE: ErrorException [ 8 ]: Undefined index:  destroy ~ APPPATH\views\gameview.php [ 64 ]
--
#0 Z:\home\test1.ru\www\application\views\gameview.php(64): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
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
2012-09-12 18:42:10 --- ERROR: ErrorException [ 8 ]: Undefined index:  destroy ~ APPPATH\views\gameview.php [ 64 ]
2012-09-12 18:42:10 --- STRACE: ErrorException [ 8 ]: Undefined index:  destroy ~ APPPATH\views\gameview.php [ 64 ]
--
#0 Z:\home\test1.ru\www\application\views\gameview.php(64): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
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
2012-09-12 18:46:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 178 ]
2012-09-12 18:46:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\game.php [ 178 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(178): Kohana_Core::error_handler(Array)
#1 Z:\home\test1.ru\www\application\classes\model\game.php(77): Model_Game->damage_discover(false)
#2 Z:\home\test1.ru\www\application\classes\controller\game.php(12): Model_Game->get_my_damage()
#3 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-12 18:46:21 --- ERROR: ErrorException [ 8 ]: Undefined index:  destroy ~ APPPATH\views\gameview.php [ 64 ]
2012-09-12 18:46:21 --- STRACE: ErrorException [ 8 ]: Undefined index:  destroy ~ APPPATH\views\gameview.php [ 64 ]
--
#0 Z:\home\test1.ru\www\application\views\gameview.php(64): Kohana_Core::error_handler('Z:\home\test1.r...', Array)
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
2012-09-12 21:39:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  pole ~ APPPATH\classes\model\game.php [ 151 ]
2012-09-12 21:39:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  pole ~ APPPATH\classes\model\game.php [ 151 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\game.php(151): Kohana_Core::error_handler(false)
#1 Z:\home\test1.ru\www\application\classes\controller\game.php(15): Model_Game->get_opp_misses()
#2 [internal function]: Controller_Game->action_index(Object(Controller_Game))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}