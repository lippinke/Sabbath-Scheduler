<?php
	require_once 'db_config.php';

	function db_connect()
	{
		global $dbhost, $dbuser, $dbpass, $dbname;

		$mysql_handle = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
		    or die('Connect Error (' . mysqli_connect_errno() . ') '
		    . mysqli_connect_error());	

		return $mysql_handle;
	}
?>