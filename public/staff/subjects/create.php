<?php
require_once('../../../private/initialize.php');
if (is_post_request()) {
	$menu_name = h($_POST['menu_name']) ?? '';
	$position = h($_POST['position']) ?? '';
	$visible = h($_POST['visible']) ?? '';

	/*echo "Menu Name: {$menu_name} <br>";
	echo "Position: {$position} <br>";
	echo "Visible: {$visible} <br>";*/

	if(insert_subject($menu_name, $position, $visible)){
		$new_id = mysqli_insert_id($db);
		redirect_to(url_for('/staff/subjects/show.php?id='.$new_id));
	}
	


} else {
	redirect_to(url_for('/staff/subjects/index.php'));
}

