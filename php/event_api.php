<?php
	//Returns attributes of a given event
	//based on an 
	function get_event($event_id, $db){
		if (!is_int($event_id)){
			return;
		}
		$data = mysqli_query($db,
			"SELECT * FROM event
			WHERE id = $role_id");
		return result_to_json($data);
	}

	//Check if a person is free during a 
	//period of time
	function check_free($person_id, $start, $end, $db){
		if (!is_int($person_id)){
			return;
		}
		//get all of a person's event's
		$data1 = mysqli_query($db, "SELECT * FROM event
			WHERE id IN (
				SELECT event FROM event_role
				WHERE id IN (SELECT eventrole FROM person_role
					WHERE person = $person_id");
		$data3 = mysqli_query($db, "SELECT * FROM event_role
			WHERE id IN (SELECT eventrole FROM person_role
				WHERE person = $person_id");

		$events = array();
		$eventRoles = array();
		while ($row = mysql_fetch_array($data1)){
			$events[] = $row;
		}
		while ($row = mysqli_fetch_array($data3)){
			$eventRoles[] = $row;
		}
		mysqli_free_result($data1);
		mysqli_free_result($data3);

		for ($i = 0; $i < count($eventRoles); $i += 1){
			if (!($start > $eventRoles[$i]["end"])){
				if (!($eventRoles[$i]["start"] > $end)){
					return False;
				}
			}
		}
		return True;
				//if any collide with the desired time, return false
		//else return true
	}

	//Check if a person is an admin


	//Create and event based on some info
	function add_event($db, $name, $loc_id, $start_date, $end_date)
	{
		$data = array(
		             "name"       => $name,
		             "loc_id"     => $loc_id,
		             "start_date" => $start_date,
		             "end_date"   => $end_date
		            );

		return insert_row($db, "person", $data);
	}
?>