<?php
	//Returns an array of person_id's (ints) 
	//corresponding to people who can fulfil 
	//a given role
	function get_role_person($role_id, $db){
		if (!is_int($role_id)){
			return;
		}
		$people = array();
		$data = mysqli_query($db,
			"SELECT * FROM person
			WHERE id IN (
				SELECT person FROM can_do
				WHERE role = $role)"
		
		return result_to_json($data);
	}

	//Returns the attributes of a given role 
	//based on a role_id
	function get_role($role_id, $db){
		if (!is_int($role_id)){
			return;
		}
		$data = mysqli_query($db,
			"SELECT * FROM role
			WHERE id = $role_id");
		return result_to_json($data);
	}
?>