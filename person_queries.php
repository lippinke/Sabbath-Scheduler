<?php
	function get_person($db, $person_id)
	{
		$query = "SELECT *
		          FROM person p
		          WHERE p.id = $person_id";

		$result = mysqli_query($db, $query);

		return result_to_json($result);
	}
?>