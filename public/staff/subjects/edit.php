<?php require_once('../../../private/initialize.php');

/*$urlTest = $_GET['test'] ?? '';

if ($urlTest == '404') {
	//error_404();
	//echo "400 Error";
} elseif($urlTest == '500') {
	//error_500();
	//echo "500 Error";
}elseif ($urlTest == 'redirect') {
	redirect_to(url_set('/staff/subjects/index.php'));
} */

//Grab the id that help to GET url passing
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $record_set = find_subject_by_id($id);

}

if (is_post_request()) {
  $menu_name = $_POST['menu_name'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';

 /* echo "Menu Name: {$menu_name} <br>";
  echo "Position: {$position} <br>";
  echo "Visible: {$visible} <br>";*/
}


?>
<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/edit.php?id='.$id); ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo $record_set['menu_name']; ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="<?php echo $record_set['position'] ?>"><?php echo $record_set['position']; ?></option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="<?php echo ($record_set['visible']); ?>" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" name="submit" value="Edit Subject" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>