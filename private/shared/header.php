<?php 

	if (!isset($page_title)){
		 $page_title = 'For Staff Only';
		}
	if (!isset($content_title)){
		 $content_title = 'Staff Only Content';
		}
		
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GBI: <?php echo h($page_title); ?></title>
	<link rel="stylesheet" href= "<?php echo url_for('/css/staff.css'); ?>" >
</head>
<body>
	<header>
		<h1>GBI - <?php echo h($content_title); ?></h1>
	</header>
	<navigation>
		<ul>
			<li><a href="<?php echo url_for ('/staff/index.php'); ?>">Menu</a></li>
		</ul>
	</navigation>