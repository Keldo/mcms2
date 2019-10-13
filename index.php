<?php
	require_once('app/autoload.php');
	use database\db;
	use wheel\wheel;
	use microcms\core;
	use microcms\blogs;
	use microcms\settings;
	use sentry\security;
	$db = new db();
	$core = new core();
	$sentry = new security();
	$season = new wheel();
	$seo = new settings();
	$settings = new settings();
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
		case 'microcms':
		$content = 'modules/microcms/main.php';
		break;
		case 'sentry':
		$content = 'modules/sentry/main.php';
		break;
		case 'blogs':
		$content = 'modules/blogs/main.php';
		break;
		case 'cart':
		$content = 'modules/cart/main.php';
		break;
		case 'donate':
		$content = 'modules/donate/main.php';
		break;
		case 'user':
		$content = 'modules/user/main.php';
		break;
		case 'manage':
		$content = 'modules/manage/main.php';
		break;
		case 'login':
		$content = 'modules/manage/login.php';
		break;
		case 'logout':
		$content = 'modules/manage/logout.php';
		break;
		case 'manage':
		$content = 'modules/manage/main.php';
		break;
		default:
		$content = 'modules/main.php';
		break;
	}
	if(file_exists('config/config.php'))
	{
		// We need the Visitors IP Address
		$ip = $sentry->get_real_ip();
		// Is this IP address banned?
		$sentry->check_ban($ip);
		// Ban as needed from threat countries
		$country = $sentry->ip_location($ip);
		echo '<!-- Your current country location: '.$country.'-->';
		$google_verification = $seo->google_verification;
		$google_analytics_id = $seo->google_analytics_id;
		$bing_verification = $seo->bing_verification;
		$facebook = $seo->facebook;
		$twitter = $seo->twitter;
		$instagram = $seo->instagram;
		$youtube = $seo->youtube;
		$site_name = $settings->site_name;
		$base_url = $settings->base_url;
		$site_logo = $settings->site_logo;
		$description = $settings->description;
		$keywords = $settings->keywords;
		// Include the theme's Header
		include 'themes/'.THEME.'/header.php';
		// Error Checking
		$core->check_errors(1);
		// Session Time Out
		//$core->log_timer(900);
		// Set the Desired Time Zone
		date_default_timezone_set(TIMEZONE);
		/*
		 * Prevention Session Injection
		 */
		if (isset($_REQUEST['_SESSION']))
		{
			die("Get lost Muppet!");
		}
		// Include content from each module
		include $content;
		// Include the themes Footer
		include 'themes/'.THEME.'/footer.php';
	}
	else
	{
		echo 'This site is not Installed or Configured Correctly';
	}
?>