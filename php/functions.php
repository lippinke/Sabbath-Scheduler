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
		$data_keys = implode(",", array_keys($data));
		$data_values = "'" . implode("','", array_values($data)) . "'";

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
?>