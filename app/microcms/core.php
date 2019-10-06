<?php

namespace microcms;

// We need the database
use database\db;

class core
{
	public function check_errors($number)
	{
		if($number == 1)
		{
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
		}
	}
	
	public function is_ssl()
	{
		if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
		    // SSL connection
		    return true;
		}
		else
		{
			return false;
		}
	}
	
	public function redirect_to($new_location)
	{
		header("Location: " . $new_location);
		exit;
	}
	
	// Checking email addresses
	public function VerifyEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	// Build the initial admin account
	public function set_admin($secure_pass,$name,$email)
	{
		$db = new db();
		$query = "INSERT INTO users (password, your_name, email, admin) VALUES ('$secure_pass', '$name', '$email', '1')";
		$result = $db->query($query);
		return $result;
	}
	
	public function log_timer($time)
	{
		$login_session_duration = $time; 
		$current_time = time(); 
		if(isset($_SESSION['loggedin_time']) and isset($_SESSION["user_id"]))
		{  
			if(((time() - $_SESSION['loggedin_time']) > $login_session_duration))
			{ 
				return true; 
				$this->redirect_to("/logout");
			} 
		}
		return false;
	}
	
	public function check_version()
	{

		// Data
		$db = new db();
		$query = "SELECT * from version";
		$result = $db->query($query);

		$row = $db->fetch_assoc($result);
		$major = $row['major'];
		$minor = $row['minor'];
		$increment = $row['increment'];
		$codename = $row['codename'];
		$local_version = ''.$major.'.'.$minor.'.'.$increment.'';

		$remote_version = file_get_contents("https://mcms.devworksosi.tech/version.php");

		// If remote and local do not match
		if ($local_version !== $remote_version)
		{
			$this->msg = '<strong>Your Version - '.$local_version.', is OUT OF DATE, v.'.$remote_version.' is available for <a href="https://mcms.devworksosi.tech/" target="_blank">download</strong></a>';
		}
		if ($local_version === $remote_version)
		{
			$this->msg = '<strong>Your Version - '.$local_version.', is UP TO DATE!</strong>';
		}
		if ($local_version > $remote_version)
		{
			$this->msg = '<strong>Your Version - '.$local_version.', is a Development Version</strong>';
		}
		
		// Return the message
		return $this->msg;
	}
}
