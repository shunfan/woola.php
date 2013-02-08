<?php

// DB options
define('DB_NAME', 'YOUR_DB_NAME');
define('DB_USER', 'YOUR_DB_USER');
define('DB_PASSWORD', 'YOUR_DB_PASSWORD');
define('DB_HOST', 'localhost');
define('DB_TABLE', 'redirect');

// Connect to database
mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_NAME);
$DB_TABLE = DB_TABLE;

// Site information
$site_name = YOUR_SITE_NAME;
$site_url = YOUR_SITE_URL; // NO http://, EXAMPLE: woo.la, no slash at the end of the domain.
$site_introduction = YOUR_SITE_INTRODUCTION // For meta in the site HTML code.

?>