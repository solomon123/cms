<?php require_once'../../../private/initialize.php'; ?>
<?php
//$id = isset($_GET['id']) ? $_GET['id'] : '2';  // PHP < 7.0 
$id = $_GET['id'] ?? '1'; //PHP > 7.0 and above Called thrnary conjuction
//$id = $_GET['id']; //This will raise exception if the id is not passed.

$subject = find_subject_by_id($id);

?>
<?php include SHARED_PATH . '/header.php'; ?>
<div class="subject show">
	<h1>Subject: <?php echo h($subject['menu_name']); ?> </h1>
		<div class="attributes">
			<dl>
				<dt><?php echo "Name"; ?></dt>
				<dd><?php echo h($subject['menu_name']); ?></dd>
			</dl>
			<dl>
				<dt><?php echo "Position"; ?></dt>
				<dd><?php echo h($subject['position']); ?></dd>
			</dl>
			<dl>
				<dt><?php echo "Visible"; ?></dt>
				<dd><?php echo h($subject['visible'] == '1' ? 'True' : 'False'); ?></dd>
			</dl>
		</div>
	
</div>
<?php include SHARED_PATH . '/footer.php' ?>

