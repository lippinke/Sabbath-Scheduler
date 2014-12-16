<?php
	require_once '../php/db_connect.php';
	require_once '../php/person_api.php';
	require_once '../php/sschedulerAPI.php';

	$db = db_connect();

	echo "get_person: " . get_person($db, 1)."\n";
	echo "add_person: " . add_person($db, "keith", "keith", "keith@keith.keith", "keith") ? 'true' : 'false';
	echo "check_admin: " . check_admin(1, $db)."\n";
	echo ""
?>