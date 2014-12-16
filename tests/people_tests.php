<?php
	echo "1";
	require_once '../php/db_connect.php';
	echo "1";

	require_once '../php/person_api.php';
	echo "1";

	// require_once '../php/sschedulerAPI.php';

	$db = db_connect();
	echo "1";


	echo get_person($db, 1).;
	echo "1";
	// echo add_person($db, "keith", "keith", "keith@keith.keith", "keith");
	echo "1";

?>