<?php
	require_once '../php/db_connect.php';
	require_once '../php/people_queries.php';
	require_once '../php/sschedulerAPI.php';

	$db = db_connect();

	echo get_person($db, 1)."\n";

	echo add_person($db, "keith", "keith", "keith@keith.keith", "keith");

?>