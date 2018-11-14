<?php 
require_once('../../../private/initialize.php'); 
$page_title = "Pages only";
$content_title = "Pages content";
/*$pages = [
	['id'=>'1', 'position'=>'1', 'visible'=>'1', 'name'=>'MuluTube'],
	['id'=>'2', 'position'=>'2', 'visible'=>'1', 'name'=>'History'],
	['id'=>'3', 'position'=>'3', 'visible'=>'1', 'name'=>'Leadrship'],
	['id'=>'4', 'position'=>'4', 'visible'=>'1', 'name'=>'Contact Us']
];*/

$page_set = find_all_pages();
?>

<?php include SHARED_PATH . '/header.php' ?>
	<div id="content"> 
		<div class="Main-menu">
			<h1>Main Menu</h1>
	
		</div>
		<div id="content">
			<div class="actions"><a href="#" class="action">Create New Page</a></div>
			<table class="list">
					<tr>
						<th>ID</th>
						<th>Subject ID</th>
						<th>Position</th>
						<th>Visible</th>
						<th>Name</th>
						<th>Content</th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
					</tr>
			
			<?php 
			while ($value = mysqli_fetch_assoc($page_set)) {
				# Display the list of pages
				?>
					<tr>
						<td><?php echo h($value['id']); ?></td>
						<td><?php echo h($value['subject_id']); ?></td>
						<td><?php echo h($value['position']); ?></td>
						<td><?php echo $value['visible'] == 1 ? 'True' : 'False'; ?></td>
						<td><?php echo $value['menu_name']; ?></td>
						<td><?php echo $value['content']; ?></td>
						<td><a href="<?php echo url_for('staff/pages/view.php?id='. h(raw_u($value['id']))); ?>"><?php echo "View"?></a></td>
						<td><a href=""><?php echo "Edit"?></a></td>
						<td><a href=""><?php echo "Delete"?></a></td>
					</tr>
				<?php
			}
			 ?>
			 </table>
			 <?php mysqli_free_result($page_set); ?>
		</div>
	</div>
<?php include SHARED_PATH . '/footer.php' ?>