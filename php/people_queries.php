<?php
	require_once 'functions.php';

	function get_person($db, $person_id)
	{
		$query = "SELECT *
		          FROM person p
		          WHERE p.id = $person_id";

		$result = mysqli_query($db, $query);

		return '{"person":' . result_to_json($result) . '}';
	}

	function add_person($db, $first, $last, $email, $password)
	{
		$data = array(
		             "first"    => $first,
		             "last"     => $last,
		             "email"    => $email,
		             "password" => $password
		            );

		return insert_row($db, "person", $data);
	}
?>