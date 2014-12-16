<?php
	$dbhost = 'oniddb.cws.oregonstate.edu';
	$dbname = 'bowiec-db';
	$dbuser = 'bowiec-db';
	$dbpass = 'ITU87CwmDVWcS9pf';

	function db_connect()
	{
		$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
		    or die("Error connecting to database server");

		mysql_select_db($dbname, $mysql_handle)
		    or die("Error selecting database: $dbname");	

		return $mysql_handle;
	}
?>