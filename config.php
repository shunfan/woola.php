<?php

// db options
define('DB_NAME', 'YOUR_DB_NAME');
define('DB_USER', 'YOUR_DB_USER');
define('DB_PASSWORD', 'YOUR_DB_PASSWORD');
define('DB_HOST', 'localhost');
define('DB_TABLE', 'redirect');

// connect to database
mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_NAME);
$DB_TABLE = DB_TABLE;

?>