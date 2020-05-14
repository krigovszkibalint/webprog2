<?php if(!isset($_SESSION['permission']) || $_SESSION['permission'] != 2) : ?>
	<h1>Page access is forbidden!</h1>
<?php else : ?>
<?php endif; ?>
<?php
require_once DATABASE_CONTROLLER;
if(($_GET['P'] = 'delete_user') && (isset($_GET['id'])))
{
	$sql = executeDML("DELETE FROM users WHERE id = ?", [$_GET['id']]);
	$sql2 = executeDML("DELETE FROM images WHERE uploaded_by = ?", [$_GET['id']]);
	$sql3 = executeDML("DELETE FROM posts WHERE uploaded_by = ?", [$_GET['id']]);
	header('Location: index.php?P=user_list');
}
?>