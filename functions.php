<?php
	function result_to_json($result)
	{
		$rows = array();
		while($record = mysqli_fetch_assoc($result)){
			$rows[] = $record;
		}

		return json_encode($rows);
	}

	function insert_row($db, $table, $data)
	{
		$data_keys = implode(array_keys($data));
		$data_values = implode(array_values($data));

		$query = "INSERT
		          INTO $table ($data_keys)
		          VALUES ($data_values)";

		// may return result obj
		if(mysqli_query($db, $query) == TRUE){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	function get_person($db, $person_id)
	{
		$query = "SELECT *
		          FROM person p
		          WHERE p.id = $person_id";

		$result = mysqli_query($db, $query);

		return result_to_json($result);
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