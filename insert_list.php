<?php

	include("db.php");

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$db->insertList($name);
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>