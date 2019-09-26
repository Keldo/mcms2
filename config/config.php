<?php

/*
 * Site Meta Data
 * For html markeup
 * Header/Footer
*/
define('SITENAME', '');
define('BASEURL', '');
define('DESCRIPTION', '');
define('KEYWORDS', '');
define('LOGO', 'logo.jpg');
define('TIMEZONE', 'America/New_York');
define('THEME', 'core');
define('HEADER_IMG', 'logo.jpg');
define('GOOGLE_VERIFICATION', '');


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
 * If you have the news module running
 * it will turn your news into RSS for new readers
 * @ Boolean (1 = yes, 0 = no)
*/
define('RSS', 0);
