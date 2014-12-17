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

	// role_ids is an array
	function add_template($db, $name, $role_ids)
	{
		if(!insert_row($db, "congregation", array("name" => $name))){
			return FALSE;
		}

		// TODO: this...
		// $template_id = 1;

		foreach($role_ids as $role_id){
			$row_data = array(
			                  "role" => $role_id,
			                  "template_desc" => $template_id
			                 );

			if(!insert_row($db, "template", $row_data)){
				return FALSE;
			}
		}

		return TRUE;
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

	function add_congregation($db, $name, $location_id, $start_date, $end_date)
	{
		$data = array(
		             "name"       => $name,
		             "location"   => $location_id,
		             "start_date" => $start_date,
		             "end_date"   => $end_date,
		            );

		return insert_row($db, "congregation", $data);
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