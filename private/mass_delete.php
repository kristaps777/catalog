<?php
// When the user presses the delete button, this script is executed.
// I call upon class Delete and the appropriate child function responsible for deleting marked products from DB.
require_once('../private/classes/Delete.php');
$delete_selected = new Delete();
$delete_selected->massDelete();
?>
