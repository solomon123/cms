
<?php
require_once('../../../private/initialize.php');

if($id = $_GET['id']){
	if(delete_from_subject_by_id($id)){
		echo "Record ID = ". $id . " Deleted!";
		redirect_to(url_for('/staff/subjects/index.php'));
	}
}else{
	echo "Please provide the id to be deleted record!";	
}

