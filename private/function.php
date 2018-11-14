<?php
/**
*   This automatically set our url
*/
function url_for($value)
{
	
	if($value[0] !='/'){
		$value = '/'. $value;
	}
	return WWW_ROOT . $value;
}

/**
*   encode url to urlencode ##Older way of encoding url uses + to replace space
*/
function u($value='')
{
	return urlencode($value);
}

/**
*  encode url using rawurlencode
*/
function raw_u($value='')
{
	return rawurlencode($value);
}

/**
* #Handling Cross Side Scripting problem by converting HTML charachters 
*/
function h($value = '')
{
	return htmlspecialchars($value);
}

/**
* Handling error 404 ## *** I don't know why error handlings are not working *** ##
*/
function error_404()
{
	header($_SERVER["SERVER_PROTOCOL"] . " Error 404: page not found!");
	exit;
}

/**
* Handling error 500 ## *** I don't know why error handlings are not working *** ##
*/
function error_500()
{
	header($_SERVER["SERVER_PROTOCOL"] . " Error 500: Internal Server Problem");
	exit;
}

/**
* Redirect to a different page
*/
function redirect_to($value){
		header("Location: {$value}");
	exit;
}

/**
* I dentifing the request method POST
*/
function is_post_request()
{
	# Checking for the post request;
	return $_SERVER['REQUEST_METHOD'] == 'POST';
}

/**
* Identifing the request method GET
*/
function is_get_request()
{
	# Checking for the post request;
	return $_SERVER['REQUEST_METHOD'] == 'GET';
}
