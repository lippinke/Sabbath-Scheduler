<?php
/*
	A tentative version of the API.
	Not tested yet.
*/

//Returns an array of person_id's (ints) 
//corresponding to people who can fulfil 
//a given role
// function get_role_person($role_id, $db){
// 	if (!is_int($role_id)){
// 		return;
// 	}
// 	$people = array();
// 	$data = mysqli_query($db,
// 		"SELECT * FROM person
// 		WHERE id IN (
// 			SELECT person FROM can_do
// 			WHERE role = $role)"
	
// 	return result_to_json($data);
// }

//Returns an array of attributes 
//corresponding to the given person_id
// function get_person($person_id, $db){
// 	if (!is_int($person_id)){
// 		return;
// 	}
// 	$data = mysqli_query($db,
// 		"SELECT * FROM person
// 		WHERE id = $person_id");
// 	mysqli_free_result($data);
// 	return result_to_json($data);
// }

//Returns the attributes of a given role 
//based on a role_id
// function get_role($role_id, $db){
// 	if (!is_int($role_id)){
// 		return;
// 	}
// 	$data = mysqli_query($db,
// 		"SELECT * FROM role
// 		WHERE id = $role_id");
// 	return result_to_json($data);
// }

//Returns attributes of a given event
//based on an 
// function get_event($event_id, $db){
// 	if (!is_int($event_id)){
// 		return;
// 	}
// 	$data = mysqli_query($db,
// 		"SELECT * FROM event
// 		WHERE id = $role_id");
// 	return result_to_json($data);
// }

//Returns an array of roles
//specified by the specified template


// function get_template($template_id, $db){
// 	//Do this one when I have an updated schema
// 	if (!is_int($template_id)){
// 		return;
// 	}
// 	$roles = array();
// 	$data2 = mysqli_query($db, "SELECT * FROM role
// 		WHERE id IN (SELECT role_id FROM template
// 			WHERE template_id = $template_id");
// 	return result_to_json($data2);
// }

// //Returns info about the congregation 
// //based on the congregation id
// function get_congregation($cong_id, $db){
// 	if (!is_int($cong_id)){
// 		return;
// 	}
// 	$data = mysqli_query($db,
// 		"SELECT * FROM congregation
// 		WHERE id = $cong_id");
// 	return result_to_json($data);
// }

// //Check if a person is free during a 
// //period of time
// function check_free($person_id, $start, $end, $db){
// 	if (!is_int($person_id)){
// 		return;
// 	}
// 	//get all of a person's event's
// 	$data1 = mysqli_query($db, "SELECT * FROM event
// 		WHERE id IN (
// 			SELECT event FROM event_role
// 			WHERE id IN (SELECT eventrole FROM person_role
// 				WHERE person = $person_id");
// 	$data3 = mysqli_query($db, "SELECT * FROM event_role
// 		WHERE id IN (SELECT eventrole FROM person_role
// 			WHERE person = $person_id");

// 	$events = array();
// 	$eventRoles = array();
// 	while ($row = mysql_fetch_array($data1)){
// 		$events[] = $row;
// 	}
// 	while ($row = mysqli_fetch_array($data3)){
// 		$eventRoles[] = $row;
// 	}
// 	mysqli_free_result($data1);
// 	mysqli_free_result($data3);

// 	for ($i = 0; $i < count($eventRoles); $i += 1){
// 		if (!($start > $eventRoles[$i]["end"])){
// 			if (!($eventRoles[$i]["start"] > $end)){
// 				return False;
// 			}
// 		}
// 	}
// 	return True;
// 			//if any collide with the desired time, return false
// 	//else return true
// }

// //Check if a person is an admin


// //Create and event based on some info
// function add_event($db, $name, $loc_id, $start_date, $end_date)
// {
// 	$data = array(
// 	             "name"       => $name,
// 	             "loc_id"     => $loc_id,
// 	             "start_date" => $start_date,
// 	             "end_date"   => $end_date
// 	            );

// 	return insert_row($db, "person", $data);
// }

// //Validate user logins
// function validate_login($email, $password, $db){
// 	if (!is_int($person_id)){
// 		return;
// 	}
// 	$data = mysqli_query($db, "SELECT id FROM person
// 		WHERE email = \"$email\" AND password = \"$password\"");
// 	return result_to_json($data);
// }

// //Add a location
// function add_location($db, $name, $address)
// {
// 	$data = array(
// 	             "name"    => $name,
// 	             "address" => $address
// 	            );

// 	return insert_row($db, "location", $data);
// }


?>
