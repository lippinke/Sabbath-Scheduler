<?php
	require_once 'config.php';

	function db_connect()
	{
		$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
		    or die("Error connecting to database server");

		mysql_select_db($dbname, $mysql_handle)
		    or die("Error selecting database: $dbname");	

		return $mysql_handle;
	}
?>