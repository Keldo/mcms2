<?php

/*
 * Site Meta Data
 * For html markeup
 * Header/Footer
*/
define('SITENAME', 'DW Pool');
define('BASEURL', 'https://www.dwpool.org');
define('DESCRIPTION', 'Bitcoin Node and Mining Pool');
define('KEYWORDS', 'crypro,currency,currencies,bitcoin,ethereum');
define('LOGO', 'dw.jpg');
define('TIMEZONE', 'America/New_York');
define('THEME', 'core');
define('HEADER_IMG', 'dw_pool_header.jpg');
define('GOOGLE_VERIFICATION', '6mDmmyHNzGH4anEZk_JUI-nnuL53iog2mOU9GD_Fmuw');
define('OS_STATUS', 'Dev');


/*
 * Database Settings
 * @ User
 * @ Password
 * @ Database
 * @ Host
*/
define('DBUSER', '');
define('DBPASS', '');
define('DBNAME', '');
define('DBHOST', 'localhost');

$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

/*
 * Social Media
 * @ FACEBOOK
 * @ TWITTER
*/
define('FACEBOOK', '');
define('TWITTER', '');

/*
 * Sindication (RSS News Feed)
 * If you have the new module running
 * it will turn your news into RSS for new readers
 * @ Boolean (1 = yes, 0 = no)
*/
define('RSS', 0);