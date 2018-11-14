<?php


/**
* SELECT * FROM SUBJECTS TABLE.
*/
function find_all_subjects()
{
	// Declaring Database connection globally
	global $db;

	$sql = "SELECT * FROM subjects ";
	$sql .= "ORDER BY position ASC";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result;
}


/**
* SELECT * FROM SUBJECTS BY ID.
*/
function find_subject_by_id($id)
{
	// Declaring Database connection globally
	global $db;

	$sql = "SELECT * FROM subjects ";
	$sql .="WHERE id='".$id."'";
	$result_set = mysqli_query($db, $sql);

	$subject = mysqli_fetch_assoc($result_set);
	mysqli_free_result($result_set);
	return $subject;
}

/**
* INSERT INTO SUBJECTS.
*/
function insert_subject($menu_name, $position, $visible)
{
	// Declaring Database connection globally
	global $db;

	$sql = "INSERT INTO subjects ";
	$sql .= "(menu_name, position, visible) ";
	$sql .= "VALUES (";
	$sql .= "'" . $menu_name ."', ";
	$sql .= "'" . $position ."', ";
	$sql .= "'" . $visible ."' ";
	$sql .= ")";

	$result = mysqli_query($db, $sql);
	
	if($result){
		return true;
	}else{
		echo mysqli_error($db); //displays the insert error
		db_disconnect($db);
		exit;
	}
}

/**
* DELETE FROM SUBJECTS BY ID.
*/
function delete_from_subject_by_id($id)
{
	// Declaring Database connection globally
	global $db;

	$sql = "DELETE FROM subjects ";
	$sql .= "WHERE id='". $id ."'";

	$result_set = mysqli_query($db, $sql); 
	return $result_set;
}

/**
* SELECT * FROM PAGES TABLE.
*/
function find_all_pages()
{
	// Declaring Database connection globally
	global $db;

	$sql = "SELECT * FROM pages ";
	$sql .="ORDER BY position ASC";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result;
	
}

