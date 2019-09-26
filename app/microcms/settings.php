<?php

namespace microcms;

// We need the database
use database\db;

class settings
{
	/*
	 * Get the sites information
	 * @ Header
	 * @ Footer
	 * From config/config.php
	*/
	function __construct()
	{
		$db = new db();
		
		/*
		 * We need the bare minimals from the Database
		 * For the sites header and SEO
		*/
		
		/*
		 * Not used at the moment
		$query = "SELECT * FROM site_settings";
		$result = $db->query($query);
		$row = $db->fetch_assoc($result);
		$this->sitename = $row['site_name'];
		$this->baseurl = $row['base_url'];
		$this->description = $row['description'];
		$this->keywords = $row['keywords'];
		$this->theme = $row['theme'];
		$this->timezone = $row['timezone'];
		*/
	}
}
