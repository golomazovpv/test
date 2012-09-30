<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-19 10:38:49 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-19 10:38:49 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\test1.ru\www\application\classes\model\register.php(7): Kohana_ORM->__construct()
#7 Z:\home\test1.ru\www\application\classes\controller\auth.php(48): Model_Register->reg('golomazopv@gmai...', 'admin', '1234', 1)
#8 [internal function]: Controller_Auth->action_reg()
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-19 10:42:08 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-19 10:42:08 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\test1.ru\www\application\classes\model\register.php(7): Kohana_ORM->__construct()
#7 Z:\home\test1.ru\www\application\classes\controller\auth.php(48): Model_Register->reg('golomazopv@gmai...', 'admin', '1234', 1)
#8 [internal function]: Controller_Auth->action_reg()
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-19 10:45:16 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-19 10:45:16 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\test1.ru\www\application\classes\model\register.php(7): Kohana_ORM->__construct()
#7 Z:\home\test1.ru\www\application\classes\controller\auth.php(48): Model_Register->reg('golomazopv@gmai...', 'admin', '123456', 1)
#8 [internal function]: Controller_Auth->action_reg()
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-19 10:45:17 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-19 10:45:17 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\test1.ru\www\application\classes\model\register.php(7): Kohana_ORM->__construct()
#7 Z:\home\test1.ru\www\application\classes\controller\auth.php(48): Model_Register->reg('golomazopv@gmai...', 'admin', '123456', 1)
#8 [internal function]: Controller_Auth->action_reg()
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-19 10:45:28 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-19 10:45:28 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\test1.ru\www\application\classes\model\register.php(7): Kohana_ORM->__construct()
#7 Z:\home\test1.ru\www\application\classes\controller\auth.php(48): Model_Register->reg('golomazopv@gmai...', 'admin', '', 1)
#8 [internal function]: Controller_Auth->action_reg()
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-19 10:50:11 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-19 10:50:11 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\test1.ru\www\application\classes\model\register.php(7): Kohana_ORM->__construct()
#7 Z:\home\test1.ru\www\application\classes\controller\auth.php(48): Model_Register->reg('golomazopv@gmai...', 'admin', '123', 1)
#8 [internal function]: Controller_Auth->action_reg()
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-19 10:51:39 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-19 10:51:39 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\test1.ru\www\application\classes\model\register.php(7): Kohana_ORM->__construct()
#7 Z:\home\test1.ru\www\application\classes\controller\auth.php(48): Model_Register->reg('golomazopv@gmai...', 'admin', '', 1)
#8 [internal function]: Controller_Auth->action_reg()
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-19 10:52:48 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-19 10:52:48 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\test1.ru\www\application\classes\model\register.php(7): Kohana_ORM->__construct()
#7 Z:\home\test1.ru\www\application\classes\controller\auth.php(48): Model_Register->reg('golomazopv@gmai...', 'admin', '1234', 1)
#8 [internal function]: Controller_Auth->action_reg()
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-19 10:54:18 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-07-19 10:54:18 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\test1.ru\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#3 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 Z:\home\test1.ru\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 Z:\home\test1.ru\www\application\classes\model\register.php(7): Kohana_ORM->__construct()
#7 Z:\home\test1.ru\www\application\classes\controller\auth.php(48): Model_Register->reg('golomazopv@gmai...', 'admin', '123', 1)
#8 [internal function]: Controller_Auth->action_reg()
#9 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#10 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-19 12:05:21 --- ERROR: ErrorException [ 1 ]: Call to undefined function  definer() ~ APPPATH\classes\controller\api.php [ 1 ]
2012-07-19 12:05:21 --- STRACE: ErrorException [ 1 ]: Call to undefined function  definer() ~ APPPATH\classes\controller\api.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_api')
#1 {main}
2012-07-19 12:06:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
2012-07-19 12:06:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('')
#1 {main}
2012-07-19 12:07:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
2012-07-19 12:07:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('')
#1 {main}
2012-07-19 12:07:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
2012-07-19 12:07:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('19:3:22:1:26:2:...')
#1 {main}
2012-07-19 13:19:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
2012-07-19 13:19:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('12:1:14:2:16:4:...')
#1 {main}
2012-07-19 13:20:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
2012-07-19 13:20:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('12:1:14:2:16:4:...')
#1 {main}
2012-07-19 13:27:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
2012-07-19 13:27:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('12:1:14:2:16:4:...')
#1 {main}
2012-07-19 13:33:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
2012-07-19 13:33:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('12:1:14:2:16:4:...')
#1 {main}
2012-07-19 13:34:14 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Addrole as array ~ APPPATH\classes\model\shipspos.php [ 13 ]
2012-07-19 13:34:14 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Addrole as array ~ APPPATH\classes\model\shipspos.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('12:1:14:2:16:4:...')
#1 {main}
2012-07-19 13:44:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
2012-07-19 13:44:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('12:1:14:2:16:4:...')
#1 {main}
2012-07-19 13:44:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
2012-07-19 13:44:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('12:1:14:2:16:4:...')
#1 {main}
2012-07-19 13:44:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
2012-07-19 13:44:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_Game' not found ~ APPPATH\classes\model\shipspos.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('12:1:14:2:16:4:...')
#1 {main}
2012-07-19 13:46:25 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Game as array ~ APPPATH\classes\model\shipspos.php [ 13 ]
2012-07-19 13:46:25 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Game as array ~ APPPATH\classes\model\shipspos.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('12:1:14:2:16:4:...')
#1 {main}
2012-07-19 14:29:16 --- ERROR: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH\classes\model\shipspos.php [ 13 ]
2012-07-19 14:29:16 --- STRACE: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH\classes\model\shipspos.php [ 13 ]
--
#0 Z:\home\test1.ru\www\application\classes\model\shipspos.php(13): Kohana_Core::error_handler('')
#1 Z:\home\test1.ru\www\application\classes\controller\api.php(11): Model_Shipspos->saveships()
#2 [internal function]: Controller_Api->action_shipspos(Object(Controller_Api))
#3 Z:\home\test1.ru\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#4 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#6 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#7 {main}