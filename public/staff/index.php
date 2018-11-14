<?php 
require_once('../../private/initialize.php'); 
$page_title = "Staff only";
$content_title = "Staff content";

?>

<?php include SHARED_PATH . '/header.php' ?>
	<div id="content"> <h1><?php echo h($content_title); ?></h1>
		<div class="Main-menu">
			<h1>Main Menu</h1>
			<ul>
				<li><a href="<?php echo url_for('staff/subjects/index.php'); ?>">Subject</a></li>
				<li><a href="<?php echo url_for('staff/pages/index.php'); ?>">Page</a></li>
				<li><a href="<?php echo url_for('staff/subjects/new.php'); ?>">New</a></li>
				
			</ul>
		</div>
	</div>
<?php include SHARED_PATH . '/footer.php' ?>