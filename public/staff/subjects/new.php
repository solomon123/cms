<?php require_once('../../../private/initialize.php');

$urlTest = $_GET['test'] ?? '';

if ($urlTest == '404') {
	//error_404();
	//echo "400 Error";
} elseif($urlTest == '500') {
	//error_500();
	//echo "500 Error";
}elseif ($urlTest == 'redirect') {
	redirect_to(url_set('/staff/subjects/index.php'));
} 
?>
<?php $page_title = 'Create Subject'; ?>
<?php $content_title = 'Create Content'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject new">
    <h1>Create Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/create.php'); ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" name="submit" value="Create Subject" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>