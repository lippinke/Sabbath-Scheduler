<?php
	require_once 'config.php';
	require_once 'db_connect.php';

	$db = db_connect();

	echo get_person($db, 1);
	echo get_person($db, 2);

	function get_person($db, $person_id)
	{
		$query = "SELECT *
		          FROM person p
		          WHERE p.id = $person_id";

		$result = mysqli_query($db, $query);

		$rows = array();
		while($record = mysqli_fetch_assoc($result)){
			$rows[] = $record;
		}

		return json_encode($rows);
	}
?>