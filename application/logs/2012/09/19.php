<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-19 10:52:25 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2012-09-19 10:52:25 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
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