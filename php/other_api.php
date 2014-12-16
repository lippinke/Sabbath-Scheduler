<?php
	//Returns an array of roles
	//specified by the specified template


	function get_template($template_id, $db){
		//Do this one when I have an updated schema
		if (!is_int($template_id)){
			return;
		}
		$roles = array();
		$data2 = mysqli_query($db, "SELECT * FROM role
			WHERE id IN (SELECT role_id FROM template
				WHERE template_id = $template_id");
		return result_to_json($data2);
	}

	//Returns info about the congregation 
	//based on the congregation id
	function get_congregation($cong_id, $db){
		if (!is_int($cong_id)){
			return;
		}
		$data = mysqli_query($db,
			"SELECT * FROM congregation
			WHERE id = $cong_id");
		return result_to_json($data);
	}

	//Add a location
	function add_location($db, $name, $address)
	{
		$data = array(
		             "name"    => $name,
		             "address" => $address
		            );

		return insert_row($db, "location", $data);
	}
?>