<?php
require_once '../../../private/initialize.php';
$id = $_GET['id'] ?? '1';
?>
<a href="<?php echo url_for('staff/pages/index.php')?>"> &lt;&lt; Back to page</a></br>
<?php
echo raw_u($id);