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
		             // "password" => $password
		            );

		return insert_row($db, "person", $data);
	}

	function check_admin($person_id, $db){
		if (!is_int($person_id)){
			return;
		}
		$data = mysqli_query($db, "SELECT congregation FROM admin
			WHERE person = $person_id");
		return result_to_json($data);
	}

	//Validate user logins
	function validate_login($email, $password, $db){
		if (!is_int($person_id)){
			return;
		}
		$data = mysqli_query($db, "SELECT id FROM person
			WHERE email = \"$email\" AND password = \"$password\"");
		return result_to_json($data);
	}
?>