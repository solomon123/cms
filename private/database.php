<?php
require_once 'db_credentials.php';

/**
* DATABASE CONNECTION
*/
function db_connect()
{
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
	return $conn;
}

/**
* DISCONNECTION DATABASE 
*/
function db_disconnect($value)
{
	if (isset($value)) {
		mysqli_close($value);
	}
	
}

/**
* Check Database connection is smooth.
*/
function confirm_db_connect($value)
{
	if (mysqli_connect_errno($value)) {
		$msg = "Database Connection Faild ";
		$msg .=mysqli_connect_error();
		$msg .=" (" . mysqli_connect_errno() . ")";
		exit($msg);
	}
}

/**
* Check Database Resultset is smooth.
*/
function confirm_result_set($value)
{
	if(!$value){
		exit("Database Query Error!");
	}
}