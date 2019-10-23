<?php

	include("db.php");

	if (isset($_POST['name'])) {
		$id = $_GET['updateid'];
		$name = $_POST['name'];
		$db->updateList($id, $name);
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>