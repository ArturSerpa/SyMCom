<?php
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
define('BD_USER','root');
define('BD_PASS','');
define('BD_NAME', 'db_medico');

mysql_connect('localhost',BD_USER, BD_PASS);
mysql_select_db(BD_NAME);




