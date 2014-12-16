<?php
	function result_to_json($result)
	{
		$rows = array();
		while($record = mysqli_fetch_assoc($result)){
			$rows[] = $record;
		}

		return json_encode($rows);
	}
?>