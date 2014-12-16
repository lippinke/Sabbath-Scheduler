<?php
	require_once '../php/db_connect.php';
	require_once '../php/people_queries.php';

	$db = db_connect();

	echo get_person($db, 1);

?>