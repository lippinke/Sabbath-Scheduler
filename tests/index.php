<?php
	require_once '../php/db_connect.php';
	require_once '../php/person_api.php';
	require_once '../php/role_api.php';
	require_once '../php/event_api.php';
	require_once '../php/other_api.php';

	$db = db_connect();

	echo "get_person: " . get_person($db, 1)."<br>";
	echo "add_person: " . add_person($db, "keith", "keith", "keith@keith.keith", "keith") ? "true<br>" : "false<br>";
	echo "check_admin: " . check_admin(1, $db)."<br>";
	echo "";
?>