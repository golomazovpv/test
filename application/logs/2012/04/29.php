<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-29 15:04:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-29 15:04:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-04-29 15:04:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-29 15:04:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-29 15:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-29 15:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-29 15:05:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fdg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-29 15:05:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fdg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\test1.ru\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\test1.ru\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\test1.ru\www\index.php(109): Kohana_Request->execute()
#3 {main}