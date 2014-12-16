<?php
/*
	A tentative version of the API.
*/

//Returns an array of person_id's (ints) 
//corresponding to people who can fulfil 
//a given role
function get_role_person($role_id, $db){

}

//Returns an array of attributes 
//corresponding to the given person_id
function get_person($person_id, $db){

}

//Returns the attributes of a given role 
//based on a role_id
function get_role($role_id, $db){

}

//Returns attributes of a given event
//based on an 
function get_event($event_id, $db){

}

//Returns an array of role_descriptions 
//specified by the specified template
function get_template($template_id, $db){

}

//Returns info about the congregation 
//based on the congregation id
function get_congregation($cong_id, $db){

}

//Check if a person is free during a 
//period of time
function check_free($person_id, $db){

}

//Check if a person is an admin
function check_admin($person_id, $db){

}

//Create and event based on some info
function add_event($name, $date, $time, $loc_id, $db){

}

//Validate user logins
function validate_login($email, $password, $db){

}

//Add a location
function add_loc($name, $address){

}

//Add a person
function add_person($first_name, $last_name, $email, $password, $roles, $db){

}
?>
