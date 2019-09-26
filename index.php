<?php
	require_once('app/autoload.php');
	
	use database\db;
	use microcms\core;
	use sentry\security;
        
        // Instantiate the Database Class
	$db = new db();

        // Instantiate the Core Class
	$core = new core();

        // Instantiate the Sentry Class
	$sentry = new security();
	
	// Function operatives
	if (isset($_GET['p']))
	{
		$d = $_GET['p'];
	} 
	elseif (isset($_POST['p']))
	{ // Forms
		$d = $_POST['p'];
	}
	else
	{
		$d = NULL;
	}

	// The Page Switch
	switch($d)
	{
		case 'error':
		$content = 'modules/error/main.php';
		break;
	
		default:
		$content = 'modules/main.php';
		break;
	}
	
	/*
	 * Prevention Session Injection
	*/
	if (isset($_REQUEST['_SESSION'])) die("Get lost Muppet!");

        /*
	 * Check to ensure that the config file exist, if not, exit
	 * In the future, this file will be created during install
	*/
	if(file_exists('config/config.php'))
	{
		// We need the Visitors IP Address
		$ip = $sentry->get_real_ip();
		
		// Is this IP address banned?
		$sentry->check_ban($ip);
		
		// Ban as needed from threat countries
		$country = $sentry->ip_location($ip);
		echo '<!-- Your current country location: '.$country.'-->';
		
		// Include the Current theme header
		include 'themes/'.THEME.'/header.php';

		// Error Checking
		$core->check_errors(1);

		// Set the Desired Time Zone
		date_default_timezone_set(TIMEZONE);
		
		// Load the Content
		include $content;
		
		// Include the current theme footer
		include 'themes/'.THEME.'/footer.php';
	}
	else
	{
		echo 'This site is not Installed or Configured Correctly';
	}
